<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.22.4
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Storage\v1alpha1;

use DateTimeInterface;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ManagedFieldsEntry;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\OwnerReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * CSIStorageCapacity stores the result of one CSI GetCapacity call. For a given StorageClass, this
 * describes the available capacity in a particular topology segment.  This can be used when
 * considering where to instantiate new PersistentVolumes.
 *
 * For example this can express things like: - StorageClass "standard" has "1234 GiB" available in
 * "topology.kubernetes.io/zone=us-east1" - StorageClass "localssd" has "10 GiB" available in
 * "kubernetes.io/hostname=knode-abc123"
 *
 * The following three cases all imply that no capacity is available for a certain combination: - no
 * object exists with suitable topology and storage class name - such an object exists, but the
 * capacity is unset - such an object exists, but the capacity is zero
 *
 * The producer of these objects can decide which approach is more suitable.
 *
 * They are consumed by the kube-scheduler if the CSIStorageCapacity beta feature gate is enabled there
 * and a CSI driver opts into capacity-aware scheduling with CSIDriver.StorageCapacity.
 *
 * @Kubernetes\Kind("CSIStorageCapacity",group="storage.k8s.io",version="v1alpha1")
 * @Kubernetes\Operation("get",path="/apis/storage.k8s.io/v1alpha1/namespaces/{namespace}/csistoragecapacities/{name}",response="static::class")
 * @Kubernetes\Operation("post",path="/apis/storage.k8s.io/v1alpha1/namespaces/{namespace}/csistoragecapacities",body="model",response="static::class")
 * @Kubernetes\Operation("delete",path="/apis/storage.k8s.io/v1alpha1/namespaces/{namespace}/csistoragecapacities/{name}",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch",path="/apis/storage.k8s.io/v1alpha1/namespaces/{namespace}/csistoragecapacities",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("put",path="/apis/storage.k8s.io/v1alpha1/namespaces/{namespace}/csistoragecapacities/{name}",body="model",response="static::class")
 * @Kubernetes\Operation("deletecollection",path="/apis/storage.k8s.io/v1alpha1/namespaces/{namespace}/csistoragecapacities",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch-all",path="/apis/storage.k8s.io/v1alpha1/csistoragecapacities",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("patch",path="/apis/storage.k8s.io/v1alpha1/namespaces/{namespace}/csistoragecapacities/{name}",body="patch",response="static::class")
 * @Kubernetes\Operation("list",path="/apis/storage.k8s.io/v1alpha1/namespaces/{namespace}/csistoragecapacities",response="K8s\Api\Model\Api\Storage\v1alpha1\CSIStorageCapacityList")
 * @Kubernetes\Operation("list-all",path="/apis/storage.k8s.io/v1alpha1/csistoragecapacities",response="K8s\Api\Model\Api\Storage\v1alpha1\CSIStorageCapacityList")
 */
class CSIStorageCapacity
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string|null
     */
    protected $apiVersion = 'storage.k8s.io/v1alpha1';

    /**
     * @Kubernetes\Attribute("capacity")
     * @var string|null
     */
    protected $capacity = null;

    /**
     * @Kubernetes\Attribute("kind")
     * @var string|null
     */
    protected $kind = 'CSIStorageCapacity';

    /**
     * @Kubernetes\Attribute("maximumVolumeSize")
     * @var string|null
     */
    protected $maximumVolumeSize = null;

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ObjectMeta::class)
     * @var ObjectMeta|null
     */
    protected $metadata = null;

    /**
     * @Kubernetes\Attribute("nodeTopology",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $nodeTopology = null;

    /**
     * @Kubernetes\Attribute("storageClassName",isRequired=true)
     * @var string
     */
    protected $storageClassName;

    /**
     * @param string $storageClassName
     */
    public function __construct(?string $name, string $storageClassName)
    {
        $this->metadata = new ObjectMeta($name);
        $this->storageClassName = $storageClassName;
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
     * Capacity is the value reported by the CSI driver in its GetCapacityResponse for a GetCapacityRequest
     * with topology and parameters that match the previous fields.
     *
     * The semantic is currently (CSI spec 1.2) defined as: The available capacity, in bytes, of the
     * storage that can be used to provision volumes. If not set, that information is currently unavailable
     * and treated like zero capacity.
     *
     * @return string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Capacity is the value reported by the CSI driver in its GetCapacityResponse for a GetCapacityRequest
     * with topology and parameters that match the previous fields.
     *
     * The semantic is currently (CSI spec 1.2) defined as: The available capacity, in bytes, of the
     * storage that can be used to provision volumes. If not set, that information is currently unavailable
     * and treated like zero capacity.
     *
     * @param string $capacity
     * @return static
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

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
     * MaximumVolumeSize is the value reported by the CSI driver in its GetCapacityResponse for a
     * GetCapacityRequest with topology and parameters that match the previous fields.
     *
     * This is defined since CSI spec 1.4.0 as the largest size that may be used in a
     * CreateVolumeRequest.capacity_range.required_bytes field to create a volume with the same parameters
     * as those in GetCapacityRequest. The corresponding value in the Kubernetes API is
     * ResourceRequirements.Requests in a volume claim.
     *
     * @return string
     */
    public function getMaximumVolumeSize()
    {
        return $this->maximumVolumeSize;
    }

    /**
     * MaximumVolumeSize is the value reported by the CSI driver in its GetCapacityResponse for a
     * GetCapacityRequest with topology and parameters that match the previous fields.
     *
     * This is defined since CSI spec 1.4.0 as the largest size that may be used in a
     * CreateVolumeRequest.capacity_range.required_bytes field to create a volume with the same parameters
     * as those in GetCapacityRequest. The corresponding value in the Kubernetes API is
     * ResourceRequirements.Requests in a volume claim.
     *
     * @param string $maximumVolumeSize
     * @return static
     */
    public function setMaximumVolumeSize($maximumVolumeSize)
    {
        $this->maximumVolumeSize = $maximumVolumeSize;

        return $this;
    }

    /**
     * Standard object's metadata. The name has no particular meaning. It must be be a DNS subdomain (dots
     * allowed, 253 characters). To ensure that there are no conflicts with other CSI drivers on the
     * cluster, the recommendation is to use csisc-<uuid>, a generated name, or a reverse-domain name which
     * ends with the unique CSI driver name.
     *
     * Objects are namespaced.
     *
     * More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public function getMetadata(): ?ObjectMeta
    {
        return $this->metadata;
    }

    /**
     * Standard object's metadata. The name has no particular meaning. It must be be a DNS subdomain (dots
     * allowed, 253 characters). To ensure that there are no conflicts with other CSI drivers on the
     * cluster, the recommendation is to use csisc-<uuid>, a generated name, or a reverse-domain name which
     * ends with the unique CSI driver name.
     *
     * Objects are namespaced.
     *
     * More info:
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
     * NodeTopology defines which nodes have access to the storage for which capacity was reported. If not
     * set, the storage is not accessible from any node in the cluster. If empty, the storage is accessible
     * from all nodes. This field is immutable.
     */
    public function getNodeTopology(): ?LabelSelector
    {
        return $this->nodeTopology;
    }

    /**
     * NodeTopology defines which nodes have access to the storage for which capacity was reported. If not
     * set, the storage is not accessible from any node in the cluster. If empty, the storage is accessible
     * from all nodes. This field is immutable.
     *
     * @return static
     */
    public function setNodeTopology(LabelSelector $nodeTopology)
    {
        $this->nodeTopology = $nodeTopology;

        return $this;
    }

    /**
     * The name of the StorageClass that the reported capacity applies to. It must meet the same
     * requirements as the name of a StorageClass object (non-empty, DNS subdomain). If that object no
     * longer exists, the CSIStorageCapacity object is obsolete and should be removed by its creator. This
     * field is immutable.
     */
    public function getStorageClassName(): string
    {
        return $this->storageClassName;
    }

    /**
     * The name of the StorageClass that the reported capacity applies to. It must meet the same
     * requirements as the name of a StorageClass object (non-empty, DNS subdomain). If that object no
     * longer exists, the CSIStorageCapacity object is obsolete and should be removed by its creator. This
     * field is immutable.
     *
     * @return static
     */
    public function setStorageClassName(string $storageClassName)
    {
        $this->storageClassName = $storageClassName;

        return $this;
    }
}
