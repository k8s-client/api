<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.11.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Batch\v1;

use DateTimeInterface;
use K8s\Api\Model\Api\Core\v1\PodTemplateSpec;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Initializers;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\OwnerReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * Job represents the configuration of a single job.
 *
 * @Kubernetes\Kind("Job",group="batch",version="v1")
 * @Kubernetes\Operation("get",path="/apis/batch/v1/namespaces/{namespace}/jobs/{name}",response="static::class")
 * @Kubernetes\Operation("get-status",path="/apis/batch/v1/namespaces/{namespace}/jobs/{name}/status",response="static::class")
 * @Kubernetes\Operation("post",path="/apis/batch/v1/namespaces/{namespace}/jobs",body="model",response="static::class")
 * @Kubernetes\Operation("delete",path="/apis/batch/v1/namespaces/{namespace}/jobs/{name}",body="model",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch",path="/apis/batch/v1/namespaces/{namespace}/jobs",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("put",path="/apis/batch/v1/namespaces/{namespace}/jobs/{name}",body="model",response="static::class")
 * @Kubernetes\Operation("put-status",path="/apis/batch/v1/namespaces/{namespace}/jobs/{name}/status",body="model",response="static::class")
 * @Kubernetes\Operation("deletecollection",path="/apis/batch/v1/namespaces/{namespace}/jobs",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch-all",path="/apis/batch/v1/jobs",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("patch",path="/apis/batch/v1/namespaces/{namespace}/jobs/{name}",body="patch",response="static::class")
 * @Kubernetes\Operation("patch-status",path="/apis/batch/v1/namespaces/{namespace}/jobs/{name}/status",body="patch",response="static::class")
 * @Kubernetes\Operation("list",path="/apis/batch/v1/namespaces/{namespace}/jobs",response="K8s\Api\Model\Api\Batch\v1\JobList")
 * @Kubernetes\Operation("list-all",path="/apis/batch/v1/jobs",response="K8s\Api\Model\Api\Batch\v1\JobList")
 */
class Job
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string
     */
    protected $apiVersion = 'batch/v1';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string
     */
    protected $kind = 'Job';

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ObjectMeta::class)
     * @var ObjectMeta
     */
    protected $metadata;

    /**
     * @Kubernetes\Attribute("spec",type="model",model=JobSpec::class)
     * @var JobSpec
     */
    protected $spec;

    /**
     * @Kubernetes\Attribute("status",type="model",model=JobStatus::class)
     * @var JobStatus|null
     */
    protected $status = null;

    /**
     * @param PodTemplateSpec $template
     */
    public function __construct(?string $name, PodTemplateSpec $template)
    {
        $this->metadata = new ObjectMeta($name);
        $this->spec = new JobSpec($template);
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
     * Specifies the duration in seconds relative to the startTime that the job may be active before the
     * system tries to terminate it; value must be positive integer
     */
    public function getActiveDeadlineSeconds(): ?int
    {
        return $this->spec->getActiveDeadlineSeconds();
    }

    /**
     * Specifies the duration in seconds relative to the startTime that the job may be active before the
     * system tries to terminate it; value must be positive integer
     *
     * @return static
     */
    public function setActiveDeadlineSeconds(int $activeDeadlineSeconds)
    {
        $this->spec->setActiveDeadlineSeconds($activeDeadlineSeconds);

        return $this;
    }

    /**
     * Specifies the number of retries before marking this job failed. Defaults to 6
     */
    public function getBackoffLimit(): ?int
    {
        return $this->spec->getBackoffLimit();
    }

    /**
     * Specifies the number of retries before marking this job failed. Defaults to 6
     *
     * @return static
     */
    public function setBackoffLimit(int $backoffLimit)
    {
        $this->spec->setBackoffLimit($backoffLimit);

        return $this;
    }

    /**
     * Specifies the desired number of successfully finished pods the job should be run with.  Setting to
     * nil means that the success of any pod signals the success of all pods, and allows parallelism to
     * have any positive value.  Setting to 1 means that parallelism is limited to 1 and the success of
     * that pod signals the success of the job. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     */
    public function getCompletions(): ?int
    {
        return $this->spec->getCompletions();
    }

    /**
     * Specifies the desired number of successfully finished pods the job should be run with.  Setting to
     * nil means that the success of any pod signals the success of all pods, and allows parallelism to
     * have any positive value.  Setting to 1 means that parallelism is limited to 1 and the success of
     * that pod signals the success of the job. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * @return static
     */
    public function setCompletions(int $completions)
    {
        $this->spec->setCompletions($completions);

        return $this;
    }

    /**
     * manualSelector controls generation of pod labels and pod selectors. Leave `manualSelector` unset
     * unless you are certain what you are doing. When false or unset, the system pick labels unique to
     * this job and appends those labels to the pod template.  When true, the user is responsible for
     * picking unique labels and specifying the selector.  Failure to pick a unique label may cause this
     * and other jobs to not function correctly.  However, You may see `manualSelector=true` in jobs that
     * were created with the old `extensions/v1beta1` API. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/#specifying-your-own-pod-selector
     */
    public function isManualSelector(): ?bool
    {
        return $this->spec->isManualSelector();
    }

    /**
     * manualSelector controls generation of pod labels and pod selectors. Leave `manualSelector` unset
     * unless you are certain what you are doing. When false or unset, the system pick labels unique to
     * this job and appends those labels to the pod template.  When true, the user is responsible for
     * picking unique labels and specifying the selector.  Failure to pick a unique label may cause this
     * and other jobs to not function correctly.  However, You may see `manualSelector=true` in jobs that
     * were created with the old `extensions/v1beta1` API. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/#specifying-your-own-pod-selector
     *
     * @return static
     */
    public function setIsManualSelector(bool $manualSelector)
    {
        $this->spec->setIsManualSelector($manualSelector);

        return $this;
    }

    /**
     * Specifies the maximum desired number of pods the job should run at any given time. The actual number
     * of pods running in steady state will be less than this number when ((.spec.completions -
     * .status.successful) < .spec.parallelism), i.e. when the work left to do is less than max
     * parallelism. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     */
    public function getParallelism(): ?int
    {
        return $this->spec->getParallelism();
    }

    /**
     * Specifies the maximum desired number of pods the job should run at any given time. The actual number
     * of pods running in steady state will be less than this number when ((.spec.completions -
     * .status.successful) < .spec.parallelism), i.e. when the work left to do is less than max
     * parallelism. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * @return static
     */
    public function setParallelism(int $parallelism)
    {
        $this->spec->setParallelism($parallelism);

        return $this;
    }

    /**
     * A label query over pods that should match the pod count. Normally, the system sets this field for
     * you. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     */
    public function getSelector(): ?LabelSelector
    {
        return $this->spec->getSelector();
    }

    /**
     * A label query over pods that should match the pod count. Normally, the system sets this field for
     * you. More info:
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
     * Describes the pod that will be created when executing a job. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     */
    public function getTemplate(): PodTemplateSpec
    {
        return $this->spec->getTemplate();
    }

    /**
     * Describes the pod that will be created when executing a job. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * @return static
     */
    public function setTemplate(PodTemplateSpec $template)
    {
        $this->spec->setTemplate($template);

        return $this;
    }

    /**
     * The number of actively running pods.
     */
    public function getActive(): ?int
    {
        return $this->status->getActive();
    }

    /**
     * Represents time when the job was completed. It is not guaranteed to be set in happens-before order
     * across separate operations. It is represented in RFC3339 form and is in UTC.
     */
    public function getCompletionTime(): ?DateTimeInterface
    {
        return $this->status->getCompletionTime();
    }

    /**
     * The latest available observations of an object's current state. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * @return iterable|JobCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->status->getConditions();
    }

    /**
     * The number of pods which reached phase Failed.
     */
    public function getFailed(): ?int
    {
        return $this->status->getFailed();
    }

    /**
     * Represents time when the job was acknowledged by the job controller. It is not guaranteed to be set
     * in happens-before order across separate operations. It is represented in RFC3339 form and is in UTC.
     */
    public function getStartTime(): ?DateTimeInterface
    {
        return $this->status->getStartTime();
    }

    /**
     * The number of pods which reached phase Succeeded.
     */
    public function getSucceeded(): ?int
    {
        return $this->status->getSucceeded();
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
     * Specification of the desired behavior of a job. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     */
    public function getSpec(): JobSpec
    {
        return $this->spec;
    }

    /**
     * Specification of the desired behavior of a job. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @return static
     */
    public function setSpec(JobSpec $spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * Current status of a job. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     */
    public function getStatus(): ?JobStatus
    {
        return $this->status;
    }

    /**
     * Current status of a job. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @return static
     */
    public function setStatus(JobStatus $status)
    {
        $this->status = $status;

        return $this;
    }
}
