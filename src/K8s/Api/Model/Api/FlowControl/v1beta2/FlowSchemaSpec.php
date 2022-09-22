<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.2
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\FlowControl\v1beta2;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * FlowSchemaSpec describes how the FlowSchema's specification looks like.
 */
class FlowSchemaSpec
{
    /**
     * @Kubernetes\Attribute("distinguisherMethod",type="model",model=FlowDistinguisherMethod::class)
     * @var FlowDistinguisherMethod|null
     */
    protected $distinguisherMethod = null;

    /**
     * @Kubernetes\Attribute("matchingPrecedence")
     * @var int|null
     */
    protected $matchingPrecedence = null;

    /**
     * @Kubernetes\Attribute("priorityLevelConfiguration",type="model",model=PriorityLevelConfigurationReference::class,isRequired=true)
     * @var PriorityLevelConfigurationReference
     */
    protected $priorityLevelConfiguration;

    /**
     * @Kubernetes\Attribute("rules",type="collection",model=PolicyRulesWithSubjects::class)
     * @var iterable|PolicyRulesWithSubjects[]|null
     */
    protected $rules = null;

    /**
     * @param PriorityLevelConfigurationReference $priorityLevelConfiguration
     */
    public function __construct(PriorityLevelConfigurationReference $priorityLevelConfiguration)
    {
        $this->priorityLevelConfiguration = $priorityLevelConfiguration;
    }

    /**
     * `distinguisherMethod` defines how to compute the flow distinguisher for requests that match this
     * schema. `nil` specifies that the distinguisher is disabled and thus will always be the empty string.
     */
    public function getDistinguisherMethod(): ?FlowDistinguisherMethod
    {
        return $this->distinguisherMethod;
    }

    /**
     * `distinguisherMethod` defines how to compute the flow distinguisher for requests that match this
     * schema. `nil` specifies that the distinguisher is disabled and thus will always be the empty string.
     *
     * @return static
     */
    public function setDistinguisherMethod(FlowDistinguisherMethod $distinguisherMethod)
    {
        $this->distinguisherMethod = $distinguisherMethod;

        return $this;
    }

    /**
     * `matchingPrecedence` is used to choose among the FlowSchemas that match a given request. The chosen
     * FlowSchema is among those with the numerically lowest (which we take to be logically highest)
     * MatchingPrecedence.  Each MatchingPrecedence value must be ranged in [1,10000]. Note that if the
     * precedence is not specified, it will be set to 1000 as default.
     */
    public function getMatchingPrecedence(): ?int
    {
        return $this->matchingPrecedence;
    }

    /**
     * `matchingPrecedence` is used to choose among the FlowSchemas that match a given request. The chosen
     * FlowSchema is among those with the numerically lowest (which we take to be logically highest)
     * MatchingPrecedence.  Each MatchingPrecedence value must be ranged in [1,10000]. Note that if the
     * precedence is not specified, it will be set to 1000 as default.
     *
     * @return static
     */
    public function setMatchingPrecedence(int $matchingPrecedence)
    {
        $this->matchingPrecedence = $matchingPrecedence;

        return $this;
    }

    /**
     * `priorityLevelConfiguration` should reference a PriorityLevelConfiguration in the cluster. If the
     * reference cannot be resolved, the FlowSchema will be ignored and marked as invalid in its status.
     * Required.
     */
    public function getPriorityLevelConfiguration(): PriorityLevelConfigurationReference
    {
        return $this->priorityLevelConfiguration;
    }

    /**
     * `priorityLevelConfiguration` should reference a PriorityLevelConfiguration in the cluster. If the
     * reference cannot be resolved, the FlowSchema will be ignored and marked as invalid in its status.
     * Required.
     *
     * @return static
     */
    public function setPriorityLevelConfiguration(PriorityLevelConfigurationReference $priorityLevelConfiguration)
    {
        $this->priorityLevelConfiguration = $priorityLevelConfiguration;

        return $this;
    }

    /**
     * `rules` describes which requests will match this flow schema. This FlowSchema matches a request if
     * and only if at least one member of rules matches the request. if it is an empty slice, there will be
     * no requests matching the FlowSchema.
     *
     * @return iterable|PolicyRulesWithSubjects[]
     */
    public function getRules(): ?iterable
    {
        return $this->rules;
    }

    /**
     * `rules` describes which requests will match this flow schema. This FlowSchema matches a request if
     * and only if at least one member of rules matches the request. if it is an empty slice, there will be
     * no requests matching the FlowSchema.
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
    public function addRules(PolicyRulesWithSubjects $rule)
    {
        if (!$this->rules) {
            $this->rules = new Collection();
        }
        $this->rules[] = $rule;

        return $this;
    }
}
