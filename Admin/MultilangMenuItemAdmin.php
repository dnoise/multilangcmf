<?php

namespace Symfony\Cmf\Bundle\MultilangContentBundle\Admin;

use Sonata\DoctrinePHPCRAdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Symfony\Cmf\Bundle\MenuBundle\Admin\MenuItemAdmin;

class MultilangMenuItemAdmin extends MenuItemAdmin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('locale', 'text') // TODO: this should rather list all defined locales
        ;

        parent::configureListFields($listMapper);
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('locale', 'text')
            ->end();

        parent::configureFormFields($formMapper);
    }
}
