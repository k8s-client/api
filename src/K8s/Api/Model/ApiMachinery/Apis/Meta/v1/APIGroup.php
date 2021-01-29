<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.19.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiMachinery\Apis\Meta\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * APIGroup contains the name, the supported versions, and the preferred version of a group.
 *
 * @Kubernetes\Kind("APIGroup",version="v1")
 */
class APIGroup
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string|null
     */
    protected $apiVersion = 'v1';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string|null
     */
    protected $kind = 'APIGroup';

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("preferredVersion",type="model",model=GroupVersionForDiscovery::class)
     * @var GroupVersionForDiscovery|null
     */
    protected $preferredVersion = null;

    /**
     * @Kubernetes\Attribute("serverAddressByClientCIDRs",type="collection",model=ServerAddressByClientCIDR::class)
     * @var iterable|ServerAddressByClientCIDR[]|null
     */
    protected $serverAddressByClientCIDRs = null;

    /**
     * @Kubernetes\Attribute("versions",type="collection",model=GroupVersionForDiscovery::class,isRequired=true)
     * @var iterable|GroupVersionForDiscovery[]
     */
    protected $versions = null;

    /**
     * @param string $name
     * @param iterable|GroupVersionForDiscovery[] $versions
     */
    public function __construct(string $name, iterable $versions)
    {
        $this->name = $name;
        $this->versions = new Collection($versions);
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @return static
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * name is the name of the group.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name is the name of the group.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * preferredVersion is the version preferred by the API server, which probably is the storage version.
     */
    public function getPreferredVersion(): ?GroupVersionForDiscovery
    {
        return $this->preferredVersion;
    }

    /**
     * preferredVersion is the version preferred by the API server, which probably is the storage version.
     *
     * @return static
     */
    public function setPreferredVersion(GroupVersionForDiscovery $preferredVersion)
    {
        $this->preferredVersion = $preferredVersion;

        return $this;
    }

    /**
     * a map of client CIDR to server address that is serving this group. This is to help clients reach
     * servers in the most network-efficient way possible. Clients can use the appropriate server address
     * as per the CIDR that they match. In case of multiple matches, clients should use the longest
     * matching CIDR. The server returns only those CIDRs that it thinks that the client can match. For
     * example: the master will return an internal IP CIDR only, if the client reaches the server using an
     * internal IP. Server looks at X-Forwarded-For header or X-Real-Ip header or request.RemoteAddr (in
     * that order) to get the client IP.
     *
     * @return iterable|ServerAddressByClientCIDR[]
     */
    public function getServerAddressByClientCIDRs(): ?iterable
    {
        return $this->serverAddressByClientCIDRs;
    }

    /**
     * a map of client CIDR to server address that is serving this group. This is to help clients reach
     * servers in the most network-efficient way possible. Clients can use the appropriate server address
     * as per the CIDR that they match. In case of multiple matches, clients should use the longest
     * matching CIDR. The server returns only those CIDRs that it thinks that the client can match. For
     * example: the master will return an internal IP CIDR only, if the client reaches the server using an
     * internal IP. Server looks at X-Forwarded-For header or X-Real-Ip header or request.RemoteAddr (in
     * that order) to get the client IP.
     *
     * @return static
     */
    public function setServerAddressByClientCIDRs(iterable $serverAddressByClientCIDRs)
    {
        $this->serverAddressByClientCIDRs = $serverAddressByClientCIDRs;

        return $this;
    }

    /**
     * @return static
     */
    public function addServerAddressByClientCIDRs(ServerAddressByClientCIDR $serverAddressByClientCIDR)
    {
        if (!$this->serverAddressByClientCIDRs) {
            $this->serverAddressByClientCIDRs = new Collection();
        }
        $this->serverAddressByClientCIDRs[] = $serverAddressByClientCIDR;

        return $this;
    }

    /**
     * versions are the versions supported in this group.
     *
     * @return iterable|GroupVersionForDiscovery[]
     */
    public function getVersions(): iterable
    {
        return $this->versions;
    }

    /**
     * versions are the versions supported in this group.
     *
     * @return static
     */
    public function setVersions(iterable $versions)
    {
        $this->versions = $versions;

        return $this;
    }

    /**
     * @return static
     */
    public function addVersions(GroupVersionForDiscovery $version)
    {
        if (!$this->versions) {
            $this->versions = new Collection();
        }
        $this->versions[] = $version;

        return $this;
    }
}
