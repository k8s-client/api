<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.21.3
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
 * ContainerResourceMetricSource indicates how to scale on a resource metric known to Kubernetes, as
 * specified in requests and limits, describing each pod in the current scale target (e.g. CPU or
 * memory).  The values will be averaged together before being compared to the target.  Such metrics
 * are built in to Kubernetes, and have special scaling options on top of those available to normal
 * per-pod metrics using the "pods" source.  Only one "target" type should be set.
 */
class ContainerResourceMetricSource
{
    /**
     * @Kubernetes\Attribute("container",isRequired=true)
     * @var string
     */
    protected $container;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("target",type="model",model=MetricTarget::class,isRequired=true)
     * @var MetricTarget
     */
    protected $target;

    /**
     * @param string $container
     * @param string $name
     * @param MetricTarget $target
     */
    public function __construct(string $container, string $name, MetricTarget $target)
    {
        $this->container = $container;
        $this->name = $name;
        $this->target = $target;
    }

    /**
     * container is the name of the container in the pods of the scaling target
     */
    public function getContainer(): string
    {
        return $this->container;
    }

    /**
     * container is the name of the container in the pods of the scaling target
     *
     * @return static
     */
    public function setContainer(string $container)
    {
        $this->container = $container;

        return $this;
    }

    /**
     * name is the name of the resource in question.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name is the name of the resource in question.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * target specifies the target value for the given metric
     */
    public function getTarget(): MetricTarget
    {
        return $this->target;
    }

    /**
     * target specifies the target value for the given metric
     *
     * @return static
     */
    public function setTarget(MetricTarget $target)
    {
        $this->target = $target;

        return $this;
    }
}
