<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.19.16
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
 * CustomResourceDefinitionSpec describes how a user wants their resource to appear
 */
class CustomResourceDefinitionSpec
{
    /**
     * @Kubernetes\Attribute("additionalPrinterColumns",type="collection",model=CustomResourceColumnDefinition::class)
     * @var iterable|CustomResourceColumnDefinition[]|null
     */
    protected $additionalPrinterColumns = null;

    /**
     * @Kubernetes\Attribute("conversion",type="model",model=CustomResourceConversion::class)
     * @var CustomResourceConversion|null
     */
    protected $conversion = null;

    /**
     * @Kubernetes\Attribute("group",isRequired=true)
     * @var string
     */
    protected $group;

    /**
     * @Kubernetes\Attribute("names",type="model",model=CustomResourceDefinitionNames::class,isRequired=true)
     * @var CustomResourceDefinitionNames
     */
    protected $names;

    /**
     * @Kubernetes\Attribute("preserveUnknownFields")
     * @var bool|null
     */
    protected $preserveUnknownFields = null;

    /**
     * @Kubernetes\Attribute("scope",isRequired=true)
     * @var string
     */
    protected $scope;

    /**
     * @Kubernetes\Attribute("subresources",type="model",model=CustomResourceSubresources::class)
     * @var CustomResourceSubresources|null
     */
    protected $subresources = null;

    /**
     * @Kubernetes\Attribute("validation",type="model",model=CustomResourceValidation::class)
     * @var CustomResourceValidation|null
     */
    protected $validation = null;

    /**
     * @Kubernetes\Attribute("version")
     * @var string|null
     */
    protected $version = null;

    /**
     * @Kubernetes\Attribute("versions",type="collection",model=CustomResourceDefinitionVersion::class)
     * @var iterable|CustomResourceDefinitionVersion[]|null
     */
    protected $versions = null;

    /**
     * @param string $group
     * @param CustomResourceDefinitionNames $names
     * @param string $scope
     */
    public function __construct(string $group, CustomResourceDefinitionNames $names, string $scope)
    {
        $this->group = $group;
        $this->names = $names;
        $this->scope = $scope;
    }

    /**
     * additionalPrinterColumns specifies additional columns returned in Table output. See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#receiving-resources-as-tables for
     * details. If present, this field configures columns for all versions. Top-level and per-version
     * columns are mutually exclusive. If no top-level or per-version columns are specified, a single
     * column displaying the age of the custom resource is used.
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
     * details. If present, this field configures columns for all versions. Top-level and per-version
     * columns are mutually exclusive. If no top-level or per-version columns are specified, a single
     * column displaying the age of the custom resource is used.
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
     * conversion defines conversion settings for the CRD.
     */
    public function getConversion(): ?CustomResourceConversion
    {
        return $this->conversion;
    }

    /**
     * conversion defines conversion settings for the CRD.
     *
     * @return static
     */
    public function setConversion(CustomResourceConversion $conversion)
    {
        $this->conversion = $conversion;

        return $this;
    }

    /**
     * group is the API group of the defined custom resource. The custom resources are served under
     * `/apis/<group>/...`. Must match the name of the CustomResourceDefinition (in the form
     * `<names.plural>.<group>`).
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * group is the API group of the defined custom resource. The custom resources are served under
     * `/apis/<group>/...`. Must match the name of the CustomResourceDefinition (in the form
     * `<names.plural>.<group>`).
     *
     * @return static
     */
    public function setGroup(string $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * names specify the resource and kind names for the custom resource.
     */
    public function getNames(): CustomResourceDefinitionNames
    {
        return $this->names;
    }

    /**
     * names specify the resource and kind names for the custom resource.
     *
     * @return static
     */
    public function setNames(CustomResourceDefinitionNames $names)
    {
        $this->names = $names;

        return $this;
    }

    /**
     * preserveUnknownFields indicates that object fields which are not specified in the OpenAPI schema
     * should be preserved when persisting to storage. apiVersion, kind, metadata and known fields inside
     * metadata are always preserved. If false, schemas must be defined for all versions. Defaults to true
     * in v1beta for backwards compatibility. Deprecated: will be required to be false in v1. Preservation
     * of unknown fields can be specified in the validation schema using the
     * `x-kubernetes-preserve-unknown-fields: true` extension. See
     * https://kubernetes.io/docs/tasks/access-kubernetes-api/custom-resources/custom-resource-definitions/#pruning-versus-preserving-unknown-fields
     * for details.
     */
    public function isPreserveUnknownFields(): ?bool
    {
        return $this->preserveUnknownFields;
    }

    /**
     * preserveUnknownFields indicates that object fields which are not specified in the OpenAPI schema
     * should be preserved when persisting to storage. apiVersion, kind, metadata and known fields inside
     * metadata are always preserved. If false, schemas must be defined for all versions. Defaults to true
     * in v1beta for backwards compatibility. Deprecated: will be required to be false in v1. Preservation
     * of unknown fields can be specified in the validation schema using the
     * `x-kubernetes-preserve-unknown-fields: true` extension. See
     * https://kubernetes.io/docs/tasks/access-kubernetes-api/custom-resources/custom-resource-definitions/#pruning-versus-preserving-unknown-fields
     * for details.
     *
     * @return static
     */
    public function setIsPreserveUnknownFields(bool $preserveUnknownFields)
    {
        $this->preserveUnknownFields = $preserveUnknownFields;

        return $this;
    }

    /**
     * scope indicates whether the defined custom resource is cluster- or namespace-scoped. Allowed values
     * are `Cluster` and `Namespaced`. Default is `Namespaced`.
     */
    public function getScope(): string
    {
        return $this->scope;
    }

    /**
     * scope indicates whether the defined custom resource is cluster- or namespace-scoped. Allowed values
     * are `Cluster` and `Namespaced`. Default is `Namespaced`.
     *
     * @return static
     */
    public function setScope(string $scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * subresources specify what subresources the defined custom resource has. If present, this field
     * configures subresources for all versions. Top-level and per-version subresources are mutually
     * exclusive.
     */
    public function getSubresources(): ?CustomResourceSubresources
    {
        return $this->subresources;
    }

    /**
     * subresources specify what subresources the defined custom resource has. If present, this field
     * configures subresources for all versions. Top-level and per-version subresources are mutually
     * exclusive.
     *
     * @return static
     */
    public function setSubresources(CustomResourceSubresources $subresources)
    {
        $this->subresources = $subresources;

        return $this;
    }

    /**
     * validation describes the schema used for validation and pruning of the custom resource. If present,
     * this validation schema is used to validate all versions. Top-level and per-version schemas are
     * mutually exclusive.
     */
    public function getValidation(): ?CustomResourceValidation
    {
        return $this->validation;
    }

    /**
     * validation describes the schema used for validation and pruning of the custom resource. If present,
     * this validation schema is used to validate all versions. Top-level and per-version schemas are
     * mutually exclusive.
     *
     * @return static
     */
    public function setValidation(CustomResourceValidation $validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * version is the API version of the defined custom resource. The custom resources are served under
     * `/apis/<group>/<version>/...`. Must match the name of the first item in the `versions` list if
     * `version` and `versions` are both specified. Optional if `versions` is specified. Deprecated: use
     * `versions` instead.
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * version is the API version of the defined custom resource. The custom resources are served under
     * `/apis/<group>/<version>/...`. Must match the name of the first item in the `versions` list if
     * `version` and `versions` are both specified. Optional if `versions` is specified. Deprecated: use
     * `versions` instead.
     *
     * @return static
     */
    public function setVersion(string $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * versions is the list of all API versions of the defined custom resource. Optional if `version` is
     * specified. The name of the first item in the `versions` list must match the `version` field if
     * `version` and `versions` are both specified. Version names are used to compute the order in which
     * served versions are listed in API discovery. If the version string is "kube-like", it will sort
     * above non "kube-like" version strings, which are ordered lexicographically. "Kube-like" versions
     * start with a "v", then are followed by a number (the major version), then optionally the string
     * "alpha" or "beta" and another number (the minor version). These are sorted first by GA > beta >
     * alpha (where GA is a version with no suffix such as beta or alpha), and then by comparing major
     * version, then minor version. An example sorted list of versions: v10, v2, v1, v11beta2, v10beta3,
     * v3beta1, v12alpha1, v11alpha2, foo1, foo10.
     *
     * @return iterable|CustomResourceDefinitionVersion[]
     */
    public function getVersions(): ?iterable
    {
        return $this->versions;
    }

    /**
     * versions is the list of all API versions of the defined custom resource. Optional if `version` is
     * specified. The name of the first item in the `versions` list must match the `version` field if
     * `version` and `versions` are both specified. Version names are used to compute the order in which
     * served versions are listed in API discovery. If the version string is "kube-like", it will sort
     * above non "kube-like" version strings, which are ordered lexicographically. "Kube-like" versions
     * start with a "v", then are followed by a number (the major version), then optionally the string
     * "alpha" or "beta" and another number (the minor version). These are sorted first by GA > beta >
     * alpha (where GA is a version with no suffix such as beta or alpha), and then by comparing major
     * version, then minor version. An example sorted list of versions: v10, v2, v1, v11beta2, v10beta3,
     * v3beta1, v12alpha1, v11alpha2, foo1, foo10.
     *
     * @return static
     */
    public function setVersions(iterable $versions)
    {
        $this->versions = $versions;

        return $this;
    }

    /**
     * @return static
     */
    public function addVersions(CustomResourceDefinitionVersion $version)
    {
        if (!$this->versions) {
            $this->versions = new Collection();
        }
        $this->versions[] = $version;

        return $this;
    }
}
