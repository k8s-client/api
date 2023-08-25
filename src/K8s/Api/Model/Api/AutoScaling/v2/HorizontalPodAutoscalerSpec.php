<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.13
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AutoScaling\v2;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * HorizontalPodAutoscalerSpec describes the desired functionality of the HorizontalPodAutoscaler.
 */
class HorizontalPodAutoscalerSpec
{
    /**
     * @Kubernetes\Attribute("behavior",type="model",model=HorizontalPodAutoscalerBehavior::class)
     * @var HorizontalPodAutoscalerBehavior|null
     */
    protected $behavior = null;

    /**
     * @Kubernetes\Attribute("maxReplicas",isRequired=true)
     * @var int
     */
    protected $maxReplicas;

    /**
     * @Kubernetes\Attribute("metrics",type="collection",model=MetricSpec::class)
     * @var iterable|MetricSpec[]|null
     */
    protected $metrics = null;

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
     * @param int $maxReplicas
     * @param CrossVersionObjectReference $scaleTargetRef
     */
    public function __construct(int $maxReplicas, CrossVersionObjectReference $scaleTargetRef)
    {
        $this->maxReplicas = $maxReplicas;
        $this->scaleTargetRef = $scaleTargetRef;
    }

    /**
     * behavior configures the scaling behavior of the target in both Up and Down directions (scaleUp and
     * scaleDown fields respectively). If not set, the default HPAScalingRules for scale up and scale down
     * are used.
     */
    public function getBehavior(): ?HorizontalPodAutoscalerBehavior
    {
        return $this->behavior;
    }

    /**
     * behavior configures the scaling behavior of the target in both Up and Down directions (scaleUp and
     * scaleDown fields respectively). If not set, the default HPAScalingRules for scale up and scale down
     * are used.
     *
     * @return static
     */
    public function setBehavior(HorizontalPodAutoscalerBehavior $behavior)
    {
        $this->behavior = $behavior;

        return $this;
    }

    /**
     * maxReplicas is the upper limit for the number of replicas to which the autoscaler can scale up. It
     * cannot be less that minReplicas.
     */
    public function getMaxReplicas(): int
    {
        return $this->maxReplicas;
    }

    /**
     * maxReplicas is the upper limit for the number of replicas to which the autoscaler can scale up. It
     * cannot be less that minReplicas.
     *
     * @return static
     */
    public function setMaxReplicas(int $maxReplicas)
    {
        $this->maxReplicas = $maxReplicas;

        return $this;
    }

    /**
     * metrics contains the specifications for which to use to calculate the desired replica count (the
     * maximum replica count across all metrics will be used).  The desired replica count is calculated
     * multiplying the ratio between the target value and the current value by the current number of pods.
     * Ergo, metrics used must decrease as the pod count is increased, and vice-versa.  See the individual
     * metric source types for more information about how each type of metric must respond. If not set, the
     * default metric will be set to 80% average CPU utilization.
     *
     * @return iterable|MetricSpec[]
     */
    public function getMetrics(): ?iterable
    {
        return $this->metrics;
    }

    /**
     * metrics contains the specifications for which to use to calculate the desired replica count (the
     * maximum replica count across all metrics will be used).  The desired replica count is calculated
     * multiplying the ratio between the target value and the current value by the current number of pods.
     * Ergo, metrics used must decrease as the pod count is increased, and vice-versa.  See the individual
     * metric source types for more information about how each type of metric must respond. If not set, the
     * default metric will be set to 80% average CPU utilization.
     *
     * @return static
     */
    public function setMetrics(iterable $metrics)
    {
        $this->metrics = $metrics;

        return $this;
    }

    /**
     * @return static
     */
    public function addMetrics(MetricSpec $metric)
    {
        if (!$this->metrics) {
            $this->metrics = new Collection();
        }
        $this->metrics[] = $metric;

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
     * scaleTargetRef points to the target resource to scale, and is used to the pods for which metrics
     * should be collected, as well as to actually change the replica count.
     */
    public function getScaleTargetRef(): CrossVersionObjectReference
    {
        return $this->scaleTargetRef;
    }

    /**
     * scaleTargetRef points to the target resource to scale, and is used to the pods for which metrics
     * should be collected, as well as to actually change the replica count.
     *
     * @return static
     */
    public function setScaleTargetRef(CrossVersionObjectReference $scaleTargetRef)
    {
        $this->scaleTargetRef = $scaleTargetRef;

        return $this;
    }
}
