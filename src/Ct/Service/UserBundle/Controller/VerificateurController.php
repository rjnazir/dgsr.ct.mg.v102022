<?php

namespace Ct\Service\UserBundle\Controller;

use Ct\Service\MetierManagerBundle\Utils\RoleName;
use Ct\Service\MetierManagerBundle\Utils\ServiceName;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Ct\Service\UserBundle\Entity\User;
use Ct\Service\UserBundle\Form\UserType;

use Ct\Service\MetierManagerBundle\Utils\EntityName;
use Ct\Service\MetierManagerBundle\Entity\Centre;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class VerificateurController
 *
 * @package UserBundle\Controller
 */
class VerificateurController extends Controller
{
    /**
     * Afficher tout les vérificateurs
     * @return Render page
     */
    public function indexAction()
    {
        // Récupérer manager
        $_user_manager = $this->get(ServiceName::SRV_METIER_USER);
        $_centre_id = $_user_manager->isChefDeCentre();
        $_is_super_admin = $_user_manager->isSuperAdmin();
        $_is_admin = $_user_manager->isAdmin();
        
        // Récupérer tout les vérificateurs
        if($_is_super_admin == true){
            $_users = $_user_manager->getAllUserByRole(
                ['ctRole' => RoleName::ID_ROLE_VERIFICATEUR],
                ['id' => 'DESC']
            );
        }else
        // Rcupérer le centres et ses sous-centres (itinérantes)
        if($_is_admin == true){
            $_centre_manager = $this->get(ServiceName::SRV_METIER_CENTRE);
            $_centre_connected = $_centre_manager->getCtCentreById($_centre_id);
            $_code_centre = $_centre_connected->getCtrCode();
            $_users = $_user_manager->getAllVerificateurByCentreAndSubCentres($_code_centre);
        }

        return $this->render('UserBundle:Verificateur:index.html.twig', array(
            'users' => $_users,
        ));
    }

     /**
     * Création verificateur
     * @param Request $_request requête
     * @return Render page
     */
    public function newAction(Request $_request)
    {
        // Récupérer manager
        $_user_manager = $this->get(ServiceName::SRV_METIER_USER);

        // Récupérer le centre de l'utilisateur connecté
        $_user_connected = $this->get('security.token_storage')->getToken()->getUser();

        $_user = new User();
        $_form = $this->createCreateForm($_user);
        $_form->handleRequest($_request);

        if ($_form->isSubmitted() && $_form->isValid()) {
            /* // Test existence email
            $_email_exist = $_user_manager->isEmailExist($_form['email']->getData());
            if ($_email_exist) {
                $_user_manager->setFlash('error', "Email déjà pris");

                return $this->redirectToRoute('verificateur_new');
            }

            // Teste existence username
            $_username_exist = $_user_manager->isUsernameExist($_form['username']->getData());
            if ($_username_exist) {
                $_user_manager->setFlash('error', "Nom d'utilisateur déjà pris");

                return $this->redirectToRoute('verificateur_new');
            } */

            // Enregistrement vérificateur
            $_user_manager->addVerificateur($_user, $_user_connected);

            $_user_manager->setFlash('success', "Vérificateur ajouté");

            return $this->redirect($this->generateUrl('verificateur_index'));
        }

        return $this->render('UserBundle:Verificateur:add.html.twig', array(
            'user' => $_user,
            'form' => $_form->createView(),
        ));
    }

    /**
     * Affichage page modification verificateur
     * @param User $_user
     * @return Render page
     */
    public function editAction(User $_user)
    {
        // Récupérer manager
        $_role_manager = $this->get(ServiceName::SRV_METIER_ROLE);
        $_centre_manager = $this->get(ServiceName::SRV_METIER_CENTRE);
        $_user_manager = $this->get(ServiceName::SRV_METIER_USER);

        if (!$_user) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        // Récupérer le centre de l'utilisateur connecté
        $_user_connected = $this->get('security.token_storage')->getToken()->getUser();
        /* $ctr_code = $_user_connected->getCtCentre()->getCtrCode();
        $_ct_role = $_user_connected->getCtRole(); */

        $_edit_form = $this->createEditForm($_user);

        return $this->render('UserBundle:Verificateur:edit.html.twig', array(
            'user' => $_user,
            'user_connected' => $_user_connected,
            'edit_form' => $_edit_form->createView()
        ));
    }

    /**
     * Modification vérificateur
     * @param Request $_request requête
     * @param User $_user
     * @return Render page
     */
    public function updateAction(Request $_request, User $_user)
    {
        // Récupérer manager
        $_user_manager = $this->get(ServiceName::SRV_METIER_USER);

        if (!$_user) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        // Récupérer le centre de l'utilisateur connecté
        $_user_connected = $this->get('security.token_storage')->getToken()->getUser();

        $_edit_form = $this->createEditForm($_user);
        $_edit_form->handleRequest($_request);

        if ($_edit_form->isValid()) {
            // Mise à jour vérificateur
            $_user_manager->updateVerificateur($_user, $_user_connected);

            $_user_manager->setFlash('success', "Vérificateur modifié");

            return $this->redirect($this->generateUrl('verificateur_index'));
        }

        return $this->render('UserBundle:Verificateur:edit.html.twig', array(
            'user'      => $_user,
            'edit_form' => $_edit_form->createView()
        ));
    }

    /**
     * Suppression vérificateur
     * @param Request $_request requête
     * @param User $_user
     * @return Redirect redirection
     */
    public function deleteAction(Request $_request, User $_user)
    {
        // Récupérer manager
        $_user_manager = $this->get(ServiceName::SRV_METIER_USER);

        $_form = $this->createDeleteForm($_user);
        $_form->handleRequest($_request);

        if ($_request->isMethod('GET') || ($_form->isSubmitted() && $_form->isValid())) {
            // Suppression vérificateur
            $_user_manager->deleteUser($_user);

            $_user_manager->setFlash('success', 'Vérificateur supprimé');
        }

        return $this->redirectToRoute('verificateur_index');
    }
    /**
     * Création formulaire d'édition verificateur
     * @param User $_user The entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(User $_user)
    {
        // Récupérer le centre de l'utilisateur connecté
        $_user_manager = $this->get(ServiceName::SRV_METIER_USER);
        $_user_connected = $this->get('security.token_storage')->getToken()->getUser();
        $ctrCode = $_user_connected->getCtCentre()->getCtrCode();
        $RoleName = $_user_connected->getCtRole()->getRoleName();

        $_form = $this->createForm(UserType::class, $_user, array(
            'action' => $this->generateUrl('verificateur_new'),
            'method' => 'POST',
            'RoleName' => $RoleName,
            'ctrCode' => $ctrCode,
        ));

        return $_form;
    }

    /**
     * Création formulaire de création vérificateur
     * @param User $_user The entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(User $_user)
    {
        // Récupérer le centre de l'utilisateur connecté
        $_user_manager = $this->get(ServiceName::SRV_METIER_USER);
        $_user_connected = $this->get('security.token_storage')->getToken()->getUser();
        $ctrCode = $_user_connected->getCtCentre()->getCtrCode();
        $RoleName = $_user_connected->getCtRole()->getRoleName();

        $_form = $this->createForm(UserType::class, $_user, array(
                'action'=> $this->generateUrl('verificateur_update', array('id' => $_user->getId())),
                'method'=> 'PUT',
                'RoleName' => $RoleName,
                'ctrCode' => $ctrCode,
            )
        );

        return $_form;
    }

    /**
     * Création formulaire de suppression vérificateur
     * @param User $_user The user entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $_user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('verificateur_delete', array('id' => $_user->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * Suppression par groupe séléctionnée
     * @param Request $_request
     * @return Redirect liste vérificateur
     */
    public function deleteGroupAction(Request $_request)
    {
        // Récupérer manager
        $_user_manager = $this->get(ServiceName::SRV_METIER_USER);

        if ($_request->request->get('_group_delete') !== null) {
            $_ids = $_request->request->get('delete');
            $_user_manager->deleteGroupUser($_ids);
        }

        $_user_manager->setFlash('success', 'Eléments sélectionnés supprimés');

        return $this->redirect($this->generateUrl('verificateur_index'));
    }
}