<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.21.5
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
 * FlexPersistentVolumeSource represents a generic persistent volume resource that is
 * provisioned/attached using an exec based plugin.
 */
class FlexPersistentVolumeSource
{
    /**
     * @Kubernetes\Attribute("driver",isRequired=true)
     * @var string
     */
    protected $driver;

    /**
     * @Kubernetes\Attribute("fsType")
     * @var string|null
     */
    protected $fsType = null;

    /**
     * @Kubernetes\Attribute("options")
     * @var string[]|null
     */
    protected $options = null;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @Kubernetes\Attribute("secretRef",type="model",model=SecretReference::class)
     * @var SecretReference|null
     */
    protected $secretRef = null;

    /**
     * @param string $driver
     */
    public function __construct(string $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Driver is the name of the driver to use for this volume.
     */
    public function getDriver(): string
    {
        return $this->driver;
    }

    /**
     * Driver is the name of the driver to use for this volume.
     *
     * @return static
     */
    public function setDriver(string $driver)
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex.
     * "ext4", "xfs", "ntfs". The default filesystem depends on FlexVolume script.
     */
    public function getFsType(): ?string
    {
        return $this->fsType;
    }

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex.
     * "ext4", "xfs", "ntfs". The default filesystem depends on FlexVolume script.
     *
     * @return static
     */
    public function setFsType(string $fsType)
    {
        $this->fsType = $fsType;

        return $this;
    }

    /**
     * Optional: Extra command options if any.
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * Optional: Extra command options if any.
     *
     * @return static
     */
    public function setOptions(array $options)
    {
        $this->options = $options;

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
     * Optional: SecretRef is reference to the secret object containing sensitive information to pass to
     * the plugin scripts. This may be empty if no secret object is specified. If the secret object
     * contains more than one secret, all secrets are passed to the plugin scripts.
     */
    public function getSecretRef(): ?SecretReference
    {
        return $this->secretRef;
    }

    /**
     * Optional: SecretRef is reference to the secret object containing sensitive information to pass to
     * the plugin scripts. This may be empty if no secret object is specified. If the secret object
     * contains more than one secret, all secrets are passed to the plugin scripts.
     *
     * @return static
     */
    public function setSecretRef(SecretReference $secretRef)
    {
        $this->secretRef = $secretRef;

        return $this;
    }
}
