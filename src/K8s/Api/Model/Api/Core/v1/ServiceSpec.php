<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.18.20
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
 * ServiceSpec describes the attributes that a user creates on a service.
 */
class ServiceSpec
{
    /**
     * @Kubernetes\Attribute("clusterIP")
     * @var string|null
     */
    protected $clusterIP = null;

    /**
     * @Kubernetes\Attribute("externalIPs")
     * @var string[]|null
     */
    protected $externalIPs = null;

    /**
     * @Kubernetes\Attribute("externalName")
     * @var string|null
     */
    protected $externalName = null;

    /**
     * @Kubernetes\Attribute("externalTrafficPolicy")
     * @var string|null
     */
    protected $externalTrafficPolicy = null;

    /**
     * @Kubernetes\Attribute("healthCheckNodePort")
     * @var int|null
     */
    protected $healthCheckNodePort = null;

    /**
     * @Kubernetes\Attribute("ipFamily")
     * @var string|null
     */
    protected $ipFamily = null;

    /**
     * @Kubernetes\Attribute("loadBalancerIP")
     * @var string|null
     */
    protected $loadBalancerIP = null;

    /**
     * @Kubernetes\Attribute("loadBalancerSourceRanges")
     * @var string[]|null
     */
    protected $loadBalancerSourceRanges = null;

    /**
     * @Kubernetes\Attribute("ports",type="collection",model=ServicePort::class)
     * @var iterable|ServicePort[]|null
     */
    protected $ports = null;

    /**
     * @Kubernetes\Attribute("publishNotReadyAddresses")
     * @var bool|null
     */
    protected $publishNotReadyAddresses = null;

    /**
     * @Kubernetes\Attribute("selector")
     * @var string[]|null
     */
    protected $selector = null;

    /**
     * @Kubernetes\Attribute("sessionAffinity")
     * @var string|null
     */
    protected $sessionAffinity = null;

    /**
     * @Kubernetes\Attribute("sessionAffinityConfig",type="model",model=SessionAffinityConfig::class)
     * @var SessionAffinityConfig|null
     */
    protected $sessionAffinityConfig = null;

    /**
     * @Kubernetes\Attribute("topologyKeys")
     * @var string[]|null
     */
    protected $topologyKeys = null;

    /**
     * @Kubernetes\Attribute("type")
     * @var string|null
     */
    protected $type = null;

    /**
     * clusterIP is the IP address of the service and is usually assigned randomly by the master. If an
     * address is specified manually and is not in use by others, it will be allocated to the service;
     * otherwise, creation of the service will fail. This field can not be changed through updates. Valid
     * values are "None", empty string (""), or a valid IP address. "None" can be specified for headless
     * services when proxying is not required. Only applies to types ClusterIP, NodePort, and LoadBalancer.
     * Ignored if type is ExternalName. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#virtual-ips-and-service-proxies
     */
    public function getClusterIP(): ?string
    {
        return $this->clusterIP;
    }

    /**
     * clusterIP is the IP address of the service and is usually assigned randomly by the master. If an
     * address is specified manually and is not in use by others, it will be allocated to the service;
     * otherwise, creation of the service will fail. This field can not be changed through updates. Valid
     * values are "None", empty string (""), or a valid IP address. "None" can be specified for headless
     * services when proxying is not required. Only applies to types ClusterIP, NodePort, and LoadBalancer.
     * Ignored if type is ExternalName. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#virtual-ips-and-service-proxies
     *
     * @return static
     */
    public function setClusterIP(string $clusterIP)
    {
        $this->clusterIP = $clusterIP;

        return $this;
    }

    /**
     * externalIPs is a list of IP addresses for which nodes in the cluster will also accept traffic for
     * this service.  These IPs are not managed by Kubernetes.  The user is responsible for ensuring that
     * traffic arrives at a node with this IP.  A common example is external load-balancers that are not
     * part of the Kubernetes system.
     */
    public function getExternalIPs(): ?array
    {
        return $this->externalIPs;
    }

    /**
     * externalIPs is a list of IP addresses for which nodes in the cluster will also accept traffic for
     * this service.  These IPs are not managed by Kubernetes.  The user is responsible for ensuring that
     * traffic arrives at a node with this IP.  A common example is external load-balancers that are not
     * part of the Kubernetes system.
     *
     * @return static
     */
    public function setExternalIPs(array $externalIPs)
    {
        $this->externalIPs = $externalIPs;

        return $this;
    }

    /**
     * externalName is the external reference that kubedns or equivalent will return as a CNAME record for
     * this service. No proxying will be involved. Must be a valid RFC-1123 hostname
     * (https://tools.ietf.org/html/rfc1123) and requires Type to be ExternalName.
     */
    public function getExternalName(): ?string
    {
        return $this->externalName;
    }

    /**
     * externalName is the external reference that kubedns or equivalent will return as a CNAME record for
     * this service. No proxying will be involved. Must be a valid RFC-1123 hostname
     * (https://tools.ietf.org/html/rfc1123) and requires Type to be ExternalName.
     *
     * @return static
     */
    public function setExternalName(string $externalName)
    {
        $this->externalName = $externalName;

        return $this;
    }

    /**
     * externalTrafficPolicy denotes if this Service desires to route external traffic to node-local or
     * cluster-wide endpoints. "Local" preserves the client source IP and avoids a second hop for
     * LoadBalancer and Nodeport type services, but risks potentially imbalanced traffic spreading.
     * "Cluster" obscures the client source IP and may cause a second hop to another node, but should have
     * good overall load-spreading.
     */
    public function getExternalTrafficPolicy(): ?string
    {
        return $this->externalTrafficPolicy;
    }

    /**
     * externalTrafficPolicy denotes if this Service desires to route external traffic to node-local or
     * cluster-wide endpoints. "Local" preserves the client source IP and avoids a second hop for
     * LoadBalancer and Nodeport type services, but risks potentially imbalanced traffic spreading.
     * "Cluster" obscures the client source IP and may cause a second hop to another node, but should have
     * good overall load-spreading.
     *
     * @return static
     */
    public function setExternalTrafficPolicy(string $externalTrafficPolicy)
    {
        $this->externalTrafficPolicy = $externalTrafficPolicy;

        return $this;
    }

    /**
     * healthCheckNodePort specifies the healthcheck nodePort for the service. If not specified,
     * HealthCheckNodePort is created by the service api backend with the allocated nodePort. Will use
     * user-specified nodePort value if specified by the client. Only effects when Type is set to
     * LoadBalancer and ExternalTrafficPolicy is set to Local.
     */
    public function getHealthCheckNodePort(): ?int
    {
        return $this->healthCheckNodePort;
    }

    /**
     * healthCheckNodePort specifies the healthcheck nodePort for the service. If not specified,
     * HealthCheckNodePort is created by the service api backend with the allocated nodePort. Will use
     * user-specified nodePort value if specified by the client. Only effects when Type is set to
     * LoadBalancer and ExternalTrafficPolicy is set to Local.
     *
     * @return static
     */
    public function setHealthCheckNodePort(int $healthCheckNodePort)
    {
        $this->healthCheckNodePort = $healthCheckNodePort;

        return $this;
    }

    /**
     * ipFamily specifies whether this Service has a preference for a particular IP family (e.g. IPv4 vs.
     * IPv6).  If a specific IP family is requested, the clusterIP field will be allocated from that
     * family, if it is available in the cluster.  If no IP family is requested, the cluster's primary IP
     * family will be used. Other IP fields (loadBalancerIP, loadBalancerSourceRanges, externalIPs) and
     * controllers which allocate external load-balancers should use the same IP family.  Endpoints for
     * this Service will be of this family.  This field is immutable after creation. Assigning a
     * ServiceIPFamily not available in the cluster (e.g. IPv6 in IPv4 only cluster) is an error condition
     * and will fail during clusterIP assignment.
     */
    public function getIpFamily(): ?string
    {
        return $this->ipFamily;
    }

    /**
     * ipFamily specifies whether this Service has a preference for a particular IP family (e.g. IPv4 vs.
     * IPv6).  If a specific IP family is requested, the clusterIP field will be allocated from that
     * family, if it is available in the cluster.  If no IP family is requested, the cluster's primary IP
     * family will be used. Other IP fields (loadBalancerIP, loadBalancerSourceRanges, externalIPs) and
     * controllers which allocate external load-balancers should use the same IP family.  Endpoints for
     * this Service will be of this family.  This field is immutable after creation. Assigning a
     * ServiceIPFamily not available in the cluster (e.g. IPv6 in IPv4 only cluster) is an error condition
     * and will fail during clusterIP assignment.
     *
     * @return static
     */
    public function setIpFamily(string $ipFamily)
    {
        $this->ipFamily = $ipFamily;

        return $this;
    }

    /**
     * Only applies to Service Type: LoadBalancer LoadBalancer will get created with the IP specified in
     * this field. This feature depends on whether the underlying cloud-provider supports specifying the
     * loadBalancerIP when a load balancer is created. This field will be ignored if the cloud-provider
     * does not support the feature.
     */
    public function getLoadBalancerIP(): ?string
    {
        return $this->loadBalancerIP;
    }

    /**
     * Only applies to Service Type: LoadBalancer LoadBalancer will get created with the IP specified in
     * this field. This feature depends on whether the underlying cloud-provider supports specifying the
     * loadBalancerIP when a load balancer is created. This field will be ignored if the cloud-provider
     * does not support the feature.
     *
     * @return static
     */
    public function setLoadBalancerIP(string $loadBalancerIP)
    {
        $this->loadBalancerIP = $loadBalancerIP;

        return $this;
    }

    /**
     * If specified and supported by the platform, this will restrict traffic through the cloud-provider
     * load-balancer will be restricted to the specified client IPs. This field will be ignored if the
     * cloud-provider does not support the feature." More info:
     * https://kubernetes.io/docs/tasks/access-application-cluster/configure-cloud-provider-firewall/
     */
    public function getLoadBalancerSourceRanges(): ?array
    {
        return $this->loadBalancerSourceRanges;
    }

    /**
     * If specified and supported by the platform, this will restrict traffic through the cloud-provider
     * load-balancer will be restricted to the specified client IPs. This field will be ignored if the
     * cloud-provider does not support the feature." More info:
     * https://kubernetes.io/docs/tasks/access-application-cluster/configure-cloud-provider-firewall/
     *
     * @return static
     */
    public function setLoadBalancerSourceRanges(array $loadBalancerSourceRanges)
    {
        $this->loadBalancerSourceRanges = $loadBalancerSourceRanges;

        return $this;
    }

    /**
     * The list of ports that are exposed by this service. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#virtual-ips-and-service-proxies
     *
     * @return iterable|ServicePort[]
     */
    public function getPorts(): ?iterable
    {
        return $this->ports;
    }

    /**
     * The list of ports that are exposed by this service. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#virtual-ips-and-service-proxies
     *
     * @return static
     */
    public function setPorts(iterable $ports)
    {
        $this->ports = $ports;

        return $this;
    }

    /**
     * @return static
     */
    public function addPorts(ServicePort $port)
    {
        if (!$this->ports) {
            $this->ports = new Collection();
        }
        $this->ports[] = $port;

        return $this;
    }

    /**
     * publishNotReadyAddresses, when set to true, indicates that DNS implementations must publish the
     * notReadyAddresses of subsets for the Endpoints associated with the Service. The default value is
     * false. The primary use case for setting this field is to use a StatefulSet's Headless Service to
     * propagate SRV records for its Pods without respect to their readiness for purpose of peer discovery.
     */
    public function isPublishNotReadyAddresses(): ?bool
    {
        return $this->publishNotReadyAddresses;
    }

    /**
     * publishNotReadyAddresses, when set to true, indicates that DNS implementations must publish the
     * notReadyAddresses of subsets for the Endpoints associated with the Service. The default value is
     * false. The primary use case for setting this field is to use a StatefulSet's Headless Service to
     * propagate SRV records for its Pods without respect to their readiness for purpose of peer discovery.
     *
     * @return static
     */
    public function setIsPublishNotReadyAddresses(bool $publishNotReadyAddresses)
    {
        $this->publishNotReadyAddresses = $publishNotReadyAddresses;

        return $this;
    }

    /**
     * Route service traffic to pods with label keys and values matching this selector. If empty or not
     * present, the service is assumed to have an external process managing its endpoints, which Kubernetes
     * will not modify. Only applies to types ClusterIP, NodePort, and LoadBalancer. Ignored if type is
     * ExternalName. More info: https://kubernetes.io/docs/concepts/services-networking/service/
     */
    public function getSelector(): ?array
    {
        return $this->selector;
    }

    /**
     * Route service traffic to pods with label keys and values matching this selector. If empty or not
     * present, the service is assumed to have an external process managing its endpoints, which Kubernetes
     * will not modify. Only applies to types ClusterIP, NodePort, and LoadBalancer. Ignored if type is
     * ExternalName. More info: https://kubernetes.io/docs/concepts/services-networking/service/
     *
     * @return static
     */
    public function setSelector(array $selector)
    {
        $this->selector = $selector;

        return $this;
    }

    /**
     * Supports "ClientIP" and "None". Used to maintain session affinity. Enable client IP based session
     * affinity. Must be ClientIP or None. Defaults to None. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#virtual-ips-and-service-proxies
     */
    public function getSessionAffinity(): ?string
    {
        return $this->sessionAffinity;
    }

    /**
     * Supports "ClientIP" and "None". Used to maintain session affinity. Enable client IP based session
     * affinity. Must be ClientIP or None. Defaults to None. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#virtual-ips-and-service-proxies
     *
     * @return static
     */
    public function setSessionAffinity(string $sessionAffinity)
    {
        $this->sessionAffinity = $sessionAffinity;

        return $this;
    }

    /**
     * sessionAffinityConfig contains the configurations of session affinity.
     */
    public function getSessionAffinityConfig(): ?SessionAffinityConfig
    {
        return $this->sessionAffinityConfig;
    }

    /**
     * sessionAffinityConfig contains the configurations of session affinity.
     *
     * @return static
     */
    public function setSessionAffinityConfig(SessionAffinityConfig $sessionAffinityConfig)
    {
        $this->sessionAffinityConfig = $sessionAffinityConfig;

        return $this;
    }

    /**
     * topologyKeys is a preference-order list of topology keys which implementations of services should
     * use to preferentially sort endpoints when accessing this Service, it can not be used at the same
     * time as externalTrafficPolicy=Local. Topology keys must be valid label keys and at most 16 keys may
     * be specified. Endpoints are chosen based on the first topology key with available backends. If this
     * field is specified and all entries have no backends that match the topology of the client, the
     * service has no backends for that client and connections should fail. The special value "*" may be
     * used to mean "any topology". This catch-all value, if used, only makes sense as the last value in
     * the list. If this is not specified or empty, no topology constraints will be applied.
     */
    public function getTopologyKeys(): ?array
    {
        return $this->topologyKeys;
    }

    /**
     * topologyKeys is a preference-order list of topology keys which implementations of services should
     * use to preferentially sort endpoints when accessing this Service, it can not be used at the same
     * time as externalTrafficPolicy=Local. Topology keys must be valid label keys and at most 16 keys may
     * be specified. Endpoints are chosen based on the first topology key with available backends. If this
     * field is specified and all entries have no backends that match the topology of the client, the
     * service has no backends for that client and connections should fail. The special value "*" may be
     * used to mean "any topology". This catch-all value, if used, only makes sense as the last value in
     * the list. If this is not specified or empty, no topology constraints will be applied.
     *
     * @return static
     */
    public function setTopologyKeys(array $topologyKeys)
    {
        $this->topologyKeys = $topologyKeys;

        return $this;
    }

    /**
     * type determines how the Service is exposed. Defaults to ClusterIP. Valid options are ExternalName,
     * ClusterIP, NodePort, and LoadBalancer. "ExternalName" maps to the specified externalName.
     * "ClusterIP" allocates a cluster-internal IP address for load-balancing to endpoints. Endpoints are
     * determined by the selector or if that is not specified, by manual construction of an Endpoints
     * object. If clusterIP is "None", no virtual IP is allocated and the endpoints are published as a set
     * of endpoints rather than a stable IP. "NodePort" builds on ClusterIP and allocates a port on every
     * node which routes to the clusterIP. "LoadBalancer" builds on NodePort and creates an external
     * load-balancer (if supported in the current cloud) which routes to the clusterIP. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#publishing-services-service-types
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * type determines how the Service is exposed. Defaults to ClusterIP. Valid options are ExternalName,
     * ClusterIP, NodePort, and LoadBalancer. "ExternalName" maps to the specified externalName.
     * "ClusterIP" allocates a cluster-internal IP address for load-balancing to endpoints. Endpoints are
     * determined by the selector or if that is not specified, by manual construction of an Endpoints
     * object. If clusterIP is "None", no virtual IP is allocated and the endpoints are published as a set
     * of endpoints rather than a stable IP. "NodePort" builds on ClusterIP and allocates a port on every
     * node which routes to the clusterIP. "LoadBalancer" builds on NodePort and creates an external
     * load-balancer (if supported in the current cloud) which routes to the clusterIP. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#publishing-services-service-types
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
