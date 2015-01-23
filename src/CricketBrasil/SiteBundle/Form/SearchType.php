<?php

namespace CricketBrasil\SiteBundle\Form;

use CricketBrasil\SearchBundle\Model\ProviderSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,array(
                'required' => false,
            ))
            ->add('email',null,array(
                'required' => false,
            ))
            ->add('phone',null,array(
                'required' => false,
            ))
            ->add('dateFrom', 'date', array(
                'required' => false,
                'widget' => 'single_text',
            ))
            ->add('dateTo', 'date', array(
                'required' => false,
                'widget' => 'single_text',
            ))
            ->add('search','submit')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {

        $resolver->setDefaults(array(
            'data_class' => 'CricketBrasil\SearchBundle\Model\ProviderSearch'
        ));
    }

    public function getName()
    {
        return 'cricketbrasil_sitebundle_search';
    }
}