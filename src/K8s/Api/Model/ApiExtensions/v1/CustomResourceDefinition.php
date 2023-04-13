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

namespace K8s\Api\Model\ApiExtensions\v1;

use DateTimeInterface;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ManagedFieldsEntry;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\OwnerReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * CustomResourceDefinition represents a resource that should be exposed on the API server.  Its name
 * MUST be in the format <.spec.name>.<.spec.group>.
 *
 * @Kubernetes\Kind("CustomResourceDefinition",group="apiextensions.k8s.io",version="v1")
 * @Kubernetes\Operation("get",path="/apis/apiextensions.k8s.io/v1/customresourcedefinitions/{name}",response="static::class")
 * @Kubernetes\Operation("get-status",path="/apis/apiextensions.k8s.io/v1/customresourcedefinitions/{name}/status",response="static::class")
 * @Kubernetes\Operation("post",path="/apis/apiextensions.k8s.io/v1/customresourcedefinitions",body="model",response="static::class")
 * @Kubernetes\Operation("delete",path="/apis/apiextensions.k8s.io/v1/customresourcedefinitions/{name}",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("put",path="/apis/apiextensions.k8s.io/v1/customresourcedefinitions/{name}",body="model",response="static::class")
 * @Kubernetes\Operation("put-status",path="/apis/apiextensions.k8s.io/v1/customresourcedefinitions/{name}/status",body="model",response="static::class")
 * @Kubernetes\Operation("deletecollection-all",path="/apis/apiextensions.k8s.io/v1/customresourcedefinitions",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch-all",path="/apis/apiextensions.k8s.io/v1/customresourcedefinitions",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("patch",path="/apis/apiextensions.k8s.io/v1/customresourcedefinitions/{name}",body="patch",response="static::class")
 * @Kubernetes\Operation("patch-status",path="/apis/apiextensions.k8s.io/v1/customresourcedefinitions/{name}/status",body="patch",response="static::class")
 * @Kubernetes\Operation("list-all",path="/apis/apiextensions.k8s.io/v1/customresourcedefinitions",response="K8s\Api\Model\ApiExtensions\v1\CustomResourceDefinitionList")
 */
class CustomResourceDefinition
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string
     */
    protected $apiVersion = 'apiextensions.k8s.io/v1';

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
     * @param iterable|CustomResourceDefinitionVersion[] $versions
     */
    public function __construct(?string $name, string $group, CustomResourceDefinitionNames $names, string $scope, iterable $versions)
    {
        $this->metadata = new ObjectMeta($name);
        $this->spec = new CustomResourceDefinitionSpec($group, $names, $scope, $versions);
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
     * CreationTimestamp is a timestamp representing the server time when this object was created. It is
     * not guaranteed to be set in happens-before order across separate operations. Clients may not set
     * this value. It is represented in RFC3339 form and is in UTC.
     *
     * Populated by the system. Read-only. Null for lists. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
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
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public function getDeletionTimestamp(): ?DateTimeInterface
    {
        return $this->metadata->getDeletionTimestamp();
    }

    /**
     * Must be empty before the object is deleted from the registry. Each entry is an identifier for the
     * responsible component that will remove the entry from the list. If the deletionTimestamp of the
     * object is non-nil, entries in this list can only be removed. Finalizers may be processed and removed
     * in any order.  Order is NOT enforced because it introduces significant risk of stuck finalizers.
     * finalizers is a shared field, any actor with permission can reorder it. If the finalizer list is
     * processed in order, then this can lead to a situation in which the component responsible for the
     * first finalizer in the list is waiting for a signal (field value, external system, or other)
     * produced by a component responsible for a finalizer later in the list, resulting in a deadlock.
     * Without enforced ordering finalizers are free to order amongst themselves and are not vulnerable to
     * ordering changes in the list.
     */
    public function getFinalizers(): ?array
    {
        return $this->metadata->getFinalizers();
    }

    /**
     * Must be empty before the object is deleted from the registry. Each entry is an identifier for the
     * responsible component that will remove the entry from the list. If the deletionTimestamp of the
     * object is non-nil, entries in this list can only be removed. Finalizers may be processed and removed
     * in any order.  Order is NOT enforced because it introduces significant risk of stuck finalizers.
     * finalizers is a shared field, any actor with permission can reorder it. If the finalizer list is
     * processed in order, then this can lead to a situation in which the component responsible for the
     * first finalizer in the list is waiting for a signal (field value, external system, or other)
     * produced by a component responsible for a finalizer later in the list, resulting in a deadlock.
     * Without enforced ordering finalizers are free to order amongst themselves and are not vulnerable to
     * ordering changes in the list.
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
     * If this field is specified and the generated name exists, the server will return a 409.
     *
     * Applied only if Name is not specified. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#idempotency
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
     * If this field is specified and the generated name exists, the server will return a 409.
     *
     * Applied only if Name is not specified. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#idempotency
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
     * Namespace defines the space within which each name must be unique. An empty namespace is equivalent
     * to the "default" namespace, but "default" is the canonical representation. Not all objects are
     * required to be scoped to a namespace - the value of this field for those objects will be empty.
     *
     * Must be a DNS_LABEL. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/namespaces
     */
    public function getNamespace(): ?string
    {
        return $this->metadata->getNamespace();
    }

    /**
     * Namespace defines the space within which each name must be unique. An empty namespace is equivalent
     * to the "default" namespace, but "default" is the canonical representation. Not all objects are
     * required to be scoped to a namespace - the value of this field for those objects will be empty.
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
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#concurrency-control-and-consistency
     */
    public function getResourceVersion(): ?string
    {
        return $this->metadata->getResourceVersion();
    }

    /**
     * Deprecated: selfLink is a legacy read-only field that is no longer populated by the system.
     */
    public function getSelfLink(): ?string
    {
        return $this->metadata->getSelfLink();
    }

    /**
     * Deprecated: selfLink is a legacy read-only field that is no longer populated by the system.
     *
     * @return static
     */
    public function setSelfLink(string $selfLink)
    {
        $this->metadata->setSelfLink($selfLink);

        return $this;
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
     * conversion defines conversion settings for the CRD.
     */
    public function getConversion(): ?CustomResourceConversion
    {
        return $this->spec->getConversion();
    }

    /**
     * conversion defines conversion settings for the CRD.
     *
     * @return static
     */
    public function setConversion(CustomResourceConversion $conversion)
    {
        $this->spec->setConversion($conversion);

        return $this;
    }

    /**
     * group is the API group of the defined custom resource. The custom resources are served under
     * `/apis/<group>/...`. Must match the name of the CustomResourceDefinition (in the form
     * `<names.plural>.<group>`).
     */
    public function getGroup(): string
    {
        return $this->spec->getGroup();
    }

    /**
     * group is the API group of the defined custom resource. The custom resources are served under
     * `/apis/<group>/...`. Must match the name of the CustomResourceDefinition (in the form
     * `<names.plural>.<group>`).
     *
     * @return static
     */
    public function setGroup(string $group)
    {
        $this->spec->setGroup($group);

        return $this;
    }

    /**
     * names specify the resource and kind names for the custom resource.
     */
    public function getNames(): CustomResourceDefinitionNames
    {
        return $this->spec->getNames();
    }

    /**
     * names specify the resource and kind names for the custom resource.
     *
     * @return static
     */
    public function setNames(CustomResourceDefinitionNames $names)
    {
        $this->spec->setNames($names);

        return $this;
    }

    /**
     * preserveUnknownFields indicates that object fields which are not specified in the OpenAPI schema
     * should be preserved when persisting to storage. apiVersion, kind, metadata and known fields inside
     * metadata are always preserved. This field is deprecated in favor of setting
     * `x-preserve-unknown-fields` to true in `spec.versions[*].schema.openAPIV3Schema`. See
     * https://kubernetes.io/docs/tasks/access-kubernetes-api/custom-resources/custom-resource-definitions/#pruning-versus-preserving-unknown-fields
     * for details.
     */
    public function isPreserveUnknownFields(): ?bool
    {
        return $this->spec->isPreserveUnknownFields();
    }

    /**
     * preserveUnknownFields indicates that object fields which are not specified in the OpenAPI schema
     * should be preserved when persisting to storage. apiVersion, kind, metadata and known fields inside
     * metadata are always preserved. This field is deprecated in favor of setting
     * `x-preserve-unknown-fields` to true in `spec.versions[*].schema.openAPIV3Schema`. See
     * https://kubernetes.io/docs/tasks/access-kubernetes-api/custom-resources/custom-resource-definitions/#pruning-versus-preserving-unknown-fields
     * for details.
     *
     * @return static
     */
    public function setIsPreserveUnknownFields(bool $preserveUnknownFields)
    {
        $this->spec->setIsPreserveUnknownFields($preserveUnknownFields);

        return $this;
    }

    /**
     * scope indicates whether the defined custom resource is cluster- or namespace-scoped. Allowed values
     * are `Cluster` and `Namespaced`.
     */
    public function getScope(): string
    {
        return $this->spec->getScope();
    }

    /**
     * scope indicates whether the defined custom resource is cluster- or namespace-scoped. Allowed values
     * are `Cluster` and `Namespaced`.
     *
     * @return static
     */
    public function setScope(string $scope)
    {
        $this->spec->setScope($scope);

        return $this;
    }

    /**
     * versions is the list of all API versions of the defined custom resource. Version names are used to
     * compute the order in which served versions are listed in API discovery. If the version string is
     * "kube-like", it will sort above non "kube-like" version strings, which are ordered
     * lexicographically. "Kube-like" versions start with a "v", then are followed by a number (the major
     * version), then optionally the string "alpha" or "beta" and another number (the minor version). These
     * are sorted first by GA > beta > alpha (where GA is a version with no suffix such as beta or alpha),
     * and then by comparing major version, then minor version. An example sorted list of versions: v10,
     * v2, v1, v11beta2, v10beta3, v3beta1, v12alpha1, v11alpha2, foo1, foo10.
     *
     * @return iterable|CustomResourceDefinitionVersion[]
     */
    public function getVersions(): iterable
    {
        return $this->spec->getVersions();
    }

    /**
     * versions is the list of all API versions of the defined custom resource. Version names are used to
     * compute the order in which served versions are listed in API discovery. If the version string is
     * "kube-like", it will sort above non "kube-like" version strings, which are ordered
     * lexicographically. "Kube-like" versions start with a "v", then are followed by a number (the major
     * version), then optionally the string "alpha" or "beta" and another number (the minor version). These
     * are sorted first by GA > beta > alpha (where GA is a version with no suffix such as beta or alpha),
     * and then by comparing major version, then minor version. An example sorted list of versions: v10,
     * v2, v1, v11beta2, v10beta3, v3beta1, v12alpha1, v11alpha2, foo1, foo10.
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
     * acceptedNames are the names that are actually being used to serve discovery. They may be different
     * than the names in spec.
     */
    public function getAcceptedNames(): ?CustomResourceDefinitionNames
    {
        return $this->status->getAcceptedNames();
    }

    /**
     * conditions indicate state for particular aspects of a CustomResourceDefinition
     *
     * @return iterable|CustomResourceDefinitionCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->status->getConditions();
    }

    /**
     * storedVersions lists all versions of CustomResources that were ever persisted. Tracking these
     * versions allows a migration path for stored versions in etcd. The field is mutable so a migration
     * controller can finish a migration to another version (ensuring no old objects are left in storage),
     * and then remove the rest of the versions from this list. Versions may not be removed from
     * `spec.versions` while they exist in this list.
     */
    public function getStoredVersions(): ?array
    {
        return $this->status->getStoredVersions();
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public function getApiVersion(): string
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
    public function getKind(): string
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
     * Standard object's metadata More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public function getMetadata(): ObjectMeta
    {
        return $this->metadata;
    }

    /**
     * Standard object's metadata More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @return static
     */
    public function setMetadata(ObjectMeta $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * spec describes how the user wants the resources to appear
     */
    public function getSpec(): CustomResourceDefinitionSpec
    {
        return $this->spec;
    }

    /**
     * spec describes how the user wants the resources to appear
     *
     * @return static
     */
    public function setSpec(CustomResourceDefinitionSpec $spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * status indicates the actual state of the CustomResourceDefinition
     */
    public function getStatus(): ?CustomResourceDefinitionStatus
    {
        return $this->status;
    }

    /**
     * status indicates the actual state of the CustomResourceDefinition
     *
     * @return static
     */
    public function setStatus(CustomResourceDefinitionStatus $status)
    {
        $this->status = $status;

        return $this;
    }
}
