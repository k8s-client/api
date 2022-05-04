<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.0
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
 * An empty preferred scheduling term matches all objects with implicit weight 0 (i.e. it's a no-op). A
 * null preferred scheduling term matches no objects (i.e. is also a no-op).
 */
class PreferredSchedulingTerm
{
    /**
     * @Kubernetes\Attribute("preference",type="model",model=NodeSelectorTerm::class,isRequired=true)
     * @var NodeSelectorTerm
     */
    protected $preference;

    /**
     * @Kubernetes\Attribute("weight",isRequired=true)
     * @var int
     */
    protected $weight;

    /**
     * @param NodeSelectorTerm $preference
     * @param int $weight
     */
    public function __construct(NodeSelectorTerm $preference, int $weight)
    {
        $this->preference = $preference;
        $this->weight = $weight;
    }

    /**
     * A node selector term, associated with the corresponding weight.
     */
    public function getPreference(): NodeSelectorTerm
    {
        return $this->preference;
    }

    /**
     * A node selector term, associated with the corresponding weight.
     *
     * @return static
     */
    public function setPreference(NodeSelectorTerm $preference)
    {
        $this->preference = $preference;

        return $this;
    }

    /**
     * Weight associated with matching the corresponding nodeSelectorTerm, in the range 1-100.
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * Weight associated with matching the corresponding nodeSelectorTerm, in the range 1-100.
     *
     * @return static
     */
    public function setWeight(int $weight)
    {
        $this->weight = $weight;

        return $this;
    }
}
