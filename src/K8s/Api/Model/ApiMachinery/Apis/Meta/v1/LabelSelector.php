<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.8
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiMachinery\Apis\Meta\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * A label selector is a label query over a set of resources. The result of matchLabels and
 * matchExpressions are ANDed. An empty label selector matches all objects. A null label selector
 * matches no objects.
 */
class LabelSelector
{
    /**
     * @Kubernetes\Attribute("matchExpressions",type="collection",model=LabelSelectorRequirement::class)
     * @var iterable|LabelSelectorRequirement[]|null
     */
    protected $matchExpressions = null;

    /**
     * @Kubernetes\Attribute("matchLabels")
     * @var string[]|null
     */
    protected $matchLabels = null;

    /**
     * @param iterable|LabelSelectorRequirement[] $matchExpressions
     * @param string[]|null $matchLabels
     */
    public function __construct(iterable $matchExpressions = [], ?array $matchLabels = null)
    {
        $this->matchExpressions = new Collection($matchExpressions);
        $this->matchLabels = $matchLabels;
    }

    /**
     * matchExpressions is a list of label selector requirements. The requirements are ANDed.
     *
     * @return iterable|LabelSelectorRequirement[]
     */
    public function getMatchExpressions(): ?iterable
    {
        return $this->matchExpressions;
    }

    /**
     * matchExpressions is a list of label selector requirements. The requirements are ANDed.
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
    public function addMatchExpressions(LabelSelectorRequirement $matchExpression)
    {
        if (!$this->matchExpressions) {
            $this->matchExpressions = new Collection();
        }
        $this->matchExpressions[] = $matchExpression;

        return $this;
    }

    /**
     * matchLabels is a map of {key,value} pairs. A single {key,value} in the matchLabels map is equivalent
     * to an element of matchExpressions, whose key field is "key", the operator is "In", and the values
     * array contains only "value". The requirements are ANDed.
     */
    public function getMatchLabels(): ?array
    {
        return $this->matchLabels;
    }

    /**
     * matchLabels is a map of {key,value} pairs. A single {key,value} in the matchLabels map is equivalent
     * to an element of matchExpressions, whose key field is "key", the operator is "In", and the values
     * array contains only "value". The requirements are ANDed.
     *
     * @return static
     */
    public function setMatchLabels(array $matchLabels)
    {
        $this->matchLabels = $matchLabels;

        return $this;
    }
}
