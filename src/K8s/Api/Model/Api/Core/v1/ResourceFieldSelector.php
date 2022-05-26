<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.7
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
 * ResourceFieldSelector represents container resources (cpu, memory) and their output format
 */
class ResourceFieldSelector
{
    /**
     * @Kubernetes\Attribute("containerName")
     * @var string|null
     */
    protected $containerName = null;

    /**
     * @Kubernetes\Attribute("divisor")
     * @var string|null
     */
    protected $divisor = null;

    /**
     * @Kubernetes\Attribute("resource",isRequired=true)
     * @var string
     */
    protected $resource;

    /**
     * @param string $resource
     */
    public function __construct(string $resource)
    {
        $this->resource = $resource;
    }

    /**
     * Container name: required for volumes, optional for env vars
     */
    public function getContainerName(): ?string
    {
        return $this->containerName;
    }

    /**
     * Container name: required for volumes, optional for env vars
     *
     * @return static
     */
    public function setContainerName(string $containerName)
    {
        $this->containerName = $containerName;

        return $this;
    }

    /**
     * Specifies the output format of the exposed resources, defaults to "1"
     *
     * @return string
     */
    public function getDivisor()
    {
        return $this->divisor;
    }

    /**
     * Specifies the output format of the exposed resources, defaults to "1"
     *
     * @param string $divisor
     * @return static
     */
    public function setDivisor($divisor)
    {
        $this->divisor = $divisor;

        return $this;
    }

    /**
     * Required: resource to select
     */
    public function getResource(): string
    {
        return $this->resource;
    }

    /**
     * Required: resource to select
     *
     * @return static
     */
    public function setResource(string $resource)
    {
        $this->resource = $resource;

        return $this;
    }
}
