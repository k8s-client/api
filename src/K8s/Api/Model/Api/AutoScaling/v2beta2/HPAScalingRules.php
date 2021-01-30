<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.19.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AutoScaling\v2beta2;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * HPAScalingRules configures the scaling behavior for one direction. These Rules are applied after
 * calculating DesiredReplicas from metrics for the HPA. They can limit the scaling velocity by
 * specifying scaling policies. They can prevent flapping by specifying the stabilization window, so
 * that the number of replicas is not set instantly, instead, the safest value from the stabilization
 * window is chosen.
 */
class HPAScalingRules
{
    /**
     * @Kubernetes\Attribute("policies",type="collection",model=HPAScalingPolicy::class)
     * @var iterable|HPAScalingPolicy[]|null
     */
    protected $policies = null;

    /**
     * @Kubernetes\Attribute("selectPolicy")
     * @var string|null
     */
    protected $selectPolicy = null;

    /**
     * @Kubernetes\Attribute("stabilizationWindowSeconds")
     * @var int|null
     */
    protected $stabilizationWindowSeconds = null;

    /**
     * @param iterable|HPAScalingPolicy[] $policies
     * @param string|null $selectPolicy
     * @param int|null $stabilizationWindowSeconds
     */
    public function __construct(iterable $policies = [], ?string $selectPolicy = null, ?int $stabilizationWindowSeconds = null)
    {
        $this->policies = new Collection($policies);
        $this->selectPolicy = $selectPolicy;
        $this->stabilizationWindowSeconds = $stabilizationWindowSeconds;
    }

    /**
     * policies is a list of potential scaling polices which can be used during scaling. At least one
     * policy must be specified, otherwise the HPAScalingRules will be discarded as invalid
     *
     * @return iterable|HPAScalingPolicy[]
     */
    public function getPolicies(): ?iterable
    {
        return $this->policies;
    }

    /**
     * policies is a list of potential scaling polices which can be used during scaling. At least one
     * policy must be specified, otherwise the HPAScalingRules will be discarded as invalid
     *
     * @return static
     */
    public function setPolicies(iterable $policies)
    {
        $this->policies = $policies;

        return $this;
    }

    /**
     * @return static
     */
    public function addPolicies(HPAScalingPolicy $policie)
    {
        if (!$this->policies) {
            $this->policies = new Collection();
        }
        $this->policies[] = $policie;

        return $this;
    }

    /**
     * selectPolicy is used to specify which policy should be used. If not set, the default value
     * MaxPolicySelect is used.
     */
    public function getSelectPolicy(): ?string
    {
        return $this->selectPolicy;
    }

    /**
     * selectPolicy is used to specify which policy should be used. If not set, the default value
     * MaxPolicySelect is used.
     *
     * @return static
     */
    public function setSelectPolicy(string $selectPolicy)
    {
        $this->selectPolicy = $selectPolicy;

        return $this;
    }

    /**
     * StabilizationWindowSeconds is the number of seconds for which past recommendations should be
     * considered while scaling up or scaling down. StabilizationWindowSeconds must be greater than or
     * equal to zero and less than or equal to 3600 (one hour). If not set, use the default values: - For
     * scale up: 0 (i.e. no stabilization is done). - For scale down: 300 (i.e. the stabilization window is
     * 300 seconds long).
     */
    public function getStabilizationWindowSeconds(): ?int
    {
        return $this->stabilizationWindowSeconds;
    }

    /**
     * StabilizationWindowSeconds is the number of seconds for which past recommendations should be
     * considered while scaling up or scaling down. StabilizationWindowSeconds must be greater than or
     * equal to zero and less than or equal to 3600 (one hour). If not set, use the default values: - For
     * scale up: 0 (i.e. no stabilization is done). - For scale down: 300 (i.e. the stabilization window is
     * 300 seconds long).
     *
     * @return static
     */
    public function setStabilizationWindowSeconds(int $stabilizationWindowSeconds)
    {
        $this->stabilizationWindowSeconds = $stabilizationWindowSeconds;

        return $this;
    }
}