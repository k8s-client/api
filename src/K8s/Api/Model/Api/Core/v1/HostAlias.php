<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.4
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
 * HostAlias holds the mapping between IP and hostnames that will be injected as an entry in the pod's
 * hosts file.
 */
class HostAlias
{
    /**
     * @Kubernetes\Attribute("hostnames")
     * @var string[]|null
     */
    protected $hostnames = null;

    /**
     * @Kubernetes\Attribute("ip")
     * @var string|null
     */
    protected $ip = null;

    /**
     * @param string[]|null $hostnames
     * @param string|null $ip
     */
    public function __construct(?array $hostnames = null, ?string $ip = null)
    {
        $this->hostnames = $hostnames;
        $this->ip = $ip;
    }

    /**
     * Hostnames for the above IP address.
     */
    public function getHostnames(): ?array
    {
        return $this->hostnames;
    }

    /**
     * Hostnames for the above IP address.
     *
     * @return static
     */
    public function setHostnames(array $hostnames)
    {
        $this->hostnames = $hostnames;

        return $this;
    }

    /**
     * IP address of the host file entry.
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * IP address of the host file entry.
     *
     * @return static
     */
    public function setIp(string $ip)
    {
        $this->ip = $ip;

        return $this;
    }
}
