<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\KubeAggregator\Apis\ApiRegistration\v1beta1;

use DateTimeInterface;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Initializers;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ManagedFieldsEntry;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\OwnerReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * APIService represents a server for a particular GroupVersion. Name must be "version.group".
 *
 * @Kubernetes\Kind("APIService",group="apiregistration.k8s.io",version="v1beta1")
 * @Kubernetes\Operation("get",path="/apis/apiregistration.k8s.io/v1beta1/apiservices/{name}",response="static::class")
 * @Kubernetes\Operation("get-status",path="/apis/apiregistration.k8s.io/v1beta1/apiservices/{name}/status",response="static::class")
 * @Kubernetes\Operation("post",path="/apis/apiregistration.k8s.io/v1beta1/apiservices",body="model",response="static::class")
 * @Kubernetes\Operation("delete",path="/apis/apiregistration.k8s.io/v1beta1/apiservices/{name}",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("put",path="/apis/apiregistration.k8s.io/v1beta1/apiservices/{name}",body="model",response="static::class")
 * @Kubernetes\Operation("put-status",path="/apis/apiregistration.k8s.io/v1beta1/apiservices/{name}/status",body="model",response="static::class")
 * @Kubernetes\Operation("deletecollection-all",path="/apis/apiregistration.k8s.io/v1beta1/apiservices",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch-all",path="/apis/apiregistration.k8s.io/v1beta1/apiservices",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("patch",path="/apis/apiregistration.k8s.io/v1beta1/apiservices/{name}",body="patch",response="static::class")
 * @Kubernetes\Operation("patch-status",path="/apis/apiregistration.k8s.io/v1beta1/apiservices/{name}/status",body="patch",response="static::class")
 * @Kubernetes\Operation("list-all",path="/apis/apiregistration.k8s.io/v1beta1/apiservices",response="K8s\Api\Model\KubeAggregator\Apis\ApiRegistration\v1beta1\APIServiceList")
 */
class APIService
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string
     */
    protected $apiVersion = 'apiregistration.k8s.io/v1beta1';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string
     */
    protected $kind = 'APIService';

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ObjectMeta::class)
     * @var ObjectMeta
     */
    protected $metadata;

    /**
     * @Kubernetes\Attribute("spec",type="model",model=APIServiceSpec::class)
     * @var APIServiceSpec
     */
    protected $spec;

    /**
     * @Kubernetes\Attribute("status",type="model",model=APIServiceStatus::class)
     * @var APIServiceStatus|null
     */
    protected $status = null;

    /**
     * @param int $groupPriorityMinimum
     * @param ServiceReference $service
     * @param int $versionPriority
     */
    public function __construct(?string $name, int $groupPriorityMinimum, ServiceReference $service, int $versionPriority)
    {
        $this->metadata = new ObjectMeta($name);
        $this->spec = new APIServiceSpec($groupPriorityMinimum, $service, $versionPriority);
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
     * CABundle is a PEM encoded CA bundle which will be used to validate an API server's serving
     * certificate. If unspecified, system trust roots on the apiserver are used.
     */
    public function getCaBundle(): ?string
    {
        return $this->spec->getCaBundle();
    }

    /**
     * CABundle is a PEM encoded CA bundle which will be used to validate an API server's serving
     * certificate. If unspecified, system trust roots on the apiserver are used.
     *
     * @return static
     */
    public function setCaBundle(string $caBundle)
    {
        $this->spec->setCaBundle($caBundle);

        return $this;
    }

    /**
     * Group is the API group name this server hosts
     */
    public function getGroup(): ?string
    {
        return $this->spec->getGroup();
    }

    /**
     * Group is the API group name this server hosts
     *
     * @return static
     */
    public function setGroup(string $group)
    {
        $this->spec->setGroup($group);

        return $this;
    }

    /**
     * GroupPriorityMininum is the priority this group should have at least. Higher priority means that the
     * group is preferred by clients over lower priority ones. Note that other versions of this group might
     * specify even higher GroupPriorityMininum values such that the whole group gets a higher priority.
     * The primary sort is based on GroupPriorityMinimum, ordered highest number to lowest (20 before 10).
     * The secondary sort is based on the alphabetical comparison of the name of the object.  (v1.bar
     * before v1.foo) We'd recommend something like: *.k8s.io (except extensions) at 18000 and PaaSes
     * (OpenShift, Deis) are recommended to be in the 2000s
     */
    public function getGroupPriorityMinimum(): int
    {
        return $this->spec->getGroupPriorityMinimum();
    }

    /**
     * GroupPriorityMininum is the priority this group should have at least. Higher priority means that the
     * group is preferred by clients over lower priority ones. Note that other versions of this group might
     * specify even higher GroupPriorityMininum values such that the whole group gets a higher priority.
     * The primary sort is based on GroupPriorityMinimum, ordered highest number to lowest (20 before 10).
     * The secondary sort is based on the alphabetical comparison of the name of the object.  (v1.bar
     * before v1.foo) We'd recommend something like: *.k8s.io (except extensions) at 18000 and PaaSes
     * (OpenShift, Deis) are recommended to be in the 2000s
     *
     * @return static
     */
    public function setGroupPriorityMinimum(int $groupPriorityMinimum)
    {
        $this->spec->setGroupPriorityMinimum($groupPriorityMinimum);

        return $this;
    }

    /**
     * InsecureSkipTLSVerify disables TLS certificate verification when communicating with this server.
     * This is strongly discouraged.  You should use the CABundle instead.
     */
    public function isInsecureSkipTLSVerify(): ?bool
    {
        return $this->spec->isInsecureSkipTLSVerify();
    }

    /**
     * InsecureSkipTLSVerify disables TLS certificate verification when communicating with this server.
     * This is strongly discouraged.  You should use the CABundle instead.
     *
     * @return static
     */
    public function setIsInsecureSkipTLSVerify(bool $insecureSkipTLSVerify)
    {
        $this->spec->setIsInsecureSkipTLSVerify($insecureSkipTLSVerify);

        return $this;
    }

    /**
     * Service is a reference to the service for this API server.  It must communicate on port 443 If the
     * Service is nil, that means the handling for the API groupversion is handled locally on this server.
     * The call will simply delegate to the normal handler chain to be fulfilled.
     */
    public function getService(): ServiceReference
    {
        return $this->spec->getService();
    }

    /**
     * Service is a reference to the service for this API server.  It must communicate on port 443 If the
     * Service is nil, that means the handling for the API groupversion is handled locally on this server.
     * The call will simply delegate to the normal handler chain to be fulfilled.
     *
     * @return static
     */
    public function setService(ServiceReference $service)
    {
        $this->spec->setService($service);

        return $this;
    }

    /**
     * Version is the API version this server hosts.  For example, "v1"
     */
    public function getVersion(): ?string
    {
        return $this->spec->getVersion();
    }

    /**
     * Version is the API version this server hosts.  For example, "v1"
     *
     * @return static
     */
    public function setVersion(string $version)
    {
        $this->spec->setVersion($version);

        return $this;
    }

    /**
     * VersionPriority controls the ordering of this API version inside of its group.  Must be greater than
     * zero. The primary sort is based on VersionPriority, ordered highest to lowest (20 before 10). Since
     * it's inside of a group, the number can be small, probably in the 10s. In case of equal version
     * priorities, the version string will be used to compute the order inside a group. If the version
     * string is "kube-like", it will sort above non "kube-like" version strings, which are ordered
     * lexicographically. "Kube-like" versions start with a "v", then are followed by a number (the major
     * version), then optionally the string "alpha" or "beta" and another number (the minor version). These
     * are sorted first by GA > beta > alpha (where GA is a version with no suffix such as beta or alpha),
     * and then by comparing major version, then minor version. An example sorted list of versions: v10,
     * v2, v1, v11beta2, v10beta3, v3beta1, v12alpha1, v11alpha2, foo1, foo10.
     */
    public function getVersionPriority(): int
    {
        return $this->spec->getVersionPriority();
    }

    /**
     * VersionPriority controls the ordering of this API version inside of its group.  Must be greater than
     * zero. The primary sort is based on VersionPriority, ordered highest to lowest (20 before 10). Since
     * it's inside of a group, the number can be small, probably in the 10s. In case of equal version
     * priorities, the version string will be used to compute the order inside a group. If the version
     * string is "kube-like", it will sort above non "kube-like" version strings, which are ordered
     * lexicographically. "Kube-like" versions start with a "v", then are followed by a number (the major
     * version), then optionally the string "alpha" or "beta" and another number (the minor version). These
     * are sorted first by GA > beta > alpha (where GA is a version with no suffix such as beta or alpha),
     * and then by comparing major version, then minor version. An example sorted list of versions: v10,
     * v2, v1, v11beta2, v10beta3, v3beta1, v12alpha1, v11alpha2, foo1, foo10.
     *
     * @return static
     */
    public function setVersionPriority(int $versionPriority)
    {
        $this->spec->setVersionPriority($versionPriority);

        return $this;
    }

    /**
     * Current service state of apiService.
     *
     * @return iterable|APIServiceCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->status->getConditions();
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

    public function getMetadata(): ObjectMeta
    {
        return $this->metadata;
    }

    /**
     * @return static
     */
    public function setMetadata(ObjectMeta $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Spec contains information for locating and communicating with a server
     */
    public function getSpec(): APIServiceSpec
    {
        return $this->spec;
    }

    /**
     * Spec contains information for locating and communicating with a server
     *
     * @return static
     */
    public function setSpec(APIServiceSpec $spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * Status contains derived information about an API server
     */
    public function getStatus(): ?APIServiceStatus
    {
        return $this->status;
    }

    /**
     * Status contains derived information about an API server
     *
     * @return static
     */
    public function setStatus(APIServiceStatus $status)
    {
        $this->status = $status;

        return $this;
    }
}
