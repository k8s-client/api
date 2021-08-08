<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.9
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\FlowControl\v1beta1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * FlowSchemaStatus represents the current state of a FlowSchema.
 */
class FlowSchemaStatus
{
    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=FlowSchemaCondition::class)
     * @var iterable|FlowSchemaCondition[]|null
     */
    protected $conditions = null;

    /**
     * @param iterable|FlowSchemaCondition[] $conditions
     */
    public function __construct(iterable $conditions = [])
    {
        $this->conditions = new Collection($conditions);
    }

    /**
     * `conditions` is a list of the current states of FlowSchema.
     *
     * @return iterable|FlowSchemaCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * `conditions` is a list of the current states of FlowSchema.
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
    public function addConditions(FlowSchemaCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }
}