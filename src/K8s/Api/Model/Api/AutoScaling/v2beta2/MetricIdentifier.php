<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.0
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AutoScaling\v2beta2;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Core\Annotation as Kubernetes;

/**
 * MetricIdentifier defines the name and optionally selector for a metric
 */
class MetricIdentifier
{
    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("selector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $selector = null;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * name is the name of the given metric
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name is the name of the given metric
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * selector is the string-encoded form of a standard kubernetes label selector for the given metric
     * When set, it is passed as an additional parameter to the metrics server for more specific metrics
     * scoping. When unset, just the metricName will be used to gather metrics.
     */
    public function getSelector(): ?LabelSelector
    {
        return $this->selector;
    }

    /**
     * selector is the string-encoded form of a standard kubernetes label selector for the given metric
     * When set, it is passed as an additional parameter to the metrics server for more specific metrics
     * scoping. When unset, just the metricName will be used to gather metrics.
     *
     * @return static
     */
    public function setSelector(LabelSelector $selector)
    {
        $this->selector = $selector;

        return $this;
    }
}
