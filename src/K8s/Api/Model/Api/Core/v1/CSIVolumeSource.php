<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.14.10
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
 * Represents a source location of a volume to mount, managed by an external CSI driver
 */
class CSIVolumeSource
{
    /**
     * @Kubernetes\Attribute("driver",isRequired=true)
     * @var string
     */
    protected $driver;

    /**
     * @Kubernetes\Attribute("fsType")
     * @var string|null
     */
    protected $fsType = null;

    /**
     * @Kubernetes\Attribute("nodePublishSecretRef",type="model",model=LocalObjectReference::class)
     * @var LocalObjectReference|null
     */
    protected $nodePublishSecretRef = null;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @Kubernetes\Attribute("volumeAttributes")
     * @var string[]|null
     */
    protected $volumeAttributes = null;

    /**
     * @param string $driver
     */
    public function __construct(string $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Driver is the name of the CSI driver that handles this volume. Consult with your admin for the
     * correct name as registered in the cluster.
     */
    public function getDriver(): string
    {
        return $this->driver;
    }

    /**
     * Driver is the name of the CSI driver that handles this volume. Consult with your admin for the
     * correct name as registered in the cluster.
     *
     * @return static
     */
    public function setDriver(string $driver)
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * Filesystem type to mount. Ex. "ext4", "xfs", "ntfs". If not provided, the empty value is passed to
     * the associated CSI driver which will determine the default filesystem to apply.
     */
    public function getFsType(): ?string
    {
        return $this->fsType;
    }

    /**
     * Filesystem type to mount. Ex. "ext4", "xfs", "ntfs". If not provided, the empty value is passed to
     * the associated CSI driver which will determine the default filesystem to apply.
     *
     * @return static
     */
    public function setFsType(string $fsType)
    {
        $this->fsType = $fsType;

        return $this;
    }

    /**
     * NodePublishSecretRef is a reference to the secret object containing sensitive information to pass to
     * the CSI driver to complete the CSI NodePublishVolume and NodeUnpublishVolume calls. This field is
     * optional, and  may be empty if no secret is required. If the secret object contains more than one
     * secret, all secret references are passed.
     */
    public function getNodePublishSecretRef(): ?LocalObjectReference
    {
        return $this->nodePublishSecretRef;
    }

    /**
     * NodePublishSecretRef is a reference to the secret object containing sensitive information to pass to
     * the CSI driver to complete the CSI NodePublishVolume and NodeUnpublishVolume calls. This field is
     * optional, and  may be empty if no secret is required. If the secret object contains more than one
     * secret, all secret references are passed.
     *
     * @return static
     */
    public function setNodePublishSecretRef(LocalObjectReference $nodePublishSecretRef)
    {
        $this->nodePublishSecretRef = $nodePublishSecretRef;

        return $this;
    }

    /**
     * Specifies a read-only configuration for the volume. Defaults to false (read/write).
     */
    public function isReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * Specifies a read-only configuration for the volume. Defaults to false (read/write).
     *
     * @return static
     */
    public function setIsReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * VolumeAttributes stores driver-specific properties that are passed to the CSI driver. Consult your
     * driver's documentation for supported values.
     */
    public function getVolumeAttributes(): ?array
    {
        return $this->volumeAttributes;
    }

    /**
     * VolumeAttributes stores driver-specific properties that are passed to the CSI driver. Consult your
     * driver's documentation for supported values.
     *
     * @return static
     */
    public function setVolumeAttributes(array $volumeAttributes)
    {
        $this->volumeAttributes = $volumeAttributes;

        return $this;
    }
}
