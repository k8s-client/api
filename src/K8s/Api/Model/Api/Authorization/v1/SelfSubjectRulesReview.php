<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.14.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Authorization\v1;

use DateTimeInterface;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Initializers;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ManagedFieldsEntry;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\OwnerReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * SelfSubjectRulesReview enumerates the set of actions the current user can perform within a
 * namespace. The returned list of actions may be incomplete depending on the server's authorization
 * mode, and any errors experienced during the evaluation. SelfSubjectRulesReview should be used by UIs
 * to show/hide actions, or to quickly let an end user reason about their permissions. It should NOT Be
 * used by external systems to drive authorization decisions as this raises confused deputy, cache
 * lifetime/revocation, and correctness concerns. SubjectAccessReview, and LocalAccessReview are the
 * correct way to defer authorization decisions to the API server.
 *
 * @Kubernetes\Kind("SelfSubjectRulesReview",group="authorization.k8s.io",version="v1")
 * @Kubernetes\Operation("post",path="/apis/authorization.k8s.io/v1/selfsubjectrulesreviews",body="model",response="static::class")
 */
class SelfSubjectRulesReview
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string
     */
    protected $apiVersion = 'authorization.k8s.io/v1';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string
     */
    protected $kind = 'SelfSubjectRulesReview';

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ObjectMeta::class)
     * @var ObjectMeta
     */
    protected $metadata;

    /**
     * @Kubernetes\Attribute("spec",type="model",model=SelfSubjectRulesReviewSpec::class,isRequired=true)
     * @var SelfSubjectRulesReviewSpec
     */
    protected $spec;

    /**
     * @Kubernetes\Attribute("status",type="model",model=SubjectRulesReviewStatus::class)
     * @var SubjectRulesReviewStatus|null
     */
    protected $status = null;

    /**
     * @param SelfSubjectRulesReviewSpec $spec
     */
    public function __construct(?string $name, SelfSubjectRulesReviewSpec $spec)
    {
        $this->metadata = new ObjectMeta($name);
        $this->spec = $spec;
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
     * Namespace to evaluate rules for. Required.
     */
    public function getNamespace(): ?string
    {
        return $this->spec->getNamespace();
    }

    /**
     * Namespace to evaluate rules for. Required.
     *
     * @return static
     */
    public function setNamespace(string $namespace)
    {
        $this->spec->setNamespace($namespace);

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
     * EvaluationError can appear in combination with Rules. It indicates an error occurred during rule
     * evaluation, such as an authorizer that doesn't support rule evaluation, and that ResourceRules
     * and/or NonResourceRules may be incomplete.
     */
    public function getEvaluationError(): ?string
    {
        return $this->status->getEvaluationError();
    }

    /**
     * Incomplete is true when the rules returned by this call are incomplete. This is most commonly
     * encountered when an authorizer, such as an external authorizer, doesn't support rules evaluation.
     */
    public function isIncomplete(): bool
    {
        return $this->status->isIncomplete();
    }

    /**
     * NonResourceRules is the list of actions the subject is allowed to perform on non-resources. The list
     * ordering isn't significant, may contain duplicates, and possibly be incomplete.
     *
     * @return iterable|NonResourceRule[]
     */
    public function getNonResourceRules(): iterable
    {
        return $this->status->getNonResourceRules();
    }

    /**
     * ResourceRules is the list of actions the subject is allowed to perform on resources. The list
     * ordering isn't significant, may contain duplicates, and possibly be incomplete.
     *
     * @return iterable|ResourceRule[]
     */
    public function getResourceRules(): iterable
    {
        return $this->status->getResourceRules();
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
     * Spec holds information about the request being evaluated.
     */
    public function getSpec(): SelfSubjectRulesReviewSpec
    {
        return $this->spec;
    }

    /**
     * Spec holds information about the request being evaluated.
     *
     * @return static
     */
    public function setSpec(SelfSubjectRulesReviewSpec $spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * Status is filled in by the server and indicates the set of actions a user can perform.
     */
    public function getStatus(): ?SubjectRulesReviewStatus
    {
        return $this->status;
    }

    /**
     * Status is filled in by the server and indicates the set of actions a user can perform.
     *
     * @return static
     */
    public function setStatus(SubjectRulesReviewStatus $status)
    {
        $this->status = $status;

        return $this;
    }
}
