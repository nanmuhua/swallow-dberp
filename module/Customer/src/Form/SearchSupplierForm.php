<?php
/**
 * DBERP 进销存系统
 *
 * ==========================================================================
 * @link      http://www.dberp.net/
 * @copyright 北京珑大钜商科技有限公司，并保留所有权利。
 * @license   http://www.dberp.net/license.html License
 * ==========================================================================
 *
 * @author    静静的风 <baron@loongdom.cn>
 *
 */

namespace Customer\Form;

use Laminas\Form\Form;
use Laminas\I18n\Translator\Translator;

class SearchSupplierForm extends Form
{
    private $translator;

    public function __construct($name = 'search-supplier-form', array $options = [])
    {
        parent::__construct($name, $options);

        $this->setAttribute('method', 'get');
        $this->setAttribute('class', 'form-horizontal');

        $this->translator = new Translator();

        $this->addElements();
        $this->addInputFilter();
    }

    public function addElements()
    {
        $this->add([
            'type'  => 'text',
            'name'  => 'start_id',
            'attributes'    => [
                'id'            => 'start_id',
                'class'         => 'form-control input-sm',
                'placeholder'   => $this->translator->translate('起始ID')
            ]
        ]);

        $this->add([
            'type'  => 'text',
            'name'  => 'end_id',
            'attributes'    => [
                'id'            => 'end_id',
                'class'         => 'form-control input-sm',
                'placeholder'   => $this->translator->translate('结束ID')
            ]
        ]);

        $this->add([
            'type'  => 'text',
            'name'  => 'supplier_name',
            'attributes'    => [
                'id'            => 'supplier_name',
                'class'         => 'form-control input-sm',
                'placeholder'   => $this->translator->translate('供应商名称')
            ]
        ]);

        $this->add([
            'type'  => 'text',
            'name'  => 'supplier_code',
            'attributes'    => [
                'id'            => 'supplier_code',
                'class'         => 'form-control input-sm',
                'placeholder'   => $this->translator->translate('供应商编码')
            ]
        ]);

        $this->add([
            'type'  => 'text',
            'name'  => 'supplier_contacts',
            'attributes'    => [
                'id'            => 'supplier_contacts',
                'class'         => 'form-control input-sm',
                'placeholder'   => $this->translator->translate('供应商联系人')
            ]
        ]);

        $this->add([
            'type'  => 'text',
            'name'  => 'supplier_phone',
            'attributes'    => [
                'id'            => 'supplier_phone',
                'class'         => 'form-control input-sm',
                'placeholder'   => $this->translator->translate('供应商电话')
            ]
        ]);

        $this->add([
            'type'  => 'select',
            'name'  => 'supplier_category_id',
            'attributes'    => [
                'id'            => 'supplier_category_id',
                'class'         => 'form-control input-sm'
            ]
        ]);
    }

    public function addInputFilter()
    {
        $inputFilter = $this->getInputFilter();

        $inputFilter->add([
            'name'      => 'start_id',
            'required'  => false,
            'filters'   => [
                ['name' => 'ToInt']
            ]
        ]);

        $inputFilter->add([
            'name'      => 'end_id',
            'required'  => false,
            'filters'   => [
                ['name' => 'ToInt']
            ]
        ]);

        $inputFilter->add([
            'name'      => 'supplier_name',
            'required'  => false,
            'filters'   => [
                ['name' => 'StringTrim'],
                ['name' => 'StripTags'],
                ['name' => 'HtmlEntities']
            ]
        ]);

        $inputFilter->add([
            'name'      => 'supplier_code',
            'required'  => false,
            'filters'   => [
                ['name' => 'StringTrim'],
                ['name' => 'StripTags'],
                ['name' => 'HtmlEntities']
            ]
        ]);

        $inputFilter->add([
            'name'      => 'supplier_contacts',
            'required'  => false,
            'filters'   => [
                ['name' => 'StringTrim'],
                ['name' => 'StripTags'],
                ['name' => 'HtmlEntities']
            ]
        ]);

        $inputFilter->add([
            'name'      => 'supplier_phone',
            'required'  => false,
            'filters'   => [
                ['name' => 'StringTrim'],
                ['name' => 'StripTags'],
                ['name' => 'HtmlEntities']
            ]
        ]);

        $inputFilter->add([
            'name'      => 'supplier_category_id',
            'required'  => false,
            'filters'   => [
                ['name' => 'ToInt']
            ]
        ]);
    }
}