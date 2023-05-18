<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.10
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
 * RollingUpdateStatefulSetStrategy is used to communicate parameter for
 * RollingUpdateStatefulSetStrategyType.
 */
class RollingUpdateStatefulSetStrategy
{
    /**
     * @Kubernetes\Attribute("maxUnavailable")
     * @var int|string|null
     */
    protected $maxUnavailable = null;

    /**
     * @Kubernetes\Attribute("partition")
     * @var int|null
     */
    protected $partition = null;

    /**
     * @param int|string|null $maxUnavailable
     * @param int|null $partition
     */
    public function __construct($maxUnavailable = null, ?int $partition = null)
    {
        $this->maxUnavailable = $maxUnavailable;
        $this->partition = $partition;
    }

    /**
     * The maximum number of pods that can be unavailable during the update. Value can be an absolute
     * number (ex: 5) or a percentage of desired pods (ex: 10%). Absolute number is calculated from
     * percentage by rounding up. This can not be 0. Defaults to 1. This field is alpha-level and is only
     * honored by servers that enable the MaxUnavailableStatefulSet feature. The field applies to all pods
     * in the range 0 to Replicas-1. That means if there is any unavailable pod in the range 0 to
     * Replicas-1, it will be counted towards MaxUnavailable.
     *
     * @return int|string
     */
    public function getMaxUnavailable()
    {
        return $this->maxUnavailable;
    }

    /**
     * The maximum number of pods that can be unavailable during the update. Value can be an absolute
     * number (ex: 5) or a percentage of desired pods (ex: 10%). Absolute number is calculated from
     * percentage by rounding up. This can not be 0. Defaults to 1. This field is alpha-level and is only
     * honored by servers that enable the MaxUnavailableStatefulSet feature. The field applies to all pods
     * in the range 0 to Replicas-1. That means if there is any unavailable pod in the range 0 to
     * Replicas-1, it will be counted towards MaxUnavailable.
     *
     * @param int|string $maxUnavailable
     * @return static
     */
    public function setMaxUnavailable($maxUnavailable)
    {
        $this->maxUnavailable = $maxUnavailable;

        return $this;
    }

    /**
     * Partition indicates the ordinal at which the StatefulSet should be partitioned for updates. During a
     * rolling update, all pods from ordinal Replicas-1 to Partition are updated. All pods from ordinal
     * Partition-1 to 0 remain untouched. This is helpful in being able to do a canary based deployment.
     * The default value is 0.
     */
    public function getPartition(): ?int
    {
        return $this->partition;
    }

    /**
     * Partition indicates the ordinal at which the StatefulSet should be partitioned for updates. During a
     * rolling update, all pods from ordinal Replicas-1 to Partition are updated. All pods from ordinal
     * Partition-1 to 0 remain untouched. This is helpful in being able to do a canary based deployment.
     * The default value is 0.
     *
     * @return static
     */
    public function setPartition(int $partition)
    {
        $this->partition = $partition;

        return $this;
    }
}
