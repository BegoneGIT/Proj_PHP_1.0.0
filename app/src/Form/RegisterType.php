<?php
/**
 * Register form.
 */

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\NumberType;


/**
 * Class LoginType.
 */
class RegisterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add(
            'Imie',
            TextType::class,
            [
                'label' => 'label.imie',
                'required' => true,
                'attr' => [
                    'max_length' => 12,

                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(
                        [
                            'min' => 3,
                            'max' => 12,
                        ]
                    ),
                ],
            ]
        );

        $builder->add(
            'Nazwisko',
            TextType::class,
            [
                'label' => 'label.nazwisko',
                'required' => true,
                'attr' => [
                    'max_length' => 12,

                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(
                        [
                            'min' => 3,
                            'max' => 12,
                        ]
                    ),
                ],
            ]
        );

        $builder->add(
            'email',
            EmailType::class,
            [
                'label' => 'label.email',
                'required' => true,
                'attr' => [
                    'max_length' => 32,

                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Email(),
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
            'NIP',
            NumberType::class,
            [
                'label' => 'label.nip',
                'required' => false,
                'attr' => [
                    'length' => 10,

                ],
                'constraints' => [

                    new Assert\Length(
                        [
                            'min' => 10,
                            'max' => 10,
                        ]
                    ),
                ],
            ]
        );

        $builder->add(
            'REGON',
            NumberType::class,
            [
                'label' => 'label.regon',
                'required' => false,
                'attr' => [
                    'length' => 9,

                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(
                        [
                            'min' => 9,
                            'max' => 9,
                        ]
                    ),
                ],
            ]
        );

        $builder->add(
            'tel1',
            NumberType::class,
            [
                'label' => 'label.phone1',
                'required' => false,
                'attr' => [
                    'length' => 9,

                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(
                        [
                            'min' => 9,
                            'max' => 9,
                        ]
                    ),
                ],
            ]
        );
        $builder->add(
            'tel2',
            NumberType::class,
            [
                'label' => 'label.phone2',
                'required' => false,
                'attr' => [
                    'length' => 9,

                ],
                'constraints' => [
                    new Assert\Length(
                        [
                            'min' => 9,
                            'max' => 9,
                        ]
                    ),
                ],
            ]
        );
        $builder->add(
            'tel3',
            NumberType::class,
            [
                'label' => 'label.phone3',
                'required' => false,
                'attr' => [
                    'length' => 9,

                ],
                'constraints' => [
                    new Assert\Length(
                        [
                            'min' => 9,
                            'max' => 9,
                        ]
                    ),
                ],
            ]
        );
        $builder->add(
            'login',
            TextType::class,
            [
                'label' => 'label.login',
                'required' => true,
                'attr' => [
                    'max_length' => 32,

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

        $builder->add(
            'city',
            TextType::class,
            [
                'label' => 'label.city',
                'required' => true,
                'attr' => [
                    'max_length' => 32
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(
                        [
                            'min' => 3,
                            'max' => 32,
                        ]
                    ),
                ]
            ]

        );

        $builder->add(
            'street',
            TextType::class,
            [
                'label' => 'label.street',
                'required' => true,
                'attr' => [
                    'max_length' => 32
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(
                        [
                            'min' => 3,
                            'max' => 32,
                        ]
                    ),
                ]
            ]

        );

        $builder->add(
            'number',
            TextType::class,
            [
                'label' => 'label.number',
                'required' => true,
                'attr' => [
                    'max_length' => 9
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(
                        [
                            'min' => 1,
                            'max' => 9,
                        ]
                    ),
                ]
            ]

        );

        $builder->add(
            'postal_code',
            TextType::class,
            [
                'label' => 'label.postal_code',
                'required' => true,
                'attr' => [
                    'max_length' => 9
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(
                        [
                            'min' => 2,
                            'max' => 9,
                        ]
                    ),
                ]
            ]

        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'register_type';
    }
}