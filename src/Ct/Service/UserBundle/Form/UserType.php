<?php

namespace Ct\Service\UserBundle\Form;

use Ct\Service\MetierManagerBundle\Entity\CtCentre;
use Ct\Service\UserBundle\Entity\User;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Ct\Service\MetierManagerBundle\Utils\RoleName;

class UserType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $RoleName = $options['RoleName'];
        $ctrCode = $options['ctrCode'];

        $builder
            ->add('usrName', TextType::class, array(
                'label'    => "Nom",
                'required' => true,
                'disabled' => false,
            )) 
            ->add('usrProfession', TextType::class, array(
                'label'    => "Profession",
                'required' => true,
                'disabled' => false,
            )) 
            ->add('usrAdresse', TextType::class, array(
                'label'    => "Adresse",
                'required' => false,
                'disabled' => false,
            ))
            ->add('usrTelephone', TextType::class, array(
                'label'    => "Téléphone",
                'required' => false,
                'disabled' => false,
            ))
            ->add('email', EmailType::class, array(
                'label'    => "Adresse email",
                'attr'     => array('pattern' => "[^@]+@[^@]+\.[a-zA-Z]{2,}"),
                'required' => true,
                'disabled' => false,
            )) 
            ->add('usrPresence', CheckboxType::class, array(
                'label'    => "Présence",
                'required' => false,
            ))
            ->add('ctCentre', EntityType::class, array(
                'label'         => 'Centre',
                'class'         => 'Ct\Service\MetierManagerBundle\Entity\CtCentre',
                'query_builder' => function (EntityRepository $_er) use ($RoleName, $ctrCode) {
                    if('Admin' === $RoleName){
                        return $_er
                            ->createQueryBuilder('c')
                            ->where("c.ctrCode = '".$ctrCode."'")
                            ->orderBy('c.ctrNom', 'ASC');
                    }else{
                        return $_er
                            ->createQueryBuilder('c')
                            ->orderBy('c.ctrNom', 'ASC');
                    }
                },
                'group_by'     => function (CtCentre $_centre) {
                    if ($_centre->getCtProvince())
                        return $_centre->getCtProvince()->getPrvNom();
                },
                'choice_label'  => 'ctrNom',
                'multiple'      => false,
                'expanded'      => false,
                'required'      => true
            ))
            ->add('plainPassword',RepeatedType::class, array(
                'type'            => PasswordType::class,
                'options'         => array('translation_domain' => 'FOSUserBundle'),
                'first_options'   => array(
                    'label' => 'form.password',
                    'attr'  => array('minleght' => 6)
                ),
                'second_options'  => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
                'disabled' => false,
            ));

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ct\Service\UserBundle\Entity\User',
        ));

        $resolver->setRequired([
            'RoleName',
            'ctrCode',
        ]);
    }
    
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ct_userbundle_user';
    }
}
