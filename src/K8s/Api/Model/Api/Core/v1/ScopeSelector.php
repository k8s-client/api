<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.11
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * A scope selector represents the AND of the selectors represented by the scoped-resource selector
 * requirements.
 */
class ScopeSelector
{
    /**
     * @Kubernetes\Attribute("matchExpressions",type="collection",model=ScopedResourceSelectorRequirement::class)
     * @var iterable|ScopedResourceSelectorRequirement[]|null
     */
    protected $matchExpressions = null;

    /**
     * @param iterable|ScopedResourceSelectorRequirement[] $matchExpressions
     */
    public function __construct(iterable $matchExpressions = [])
    {
        $this->matchExpressions = new Collection($matchExpressions);
    }

    /**
     * A list of scope selector requirements by scope of the resources.
     *
     * @return iterable|ScopedResourceSelectorRequirement[]
     */
    public function getMatchExpressions(): ?iterable
    {
        return $this->matchExpressions;
    }

    /**
     * A list of scope selector requirements by scope of the resources.
     *
     * @return static
     */
    public function setMatchExpressions(iterable $matchExpressions)
    {
        $this->matchExpressions = $matchExpressions;

        return $this;
    }

    /**
     * @return static
     */
    public function addMatchExpressions(ScopedResourceSelectorRequirement $matchExpression)
    {
        if (!$this->matchExpressions) {
            $this->matchExpressions = new Collection();
        }
        $this->matchExpressions[] = $matchExpression;

        return $this;
    }
}
