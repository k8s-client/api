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

namespace K8s\Api\Model\Api\Networking\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * IPBlock describes a particular CIDR (Ex. "192.168.1.1/24","2001:db9::/64") that is allowed to the
 * pods matched by a NetworkPolicySpec's podSelector. The except entry describes CIDRs that should not
 * be included within this rule.
 */
class IPBlock
{
    /**
     * @Kubernetes\Attribute("cidr",isRequired=true)
     * @var string
     */
    protected $cidr;

    /**
     * @Kubernetes\Attribute("except")
     * @var string[]|null
     */
    protected $except = null;

    /**
     * @param string $cidr
     */
    public function __construct(string $cidr)
    {
        $this->cidr = $cidr;
    }

    /**
     * CIDR is a string representing the IP Block Valid examples are "192.168.1.1/24" or "2001:db9::/64"
     */
    public function getCidr(): string
    {
        return $this->cidr;
    }

    /**
     * CIDR is a string representing the IP Block Valid examples are "192.168.1.1/24" or "2001:db9::/64"
     *
     * @return static
     */
    public function setCidr(string $cidr)
    {
        $this->cidr = $cidr;

        return $this;
    }

    /**
     * Except is a slice of CIDRs that should not be included within an IP Block Valid examples are
     * "192.168.1.1/24" or "2001:db9::/64" Except values will be rejected if they are outside the CIDR
     * range
     */
    public function getExcept(): ?array
    {
        return $this->except;
    }

    /**
     * Except is a slice of CIDRs that should not be included within an IP Block Valid examples are
     * "192.168.1.1/24" or "2001:db9::/64" Except values will be rejected if they are outside the CIDR
     * range
     *
     * @return static
     */
    public function setExcept(array $except)
    {
        $this->except = $except;

        return $this;
    }
}
