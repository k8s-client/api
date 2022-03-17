<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.11
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
 * Represents an NFS mount that lasts the lifetime of a pod. NFS volumes do not support ownership
 * management or SELinux relabeling.
 */
class NFSVolumeSource
{
    /**
     * @Kubernetes\Attribute("path",isRequired=true)
     * @var string
     */
    protected $path;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @Kubernetes\Attribute("server",isRequired=true)
     * @var string
     */
    protected $server;

    /**
     * @param string $path
     * @param string $server
     */
    public function __construct(string $path, string $server)
    {
        $this->path = $path;
        $this->server = $server;
    }

    /**
     * Path that is exported by the NFS server. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Path that is exported by the NFS server. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * ReadOnly here will force the NFS export to be mounted with read-only permissions. Defaults to false.
     * More info: https://kubernetes.io/docs/concepts/storage/volumes#nfs
     */
    public function isReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * ReadOnly here will force the NFS export to be mounted with read-only permissions. Defaults to false.
     * More info: https://kubernetes.io/docs/concepts/storage/volumes#nfs
     *
     * @return static
     */
    public function setIsReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * Server is the hostname or IP address of the NFS server. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     */
    public function getServer(): string
    {
        return $this->server;
    }

    /**
     * Server is the hostname or IP address of the NFS server. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     *
     * @return static
     */
    public function setServer(string $server)
    {
        $this->server = $server;

        return $this;
    }
}
