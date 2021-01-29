<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.19.7
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
 * VolumeAttachmentSpec is the specification of a VolumeAttachment request.
 */
class VolumeAttachmentSpec
{
    /**
     * @Kubernetes\Attribute("attacher",isRequired=true)
     * @var string
     */
    protected $attacher = null;

    /**
     * @Kubernetes\Attribute("nodeName",isRequired=true)
     * @var string
     */
    protected $nodeName = null;

    /**
     * @Kubernetes\Attribute("source",type="model",model=VolumeAttachmentSource::class,isRequired=true)
     * @var VolumeAttachmentSource
     */
    protected $source = null;

    /**
     * @param string $attacher
     * @param string $nodeName
     * @param VolumeAttachmentSource $source
     */
    public function __construct(string $attacher, string $nodeName, VolumeAttachmentSource $source)
    {
        $this->attacher = $attacher;
        $this->nodeName = $nodeName;
        $this->source = $source;
    }

    /**
     * Attacher indicates the name of the volume driver that MUST handle this request. This is the name
     * returned by GetPluginName().
     */
    public function getAttacher(): string
    {
        return $this->attacher;
    }

    /**
     * Attacher indicates the name of the volume driver that MUST handle this request. This is the name
     * returned by GetPluginName().
     *
     * @return static
     */
    public function setAttacher(string $attacher)
    {
        $this->attacher = $attacher;

        return $this;
    }

    /**
     * The node that the volume should be attached to.
     */
    public function getNodeName(): string
    {
        return $this->nodeName;
    }

    /**
     * The node that the volume should be attached to.
     *
     * @return static
     */
    public function setNodeName(string $nodeName)
    {
        $this->nodeName = $nodeName;

        return $this;
    }

    /**
     * Source represents the volume that should be attached.
     */
    public function getSource(): VolumeAttachmentSource
    {
        return $this->source;
    }

    /**
     * Source represents the volume that should be attached.
     *
     * @return static
     */
    public function setSource(VolumeAttachmentSource $source)
    {
        $this->source = $source;

        return $this;
    }
}
