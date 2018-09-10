<?php
/**
 * EditLogin form.
 */

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class EditLoginType.
 */
class EditLoginType extends AbstractType
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

    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'editLogin_type';
    }
}