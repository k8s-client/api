<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.8
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Networking\v1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Condition;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * NetworkPolicyStatus describe the current state of the NetworkPolicy.
 */
class NetworkPolicyStatus
{
    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=Condition::class)
     * @var iterable|Condition[]|null
     */
    protected $conditions = null;

    /**
     * @param iterable|Condition[] $conditions
     */
    public function __construct(iterable $conditions = [])
    {
        $this->conditions = new Collection($conditions);
    }

    /**
     * Conditions holds an array of metav1.Condition that describe the state of the NetworkPolicy. Current
     * service state
     *
     * @return iterable|Condition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * Conditions holds an array of metav1.Condition that describe the state of the NetworkPolicy. Current
     * service state
     *
     * @return static
     */
    public function setConditions(iterable $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * @return static
     */
    public function addConditions(Condition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }
}
