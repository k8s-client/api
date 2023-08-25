<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.13
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
 * PersistentVolumeClaimStatus is the current status of a persistent volume claim.
 */
class PersistentVolumeClaimStatus
{
    /**
     * @Kubernetes\Attribute("accessModes")
     * @var string[]|null
     */
    protected $accessModes = null;

    /**
     * @Kubernetes\Attribute("allocatedResources")
     * @var object[]|null
     */
    protected $allocatedResources = null;

    /**
     * @Kubernetes\Attribute("capacity")
     * @var object[]|null
     */
    protected $capacity = null;

    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=PersistentVolumeClaimCondition::class)
     * @var iterable|PersistentVolumeClaimCondition[]|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("phase")
     * @var string|null
     */
    protected $phase = null;

    /**
     * @Kubernetes\Attribute("resizeStatus")
     * @var string|null
     */
    protected $resizeStatus = null;

    /**
     * accessModes contains the actual access modes the volume backing the PVC has. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     */
    public function getAccessModes(): ?array
    {
        return $this->accessModes;
    }

    /**
     * accessModes contains the actual access modes the volume backing the PVC has. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     *
     * @return static
     */
    public function setAccessModes(array $accessModes)
    {
        $this->accessModes = $accessModes;

        return $this;
    }

    /**
     * allocatedResources is the storage resource within AllocatedResources tracks the capacity allocated
     * to a PVC. It may be larger than the actual capacity when a volume expansion operation is requested.
     * For storage quota, the larger value from allocatedResources and PVC.spec.resources is used. If
     * allocatedResources is not set, PVC.spec.resources alone is used for quota calculation. If a volume
     * expansion capacity request is lowered, allocatedResources is only lowered if there are no expansion
     * operations in progress and if the actual volume capacity is equal or lower than the requested
     * capacity. This is an alpha field and requires enabling RecoverVolumeExpansionFailure feature.
     */
    public function getAllocatedResources(): ?array
    {
        return $this->allocatedResources;
    }

    /**
     * allocatedResources is the storage resource within AllocatedResources tracks the capacity allocated
     * to a PVC. It may be larger than the actual capacity when a volume expansion operation is requested.
     * For storage quota, the larger value from allocatedResources and PVC.spec.resources is used. If
     * allocatedResources is not set, PVC.spec.resources alone is used for quota calculation. If a volume
     * expansion capacity request is lowered, allocatedResources is only lowered if there are no expansion
     * operations in progress and if the actual volume capacity is equal or lower than the requested
     * capacity. This is an alpha field and requires enabling RecoverVolumeExpansionFailure feature.
     *
     * @return static
     */
    public function setAllocatedResources(array $allocatedResources)
    {
        $this->allocatedResources = $allocatedResources;

        return $this;
    }

    /**
     * capacity represents the actual resources of the underlying volume.
     */
    public function getCapacity(): ?array
    {
        return $this->capacity;
    }

    /**
     * capacity represents the actual resources of the underlying volume.
     *
     * @return static
     */
    public function setCapacity(array $capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * conditions is the current Condition of persistent volume claim. If underlying persistent volume is
     * being resized then the Condition will be set to 'ResizeStarted'.
     *
     * @return iterable|PersistentVolumeClaimCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * conditions is the current Condition of persistent volume claim. If underlying persistent volume is
     * being resized then the Condition will be set to 'ResizeStarted'.
     *
     * @return static
     */
    public function setConditions(iterable $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * @return static
     */
    public function addConditions(PersistentVolumeClaimCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * phase represents the current phase of PersistentVolumeClaim.
     */
    public function getPhase(): ?string
    {
        return $this->phase;
    }

    /**
     * phase represents the current phase of PersistentVolumeClaim.
     *
     *
     *
     * @return static
     */
    public function setPhase(string $phase)
    {
        $this->phase = $phase;

        return $this;
    }

    /**
     * resizeStatus stores status of resize operation. ResizeStatus is not set by default but when
     * expansion is complete resizeStatus is set to empty string by resize controller or kubelet. This is
     * an alpha field and requires enabling RecoverVolumeExpansionFailure feature.
     */
    public function getResizeStatus(): ?string
    {
        return $this->resizeStatus;
    }

    /**
     * resizeStatus stores status of resize operation. ResizeStatus is not set by default but when
     * expansion is complete resizeStatus is set to empty string by resize controller or kubelet. This is
     * an alpha field and requires enabling RecoverVolumeExpansionFailure feature.
     *
     * @return static
     */
    public function setResizeStatus(string $resizeStatus)
    {
        $this->resizeStatus = $resizeStatus;

        return $this;
    }
}
