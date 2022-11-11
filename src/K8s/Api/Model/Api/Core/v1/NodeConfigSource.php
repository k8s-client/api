<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.14
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
 * NodeConfigSource specifies a source of node configuration. Exactly one subfield (excluding metadata)
 * must be non-nil. This API is deprecated since 1.22
 */
class NodeConfigSource
{
    /**
     * @Kubernetes\Attribute("configMap",type="model",model=ConfigMapNodeConfigSource::class)
     * @var ConfigMapNodeConfigSource|null
     */
    protected $configMap = null;

    /**
     * @param ConfigMapNodeConfigSource|null $configMap
     */
    public function __construct(?ConfigMapNodeConfigSource $configMap = null)
    {
        $this->configMap = $configMap;
    }

    /**
     * ConfigMap is a reference to a Node's ConfigMap
     */
    public function getConfigMap(): ?ConfigMapNodeConfigSource
    {
        return $this->configMap;
    }

    /**
     * ConfigMap is a reference to a Node's ConfigMap
     *
     * @return static
     */
    public function setConfigMap(ConfigMapNodeConfigSource $configMap)
    {
        $this->configMap = $configMap;

        return $this;
    }
}
