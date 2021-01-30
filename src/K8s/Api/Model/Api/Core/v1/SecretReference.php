<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.20.2
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
 * SecretReference represents a Secret Reference. It has enough information to retrieve secret in any
 * namespace
 */
class SecretReference
{
    /**
     * @Kubernetes\Attribute("name")
     * @var string|null
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("namespace")
     * @var string|null
     */
    protected $namespace = null;

    /**
     * @param string|null $name
     * @param string|null $namespace
     */
    public function __construct(?string $name = null, ?string $namespace = null)
    {
        $this->name = $name;
        $this->namespace = $namespace;
    }

    /**
     * Name is unique within a namespace to reference a secret resource.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name is unique within a namespace to reference a secret resource.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Namespace defines the space within which the secret name must be unique.
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    /**
     * Namespace defines the space within which the secret name must be unique.
     *
     * @return static
     */
    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }
}
