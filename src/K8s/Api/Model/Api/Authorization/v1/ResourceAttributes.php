<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.20.15
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
 * ResourceAttributes includes the authorization attributes available for resource requests to the
 * Authorizer interface
 */
class ResourceAttributes
{
    /**
     * @Kubernetes\Attribute("group")
     * @var string|null
     */
    protected $group = null;

    /**
     * @Kubernetes\Attribute("name")
     * @var string|null
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("namespace")
     * @var string|null
     */
    protected $namespace = null;

    /**
     * @Kubernetes\Attribute("resource")
     * @var string|null
     */
    protected $resource = null;

    /**
     * @Kubernetes\Attribute("subresource")
     * @var string|null
     */
    protected $subresource = null;

    /**
     * @Kubernetes\Attribute("verb")
     * @var string|null
     */
    protected $verb = null;

    /**
     * @Kubernetes\Attribute("version")
     * @var string|null
     */
    protected $version = null;

    /**
     * Group is the API Group of the Resource.  "*" means all.
     */
    public function getGroup(): ?string
    {
        return $this->group;
    }

    /**
     * Group is the API Group of the Resource.  "*" means all.
     *
     * @return static
     */
    public function setGroup(string $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Name is the name of the resource being requested for a "get" or deleted for a "delete". "" (empty)
     * means all.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name is the name of the resource being requested for a "get" or deleted for a "delete". "" (empty)
     * means all.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Namespace is the namespace of the action being requested.  Currently, there is no distinction
     * between no namespace and all namespaces "" (empty) is defaulted for LocalSubjectAccessReviews ""
     * (empty) is empty for cluster-scoped resources "" (empty) means "all" for namespace scoped resources
     * from a SubjectAccessReview or SelfSubjectAccessReview
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    /**
     * Namespace is the namespace of the action being requested.  Currently, there is no distinction
     * between no namespace and all namespaces "" (empty) is defaulted for LocalSubjectAccessReviews ""
     * (empty) is empty for cluster-scoped resources "" (empty) means "all" for namespace scoped resources
     * from a SubjectAccessReview or SelfSubjectAccessReview
     *
     * @return static
     */
    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * Resource is one of the existing resource types.  "*" means all.
     */
    public function getResource(): ?string
    {
        return $this->resource;
    }

    /**
     * Resource is one of the existing resource types.  "*" means all.
     *
     * @return static
     */
    public function setResource(string $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Subresource is one of the existing resource types.  "" means none.
     */
    public function getSubresource(): ?string
    {
        return $this->subresource;
    }

    /**
     * Subresource is one of the existing resource types.  "" means none.
     *
     * @return static
     */
    public function setSubresource(string $subresource)
    {
        $this->subresource = $subresource;

        return $this;
    }

    /**
     * Verb is a kubernetes resource API verb, like: get, list, watch, create, update, delete, proxy.  "*"
     * means all.
     */
    public function getVerb(): ?string
    {
        return $this->verb;
    }

    /**
     * Verb is a kubernetes resource API verb, like: get, list, watch, create, update, delete, proxy.  "*"
     * means all.
     *
     * @return static
     */
    public function setVerb(string $verb)
    {
        $this->verb = $verb;

        return $this;
    }

    /**
     * Version is the API Version of the Resource.  "*" means all.
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Version is the API Version of the Resource.  "*" means all.
     *
     * @return static
     */
    public function setVersion(string $version)
    {
        $this->version = $version;

        return $this;
    }
}
