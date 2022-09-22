<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.2
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
 * Represents a Ceph Filesystem mount that lasts the lifetime of a pod Cephfs volumes do not support
 * ownership management or SELinux relabeling.
 */
class CephFSPersistentVolumeSource
{
    /**
     * @Kubernetes\Attribute("monitors",isRequired=true)
     * @var string[]
     */
    protected $monitors;

    /**
     * @Kubernetes\Attribute("path")
     * @var string|null
     */
    protected $path = null;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @Kubernetes\Attribute("secretFile")
     * @var string|null
     */
    protected $secretFile = null;

    /**
     * @Kubernetes\Attribute("secretRef",type="model",model=SecretReference::class)
     * @var SecretReference|null
     */
    protected $secretRef = null;

    /**
     * @Kubernetes\Attribute("user")
     * @var string|null
     */
    protected $user = null;

    /**
     * @param string[] $monitors
     */
    public function __construct(array $monitors)
    {
        $this->monitors = $monitors;
    }

    /**
     * monitors is Required: Monitors is a collection of Ceph monitors More info:
     * https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     */
    public function getMonitors(): array
    {
        return $this->monitors;
    }

    /**
     * monitors is Required: Monitors is a collection of Ceph monitors More info:
     * https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     *
     * @return static
     */
    public function setMonitors(array $monitors)
    {
        $this->monitors = $monitors;

        return $this;
    }

    /**
     * path is Optional: Used as the mounted root, rather than the full Ceph tree, default is /
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * path is Optional: Used as the mounted root, rather than the full Ceph tree, default is /
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * readOnly is Optional: Defaults to false (read/write). ReadOnly here will force the ReadOnly setting
     * in VolumeMounts. More info: https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     */
    public function isReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * readOnly is Optional: Defaults to false (read/write). ReadOnly here will force the ReadOnly setting
     * in VolumeMounts. More info: https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     *
     * @return static
     */
    public function setIsReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * secretFile is Optional: SecretFile is the path to key ring for User, default is
     * /etc/ceph/user.secret More info: https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     */
    public function getSecretFile(): ?string
    {
        return $this->secretFile;
    }

    /**
     * secretFile is Optional: SecretFile is the path to key ring for User, default is
     * /etc/ceph/user.secret More info: https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     *
     * @return static
     */
    public function setSecretFile(string $secretFile)
    {
        $this->secretFile = $secretFile;

        return $this;
    }

    /**
     * secretRef is Optional: SecretRef is reference to the authentication secret for User, default is
     * empty. More info: https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     */
    public function getSecretRef(): ?SecretReference
    {
        return $this->secretRef;
    }

    /**
     * secretRef is Optional: SecretRef is reference to the authentication secret for User, default is
     * empty. More info: https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     *
     * @return static
     */
    public function setSecretRef(SecretReference $secretRef)
    {
        $this->secretRef = $secretRef;

        return $this;
    }

    /**
     * user is Optional: User is the rados user name, default is admin More info:
     * https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * user is Optional: User is the rados user name, default is admin More info:
     * https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     *
     * @return static
     */
    public function setUser(string $user)
    {
        $this->user = $user;

        return $this;
    }
}
