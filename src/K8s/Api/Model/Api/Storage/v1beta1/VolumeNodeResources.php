<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.21.4
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Storage\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * VolumeNodeResources is a set of resource limits for scheduling of volumes.
 */
class VolumeNodeResources
{
    /**
     * @Kubernetes\Attribute("count")
     * @var int|null
     */
    protected $count = null;

    /**
     * @param int|null $count
     */
    public function __construct(?int $count = null)
    {
        $this->count = $count;
    }

    /**
     * Maximum number of unique volumes managed by the CSI driver that can be used on a node. A volume that
     * is both attached and mounted on a node is considered to be used once, not twice. The same rule
     * applies for a unique volume that is shared among multiple pods on the same node. If this field is
     * nil, then the supported number of volumes on this node is unbounded.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Maximum number of unique volumes managed by the CSI driver that can be used on a node. A volume that
     * is both attached and mounted on a node is considered to be used once, not twice. The same rule
     * applies for a unique volume that is shared among multiple pods on the same node. If this field is
     * nil, then the supported number of volumes on this node is unbounded.
     *
     * @return static
     */
    public function setCount(int $count)
    {
        $this->count = $count;

        return $this;
    }
}
