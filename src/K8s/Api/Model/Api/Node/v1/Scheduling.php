<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Node\v1;

use K8s\Api\Model\Api\Core\v1\Toleration;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * Scheduling specifies the scheduling constraints for nodes supporting a RuntimeClass.
 */
class Scheduling
{
    /**
     * @Kubernetes\Attribute("nodeSelector")
     * @var string[]|null
     */
    protected $nodeSelector = null;

    /**
     * @Kubernetes\Attribute("tolerations",type="collection",model=Toleration::class)
     * @var iterable|Toleration[]|null
     */
    protected $tolerations = null;

    /**
     * @param string[]|null $nodeSelector
     * @param iterable|Toleration[] $tolerations
     */
    public function __construct(?array $nodeSelector = null, iterable $tolerations = [])
    {
        $this->nodeSelector = $nodeSelector;
        $this->tolerations = new Collection($tolerations);
    }

    /**
     * nodeSelector lists labels that must be present on nodes that support this RuntimeClass. Pods using
     * this RuntimeClass can only be scheduled to a node matched by this selector. The RuntimeClass
     * nodeSelector is merged with a pod's existing nodeSelector. Any conflicts will cause the pod to be
     * rejected in admission.
     */
    public function getNodeSelector(): ?array
    {
        return $this->nodeSelector;
    }

    /**
     * nodeSelector lists labels that must be present on nodes that support this RuntimeClass. Pods using
     * this RuntimeClass can only be scheduled to a node matched by this selector. The RuntimeClass
     * nodeSelector is merged with a pod's existing nodeSelector. Any conflicts will cause the pod to be
     * rejected in admission.
     *
     * @return static
     */
    public function setNodeSelector(array $nodeSelector)
    {
        $this->nodeSelector = $nodeSelector;

        return $this;
    }

    /**
     * tolerations are appended (excluding duplicates) to pods running with this RuntimeClass during
     * admission, effectively unioning the set of nodes tolerated by the pod and the RuntimeClass.
     *
     * @return iterable|Toleration[]
     */
    public function getTolerations(): ?iterable
    {
        return $this->tolerations;
    }

    /**
     * tolerations are appended (excluding duplicates) to pods running with this RuntimeClass during
     * admission, effectively unioning the set of nodes tolerated by the pod and the RuntimeClass.
     *
     * @return static
     */
    public function setTolerations(iterable $tolerations)
    {
        $this->tolerations = $tolerations;

        return $this;
    }

    /**
     * @return static
     */
    public function addTolerations(Toleration $toleration)
    {
        if (!$this->tolerations) {
            $this->tolerations = new Collection();
        }
        $this->tolerations[] = $toleration;

        return $this;
    }
}
