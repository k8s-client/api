<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.3
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
 * StatefulSetPersistentVolumeClaimRetentionPolicy describes the policy used for PVCs created from the
 * StatefulSet VolumeClaimTemplates.
 */
class StatefulSetPersistentVolumeClaimRetentionPolicy
{
    /**
     * @Kubernetes\Attribute("whenDeleted")
     * @var string|null
     */
    protected $whenDeleted = null;

    /**
     * @Kubernetes\Attribute("whenScaled")
     * @var string|null
     */
    protected $whenScaled = null;

    /**
     * @param string|null $whenDeleted
     * @param string|null $whenScaled
     */
    public function __construct(?string $whenDeleted = null, ?string $whenScaled = null)
    {
        $this->whenDeleted = $whenDeleted;
        $this->whenScaled = $whenScaled;
    }

    /**
     * WhenDeleted specifies what happens to PVCs created from StatefulSet VolumeClaimTemplates when the
     * StatefulSet is deleted. The default policy of `Retain` causes PVCs to not be affected by StatefulSet
     * deletion. The `Delete` policy causes those PVCs to be deleted.
     */
    public function getWhenDeleted(): ?string
    {
        return $this->whenDeleted;
    }

    /**
     * WhenDeleted specifies what happens to PVCs created from StatefulSet VolumeClaimTemplates when the
     * StatefulSet is deleted. The default policy of `Retain` causes PVCs to not be affected by StatefulSet
     * deletion. The `Delete` policy causes those PVCs to be deleted.
     *
     * @return static
     */
    public function setWhenDeleted(string $whenDeleted)
    {
        $this->whenDeleted = $whenDeleted;

        return $this;
    }

    /**
     * WhenScaled specifies what happens to PVCs created from StatefulSet VolumeClaimTemplates when the
     * StatefulSet is scaled down. The default policy of `Retain` causes PVCs to not be affected by a
     * scaledown. The `Delete` policy causes the associated PVCs for any excess pods above the replica
     * count to be deleted.
     */
    public function getWhenScaled(): ?string
    {
        return $this->whenScaled;
    }

    /**
     * WhenScaled specifies what happens to PVCs created from StatefulSet VolumeClaimTemplates when the
     * StatefulSet is scaled down. The default policy of `Retain` causes PVCs to not be affected by a
     * scaledown. The `Delete` policy causes the associated PVCs for any excess pods above the replica
     * count to be deleted.
     *
     * @return static
     */
    public function setWhenScaled(string $whenScaled)
    {
        $this->whenScaled = $whenScaled;

        return $this;
    }
}
