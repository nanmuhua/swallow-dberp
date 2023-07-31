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

namespace Store\Plugin\Factory;

use Interop\Container\ContainerInterface;
use Store\Plugin\StoreCommonPlugin;
use Laminas\Mvc\I18n\Translator;
use Laminas\ServiceManager\Factory\FactoryInterface;

class StoreCommonPluginFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        $translator    = $container->get(Translator::class);

        return new StoreCommonPlugin($entityManager, $translator);
    }
}