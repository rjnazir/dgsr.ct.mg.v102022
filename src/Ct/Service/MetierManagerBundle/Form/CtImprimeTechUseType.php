<?php

namespace Ct\Service\MetierManagerBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Ct\Service\MetierManagerBundle\Entity\CtCentre;
use Ct\Service\MetierManagerBundle\Entity\CtImprimeTech;

class CtImprimeTechUseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ctBordereau', EntityType::class, array(
                'label'     => 'Bordereau d\'envoi',
                'required'  => true,
                'disabled'  => true,
                'class'         => 'Ct\Service\MetierManagerBundle\Entity\CtBordereau',
                'query_builder' => function (EntityRepository $_er) {
                    return $_er
                        ->createQueryBuilder('bl')
                        ->orderBy('bl.blNumero', 'DESC');
                },
                'choice_value'  => 'id',
                'choice_label'  => 'blNumero',
                'multiple'      => false,
                'expanded'      => false,
                'placeholder'   => '- Sélectionner bordereau de livraison -'
            ))
            ->add('ctCentre', EntityType::class, array(
                'label'     => 'Centre destinataire',
                'required'  => true,
                'disabled'  => true,
                'class'         => 'Ct\Service\MetierManagerBundle\Entity\CtCentre',
                'query_builder' => function (EntityRepository $_er) {
                    return $_er
                        ->createQueryBuilder('c')
                        ->orderBy('c.ctrNom', 'ASC');
                },
                'group_by'     => function (CtCentre $_centre) {
                    if ($_centre->getCtProvince())
                        return $_centre->getCtProvince()->getPrvNom();
                },
                'choice_value'  => 'id',
                'choice_label'  => 'ctrNom',
                'multiple'      => false,
                'expanded'      => false,
                'placeholder'   => '- Sélectionner Centre -'
            ))
            ->add('ctImprimeTech', EntityType::class, array(
                'label'     => 'Type imprimé technique',
                'required'  => true,
                'disabled'  => true,
                'class'         => 'Ct\Service\MetierManagerBundle\Entity\CtImprimeTech',
                'query_builder' => function (EntityRepository $_er) {
                    return $_er
                        ->createQueryBuilder('prtt')
                        ->orderBy('prtt.nomImprimeTech', 'ASC');
                },
                'choice_value'  => 'id',
                'choice_label'  => 'nomImprimeTech',
                'multiple'      => false,
                'expanded'      => false,
                'placeholder'   => '- Sélectionner Imprimé Technique -'
            ))
            ->add('ctControle', IntegerType::class, array(
                'label'     => 'N° contrôle / N° d\'enregistrement',
                'required'  => true
            ))
            ->add('ituNumero', IntegerType::class, array(
                'label'     => 'N° de l\'imprimé technique',
                'required'  => true,
                'disabled'  => true
            ))
            ->add('ituMotifUsed', ChoiceType::class, [
                'label'     => 'Motif d\'utilisation IT',
                'choices'  => [
                    'Authenticité' => 'Authenticité',
                    'Autres' => 'Autres',
                    'Caractéristique' => 'Caractéristique',
                    'Constatation' => 'Constatation',
                    'Contre' => 'Contre',
                    'Duplicata' => 'Duplicata',
                    'Duplicata visite' => 'Duplicata visite',
                    'Duplicata réception' => 'Duplicata réception',
                    'Mutation' => 'Mutation',
                    'Rebut' => 'Rebut',
                    'Réception' => 'Réception',
                    'Visite' => 'Visite',
                    'Spéciale' => 'Spéciale',
                ],
                'choice_attr' => [
                    'Duplicata' => ['disabled' => true],
                ],
                'placeholder'   => '- Sélectionner motif d\'utilisation -'
            ]
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ct\Service\MetierManagerBundle\Entity\CtImprimeTechUse'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ct_service_metiermanagerbundle_ctimprimetechuse';
    }


}
