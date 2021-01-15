<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.20.2
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
 * ScaleIOVolumeSource represents a persistent ScaleIO volume
 */
class ScaleIOVolumeSource
{
    /**
     * @Kubernetes\Attribute("fsType")
     * @var string|null
     */
    protected $fsType;

    /**
     * @Kubernetes\Attribute("gateway",isRequired=true)
     * @var string
     */
    protected $gateway;

    /**
     * @Kubernetes\Attribute("protectionDomain")
     * @var string|null
     */
    protected $protectionDomain;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly;

    /**
     * @Kubernetes\Attribute("secretRef",type="model",model=LocalObjectReference::class,isRequired=true)
     * @var LocalObjectReference
     */
    protected $secretRef;

    /**
     * @Kubernetes\Attribute("sslEnabled")
     * @var bool|null
     */
    protected $sslEnabled;

    /**
     * @Kubernetes\Attribute("storageMode")
     * @var string|null
     */
    protected $storageMode;

    /**
     * @Kubernetes\Attribute("storagePool")
     * @var string|null
     */
    protected $storagePool;

    /**
     * @Kubernetes\Attribute("system",isRequired=true)
     * @var string
     */
    protected $system;

    /**
     * @Kubernetes\Attribute("volumeName")
     * @var string|null
     */
    protected $volumeName;

    /**
     * @param string $gateway
     * @param LocalObjectReference $secretRef
     * @param string $system
     */
    public function __construct(string $gateway, LocalObjectReference $secretRef, string $system)
    {
        $this->gateway = $gateway;
        $this->secretRef = $secretRef;
        $this->system = $system;
    }

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex.
     * "ext4", "xfs", "ntfs". Default is "xfs".
     */
    public function getFsType(): ?string
    {
        return $this->fsType;
    }

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex.
     * "ext4", "xfs", "ntfs". Default is "xfs".
     *
     * @return static
     */
    public function setFsType(string $fsType)
    {
        $this->fsType = $fsType;

        return $this;
    }

    /**
     * The host address of the ScaleIO API Gateway.
     */
    public function getGateway(): string
    {
        return $this->gateway;
    }

    /**
     * The host address of the ScaleIO API Gateway.
     *
     * @return static
     */
    public function setGateway(string $gateway)
    {
        $this->gateway = $gateway;

        return $this;
    }

    /**
     * The name of the ScaleIO Protection Domain for the configured storage.
     */
    public function getProtectionDomain(): ?string
    {
        return $this->protectionDomain;
    }

    /**
     * The name of the ScaleIO Protection Domain for the configured storage.
     *
     * @return static
     */
    public function setProtectionDomain(string $protectionDomain)
    {
        $this->protectionDomain = $protectionDomain;

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
     * SecretRef references to the secret for ScaleIO user and other sensitive information. If this is not
     * provided, Login operation will fail.
     */
    public function getSecretRef(): LocalObjectReference
    {
        return $this->secretRef;
    }

    /**
     * SecretRef references to the secret for ScaleIO user and other sensitive information. If this is not
     * provided, Login operation will fail.
     *
     * @return static
     */
    public function setSecretRef(LocalObjectReference $secretRef)
    {
        $this->secretRef = $secretRef;

        return $this;
    }

    /**
     * Flag to enable/disable SSL communication with Gateway, default false
     */
    public function isSslEnabled(): ?bool
    {
        return $this->sslEnabled;
    }

    /**
     * Flag to enable/disable SSL communication with Gateway, default false
     *
     * @return static
     */
    public function setIsSslEnabled(bool $sslEnabled)
    {
        $this->sslEnabled = $sslEnabled;

        return $this;
    }

    /**
     * Indicates whether the storage for a volume should be ThickProvisioned or ThinProvisioned. Default is
     * ThinProvisioned.
     */
    public function getStorageMode(): ?string
    {
        return $this->storageMode;
    }

    /**
     * Indicates whether the storage for a volume should be ThickProvisioned or ThinProvisioned. Default is
     * ThinProvisioned.
     *
     * @return static
     */
    public function setStorageMode(string $storageMode)
    {
        $this->storageMode = $storageMode;

        return $this;
    }

    /**
     * The ScaleIO Storage Pool associated with the protection domain.
     */
    public function getStoragePool(): ?string
    {
        return $this->storagePool;
    }

    /**
     * The ScaleIO Storage Pool associated with the protection domain.
     *
     * @return static
     */
    public function setStoragePool(string $storagePool)
    {
        $this->storagePool = $storagePool;

        return $this;
    }

    /**
     * The name of the storage system as configured in ScaleIO.
     */
    public function getSystem(): string
    {
        return $this->system;
    }

    /**
     * The name of the storage system as configured in ScaleIO.
     *
     * @return static
     */
    public function setSystem(string $system)
    {
        $this->system = $system;

        return $this;
    }

    /**
     * The name of a volume already created in the ScaleIO system that is associated with this volume
     * source.
     */
    public function getVolumeName(): ?string
    {
        return $this->volumeName;
    }

    /**
     * The name of a volume already created in the ScaleIO system that is associated with this volume
     * source.
     *
     * @return static
     */
    public function setVolumeName(string $volumeName)
    {
        $this->volumeName = $volumeName;

        return $this;
    }
}
