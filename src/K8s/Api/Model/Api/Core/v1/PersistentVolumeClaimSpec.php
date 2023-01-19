<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.6
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
 * PersistentVolumeClaimSpec describes the common attributes of storage devices and allows a Source for
 * provider-specific attributes
 */
class PersistentVolumeClaimSpec
{
    /**
     * @Kubernetes\Attribute("accessModes")
     * @var string[]|null
     */
    protected $accessModes = null;

    /**
     * @Kubernetes\Attribute("dataSource",type="model",model=TypedLocalObjectReference::class)
     * @var TypedLocalObjectReference|null
     */
    protected $dataSource = null;

    /**
     * @Kubernetes\Attribute("dataSourceRef",type="model",model=TypedLocalObjectReference::class)
     * @var TypedLocalObjectReference|null
     */
    protected $dataSourceRef = null;

    /**
     * @Kubernetes\Attribute("resources",type="model",model=ResourceRequirements::class)
     * @var ResourceRequirements|null
     */
    protected $resources = null;

    /**
     * @Kubernetes\Attribute("selector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $selector = null;

    /**
     * @Kubernetes\Attribute("storageClassName")
     * @var string|null
     */
    protected $storageClassName = null;

    /**
     * @Kubernetes\Attribute("volumeMode")
     * @var string|null
     */
    protected $volumeMode = null;

    /**
     * @Kubernetes\Attribute("volumeName")
     * @var string|null
     */
    protected $volumeName = null;

    /**
     * accessModes contains the desired access modes the volume should have. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     */
    public function getAccessModes(): ?array
    {
        return $this->accessModes;
    }

    /**
     * accessModes contains the desired access modes the volume should have. More info:
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
     * dataSource field can be used to specify either: * An existing VolumeSnapshot object
     * (snapshot.storage.k8s.io/VolumeSnapshot) * An existing PVC (PersistentVolumeClaim) If the
     * provisioner or an external controller can support the specified data source, it will create a new
     * volume based on the contents of the specified data source. If the AnyVolumeDataSource feature gate
     * is enabled, this field will always have the same contents as the DataSourceRef field.
     */
    public function getDataSource(): ?TypedLocalObjectReference
    {
        return $this->dataSource;
    }

    /**
     * dataSource field can be used to specify either: * An existing VolumeSnapshot object
     * (snapshot.storage.k8s.io/VolumeSnapshot) * An existing PVC (PersistentVolumeClaim) If the
     * provisioner or an external controller can support the specified data source, it will create a new
     * volume based on the contents of the specified data source. If the AnyVolumeDataSource feature gate
     * is enabled, this field will always have the same contents as the DataSourceRef field.
     *
     * @return static
     */
    public function setDataSource(TypedLocalObjectReference $dataSource)
    {
        $this->dataSource = $dataSource;

        return $this;
    }

    /**
     * dataSourceRef specifies the object from which to populate the volume with data, if a non-empty
     * volume is desired. This may be any local object from a non-empty API group (non core object) or a
     * PersistentVolumeClaim object. When this field is specified, volume binding will only succeed if the
     * type of the specified object matches some installed volume populator or dynamic provisioner. This
     * field will replace the functionality of the DataSource field and as such if both fields are
     * non-empty, they must have the same value. For backwards compatibility, both fields (DataSource and
     * DataSourceRef) will be set to the same value automatically if one of them is empty and the other is
     * non-empty. There are two important differences between DataSource and DataSourceRef: * While
     * DataSource only allows two specific types of objects, DataSourceRef
     *   allows any non-core object, as well as PersistentVolumeClaim objects.
     * * While DataSource ignores disallowed values (dropping them), DataSourceRef
     *   preserves all values, and generates an error if a disallowed value is
     *   specified.
     * (Beta) Using this field requires the AnyVolumeDataSource feature gate to be enabled.
     */
    public function getDataSourceRef(): ?TypedLocalObjectReference
    {
        return $this->dataSourceRef;
    }

    /**
     * dataSourceRef specifies the object from which to populate the volume with data, if a non-empty
     * volume is desired. This may be any local object from a non-empty API group (non core object) or a
     * PersistentVolumeClaim object. When this field is specified, volume binding will only succeed if the
     * type of the specified object matches some installed volume populator or dynamic provisioner. This
     * field will replace the functionality of the DataSource field and as such if both fields are
     * non-empty, they must have the same value. For backwards compatibility, both fields (DataSource and
     * DataSourceRef) will be set to the same value automatically if one of them is empty and the other is
     * non-empty. There are two important differences between DataSource and DataSourceRef: * While
     * DataSource only allows two specific types of objects, DataSourceRef
     *   allows any non-core object, as well as PersistentVolumeClaim objects.
     * * While DataSource ignores disallowed values (dropping them), DataSourceRef
     *   preserves all values, and generates an error if a disallowed value is
     *   specified.
     * (Beta) Using this field requires the AnyVolumeDataSource feature gate to be enabled.
     *
     * @return static
     */
    public function setDataSourceRef(TypedLocalObjectReference $dataSourceRef)
    {
        $this->dataSourceRef = $dataSourceRef;

        return $this;
    }

    /**
     * resources represents the minimum resources the volume should have. If RecoverVolumeExpansionFailure
     * feature is enabled users are allowed to specify resource requirements that are lower than previous
     * value but must still be higher than capacity recorded in the status field of the claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources
     */
    public function getResources(): ?ResourceRequirements
    {
        return $this->resources;
    }

    /**
     * resources represents the minimum resources the volume should have. If RecoverVolumeExpansionFailure
     * feature is enabled users are allowed to specify resource requirements that are lower than previous
     * value but must still be higher than capacity recorded in the status field of the claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources
     *
     * @return static
     */
    public function setResources(ResourceRequirements $resources)
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * selector is a label query over volumes to consider for binding.
     */
    public function getSelector(): ?LabelSelector
    {
        return $this->selector;
    }

    /**
     * selector is a label query over volumes to consider for binding.
     *
     * @return static
     */
    public function setSelector(LabelSelector $selector)
    {
        $this->selector = $selector;

        return $this;
    }

    /**
     * storageClassName is the name of the StorageClass required by the claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#class-1
     */
    public function getStorageClassName(): ?string
    {
        return $this->storageClassName;
    }

    /**
     * storageClassName is the name of the StorageClass required by the claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#class-1
     *
     * @return static
     */
    public function setStorageClassName(string $storageClassName)
    {
        $this->storageClassName = $storageClassName;

        return $this;
    }

    /**
     * volumeMode defines what type of volume is required by the claim. Value of Filesystem is implied when
     * not included in claim spec.
     */
    public function getVolumeMode(): ?string
    {
        return $this->volumeMode;
    }

    /**
     * volumeMode defines what type of volume is required by the claim. Value of Filesystem is implied when
     * not included in claim spec.
     *
     * @return static
     */
    public function setVolumeMode(string $volumeMode)
    {
        $this->volumeMode = $volumeMode;

        return $this;
    }

    /**
     * volumeName is the binding reference to the PersistentVolume backing this claim.
     */
    public function getVolumeName(): ?string
    {
        return $this->volumeName;
    }

    /**
     * volumeName is the binding reference to the PersistentVolume backing this claim.
     *
     * @return static
     */
    public function setVolumeName(string $volumeName)
    {
        $this->volumeName = $volumeName;

        return $this;
    }
}
