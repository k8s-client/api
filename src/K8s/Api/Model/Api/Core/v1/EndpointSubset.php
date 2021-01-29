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
use K8s\Core\Collection;

/**
 * EndpointSubset is a group of addresses with a common set of ports. The expanded set of endpoints is
 * the Cartesian product of Addresses x Ports. For example, given:
 *   {
 *     Addresses: [{"ip": "10.10.1.1"}, {"ip": "10.10.2.2"}],
 *     Ports:     [{"name": "a", "port": 8675}, {"name": "b", "port": 309}]
 *   }
 * The resulting set of endpoints can be viewed as:
 *     a: [ 10.10.1.1:8675, 10.10.2.2:8675 ],
 *     b: [ 10.10.1.1:309, 10.10.2.2:309 ]
 */
class EndpointSubset
{
    /**
     * @Kubernetes\Attribute("addresses",type="collection",model=EndpointAddress::class)
     * @var iterable|EndpointAddress[]|null
     */
    protected $addresses = null;

    /**
     * @Kubernetes\Attribute("notReadyAddresses",type="collection",model=EndpointAddress::class)
     * @var iterable|EndpointAddress[]|null
     */
    protected $notReadyAddresses = null;

    /**
     * @Kubernetes\Attribute("ports",type="collection",model=EndpointPort::class)
     * @var iterable|EndpointPort[]|null
     */
    protected $ports = null;

    /**
     * @param iterable|EndpointAddress[] $addresses
     * @param iterable|EndpointAddress[] $notReadyAddresses
     * @param iterable|EndpointPort[] $ports
     */
    public function __construct(iterable $addresses = [], iterable $notReadyAddresses = [], iterable $ports = [])
    {
        $this->addresses = new Collection($addresses);
        $this->notReadyAddresses = new Collection($notReadyAddresses);
        $this->ports = new Collection($ports);
    }

    /**
     * IP addresses which offer the related ports that are marked as ready. These endpoints should be
     * considered safe for load balancers and clients to utilize.
     *
     * @return iterable|EndpointAddress[]
     */
    public function getAddresses(): ?iterable
    {
        return $this->addresses;
    }

    /**
     * IP addresses which offer the related ports that are marked as ready. These endpoints should be
     * considered safe for load balancers and clients to utilize.
     *
     * @return static
     */
    public function setAddresses(iterable $addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * @return static
     */
    public function addAddresses(EndpointAddress $addresse)
    {
        if (!$this->addresses) {
            $this->addresses = new Collection();
        }
        $this->addresses[] = $addresse;

        return $this;
    }

    /**
     * IP addresses which offer the related ports but are not currently marked as ready because they have
     * not yet finished starting, have recently failed a readiness check, or have recently failed a
     * liveness check.
     *
     * @return iterable|EndpointAddress[]
     */
    public function getNotReadyAddresses(): ?iterable
    {
        return $this->notReadyAddresses;
    }

    /**
     * IP addresses which offer the related ports but are not currently marked as ready because they have
     * not yet finished starting, have recently failed a readiness check, or have recently failed a
     * liveness check.
     *
     * @return static
     */
    public function setNotReadyAddresses(iterable $notReadyAddresses)
    {
        $this->notReadyAddresses = $notReadyAddresses;

        return $this;
    }

    /**
     * @return static
     */
    public function addNotReadyAddresses(EndpointAddress $notReadyAddresse)
    {
        if (!$this->notReadyAddresses) {
            $this->notReadyAddresses = new Collection();
        }
        $this->notReadyAddresses[] = $notReadyAddresse;

        return $this;
    }

    /**
     * Port numbers available on the related IP addresses.
     *
     * @return iterable|EndpointPort[]
     */
    public function getPorts(): ?iterable
    {
        return $this->ports;
    }

    /**
     * Port numbers available on the related IP addresses.
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
    public function addPorts(EndpointPort $port)
    {
        if (!$this->ports) {
            $this->ports = new Collection();
        }
        $this->ports[] = $port;

        return $this;
    }
}
