<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.6
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
 * ContainerResourceMetricStatus indicates the current value of a resource metric known to Kubernetes,
 * as specified in requests and limits, describing a single container in each pod in the current scale
 * target (e.g. CPU or memory).  Such metrics are built in to Kubernetes, and have special scaling
 * options on top of those available to normal per-pod metrics using the "pods" source.
 */
class ContainerResourceMetricStatus
{
    /**
     * @Kubernetes\Attribute("container",isRequired=true)
     * @var string
     */
    protected $container;

    /**
     * @Kubernetes\Attribute("currentAverageUtilization")
     * @var int|null
     */
    protected $currentAverageUtilization = null;

    /**
     * @Kubernetes\Attribute("currentAverageValue",isRequired=true)
     * @var string
     */
    protected $currentAverageValue;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @param string $container
     * @param string $currentAverageValue
     * @param string $name
     */
    public function __construct(string $container, $currentAverageValue, string $name)
    {
        $this->container = $container;
        $this->currentAverageValue = $currentAverageValue;
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
     * currentAverageUtilization is the current value of the average of the resource metric across all
     * relevant pods, represented as a percentage of the requested value of the resource for the pods.  It
     * will only be present if `targetAverageValue` was set in the corresponding metric specification.
     */
    public function getCurrentAverageUtilization(): ?int
    {
        return $this->currentAverageUtilization;
    }

    /**
     * currentAverageUtilization is the current value of the average of the resource metric across all
     * relevant pods, represented as a percentage of the requested value of the resource for the pods.  It
     * will only be present if `targetAverageValue` was set in the corresponding metric specification.
     *
     * @return static
     */
    public function setCurrentAverageUtilization(int $currentAverageUtilization)
    {
        $this->currentAverageUtilization = $currentAverageUtilization;

        return $this;
    }

    /**
     * currentAverageValue is the current value of the average of the resource metric across all relevant
     * pods, as a raw value (instead of as a percentage of the request), similar to the "pods" metric
     * source type. It will always be set, regardless of the corresponding metric specification.
     *
     * @return string
     */
    public function getCurrentAverageValue()
    {
        return $this->currentAverageValue;
    }

    /**
     * currentAverageValue is the current value of the average of the resource metric across all relevant
     * pods, as a raw value (instead of as a percentage of the request), similar to the "pods" metric
     * source type. It will always be set, regardless of the corresponding metric specification.
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
}
