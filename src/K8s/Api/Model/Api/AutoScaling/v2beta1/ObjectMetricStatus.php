<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.11.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AutoScaling\v2beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * ObjectMetricStatus indicates the current value of a metric describing a kubernetes object (for
 * example, hits-per-second on an Ingress object).
 */
class ObjectMetricStatus
{
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
     * @Kubernetes\Attribute("target",type="model",model=CrossVersionObjectReference::class,isRequired=true)
     * @var CrossVersionObjectReference
     */
    protected $target;

    /**
     * @param string $currentValue
     * @param string $metricName
     * @param CrossVersionObjectReference $target
     */
    public function __construct($currentValue, string $metricName, CrossVersionObjectReference $target)
    {
        $this->currentValue = $currentValue;
        $this->metricName = $metricName;
        $this->target = $target;
    }

    /**
     * currentValue is the current value of the metric (as a quantity).
     *
     * @return string
     */
    public function getCurrentValue()
    {
        return $this->currentValue;
    }

    /**
     * currentValue is the current value of the metric (as a quantity).
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
     * target is the described Kubernetes object.
     */
    public function getTarget(): CrossVersionObjectReference
    {
        return $this->target;
    }

    /**
     * target is the described Kubernetes object.
     *
     * @return static
     */
    public function setTarget(CrossVersionObjectReference $target)
    {
        $this->target = $target;

        return $this;
    }
}
