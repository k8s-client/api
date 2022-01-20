<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.9
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\FlowControl\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * ResourcePolicyRule is a predicate that matches some resource requests, testing the request's verb
 * and the target resource. A ResourcePolicyRule matches a resource request if and only if: (a) at
 * least one member of verbs matches the request, (b) at least one member of apiGroups matches the
 * request, (c) at least one member of resources matches the request, and (d) least one member of
 * namespaces matches the request.
 */
class ResourcePolicyRule
{
    /**
     * @Kubernetes\Attribute("apiGroups",isRequired=true)
     * @var string[]
     */
    protected $apiGroups;

    /**
     * @Kubernetes\Attribute("clusterScope")
     * @var bool|null
     */
    protected $clusterScope = null;

    /**
     * @Kubernetes\Attribute("namespaces")
     * @var string[]|null
     */
    protected $namespaces = null;

    /**
     * @Kubernetes\Attribute("resources",isRequired=true)
     * @var string[]
     */
    protected $resources;

    /**
     * @Kubernetes\Attribute("verbs",isRequired=true)
     * @var string[]
     */
    protected $verbs;

    /**
     * @param string[] $apiGroups
     * @param string[] $resources
     * @param string[] $verbs
     */
    public function __construct(array $apiGroups, array $resources, array $verbs)
    {
        $this->apiGroups = $apiGroups;
        $this->resources = $resources;
        $this->verbs = $verbs;
    }

    /**
     * `apiGroups` is a list of matching API groups and may not be empty. "*" matches all API groups and,
     * if present, must be the only entry. Required.
     */
    public function getApiGroups(): array
    {
        return $this->apiGroups;
    }

    /**
     * `apiGroups` is a list of matching API groups and may not be empty. "*" matches all API groups and,
     * if present, must be the only entry. Required.
     *
     * @return static
     */
    public function setApiGroups(array $apiGroups)
    {
        $this->apiGroups = $apiGroups;

        return $this;
    }

    /**
     * `clusterScope` indicates whether to match requests that do not specify a namespace (which happens
     * either because the resource is not namespaced or the request targets all namespaces). If this field
     * is omitted or false then the `namespaces` field must contain a non-empty list.
     */
    public function isClusterScope(): ?bool
    {
        return $this->clusterScope;
    }

    /**
     * `clusterScope` indicates whether to match requests that do not specify a namespace (which happens
     * either because the resource is not namespaced or the request targets all namespaces). If this field
     * is omitted or false then the `namespaces` field must contain a non-empty list.
     *
     * @return static
     */
    public function setIsClusterScope(bool $clusterScope)
    {
        $this->clusterScope = $clusterScope;

        return $this;
    }

    /**
     * `namespaces` is a list of target namespaces that restricts matches.  A request that specifies a
     * target namespace matches only if either (a) this list contains that target namespace or (b) this
     * list contains "*".  Note that "*" matches any specified namespace but does not match a request that
     * _does not specify_ a namespace (see the `clusterScope` field for that). This list may be empty, but
     * only if `clusterScope` is true.
     */
    public function getNamespaces(): ?array
    {
        return $this->namespaces;
    }

    /**
     * `namespaces` is a list of target namespaces that restricts matches.  A request that specifies a
     * target namespace matches only if either (a) this list contains that target namespace or (b) this
     * list contains "*".  Note that "*" matches any specified namespace but does not match a request that
     * _does not specify_ a namespace (see the `clusterScope` field for that). This list may be empty, but
     * only if `clusterScope` is true.
     *
     * @return static
     */
    public function setNamespaces(array $namespaces)
    {
        $this->namespaces = $namespaces;

        return $this;
    }

    /**
     * `resources` is a list of matching resources (i.e., lowercase and plural) with, if desired,
     * subresource.  For example, [ "services", "nodes/status" ].  This list may not be empty. "*" matches
     * all resources and, if present, must be the only entry. Required.
     */
    public function getResources(): array
    {
        return $this->resources;
    }

    /**
     * `resources` is a list of matching resources (i.e., lowercase and plural) with, if desired,
     * subresource.  For example, [ "services", "nodes/status" ].  This list may not be empty. "*" matches
     * all resources and, if present, must be the only entry. Required.
     *
     * @return static
     */
    public function setResources(array $resources)
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * `verbs` is a list of matching verbs and may not be empty. "*" matches all verbs and, if present,
     * must be the only entry. Required.
     */
    public function getVerbs(): array
    {
        return $this->verbs;
    }

    /**
     * `verbs` is a list of matching verbs and may not be empty. "*" matches all verbs and, if present,
     * must be the only entry. Required.
     *
     * @return static
     */
    public function setVerbs(array $verbs)
    {
        $this->verbs = $verbs;

        return $this;
    }
}
