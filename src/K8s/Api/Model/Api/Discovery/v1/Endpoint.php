<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Discovery\v1;

use K8s\Api\Model\Api\Core\v1\ObjectReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * Endpoint represents a single logical "backend" implementing a service.
 */
class Endpoint
{
    /**
     * @Kubernetes\Attribute("addresses",isRequired=true)
     * @var string[]
     */
    protected $addresses;

    /**
     * @Kubernetes\Attribute("conditions",type="model",model=EndpointConditions::class)
     * @var EndpointConditions|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("deprecatedTopology")
     * @var string[]|null
     */
    protected $deprecatedTopology = null;

    /**
     * @Kubernetes\Attribute("hints",type="model",model=EndpointHints::class)
     * @var EndpointHints|null
     */
    protected $hints = null;

    /**
     * @Kubernetes\Attribute("hostname")
     * @var string|null
     */
    protected $hostname = null;

    /**
     * @Kubernetes\Attribute("nodeName")
     * @var string|null
     */
    protected $nodeName = null;

    /**
     * @Kubernetes\Attribute("targetRef",type="model",model=ObjectReference::class)
     * @var ObjectReference|null
     */
    protected $targetRef = null;

    /**
     * @Kubernetes\Attribute("zone")
     * @var string|null
     */
    protected $zone = null;

    /**
     * @param string[] $addresses
     */
    public function __construct(array $addresses)
    {
        $this->addresses = $addresses;
    }

    /**
     * addresses of this endpoint. The contents of this field are interpreted according to the
     * corresponding EndpointSlice addressType field. Consumers must handle different types of addresses in
     * the context of their own capabilities. This must contain at least one address but no more than 100.
     * These are all assumed to be fungible and clients may choose to only use the first element. Refer to:
     * https://issue.k8s.io/106267
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * addresses of this endpoint. The contents of this field are interpreted according to the
     * corresponding EndpointSlice addressType field. Consumers must handle different types of addresses in
     * the context of their own capabilities. This must contain at least one address but no more than 100.
     * These are all assumed to be fungible and clients may choose to only use the first element. Refer to:
     * https://issue.k8s.io/106267
     *
     * @return static
     */
    public function setAddresses(array $addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * conditions contains information about the current status of the endpoint.
     */
    public function getConditions(): ?EndpointConditions
    {
        return $this->conditions;
    }

    /**
     * conditions contains information about the current status of the endpoint.
     *
     * @return static
     */
    public function setConditions(EndpointConditions $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * deprecatedTopology contains topology information part of the v1beta1 API. This field is deprecated,
     * and will be removed when the v1beta1 API is removed (no sooner than kubernetes v1.24).  While this
     * field can hold values, it is not writable through the v1 API, and any attempts to write to it will
     * be silently ignored. Topology information can be found in the zone and nodeName fields instead.
     */
    public function getDeprecatedTopology(): ?array
    {
        return $this->deprecatedTopology;
    }

    /**
     * deprecatedTopology contains topology information part of the v1beta1 API. This field is deprecated,
     * and will be removed when the v1beta1 API is removed (no sooner than kubernetes v1.24).  While this
     * field can hold values, it is not writable through the v1 API, and any attempts to write to it will
     * be silently ignored. Topology information can be found in the zone and nodeName fields instead.
     *
     * @return static
     */
    public function setDeprecatedTopology(array $deprecatedTopology)
    {
        $this->deprecatedTopology = $deprecatedTopology;

        return $this;
    }

    /**
     * hints contains information associated with how an endpoint should be consumed.
     */
    public function getHints(): ?EndpointHints
    {
        return $this->hints;
    }

    /**
     * hints contains information associated with how an endpoint should be consumed.
     *
     * @return static
     */
    public function setHints(EndpointHints $hints)
    {
        $this->hints = $hints;

        return $this;
    }

    /**
     * hostname of this endpoint. This field may be used by consumers of endpoints to distinguish endpoints
     * from each other (e.g. in DNS names). Multiple endpoints which use the same hostname should be
     * considered fungible (e.g. multiple A values in DNS). Must be lowercase and pass DNS Label (RFC 1123)
     * validation.
     */
    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    /**
     * hostname of this endpoint. This field may be used by consumers of endpoints to distinguish endpoints
     * from each other (e.g. in DNS names). Multiple endpoints which use the same hostname should be
     * considered fungible (e.g. multiple A values in DNS). Must be lowercase and pass DNS Label (RFC 1123)
     * validation.
     *
     * @return static
     */
    public function setHostname(string $hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * nodeName represents the name of the Node hosting this endpoint. This can be used to determine
     * endpoints local to a Node. This field can be enabled with the EndpointSliceNodeName feature gate.
     */
    public function getNodeName(): ?string
    {
        return $this->nodeName;
    }

    /**
     * nodeName represents the name of the Node hosting this endpoint. This can be used to determine
     * endpoints local to a Node. This field can be enabled with the EndpointSliceNodeName feature gate.
     *
     * @return static
     */
    public function setNodeName(string $nodeName)
    {
        $this->nodeName = $nodeName;

        return $this;
    }

    /**
     * targetRef is a reference to a Kubernetes object that represents this endpoint.
     */
    public function getTargetRef(): ?ObjectReference
    {
        return $this->targetRef;
    }

    /**
     * targetRef is a reference to a Kubernetes object that represents this endpoint.
     *
     * @return static
     */
    public function setTargetRef(ObjectReference $targetRef)
    {
        $this->targetRef = $targetRef;

        return $this;
    }

    /**
     * zone is the name of the Zone this endpoint exists in.
     */
    public function getZone(): ?string
    {
        return $this->zone;
    }

    /**
     * zone is the name of the Zone this endpoint exists in.
     *
     * @return static
     */
    public function setZone(string $zone)
    {
        $this->zone = $zone;

        return $this;
    }
}
