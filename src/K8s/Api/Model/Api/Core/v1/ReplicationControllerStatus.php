<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.7
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
 * ReplicationControllerStatus represents the current status of a replication controller.
 */
class ReplicationControllerStatus
{
    /**
     * @Kubernetes\Attribute("availableReplicas")
     * @var int|null
     */
    protected $availableReplicas = null;

    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=ReplicationControllerCondition::class)
     * @var iterable|ReplicationControllerCondition[]|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("fullyLabeledReplicas")
     * @var int|null
     */
    protected $fullyLabeledReplicas = null;

    /**
     * @Kubernetes\Attribute("observedGeneration")
     * @var int|null
     */
    protected $observedGeneration = null;

    /**
     * @Kubernetes\Attribute("readyReplicas")
     * @var int|null
     */
    protected $readyReplicas = null;

    /**
     * @Kubernetes\Attribute("replicas",isRequired=true)
     * @var int
     */
    protected $replicas;

    /**
     * @param int $replicas
     */
    public function __construct(int $replicas)
    {
        $this->replicas = $replicas;
    }

    /**
     * The number of available replicas (ready for at least minReadySeconds) for this replication
     * controller.
     */
    public function getAvailableReplicas(): ?int
    {
        return $this->availableReplicas;
    }

    /**
     * The number of available replicas (ready for at least minReadySeconds) for this replication
     * controller.
     *
     * @return static
     */
    public function setAvailableReplicas(int $availableReplicas)
    {
        $this->availableReplicas = $availableReplicas;

        return $this;
    }

    /**
     * Represents the latest available observations of a replication controller's current state.
     *
     * @return iterable|ReplicationControllerCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * Represents the latest available observations of a replication controller's current state.
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
    public function addConditions(ReplicationControllerCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * The number of pods that have labels matching the labels of the pod template of the replication
     * controller.
     */
    public function getFullyLabeledReplicas(): ?int
    {
        return $this->fullyLabeledReplicas;
    }

    /**
     * The number of pods that have labels matching the labels of the pod template of the replication
     * controller.
     *
     * @return static
     */
    public function setFullyLabeledReplicas(int $fullyLabeledReplicas)
    {
        $this->fullyLabeledReplicas = $fullyLabeledReplicas;

        return $this;
    }

    /**
     * ObservedGeneration reflects the generation of the most recently observed replication controller.
     */
    public function getObservedGeneration(): ?int
    {
        return $this->observedGeneration;
    }

    /**
     * ObservedGeneration reflects the generation of the most recently observed replication controller.
     *
     * @return static
     */
    public function setObservedGeneration(int $observedGeneration)
    {
        $this->observedGeneration = $observedGeneration;

        return $this;
    }

    /**
     * The number of ready replicas for this replication controller.
     */
    public function getReadyReplicas(): ?int
    {
        return $this->readyReplicas;
    }

    /**
     * The number of ready replicas for this replication controller.
     *
     * @return static
     */
    public function setReadyReplicas(int $readyReplicas)
    {
        $this->readyReplicas = $readyReplicas;

        return $this;
    }

    /**
     * Replicas is the most recently oberved number of replicas. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#what-is-a-replicationcontroller
     */
    public function getReplicas(): int
    {
        return $this->replicas;
    }

    /**
     * Replicas is the most recently oberved number of replicas. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#what-is-a-replicationcontroller
     *
     * @return static
     */
    public function setReplicas(int $replicas)
    {
        $this->replicas = $replicas;

        return $this;
    }
}
