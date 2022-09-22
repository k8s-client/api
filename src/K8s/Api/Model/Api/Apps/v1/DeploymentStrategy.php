<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.2
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
 * DeploymentStrategy describes how to replace existing pods with new ones.
 */
class DeploymentStrategy
{
    /**
     * @Kubernetes\Attribute("rollingUpdate",type="model",model=RollingUpdateDeployment::class)
     * @var RollingUpdateDeployment|null
     */
    protected $rollingUpdate = null;

    /**
     * @Kubernetes\Attribute("type")
     * @var string|null
     */
    protected $type = null;

    /**
     * @param RollingUpdateDeployment|null $rollingUpdate
     * @param string|null $type
     */
    public function __construct(?RollingUpdateDeployment $rollingUpdate = null, ?string $type = null)
    {
        $this->rollingUpdate = $rollingUpdate;
        $this->type = $type;
    }

    /**
     * Rolling update config params. Present only if DeploymentStrategyType = RollingUpdate.
     */
    public function getRollingUpdate(): ?RollingUpdateDeployment
    {
        return $this->rollingUpdate;
    }

    /**
     * Rolling update config params. Present only if DeploymentStrategyType = RollingUpdate.
     *
     * @return static
     */
    public function setRollingUpdate(RollingUpdateDeployment $rollingUpdate)
    {
        $this->rollingUpdate = $rollingUpdate;

        return $this;
    }

    /**
     * Type of deployment. Can be "Recreate" or "RollingUpdate". Default is RollingUpdate.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of deployment. Can be "Recreate" or "RollingUpdate". Default is RollingUpdate.
     *
     *
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
