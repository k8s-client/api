<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.14.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AutoScaling\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * ScaleStatus represents the current status of a scale subresource.
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
     * @var string|null
     */
    protected $selector = null;

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
     * label query over pods that should match the replicas count. This is same as the label selector but
     * in the string format to avoid introspection by clients. The string will be in the same format as the
     * query-param syntax. More info about label selectors:
     * http://kubernetes.io/docs/user-guide/labels#label-selectors
     */
    public function getSelector(): ?string
    {
        return $this->selector;
    }

    /**
     * label query over pods that should match the replicas count. This is same as the label selector but
     * in the string format to avoid introspection by clients. The string will be in the same format as the
     * query-param syntax. More info about label selectors:
     * http://kubernetes.io/docs/user-guide/labels#label-selectors
     *
     * @return static
     */
    public function setSelector(string $selector)
    {
        $this->selector = $selector;

        return $this;
    }
}
