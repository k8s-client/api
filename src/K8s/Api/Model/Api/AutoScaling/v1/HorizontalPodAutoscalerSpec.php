<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.9
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AutoScaling\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * specification of a horizontal pod autoscaler.
 */
class HorizontalPodAutoscalerSpec
{
    /**
     * @Kubernetes\Attribute("maxReplicas",isRequired=true)
     * @var int
     */
    protected $maxReplicas;

    /**
     * @Kubernetes\Attribute("minReplicas")
     * @var int|null
     */
    protected $minReplicas = null;

    /**
     * @Kubernetes\Attribute("scaleTargetRef",type="model",model=CrossVersionObjectReference::class,isRequired=true)
     * @var CrossVersionObjectReference
     */
    protected $scaleTargetRef;

    /**
     * @Kubernetes\Attribute("targetCPUUtilizationPercentage")
     * @var int|null
     */
    protected $targetCPUUtilizationPercentage = null;

    /**
     * @param int $maxReplicas
     * @param CrossVersionObjectReference $scaleTargetRef
     */
    public function __construct(int $maxReplicas, CrossVersionObjectReference $scaleTargetRef)
    {
        $this->maxReplicas = $maxReplicas;
        $this->scaleTargetRef = $scaleTargetRef;
    }

    /**
     * upper limit for the number of pods that can be set by the autoscaler; cannot be smaller than
     * MinReplicas.
     */
    public function getMaxReplicas(): int
    {
        return $this->maxReplicas;
    }

    /**
     * upper limit for the number of pods that can be set by the autoscaler; cannot be smaller than
     * MinReplicas.
     *
     * @return static
     */
    public function setMaxReplicas(int $maxReplicas)
    {
        $this->maxReplicas = $maxReplicas;

        return $this;
    }

    /**
     * minReplicas is the lower limit for the number of replicas to which the autoscaler can scale down.
     * It defaults to 1 pod.  minReplicas is allowed to be 0 if the alpha feature gate HPAScaleToZero is
     * enabled and at least one Object or External metric is configured.  Scaling is active as long as at
     * least one metric value is available.
     */
    public function getMinReplicas(): ?int
    {
        return $this->minReplicas;
    }

    /**
     * minReplicas is the lower limit for the number of replicas to which the autoscaler can scale down.
     * It defaults to 1 pod.  minReplicas is allowed to be 0 if the alpha feature gate HPAScaleToZero is
     * enabled and at least one Object or External metric is configured.  Scaling is active as long as at
     * least one metric value is available.
     *
     * @return static
     */
    public function setMinReplicas(int $minReplicas)
    {
        $this->minReplicas = $minReplicas;

        return $this;
    }

    /**
     * reference to scaled resource; horizontal pod autoscaler will learn the current resource consumption
     * and will set the desired number of pods by using its Scale subresource.
     */
    public function getScaleTargetRef(): CrossVersionObjectReference
    {
        return $this->scaleTargetRef;
    }

    /**
     * reference to scaled resource; horizontal pod autoscaler will learn the current resource consumption
     * and will set the desired number of pods by using its Scale subresource.
     *
     * @return static
     */
    public function setScaleTargetRef(CrossVersionObjectReference $scaleTargetRef)
    {
        $this->scaleTargetRef = $scaleTargetRef;

        return $this;
    }

    /**
     * target average CPU utilization (represented as a percentage of requested CPU) over all the pods; if
     * not specified the default autoscaling policy will be used.
     */
    public function getTargetCPUUtilizationPercentage(): ?int
    {
        return $this->targetCPUUtilizationPercentage;
    }

    /**
     * target average CPU utilization (represented as a percentage of requested CPU) over all the pods; if
     * not specified the default autoscaling policy will be used.
     *
     * @return static
     */
    public function setTargetCPUUtilizationPercentage(int $targetCPUUtilizationPercentage)
    {
        $this->targetCPUUtilizationPercentage = $targetCPUUtilizationPercentage;

        return $this;
    }
}
