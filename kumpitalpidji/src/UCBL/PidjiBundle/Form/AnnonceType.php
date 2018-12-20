<?php

namespace UCBL\PidjiBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;

class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categories', EntityType::class, array(
                'class'        => 'UCBLPidjiBundle:Categorie',
                'choice_label' => 'libelle',
                'multiple'     => false,
                'attr' => array('placeholder' => 'Choisir une Categorie')
               ))
            ->add('types', EntityType::class, array(
                'class'        => 'UCBLPidjiBundle:Type',
                'choice_label' => 'libelle',
                'expanded'     => true))
            ->add('titre', TextType::class)
            ->add('prix', MoneyType::class)
            ->add('description', TextareaType::class)

            ->add('images', CollectionType::class, array(

                'entry_type'   => ImagesType::class,

                'allow_add'    => true,

                'allow_delete' => true,

                'required' => false

            ))
            ->add('Valider', SubmitType::class)

            ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UCBL\PidjiBundle\Entity\Annonce'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ucbl_pidjibundle_annonce';
    }


}
