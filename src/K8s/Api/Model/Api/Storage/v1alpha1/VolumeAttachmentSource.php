<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.12.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Storage\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * VolumeAttachmentSource represents a volume that should be attached. Right now only PersistenVolumes
 * can be attached via external attacher, in future we may allow also inline volumes in pods. Exactly
 * one member can be set.
 */
class VolumeAttachmentSource
{
    /**
     * @Kubernetes\Attribute("persistentVolumeName")
     * @var string|null
     */
    protected $persistentVolumeName = null;

    /**
     * @param string|null $persistentVolumeName
     */
    public function __construct(?string $persistentVolumeName = null)
    {
        $this->persistentVolumeName = $persistentVolumeName;
    }

    /**
     * Name of the persistent volume to attach.
     */
    public function getPersistentVolumeName(): ?string
    {
        return $this->persistentVolumeName;
    }

    /**
     * Name of the persistent volume to attach.
     *
     * @return static
     */
    public function setPersistentVolumeName(string $persistentVolumeName)
    {
        $this->persistentVolumeName = $persistentVolumeName;

        return $this;
    }
}
