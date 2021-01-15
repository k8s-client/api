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
 * EnvFromSource represents the source of a set of ConfigMaps
 */
class EnvFromSource
{
    /**
     * @Kubernetes\Attribute("configMapRef",type="model",model=ConfigMapEnvSource::class)
     * @var ConfigMapEnvSource|null
     */
    protected $configMapRef;

    /**
     * @Kubernetes\Attribute("prefix")
     * @var string|null
     */
    protected $prefix;

    /**
     * @Kubernetes\Attribute("secretRef",type="model",model=SecretEnvSource::class)
     * @var SecretEnvSource|null
     */
    protected $secretRef;

    /**
     * @param ConfigMapEnvSource|null $configMapRef
     * @param string|null $prefix
     * @param SecretEnvSource|null $secretRef
     */
    public function __construct(?ConfigMapEnvSource $configMapRef = null, ?string $prefix = null, ?SecretEnvSource $secretRef = null)
    {
        $this->configMapRef = $configMapRef;
        $this->prefix = $prefix;
        $this->secretRef = $secretRef;
    }

    /**
     * The ConfigMap to select from
     */
    public function getConfigMapRef(): ?ConfigMapEnvSource
    {
        return $this->configMapRef;
    }

    /**
     * The ConfigMap to select from
     *
     * @return static
     */
    public function setConfigMapRef(ConfigMapEnvSource $configMapRef)
    {
        $this->configMapRef = $configMapRef;

        return $this;
    }

    /**
     * An optional identifier to prepend to each key in the ConfigMap. Must be a C_IDENTIFIER.
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    /**
     * An optional identifier to prepend to each key in the ConfigMap. Must be a C_IDENTIFIER.
     *
     * @return static
     */
    public function setPrefix(string $prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * The Secret to select from
     */
    public function getSecretRef(): ?SecretEnvSource
    {
        return $this->secretRef;
    }

    /**
     * The Secret to select from
     *
     * @return static
     */
    public function setSecretRef(SecretEnvSource $secretRef)
    {
        $this->secretRef = $secretRef;

        return $this;
    }
}