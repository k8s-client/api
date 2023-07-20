<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.12
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
 * NamespaceStatus is information about the current status of a Namespace.
 */
class NamespaceStatus
{
    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=NamespaceCondition::class)
     * @var iterable|NamespaceCondition[]|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("phase")
     * @var string|null
     */
    protected $phase = null;

    /**
     * @param iterable|NamespaceCondition[] $conditions
     * @param string|null $phase
     */
    public function __construct(iterable $conditions = [], ?string $phase = null)
    {
        $this->conditions = new Collection($conditions);
        $this->phase = $phase;
    }

    /**
     * Represents the latest available observations of a namespace's current state.
     *
     * @return iterable|NamespaceCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * Represents the latest available observations of a namespace's current state.
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
    public function addConditions(NamespaceCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * Phase is the current lifecycle phase of the namespace. More info:
     * https://kubernetes.io/docs/tasks/administer-cluster/namespaces/
     */
    public function getPhase(): ?string
    {
        return $this->phase;
    }

    /**
     * Phase is the current lifecycle phase of the namespace. More info:
     * https://kubernetes.io/docs/tasks/administer-cluster/namespaces/
     *
     *
     *
     * @return static
     */
    public function setPhase(string $phase)
    {
        $this->phase = $phase;

        return $this;
    }
}
