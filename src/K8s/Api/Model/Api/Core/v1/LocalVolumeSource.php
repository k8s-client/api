<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.17
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
 * Local represents directly-attached storage with node affinity (Beta feature)
 */
class LocalVolumeSource
{
    /**
     * @Kubernetes\Attribute("fsType")
     * @var string|null
     */
    protected $fsType = null;

    /**
     * @Kubernetes\Attribute("path",isRequired=true)
     * @var string
     */
    protected $path;

    /**
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * Filesystem type to mount. It applies only when the Path is a block device. Must be a filesystem type
     * supported by the host operating system. Ex. "ext4", "xfs", "ntfs". The default value is to
     * auto-select a fileystem if unspecified.
     */
    public function getFsType(): ?string
    {
        return $this->fsType;
    }

    /**
     * Filesystem type to mount. It applies only when the Path is a block device. Must be a filesystem type
     * supported by the host operating system. Ex. "ext4", "xfs", "ntfs". The default value is to
     * auto-select a fileystem if unspecified.
     *
     * @return static
     */
    public function setFsType(string $fsType)
    {
        $this->fsType = $fsType;

        return $this;
    }

    /**
     * The full path to the volume on the node. It can be either a directory or block device (disk,
     * partition, ...).
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * The full path to the volume on the node. It can be either a directory or block device (disk,
     * partition, ...).
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }
}
