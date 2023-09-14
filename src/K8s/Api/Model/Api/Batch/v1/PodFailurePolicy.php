<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.14
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Batch\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * PodFailurePolicy describes how failed pods influence the backoffLimit.
 */
class PodFailurePolicy
{
    /**
     * @Kubernetes\Attribute("rules",type="collection",model=PodFailurePolicyRule::class,isRequired=true)
     * @var iterable|PodFailurePolicyRule[]
     */
    protected $rules;

    /**
     * @param iterable|PodFailurePolicyRule[] $rules
     */
    public function __construct(iterable $rules)
    {
        $this->rules = new Collection($rules);
    }

    /**
     * A list of pod failure policy rules. The rules are evaluated in order. Once a rule matches a Pod
     * failure, the remaining of the rules are ignored. When no rule matches the Pod failure, the default
     * handling applies - the counter of pod failures is incremented and it is checked against the
     * backoffLimit. At most 20 elements are allowed.
     *
     * @return iterable|PodFailurePolicyRule[]
     */
    public function getRules(): iterable
    {
        return $this->rules;
    }

    /**
     * A list of pod failure policy rules. The rules are evaluated in order. Once a rule matches a Pod
     * failure, the remaining of the rules are ignored. When no rule matches the Pod failure, the default
     * handling applies - the counter of pod failures is incremented and it is checked against the
     * backoffLimit. At most 20 elements are allowed.
     *
     * @return static
     */
    public function setRules(iterable $rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * @return static
     */
    public function addRules(PodFailurePolicyRule $rule)
    {
        if (!$this->rules) {
            $this->rules = new Collection();
        }
        $this->rules[] = $rule;

        return $this;
    }
}
