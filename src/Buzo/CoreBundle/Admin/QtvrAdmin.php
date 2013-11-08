<?php

namespace Buzo\CoreBundle\Admin;

use Msi\AdminBundle\Admin\Admin;
use Msi\AdminBundle\Grid\GridBuilder;
use Symfony\Component\Form\FormBuilder;

class QtvrAdmin extends Admin
{
    public function buildGrid(GridBuilder $builder)
    {
        $builder
            ->add('secret', 'text', [
                'route' => 'buzo_core_qtvr_show',
                'route_parameters' => [
                    'secret',
                ],
                'url_as_label' => true,
                'label' => 'url',
            ])
            ->add('', 'action')
        ;
    }

    public function buildForm(FormBuilder $builder)
    {
        $builder
            ->add('filenameFile', 'file')
        ;
    }
}
