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
        $comment->setAuthorName('newName');

        $form = $this->createFormBuilder($comment)
            ->add('email', 'text')
            ->add('authorName', 'text')
            ->add('body', 'text')
            ->add('save', 'submit', array('label' => 'Add comment'))
            ->getForm();



        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView()
        ));
    }
}
