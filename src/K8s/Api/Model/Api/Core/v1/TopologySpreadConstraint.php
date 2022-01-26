<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.3
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Core\Annotation as Kubernetes;

/**
 * TopologySpreadConstraint specifies how to spread matching pods among the given topology.
 */
class TopologySpreadConstraint
{
    /**
     * @Kubernetes\Attribute("labelSelector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $labelSelector = null;

    /**
     * @Kubernetes\Attribute("maxSkew",isRequired=true)
     * @var int
     */
    protected $maxSkew;

    /**
     * @Kubernetes\Attribute("topologyKey",isRequired=true)
     * @var string
     */
    protected $topologyKey;

    /**
     * @Kubernetes\Attribute("whenUnsatisfiable",isRequired=true)
     * @var string
     */
    protected $whenUnsatisfiable;

    /**
     * @param int $maxSkew
     * @param string $topologyKey
     * @param string $whenUnsatisfiable
     */
    public function __construct(int $maxSkew, string $topologyKey, string $whenUnsatisfiable)
    {
        $this->maxSkew = $maxSkew;
        $this->topologyKey = $topologyKey;
        $this->whenUnsatisfiable = $whenUnsatisfiable;
    }

    /**
     * LabelSelector is used to find matching pods. Pods that match this label selector are counted to
     * determine the number of pods in their corresponding topology domain.
     */
    public function getLabelSelector(): ?LabelSelector
    {
        return $this->labelSelector;
    }

    /**
     * LabelSelector is used to find matching pods. Pods that match this label selector are counted to
     * determine the number of pods in their corresponding topology domain.
     *
     * @return static
     */
    public function setLabelSelector(LabelSelector $labelSelector)
    {
        $this->labelSelector = $labelSelector;

        return $this;
    }

    /**
     * MaxSkew describes the degree to which pods may be unevenly distributed. When
     * `whenUnsatisfiable=DoNotSchedule`, it is the maximum permitted difference between the number of
     * matching pods in the target topology and the global minimum. For example, in a 3-zone cluster,
     * MaxSkew is set to 1, and pods with the same labelSelector spread as 1/1/0: | zone1 | zone2 | zone3 |
     * |   P   |   P   |       | - if MaxSkew is 1, incoming pod can only be scheduled to zone3 to become
     * 1/1/1; scheduling it onto zone1(zone2) would make the ActualSkew(2-0) on zone1(zone2) violate
     * MaxSkew(1). - if MaxSkew is 2, incoming pod can be scheduled onto any zone. When
     * `whenUnsatisfiable=ScheduleAnyway`, it is used to give higher precedence to topologies that satisfy
     * it. It's a required field. Default value is 1 and 0 is not allowed.
     */
    public function getMaxSkew(): int
    {
        return $this->maxSkew;
    }

    /**
     * MaxSkew describes the degree to which pods may be unevenly distributed. When
     * `whenUnsatisfiable=DoNotSchedule`, it is the maximum permitted difference between the number of
     * matching pods in the target topology and the global minimum. For example, in a 3-zone cluster,
     * MaxSkew is set to 1, and pods with the same labelSelector spread as 1/1/0: | zone1 | zone2 | zone3 |
     * |   P   |   P   |       | - if MaxSkew is 1, incoming pod can only be scheduled to zone3 to become
     * 1/1/1; scheduling it onto zone1(zone2) would make the ActualSkew(2-0) on zone1(zone2) violate
     * MaxSkew(1). - if MaxSkew is 2, incoming pod can be scheduled onto any zone. When
     * `whenUnsatisfiable=ScheduleAnyway`, it is used to give higher precedence to topologies that satisfy
     * it. It's a required field. Default value is 1 and 0 is not allowed.
     *
     * @return static
     */
    public function setMaxSkew(int $maxSkew)
    {
        $this->maxSkew = $maxSkew;

        return $this;
    }

    /**
     * TopologyKey is the key of node labels. Nodes that have a label with this key and identical values
     * are considered to be in the same topology. We consider each <key, value> as a "bucket", and try to
     * put balanced number of pods into each bucket. It's a required field.
     */
    public function getTopologyKey(): string
    {
        return $this->topologyKey;
    }

    /**
     * TopologyKey is the key of node labels. Nodes that have a label with this key and identical values
     * are considered to be in the same topology. We consider each <key, value> as a "bucket", and try to
     * put balanced number of pods into each bucket. It's a required field.
     *
     * @return static
     */
    public function setTopologyKey(string $topologyKey)
    {
        $this->topologyKey = $topologyKey;

        return $this;
    }

    /**
     * WhenUnsatisfiable indicates how to deal with a pod if it doesn't satisfy the spread constraint. -
     * DoNotSchedule (default) tells the scheduler not to schedule it. - ScheduleAnyway tells the scheduler
     * to schedule the pod in any location,
     *   but giving higher precedence to topologies that would help reduce the
     *   skew.
     * A constraint is considered "Unsatisfiable" for an incoming pod if and only if every possible node
     * assignment for that pod would violate "MaxSkew" on some topology. For example, in a 3-zone cluster,
     * MaxSkew is set to 1, and pods with the same labelSelector spread as 3/1/1: | zone1 | zone2 | zone3 |
     * | P P P |   P   |   P   | If WhenUnsatisfiable is set to DoNotSchedule, incoming pod can only be
     * scheduled to zone2(zone3) to become 3/2/1(3/1/2) as ActualSkew(2-1) on zone2(zone3) satisfies
     * MaxSkew(1). In other words, the cluster can still be imbalanced, but scheduler won't make it *more*
     * imbalanced. It's a required field.
     *
     * Possible enum values:
     *  - `"DoNotSchedule"` instructs the scheduler not to schedule the pod when constraints are not
     * satisfied.
     *  - `"ScheduleAnyway"` instructs the scheduler to schedule the pod even if constraints are not
     * satisfied.
     */
    public function getWhenUnsatisfiable(): string
    {
        return $this->whenUnsatisfiable;
    }

    /**
     * WhenUnsatisfiable indicates how to deal with a pod if it doesn't satisfy the spread constraint. -
     * DoNotSchedule (default) tells the scheduler not to schedule it. - ScheduleAnyway tells the scheduler
     * to schedule the pod in any location,
     *   but giving higher precedence to topologies that would help reduce the
     *   skew.
     * A constraint is considered "Unsatisfiable" for an incoming pod if and only if every possible node
     * assignment for that pod would violate "MaxSkew" on some topology. For example, in a 3-zone cluster,
     * MaxSkew is set to 1, and pods with the same labelSelector spread as 3/1/1: | zone1 | zone2 | zone3 |
     * | P P P |   P   |   P   | If WhenUnsatisfiable is set to DoNotSchedule, incoming pod can only be
     * scheduled to zone2(zone3) to become 3/2/1(3/1/2) as ActualSkew(2-1) on zone2(zone3) satisfies
     * MaxSkew(1). In other words, the cluster can still be imbalanced, but scheduler won't make it *more*
     * imbalanced. It's a required field.
     *
     * Possible enum values:
     *  - `"DoNotSchedule"` instructs the scheduler not to schedule the pod when constraints are not
     * satisfied.
     *  - `"ScheduleAnyway"` instructs the scheduler to schedule the pod even if constraints are not
     * satisfied.
     *
     * @return static
     */
    public function setWhenUnsatisfiable(string $whenUnsatisfiable)
    {
        $this->whenUnsatisfiable = $whenUnsatisfiable;

        return $this;
    }
}
