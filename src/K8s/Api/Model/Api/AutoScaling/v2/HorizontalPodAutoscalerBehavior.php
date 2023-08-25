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

/**
 * HorizontalPodAutoscalerBehavior configures the scaling behavior of the target in both Up and Down
 * directions (scaleUp and scaleDown fields respectively).
 */
class HorizontalPodAutoscalerBehavior
{
    /**
     * @Kubernetes\Attribute("scaleDown",type="model",model=HPAScalingRules::class)
     * @var HPAScalingRules|null
     */
    protected $scaleDown = null;

    /**
     * @Kubernetes\Attribute("scaleUp",type="model",model=HPAScalingRules::class)
     * @var HPAScalingRules|null
     */
    protected $scaleUp = null;

    /**
     * @param HPAScalingRules|null $scaleDown
     * @param HPAScalingRules|null $scaleUp
     */
    public function __construct(?HPAScalingRules $scaleDown = null, ?HPAScalingRules $scaleUp = null)
    {
        $this->scaleDown = $scaleDown;
        $this->scaleUp = $scaleUp;
    }

    /**
     * scaleDown is scaling policy for scaling Down. If not set, the default value is to allow to scale
     * down to minReplicas pods, with a 300 second stabilization window (i.e., the highest recommendation
     * for the last 300sec is used).
     */
    public function getScaleDown(): ?HPAScalingRules
    {
        return $this->scaleDown;
    }

    /**
     * scaleDown is scaling policy for scaling Down. If not set, the default value is to allow to scale
     * down to minReplicas pods, with a 300 second stabilization window (i.e., the highest recommendation
     * for the last 300sec is used).
     *
     * @return static
     */
    public function setScaleDown(HPAScalingRules $scaleDown)
    {
        $this->scaleDown = $scaleDown;

        return $this;
    }

    /**
     * scaleUp is scaling policy for scaling Up. If not set, the default value is the higher of:
     *   * increase no more than 4 pods per 60 seconds
     *   * double the number of pods per 60 seconds
     * No stabilization is used.
     */
    public function getScaleUp(): ?HPAScalingRules
    {
        return $this->scaleUp;
    }

    /**
     * scaleUp is scaling policy for scaling Up. If not set, the default value is the higher of:
     *   * increase no more than 4 pods per 60 seconds
     *   * double the number of pods per 60 seconds
     * No stabilization is used.
     *
     * @return static
     */
    public function setScaleUp(HPAScalingRules $scaleUp)
    {
        $this->scaleUp = $scaleUp;

        return $this;
    }
}
