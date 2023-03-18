<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.8
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * PodDNSConfig defines the DNS parameters of a pod in addition to those generated from DNSPolicy.
 */
class PodDNSConfig
{
    /**
     * @Kubernetes\Attribute("nameservers")
     * @var string[]|null
     */
    protected $nameservers = null;

    /**
     * @Kubernetes\Attribute("options",type="collection",model=PodDNSConfigOption::class)
     * @var iterable|PodDNSConfigOption[]|null
     */
    protected $options = null;

    /**
     * @Kubernetes\Attribute("searches")
     * @var string[]|null
     */
    protected $searches = null;

    /**
     * @param string[]|null $nameservers
     * @param iterable|PodDNSConfigOption[] $options
     * @param string[]|null $searches
     */
    public function __construct(?array $nameservers = null, iterable $options = [], ?array $searches = null)
    {
        $this->nameservers = $nameservers;
        $this->options = new Collection($options);
        $this->searches = $searches;
    }

    /**
     * A list of DNS name server IP addresses. This will be appended to the base nameservers generated from
     * DNSPolicy. Duplicated nameservers will be removed.
     */
    public function getNameservers(): ?array
    {
        return $this->nameservers;
    }

    /**
     * A list of DNS name server IP addresses. This will be appended to the base nameservers generated from
     * DNSPolicy. Duplicated nameservers will be removed.
     *
     * @return static
     */
    public function setNameservers(array $nameservers)
    {
        $this->nameservers = $nameservers;

        return $this;
    }

    /**
     * A list of DNS resolver options. This will be merged with the base options generated from DNSPolicy.
     * Duplicated entries will be removed. Resolution options given in Options will override those that
     * appear in the base DNSPolicy.
     *
     * @return iterable|PodDNSConfigOption[]
     */
    public function getOptions(): ?iterable
    {
        return $this->options;
    }

    /**
     * A list of DNS resolver options. This will be merged with the base options generated from DNSPolicy.
     * Duplicated entries will be removed. Resolution options given in Options will override those that
     * appear in the base DNSPolicy.
     *
     * @return static
     */
    public function setOptions(iterable $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return static
     */
    public function addOptions(PodDNSConfigOption $option)
    {
        if (!$this->options) {
            $this->options = new Collection();
        }
        $this->options[] = $option;

        return $this;
    }

    /**
     * A list of DNS search domains for host-name lookup. This will be appended to the base search paths
     * generated from DNSPolicy. Duplicated search paths will be removed.
     */
    public function getSearches(): ?array
    {
        return $this->searches;
    }

    /**
     * A list of DNS search domains for host-name lookup. This will be appended to the base search paths
     * generated from DNSPolicy. Duplicated search paths will be removed.
     *
     * @return static
     */
    public function setSearches(array $searches)
    {
        $this->searches = $searches;

        return $this;
    }
}
