<?php

namespace App\Form\Admin;

use App\Vendor\Form;

class ConstantForm extends Form
{
    public function __construct()
    {
        parent::__construct();

        $this->createFormElement('company_name', 'text', [
            'label' => __('admin.label.company_name'),
            'class' => 'form-control',
            'validation' => 'max:255',
            'group' => 'formdata',
        ]);

        $this->createFormElement('company_address', 'text', [
            'label' => __('admin.label.company_address'),
            //'icon' => '<span class="fas fa-lock"></span>',
            'class' => 'form-control',
            'validation' => 'max:255',
            'group' => 'formdata',
        ]);

        $this->createFormElement('company_description', 'textarea', [
            'label' => __('admin.label.company_address'),
            'class' => 'form-control',
            'validation' => 'max:512',
            'group' => 'formdata',
        ]);
    }


}
