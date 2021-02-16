<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.12.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Rbac\v1beta1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * AggregationRule describes how to locate ClusterRoles to aggregate into the ClusterRole
 */
class AggregationRule
{
    /**
     * @Kubernetes\Attribute("clusterRoleSelectors",type="collection",model=LabelSelector::class)
     * @var iterable|LabelSelector[]|null
     */
    protected $clusterRoleSelectors = null;

    /**
     * @param iterable|LabelSelector[] $clusterRoleSelectors
     */
    public function __construct(iterable $clusterRoleSelectors = [])
    {
        $this->clusterRoleSelectors = new Collection($clusterRoleSelectors);
    }

    /**
     * ClusterRoleSelectors holds a list of selectors which will be used to find ClusterRoles and create
     * the rules. If any of the selectors match, then the ClusterRole's permissions will be added
     *
     * @return iterable|LabelSelector[]
     */
    public function getClusterRoleSelectors(): ?iterable
    {
        return $this->clusterRoleSelectors;
    }

    /**
     * ClusterRoleSelectors holds a list of selectors which will be used to find ClusterRoles and create
     * the rules. If any of the selectors match, then the ClusterRole's permissions will be added
     *
     * @return static
     */
    public function setClusterRoleSelectors(iterable $clusterRoleSelectors)
    {
        $this->clusterRoleSelectors = $clusterRoleSelectors;

        return $this;
    }

    /**
     * @return static
     */
    public function addClusterRoleSelectors(LabelSelector $clusterRoleSelector)
    {
        if (!$this->clusterRoleSelectors) {
            $this->clusterRoleSelectors = new Collection();
        }
        $this->clusterRoleSelectors[] = $clusterRoleSelector;

        return $this;
    }
}
