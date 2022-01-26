<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.3
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiMachinery\Apis\Meta\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * APIResource specifies the name of a resource and whether it is namespaced.
 */
class APIResource
{
    /**
     * @Kubernetes\Attribute("categories")
     * @var string[]|null
     */
    protected $categories = null;

    /**
     * @Kubernetes\Attribute("group")
     * @var string|null
     */
    protected $group = null;

    /**
     * @Kubernetes\Attribute("kind",isRequired=true)
     * @var string
     */
    protected $kind;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("namespaced",isRequired=true)
     * @var bool
     */
    protected $namespaced;

    /**
     * @Kubernetes\Attribute("shortNames")
     * @var string[]|null
     */
    protected $shortNames = null;

    /**
     * @Kubernetes\Attribute("singularName",isRequired=true)
     * @var string
     */
    protected $singularName;

    /**
     * @Kubernetes\Attribute("storageVersionHash")
     * @var string|null
     */
    protected $storageVersionHash = null;

    /**
     * @Kubernetes\Attribute("verbs",isRequired=true)
     * @var string[]
     */
    protected $verbs;

    /**
     * @Kubernetes\Attribute("version")
     * @var string|null
     */
    protected $version = null;

    /**
     * @param string $kind
     * @param string $name
     * @param bool $namespaced
     * @param string $singularName
     * @param string[] $verbs
     */
    public function __construct(string $kind, string $name, bool $namespaced, string $singularName, array $verbs)
    {
        $this->kind = $kind;
        $this->name = $name;
        $this->namespaced = $namespaced;
        $this->singularName = $singularName;
        $this->verbs = $verbs;
    }

    /**
     * categories is a list of the grouped resources this resource belongs to (e.g. 'all')
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * categories is a list of the grouped resources this resource belongs to (e.g. 'all')
     *
     * @return static
     */
    public function setCategories(array $categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * group is the preferred group of the resource.  Empty implies the group of the containing resource
     * list. For subresources, this may have a different value, for example: Scale".
     */
    public function getGroup(): ?string
    {
        return $this->group;
    }

    /**
     * group is the preferred group of the resource.  Empty implies the group of the containing resource
     * list. For subresources, this may have a different value, for example: Scale".
     *
     * @return static
     */
    public function setGroup(string $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * kind is the kind for the resource (e.g. 'Foo' is the kind for a resource 'foo')
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * kind is the kind for the resource (e.g. 'Foo' is the kind for a resource 'foo')
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * name is the plural name of the resource.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name is the plural name of the resource.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * namespaced indicates if a resource is namespaced or not.
     */
    public function isNamespaced(): bool
    {
        return $this->namespaced;
    }

    /**
     * namespaced indicates if a resource is namespaced or not.
     *
     * @return static
     */
    public function setIsNamespaced(bool $namespaced)
    {
        $this->namespaced = $namespaced;

        return $this;
    }

    /**
     * shortNames is a list of suggested short names of the resource.
     */
    public function getShortNames(): ?array
    {
        return $this->shortNames;
    }

    /**
     * shortNames is a list of suggested short names of the resource.
     *
     * @return static
     */
    public function setShortNames(array $shortNames)
    {
        $this->shortNames = $shortNames;

        return $this;
    }

    /**
     * singularName is the singular name of the resource.  This allows clients to handle plural and
     * singular opaquely. The singularName is more correct for reporting status on a single item and both
     * singular and plural are allowed from the kubectl CLI interface.
     */
    public function getSingularName(): string
    {
        return $this->singularName;
    }

    /**
     * singularName is the singular name of the resource.  This allows clients to handle plural and
     * singular opaquely. The singularName is more correct for reporting status on a single item and both
     * singular and plural are allowed from the kubectl CLI interface.
     *
     * @return static
     */
    public function setSingularName(string $singularName)
    {
        $this->singularName = $singularName;

        return $this;
    }

    /**
     * The hash value of the storage version, the version this resource is converted to when written to the
     * data store. Value must be treated as opaque by clients. Only equality comparison on the value is
     * valid. This is an alpha feature and may change or be removed in the future. The field is populated
     * by the apiserver only if the StorageVersionHash feature gate is enabled. This field will remain
     * optional even if it graduates.
     */
    public function getStorageVersionHash(): ?string
    {
        return $this->storageVersionHash;
    }

    /**
     * The hash value of the storage version, the version this resource is converted to when written to the
     * data store. Value must be treated as opaque by clients. Only equality comparison on the value is
     * valid. This is an alpha feature and may change or be removed in the future. The field is populated
     * by the apiserver only if the StorageVersionHash feature gate is enabled. This field will remain
     * optional even if it graduates.
     *
     * @return static
     */
    public function setStorageVersionHash(string $storageVersionHash)
    {
        $this->storageVersionHash = $storageVersionHash;

        return $this;
    }

    /**
     * verbs is a list of supported kube verbs (this includes get, list, watch, create, update, patch,
     * delete, deletecollection, and proxy)
     */
    public function getVerbs(): array
    {
        return $this->verbs;
    }

    /**
     * verbs is a list of supported kube verbs (this includes get, list, watch, create, update, patch,
     * delete, deletecollection, and proxy)
     *
     * @return static
     */
    public function setVerbs(array $verbs)
    {
        $this->verbs = $verbs;

        return $this;
    }

    /**
     * version is the preferred version of the resource.  Empty implies the version of the containing
     * resource list For subresources, this may have a different value, for example: v1 (while inside a
     * v1beta1 version of the core resource's group)".
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * version is the preferred version of the resource.  Empty implies the version of the containing
     * resource list For subresources, this may have a different value, for example: v1 (while inside a
     * v1beta1 version of the core resource's group)".
     *
     * @return static
     */
    public function setVersion(string $version)
    {
        $this->version = $version;

        return $this;
    }
}
