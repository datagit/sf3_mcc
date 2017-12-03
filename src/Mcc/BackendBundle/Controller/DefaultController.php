<?php

namespace Mcc\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;


class DefaultController extends BaseAdminController
{

    public function createNewUserEntity()
    {
        return $this->get('fos_user.user_manager')->createUser();
    }

    public function prePersistUserEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }

    public function preUpdateUserEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('MccBackendBundle:Default:index.html.twig');
    }
}
