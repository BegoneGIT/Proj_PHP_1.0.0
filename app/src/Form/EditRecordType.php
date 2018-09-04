<?php
/**
 * EditRecord type
 */

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class EditRecordType
 */

class EditRecordType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'ilosc',
            NumberType::class,
            [
                'label' => 'label.quantity',
                'required' => true,
                'attr' => [
                    'max_length' => 128,
                ],
            ]
        );


        $builder->add(
            'cena',
            NumberType::class,
            [
                'label' => 'label.price',
                'required' => true,
                'attr' => [
                    'max_length' => 128,
                ],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'editRecord_type';
    }
}