<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.15.12
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
 * NodeAddress contains information for the node's address.
 */
class NodeAddress
{
    /**
     * @Kubernetes\Attribute("address",isRequired=true)
     * @var string
     */
    protected $address;

    /**
     * @Kubernetes\Attribute("type",isRequired=true)
     * @var string
     */
    protected $type;

    /**
     * @param string $address
     * @param string $type
     */
    public function __construct(string $address, string $type)
    {
        $this->address = $address;
        $this->type = $type;
    }

    /**
     * The node address.
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * The node address.
     *
     * @return static
     */
    public function setAddress(string $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Node address type, one of Hostname, ExternalIP or InternalIP.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Node address type, one of Hostname, ExternalIP or InternalIP.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}