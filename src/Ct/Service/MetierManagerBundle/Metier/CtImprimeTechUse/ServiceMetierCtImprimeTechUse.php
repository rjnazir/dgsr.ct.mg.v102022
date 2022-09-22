<?php

namespace Ct\Service\MetierManagerBundle\Metier\CtImprimeTechUse;

use ArrayObject;
use Doctrine\ORM\EntityManager;
use Ct\Service\MetierManagerBundle\Utils\EntityName;
use Symfony\Component\DependencyInjection\Container;
use Ct\Service\MetierManagerBundle\Entity\CtImprimeTechUse;
use Ct\Service\UserBundle\Entity\User;
use Ct\Service\MetierManagerBundle\Utils\ServiceName;
use Ct\Service\MetierManagerBundle\Utils\PathReportingName;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\ObjectType;
use PhpOffice\PhpWord\PhpWord;
use DateTime;
use DateTimeImmutable;

class ServiceMetierCtImprimeTechUse
{
    private $_entity_manager;
    private $_container;

    public function __construct(EntityManager $_entity_manager, Container $_container)
    {
        $this->_entity_manager = $_entity_manager;
        $this->_container      = $_container;
    }

    /**
     * Ajouter un message flash
     * @param string $_type
     * @param string $_message
     * @return mixed
     */
    public function setFlash($_type, $_message) {
        return $this->_container->get('session')->getFlashBag()->add($_type, $_message);
    }

    /**
     * Récuperer le repository utilisation d'imprimé technique
     * @return array
     */
    public function getRepository()
    {
        return $this->_entity_manager->getRepository(EntityName::CT_IMPRIME_TECH_USE);
    }

    /**
     * Récuperer une IT par id
     * @param Integer $_id
     * @return array
     */
    public function getCtImprimeTechUseById($_id)
    {
        return $this->getRepository()->find($_id);
    }

    /**
     * Récuperer tout les utilisations d'imprimé technique
     * @return array
     */
    public function getAllCtImprimeTechUse()
    {
        return $this->getRepository()->findAll();
    }

    /**
     * Récuperer tout les utilisations d'imprimé technique par ordre
     * @param array $_order
     * @return array
     */
    public function getAllCtImprimeTechUseOrder($_order)
    {
        return $this->getRepository()->findBy(array(), $_order);
    }

    /**
     * Récuperer tout imprimés techniques non utilisés trié par numéro croissant
     * @return array
     */
    public function getAllCtImprimeTechNoUsedOrder()
    {
        $_entity_bl = EntityName::CT_IMPRIME_TECH_USE;
        $_entity_it = EntityName::CT_IMPRIME_TECH;
        $_entity_ctr = EntityName::CT_CENTRE;

        // Récuperer ID utilisateur
        $_user_connected= $this->_container->get('security.token_storage')->getToken()->getUser();
        /* $_ct_centre_id  = $_user_connected->getCtCentre(); */
        $_ct_centre_code = $_user_connected->getCtCentre()->getCtrCode();
        
        /* if($_ct_centre_id != 6){
            $_sql    = "SELECT t FROM $_entity_bl t WHERE t.ctCentre IN (SELECT tt.id FROM $_entity_ctr tt WHERE tt.ctrCode = :ct_centre_code ) AND t.ituUsed = :itu_Used ORDER BY t.ituNumero ASC";
            $_query  = $this->_entity_manager->createQuery($_sql);
            $_query->setParameter('ct_centre_code', $_ct_centre_code);
            $_query->setParameter('itu_Used', 0);
            $_result = $_query->getResult();
        }else{ */
            $_result = new ArrayObject();
            $_sq0 = "SELECT t FROM $_entity_it t";
            $_qr0 = $this->_entity_manager->createQuery($_sq0);
            $_re0 = $_qr0->getResult();
            foreach($_re0 as $_tp0){
                $_sq1 = "SELECT t
                            FROM    $_entity_bl t
                            WHERE   t.ctCentre IN (SELECT tt.id FROM $_entity_ctr tt WHERE tt.ctrCode = :ct_centre_code )
                                    AND t.ituUsed = :itu_Used
                                    AND t.ctImprimeTech = :ct_imprime_tech
                                    AND t.ituUsed = :itu_Used
                            ORDER BY t.ituNumero ASC";
                $_query  = $this->_entity_manager->createQuery($_sq1);
                $_query->setParameter('ct_centre_code', $_ct_centre_code);
                $_query->setParameter('ct_imprime_tech', $_tp0->getId());
                $_query->setParameter('itu_Used', 0);
                // if(preg_match('/PV/', $_tp0->getNomImprimeTech())){
                //     $_query->setMaxResults(500);
                // }else{
                //     $_query->setMaxResults(100);
                // }
                $_result = new ArrayObject(array_merge((array) $_result, (array) $_query->getResult()));
            }
        /* } */
        return $_result;
    }

    /**
     * Récuperer tout les utilisations d'imprimé technique pour le centre en cours 
     * @return array
     */
    public function getAllCtImprimeTechUsedByCentre()
    {
        $_entity_bl = EntityName::CT_IMPRIME_TECH_USE;

        // Récuperer ID utilisateur
        $_user_connected= $this->_container->get('security.token_storage')->getToken()->getUser();
        $_ct_centre_id  = $_user_connected->getCtCentre();

        $_sql    = "SELECT t
                    FROM $_entity_bl t 
                    WHERE   t.ctCentre = :ct_centre_id
                            AND t.ituMotifUsed != :ituMotifUsed
                            AND t.ituUsed = :ituUsed
                            AND t.createdAt LIKE :createdAt
                            ORDER BY t.createdAt DESC";
        $_query  = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter('ct_centre_id', $_ct_centre_id);
        $_query->setParameter('ituUsed', TRUE);
        $_query->setParameter('ituMotifUsed', "");
        $_date = new \DateTime();
        $_date = $_date->format('Y-m-d');
        $_query->setParameter('createdAt', $_date.'%');
        $_result = $_query->getResult();

        return $_result;
    }

    /**
     * Enregistrer une utilisation d'imprimé technique
     * @param Entity $_imprime_tech_use
     * @param string $_action
     * @param integer $_id
     * @return boolean
     */
    public function saveCtImprimeTechUse($_imprime_tech_use, $_action, $_id)
    {
        $_sce_centre = $this->_container->get(ServiceName::SRV_METIER_CENTRE);

        /* Récuperer ID utilisateur connecté */
        $_user_connected = $this->_container->get('security.token_storage')->getToken()->getUser();
        $_imprime_tech_use->setCtUser($_user_connected);

        // Récuperer ID centre de l'utilisateur connecté
        $_ct_centre_id = $_user_connected->getCtCentre();

        // Récupérer ID centre dans l'enregistrement
        $ctCentre = $_imprime_tech_use->getCtCentre();
        $_code_centre = $_imprime_tech_use->getCtCentre()->getCtrCode();

        // Affectation nouvelle centre dans le où c'est son sous-centre
        if(($_ct_centre_id !== $ctCentre) AND in_array($_ct_centre_id, $_sce_centre->getIdListCentresAndSubCentres($_code_centre)))
            $_imprime_tech_use->setCtCentre($_ct_centre_id);
            
        // Affectation ID controle pour les rebuts
        if(!empty($_imprime_tech_use->getItuMotifUsed()) && ($_imprime_tech_use->getItuMotifUsed() === "Rebut"))
            $_imprime_tech_use->setCtControle(NULL);

        if($_action === 'new'){
            // Maj date de création et update
            $_imprime_tech_use->setItuCreatedAt(new \DateTime());
            $_imprime_tech_use->setItuUsed(TRUE);
        }else if ($_action === 'update'){
            $_imprime_tech_use->setItuUpdatedAt(new \DateTime());
            $_imprime_tech_use->setItuUsed(TRUE);
        }else if ($_action === 'reset'){
            $_imprime_tech_use->setCtControle(NULL);
            $_imprime_tech_use->setItuUsed(FALSE);
            $_imprime_tech_use->setItuMotifUsed(NULL);
            $_imprime_tech_use->setItuCreatedAt(NULL);
            $_imprime_tech_use->setItuUpdatedAt(NULL);
        }

        $this->_entity_manager->persist($_imprime_tech_use);
        $this->_entity_manager->flush();

        return true;
    }

    /**
     * Enregistrer une utilisation d'imprimé technique
     * @param \Ct\Service\MetierManagerBundle\Entity\CtBordereau $_ct_bordereau_id
     * @param \Ct\Service\MetierManagerBundle\Entity\CtCentre $_ct_centre_id
     * @param \Ct\Service\MetierManagerBundle\Entity\CtImprimeTech $_ct_imprime_tech_id
     * @param integer $_itu_numero
     * @return boolean
     */
    public function save_CtImprimeTechUse($_ct_bordereau_id, $_ct_centre_id, $_ct_imprime_tech_id, $_itu_numero)
    {
        // Récuperer ID utilisateur
        $_ct_user_id = $this->_container->get('security.token_storage')->getToken()->getUser();

        // if($this->TestNumImprimeTech($_ct_imprime_tech_id, $_itu_numero) == false){
        $ImprimeTechUse = new CtImprimeTechUse();
        $ImprimeTechUse->setCtBordereau($_ct_bordereau_id);
        $ImprimeTechUse->setCtCentre($_ct_centre_id);
        $ImprimeTechUse->setCtImprimeTech($_ct_imprime_tech_id);
        $ImprimeTechUse->setCtControle(NULL);
        $ImprimeTechUse->setCtUser($_ct_user_id);
        $ImprimeTechUse->setItuNumero($_itu_numero);
        $ImprimeTechUse->setItuUsed(0);
        $ImprimeTechUse->setItuMotifUsed(NULL);
        $ImprimeTechUse->setItuActivedAt(new DateTime());
        $ImprimeTechUse->setItuCreatedAt(NULL);
        $ImprimeTechUse->setItuUpdatedAt(NULL);
        $this->_entity_manager->persist($ImprimeTechUse);
        $this->_entity_manager->flush();
        // }

        return true;
    }

    /**
     * Supprimer une utilisation d'imprimé technique
     * @param Entity $_imprime_tech_use
     * @return boolean
     */
    public function deleteCtImprimeTechUse($_imprime_tech_use)
    {
        $this->_entity_manager->remove($_imprime_tech_use);
        $this->_entity_manager->flush();

        return true;
    }

    /**
     * Suppression multiple d'une utilisation d'imprimé technique
     * @param array $_ids
     * @return boolean
     */
    public function deleteGroupCtImprimeTechUse($_ids)
    {
        if (count($_ids)) {
            foreach ($_ids as $_id) {
                $_imprime_tech_use = $this->getCtImprimeTechUseById($_id);
                $this->deleteCtImprimeTechUse($_imprime_tech_use);
            }
        }

        return true;
    }

    /**
     *  Récupérer une utilisation d'imprimé technique par son numéro
     *  @param  $_numero : Nom imprimé tech
     *  @return $_imprime_tech_use : Utilisation imprimés tech array()
     */
    public function getCtImprimeTechUseByNumero($_numero)
    {
        $_entity_bl = EntityName::CT_IMPRIME_TECH_USE;
        $_sql = "SELECT t FROM $_entity_bl t WHERE t.ituNumero = ?1";
        $_query = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter(1, '%'.$_numero.'%');
        $_ret = $_query->getResult();
        return $_ret;
    }

    /**
     *  Récupérer les utilisations d'imprimé technique par son numéro controle technique
     *  @param  $_numero : Numéro controle technique
     *  @return $_imprime_tech_use : Utilisation imprimés tech array()
     */
    public function getCtImprimeTechUseByCtControle($_numero)
    {
        $_entity_bl = EntityName::CT_IMPRIME_TECH_USE;
        $_sql = "SELECT t FROM $_entity_bl t WHERE t.ctControle = :i_numero";
        $_query = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter('i_numero', $_numero);
        $_ret = $_query->getResult();
        return $_ret;
    }

    /**
     * Récupérer liste json numéro d'immatriculation
     * @param integer $_ct_imprime_tech_id
     * @param integer $_itu_numero
     * @return array
     */
    public function getListNumeroIT($_ct_imprime_tech_id, $_itu_numero){
        $_entity_itu= EntityName::CT_IMPRIME_TECH_USE;
        $_entity_ctr= EntityName::CT_CENTRE;

        // Récuperer ID utilisateur
        $_user_connected= $this->_container->get('security.token_storage')->getToken()->getUser();
        $_ct_centre_id  = $_user_connected->getCtCentre();
        $_ct_centre_code  = $_user_connected->getCtCentre()->getCtrCode();
        // $_sql = "SELECT t FROM $_entity_itu t WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprime_tech_id AND t.ituNumero LIKE :itu_numero";
        $_sql   = " SELECT t
                    FROM $_entity_itu t 
                    WHERE t.ctCentre IN (SELECT tt.id FROM $_entity_ctr tt WHERE tt.ctrCode = :ct_centre_code )
                        AND t.ctImprimeTech = :ct_imprime_tech_id
                        AND t.ituNumero LIKE :itu_numero";
        $_query  = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter('ct_centre_code', $_ct_centre_code);
        // $_query->setParameter('ct_centre_id', $_ct_centre_id);
        $_query->setParameter('ct_imprime_tech_id', $_ct_imprime_tech_id);
        $_query->setParameter('itu_numero', $_itu_numero);
        $_ret = $_query->getResult();
        if (count($_ret) > 0 && is_array($_ret))
            return $_ret[0];
        return $_ret;
    }

    /**
     *  Récuperer le numéro d'une imprimé technique utilisé spécifié
     *  @param $_ct_controle_id : integer
     *  @param $_type_it : string
     *  @return $_num_it : string
     */
    public function getNumITByControleAndTypeIT($_ct_centre_id, $_ct_controle_id, $_type_it, $_date){
        $_entity_it = EntityName::CT_IMPRIME_TECH;
        $_entity_itu= EntityName::CT_IMPRIME_TECH_USE;
        $_num_it = '-';
        $_dql = " SELECT  itu
                        FROM    $_entity_itu itu
                                INNER JOIN $_entity_it it WITH itu.ctImprimeTech = it.id
                        WHERE   itu.ctCentre = :ct_centre_id
                                AND itu.ctControle = :ct_controle_id
                                AND it.nomImprimeTech = :type_it
                                AND itu.createdAt LIKE :created_at";
        $_query = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('ct_centre_id', $_ct_centre_id);
        $_query->setParameter('ct_controle_id', $_ct_controle_id);
        $_query->setParameter('type_it', $_type_it);
        $_query->setParameter('created_at', $_date.'%');
        $_res = $_query->getResult();
        foreach($_res as $_res){
            !empty($_res->getItuNumero()) ? $_num_it = $_res->getItuNumero() : $_num_it = '-';
        }
        return $_num_it;
    }

    /**
     *  Récuperer tous les imprimés techniques utilisés par un centre dans une journée
     *  @param  $_centre : ID du centre exploitation
     *  @param  $_date : date d'exploitation
     *  @return $_result : array()
     */
    public function getAllITUsedInDaybyCentre($_centre, $_date)
    {
        $_em_visite = $this->_container->get(ServiceName::SRV_METIER_VISITE);

        $_date = implode('-',array_reverse  (explode('/', $_date)));
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;
        $_entity_it = EntityName::CT_IMPRIME_TECH;
        
	    $_dql = " SELECT    itu
                        FROM    $_entity_itu itu
                                INNER JOIN $_entity_it it WITH itu.ctImprimeTech = it.id
                        WHERE   ((itu.ituMotifUsed = :ct_itu_motif_used0 OR itu.ituMotifUsed = :ct_itu_motif_used1)
                                AND itu.ctCentre = :ct_centre_id
                                AND itu.createdAt LIKE :created_at) 
                                OR (itu.ctCentre = :ct_centre_id
                                AND itu.createdAt LIKE :created_at
                                AND it.nomImprimeTech LIKE :type_it)
                        ORDER BY    itu.ituNumero ASC";
        $_query = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('ct_centre_id', $_centre);
        $_query->setParameter('type_it', '%PV%');
        $_query->setParameter('ct_itu_motif_used0', 'Spéciale');
        $_query->setParameter('ct_itu_motif_used1', 'Rebut');
        $_query->setParameter('created_at', $_date.'%');
        $_res = $_query->getResult();
        $_result = [];
        $_j = 0;

        foreach($_res as $_re){
            $_result[$_j]   = new \stdClass();

            $_used = $_re->getItuMotifUsed();
            switch($_used)
            {
                case 'Rebut' :
                    $_print = $_re->getCtImprimeTech()->getNomImprimeTech();
                    $_result[$_j]->ref      = "-";
                    $_result[$_j]->imm      = "-";
                    $_result[$_j]->used     = $_used;
                    $_result[$_j]->ncrt     = (($_print == 'Carnet d\'entretien') AND ($_re->getItuNumero()))       ? $_re->getItuNumero() : '-';
                    $_result[$_j]->ncbl     = (($_print == 'Carte blanche') AND ($_re->getItuNumero()))             ? $_re->getItuNumero() : '-';
                    $_result[$_j]->nbbr     = (($_print == 'CIM 32 Bis') AND ($_re->getItuNumero()))                ? $_re->getItuNumero() : '-';
                    $_result[$_j]->ncjn     = (($_print == 'Carte jaune') AND ($_re->getItuNumero()))               ? $_re->getItuNumero() : '-';
                    $_result[$_j]->njbr     = (($_print == 'Carte jaune barrée rouge') AND ($_re->getItuNumero()))  ? $_re->getItuNumero() : '-';
                    $_result[$_j]->ncrg     = (($_print == 'Carte rouge') AND ($_re->getItuNumero()))               ? $_re->getItuNumero() : '-';
                    $_result[$_j]->ncae     = (($_print == 'Carte auto-école') AND ($_re->getItuNumero()))          ? $_re->getItuNumero() : '-';
                    $_result[$_j]->plch     = (($_print == 'Plaque chassis') AND ($_re->getItuNumero()))            ? $_re->getItuNumero() : '-';
                    $_result[$_j]->ncim31   = (($_print == 'CIM 31') AND ($_re->getItuNumero()))                    ? $_re->getItuNumero() : '-';
                    $_result[$_j]->ncim31b  = (($_print == 'CIM 31 Bis') AND ($_re->getItuNumero()))                ? $_re->getItuNumero() : '-';
                    $_result[$_j]->ncim32   = (($_print == 'CIM 32') AND ($_re->getItuNumero()))                    ? $_re->getItuNumero() : '-';
                    $_result[$_j]->npvo     = (($_print == 'PVO') AND ($_re->getItuNumero()))                       ? $_re->getItuNumero() : '-';
                    $_result[$_j]->npvm     = (($_print == 'PVM') AND ($_re->getItuNumero()))                       ? $_re->getItuNumero() : '-';
                    $_result[$_j]->npcm     = (($_print == 'PVMC') AND ($_re->getItuNumero()))                      ? $_re->getItuNumero() : '-';
                    $_result[$_j]->adm      = '-';
                    $_result[$_j]->obs      = '-';
                    break;
                case 'Visite' :
                    $_vt_em = $this->_container->get(ServiceName::SRV_METIER_VISITE);
                    $ctVisite = $_vt_em->getCtVisiteById($_re->getCtControle());
                    $_result[$_j]->ref      = !empty($ctVisite) ? $ctVisite->getVstNumPv() : 'Erreur (N° contrôle '.$_re->getCtControle().')';
                    // $_result[$_j]->ref      = !empty($ctVisite) ? $ctVisite->getId() : 'Erreur : '.$_re->getCtControle().'';
                    $_result[$_j]->imm      = !empty($ctVisite) ? $ctVisite->getCtCarteGrise()->getCgImmatriculation() : 'Erreur';
                    $_result[$_j]->used     = $_used;
                    $_result[$_j]->ncrt     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date), array_column($_result, 'ncrt')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date) : '-';
                    $_result[$_j]->ncbl     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date), array_column($_result, 'ncbl')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date) : '-';
                    $_result[$_j]->nbbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date), array_column($_result, 'nbbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date) : '-';
                    $_result[$_j]->ncjn     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date), array_column($_result, 'ncjn')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date) : '-';
                    $_result[$_j]->njbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date), array_column($_result, 'njbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date) : '-';
                    $_result[$_j]->ncrg     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date), array_column($_result, 'ncrg')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date) : '-';
                    $_result[$_j]->ncae     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date), array_column($_result, 'ncae')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date) : '-';
                    $_result[$_j]->plch     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date), array_column($_result, 'plch')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date) : '-';
                    $_result[$_j]->ncim31   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date), array_column($_result, 'ncim31')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date) : '-';
                    $_result[$_j]->ncim31b  = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date), array_column($_result, 'ncim31b')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date) : '-';
                    $_result[$_j]->ncim32   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date), array_column($_result, 'ncim32')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date) : '-';
                    $_result[$_j]->npvo     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date), array_column($_result, 'npvo')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date) : '-';
                    $_result[$_j]->npvm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date), array_column($_result, 'npvm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date) : '-';
                    $_result[$_j]->npcm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date), array_column($_result, 'npcm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date) : '-';
                    $_result[$_j]->adm      = (!empty($ctVisite) and $ctVisite->getCtUtilisation()->getUtLibelle() === 'Administratif') ? 'ADM' : '-';
                    $_result[$_j]->obs      = '-';
                    break;
                case 'Contre' :
                    $_vt_em = $this->_container->get(ServiceName::SRV_METIER_VISITE);
                    $ctVisite = $_vt_em->getCtVisiteById($_re->getCtControle());
                    $_result[$_j]->ref = !empty($ctVisite) ? $ctVisite->getVstNumPv() : 'Erreur (N° contrôle '.$_re->getCtControle().')';
                    /* $_result[$_j]->ref = !empty($ctVisite) ? $ctVisite->getId() : 'Erreur : '.$_re->getCtControle().''; */
                    $_result[$_j]->imm = !empty($ctVisite) ? $ctVisite->getCtCarteGrise()->getCgImmatriculation() : 'Erreur';
                    $_result[$_j]->used     = $_used;
                    $_result[$_j]->ncrt     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date), array_column($_result, 'ncrt')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date) : '-';
                    $_result[$_j]->ncbl     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date), array_column($_result, 'ncbl')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date) : '-';
                    $_result[$_j]->nbbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date), array_column($_result, 'nbbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date) : '-';
                    $_result[$_j]->ncjn     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date), array_column($_result, 'ncjn')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date) : '-';
                    $_result[$_j]->njbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date), array_column($_result, 'njbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date) : '-';
                    $_result[$_j]->ncrg     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date), array_column($_result, 'ncrg')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date) : '-';
                    $_result[$_j]->ncae     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date), array_column($_result, 'ncae')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date) : '-';
                    $_result[$_j]->plch     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date), array_column($_result, 'plch')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date) : '-';
                    $_result[$_j]->ncim31   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date), array_column($_result, 'ncim31')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date) : '-';
                    $_result[$_j]->ncim31b  = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date), array_column($_result, 'ncim31b')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date) : '-';
                    $_result[$_j]->ncim32   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date), array_column($_result, 'ncim32')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date) : '-';
                    $_result[$_j]->npvo     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date), array_column($_result, 'npvo')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date) : '-';
                    $_result[$_j]->npvm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date), array_column($_result, 'npvm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date) : '-';
                    $_result[$_j]->npcm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date), array_column($_result, 'npcm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date) : '-';
                    $_result[$_j]->adm      = (!empty($ctVisite) and $ctVisite->getCtUtilisation()->getUtLibelle() === 'Administratif') ? 'ADM' : '-';
                    $_last_visite   = $_em_visite->getCtVisiteInapteBeforeContre(date('Y-m-d'), $ctVisite->getCtCarteGrise());
                    $_result[$_j]->obs  = "Réf. VT inapte n° ".$_last_visite->NUM_PV." du ".$_last_visite->DATE_VISITE." au CENSERO ".$_last_visite->NOM_CENTRE;
                    break;
                case 'Réception' :
                    $_print = $_re->getCtImprimeTech()->getNomImprimeTech();
                    $_rt_em = $this->_container->get(ServiceName::SRV_METIER_RECEPTION);
                    $ctReception = $_rt_em->getCtReceptionById($_re->getCtControle());
                    $_result[$_j]->ref = !empty($ctReception) ? $ctReception->getRcpNumPv() : 'Erreur (N° contrôle '.$_re->getCtControle().')';
                    /* $_result[$_j]->ref = !empty($ctReception) ? $ctReception->getId() : 'Erreur : '.$_re->getCtControle().''; */
                    $_result[$_j]->imm = !empty($ctReception) ? $ctReception->getRcpImmatriculation() : 'Erreur';
                    $_result[$_j]->used     = $_used;
                    $_result[$_j]->ncrt     = (($_print == 'Carnet d\'entretien') AND ($_re->getItuNumero())) ? $_re->getItuNumero() : '-';
                    $_result[$_j]->ncbl     = (($_print == 'Carte blanche') AND ($_re->getItuNumero())) ? $_re->getItuNumero() : '-';
                    $_result[$_j]->nbbr     = (($_print == 'CIM 32 Bis') AND ($_re->getItuNumero())) ? $_re->getItuNumero() : '-';
                    $_result[$_j]->ncjn     = (($_print == 'Carte jaune') AND ($_re->getItuNumero())) ? $_re->getItuNumero() : '-';!in_array($this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte jaune', $_date), array_column($_result, 'ncjn')) ? $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte jaune', $_date) : '-';
                    $_result[$_j]->njbr     = (($_print == 'Carte jaune barrée rouge') AND ($_re->getItuNumero())) ? $_re->getItuNumero() : '-';!in_array($this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte jaune barrée rouge', $_date), array_column($_result, 'njbr')) ? $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte jaune barrée rouge', $_date) : '-';
                    $_result[$_j]->ncrg     = (($_print == 'Carte rouge') AND ($_re->getItuNumero())) ? $_re->getItuNumero() : '-';!in_array($this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte rouge', $_date), array_column($_result, 'ncrg')) ? $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte rouge', $_date) : '-';
                    $_result[$_j]->ncae     = (($_print == 'Carte auto-école') AND ($_re->getItuNumero())) ? $_re->getItuNumero() : '-';!in_array($this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte auto-école', $_date), array_column($_result, 'ncae')) ? $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte auto-école', $_date) : '-';
                    $_result[$_j]->plch     = !in_array($this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Plaque chassis', $_date), array_column($_result, 'plch')) ? $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Plaque chassis', $_date) : '-';
                    $_result[$_j]->ncim31   = (($_print == 'CIM 31') AND ($_re->getItuNumero())) ? $_re->getItuNumero() : '-';
                    $_result[$_j]->ncim31b  = (($_print == 'CIM 31 Bis') AND ($_re->getItuNumero())) ? $_re->getItuNumero() : '-';
                    $_result[$_j]->ncim32   = (($_print == 'CIM 32') AND ($_re->getItuNumero())) ? $_re->getItuNumero() : '-';
                    $_result[$_j]->npvo     = (($_print == 'PVO') AND ($_re->getItuNumero())) ? $_re->getItuNumero() : '-';
                    $_result[$_j]->npvm     = (($_print == 'PVM') AND ($_re->getItuNumero())) ? $_re->getItuNumero() : '-';
                    $_result[$_j]->npcm     = (($_print == 'PVMC') AND ($_re->getItuNumero())) ? $_re->getItuNumero() : '-';
                    $_result[$_j]->adm      = (!empty($ctReception) and $ctReception->getCtUtilisation()->getUtLibelle() === 'Administratif') ? 'ADM' : '-';
                    $_result[$_j]->obs      = '-';
                    break;
                case 'Constatation' :
                    $_cad_em = $this->_container->get(ServiceName::SRV_METIER_CONST_AV_DED);
                    $ctConstatation = $_cad_em->getCtConstatationAvDedouanementById($_re->getCtControle());
                    $_result[$_j]->ref = !empty($ctConstatation) ? $ctConstatation->getCadNumero() : 'Erreur (N° contrôle '.$_re->getCtControle().')';
                    /* $_result[$_j]->ref = !empty($ctConstatation) ? $ctConstatation->getId() : 'Erreur  : '.$_re->getCtControle().''; */
                    $_result[$_j]->imm = !empty($ctConstatation) ? $ctConstatation->getCadImmatriculation() : 'Erreur';
                    $_result[$_j]->used     = $_used;
                    $_result[$_j]->ncrt     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date), array_column($_result, 'ncrt')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date) : '-';
                    $_result[$_j]->ncbl     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date), array_column($_result, 'ncbl')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date) : '-';
                    $_result[$_j]->nbbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date), array_column($_result, 'nbbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date) : '-';
                    $_result[$_j]->ncjn     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date), array_column($_result, 'ncjn')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date) : '-';
                    $_result[$_j]->njbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date), array_column($_result, 'njbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date) : '-';
                    $_result[$_j]->ncrg     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date), array_column($_result, 'ncrg')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date) : '-';
                    $_result[$_j]->ncae     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date), array_column($_result, 'ncae')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date) : '-';
                    $_result[$_j]->plch     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date), array_column($_result, 'plch')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date) : '-';
                    $_result[$_j]->ncim31   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date), array_column($_result, 'ncim31')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date) : '-';
                    $_result[$_j]->ncim31b  = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date), array_column($_result, 'ncim31b')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date) : '-';
                    $_result[$_j]->ncim32   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date), array_column($_result, 'ncim32')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date) : '-';
                    $_result[$_j]->npvo     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date), array_column($_result, 'npvo')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date) : '-';
                    $_result[$_j]->npvm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date), array_column($_result, 'npvm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date) : '-';
                    $_result[$_j]->npcm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date), array_column($_result, 'npcm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date) : '-';
                    $_result[$_j]->adm      = '-'; // CAD Administratif non gérée actuellement
                    $_result[$_j]->obs      = '-';
                    break;
                case 'Mutation' :
                    $_vt_em = $this->_container->get(ServiceName::SRV_METIER_VISITE);
                    $ctVisite = $_vt_em->getCtVisiteById($_re->getCtControle());
                    $_result[$_j]->ref = !empty($ctVisite) ? $ctVisite->getVstNumPv() : 'Erreur (N° contrôle '.$_re->getCtControle().')';
                    /* $_result[$_j]->ref = !empty($ctVisite) ? $ctVisite->getId() : 'Erreur : '.$_re->getCtControle().''; */
                    $_result[$_j]->imm = !empty($ctVisite) ? $ctVisite->getCtCarteGrise()->getCgImmatriculation() : 'Erreur';
                    $_result[$_j]->used     = $_used;
                    $_result[$_j]->ncrt     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date), array_column($_result, 'ncrt')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date) : '-';
                    $_result[$_j]->ncbl     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date), array_column($_result, 'ncbl')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date) : '-';
                    $_result[$_j]->nbbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date), array_column($_result, 'nbbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date) : '-';
                    $_result[$_j]->ncjn     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date), array_column($_result, 'ncjn')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date) : '-';
                    $_result[$_j]->njbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date), array_column($_result, 'njbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date) : '-';
                    $_result[$_j]->ncrg     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date), array_column($_result, 'ncrg')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date) : '-';
                    $_result[$_j]->ncae     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date), array_column($_result, 'ncae')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date) : '-';
                    $_result[$_j]->plch     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date), array_column($_result, 'plch')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date) : '-';
                    $_result[$_j]->ncim31   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date), array_column($_result, 'ncim31')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date) : '-';
                    $_result[$_j]->ncim31b  = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date), array_column($_result, 'ncim31b')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date) : '-';
                    $_result[$_j]->ncim32   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date), array_column($_result, 'ncim32')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date) : '-';
                    $_result[$_j]->npvo     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date), array_column($_result, 'npvo')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date) : '-';
                    $_result[$_j]->npvm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date), array_column($_result, 'npvm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date) : '-';
                    $_result[$_j]->npcm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date), array_column($_result, 'npcm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date) : '-';
                    $_result[$_j]->adm      = (!empty($ctVisite) and $ctVisite->getCtUtilisation()->getUtLibelle() === 'Administratif') ? 'ADM' : '-';
                    $_result[$_j]->obs      = '-';
                    break;
                case 'Duplicata visite' :
                    $_vt_em                 = $this->_container->get(ServiceName::SRV_METIER_VISITE);
                    $ctVisite               = $_vt_em->getCtVisiteById($_re->getCtControle());
                    $_result[$_j]->ref      = !empty($ctVisite) ? $ctVisite->getVstNumPv() : 'Erreur (N° contrôle '.$_re->getCtControle().')';
                    /* $_result[$_j]->ref      = !empty($ctVisite) ? $ctVisite->getId() : 'Erreur : '.$_re->getCtControle().''; */
                    $_result[$_j]->imm      = !empty($ctVisite) ? $ctVisite->getCtCarteGrise()->getCgImmatriculation() : 'Erreur';
                    $_result[$_j]->used     = $_used;
                    $_result[$_j]->ncrt     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date), array_column($_result, 'ncrt')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date) : '-';
                    $_result[$_j]->ncbl     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date), array_column($_result, 'ncbl')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date) : '-';
                    $_result[$_j]->nbbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date), array_column($_result, 'nbbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date) : '-';
                    $_result[$_j]->ncjn     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date), array_column($_result, 'ncjn')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date) : '-';
                    $_result[$_j]->njbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date), array_column($_result, 'njbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date) : '-';
                    $_result[$_j]->ncrg     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date), array_column($_result, 'ncrg')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date) : '-';
                    $_result[$_j]->ncae     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date), array_column($_result, 'ncae')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date) : '-';
                    $_result[$_j]->plch     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date), array_column($_result, 'plch')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date) : '-';
                    $_result[$_j]->ncim31   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date), array_column($_result, 'ncim31')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date) : '-';
                    $_result[$_j]->ncim31b  = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date), array_column($_result, 'ncim31b')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date) : '-';
                    $_result[$_j]->ncim32   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date), array_column($_result, 'ncim32')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date) : '-';
                    $_result[$_j]->npvo     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date), array_column($_result, 'npvo')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date) : '-';
                    $_result[$_j]->npvm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date), array_column($_result, 'npvm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date) : '-';
                    $_result[$_j]->npcm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date), array_column($_result, 'npcm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date) : '-';
                    $_result[$_j]->adm      = (!empty($ctVisite) and $ctVisite->getCtUtilisation()->getUtLibelle() === 'Administratif') ? 'ADM' : '-';
                    $_result[$_j]->obs      = '-';
                    break;
                case 'Duplicata réception' :
                    $_rt_em                 = $this->_container->get(ServiceName::SRV_METIER_RECEPTION);
                    $ctReception            = $_rt_em->getCtReceptionById($_re->getCtControle());
                    $_result[$_j]->ref      = !empty($ctReception) ? $ctReception->getRcpNumPv() : 'Erreur (N° contrôle '.$_re->getCtControle().')';
                    /* $_result[$_j]->ref      = !empty($ctReception) ? $ctReception->getId() : 'Erreur : '.$_re->getCtControle().''; */
                    $_result[$_j]->imm      = !empty($ctReception) ? $ctReception->getRcpImmatriculation() : 'Erreur';
                    $_result[$_j]->used     = $_used;
                    $_result[$_j]->ncrt     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date), array_column($_result, 'ncrt')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date) : '-';
                    $_result[$_j]->ncbl     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date), array_column($_result, 'ncbl')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date) : '-';
                    $_result[$_j]->nbbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date), array_column($_result, 'nbbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date) : '-';
                    $_result[$_j]->ncjn     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date), array_column($_result, 'ncjn')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date) : '-';
                    $_result[$_j]->njbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date), array_column($_result, 'njbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date) : '-';
                    $_result[$_j]->ncrg     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date), array_column($_result, 'ncrg')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date) : '-';
                    $_result[$_j]->ncae     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date), array_column($_result, 'ncae')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date) : '-';
                    $_result[$_j]->plch     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date), array_column($_result, 'plch')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date) : '-';
                    $_result[$_j]->ncim31   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date), array_column($_result, 'ncim31')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date) : '-';
                    $_result[$_j]->ncim31b  = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date), array_column($_result, 'ncim31b')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date) : '-';
                    $_result[$_j]->ncim32   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date), array_column($_result, 'ncim32')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date) : '-';
                    $_result[$_j]->npvo     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date), array_column($_result, 'npvo')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date) : '-';
                    $_result[$_j]->npvm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date), array_column($_result, 'npvm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date) : '-';
                    $_result[$_j]->npcm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date), array_column($_result, 'npcm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date) : '-';
                    $_result[$_j]->adm      = (!empty($ctReception) and $ctReception->getCtUtilisation()->getUtLibelle() === 'Administratif') ? 'ADM' : '-';
                    $_result[$_j]->obs      = '-';
                    break;
                case 'Spéciale' :
                    $_vt_em = $this->_container->get(ServiceName::SRV_METIER_VISITE);
                    $_rt_em = $this->_container->get(ServiceName::SRV_METIER_RECEPTION);
                    if(!is_null($_vt_em->getCtVisiteById($_re->getCtControle())->getCtCarteGrise()->getCgImmatriculation())){
                        $ctVisite = $_vt_em->getCtVisiteById($_re->getCtControle());
                        $_result[$_j]->ref = !empty($ctVisite) ? $ctVisite->getVstNumPv() : 'Erreur (N° contrôle '.$_re->getCtControle().')';
                        /* $_result[$_j]->ref = !empty($ctVisite) ? $ctVisite->getId() : 'Erreur : '.$_re->getCtControle().''; */
                        $_result[$_j]->imm = !empty($ctVisite) ? $ctVisite->getCtCarteGrise()->getCgImmatriculation() : 'Erreur';
                        $_result[$_j]->obs = $ctVisite->getCtUtilisation()->getUtLibelle() === 'Administratif' ? 'ADM' : '-';
                    }else{
                        $ctReception = $_rt_em->getCtReceptionById($_re->getCtControle());
                        $_result[$_j]->ref = !empty($ctReception) ? $ctReception->getRcpNumPv() : 'Erreur (N° contrôle '.$_re->getCtControle().')';
                        /* $_result[$_j]->ref = !empty($ctReception) ? $ctReception->getId() : 'Erreur : '.$_re->getCtControle().''; */
                        $_result[$_j]->imm = !empty($ctReception) ? $ctReception->getRcpImmatriculation() : 'Erreur';
                        $_result[$_j]->obs = $ctReception->getCtUtilisation()->getUtLibelle() === 'Administratif' ? 'ADM' : '-';
                    }
                    $_result[$_j]->used     = $_used;
                    $_result[$_j]->ncrt     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date), array_column($_result, 'ncrt')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date) : '-';
                    $_result[$_j]->ncbl     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date), array_column($_result, 'ncbl')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date) : '-';
                    $_result[$_j]->nbbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date), array_column($_result, 'nbbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date) : '-';
                    $_result[$_j]->ncjn     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date), array_column($_result, 'ncjn')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date) : '-';
                    $_result[$_j]->njbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date), array_column($_result, 'njbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date) : '-';
                    $_result[$_j]->ncrg     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date), array_column($_result, 'ncrg')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date) : '-';
                    $_result[$_j]->ncae     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date), array_column($_result, 'ncae')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date) : '-';
                    $_result[$_j]->plch     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date), array_column($_result, 'plch')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date) : '-';
                    $_result[$_j]->ncim31   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date), array_column($_result, 'ncim31')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date) : '-';
                    $_result[$_j]->ncim31b  = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date), array_column($_result, 'ncim31b')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date) : '-';
                    $_result[$_j]->ncim32   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date), array_column($_result, 'ncim32')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date) : '-';
                    $_result[$_j]->npvo     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date), array_column($_result, 'npvo')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date) : '-';
                    $_result[$_j]->npvm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date), array_column($_result, 'npvm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date) : '-';
                    $_result[$_j]->npcm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date), array_column($_result, 'npcm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date) : '-';

                    $_result[$_j]->adm      = '-';
                    $_result[$_j]->obs      = '-';
                    break;
                default :
                    $code_centre = $_re->getCtCentre()->getCtrCode();
                    switch($code_centre){
                        case '001'  : $abbrev_ctr = '-CENSERO/ANT/'.date('y');break;
                        case '002'  : $abbrev_ctr = '-CENSERO/BLG/'.date('y');break;
                        case '003'  : $abbrev_ctr = '-CENSERO/NNA/'.date('y');break;
                        case '004'  : $abbrev_ctr = '-CENSERO/ALS/'.date('y');break;
                        case '005'  : $abbrev_ctr = '-CENSERO/TNA/'.date('y');break;
                        case '007'  : $abbrev_ctr = '-CENSERO/FNR/'.date('y');break;
                        case '008'  : $abbrev_ctr = '-CENSERO/TLR/'.date('y');break;
                        case '009'  : $abbrev_ctr = '-CENSERO/ANA/'.date('y');break;
                        case '010'  : $abbrev_ctr = '-CENSERO/IVT/'.date('y');break;
                        case '011'  : $abbrev_ctr = '-CENSERO/MVA/'.date('y');break;
                        case '013'  : $abbrev_ctr = '-CENSERO/TRO/'.date('y');break;
                        case '014'  : $abbrev_ctr = '-CENSERO/ABA/'.date('y');break;
                        case '015'  : $abbrev_ctr = '-CENSERO/ATR/'.date('y');break;
                        case '016'  : $abbrev_ctr = '-CENSERO/AKA/'.date('y');break;
                        case '017'  : $abbrev_ctr = '-CENSERO/FVE/'.date('y');break;
                        case '017'  : $abbrev_ctr = '-CENSERO/FVE/'.date('y');break;
                        case '018'  : $abbrev_ctr = '-CENSERO/MOG/'.date('y');break;
                        case '019'  : $abbrev_ctr = '-CENSERO/SVA/'.date('y');break;
                        case '020'  : $abbrev_ctr = '-CENSERO/MGA/'.date('y');break;
                        case '021'  : $abbrev_ctr = '-CENSERO/MRA/'.date('y');break;
                        case '022'  : $abbrev_ctr = '-CENSERO/FNA/'.date('y');break;
                        case '023'  : $abbrev_ctr = '-CENSERO/ABE/'.date('y');break;
                        case '024'  : $abbrev_ctr = '-CENSERO/CRT/ANT/'.date('y');break;
                        case '025'  : $abbrev_ctr = '-CENSERO/IHO/'.date('y');break;
                        case '026'  : $abbrev_ctr = '-CENSERO/ATH/'.date('y');break;
                        case '027'  : $abbrev_ctr = '-CENSERO/TDD/'.date('y');break;
                        case '029'  : $abbrev_ctr = '-CENSERO/NSB/'.date('y');break;
                        default     : $abbrev_ctr = '-DGSR/DOR/'.date('y');break;
                    }
                    /* $_result[$_j]->ref = $_re->getCtControle().$abbrev_ctr; */
                    $_result[$_j]->ref = $_re->getCtControle();
                    $_result[$_j]->imm = '-';
                    $_result[$_j]->used     = $_used;
                    $_result[$_j]->ncrt     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date), array_column($_result, 'ncrt')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carnet d\'entretien', $_date) : '-';
                    $_result[$_j]->ncbl     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date), array_column($_result, 'ncbl')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte blanche', $_date) : '-';
                    $_result[$_j]->nbbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date), array_column($_result, 'nbbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32 Bis', $_date) : '-';
                    $_result[$_j]->ncjn     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date), array_column($_result, 'ncjn')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune', $_date) : '-';
                    $_result[$_j]->njbr     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date), array_column($_result, 'njbr')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte jaune barrée rouge', $_date) : '-';
                    $_result[$_j]->ncrg     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date), array_column($_result, 'ncrg')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte rouge', $_date) : '-';
                    $_result[$_j]->ncae     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date), array_column($_result, 'ncae')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Carte auto-école', $_date) : '-';
                    $_result[$_j]->plch     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date), array_column($_result, 'plch')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'Plaque chassis', $_date) : '-';
                    $_result[$_j]->ncim31   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date), array_column($_result, 'ncim31')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31', $_date) : '-';
                    $_result[$_j]->ncim31b  = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date), array_column($_result, 'ncim31b')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 31 Bis', $_date) : '-';
                    $_result[$_j]->ncim32   = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date), array_column($_result, 'ncim32')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'CIM 32', $_date) : '-';
                    $_result[$_j]->npvo     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date), array_column($_result, 'npvo')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVO', $_date) : '-';
                    $_result[$_j]->npvm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date), array_column($_result, 'npvm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVM', $_date) : '-';
                    $_result[$_j]->npcm     = !in_array($this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date), array_column($_result, 'npcm')) ? $this->getNumITByControleAndTypeIT($_centre, $_re->getCtControle(), 'PVMC', $_date) : '-';
                    $_result[$_j]->adm      = '-';
                    $_result[$_j]->obs      = '-';
                    break;
            }
            ++$_j;
        }
        return $_result;
    }

    /**
     * Générer feuille d'utilisation des IT
     *  @param  $_centre : ID du centre exploitant
     *  @param  $_date : Date d'exploitation
     *  @return array  array()
     */
    public function genererFeuilleITUsed($_centre, $_date)
    {
        // Récupérer manager
        $_centre_manager= $this->_container->get(ServiceName::SRV_METIER_CENTRE);
        $_bordereau_manager= $this->_container->get(ServiceName::SRV_METIER_BORDEREAU);

        if($_centre == 0) {
            $_ct_user_id= $this->_container->get('security.token_storage')->getToken()->getUser();
            $_centre    = $_ct_user_id->getCtCentre();
        }else{
            $_centre = $_centre_manager->getCtCentreById($_centre);
        }
        /* Récupération informations chef de centre et lieu centre */
        $_nom_centre    = $_centre->getCtrNom();
        $_code_centre   = $_centre->getCtrCode();
        $_code_province = $_centre->getCtProvince()->getPrvCode();

        $_centre_formatted = $_bordereau_manager->transformcenter($_nom_centre);
        $_lieu_centre   = $_centre_formatted[1];
        $_nom_centre    = $_centre_formatted[2];

        // Récupérer répertoire modèle Word
        $_fuit_directory= $this->_container->getParameter('reporting_template_directory');
        $_template_src  = $_fuit_directory . PathReportingName::TEMPLATE_FEUILLE_IT_USED;
        $_date_filename = str_replace('/', '', $_date);
        $_path          = $_fuit_directory . PathReportingName::GENERATE_FEUILLE_IT_USED;

        $_fichier       = 'FEUILLE_UTILISATION_IT_'.$_code_province.'_'.$_code_centre.'_'. date('Yndhms');
        $_filename      = strtoupper($_fichier);

        $_dest_tmp      = $_path . $_filename . '.docx';
        $_file_without_ext  = $_filename;

        $_url_scheme    = $this->_container->get('request_stack')->getCurrentRequest()->server->get('HTTP_HOST');
        $_path_docx     = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_FEUILLE_IT_USED . $_filename . '.docx';
        $_path_pdf      = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_FEUILLE_IT_USED . $_filename . '.pdf';

        $_php_word      = new PhpWord();
        $_template      = $_php_word->loadTemplate($_template_src);

        // Centre, lieu centre et numéro BL
        $_template->setValue('centre', $_nom_centre);
        // $_template->setValue('lieu', $_lieu_centre);

        switch($_lieu_centre){
            case (preg_match('/alasora/i', $_lieu_centre) ? true : false) :
                    $_template->setValue('lieu', 'ALASORA');break;
            // case (preg_match('/VISITE A DOMICILE/i', $_lieu_centre) ? true : false) :
            //         $_template->setValue('lieu', 'ALAROBIA');break;
            case (preg_match('/itinerante/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', str_replace('ITINERANTE ', '', $_lieu_centre));break;
            default :
                $_template->setValue('lieu', $_lieu_centre);break;
        }

        if(preg_match('/ALASORA/', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower('ALASORA')));
        }elseif(preg_match('/ITINERANTE/', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower(str_replace('ITINERANTE ', '', $_lieu_centre))));
        }elseif(preg_match('/VISITE A DOMICILE : /', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower('ALAROBIA')));
        }else{
            $_template->setValue('lieuedition', ucfirst(strtolower($_lieu_centre)));
        }
        $_template->setValue('date', $_date);

        $_imprimes_used = $this->getAllITUsedInDaybyCentre($_centre, $_date);
        $_nb_imprimes_used = count($_imprimes_used);

        $_nbr_crt = 0;
        $_nbr_cbl = 0;
        $_nbr_bbr = 0;
        $_nbr_cjn = 0;
        $_nbr_jbr = 0;
        $_nbr_crg = 0;
        $_nbr_cae = 0;
        $_nbr_pch = 0;
        $_nbr_cim31 = 0;
        $_nbr_cim31b = 0;
        $_nbr_cim32 = 0;
        $_nbr_pvo = 0;
        $_nbr_pvm = 0;
        $_nbr_pcm = 0;
        $_nbr_adm = 0;

        $authenticite = 0;
        $autres = 0;
        $caracteristique = 0;
        $constatation = 0;
        $contre = 0;
        $duplicata = 0;
        $duplicatavt = 0;
        $duplicatart = 0;
        $mutation = 0;
        $rebus = 0;
        $reception = 0;
        $visite = 0;
        $special = 0;

        $_i = 0;
        $_k = 0;
        $_list_imm_ct = [];

        $_template->cloneRow('i', $_nb_imprimes_used);

        foreach($_imprimes_used as $_imprime_used)
        {
            ++$_i;

            // Récupérer tous les controles techniques
            if(($_imprime_used->imm != '-') AND (!in_array($_imprime_used->imm, $_list_imm_ct))){
                $_list_imm_ct[] = $_imprime_used->imm;
                $_k++;
            }
            //Récupérer nombre des utilisation par catégories
            $_imprime_used->used == 'Authenticité' ? $authenticite++ : $authenticite;
            $_imprime_used->used == 'Autres' ? $autres++ : $autres;
            $_imprime_used->used == 'Caractéristique' ? $caracteristique++ : $caracteristique;
            $_imprime_used->used == 'Constatation' ? $constatation++ : $constatation;
            $_imprime_used->used == 'Contre' ? $contre++ : $contre;
            $_imprime_used->used == 'Duplicata' ? $duplicata++ : $duplicata;
            $_imprime_used->used == 'Duplicata visite' ? $duplicatavt++ : $duplicatavt;
            $_imprime_used->used == 'Duplicata réception' ? $duplicatart++ : $duplicatart;
            $_imprime_used->used == 'Mutation' ? $mutation++ : $mutation;
            $_imprime_used->used == 'Rebut' ? $rebus++ : $rebus;
            $_imprime_used->used == 'Réception' ? $reception++ : $reception;
            $_imprime_used->used == 'Visite' ? $visite++ : $visite;
            $_imprime_used->used == 'Spéciale' ? $special++ : $special;

            // Récuperer nombre des IT utilisés pour chaque type
            $_imprime_used->ncrt    != '-' ? $_nbr_crt++ : $_nbr_crt;
            $_imprime_used->ncbl    != '-' ? $_nbr_cbl++ : $_nbr_cbl;
            $_imprime_used->nbbr    != '-' ? $_nbr_bbr++ : $_nbr_bbr;
            $_imprime_used->ncjn    != '-' ? $_nbr_cjn++ : $_nbr_cjn;
            $_imprime_used->njbr    != '-' ? $_nbr_jbr++ : $_nbr_jbr;
            $_imprime_used->ncrg    != '-' ? $_nbr_crg++ : $_nbr_crg;
            $_imprime_used->ncae    != '-' ? $_nbr_cae++ : $_nbr_cae;
            $_imprime_used->plch    != '-' ? $_nbr_pch++ : $_nbr_pch;
            $_imprime_used->ncim31  != '-' ? $_nbr_cim31++ : $_nbr_cim31;
            $_imprime_used->ncim31b != '-' ? $_nbr_cim31b++:$_nbr_cim31b;
            $_imprime_used->ncim32  != '-' ? $_nbr_cim32++:$_nbr_cim32;
            $_imprime_used->npvo    != '-' ? $_nbr_pvo++ : $_nbr_pvo;
            $_imprime_used->npvm    != '-' ? $_nbr_pvm++ : $_nbr_pvm;
            $_imprime_used->npcm    != '-' ? $_nbr_pcm++ : $_nbr_pcm;
            $_imprime_used->adm     != '-' ? $_nbr_adm++ : $_nbr_adm;

            $_template->setValue('i#' . $_i, $_i);
            $_template->setValue('ref#' . $_i, !preg_match_all('/Erreur/', $_imprime_used->ref) ? strtoupper($_imprime_used->ref):$_imprime_used->ref);
            $_template->setValue('imm#' . $_i, $_imprime_used->imm);
            $_template->setValue('used#' . $_i, $_imprime_used->used);
            $_template->setValue('ncrt#' . $_i, $_imprime_used->ncrt);
            $_template->setValue('ncbl#' . $_i, $_imprime_used->ncbl);
            $_template->setValue('nbbr#' . $_i, $_imprime_used->nbbr);
            $_template->setValue('ncjn#' . $_i, $_imprime_used->ncjn);
            $_template->setValue('njbr#' . $_i, $_imprime_used->njbr);
            $_template->setValue('ncrg#' . $_i, $_imprime_used->ncrg);
            $_template->setValue('ncae#' . $_i, $_imprime_used->ncae);
            $_template->setValue('plch#' . $_i, $_imprime_used->plch);
            $_template->setValue('ncim31#' . $_i, $_imprime_used->ncim31);
            $_template->setValue('ncim31b#' . $_i, $_imprime_used->ncim31b);
            $_template->setValue('ncim32#' . $_i, $_imprime_used->ncim32);
            $_template->setValue('npvo#' . $_i, $_imprime_used->npvo);
            $_template->setValue('npvm#' . $_i, $_imprime_used->npvm);
            $_template->setValue('npcm#' . $_i, $_imprime_used->npcm);
            $_template->setValue('adm#' . $_i, $_imprime_used->adm);
            $_template->setValue('obs#' . $_i, $_imprime_used->obs);
        }

        $_template->setValue('nbr_ct', number_format($_k, 0, ',', ' '));

        $_template->setValue('nbrcrt', number_format($_nbr_crt, 0, ',', ' '));
        $_template->setValue('nbrcbl', number_format($_nbr_cbl, 0, ',', ' '));
        $_template->setValue('nbrbbr', number_format($_nbr_bbr, 0, ',', ' '));
        $_template->setValue('nbrcjn', number_format($_nbr_cjn, 0, ',', ' '));
        $_template->setValue('nbrjbr', number_format($_nbr_jbr, 0, ',', ' '));
        $_template->setValue('nbrcrg', number_format($_nbr_crg, 0, ',', ' '));
        $_template->setValue('nbrcae', number_format($_nbr_cae, 0, ',', ' '));
        $_template->setValue('nbrpch', number_format($_nbr_pch, 0, ',', ' '));
        $_template->setValue('nbrcim31', number_format($_nbr_cim31, 0, ',', ' '));
        $_template->setValue('nbrcim31', number_format($_nbr_cim31, 0, ',', ' '));
        $_template->setValue('nbrcim31b', number_format($_nbr_cim31b, 0, ',', ' '));
        $_template->setValue('nbrcim32', number_format($_nbr_cim32, 0, ',', ' '));
        $_template->setValue('nbrpvo', number_format($_nbr_pvo, 0, ',', ' '));
        $_template->setValue('nbrpvm', number_format($_nbr_pvm, 0, ',', ' '));
        $_template->setValue('nbrpcm', number_format($_nbr_pcm, 0, ',', ' '));
        $_template->setValue('nbadm', number_format($_nbr_adm, 0, ',', ' '));

        $_template->setValue('aut', number_format($authenticite, 0, ',', ' '));
        $_template->setValue('oth', number_format($autres, 0, ',', ' '));
        $_template->setValue('ct', number_format($caracteristique, 0, ',', ' '));
        $_template->setValue('cad', number_format($constatation, 0, ',', ' '));
        $_template->setValue('con', number_format($contre, 0, ',', ' '));
        $_template->setValue('dup', number_format($duplicata, 0, ',', ' '));
        $_template->setValue('dupvt', number_format($duplicatavt, 0, ',', ' '));
        $_template->setValue('duprt', number_format($duplicatart, 0, ',', ' '));
        $_template->setValue('mut', number_format($mutation, 0, ',', ' '));
        $_template->setValue('reb', number_format($rebus, 0, ',', ' '));
        $_template->setValue('rt', number_format($reception, 0, ',', ' '));
        $_template->setValue('vt', number_format($visite, 0, ',', ' '));
        $_template->setValue('sp', number_format($special, 0, ',', ' '));

        $_template->setValue('total', number_format($_i, 0, ',', ' '));
        
        // Date d'édition de la feuille de caisse
        $_list_mois = array(1 => "janvier", 2 => "février", 3 => "mars", 4 => "avril", 5 => "mai", 6 => "juin", 7 => "juillet", 8 => "août", 9 => "septembre", 10 => "octobre", 11 => "novembre", 12 => "décembre");
        $_date_edition = date('d').' '.$_list_mois[date('n')].' '.date('Y').' à '. date('H:i:s');
        $_date_edition2 = date('d').' '.$_list_mois[date('n')].' '.date('Y');
        $_template->setValue('dateedition', $_date_edition2);
        $_template->setValue('datedition', $_date_edition);

        // Récupération nom de l'utilisateur éditeur de la feuille de caisse
        $user_connected = $this->_container->get('security.token_storage')->getToken()->getUser();
        $_operator = $user_connected->getUsrName();
        $_template->setValue('operator', $_operator);

        $_template->saveAs($_dest_tmp);

        // Recuperer manager
        $_em_cad = $this->_container->get(ServiceName::SRV_METIER_CONST_AV_DED);
        // Convertir en PDF
        $_dest_tmp = $_em_cad->convertToPdf($_path, $_file_without_ext);

        return array(
            'download_path' => $_dest_tmp,
            // 'url_path'      => $_path_docx
            'url_path'      => $_path_pdf
        );
    }

    /**
     *  Récuperer tous les imprimés techniques non utilisés par un centre dans une journée
     *  @param  $_centre : ID du centre exploitation
     *  @param  $_typeit : ID de l'imprimé technique
     *  @param  $_dateuse : date d'utilisation de l'imprimé technique
     *  @param  $_used : est déjà utilisé ou pas
     *  @return $_result : integer
     */
    public function getCompteITwithCondition($_centre, $_dateuse, $_used, $_typeit, $_position)
    {
        $_entity_it = EntityName::CT_IMPRIME_TECH;
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;

        ($_dateuse !== date('Y-m-d')) ? $_datefin = date('Y-m-d') : $_datefin = $_dateuse;
        
        if(is_null($_position)){
            if(is_null($_used)){
                $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                        WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id";
                $_query = $this->_entity_manager->createQuery($_dql);
                $_query->setParameter('ct_centre_id', $_centre);
                $_query->setParameter('ct_imprimetech_id', $_typeit);
            }else{
                $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                        WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.ituUsed = :ct_used_it";
                $_query = $this->_entity_manager->createQuery($_dql);
                $_query->setParameter('ct_centre_id', $_centre);
                $_query->setParameter('ct_imprimetech_id', $_typeit);
                $_query->setParameter('ct_used_it', $_used);
            }
        }else{
            switch($_position){
                case 'BEFORE' : 
                    if(is_null($_used)){
                        $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.activedAt < :actived_at
                                OR t.createdAt LIKE :create_now";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_imprimetech_id', $_typeit);
                        $_query->setParameter('actived_at', $_dateuse);
                        $_query->setParameter('create_now', date('Y-m-d').'%');
                    }else{
                        $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.ituUsed = :ct_used_it
                                AND t.activedAt < :actived_at OR t.createdAt LIKE :create_now";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_imprimetech_id', $_typeit);
                        $_query->setParameter('ct_used_it', $_used);
                        $_query->setParameter('actived_at', $_dateuse);
                        $_query->setParameter('create_now', date('Y-m-d').'%');
                    }
                    break;
                case 'IN' :
                    if(is_null($_used)){
                        $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.activedAt >= :date_debut
                                AND t.activedAt <= :date_fin";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_imprimetech_id', $_typeit);
                        $_query->setParameter('date_debut', $_dateuse);
                        $_query->setParameter('date_fin', $_datefin);
                    }else{
                        $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.ituUsed = :ct_used_it
                                AND t.activedAt >= :date_debut AND t.activedAt <= :date_fin";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_imprimetech_id', $_typeit);
                        $_query->setParameter('ct_used_it', $_used);
                        $_query->setParameter('date_debut', $_dateuse);
                        $_query->setParameter('date_fin', $_datefin);
                    }
                    break;
                case 'OUT' :
                    if(is_null($_used)){
                        if($_dateuse !== date('Y-m-d')){
                            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                    WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.createdAt >= :date_debut
                                    AND t.createdAt <= :date_fin";
                            $_query = $this->_entity_manager->createQuery($_dql);
                            $_query->setParameter('ct_centre_id', $_centre);
                            $_query->setParameter('ct_imprimetech_id', $_typeit);
                            $_query->setParameter('date_debut', $_dateuse);
                            $_query->setParameter('date_fin', $_datefin);
                        }else{
                            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                    WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.createdAt LIKE :date_debut";
                            $_query = $this->_entity_manager->createQuery($_dql);
                            $_query->setParameter('ct_centre_id', $_centre);
                            $_query->setParameter('ct_imprimetech_id', $_typeit);
                            $_query->setParameter('date_debut', $_dateuse.'%');
                        }
                    }else{
                        if($_dateuse !== date('Y-m-d')){
                            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                    WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.ituUsed = :ct_used_it
                                    AND t.createdAt >= :date_debut AND t.createdAt <= :date_fin";
                            $_query = $this->_entity_manager->createQuery($_dql);
                            $_query->setParameter('ct_centre_id', $_centre);
                            $_query->setParameter('ct_imprimetech_id', $_typeit);
                            $_query->setParameter('ct_used_it', $_used);
                            $_query->setParameter('date_debut', $_dateuse);
                            $_query->setParameter('date_fin', $_datefin);
                        }else{
                            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                    WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.ituUsed = :ct_used_it
                                    AND t.createdAt LIKE :date_debut";
                            $_query = $this->_entity_manager->createQuery($_dql);
                            $_query->setParameter('ct_centre_id', $_centre);
                            $_query->setParameter('ct_imprimetech_id', $_typeit);
                            $_query->setParameter('ct_used_it', $_used);
                            $_query->setParameter('date_debut', $_dateuse.'%');
                        }
                    }
                    break;
                default :
                    if(is_null($_used)){
                        $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id
                                AND t.activedAt >= :date_debut AND t.activedAt <= :date_fin";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_imprimetech_id', $_typeit);
                        $_query->setParameter('date_debut', $_dateuse);
                        $_query->setParameter('date_fin', $_datefin);
                    }else{
                        $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.ituUsed = :ct_used_it
                                AND t.activedAt >= :date_debut AND t.activedAt <= :date_fin";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_imprimetech_id', $_typeit);
                        $_query->setParameter('ct_used_it', $_used);
                        $_query->setParameter('date_debut', $_dateuse);
                        $_query->setParameter('date_fin', $_datefin);
                    }
            }
        }

        $_res = $_query->getResult();
        $_result = count($_res);
        return $_result;
    }

    /**
     *  Récupération du numéro minimum ou maximum d'une imprimé technique non utilisée pour un centre
     *  @param $_centre : ID du centre
     *  @param $_used   : 0 si l'imprimé est non utilisé et 1 dans le cas contraire
     *  @param $_typeit : type d'imprimé technique à chercher
     *  @param $_range  : type d'imprimé technique à chercher
     *  @return $_itu_numero : Numéro de l'imprimé technique récupéré
     */
    public function getMinOrMaxNumImprimeTech($_centre, $_used, $_typeit, $_range)
    {
        $_itu_numero = '-';
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;
        $_dql = "SELECT t
                        FROM $_entity_itu t
                WHERE   t.ctCentre = :ct_centre_id
                        AND t.ctImprimeTech = :ct_imprimetech_id
                        AND t.ituUsed = :ct_used_it
                ORDER BY t.ituNumero $_range";
        $_query = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('ct_centre_id', $_centre);
        $_query->setParameter('ct_imprimetech_id', $_typeit);
        $_query->setParameter('ct_used_it', $_used);
        $_query->setMaxResults(1);
        $_res = $_query->getResult();
        foreach($_res as $_res) { $_itu_numero = $_res->getItuNumero(); }
        return $_itu_numero;
    }

    /**
     *  Récupération des stock des imprimés techniques existant
     *  @param $_centre     : ID centre detenteur
     *  @param $_type_it    : Type d'imprimé technique à compter
     *  @param $_annee      : Année de consommation des imprimés techniques
     *  @param $_value      : Mois ou trimestre ou semestre de consommation des imprimés techniques
     *  @param $_interval   : Intervalle de consommation des imprimés techniques
     *  @param $_motif      : Motif d'utilisation de l'imprimée technique
     *  @return $_result    : Nombre des imprimés techniques consommées
     */
    public function getConsommationByImprimeTech($_centre, $_type_it, $_annee, $_value, $_interval, $_motif)
    {

        $_entity_it = EntityName::CT_IMPRIME_TECH;
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;

        ($_motif != null) ? $_motif_use = " AND t.ituMotifUsed = :motif_use" : $_motif_use = "";

        if ($_interval == "mensuel") {
            $_mois = $_value;
            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id WHERE t.ituUsed = :used AND
            t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND YEAR(t.createdAt) = :annee AND MONTH(t.createdAt) = :mois".$_motif_use."";
        } elseif ($_interval == "trimestriel") {
            if($_value == 1){
                $_mois = '1, 2, 3';
            } elseif($_value == 2){
                $_mois = '4, 5, 6';
            } elseif($_value == 3){
                $_mois = '7, 8, 9';
            } elseif($_value == 4){
                $_mois = '10, 11, 12';
            }
            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id WHERE t.ituUsed = :used AND
            t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND YEAR(t.createdAt) = :annee AND MONTH(t.createdAt) IN (:mois)".$_motif_use."";
        } elseif ($_interval == "semestriel") {
            if($_value == 1){
                $_mois = '1, 2, 3, 4, 5, 6';
            }else{
                $_mois = '7, 8, 9, 10, 11, 12';
            }
            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id WHERE t.ituUsed = :used AND
            t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND YEAR(t.createdAt) = :annee AND MONTH(t.createdAt) IN (:mois)".$_motif_use."";
        }else{
            $_mois = null;
            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id WHERE t.ituUsed = :used AND
            t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND YEAR(t.createdAt) = :annee".$_motif_use."";
        }
        $_query = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('used', 1);
        $_query->setParameter('ct_centre_id', $_centre);
        $_query->setParameter('ct_imprimetech_id', $_type_it);
        $_query->setParameter('annee', $_annee);
        if(!empty($_motif)) $_query->setParameter('motif_use', $_motif);
        if(!empty($_mois)) $_query->setParameter('mois', $_mois);
        $_res = $_query->getResult();
        $_result = count($_res);

        return $_result;
    }

    /**
     * Fonction récupérant le nombre d'IT par type non activé pour un centre
     * @param $_ct_imprime_tech_id : ID du type d'IT à traiter
     * @param $_ct_centre_id : ID du centre à traiter
     * @return $_nombre : Nombre d'IT pour un type non activé pour un centre
     */
    public function getCompteITNotActivedForOneCentre($_ct_centre_id, $_ct_imprime_tech_id){
        $_nombre = 0;
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;
        $_entity_be = EntityName::CT_BORDEREAU;
        // 1ère version
        $_dql = "SELECT b   FROM $_entity_be b
                            WHERE   b.ctCentre = :ct_centre_id
                                    AND b.ctImprimeTech = :ct_imprime_tech_id
                                    AND NOT b.id IN (SELECT DISTINCT u.ct_bordereau_id FROM $_entity_be u WHERE u.ctCentre = :ct_centre_id AND u.ctImprimeTech = :ct_imprime_tech_id)";
        $_query = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('ct_centre_id', $_ct_centre_id);
        $_query->setParameter('ct_imprime_tech_id', $_ct_imprime_tech_id);
        $_result= $_query->getResult();
        foreach($_result as $_r){
            $_debut = $_r->getBlDebutNumero();
            $_final = $_r->getBlFinNumero();
        }
        $_nombre = abs($_debut - $_final) + 1;
        // 2ème version
        /* $_dql0 = "SELECT DISTINCT u FROM $_entity_itu u WHERE u.ctCentre = :ct_centre_id AND u.ctImprimeTech = :ct_imprime_tech_id";
        $_query0 = $this->_entity_manager->createQuery($_dql0);
        $_query0->setParameter('ct_centre_id', $_ct_centre_id);
        $_query0->setParameter('ct_imprime_tech_id', $_ct_imprime_tech_id);
        $_result0 = $_query0->getResult();
        foreach($_result0 as $_r){
            $_ct_bordereau_id = $_r->getCtBordereau();
            $_dql = "SELECT b FROM $_entity_be b WHERE b.id = :ct_bordereau_id AND b.ctCentre = :ct_centre_id AND b.ctImprimeTech = :ct_imprime_tech_id";
            $_query = $this->_entity_manager->createQuery($_dql);
            $_query->setParameter('ct_bordereau_id', $_ct_bordereau_id);
            $_query->setParameter('ct_centre_id', $_ct_centre_id);
            $_query->setParameter('ct_imprime_tech_id', $_ct_imprime_tech_id);
            $_result = $_query->getResult();
            if(count($_result) > 0){
                foreach($_result as $_rr){
                    $_debut = $_rr->getBlDebutNumero();
                    $_final = $_rr->getBlFinNumero();
                }
                $_nombre = abs($_debut - $_final) + 1;
            }
        } */
        // 3ème version
        /* $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $query = "SELECT `bl_debut_numero`, `bl_fin_numero` FROM `ct_bordereau` WHERE `ct_centre_id` = 4 AND `ct_imprime_tech_id` = 1 AND `id` NOT IN (SELECT DISTINCT ct_bordereau_id FROM ct_imprime_tech_use WHERE ct_centre_id = 4 AND ct_imprime_tech_id = 1)";
        $result = $result = $em->createQuery($query)->execute();
        foreach ($result as $_r) {
            $_nombre += abs($_r['bl_debut_numero'] - $_r['bl_fin_numero']) + 1;
        } */
        return $_nombre;
    }

    /**
     *  Récupération des stock des imprimés techniques existant
     *  @param $_centre : ID centre detenteur
     *  @param $_dateuse: Date debut de traitement de stock
     *  @return $result : liste des imprimés techniques avec nombres en stock
     */
    public function getStockByImprimeTech($_centre, $_dateuse)
    {

        $_entity_it = EntityName::CT_IMPRIME_TECH;
        $_dql = "SELECT DISTINCT t FROM $_entity_it t ORDER BY t.nomImprimeTech ASC";
        $_query = $this->_entity_manager->createQuery($_dql);
        $_res = $_query->getResult();
        $result = [];
        $j = 0;
        foreach($_res as $_type_it)
        {
            $result[$j] = new \stdClass();
            $result[$j]->imprimeTech = $_type_it->getNomImprimeTech();
            $_typeit = $_type_it->getId();
            $_initial = $this->getCompteITwithCondition($_centre, $_dateuse, 0, $_typeit, 'BEFORE');
            $_entree = $this->getCompteITwithCondition($_centre, $_dateuse, 0, $_typeit, 'IN');
            $_sortie = $this->getCompteITwithCondition($_centre, $_dateuse, 1, $_typeit, 'OUT');
            $_stock = $this->getCompteITwithCondition($_centre, $_dateuse, 0, $_typeit, NULL);
            /* $_non_actived = $this->getCompteITNotActivedForOneCentre($_centre, $_typeit); */
            $result[$j]->initial = $_initial /* + $_non_actived */;
            $result[$j]->input = $_entree;
            $result[$j]->output = $_sortie;
            $result[$j]->instock = $_stock /* + $_non_actived */;
            $result[$j]->ndebut = $this->getMinOrMaxNumImprimeTech($_centre, 0, $_typeit, 'ASC');
            $result[$j]->nfin = $this->getMinOrMaxNumImprimeTech($_centre, 0, $_typeit, 'DESC');
            $j++;
        }

        return $result;
    }

    /**
     *  Récupérer si le centre a déjà des IT à jour dans le base de données
     *  @param $_centre : Identifiant du centre à traité
     *  @return boolean : vrai si le centre à des IT faux si dans le cas de contraite
     */
    public function getNombreITbyCentreInStock($_centre)
    {
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;
        $_entity_ctr = EntityName::CT_CENTRE;
        $_entity_manager_ctr = $this->_container->get(ServiceName::SRV_METIER_CENTRE);
        $_centre = $_entity_manager_ctr->getCtCentreById($_centre);
        $_ct_crtcode = $_centre->getCtrCode();
        /* $_dql = "SELECT t FROM $_entity_itu t WHERE t.ctCentre = :ct_centre_id"; */
        $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_ctr tt WITH t.ctCentre = tt.id WHERE tt.ctrCode = :ct_ctr_code";
        $_query = $this->_entity_manager->createQuery($_dql);
        /* $_query->setParameter('ct_centre_id', $_centre); */
        $_query->setParameter('ct_ctr_code', $_ct_crtcode);
        $_res = $_query->getResult();
        count($_res) != 0 ? $_exist = true : $_exist = false;
        return $_exist;
    }

    /**
     *  Générer feuille de stock des imprimés
     *  techniques d'un centre à une date données
     *  @param $centre : Identifiant du centre à traité
     *  @param $date : Date de l'établissement de la feuille de stock
     *  @return array : array()
     */
    public function genererFeuilleStockIT($_centre, $_date)
    {
        // Récupérer manager
        $_centre_manager= $this->_container->get(ServiceName::SRV_METIER_CENTRE);
        $_bordereau_manager= $this->_container->get(ServiceName::SRV_METIER_BORDEREAU);

        if($_centre == 0) {
            $_ct_user_id= $this->_container->get('security.token_storage')->getToken()->getUser();
            $_centre    = $_ct_user_id->getCtCentre();
        }else{
            $_centre = $_centre_manager->getCtCentreById($_centre);
        }

        /* Récupération informations chef de centre et lieu centre */
        $_nom_centre    = $_centre->getCtrNom();
        $_code_centre   = $_centre->getCtrCode();
        $_code_province = $_centre->getCtProvince()->getPrvCode();

        $_centre_formatted = $_bordereau_manager->transformcenter($_nom_centre);
        $_lieu_centre    = $_centre_formatted[1];
        $_nom_centre     = $_centre_formatted[2];

        // Récupérer répertoire modèle Word
        $_fuit_directory    = $this->_container->getParameter('reporting_template_directory');
        $_template_src      = $_fuit_directory . PathReportingName::TEMPLATE_FEUILLE_STOCK_IT;
        $_date_filename     = str_replace('/', '', $_date);
        $_path              = $_fuit_directory . PathReportingName::GENERATE_FEUILLE_STOCK_IT;

        $_fichier           = 'FEUILLE_STOCK_IT_'.$_code_centre.'_'.$_code_province . '_' . date('Yndhms');
        $_filename          = strtoupper($_fichier);

        $_dest_tmp          = $_path . $_filename . '.docx';
        $_file_without_ext  = $_filename;

        $_url_scheme    = $this->_container->get('request_stack')->getCurrentRequest()->server->get('HTTP_HOST');
        $_path_docx     = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_FEUILLE_STOCK_IT . $_filename . '.docx';
        $_path_pdf      = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_FEUILLE_STOCK_IT . $_filename . '.pdf';

        $_php_word      = new PhpWord();
        $_template      = $_php_word->loadTemplate($_template_src);

        $_fin = new \DateTime();
        $_fin = $_fin->format('Y-m-d');
        $_fin = implode('/',array_reverse  (explode('-', $_fin)));

        // Centre, lieu centre et numéro BL
        $_template->setValue('centre', $_nom_centre);
        // $_template->setValue('lieu', $_lieu_centre);
        switch($_lieu_centre){
            case (preg_match('/alarobia/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', '');break;
            case (preg_match('/alasora/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', 'ALASORA'. "\r\n" . '-----------------------');break;
            case (preg_match('/VISITE A DOMICILE/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', 'ALAROBIA'. "\r\n" . '-----------------------');break;
            case (preg_match('/itinerante/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', str_replace('ITINERANTE ', '', $_lieu_centre). "\r\n" . '-----------------------');break;
            default :
                $_template->setValue('lieu', $_lieu_centre. "\r\n" . '-----------------------');break;
        }

        $_template->setValue('debut', $_date);
        $_template->setValue('fin', $_fin);

        ($_date === $_fin) ? $_periode = "DU ".$_date : $_periode = "DU ".$_date." AU ".$_fin;
        $_titre = "ETAT DES STOCKS DES IMPRIMES TECHNIQUE". "\r\n" .$_periode;
        $_template->setValue('titre', $_titre);

        if(preg_match('/ALASORA/', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower('ALASORA')));
        }elseif(preg_match('/ITINERANTE/', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower(str_replace('ITINERANTE ', '', $_lieu_centre))));
        }elseif(preg_match('/VISITE A DOMICILE : /', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower('ALAROBIA')));
        }else{
            $_template->setValue('lieuedition', ucfirst(strtolower($_lieu_centre)));
        }

        $stocks = $this->getStockByImprimeTech($_centre, implode('-', array_reverse(explode('/', $_date))));
        $nstock = count($stocks);
        $_i = 0;
        $_template->cloneRow('i', $nstock);
        foreach($stocks as $instock)
        {
            ++$_i;
            $_template->setValue('i#'.$_i, $_i);
            $_template->setValue('imprime_technique#'.$_i, $instock->imprimeTech);
            $_template->setValue('initial#'.$_i, $instock->initial);
            $_template->setValue('input#'.$_i, $instock->input);
            $_template->setValue('output#'.$_i, $instock->output);
            $_template->setValue('instock#'.$_i, $instock->instock);
            $_template->setValue('ndebut#'.$_i, $instock->ndebut);
            $_template->setValue('nfin#'.$_i, $instock->nfin);
        }

        $_list_mois = array(1 => "janvier", 2 => "février", 3 => "mars", 4 => "avril", 5 => "mai", 6 => "juin", 7 => "juillet", 8 => "août", 9 => "septembre", 10 => "octobre", 11 => "novembre", 12 => "décembre");
        $_date_edition = date('d').' '.$_list_mois[date('n')].' '.date('Y').' à '. date('H:i:s');
        $_date_edition2 = date('d').' '.$_list_mois[date('n')].' '.date('Y');
        $_template->setValue('dateedition', $_date_edition2);
        $_template->setValue('datedition', $_date_edition);
        $_template->saveAs($_dest_tmp);

        // Recuperer manager
        $_em_cad = $this->_container->get(ServiceName::SRV_METIER_CONST_AV_DED);
        // Convertir en PDF
        $_dest_tmp = $_em_cad->convertToPdf($_path, $_file_without_ext);

        return array(
            'download_path' => $_dest_tmp,
            'url_path'      => $_path_pdf
            // 'url_path'      => $_path_docx
        );
    }

    /**
     * Générer un reporting annuel
     * @param integer $_id_centre
     * @param integer $_annee
     * @param string $_type_recep
     * @param string $_type_util
     * @return string
     */
    public function generateReportingByInterval($_id_centre, $_annee, $_value, $_interval)
    {
        /* Récupérer manager */
        $_centre_manager = $this->_container->get(ServiceName::SRV_METIER_CENTRE);

        /* Récupération informations Centre et province */
        $_centre = $_centre_manager->getCtCentreById($_id_centre);
        $_nom_centre = $_centre->getCtrNom();
        $_code_centre = $_centre->getCtrCode();
        $_nom_province = $_centre->getCtProvince()->getPrvNom();
        $_code_province = $_centre->getCtProvince()->getPrvCode();

        if ($_interval == "mensuel") {
            $_pref_num_pv = 'bilan_mensuel_'.$_value.'_';
        } elseif ($_interval == "trimestriel") {
            $_pref_num_pv = 'bilan_trimestriel_'.$_value.'_';
        } elseif ($_interval == "semestriel") {
            $_pref_num_pv = 'bilan_semestriel_'.$_value.'_';
        } else {
            $_pref_num_pv = 'bilan_annuel_';
        }

        $_tpl_reporting_name = PathReportingName::TEMPLATE_STATISTIQUE_UTILISATION_IT;
        $_gnr_reporting_name = PathReportingName::GENERATE_STATISTIQUE_UTILISATION_IT;

        // Récupérer répertoire modèle Word
        $_reporting_directory = $this->_container->getParameter('reporting_template_directory');
        $_template_bilan = $_reporting_directory . $_tpl_reporting_name;
        $_num_pv = $_pref_num_pv . $_nom_centre . '_' . $_code_centre . '_' . $_code_province . '_' . $_annee;
        $_filename = strtoupper($_num_pv);
        $_path = $_reporting_directory . $_gnr_reporting_name;
        $_dest_tmp = $_path . $_filename . '.docx';
        $_file_without_ext = $_filename;

        $_url_scheme = $this->_container->get('request_stack')->getCurrentRequest()->server->get('HTTP_HOST');
        $_path_docx = 'http://' . $_url_scheme . '/reporting/' . $_gnr_reporting_name . $_filename . '.docx';
        $_path_pdf = 'http://' . $_url_scheme . '/reporting/' . $_gnr_reporting_name . $_filename . '.pdf';

        $_php_word = new PhpWord();
        $_template = $_php_word->loadTemplate($_template_bilan);

        // Centre et province
        $_template->setValue('province', $_nom_province);
        $_template->setValue('centre', $_nom_centre);

        // Annee
        $_template->setValue('annee', $_annee);

        if ($_interval == "trimestriel" || $_interval == "semestriel") {
            $_template->setValue('num_interval', $_value);
        }

        $_list_mois = array(1 => "JANVIER",     2 => "FÉVRIER",     3 => "MARS",
                            4 => "AVRIL",       5 => "MAI",         6 => "JUIN",
                            7 => "JUILLET",     8 => "AOÛT",        9 => "SEPTEMBRE",
                            10 => "OCTOBRE",    11 => "NOVEMBRE",   12 => "DÉCEMBRE");

        if ($_interval == 'annuel') {
            $_template->setValue('value', '');
            $_template->setValue('rank', '');
            $_template->setValue('interval', 'ANNUEL');
        } elseif ($_interval == 'semestriel') {
            $_template->setValue('value', $_value);
            if ($_value == 1) {
                $_template->setValue('rank', 'er');
            } else {
                $_template->setValue('rank', 'ème');
            }
            $_template->setValue('interval', 'SEMESTRE');
        } elseif ($_interval == 'trimestriel') {
            $_template->setValue('value', $_value);
            if ($_value == 1) {
                $_template->setValue('rank', 'er');
            } else {
                $_template->setValue('rank', 'ème');
            }
            $_template->setValue('interval', 'TRIMESTRE');
        } elseif ($_interval == 'mensuel') {
            $_template->setValue('value', 'MOIS DE ' . $_list_mois[$_value]);
            $_template->setValue('rank', '');
            $_template->setValue('interval', '');
        }

        $_motifs = array('Authenticité', 'Autres', 'Caractéristique', 'Constatation', 'Contre', 'Duplicata', 'Duplicata visite', 'Duplicata réception', 'Mutation', 'Rebut', 'Réception', 'Visite', 'Spéciale');
        $i = 0;
        $nbmotifs = count($_motifs);
        $_template->cloneRow('motif', $nbmotifs);

        foreach($_motifs as $_motif){
            ++$i;
            $_template->setValue('motif#'.$i, $_motif);
            $_nb_ce     = $this->getConsommationByImprimeTech($_id_centre, 1, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbce#'.$i, number_format($_nb_ce, 0, ',', ' '));
            $_nb_cb     = $this->getConsommationByImprimeTech($_id_centre, 2, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcb#'.$i, number_format($_nb_cb, 0, ',', ' '));
            $_nb_cim32b = $this->getConsommationByImprimeTech($_id_centre, 3, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcim32b#'.$i, number_format($_nb_cim32b, 0, ',', ' '));
            $_nb_cj     = $this->getConsommationByImprimeTech($_id_centre, 4, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcj#'.$i, number_format($_nb_cj, 0, ',', ' '));
            $_nb_cjbr   = $this->getConsommationByImprimeTech($_id_centre, 5, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcjbr#'.$i, number_format($_nb_cjbr, 0, ',', ' '));
            $_nb_cr     = $this->getConsommationByImprimeTech($_id_centre, 6, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcr#'.$i, number_format($_nb_cr, 0, ',', ' '));
            $_nb_cae    = $this->getConsommationByImprimeTech($_id_centre, 7, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcae#'.$i, number_format($_nb_cae, 0, ',', ' '));
            $_nb_plq    = $this->getConsommationByImprimeTech($_id_centre, 8, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbplq#'.$i, number_format($_nb_plq, 0, ',', ' '));
            $_nb_cim31  = $this->getConsommationByImprimeTech($_id_centre, 9, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcim31#'.$i, number_format($_nb_cim31, 0, ',', ' '));
            $_nb_cim31b = $this->getConsommationByImprimeTech($_id_centre, 10, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcim31b#'.$i, number_format($_nb_cim31b, 0, ',', ' '));
            $_nb_cim32  = $this->getConsommationByImprimeTech($_id_centre, 11, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcim32#'.$i, number_format($_nb_cim32, 0, ',', ' '));
            $_nb_pvo    = $this->getConsommationByImprimeTech($_id_centre, 12, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbpv#'.$i, number_format($_nb_pvo, 0, ',', ' '));
            $_nb_pvm    = $this->getConsommationByImprimeTech($_id_centre, 13, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbpvm#'.$i, number_format($_nb_pvm, 0, ',', ' '));
            $_nb_pvcm   = $this->getConsommationByImprimeTech($_id_centre, 14, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbpvcm#'.$i, number_format($_nb_pvcm, 0, ',', ' '));
        }

        // Total récupération des données et statistiques
        $_nbr_ce = $this->getConsommationByImprimeTech($_id_centre, 1, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrce', number_format($_nbr_ce, 0, ',', ' '));
        $_nbr_cb = $this->getConsommationByImprimeTech($_id_centre, 2, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcb', number_format($_nbr_cb, 0, ',', ' '));
        $_nbr_cim32b = $this->getConsommationByImprimeTech($_id_centre, 3, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcim32b', number_format($_nbr_cim32b, 0, ',', ' '));
        $_nbr_cj = $this->getConsommationByImprimeTech($_id_centre, 4, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcj', number_format($_nbr_cj, 0, ',', ' '));
        $_nbr_cjbr = $this->getConsommationByImprimeTech($_id_centre, 5, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcjbr', number_format($_nbr_cjbr, 0, ',', ' '));
        $_nbr_cr = $this->getConsommationByImprimeTech($_id_centre, 6, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcr', number_format($_nbr_cr, 0, ',', ' '));
        $_nbr_cae = $this->getConsommationByImprimeTech($_id_centre, 7, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcae', number_format($_nbr_cae, 0, ',', ' '));
        $_nbr_plq = $this->getConsommationByImprimeTech($_id_centre, 8, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrplq', number_format($_nbr_plq, 0, ',', ' '));
        $_nbr_cim31 = $this->getConsommationByImprimeTech($_id_centre, 9, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcim31', number_format($_nbr_cim31, 0, ',', ' '));
        $_nbr_cim31b = $this->getConsommationByImprimeTech($_id_centre, 10, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcim31b', number_format($_nbr_cim31b, 0, ',', ' '));
        $_nbr_cim32 = $this->getConsommationByImprimeTech($_id_centre, 11, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcim32', number_format($_nbr_cim32, 0, ',', ' '));
        $_nbr_pvo = $this->getConsommationByImprimeTech($_id_centre, 12, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrpv', number_format($_nbr_pvo, 0, ',', ' '));
        $_nbr_pvm = $this->getConsommationByImprimeTech($_id_centre, 13, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrpvm', number_format($_nbr_pvm, 0, ',', ' '));
        $_nbr_pvcm = $this->getConsommationByImprimeTech($_id_centre, 14, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrpvcm', number_format($_nbr_pvcm, 0, ',', ' '));


        $_template->saveAs($_dest_tmp);

        // Recuperer manager
        $_const_av_ded_manager = $this->_container->get(ServiceName::SRV_METIER_CONST_AV_DED);
        // Convertir en PDF
        $_dest_tmp = $_const_av_ded_manager->convertToPdf($_path, $_file_without_ext);

        return array(
            'download_path' => $_dest_tmp,
            'url_path' => $_path_pdf
            // 'url_path' => $_path_docx
        );
    }

    /**
     *  Fonction permettant de tester un numéro d'imprimée technique s'il existe déjà ou non
     *  @param $_type_it: Type d'imprimée technique à tester
     *  @param $_num_it : Numéro de l'imprimée technique à tester
     *  @return $_trouve: si le numéro de l'imprimée technique est trouvé la valeur VRAI si non FAUX
     */
    public function TestNumImprimeTech($_type_it, $_num_it)
    {
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;
        $_trouve = false;
        $_sql    = "SELECT t
                    FROM    $_entity_itu t 
                    WHERE   t.ctImprimeTech = :ct_imprimetech_id
                            AND t.ituNumero != :itu_numero";
        $_query  = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter('ct_imprimetech_id', $_type_it);
        $_query->setParameter('itu_numero', $_num_it);
        $_ret = $_query->getResult();
        $_nombre = count($_ret);
        if($_nombre != 0) $_trouve = true;
        return $_trouve;
    }

    /**
     *  Fonction permettant de tester si le numéro de l'IT existe déjà dans la liste des IT
     *  @param $idbe    : Identifiant du bordereau d'envoi
     *  @param $idctr   : Identifiant du centre destinataire
     *  @param $idit    : Identifiant du type IT
     *  @param $num     : Numéro de l'IT à tester
     *  @return $exist  : Booléen VRAI si le $num est trouvé, FAUX dans le cas contraire
     */
    public function FindIfNumExistInList($idbe, $idctr, $idit, $num){
        $exist  = false;
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;
        $_dql   = "SELECT   t
                        FROM    $_entity_itu t
                        WHERE   t.ctBordereau = :idbe
                                AND t.ctCentre = :idctr
                                AND t.ctImprimeTech = :idit
                                AND t.ituNumero = :num";
        $_query  = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('idbe', $idbe);
        $_query->setParameter('idctr', $idctr);
        $_query->setParameter('idit', $idit);
        $_query->setParameter('num', $num);
        $_ret = $_query->getResult();
        $_nombre = count($_ret);
        if($_nombre != 0) $exist = true;
        return $exist;
    }

    /**
     *  Fonction permet de tester si le numéro d'IT est déja dans la liste des IT utilisé
     *  @param $_itu_numero : Numero de l'IT à tester
     *  @param $_array      : Tableau des munéros d'IT utilisés
     *  @return $_trouve    : Booléen VRAI si le numéro est trouvé, FAUX dans le cas contraire
     */
    public function findNumeroImprimeTechUsedInArray($_itu_numero, $_array){
        $_trouve = false;
        $cle_array = array_keys($_array);
        foreach($cle_array as $_column){
            if(in_array($_itu_numero, array_column($_array, $_column))) $_trouve = true; break;
        }
        return $_trouve;
    }

    /**
     * Fonction permettant de savoir si un IT est déja utilisé ou non
     * @param $_id : Identifiant de l'IT
     * @return $_is_used : Booléan (TRUE or FALSE) 
     */
    public function isUsed($_id){
        $_imprimes = $this->getCtImprimeTechUseById($_id);
        $_is_used = $_imprimes->getItuUsed();
        return $_is_used;
    }

    /**
     *  Fonction testant si le N° controle entré appartient au centre
     *  qui fait la mise à jour de l'utilisation IT
     *  @param $_ct_controle_id : Integer ID du controle technique à verifier
     *  @return $_is_your_controle : Boolean résultat de la recherche
     */
    public function isYourCtControle($_type_ct, $_ct_controle_id){
        $_ct_user_id= $this->_container->get('security.token_storage')->getToken()->getUser();
        $_ct_centre_id_user = $_ct_user_id->getCtCentre();
        $_is_your_controle = FALSE;
        $_manager_visite = $this->_container->get(ServiceName::SRV_METIER_VISITE);
        $_manager_reception = $this->_container->get(ServiceName::SRV_METIER_RECEPTION);
        $_manager_constatation = $this->_container->get(ServiceName::SRV_METIER_CONST_AV_DED);
        if($_type_ct == 'Constatation'){
            $_cad = $_manager_constatation->getCtConstatationAvDedouanementById($_ct_controle_id);
            if(($_cad) AND $_ct_centre_id_user == $_cad->getCtCentre())
                    $_is_your_controle = TRUE;
        }
        else if($_type_ct == 'Réception' OR $_type_ct == 'Duplicata réception'){
            $_rt = $_manager_reception->getCtReceptionById($_ct_controle_id);
            if(($_rt) AND $_ct_centre_id_user == $_rt->getCtCentre())
                $_is_your_controle = TRUE;
        }
        else if($_type_ct == 'Visite' OR $_type_ct == 'Contre' OR $_type_ct == 'Duplicata visite' OR $_type_ct == 'Spéciale'){
            $_vt = $_manager_visite->getCtVisiteById($_ct_controle_id);
            if(($_vt) AND $_ct_centre_id_user == $_vt->getCtCentre())
                $_is_your_controle = TRUE;
        }
        return $_is_your_controle;
    }


    /**
     * Générer feuille d'utilisation des IT
     *  @param  $_centre : ID du centre exploitant
     *  @param  $_date : Date d'exploitation
     *  @return array  array()
     */    
    public function genererNewFeuilleCaisse($_centre, $_date){
        $_list_mois = array(1 => "janvier", 2 => "février", 3 => "mars", 4 => "avril", 5 => "mai", 6 => "juin", 7 => "juillet", 8 => "août", 9 => "septembre", 10 => "octobre", 11 => "novembre", 12 => "décembre");

        // Récupérer manager
        $_srv_centre = $this->_container->get(ServiceName::SRV_METIER_CENTRE);
        $_srv_bordereau = $this->_container->get(ServiceName::SRV_METIER_BORDEREAU);

        if($_centre == 0) {
            $_ct_user_id= $this->_container->get('security.token_storage')->getToken()->getUser();
            $_centre    = $_ct_user_id->getCtCentre();
        }else{
            $_centre = $_srv_centre->getCtCentreById($_centre);
        }
        /* Récupération informations chef de centre et lieu centre */
        $_nom_centre    = $_centre->getCtrNom();
        $_code_centre   = $_centre->getCtrCode();
        $_code_province = $_centre->getCtProvince()->getPrvCode();

        $_centre_formatted = $_srv_bordereau->transformcenter($_nom_centre);
        $_lieu_centre   = $_centre_formatted[1];
        $_nom_centre    = $_centre_formatted[2];

        // Récupérer répertoire modèle Word
        $_fuit_directory= $this->_container->getParameter('reporting_template_directory');
        $_template_src  = $_fuit_directory . PathReportingName::TEMPLATE_NOUVELLE_FEUILLE_CAISSE;
        $_date_filename = str_replace('/', '', $_date);
        $_path          = $_fuit_directory . PathReportingName::GENERATE_NOUVELLE_FEUILLE_CAISSE;

        $_fichier       = 'NOUVELLE_FEUILLE_CAISSE_'.$_code_province.'_'.$_code_centre.'_'. date('Yndhms');
        $_filename      = strtoupper($_fichier);

        $_dest_tmp      = $_path . $_filename . '.docx';
        $_file_without_ext  = $_filename;

        $_url_scheme    = $this->_container->get('request_stack')->getCurrentRequest()->server->get('HTTP_HOST');
        $_path_docx     = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_NOUVELLE_FEUILLE_CAISSE . $_filename . '.docx';
        $_path_pdf      = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_NOUVELLE_FEUILLE_CAISSE . $_filename . '.pdf';

        $_php_word      = new PhpWord();
        $_template      = $_php_word->loadTemplate($_template_src);

        // Centre, lieu centre et numéro BL
        $_template->setValue('centre', $_nom_centre);

        switch($_lieu_centre){
            case (preg_match('/alasora/i', $_lieu_centre) ? true : false) :
                    $_template->setValue('lieu', 'ALASORA');break;
            case (preg_match('/itinerante/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', str_replace('ITINERANTE ', '', $_lieu_centre));break;
            default :
                $_template->setValue('lieu', $_lieu_centre);break;
        }

        if(preg_match('/ALASORA/', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower('ALASORA')));
        }elseif(preg_match('/ITINERANTE/', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower(str_replace('ITINERANTE ', '', $_lieu_centre))));
        }elseif(preg_match('/VISITE A DOMICILE : /', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower('ALAROBIA')));
        }else{
            $_template->setValue('lieuedition', ucfirst(strtolower($_lieu_centre)));
        }
        $_template->setValue('date', strtoupper(date('d').' '.$_list_mois[date('n')].' '.date('Y')));

        $_imprimes_used = $this->getAllITUsedInDaybyCentre($_centre, $_date);
        $_nb_imprimes_used = count($_imprimes_used);

        $_nbr_crt = 0;
        $_nbr_cbl = 0;
        $_nbr_bbr = 0;
        $_nbr_cjn = 0;
        $_nbr_jbr = 0;
        $_nbr_crg = 0;
        $_nbr_cae = 0;
        $_nbr_pch = 0;
        $_nbr_cim31 = 0;
        $_nbr_cim31b = 0;
        $_nbr_cim32 = 0;
        $_nbr_pvo = 0;
        $_nbr_pvm = 0;
        $_nbr_pcm = 0;
        $_nbr_adm = 0;

        $authenticite = 0;
        $autres = 0;
        $caracteristique = 0;
        $constatation = 0;
        $contre = 0;
        $duplicata = 0;
        $duplicatavt = 0;
        $duplicatart = 0;
        $mutation = 0;
        $rebus = 0;
        $reception = 0;
        $visite = 0;
        $special = 0;

        $_i = 0;
        $_k = 0;
        $_list_imm_ct = [];

        $_template->cloneRow('i', $_nb_imprimes_used);

        foreach($_imprimes_used as $_imprime_used)
        {
            ++$_i;

            // Récupérer tous les controles techniques
            if(($_imprime_used->imm != '-') AND (!in_array($_imprime_used->imm, $_list_imm_ct))){
                $_list_imm_ct[] = $_imprime_used->imm;
                $_k++;
            }

            //Récupérer nombre des utilisation par catégories
            $_imprime_used->used == 'Authenticité' ? $authenticite++ : $authenticite;
            $_imprime_used->used == 'Autres' ? $autres++ : $autres;
            $_imprime_used->used == 'Caractéristique' ? $caracteristique++ : $caracteristique;
            $_imprime_used->used == 'Constatation' ? $constatation++ : $constatation;
            $_imprime_used->used == 'Contre' ? $contre++ : $contre;
            $_imprime_used->used == 'Duplicata' ? $duplicata++ : $duplicata;
            $_imprime_used->used == 'Duplicata visite' ? $duplicatavt++ : $duplicatavt;
            $_imprime_used->used == 'Duplicata réception' ? $duplicatart++ : $duplicatart;
            $_imprime_used->used == 'Mutation' ? $mutation++ : $mutation;
            $_imprime_used->used == 'Rebut' ? $rebus++ : $rebus;
            $_imprime_used->used == 'Réception' ? $reception++ : $reception;
            $_imprime_used->used == 'Visite' ? $visite++ : $visite;
            $_imprime_used->used == 'Spéciale' ? $special++ : $special;

            // Récuperer nombre des IT utilisés pour chaque type
            $_imprime_used->ncrt    != '-' ? $_nbr_crt++ : $_nbr_crt;
            $_imprime_used->ncbl    != '-' ? $_nbr_cbl++ : $_nbr_cbl;
            $_imprime_used->nbbr    != '-' ? $_nbr_bbr++ : $_nbr_bbr;
            $_imprime_used->ncjn    != '-' ? $_nbr_cjn++ : $_nbr_cjn;
            $_imprime_used->njbr    != '-' ? $_nbr_jbr++ : $_nbr_jbr;
            $_imprime_used->ncrg    != '-' ? $_nbr_crg++ : $_nbr_crg;
            $_imprime_used->ncae    != '-' ? $_nbr_cae++ : $_nbr_cae;
            $_imprime_used->plch    != '-' ? $_nbr_pch++ : $_nbr_pch;
            $_imprime_used->ncim31  != '-' ? $_nbr_cim31++ : $_nbr_cim31;
            $_imprime_used->ncim31b != '-' ? $_nbr_cim31b++:$_nbr_cim31b;
            $_imprime_used->ncim32  != '-' ? $_nbr_cim32++:$_nbr_cim32;
            $_imprime_used->npvo    != '-' ? $_nbr_pvo++ : $_nbr_pvo;
            $_imprime_used->npvm    != '-' ? $_nbr_pvm++ : $_nbr_pvm;
            $_imprime_used->npcm    != '-' ? $_nbr_pcm++ : $_nbr_pcm;
            $_imprime_used->obs     != '-' ? $_nbr_adm++ : $_nbr_adm;

            $_template->setValue('i#' . $_i, $_i);
            $_template->setValue('ref#' . $_i, !preg_match_all('/Erreur/', $_imprime_used->ref) ? strtoupper($_imprime_used->ref):$_imprime_used->ref);
            $_template->setValue('imm#' . $_i, $_imprime_used->imm);
            $_template->setValue('used#' . $_i, $_imprime_used->used);
            $_template->setValue('ncrt#' . $_i, $_imprime_used->ncrt);
            $_template->setValue('ncbl#' . $_i, $_imprime_used->ncbl);
            $_template->setValue('nbbr#' . $_i, $_imprime_used->nbbr);
            $_template->setValue('ncjn#' . $_i, $_imprime_used->ncjn);
            $_template->setValue('njbr#' . $_i, $_imprime_used->njbr);
            $_template->setValue('ncrg#' . $_i, $_imprime_used->ncrg);
            $_template->setValue('ncae#' . $_i, $_imprime_used->ncae);
            $_template->setValue('plch#' . $_i, $_imprime_used->plch);
            $_template->setValue('ncim31#' . $_i, $_imprime_used->ncim31);
            $_template->setValue('ncim31b#' . $_i, $_imprime_used->ncim31b);
            $_template->setValue('ncim32#' . $_i, $_imprime_used->ncim32);
            $_template->setValue('npvo#' . $_i, $_imprime_used->npvo);
            $_template->setValue('npvm#' . $_i, $_imprime_used->npvm);
            $_template->setValue('npcm#' . $_i, $_imprime_used->npcm);
            $_template->setValue('obs#' . $_i, $_imprime_used->obs);
        }

        $_template->setValue('nbr_ct', number_format($_k, 0, ',', ' '));

        $_template->setValue('nbrcrt', number_format($_nbr_crt, 0, ',', ' '));
        $_template->setValue('nbrcbl', number_format($_nbr_cbl, 0, ',', ' '));
        $_template->setValue('nbrbbr', number_format($_nbr_bbr, 0, ',', ' '));
        $_template->setValue('nbrcjn', number_format($_nbr_cjn, 0, ',', ' '));
        $_template->setValue('nbrjbr', number_format($_nbr_jbr, 0, ',', ' '));
        $_template->setValue('nbrcrg', number_format($_nbr_crg, 0, ',', ' '));
        $_template->setValue('nbrcae', number_format($_nbr_cae, 0, ',', ' '));
        $_template->setValue('nbrpch', number_format($_nbr_pch, 0, ',', ' '));
        $_template->setValue('nbrcim31', number_format($_nbr_cim31, 0, ',', ' '));
        $_template->setValue('nbrcim31', number_format($_nbr_cim31, 0, ',', ' '));
        $_template->setValue('nbrcim31b', number_format($_nbr_cim31b, 0, ',', ' '));
        $_template->setValue('nbrcim32', number_format($_nbr_cim32, 0, ',', ' '));
        $_template->setValue('nbrpvo', number_format($_nbr_pvo, 0, ',', ' '));
        $_template->setValue('nbrpvm', number_format($_nbr_pvm, 0, ',', ' '));
        $_template->setValue('nbrpcm', number_format($_nbr_pcm, 0, ',', ' '));
        $_template->setValue('nbobs', number_format($_nbr_adm, 0, ',', ' '));

        $_template->setValue('aut', number_format($authenticite, 0, ',', ' '));
        $_template->setValue('oth', number_format($autres, 0, ',', ' '));
        $_template->setValue('ct', number_format($caracteristique, 0, ',', ' '));
        $_template->setValue('cad', number_format($constatation, 0, ',', ' '));
        $_template->setValue('con', number_format($contre, 0, ',', ' '));
        $_template->setValue('dup', number_format($duplicata, 0, ',', ' '));
        $_template->setValue('dupvt', number_format($duplicatavt, 0, ',', ' '));
        $_template->setValue('duprt', number_format($duplicatart, 0, ',', ' '));
        $_template->setValue('mut', number_format($mutation, 0, ',', ' '));
        $_template->setValue('reb', number_format($rebus, 0, ',', ' '));
        $_template->setValue('rt', number_format($reception, 0, ',', ' '));
        $_template->setValue('vt', number_format($visite, 0, ',', ' '));
        $_template->setValue('sp', number_format($special, 0, ',', ' '));

        $_template->setValue('total', number_format($_i, 0, ',', ' '));
        
        // Date d'édition de la feuille de caisse
        $_date_edition = date('d').' '.$_list_mois[date('n')].' '.date('Y').' à '. date('H:i:s');
        $_date_edition2 = date('d').' '.$_list_mois[date('n')].' '.date('Y');
        $_template->setValue('dateedition', $_date_edition2);
        $_template->setValue('datedition', $_date_edition);

        // Récupération nom de l'utilisateur éditeur de la feuille de caisse
        $user_connected = $this->_container->get('security.token_storage')->getToken()->getUser();
        $_operator = $user_connected->getUsrName();
        $_template->setValue('operator', $_operator);

        $_template->saveAs($_dest_tmp);

        // Recuperer manager
        $_srv_cad = $this->_container->get(ServiceName::SRV_METIER_CONST_AV_DED);
        // Convertir en PDF
        $_dest_tmp = $_srv_cad->convertToPdf($_path, $_file_without_ext);

        return array(
            'download_path' => $_dest_tmp,
            // 'url_path'      => $_path_docx
            'url_path'      => $_path_pdf
        );
    }

    /**
     *  Générer feuille de stock des imprimés
     *  techniques d'un centre à une date données
     *  @param $centre : Identifiant du centre à traité
     *  @param $date : Date de l'établissement de la feuille de stock
     *  @return array : array()
     */
    public function genererNewFeuilleStockIT($_centre, $_mois)
    {
        /* Récupérer manager */
        $_centre_manager = $this->_container->get(ServiceName::SRV_METIER_CENTRE);
        $_bordereau_manager = $this->_container->get(ServiceName::SRV_METIER_BORDEREAU);
        $_em_imprimes = $this->_container->get(ServiceName::SRV_METIER_IMPRIME_TECH);
        $_em_utilisations = $this->_container->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);

        /* Initialisation des mois */
        $_list_mois = array(1 => "janvier", 2 => "février", 3 => "mars", 4 => "avril", 5 => "mai", 6 => "juin", 7 => "juillet", 8 => "août", 9 => "septembre", 10 => "octobre", 11 => "novembre", 12 => "décembre");
        $_mois_capt = array(1 => "JANVIER", 2 => "FEVRIER", 3 => "MARS", 4 => "AVRIL", 5 => "MAI", 6 => "JUIN", 7 => "JUILLET", 8 => "AOUT", 9 => "SEPTEMBRE", 10 => "OCTOBRE", 11 => "NOVEMBRE", 12 => "DECEMBRE");

        /* Récupération de l'ID du centre de l'utlisateur connecté ou choisi */
        if($_centre == 0) {
            $_ct_user_id = $this->_container->get('security.token_storage')->getToken()->getUser();
            $_centre = $_ct_user_id->getCtCentre();
        }else{
            $_centre = $_centre_manager->getCtCentreById($_centre);
        }

        $_ttt_mois = explode('-', $_mois);
        $_mois_ttt = in_array((int) $_ttt_mois[1], array(4, 8, 10)) ? 'MOIS D\''.$_mois_capt[(int) $_ttt_mois[1]].' '.$_ttt_mois[0]:'MOIS DE '.$_mois_capt[(int) $_ttt_mois[1]].' '.$_ttt_mois[0];

        /* Récupération informations chef de centre et lieu centre */
        $_id_centre = $_centre->getId();
        $_nom_centre = $_centre->getCtrNom();
        $_code_centre = $_centre->getCtrCode();
        $_code_province = $_centre->getCtProvince()->getPrvCode();

        $_centre_formatted = $_bordereau_manager->transformcenter($_nom_centre);
        $_lieu_centre = $_centre_formatted[1];
        $_nom_centre = $_centre_formatted[2];

        /* Récupérer répertoire modèle Word */
        $_fuit_directory = $this->_container->getParameter('reporting_template_directory');
        $_template_src = $_fuit_directory . PathReportingName::TEMPLATE_NOUVELLE_FEUILLE_STOCK_IT;
        $_path = $_fuit_directory . PathReportingName::GENERATE_NOUVELLE_FEUILLE_STOCK_IT;

        $_fichier = 'FEUILLE_STOCK_MENSUEL_IT_'.$_code_centre.'_'.$_code_province . '_' . preg_replace("![^a-z0-9]+!i", "_", $_mois_ttt);
        $_filename = strtoupper($_fichier);

        $_dest_tmp = $_path . $_filename . '.docx';
        $_file_without_ext = $_filename;

        $_url_scheme = $this->_container->get('request_stack')->getCurrentRequest()->server->get('HTTP_HOST');
        $_path_docx = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_NOUVELLE_FEUILLE_STOCK_IT . $_filename . '.docx';
        $_path_pdf = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_NOUVELLE_FEUILLE_STOCK_IT . $_filename . '.pdf';

        $_php_word = new PhpWord();
        $_template = $_php_word->loadTemplate($_template_src);

        /* Automatisation dernière ligne des l'attache du feuille de stock */
        $_template->setValue('centre', $_nom_centre);
        switch($_lieu_centre){
            case (preg_match('/alarobia/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', '');break;
            case (preg_match('/alasora/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', 'ALASORA'. "\r\n" . '-----------------------');break;
            case (preg_match('/VISITE A DOMICILE/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', 'ALAROBIA'. "\r\n" . '-----------------------');break;
            case (preg_match('/itinerante/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', str_replace('ITINERANTE ', '', $_lieu_centre). "\r\n" . '-----------------------');break;
            default :
                $_template->setValue('lieu', $_lieu_centre. "\r\n" . '-----------------------');break;
        }

        /* Régénération numéro du courrier */
        $_numero = $this->genererNumeroCourrier($_code_centre);
        $_template->setValue('numero', $_numero);

        $_template->setValue('mois', $_mois);

        $_titre = "SITUATION MENSUELLE DES IMPRIMES TECHNIQUES ".$_mois_ttt;
        /* $_titre = "SITUATION MENSUELLE DES IMPRIMES TECHNIQUES ". "\r\n" .$_mois_ttt; */
        $_template->setValue('titre', $_titre);

        if(preg_match('/ALASORA/', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower('ALASORA')));
        }elseif(preg_match('/ITINERANTE/', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower(str_replace('ITINERANTE ', '', $_lieu_centre))));
        }elseif(preg_match('/VISITE A DOMICILE : /', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower('ALAROBIA')));
        }else{
            $_template->setValue('lieuedition', ucfirst(strtolower($_lieu_centre)));
        }

        /* Etablissement sutiation de stock suivant type des imprimes existants */
        $_imprimes = $_em_imprimes->getAllCtImprimeTechByOrder(['nomImprimeTech'=>'ASC']);
        $_nimprime = count($_imprimes);
        $_i = 0;
        $_template->cloneRow('i', $_nimprime);
        foreach($_imprimes as $_imprime){
            ++$_i;
            $_template->setValue('i#'.$_i, $_i);
            $_template->setValue('imprime#'.$_i, $_imprime->getNomImprimeTech());
            $_ct_imprime_tech_id = $_imprime->getId();
            $_template->setValue('a#'.$_i, $this->getNombreITByConditions($_id_centre, $_mois, $_ct_imprime_tech_id, 'BEFORE'));
            $_template->setValue('b#'.$_i, $this->getNombreITByConditions($_id_centre, $_mois, $_ct_imprime_tech_id, 'ENTRING'));
            $_template->setValue('c#'.$_i, $this->getNombreITByConditions($_id_centre, $_mois, $_ct_imprime_tech_id, 'DURING'));
            $_template->setValue('d1#'.$_i, $this->getSumITUsedInMonthWithMotif($_id_centre, $_ct_imprime_tech_id, $_mois, 'Particulier'));
            $_template->setValue('d2#'.$_i, $this->getSumITUsedInMonthWithMotif($_id_centre, $_ct_imprime_tech_id, $_mois, 'Administratif'));
            $_template->setValue('d3#'.$_i, $this->getNombreITByConditions($_id_centre, $_mois, $_ct_imprime_tech_id, 'REBUTS'));
            $_template->setValue('d#'.$_i, $this->getNombreITByConditions($_id_centre, $_mois, $_ct_imprime_tech_id, 'OUTING'));
            $_template->setValue('e#'.$_i, $this->getNombreITByConditions($_id_centre, $_mois, $_ct_imprime_tech_id, 'ENDING'));
            $sd =   $this->getSumITUsedInMonthWithMotif($_id_centre, $_ct_imprime_tech_id, $_mois, 'Particulier') +
                    $this->getSumITUsedInMonthWithMotif($_id_centre, $_ct_imprime_tech_id, $_mois, 'Administratif') + 
                    $this->getNombreITByConditions($_id_centre, $_mois, $_ct_imprime_tech_id, 'REBUTS');
            $dd =   $this->getNombreITByConditions($_id_centre, $_mois, $_ct_imprime_tech_id, 'OUTING');
            if(($sd != $dd)){
                $_template->setValue('obs#'.$_i, "A vérifier l'écart de ".($dd - $sd)." IT.");
            }else{
                $_template->setValue('obs#'.$_i, "");
            }
        }

        /* Récupération nom de l'utilisateur éditeur de la feuille de caisse */
        $user_connected = $this->_container->get('security.token_storage')->getToken()->getUser();
        $_operator = $user_connected->getUsrName();
        $_template->setValue('operator', $_operator);

        /* Etablissement date d'édition et de signature automatique */
        $_date_edition = date('d').' '.$_list_mois[date('n')].' '.date('Y').' à '. date('H:i:s');
        $_date_edition2 = date('d').' '.$_list_mois[date('n')].' '.date('Y');
        $_template->setValue('dateedition', $_date_edition2);
        $_template->setValue('datedition', $_date_edition);

        $_template->saveAs($_dest_tmp);

        /* Recuperer manager */
        $_em_cad = $this->_container->get(ServiceName::SRV_METIER_CONST_AV_DED);
        /* Convertir en PDF */
        $_dest_tmp = $_em_cad->convertToPdf($_path, $_file_without_ext);

        return array(
            'download_path' => $_dest_tmp,
            'url_path'      => $_path_pdf
            /* 'url_path'      => $_path_docx */
        );
    }

    /**
     *  Fonction permettant de générer le n° d'un courrier d'un centre
     *  @param $ctr_code : code centre
     *  @return $_numero : numéro de courrier généré
     */
    public function genererNumeroCourrier($ctr_code)
    {
        switch($ctr_code){
            case '001'  : $_numero = 'NR____________/CENSERO</ANT/'.date('y');break;
            case '002'  : $_numero = 'NR____________/CENSERO/BLG/'.date('y');break;
            case '003'  : $_numero = 'NR____________/CENSERO/NNA/'.date('y');break;
            case '004'  : $_numero = 'NR____________/CENSERO/ALS/'.date('y');break;
            case '005'  : $_numero = 'NR____________/CENSERO/TNA/'.date('y');break;
            case '007'  : $_numero = 'NR____________/CENSERO/FNR/'.date('y');break;
            case '008'  : $_numero = 'NR____________/CENSERO/TLR/'.date('y');break;
            case '009'  : $_numero = 'NR____________/CENSERO/ANA/'.date('y');break;
            case '010'  : $_numero = 'NR____________/CENSERO/IVT/'.date('y');break;
            case '011'  : $_numero = 'NR____________/CENSERO/MVA/'.date('y');break;
            case '013'  : $_numero = 'NR____________/CENSERO/TRO/'.date('y');break;
            case '014'  : $_numero = 'NR____________/CENSERO/ABA/'.date('y');break;
            case '015'  : $_numero = 'NR____________/CENSERO/ATR/'.date('y');break;
            case '016'  : $_numero = 'NR____________/CENSERO/AKA/'.date('y');break;
            case '017'  : $_numero = 'NR____________/CENSERO/FVE/'.date('y');break;
            case '017'  : $_numero = 'NR____________/CENSERO/FVE/'.date('y');break;
            case '018'  : $_numero = 'NR____________/CENSERO/MOG/'.date('y');break;
            case '019'  : $_numero = 'NR____________/CENSERO/SVA/'.date('y');break;
            case '020'  : $_numero = 'NR____________/CENSERO/MGA/'.date('y');break;
            case '021'  : $_numero = 'NR____________/CENSERO/MRA/'.date('y');break;
            case '022'  : $_numero = 'NR____________/CENSERO/FNA/'.date('y');break;
            case '023'  : $_numero = 'NR____________/CENSERO/ABE/'.date('y');break;
            case '024'  : $_numero = 'NR____________/CRT/ANT/'.date('y');break;
            case '025'  : $_numero = 'NR____________/CENSERO/IHO/'.date('y');break;
            case '026'  : $_numero = 'NR____________/CENSERO/ATH/'.date('y');break;
            case '027'  : $_numero = 'NR____________/CENSERO/TDD/'.date('y');break;
            case '029'  : $_numero = 'NR____________/CENSERO/NSB/'.date('y');break;
            default     : $_numero = 'NR____________/DGSR/DOR/'.date('y');break;
        }
        return $_numero;
    }
    /**
     *  Fonction permettant de recuperer le nombre de IT suivant les conditions
     *  @param $_centre : ID du centre concerné
     *  @param $_mois : Mois à traiter
     *  @param $_used : Si l'imprimé technique est utilisé ou non
     *  @param $_type_it : Type de l'imprimé technique
     *  @param $_position : La position à traiter (avant, pendant, après)
     *  @return $_nombre : Nombre d'imprimé technique trouvés
     */
    public function getNombreITByConditions($_centre, $_mois, $_type_it, $_position)
    {
        $_date = new \DateTime();
        $_em_it = EntityName::CT_IMPRIME_TECH;
        $_em_ctr = EntityName::CT_CENTRE;
        $_em_itu = EntityName::CT_IMPRIME_TECH_USE;
        $_nombre = 0;
        $_debut = $_mois."-01";
        $_final = new DateTimeImmutable($_debut);
        $_final = $_final->modify('+1 month');
        $_tmois = array('01','02','03','04','05','06','07','08','09','10','11','12');
        $_tmttt = explode('-', $_mois);
        $_mmttt = $_tmttt[0] . '-' . $_tmois[(int)$_tmttt[1] + 1];
        $_volana = $_date->format('Y-n');
        switch($_position){
            /*  Valeur de A */
            case 'BEFORE' :
                $_dql = "SELECT COUNT(u.id) FROM $_em_itu u WHERE u.ctCentre IN (SELECT c.id FROM $_em_ctr c WHERE c.ctrCode = 
                        (SELECT cc.ctrCode FROM $_em_ctr cc WHERE cc.id = :ct_centre_id)) AND u.ctImprimeTech = :ct_prt_tech AND
                        u.activedAt < :debut_mois AND (u.ituUsed = 0 OR (u.ituUsed = 1 AND u.createdAt LIKE :mois))";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_prt_tech', $_type_it);
                        $_query->setParameter('debut_mois', $_debut);
                        $_query->setParameter('mois', $_mois."%");
                        break;
            /* Valeur de B */
            case 'ENTRING' :
                $_dql = "SELECT COUNT(u.id) FROM $_em_itu u WHERE u.ctCentre IN (SELECT c.id FROM $_em_ctr c WHERE c.ctrCode =
                        (SELECT cc.ctrCode FROM $_em_ctr cc WHERE cc.id = :ct_centre_id)) AND u.ctImprimeTech = :ct_prt_tech AND
                        u.activedAt LIKE :mois AND (u.ituUsed = 1 OR  u.ituUsed = 0)";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_prt_tech', $_type_it);
                        $_query->setParameter('mois', $_mois."%");
                        break;
            /* Valeur de C = A + B */
            case 'DURING' :
                $_dql = "SELECT COUNT(u.id) FROM $_em_itu u WHERE u.ctCentre IN (SELECT c.id FROM $_em_ctr c WHERE c.ctrCode = 
                        (SELECT cc.ctrCode FROM $_em_ctr cc WHERE cc.id = :ct_centre_id)) AND u.ctImprimeTech = :ct_prt_tech AND
                        ((u.activedAt < :debut_mois AND (u.ituUsed = 0 OR (u.ituUsed = 1 AND u.createdAt LIKE :mois))) OR 
                        (u.activedAt LIKE :mois AND (u.ituUsed = 1 OR  u.ituUsed = 0)))";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_prt_tech', $_type_it);
                        $_query->setParameter('debut_mois', $_debut);
                        $_query->setParameter('mois', $_mois."%");
                        break;
            /* Valeur de D = D1 + D2 + D3 */
            case 'OUTING' :
                $_dql = "SELECT COUNT(u.id) FROM $_em_itu u WHERE u.ctCentre IN (SELECT c.id FROM $_em_ctr c WHERE c.ctrCode = 
                        (SELECT cc.ctrCode FROM $_em_ctr cc WHERE cc.id = :ct_centre_id) AND u.ctImprimeTech = :ct_prt_tech AND
                        u.createdAt LIKE :mois AND u.ituUsed = 1)";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_prt_tech', $_type_it);
                        $_query->setParameter('mois', $_mois."%");
                        break;
            /* Valeur de D3 */
            case 'REBUTS' :
                $_dql = "SELECT COUNT(u.id) FROM $_em_itu u WHERE u.ctCentre IN (SELECT c.id FROM $_em_ctr c WHERE c.ctrCode = 
                        (SELECT cc.ctrCode FROM $_em_ctr cc WHERE cc.id = :ct_centre_id) AND u.ctImprimeTech = :ct_prt_tech AND
                        u.createdAt LIKE :mois AND u.ituUsed = 1 AND u.ituMotifUsed = 'Rebut')";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_prt_tech', $_type_it);
                        $_query->setParameter('mois', $_mois."%");
                        break;
            /* Valeur de E = C - D */
            case 'ENDING' :
                $_dql = "SELECT COUNT(u.id) FROM $_em_itu u WHERE u.ctCentre IN (SELECT c.id FROM $_em_ctr c WHERE c.ctrCode = 
                        (SELECT cc.ctrCode FROM $_em_ctr cc WHERE cc.id = :ct_centre_id)) AND u.ctImprimeTech = :ct_prt_tech AND
                        u.activedAt < :final AND (u.ituUsed = 0 OR (u.ituUsed = 1 AND u.createdAt >= :final))";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_prt_tech', $_type_it);
                        // $_query->setParameter('debut_mois', $_debut);
                        $_query->setParameter('final', $_final);
                        // $_query->setParameter('mois_after', $_mmttt.'%');
                        break;
        }

        $_nombre = $_query->getSingleScalarResult();

        return $_nombre;
    }

    /**
     *  Fonction recupérant le nombre des IT vendus durant un mois
     */
    public function getSumITUsedInMonthWithMotif($_centre, $_type_it, $_mois, $_admn)
    {
        /* Initialisation des entities */
        $_em_ctr= EntityName::CT_CENTRE;
        $_em_itu= EntityName::CT_IMPRIME_TECH_USE;
        $_em_vt = EntityName::CT_VISITE;
        $_em_rt = EntityName::CT_RECEPTION;
        $_em_cad= EntityName::CT_CONST_AV_DED;
        $_em_uti= EntityName::CT_UTILISATION;
        /* Récupération nombre IT utilisés pour les Spéciales */
        if($_admn == 'Particulier'){
            $_dql_other = "SELECT COUNT(u.id) FROM $_em_itu u WHERE u.ctCentre IN(SELECT c.id FROM $_em_ctr c WHERE c.ctrCode = (SELECT cc.ctrCode FROM $_em_ctr cc WHERE cc.id = :ct_centre_id))
                    AND u.ituUsed = :utilise AND u.ctImprimeTech = :type_it AND u.createdAt LIKE :mois AND (u.ituMotifUsed = 'Authenticité' OR u.ituMotifUsed = 'Autres' OR u.ituMotifUsed = 'Caractéristique'
                    OR u.ituMotifUsed = 'Duplicata' OR  u.ituMotifUsed = 'Duplicata visite' OR  u.ituMotifUsed = 'Duplicata réception' OR  u.ituMotifUsed = 'Duplicata réception' OR  u.ituMotifUsed = 'Mutation'
                    OR  u.ituMotifUsed = 'Spéciale')";
            $_query = $this->_entity_manager->createQuery($_dql_other);
            $_query->setParameter('ct_centre_id', $_centre);
            $_query->setParameter('utilise', 1);
            $_query->setParameter('type_it', $_type_it);
            $_query->setParameter('mois', $_mois.'%');
            $_nombre_other = $_query->getSingleScalarResult();
        }else{
            $_nombre_other = 0;
        }
        /* Récupérer nombre IT utilisés pour visite technique */
        $_dql_vt = "SELECT COUNT(u.id) FROM $_em_itu u INNER JOIN $_em_vt v WITH v.id = u.ctControle INNER JOIN $_em_uti ut WITH ut.id = v.ctUtilisation
                    WHERE u.ctCentre IN (SELECT c.id FROM $_em_ctr c WHERE c.ctrCode = (SELECT cc.ctrCode FROM $_em_ctr cc WHERE cc.id = :ct_centre_id))
                    AND u.ituUsed = :utilise AND u.ctImprimeTech = :type_it  AND u.createdAt LIKE :mois AND (u.ituMotifUsed = 'Visite' OR u.ituMotifUsed = 'Contre') AND ut.utLibelle = :motif";
        $_query_vt = $this->_entity_manager->createQuery($_dql_vt);
        $_query_vt->setParameter('ct_centre_id', $_centre);
        $_query_vt->setParameter('utilise', 1);
        $_query_vt->setParameter('type_it', $_type_it);
        $_query_vt->setParameter('mois', $_mois.'%');
        $_query_vt->setParameter('motif', $_admn);
        $_nombre_vt = $_query_vt->getSingleScalarResult();
        /* Récupérer nombre IT utilisés pour réception technique  */
        $_dql_rt = "SELECT COUNT(u.id) FROM $_em_itu u INNER JOIN $_em_vt v WITH v.id = u.ctControle INNER JOIN $_em_uti ut WITH ut.id = v.ctUtilisation
                    WHERE u.ctCentre IN (SELECT c.id FROM $_em_ctr c WHERE c.ctrCode = (SELECT cc.ctrCode FROM $_em_ctr cc WHERE cc.id = :ct_centre_id))
                    AND u.ituUsed = :utilise AND u.ctImprimeTech = :type_it  AND u.createdAt LIKE :mois AND u.ituMotifUsed = 'Réception' AND ut.utLibelle = :motif";
        $_query_rt = $this->_entity_manager->createQuery($_dql_rt);
        $_query_rt->setParameter('ct_centre_id', $_centre);
        $_query_rt->setParameter('utilise', 1);
        $_query_rt->setParameter('type_it', $_type_it);
        $_query_rt->setParameter('mois', $_mois.'%');
        $_query_rt->setParameter('motif', $_admn);
        $_nombre_rt = $_query_rt->getSingleScalarResult();
        /* Récupérer nombre IT utilisés pour constatation avant dedouanement */
        $_dql_cad = "SELECT COUNT(u.id) FROM $_em_itu u INNER JOIN $_em_vt v WITH v.id = u.ctControle INNER JOIN $_em_uti ut WITH ut.id = v.ctUtilisation
                    WHERE u.ctCentre IN (SELECT c.id FROM $_em_ctr c WHERE c.ctrCode = (SELECT cc.ctrCode FROM $_em_ctr cc WHERE cc.id = :ct_centre_id))
                    AND u.ituUsed = :utilise AND u.ctImprimeTech = :type_it  AND u.createdAt LIKE :mois AND u.ituMotifUsed = 'Constatation'"; /* AND ut.utLibelle = :motif */
        $_query_cad = $this->_entity_manager->createQuery($_dql_cad);
        $_query_cad->setParameter('ct_centre_id', $_centre);
        $_query_cad->setParameter('utilise', 1);
        $_query_cad->setParameter('type_it', $_type_it);
        $_query_cad->setParameter('mois', $_mois.'%');
        $_nombre_cad = $_query_cad->getSingleScalarResult();
        // $_nombre = $_nombre_au + $_nombre_ot + $_nombre_ca + $_nombre_du + $_nombre_dv + $_nombre_dr + $_nombre_mu + $_nombre_sp + $_nombre_vt + $_nombre_rt + $_nombre_cad ;
        $_nombre = $_nombre_other + $_nombre_vt + $_nombre_rt + $_nombre_cad ;
        return $_nombre;
    }

    /**
     *  Fonction permettant de recupérer l'ID d'un controle pour un centre
     *  @param $_type_controle  : Type contrôle à test (Visite, réception, constatation avant dédouannement)
     *  @param $_ct_controle_id : ID à contrôler dans le type de controle
     *  @return $_controle_id   : ID du controle si l'ID est trouvé dans le contrôle
     */
    public function getCtControleId($_type_controle, $_ct_controle_id)
    {
        // Initialisation _controle_id et _androany
        $_controle_id   = 0;
        $_androany      = date('Y-m-d');

        // Recupération centre de l'utilisateur connecté
        $_ct_centre_id = $this->_container->get('security.token_storage')->getToken()->getUser()->getCtCentre();

        if ($_type_controle === 'Visite' || $_type_controle === 'Contre')
        {
            $_entity_visite = EntityName::CT_VISITE;
            $dql = "SELECT v.id FROM $_entity_visite v WHERE v.id = ?1 AND v.ctCentre = ?2 AND v.vstCreated LIKE ?3";
            $query = $this->_entity_manager->createQuery($dql);
            $query->setParameter(1, $_ct_controle_id);
            $query->setParameter(2, $_ct_centre_id);
            $query->setParameter(3, $_androany.'%');
            $_controles = $query->getScalarResult();
            if($_controles)
                $_controle_id = $_controles->getId();
        }
        else if ($_type_controle === 'Réception')
        {
            $_entity_recep = EntityName::CT_RECEPTION;
            $dql = "SELECT r.id FROM $_entity_recep r WHERE r.id = ?1 AND r.ctCentre = ?2 AND r.rcpCreated LIKE ?3";
            $query = $this->_entity_manager->createQuery($dql);
            $query->setParameter(1, $_ct_controle_id);
            $query->setParameter(2, $_ct_centre_id);
            $query->setParameter(3, $_androany.'%');
            $_controles = $query->getScalarResult();
            if($_controles)
                $_controle_id = $_controles->getId();
        }
        else if ($_type_controle === 'Constatation')
        {
            $_entity_consta = EntityName::CT_CONST_AV_DED;
            $dql = "SELECT c.id FROM $_entity_consta c WHERE c.id = ?1 AND c.ctCentre = ?2 AND c.cadCreated LIKE ?3";
            $query = $this->_entity_manager->createQuery($dql);
            $query->setParameter(1, $_ct_controle_id);
            $query->setParameter(2, $_ct_centre_id);
            $query->setParameter(3, $_androany.'%');
            $_controles = $query->getScalarResult();
            if($_controles)
                $_controle_id = $_controles->getId();
        }
        
        return $_controle_id;
    }
}