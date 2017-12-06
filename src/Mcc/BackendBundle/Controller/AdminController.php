<?php

namespace Mcc\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;


class AdminController extends BaseAdminController
{

//    protected function initialize(Request $request)
//    {
//        //$this->get('translator')->setLocale('en');
//        parent::initialize($request);
//    }

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

    //-------------
    public function preUpdateCommandEntity($entity)
    {
//        foreach ($entity->getTags() as $tag) {
//            $entity->removeTag($tag);
//        }

        foreach ($entity->getTags() as $tag) {
            $tag->addCommand($entity);
        }

        if (method_exists($entity, 'setUpdatedAt')) {
            $entity->setUpdatedAt(new \DateTime());
        }
    }
    //-------------

//    /**
//     * @Route("/")
//     */
//    public function indexAction()
//    {
//        return $this->render('MccBackendBundle:Default:index.html.twig');
//    }
}
