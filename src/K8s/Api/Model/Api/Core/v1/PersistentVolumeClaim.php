<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.11
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use DateTimeInterface;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ManagedFieldsEntry;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\OwnerReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * PersistentVolumeClaim is a user's request for and claim to a persistent volume
 *
 * @Kubernetes\Kind("PersistentVolumeClaim",version="v1")
 * @Kubernetes\Operation("get",path="/api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}",response="static::class")
 * @Kubernetes\Operation("get-status",path="/api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}/status",response="static::class")
 * @Kubernetes\Operation("post",path="/api/v1/namespaces/{namespace}/persistentvolumeclaims",body="model",response="static::class")
 * @Kubernetes\Operation("delete",path="/api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}",response="static::class")
 * @Kubernetes\Operation("watch",path="/api/v1/namespaces/{namespace}/persistentvolumeclaims",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("put",path="/api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}",body="model",response="static::class")
 * @Kubernetes\Operation("put-status",path="/api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}/status",body="model",response="static::class")
 * @Kubernetes\Operation("deletecollection",path="/api/v1/namespaces/{namespace}/persistentvolumeclaims",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch-all",path="/api/v1/persistentvolumeclaims",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("patch",path="/api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}",body="patch",response="static::class")
 * @Kubernetes\Operation("patch-status",path="/api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}/status",body="patch",response="static::class")
 * @Kubernetes\Operation("list",path="/api/v1/namespaces/{namespace}/persistentvolumeclaims",response="K8s\Api\Model\Api\Core\v1\PersistentVolumeClaimList")
 * @Kubernetes\Operation("list-all",path="/api/v1/persistentvolumeclaims",response="K8s\Api\Model\Api\Core\v1\PersistentVolumeClaimList")
 */
class PersistentVolumeClaim
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
    protected $kind = 'PersistentVolumeClaim';

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ObjectMeta::class)
     * @var ObjectMeta
     */
    protected $metadata;

    /**
     * @Kubernetes\Attribute("spec",type="model",model=PersistentVolumeClaimSpec::class)
     * @var PersistentVolumeClaimSpec
     */
    protected $spec;

    /**
     * @Kubernetes\Attribute("status",type="model",model=PersistentVolumeClaimStatus::class)
     * @var PersistentVolumeClaimStatus|null
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
     * If this field is specified and the generated name exists, the server will NOT return a 409 -
     * instead, it will either return 201 Created or 500 with Reason ServerTimeout indicating a unique name
     * could not be found in the time allotted, and the client should retry (optionally after the time
     * indicated in the Retry-After header).
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
     * If this field is specified and the generated name exists, the server will NOT return a 409 -
     * instead, it will either return 201 Created or 500 with Reason ServerTimeout indicating a unique name
     * could not be found in the time allotted, and the client should retry (optionally after the time
     * indicated in the Retry-After header).
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
     * SelfLink is a URL representing this object. Populated by the system. Read-only.
     *
     * DEPRECATED Kubernetes will stop propagating this field in 1.20 release and the field is planned to
     * be removed in 1.21 release.
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
     * AccessModes contains the actual access modes the volume backing the PVC has. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     */
    public function getAccessModes(): ?array
    {
        return $this->status->getAccessModes();
    }

    /**
     * AccessModes contains the desired access modes the volume should have. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     *
     * @return static
     */
    public function setAccessModes(array $accessModes)
    {
        $this->spec->setAccessModes($accessModes);

        return $this;
    }

    /**
     * This field can be used to specify either: * An existing VolumeSnapshot object
     * (snapshot.storage.k8s.io/VolumeSnapshot) * An existing PVC (PersistentVolumeClaim) * An existing
     * custom resource that implements data population (Alpha) In order to use custom resource types that
     * implement data population, the AnyVolumeDataSource feature gate must be enabled. If the provisioner
     * or an external controller can support the specified data source, it will create a new volume based
     * on the contents of the specified data source.
     */
    public function getDataSource(): ?TypedLocalObjectReference
    {
        return $this->spec->getDataSource();
    }

    /**
     * This field can be used to specify either: * An existing VolumeSnapshot object
     * (snapshot.storage.k8s.io/VolumeSnapshot) * An existing PVC (PersistentVolumeClaim) * An existing
     * custom resource that implements data population (Alpha) In order to use custom resource types that
     * implement data population, the AnyVolumeDataSource feature gate must be enabled. If the provisioner
     * or an external controller can support the specified data source, it will create a new volume based
     * on the contents of the specified data source.
     *
     * @return static
     */
    public function setDataSource(TypedLocalObjectReference $dataSource)
    {
        $this->spec->setDataSource($dataSource);

        return $this;
    }

    /**
     * Resources represents the minimum resources the volume should have. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources
     */
    public function getResources(): ?ResourceRequirements
    {
        return $this->spec->getResources();
    }

    /**
     * Resources represents the minimum resources the volume should have. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources
     *
     * @return static
     */
    public function setResources(ResourceRequirements $resources)
    {
        $this->spec->setResources($resources);

        return $this;
    }

    /**
     * A label query over volumes to consider for binding.
     */
    public function getSelector(): ?LabelSelector
    {
        return $this->spec->getSelector();
    }

    /**
     * A label query over volumes to consider for binding.
     *
     * @return static
     */
    public function setSelector(LabelSelector $selector)
    {
        $this->spec->setSelector($selector);

        return $this;
    }

    /**
     * Name of the StorageClass required by the claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#class-1
     */
    public function getStorageClassName(): ?string
    {
        return $this->spec->getStorageClassName();
    }

    /**
     * Name of the StorageClass required by the claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#class-1
     *
     * @return static
     */
    public function setStorageClassName(string $storageClassName)
    {
        $this->spec->setStorageClassName($storageClassName);

        return $this;
    }

    /**
     * volumeMode defines what type of volume is required by the claim. Value of Filesystem is implied when
     * not included in claim spec.
     */
    public function getVolumeMode(): ?string
    {
        return $this->spec->getVolumeMode();
    }

    /**
     * volumeMode defines what type of volume is required by the claim. Value of Filesystem is implied when
     * not included in claim spec.
     *
     * @return static
     */
    public function setVolumeMode(string $volumeMode)
    {
        $this->spec->setVolumeMode($volumeMode);

        return $this;
    }

    /**
     * VolumeName is the binding reference to the PersistentVolume backing this claim.
     */
    public function getVolumeName(): ?string
    {
        return $this->spec->getVolumeName();
    }

    /**
     * VolumeName is the binding reference to the PersistentVolume backing this claim.
     *
     * @return static
     */
    public function setVolumeName(string $volumeName)
    {
        $this->spec->setVolumeName($volumeName);

        return $this;
    }

    /**
     * Represents the actual resources of the underlying volume.
     */
    public function getCapacity(): ?array
    {
        return $this->status->getCapacity();
    }

    /**
     * Current Condition of persistent volume claim. If underlying persistent volume is being resized then
     * the Condition will be set to 'ResizeStarted'.
     *
     * @return iterable|PersistentVolumeClaimCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->status->getConditions();
    }

    /**
     * Phase represents the current phase of PersistentVolumeClaim.
     */
    public function getPhase(): ?string
    {
        return $this->status->getPhase();
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
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public function getMetadata(): ObjectMeta
    {
        return $this->metadata;
    }

    /**
     * Standard object's metadata. More info:
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
     * Spec defines the desired characteristics of a volume requested by a pod author. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     */
    public function getSpec(): PersistentVolumeClaimSpec
    {
        return $this->spec;
    }

    /**
     * Spec defines the desired characteristics of a volume requested by a pod author. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     *
     * @return static
     */
    public function setSpec(PersistentVolumeClaimSpec $spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * Status represents the current information/status of a persistent volume claim. Read-only. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     */
    public function getStatus(): ?PersistentVolumeClaimStatus
    {
        return $this->status;
    }
}
