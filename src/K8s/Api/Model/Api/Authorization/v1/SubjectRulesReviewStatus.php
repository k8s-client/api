<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.16
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Authorization\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * SubjectRulesReviewStatus contains the result of a rules check. This check can be incomplete
 * depending on the set of authorizers the server is configured with and any errors experienced during
 * evaluation. Because authorization rules are additive, if a rule appears in a list it's safe to
 * assume the subject has that permission, even if that list is incomplete.
 */
class SubjectRulesReviewStatus
{
    /**
     * @Kubernetes\Attribute("evaluationError")
     * @var string|null
     */
    protected $evaluationError = null;

    /**
     * @Kubernetes\Attribute("incomplete",isRequired=true)
     * @var bool
     */
    protected $incomplete;

    /**
     * @Kubernetes\Attribute("nonResourceRules",type="collection",model=NonResourceRule::class,isRequired=true)
     * @var iterable|NonResourceRule[]
     */
    protected $nonResourceRules;

    /**
     * @Kubernetes\Attribute("resourceRules",type="collection",model=ResourceRule::class,isRequired=true)
     * @var iterable|ResourceRule[]
     */
    protected $resourceRules;

    /**
     * @param bool $incomplete
     * @param iterable|NonResourceRule[] $nonResourceRules
     * @param iterable|ResourceRule[] $resourceRules
     */
    public function __construct(bool $incomplete, iterable $nonResourceRules, iterable $resourceRules)
    {
        $this->incomplete = $incomplete;
        $this->nonResourceRules = new Collection($nonResourceRules);
        $this->resourceRules = new Collection($resourceRules);
    }

    /**
     * EvaluationError can appear in combination with Rules. It indicates an error occurred during rule
     * evaluation, such as an authorizer that doesn't support rule evaluation, and that ResourceRules
     * and/or NonResourceRules may be incomplete.
     */
    public function getEvaluationError(): ?string
    {
        return $this->evaluationError;
    }

    /**
     * EvaluationError can appear in combination with Rules. It indicates an error occurred during rule
     * evaluation, such as an authorizer that doesn't support rule evaluation, and that ResourceRules
     * and/or NonResourceRules may be incomplete.
     *
     * @return static
     */
    public function setEvaluationError(string $evaluationError)
    {
        $this->evaluationError = $evaluationError;

        return $this;
    }

    /**
     * Incomplete is true when the rules returned by this call are incomplete. This is most commonly
     * encountered when an authorizer, such as an external authorizer, doesn't support rules evaluation.
     */
    public function isIncomplete(): bool
    {
        return $this->incomplete;
    }

    /**
     * Incomplete is true when the rules returned by this call are incomplete. This is most commonly
     * encountered when an authorizer, such as an external authorizer, doesn't support rules evaluation.
     *
     * @return static
     */
    public function setIsIncomplete(bool $incomplete)
    {
        $this->incomplete = $incomplete;

        return $this;
    }

    /**
     * NonResourceRules is the list of actions the subject is allowed to perform on non-resources. The list
     * ordering isn't significant, may contain duplicates, and possibly be incomplete.
     *
     * @return iterable|NonResourceRule[]
     */
    public function getNonResourceRules(): iterable
    {
        return $this->nonResourceRules;
    }

    /**
     * NonResourceRules is the list of actions the subject is allowed to perform on non-resources. The list
     * ordering isn't significant, may contain duplicates, and possibly be incomplete.
     *
     * @return static
     */
    public function setNonResourceRules(iterable $nonResourceRules)
    {
        $this->nonResourceRules = $nonResourceRules;

        return $this;
    }

    /**
     * @return static
     */
    public function addNonResourceRules(NonResourceRule $nonResourceRule)
    {
        if (!$this->nonResourceRules) {
            $this->nonResourceRules = new Collection();
        }
        $this->nonResourceRules[] = $nonResourceRule;

        return $this;
    }

    /**
     * ResourceRules is the list of actions the subject is allowed to perform on resources. The list
     * ordering isn't significant, may contain duplicates, and possibly be incomplete.
     *
     * @return iterable|ResourceRule[]
     */
    public function getResourceRules(): iterable
    {
        return $this->resourceRules;
    }

    /**
     * ResourceRules is the list of actions the subject is allowed to perform on resources. The list
     * ordering isn't significant, may contain duplicates, and possibly be incomplete.
     *
     * @return static
     */
    public function setResourceRules(iterable $resourceRules)
    {
        $this->resourceRules = $resourceRules;

        return $this;
    }

    /**
     * @return static
     */
    public function addResourceRules(ResourceRule $resourceRule)
    {
        if (!$this->resourceRules) {
            $this->resourceRules = new Collection();
        }
        $this->resourceRules[] = $resourceRule;

        return $this;
    }
}
