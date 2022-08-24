<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.0
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
 * ObjectMetricStatus indicates the current value of a metric describing a kubernetes object (for
 * example, hits-per-second on an Ingress object).
 */
class ObjectMetricStatus
{
    /**
     * @Kubernetes\Attribute("current",type="model",model=MetricValueStatus::class,isRequired=true)
     * @var MetricValueStatus
     */
    protected $current;

    /**
     * @Kubernetes\Attribute("describedObject",type="model",model=CrossVersionObjectReference::class,isRequired=true)
     * @var CrossVersionObjectReference
     */
    protected $describedObject;

    /**
     * @Kubernetes\Attribute("metric",type="model",model=MetricIdentifier::class,isRequired=true)
     * @var MetricIdentifier
     */
    protected $metric;

    /**
     * @param MetricValueStatus $current
     * @param CrossVersionObjectReference $describedObject
     * @param MetricIdentifier $metric
     */
    public function __construct(MetricValueStatus $current, CrossVersionObjectReference $describedObject, MetricIdentifier $metric)
    {
        $this->current = $current;
        $this->describedObject = $describedObject;
        $this->metric = $metric;
    }

    /**
     * current contains the current value for the given metric
     */
    public function getCurrent(): MetricValueStatus
    {
        return $this->current;
    }

    /**
     * current contains the current value for the given metric
     *
     * @return static
     */
    public function setCurrent(MetricValueStatus $current)
    {
        $this->current = $current;

        return $this;
    }

    public function getDescribedObject(): CrossVersionObjectReference
    {
        return $this->describedObject;
    }

    /**
     * @return static
     */
    public function setDescribedObject(CrossVersionObjectReference $describedObject)
    {
        $this->describedObject = $describedObject;

        return $this;
    }

    /**
     * metric identifies the target metric by name and selector
     */
    public function getMetric(): MetricIdentifier
    {
        return $this->metric;
    }

    /**
     * metric identifies the target metric by name and selector
     *
     * @return static
     */
    public function setMetric(MetricIdentifier $metric)
    {
        $this->metric = $metric;

        return $this;
    }
}
