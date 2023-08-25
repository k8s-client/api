<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Apps\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * ReplicaSetStatus represents the current status of a ReplicaSet.
 */
class ReplicaSetStatus
{
    /**
     * @Kubernetes\Attribute("availableReplicas")
     * @var int|null
     */
    protected $availableReplicas = null;

    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=ReplicaSetCondition::class)
     * @var iterable|ReplicaSetCondition[]|null
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
     * The number of available replicas (ready for at least minReadySeconds) for this replica set.
     */
    public function getAvailableReplicas(): ?int
    {
        return $this->availableReplicas;
    }

    /**
     * The number of available replicas (ready for at least minReadySeconds) for this replica set.
     *
     * @return static
     */
    public function setAvailableReplicas(int $availableReplicas)
    {
        $this->availableReplicas = $availableReplicas;

        return $this;
    }

    /**
     * Represents the latest available observations of a replica set's current state.
     *
     * @return iterable|ReplicaSetCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * Represents the latest available observations of a replica set's current state.
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
    public function addConditions(ReplicaSetCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * The number of pods that have labels matching the labels of the pod template of the replicaset.
     */
    public function getFullyLabeledReplicas(): ?int
    {
        return $this->fullyLabeledReplicas;
    }

    /**
     * The number of pods that have labels matching the labels of the pod template of the replicaset.
     *
     * @return static
     */
    public function setFullyLabeledReplicas(int $fullyLabeledReplicas)
    {
        $this->fullyLabeledReplicas = $fullyLabeledReplicas;

        return $this;
    }

    /**
     * ObservedGeneration reflects the generation of the most recently observed ReplicaSet.
     */
    public function getObservedGeneration(): ?int
    {
        return $this->observedGeneration;
    }

    /**
     * ObservedGeneration reflects the generation of the most recently observed ReplicaSet.
     *
     * @return static
     */
    public function setObservedGeneration(int $observedGeneration)
    {
        $this->observedGeneration = $observedGeneration;

        return $this;
    }

    /**
     * readyReplicas is the number of pods targeted by this ReplicaSet with a Ready Condition.
     */
    public function getReadyReplicas(): ?int
    {
        return $this->readyReplicas;
    }

    /**
     * readyReplicas is the number of pods targeted by this ReplicaSet with a Ready Condition.
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
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller/#what-is-a-replicationcontroller
     */
    public function getReplicas(): int
    {
        return $this->replicas;
    }

    /**
     * Replicas is the most recently oberved number of replicas. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller/#what-is-a-replicationcontroller
     *
     * @return static
     */
    public function setReplicas(int $replicas)
    {
        $this->replicas = $replicas;

        return $this;
    }
}
