<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.9
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Condition;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * ServiceStatus represents the current status of a service.
 */
class ServiceStatus
{
    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=Condition::class)
     * @var iterable|Condition[]|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("loadBalancer",type="model",model=LoadBalancerStatus::class)
     * @var LoadBalancerStatus|null
     */
    protected $loadBalancer = null;

    /**
     * @param iterable|Condition[] $conditions
     * @param LoadBalancerStatus|null $loadBalancer
     */
    public function __construct(iterable $conditions = [], ?LoadBalancerStatus $loadBalancer = null)
    {
        $this->conditions = new Collection($conditions);
        $this->loadBalancer = $loadBalancer;
    }

    /**
     * Current service state
     *
     * @return iterable|Condition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * Current service state
     *
     * @return static
     */
    public function setConditions(iterable $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * @return static
     */
    public function addConditions(Condition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * LoadBalancer contains the current status of the load-balancer, if one is present.
     */
    public function getLoadBalancer(): ?LoadBalancerStatus
    {
        return $this->loadBalancer;
    }

    /**
     * LoadBalancer contains the current status of the load-balancer, if one is present.
     *
     * @return static
     */
    public function setLoadBalancer(LoadBalancerStatus $loadBalancer)
    {
        $this->loadBalancer = $loadBalancer;

        return $this;
    }
}
