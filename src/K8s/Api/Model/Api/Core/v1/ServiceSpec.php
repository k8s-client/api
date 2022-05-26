<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.7
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
     * @Kubernetes\Attribute("allocateLoadBalancerNodePorts")
     * @var bool|null
     */
    protected $allocateLoadBalancerNodePorts = null;

    /**
     * @Kubernetes\Attribute("clusterIP")
     * @var string|null
     */
    protected $clusterIP = null;

    /**
     * @Kubernetes\Attribute("clusterIPs")
     * @var string[]|null
     */
    protected $clusterIPs = null;

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
     * @Kubernetes\Attribute("internalTrafficPolicy")
     * @var string|null
     */
    protected $internalTrafficPolicy = null;

    /**
     * @Kubernetes\Attribute("ipFamilies")
     * @var string[]|null
     */
    protected $ipFamilies = null;

    /**
     * @Kubernetes\Attribute("ipFamilyPolicy")
     * @var string|null
     */
    protected $ipFamilyPolicy = null;

    /**
     * @Kubernetes\Attribute("loadBalancerClass")
     * @var string|null
     */
    protected $loadBalancerClass = null;

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
     * @Kubernetes\Attribute("type")
     * @var string|null
     */
    protected $type = null;

    /**
     * allocateLoadBalancerNodePorts defines if NodePorts will be automatically allocated for services with
     * type LoadBalancer.  Default is "true". It may be set to "false" if the cluster load-balancer does
     * not rely on NodePorts.  If the caller requests specific NodePorts (by specifying a value), those
     * requests will be respected, regardless of this field. This field may only be set for services with
     * type LoadBalancer and will be cleared if the type is changed to any other type. This field is
     * beta-level and is only honored by servers that enable the ServiceLBNodePortControl feature.
     */
    public function isAllocateLoadBalancerNodePorts(): ?bool
    {
        return $this->allocateLoadBalancerNodePorts;
    }

    /**
     * allocateLoadBalancerNodePorts defines if NodePorts will be automatically allocated for services with
     * type LoadBalancer.  Default is "true". It may be set to "false" if the cluster load-balancer does
     * not rely on NodePorts.  If the caller requests specific NodePorts (by specifying a value), those
     * requests will be respected, regardless of this field. This field may only be set for services with
     * type LoadBalancer and will be cleared if the type is changed to any other type. This field is
     * beta-level and is only honored by servers that enable the ServiceLBNodePortControl feature.
     *
     * @return static
     */
    public function setIsAllocateLoadBalancerNodePorts(bool $allocateLoadBalancerNodePorts)
    {
        $this->allocateLoadBalancerNodePorts = $allocateLoadBalancerNodePorts;

        return $this;
    }

    /**
     * clusterIP is the IP address of the service and is usually assigned randomly. If an address is
     * specified manually, is in-range (as per system configuration), and is not in use, it will be
     * allocated to the service; otherwise creation of the service will fail. This field may not be changed
     * through updates unless the type field is also being changed to ExternalName (which requires this
     * field to be blank) or the type field is being changed from ExternalName (in which case this field
     * may optionally be specified, as describe above).  Valid values are "None", empty string (""), or a
     * valid IP address. Setting this to "None" makes a "headless service" (no virtual IP), which is useful
     * when direct endpoint connections are preferred and proxying is not required.  Only applies to types
     * ClusterIP, NodePort, and LoadBalancer. If this field is specified when creating a Service of type
     * ExternalName, creation will fail. This field will be wiped when updating a Service to type
     * ExternalName. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#virtual-ips-and-service-proxies
     */
    public function getClusterIP(): ?string
    {
        return $this->clusterIP;
    }

    /**
     * clusterIP is the IP address of the service and is usually assigned randomly. If an address is
     * specified manually, is in-range (as per system configuration), and is not in use, it will be
     * allocated to the service; otherwise creation of the service will fail. This field may not be changed
     * through updates unless the type field is also being changed to ExternalName (which requires this
     * field to be blank) or the type field is being changed from ExternalName (in which case this field
     * may optionally be specified, as describe above).  Valid values are "None", empty string (""), or a
     * valid IP address. Setting this to "None" makes a "headless service" (no virtual IP), which is useful
     * when direct endpoint connections are preferred and proxying is not required.  Only applies to types
     * ClusterIP, NodePort, and LoadBalancer. If this field is specified when creating a Service of type
     * ExternalName, creation will fail. This field will be wiped when updating a Service to type
     * ExternalName. More info:
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
     * ClusterIPs is a list of IP addresses assigned to this service, and are usually assigned randomly.
     * If an address is specified manually, is in-range (as per system configuration), and is not in use,
     * it will be allocated to the service; otherwise creation of the service will fail. This field may not
     * be changed through updates unless the type field is also being changed to ExternalName (which
     * requires this field to be empty) or the type field is being changed from ExternalName (in which case
     * this field may optionally be specified, as describe above).  Valid values are "None", empty string
     * (""), or a valid IP address.  Setting this to "None" makes a "headless service" (no virtual IP),
     * which is useful when direct endpoint connections are preferred and proxying is not required.  Only
     * applies to types ClusterIP, NodePort, and LoadBalancer. If this field is specified when creating a
     * Service of type ExternalName, creation will fail. This field will be wiped when updating a Service
     * to type ExternalName.  If this field is not specified, it will be initialized from the clusterIP
     * field.  If this field is specified, clients must ensure that clusterIPs[0] and clusterIP have the
     * same value.
     *
     * This field may hold a maximum of two entries (dual-stack IPs, in either order). These IPs must
     * correspond to the values of the ipFamilies field. Both clusterIPs and ipFamilies are governed by the
     * ipFamilyPolicy field. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#virtual-ips-and-service-proxies
     */
    public function getClusterIPs(): ?array
    {
        return $this->clusterIPs;
    }

    /**
     * ClusterIPs is a list of IP addresses assigned to this service, and are usually assigned randomly.
     * If an address is specified manually, is in-range (as per system configuration), and is not in use,
     * it will be allocated to the service; otherwise creation of the service will fail. This field may not
     * be changed through updates unless the type field is also being changed to ExternalName (which
     * requires this field to be empty) or the type field is being changed from ExternalName (in which case
     * this field may optionally be specified, as describe above).  Valid values are "None", empty string
     * (""), or a valid IP address.  Setting this to "None" makes a "headless service" (no virtual IP),
     * which is useful when direct endpoint connections are preferred and proxying is not required.  Only
     * applies to types ClusterIP, NodePort, and LoadBalancer. If this field is specified when creating a
     * Service of type ExternalName, creation will fail. This field will be wiped when updating a Service
     * to type ExternalName.  If this field is not specified, it will be initialized from the clusterIP
     * field.  If this field is specified, clients must ensure that clusterIPs[0] and clusterIP have the
     * same value.
     *
     * This field may hold a maximum of two entries (dual-stack IPs, in either order). These IPs must
     * correspond to the values of the ipFamilies field. Both clusterIPs and ipFamilies are governed by the
     * ipFamilyPolicy field. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#virtual-ips-and-service-proxies
     *
     * @return static
     */
    public function setClusterIPs(array $clusterIPs)
    {
        $this->clusterIPs = $clusterIPs;

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
     * externalName is the external reference that discovery mechanisms will return as an alias for this
     * service (e.g. a DNS CNAME record). No proxying will be involved.  Must be a lowercase RFC-1123
     * hostname (https://tools.ietf.org/html/rfc1123) and requires `type` to be "ExternalName".
     */
    public function getExternalName(): ?string
    {
        return $this->externalName;
    }

    /**
     * externalName is the external reference that discovery mechanisms will return as an alias for this
     * service (e.g. a DNS CNAME record). No proxying will be involved.  Must be a lowercase RFC-1123
     * hostname (https://tools.ietf.org/html/rfc1123) and requires `type` to be "ExternalName".
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
     *
     *
     * @return static
     */
    public function setExternalTrafficPolicy(string $externalTrafficPolicy)
    {
        $this->externalTrafficPolicy = $externalTrafficPolicy;

        return $this;
    }

    /**
     * healthCheckNodePort specifies the healthcheck nodePort for the service. This only applies when type
     * is set to LoadBalancer and externalTrafficPolicy is set to Local. If a value is specified, is
     * in-range, and is not in use, it will be used.  If not specified, a value will be automatically
     * allocated.  External systems (e.g. load-balancers) can use this port to determine if a given node
     * holds endpoints for this service or not.  If this field is specified when creating a Service which
     * does not need it, creation will fail. This field will be wiped when updating a Service to no longer
     * need it (e.g. changing type).
     */
    public function getHealthCheckNodePort(): ?int
    {
        return $this->healthCheckNodePort;
    }

    /**
     * healthCheckNodePort specifies the healthcheck nodePort for the service. This only applies when type
     * is set to LoadBalancer and externalTrafficPolicy is set to Local. If a value is specified, is
     * in-range, and is not in use, it will be used.  If not specified, a value will be automatically
     * allocated.  External systems (e.g. load-balancers) can use this port to determine if a given node
     * holds endpoints for this service or not.  If this field is specified when creating a Service which
     * does not need it, creation will fail. This field will be wiped when updating a Service to no longer
     * need it (e.g. changing type).
     *
     * @return static
     */
    public function setHealthCheckNodePort(int $healthCheckNodePort)
    {
        $this->healthCheckNodePort = $healthCheckNodePort;

        return $this;
    }

    /**
     * InternalTrafficPolicy specifies if the cluster internal traffic should be routed to all endpoints or
     * node-local endpoints only. "Cluster" routes internal traffic to a Service to all endpoints. "Local"
     * routes traffic to node-local endpoints only, traffic is dropped if no node-local endpoints are
     * ready. The default value is "Cluster".
     */
    public function getInternalTrafficPolicy(): ?string
    {
        return $this->internalTrafficPolicy;
    }

    /**
     * InternalTrafficPolicy specifies if the cluster internal traffic should be routed to all endpoints or
     * node-local endpoints only. "Cluster" routes internal traffic to a Service to all endpoints. "Local"
     * routes traffic to node-local endpoints only, traffic is dropped if no node-local endpoints are
     * ready. The default value is "Cluster".
     *
     * @return static
     */
    public function setInternalTrafficPolicy(string $internalTrafficPolicy)
    {
        $this->internalTrafficPolicy = $internalTrafficPolicy;

        return $this;
    }

    /**
     * IPFamilies is a list of IP families (e.g. IPv4, IPv6) assigned to this service. This field is
     * usually assigned automatically based on cluster configuration and the ipFamilyPolicy field. If this
     * field is specified manually, the requested family is available in the cluster, and ipFamilyPolicy
     * allows it, it will be used; otherwise creation of the service will fail. This field is conditionally
     * mutable: it allows for adding or removing a secondary IP family, but it does not allow changing the
     * primary IP family of the Service. Valid values are "IPv4" and "IPv6".  This field only applies to
     * Services of types ClusterIP, NodePort, and LoadBalancer, and does apply to "headless" services. This
     * field will be wiped when updating a Service to type ExternalName.
     *
     * This field may hold a maximum of two entries (dual-stack families, in either order).  These families
     * must correspond to the values of the clusterIPs field, if specified. Both clusterIPs and ipFamilies
     * are governed by the ipFamilyPolicy field.
     */
    public function getIpFamilies(): ?array
    {
        return $this->ipFamilies;
    }

    /**
     * IPFamilies is a list of IP families (e.g. IPv4, IPv6) assigned to this service. This field is
     * usually assigned automatically based on cluster configuration and the ipFamilyPolicy field. If this
     * field is specified manually, the requested family is available in the cluster, and ipFamilyPolicy
     * allows it, it will be used; otherwise creation of the service will fail. This field is conditionally
     * mutable: it allows for adding or removing a secondary IP family, but it does not allow changing the
     * primary IP family of the Service. Valid values are "IPv4" and "IPv6".  This field only applies to
     * Services of types ClusterIP, NodePort, and LoadBalancer, and does apply to "headless" services. This
     * field will be wiped when updating a Service to type ExternalName.
     *
     * This field may hold a maximum of two entries (dual-stack families, in either order).  These families
     * must correspond to the values of the clusterIPs field, if specified. Both clusterIPs and ipFamilies
     * are governed by the ipFamilyPolicy field.
     *
     * @return static
     */
    public function setIpFamilies(array $ipFamilies)
    {
        $this->ipFamilies = $ipFamilies;

        return $this;
    }

    /**
     * IPFamilyPolicy represents the dual-stack-ness requested or required by this Service. If there is no
     * value provided, then this field will be set to SingleStack. Services can be "SingleStack" (a single
     * IP family), "PreferDualStack" (two IP families on dual-stack configured clusters or a single IP
     * family on single-stack clusters), or "RequireDualStack" (two IP families on dual-stack configured
     * clusters, otherwise fail). The ipFamilies and clusterIPs fields depend on the value of this field.
     * This field will be wiped when updating a service to type ExternalName.
     */
    public function getIpFamilyPolicy(): ?string
    {
        return $this->ipFamilyPolicy;
    }

    /**
     * IPFamilyPolicy represents the dual-stack-ness requested or required by this Service. If there is no
     * value provided, then this field will be set to SingleStack. Services can be "SingleStack" (a single
     * IP family), "PreferDualStack" (two IP families on dual-stack configured clusters or a single IP
     * family on single-stack clusters), or "RequireDualStack" (two IP families on dual-stack configured
     * clusters, otherwise fail). The ipFamilies and clusterIPs fields depend on the value of this field.
     * This field will be wiped when updating a service to type ExternalName.
     *
     * @return static
     */
    public function setIpFamilyPolicy(string $ipFamilyPolicy)
    {
        $this->ipFamilyPolicy = $ipFamilyPolicy;

        return $this;
    }

    /**
     * loadBalancerClass is the class of the load balancer implementation this Service belongs to. If
     * specified, the value of this field must be a label-style identifier, with an optional prefix, e.g.
     * "internal-vip" or "example.com/internal-vip". Unprefixed names are reserved for end-users. This
     * field can only be set when the Service type is 'LoadBalancer'. If not set, the default load balancer
     * implementation is used, today this is typically done through the cloud provider integration, but
     * should apply for any default implementation. If set, it is assumed that a load balancer
     * implementation is watching for Services with a matching class. Any default load balancer
     * implementation (e.g. cloud providers) should ignore Services that set this field. This field can
     * only be set when creating or updating a Service to type 'LoadBalancer'. Once set, it can not be
     * changed. This field will be wiped when a service is updated to a non 'LoadBalancer' type.
     */
    public function getLoadBalancerClass(): ?string
    {
        return $this->loadBalancerClass;
    }

    /**
     * loadBalancerClass is the class of the load balancer implementation this Service belongs to. If
     * specified, the value of this field must be a label-style identifier, with an optional prefix, e.g.
     * "internal-vip" or "example.com/internal-vip". Unprefixed names are reserved for end-users. This
     * field can only be set when the Service type is 'LoadBalancer'. If not set, the default load balancer
     * implementation is used, today this is typically done through the cloud provider integration, but
     * should apply for any default implementation. If set, it is assumed that a load balancer
     * implementation is watching for Services with a matching class. Any default load balancer
     * implementation (e.g. cloud providers) should ignore Services that set this field. This field can
     * only be set when creating or updating a Service to type 'LoadBalancer'. Once set, it can not be
     * changed. This field will be wiped when a service is updated to a non 'LoadBalancer' type.
     *
     * @return static
     */
    public function setLoadBalancerClass(string $loadBalancerClass)
    {
        $this->loadBalancerClass = $loadBalancerClass;

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
     * https://kubernetes.io/docs/tasks/access-application-cluster/create-external-load-balancer/
     */
    public function getLoadBalancerSourceRanges(): ?array
    {
        return $this->loadBalancerSourceRanges;
    }

    /**
     * If specified and supported by the platform, this will restrict traffic through the cloud-provider
     * load-balancer will be restricted to the specified client IPs. This field will be ignored if the
     * cloud-provider does not support the feature." More info:
     * https://kubernetes.io/docs/tasks/access-application-cluster/create-external-load-balancer/
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
     * publishNotReadyAddresses indicates that any agent which deals with endpoints for this Service should
     * disregard any indications of ready/not-ready. The primary use case for setting this field is for a
     * StatefulSet's Headless Service to propagate SRV DNS records for its Pods for the purpose of peer
     * discovery. The Kubernetes controllers that generate Endpoints and EndpointSlice resources for
     * Services interpret this to mean that all endpoints are considered "ready" even if the Pods
     * themselves are not. Agents which consume only Kubernetes generated endpoints through the Endpoints
     * or EndpointSlice resources can safely assume this behavior.
     */
    public function isPublishNotReadyAddresses(): ?bool
    {
        return $this->publishNotReadyAddresses;
    }

    /**
     * publishNotReadyAddresses indicates that any agent which deals with endpoints for this Service should
     * disregard any indications of ready/not-ready. The primary use case for setting this field is for a
     * StatefulSet's Headless Service to propagate SRV DNS records for its Pods for the purpose of peer
     * discovery. The Kubernetes controllers that generate Endpoints and EndpointSlice resources for
     * Services interpret this to mean that all endpoints are considered "ready" even if the Pods
     * themselves are not. Agents which consume only Kubernetes generated endpoints through the Endpoints
     * or EndpointSlice resources can safely assume this behavior.
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
     *
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
     * type determines how the Service is exposed. Defaults to ClusterIP. Valid options are ExternalName,
     * ClusterIP, NodePort, and LoadBalancer. "ClusterIP" allocates a cluster-internal IP address for
     * load-balancing to endpoints. Endpoints are determined by the selector or if that is not specified,
     * by manual construction of an Endpoints object or EndpointSlice objects. If clusterIP is "None", no
     * virtual IP is allocated and the endpoints are published as a set of endpoints rather than a virtual
     * IP. "NodePort" builds on ClusterIP and allocates a port on every node which routes to the same
     * endpoints as the clusterIP. "LoadBalancer" builds on NodePort and creates an external load-balancer
     * (if supported in the current cloud) which routes to the same endpoints as the clusterIP.
     * "ExternalName" aliases this service to the specified externalName. Several other fields do not apply
     * to ExternalName services. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#publishing-services-service-types
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * type determines how the Service is exposed. Defaults to ClusterIP. Valid options are ExternalName,
     * ClusterIP, NodePort, and LoadBalancer. "ClusterIP" allocates a cluster-internal IP address for
     * load-balancing to endpoints. Endpoints are determined by the selector or if that is not specified,
     * by manual construction of an Endpoints object or EndpointSlice objects. If clusterIP is "None", no
     * virtual IP is allocated and the endpoints are published as a set of endpoints rather than a virtual
     * IP. "NodePort" builds on ClusterIP and allocates a port on every node which routes to the same
     * endpoints as the clusterIP. "LoadBalancer" builds on NodePort and creates an external load-balancer
     * (if supported in the current cloud) which routes to the same endpoints as the clusterIP.
     * "ExternalName" aliases this service to the specified externalName. Several other fields do not apply
     * to ExternalName services. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#publishing-services-service-types
     *
     *
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
