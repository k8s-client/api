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

use K8s\Core\Annotation as Kubernetes;

/**
 * Represents a Fibre Channel volume. Fibre Channel volumes can only be mounted as read/write once.
 * Fibre Channel volumes support ownership management and SELinux relabeling.
 */
class FCVolumeSource
{
    /**
     * @Kubernetes\Attribute("fsType")
     * @var string|null
     */
    protected $fsType;

    /**
     * @Kubernetes\Attribute("lun")
     * @var int|null
     */
    protected $lun;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly;

    /**
     * @Kubernetes\Attribute("targetWWNs")
     * @var string[]|null
     */
    protected $targetWWNs;

    /**
     * @Kubernetes\Attribute("wwids")
     * @var string[]|null
     */
    protected $wwids;

    /**
     * @param string|null $fsType
     * @param int|null $lun
     * @param bool|null $readOnly
     * @param string[]|null $targetWWNs
     * @param string[]|null $wwids
     */
    public function __construct(?string $fsType = null, ?int $lun = null, ?bool $readOnly = null, ?array $targetWWNs = null, ?array $wwids = null)
    {
        $this->fsType = $fsType;
        $this->lun = $lun;
        $this->readOnly = $readOnly;
        $this->targetWWNs = $targetWWNs;
        $this->wwids = $wwids;
    }

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex.
     * "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     */
    public function getFsType(): ?string
    {
        return $this->fsType;
    }

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex.
     * "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     *
     * @return static
     */
    public function setFsType(string $fsType)
    {
        $this->fsType = $fsType;

        return $this;
    }

    /**
     * Optional: FC target lun number
     */
    public function getLun(): ?int
    {
        return $this->lun;
    }

    /**
     * Optional: FC target lun number
     *
     * @return static
     */
    public function setLun(int $lun)
    {
        $this->lun = $lun;

        return $this;
    }

    /**
     * Optional: Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in
     * VolumeMounts.
     */
    public function isReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * Optional: Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in
     * VolumeMounts.
     *
     * @return static
     */
    public function setIsReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * Optional: FC target worldwide names (WWNs)
     */
    public function getTargetWWNs(): ?array
    {
        return $this->targetWWNs;
    }

    /**
     * Optional: FC target worldwide names (WWNs)
     *
     * @return static
     */
    public function setTargetWWNs(array $targetWWNs)
    {
        $this->targetWWNs = $targetWWNs;

        return $this;
    }

    /**
     * Optional: FC volume world wide identifiers (wwids) Either wwids or combination of targetWWNs and lun
     * must be set, but not both simultaneously.
     */
    public function getWwids(): ?array
    {
        return $this->wwids;
    }

    /**
     * Optional: FC volume world wide identifiers (wwids) Either wwids or combination of targetWWNs and lun
     * must be set, but not both simultaneously.
     *
     * @return static
     */
    public function setWwids(array $wwids)
    {
        $this->wwids = $wwids;

        return $this;
    }
}