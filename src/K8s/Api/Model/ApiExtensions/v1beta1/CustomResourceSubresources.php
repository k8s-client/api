<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * CustomResourceSubresources defines the status and scale subresources for CustomResources.
 */
class CustomResourceSubresources
{
    /**
     * @Kubernetes\Attribute("scale",type="model",model=CustomResourceSubresourceScale::class)
     * @var CustomResourceSubresourceScale|null
     */
    protected $scale = null;

    /**
     * @Kubernetes\Attribute("status")
     * @var object|null
     */
    protected $status = null;

    /**
     * @param CustomResourceSubresourceScale|null $scale
     * @param object|null $status
     */
    public function __construct(?CustomResourceSubresourceScale $scale = null, $status = null)
    {
        $this->scale = $scale;
        $this->status = $status;
    }

    /**
     * scale indicates the custom resource should serve a `/scale` subresource that returns an
     * `autoscaling/v1` Scale object.
     */
    public function getScale(): ?CustomResourceSubresourceScale
    {
        return $this->scale;
    }

    /**
     * scale indicates the custom resource should serve a `/scale` subresource that returns an
     * `autoscaling/v1` Scale object.
     *
     * @return static
     */
    public function setScale(CustomResourceSubresourceScale $scale)
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * status indicates the custom resource should serve a `/status` subresource. When enabled: 1. requests
     * to the custom resource primary endpoint ignore changes to the `status` stanza of the object. 2.
     * requests to the custom resource `/status` subresource ignore changes to anything other than the
     * `status` stanza of the object.
     *
     * @return object
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * status indicates the custom resource should serve a `/status` subresource. When enabled: 1. requests
     * to the custom resource primary endpoint ignore changes to the `status` stanza of the object. 2.
     * requests to the custom resource `/status` subresource ignore changes to anything other than the
     * `status` stanza of the object.
     *
     * @param object $status
     * @return static
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
