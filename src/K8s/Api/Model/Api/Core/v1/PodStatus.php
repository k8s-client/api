<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.1
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * PodStatus represents information about the status of a pod. Status may trail the actual state of a
 * system, especially if the node that hosts the pod cannot contact the control plane.
 */
class PodStatus
{
    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=PodCondition::class)
     * @var iterable|PodCondition[]|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("containerStatuses",type="collection",model=ContainerStatus::class)
     * @var iterable|ContainerStatus[]|null
     */
    protected $containerStatuses = null;

    /**
     * @Kubernetes\Attribute("ephemeralContainerStatuses",type="collection",model=ContainerStatus::class)
     * @var iterable|ContainerStatus[]|null
     */
    protected $ephemeralContainerStatuses = null;

    /**
     * @Kubernetes\Attribute("hostIP")
     * @var string|null
     */
    protected $hostIP = null;

    /**
     * @Kubernetes\Attribute("initContainerStatuses",type="collection",model=ContainerStatus::class)
     * @var iterable|ContainerStatus[]|null
     */
    protected $initContainerStatuses = null;

    /**
     * @Kubernetes\Attribute("message")
     * @var string|null
     */
    protected $message = null;

    /**
     * @Kubernetes\Attribute("nominatedNodeName")
     * @var string|null
     */
    protected $nominatedNodeName = null;

    /**
     * @Kubernetes\Attribute("phase")
     * @var string|null
     */
    protected $phase = null;

    /**
     * @Kubernetes\Attribute("podIP")
     * @var string|null
     */
    protected $podIP = null;

    /**
     * @Kubernetes\Attribute("podIPs",type="collection",model=PodIP::class)
     * @var iterable|PodIP[]|null
     */
    protected $podIPs = null;

    /**
     * @Kubernetes\Attribute("qosClass")
     * @var string|null
     */
    protected $qosClass = null;

    /**
     * @Kubernetes\Attribute("reason")
     * @var string|null
     */
    protected $reason = null;

    /**
     * @Kubernetes\Attribute("startTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $startTime = null;

    /**
     * Current service state of pod. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-conditions
     *
     * @return iterable|PodCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * Current service state of pod. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-conditions
     *
     * @return static
     */
    public function setConditions(iterable $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * @return static
     */
    public function addConditions(PodCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * The list has one entry per container in the manifest. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-and-container-status
     *
     * @return iterable|ContainerStatus[]
     */
    public function getContainerStatuses(): ?iterable
    {
        return $this->containerStatuses;
    }

    /**
     * The list has one entry per container in the manifest. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-and-container-status
     *
     * @return static
     */
    public function setContainerStatuses(iterable $containerStatuses)
    {
        $this->containerStatuses = $containerStatuses;

        return $this;
    }

    /**
     * @return static
     */
    public function addContainerStatuses(ContainerStatus $containerStatuse)
    {
        if (!$this->containerStatuses) {
            $this->containerStatuses = new Collection();
        }
        $this->containerStatuses[] = $containerStatuse;

        return $this;
    }

    /**
     * Status for any ephemeral containers that have run in this pod. This field is beta-level and
     * available on clusters that haven't disabled the EphemeralContainers feature gate.
     *
     * @return iterable|ContainerStatus[]
     */
    public function getEphemeralContainerStatuses(): ?iterable
    {
        return $this->ephemeralContainerStatuses;
    }

    /**
     * Status for any ephemeral containers that have run in this pod. This field is beta-level and
     * available on clusters that haven't disabled the EphemeralContainers feature gate.
     *
     * @return static
     */
    public function setEphemeralContainerStatuses(iterable $ephemeralContainerStatuses)
    {
        $this->ephemeralContainerStatuses = $ephemeralContainerStatuses;

        return $this;
    }

    /**
     * @return static
     */
    public function addEphemeralContainerStatuses(ContainerStatus $ephemeralContainerStatuse)
    {
        if (!$this->ephemeralContainerStatuses) {
            $this->ephemeralContainerStatuses = new Collection();
        }
        $this->ephemeralContainerStatuses[] = $ephemeralContainerStatuse;

        return $this;
    }

    /**
     * IP address of the host to which the pod is assigned. Empty if not yet scheduled.
     */
    public function getHostIP(): ?string
    {
        return $this->hostIP;
    }

    /**
     * IP address of the host to which the pod is assigned. Empty if not yet scheduled.
     *
     * @return static
     */
    public function setHostIP(string $hostIP)
    {
        $this->hostIP = $hostIP;

        return $this;
    }

    /**
     * The list has one entry per init container in the manifest. The most recent successful init container
     * will have ready = true, the most recently started container will have startTime set. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-and-container-status
     *
     * @return iterable|ContainerStatus[]
     */
    public function getInitContainerStatuses(): ?iterable
    {
        return $this->initContainerStatuses;
    }

    /**
     * The list has one entry per init container in the manifest. The most recent successful init container
     * will have ready = true, the most recently started container will have startTime set. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-and-container-status
     *
     * @return static
     */
    public function setInitContainerStatuses(iterable $initContainerStatuses)
    {
        $this->initContainerStatuses = $initContainerStatuses;

        return $this;
    }

    /**
     * @return static
     */
    public function addInitContainerStatuses(ContainerStatus $initContainerStatuse)
    {
        if (!$this->initContainerStatuses) {
            $this->initContainerStatuses = new Collection();
        }
        $this->initContainerStatuses[] = $initContainerStatuse;

        return $this;
    }

    /**
     * A human readable message indicating details about why the pod is in this condition.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * A human readable message indicating details about why the pod is in this condition.
     *
     * @return static
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * nominatedNodeName is set only when this pod preempts other pods on the node, but it cannot be
     * scheduled right away as preemption victims receive their graceful termination periods. This field
     * does not guarantee that the pod will be scheduled on this node. Scheduler may decide to place the
     * pod elsewhere if other nodes become available sooner. Scheduler may also decide to give the
     * resources on this node to a higher priority pod that is created after preemption. As a result, this
     * field may be different than PodSpec.nodeName when the pod is scheduled.
     */
    public function getNominatedNodeName(): ?string
    {
        return $this->nominatedNodeName;
    }

    /**
     * nominatedNodeName is set only when this pod preempts other pods on the node, but it cannot be
     * scheduled right away as preemption victims receive their graceful termination periods. This field
     * does not guarantee that the pod will be scheduled on this node. Scheduler may decide to place the
     * pod elsewhere if other nodes become available sooner. Scheduler may also decide to give the
     * resources on this node to a higher priority pod that is created after preemption. As a result, this
     * field may be different than PodSpec.nodeName when the pod is scheduled.
     *
     * @return static
     */
    public function setNominatedNodeName(string $nominatedNodeName)
    {
        $this->nominatedNodeName = $nominatedNodeName;

        return $this;
    }

    /**
     * The phase of a Pod is a simple, high-level summary of where the Pod is in its lifecycle. The
     * conditions array, the reason and message fields, and the individual container status arrays contain
     * more detail about the pod's status. There are five possible phase values:
     *
     * Pending: The pod has been accepted by the Kubernetes system, but one or more of the container images
     * has not been created. This includes time before being scheduled as well as time spent downloading
     * images over the network, which could take a while. Running: The pod has been bound to a node, and
     * all of the containers have been created. At least one container is still running, or is in the
     * process of starting or restarting. Succeeded: All containers in the pod have terminated in success,
     * and will not be restarted. Failed: All containers in the pod have terminated, and at least one
     * container has terminated in failure. The container either exited with non-zero status or was
     * terminated by the system. Unknown: For some reason the state of the pod could not be obtained,
     * typically due to an error in communicating with the host of the pod.
     *
     * More info: https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-phase
     */
    public function getPhase(): ?string
    {
        return $this->phase;
    }

    /**
     * The phase of a Pod is a simple, high-level summary of where the Pod is in its lifecycle. The
     * conditions array, the reason and message fields, and the individual container status arrays contain
     * more detail about the pod's status. There are five possible phase values:
     *
     * Pending: The pod has been accepted by the Kubernetes system, but one or more of the container images
     * has not been created. This includes time before being scheduled as well as time spent downloading
     * images over the network, which could take a while. Running: The pod has been bound to a node, and
     * all of the containers have been created. At least one container is still running, or is in the
     * process of starting or restarting. Succeeded: All containers in the pod have terminated in success,
     * and will not be restarted. Failed: All containers in the pod have terminated, and at least one
     * container has terminated in failure. The container either exited with non-zero status or was
     * terminated by the system. Unknown: For some reason the state of the pod could not be obtained,
     * typically due to an error in communicating with the host of the pod.
     *
     * More info: https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-phase
     *
     *
     *
     * @return static
     */
    public function setPhase(string $phase)
    {
        $this->phase = $phase;

        return $this;
    }

    /**
     * IP address allocated to the pod. Routable at least within the cluster. Empty if not yet allocated.
     */
    public function getPodIP(): ?string
    {
        return $this->podIP;
    }

    /**
     * IP address allocated to the pod. Routable at least within the cluster. Empty if not yet allocated.
     *
     * @return static
     */
    public function setPodIP(string $podIP)
    {
        $this->podIP = $podIP;

        return $this;
    }

    /**
     * podIPs holds the IP addresses allocated to the pod. If this field is specified, the 0th entry must
     * match the podIP field. Pods may be allocated at most 1 value for each of IPv4 and IPv6. This list is
     * empty if no IPs have been allocated yet.
     *
     * @return iterable|PodIP[]
     */
    public function getPodIPs(): ?iterable
    {
        return $this->podIPs;
    }

    /**
     * podIPs holds the IP addresses allocated to the pod. If this field is specified, the 0th entry must
     * match the podIP field. Pods may be allocated at most 1 value for each of IPv4 and IPv6. This list is
     * empty if no IPs have been allocated yet.
     *
     * @return static
     */
    public function setPodIPs(iterable $podIPs)
    {
        $this->podIPs = $podIPs;

        return $this;
    }

    /**
     * @return static
     */
    public function addPodIPs(PodIP $podIP)
    {
        if (!$this->podIPs) {
            $this->podIPs = new Collection();
        }
        $this->podIPs[] = $podIP;

        return $this;
    }

    /**
     * The Quality of Service (QOS) classification assigned to the pod based on resource requirements See
     * PodQOSClass type for available QOS classes More info:
     * https://git.k8s.io/community/contributors/design-proposals/node/resource-qos.md
     */
    public function getQosClass(): ?string
    {
        return $this->qosClass;
    }

    /**
     * The Quality of Service (QOS) classification assigned to the pod based on resource requirements See
     * PodQOSClass type for available QOS classes More info:
     * https://git.k8s.io/community/contributors/design-proposals/node/resource-qos.md
     *
     *
     *
     * @return static
     */
    public function setQosClass(string $qosClass)
    {
        $this->qosClass = $qosClass;

        return $this;
    }

    /**
     * A brief CamelCase message indicating details about why the pod is in this state. e.g. 'Evicted'
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * A brief CamelCase message indicating details about why the pod is in this state. e.g. 'Evicted'
     *
     * @return static
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * RFC 3339 date and time at which the object was acknowledged by the Kubelet. This is before the
     * Kubelet pulled the container image(s) for the pod.
     */
    public function getStartTime(): ?DateTimeInterface
    {
        return $this->startTime;
    }

    /**
     * RFC 3339 date and time at which the object was acknowledged by the Kubelet. This is before the
     * Kubelet pulled the container image(s) for the pod.
     *
     * @return static
     */
    public function setStartTime(DateTimeInterface $startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }
}
