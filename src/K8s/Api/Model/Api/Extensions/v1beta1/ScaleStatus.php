<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Extensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * represents the current status of a scale subresource.
 */
class ScaleStatus
{
    /**
     * @Kubernetes\Attribute("replicas",isRequired=true)
     * @var int
     */
    protected $replicas;

    /**
     * @Kubernetes\Attribute("selector")
     * @var string[]|null
     */
    protected $selector = null;

    /**
     * @Kubernetes\Attribute("targetSelector")
     * @var string|null
     */
    protected $targetSelector = null;

    /**
     * @param int $replicas
     */
    public function __construct(int $replicas)
    {
        $this->replicas = $replicas;
    }

    /**
     * actual number of observed instances of the scaled object.
     */
    public function getReplicas(): int
    {
        return $this->replicas;
    }

    /**
     * actual number of observed instances of the scaled object.
     *
     * @return static
     */
    public function setReplicas(int $replicas)
    {
        $this->replicas = $replicas;

        return $this;
    }

    /**
     * label query over pods that should match the replicas count. More info:
     * http://kubernetes.io/docs/user-guide/labels#label-selectors
     */
    public function getSelector(): ?array
    {
        return $this->selector;
    }

    /**
     * label query over pods that should match the replicas count. More info:
     * http://kubernetes.io/docs/user-guide/labels#label-selectors
     *
     * @return static
     */
    public function setSelector(array $selector)
    {
        $this->selector = $selector;

        return $this;
    }

    /**
     * label selector for pods that should match the replicas count. This is a serializated version of both
     * map-based and more expressive set-based selectors. This is done to avoid introspection in the
     * clients. The string will be in the same format as the query-param syntax. If the target type only
     * supports map-based selectors, both this field and map-based selector field are populated. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     */
    public function getTargetSelector(): ?string
    {
        return $this->targetSelector;
    }

    /**
     * label selector for pods that should match the replicas count. This is a serializated version of both
     * map-based and more expressive set-based selectors. This is done to avoid introspection in the
     * clients. The string will be in the same format as the query-param syntax. If the target type only
     * supports map-based selectors, both this field and map-based selector field are populated. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     *
     * @return static
     */
    public function setTargetSelector(string $targetSelector)
    {
        $this->targetSelector = $targetSelector;

        return $this;
    }
}
