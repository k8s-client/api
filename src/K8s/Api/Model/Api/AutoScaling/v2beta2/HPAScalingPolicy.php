<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.19.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AutoScaling\v2beta2;

use K8s\Core\Annotation as Kubernetes;

/**
 * HPAScalingPolicy is a single policy which must hold true for a specified past interval.
 */
class HPAScalingPolicy
{
    /**
     * @Kubernetes\Attribute("periodSeconds",isRequired=true)
     * @var int
     */
    protected $periodSeconds;

    /**
     * @Kubernetes\Attribute("type",isRequired=true)
     * @var string
     */
    protected $type;

    /**
     * @Kubernetes\Attribute("value",isRequired=true)
     * @var int
     */
    protected $value;

    /**
     * @param int $periodSeconds
     * @param string $type
     * @param int $value
     */
    public function __construct(int $periodSeconds, string $type, int $value)
    {
        $this->periodSeconds = $periodSeconds;
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * PeriodSeconds specifies the window of time for which the policy should hold true. PeriodSeconds must
     * be greater than zero and less than or equal to 1800 (30 min).
     */
    public function getPeriodSeconds(): int
    {
        return $this->periodSeconds;
    }

    /**
     * PeriodSeconds specifies the window of time for which the policy should hold true. PeriodSeconds must
     * be greater than zero and less than or equal to 1800 (30 min).
     *
     * @return static
     */
    public function setPeriodSeconds(int $periodSeconds)
    {
        $this->periodSeconds = $periodSeconds;

        return $this;
    }

    /**
     * Type is used to specify the scaling policy.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type is used to specify the scaling policy.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Value contains the amount of change which is permitted by the policy. It must be greater than zero
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * Value contains the amount of change which is permitted by the policy. It must be greater than zero
     *
     * @return static
     */
    public function setValue(int $value)
    {
        $this->value = $value;

        return $this;
    }
}