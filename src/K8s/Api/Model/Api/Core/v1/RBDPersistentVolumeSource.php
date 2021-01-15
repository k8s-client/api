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
 * Represents a Rados Block Device mount that lasts the lifetime of a pod. RBD volumes support
 * ownership management and SELinux relabeling.
 */
class RBDPersistentVolumeSource
{
    /**
     * @Kubernetes\Attribute("fsType")
     * @var string|null
     */
    protected $fsType;

    /**
     * @Kubernetes\Attribute("image",isRequired=true)
     * @var string
     */
    protected $image;

    /**
     * @Kubernetes\Attribute("keyring")
     * @var string|null
     */
    protected $keyring;

    /**
     * @Kubernetes\Attribute("monitors",isRequired=true)
     * @var string[]
     */
    protected $monitors;

    /**
     * @Kubernetes\Attribute("pool")
     * @var string|null
     */
    protected $pool;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly;

    /**
     * @Kubernetes\Attribute("secretRef",type="model",model=SecretReference::class)
     * @var SecretReference|null
     */
    protected $secretRef;

    /**
     * @Kubernetes\Attribute("user")
     * @var string|null
     */
    protected $user;

    /**
     * @param string $image
     * @param string[] $monitors
     */
    public function __construct(string $image, array $monitors)
    {
        $this->image = $image;
        $this->monitors = $monitors;
    }

    /**
     * Filesystem type of the volume that you want to mount. Tip: Ensure that the filesystem type is
     * supported by the host operating system. Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be
     * "ext4" if unspecified. More info: https://kubernetes.io/docs/concepts/storage/volumes#rbd
     */
    public function getFsType(): ?string
    {
        return $this->fsType;
    }

    /**
     * Filesystem type of the volume that you want to mount. Tip: Ensure that the filesystem type is
     * supported by the host operating system. Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be
     * "ext4" if unspecified. More info: https://kubernetes.io/docs/concepts/storage/volumes#rbd
     *
     * @return static
     */
    public function setFsType(string $fsType)
    {
        $this->fsType = $fsType;

        return $this;
    }

    /**
     * The rados image name. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * The rados image name. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     *
     * @return static
     */
    public function setImage(string $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Keyring is the path to key ring for RBDUser. Default is /etc/ceph/keyring. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     */
    public function getKeyring(): ?string
    {
        return $this->keyring;
    }

    /**
     * Keyring is the path to key ring for RBDUser. Default is /etc/ceph/keyring. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     *
     * @return static
     */
    public function setKeyring(string $keyring)
    {
        $this->keyring = $keyring;

        return $this;
    }

    /**
     * A collection of Ceph monitors. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     */
    public function getMonitors(): array
    {
        return $this->monitors;
    }

    /**
     * A collection of Ceph monitors. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     *
     * @return static
     */
    public function setMonitors(array $monitors)
    {
        $this->monitors = $monitors;

        return $this;
    }

    /**
     * The rados pool name. Default is rbd. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     */
    public function getPool(): ?string
    {
        return $this->pool;
    }

    /**
     * The rados pool name. Default is rbd. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     *
     * @return static
     */
    public function setPool(string $pool)
    {
        $this->pool = $pool;

        return $this;
    }

    /**
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to false. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     */
    public function isReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to false. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     *
     * @return static
     */
    public function setIsReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * SecretRef is name of the authentication secret for RBDUser. If provided overrides keyring. Default
     * is nil. More info: https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     */
    public function getSecretRef(): ?SecretReference
    {
        return $this->secretRef;
    }

    /**
     * SecretRef is name of the authentication secret for RBDUser. If provided overrides keyring. Default
     * is nil. More info: https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     *
     * @return static
     */
    public function setSecretRef(SecretReference $secretRef)
    {
        $this->secretRef = $secretRef;

        return $this;
    }

    /**
     * The rados user name. Default is admin. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * The rados user name. Default is admin. More info:
     * https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md#how-to-use-it
     *
     * @return static
     */
    public function setUser(string $user)
    {
        $this->user = $user;

        return $this;
    }
}