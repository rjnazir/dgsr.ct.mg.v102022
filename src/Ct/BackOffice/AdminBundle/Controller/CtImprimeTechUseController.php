<?php

namespace Ct\BackOffice\AdminBundle\Controller;

use Ct\Service\MetierManagerBundle\Utils\ServiceName;
use Ct\Service\MetierManagerBundle\Form\CtImprimeTechUseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Ct\Service\MetierManagerBundle\Entity\CtImprimeTechUse;
use Ct\Service\MetierManagerBundle\Utils\RoleName;
use Symfony\Component\HttpFoundation\Response;

class CtImprimeTechUseController extends Controller
{

    /**
     * Afficher toutes les utilisations d'imprimé technique
     * @return Render page
     */
    public function indexAction()
    {
        // Récupérer manager
        $_itu_manager = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);

        // Récupérer tout les provinces et les centres
        $_province_manager  = $this->get(ServiceName::SRV_METIER_PROVINCE);
        $_centre_manager    = $this->get(ServiceName::SRV_METIER_CENTRE);
        $_centres   = $_centre_manager->getAllCtCentreByOrder(array('id' => 'ASC'));
        $_provinces = $_province_manager->getAllCtProvinceByOrder(array('id' => 'ASC'));
        
        // Récupérer tout les imprimés tech
        $_itu_list = $_itu_manager->getAllCtImprimeTechUsedByCentre();
        return $this->render('AdminBundle:CtImprimeTechUse:index.html.twig', array(
            'itu_listes' => $_itu_list,
            'centres' => $_centres,
            'provinces' => $_provinces,
        ));
    }

    /**
     * Mise à jour utlisation IT multiples
     * @param Request $_request requête
     * @return Render page
     */
    public function newAction(Request $_request)
    {
        $_user_connected= $this->container->get('security.token_storage')->getToken()->getUser();
        $_role_user     = $_user_connected->getCtRole()->getId();
        $_centre        = $_user_connected->getCtCentre()->getId();

        /* Initialisation metiers */
        $_em_imprimes   = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH);
        $_em_used_it    = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);
        $_em_provinces  = $this->get(ServiceName::SRV_METIER_PROVINCE);
        $_em_centres    = $this->get(ServiceName::SRV_METIER_CENTRE);
        $_em_visites    = $this->get(ServiceName::SRV_METIER_VISITE);

        /* Récupérer tous les provinces et les centres */
        $_centres       = $_em_centres->getAllCtCentreByOrder(array('id' => 'ASC'));
        $_provinces     = $_em_provinces->getAllCtProvinceByOrder(array('id' => 'ASC'));
        /* Récupérer tous les imprimés techniques */
        $_imprimes      = $_em_imprimes->getAllCtImprimeTechByOrder(array('nomImprimeTech' => 'ASC'));
        $_imprimesnotused   = $_em_used_it->getAllCtImprimeTechNoUsedOrder();
        /* Récupérer tous les visites du centre non dans l'utilisation des IT */
        $_visites       = $_em_visites->getAllVisiteByCentreAndDateNotInUIT($_centre);

        // $_message       = "";
        // $_statu         = "";

        if ($_request->getMethod() === 'POST' )
        {
            $_data = $_request->request->all();
            $_motif_uit = $_data['ct_uit_motif'];
            $_controle_id = $_data['ct_controle_id'];
            $_imprimes_id = $_data['ct_imprime_tech_use_id'];
            foreach($_imprimes_id as $_imprime){
                $_used_it = $_em_used_it->getCtImprimeTechUseById($_imprime);
                $_used_it->setCtControle($_controle_id);
                $_used_it->setItuUsed(TRUE);
                $_used_it->setItuMotifUsed($_motif_uit);
                $_em_used_it->saveCtImprimeTechUse($_used_it, 'new', NULL);
                $_em_used_it->setFlash('sucess', 'Mise à jour d\'utilisation de l\'imprimé n° '.$_used_it->getituNumero() .' effectués avec succès.');
            }
            // $_statu    = 'sucess';
            // $_message   = 'Mise à jour d\'utilisation des imprimés effectués avec succès.';
            // return $this->redirect($this->generateUrl('imprime_tech_use_index'), array('statu' => $_statu, 'message' => $_message));
        }

        return $this->render('AdminBundle:CtImprimeTechUse:used.html.twig', array(
            'centres'   => $_centres,
            'provinces' => $_provinces,
            'visites'   => $_visites,
            'imprimes'  => $_imprimes,
            'useds_it'  => $_imprimesnotused,
            // 'statu'     => $_statu,
            // 'message'   => $_message,
        ));
    }

    /**
     * Affichage page modification utilisation IT
     * @param CtImprimeTechUse $_imprime_tech_use
     * @return Render page
     */
    public function editAction(CtImprimeTechUse $_imprime_tech_use)
    {
        if (!$_imprime_tech_use) {
            throw $this->createNotFoundException('Unable to find bordereau entity.');
        }

        $_edit_form = $this->createEditForm($_imprime_tech_use);

        return $this->render('AdminBundle:CtImprimeTechUse:edit.html.twig', array(
            'imprime_tech_use' => $_imprime_tech_use,
            'edit_form'  => $_edit_form->createView()
        ));
    }

    /**
     * Modification bordereau
     * @param Request $_request requête
     * @param CtImprimeTechUse $_imprime_tech_use
     * @return Render page
     */
    public function updateAction(Request $_request, CtImprimeTechUse $_imprime_tech_use)
    {
        // Initialisation des services managers
        $_em_itu = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);
        $_entity_visite = $this->get(ServiceName::SRV_METIER_VISITE);
        $_entity_recept = $this->get(ServiceName::SRV_METIER_RECEPTION);
        $_entity_consta = $this->get(ServiceName::SRV_METIER_CONST_AV_DED);

        if (!$_em_itu) {
            throw $this->createNotFoundException('Unable to find ImprimeTechUse entity.');
        }

        $_edit_form = $this->createEditForm($_imprime_tech_use);
        $_edit_form->handleRequest($_request);

        if ($_edit_form->isValid()) {
            $_motif = $_imprime_tech_use->getItuMotifUsed();
            switch($_motif){
                case 'Contre' :
                case 'Visite' :
                case 'Réception' :
                case 'Constatation' :
                    if($_em_itu->getCtControleId($_imprime_tech_use->getItuMotifUsed(), $_imprime_tech_use->getCtControle()) === 0){
                        $_em_itu->setFlash('error', "Le N° de contrôle ".$_imprime_tech_use->getCtControle()." est introuvable dans votre liste des visites d'aujourd'hui.");
                    }else{
                        $_action = $_imprime_tech_use->getItuUsed();
                        if($_action === 0){
                            $_em_itu->saveCtImprimeTechUse($_imprime_tech_use, 'new', NULL);
                            $_em_itu->setFlash('success', "La mise à jour de l'utilisation de l'imprimé technique est effectuée avec succès.");
                            return $this->redirect($this->generateUrl('imprime_tech_use_index'));
                        }else{
                            $_em_itu->saveCtImprimeTechUse($_imprime_tech_use, 'update', NULL);
                            $_em_itu->setFlash('success', "La modification de l'utilisation de l'imprimé technique est modifiée avec succès.");
                            return $this->redirect($this->generateUrl('imprime_tech_use_index'));
                        }
                    }
                    break;
                case 'Authenticité' :
                case 'Autres' :
                case 'Caractéristique' :
                case 'Duplicata' :
                case 'Duplicata visite' :
                case 'Duplicata réception' :
                case 'Mutation' :
                case 'Rebut' :
                case 'Spéciale' :
                    $_action = $_imprime_tech_use->getItuUsed();
                    if($_action === 0){
                        $_em_itu->saveCtImprimeTechUse($_imprime_tech_use, 'new', NULL);
                        $_em_itu->setFlash('success', "La mise à jour de l'utilisation de l'imprimé technique est effectuée avec succès.");
                        return $this->redirect($this->generateUrl('imprime_tech_use_index'));
                    }else{
                        $_em_itu->saveCtImprimeTechUse($_imprime_tech_use, 'update', NULL);
                        $_em_itu->setFlash('success', "La modification de l'utilisation de l'imprimé technique est modifiée avec succès.");
                        return $this->redirect($this->generateUrl('imprime_tech_use_index'));
                    }
                    break;
            }
        }

        return $this->render('AdminBundle:CtImprimeTechUse:edit.html.twig', array(
            'imprime_tech_use' => $_imprime_tech_use,
            'edit_form'  => $_edit_form->createView()
        ));
    }

    /**
     * Création formulaire de création bordereau
     * @param CtImprimeTechUse $_imprime_tech_use The entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(CtImprimeTechUse $_imprime_tech_use)
    {
        $_form = $this->createForm(CtImprimeTechUseType::class, $_imprime_tech_use, array(
            'action' => $this->generateUrl('imprime_tech_use_update', array('id' => $_imprime_tech_use->getId())),
            'method' => 'PUT',
        ));

        return $_form;
    }

    /**
     * Recherche bordereau pour un centre
     * @param Request $_request requête
     * @return Render page
     */
    public function searchAction(Request $_request)
    {
        // Liste des types d'imprimés techniques
        $_em_itu = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);
        $_em = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH);
        $_it = $_em->getAllCtImprimeTechByOrder(array('nomImprimeTech' => 'ASC'));
        // Chargement de formulaire
        $_imprime_tech_use = new CtImprimeTechUse();
        $_search_form = $this->createSearchForm($_imprime_tech_use);
        $_search_form->handleRequest($_request);

        // Initialiser les valeurs des variables
        $_itu_select = "";
        $_itu_numero = "";
        $_ct_imprime_tech_id = "";
        $_nomImprimeTech = "";

        if ($_request->getMethod() === 'POST' )
        {
            // Récupérer les données formulaire
            $_data = $_request->request->all();
            $_ct_imprime_tech_id = $_data['ct_imprime_tech_id'];
            $_itu_numero = $_data['itu_numero'];
            // Recherche du centre selectionné
            $_it = $_em->getCtImprimeTechById($_ct_imprime_tech_id);
            $_ct_imprime_tech_id = $_it->getId();
            $_nomImprimeTech = $_it->getNomImprimeTech();
            // Récupérer les listes numéro d'immatriculation
            $_it = $_em->getAllCtImprimeTechByOrder(array('nomImprimeTech' => 'ASC'));
            $_itu_select = $_em_itu->getListNumeroIT($_ct_imprime_tech_id, $_itu_numero);
            if(empty($_itu_select)) $_em->setFlash('error', 'L\'imprimé technique '.$_nomImprimeTech.' N° '.$_itu_numero.' est introuvable pour être modifier.');
        }

        return $this->render('AdminBundle:CtImprimeTechUse:search.html.twig', array(
            'imprime' => $_itu_select,
            'itu_numero' => $_itu_numero,
            'ct_imprime_tech_id' => $_ct_imprime_tech_id,
            'nomImprimeTech' => $_nomImprimeTech,
            'list_its' => $_it,
            'search_form' => $_search_form->createView()
        ));
    }

    /**
     * Création formulaire de suppression imprimé tech du bordereau
     * @param CtImprimeTechUse $_imprime_tech_use The imprimé tech entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createSearchForm(CtImprimeTechUse $_imprime_tech_use)
    {
        $_form = $this->createForm(CtImprimeTechUseType::class, $_imprime_tech_use, array(
            'action' => $this->generateUrl('imprime_tech_use_search', array()),
            'method' => 'POST',
        ));

        return $_form;
    }

    /**
     * Autocomplète pour le numéro d'imprimé technique
     * @param Request $_request
     * @return JsonResponse
     */
    public function showNumeroITAjaxAction(Request $_request) {
        // Récupérer manager
        $_em = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);

        // Récupérer les données formulaire
        $_data = $_request->request->all();
        $_ct_imprime_tech_id = $_data['ct_imprime_tech_id'];
        $_itu_numero = $_data['itu_numero'];

        // Récupérer les listes numéro d'immatriculation
        $_list_numero_it = $_em->getListNumeroIT($_ct_imprime_tech_id, $_itu_numero);

        return $_list_numero_it;
    }

    /**
     * Reinitialisaer utilisation d'un imprimé technique
     * @param Request $_request requête
     * @param CtImprimeTechUse $_imprime_tech_use
     * @return Redirect redirection
     */
    public function resetAction(Request $_request, CtImprimeTechUse $_imprime_tech_use)
    {
        // Récupérer manager
        $_bl_manager = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);

        $_reset_form = $this->createResetForm($_imprime_tech_use);
        $_reset_form->handleRequest($_request);

        // Réinitialiser l'utilisation de l'imprimé technique
        $_bl_manager->saveCtImprimeTechUse($_imprime_tech_use, 'reset', NULL);

        $_bl_manager->setFlash('success', 'Utilisation d\'imprimé technique réinitialisée.');

        return $this->redirectToRoute('imprime_tech_use_index');
    }

    /**
     * Création formulaire de suppression imprimé tech du bordereau
     * @param CtBordereau $_bordereau The imprimé tech entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createResetForm(CtImprimeTechUse $_imprime_tech_use)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imprime_tech_use_edit', array('id' => $_imprime_tech_use->getId())))
            ->setMethod('POST')
            ->getForm();
    }

    /**
     * Generer feuille d'utilisation des IT
     * d'un centre à une date donnée
     * @param Request $_request
     * @return Render page
     */
    public function generateFeuilleUsedITAction(Request $_request)
    {
        // Récupérer manager
        $_bordereau_manager = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);

        // Récupération données formulaires
        $_data_forms = $_request->request->all();
        $_ct_centre_id = array_key_exists('ct_centre_id', $_data_forms) ? $_data_forms['ct_centre_id'] : 0;
        $_ct_fitu_date = array_key_exists('ct_fitu_date', $_data_forms) ? $_data_forms['ct_fitu_date'] : 0;

        // Formattage du bordereau de livraison
        $_link_download = $_bordereau_manager->genererFeuilleITUsed($_ct_centre_id, $_ct_fitu_date);

        return new JsonResponse($_link_download);
    }

    /**
     *  Génerer feuille de stock des IT
     *  d'un centre à une date donnée
     *  @param Request $_request
     *  @return Render page
     */
    public function generateFeuilleStockITAction(Request $_request){
        // Récupérer manager
        $_bordereau_manager = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);

        // Récupération données formulaires
        $_data_forms = $_request->request->all();
        $_ct_centre_id = array_key_exists('ct_centre_id', $_data_forms) ? $_data_forms['ct_centre_id'] : 0;
        $_ct_situ_date = array_key_exists('ct_situ_date', $_data_forms) ? $_data_forms['ct_situ_date'] : 0;

        // Formattage du bordereau de livraison
        $_link_download = $_bordereau_manager->genererFeuilleStockIT($_ct_centre_id, $_ct_situ_date);

        return new JsonResponse($_link_download);
    }

    public function statisticITUseAction(){
        // Récupérer manager
        $_province_manager = $this->get(ServiceName::SRV_METIER_PROVINCE);
        $_centre_manager   = $this->get(ServiceName::SRV_METIER_CENTRE);

        // Récupérer tout les provinces et les centres
        $_centres   = $_centre_manager->getAllCtCentreByOrder(array('id' => 'ASC'));
        $_provinces = $_province_manager->getAllCtProvinceByOrder(array('id' => 'ASC'));

        return $this->render('AdminBundle:CtImprimeTechUse:stat.html.twig', array(
            'centres'   => $_centres,
            'provinces' => $_provinces
        ));
    }

    /**
     * Ajax génération reporting annuel
     * @param Request $_request
     * @return Render page
     */
    public function generateReportingStatisticITUseAction(Request $_request)
    {
        // Récupérer manager
        $_statistique_visite_manager = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);

        // Récupérer l'utilisateur connecté
        $_user_connected = $this->container->get('security.token_storage')->getToken()->getUser();

        // Récupération données formulaires
        $_data_forms            = $_request->request->all();
        $_annee                 = $_data_forms['annee'];
        $_type_interval         = $_data_forms['type'];
        $_value                 = $_data_forms['value'];
        $_id_centre             = $_data_forms['id_centre'];

        if (($_user_connected->getCtRole()->getId() != RoleName::ID_ROLE_SUPERADMIN) && $_user_connected->getCtRole()->getId() != RoleName::ID_ROLE_APPROVISIONNEMENT) {
           $_user_centre = $_user_connected->getCtCentre();
           $_id_centre   = $_user_centre->getId();
        }

        $_res = $_statistique_visite_manager->generateReportingByInterval($_id_centre, $_annee, $_value, $_type_interval);
        $_download_path = $_res['download_path'];
        $_url_path      = $_res['url_path'];

        return new Response($_url_path);
    }

    /**
     *  Fonction testant si le N° de contrôle appartient à votre centre ou pas
     *  @param $_motif : Motif d'utilisation de l'IT
     *  @param $_ct_controle_id : Integer ID du controle à tester
     *  @return $_message : Affichage message de notification il y a
     */
    public function TestIsYourCtControle($_motif, $_ct_controlre_id){
        $_em_itu = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);
        if($_em_itu->isYourCtControle($_motif, $_ct_controlre_id) == FALSE)
            $_message = "echo '<script type='text/javascript'> alert('Le N° de contrôle ".$_ct_controlre_id." entré n'est pas de votre centre actuel. Voulez-vous continuer?')</script>";
        return $_message;
    }


    /**
     *  Génerer feuille de stock des IT
     *  d'un centre à une date donnée
     *  @param Request $_request
     *  @return Render page
     */
    public function generateNewFeuilleStockITAction(Request $_request){
        // Récupérer manager
        $_bordereau_manager = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);

        // Récupération données formulaires
        $_data_forms        = $_request->request->all();
        $ct_centre_id_stock = array_key_exists('ct_centre_id_stock', $_data_forms) ? $_data_forms['ct_centre_id_stock'] : 0;
        $ct_mois_stock      = array_key_exists('ct_mois_stock', $_data_forms) ? $_data_forms['ct_mois_stock'] : 0;

        // Formattage du bordereau de livraison
        $_link_download = $_bordereau_manager->genererNewFeuilleStockIT($ct_centre_id_stock, $ct_mois_stock);

        return new JsonResponse($_link_download);
    }

    /**
     *  Fonction permettant de générer la nouvelle version de feuille de caisse
     *  et feuille d'utilisation des imprimés techniques d'une centre d'une date
     *  @param Request $_request
     *  @return Render page
     */
    public function getAllControleNoInImprimeTechUseAction(Request $_request)
    {
        // Récupérer manager
        $_sce_visite = $this->get(ServiceName::SRV_METIER_VISITE);
        $_response = new JsonResponse();

        $_controle_ids = array();
        $_data = $_request->request->all();
        $type_ct = array_key_exists('type_ct', $_data) ? $_data['type_ct'] : "";
        // Recuperer rgts user connecté
        $_connected_user = $this->container->get('security.token_storage')->getToken()->getUser();
        $_centre_id = $_connected_user->getCtCentre();

        if(!empty($type_ct)){
            $_ids = $_sce_visite->getAllVisiteByCentreAndDateNotInUIT($_centre_id);
            foreach ($_ids as $_id) {
                $_controle_ids          =  new \stdClass();
                $_controle_ids->id      = $_id->getId();
                // $_controle_ids->libelle = $_id->getUsrName();
                $_controle_ids_array[]  = $_controle_ids;
            }
            $_response->setData($_controle_ids_array);
        } else {
            $_err = array("message" => "Erreur n° de contrôle");
            $_response->setData($_err);
        }

        return $_response;
    }
}
