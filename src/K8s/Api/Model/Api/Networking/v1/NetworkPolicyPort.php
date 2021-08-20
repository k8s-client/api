<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.22.1
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
 * NetworkPolicyPort describes a port to allow traffic on
 */
class NetworkPolicyPort
{
    /**
     * @Kubernetes\Attribute("endPort")
     * @var int|null
     */
    protected $endPort = null;

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
     * @param int|null $endPort
     * @param int|string|null $port
     * @param string|null $protocol
     */
    public function __construct(?int $endPort = null, $port = null, ?string $protocol = null)
    {
        $this->endPort = $endPort;
        $this->port = $port;
        $this->protocol = $protocol;
    }

    /**
     * If set, indicates that the range of ports from port to endPort, inclusive, should be allowed by the
     * policy. This field cannot be defined if the port field is not defined or if the port field is
     * defined as a named (string) port. The endPort must be equal or greater than port. This feature is in
     * Beta state and is enabled by default. It can be disabled using the Feature Gate
     * "NetworkPolicyEndPort".
     */
    public function getEndPort(): ?int
    {
        return $this->endPort;
    }

    /**
     * If set, indicates that the range of ports from port to endPort, inclusive, should be allowed by the
     * policy. This field cannot be defined if the port field is not defined or if the port field is
     * defined as a named (string) port. The endPort must be equal or greater than port. This feature is in
     * Beta state and is enabled by default. It can be disabled using the Feature Gate
     * "NetworkPolicyEndPort".
     *
     * @return static
     */
    public function setEndPort(int $endPort)
    {
        $this->endPort = $endPort;

        return $this;
    }

    /**
     * The port on the given protocol. This can either be a numerical or named port on a pod. If this field
     * is not provided, this matches all port names and numbers. If present, only traffic on the specified
     * protocol AND port will be matched.
     *
     * @return int|string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * The port on the given protocol. This can either be a numerical or named port on a pod. If this field
     * is not provided, this matches all port names and numbers. If present, only traffic on the specified
     * protocol AND port will be matched.
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
     * The protocol (TCP, UDP, or SCTP) which traffic must match. If not specified, this field defaults to
     * TCP.
     */
    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    /**
     * The protocol (TCP, UDP, or SCTP) which traffic must match. If not specified, this field defaults to
     * TCP.
     *
     * @return static
     */
    public function setProtocol(string $protocol)
    {
        $this->protocol = $protocol;

        return $this;
    }
}
