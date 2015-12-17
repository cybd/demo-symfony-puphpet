<?php
/**
 * Created by PhpStorm.
 * User: sergeimatros
 * Date: 12/11/15
 * Time: 1:54 PM
 */

namespace AppBundle\Form\Type;

use FOS\CommentBundle\Form\CommentType as BaseCommentType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends BaseCommentType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('email', 'email', array('label' => 'Your email:'))
            ->add('authorName', 'text', array('label' => 'Your name:'))
            ->add('captcha', 'captcha')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
//        parent::configureOptions($resolver);

        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Comment',
        ));
    }

    public function getName()
    {
        return 'comment';
    }
}