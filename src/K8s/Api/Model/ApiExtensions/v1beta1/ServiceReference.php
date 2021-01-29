<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.18.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1beta1;

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
    protected $name = null;

    /**
     * @Kubernetes\Attribute("namespace",isRequired=true)
     * @var string
     */
    protected $namespace = null;

    /**
     * @Kubernetes\Attribute("path")
     * @var string|null
     */
    protected $path = null;

    /**
     * @Kubernetes\Attribute("port")
     * @var int|null
     */
    protected $port = null;

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
     * name is the name of the service. Required
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name is the name of the service. Required
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * namespace is the namespace of the service. Required
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * namespace is the namespace of the service. Required
     *
     * @return static
     */
    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * path is an optional URL path at which the webhook will be contacted.
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * path is an optional URL path at which the webhook will be contacted.
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * port is an optional service port at which the webhook will be contacted. `port` should be a valid
     * port number (1-65535, inclusive). Defaults to 443 for backward compatibility.
     */
    public function getPort(): ?int
    {
        return $this->port;
    }

    /**
     * port is an optional service port at which the webhook will be contacted. `port` should be a valid
     * port number (1-65535, inclusive). Defaults to 443 for backward compatibility.
     *
     * @return static
     */
    public function setPort(int $port)
    {
        $this->port = $port;

        return $this;
    }
}
