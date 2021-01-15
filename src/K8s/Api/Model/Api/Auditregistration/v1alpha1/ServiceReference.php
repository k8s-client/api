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

namespace K8s\Api\Model\Api\Auditregistration\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * ServiceReference holds a reference to Service.legacy.k8s.io
 */
class ServiceReference
{
    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("namespace",isRequired=true)
     * @var string
     */
    protected $namespace;

    /**
     * @Kubernetes\Attribute("path")
     * @var string|null
     */
    protected $path;

    /**
     * @Kubernetes\Attribute("port")
     * @var int|null
     */
    protected $port;

    /**
     * @param string $name
     * @param string $namespace
     */
    public function __construct(string $name, string $namespace)
    {
        $this->name = $name;
        $this->namespace = $namespace;
    }

    /**
     * `name` is the name of the service. Required
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * `name` is the name of the service. Required
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * `namespace` is the namespace of the service. Required
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * `namespace` is the namespace of the service. Required
     *
     * @return static
     */
    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * `path` is an optional URL path which will be sent in any request to this service.
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * `path` is an optional URL path which will be sent in any request to this service.
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * If specified, the port on the service that hosting webhook. Default to 443 for backward
     * compatibility. `port` should be a valid port number (1-65535, inclusive).
     */
    public function getPort(): ?int
    {
        return $this->port;
    }

    /**
     * If specified, the port on the service that hosting webhook. Default to 443 for backward
     * compatibility. `port` should be a valid port number (1-65535, inclusive).
     *
     * @return static
     */
    public function setPort(int $port)
    {
        $this->port = $port;

        return $this;
    }
}
