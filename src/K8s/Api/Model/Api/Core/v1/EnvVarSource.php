<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.10
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
 * EnvVarSource represents a source for the value of an EnvVar.
 */
class EnvVarSource
{
    /**
     * @Kubernetes\Attribute("configMapKeyRef",type="model",model=ConfigMapKeySelector::class)
     * @var ConfigMapKeySelector|null
     */
    protected $configMapKeyRef = null;

    /**
     * @Kubernetes\Attribute("fieldRef",type="model",model=ObjectFieldSelector::class)
     * @var ObjectFieldSelector|null
     */
    protected $fieldRef = null;

    /**
     * @Kubernetes\Attribute("resourceFieldRef",type="model",model=ResourceFieldSelector::class)
     * @var ResourceFieldSelector|null
     */
    protected $resourceFieldRef = null;

    /**
     * @Kubernetes\Attribute("secretKeyRef",type="model",model=SecretKeySelector::class)
     * @var SecretKeySelector|null
     */
    protected $secretKeyRef = null;

    /**
     * @param ConfigMapKeySelector|null $configMapKeyRef
     * @param ObjectFieldSelector|null $fieldRef
     * @param ResourceFieldSelector|null $resourceFieldRef
     * @param SecretKeySelector|null $secretKeyRef
     */
    public function __construct(
        ?ConfigMapKeySelector $configMapKeyRef = null,
        ?ObjectFieldSelector $fieldRef = null,
        ?ResourceFieldSelector $resourceFieldRef = null,
        ?SecretKeySelector $secretKeyRef = null
    ) {
        $this->configMapKeyRef = $configMapKeyRef;
        $this->fieldRef = $fieldRef;
        $this->resourceFieldRef = $resourceFieldRef;
        $this->secretKeyRef = $secretKeyRef;
    }

    /**
     * Selects a key of a ConfigMap.
     */
    public function getConfigMapKeyRef(): ?ConfigMapKeySelector
    {
        return $this->configMapKeyRef;
    }

    /**
     * Selects a key of a ConfigMap.
     *
     * @return static
     */
    public function setConfigMapKeyRef(ConfigMapKeySelector $configMapKeyRef)
    {
        $this->configMapKeyRef = $configMapKeyRef;

        return $this;
    }

    /**
     * Selects a field of the pod: supports metadata.name, metadata.namespace, `metadata.labels['<KEY>']`,
     * `metadata.annotations['<KEY>']`, spec.nodeName, spec.serviceAccountName, status.hostIP,
     * status.podIP, status.podIPs.
     */
    public function getFieldRef(): ?ObjectFieldSelector
    {
        return $this->fieldRef;
    }

    /**
     * Selects a field of the pod: supports metadata.name, metadata.namespace, `metadata.labels['<KEY>']`,
     * `metadata.annotations['<KEY>']`, spec.nodeName, spec.serviceAccountName, status.hostIP,
     * status.podIP, status.podIPs.
     *
     * @return static
     */
    public function setFieldRef(ObjectFieldSelector $fieldRef)
    {
        $this->fieldRef = $fieldRef;

        return $this;
    }

    /**
     * Selects a resource of the container: only resources limits and requests (limits.cpu, limits.memory,
     * limits.ephemeral-storage, requests.cpu, requests.memory and requests.ephemeral-storage) are
     * currently supported.
     */
    public function getResourceFieldRef(): ?ResourceFieldSelector
    {
        return $this->resourceFieldRef;
    }

    /**
     * Selects a resource of the container: only resources limits and requests (limits.cpu, limits.memory,
     * limits.ephemeral-storage, requests.cpu, requests.memory and requests.ephemeral-storage) are
     * currently supported.
     *
     * @return static
     */
    public function setResourceFieldRef(ResourceFieldSelector $resourceFieldRef)
    {
        $this->resourceFieldRef = $resourceFieldRef;

        return $this;
    }

    /**
     * Selects a key of a secret in the pod's namespace
     */
    public function getSecretKeyRef(): ?SecretKeySelector
    {
        return $this->secretKeyRef;
    }

    /**
     * Selects a key of a secret in the pod's namespace
     *
     * @return static
     */
    public function setSecretKeyRef(SecretKeySelector $secretKeyRef)
    {
        $this->secretKeyRef = $secretKeyRef;

        return $this;
    }
}
