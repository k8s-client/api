<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.12.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Extensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * DEPRECATED 1.9 - This group version of NetworkPolicyPort is deprecated by
 * networking/v1/NetworkPolicyPort.
 */
class NetworkPolicyPort
{
    /**
     * @Kubernetes\Attribute("port")
     * @var int|string|null
     */
    protected $port = null;

    /**
     * @Kubernetes\Attribute("protocol")
     * @var string|null
     */
    protected $protocol = null;

    /**
     * @param int|string|null $port
     * @param string|null $protocol
     */
    public function __construct($port = null, ?string $protocol = null)
    {
        $this->port = $port;
        $this->protocol = $protocol;
    }

    /**
     * If specified, the port on the given protocol.  This can either be a numerical or named port on a
     * pod.  If this field is not provided, this matches all port names and numbers. If present, only
     * traffic on the specified protocol AND port will be matched.
     *
     * @return int|string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * If specified, the port on the given protocol.  This can either be a numerical or named port on a
     * pod.  If this field is not provided, this matches all port names and numbers. If present, only
     * traffic on the specified protocol AND port will be matched.
     *
     * @param int|string $port
     * @return static
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Optional.  The protocol (TCP, UDP, or SCTP) which traffic must match. If not specified, this field
     * defaults to TCP.
     */
    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    /**
     * Optional.  The protocol (TCP, UDP, or SCTP) which traffic must match. If not specified, this field
     * defaults to TCP.
     *
     * @return static
     */
    public function setProtocol(string $protocol)
    {
        $this->protocol = $protocol;

        return $this;
    }
}
