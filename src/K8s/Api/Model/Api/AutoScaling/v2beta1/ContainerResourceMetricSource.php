<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.20.4
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
     * @Kubernetes\Attribute("targetAverageUtilization")
     * @var int|null
     */
    protected $targetAverageUtilization = null;

    /**
     * @Kubernetes\Attribute("targetAverageValue")
     * @var string|null
     */
    protected $targetAverageValue = null;

    /**
     * @param string $container
     * @param string $name
     */
    public function __construct(string $container, string $name)
    {
        $this->container = $container;
        $this->name = $name;
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
     * targetAverageUtilization is the target value of the average of the resource metric across all
     * relevant pods, represented as a percentage of the requested value of the resource for the pods.
     */
    public function getTargetAverageUtilization(): ?int
    {
        return $this->targetAverageUtilization;
    }

    /**
     * targetAverageUtilization is the target value of the average of the resource metric across all
     * relevant pods, represented as a percentage of the requested value of the resource for the pods.
     *
     * @return static
     */
    public function setTargetAverageUtilization(int $targetAverageUtilization)
    {
        $this->targetAverageUtilization = $targetAverageUtilization;

        return $this;
    }

    /**
     * targetAverageValue is the target value of the average of the resource metric across all relevant
     * pods, as a raw value (instead of as a percentage of the request), similar to the "pods" metric
     * source type.
     *
     * @return string
     */
    public function getTargetAverageValue()
    {
        return $this->targetAverageValue;
    }

    /**
     * targetAverageValue is the target value of the average of the resource metric across all relevant
     * pods, as a raw value (instead of as a percentage of the request), similar to the "pods" metric
     * source type.
     *
     * @param string $targetAverageValue
     * @return static
     */
    public function setTargetAverageValue($targetAverageValue)
    {
        $this->targetAverageValue = $targetAverageValue;

        return $this;
    }
}