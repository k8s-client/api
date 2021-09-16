<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.21.5
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * CustomResourceDefinitionVersion describes a version for CRD.
 */
class CustomResourceDefinitionVersion
{
    /**
     * @Kubernetes\Attribute("additionalPrinterColumns",type="collection",model=CustomResourceColumnDefinition::class)
     * @var iterable|CustomResourceColumnDefinition[]|null
     */
    protected $additionalPrinterColumns = null;

    /**
     * @Kubernetes\Attribute("deprecated")
     * @var bool|null
     */
    protected $deprecated = null;

    /**
     * @Kubernetes\Attribute("deprecationWarning")
     * @var string|null
     */
    protected $deprecationWarning = null;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("schema",type="model",model=CustomResourceValidation::class)
     * @var CustomResourceValidation|null
     */
    protected $schema = null;

    /**
     * @Kubernetes\Attribute("served",isRequired=true)
     * @var bool
     */
    protected $served;

    /**
     * @Kubernetes\Attribute("storage",isRequired=true)
     * @var bool
     */
    protected $storage;

    /**
     * @Kubernetes\Attribute("subresources",type="model",model=CustomResourceSubresources::class)
     * @var CustomResourceSubresources|null
     */
    protected $subresources = null;

    /**
     * @param string $name
     * @param bool $served
     * @param bool $storage
     */
    public function __construct(string $name, bool $served, bool $storage)
    {
        $this->name = $name;
        $this->served = $served;
        $this->storage = $storage;
    }

    /**
     * additionalPrinterColumns specifies additional columns returned in Table output. See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#receiving-resources-as-tables for
     * details. Top-level and per-version columns are mutually exclusive. Per-version columns must not all
     * be set to identical values (top-level columns should be used instead). If no top-level or
     * per-version columns are specified, a single column displaying the age of the custom resource is
     * used.
     *
     * @return iterable|CustomResourceColumnDefinition[]
     */
    public function getAdditionalPrinterColumns(): ?iterable
    {
        return $this->additionalPrinterColumns;
    }

    /**
     * additionalPrinterColumns specifies additional columns returned in Table output. See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#receiving-resources-as-tables for
     * details. Top-level and per-version columns are mutually exclusive. Per-version columns must not all
     * be set to identical values (top-level columns should be used instead). If no top-level or
     * per-version columns are specified, a single column displaying the age of the custom resource is
     * used.
     *
     * @return static
     */
    public function setAdditionalPrinterColumns(iterable $additionalPrinterColumns)
    {
        $this->additionalPrinterColumns = $additionalPrinterColumns;

        return $this;
    }

    /**
     * @return static
     */
    public function addAdditionalPrinterColumns(CustomResourceColumnDefinition $additionalPrinterColumn)
    {
        if (!$this->additionalPrinterColumns) {
            $this->additionalPrinterColumns = new Collection();
        }
        $this->additionalPrinterColumns[] = $additionalPrinterColumn;

        return $this;
    }

    /**
     * deprecated indicates this version of the custom resource API is deprecated. When set to true, API
     * requests to this version receive a warning header in the server response. Defaults to false.
     */
    public function isDeprecated(): ?bool
    {
        return $this->deprecated;
    }

    /**
     * deprecated indicates this version of the custom resource API is deprecated. When set to true, API
     * requests to this version receive a warning header in the server response. Defaults to false.
     *
     * @return static
     */
    public function setIsDeprecated(bool $deprecated)
    {
        $this->deprecated = $deprecated;

        return $this;
    }

    /**
     * deprecationWarning overrides the default warning returned to API clients. May only be set when
     * `deprecated` is true. The default warning indicates this version is deprecated and recommends use of
     * the newest served version of equal or greater stability, if one exists.
     */
    public function getDeprecationWarning(): ?string
    {
        return $this->deprecationWarning;
    }

    /**
     * deprecationWarning overrides the default warning returned to API clients. May only be set when
     * `deprecated` is true. The default warning indicates this version is deprecated and recommends use of
     * the newest served version of equal or greater stability, if one exists.
     *
     * @return static
     */
    public function setDeprecationWarning(string $deprecationWarning)
    {
        $this->deprecationWarning = $deprecationWarning;

        return $this;
    }

    /**
     * name is the version name, e.g. “v1”, “v2beta1”, etc. The custom resources are served under
     * this version at `/apis/<group>/<version>/...` if `served` is true.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name is the version name, e.g. “v1”, “v2beta1”, etc. The custom resources are served under
     * this version at `/apis/<group>/<version>/...` if `served` is true.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * schema describes the schema used for validation and pruning of this version of the custom resource.
     * Top-level and per-version schemas are mutually exclusive. Per-version schemas must not all be set to
     * identical values (top-level validation schema should be used instead).
     */
    public function getSchema(): ?CustomResourceValidation
    {
        return $this->schema;
    }

    /**
     * schema describes the schema used for validation and pruning of this version of the custom resource.
     * Top-level and per-version schemas are mutually exclusive. Per-version schemas must not all be set to
     * identical values (top-level validation schema should be used instead).
     *
     * @return static
     */
    public function setSchema(CustomResourceValidation $schema)
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * served is a flag enabling/disabling this version from being served via REST APIs
     */
    public function isServed(): bool
    {
        return $this->served;
    }

    /**
     * served is a flag enabling/disabling this version from being served via REST APIs
     *
     * @return static
     */
    public function setIsServed(bool $served)
    {
        $this->served = $served;

        return $this;
    }

    /**
     * storage indicates this version should be used when persisting custom resources to storage. There
     * must be exactly one version with storage=true.
     */
    public function isStorage(): bool
    {
        return $this->storage;
    }

    /**
     * storage indicates this version should be used when persisting custom resources to storage. There
     * must be exactly one version with storage=true.
     *
     * @return static
     */
    public function setIsStorage(bool $storage)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * subresources specify what subresources this version of the defined custom resource have. Top-level
     * and per-version subresources are mutually exclusive. Per-version subresources must not all be set to
     * identical values (top-level subresources should be used instead).
     */
    public function getSubresources(): ?CustomResourceSubresources
    {
        return $this->subresources;
    }

    /**
     * subresources specify what subresources this version of the defined custom resource have. Top-level
     * and per-version subresources are mutually exclusive. Per-version subresources must not all be set to
     * identical values (top-level subresources should be used instead).
     *
     * @return static
     */
    public function setSubresources(CustomResourceSubresources $subresources)
    {
        $this->subresources = $subresources;

        return $this;
    }
}
