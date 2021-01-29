<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Apps\v1beta2;

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
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type indicates the type of the StatefulSetUpdateStrategy. Default is RollingUpdate.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
