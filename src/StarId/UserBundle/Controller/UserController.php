<?php

namespace StarId\UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use StarId\UserBundle\Entity\User;

/**
 * User controller.
 *
 */
class UserController extends Controller
{
    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('StarIdUserBundle:User')->findAll();

        return $this->container->get('templating')->renderResponse('StarIdUserBundle:User:index.html.twig', array(
                    'users' => $users,
                    'count_users' => count($users),
        ));
    }

    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction(User $user)
    {

        return $this->render('user/show.html.twig', array(
            'user' => $user,
        ));
    }
}
