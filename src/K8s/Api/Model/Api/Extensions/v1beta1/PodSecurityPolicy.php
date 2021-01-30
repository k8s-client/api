<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.13.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Extensions\v1beta1;

use DateTimeInterface;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Initializers;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\OwnerReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * PodSecurityPolicy governs the ability to make requests that affect the Security Context that will be
 * applied to a pod and container. Deprecated: use PodSecurityPolicy from policy API Group instead.
 *
 * @Kubernetes\Kind("PodSecurityPolicy",group="extensions",version="v1beta1")
 * @Kubernetes\Operation("get",path="/apis/extensions/v1beta1/podsecuritypolicies/{name}",response="static::class")
 * @Kubernetes\Operation("post",path="/apis/extensions/v1beta1/podsecuritypolicies",body="model",response="static::class")
 * @Kubernetes\Operation("delete",path="/apis/extensions/v1beta1/podsecuritypolicies/{name}",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("put",path="/apis/extensions/v1beta1/podsecuritypolicies/{name}",body="model",response="static::class")
 * @Kubernetes\Operation("deletecollection-all",path="/apis/extensions/v1beta1/podsecuritypolicies",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch-all",path="/apis/extensions/v1beta1/podsecuritypolicies",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("patch",path="/apis/extensions/v1beta1/podsecuritypolicies/{name}",body="patch",response="static::class")
 * @Kubernetes\Operation("list-all",path="/apis/extensions/v1beta1/podsecuritypolicies",response="K8s\Api\Model\Api\Extensions\v1beta1\PodSecurityPolicyList")
 */
class PodSecurityPolicy
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string
     */
    protected $apiVersion = 'extensions/v1beta1';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string
     */
    protected $kind = 'PodSecurityPolicy';

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ObjectMeta::class)
     * @var ObjectMeta
     */
    protected $metadata;

    /**
     * @Kubernetes\Attribute("spec",type="model",model=PodSecurityPolicySpec::class)
     * @var PodSecurityPolicySpec
     */
    protected $spec;

    /**
     * @param FSGroupStrategyOptions $fsGroup
     * @param RunAsUserStrategyOptions $runAsUser
     * @param SELinuxStrategyOptions $seLinux
     * @param SupplementalGroupsStrategyOptions $supplementalGroups
     */
    public function __construct(
        ?string $name,
        FSGroupStrategyOptions $fsGroup,
        RunAsUserStrategyOptions $runAsUser,
        SELinuxStrategyOptions $seLinux,
        SupplementalGroupsStrategyOptions $supplementalGroups
    ) {
        $this->metadata = new ObjectMeta($name);
        $this->spec = new PodSecurityPolicySpec($fsGroup, $runAsUser, $seLinux, $supplementalGroups);
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
     * allowPrivilegeEscalation determines if a pod can request to allow privilege escalation. If
     * unspecified, defaults to true.
     */
    public function isAllowPrivilegeEscalation(): ?bool
    {
        return $this->spec->isAllowPrivilegeEscalation();
    }

    /**
     * allowPrivilegeEscalation determines if a pod can request to allow privilege escalation. If
     * unspecified, defaults to true.
     *
     * @return static
     */
    public function setIsAllowPrivilegeEscalation(bool $allowPrivilegeEscalation)
    {
        $this->spec->setIsAllowPrivilegeEscalation($allowPrivilegeEscalation);

        return $this;
    }

    /**
     * allowedCapabilities is a list of capabilities that can be requested to add to the container.
     * Capabilities in this field may be added at the pod author's discretion. You must not list a
     * capability in both allowedCapabilities and requiredDropCapabilities.
     */
    public function getAllowedCapabilities(): ?array
    {
        return $this->spec->getAllowedCapabilities();
    }

    /**
     * allowedCapabilities is a list of capabilities that can be requested to add to the container.
     * Capabilities in this field may be added at the pod author's discretion. You must not list a
     * capability in both allowedCapabilities and requiredDropCapabilities.
     *
     * @return static
     */
    public function setAllowedCapabilities(array $allowedCapabilities)
    {
        $this->spec->setAllowedCapabilities($allowedCapabilities);

        return $this;
    }

    /**
     * allowedFlexVolumes is a whitelist of allowed Flexvolumes.  Empty or nil indicates that all
     * Flexvolumes may be used.  This parameter is effective only when the usage of the Flexvolumes is
     * allowed in the "volumes" field.
     *
     * @return iterable|AllowedFlexVolume[]
     */
    public function getAllowedFlexVolumes(): ?iterable
    {
        return $this->spec->getAllowedFlexVolumes();
    }

    /**
     * allowedFlexVolumes is a whitelist of allowed Flexvolumes.  Empty or nil indicates that all
     * Flexvolumes may be used.  This parameter is effective only when the usage of the Flexvolumes is
     * allowed in the "volumes" field.
     *
     * @return static
     */
    public function setAllowedFlexVolumes(iterable $allowedFlexVolumes)
    {
        $this->spec->setAllowedFlexVolumes($allowedFlexVolumes);

        return $this;
    }

    /**
     * @return static
     */
    public function addAllowedFlexVolumes(AllowedFlexVolume $allowedFlexVolume)
    {
        $this->spec->addAllowedFlexVolumes($allowedFlexVolume);

        return $this;
    }

    /**
     * allowedHostPaths is a white list of allowed host paths. Empty indicates that all host paths may be
     * used.
     *
     * @return iterable|AllowedHostPath[]
     */
    public function getAllowedHostPaths(): ?iterable
    {
        return $this->spec->getAllowedHostPaths();
    }

    /**
     * allowedHostPaths is a white list of allowed host paths. Empty indicates that all host paths may be
     * used.
     *
     * @return static
     */
    public function setAllowedHostPaths(iterable $allowedHostPaths)
    {
        $this->spec->setAllowedHostPaths($allowedHostPaths);

        return $this;
    }

    /**
     * @return static
     */
    public function addAllowedHostPaths(AllowedHostPath $allowedHostPath)
    {
        $this->spec->addAllowedHostPaths($allowedHostPath);

        return $this;
    }

    /**
     * AllowedProcMountTypes is a whitelist of allowed ProcMountTypes. Empty or nil indicates that only the
     * DefaultProcMountType may be used. This requires the ProcMountType feature flag to be enabled.
     */
    public function getAllowedProcMountTypes(): ?array
    {
        return $this->spec->getAllowedProcMountTypes();
    }

    /**
     * AllowedProcMountTypes is a whitelist of allowed ProcMountTypes. Empty or nil indicates that only the
     * DefaultProcMountType may be used. This requires the ProcMountType feature flag to be enabled.
     *
     * @return static
     */
    public function setAllowedProcMountTypes(array $allowedProcMountTypes)
    {
        $this->spec->setAllowedProcMountTypes($allowedProcMountTypes);

        return $this;
    }

    /**
     * allowedUnsafeSysctls is a list of explicitly allowed unsafe sysctls, defaults to none. Each entry is
     * either a plain sysctl name or ends in "*" in which case it is considered as a prefix of allowed
     * sysctls. Single * means all unsafe sysctls are allowed. Kubelet has to whitelist all allowed unsafe
     * sysctls explicitly to avoid rejection.
     *
     * Examples: e.g. "foo/*" allows "foo/bar", "foo/baz", etc. e.g. "foo.*" allows "foo.bar", "foo.baz",
     * etc.
     */
    public function getAllowedUnsafeSysctls(): ?array
    {
        return $this->spec->getAllowedUnsafeSysctls();
    }

    /**
     * allowedUnsafeSysctls is a list of explicitly allowed unsafe sysctls, defaults to none. Each entry is
     * either a plain sysctl name or ends in "*" in which case it is considered as a prefix of allowed
     * sysctls. Single * means all unsafe sysctls are allowed. Kubelet has to whitelist all allowed unsafe
     * sysctls explicitly to avoid rejection.
     *
     * Examples: e.g. "foo/*" allows "foo/bar", "foo/baz", etc. e.g. "foo.*" allows "foo.bar", "foo.baz",
     * etc.
     *
     * @return static
     */
    public function setAllowedUnsafeSysctls(array $allowedUnsafeSysctls)
    {
        $this->spec->setAllowedUnsafeSysctls($allowedUnsafeSysctls);

        return $this;
    }

    /**
     * defaultAddCapabilities is the default set of capabilities that will be added to the container unless
     * the pod spec specifically drops the capability.  You may not list a capability in both
     * defaultAddCapabilities and requiredDropCapabilities. Capabilities added here are implicitly allowed,
     * and need not be included in the allowedCapabilities list.
     */
    public function getDefaultAddCapabilities(): ?array
    {
        return $this->spec->getDefaultAddCapabilities();
    }

    /**
     * defaultAddCapabilities is the default set of capabilities that will be added to the container unless
     * the pod spec specifically drops the capability.  You may not list a capability in both
     * defaultAddCapabilities and requiredDropCapabilities. Capabilities added here are implicitly allowed,
     * and need not be included in the allowedCapabilities list.
     *
     * @return static
     */
    public function setDefaultAddCapabilities(array $defaultAddCapabilities)
    {
        $this->spec->setDefaultAddCapabilities($defaultAddCapabilities);

        return $this;
    }

    /**
     * defaultAllowPrivilegeEscalation controls the default setting for whether a process can gain more
     * privileges than its parent process.
     */
    public function isDefaultAllowPrivilegeEscalation(): ?bool
    {
        return $this->spec->isDefaultAllowPrivilegeEscalation();
    }

    /**
     * defaultAllowPrivilegeEscalation controls the default setting for whether a process can gain more
     * privileges than its parent process.
     *
     * @return static
     */
    public function setIsDefaultAllowPrivilegeEscalation(bool $defaultAllowPrivilegeEscalation)
    {
        $this->spec->setIsDefaultAllowPrivilegeEscalation($defaultAllowPrivilegeEscalation);

        return $this;
    }

    /**
     * forbiddenSysctls is a list of explicitly forbidden sysctls, defaults to none. Each entry is either a
     * plain sysctl name or ends in "*" in which case it is considered as a prefix of forbidden sysctls.
     * Single * means all sysctls are forbidden.
     *
     * Examples: e.g. "foo/*" forbids "foo/bar", "foo/baz", etc. e.g. "foo.*" forbids "foo.bar", "foo.baz",
     * etc.
     */
    public function getForbiddenSysctls(): ?array
    {
        return $this->spec->getForbiddenSysctls();
    }

    /**
     * forbiddenSysctls is a list of explicitly forbidden sysctls, defaults to none. Each entry is either a
     * plain sysctl name or ends in "*" in which case it is considered as a prefix of forbidden sysctls.
     * Single * means all sysctls are forbidden.
     *
     * Examples: e.g. "foo/*" forbids "foo/bar", "foo/baz", etc. e.g. "foo.*" forbids "foo.bar", "foo.baz",
     * etc.
     *
     * @return static
     */
    public function setForbiddenSysctls(array $forbiddenSysctls)
    {
        $this->spec->setForbiddenSysctls($forbiddenSysctls);

        return $this;
    }

    /**
     * fsGroup is the strategy that will dictate what fs group is used by the SecurityContext.
     */
    public function getFsGroup(): FSGroupStrategyOptions
    {
        return $this->spec->getFsGroup();
    }

    /**
     * fsGroup is the strategy that will dictate what fs group is used by the SecurityContext.
     *
     * @return static
     */
    public function setFsGroup(FSGroupStrategyOptions $fsGroup)
    {
        $this->spec->setFsGroup($fsGroup);

        return $this;
    }

    /**
     * hostIPC determines if the policy allows the use of HostIPC in the pod spec.
     */
    public function isHostIPC(): ?bool
    {
        return $this->spec->isHostIPC();
    }

    /**
     * hostIPC determines if the policy allows the use of HostIPC in the pod spec.
     *
     * @return static
     */
    public function setIsHostIPC(bool $hostIPC)
    {
        $this->spec->setIsHostIPC($hostIPC);

        return $this;
    }

    /**
     * hostNetwork determines if the policy allows the use of HostNetwork in the pod spec.
     */
    public function isHostNetwork(): ?bool
    {
        return $this->spec->isHostNetwork();
    }

    /**
     * hostNetwork determines if the policy allows the use of HostNetwork in the pod spec.
     *
     * @return static
     */
    public function setIsHostNetwork(bool $hostNetwork)
    {
        $this->spec->setIsHostNetwork($hostNetwork);

        return $this;
    }

    /**
     * hostPID determines if the policy allows the use of HostPID in the pod spec.
     */
    public function isHostPID(): ?bool
    {
        return $this->spec->isHostPID();
    }

    /**
     * hostPID determines if the policy allows the use of HostPID in the pod spec.
     *
     * @return static
     */
    public function setIsHostPID(bool $hostPID)
    {
        $this->spec->setIsHostPID($hostPID);

        return $this;
    }

    /**
     * hostPorts determines which host port ranges are allowed to be exposed.
     *
     * @return iterable|HostPortRange[]
     */
    public function getHostPorts(): ?iterable
    {
        return $this->spec->getHostPorts();
    }

    /**
     * hostPorts determines which host port ranges are allowed to be exposed.
     *
     * @return static
     */
    public function setHostPorts(iterable $hostPorts)
    {
        $this->spec->setHostPorts($hostPorts);

        return $this;
    }

    /**
     * @return static
     */
    public function addHostPorts(HostPortRange $hostPort)
    {
        $this->spec->addHostPorts($hostPort);

        return $this;
    }

    /**
     * privileged determines if a pod can request to be run as privileged.
     */
    public function isPrivileged(): ?bool
    {
        return $this->spec->isPrivileged();
    }

    /**
     * privileged determines if a pod can request to be run as privileged.
     *
     * @return static
     */
    public function setIsPrivileged(bool $privileged)
    {
        $this->spec->setIsPrivileged($privileged);

        return $this;
    }

    /**
     * readOnlyRootFilesystem when set to true will force containers to run with a read only root file
     * system.  If the container specifically requests to run with a non-read only root file system the PSP
     * should deny the pod. If set to false the container may run with a read only root file system if it
     * wishes but it will not be forced to.
     */
    public function isReadOnlyRootFilesystem(): ?bool
    {
        return $this->spec->isReadOnlyRootFilesystem();
    }

    /**
     * readOnlyRootFilesystem when set to true will force containers to run with a read only root file
     * system.  If the container specifically requests to run with a non-read only root file system the PSP
     * should deny the pod. If set to false the container may run with a read only root file system if it
     * wishes but it will not be forced to.
     *
     * @return static
     */
    public function setIsReadOnlyRootFilesystem(bool $readOnlyRootFilesystem)
    {
        $this->spec->setIsReadOnlyRootFilesystem($readOnlyRootFilesystem);

        return $this;
    }

    /**
     * requiredDropCapabilities are the capabilities that will be dropped from the container.  These are
     * required to be dropped and cannot be added.
     */
    public function getRequiredDropCapabilities(): ?array
    {
        return $this->spec->getRequiredDropCapabilities();
    }

    /**
     * requiredDropCapabilities are the capabilities that will be dropped from the container.  These are
     * required to be dropped and cannot be added.
     *
     * @return static
     */
    public function setRequiredDropCapabilities(array $requiredDropCapabilities)
    {
        $this->spec->setRequiredDropCapabilities($requiredDropCapabilities);

        return $this;
    }

    /**
     * RunAsGroup is the strategy that will dictate the allowable RunAsGroup values that may be set. If
     * this field is omitted, the pod's RunAsGroup can take any value. This field requires the RunAsGroup
     * feature gate to be enabled.
     */
    public function getRunAsGroup(): ?RunAsGroupStrategyOptions
    {
        return $this->spec->getRunAsGroup();
    }

    /**
     * RunAsGroup is the strategy that will dictate the allowable RunAsGroup values that may be set. If
     * this field is omitted, the pod's RunAsGroup can take any value. This field requires the RunAsGroup
     * feature gate to be enabled.
     *
     * @return static
     */
    public function setRunAsGroup(RunAsGroupStrategyOptions $runAsGroup)
    {
        $this->spec->setRunAsGroup($runAsGroup);

        return $this;
    }

    /**
     * runAsUser is the strategy that will dictate the allowable RunAsUser values that may be set.
     */
    public function getRunAsUser(): RunAsUserStrategyOptions
    {
        return $this->spec->getRunAsUser();
    }

    /**
     * runAsUser is the strategy that will dictate the allowable RunAsUser values that may be set.
     *
     * @return static
     */
    public function setRunAsUser(RunAsUserStrategyOptions $runAsUser)
    {
        $this->spec->setRunAsUser($runAsUser);

        return $this;
    }

    /**
     * seLinux is the strategy that will dictate the allowable labels that may be set.
     */
    public function getSeLinux(): SELinuxStrategyOptions
    {
        return $this->spec->getSeLinux();
    }

    /**
     * seLinux is the strategy that will dictate the allowable labels that may be set.
     *
     * @return static
     */
    public function setSeLinux(SELinuxStrategyOptions $seLinux)
    {
        $this->spec->setSeLinux($seLinux);

        return $this;
    }

    /**
     * supplementalGroups is the strategy that will dictate what supplemental groups are used by the
     * SecurityContext.
     */
    public function getSupplementalGroups(): SupplementalGroupsStrategyOptions
    {
        return $this->spec->getSupplementalGroups();
    }

    /**
     * supplementalGroups is the strategy that will dictate what supplemental groups are used by the
     * SecurityContext.
     *
     * @return static
     */
    public function setSupplementalGroups(SupplementalGroupsStrategyOptions $supplementalGroups)
    {
        $this->spec->setSupplementalGroups($supplementalGroups);

        return $this;
    }

    /**
     * volumes is a white list of allowed volume plugins. Empty indicates that no volumes may be used. To
     * allow all volumes you may use '*'.
     */
    public function getVolumes(): ?array
    {
        return $this->spec->getVolumes();
    }

    /**
     * volumes is a white list of allowed volume plugins. Empty indicates that no volumes may be used. To
     * allow all volumes you may use '*'.
     *
     * @return static
     */
    public function setVolumes(array $volumes)
    {
        $this->spec->setVolumes($volumes);

        return $this;
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
     * spec defines the policy enforced.
     */
    public function getSpec(): PodSecurityPolicySpec
    {
        return $this->spec;
    }

    /**
     * spec defines the policy enforced.
     *
     * @return static
     */
    public function setSpec(PodSecurityPolicySpec $spec)
    {
        $this->spec = $spec;

        return $this;
    }
}
