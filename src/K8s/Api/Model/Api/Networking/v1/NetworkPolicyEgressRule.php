<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.13
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Networking\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * NetworkPolicyEgressRule describes a particular set of traffic that is allowed out of pods matched by
 * a NetworkPolicySpec's podSelector. The traffic must match both ports and to. This type is beta-level
 * in 1.8
 */
class NetworkPolicyEgressRule
{
    /**
     * @Kubernetes\Attribute("ports",type="collection",model=NetworkPolicyPort::class)
     * @var iterable|NetworkPolicyPort[]|null
     */
    protected $ports = null;

    /**
     * @Kubernetes\Attribute("to",type="collection",model=NetworkPolicyPeer::class)
     * @var iterable|NetworkPolicyPeer[]|null
     */
    protected $to = null;

    /**
     * @param iterable|NetworkPolicyPort[] $ports
     * @param iterable|NetworkPolicyPeer[] $to
     */
    public function __construct(iterable $ports = [], iterable $to = [])
    {
        $this->ports = new Collection($ports);
        $this->to = new Collection($to);
    }

    /**
     * List of destination ports for outgoing traffic. Each item in this list is combined using a logical
     * OR. If this field is empty or missing, this rule matches all ports (traffic not restricted by port).
     * If this field is present and contains at least one item, then this rule allows traffic only if the
     * traffic matches at least one port in the list.
     *
     * @return iterable|NetworkPolicyPort[]
     */
    public function getPorts(): ?iterable
    {
        return $this->ports;
    }

    /**
     * List of destination ports for outgoing traffic. Each item in this list is combined using a logical
     * OR. If this field is empty or missing, this rule matches all ports (traffic not restricted by port).
     * If this field is present and contains at least one item, then this rule allows traffic only if the
     * traffic matches at least one port in the list.
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
    public function addPorts(NetworkPolicyPort $port)
    {
        if (!$this->ports) {
            $this->ports = new Collection();
        }
        $this->ports[] = $port;

        return $this;
    }

    /**
     * List of destinations for outgoing traffic of pods selected for this rule. Items in this list are
     * combined using a logical OR operation. If this field is empty or missing, this rule matches all
     * destinations (traffic not restricted by destination). If this field is present and contains at least
     * one item, this rule allows traffic only if the traffic matches at least one item in the to list.
     *
     * @return iterable|NetworkPolicyPeer[]
     */
    public function getTo(): ?iterable
    {
        return $this->to;
    }

    /**
     * List of destinations for outgoing traffic of pods selected for this rule. Items in this list are
     * combined using a logical OR operation. If this field is empty or missing, this rule matches all
     * destinations (traffic not restricted by destination). If this field is present and contains at least
     * one item, this rule allows traffic only if the traffic matches at least one item in the to list.
     *
     * @return static
     */
    public function setTo(iterable $to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * @return static
     */
    public function addTo(NetworkPolicyPeer $to)
    {
        if (!$this->to) {
            $this->to = new Collection();
        }
        $this->to[] = $to;

        return $this;
    }
}
