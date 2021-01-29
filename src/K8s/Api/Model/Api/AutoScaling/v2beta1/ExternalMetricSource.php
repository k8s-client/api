<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.14.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AutoScaling\v2beta1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Core\Annotation as Kubernetes;

/**
 * ExternalMetricSource indicates how to scale on a metric not associated with any Kubernetes object
 * (for example length of queue in cloud messaging service, or QPS from loadbalancer running outside of
 * cluster). Exactly one "target" type should be set.
 */
class ExternalMetricSource
{
    /**
     * @Kubernetes\Attribute("metricName",isRequired=true)
     * @var string
     */
    protected $metricName;

    /**
     * @Kubernetes\Attribute("metricSelector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $metricSelector = null;

    /**
     * @Kubernetes\Attribute("targetAverageValue")
     * @var string|null
     */
    protected $targetAverageValue = null;

    /**
     * @Kubernetes\Attribute("targetValue")
     * @var string|null
     */
    protected $targetValue = null;

    /**
     * @param string $metricName
     */
    public function __construct(string $metricName)
    {
        $this->metricName = $metricName;
    }

    /**
     * metricName is the name of the metric in question.
     */
    public function getMetricName(): string
    {
        return $this->metricName;
    }

    /**
     * metricName is the name of the metric in question.
     *
     * @return static
     */
    public function setMetricName(string $metricName)
    {
        $this->metricName = $metricName;

        return $this;
    }

    /**
     * metricSelector is used to identify a specific time series within a given metric.
     */
    public function getMetricSelector(): ?LabelSelector
    {
        return $this->metricSelector;
    }

    /**
     * metricSelector is used to identify a specific time series within a given metric.
     *
     * @return static
     */
    public function setMetricSelector(LabelSelector $metricSelector)
    {
        $this->metricSelector = $metricSelector;

        return $this;
    }

    /**
     * targetAverageValue is the target per-pod value of global metric (as a quantity). Mutually exclusive
     * with TargetValue.
     *
     * @return string
     */
    public function getTargetAverageValue()
    {
        return $this->targetAverageValue;
    }

    /**
     * targetAverageValue is the target per-pod value of global metric (as a quantity). Mutually exclusive
     * with TargetValue.
     *
     * @param string $targetAverageValue
     * @return static
     */
    public function setTargetAverageValue($targetAverageValue)
    {
        $this->targetAverageValue = $targetAverageValue;

        return $this;
    }

    /**
     * targetValue is the target value of the metric (as a quantity). Mutually exclusive with
     * TargetAverageValue.
     *
     * @return string
     */
    public function getTargetValue()
    {
        return $this->targetValue;
    }

    /**
     * targetValue is the target value of the metric (as a quantity). Mutually exclusive with
     * TargetAverageValue.
     *
     * @param string $targetValue
     * @return static
     */
    public function setTargetValue($targetValue)
    {
        $this->targetValue = $targetValue;

        return $this;
    }
}
