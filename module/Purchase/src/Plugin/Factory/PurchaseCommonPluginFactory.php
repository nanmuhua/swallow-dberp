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

namespace Purchase\Plugin\Factory;

use Interop\Container\ContainerInterface;
use Purchase\Plugin\PurchaseCommonPlugin;
use Purchase\Service\PurchaseOperLogManager;
use Laminas\Mvc\I18n\Translator;
use Laminas\ServiceManager\Factory\FactoryInterface;

class PurchaseCommonPluginFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        $translator    = $container->get(Translator::class);
        $purchaseOperLogManager = $container->get(PurchaseOperLogManager::class);

        return new PurchaseCommonPlugin($entityManager, $translator, $purchaseOperLogManager);
    }
}