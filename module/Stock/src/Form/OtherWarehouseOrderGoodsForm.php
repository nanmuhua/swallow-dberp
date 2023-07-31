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

namespace Stock\Form;

use Doctrine\ORM\EntityManager;
use Laminas\Form\Form;
use Stock\Validator\OtherWarehouseOrderGoodsArrayValidator;

class OtherWarehouseOrderGoodsForm extends Form
{
    private $entityManager;

    public function __construct(EntityManager $entityManager = null, $name = 'order-goods-form', array $options = [])
    {
        parent::__construct($name, $options);

        $this->setAttribute('method', 'post');
        $this->setAttribute('class', 'form-horizontal');

        $this->entityManager    = $entityManager;

        $this->addElements();
        $this->addInputFilter();
    }

    protected function addElements()
    {
        $this->add([
            'type'  => 'text',
            'name'  => 'goodsId',
            'attributes'    => [
                'class'         => 'form-control'
            ]
        ]);

        $this->add([
            'type'  => 'text',
            'name'  => 'goodsPrice',
            'attributes'    => [
                'class'         => 'form-control'
            ]
        ]);

        $this->add([
            'type'  => 'text',
            'name'  => 'goodsTax',
            'attributes'    => [
                'class'         => 'form-control'
            ]
        ]);

        $this->add([
            'type'  => 'text',
            'name'  => 'goodsBuyNum',
            'attributes'    => [
                'class'         => 'form-control'
            ]
        ]);

        $this->add([
            'type'  => 'text',
            'name'  => 'goodsAmount',
            'attributes'    => [
                'class'         => 'form-control'
            ]
        ]);
    }

    protected function addInputFilter()
    {
        $inputFilter = $this->getInputFilter();

        $inputFilter->add([
            'name'      => 'goodsId',
            'required'  => true,
            'filters'   => [
                ['name' => 'ToInt']
            ],
            'validators'=> [
                [
                    'name' => OtherWarehouseOrderGoodsArrayValidator::class,
                    'options' => [
                        'entityManager' => $this->entityManager,
                        'goodsField'    => 'goodsId'
                    ]
                ]
            ]
        ]);

        $inputFilter->add([
            'name'      => 'goodsPrice',
            'required'  => true,
            'validators'=> [
                [
                    'name' => OtherWarehouseOrderGoodsArrayValidator::class,
                    'options' => [
                        'goodsField' => 'goodsPrice'
                    ]
                ]
            ]
        ]);

        $inputFilter->add([
            'name'      => 'goodsTax',
            'required'  => true,
            'validators'=> [
                [
                    'name' => OtherWarehouseOrderGoodsArrayValidator::class,
                    'options' => [
                        'goodsField' => 'goodsTax'
                    ]
                ]
            ]
        ]);

        $inputFilter->add([
            'name'      => 'goodsBuyNum',
            'required'  => true,
            'filters'   => [
                ['name' => 'ToInt']
            ],
            'validators'=> [
                [
                    'name' => OtherWarehouseOrderGoodsArrayValidator::class,
                    'options' => [
                        'goodsField' => 'goodsBuyNum'
                    ]
                ]
            ]
        ]);

        $inputFilter->add([
            'name'      => 'goodsAmount',
            'required'  => true,
            'validators'=> [
                [
                    'name' => OtherWarehouseOrderGoodsArrayValidator::class,
                    'options' => [
                        'goodsField' => 'goodsAmount'
                    ]
                ]
            ]
        ]);
    }
}