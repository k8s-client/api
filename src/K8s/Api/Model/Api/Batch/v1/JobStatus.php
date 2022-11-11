<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.14
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Batch\v1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * JobStatus represents the current state of a Job.
 */
class JobStatus
{
    /**
     * @Kubernetes\Attribute("active")
     * @var int|null
     */
    protected $active = null;

    /**
     * @Kubernetes\Attribute("completedIndexes")
     * @var string|null
     */
    protected $completedIndexes = null;

    /**
     * @Kubernetes\Attribute("completionTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $completionTime = null;

    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=JobCondition::class)
     * @var iterable|JobCondition[]|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("failed")
     * @var int|null
     */
    protected $failed = null;

    /**
     * @Kubernetes\Attribute("ready")
     * @var int|null
     */
    protected $ready = null;

    /**
     * @Kubernetes\Attribute("startTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $startTime = null;

    /**
     * @Kubernetes\Attribute("succeeded")
     * @var int|null
     */
    protected $succeeded = null;

    /**
     * @Kubernetes\Attribute("uncountedTerminatedPods",type="model",model=UncountedTerminatedPods::class)
     * @var UncountedTerminatedPods|null
     */
    protected $uncountedTerminatedPods = null;

    /**
     * The number of pending and running pods.
     */
    public function getActive(): ?int
    {
        return $this->active;
    }

    /**
     * The number of pending and running pods.
     *
     * @return static
     */
    public function setActive(int $active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * CompletedIndexes holds the completed indexes when .spec.completionMode = "Indexed" in a text format.
     * The indexes are represented as decimal integers separated by commas. The numbers are listed in
     * increasing order. Three or more consecutive numbers are compressed and represented by the first and
     * last element of the series, separated by a hyphen. For example, if the completed indexes are 1, 3,
     * 4, 5 and 7, they are represented as "1,3-5,7".
     */
    public function getCompletedIndexes(): ?string
    {
        return $this->completedIndexes;
    }

    /**
     * CompletedIndexes holds the completed indexes when .spec.completionMode = "Indexed" in a text format.
     * The indexes are represented as decimal integers separated by commas. The numbers are listed in
     * increasing order. Three or more consecutive numbers are compressed and represented by the first and
     * last element of the series, separated by a hyphen. For example, if the completed indexes are 1, 3,
     * 4, 5 and 7, they are represented as "1,3-5,7".
     *
     * @return static
     */
    public function setCompletedIndexes(string $completedIndexes)
    {
        $this->completedIndexes = $completedIndexes;

        return $this;
    }

    /**
     * Represents time when the job was completed. It is not guaranteed to be set in happens-before order
     * across separate operations. It is represented in RFC3339 form and is in UTC. The completion time is
     * only set when the job finishes successfully.
     */
    public function getCompletionTime(): ?DateTimeInterface
    {
        return $this->completionTime;
    }

    /**
     * Represents time when the job was completed. It is not guaranteed to be set in happens-before order
     * across separate operations. It is represented in RFC3339 form and is in UTC. The completion time is
     * only set when the job finishes successfully.
     *
     * @return static
     */
    public function setCompletionTime(DateTimeInterface $completionTime)
    {
        $this->completionTime = $completionTime;

        return $this;
    }

    /**
     * The latest available observations of an object's current state. When a Job fails, one of the
     * conditions will have type "Failed" and status true. When a Job is suspended, one of the conditions
     * will have type "Suspended" and status true; when the Job is resumed, the status of this condition
     * will become false. When a Job is completed, one of the conditions will have type "Complete" and
     * status true. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * @return iterable|JobCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * The latest available observations of an object's current state. When a Job fails, one of the
     * conditions will have type "Failed" and status true. When a Job is suspended, one of the conditions
     * will have type "Suspended" and status true; when the Job is resumed, the status of this condition
     * will become false. When a Job is completed, one of the conditions will have type "Complete" and
     * status true. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
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
    public function addConditions(JobCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * The number of pods which reached phase Failed.
     */
    public function getFailed(): ?int
    {
        return $this->failed;
    }

    /**
     * The number of pods which reached phase Failed.
     *
     * @return static
     */
    public function setFailed(int $failed)
    {
        $this->failed = $failed;

        return $this;
    }

    /**
     * The number of pods which have a Ready condition.
     *
     * This field is alpha-level. The job controller populates the field when the feature gate JobReadyPods
     * is enabled (disabled by default).
     */
    public function getReady(): ?int
    {
        return $this->ready;
    }

    /**
     * The number of pods which have a Ready condition.
     *
     * This field is alpha-level. The job controller populates the field when the feature gate JobReadyPods
     * is enabled (disabled by default).
     *
     * @return static
     */
    public function setReady(int $ready)
    {
        $this->ready = $ready;

        return $this;
    }

    /**
     * Represents time when the job controller started processing a job. When a Job is created in the
     * suspended state, this field is not set until the first time it is resumed. This field is reset every
     * time a Job is resumed from suspension. It is represented in RFC3339 form and is in UTC.
     */
    public function getStartTime(): ?DateTimeInterface
    {
        return $this->startTime;
    }

    /**
     * Represents time when the job controller started processing a job. When a Job is created in the
     * suspended state, this field is not set until the first time it is resumed. This field is reset every
     * time a Job is resumed from suspension. It is represented in RFC3339 form and is in UTC.
     *
     * @return static
     */
    public function setStartTime(DateTimeInterface $startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * The number of pods which reached phase Succeeded.
     */
    public function getSucceeded(): ?int
    {
        return $this->succeeded;
    }

    /**
     * The number of pods which reached phase Succeeded.
     *
     * @return static
     */
    public function setSucceeded(int $succeeded)
    {
        $this->succeeded = $succeeded;

        return $this;
    }

    /**
     * UncountedTerminatedPods holds the UIDs of Pods that have terminated but the job controller hasn't
     * yet accounted for in the status counters.
     *
     * The job controller creates pods with a finalizer. When a pod terminates (succeeded or failed), the
     * controller does three steps to account for it in the job status: (1) Add the pod UID to the arrays
     * in this field. (2) Remove the pod finalizer. (3) Remove the pod UID from the arrays while increasing
     * the corresponding
     *     counter.
     *
     * This field is beta-level. The job controller only makes use of this field when the feature gate
     * JobTrackingWithFinalizers is enabled (enabled by default). Old jobs might not be tracked using this
     * field, in which case the field remains null.
     */
    public function getUncountedTerminatedPods(): ?UncountedTerminatedPods
    {
        return $this->uncountedTerminatedPods;
    }

    /**
     * UncountedTerminatedPods holds the UIDs of Pods that have terminated but the job controller hasn't
     * yet accounted for in the status counters.
     *
     * The job controller creates pods with a finalizer. When a pod terminates (succeeded or failed), the
     * controller does three steps to account for it in the job status: (1) Add the pod UID to the arrays
     * in this field. (2) Remove the pod finalizer. (3) Remove the pod UID from the arrays while increasing
     * the corresponding
     *     counter.
     *
     * This field is beta-level. The job controller only makes use of this field when the feature gate
     * JobTrackingWithFinalizers is enabled (enabled by default). Old jobs might not be tracked using this
     * field, in which case the field remains null.
     *
     * @return static
     */
    public function setUncountedTerminatedPods(UncountedTerminatedPods $uncountedTerminatedPods)
    {
        $this->uncountedTerminatedPods = $uncountedTerminatedPods;

        return $this;
    }
}
