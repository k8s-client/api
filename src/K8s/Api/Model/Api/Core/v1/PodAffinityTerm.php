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
    protected $labelSelector;

    /**
     * @Kubernetes\Attribute("namespaces")
     * @var string[]|null
     */
    protected $namespaces;

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
     * namespaces specifies which namespaces the labelSelector applies to (matches against); null or empty
     * list means "this pod's namespace"
     */
    public function getNamespaces(): ?array
    {
        return $this->namespaces;
    }

    /**
     * namespaces specifies which namespaces the labelSelector applies to (matches against); null or empty
     * list means "this pod's namespace"
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
