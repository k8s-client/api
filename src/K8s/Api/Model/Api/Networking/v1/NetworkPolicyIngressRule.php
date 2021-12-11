<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.16.15
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
 * NetworkPolicyIngressRule describes a particular set of traffic that is allowed to the pods matched
 * by a NetworkPolicySpec's podSelector. The traffic must match both ports and from.
 */
class NetworkPolicyIngressRule
{
    /**
     * @Kubernetes\Attribute("from",type="collection",model=NetworkPolicyPeer::class)
     * @var iterable|NetworkPolicyPeer[]|null
     */
    protected $from = null;

    /**
     * @Kubernetes\Attribute("ports",type="collection",model=NetworkPolicyPort::class)
     * @var iterable|NetworkPolicyPort[]|null
     */
    protected $ports = null;

    /**
     * @param iterable|NetworkPolicyPeer[] $from
     * @param iterable|NetworkPolicyPort[] $ports
     */
    public function __construct(iterable $from = [], iterable $ports = [])
    {
        $this->from = new Collection($from);
        $this->ports = new Collection($ports);
    }

    /**
     * List of sources which should be able to access the pods selected for this rule. Items in this list
     * are combined using a logical OR operation. If this field is empty or missing, this rule matches all
     * sources (traffic not restricted by source). If this field is present and contains at least one item,
     * this rule allows traffic only if the traffic matches at least one item in the from list.
     *
     * @return iterable|NetworkPolicyPeer[]
     */
    public function getFrom(): ?iterable
    {
        return $this->from;
    }

    /**
     * List of sources which should be able to access the pods selected for this rule. Items in this list
     * are combined using a logical OR operation. If this field is empty or missing, this rule matches all
     * sources (traffic not restricted by source). If this field is present and contains at least one item,
     * this rule allows traffic only if the traffic matches at least one item in the from list.
     *
     * @return static
     */
    public function setFrom(iterable $from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return static
     */
    public function addFrom(NetworkPolicyPeer $from)
    {
        if (!$this->from) {
            $this->from = new Collection();
        }
        $this->from[] = $from;

        return $this;
    }

    /**
     * List of ports which should be made accessible on the pods selected for this rule. Each item in this
     * list is combined using a logical OR. If this field is empty or missing, this rule matches all ports
     * (traffic not restricted by port). If this field is present and contains at least one item, then this
     * rule allows traffic only if the traffic matches at least one port in the list.
     *
     * @return iterable|NetworkPolicyPort[]
     */
    public function getPorts(): ?iterable
    {
        return $this->ports;
    }

    /**
     * List of ports which should be made accessible on the pods selected for this rule. Each item in this
     * list is combined using a logical OR. If this field is empty or missing, this rule matches all ports
     * (traffic not restricted by port). If this field is present and contains at least one item, then this
     * rule allows traffic only if the traffic matches at least one port in the list.
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
}
