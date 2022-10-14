<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.3
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
    protected $secretName;

    /**
     * @Kubernetes\Attribute("secretNamespace")
     * @var string|null
     */
    protected $secretNamespace = null;

    /**
     * @Kubernetes\Attribute("shareName",isRequired=true)
     * @var string
     */
    protected $shareName;

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
     * readOnly defaults to false (read/write). ReadOnly here will force the ReadOnly setting in
     * VolumeMounts.
     */
    public function isReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * readOnly defaults to false (read/write). ReadOnly here will force the ReadOnly setting in
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
     * secretName is the name of secret that contains Azure Storage Account Name and Key
     */
    public function getSecretName(): string
    {
        return $this->secretName;
    }

    /**
     * secretName is the name of secret that contains Azure Storage Account Name and Key
     *
     * @return static
     */
    public function setSecretName(string $secretName)
    {
        $this->secretName = $secretName;

        return $this;
    }

    /**
     * secretNamespace is the namespace of the secret that contains Azure Storage Account Name and Key
     * default is the same as the Pod
     */
    public function getSecretNamespace(): ?string
    {
        return $this->secretNamespace;
    }

    /**
     * secretNamespace is the namespace of the secret that contains Azure Storage Account Name and Key
     * default is the same as the Pod
     *
     * @return static
     */
    public function setSecretNamespace(string $secretNamespace)
    {
        $this->secretNamespace = $secretNamespace;

        return $this;
    }

    /**
     * shareName is the azure Share Name
     */
    public function getShareName(): string
    {
        return $this->shareName;
    }

    /**
     * shareName is the azure Share Name
     *
     * @return static
     */
    public function setShareName(string $shareName)
    {
        $this->shareName = $shareName;

        return $this;
    }
}
