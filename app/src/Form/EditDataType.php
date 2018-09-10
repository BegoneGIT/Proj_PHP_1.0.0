<?php
/**
 * EditData form.
 * Edits user data but login and password.
 */

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\NumberType;


/**
 * Class LoginType.
 */
class EditDataType extends AbstractType
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
                    'class' => 'form-row'

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
                    'class' => 'form-row'

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
                    'class' => 'form-row'

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
                    'class' => 'form-row'

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
                    'class' => 'form-row'

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
                    'class' => 'form-row'

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
                    'class' => 'form-row'

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
                    'class' => 'form-row'

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
            'city',
            TextType::class,
            [
                'label' => 'label.city',
                'required' => true,
                'attr' => [
                    'max_length' => 32,
                    'class' => 'form-row'
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
                    'max_length' => 32,
                    'class' => 'form-row'
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
                    'max_length' => 9,
                    'class' => 'form-row'
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
                    'max_length' => 9,
                    'class' => 'form-row'
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
        return 'editData_type';
    }
}