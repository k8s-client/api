<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.21.5
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
 * LimitRangeSpec defines a min/max usage limit for resources that match on kind.
 */
class LimitRangeSpec
{
    /**
     * @Kubernetes\Attribute("limits",type="collection",model=LimitRangeItem::class,isRequired=true)
     * @var iterable|LimitRangeItem[]
     */
    protected $limits;

    /**
     * @param iterable|LimitRangeItem[] $limits
     */
    public function __construct(iterable $limits)
    {
        $this->limits = new Collection($limits);
    }

    /**
     * Limits is the list of LimitRangeItem objects that are enforced.
     *
     * @return iterable|LimitRangeItem[]
     */
    public function getLimits(): iterable
    {
        return $this->limits;
    }

    /**
     * Limits is the list of LimitRangeItem objects that are enforced.
     *
     * @return static
     */
    public function setLimits(iterable $limits)
    {
        $this->limits = $limits;

        return $this;
    }

    /**
     * @return static
     */
    public function addLimits(LimitRangeItem $limit)
    {
        if (!$this->limits) {
            $this->limits = new Collection();
        }
        $this->limits[] = $limit;

        return $this;
    }
}
