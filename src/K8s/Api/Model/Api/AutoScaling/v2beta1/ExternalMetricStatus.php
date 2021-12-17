<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.1
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
 * ExternalMetricStatus indicates the current value of a global metric not associated with any
 * Kubernetes object.
 */
class ExternalMetricStatus
{
    /**
     * @Kubernetes\Attribute("currentAverageValue")
     * @var string|null
     */
    protected $currentAverageValue = null;

    /**
     * @Kubernetes\Attribute("currentValue",isRequired=true)
     * @var string
     */
    protected $currentValue;

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
     * @param string $currentValue
     * @param string $metricName
     */
    public function __construct($currentValue, string $metricName)
    {
        $this->currentValue = $currentValue;
        $this->metricName = $metricName;
    }

    /**
     * currentAverageValue is the current value of metric averaged over autoscaled pods.
     *
     * @return string
     */
    public function getCurrentAverageValue()
    {
        return $this->currentAverageValue;
    }

    /**
     * currentAverageValue is the current value of metric averaged over autoscaled pods.
     *
     * @param string $currentAverageValue
     * @return static
     */
    public function setCurrentAverageValue($currentAverageValue)
    {
        $this->currentAverageValue = $currentAverageValue;

        return $this;
    }

    /**
     * currentValue is the current value of the metric (as a quantity)
     *
     * @return string
     */
    public function getCurrentValue()
    {
        return $this->currentValue;
    }

    /**
     * currentValue is the current value of the metric (as a quantity)
     *
     * @param string $currentValue
     * @return static
     */
    public function setCurrentValue($currentValue)
    {
        $this->currentValue = $currentValue;

        return $this;
    }

    /**
     * metricName is the name of a metric used for autoscaling in metric system.
     */
    public function getMetricName(): string
    {
        return $this->metricName;
    }

    /**
     * metricName is the name of a metric used for autoscaling in metric system.
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
}
