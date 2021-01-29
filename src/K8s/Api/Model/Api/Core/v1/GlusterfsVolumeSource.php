<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.18.15
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
 * Represents a Glusterfs mount that lasts the lifetime of a pod. Glusterfs volumes do not support
 * ownership management or SELinux relabeling.
 */
class GlusterfsVolumeSource
{
    /**
     * @Kubernetes\Attribute("endpoints",isRequired=true)
     * @var string
     */
    protected $endpoints = null;

    /**
     * @Kubernetes\Attribute("path",isRequired=true)
     * @var string
     */
    protected $path = null;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @param string $endpoints
     * @param string $path
     */
    public function __construct(string $endpoints, string $path)
    {
        $this->endpoints = $endpoints;
        $this->path = $path;
    }

    /**
     * EndpointsName is the endpoint name that details Glusterfs topology. More info:
     * https://examples.k8s.io/volumes/glusterfs/README.md#create-a-pod
     */
    public function getEndpoints(): string
    {
        return $this->endpoints;
    }

    /**
     * EndpointsName is the endpoint name that details Glusterfs topology. More info:
     * https://examples.k8s.io/volumes/glusterfs/README.md#create-a-pod
     *
     * @return static
     */
    public function setEndpoints(string $endpoints)
    {
        $this->endpoints = $endpoints;

        return $this;
    }

    /**
     * Path is the Glusterfs volume path. More info:
     * https://examples.k8s.io/volumes/glusterfs/README.md#create-a-pod
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Path is the Glusterfs volume path. More info:
     * https://examples.k8s.io/volumes/glusterfs/README.md#create-a-pod
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * ReadOnly here will force the Glusterfs volume to be mounted with read-only permissions. Defaults to
     * false. More info: https://examples.k8s.io/volumes/glusterfs/README.md#create-a-pod
     */
    public function isReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * ReadOnly here will force the Glusterfs volume to be mounted with read-only permissions. Defaults to
     * false. More info: https://examples.k8s.io/volumes/glusterfs/README.md#create-a-pod
     *
     * @return static
     */
    public function setIsReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }
}
