<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.13
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
 * Spec to control the desired behavior of daemon set rolling update.
 */
class RollingUpdateDaemonSet
{
    /**
     * @Kubernetes\Attribute("maxUnavailable")
     * @var int|string|null
     */
    protected $maxUnavailable = null;

    /**
     * @param int|string|null $maxUnavailable
     */
    public function __construct($maxUnavailable = null)
    {
        $this->maxUnavailable = $maxUnavailable;
    }

    /**
     * The maximum number of DaemonSet pods that can be unavailable during the update. Value can be an
     * absolute number (ex: 5) or a percentage of total number of DaemonSet pods at the start of the update
     * (ex: 10%). Absolute number is calculated from percentage by rounding up. This cannot be 0. Default
     * value is 1. Example: when this is set to 30%, at most 30% of the total number of nodes that should
     * be running the daemon pod (i.e. status.desiredNumberScheduled) can have their pods stopped for an
     * update at any given time. The update starts by stopping at most 30% of those DaemonSet pods and then
     * brings up new DaemonSet pods in their place. Once the new pods are available, it then proceeds onto
     * other DaemonSet pods, thus ensuring that at least 70% of original number of DaemonSet pods are
     * available at all times during the update.
     *
     * @return int|string
     */
    public function getMaxUnavailable()
    {
        return $this->maxUnavailable;
    }

    /**
     * The maximum number of DaemonSet pods that can be unavailable during the update. Value can be an
     * absolute number (ex: 5) or a percentage of total number of DaemonSet pods at the start of the update
     * (ex: 10%). Absolute number is calculated from percentage by rounding up. This cannot be 0. Default
     * value is 1. Example: when this is set to 30%, at most 30% of the total number of nodes that should
     * be running the daemon pod (i.e. status.desiredNumberScheduled) can have their pods stopped for an
     * update at any given time. The update starts by stopping at most 30% of those DaemonSet pods and then
     * brings up new DaemonSet pods in their place. Once the new pods are available, it then proceeds onto
     * other DaemonSet pods, thus ensuring that at least 70% of original number of DaemonSet pods are
     * available at all times during the update.
     *
     * @param int|string $maxUnavailable
     * @return static
     */
    public function setMaxUnavailable($maxUnavailable)
    {
        $this->maxUnavailable = $maxUnavailable;

        return $this;
    }
}
