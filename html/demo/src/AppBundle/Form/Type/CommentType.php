<?php
/**
 * Created by PhpStorm.
 * User: sergeimatros
 * Date: 12/2/15
 * Time: 5:23 PM
 */

namespace AppBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\CommentBundle\Form\CommentType as BaseCommentType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends BaseCommentType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('email', 'email', array('label' => 'Your email:'))
            ->add('authorName', 'text', array('label' => 'Your name:'))
            ->add('save', 'submit', array('label' => 'Add comment'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'AppBundle\Entity\Comment',
            )
        );
    }

    public function getName()
    {
        return 'comment';
    }
}