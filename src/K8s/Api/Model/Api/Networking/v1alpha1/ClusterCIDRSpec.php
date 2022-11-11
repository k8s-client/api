<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.4
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Networking\v1alpha1;

use K8s\Api\Model\Api\Core\v1\NodeSelector;
use K8s\Core\Annotation as Kubernetes;

/**
 * ClusterCIDRSpec defines the desired state of ClusterCIDR.
 */
class ClusterCIDRSpec
{
    /**
     * @Kubernetes\Attribute("ipv4")
     * @var string|null
     */
    protected $ipv4 = null;

    /**
     * @Kubernetes\Attribute("ipv6")
     * @var string|null
     */
    protected $ipv6 = null;

    /**
     * @Kubernetes\Attribute("nodeSelector",type="model",model=NodeSelector::class)
     * @var NodeSelector|null
     */
    protected $nodeSelector = null;

    /**
     * @Kubernetes\Attribute("perNodeHostBits",isRequired=true)
     * @var int
     */
    protected $perNodeHostBits;

    /**
     * @param int $perNodeHostBits
     */
    public function __construct(int $perNodeHostBits)
    {
        $this->perNodeHostBits = $perNodeHostBits;
    }

    /**
     * IPv4 defines an IPv4 IP block in CIDR notation(e.g. "10.0.0.0/8"). At least one of IPv4 and IPv6
     * must be specified. This field is immutable.
     */
    public function getIpv4(): ?string
    {
        return $this->ipv4;
    }

    /**
     * IPv4 defines an IPv4 IP block in CIDR notation(e.g. "10.0.0.0/8"). At least one of IPv4 and IPv6
     * must be specified. This field is immutable.
     *
     * @return static
     */
    public function setIpv4(string $ipv4)
    {
        $this->ipv4 = $ipv4;

        return $this;
    }

    /**
     * IPv6 defines an IPv6 IP block in CIDR notation(e.g. "fd12:3456:789a:1::/64"). At least one of IPv4
     * and IPv6 must be specified. This field is immutable.
     */
    public function getIpv6(): ?string
    {
        return $this->ipv6;
    }

    /**
     * IPv6 defines an IPv6 IP block in CIDR notation(e.g. "fd12:3456:789a:1::/64"). At least one of IPv4
     * and IPv6 must be specified. This field is immutable.
     *
     * @return static
     */
    public function setIpv6(string $ipv6)
    {
        $this->ipv6 = $ipv6;

        return $this;
    }

    /**
     * NodeSelector defines which nodes the config is applicable to. An empty or nil NodeSelector selects
     * all nodes. This field is immutable.
     */
    public function getNodeSelector(): ?NodeSelector
    {
        return $this->nodeSelector;
    }

    /**
     * NodeSelector defines which nodes the config is applicable to. An empty or nil NodeSelector selects
     * all nodes. This field is immutable.
     *
     * @return static
     */
    public function setNodeSelector(NodeSelector $nodeSelector)
    {
        $this->nodeSelector = $nodeSelector;

        return $this;
    }

    /**
     * PerNodeHostBits defines the number of host bits to be configured per node. A subnet mask determines
     * how much of the address is used for network bits and host bits. For example an IPv4 address of
     * 192.168.0.0/24, splits the address into 24 bits for the network portion and 8 bits for the host
     * portion. To allocate 256 IPs, set this field to 8 (a /24 mask for IPv4 or a /120 for IPv6). Minimum
     * value is 4 (16 IPs). This field is immutable.
     */
    public function getPerNodeHostBits(): int
    {
        return $this->perNodeHostBits;
    }

    /**
     * PerNodeHostBits defines the number of host bits to be configured per node. A subnet mask determines
     * how much of the address is used for network bits and host bits. For example an IPv4 address of
     * 192.168.0.0/24, splits the address into 24 bits for the network portion and 8 bits for the host
     * portion. To allocate 256 IPs, set this field to 8 (a /24 mask for IPv4 or a /120 for IPv6). Minimum
     * value is 4 (16 IPs). This field is immutable.
     *
     * @return static
     */
    public function setPerNodeHostBits(int $perNodeHostBits)
    {
        $this->perNodeHostBits = $perNodeHostBits;

        return $this;
    }
}
