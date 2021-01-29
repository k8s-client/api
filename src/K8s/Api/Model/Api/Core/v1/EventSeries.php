<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.19.7
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

/**
 * EventSeries contain information on series of events, i.e. thing that was/is happening continuously
 * for some time.
 */
class EventSeries
{
    /**
     * @Kubernetes\Attribute("count")
     * @var int|null
     */
    protected $count = null;

    /**
     * @Kubernetes\Attribute("lastObservedTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $lastObservedTime = null;

    /**
     * @param int|null $count
     * @param DateTimeInterface|null $lastObservedTime
     */
    public function __construct(?int $count = null, ?DateTimeInterface $lastObservedTime = null)
    {
        $this->count = $count;
        $this->lastObservedTime = $lastObservedTime;
    }

    /**
     * Number of occurrences in this series up to the last heartbeat time
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Number of occurrences in this series up to the last heartbeat time
     *
     * @return static
     */
    public function setCount(int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Time of the last occurrence observed
     */
    public function getLastObservedTime(): ?DateTimeInterface
    {
        return $this->lastObservedTime;
    }

    /**
     * Time of the last occurrence observed
     *
     * @return static
     */
    public function setLastObservedTime(DateTimeInterface $lastObservedTime)
    {
        $this->lastObservedTime = $lastObservedTime;

        return $this;
    }
}
