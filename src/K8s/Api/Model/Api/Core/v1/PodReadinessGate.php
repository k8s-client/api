<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.14
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * PodReadinessGate contains the reference to a pod condition
 */
class PodReadinessGate
{
    /**
     * @Kubernetes\Attribute("conditionType",isRequired=true)
     * @var string
     */
    protected $conditionType;

    /**
     * @param string $conditionType
     */
    public function __construct(string $conditionType)
    {
        $this->conditionType = $conditionType;
    }

    /**
     * ConditionType refers to a condition in the pod's condition list with matching type.
     */
    public function getConditionType(): string
    {
        return $this->conditionType;
    }

    /**
     * ConditionType refers to a condition in the pod's condition list with matching type.
     *
     * @return static
     */
    public function setConditionType(string $conditionType)
    {
        $this->conditionType = $conditionType;

        return $this;
    }
}
