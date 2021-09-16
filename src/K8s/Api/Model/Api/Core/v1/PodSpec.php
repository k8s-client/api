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

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * PodSpec is a description of a pod.
 */
class PodSpec
{
    /**
     * @Kubernetes\Attribute("activeDeadlineSeconds")
     * @var int|null
     */
    protected $activeDeadlineSeconds = null;

    /**
     * @Kubernetes\Attribute("affinity",type="model",model=Affinity::class)
     * @var Affinity|null
     */
    protected $affinity = null;

    /**
     * @Kubernetes\Attribute("automountServiceAccountToken")
     * @var bool|null
     */
    protected $automountServiceAccountToken = null;

    /**
     * @Kubernetes\Attribute("containers",type="collection",model=Container::class,isRequired=true)
     * @var iterable|Container[]
     */
    protected $containers;

    /**
     * @Kubernetes\Attribute("dnsConfig",type="model",model=PodDNSConfig::class)
     * @var PodDNSConfig|null
     */
    protected $dnsConfig = null;

    /**
     * @Kubernetes\Attribute("dnsPolicy")
     * @var string|null
     */
    protected $dnsPolicy = null;

    /**
     * @Kubernetes\Attribute("enableServiceLinks")
     * @var bool|null
     */
    protected $enableServiceLinks = null;

    /**
     * @Kubernetes\Attribute("ephemeralContainers",type="collection",model=EphemeralContainer::class)
     * @var iterable|EphemeralContainer[]|null
     */
    protected $ephemeralContainers = null;

    /**
     * @Kubernetes\Attribute("hostAliases",type="collection",model=HostAlias::class)
     * @var iterable|HostAlias[]|null
     */
    protected $hostAliases = null;

    /**
     * @Kubernetes\Attribute("hostIPC")
     * @var bool|null
     */
    protected $hostIPC = null;

    /**
     * @Kubernetes\Attribute("hostNetwork")
     * @var bool|null
     */
    protected $hostNetwork = null;

    /**
     * @Kubernetes\Attribute("hostPID")
     * @var bool|null
     */
    protected $hostPID = null;

    /**
     * @Kubernetes\Attribute("hostname")
     * @var string|null
     */
    protected $hostname = null;

    /**
     * @Kubernetes\Attribute("imagePullSecrets",type="collection",model=LocalObjectReference::class)
     * @var iterable|LocalObjectReference[]|null
     */
    protected $imagePullSecrets = null;

    /**
     * @Kubernetes\Attribute("initContainers",type="collection",model=Container::class)
     * @var iterable|Container[]|null
     */
    protected $initContainers = null;

    /**
     * @Kubernetes\Attribute("nodeName")
     * @var string|null
     */
    protected $nodeName = null;

    /**
     * @Kubernetes\Attribute("nodeSelector")
     * @var string[]|null
     */
    protected $nodeSelector = null;

    /**
     * @Kubernetes\Attribute("overhead")
     * @var object[]|null
     */
    protected $overhead = null;

    /**
     * @Kubernetes\Attribute("preemptionPolicy")
     * @var string|null
     */
    protected $preemptionPolicy = null;

    /**
     * @Kubernetes\Attribute("priority")
     * @var int|null
     */
    protected $priority = null;

    /**
     * @Kubernetes\Attribute("priorityClassName")
     * @var string|null
     */
    protected $priorityClassName = null;

    /**
     * @Kubernetes\Attribute("readinessGates",type="collection",model=PodReadinessGate::class)
     * @var iterable|PodReadinessGate[]|null
     */
    protected $readinessGates = null;

    /**
     * @Kubernetes\Attribute("restartPolicy")
     * @var string|null
     */
    protected $restartPolicy = null;

    /**
     * @Kubernetes\Attribute("runtimeClassName")
     * @var string|null
     */
    protected $runtimeClassName = null;

    /**
     * @Kubernetes\Attribute("schedulerName")
     * @var string|null
     */
    protected $schedulerName = null;

    /**
     * @Kubernetes\Attribute("securityContext",type="model",model=PodSecurityContext::class)
     * @var PodSecurityContext|null
     */
    protected $securityContext = null;

    /**
     * @Kubernetes\Attribute("serviceAccount")
     * @var string|null
     */
    protected $serviceAccount = null;

    /**
     * @Kubernetes\Attribute("serviceAccountName")
     * @var string|null
     */
    protected $serviceAccountName = null;

    /**
     * @Kubernetes\Attribute("setHostnameAsFQDN")
     * @var bool|null
     */
    protected $setHostnameAsFQDN = null;

    /**
     * @Kubernetes\Attribute("shareProcessNamespace")
     * @var bool|null
     */
    protected $shareProcessNamespace = null;

    /**
     * @Kubernetes\Attribute("subdomain")
     * @var string|null
     */
    protected $subdomain = null;

    /**
     * @Kubernetes\Attribute("terminationGracePeriodSeconds")
     * @var int|null
     */
    protected $terminationGracePeriodSeconds = null;

    /**
     * @Kubernetes\Attribute("tolerations",type="collection",model=Toleration::class)
     * @var iterable|Toleration[]|null
     */
    protected $tolerations = null;

    /**
     * @Kubernetes\Attribute("topologySpreadConstraints",type="collection",model=TopologySpreadConstraint::class)
     * @var iterable|TopologySpreadConstraint[]|null
     */
    protected $topologySpreadConstraints = null;

    /**
     * @Kubernetes\Attribute("volumes",type="collection",model=Volume::class)
     * @var iterable|Volume[]|null
     */
    protected $volumes = null;

    /**
     * @param iterable|Container[] $containers
     */
    public function __construct(iterable $containers)
    {
        $this->containers = new Collection($containers);
    }

    /**
     * Optional duration in seconds the pod may be active on the node relative to StartTime before the
     * system will actively try to mark it failed and kill associated containers. Value must be a positive
     * integer.
     */
    public function getActiveDeadlineSeconds(): ?int
    {
        return $this->activeDeadlineSeconds;
    }

    /**
     * Optional duration in seconds the pod may be active on the node relative to StartTime before the
     * system will actively try to mark it failed and kill associated containers. Value must be a positive
     * integer.
     *
     * @return static
     */
    public function setActiveDeadlineSeconds(int $activeDeadlineSeconds)
    {
        $this->activeDeadlineSeconds = $activeDeadlineSeconds;

        return $this;
    }

    /**
     * If specified, the pod's scheduling constraints
     */
    public function getAffinity(): ?Affinity
    {
        return $this->affinity;
    }

    /**
     * If specified, the pod's scheduling constraints
     *
     * @return static
     */
    public function setAffinity(Affinity $affinity)
    {
        $this->affinity = $affinity;

        return $this;
    }

    /**
     * AutomountServiceAccountToken indicates whether a service account token should be automatically
     * mounted.
     */
    public function isAutomountServiceAccountToken(): ?bool
    {
        return $this->automountServiceAccountToken;
    }

    /**
     * AutomountServiceAccountToken indicates whether a service account token should be automatically
     * mounted.
     *
     * @return static
     */
    public function setIsAutomountServiceAccountToken(bool $automountServiceAccountToken)
    {
        $this->automountServiceAccountToken = $automountServiceAccountToken;

        return $this;
    }

    /**
     * List of containers belonging to the pod. Containers cannot currently be added or removed. There must
     * be at least one container in a Pod. Cannot be updated.
     *
     * @return iterable|Container[]
     */
    public function getContainers(): iterable
    {
        return $this->containers;
    }

    /**
     * List of containers belonging to the pod. Containers cannot currently be added or removed. There must
     * be at least one container in a Pod. Cannot be updated.
     *
     * @return static
     */
    public function setContainers(iterable $containers)
    {
        $this->containers = $containers;

        return $this;
    }

    /**
     * @return static
     */
    public function addContainers(Container $container)
    {
        if (!$this->containers) {
            $this->containers = new Collection();
        }
        $this->containers[] = $container;

        return $this;
    }

    /**
     * Specifies the DNS parameters of a pod. Parameters specified here will be merged to the generated DNS
     * configuration based on DNSPolicy.
     */
    public function getDnsConfig(): ?PodDNSConfig
    {
        return $this->dnsConfig;
    }

    /**
     * Specifies the DNS parameters of a pod. Parameters specified here will be merged to the generated DNS
     * configuration based on DNSPolicy.
     *
     * @return static
     */
    public function setDnsConfig(PodDNSConfig $dnsConfig)
    {
        $this->dnsConfig = $dnsConfig;

        return $this;
    }

    /**
     * Set DNS policy for the pod. Defaults to "ClusterFirst". Valid values are 'ClusterFirstWithHostNet',
     * 'ClusterFirst', 'Default' or 'None'. DNS parameters given in DNSConfig will be merged with the
     * policy selected with DNSPolicy. To have DNS options set along with hostNetwork, you have to specify
     * DNS policy explicitly to 'ClusterFirstWithHostNet'.
     */
    public function getDnsPolicy(): ?string
    {
        return $this->dnsPolicy;
    }

    /**
     * Set DNS policy for the pod. Defaults to "ClusterFirst". Valid values are 'ClusterFirstWithHostNet',
     * 'ClusterFirst', 'Default' or 'None'. DNS parameters given in DNSConfig will be merged with the
     * policy selected with DNSPolicy. To have DNS options set along with hostNetwork, you have to specify
     * DNS policy explicitly to 'ClusterFirstWithHostNet'.
     *
     * @return static
     */
    public function setDnsPolicy(string $dnsPolicy)
    {
        $this->dnsPolicy = $dnsPolicy;

        return $this;
    }

    /**
     * EnableServiceLinks indicates whether information about services should be injected into pod's
     * environment variables, matching the syntax of Docker links. Optional: Defaults to true.
     */
    public function isEnableServiceLinks(): ?bool
    {
        return $this->enableServiceLinks;
    }

    /**
     * EnableServiceLinks indicates whether information about services should be injected into pod's
     * environment variables, matching the syntax of Docker links. Optional: Defaults to true.
     *
     * @return static
     */
    public function setIsEnableServiceLinks(bool $enableServiceLinks)
    {
        $this->enableServiceLinks = $enableServiceLinks;

        return $this;
    }

    /**
     * List of ephemeral containers run in this pod. Ephemeral containers may be run in an existing pod to
     * perform user-initiated actions such as debugging. This list cannot be specified when creating a pod,
     * and it cannot be modified by updating the pod spec. In order to add an ephemeral container to an
     * existing pod, use the pod's ephemeralcontainers subresource. This field is alpha-level and is only
     * honored by servers that enable the EphemeralContainers feature.
     *
     * @return iterable|EphemeralContainer[]
     */
    public function getEphemeralContainers(): ?iterable
    {
        return $this->ephemeralContainers;
    }

    /**
     * List of ephemeral containers run in this pod. Ephemeral containers may be run in an existing pod to
     * perform user-initiated actions such as debugging. This list cannot be specified when creating a pod,
     * and it cannot be modified by updating the pod spec. In order to add an ephemeral container to an
     * existing pod, use the pod's ephemeralcontainers subresource. This field is alpha-level and is only
     * honored by servers that enable the EphemeralContainers feature.
     *
     * @return static
     */
    public function setEphemeralContainers(iterable $ephemeralContainers)
    {
        $this->ephemeralContainers = $ephemeralContainers;

        return $this;
    }

    /**
     * @return static
     */
    public function addEphemeralContainers(EphemeralContainer $ephemeralContainer)
    {
        if (!$this->ephemeralContainers) {
            $this->ephemeralContainers = new Collection();
        }
        $this->ephemeralContainers[] = $ephemeralContainer;

        return $this;
    }

    /**
     * HostAliases is an optional list of hosts and IPs that will be injected into the pod's hosts file if
     * specified. This is only valid for non-hostNetwork pods.
     *
     * @return iterable|HostAlias[]
     */
    public function getHostAliases(): ?iterable
    {
        return $this->hostAliases;
    }

    /**
     * HostAliases is an optional list of hosts and IPs that will be injected into the pod's hosts file if
     * specified. This is only valid for non-hostNetwork pods.
     *
     * @return static
     */
    public function setHostAliases(iterable $hostAliases)
    {
        $this->hostAliases = $hostAliases;

        return $this;
    }

    /**
     * @return static
     */
    public function addHostAliases(HostAlias $hostAliase)
    {
        if (!$this->hostAliases) {
            $this->hostAliases = new Collection();
        }
        $this->hostAliases[] = $hostAliase;

        return $this;
    }

    /**
     * Use the host's ipc namespace. Optional: Default to false.
     */
    public function isHostIPC(): ?bool
    {
        return $this->hostIPC;
    }

    /**
     * Use the host's ipc namespace. Optional: Default to false.
     *
     * @return static
     */
    public function setIsHostIPC(bool $hostIPC)
    {
        $this->hostIPC = $hostIPC;

        return $this;
    }

    /**
     * Host networking requested for this pod. Use the host's network namespace. If this option is set, the
     * ports that will be used must be specified. Default to false.
     */
    public function isHostNetwork(): ?bool
    {
        return $this->hostNetwork;
    }

    /**
     * Host networking requested for this pod. Use the host's network namespace. If this option is set, the
     * ports that will be used must be specified. Default to false.
     *
     * @return static
     */
    public function setIsHostNetwork(bool $hostNetwork)
    {
        $this->hostNetwork = $hostNetwork;

        return $this;
    }

    /**
     * Use the host's pid namespace. Optional: Default to false.
     */
    public function isHostPID(): ?bool
    {
        return $this->hostPID;
    }

    /**
     * Use the host's pid namespace. Optional: Default to false.
     *
     * @return static
     */
    public function setIsHostPID(bool $hostPID)
    {
        $this->hostPID = $hostPID;

        return $this;
    }

    /**
     * Specifies the hostname of the Pod If not specified, the pod's hostname will be set to a
     * system-defined value.
     */
    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    /**
     * Specifies the hostname of the Pod If not specified, the pod's hostname will be set to a
     * system-defined value.
     *
     * @return static
     */
    public function setHostname(string $hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * ImagePullSecrets is an optional list of references to secrets in the same namespace to use for
     * pulling any of the images used by this PodSpec. If specified, these secrets will be passed to
     * individual puller implementations for them to use. For example, in the case of docker, only
     * DockerConfig type secrets are honored. More info:
     * https://kubernetes.io/docs/concepts/containers/images#specifying-imagepullsecrets-on-a-pod
     *
     * @return iterable|LocalObjectReference[]
     */
    public function getImagePullSecrets(): ?iterable
    {
        return $this->imagePullSecrets;
    }

    /**
     * ImagePullSecrets is an optional list of references to secrets in the same namespace to use for
     * pulling any of the images used by this PodSpec. If specified, these secrets will be passed to
     * individual puller implementations for them to use. For example, in the case of docker, only
     * DockerConfig type secrets are honored. More info:
     * https://kubernetes.io/docs/concepts/containers/images#specifying-imagepullsecrets-on-a-pod
     *
     * @return static
     */
    public function setImagePullSecrets(iterable $imagePullSecrets)
    {
        $this->imagePullSecrets = $imagePullSecrets;

        return $this;
    }

    /**
     * @return static
     */
    public function addImagePullSecrets(LocalObjectReference $imagePullSecret)
    {
        if (!$this->imagePullSecrets) {
            $this->imagePullSecrets = new Collection();
        }
        $this->imagePullSecrets[] = $imagePullSecret;

        return $this;
    }

    /**
     * List of initialization containers belonging to the pod. Init containers are executed in order prior
     * to containers being started. If any init container fails, the pod is considered to have failed and
     * is handled according to its restartPolicy. The name for an init container or normal container must
     * be unique among all containers. Init containers may not have Lifecycle actions, Readiness probes,
     * Liveness probes, or Startup probes. The resourceRequirements of an init container are taken into
     * account during scheduling by finding the highest request/limit for each resource type, and then
     * using the max of of that value or the sum of the normal containers. Limits are applied to init
     * containers in a similar fashion. Init containers cannot currently be added or removed. Cannot be
     * updated. More info: https://kubernetes.io/docs/concepts/workloads/pods/init-containers/
     *
     * @return iterable|Container[]
     */
    public function getInitContainers(): ?iterable
    {
        return $this->initContainers;
    }

    /**
     * List of initialization containers belonging to the pod. Init containers are executed in order prior
     * to containers being started. If any init container fails, the pod is considered to have failed and
     * is handled according to its restartPolicy. The name for an init container or normal container must
     * be unique among all containers. Init containers may not have Lifecycle actions, Readiness probes,
     * Liveness probes, or Startup probes. The resourceRequirements of an init container are taken into
     * account during scheduling by finding the highest request/limit for each resource type, and then
     * using the max of of that value or the sum of the normal containers. Limits are applied to init
     * containers in a similar fashion. Init containers cannot currently be added or removed. Cannot be
     * updated. More info: https://kubernetes.io/docs/concepts/workloads/pods/init-containers/
     *
     * @return static
     */
    public function setInitContainers(iterable $initContainers)
    {
        $this->initContainers = $initContainers;

        return $this;
    }

    /**
     * @return static
     */
    public function addInitContainers(Container $initContainer)
    {
        if (!$this->initContainers) {
            $this->initContainers = new Collection();
        }
        $this->initContainers[] = $initContainer;

        return $this;
    }

    /**
     * NodeName is a request to schedule this pod onto a specific node. If it is non-empty, the scheduler
     * simply schedules this pod onto that node, assuming that it fits resource requirements.
     */
    public function getNodeName(): ?string
    {
        return $this->nodeName;
    }

    /**
     * NodeName is a request to schedule this pod onto a specific node. If it is non-empty, the scheduler
     * simply schedules this pod onto that node, assuming that it fits resource requirements.
     *
     * @return static
     */
    public function setNodeName(string $nodeName)
    {
        $this->nodeName = $nodeName;

        return $this;
    }

    /**
     * NodeSelector is a selector which must be true for the pod to fit on a node. Selector which must
     * match a node's labels for the pod to be scheduled on that node. More info:
     * https://kubernetes.io/docs/concepts/configuration/assign-pod-node/
     */
    public function getNodeSelector(): ?array
    {
        return $this->nodeSelector;
    }

    /**
     * NodeSelector is a selector which must be true for the pod to fit on a node. Selector which must
     * match a node's labels for the pod to be scheduled on that node. More info:
     * https://kubernetes.io/docs/concepts/configuration/assign-pod-node/
     *
     * @return static
     */
    public function setNodeSelector(array $nodeSelector)
    {
        $this->nodeSelector = $nodeSelector;

        return $this;
    }

    /**
     * Overhead represents the resource overhead associated with running a pod for a given RuntimeClass.
     * This field will be autopopulated at admission time by the RuntimeClass admission controller. If the
     * RuntimeClass admission controller is enabled, overhead must not be set in Pod create requests. The
     * RuntimeClass admission controller will reject Pod create requests which have the overhead already
     * set. If RuntimeClass is configured and selected in the PodSpec, Overhead will be set to the value
     * defined in the corresponding RuntimeClass, otherwise it will remain unset and treated as zero. More
     * info: https://git.k8s.io/enhancements/keps/sig-node/20190226-pod-overhead.md This field is
     * alpha-level as of Kubernetes v1.16, and is only honored by servers that enable the PodOverhead
     * feature.
     */
    public function getOverhead(): ?array
    {
        return $this->overhead;
    }

    /**
     * Overhead represents the resource overhead associated with running a pod for a given RuntimeClass.
     * This field will be autopopulated at admission time by the RuntimeClass admission controller. If the
     * RuntimeClass admission controller is enabled, overhead must not be set in Pod create requests. The
     * RuntimeClass admission controller will reject Pod create requests which have the overhead already
     * set. If RuntimeClass is configured and selected in the PodSpec, Overhead will be set to the value
     * defined in the corresponding RuntimeClass, otherwise it will remain unset and treated as zero. More
     * info: https://git.k8s.io/enhancements/keps/sig-node/20190226-pod-overhead.md This field is
     * alpha-level as of Kubernetes v1.16, and is only honored by servers that enable the PodOverhead
     * feature.
     *
     * @return static
     */
    public function setOverhead(array $overhead)
    {
        $this->overhead = $overhead;

        return $this;
    }

    /**
     * PreemptionPolicy is the Policy for preempting pods with lower priority. One of Never,
     * PreemptLowerPriority. Defaults to PreemptLowerPriority if unset. This field is beta-level, gated by
     * the NonPreemptingPriority feature-gate.
     */
    public function getPreemptionPolicy(): ?string
    {
        return $this->preemptionPolicy;
    }

    /**
     * PreemptionPolicy is the Policy for preempting pods with lower priority. One of Never,
     * PreemptLowerPriority. Defaults to PreemptLowerPriority if unset. This field is beta-level, gated by
     * the NonPreemptingPriority feature-gate.
     *
     * @return static
     */
    public function setPreemptionPolicy(string $preemptionPolicy)
    {
        $this->preemptionPolicy = $preemptionPolicy;

        return $this;
    }

    /**
     * The priority value. Various system components use this field to find the priority of the pod. When
     * Priority Admission Controller is enabled, it prevents users from setting this field. The admission
     * controller populates this field from PriorityClassName. The higher the value, the higher the
     * priority.
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }

    /**
     * The priority value. Various system components use this field to find the priority of the pod. When
     * Priority Admission Controller is enabled, it prevents users from setting this field. The admission
     * controller populates this field from PriorityClassName. The higher the value, the higher the
     * priority.
     *
     * @return static
     */
    public function setPriority(int $priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * If specified, indicates the pod's priority. "system-node-critical" and "system-cluster-critical" are
     * two special keywords which indicate the highest priorities with the former being the highest
     * priority. Any other name must be defined by creating a PriorityClass object with that name. If not
     * specified, the pod priority will be default or zero if there is no default.
     */
    public function getPriorityClassName(): ?string
    {
        return $this->priorityClassName;
    }

    /**
     * If specified, indicates the pod's priority. "system-node-critical" and "system-cluster-critical" are
     * two special keywords which indicate the highest priorities with the former being the highest
     * priority. Any other name must be defined by creating a PriorityClass object with that name. If not
     * specified, the pod priority will be default or zero if there is no default.
     *
     * @return static
     */
    public function setPriorityClassName(string $priorityClassName)
    {
        $this->priorityClassName = $priorityClassName;

        return $this;
    }

    /**
     * If specified, all readiness gates will be evaluated for pod readiness. A pod is ready when all its
     * containers are ready AND all conditions specified in the readiness gates have status equal to "True"
     * More info: https://git.k8s.io/enhancements/keps/sig-network/0007-pod-ready%2B%2B.md
     *
     * @return iterable|PodReadinessGate[]
     */
    public function getReadinessGates(): ?iterable
    {
        return $this->readinessGates;
    }

    /**
     * If specified, all readiness gates will be evaluated for pod readiness. A pod is ready when all its
     * containers are ready AND all conditions specified in the readiness gates have status equal to "True"
     * More info: https://git.k8s.io/enhancements/keps/sig-network/0007-pod-ready%2B%2B.md
     *
     * @return static
     */
    public function setReadinessGates(iterable $readinessGates)
    {
        $this->readinessGates = $readinessGates;

        return $this;
    }

    /**
     * @return static
     */
    public function addReadinessGates(PodReadinessGate $readinessGate)
    {
        if (!$this->readinessGates) {
            $this->readinessGates = new Collection();
        }
        $this->readinessGates[] = $readinessGate;

        return $this;
    }

    /**
     * Restart policy for all containers within the pod. One of Always, OnFailure, Never. Default to
     * Always. More info: https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle/#restart-policy
     */
    public function getRestartPolicy(): ?string
    {
        return $this->restartPolicy;
    }

    /**
     * Restart policy for all containers within the pod. One of Always, OnFailure, Never. Default to
     * Always. More info: https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle/#restart-policy
     *
     * @return static
     */
    public function setRestartPolicy(string $restartPolicy)
    {
        $this->restartPolicy = $restartPolicy;

        return $this;
    }

    /**
     * RuntimeClassName refers to a RuntimeClass object in the node.k8s.io group, which should be used to
     * run this pod.  If no RuntimeClass resource matches the named class, the pod will not be run. If
     * unset or empty, the "legacy" RuntimeClass will be used, which is an implicit class with an empty
     * definition that uses the default runtime handler. More info:
     * https://git.k8s.io/enhancements/keps/sig-node/runtime-class.md This is a beta feature as of
     * Kubernetes v1.14.
     */
    public function getRuntimeClassName(): ?string
    {
        return $this->runtimeClassName;
    }

    /**
     * RuntimeClassName refers to a RuntimeClass object in the node.k8s.io group, which should be used to
     * run this pod.  If no RuntimeClass resource matches the named class, the pod will not be run. If
     * unset or empty, the "legacy" RuntimeClass will be used, which is an implicit class with an empty
     * definition that uses the default runtime handler. More info:
     * https://git.k8s.io/enhancements/keps/sig-node/runtime-class.md This is a beta feature as of
     * Kubernetes v1.14.
     *
     * @return static
     */
    public function setRuntimeClassName(string $runtimeClassName)
    {
        $this->runtimeClassName = $runtimeClassName;

        return $this;
    }

    /**
     * If specified, the pod will be dispatched by specified scheduler. If not specified, the pod will be
     * dispatched by default scheduler.
     */
    public function getSchedulerName(): ?string
    {
        return $this->schedulerName;
    }

    /**
     * If specified, the pod will be dispatched by specified scheduler. If not specified, the pod will be
     * dispatched by default scheduler.
     *
     * @return static
     */
    public function setSchedulerName(string $schedulerName)
    {
        $this->schedulerName = $schedulerName;

        return $this;
    }

    /**
     * SecurityContext holds pod-level security attributes and common container settings. Optional:
     * Defaults to empty.  See type description for default values of each field.
     */
    public function getSecurityContext(): ?PodSecurityContext
    {
        return $this->securityContext;
    }

    /**
     * SecurityContext holds pod-level security attributes and common container settings. Optional:
     * Defaults to empty.  See type description for default values of each field.
     *
     * @return static
     */
    public function setSecurityContext(PodSecurityContext $securityContext)
    {
        $this->securityContext = $securityContext;

        return $this;
    }

    /**
     * DeprecatedServiceAccount is a depreciated alias for ServiceAccountName. Deprecated: Use
     * serviceAccountName instead.
     */
    public function getServiceAccount(): ?string
    {
        return $this->serviceAccount;
    }

    /**
     * DeprecatedServiceAccount is a depreciated alias for ServiceAccountName. Deprecated: Use
     * serviceAccountName instead.
     *
     * @return static
     */
    public function setServiceAccount(string $serviceAccount)
    {
        $this->serviceAccount = $serviceAccount;

        return $this;
    }

    /**
     * ServiceAccountName is the name of the ServiceAccount to use to run this pod. More info:
     * https://kubernetes.io/docs/tasks/configure-pod-container/configure-service-account/
     */
    public function getServiceAccountName(): ?string
    {
        return $this->serviceAccountName;
    }

    /**
     * ServiceAccountName is the name of the ServiceAccount to use to run this pod. More info:
     * https://kubernetes.io/docs/tasks/configure-pod-container/configure-service-account/
     *
     * @return static
     */
    public function setServiceAccountName(string $serviceAccountName)
    {
        $this->serviceAccountName = $serviceAccountName;

        return $this;
    }

    /**
     * If true the pod's hostname will be configured as the pod's FQDN, rather than the leaf name (the
     * default). In Linux containers, this means setting the FQDN in the hostname field of the kernel (the
     * nodename field of struct utsname). In Windows containers, this means setting the registry value of
     * hostname for the registry key HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Services\Tcpip\Parameters
     * to FQDN. If a pod does not have FQDN, this has no effect. Default to false.
     */
    public function isSetHostnameAsFQDN(): ?bool
    {
        return $this->setHostnameAsFQDN;
    }

    /**
     * If true the pod's hostname will be configured as the pod's FQDN, rather than the leaf name (the
     * default). In Linux containers, this means setting the FQDN in the hostname field of the kernel (the
     * nodename field of struct utsname). In Windows containers, this means setting the registry value of
     * hostname for the registry key HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Services\Tcpip\Parameters
     * to FQDN. If a pod does not have FQDN, this has no effect. Default to false.
     *
     * @return static
     */
    public function setIsSetHostnameAsFQDN(bool $setHostnameAsFQDN)
    {
        $this->setHostnameAsFQDN = $setHostnameAsFQDN;

        return $this;
    }

    /**
     * Share a single process namespace between all of the containers in a pod. When this is set containers
     * will be able to view and signal processes from other containers in the same pod, and the first
     * process in each container will not be assigned PID 1. HostPID and ShareProcessNamespace cannot both
     * be set. Optional: Default to false.
     */
    public function isShareProcessNamespace(): ?bool
    {
        return $this->shareProcessNamespace;
    }

    /**
     * Share a single process namespace between all of the containers in a pod. When this is set containers
     * will be able to view and signal processes from other containers in the same pod, and the first
     * process in each container will not be assigned PID 1. HostPID and ShareProcessNamespace cannot both
     * be set. Optional: Default to false.
     *
     * @return static
     */
    public function setIsShareProcessNamespace(bool $shareProcessNamespace)
    {
        $this->shareProcessNamespace = $shareProcessNamespace;

        return $this;
    }

    /**
     * If specified, the fully qualified Pod hostname will be "<hostname>.<subdomain>.<pod
     * namespace>.svc.<cluster domain>". If not specified, the pod will not have a domainname at all.
     */
    public function getSubdomain(): ?string
    {
        return $this->subdomain;
    }

    /**
     * If specified, the fully qualified Pod hostname will be "<hostname>.<subdomain>.<pod
     * namespace>.svc.<cluster domain>". If not specified, the pod will not have a domainname at all.
     *
     * @return static
     */
    public function setSubdomain(string $subdomain)
    {
        $this->subdomain = $subdomain;

        return $this;
    }

    /**
     * Optional duration in seconds the pod needs to terminate gracefully. May be decreased in delete
     * request. Value must be non-negative integer. The value zero indicates delete immediately. If this
     * value is nil, the default grace period will be used instead. The grace period is the duration in
     * seconds after the processes running in the pod are sent a termination signal and the time when the
     * processes are forcibly halted with a kill signal. Set this value longer than the expected cleanup
     * time for your process. Defaults to 30 seconds.
     */
    public function getTerminationGracePeriodSeconds(): ?int
    {
        return $this->terminationGracePeriodSeconds;
    }

    /**
     * Optional duration in seconds the pod needs to terminate gracefully. May be decreased in delete
     * request. Value must be non-negative integer. The value zero indicates delete immediately. If this
     * value is nil, the default grace period will be used instead. The grace period is the duration in
     * seconds after the processes running in the pod are sent a termination signal and the time when the
     * processes are forcibly halted with a kill signal. Set this value longer than the expected cleanup
     * time for your process. Defaults to 30 seconds.
     *
     * @return static
     */
    public function setTerminationGracePeriodSeconds(int $terminationGracePeriodSeconds)
    {
        $this->terminationGracePeriodSeconds = $terminationGracePeriodSeconds;

        return $this;
    }

    /**
     * If specified, the pod's tolerations.
     *
     * @return iterable|Toleration[]
     */
    public function getTolerations(): ?iterable
    {
        return $this->tolerations;
    }

    /**
     * If specified, the pod's tolerations.
     *
     * @return static
     */
    public function setTolerations(iterable $tolerations)
    {
        $this->tolerations = $tolerations;

        return $this;
    }

    /**
     * @return static
     */
    public function addTolerations(Toleration $toleration)
    {
        if (!$this->tolerations) {
            $this->tolerations = new Collection();
        }
        $this->tolerations[] = $toleration;

        return $this;
    }

    /**
     * TopologySpreadConstraints describes how a group of pods ought to spread across topology domains.
     * Scheduler will schedule pods in a way which abides by the constraints. All topologySpreadConstraints
     * are ANDed.
     *
     * @return iterable|TopologySpreadConstraint[]
     */
    public function getTopologySpreadConstraints(): ?iterable
    {
        return $this->topologySpreadConstraints;
    }

    /**
     * TopologySpreadConstraints describes how a group of pods ought to spread across topology domains.
     * Scheduler will schedule pods in a way which abides by the constraints. All topologySpreadConstraints
     * are ANDed.
     *
     * @return static
     */
    public function setTopologySpreadConstraints(iterable $topologySpreadConstraints)
    {
        $this->topologySpreadConstraints = $topologySpreadConstraints;

        return $this;
    }

    /**
     * @return static
     */
    public function addTopologySpreadConstraints(TopologySpreadConstraint $topologySpreadConstraint)
    {
        if (!$this->topologySpreadConstraints) {
            $this->topologySpreadConstraints = new Collection();
        }
        $this->topologySpreadConstraints[] = $topologySpreadConstraint;

        return $this;
    }

    /**
     * List of volumes that can be mounted by containers belonging to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes
     *
     * @return iterable|Volume[]
     */
    public function getVolumes(): ?iterable
    {
        return $this->volumes;
    }

    /**
     * List of volumes that can be mounted by containers belonging to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes
     *
     * @return static
     */
    public function setVolumes(iterable $volumes)
    {
        $this->volumes = $volumes;

        return $this;
    }

    /**
     * @return static
     */
    public function addVolumes(Volume $volume)
    {
        if (!$this->volumes) {
            $this->volumes = new Collection();
        }
        $this->volumes[] = $volume;

        return $this;
    }
}
