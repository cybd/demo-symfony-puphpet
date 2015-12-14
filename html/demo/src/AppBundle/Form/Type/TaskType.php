<?php
/**
 * Created by PhpStorm.
 * User: sergeimatros
 * Date: 12/14/15
 * Time: 2:49 PM
 */

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('task', 'text', array('label' => 'Text for task: '))
            ->add('dueDate', 'date', array('widget' => 'single_text', 'label' => 'Task due date: '))
            ->add('save', 'submit', array('label' => 'Create task'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Task',
        ));
    }

    public function getName()
    {
        return 'task';
    }
}