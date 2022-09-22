<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Storage\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * VolumeAttachmentStatus is the status of a VolumeAttachment request.
 */
class VolumeAttachmentStatus
{
    /**
     * @Kubernetes\Attribute("attachError",type="model",model=VolumeError::class)
     * @var VolumeError|null
     */
    protected $attachError = null;

    /**
     * @Kubernetes\Attribute("attached",isRequired=true)
     * @var bool
     */
    protected $attached;

    /**
     * @Kubernetes\Attribute("attachmentMetadata")
     * @var string[]|null
     */
    protected $attachmentMetadata = null;

    /**
     * @Kubernetes\Attribute("detachError",type="model",model=VolumeError::class)
     * @var VolumeError|null
     */
    protected $detachError = null;

    /**
     * @param bool $attached
     */
    public function __construct(bool $attached)
    {
        $this->attached = $attached;
    }

    /**
     * The last error encountered during attach operation, if any. This field must only be set by the
     * entity completing the attach operation, i.e. the external-attacher.
     */
    public function getAttachError(): ?VolumeError
    {
        return $this->attachError;
    }

    /**
     * The last error encountered during attach operation, if any. This field must only be set by the
     * entity completing the attach operation, i.e. the external-attacher.
     *
     * @return static
     */
    public function setAttachError(VolumeError $attachError)
    {
        $this->attachError = $attachError;

        return $this;
    }

    /**
     * Indicates the volume is successfully attached. This field must only be set by the entity completing
     * the attach operation, i.e. the external-attacher.
     */
    public function isAttached(): bool
    {
        return $this->attached;
    }

    /**
     * Indicates the volume is successfully attached. This field must only be set by the entity completing
     * the attach operation, i.e. the external-attacher.
     *
     * @return static
     */
    public function setIsAttached(bool $attached)
    {
        $this->attached = $attached;

        return $this;
    }

    /**
     * Upon successful attach, this field is populated with any information returned by the attach
     * operation that must be passed into subsequent WaitForAttach or Mount calls. This field must only be
     * set by the entity completing the attach operation, i.e. the external-attacher.
     */
    public function getAttachmentMetadata(): ?array
    {
        return $this->attachmentMetadata;
    }

    /**
     * Upon successful attach, this field is populated with any information returned by the attach
     * operation that must be passed into subsequent WaitForAttach or Mount calls. This field must only be
     * set by the entity completing the attach operation, i.e. the external-attacher.
     *
     * @return static
     */
    public function setAttachmentMetadata(array $attachmentMetadata)
    {
        $this->attachmentMetadata = $attachmentMetadata;

        return $this;
    }

    /**
     * The last error encountered during detach operation, if any. This field must only be set by the
     * entity completing the detach operation, i.e. the external-attacher.
     */
    public function getDetachError(): ?VolumeError
    {
        return $this->detachError;
    }

    /**
     * The last error encountered during detach operation, if any. This field must only be set by the
     * entity completing the detach operation, i.e. the external-attacher.
     *
     * @return static
     */
    public function setDetachError(VolumeError $detachError)
    {
        $this->detachError = $detachError;

        return $this;
    }
}
