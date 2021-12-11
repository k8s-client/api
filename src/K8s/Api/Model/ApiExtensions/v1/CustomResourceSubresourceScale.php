<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.4
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * CustomResourceSubresourceScale defines how to serve the scale subresource for CustomResources.
 */
class CustomResourceSubresourceScale
{
    /**
     * @Kubernetes\Attribute("labelSelectorPath")
     * @var string|null
     */
    protected $labelSelectorPath = null;

    /**
     * @Kubernetes\Attribute("specReplicasPath",isRequired=true)
     * @var string
     */
    protected $specReplicasPath;

    /**
     * @Kubernetes\Attribute("statusReplicasPath",isRequired=true)
     * @var string
     */
    protected $statusReplicasPath;

    /**
     * @param string $specReplicasPath
     * @param string $statusReplicasPath
     */
    public function __construct(string $specReplicasPath, string $statusReplicasPath)
    {
        $this->specReplicasPath = $specReplicasPath;
        $this->statusReplicasPath = $statusReplicasPath;
    }

    /**
     * labelSelectorPath defines the JSON path inside of a custom resource that corresponds to Scale
     * `status.selector`. Only JSON paths without the array notation are allowed. Must be a JSON Path under
     * `.status` or `.spec`. Must be set to work with HorizontalPodAutoscaler. The field pointed by this
     * JSON path must be a string field (not a complex selector struct) which contains a serialized label
     * selector in string form. More info:
     * https://kubernetes.io/docs/tasks/access-kubernetes-api/custom-resources/custom-resource-definitions#scale-subresource
     * If there is no value under the given path in the custom resource, the `status.selector` value in the
     * `/scale` subresource will default to the empty string.
     */
    public function getLabelSelectorPath(): ?string
    {
        return $this->labelSelectorPath;
    }

    /**
     * labelSelectorPath defines the JSON path inside of a custom resource that corresponds to Scale
     * `status.selector`. Only JSON paths without the array notation are allowed. Must be a JSON Path under
     * `.status` or `.spec`. Must be set to work with HorizontalPodAutoscaler. The field pointed by this
     * JSON path must be a string field (not a complex selector struct) which contains a serialized label
     * selector in string form. More info:
     * https://kubernetes.io/docs/tasks/access-kubernetes-api/custom-resources/custom-resource-definitions#scale-subresource
     * If there is no value under the given path in the custom resource, the `status.selector` value in the
     * `/scale` subresource will default to the empty string.
     *
     * @return static
     */
    public function setLabelSelectorPath(string $labelSelectorPath)
    {
        $this->labelSelectorPath = $labelSelectorPath;

        return $this;
    }

    /**
     * specReplicasPath defines the JSON path inside of a custom resource that corresponds to Scale
     * `spec.replicas`. Only JSON paths without the array notation are allowed. Must be a JSON Path under
     * `.spec`. If there is no value under the given path in the custom resource, the `/scale` subresource
     * will return an error on GET.
     */
    public function getSpecReplicasPath(): string
    {
        return $this->specReplicasPath;
    }

    /**
     * specReplicasPath defines the JSON path inside of a custom resource that corresponds to Scale
     * `spec.replicas`. Only JSON paths without the array notation are allowed. Must be a JSON Path under
     * `.spec`. If there is no value under the given path in the custom resource, the `/scale` subresource
     * will return an error on GET.
     *
     * @return static
     */
    public function setSpecReplicasPath(string $specReplicasPath)
    {
        $this->specReplicasPath = $specReplicasPath;

        return $this;
    }

    /**
     * statusReplicasPath defines the JSON path inside of a custom resource that corresponds to Scale
     * `status.replicas`. Only JSON paths without the array notation are allowed. Must be a JSON Path under
     * `.status`. If there is no value under the given path in the custom resource, the `status.replicas`
     * value in the `/scale` subresource will default to 0.
     */
    public function getStatusReplicasPath(): string
    {
        return $this->statusReplicasPath;
    }

    /**
     * statusReplicasPath defines the JSON path inside of a custom resource that corresponds to Scale
     * `status.replicas`. Only JSON paths without the array notation are allowed. Must be a JSON Path under
     * `.status`. If there is no value under the given path in the custom resource, the `status.replicas`
     * value in the `/scale` subresource will default to 0.
     *
     * @return static
     */
    public function setStatusReplicasPath(string $statusReplicasPath)
    {
        $this->statusReplicasPath = $statusReplicasPath;

        return $this;
    }
}
