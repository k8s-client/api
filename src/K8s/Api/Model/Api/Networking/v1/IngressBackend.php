<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Networking\v1;

use K8s\Api\Model\Api\Core\v1\TypedLocalObjectReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * IngressBackend describes all endpoints for a given service and port.
 */
class IngressBackend
{
    /**
     * @Kubernetes\Attribute("resource",type="model",model=TypedLocalObjectReference::class)
     * @var TypedLocalObjectReference|null
     */
    protected $resource = null;

    /**
     * @Kubernetes\Attribute("service",type="model",model=IngressServiceBackend::class)
     * @var IngressServiceBackend|null
     */
    protected $service = null;

    /**
     * @param TypedLocalObjectReference|null $resource
     * @param IngressServiceBackend|null $service
     */
    public function __construct(?TypedLocalObjectReference $resource = null, ?IngressServiceBackend $service = null)
    {
        $this->resource = $resource;
        $this->service = $service;
    }

    /**
     * Resource is an ObjectRef to another Kubernetes resource in the namespace of the Ingress object. If
     * resource is specified, a service.Name and service.Port must not be specified. This is a mutually
     * exclusive setting with "Service".
     */
    public function getResource(): ?TypedLocalObjectReference
    {
        return $this->resource;
    }

    /**
     * Resource is an ObjectRef to another Kubernetes resource in the namespace of the Ingress object. If
     * resource is specified, a service.Name and service.Port must not be specified. This is a mutually
     * exclusive setting with "Service".
     *
     * @return static
     */
    public function setResource(TypedLocalObjectReference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Service references a Service as a Backend. This is a mutually exclusive setting with "Resource".
     */
    public function getService(): ?IngressServiceBackend
    {
        return $this->service;
    }

    /**
     * Service references a Service as a Backend. This is a mutually exclusive setting with "Resource".
     *
     * @return static
     */
    public function setService(IngressServiceBackend $service)
    {
        $this->service = $service;

        return $this;
    }
}
