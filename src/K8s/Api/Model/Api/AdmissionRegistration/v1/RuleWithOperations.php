<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.9
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AdmissionRegistration\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * RuleWithOperations is a tuple of Operations and Resources. It is recommended to make sure that all
 * the tuple expansions are valid.
 */
class RuleWithOperations
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
     * @Kubernetes\Attribute("operations")
     * @var string[]|null
     */
    protected $operations = null;

    /**
     * @Kubernetes\Attribute("resources")
     * @var string[]|null
     */
    protected $resources = null;

    /**
     * @Kubernetes\Attribute("scope")
     * @var string|null
     */
    protected $scope = null;

    /**
     * @param string[]|null $apiGroups
     * @param string[]|null $apiVersions
     * @param string[]|null $operations
     * @param string[]|null $resources
     * @param string|null $scope
     */
    public function __construct(
        ?array $apiGroups = null,
        ?array $apiVersions = null,
        ?array $operations = null,
        ?array $resources = null,
        ?string $scope = null
    ) {
        $this->apiGroups = $apiGroups;
        $this->apiVersions = $apiVersions;
        $this->operations = $operations;
        $this->resources = $resources;
        $this->scope = $scope;
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
     * Operations is the operations the admission hook cares about - CREATE, UPDATE, DELETE, CONNECT or *
     * for all of those operations and any future admission operations that are added. If '*' is present,
     * the length of the slice must be one. Required.
     */
    public function getOperations(): ?array
    {
        return $this->operations;
    }

    /**
     * Operations is the operations the admission hook cares about - CREATE, UPDATE, DELETE, CONNECT or *
     * for all of those operations and any future admission operations that are added. If '*' is present,
     * the length of the slice must be one. Required.
     *
     * @return static
     */
    public function setOperations(array $operations)
    {
        $this->operations = $operations;

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

    /**
     * scope specifies the scope of this rule. Valid values are "Cluster", "Namespaced", and "*" "Cluster"
     * means that only cluster-scoped resources will match this rule. Namespace API objects are
     * cluster-scoped. "Namespaced" means that only namespaced resources will match this rule. "*" means
     * that there are no scope restrictions. Subresources match the scope of their parent resource. Default
     * is "*".
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }

    /**
     * scope specifies the scope of this rule. Valid values are "Cluster", "Namespaced", and "*" "Cluster"
     * means that only cluster-scoped resources will match this rule. Namespace API objects are
     * cluster-scoped. "Namespaced" means that only namespaced resources will match this rule. "*" means
     * that there are no scope restrictions. Subresources match the scope of their parent resource. Default
     * is "*".
     *
     * @return static
     */
    public function setScope(string $scope)
    {
        $this->scope = $scope;

        return $this;
    }
}
