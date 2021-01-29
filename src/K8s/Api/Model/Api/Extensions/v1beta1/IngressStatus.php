<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.11.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Extensions\v1beta1;

use K8s\Api\Model\Api\Core\v1\LoadBalancerStatus;
use K8s\Core\Annotation as Kubernetes;

/**
 * IngressStatus describe the current state of the Ingress.
 */
class IngressStatus
{
    /**
     * @Kubernetes\Attribute("loadBalancer",type="model",model=LoadBalancerStatus::class)
     * @var LoadBalancerStatus|null
     */
    protected $loadBalancer = null;

    /**
     * @param LoadBalancerStatus|null $loadBalancer
     */
    public function __construct(?LoadBalancerStatus $loadBalancer = null)
    {
        $this->loadBalancer = $loadBalancer;
    }

    /**
     * LoadBalancer contains the current status of the load-balancer.
     */
    public function getLoadBalancer(): ?LoadBalancerStatus
    {
        return $this->loadBalancer;
    }

    /**
     * LoadBalancer contains the current status of the load-balancer.
     *
     * @return static
     */
    public function setLoadBalancer(LoadBalancerStatus $loadBalancer)
    {
        $this->loadBalancer = $loadBalancer;

        return $this;
    }
}
