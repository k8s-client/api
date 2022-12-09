<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.15
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
 * Represents an ephemeral volume that is handled by a normal storage driver.
 */
class EphemeralVolumeSource
{
    /**
     * @Kubernetes\Attribute("volumeClaimTemplate",type="model",model=PersistentVolumeClaimTemplate::class)
     * @var PersistentVolumeClaimTemplate|null
     */
    protected $volumeClaimTemplate = null;

    /**
     * @param PersistentVolumeClaimTemplate|null $volumeClaimTemplate
     */
    public function __construct(?PersistentVolumeClaimTemplate $volumeClaimTemplate = null)
    {
        $this->volumeClaimTemplate = $volumeClaimTemplate;
    }

    /**
     * Will be used to create a stand-alone PVC to provision the volume. The pod in which this
     * EphemeralVolumeSource is embedded will be the owner of the PVC, i.e. the PVC will be deleted
     * together with the pod.  The name of the PVC will be `<pod name>-<volume name>` where `<volume name>`
     * is the name from the `PodSpec.Volumes` array entry. Pod validation will reject the pod if the
     * concatenated name is not valid for a PVC (for example, too long).
     *
     * An existing PVC with that name that is not owned by the pod will *not* be used for the pod to avoid
     * using an unrelated volume by mistake. Starting the pod is then blocked until the unrelated PVC is
     * removed. If such a pre-created PVC is meant to be used by the pod, the PVC has to updated with an
     * owner reference to the pod once the pod exists. Normally this should not be necessary, but it may be
     * useful when manually reconstructing a broken cluster.
     *
     * This field is read-only and no changes will be made by Kubernetes to the PVC after it has been
     * created.
     *
     * Required, must not be nil.
     */
    public function getVolumeClaimTemplate(): ?PersistentVolumeClaimTemplate
    {
        return $this->volumeClaimTemplate;
    }

    /**
     * Will be used to create a stand-alone PVC to provision the volume. The pod in which this
     * EphemeralVolumeSource is embedded will be the owner of the PVC, i.e. the PVC will be deleted
     * together with the pod.  The name of the PVC will be `<pod name>-<volume name>` where `<volume name>`
     * is the name from the `PodSpec.Volumes` array entry. Pod validation will reject the pod if the
     * concatenated name is not valid for a PVC (for example, too long).
     *
     * An existing PVC with that name that is not owned by the pod will *not* be used for the pod to avoid
     * using an unrelated volume by mistake. Starting the pod is then blocked until the unrelated PVC is
     * removed. If such a pre-created PVC is meant to be used by the pod, the PVC has to updated with an
     * owner reference to the pod once the pod exists. Normally this should not be necessary, but it may be
     * useful when manually reconstructing a broken cluster.
     *
     * This field is read-only and no changes will be made by Kubernetes to the PVC after it has been
     * created.
     *
     * Required, must not be nil.
     *
     * @return static
     */
    public function setVolumeClaimTemplate(PersistentVolumeClaimTemplate $volumeClaimTemplate)
    {
        $this->volumeClaimTemplate = $volumeClaimTemplate;

        return $this;
    }
}
