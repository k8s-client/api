<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.7
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
 * VolumeMount describes a mounting of a Volume within a container.
 */
class VolumeMount
{
    /**
     * @Kubernetes\Attribute("mountPath",isRequired=true)
     * @var string
     */
    protected $mountPath;

    /**
     * @Kubernetes\Attribute("mountPropagation")
     * @var string|null
     */
    protected $mountPropagation = null;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @Kubernetes\Attribute("subPath")
     * @var string|null
     */
    protected $subPath = null;

    /**
     * @Kubernetes\Attribute("subPathExpr")
     * @var string|null
     */
    protected $subPathExpr = null;

    /**
     * @param string $mountPath
     * @param string $name
     */
    public function __construct(string $mountPath, string $name)
    {
        $this->mountPath = $mountPath;
        $this->name = $name;
    }

    /**
     * Path within the container at which the volume should be mounted.  Must not contain ':'.
     */
    public function getMountPath(): string
    {
        return $this->mountPath;
    }

    /**
     * Path within the container at which the volume should be mounted.  Must not contain ':'.
     *
     * @return static
     */
    public function setMountPath(string $mountPath)
    {
        $this->mountPath = $mountPath;

        return $this;
    }

    /**
     * mountPropagation determines how mounts are propagated from the host to container and the other way
     * around. When not set, MountPropagationNone is used. This field is beta in 1.10.
     */
    public function getMountPropagation(): ?string
    {
        return $this->mountPropagation;
    }

    /**
     * mountPropagation determines how mounts are propagated from the host to container and the other way
     * around. When not set, MountPropagationNone is used. This field is beta in 1.10.
     *
     * @return static
     */
    public function setMountPropagation(string $mountPropagation)
    {
        $this->mountPropagation = $mountPropagation;

        return $this;
    }

    /**
     * This must match the Name of a Volume.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * This must match the Name of a Volume.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Mounted read-only if true, read-write otherwise (false or unspecified). Defaults to false.
     */
    public function isReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * Mounted read-only if true, read-write otherwise (false or unspecified). Defaults to false.
     *
     * @return static
     */
    public function setIsReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * Path within the volume from which the container's volume should be mounted. Defaults to "" (volume's
     * root).
     */
    public function getSubPath(): ?string
    {
        return $this->subPath;
    }

    /**
     * Path within the volume from which the container's volume should be mounted. Defaults to "" (volume's
     * root).
     *
     * @return static
     */
    public function setSubPath(string $subPath)
    {
        $this->subPath = $subPath;

        return $this;
    }

    /**
     * Expanded path within the volume from which the container's volume should be mounted. Behaves
     * similarly to SubPath but environment variable references $(VAR_NAME) are expanded using the
     * container's environment. Defaults to "" (volume's root). SubPathExpr and SubPath are mutually
     * exclusive.
     */
    public function getSubPathExpr(): ?string
    {
        return $this->subPathExpr;
    }

    /**
     * Expanded path within the volume from which the container's volume should be mounted. Behaves
     * similarly to SubPath but environment variable references $(VAR_NAME) are expanded using the
     * container's environment. Defaults to "" (volume's root). SubPathExpr and SubPath are mutually
     * exclusive.
     *
     * @return static
     */
    public function setSubPathExpr(string $subPathExpr)
    {
        $this->subPathExpr = $subPathExpr;

        return $this;
    }
}
