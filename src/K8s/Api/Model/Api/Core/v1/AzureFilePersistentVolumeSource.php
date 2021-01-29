<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.13.12
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
 * AzureFile represents an Azure File Service mount on the host and bind mount to the pod.
 */
class AzureFilePersistentVolumeSource
{
    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @Kubernetes\Attribute("secretName",isRequired=true)
     * @var string
     */
    protected $secretName = null;

    /**
     * @Kubernetes\Attribute("secretNamespace")
     * @var string|null
     */
    protected $secretNamespace = null;

    /**
     * @Kubernetes\Attribute("shareName",isRequired=true)
     * @var string
     */
    protected $shareName = null;

    /**
     * @param string $secretName
     * @param string $shareName
     */
    public function __construct(string $secretName, string $shareName)
    {
        $this->secretName = $secretName;
        $this->shareName = $shareName;
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
     * the name of secret that contains Azure Storage Account Name and Key
     */
    public function getSecretName(): string
    {
        return $this->secretName;
    }

    /**
     * the name of secret that contains Azure Storage Account Name and Key
     *
     * @return static
     */
    public function setSecretName(string $secretName)
    {
        $this->secretName = $secretName;

        return $this;
    }

    /**
     * the namespace of the secret that contains Azure Storage Account Name and Key default is the same as
     * the Pod
     */
    public function getSecretNamespace(): ?string
    {
        return $this->secretNamespace;
    }

    /**
     * the namespace of the secret that contains Azure Storage Account Name and Key default is the same as
     * the Pod
     *
     * @return static
     */
    public function setSecretNamespace(string $secretNamespace)
    {
        $this->secretNamespace = $secretNamespace;

        return $this;
    }

    /**
     * Share Name
     */
    public function getShareName(): string
    {
        return $this->shareName;
    }

    /**
     * Share Name
     *
     * @return static
     */
    public function setShareName(string $shareName)
    {
        $this->shareName = $shareName;

        return $this;
    }
}
