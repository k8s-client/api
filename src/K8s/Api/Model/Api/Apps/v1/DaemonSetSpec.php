<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.1
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
 * DaemonSetSpec is the specification of a daemon set.
 */
class DaemonSetSpec
{
    /**
     * @Kubernetes\Attribute("minReadySeconds")
     * @var int|null
     */
    protected $minReadySeconds = null;

    /**
     * @Kubernetes\Attribute("revisionHistoryLimit")
     * @var int|null
     */
    protected $revisionHistoryLimit = null;

    /**
     * @Kubernetes\Attribute("selector",type="model",model=LabelSelector::class,isRequired=true)
     * @var LabelSelector
     */
    protected $selector;

    /**
     * @Kubernetes\Attribute("template",type="model",model=PodTemplateSpec::class,isRequired=true)
     * @var PodTemplateSpec
     */
    protected $template;

    /**
     * @Kubernetes\Attribute("updateStrategy",type="model",model=DaemonSetUpdateStrategy::class)
     * @var DaemonSetUpdateStrategy|null
     */
    protected $updateStrategy = null;

    /**
     * @param LabelSelector $selector
     * @param PodTemplateSpec $template
     */
    public function __construct(LabelSelector $selector, PodTemplateSpec $template)
    {
        $this->selector = $selector;
        $this->template = $template;
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
     * The minimum number of seconds for which a newly created DaemonSet pod should be ready without any of
     * its container crashing, for it to be considered available. Defaults to 0 (pod will be considered
     * available as soon as it is ready).
     */
    public function getMinReadySeconds(): ?int
    {
        return $this->minReadySeconds;
    }

    /**
     * The minimum number of seconds for which a newly created DaemonSet pod should be ready without any of
     * its container crashing, for it to be considered available. Defaults to 0 (pod will be considered
     * available as soon as it is ready).
     *
     * @return static
     */
    public function setMinReadySeconds(int $minReadySeconds)
    {
        $this->minReadySeconds = $minReadySeconds;

        return $this;
    }

    /**
     * The number of old history to retain to allow rollback. This is a pointer to distinguish between
     * explicit zero and not specified. Defaults to 10.
     */
    public function getRevisionHistoryLimit(): ?int
    {
        return $this->revisionHistoryLimit;
    }

    /**
     * The number of old history to retain to allow rollback. This is a pointer to distinguish between
     * explicit zero and not specified. Defaults to 10.
     *
     * @return static
     */
    public function setRevisionHistoryLimit(int $revisionHistoryLimit)
    {
        $this->revisionHistoryLimit = $revisionHistoryLimit;

        return $this;
    }

    /**
     * A label query over pods that are managed by the daemon set. Must match in order to be controlled. It
     * must match the pod template's labels. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     */
    public function getSelector(): LabelSelector
    {
        return $this->selector;
    }

    /**
     * A label query over pods that are managed by the daemon set. Must match in order to be controlled. It
     * must match the pod template's labels. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     *
     * @return static
     */
    public function setSelector(LabelSelector $selector)
    {
        $this->selector = $selector;

        return $this;
    }

    /**
     * An object that describes the pod that will be created. The DaemonSet will create exactly one copy of
     * this pod on every node that matches the template's node selector (or on every node if no node
     * selector is specified). More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#pod-template
     */
    public function getTemplate(): PodTemplateSpec
    {
        return $this->template;
    }

    /**
     * An object that describes the pod that will be created. The DaemonSet will create exactly one copy of
     * this pod on every node that matches the template's node selector (or on every node if no node
     * selector is specified). More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#pod-template
     *
     * @return static
     */
    public function setTemplate(PodTemplateSpec $template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * An update strategy to replace existing DaemonSet pods with new pods.
     */
    public function getUpdateStrategy(): ?DaemonSetUpdateStrategy
    {
        return $this->updateStrategy;
    }

    /**
     * An update strategy to replace existing DaemonSet pods with new pods.
     *
     * @return static
     */
    public function setUpdateStrategy(DaemonSetUpdateStrategy $updateStrategy)
    {
        $this->updateStrategy = $updateStrategy;

        return $this;
    }
}
