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
 * Projection that may be projected along with other supported volume types
 */
class VolumeProjection
{
    /**
     * @Kubernetes\Attribute("configMap",type="model",model=ConfigMapProjection::class)
     * @var ConfigMapProjection|null
     */
    protected $configMap;

    /**
     * @Kubernetes\Attribute("downwardAPI",type="model",model=DownwardAPIProjection::class)
     * @var DownwardAPIProjection|null
     */
    protected $downwardAPI;

    /**
     * @Kubernetes\Attribute("secret",type="model",model=SecretProjection::class)
     * @var SecretProjection|null
     */
    protected $secret;

    /**
     * @Kubernetes\Attribute("serviceAccountToken",type="model",model=ServiceAccountTokenProjection::class)
     * @var ServiceAccountTokenProjection|null
     */
    protected $serviceAccountToken;

    /**
     * @param ConfigMapProjection|null $configMap
     * @param DownwardAPIProjection|null $downwardAPI
     * @param SecretProjection|null $secret
     * @param ServiceAccountTokenProjection|null $serviceAccountToken
     */
    public function __construct(
        ?ConfigMapProjection $configMap = null,
        ?DownwardAPIProjection $downwardAPI = null,
        ?SecretProjection $secret = null,
        ?ServiceAccountTokenProjection $serviceAccountToken = null
    ) {
        $this->configMap = $configMap;
        $this->downwardAPI = $downwardAPI;
        $this->secret = $secret;
        $this->serviceAccountToken = $serviceAccountToken;
    }

    /**
     * information about the configMap data to project
     */
    public function getConfigMap(): ?ConfigMapProjection
    {
        return $this->configMap;
    }

    /**
     * information about the configMap data to project
     *
     * @return static
     */
    public function setConfigMap(ConfigMapProjection $configMap)
    {
        $this->configMap = $configMap;

        return $this;
    }

    /**
     * information about the downwardAPI data to project
     */
    public function getDownwardAPI(): ?DownwardAPIProjection
    {
        return $this->downwardAPI;
    }

    /**
     * information about the downwardAPI data to project
     *
     * @return static
     */
    public function setDownwardAPI(DownwardAPIProjection $downwardAPI)
    {
        $this->downwardAPI = $downwardAPI;

        return $this;
    }

    /**
     * information about the secret data to project
     */
    public function getSecret(): ?SecretProjection
    {
        return $this->secret;
    }

    /**
     * information about the secret data to project
     *
     * @return static
     */
    public function setSecret(SecretProjection $secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * information about the serviceAccountToken data to project
     */
    public function getServiceAccountToken(): ?ServiceAccountTokenProjection
    {
        return $this->serviceAccountToken;
    }

    /**
     * information about the serviceAccountToken data to project
     *
     * @return static
     */
    public function setServiceAccountToken(ServiceAccountTokenProjection $serviceAccountToken)
    {
        $this->serviceAccountToken = $serviceAccountToken;

        return $this;
    }
}