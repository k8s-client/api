<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.8
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Networking\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * IngressServiceBackend references a Kubernetes Service as a Backend.
 */
class IngressServiceBackend
{
    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("port",type="model",model=ServiceBackendPort::class)
     * @var ServiceBackendPort|null
     */
    protected $port = null;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Name is the referenced service. The service must exist in the same namespace as the Ingress object.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name is the referenced service. The service must exist in the same namespace as the Ingress object.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Port of the referenced service. A port name or port number is required for a IngressServiceBackend.
     */
    public function getPort(): ?ServiceBackendPort
    {
        return $this->port;
    }

    /**
     * Port of the referenced service. A port name or port number is required for a IngressServiceBackend.
     *
     * @return static
     */
    public function setPort(ServiceBackendPort $port)
    {
        $this->port = $port;

        return $this;
    }
}
