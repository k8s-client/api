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

namespace K8s\Api\Model\Api\Apps\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * StatefulSetUpdateStrategy indicates the strategy that the StatefulSet controller will use to perform
 * updates. It includes any additional parameters necessary to perform the update for the indicated
 * strategy.
 */
class StatefulSetUpdateStrategy
{
    /**
     * @Kubernetes\Attribute("rollingUpdate",type="model",model=RollingUpdateStatefulSetStrategy::class)
     * @var RollingUpdateStatefulSetStrategy|null
     */
    protected $rollingUpdate = null;

    /**
     * @Kubernetes\Attribute("type")
     * @var string|null
     */
    protected $type = null;

    /**
     * @param RollingUpdateStatefulSetStrategy|null $rollingUpdate
     * @param string|null $type
     */
    public function __construct(?RollingUpdateStatefulSetStrategy $rollingUpdate = null, ?string $type = null)
    {
        $this->rollingUpdate = $rollingUpdate;
        $this->type = $type;
    }

    /**
     * RollingUpdate is used to communicate parameters when Type is RollingUpdateStatefulSetStrategyType.
     */
    public function getRollingUpdate(): ?RollingUpdateStatefulSetStrategy
    {
        return $this->rollingUpdate;
    }

    /**
     * RollingUpdate is used to communicate parameters when Type is RollingUpdateStatefulSetStrategyType.
     *
     * @return static
     */
    public function setRollingUpdate(RollingUpdateStatefulSetStrategy $rollingUpdate)
    {
        $this->rollingUpdate = $rollingUpdate;

        return $this;
    }

    /**
     * Type indicates the type of the StatefulSetUpdateStrategy. Default is RollingUpdate.
     *
     * Possible enum values:
     *  - `"OnDelete"` triggers the legacy behavior. Version tracking and ordered rolling restarts are
     * disabled. Pods are recreated from the StatefulSetSpec when they are manually deleted. When a scale
     * operation is performed with this strategy,specification version indicated by the StatefulSet's
     * currentRevision.
     *  - `"RollingUpdate"` indicates that update will be applied to all Pods in the StatefulSet with
     * respect to the StatefulSet ordering constraints. When a scale operation is performed with this
     * strategy, new Pods will be created from the specification version indicated by the StatefulSet's
     * updateRevision.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type indicates the type of the StatefulSetUpdateStrategy. Default is RollingUpdate.
     *
     * Possible enum values:
     *  - `"OnDelete"` triggers the legacy behavior. Version tracking and ordered rolling restarts are
     * disabled. Pods are recreated from the StatefulSetSpec when they are manually deleted. When a scale
     * operation is performed with this strategy,specification version indicated by the StatefulSet's
     * currentRevision.
     *  - `"RollingUpdate"` indicates that update will be applied to all Pods in the StatefulSet with
     * respect to the StatefulSet ordering constraints. When a scale operation is performed with this
     * strategy, new Pods will be created from the specification version indicated by the StatefulSet's
     * updateRevision.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
