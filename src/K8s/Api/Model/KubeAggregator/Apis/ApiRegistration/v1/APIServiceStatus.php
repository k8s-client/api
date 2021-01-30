<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.12.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\KubeAggregator\Apis\ApiRegistration\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * APIServiceStatus contains derived information about an API server
 */
class APIServiceStatus
{
    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=APIServiceCondition::class)
     * @var iterable|APIServiceCondition[]|null
     */
    protected $conditions = null;

    /**
     * @param iterable|APIServiceCondition[] $conditions
     */
    public function __construct(iterable $conditions = [])
    {
        $this->conditions = new Collection($conditions);
    }

    /**
     * Current service state of apiService.
     *
     * @return iterable|APIServiceCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * Current service state of apiService.
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
    public function addConditions(APIServiceCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }
}
