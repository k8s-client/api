<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * LoadBalancerIngress represents the status of a load-balancer ingress point: traffic intended for the
 * service should be sent to an ingress point.
 */
class LoadBalancerIngress
{
    /**
     * @Kubernetes\Attribute("hostname")
     * @var string|null
     */
    protected $hostname = null;

    /**
     * @Kubernetes\Attribute("ip")
     * @var string|null
     */
    protected $ip = null;

    /**
     * @param string|null $hostname
     * @param string|null $ip
     */
    public function __construct(?string $hostname = null, ?string $ip = null)
    {
        $this->hostname = $hostname;
        $this->ip = $ip;
    }

    /**
     * Hostname is set for load-balancer ingress points that are DNS based (typically AWS load-balancers)
     */
    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    /**
     * Hostname is set for load-balancer ingress points that are DNS based (typically AWS load-balancers)
     *
     * @return static
     */
    public function setHostname(string $hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * IP is set for load-balancer ingress points that are IP based (typically GCE or OpenStack
     * load-balancers)
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * IP is set for load-balancer ingress points that are IP based (typically GCE or OpenStack
     * load-balancers)
     *
     * @return static
     */
    public function setIp(string $ip)
    {
        $this->ip = $ip;

        return $this;
    }
}
