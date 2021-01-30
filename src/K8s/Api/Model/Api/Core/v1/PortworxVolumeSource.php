<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.15.12
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
 * PortworxVolumeSource represents a Portworx volume resource.
 */
class PortworxVolumeSource
{
    /**
     * @Kubernetes\Attribute("fsType")
     * @var string|null
     */
    protected $fsType = null;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @Kubernetes\Attribute("volumeID",isRequired=true)
     * @var string
     */
    protected $volumeID;

    /**
     * @param string $volumeID
     */
    public function __construct(string $volumeID)
    {
        $this->volumeID = $volumeID;
    }

    /**
     * FSType represents the filesystem type to mount Must be a filesystem type supported by the host
     * operating system. Ex. "ext4", "xfs". Implicitly inferred to be "ext4" if unspecified.
     */
    public function getFsType(): ?string
    {
        return $this->fsType;
    }

    /**
     * FSType represents the filesystem type to mount Must be a filesystem type supported by the host
     * operating system. Ex. "ext4", "xfs". Implicitly inferred to be "ext4" if unspecified.
     *
     * @return static
     */
    public function setFsType(string $fsType)
    {
        $this->fsType = $fsType;

        return $this;
    }

    /**
     * Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public function isReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     *
     * @return static
     */
    public function setIsReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * VolumeID uniquely identifies a Portworx volume
     */
    public function getVolumeID(): string
    {
        return $this->volumeID;
    }

    /**
     * VolumeID uniquely identifies a Portworx volume
     *
     * @return static
     */
    public function setVolumeID(string $volumeID)
    {
        $this->volumeID = $volumeID;

        return $this;
    }
}
