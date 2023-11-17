<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.16
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * CustomResourceDefinitionSpec describes how a user wants their resource to appear
 */
class CustomResourceDefinitionSpec
{
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
     * @Kubernetes\Attribute("versions",type="collection",model=CustomResourceDefinitionVersion::class,isRequired=true)
     * @var iterable|CustomResourceDefinitionVersion[]
     */
    protected $versions;

    /**
     * @param string $group
     * @param CustomResourceDefinitionNames $names
     * @param string $scope
     * @param iterable|CustomResourceDefinitionVersion[] $versions
     */
    public function __construct(string $group, CustomResourceDefinitionNames $names, string $scope, iterable $versions)
    {
        $this->group = $group;
        $this->names = $names;
        $this->scope = $scope;
        $this->versions = new Collection($versions);
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
     * metadata are always preserved. This field is deprecated in favor of setting
     * `x-preserve-unknown-fields` to true in `spec.versions[*].schema.openAPIV3Schema`. See
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
     * metadata are always preserved. This field is deprecated in favor of setting
     * `x-preserve-unknown-fields` to true in `spec.versions[*].schema.openAPIV3Schema`. See
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
     * are `Cluster` and `Namespaced`.
     */
    public function getScope(): string
    {
        return $this->scope;
    }

    /**
     * scope indicates whether the defined custom resource is cluster- or namespace-scoped. Allowed values
     * are `Cluster` and `Namespaced`.
     *
     * @return static
     */
    public function setScope(string $scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * versions is the list of all API versions of the defined custom resource. Version names are used to
     * compute the order in which served versions are listed in API discovery. If the version string is
     * "kube-like", it will sort above non "kube-like" version strings, which are ordered
     * lexicographically. "Kube-like" versions start with a "v", then are followed by a number (the major
     * version), then optionally the string "alpha" or "beta" and another number (the minor version). These
     * are sorted first by GA > beta > alpha (where GA is a version with no suffix such as beta or alpha),
     * and then by comparing major version, then minor version. An example sorted list of versions: v10,
     * v2, v1, v11beta2, v10beta3, v3beta1, v12alpha1, v11alpha2, foo1, foo10.
     *
     * @return iterable|CustomResourceDefinitionVersion[]
     */
    public function getVersions(): iterable
    {
        return $this->versions;
    }

    /**
     * versions is the list of all API versions of the defined custom resource. Version names are used to
     * compute the order in which served versions are listed in API discovery. If the version string is
     * "kube-like", it will sort above non "kube-like" version strings, which are ordered
     * lexicographically. "Kube-like" versions start with a "v", then are followed by a number (the major
     * version), then optionally the string "alpha" or "beta" and another number (the minor version). These
     * are sorted first by GA > beta > alpha (where GA is a version with no suffix such as beta or alpha),
     * and then by comparing major version, then minor version. An example sorted list of versions: v10,
     * v2, v1, v11beta2, v10beta3, v3beta1, v12alpha1, v11alpha2, foo1, foo10.
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
