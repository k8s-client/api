<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.14.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Policy\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * HostPortRange defines a range of host ports that will be enabled by a policy for pods to use.  It
 * requires both the start and end to be defined.
 */
class HostPortRange
{
    /**
     * @Kubernetes\Attribute("max",isRequired=true)
     * @var int
     */
    protected $max = null;

    /**
     * @Kubernetes\Attribute("min",isRequired=true)
     * @var int
     */
    protected $min = null;

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
