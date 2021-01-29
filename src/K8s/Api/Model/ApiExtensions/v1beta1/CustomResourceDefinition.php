<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.13.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1beta1;

use DateTimeInterface;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Initializers;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\OwnerReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * CustomResourceDefinition represents a resource that should be exposed on the API server.  Its name
 * MUST be in the format <.spec.name>.<.spec.group>.
 *
 * @Kubernetes\Kind("CustomResourceDefinition",group="apiextensions.k8s.io",version="v1beta1")
 * @Kubernetes\Operation("get",path="/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{name}",response="static::class")
 * @Kubernetes\Operation("post",path="/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions",body="model",response="static::class")
 * @Kubernetes\Operation("delete",path="/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{name}",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("put",path="/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{name}",body="model",response="static::class")
 * @Kubernetes\Operation("put-status",path="/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{name}/status",body="model",response="static::class")
 * @Kubernetes\Operation("deletecollection-all",path="/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch-all",path="/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("patch",path="/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{name}",body="patch",response="static::class")
 * @Kubernetes\Operation("list-all",path="/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions",response="K8s\Api\Model\ApiExtensions\v1beta1\CustomResourceDefinitionList")
 */
class CustomResourceDefinition
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string
     */
    protected $apiVersion = 'apiextensions.k8s.io/v1beta1';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string
     */
    protected $kind = 'CustomResourceDefinition';

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ObjectMeta::class)
     * @var ObjectMeta
     */
    protected $metadata;

    /**
     * @Kubernetes\Attribute("spec",type="model",model=CustomResourceDefinitionSpec::class,isRequired=true)
     * @var CustomResourceDefinitionSpec
     */
    protected $spec;

    /**
     * @Kubernetes\Attribute("status",type="model",model=CustomResourceDefinitionStatus::class)
     * @var CustomResourceDefinitionStatus|null
     */
    protected $status = null;

    /**
     * @param string $group
     * @param CustomResourceDefinitionNames $names
     * @param string $scope
     */
    public function __construct(?string $name, string $group, CustomResourceDefinitionNames $names, string $scope)
    {
        $this->metadata = new ObjectMeta($name);
        $this->spec = new CustomResourceDefinitionSpec($group, $names, $scope);
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
     * AdditionalPrinterColumns are additional columns shown e.g. in kubectl next to the name. Defaults to
     * a created-at column. Optional, the global columns for all versions. Top-level and per-version
     * columns are mutually exclusive.
     *
     * @return iterable|CustomResourceColumnDefinition[]
     */
    public function getAdditionalPrinterColumns(): ?iterable
    {
        return $this->spec->getAdditionalPrinterColumns();
    }

    /**
     * AdditionalPrinterColumns are additional columns shown e.g. in kubectl next to the name. Defaults to
     * a created-at column. Optional, the global columns for all versions. Top-level and per-version
     * columns are mutually exclusive.
     *
     * @return static
     */
    public function setAdditionalPrinterColumns(iterable $additionalPrinterColumns)
    {
        $this->spec->setAdditionalPrinterColumns($additionalPrinterColumns);

        return $this;
    }

    /**
     * @return static
     */
    public function addAdditionalPrinterColumns(CustomResourceColumnDefinition $additionalPrinterColumn)
    {
        $this->spec->addAdditionalPrinterColumns($additionalPrinterColumn);

        return $this;
    }

    /**
     * `conversion` defines conversion settings for the CRD.
     */
    public function getConversion(): ?CustomResourceConversion
    {
        return $this->spec->getConversion();
    }

    /**
     * `conversion` defines conversion settings for the CRD.
     *
     * @return static
     */
    public function setConversion(CustomResourceConversion $conversion)
    {
        $this->spec->setConversion($conversion);

        return $this;
    }

    /**
     * Group is the group this resource belongs in
     */
    public function getGroup(): string
    {
        return $this->spec->getGroup();
    }

    /**
     * Group is the group this resource belongs in
     *
     * @return static
     */
    public function setGroup(string $group)
    {
        $this->spec->setGroup($group);

        return $this;
    }

    /**
     * Names are the names used to describe this custom resource
     */
    public function getNames(): CustomResourceDefinitionNames
    {
        return $this->spec->getNames();
    }

    /**
     * Names are the names used to describe this custom resource
     *
     * @return static
     */
    public function setNames(CustomResourceDefinitionNames $names)
    {
        $this->spec->setNames($names);

        return $this;
    }

    /**
     * Scope indicates whether this resource is cluster or namespace scoped.  Default is namespaced
     */
    public function getScope(): string
    {
        return $this->spec->getScope();
    }

    /**
     * Scope indicates whether this resource is cluster or namespace scoped.  Default is namespaced
     *
     * @return static
     */
    public function setScope(string $scope)
    {
        $this->spec->setScope($scope);

        return $this;
    }

    /**
     * Subresources describes the subresources for CustomResource Optional, the global subresources for all
     * versions. Top-level and per-version subresources are mutually exclusive.
     */
    public function getSubresources(): ?CustomResourceSubresources
    {
        return $this->spec->getSubresources();
    }

    /**
     * Subresources describes the subresources for CustomResource Optional, the global subresources for all
     * versions. Top-level and per-version subresources are mutually exclusive.
     *
     * @return static
     */
    public function setSubresources(CustomResourceSubresources $subresources)
    {
        $this->spec->setSubresources($subresources);

        return $this;
    }

    /**
     * Validation describes the validation methods for CustomResources Optional, the global validation
     * schema for all versions. Top-level and per-version schemas are mutually exclusive.
     */
    public function getValidation(): ?CustomResourceValidation
    {
        return $this->spec->getValidation();
    }

    /**
     * Validation describes the validation methods for CustomResources Optional, the global validation
     * schema for all versions. Top-level and per-version schemas are mutually exclusive.
     *
     * @return static
     */
    public function setValidation(CustomResourceValidation $validation)
    {
        $this->spec->setValidation($validation);

        return $this;
    }

    /**
     * Version is the version this resource belongs in Should be always first item in Versions field if
     * provided. Optional, but at least one of Version or Versions must be set. Deprecated: Please use
     * `Versions`.
     */
    public function getVersion(): ?string
    {
        return $this->spec->getVersion();
    }

    /**
     * Version is the version this resource belongs in Should be always first item in Versions field if
     * provided. Optional, but at least one of Version or Versions must be set. Deprecated: Please use
     * `Versions`.
     *
     * @return static
     */
    public function setVersion(string $version)
    {
        $this->spec->setVersion($version);

        return $this;
    }

    /**
     * Versions is the list of all supported versions for this resource. If Version field is provided, this
     * field is optional. Validation: All versions must use the same validation schema for now. i.e., top
     * level Validation field is applied to all of these versions. Order: The version name will be used to
     * compute the order. If the version string is "kube-like", it will sort above non "kube-like" version
     * strings, which are ordered lexicographically. "Kube-like" versions start with a "v", then are
     * followed by a number (the major version), then optionally the string "alpha" or "beta" and another
     * number (the minor version). These are sorted first by GA > beta > alpha (where GA is a version with
     * no suffix such as beta or alpha), and then by comparing major version, then minor version. An
     * example sorted list of versions: v10, v2, v1, v11beta2, v10beta3, v3beta1, v12alpha1, v11alpha2,
     * foo1, foo10.
     *
     * @return iterable|CustomResourceDefinitionVersion[]
     */
    public function getVersions(): ?iterable
    {
        return $this->spec->getVersions();
    }

    /**
     * Versions is the list of all supported versions for this resource. If Version field is provided, this
     * field is optional. Validation: All versions must use the same validation schema for now. i.e., top
     * level Validation field is applied to all of these versions. Order: The version name will be used to
     * compute the order. If the version string is "kube-like", it will sort above non "kube-like" version
     * strings, which are ordered lexicographically. "Kube-like" versions start with a "v", then are
     * followed by a number (the major version), then optionally the string "alpha" or "beta" and another
     * number (the minor version). These are sorted first by GA > beta > alpha (where GA is a version with
     * no suffix such as beta or alpha), and then by comparing major version, then minor version. An
     * example sorted list of versions: v10, v2, v1, v11beta2, v10beta3, v3beta1, v12alpha1, v11alpha2,
     * foo1, foo10.
     *
     * @return static
     */
    public function setVersions(iterable $versions)
    {
        $this->spec->setVersions($versions);

        return $this;
    }

    /**
     * @return static
     */
    public function addVersions(CustomResourceDefinitionVersion $version)
    {
        $this->spec->addVersions($version);

        return $this;
    }

    /**
     * AcceptedNames are the names that are actually being used to serve discovery They may be different
     * than the names in spec.
     */
    public function getAcceptedNames(): CustomResourceDefinitionNames
    {
        return $this->status->getAcceptedNames();
    }

    /**
     * Conditions indicate state for particular aspects of a CustomResourceDefinition
     *
     * @return iterable|CustomResourceDefinitionCondition[]
     */
    public function getConditions(): iterable
    {
        return $this->status->getConditions();
    }

    /**
     * StoredVersions are all versions of CustomResources that were ever persisted. Tracking these versions
     * allows a migration path for stored versions in etcd. The field is mutable so the migration
     * controller can first finish a migration to another version (i.e. that no old objects are left in the
     * storage), and then remove the rest of the versions from this list. None of the versions in this list
     * can be removed from the spec.Versions field.
     */
    public function getStoredVersions(): array
    {
        return $this->status->getStoredVersions();
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
     * Spec describes how the user wants the resources to appear
     */
    public function getSpec(): CustomResourceDefinitionSpec
    {
        return $this->spec;
    }

    /**
     * Spec describes how the user wants the resources to appear
     *
     * @return static
     */
    public function setSpec(CustomResourceDefinitionSpec $spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * Status indicates the actual state of the CustomResourceDefinition
     */
    public function getStatus(): ?CustomResourceDefinitionStatus
    {
        return $this->status;
    }

    /**
     * Status indicates the actual state of the CustomResourceDefinition
     *
     * @return static
     */
    public function setStatus(CustomResourceDefinitionStatus $status)
    {
        $this->status = $status;

        return $this;
    }
}
