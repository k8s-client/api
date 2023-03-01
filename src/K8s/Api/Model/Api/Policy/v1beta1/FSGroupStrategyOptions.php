<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Policy\v1beta1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * FSGroupStrategyOptions defines the strategy type and options used to create the strategy.
 */
class FSGroupStrategyOptions
{
    /**
     * @Kubernetes\Attribute("ranges",type="collection",model=IDRange::class)
     * @var iterable|IDRange[]|null
     */
    protected $ranges = null;

    /**
     * @Kubernetes\Attribute("rule")
     * @var string|null
     */
    protected $rule = null;

    /**
     * @param iterable|IDRange[] $ranges
     * @param string|null $rule
     */
    public function __construct(iterable $ranges = [], ?string $rule = null)
    {
        $this->ranges = new Collection($ranges);
        $this->rule = $rule;
    }

    /**
     * ranges are the allowed ranges of fs groups.  If you would like to force a single fs group then
     * supply a single range with the same start and end. Required for MustRunAs.
     *
     * @return iterable|IDRange[]
     */
    public function getRanges(): ?iterable
    {
        return $this->ranges;
    }

    /**
     * ranges are the allowed ranges of fs groups.  If you would like to force a single fs group then
     * supply a single range with the same start and end. Required for MustRunAs.
     *
     * @return static
     */
    public function setRanges(iterable $ranges)
    {
        $this->ranges = $ranges;

        return $this;
    }

    /**
     * @return static
     */
    public function addRanges(IDRange $range)
    {
        if (!$this->ranges) {
            $this->ranges = new Collection();
        }
        $this->ranges[] = $range;

        return $this;
    }

    /**
     * rule is the strategy that will dictate what FSGroup is used in the SecurityContext.
     */
    public function getRule(): ?string
    {
        return $this->rule;
    }

    /**
     * rule is the strategy that will dictate what FSGroup is used in the SecurityContext.
     *
     * @return static
     */
    public function setRule(string $rule)
    {
        $this->rule = $rule;

        return $this;
    }
}
