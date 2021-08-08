<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.18.20
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
 * StatefulSetStatus represents the current state of a StatefulSet.
 */
class StatefulSetStatus
{
    /**
     * @Kubernetes\Attribute("collisionCount")
     * @var int|null
     */
    protected $collisionCount = null;

    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=StatefulSetCondition::class)
     * @var iterable|StatefulSetCondition[]|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("currentReplicas")
     * @var int|null
     */
    protected $currentReplicas = null;

    /**
     * @Kubernetes\Attribute("currentRevision")
     * @var string|null
     */
    protected $currentRevision = null;

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
     * @Kubernetes\Attribute("updateRevision")
     * @var string|null
     */
    protected $updateRevision = null;

    /**
     * @Kubernetes\Attribute("updatedReplicas")
     * @var int|null
     */
    protected $updatedReplicas = null;

    /**
     * @param int $replicas
     */
    public function __construct(int $replicas)
    {
        $this->replicas = $replicas;
    }

    /**
     * collisionCount is the count of hash collisions for the StatefulSet. The StatefulSet controller uses
     * this field as a collision avoidance mechanism when it needs to create the name for the newest
     * ControllerRevision.
     */
    public function getCollisionCount(): ?int
    {
        return $this->collisionCount;
    }

    /**
     * collisionCount is the count of hash collisions for the StatefulSet. The StatefulSet controller uses
     * this field as a collision avoidance mechanism when it needs to create the name for the newest
     * ControllerRevision.
     *
     * @return static
     */
    public function setCollisionCount(int $collisionCount)
    {
        $this->collisionCount = $collisionCount;

        return $this;
    }

    /**
     * Represents the latest available observations of a statefulset's current state.
     *
     * @return iterable|StatefulSetCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * Represents the latest available observations of a statefulset's current state.
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
    public function addConditions(StatefulSetCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * currentReplicas is the number of Pods created by the StatefulSet controller from the StatefulSet
     * version indicated by currentRevision.
     */
    public function getCurrentReplicas(): ?int
    {
        return $this->currentReplicas;
    }

    /**
     * currentReplicas is the number of Pods created by the StatefulSet controller from the StatefulSet
     * version indicated by currentRevision.
     *
     * @return static
     */
    public function setCurrentReplicas(int $currentReplicas)
    {
        $this->currentReplicas = $currentReplicas;

        return $this;
    }

    /**
     * currentRevision, if not empty, indicates the version of the StatefulSet used to generate Pods in the
     * sequence [0,currentReplicas).
     */
    public function getCurrentRevision(): ?string
    {
        return $this->currentRevision;
    }

    /**
     * currentRevision, if not empty, indicates the version of the StatefulSet used to generate Pods in the
     * sequence [0,currentReplicas).
     *
     * @return static
     */
    public function setCurrentRevision(string $currentRevision)
    {
        $this->currentRevision = $currentRevision;

        return $this;
    }

    /**
     * observedGeneration is the most recent generation observed for this StatefulSet. It corresponds to
     * the StatefulSet's generation, which is updated on mutation by the API Server.
     */
    public function getObservedGeneration(): ?int
    {
        return $this->observedGeneration;
    }

    /**
     * observedGeneration is the most recent generation observed for this StatefulSet. It corresponds to
     * the StatefulSet's generation, which is updated on mutation by the API Server.
     *
     * @return static
     */
    public function setObservedGeneration(int $observedGeneration)
    {
        $this->observedGeneration = $observedGeneration;

        return $this;
    }

    /**
     * readyReplicas is the number of Pods created by the StatefulSet controller that have a Ready
     * Condition.
     */
    public function getReadyReplicas(): ?int
    {
        return $this->readyReplicas;
    }

    /**
     * readyReplicas is the number of Pods created by the StatefulSet controller that have a Ready
     * Condition.
     *
     * @return static
     */
    public function setReadyReplicas(int $readyReplicas)
    {
        $this->readyReplicas = $readyReplicas;

        return $this;
    }

    /**
     * replicas is the number of Pods created by the StatefulSet controller.
     */
    public function getReplicas(): int
    {
        return $this->replicas;
    }

    /**
     * replicas is the number of Pods created by the StatefulSet controller.
     *
     * @return static
     */
    public function setReplicas(int $replicas)
    {
        $this->replicas = $replicas;

        return $this;
    }

    /**
     * updateRevision, if not empty, indicates the version of the StatefulSet used to generate Pods in the
     * sequence [replicas-updatedReplicas,replicas)
     */
    public function getUpdateRevision(): ?string
    {
        return $this->updateRevision;
    }

    /**
     * updateRevision, if not empty, indicates the version of the StatefulSet used to generate Pods in the
     * sequence [replicas-updatedReplicas,replicas)
     *
     * @return static
     */
    public function setUpdateRevision(string $updateRevision)
    {
        $this->updateRevision = $updateRevision;

        return $this;
    }

    /**
     * updatedReplicas is the number of Pods created by the StatefulSet controller from the StatefulSet
     * version indicated by updateRevision.
     */
    public function getUpdatedReplicas(): ?int
    {
        return $this->updatedReplicas;
    }

    /**
     * updatedReplicas is the number of Pods created by the StatefulSet controller from the StatefulSet
     * version indicated by updateRevision.
     *
     * @return static
     */
    public function setUpdatedReplicas(int $updatedReplicas)
    {
        $this->updatedReplicas = $updatedReplicas;

        return $this;
    }
}
