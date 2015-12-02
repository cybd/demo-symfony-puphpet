<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Comment;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $comment = new Comment();

        $form = $this->createFormBuilder($comment)
            ->add('email', 'email', array('label' => 'Your email:'))
            ->add('authorName', 'text', array('label' => 'Your name:'))
            ->add('body', 'textarea', array('label' => 'Your message:'))
            ->add('save', 'submit', array('label' => 'Add comment'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // save data into database

//            return $this->redirectToRoute('comment_success');
        }

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView()
        ));
    }
}
