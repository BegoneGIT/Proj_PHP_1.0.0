<?php
/**
 * EditPass form.
 */

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class LoginType.
 */
class EditPassType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'login',
            TextType::class,
            [
                'label' => 'label.login',
                'required' => true,
                'attr' => [
                    'max_length' => 32,
                    'class' => 'form-row'

                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(
                        [
                            'min' => 5,
                            'max' => 32,
                        ]
                    ),
                ],
            ]
        );
        $builder->add(
            'password',
            RepeatedType::class,
            [
                'type' => PasswordType::class,
                'first_options' => array('label' => 'label.password'),
                'second_options' => array('label' => 'label.repeatPassword'),
                'required' => true,
                'attr' => [
                    'max_length' => 32,
                    'class' => 'form-row'

                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(
                        [
                            'min' => 8,
                            'max' => 32,
                        ]
                    ),
                ],
            ]
        );



    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'editPass_type';
    }
}