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

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Core\Annotation as Kubernetes;

/**
 * ReplicationControllerSpec is the specification of a replication controller.
 */
class ReplicationControllerSpec
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
     * @Kubernetes\Attribute("selector")
     * @var string[]|null
     */
    protected $selector = null;

    /**
     * @Kubernetes\Attribute("template",type="model",model=PodTemplateSpec::class)
     * @var PodTemplateSpec|null
     */
    protected $template = null;

    public function __construct()
    {
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
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#what-is-a-replicationcontroller
     */
    public function getReplicas(): ?int
    {
        return $this->replicas;
    }

    /**
     * Replicas is the number of desired replicas. This is a pointer to distinguish between explicit zero
     * and unspecified. Defaults to 1. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#what-is-a-replicationcontroller
     *
     * @return static
     */
    public function setReplicas(int $replicas)
    {
        $this->replicas = $replicas;

        return $this;
    }

    /**
     * Selector is a label query over pods that should match the Replicas count. If Selector is empty, it
     * is defaulted to the labels present on the Pod template. Label keys and values that must match in
     * order to be controlled by this replication controller, if empty defaulted to labels on Pod template.
     * More info: https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     */
    public function getSelector(): ?array
    {
        return $this->selector;
    }

    /**
     * Selector is a label query over pods that should match the Replicas count. If Selector is empty, it
     * is defaulted to the labels present on the Pod template. Label keys and values that must match in
     * order to be controlled by this replication controller, if empty defaulted to labels on Pod template.
     * More info: https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     *
     * @return static
     */
    public function setSelector(array $selector)
    {
        $this->selector = $selector;

        return $this;
    }

    /**
     * Template is the object that describes the pod that will be created if insufficient replicas are
     * detected. This takes precedence over a TemplateRef. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#pod-template
     */
    public function getTemplate(): ?PodTemplateSpec
    {
        return $this->template;
    }

    /**
     * Template is the object that describes the pod that will be created if insufficient replicas are
     * detected. This takes precedence over a TemplateRef. More info:
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
