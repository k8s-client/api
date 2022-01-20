<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.6
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
     * @Kubernetes\Attribute("ports",type="collection",model=PortStatus::class)
     * @var iterable|PortStatus[]|null
     */
    protected $ports = null;

    /**
     * @param string|null $hostname
     * @param string|null $ip
     * @param iterable|PortStatus[] $ports
     */
    public function __construct(?string $hostname = null, ?string $ip = null, iterable $ports = [])
    {
        $this->hostname = $hostname;
        $this->ip = $ip;
        $this->ports = new Collection($ports);
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

    /**
     * Ports is a list of records of service ports If used, every port defined in the service should have
     * an entry in it
     *
     * @return iterable|PortStatus[]
     */
    public function getPorts(): ?iterable
    {
        return $this->ports;
    }

    /**
     * Ports is a list of records of service ports If used, every port defined in the service should have
     * an entry in it
     *
     * @return static
     */
    public function setPorts(iterable $ports)
    {
        $this->ports = $ports;

        return $this;
    }

    /**
     * @return static
     */
    public function addPorts(PortStatus $port)
    {
        if (!$this->ports) {
            $this->ports = new Collection();
        }
        $this->ports[] = $port;

        return $this;
    }
}
