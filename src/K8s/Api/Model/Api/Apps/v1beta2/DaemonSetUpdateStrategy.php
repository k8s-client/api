<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.17.17
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
 * DaemonSetUpdateStrategy is a struct used to control the update strategy for a DaemonSet.
 */
class DaemonSetUpdateStrategy
{
    /**
     * @Kubernetes\Attribute("rollingUpdate",type="model",model=RollingUpdateDaemonSet::class)
     * @var RollingUpdateDaemonSet|null
     */
    protected $rollingUpdate = null;

    /**
     * @Kubernetes\Attribute("type")
     * @var string|null
     */
    protected $type = null;

    /**
     * @param RollingUpdateDaemonSet|null $rollingUpdate
     * @param string|null $type
     */
    public function __construct(?RollingUpdateDaemonSet $rollingUpdate = null, ?string $type = null)
    {
        $this->rollingUpdate = $rollingUpdate;
        $this->type = $type;
    }

    /**
     * Rolling update config params. Present only if type = "RollingUpdate".
     */
    public function getRollingUpdate(): ?RollingUpdateDaemonSet
    {
        return $this->rollingUpdate;
    }

    /**
     * Rolling update config params. Present only if type = "RollingUpdate".
     *
     * @return static
     */
    public function setRollingUpdate(RollingUpdateDaemonSet $rollingUpdate)
    {
        $this->rollingUpdate = $rollingUpdate;

        return $this;
    }

    /**
     * Type of daemon set update. Can be "RollingUpdate" or "OnDelete". Default is RollingUpdate.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of daemon set update. Can be "RollingUpdate" or "OnDelete". Default is RollingUpdate.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
