<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.18.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * ResourceQuotaSpec defines the desired hard limits to enforce for Quota.
 */
class ResourceQuotaSpec
{
    /**
     * @Kubernetes\Attribute("hard")
     * @var object[]|null
     */
    protected $hard = null;

    /**
     * @Kubernetes\Attribute("scopeSelector",type="model",model=ScopeSelector::class)
     * @var ScopeSelector|null
     */
    protected $scopeSelector = null;

    /**
     * @Kubernetes\Attribute("scopes")
     * @var string[]|null
     */
    protected $scopes = null;

    /**
     * @param object[]|null $hard
     * @param ScopeSelector|null $scopeSelector
     * @param string[]|null $scopes
     */
    public function __construct(?array $hard = null, ?ScopeSelector $scopeSelector = null, ?array $scopes = null)
    {
        $this->hard = $hard;
        $this->scopeSelector = $scopeSelector;
        $this->scopes = $scopes;
    }

    /**
     * hard is the set of desired hard limits for each named resource. More info:
     * https://kubernetes.io/docs/concepts/policy/resource-quotas/
     */
    public function getHard(): ?array
    {
        return $this->hard;
    }

    /**
     * hard is the set of desired hard limits for each named resource. More info:
     * https://kubernetes.io/docs/concepts/policy/resource-quotas/
     *
     * @return static
     */
    public function setHard(array $hard)
    {
        $this->hard = $hard;

        return $this;
    }

    /**
     * scopeSelector is also a collection of filters like scopes that must match each object tracked by a
     * quota but expressed using ScopeSelectorOperator in combination with possible values. For a resource
     * to match, both scopes AND scopeSelector (if specified in spec), must be matched.
     */
    public function getScopeSelector(): ?ScopeSelector
    {
        return $this->scopeSelector;
    }

    /**
     * scopeSelector is also a collection of filters like scopes that must match each object tracked by a
     * quota but expressed using ScopeSelectorOperator in combination with possible values. For a resource
     * to match, both scopes AND scopeSelector (if specified in spec), must be matched.
     *
     * @return static
     */
    public function setScopeSelector(ScopeSelector $scopeSelector)
    {
        $this->scopeSelector = $scopeSelector;

        return $this;
    }

    /**
     * A collection of filters that must match each object tracked by a quota. If not specified, the quota
     * matches all objects.
     */
    public function getScopes(): ?array
    {
        return $this->scopes;
    }

    /**
     * A collection of filters that must match each object tracked by a quota. If not specified, the quota
     * matches all objects.
     *
     * @return static
     */
    public function setScopes(array $scopes)
    {
        $this->scopes = $scopes;

        return $this;
    }
}
