<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.6
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
 * DeploymentSpec is the specification of the desired behavior of the Deployment.
 */
class DeploymentSpec
{
    /**
     * @Kubernetes\Attribute("minReadySeconds")
     * @var int|null
     */
    protected $minReadySeconds = null;

    /**
     * @Kubernetes\Attribute("paused")
     * @var bool|null
     */
    protected $paused = null;

    /**
     * @Kubernetes\Attribute("progressDeadlineSeconds")
     * @var int|null
     */
    protected $progressDeadlineSeconds = null;

    /**
     * @Kubernetes\Attribute("replicas")
     * @var int|null
     */
    protected $replicas = null;

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
     * @Kubernetes\Attribute("strategy",type="model",model=DeploymentStrategy::class)
     * @var DeploymentStrategy|null
     */
    protected $strategy = null;

    /**
     * @Kubernetes\Attribute("template",type="model",model=PodTemplateSpec::class,isRequired=true)
     * @var PodTemplateSpec
     */
    protected $template;

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
     * Indicates that the deployment is paused.
     */
    public function isPaused(): ?bool
    {
        return $this->paused;
    }

    /**
     * Indicates that the deployment is paused.
     *
     * @return static
     */
    public function setIsPaused(bool $paused)
    {
        $this->paused = $paused;

        return $this;
    }

    /**
     * The maximum time in seconds for a deployment to make progress before it is considered to be failed.
     * The deployment controller will continue to process failed deployments and a condition with a
     * ProgressDeadlineExceeded reason will be surfaced in the deployment status. Note that progress will
     * not be estimated during the time a deployment is paused. Defaults to 600s.
     */
    public function getProgressDeadlineSeconds(): ?int
    {
        return $this->progressDeadlineSeconds;
    }

    /**
     * The maximum time in seconds for a deployment to make progress before it is considered to be failed.
     * The deployment controller will continue to process failed deployments and a condition with a
     * ProgressDeadlineExceeded reason will be surfaced in the deployment status. Note that progress will
     * not be estimated during the time a deployment is paused. Defaults to 600s.
     *
     * @return static
     */
    public function setProgressDeadlineSeconds(int $progressDeadlineSeconds)
    {
        $this->progressDeadlineSeconds = $progressDeadlineSeconds;

        return $this;
    }

    /**
     * Number of desired pods. This is a pointer to distinguish between explicit zero and not specified.
     * Defaults to 1.
     */
    public function getReplicas(): ?int
    {
        return $this->replicas;
    }

    /**
     * Number of desired pods. This is a pointer to distinguish between explicit zero and not specified.
     * Defaults to 1.
     *
     * @return static
     */
    public function setReplicas(int $replicas)
    {
        $this->replicas = $replicas;

        return $this;
    }

    /**
     * The number of old ReplicaSets to retain to allow rollback. This is a pointer to distinguish between
     * explicit zero and not specified. Defaults to 10.
     */
    public function getRevisionHistoryLimit(): ?int
    {
        return $this->revisionHistoryLimit;
    }

    /**
     * The number of old ReplicaSets to retain to allow rollback. This is a pointer to distinguish between
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
     * Label selector for pods. Existing ReplicaSets whose pods are selected by this will be the ones
     * affected by this deployment. It must match the pod template's labels.
     */
    public function getSelector(): LabelSelector
    {
        return $this->selector;
    }

    /**
     * Label selector for pods. Existing ReplicaSets whose pods are selected by this will be the ones
     * affected by this deployment. It must match the pod template's labels.
     *
     * @return static
     */
    public function setSelector(LabelSelector $selector)
    {
        $this->selector = $selector;

        return $this;
    }

    /**
     * The deployment strategy to use to replace existing pods with new ones.
     */
    public function getStrategy(): ?DeploymentStrategy
    {
        return $this->strategy;
    }

    /**
     * The deployment strategy to use to replace existing pods with new ones.
     *
     * @return static
     */
    public function setStrategy(DeploymentStrategy $strategy)
    {
        $this->strategy = $strategy;

        return $this;
    }

    /**
     * Template describes the pods that will be created.
     */
    public function getTemplate(): PodTemplateSpec
    {
        return $this->template;
    }

    /**
     * Template describes the pods that will be created.
     *
     * @return static
     */
    public function setTemplate(PodTemplateSpec $template)
    {
        $this->template = $template;

        return $this;
    }
}
