<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Apps\v1;

use DateTimeInterface;
use K8s\Api\Model\Api\Core\v1\PersistentVolumeClaim;
use K8s\Api\Model\Api\Core\v1\PodTemplateSpec;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ManagedFieldsEntry;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\OwnerReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * StatefulSet represents a set of pods with consistent identities. Identities are defined as:
 *  - Network: A single stable DNS and hostname.
 *  - Storage: As many VolumeClaims as requested.
 * The StatefulSet guarantees that a given network identity will always map to the same storage
 * identity.
 *
 * @Kubernetes\Kind("StatefulSet",group="apps",version="v1")
 * @Kubernetes\Operation("get",path="/apis/apps/v1/namespaces/{namespace}/statefulsets/{name}",response="static::class")
 * @Kubernetes\Operation("get-status",path="/apis/apps/v1/namespaces/{namespace}/statefulsets/{name}/status",response="static::class")
 * @Kubernetes\Operation("post",path="/apis/apps/v1/namespaces/{namespace}/statefulsets",body="model",response="static::class")
 * @Kubernetes\Operation("delete",path="/apis/apps/v1/namespaces/{namespace}/statefulsets/{name}",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch",path="/apis/apps/v1/namespaces/{namespace}/statefulsets",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("put",path="/apis/apps/v1/namespaces/{namespace}/statefulsets/{name}",body="model",response="static::class")
 * @Kubernetes\Operation("put-status",path="/apis/apps/v1/namespaces/{namespace}/statefulsets/{name}/status",body="model",response="static::class")
 * @Kubernetes\Operation("deletecollection",path="/apis/apps/v1/namespaces/{namespace}/statefulsets",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch-all",path="/apis/apps/v1/statefulsets",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("patch",path="/apis/apps/v1/namespaces/{namespace}/statefulsets/{name}",body="patch",response="static::class")
 * @Kubernetes\Operation("patch-status",path="/apis/apps/v1/namespaces/{namespace}/statefulsets/{name}/status",body="patch",response="static::class")
 * @Kubernetes\Operation("list",path="/apis/apps/v1/namespaces/{namespace}/statefulsets",response="K8s\Api\Model\Api\Apps\v1\StatefulSetList")
 * @Kubernetes\Operation("list-all",path="/apis/apps/v1/statefulsets",response="K8s\Api\Model\Api\Apps\v1\StatefulSetList")
 */
class StatefulSet
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string
     */
    protected $apiVersion = 'apps/v1';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string
     */
    protected $kind = 'StatefulSet';

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ObjectMeta::class)
     * @var ObjectMeta
     */
    protected $metadata;

    /**
     * @Kubernetes\Attribute("spec",type="model",model=StatefulSetSpec::class)
     * @var StatefulSetSpec
     */
    protected $spec;

    /**
     * @Kubernetes\Attribute("status",type="model",model=StatefulSetStatus::class)
     * @var StatefulSetStatus|null
     */
    protected $status = null;

    /**
     * @param LabelSelector $selector
     * @param string $serviceName
     * @param PodTemplateSpec $template
     */
    public function __construct(?string $name, LabelSelector $selector, string $serviceName, PodTemplateSpec $template)
    {
        $this->metadata = new ObjectMeta($name);
        $this->spec = new StatefulSetSpec($selector, $serviceName, $template);
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
     * podManagementPolicy controls how pods are created during initial scale up, when replacing pods on
     * nodes, or when scaling down. The default policy is `OrderedReady`, where pods are created in
     * increasing order (pod-0, then pod-1, etc) and the controller will wait until each pod is ready
     * before continuing. When scaling down, the pods are removed in the opposite order. The alternative
     * policy is `Parallel` which will create pods in parallel to match the desired scale without waiting,
     * and on scale down will delete all pods at once.
     */
    public function getPodManagementPolicy(): ?string
    {
        return $this->spec->getPodManagementPolicy();
    }

    /**
     * podManagementPolicy controls how pods are created during initial scale up, when replacing pods on
     * nodes, or when scaling down. The default policy is `OrderedReady`, where pods are created in
     * increasing order (pod-0, then pod-1, etc) and the controller will wait until each pod is ready
     * before continuing. When scaling down, the pods are removed in the opposite order. The alternative
     * policy is `Parallel` which will create pods in parallel to match the desired scale without waiting,
     * and on scale down will delete all pods at once.
     *
     * @return static
     */
    public function setPodManagementPolicy(string $podManagementPolicy)
    {
        $this->spec->setPodManagementPolicy($podManagementPolicy);

        return $this;
    }

    /**
     * replicas is the number of Pods created by the StatefulSet controller.
     */
    public function getReplicas(): int
    {
        return $this->status->getReplicas();
    }

    /**
     * replicas is the desired number of replicas of the given Template. These are replicas in the sense
     * that they are instantiations of the same Template, but individual replicas also have a consistent
     * identity. If unspecified, defaults to 1.
     *
     * @return static
     */
    public function setReplicas(int $replicas)
    {
        $this->spec->setReplicas($replicas);

        return $this;
    }

    /**
     * revisionHistoryLimit is the maximum number of revisions that will be maintained in the StatefulSet's
     * revision history. The revision history consists of all revisions not represented by a currently
     * applied StatefulSetSpec version. The default value is 10.
     */
    public function getRevisionHistoryLimit(): ?int
    {
        return $this->spec->getRevisionHistoryLimit();
    }

    /**
     * revisionHistoryLimit is the maximum number of revisions that will be maintained in the StatefulSet's
     * revision history. The revision history consists of all revisions not represented by a currently
     * applied StatefulSetSpec version. The default value is 10.
     *
     * @return static
     */
    public function setRevisionHistoryLimit(int $revisionHistoryLimit)
    {
        $this->spec->setRevisionHistoryLimit($revisionHistoryLimit);

        return $this;
    }

    /**
     * selector is a label query over pods that should match the replica count. It must match the pod
     * template's labels. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     */
    public function getSelector(): LabelSelector
    {
        return $this->spec->getSelector();
    }

    /**
     * selector is a label query over pods that should match the replica count. It must match the pod
     * template's labels. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     *
     * @return static
     */
    public function setSelector(LabelSelector $selector)
    {
        $this->spec->setSelector($selector);

        return $this;
    }

    /**
     * serviceName is the name of the service that governs this StatefulSet. This service must exist before
     * the StatefulSet, and is responsible for the network identity of the set. Pods get DNS/hostnames that
     * follow the pattern: pod-specific-string.serviceName.default.svc.cluster.local where
     * "pod-specific-string" is managed by the StatefulSet controller.
     */
    public function getServiceName(): string
    {
        return $this->spec->getServiceName();
    }

    /**
     * serviceName is the name of the service that governs this StatefulSet. This service must exist before
     * the StatefulSet, and is responsible for the network identity of the set. Pods get DNS/hostnames that
     * follow the pattern: pod-specific-string.serviceName.default.svc.cluster.local where
     * "pod-specific-string" is managed by the StatefulSet controller.
     *
     * @return static
     */
    public function setServiceName(string $serviceName)
    {
        $this->spec->setServiceName($serviceName);

        return $this;
    }

    /**
     * template is the object that describes the pod that will be created if insufficient replicas are
     * detected. Each pod stamped out by the StatefulSet will fulfill this Template, but have a unique
     * identity from the rest of the StatefulSet.
     */
    public function getTemplate(): PodTemplateSpec
    {
        return $this->spec->getTemplate();
    }

    /**
     * template is the object that describes the pod that will be created if insufficient replicas are
     * detected. Each pod stamped out by the StatefulSet will fulfill this Template, but have a unique
     * identity from the rest of the StatefulSet.
     *
     * @return static
     */
    public function setTemplate(PodTemplateSpec $template)
    {
        $this->spec->setTemplate($template);

        return $this;
    }

    /**
     * updateStrategy indicates the StatefulSetUpdateStrategy that will be employed to update Pods in the
     * StatefulSet when a revision is made to Template.
     */
    public function getUpdateStrategy(): ?StatefulSetUpdateStrategy
    {
        return $this->spec->getUpdateStrategy();
    }

    /**
     * updateStrategy indicates the StatefulSetUpdateStrategy that will be employed to update Pods in the
     * StatefulSet when a revision is made to Template.
     *
     * @return static
     */
    public function setUpdateStrategy(StatefulSetUpdateStrategy $updateStrategy)
    {
        $this->spec->setUpdateStrategy($updateStrategy);

        return $this;
    }

    /**
     * volumeClaimTemplates is a list of claims that pods are allowed to reference. The StatefulSet
     * controller is responsible for mapping network identities to claims in a way that maintains the
     * identity of a pod. Every claim in this list must have at least one matching (by name) volumeMount in
     * one container in the template. A claim in this list takes precedence over any volumes in the
     * template, with the same name.
     *
     * @return iterable|PersistentVolumeClaim[]
     */
    public function getVolumeClaimTemplates(): ?iterable
    {
        return $this->spec->getVolumeClaimTemplates();
    }

    /**
     * volumeClaimTemplates is a list of claims that pods are allowed to reference. The StatefulSet
     * controller is responsible for mapping network identities to claims in a way that maintains the
     * identity of a pod. Every claim in this list must have at least one matching (by name) volumeMount in
     * one container in the template. A claim in this list takes precedence over any volumes in the
     * template, with the same name.
     *
     * @return static
     */
    public function setVolumeClaimTemplates(iterable $volumeClaimTemplates)
    {
        $this->spec->setVolumeClaimTemplates($volumeClaimTemplates);

        return $this;
    }

    /**
     * @return static
     */
    public function addVolumeClaimTemplates(PersistentVolumeClaim $volumeClaimTemplate)
    {
        $this->spec->addVolumeClaimTemplates($volumeClaimTemplate);

        return $this;
    }

    /**
     * collisionCount is the count of hash collisions for the StatefulSet. The StatefulSet controller uses
     * this field as a collision avoidance mechanism when it needs to create the name for the newest
     * ControllerRevision.
     */
    public function getCollisionCount(): ?int
    {
        return $this->status->getCollisionCount();
    }

    /**
     * Represents the latest available observations of a statefulset's current state.
     *
     * @return iterable|StatefulSetCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->status->getConditions();
    }

    /**
     * currentReplicas is the number of Pods created by the StatefulSet controller from the StatefulSet
     * version indicated by currentRevision.
     */
    public function getCurrentReplicas(): ?int
    {
        return $this->status->getCurrentReplicas();
    }

    /**
     * currentRevision, if not empty, indicates the version of the StatefulSet used to generate Pods in the
     * sequence [0,currentReplicas).
     */
    public function getCurrentRevision(): ?string
    {
        return $this->status->getCurrentRevision();
    }

    /**
     * observedGeneration is the most recent generation observed for this StatefulSet. It corresponds to
     * the StatefulSet's generation, which is updated on mutation by the API Server.
     */
    public function getObservedGeneration(): ?int
    {
        return $this->status->getObservedGeneration();
    }

    /**
     * readyReplicas is the number of Pods created by the StatefulSet controller that have a Ready
     * Condition.
     */
    public function getReadyReplicas(): ?int
    {
        return $this->status->getReadyReplicas();
    }

    /**
     * updateRevision, if not empty, indicates the version of the StatefulSet used to generate Pods in the
     * sequence [replicas-updatedReplicas,replicas)
     */
    public function getUpdateRevision(): ?string
    {
        return $this->status->getUpdateRevision();
    }

    /**
     * updatedReplicas is the number of Pods created by the StatefulSet controller from the StatefulSet
     * version indicated by updateRevision.
     */
    public function getUpdatedReplicas(): ?int
    {
        return $this->status->getUpdatedReplicas();
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
     * Spec defines the desired identities of pods in this set.
     */
    public function getSpec(): StatefulSetSpec
    {
        return $this->spec;
    }

    /**
     * Spec defines the desired identities of pods in this set.
     *
     * @return static
     */
    public function setSpec(StatefulSetSpec $spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * Status is the current status of Pods in this StatefulSet. This data may be out of date by some
     * window of time.
     */
    public function getStatus(): ?StatefulSetStatus
    {
        return $this->status;
    }

    /**
     * Status is the current status of Pods in this StatefulSet. This data may be out of date by some
     * window of time.
     *
     * @return static
     */
    public function setStatus(StatefulSetStatus $status)
    {
        $this->status = $status;

        return $this;
    }
}
