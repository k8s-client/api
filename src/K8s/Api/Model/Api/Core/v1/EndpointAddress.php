<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.16
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
 * EndpointAddress is a tuple that describes single IP address.
 */
class EndpointAddress
{
    /**
     * @Kubernetes\Attribute("hostname")
     * @var string|null
     */
    protected $hostname = null;

    /**
     * @Kubernetes\Attribute("ip",isRequired=true)
     * @var string
     */
    protected $ip;

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
     * @param string $ip
     */
    public function __construct(string $ip)
    {
        $this->ip = $ip;
    }

    /**
     * The Hostname of this endpoint
     */
    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    /**
     * The Hostname of this endpoint
     *
     * @return static
     */
    public function setHostname(string $hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * The IP of this endpoint. May not be loopback (127.0.0.0/8), link-local (169.254.0.0/16), or
     * link-local multicast ((224.0.0.0/24). IPv6 is also accepted but not fully supported on all
     * platforms. Also, certain kubernetes components, like kube-proxy, are not IPv6 ready.
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * The IP of this endpoint. May not be loopback (127.0.0.0/8), link-local (169.254.0.0/16), or
     * link-local multicast ((224.0.0.0/24). IPv6 is also accepted but not fully supported on all
     * platforms. Also, certain kubernetes components, like kube-proxy, are not IPv6 ready.
     *
     * @return static
     */
    public function setIp(string $ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Optional: Node hosting this endpoint. This can be used to determine endpoints local to a node.
     */
    public function getNodeName(): ?string
    {
        return $this->nodeName;
    }

    /**
     * Optional: Node hosting this endpoint. This can be used to determine endpoints local to a node.
     *
     * @return static
     */
    public function setNodeName(string $nodeName)
    {
        $this->nodeName = $nodeName;

        return $this;
    }

    /**
     * Reference to object providing the endpoint.
     */
    public function getTargetRef(): ?ObjectReference
    {
        return $this->targetRef;
    }

    /**
     * Reference to object providing the endpoint.
     *
     * @return static
     */
    public function setTargetRef(ObjectReference $targetRef)
    {
        $this->targetRef = $targetRef;

        return $this;
    }
}
