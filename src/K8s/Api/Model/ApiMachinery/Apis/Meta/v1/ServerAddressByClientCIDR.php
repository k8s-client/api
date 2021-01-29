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

namespace K8s\Api\Model\ApiMachinery\Apis\Meta\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * ServerAddressByClientCIDR helps the client to determine the server address that they should use,
 * depending on the clientCIDR that they match.
 */
class ServerAddressByClientCIDR
{
    /**
     * @Kubernetes\Attribute("clientCIDR",isRequired=true)
     * @var string
     */
    protected $clientCIDR = null;

    /**
     * @Kubernetes\Attribute("serverAddress",isRequired=true)
     * @var string
     */
    protected $serverAddress = null;

    /**
     * @param string $clientCIDR
     * @param string $serverAddress
     */
    public function __construct(string $clientCIDR, string $serverAddress)
    {
        $this->clientCIDR = $clientCIDR;
        $this->serverAddress = $serverAddress;
    }

    /**
     * The CIDR with which clients can match their IP to figure out the server address that they should
     * use.
     */
    public function getClientCIDR(): string
    {
        return $this->clientCIDR;
    }

    /**
     * The CIDR with which clients can match their IP to figure out the server address that they should
     * use.
     *
     * @return static
     */
    public function setClientCIDR(string $clientCIDR)
    {
        $this->clientCIDR = $clientCIDR;

        return $this;
    }

    /**
     * Address of this server, suitable for a client that matches the above CIDR. This can be a hostname,
     * hostname:port, IP or IP:port.
     */
    public function getServerAddress(): string
    {
        return $this->serverAddress;
    }

    /**
     * Address of this server, suitable for a client that matches the above CIDR. This can be a hostname,
     * hostname:port, IP or IP:port.
     *
     * @return static
     */
    public function setServerAddress(string $serverAddress)
    {
        $this->serverAddress = $serverAddress;

        return $this;
    }
}
