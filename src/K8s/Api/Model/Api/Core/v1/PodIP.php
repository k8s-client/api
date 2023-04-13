<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.9
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
 * IP address information for entries in the (plural) PodIPs field. Each entry includes:
 *
 * 	IP: An IP address allocated to the pod. Routable at least within the cluster.
 */
class PodIP
{
    /**
     * @Kubernetes\Attribute("ip")
     * @var string|null
     */
    protected $ip = null;

    /**
     * @param string|null $ip
     */
    public function __construct(?string $ip = null)
    {
        $this->ip = $ip;
    }

    /**
     * ip is an IP address (IPv4 or IPv6) assigned to the pod
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * ip is an IP address (IPv4 or IPv6) assigned to the pod
     *
     * @return static
     */
    public function setIp(string $ip)
    {
        $this->ip = $ip;

        return $this;
    }
}
