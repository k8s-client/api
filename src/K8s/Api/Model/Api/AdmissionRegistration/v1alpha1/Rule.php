<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.13.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AdmissionRegistration\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * Rule is a tuple of APIGroups, APIVersion, and Resources.It is recommended to make sure that all the
 * tuple expansions are valid.
 */
class Rule
{
    /**
     * @Kubernetes\Attribute("apiGroups")
     * @var string[]|null
     */
    protected $apiGroups = null;

    /**
     * @Kubernetes\Attribute("apiVersions")
     * @var string[]|null
     */
    protected $apiVersions = null;

    /**
     * @Kubernetes\Attribute("resources")
     * @var string[]|null
     */
    protected $resources = null;

    /**
     * @param string[]|null $apiGroups
     * @param string[]|null $apiVersions
     * @param string[]|null $resources
     */
    public function __construct(?array $apiGroups = null, ?array $apiVersions = null, ?array $resources = null)
    {
        $this->apiGroups = $apiGroups;
        $this->apiVersions = $apiVersions;
        $this->resources = $resources;
    }

    /**
     * APIGroups is the API groups the resources belong to. '*' is all groups. If '*' is present, the
     * length of the slice must be one. Required.
     */
    public function getApiGroups(): ?array
    {
        return $this->apiGroups;
    }

    /**
     * APIGroups is the API groups the resources belong to. '*' is all groups. If '*' is present, the
     * length of the slice must be one. Required.
     *
     * @return static
     */
    public function setApiGroups(array $apiGroups)
    {
        $this->apiGroups = $apiGroups;

        return $this;
    }

    /**
     * APIVersions is the API versions the resources belong to. '*' is all versions. If '*' is present, the
     * length of the slice must be one. Required.
     */
    public function getApiVersions(): ?array
    {
        return $this->apiVersions;
    }

    /**
     * APIVersions is the API versions the resources belong to. '*' is all versions. If '*' is present, the
     * length of the slice must be one. Required.
     *
     * @return static
     */
    public function setApiVersions(array $apiVersions)
    {
        $this->apiVersions = $apiVersions;

        return $this;
    }

    /**
     * Resources is a list of resources this rule applies to.
     *
     * For example: 'pods' means pods. 'pods/log' means the log subresource of pods. '*' means all
     * resources, but not subresources. 'pods/*' means all subresources of pods. '* /scale' means all scale
     * subresources. '* /*' means all resources and their subresources.
     *
     * If wildcard is present, the validation rule will ensure resources do not overlap with each other.
     *
     * Depending on the enclosing object, subresources might not be allowed. Required.
     */
    public function getResources(): ?array
    {
        return $this->resources;
    }

    /**
     * Resources is a list of resources this rule applies to.
     *
     * For example: 'pods' means pods. 'pods/log' means the log subresource of pods. '*' means all
     * resources, but not subresources. 'pods/*' means all subresources of pods. '* /scale' means all scale
     * subresources. '* /*' means all resources and their subresources.
     *
     * If wildcard is present, the validation rule will ensure resources do not overlap with each other.
     *
     * Depending on the enclosing object, subresources might not be allowed. Required.
     *
     * @return static
     */
    public function setResources(array $resources)
    {
        $this->resources = $resources;

        return $this;
    }
}
