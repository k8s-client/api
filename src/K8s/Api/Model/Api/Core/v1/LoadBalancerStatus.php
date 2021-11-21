<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.13
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * LoadBalancerStatus represents the status of a load-balancer.
 */
class LoadBalancerStatus
{
    /**
     * @Kubernetes\Attribute("ingress",type="collection",model=LoadBalancerIngress::class)
     * @var iterable|LoadBalancerIngress[]|null
     */
    protected $ingress = null;

    /**
     * @param iterable|LoadBalancerIngress[] $ingress
     */
    public function __construct(iterable $ingress = [])
    {
        $this->ingress = new Collection($ingress);
    }

    /**
     * Ingress is a list containing ingress points for the load-balancer. Traffic intended for the service
     * should be sent to these ingress points.
     *
     * @return iterable|LoadBalancerIngress[]
     */
    public function getIngress(): ?iterable
    {
        return $this->ingress;
    }

    /**
     * Ingress is a list containing ingress points for the load-balancer. Traffic intended for the service
     * should be sent to these ingress points.
     *
     * @return static
     */
    public function setIngress(iterable $ingress)
    {
        $this->ingress = $ingress;

        return $this;
    }

    /**
     * @return static
     */
    public function addIngress(LoadBalancerIngress $ingre)
    {
        if (!$this->ingress) {
            $this->ingress = new Collection();
        }
        $this->ingress[] = $ingre;

        return $this;
    }
}
