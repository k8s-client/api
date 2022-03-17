<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.8
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
 * NodeStatus is information about the current status of a node.
 */
class NodeStatus
{
    /**
     * @Kubernetes\Attribute("addresses",type="collection",model=NodeAddress::class)
     * @var iterable|NodeAddress[]|null
     */
    protected $addresses = null;

    /**
     * @Kubernetes\Attribute("allocatable")
     * @var object[]|null
     */
    protected $allocatable = null;

    /**
     * @Kubernetes\Attribute("capacity")
     * @var object[]|null
     */
    protected $capacity = null;

    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=NodeCondition::class)
     * @var iterable|NodeCondition[]|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("config",type="model",model=NodeConfigStatus::class)
     * @var NodeConfigStatus|null
     */
    protected $config = null;

    /**
     * @Kubernetes\Attribute("daemonEndpoints",type="model",model=NodeDaemonEndpoints::class)
     * @var NodeDaemonEndpoints|null
     */
    protected $daemonEndpoints = null;

    /**
     * @Kubernetes\Attribute("images",type="collection",model=ContainerImage::class)
     * @var iterable|ContainerImage[]|null
     */
    protected $images = null;

    /**
     * @Kubernetes\Attribute("nodeInfo",type="model",model=NodeSystemInfo::class)
     * @var NodeSystemInfo|null
     */
    protected $nodeInfo = null;

    /**
     * @Kubernetes\Attribute("phase")
     * @var string|null
     */
    protected $phase = null;

    /**
     * @Kubernetes\Attribute("volumesAttached",type="collection",model=AttachedVolume::class)
     * @var iterable|AttachedVolume[]|null
     */
    protected $volumesAttached = null;

    /**
     * @Kubernetes\Attribute("volumesInUse")
     * @var string[]|null
     */
    protected $volumesInUse = null;

    /**
     * List of addresses reachable to the node. Queried from cloud provider, if available. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#addresses Note: This field is declared as mergeable,
     * but the merge key is not sufficiently unique, which can cause data corruption when it is merged.
     * Callers should instead use a full-replacement patch. See http://pr.k8s.io/79391 for an example.
     *
     * @return iterable|NodeAddress[]
     */
    public function getAddresses(): ?iterable
    {
        return $this->addresses;
    }

    /**
     * List of addresses reachable to the node. Queried from cloud provider, if available. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#addresses Note: This field is declared as mergeable,
     * but the merge key is not sufficiently unique, which can cause data corruption when it is merged.
     * Callers should instead use a full-replacement patch. See http://pr.k8s.io/79391 for an example.
     *
     * @return static
     */
    public function setAddresses(iterable $addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * @return static
     */
    public function addAddresses(NodeAddress $addresse)
    {
        if (!$this->addresses) {
            $this->addresses = new Collection();
        }
        $this->addresses[] = $addresse;

        return $this;
    }

    /**
     * Allocatable represents the resources of a node that are available for scheduling. Defaults to
     * Capacity.
     */
    public function getAllocatable(): ?array
    {
        return $this->allocatable;
    }

    /**
     * Allocatable represents the resources of a node that are available for scheduling. Defaults to
     * Capacity.
     *
     * @return static
     */
    public function setAllocatable(array $allocatable)
    {
        $this->allocatable = $allocatable;

        return $this;
    }

    /**
     * Capacity represents the total resources of a node. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#capacity
     */
    public function getCapacity(): ?array
    {
        return $this->capacity;
    }

    /**
     * Capacity represents the total resources of a node. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#capacity
     *
     * @return static
     */
    public function setCapacity(array $capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Conditions is an array of current observed node conditions. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#condition
     *
     * @return iterable|NodeCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * Conditions is an array of current observed node conditions. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#condition
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
    public function addConditions(NodeCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * Status of the config assigned to the node via the dynamic Kubelet config feature.
     */
    public function getConfig(): ?NodeConfigStatus
    {
        return $this->config;
    }

    /**
     * Status of the config assigned to the node via the dynamic Kubelet config feature.
     *
     * @return static
     */
    public function setConfig(NodeConfigStatus $config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Endpoints of daemons running on the Node.
     */
    public function getDaemonEndpoints(): ?NodeDaemonEndpoints
    {
        return $this->daemonEndpoints;
    }

    /**
     * Endpoints of daemons running on the Node.
     *
     * @return static
     */
    public function setDaemonEndpoints(NodeDaemonEndpoints $daemonEndpoints)
    {
        $this->daemonEndpoints = $daemonEndpoints;

        return $this;
    }

    /**
     * List of container images on this node
     *
     * @return iterable|ContainerImage[]
     */
    public function getImages(): ?iterable
    {
        return $this->images;
    }

    /**
     * List of container images on this node
     *
     * @return static
     */
    public function setImages(iterable $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @return static
     */
    public function addImages(ContainerImage $image)
    {
        if (!$this->images) {
            $this->images = new Collection();
        }
        $this->images[] = $image;

        return $this;
    }

    /**
     * Set of ids/uuids to uniquely identify the node. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#info
     */
    public function getNodeInfo(): ?NodeSystemInfo
    {
        return $this->nodeInfo;
    }

    /**
     * Set of ids/uuids to uniquely identify the node. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#info
     *
     * @return static
     */
    public function setNodeInfo(NodeSystemInfo $nodeInfo)
    {
        $this->nodeInfo = $nodeInfo;

        return $this;
    }

    /**
     * NodePhase is the recently observed lifecycle phase of the node. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#phase The field is never populated, and now is
     * deprecated.
     */
    public function getPhase(): ?string
    {
        return $this->phase;
    }

    /**
     * NodePhase is the recently observed lifecycle phase of the node. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#phase The field is never populated, and now is
     * deprecated.
     *
     * @return static
     */
    public function setPhase(string $phase)
    {
        $this->phase = $phase;

        return $this;
    }

    /**
     * List of volumes that are attached to the node.
     *
     * @return iterable|AttachedVolume[]
     */
    public function getVolumesAttached(): ?iterable
    {
        return $this->volumesAttached;
    }

    /**
     * List of volumes that are attached to the node.
     *
     * @return static
     */
    public function setVolumesAttached(iterable $volumesAttached)
    {
        $this->volumesAttached = $volumesAttached;

        return $this;
    }

    /**
     * @return static
     */
    public function addVolumesAttached(AttachedVolume $volumesAttached)
    {
        if (!$this->volumesAttached) {
            $this->volumesAttached = new Collection();
        }
        $this->volumesAttached[] = $volumesAttached;

        return $this;
    }

    /**
     * List of attachable volumes in use (mounted) by the node.
     */
    public function getVolumesInUse(): ?array
    {
        return $this->volumesInUse;
    }

    /**
     * List of attachable volumes in use (mounted) by the node.
     *
     * @return static
     */
    public function setVolumesInUse(array $volumesInUse)
    {
        $this->volumesInUse = $volumesInUse;

        return $this;
    }
}
