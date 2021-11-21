<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.22.4
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
 * PodsMetricStatus indicates the current value of a metric describing each pod in the current scale
 * target (for example, transactions-processed-per-second).
 */
class PodsMetricStatus
{
    /**
     * @Kubernetes\Attribute("currentAverageValue",isRequired=true)
     * @var string
     */
    protected $currentAverageValue;

    /**
     * @Kubernetes\Attribute("metricName",isRequired=true)
     * @var string
     */
    protected $metricName;

    /**
     * @Kubernetes\Attribute("selector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $selector = null;

    /**
     * @param string $currentAverageValue
     * @param string $metricName
     */
    public function __construct($currentAverageValue, string $metricName)
    {
        $this->currentAverageValue = $currentAverageValue;
        $this->metricName = $metricName;
    }

    /**
     * currentAverageValue is the current value of the average of the metric across all relevant pods (as a
     * quantity)
     *
     * @return string
     */
    public function getCurrentAverageValue()
    {
        return $this->currentAverageValue;
    }

    /**
     * currentAverageValue is the current value of the average of the metric across all relevant pods (as a
     * quantity)
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
     * metricName is the name of the metric in question
     */
    public function getMetricName(): string
    {
        return $this->metricName;
    }

    /**
     * metricName is the name of the metric in question
     *
     * @return static
     */
    public function setMetricName(string $metricName)
    {
        $this->metricName = $metricName;

        return $this;
    }

    /**
     * selector is the string-encoded form of a standard kubernetes label selector for the given metric
     * When set in the PodsMetricSource, it is passed as an additional parameter to the metrics server for
     * more specific metrics scoping. When unset, just the metricName will be used to gather metrics.
     */
    public function getSelector(): ?LabelSelector
    {
        return $this->selector;
    }

    /**
     * selector is the string-encoded form of a standard kubernetes label selector for the given metric
     * When set in the PodsMetricSource, it is passed as an additional parameter to the metrics server for
     * more specific metrics scoping. When unset, just the metricName will be used to gather metrics.
     *
     * @return static
     */
    public function setSelector(LabelSelector $selector)
    {
        $this->selector = $selector;

        return $this;
    }
}
