<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.6
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Apps\v1;

use K8s\Api\Model\Api\Core\v1\PodSpec;
use K8s\Api\Model\Api\Core\v1\PodTemplateSpec;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Core\Annotation as Kubernetes;

/**
 * ReplicaSetSpec is the specification of a ReplicaSet.
 */
class ReplicaSetSpec
{
    /**
     * @Kubernetes\Attribute("minReadySeconds")
     * @var int|null
     */
    protected $minReadySeconds = null;

    /**
     * @Kubernetes\Attribute("replicas")
     * @var int|null
     */
    protected $replicas = null;

    /**
     * @Kubernetes\Attribute("selector",type="model",model=LabelSelector::class,isRequired=true)
     * @var LabelSelector
     */
    protected $selector;

    /**
     * @Kubernetes\Attribute("template",type="model",model=PodTemplateSpec::class)
     * @var PodTemplateSpec|null
     */
    protected $template = null;

    /**
     * @param LabelSelector $selector
     */
    public function __construct(LabelSelector $selector)
    {
        $this->selector = $selector;
    }

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public function getMetadata(): ?ObjectMeta
    {
        return $this->template->getMetadata();
    }

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @return static
     */
    public function setMetadata(ObjectMeta $metadata)
    {
        $this->template->setMetadata($metadata);

        return $this;
    }

    /**
     * Specification of the desired behavior of the pod. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     */
    public function getSpec(): ?PodSpec
    {
        return $this->template->getSpec();
    }

    /**
     * Specification of the desired behavior of the pod. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     *
     * @return static
     */
    public function setSpec(PodSpec $spec)
    {
        $this->template->setSpec($spec);

        return $this;
    }

    /**
     * Minimum number of seconds for which a newly created pod should be ready without any of its container
     * crashing, for it to be considered available. Defaults to 0 (pod will be considered available as soon
     * as it is ready)
     */
    public function getMinReadySeconds(): ?int
    {
        return $this->minReadySeconds;
    }

    /**
     * Minimum number of seconds for which a newly created pod should be ready without any of its container
     * crashing, for it to be considered available. Defaults to 0 (pod will be considered available as soon
     * as it is ready)
     *
     * @return static
     */
    public function setMinReadySeconds(int $minReadySeconds)
    {
        $this->minReadySeconds = $minReadySeconds;

        return $this;
    }

    /**
     * Replicas is the number of desired replicas. This is a pointer to distinguish between explicit zero
     * and unspecified. Defaults to 1. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller/#what-is-a-replicationcontroller
     */
    public function getReplicas(): ?int
    {
        return $this->replicas;
    }

    /**
     * Replicas is the number of desired replicas. This is a pointer to distinguish between explicit zero
     * and unspecified. Defaults to 1. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller/#what-is-a-replicationcontroller
     *
     * @return static
     */
    public function setReplicas(int $replicas)
    {
        $this->replicas = $replicas;

        return $this;
    }

    /**
     * Selector is a label query over pods that should match the replica count. Label keys and values that
     * must match in order to be controlled by this replica set. It must match the pod template's labels.
     * More info: https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     */
    public function getSelector(): LabelSelector
    {
        return $this->selector;
    }

    /**
     * Selector is a label query over pods that should match the replica count. Label keys and values that
     * must match in order to be controlled by this replica set. It must match the pod template's labels.
     * More info: https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     *
     * @return static
     */
    public function setSelector(LabelSelector $selector)
    {
        $this->selector = $selector;

        return $this;
    }

    /**
     * Template is the object that describes the pod that will be created if insufficient replicas are
     * detected. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#pod-template
     */
    public function getTemplate(): ?PodTemplateSpec
    {
        return $this->template;
    }

    /**
     * Template is the object that describes the pod that will be created if insufficient replicas are
     * detected. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#pod-template
     *
     * @return static
     */
    public function setTemplate(PodTemplateSpec $template)
    {
        $this->template = $template;

        return $this;
    }
}
