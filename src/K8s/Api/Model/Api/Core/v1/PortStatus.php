<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.21.4
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

class PortStatus
{
    /**
     * @Kubernetes\Attribute("error")
     * @var string|null
     */
    protected $error = null;

    /**
     * @Kubernetes\Attribute("port",isRequired=true)
     * @var int
     */
    protected $port;

    /**
     * @Kubernetes\Attribute("protocol",isRequired=true)
     * @var string
     */
    protected $protocol;

    /**
     * @param int $port
     * @param string $protocol
     */
    public function __construct(int $port, string $protocol)
    {
        $this->port = $port;
        $this->protocol = $protocol;
    }

    /**
     * Error is to record the problem with the service port The format of the error shall comply with the
     * following rules: - built-in error values shall be specified in this file and those shall use
     *   CamelCase names
     * - cloud provider specific error values must have names that comply with the
     *   format foo.example.com/CamelCase.
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * Error is to record the problem with the service port The format of the error shall comply with the
     * following rules: - built-in error values shall be specified in this file and those shall use
     *   CamelCase names
     * - cloud provider specific error values must have names that comply with the
     *   format foo.example.com/CamelCase.
     *
     * @return static
     */
    public function setError(string $error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Port is the port number of the service port of which status is recorded here
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * Port is the port number of the service port of which status is recorded here
     *
     * @return static
     */
    public function setPort(int $port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Protocol is the protocol of the service port of which status is recorded here The supported values
     * are: "TCP", "UDP", "SCTP"
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }

    /**
     * Protocol is the protocol of the service port of which status is recorded here The supported values
     * are: "TCP", "UDP", "SCTP"
     *
     * @return static
     */
    public function setProtocol(string $protocol)
    {
        $this->protocol = $protocol;

        return $this;
    }
}
