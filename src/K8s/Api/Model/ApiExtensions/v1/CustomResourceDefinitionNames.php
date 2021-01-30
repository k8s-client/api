<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.20.2
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
 * CustomResourceDefinitionNames indicates the names to serve this CustomResourceDefinition
 */
class CustomResourceDefinitionNames
{
    /**
     * @Kubernetes\Attribute("categories")
     * @var string[]|null
     */
    protected $categories = null;

    /**
     * @Kubernetes\Attribute("kind",isRequired=true)
     * @var string
     */
    protected $kind;

    /**
     * @Kubernetes\Attribute("listKind")
     * @var string|null
     */
    protected $listKind = null;

    /**
     * @Kubernetes\Attribute("plural",isRequired=true)
     * @var string
     */
    protected $plural;

    /**
     * @Kubernetes\Attribute("shortNames")
     * @var string[]|null
     */
    protected $shortNames = null;

    /**
     * @Kubernetes\Attribute("singular")
     * @var string|null
     */
    protected $singular = null;

    /**
     * @param string $kind
     * @param string $plural
     */
    public function __construct(string $kind, string $plural)
    {
        $this->kind = $kind;
        $this->plural = $plural;
    }

    /**
     * categories is a list of grouped resources this custom resource belongs to (e.g. 'all'). This is
     * published in API discovery documents, and used by clients to support invocations like `kubectl get
     * all`.
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * categories is a list of grouped resources this custom resource belongs to (e.g. 'all'). This is
     * published in API discovery documents, and used by clients to support invocations like `kubectl get
     * all`.
     *
     * @return static
     */
    public function setCategories(array $categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * kind is the serialized kind of the resource. It is normally CamelCase and singular. Custom resource
     * instances will use this value as the `kind` attribute in API calls.
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * kind is the serialized kind of the resource. It is normally CamelCase and singular. Custom resource
     * instances will use this value as the `kind` attribute in API calls.
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * listKind is the serialized kind of the list for this resource. Defaults to "`kind`List".
     */
    public function getListKind(): ?string
    {
        return $this->listKind;
    }

    /**
     * listKind is the serialized kind of the list for this resource. Defaults to "`kind`List".
     *
     * @return static
     */
    public function setListKind(string $listKind)
    {
        $this->listKind = $listKind;

        return $this;
    }

    /**
     * plural is the plural name of the resource to serve. The custom resources are served under
     * `/apis/<group>/<version>/.../<plural>`. Must match the name of the CustomResourceDefinition (in the
     * form `<names.plural>.<group>`). Must be all lowercase.
     */
    public function getPlural(): string
    {
        return $this->plural;
    }

    /**
     * plural is the plural name of the resource to serve. The custom resources are served under
     * `/apis/<group>/<version>/.../<plural>`. Must match the name of the CustomResourceDefinition (in the
     * form `<names.plural>.<group>`). Must be all lowercase.
     *
     * @return static
     */
    public function setPlural(string $plural)
    {
        $this->plural = $plural;

        return $this;
    }

    /**
     * shortNames are short names for the resource, exposed in API discovery documents, and used by clients
     * to support invocations like `kubectl get <shortname>`. It must be all lowercase.
     */
    public function getShortNames(): ?array
    {
        return $this->shortNames;
    }

    /**
     * shortNames are short names for the resource, exposed in API discovery documents, and used by clients
     * to support invocations like `kubectl get <shortname>`. It must be all lowercase.
     *
     * @return static
     */
    public function setShortNames(array $shortNames)
    {
        $this->shortNames = $shortNames;

        return $this;
    }

    /**
     * singular is the singular name of the resource. It must be all lowercase. Defaults to lowercased
     * `kind`.
     */
    public function getSingular(): ?string
    {
        return $this->singular;
    }

    /**
     * singular is the singular name of the resource. It must be all lowercase. Defaults to lowercased
     * `kind`.
     *
     * @return static
     */
    public function setSingular(string $singular)
    {
        $this->singular = $singular;

        return $this;
    }
}
