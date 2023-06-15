<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.11
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
 * PodFailurePolicyRule describes how a pod failure is handled when the requirements are met. One of
 * OnExitCodes and onPodConditions, but not both, can be used in each rule.
 */
class PodFailurePolicyRule
{
    /**
     * @Kubernetes\Attribute("action",isRequired=true)
     * @var string
     */
    protected $action;

    /**
     * @Kubernetes\Attribute("onExitCodes",type="model",model=PodFailurePolicyOnExitCodesRequirement::class)
     * @var PodFailurePolicyOnExitCodesRequirement|null
     */
    protected $onExitCodes = null;

    /**
     * @Kubernetes\Attribute("onPodConditions",type="collection",model=PodFailurePolicyOnPodConditionsPattern::class,isRequired=true)
     * @var iterable|PodFailurePolicyOnPodConditionsPattern[]
     */
    protected $onPodConditions;

    /**
     * @param string $action
     * @param iterable|PodFailurePolicyOnPodConditionsPattern[] $onPodConditions
     */
    public function __construct(string $action, iterable $onPodConditions)
    {
        $this->action = $action;
        $this->onPodConditions = new Collection($onPodConditions);
    }

    /**
     * Specifies the action taken on a pod failure when the requirements are satisfied. Possible values
     * are: - FailJob: indicates that the pod's job is marked as Failed and all
     *   running pods are terminated.
     * - Ignore: indicates that the counter towards the .backoffLimit is not
     *   incremented and a replacement pod is created.
     * - Count: indicates that the pod is handled in the default way - the
     *   counter towards the .backoffLimit is incremented.
     * Additional values are considered to be added in the future. Clients should react to an unknown
     * action by skipping the rule.
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * Specifies the action taken on a pod failure when the requirements are satisfied. Possible values
     * are: - FailJob: indicates that the pod's job is marked as Failed and all
     *   running pods are terminated.
     * - Ignore: indicates that the counter towards the .backoffLimit is not
     *   incremented and a replacement pod is created.
     * - Count: indicates that the pod is handled in the default way - the
     *   counter towards the .backoffLimit is incremented.
     * Additional values are considered to be added in the future. Clients should react to an unknown
     * action by skipping the rule.
     *
     *
     *
     * @return static
     */
    public function setAction(string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Represents the requirement on the container exit codes.
     */
    public function getOnExitCodes(): ?PodFailurePolicyOnExitCodesRequirement
    {
        return $this->onExitCodes;
    }

    /**
     * Represents the requirement on the container exit codes.
     *
     * @return static
     */
    public function setOnExitCodes(PodFailurePolicyOnExitCodesRequirement $onExitCodes)
    {
        $this->onExitCodes = $onExitCodes;

        return $this;
    }

    /**
     * Represents the requirement on the pod conditions. The requirement is represented as a list of pod
     * condition patterns. The requirement is satisfied if at least one pattern matches an actual pod
     * condition. At most 20 elements are allowed.
     *
     * @return iterable|PodFailurePolicyOnPodConditionsPattern[]
     */
    public function getOnPodConditions(): iterable
    {
        return $this->onPodConditions;
    }

    /**
     * Represents the requirement on the pod conditions. The requirement is represented as a list of pod
     * condition patterns. The requirement is satisfied if at least one pattern matches an actual pod
     * condition. At most 20 elements are allowed.
     *
     * @return static
     */
    public function setOnPodConditions(iterable $onPodConditions)
    {
        $this->onPodConditions = $onPodConditions;

        return $this;
    }

    /**
     * @return static
     */
    public function addOnPodConditions(PodFailurePolicyOnPodConditionsPattern $onPodCondition)
    {
        if (!$this->onPodConditions) {
            $this->onPodConditions = new Collection();
        }
        $this->onPodConditions[] = $onPodCondition;

        return $this;
    }
}
