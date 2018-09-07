<?php
/**
 *  CsvType form.
 */

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class CsvType.
 */
class CsvType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'name',
            ChoiceType::class,
            [
                'choices' =>[
                    'Suzuki' => 1,
                    'Kia' => 2,
                    'Mitsubischi' => 3,
                    'Subaru' => 4,
                    'Toyota' => 5,
                    'label.other' => 6
                ],
                'label' => 'label.name',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(),
                ],

            ]
        );
        $builder->add(
            'csvfile',
            FileType::class,
            [
                'label' => 'label.file',
                'required' => true,
                'attr' => [
                    'max_length' => 32,
                    'class' => 'form-row'

                ],
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ]
        );

    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'file_type';
    }
}