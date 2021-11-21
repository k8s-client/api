<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.22.4
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
 * TCPSocketAction describes an action based on opening a socket
 */
class TCPSocketAction
{
    /**
     * @Kubernetes\Attribute("host")
     * @var string|null
     */
    protected $host = null;

    /**
     * @Kubernetes\Attribute("port",isRequired=true)
     * @var int|string
     */
    protected $port;

    /**
     * @param int|string $port
     */
    public function __construct($port)
    {
        $this->port = $port;
    }

    /**
     * Optional: Host name to connect to, defaults to the pod IP.
     */
    public function getHost(): ?string
    {
        return $this->host;
    }

    /**
     * Optional: Host name to connect to, defaults to the pod IP.
     *
     * @return static
     */
    public function setHost(string $host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Number or name of the port to access on the container. Number must be in the range 1 to 65535. Name
     * must be an IANA_SVC_NAME.
     *
     * @return int|string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Number or name of the port to access on the container. Number must be in the range 1 to 65535. Name
     * must be an IANA_SVC_NAME.
     *
     * @param int|string $port
     * @return static
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }
}
