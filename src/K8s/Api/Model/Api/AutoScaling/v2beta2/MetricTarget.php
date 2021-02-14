<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.14.10
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
 * MetricTarget defines the target value, average value, or average utilization of a specific metric
 */
class MetricTarget
{
    /**
     * @Kubernetes\Attribute("averageUtilization")
     * @var int|null
     */
    protected $averageUtilization = null;

    /**
     * @Kubernetes\Attribute("averageValue")
     * @var string|null
     */
    protected $averageValue = null;

    /**
     * @Kubernetes\Attribute("type",isRequired=true)
     * @var string
     */
    protected $type;

    /**
     * @Kubernetes\Attribute("value")
     * @var string|null
     */
    protected $value = null;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * averageUtilization is the target value of the average of the resource metric across all relevant
     * pods, represented as a percentage of the requested value of the resource for the pods. Currently
     * only valid for Resource metric source type
     */
    public function getAverageUtilization(): ?int
    {
        return $this->averageUtilization;
    }

    /**
     * averageUtilization is the target value of the average of the resource metric across all relevant
     * pods, represented as a percentage of the requested value of the resource for the pods. Currently
     * only valid for Resource metric source type
     *
     * @return static
     */
    public function setAverageUtilization(int $averageUtilization)
    {
        $this->averageUtilization = $averageUtilization;

        return $this;
    }

    /**
     * averageValue is the target value of the average of the metric across all relevant pods (as a
     * quantity)
     *
     * @return string
     */
    public function getAverageValue()
    {
        return $this->averageValue;
    }

    /**
     * averageValue is the target value of the average of the metric across all relevant pods (as a
     * quantity)
     *
     * @param string $averageValue
     * @return static
     */
    public function setAverageValue($averageValue)
    {
        $this->averageValue = $averageValue;

        return $this;
    }

    /**
     * type represents whether the metric type is Utilization, Value, or AverageValue
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * type represents whether the metric type is Utilization, Value, or AverageValue
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * value is the target value of the metric (as a quantity).
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * value is the target value of the metric (as a quantity).
     *
     * @param string $value
     * @return static
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
