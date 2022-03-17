<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.5
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
     * @Kubernetes\Attribute("partition")
     * @var int|null
     */
    protected $partition = null;

    /**
     * @param int|null $partition
     */
    public function __construct(?int $partition = null)
    {
        $this->partition = $partition;
    }

    /**
     * Partition indicates the ordinal at which the StatefulSet should be partitioned. Default value is 0.
     */
    public function getPartition(): ?int
    {
        return $this->partition;
    }

    /**
     * Partition indicates the ordinal at which the StatefulSet should be partitioned. Default value is 0.
     *
     * @return static
     */
    public function setPartition(int $partition)
    {
        $this->partition = $partition;

        return $this;
    }
}
