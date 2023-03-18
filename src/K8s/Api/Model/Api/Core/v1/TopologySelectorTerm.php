<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.12
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
 * A topology selector term represents the result of label queries. A null or empty topology selector
 * term matches no objects. The requirements of them are ANDed. It provides a subset of functionality
 * as NodeSelectorTerm. This is an alpha feature and may change in the future.
 */
class TopologySelectorTerm
{
    /**
     * @Kubernetes\Attribute("matchLabelExpressions",type="collection",model=TopologySelectorLabelRequirement::class)
     * @var iterable|TopologySelectorLabelRequirement[]|null
     */
    protected $matchLabelExpressions = null;

    /**
     * @param iterable|TopologySelectorLabelRequirement[] $matchLabelExpressions
     */
    public function __construct(iterable $matchLabelExpressions = [])
    {
        $this->matchLabelExpressions = new Collection($matchLabelExpressions);
    }

    /**
     * A list of topology selector requirements by labels.
     *
     * @return iterable|TopologySelectorLabelRequirement[]
     */
    public function getMatchLabelExpressions(): ?iterable
    {
        return $this->matchLabelExpressions;
    }

    /**
     * A list of topology selector requirements by labels.
     *
     * @return static
     */
    public function setMatchLabelExpressions(iterable $matchLabelExpressions)
    {
        $this->matchLabelExpressions = $matchLabelExpressions;

        return $this;
    }

    /**
     * @return static
     */
    public function addMatchLabelExpressions(TopologySelectorLabelRequirement $matchLabelExpression)
    {
        if (!$this->matchLabelExpressions) {
            $this->matchLabelExpressions = new Collection();
        }
        $this->matchLabelExpressions[] = $matchLabelExpression;

        return $this;
    }
}
