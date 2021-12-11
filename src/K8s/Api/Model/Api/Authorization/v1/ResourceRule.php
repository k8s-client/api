<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Authorization\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * ResourceRule is the list of actions the subject is allowed to perform on resources. The list
 * ordering isn't significant, may contain duplicates, and possibly be incomplete.
 */
class ResourceRule
{
    /**
     * @Kubernetes\Attribute("apiGroups")
     * @var string[]|null
     */
    protected $apiGroups = null;

    /**
     * @Kubernetes\Attribute("resourceNames")
     * @var string[]|null
     */
    protected $resourceNames = null;

    /**
     * @Kubernetes\Attribute("resources")
     * @var string[]|null
     */
    protected $resources = null;

    /**
     * @Kubernetes\Attribute("verbs",isRequired=true)
     * @var string[]
     */
    protected $verbs;

    /**
     * @param string[] $verbs
     */
    public function __construct(array $verbs)
    {
        $this->verbs = $verbs;
    }

    /**
     * APIGroups is the name of the APIGroup that contains the resources.  If multiple API groups are
     * specified, any action requested against one of the enumerated resources in any API group will be
     * allowed.  "*" means all.
     */
    public function getApiGroups(): ?array
    {
        return $this->apiGroups;
    }

    /**
     * APIGroups is the name of the APIGroup that contains the resources.  If multiple API groups are
     * specified, any action requested against one of the enumerated resources in any API group will be
     * allowed.  "*" means all.
     *
     * @return static
     */
    public function setApiGroups(array $apiGroups)
    {
        $this->apiGroups = $apiGroups;

        return $this;
    }

    /**
     * ResourceNames is an optional white list of names that the rule applies to.  An empty set means that
     * everything is allowed.  "*" means all.
     */
    public function getResourceNames(): ?array
    {
        return $this->resourceNames;
    }

    /**
     * ResourceNames is an optional white list of names that the rule applies to.  An empty set means that
     * everything is allowed.  "*" means all.
     *
     * @return static
     */
    public function setResourceNames(array $resourceNames)
    {
        $this->resourceNames = $resourceNames;

        return $this;
    }

    /**
     * Resources is a list of resources this rule applies to.  "*" means all in the specified apiGroups.
     *  "* /foo" represents the subresource 'foo' for all resources in the specified apiGroups.
     */
    public function getResources(): ?array
    {
        return $this->resources;
    }

    /**
     * Resources is a list of resources this rule applies to.  "*" means all in the specified apiGroups.
     *  "* /foo" represents the subresource 'foo' for all resources in the specified apiGroups.
     *
     * @return static
     */
    public function setResources(array $resources)
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * Verb is a list of kubernetes resource API verbs, like: get, list, watch, create, update, delete,
     * proxy.  "*" means all.
     */
    public function getVerbs(): array
    {
        return $this->verbs;
    }

    /**
     * Verb is a list of kubernetes resource API verbs, like: get, list, watch, create, update, delete,
     * proxy.  "*" means all.
     *
     * @return static
     */
    public function setVerbs(array $verbs)
    {
        $this->verbs = $verbs;

        return $this;
    }
}
