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

namespace Store\Controller;

use Doctrine\ORM\EntityManager;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\Mvc\I18n\Translator;

class GoodsSpecController extends AbstractActionController
{
    private $translator;
    private $entityManager;

    public function __construct(
        Translator      $translator,
        EntityManager   $entityManager
    )
    {
        $this->translator       = $translator;
        $this->entityManager    = $entityManager;
    }
}