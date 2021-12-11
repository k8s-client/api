<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use DateTimeInterface;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Initializers;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ManagedFieldsEntry;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\OwnerReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * Service is a named abstraction of software service (for example, mysql) consisting of local port
 * (for example 3306) that the proxy listens on, and the selector that determines which pods will
 * answer requests sent through the proxy.
 *
 * @Kubernetes\Kind("Service",version="v1")
 * @Kubernetes\Operation("get",path="/api/v1/namespaces/{namespace}/services/{name}",response="static::class")
 * @Kubernetes\Operation("get-status",path="/api/v1/namespaces/{namespace}/services/{name}/status",response="static::class")
 * @Kubernetes\Operation("post",path="/api/v1/namespaces/{namespace}/services",body="model",response="static::class")
 * @Kubernetes\Operation("delete",path="/api/v1/namespaces/{namespace}/services/{name}",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch",path="/api/v1/namespaces/{namespace}/services",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("put",path="/api/v1/namespaces/{namespace}/services/{name}",body="model",response="static::class")
 * @Kubernetes\Operation("put-status",path="/api/v1/namespaces/{namespace}/services/{name}/status",body="model",response="static::class")
 * @Kubernetes\Operation("watch-all",path="/api/v1/services",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("patch",path="/api/v1/namespaces/{namespace}/services/{name}",body="patch",response="static::class")
 * @Kubernetes\Operation("patch-status",path="/api/v1/namespaces/{namespace}/services/{name}/status",body="patch",response="static::class")
 * @Kubernetes\Operation("list",path="/api/v1/namespaces/{namespace}/services",response="K8s\Api\Model\Api\Core\v1\ServiceList")
 * @Kubernetes\Operation("list-all",path="/api/v1/services",response="K8s\Api\Model\Api\Core\v1\ServiceList")
 * @Kubernetes\Operation("proxy",path="/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}")
 */
class Service
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string
     */
    protected $apiVersion = 'v1';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string
     */
    protected $kind = 'Service';

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ObjectMeta::class)
     * @var ObjectMeta
     */
    protected $metadata;

    /**
     * @Kubernetes\Attribute("spec",type="model",model=ServiceSpec::class)
     * @var ServiceSpec
     */
    protected $spec;

    /**
     * @Kubernetes\Attribute("status",type="model",model=ServiceStatus::class)
     * @var ServiceStatus|null
     */
    protected $status = null;

    public function __construct(?string $name)
    {
        $this->metadata = new ObjectMeta($name);
    }

    /**
     * Annotations is an unstructured key value map stored with a resource that may be set by external
     * tools to store and retrieve arbitrary metadata. They are not queryable and should be preserved when
     * modifying objects. More info: http://kubernetes.io/docs/user-guide/annotations
     */
    public function getAnnotations(): ?array
    {
        return $this->metadata->getAnnotations();
    }

    /**
     * Annotations is an unstructured key value map stored with a resource that may be set by external
     * tools to store and retrieve arbitrary metadata. They are not queryable and should be preserved when
     * modifying objects. More info: http://kubernetes.io/docs/user-guide/annotations
     *
     * @return static
     */
    public function setAnnotations(array $annotations)
    {
        $this->metadata->setAnnotations($annotations);

        return $this;
    }

    /**
     * The name of the cluster which the object belongs to. This is used to distinguish resources with same
     * name and namespace in different clusters. This field is not set anywhere right now and apiserver is
     * going to ignore it if set in create or update request.
     */
    public function getClusterName(): ?string
    {
        return $this->metadata->getClusterName();
    }

    /**
     * The name of the cluster which the object belongs to. This is used to distinguish resources with same
     * name and namespace in different clusters. This field is not set anywhere right now and apiserver is
     * going to ignore it if set in create or update request.
     *
     * @return static
     */
    public function setClusterName(string $clusterName)
    {
        $this->metadata->setClusterName($clusterName);

        return $this;
    }

    /**
     * CreationTimestamp is a timestamp representing the server time when this object was created. It is
     * not guaranteed to be set in happens-before order across separate operations. Clients may not set
     * this value. It is represented in RFC3339 form and is in UTC.
     *
     * Populated by the system. Read-only. Null for lists. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     */
    public function getCreationTimestamp(): ?DateTimeInterface
    {
        return $this->metadata->getCreationTimestamp();
    }

    /**
     * Number of seconds allowed for this object to gracefully terminate before it will be removed from the
     * system. Only set when deletionTimestamp is also set. May only be shortened. Read-only.
     */
    public function getDeletionGracePeriodSeconds(): ?int
    {
        return $this->metadata->getDeletionGracePeriodSeconds();
    }

    /**
     * DeletionTimestamp is RFC 3339 date and time at which this resource will be deleted. This field is
     * set by the server when a graceful deletion is requested by the user, and is not directly settable by
     * a client. The resource is expected to be deleted (no longer visible from resource lists, and not
     * reachable by name) after the time in this field, once the finalizers list is empty. As long as the
     * finalizers list contains items, deletion is blocked. Once the deletionTimestamp is set, this value
     * may not be unset or be set further into the future, although it may be shortened or the resource may
     * be deleted prior to this time. For example, a user may request that a pod is deleted in 30 seconds.
     * The Kubelet will react by sending a graceful termination signal to the containers in the pod. After
     * that 30 seconds, the Kubelet will send a hard termination signal (SIGKILL) to the container and
     * after cleanup, remove the pod from the API. In the presence of network partitions, this object may
     * still exist after this timestamp, until an administrator or automated process can determine the
     * resource is fully terminated. If not set, graceful deletion of the object has not been requested.
     *
     * Populated by the system when a graceful deletion is requested. Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     */
    public function getDeletionTimestamp(): ?DateTimeInterface
    {
        return $this->metadata->getDeletionTimestamp();
    }

    /**
     * Must be empty before the object is deleted from the registry. Each entry is an identifier for the
     * responsible component that will remove the entry from the list. If the deletionTimestamp of the
     * object is non-nil, entries in this list can only be removed.
     */
    public function getFinalizers(): ?array
    {
        return $this->metadata->getFinalizers();
    }

    /**
     * Must be empty before the object is deleted from the registry. Each entry is an identifier for the
     * responsible component that will remove the entry from the list. If the deletionTimestamp of the
     * object is non-nil, entries in this list can only be removed.
     *
     * @return static
     */
    public function setFinalizers(array $finalizers)
    {
        $this->metadata->setFinalizers($finalizers);

        return $this;
    }

    /**
     * GenerateName is an optional prefix, used by the server, to generate a unique name ONLY IF the Name
     * field has not been provided. If this field is used, the name returned to the client will be
     * different than the name passed. This value will also be combined with a unique suffix. The provided
     * value has the same validation rules as the Name field, and may be truncated by the length of the
     * suffix required to make the value unique on the server.
     *
     * If this field is specified and the generated name exists, the server will NOT return a 409 -
     * instead, it will either return 201 Created or 500 with Reason ServerTimeout indicating a unique name
     * could not be found in the time allotted, and the client should retry (optionally after the time
     * indicated in the Retry-After header).
     *
     * Applied only if Name is not specified. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#idempotency
     */
    public function getGenerateName(): ?string
    {
        return $this->metadata->getGenerateName();
    }

    /**
     * GenerateName is an optional prefix, used by the server, to generate a unique name ONLY IF the Name
     * field has not been provided. If this field is used, the name returned to the client will be
     * different than the name passed. This value will also be combined with a unique suffix. The provided
     * value has the same validation rules as the Name field, and may be truncated by the length of the
     * suffix required to make the value unique on the server.
     *
     * If this field is specified and the generated name exists, the server will NOT return a 409 -
     * instead, it will either return 201 Created or 500 with Reason ServerTimeout indicating a unique name
     * could not be found in the time allotted, and the client should retry (optionally after the time
     * indicated in the Retry-After header).
     *
     * Applied only if Name is not specified. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#idempotency
     *
     * @return static
     */
    public function setGenerateName(string $generateName)
    {
        $this->metadata->setGenerateName($generateName);

        return $this;
    }

    /**
     * A sequence number representing a specific generation of the desired state. Populated by the system.
     * Read-only.
     */
    public function getGeneration(): ?int
    {
        return $this->metadata->getGeneration();
    }

    /**
     * An initializer is a controller which enforces some system invariant at object creation time. This
     * field is a list of initializers that have not yet acted on this object. If nil or empty, this object
     * has been completely initialized. Otherwise, the object is considered uninitialized and is hidden (in
     * list/watch and get calls) from clients that haven't explicitly asked to observe uninitialized
     * objects.
     *
     * When an object is created, the system will populate this list with the current set of initializers.
     * Only privileged users may set or modify this list. Once it is empty, it may not be modified further
     * by any user.
     *
     * DEPRECATED - initializers are an alpha field and will be removed in v1.15.
     */
    public function getInitializers(): ?Initializers
    {
        return $this->metadata->getInitializers();
    }

    /**
     * An initializer is a controller which enforces some system invariant at object creation time. This
     * field is a list of initializers that have not yet acted on this object. If nil or empty, this object
     * has been completely initialized. Otherwise, the object is considered uninitialized and is hidden (in
     * list/watch and get calls) from clients that haven't explicitly asked to observe uninitialized
     * objects.
     *
     * When an object is created, the system will populate this list with the current set of initializers.
     * Only privileged users may set or modify this list. Once it is empty, it may not be modified further
     * by any user.
     *
     * DEPRECATED - initializers are an alpha field and will be removed in v1.15.
     *
     * @return static
     */
    public function setInitializers(Initializers $initializers)
    {
        $this->metadata->setInitializers($initializers);

        return $this;
    }

    /**
     * Map of string keys and values that can be used to organize and categorize (scope and select)
     * objects. May match selectors of replication controllers and services. More info:
     * http://kubernetes.io/docs/user-guide/labels
     */
    public function getLabels(): ?array
    {
        return $this->metadata->getLabels();
    }

    /**
     * Map of string keys and values that can be used to organize and categorize (scope and select)
     * objects. May match selectors of replication controllers and services. More info:
     * http://kubernetes.io/docs/user-guide/labels
     *
     * @return static
     */
    public function setLabels(array $labels)
    {
        $this->metadata->setLabels($labels);

        return $this;
    }

    /**
     * ManagedFields maps workflow-id and version to the set of fields that are managed by that workflow.
     * This is mostly for internal housekeeping, and users typically shouldn't need to set or understand
     * this field. A workflow can be the user's name, a controller's name, or the name of a specific apply
     * path like "ci-cd". The set of fields is always in the version that the workflow used when modifying
     * the object.
     *
     * This field is alpha and can be changed or removed without notice.
     *
     * @return iterable|ManagedFieldsEntry[]
     */
    public function getManagedFields(): ?iterable
    {
        return $this->metadata->getManagedFields();
    }

    /**
     * ManagedFields maps workflow-id and version to the set of fields that are managed by that workflow.
     * This is mostly for internal housekeeping, and users typically shouldn't need to set or understand
     * this field. A workflow can be the user's name, a controller's name, or the name of a specific apply
     * path like "ci-cd". The set of fields is always in the version that the workflow used when modifying
     * the object.
     *
     * This field is alpha and can be changed or removed without notice.
     *
     * @return static
     */
    public function setManagedFields(iterable $managedFields)
    {
        $this->metadata->setManagedFields($managedFields);

        return $this;
    }

    /**
     * @return static
     */
    public function addManagedFields(ManagedFieldsEntry $managedField)
    {
        $this->metadata->addManagedFields($managedField);

        return $this;
    }

    /**
     * Name must be unique within a namespace. Is required when creating resources, although some resources
     * may allow a client to request the generation of an appropriate name automatically. Name is primarily
     * intended for creation idempotence and configuration definition. Cannot be updated. More info:
     * http://kubernetes.io/docs/user-guide/identifiers#names
     */
    public function getName(): ?string
    {
        return $this->metadata->getName();
    }

    /**
     * Name must be unique within a namespace. Is required when creating resources, although some resources
     * may allow a client to request the generation of an appropriate name automatically. Name is primarily
     * intended for creation idempotence and configuration definition. Cannot be updated. More info:
     * http://kubernetes.io/docs/user-guide/identifiers#names
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->metadata->setName($name);

        return $this;
    }

    /**
     * Namespace defines the space within each name must be unique. An empty namespace is equivalent to the
     * "default" namespace, but "default" is the canonical representation. Not all objects are required to
     * be scoped to a namespace - the value of this field for those objects will be empty.
     *
     * Must be a DNS_LABEL. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/namespaces
     */
    public function getNamespace(): ?string
    {
        return $this->metadata->getNamespace();
    }

    /**
     * Namespace defines the space within each name must be unique. An empty namespace is equivalent to the
     * "default" namespace, but "default" is the canonical representation. Not all objects are required to
     * be scoped to a namespace - the value of this field for those objects will be empty.
     *
     * Must be a DNS_LABEL. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/namespaces
     *
     * @return static
     */
    public function setNamespace(string $namespace)
    {
        $this->metadata->setNamespace($namespace);

        return $this;
    }

    /**
     * List of objects depended by this object. If ALL objects in the list have been deleted, this object
     * will be garbage collected. If this object is managed by a controller, then an entry in this list
     * will point to this controller, with the controller field set to true. There cannot be more than one
     * managing controller.
     *
     * @return iterable|OwnerReference[]
     */
    public function getOwnerReferences(): ?iterable
    {
        return $this->metadata->getOwnerReferences();
    }

    /**
     * List of objects depended by this object. If ALL objects in the list have been deleted, this object
     * will be garbage collected. If this object is managed by a controller, then an entry in this list
     * will point to this controller, with the controller field set to true. There cannot be more than one
     * managing controller.
     *
     * @return static
     */
    public function setOwnerReferences(iterable $ownerReferences)
    {
        $this->metadata->setOwnerReferences($ownerReferences);

        return $this;
    }

    /**
     * @return static
     */
    public function addOwnerReferences(OwnerReference $ownerReference)
    {
        $this->metadata->addOwnerReferences($ownerReference);

        return $this;
    }

    /**
     * An opaque value that represents the internal version of this object that can be used by clients to
     * determine when objects have changed. May be used for optimistic concurrency, change detection, and
     * the watch operation on a resource or set of resources. Clients must treat these values as opaque and
     * passed unmodified back to the server. They may only be valid for a particular resource or set of
     * resources.
     *
     * Populated by the system. Read-only. Value must be treated as opaque by clients and . More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#concurrency-control-and-consistency
     */
    public function getResourceVersion(): ?string
    {
        return $this->metadata->getResourceVersion();
    }

    /**
     * SelfLink is a URL representing this object. Populated by the system. Read-only.
     */
    public function getSelfLink(): ?string
    {
        return $this->metadata->getSelfLink();
    }

    /**
     * UID is the unique in time and space value for this object. It is typically generated by the server
     * on successful creation of a resource and is not allowed to change on PUT operations.
     *
     * Populated by the system. Read-only. More info: http://kubernetes.io/docs/user-guide/identifiers#uids
     */
    public function getUid(): ?string
    {
        return $this->metadata->getUid();
    }

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
        return $this->spec->getClusterIP();
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
        $this->spec->setClusterIP($clusterIP);

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
        return $this->spec->getExternalIPs();
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
        $this->spec->setExternalIPs($externalIPs);

        return $this;
    }

    /**
     * externalName is the external reference that kubedns or equivalent will return as a CNAME record for
     * this service. No proxying will be involved. Must be a valid RFC-1123 hostname
     * (https://tools.ietf.org/html/rfc1123) and requires Type to be ExternalName.
     */
    public function getExternalName(): ?string
    {
        return $this->spec->getExternalName();
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
        $this->spec->setExternalName($externalName);

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
        return $this->spec->getExternalTrafficPolicy();
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
        $this->spec->setExternalTrafficPolicy($externalTrafficPolicy);

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
        return $this->spec->getHealthCheckNodePort();
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
        $this->spec->setHealthCheckNodePort($healthCheckNodePort);

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
        return $this->spec->getLoadBalancerIP();
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
        $this->spec->setLoadBalancerIP($loadBalancerIP);

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
        return $this->spec->getLoadBalancerSourceRanges();
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
        $this->spec->setLoadBalancerSourceRanges($loadBalancerSourceRanges);

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
        return $this->spec->getPorts();
    }

    /**
     * The list of ports that are exposed by this service. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#virtual-ips-and-service-proxies
     *
     * @return static
     */
    public function setPorts(iterable $ports)
    {
        $this->spec->setPorts($ports);

        return $this;
    }

    /**
     * @return static
     */
    public function addPorts(ServicePort $port)
    {
        $this->spec->addPorts($port);

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
        return $this->spec->isPublishNotReadyAddresses();
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
        $this->spec->setIsPublishNotReadyAddresses($publishNotReadyAddresses);

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
        return $this->spec->getSelector();
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
        $this->spec->setSelector($selector);

        return $this;
    }

    /**
     * Supports "ClientIP" and "None". Used to maintain session affinity. Enable client IP based session
     * affinity. Must be ClientIP or None. Defaults to None. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#virtual-ips-and-service-proxies
     */
    public function getSessionAffinity(): ?string
    {
        return $this->spec->getSessionAffinity();
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
        $this->spec->setSessionAffinity($sessionAffinity);

        return $this;
    }

    /**
     * sessionAffinityConfig contains the configurations of session affinity.
     */
    public function getSessionAffinityConfig(): ?SessionAffinityConfig
    {
        return $this->spec->getSessionAffinityConfig();
    }

    /**
     * sessionAffinityConfig contains the configurations of session affinity.
     *
     * @return static
     */
    public function setSessionAffinityConfig(SessionAffinityConfig $sessionAffinityConfig)
    {
        $this->spec->setSessionAffinityConfig($sessionAffinityConfig);

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
        return $this->spec->getType();
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
        $this->spec->setType($type);

        return $this;
    }

    /**
     * LoadBalancer contains the current status of the load-balancer, if one is present.
     */
    public function getLoadBalancer(): ?LoadBalancerStatus
    {
        return $this->status->getLoadBalancer();
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     */
    public function getApiVersion(): string
    {
        return $this->apiVersion;
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
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
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     */
    public function getMetadata(): ObjectMeta
    {
        return $this->metadata;
    }

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @return static
     */
    public function setMetadata(ObjectMeta $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Spec defines the behavior of a service.
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     */
    public function getSpec(): ServiceSpec
    {
        return $this->spec;
    }

    /**
     * Spec defines the behavior of a service.
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @return static
     */
    public function setSpec(ServiceSpec $spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * Most recently observed status of the service. Populated by the system. Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     */
    public function getStatus(): ?ServiceStatus
    {
        return $this->status;
    }
}
