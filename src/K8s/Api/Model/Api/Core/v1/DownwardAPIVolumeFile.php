<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.13
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
 * DownwardAPIVolumeFile represents information to create the file containing the pod field
 */
class DownwardAPIVolumeFile
{
    /**
     * @Kubernetes\Attribute("fieldRef",type="model",model=ObjectFieldSelector::class)
     * @var ObjectFieldSelector|null
     */
    protected $fieldRef = null;

    /**
     * @Kubernetes\Attribute("mode")
     * @var int|null
     */
    protected $mode = null;

    /**
     * @Kubernetes\Attribute("path",isRequired=true)
     * @var string
     */
    protected $path;

    /**
     * @Kubernetes\Attribute("resourceFieldRef",type="model",model=ResourceFieldSelector::class)
     * @var ResourceFieldSelector|null
     */
    protected $resourceFieldRef = null;

    /**
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * Required: Selects a field of the pod: only annotations, labels, name and namespace are supported.
     */
    public function getFieldRef(): ?ObjectFieldSelector
    {
        return $this->fieldRef;
    }

    /**
     * Required: Selects a field of the pod: only annotations, labels, name and namespace are supported.
     *
     * @return static
     */
    public function setFieldRef(ObjectFieldSelector $fieldRef)
    {
        $this->fieldRef = $fieldRef;

        return $this;
    }

    /**
     * Optional: mode bits used to set permissions on this file, must be an octal value between 0000 and
     * 0777 or a decimal value between 0 and 511. YAML accepts both octal and decimal values, JSON requires
     * decimal values for mode bits. If not specified, the volume defaultMode will be used. This might be
     * in conflict with other options that affect the file mode, like fsGroup, and the result can be other
     * mode bits set.
     */
    public function getMode(): ?int
    {
        return $this->mode;
    }

    /**
     * Optional: mode bits used to set permissions on this file, must be an octal value between 0000 and
     * 0777 or a decimal value between 0 and 511. YAML accepts both octal and decimal values, JSON requires
     * decimal values for mode bits. If not specified, the volume defaultMode will be used. This might be
     * in conflict with other options that affect the file mode, like fsGroup, and the result can be other
     * mode bits set.
     *
     * @return static
     */
    public function setMode(int $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Required: Path is  the relative path name of the file to be created. Must not be absolute or contain
     * the '..' path. Must be utf-8 encoded. The first item of the relative path must not start with '..'
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Required: Path is  the relative path name of the file to be created. Must not be absolute or contain
     * the '..' path. Must be utf-8 encoded. The first item of the relative path must not start with '..'
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Selects a resource of the container: only resources limits and requests (limits.cpu, limits.memory,
     * requests.cpu and requests.memory) are currently supported.
     */
    public function getResourceFieldRef(): ?ResourceFieldSelector
    {
        return $this->resourceFieldRef;
    }

    /**
     * Selects a resource of the container: only resources limits and requests (limits.cpu, limits.memory,
     * requests.cpu and requests.memory) are currently supported.
     *
     * @return static
     */
    public function setResourceFieldRef(ResourceFieldSelector $resourceFieldRef)
    {
        $this->resourceFieldRef = $resourceFieldRef;

        return $this;
    }
}
