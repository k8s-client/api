<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.12.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Extensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * IDRange provides a min/max of an allowed range of IDs. Deprecated: use IDRange from policy API Group
 * instead.
 */
class IDRange
{
    /**
     * @Kubernetes\Attribute("max",isRequired=true)
     * @var int
     */
    protected $max;

    /**
     * @Kubernetes\Attribute("min",isRequired=true)
     * @var int
     */
    protected $min;

    /**
     * @param int $max
     * @param int $min
     */
    public function __construct(int $max, int $min)
    {
        $this->max = $max;
        $this->min = $min;
    }

    /**
     * max is the end of the range, inclusive.
     */
    public function getMax(): int
    {
        return $this->max;
    }

    /**
     * max is the end of the range, inclusive.
     *
     * @return static
     */
    public function setMax(int $max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * min is the start of the range, inclusive.
     */
    public function getMin(): int
    {
        return $this->min;
    }

    /**
     * min is the start of the range, inclusive.
     *
     * @return static
     */
    public function setMin(int $min)
    {
        $this->min = $min;

        return $this;
    }
}
