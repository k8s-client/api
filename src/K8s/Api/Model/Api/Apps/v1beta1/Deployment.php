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

namespace K8s\Api\Model\Api\Apps\v1beta1;

use DateTimeInterface;
use K8s\Api\Model\Api\Core\v1\PodTemplateSpec;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Initializers;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ManagedFieldsEntry;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\OwnerReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * DEPRECATED - This group version of Deployment is deprecated by apps/v1beta2/Deployment. See the
 * release notes for more information. Deployment enables declarative updates for Pods and ReplicaSets.
 *
 * @Kubernetes\Kind("Deployment",group="apps",version="v1beta1")
 * @Kubernetes\Operation("get",path="/apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}",response="static::class")
 * @Kubernetes\Operation("get-status",path="/apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/status",response="static::class")
 * @Kubernetes\Operation("post",path="/apis/apps/v1beta1/namespaces/{namespace}/deployments",body="model",response="static::class")
 * @Kubernetes\Operation("delete",path="/apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch",path="/apis/apps/v1beta1/namespaces/{namespace}/deployments",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("put",path="/apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}",body="model",response="static::class")
 * @Kubernetes\Operation("put-status",path="/apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/status",body="model",response="static::class")
 * @Kubernetes\Operation("deletecollection",path="/apis/apps/v1beta1/namespaces/{namespace}/deployments",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch-all",path="/apis/apps/v1beta1/deployments",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("patch",path="/apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}",body="patch",response="static::class")
 * @Kubernetes\Operation("patch-status",path="/apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/status",body="patch",response="static::class")
 * @Kubernetes\Operation("list",path="/apis/apps/v1beta1/namespaces/{namespace}/deployments",response="K8s\Api\Model\Api\Apps\v1beta1\DeploymentList")
 * @Kubernetes\Operation("list-all",path="/apis/apps/v1beta1/deployments",response="K8s\Api\Model\Api\Apps\v1beta1\DeploymentList")
 */
class Deployment
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string
     */
    protected $apiVersion = 'apps/v1beta1';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string
     */
    protected $kind = 'Deployment';

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ObjectMeta::class)
     * @var ObjectMeta
     */
    protected $metadata;

    /**
     * @Kubernetes\Attribute("spec",type="model",model=DeploymentSpec::class)
     * @var DeploymentSpec
     */
    protected $spec;

    /**
     * @Kubernetes\Attribute("status",type="model",model=DeploymentStatus::class)
     * @var DeploymentStatus|null
     */
    protected $status = null;

    /**
     * @param PodTemplateSpec $template
     */
    public function __construct(?string $name, PodTemplateSpec $template)
    {
        $this->metadata = new ObjectMeta($name);
        $this->spec = new DeploymentSpec($template);
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
     * Minimum number of seconds for which a newly created pod should be ready without any of its container
     * crashing, for it to be considered available. Defaults to 0 (pod will be considered available as soon
     * as it is ready)
     */
    public function getMinReadySeconds(): ?int
    {
        return $this->spec->getMinReadySeconds();
    }

    /**
     * Minimum number of seconds for which a newly created pod should be ready without any of its container
     * crashing, for it to be considered available. Defaults to 0 (pod will be considered available as soon
     * as it is ready)
     *
     * @return static
     */
    public function setMinReadySeconds(int $minReadySeconds)
    {
        $this->spec->setMinReadySeconds($minReadySeconds);

        return $this;
    }

    /**
     * Indicates that the deployment is paused.
     */
    public function isPaused(): ?bool
    {
        return $this->spec->isPaused();
    }

    /**
     * Indicates that the deployment is paused.
     *
     * @return static
     */
    public function setIsPaused(bool $paused)
    {
        $this->spec->setIsPaused($paused);

        return $this;
    }

    /**
     * The maximum time in seconds for a deployment to make progress before it is considered to be failed.
     * The deployment controller will continue to process failed deployments and a condition with a
     * ProgressDeadlineExceeded reason will be surfaced in the deployment status. Note that progress will
     * not be estimated during the time a deployment is paused. Defaults to 600s.
     */
    public function getProgressDeadlineSeconds(): ?int
    {
        return $this->spec->getProgressDeadlineSeconds();
    }

    /**
     * The maximum time in seconds for a deployment to make progress before it is considered to be failed.
     * The deployment controller will continue to process failed deployments and a condition with a
     * ProgressDeadlineExceeded reason will be surfaced in the deployment status. Note that progress will
     * not be estimated during the time a deployment is paused. Defaults to 600s.
     *
     * @return static
     */
    public function setProgressDeadlineSeconds(int $progressDeadlineSeconds)
    {
        $this->spec->setProgressDeadlineSeconds($progressDeadlineSeconds);

        return $this;
    }

    /**
     * Total number of non-terminated pods targeted by this deployment (their labels match the selector).
     */
    public function getReplicas(): ?int
    {
        return $this->status->getReplicas();
    }

    /**
     * Number of desired pods. This is a pointer to distinguish between explicit zero and not specified.
     * Defaults to 1.
     *
     * @return static
     */
    public function setReplicas(int $replicas)
    {
        $this->spec->setReplicas($replicas);

        return $this;
    }

    /**
     * The number of old ReplicaSets to retain to allow rollback. This is a pointer to distinguish between
     * explicit zero and not specified. Defaults to 2.
     */
    public function getRevisionHistoryLimit(): ?int
    {
        return $this->spec->getRevisionHistoryLimit();
    }

    /**
     * The number of old ReplicaSets to retain to allow rollback. This is a pointer to distinguish between
     * explicit zero and not specified. Defaults to 2.
     *
     * @return static
     */
    public function setRevisionHistoryLimit(int $revisionHistoryLimit)
    {
        $this->spec->setRevisionHistoryLimit($revisionHistoryLimit);

        return $this;
    }

    /**
     * DEPRECATED. The config this deployment is rolling back to. Will be cleared after rollback is done.
     */
    public function getRollbackTo(): ?RollbackConfig
    {
        return $this->spec->getRollbackTo();
    }

    /**
     * DEPRECATED. The config this deployment is rolling back to. Will be cleared after rollback is done.
     *
     * @return static
     */
    public function setRollbackTo(RollbackConfig $rollbackTo)
    {
        $this->spec->setRollbackTo($rollbackTo);

        return $this;
    }

    /**
     * Label selector for pods. Existing ReplicaSets whose pods are selected by this will be the ones
     * affected by this deployment.
     */
    public function getSelector(): ?LabelSelector
    {
        return $this->spec->getSelector();
    }

    /**
     * Label selector for pods. Existing ReplicaSets whose pods are selected by this will be the ones
     * affected by this deployment.
     *
     * @return static
     */
    public function setSelector(LabelSelector $selector)
    {
        $this->spec->setSelector($selector);

        return $this;
    }

    /**
     * The deployment strategy to use to replace existing pods with new ones.
     */
    public function getStrategy(): ?DeploymentStrategy
    {
        return $this->spec->getStrategy();
    }

    /**
     * The deployment strategy to use to replace existing pods with new ones.
     *
     * @return static
     */
    public function setStrategy(DeploymentStrategy $strategy)
    {
        $this->spec->setStrategy($strategy);

        return $this;
    }

    /**
     * Template describes the pods that will be created.
     */
    public function getTemplate(): PodTemplateSpec
    {
        return $this->spec->getTemplate();
    }

    /**
     * Template describes the pods that will be created.
     *
     * @return static
     */
    public function setTemplate(PodTemplateSpec $template)
    {
        $this->spec->setTemplate($template);

        return $this;
    }

    /**
     * Total number of available pods (ready for at least minReadySeconds) targeted by this deployment.
     */
    public function getAvailableReplicas(): ?int
    {
        return $this->status->getAvailableReplicas();
    }

    /**
     * Count of hash collisions for the Deployment. The Deployment controller uses this field as a
     * collision avoidance mechanism when it needs to create the name for the newest ReplicaSet.
     */
    public function getCollisionCount(): ?int
    {
        return $this->status->getCollisionCount();
    }

    /**
     * Represents the latest available observations of a deployment's current state.
     *
     * @return iterable|DeploymentCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->status->getConditions();
    }

    /**
     * The generation observed by the deployment controller.
     */
    public function getObservedGeneration(): ?int
    {
        return $this->status->getObservedGeneration();
    }

    /**
     * Total number of ready pods targeted by this deployment.
     */
    public function getReadyReplicas(): ?int
    {
        return $this->status->getReadyReplicas();
    }

    /**
     * Total number of unavailable pods targeted by this deployment. This is the total number of pods that
     * are still required for the deployment to have 100% available capacity. They may either be pods that
     * are running but not yet available or pods that still have not been created.
     */
    public function getUnavailableReplicas(): ?int
    {
        return $this->status->getUnavailableReplicas();
    }

    /**
     * Total number of non-terminated pods targeted by this deployment that have the desired template spec.
     */
    public function getUpdatedReplicas(): ?int
    {
        return $this->status->getUpdatedReplicas();
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
     * Standard object metadata.
     */
    public function getMetadata(): ObjectMeta
    {
        return $this->metadata;
    }

    /**
     * Standard object metadata.
     *
     * @return static
     */
    public function setMetadata(ObjectMeta $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Specification of the desired behavior of the Deployment.
     */
    public function getSpec(): DeploymentSpec
    {
        return $this->spec;
    }

    /**
     * Specification of the desired behavior of the Deployment.
     *
     * @return static
     */
    public function setSpec(DeploymentSpec $spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * Most recently observed status of the Deployment.
     */
    public function getStatus(): ?DeploymentStatus
    {
        return $this->status;
    }

    /**
     * Most recently observed status of the Deployment.
     *
     * @return static
     */
    public function setStatus(DeploymentStatus $status)
    {
        $this->status = $status;

        return $this;
    }
}
