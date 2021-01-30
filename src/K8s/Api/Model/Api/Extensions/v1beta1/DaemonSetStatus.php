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

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * DaemonSetStatus represents the current status of a daemon set.
 */
class DaemonSetStatus
{
    /**
     * @Kubernetes\Attribute("collisionCount")
     * @var int|null
     */
    protected $collisionCount = null;

    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=DaemonSetCondition::class)
     * @var iterable|DaemonSetCondition[]|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("currentNumberScheduled",isRequired=true)
     * @var int
     */
    protected $currentNumberScheduled;

    /**
     * @Kubernetes\Attribute("desiredNumberScheduled",isRequired=true)
     * @var int
     */
    protected $desiredNumberScheduled;

    /**
     * @Kubernetes\Attribute("numberAvailable")
     * @var int|null
     */
    protected $numberAvailable = null;

    /**
     * @Kubernetes\Attribute("numberMisscheduled",isRequired=true)
     * @var int
     */
    protected $numberMisscheduled;

    /**
     * @Kubernetes\Attribute("numberReady",isRequired=true)
     * @var int
     */
    protected $numberReady;

    /**
     * @Kubernetes\Attribute("numberUnavailable")
     * @var int|null
     */
    protected $numberUnavailable = null;

    /**
     * @Kubernetes\Attribute("observedGeneration")
     * @var int|null
     */
    protected $observedGeneration = null;

    /**
     * @Kubernetes\Attribute("updatedNumberScheduled")
     * @var int|null
     */
    protected $updatedNumberScheduled = null;

    /**
     * @param int $currentNumberScheduled
     * @param int $desiredNumberScheduled
     * @param int $numberMisscheduled
     * @param int $numberReady
     */
    public function __construct(int $currentNumberScheduled, int $desiredNumberScheduled, int $numberMisscheduled, int $numberReady)
    {
        $this->currentNumberScheduled = $currentNumberScheduled;
        $this->desiredNumberScheduled = $desiredNumberScheduled;
        $this->numberMisscheduled = $numberMisscheduled;
        $this->numberReady = $numberReady;
    }

    /**
     * Count of hash collisions for the DaemonSet. The DaemonSet controller uses this field as a collision
     * avoidance mechanism when it needs to create the name for the newest ControllerRevision.
     */
    public function getCollisionCount(): ?int
    {
        return $this->collisionCount;
    }

    /**
     * Count of hash collisions for the DaemonSet. The DaemonSet controller uses this field as a collision
     * avoidance mechanism when it needs to create the name for the newest ControllerRevision.
     *
     * @return static
     */
    public function setCollisionCount(int $collisionCount)
    {
        $this->collisionCount = $collisionCount;

        return $this;
    }

    /**
     * Represents the latest available observations of a DaemonSet's current state.
     *
     * @return iterable|DaemonSetCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * Represents the latest available observations of a DaemonSet's current state.
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
    public function addConditions(DaemonSetCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * The number of nodes that are running at least 1 daemon pod and are supposed to run the daemon pod.
     * More info: https://kubernetes.io/docs/concepts/workloads/controllers/daemonset/
     */
    public function getCurrentNumberScheduled(): int
    {
        return $this->currentNumberScheduled;
    }

    /**
     * The number of nodes that are running at least 1 daemon pod and are supposed to run the daemon pod.
     * More info: https://kubernetes.io/docs/concepts/workloads/controllers/daemonset/
     *
     * @return static
     */
    public function setCurrentNumberScheduled(int $currentNumberScheduled)
    {
        $this->currentNumberScheduled = $currentNumberScheduled;

        return $this;
    }

    /**
     * The total number of nodes that should be running the daemon pod (including nodes correctly running
     * the daemon pod). More info: https://kubernetes.io/docs/concepts/workloads/controllers/daemonset/
     */
    public function getDesiredNumberScheduled(): int
    {
        return $this->desiredNumberScheduled;
    }

    /**
     * The total number of nodes that should be running the daemon pod (including nodes correctly running
     * the daemon pod). More info: https://kubernetes.io/docs/concepts/workloads/controllers/daemonset/
     *
     * @return static
     */
    public function setDesiredNumberScheduled(int $desiredNumberScheduled)
    {
        $this->desiredNumberScheduled = $desiredNumberScheduled;

        return $this;
    }

    /**
     * The number of nodes that should be running the daemon pod and have one or more of the daemon pod
     * running and available (ready for at least spec.minReadySeconds)
     */
    public function getNumberAvailable(): ?int
    {
        return $this->numberAvailable;
    }

    /**
     * The number of nodes that should be running the daemon pod and have one or more of the daemon pod
     * running and available (ready for at least spec.minReadySeconds)
     *
     * @return static
     */
    public function setNumberAvailable(int $numberAvailable)
    {
        $this->numberAvailable = $numberAvailable;

        return $this;
    }

    /**
     * The number of nodes that are running the daemon pod, but are not supposed to run the daemon pod.
     * More info: https://kubernetes.io/docs/concepts/workloads/controllers/daemonset/
     */
    public function getNumberMisscheduled(): int
    {
        return $this->numberMisscheduled;
    }

    /**
     * The number of nodes that are running the daemon pod, but are not supposed to run the daemon pod.
     * More info: https://kubernetes.io/docs/concepts/workloads/controllers/daemonset/
     *
     * @return static
     */
    public function setNumberMisscheduled(int $numberMisscheduled)
    {
        $this->numberMisscheduled = $numberMisscheduled;

        return $this;
    }

    /**
     * The number of nodes that should be running the daemon pod and have one or more of the daemon pod
     * running and ready.
     */
    public function getNumberReady(): int
    {
        return $this->numberReady;
    }

    /**
     * The number of nodes that should be running the daemon pod and have one or more of the daemon pod
     * running and ready.
     *
     * @return static
     */
    public function setNumberReady(int $numberReady)
    {
        $this->numberReady = $numberReady;

        return $this;
    }

    /**
     * The number of nodes that should be running the daemon pod and have none of the daemon pod running
     * and available (ready for at least spec.minReadySeconds)
     */
    public function getNumberUnavailable(): ?int
    {
        return $this->numberUnavailable;
    }

    /**
     * The number of nodes that should be running the daemon pod and have none of the daemon pod running
     * and available (ready for at least spec.minReadySeconds)
     *
     * @return static
     */
    public function setNumberUnavailable(int $numberUnavailable)
    {
        $this->numberUnavailable = $numberUnavailable;

        return $this;
    }

    /**
     * The most recent generation observed by the daemon set controller.
     */
    public function getObservedGeneration(): ?int
    {
        return $this->observedGeneration;
    }

    /**
     * The most recent generation observed by the daemon set controller.
     *
     * @return static
     */
    public function setObservedGeneration(int $observedGeneration)
    {
        $this->observedGeneration = $observedGeneration;

        return $this;
    }

    /**
     * The total number of nodes that are running updated daemon pod
     */
    public function getUpdatedNumberScheduled(): ?int
    {
        return $this->updatedNumberScheduled;
    }

    /**
     * The total number of nodes that are running updated daemon pod
     *
     * @return static
     */
    public function setUpdatedNumberScheduled(int $updatedNumberScheduled)
    {
        $this->updatedNumberScheduled = $updatedNumberScheduled;

        return $this;
    }
}
