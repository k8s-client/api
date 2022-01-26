<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.3
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Networking\v1;

use DateTimeInterface;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ManagedFieldsEntry;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\OwnerReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * NetworkPolicy describes what network traffic is allowed for a set of Pods
 *
 * @Kubernetes\Kind("NetworkPolicy",group="networking.k8s.io",version="v1")
 * @Kubernetes\Operation("get",path="/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies/{name}",response="static::class")
 * @Kubernetes\Operation("post",path="/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies",body="model",response="static::class")
 * @Kubernetes\Operation("delete",path="/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies/{name}",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch",path="/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("put",path="/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies/{name}",body="model",response="static::class")
 * @Kubernetes\Operation("deletecollection",path="/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch-all",path="/apis/networking.k8s.io/v1/networkpolicies",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("patch",path="/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies/{name}",body="patch",response="static::class")
 * @Kubernetes\Operation("list",path="/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies",response="K8s\Api\Model\Api\Networking\v1\NetworkPolicyList")
 * @Kubernetes\Operation("list-all",path="/apis/networking.k8s.io/v1/networkpolicies",response="K8s\Api\Model\Api\Networking\v1\NetworkPolicyList")
 */
class NetworkPolicy
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string
     */
    protected $apiVersion = 'networking.k8s.io/v1';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string
     */
    protected $kind = 'NetworkPolicy';

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ObjectMeta::class)
     * @var ObjectMeta
     */
    protected $metadata;

    /**
     * @Kubernetes\Attribute("spec",type="model",model=NetworkPolicySpec::class)
     * @var NetworkPolicySpec
     */
    protected $spec;

    /**
     * @param LabelSelector $podSelector
     */
    public function __construct(?string $name, LabelSelector $podSelector)
    {
        $this->metadata = new ObjectMeta($name);
        $this->spec = new NetworkPolicySpec($podSelector);
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
     * List of egress rules to be applied to the selected pods. Outgoing traffic is allowed if there are no
     * NetworkPolicies selecting the pod (and cluster policy otherwise allows the traffic), OR if the
     * traffic matches at least one egress rule across all of the NetworkPolicy objects whose podSelector
     * matches the pod. If this field is empty then this NetworkPolicy limits all outgoing traffic (and
     * serves solely to ensure that the pods it selects are isolated by default). This field is beta-level
     * in 1.8
     *
     * @return iterable|NetworkPolicyEgressRule[]
     */
    public function getEgress(): ?iterable
    {
        return $this->spec->getEgress();
    }

    /**
     * List of egress rules to be applied to the selected pods. Outgoing traffic is allowed if there are no
     * NetworkPolicies selecting the pod (and cluster policy otherwise allows the traffic), OR if the
     * traffic matches at least one egress rule across all of the NetworkPolicy objects whose podSelector
     * matches the pod. If this field is empty then this NetworkPolicy limits all outgoing traffic (and
     * serves solely to ensure that the pods it selects are isolated by default). This field is beta-level
     * in 1.8
     *
     * @return static
     */
    public function setEgress(iterable $egress)
    {
        $this->spec->setEgress($egress);

        return $this;
    }

    /**
     * @return static
     */
    public function addEgress(NetworkPolicyEgressRule $egre)
    {
        $this->spec->addEgress($egre);

        return $this;
    }

    /**
     * List of ingress rules to be applied to the selected pods. Traffic is allowed to a pod if there are
     * no NetworkPolicies selecting the pod (and cluster policy otherwise allows the traffic), OR if the
     * traffic source is the pod's local node, OR if the traffic matches at least one ingress rule across
     * all of the NetworkPolicy objects whose podSelector matches the pod. If this field is empty then this
     * NetworkPolicy does not allow any traffic (and serves solely to ensure that the pods it selects are
     * isolated by default)
     *
     * @return iterable|NetworkPolicyIngressRule[]
     */
    public function getIngress(): ?iterable
    {
        return $this->spec->getIngress();
    }

    /**
     * List of ingress rules to be applied to the selected pods. Traffic is allowed to a pod if there are
     * no NetworkPolicies selecting the pod (and cluster policy otherwise allows the traffic), OR if the
     * traffic source is the pod's local node, OR if the traffic matches at least one ingress rule across
     * all of the NetworkPolicy objects whose podSelector matches the pod. If this field is empty then this
     * NetworkPolicy does not allow any traffic (and serves solely to ensure that the pods it selects are
     * isolated by default)
     *
     * @return static
     */
    public function setIngress(iterable $ingress)
    {
        $this->spec->setIngress($ingress);

        return $this;
    }

    /**
     * @return static
     */
    public function addIngress(NetworkPolicyIngressRule $ingre)
    {
        $this->spec->addIngress($ingre);

        return $this;
    }

    /**
     * Selects the pods to which this NetworkPolicy object applies. The array of ingress rules is applied
     * to any pods selected by this field. Multiple network policies can select the same set of pods. In
     * this case, the ingress rules for each are combined additively. This field is NOT optional and
     * follows standard label selector semantics. An empty podSelector matches all pods in this namespace.
     */
    public function getPodSelector(): LabelSelector
    {
        return $this->spec->getPodSelector();
    }

    /**
     * Selects the pods to which this NetworkPolicy object applies. The array of ingress rules is applied
     * to any pods selected by this field. Multiple network policies can select the same set of pods. In
     * this case, the ingress rules for each are combined additively. This field is NOT optional and
     * follows standard label selector semantics. An empty podSelector matches all pods in this namespace.
     *
     * @return static
     */
    public function setPodSelector(LabelSelector $podSelector)
    {
        $this->spec->setPodSelector($podSelector);

        return $this;
    }

    /**
     * List of rule types that the NetworkPolicy relates to. Valid options are ["Ingress"], ["Egress"], or
     * ["Ingress", "Egress"]. If this field is not specified, it will default based on the existence of
     * Ingress or Egress rules; policies that contain an Egress section are assumed to affect Egress, and
     * all policies (whether or not they contain an Ingress section) are assumed to affect Ingress. If you
     * want to write an egress-only policy, you must explicitly specify policyTypes [ "Egress" ]. Likewise,
     * if you want to write a policy that specifies that no egress is allowed, you must specify a
     * policyTypes value that include "Egress" (since such a policy would not include an Egress section and
     * would otherwise default to just [ "Ingress" ]). This field is beta-level in 1.8
     */
    public function getPolicyTypes(): ?array
    {
        return $this->spec->getPolicyTypes();
    }

    /**
     * List of rule types that the NetworkPolicy relates to. Valid options are ["Ingress"], ["Egress"], or
     * ["Ingress", "Egress"]. If this field is not specified, it will default based on the existence of
     * Ingress or Egress rules; policies that contain an Egress section are assumed to affect Egress, and
     * all policies (whether or not they contain an Ingress section) are assumed to affect Ingress. If you
     * want to write an egress-only policy, you must explicitly specify policyTypes [ "Egress" ]. Likewise,
     * if you want to write a policy that specifies that no egress is allowed, you must specify a
     * policyTypes value that include "Egress" (since such a policy would not include an Egress section and
     * would otherwise default to just [ "Ingress" ]). This field is beta-level in 1.8
     *
     * @return static
     */
    public function setPolicyTypes(array $policyTypes)
    {
        $this->spec->setPolicyTypes($policyTypes);

        return $this;
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
     * Specification of the desired behavior for this NetworkPolicy.
     */
    public function getSpec(): NetworkPolicySpec
    {
        return $this->spec;
    }

    /**
     * Specification of the desired behavior for this NetworkPolicy.
     *
     * @return static
     */
    public function setSpec(NetworkPolicySpec $spec)
    {
        $this->spec = $spec;

        return $this;
    }
}
