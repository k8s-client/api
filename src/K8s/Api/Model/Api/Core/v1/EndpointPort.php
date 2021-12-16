<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.8
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
 * EndpointPort is a tuple that describes a single port.
 */
class EndpointPort
{
    /**
     * @Kubernetes\Attribute("appProtocol")
     * @var string|null
     */
    protected $appProtocol = null;

    /**
     * @Kubernetes\Attribute("name")
     * @var string|null
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("port",isRequired=true)
     * @var int
     */
    protected $port;

    /**
     * @Kubernetes\Attribute("protocol")
     * @var string|null
     */
    protected $protocol = null;

    /**
     * @param int $port
     */
    public function __construct(int $port)
    {
        $this->port = $port;
    }

    /**
     * The application protocol for this port. This field follows standard Kubernetes label syntax.
     * Un-prefixed names are reserved for IANA standard service names (as per RFC-6335 and
     * http://www.iana.org/assignments/service-names). Non-standard protocols should use prefixed names
     * such as mycompany.com/my-custom-protocol. This is a beta field that is guarded by the
     * ServiceAppProtocol feature gate and enabled by default.
     */
    public function getAppProtocol(): ?string
    {
        return $this->appProtocol;
    }

    /**
     * The application protocol for this port. This field follows standard Kubernetes label syntax.
     * Un-prefixed names are reserved for IANA standard service names (as per RFC-6335 and
     * http://www.iana.org/assignments/service-names). Non-standard protocols should use prefixed names
     * such as mycompany.com/my-custom-protocol. This is a beta field that is guarded by the
     * ServiceAppProtocol feature gate and enabled by default.
     *
     * @return static
     */
    public function setAppProtocol(string $appProtocol)
    {
        $this->appProtocol = $appProtocol;

        return $this;
    }

    /**
     * The name of this port.  This must match the 'name' field in the corresponding ServicePort. Must be a
     * DNS_LABEL. Optional only if one port is defined.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of this port.  This must match the 'name' field in the corresponding ServicePort. Must be a
     * DNS_LABEL. Optional only if one port is defined.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The port number of the endpoint.
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * The port number of the endpoint.
     *
     * @return static
     */
    public function setPort(int $port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * The IP protocol for this port. Must be UDP, TCP, or SCTP. Default is TCP.
     */
    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    /**
     * The IP protocol for this port. Must be UDP, TCP, or SCTP. Default is TCP.
     *
     * @return static
     */
    public function setProtocol(string $protocol)
    {
        $this->protocol = $protocol;

        return $this;
    }
}
