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
use Ct\Service\MetierManagerBundle\Entity\CtImprimeTechUse;

class CtImprimeTechUsedType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->visite = $options['visite'];
        $this->reception = $options['reception'];
        $this->constatation = $options['constatation'];

        $builder
            ->add('ctControle', IntegerType::class, array(
                'label'     => 'N° de contrôle ou d\'enregistrement',
                'required'  => true,
                // 'class'         => 'Ct\Service\MetierManagerBundle\Entity\CtVisite',
                // 'query_builder' => function (EntityRepository $_er) use ($RoleName, $ctrCode) {
                //     if('Admin' === $RoleName){
                //         return $_er
                //             ->createQueryBuilder('c')
                //             ->where("c.ctrCode = '".$ctrCode."'")
                //             ->orderBy('c.ctrNom', 'ASC');
                //     }else{
                //         return $_er
                //             ->createQueryBuilder('c')
                //             ->orderBy('c.ctrNom', 'ASC');
                //     }
                // },
                // 'group_by'     => function (CtCentre $_centre) {
                //     if ($_centre->getCtProvince())
                //         return $_centre->getCtProvince()->getPrvNom();
                // },
                // 'choice_label'  => 'ctrNom',
                // 'multiple'      => false,
                // 'expanded'      => false,
                // 'required'      => true
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
            ])
            
            ->add('ctImprimeTechUse', EntityType::class, array(
                'label'     => 'N° imprimé technique',
                'required'  => true,
                'disabled'  => true,
                'class'         => 'Ct\Service\MetierManagerBundle\Entity\CtImprimeTechUse',
                'query_builder' => function (EntityRepository $_use) {
                    return $_use
                        ->createQueryBuilder('use')
                        ->orderBy('use.ituNumero', 'ASC');
                },
                'group_by'     => function (CtImprimeTech $_print) {
                    if ($_print->getCtImprimeTech())
                        return $_print->getCtImprimeTech()->getNomImprimeTech();
                },
                'choice_value'  => 'id',
                'choice_label'  => 'ituNumero',
                'multiple'      => true,
                'expanded'      => false,
                'placeholder'   => '- Sélectionner les n° imprimés utilisés  -'
            ))
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ct\Service\MetierManagerBundle\Entity\CtImprimeTechUse',
        ));

        $resolver->setRequired([
            'visite',
            'reception',
            'constatation',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ct_service_metiermanagerbundle_ctimprimetechused';
    }


}
