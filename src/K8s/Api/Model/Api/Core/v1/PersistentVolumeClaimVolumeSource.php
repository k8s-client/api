<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.12.10
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
 * PersistentVolumeClaimVolumeSource references the user's PVC in the same namespace. This volume finds
 * the bound PV and mounts that volume for the pod. A PersistentVolumeClaimVolumeSource is,
 * essentially, a wrapper around another type of volume that is owned by someone else (the system).
 */
class PersistentVolumeClaimVolumeSource
{
    /**
     * @Kubernetes\Attribute("claimName",isRequired=true)
     * @var string
     */
    protected $claimName;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @param string $claimName
     */
    public function __construct(string $claimName)
    {
        $this->claimName = $claimName;
    }

    /**
     * ClaimName is the name of a PersistentVolumeClaim in the same namespace as the pod using this volume.
     * More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     */
    public function getClaimName(): string
    {
        return $this->claimName;
    }

    /**
     * ClaimName is the name of a PersistentVolumeClaim in the same namespace as the pod using this volume.
     * More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     *
     * @return static
     */
    public function setClaimName(string $claimName)
    {
        $this->claimName = $claimName;

        return $this;
    }

    /**
     * Will force the ReadOnly setting in VolumeMounts. Default false.
     */
    public function isReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * Will force the ReadOnly setting in VolumeMounts. Default false.
     *
     * @return static
     */
    public function setIsReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }
}
