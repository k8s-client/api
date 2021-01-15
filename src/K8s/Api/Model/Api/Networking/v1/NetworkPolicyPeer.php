<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Networking\v1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Core\Annotation as Kubernetes;

/**
 * NetworkPolicyPeer describes a peer to allow traffic from. Only certain combinations of fields are
 * allowed
 */
class NetworkPolicyPeer
{
    /**
     * @Kubernetes\Attribute("ipBlock",type="model",model=IPBlock::class)
     * @var IPBlock|null
     */
    protected $ipBlock;

    /**
     * @Kubernetes\Attribute("namespaceSelector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $namespaceSelector;

    /**
     * @Kubernetes\Attribute("podSelector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $podSelector;

    /**
     * @param IPBlock|null $ipBlock
     * @param LabelSelector|null $namespaceSelector
     * @param LabelSelector|null $podSelector
     */
    public function __construct(?IPBlock $ipBlock = null, ?LabelSelector $namespaceSelector = null, ?LabelSelector $podSelector = null)
    {
        $this->ipBlock = $ipBlock;
        $this->namespaceSelector = $namespaceSelector;
        $this->podSelector = $podSelector;
    }

    /**
     * IPBlock defines policy on a particular IPBlock. If this field is set then neither of the other
     * fields can be.
     */
    public function getIpBlock(): ?IPBlock
    {
        return $this->ipBlock;
    }

    /**
     * IPBlock defines policy on a particular IPBlock. If this field is set then neither of the other
     * fields can be.
     *
     * @return static
     */
    public function setIpBlock(IPBlock $ipBlock)
    {
        $this->ipBlock = $ipBlock;

        return $this;
    }

    /**
     * Selects Namespaces using cluster-scoped labels. This field follows standard label selector
     * semantics; if present but empty, it selects all namespaces.
     *
     * If PodSelector is also set, then the NetworkPolicyPeer as a whole selects the Pods matching
     * PodSelector in the Namespaces selected by NamespaceSelector. Otherwise it selects all Pods in the
     * Namespaces selected by NamespaceSelector.
     */
    public function getNamespaceSelector(): ?LabelSelector
    {
        return $this->namespaceSelector;
    }

    /**
     * Selects Namespaces using cluster-scoped labels. This field follows standard label selector
     * semantics; if present but empty, it selects all namespaces.
     *
     * If PodSelector is also set, then the NetworkPolicyPeer as a whole selects the Pods matching
     * PodSelector in the Namespaces selected by NamespaceSelector. Otherwise it selects all Pods in the
     * Namespaces selected by NamespaceSelector.
     *
     * @return static
     */
    public function setNamespaceSelector(LabelSelector $namespaceSelector)
    {
        $this->namespaceSelector = $namespaceSelector;

        return $this;
    }

    /**
     * This is a label selector which selects Pods. This field follows standard label selector semantics;
     * if present but empty, it selects all pods.
     *
     * If NamespaceSelector is also set, then the NetworkPolicyPeer as a whole selects the Pods matching
     * PodSelector in the Namespaces selected by NamespaceSelector. Otherwise it selects the Pods matching
     * PodSelector in the policy's own Namespace.
     */
    public function getPodSelector(): ?LabelSelector
    {
        return $this->podSelector;
    }

    /**
     * This is a label selector which selects Pods. This field follows standard label selector semantics;
     * if present but empty, it selects all pods.
     *
     * If NamespaceSelector is also set, then the NetworkPolicyPeer as a whole selects the Pods matching
     * PodSelector in the Namespaces selected by NamespaceSelector. Otherwise it selects the Pods matching
     * PodSelector in the policy's own Namespace.
     *
     * @return static
     */
    public function setPodSelector(LabelSelector $podSelector)
    {
        $this->podSelector = $podSelector;

        return $this;
    }
}