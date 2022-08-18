<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Batch\v1;

use DateTimeInterface;
use K8s\Api\Model\Api\Core\v1\ObjectReference;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * CronJobStatus represents the current state of a cron job.
 */
class CronJobStatus
{
    /**
     * @Kubernetes\Attribute("active",type="collection",model=ObjectReference::class)
     * @var iterable|ObjectReference[]|null
     */
    protected $active = null;

    /**
     * @Kubernetes\Attribute("lastScheduleTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $lastScheduleTime = null;

    /**
     * @Kubernetes\Attribute("lastSuccessfulTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $lastSuccessfulTime = null;

    /**
     * @param iterable|ObjectReference[] $active
     * @param DateTimeInterface|null $lastScheduleTime
     * @param DateTimeInterface|null $lastSuccessfulTime
     */
    public function __construct(iterable $active = [], ?DateTimeInterface $lastScheduleTime = null, ?DateTimeInterface $lastSuccessfulTime = null)
    {
        $this->active = new Collection($active);
        $this->lastScheduleTime = $lastScheduleTime;
        $this->lastSuccessfulTime = $lastSuccessfulTime;
    }

    /**
     * A list of pointers to currently running jobs.
     *
     * @return iterable|ObjectReference[]
     */
    public function getActive(): ?iterable
    {
        return $this->active;
    }

    /**
     * A list of pointers to currently running jobs.
     *
     * @return static
     */
    public function setActive(iterable $active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return static
     */
    public function addActive(ObjectReference $active)
    {
        if (!$this->active) {
            $this->active = new Collection();
        }
        $this->active[] = $active;

        return $this;
    }

    /**
     * Information when was the last time the job was successfully scheduled.
     */
    public function getLastScheduleTime(): ?DateTimeInterface
    {
        return $this->lastScheduleTime;
    }

    /**
     * Information when was the last time the job was successfully scheduled.
     *
     * @return static
     */
    public function setLastScheduleTime(DateTimeInterface $lastScheduleTime)
    {
        $this->lastScheduleTime = $lastScheduleTime;

        return $this;
    }

    /**
     * Information when was the last time the job successfully completed.
     */
    public function getLastSuccessfulTime(): ?DateTimeInterface
    {
        return $this->lastSuccessfulTime;
    }

    /**
     * Information when was the last time the job successfully completed.
     *
     * @return static
     */
    public function setLastSuccessfulTime(DateTimeInterface $lastSuccessfulTime)
    {
        $this->lastSuccessfulTime = $lastSuccessfulTime;

        return $this;
    }
}
