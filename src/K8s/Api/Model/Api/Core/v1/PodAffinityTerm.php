<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.9
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Core\Annotation as Kubernetes;

/**
 * Defines a set of pods (namely those matching the labelSelector relative to the given namespace(s))
 * that this pod should be co-located (affinity) or not co-located (anti-affinity) with, where
 * co-located is defined as running on a node whose value of the label with key <topologyKey> matches
 * that of any node on which a pod of the set of pods is running
 */
class PodAffinityTerm
{
    /**
     * @Kubernetes\Attribute("labelSelector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $labelSelector = null;

    /**
     * @Kubernetes\Attribute("namespaceSelector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $namespaceSelector = null;

    /**
     * @Kubernetes\Attribute("namespaces")
     * @var string[]|null
     */
    protected $namespaces = null;

    /**
     * @Kubernetes\Attribute("topologyKey",isRequired=true)
     * @var string
     */
    protected $topologyKey;

    /**
     * @param string $topologyKey
     */
    public function __construct(string $topologyKey)
    {
        $this->topologyKey = $topologyKey;
    }

    /**
     * A label query over a set of resources, in this case pods.
     */
    public function getLabelSelector(): ?LabelSelector
    {
        return $this->labelSelector;
    }

    /**
     * A label query over a set of resources, in this case pods.
     *
     * @return static
     */
    public function setLabelSelector(LabelSelector $labelSelector)
    {
        $this->labelSelector = $labelSelector;

        return $this;
    }

    /**
     * A label query over the set of namespaces that the term applies to. The term is applied to the union
     * of the namespaces selected by this field and the ones listed in the namespaces field. null selector
     * and null or empty namespaces list means "this pod's namespace". An empty selector ({}) matches all
     * namespaces.
     */
    public function getNamespaceSelector(): ?LabelSelector
    {
        return $this->namespaceSelector;
    }

    /**
     * A label query over the set of namespaces that the term applies to. The term is applied to the union
     * of the namespaces selected by this field and the ones listed in the namespaces field. null selector
     * and null or empty namespaces list means "this pod's namespace". An empty selector ({}) matches all
     * namespaces.
     *
     * @return static
     */
    public function setNamespaceSelector(LabelSelector $namespaceSelector)
    {
        $this->namespaceSelector = $namespaceSelector;

        return $this;
    }

    /**
     * namespaces specifies a static list of namespace names that the term applies to. The term is applied
     * to the union of the namespaces listed in this field and the ones selected by namespaceSelector. null
     * or empty namespaces list and null namespaceSelector means "this pod's namespace".
     */
    public function getNamespaces(): ?array
    {
        return $this->namespaces;
    }

    /**
     * namespaces specifies a static list of namespace names that the term applies to. The term is applied
     * to the union of the namespaces listed in this field and the ones selected by namespaceSelector. null
     * or empty namespaces list and null namespaceSelector means "this pod's namespace".
     *
     * @return static
     */
    public function setNamespaces(array $namespaces)
    {
        $this->namespaces = $namespaces;

        return $this;
    }

    /**
     * This pod should be co-located (affinity) or not co-located (anti-affinity) with the pods matching
     * the labelSelector in the specified namespaces, where co-located is defined as running on a node
     * whose value of the label with key topologyKey matches that of any node on which any of the selected
     * pods is running. Empty topologyKey is not allowed.
     */
    public function getTopologyKey(): string
    {
        return $this->topologyKey;
    }

    /**
     * This pod should be co-located (affinity) or not co-located (anti-affinity) with the pods matching
     * the labelSelector in the specified namespaces, where co-located is defined as running on a node
     * whose value of the label with key topologyKey matches that of any node on which any of the selected
     * pods is running. Empty topologyKey is not allowed.
     *
     * @return static
     */
    public function setTopologyKey(string $topologyKey)
    {
        $this->topologyKey = $topologyKey;

        return $this;
    }
}
