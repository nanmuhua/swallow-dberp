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

namespace Purchase\Entity;

use Admin\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * 采购操作记录
 * Class PurchaseOperLog
 * @package Purchase\Entity
 * @ORM\Entity(repositoryClass="Purchase\Repository\PurchaseOperLogRepository")
 * @ORM\Table(name="dberp_purchase_oper_log")
 */
class PurchaseOperLog extends BaseEntity
{
    /**
     * 自增id
     * @ORM\Id()
     * @ORM\Column(name="oper_log_id", type="integer", length=11)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $operLogId;

    /**
     * 采购订单id
     * @ORM\Column(name="p_order_id", type="integer", length=11)
     */
    private $pOrderId;

    /**
     * 订单状态
     * @ORM\Column(name="order_state", type="integer", length=2)
     */
    private $orderState;

    /**
     * 操作人id
     * @ORM\Column(name="oper_user_id", type="integer", length=11)
     */
    private $operUserId;

    /**
     * 操作人
     * @ORM\Column(name="oper_user", type="string", length=100)
     */
    private $operUser;

    /**
     * 操作时间
     * @ORM\Column(name="oper_time", type="integer", length=10)
     */
    private $operTime;

    /**
     * @return mixed
     */
    public function getOperLogId()
    {
        return $this->operLogId;
    }

    /**
     * @param mixed $operLogId
     */
    public function setOperLogId($operLogId)
    {
        $this->operLogId = $operLogId;
    }

    /**
     * @return mixed
     */
    public function getPOrderId()
    {
        return $this->pOrderId;
    }

    /**
     * @param mixed $pOrderId
     */
    public function setPOrderId($pOrderId)
    {
        $this->pOrderId = $pOrderId;
    }

    /**
     * @return mixed
     */
    public function getOrderState()
    {
        return $this->orderState;
    }

    /**
     * @param mixed $orderState
     */
    public function setOrderState($orderState)
    {
        $this->orderState = $orderState;
    }

    /**
     * @return mixed
     */
    public function getOperUserId()
    {
        return $this->operUserId;
    }

    /**
     * @param mixed $operUserId
     */
    public function setOperUserId($operUserId)
    {
        $this->operUserId = $operUserId;
    }

    /**
     * @return mixed
     */
    public function getOperUser()
    {
        return $this->operUser;
    }

    /**
     * @param mixed $operUser
     */
    public function setOperUser($operUser)
    {
        $this->operUser = $operUser;
    }

    /**
     * @return mixed
     */
    public function getOperTime()
    {
        return $this->operTime;
    }

    /**
     * @param mixed $operTime
     */
    public function setOperTime($operTime)
    {
        $this->operTime = $operTime;
    }

}