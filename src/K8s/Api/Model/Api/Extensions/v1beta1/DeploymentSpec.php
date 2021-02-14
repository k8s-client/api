<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.12.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Extensions\v1beta1;

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
     * @Kubernetes\Attribute("rollbackTo",type="model",model=RollbackConfig::class)
     * @var RollbackConfig|null
     */
    protected $rollbackTo = null;

    /**
     * @Kubernetes\Attribute("selector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $selector = null;

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
     * @param PodTemplateSpec $template
     */
    public function __construct(PodTemplateSpec $template)
    {
        $this->template = $template;
    }

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     */
    public function getMetadata(): ?ObjectMeta
    {
        return $this->template->getMetadata();
    }

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
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
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     */
    public function getSpec(): ?PodSpec
    {
        return $this->template->getSpec();
    }

    /**
     * Specification of the desired behavior of the pod. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
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
     * Indicates that the deployment is paused and will not be processed by the deployment controller.
     */
    public function isPaused(): ?bool
    {
        return $this->paused;
    }

    /**
     * Indicates that the deployment is paused and will not be processed by the deployment controller.
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
     * not be estimated during the time a deployment is paused. This is set to the max value of int32 (i.e.
     * 2147483647) by default, which means "no deadline".
     */
    public function getProgressDeadlineSeconds(): ?int
    {
        return $this->progressDeadlineSeconds;
    }

    /**
     * The maximum time in seconds for a deployment to make progress before it is considered to be failed.
     * The deployment controller will continue to process failed deployments and a condition with a
     * ProgressDeadlineExceeded reason will be surfaced in the deployment status. Note that progress will
     * not be estimated during the time a deployment is paused. This is set to the max value of int32 (i.e.
     * 2147483647) by default, which means "no deadline".
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
     * explicit zero and not specified.
     */
    public function getRevisionHistoryLimit(): ?int
    {
        return $this->revisionHistoryLimit;
    }

    /**
     * The number of old ReplicaSets to retain to allow rollback. This is a pointer to distinguish between
     * explicit zero and not specified.
     *
     * @return static
     */
    public function setRevisionHistoryLimit(int $revisionHistoryLimit)
    {
        $this->revisionHistoryLimit = $revisionHistoryLimit;

        return $this;
    }

    /**
     * DEPRECATED. The config this deployment is rolling back to. Will be cleared after rollback is done.
     */
    public function getRollbackTo(): ?RollbackConfig
    {
        return $this->rollbackTo;
    }

    /**
     * DEPRECATED. The config this deployment is rolling back to. Will be cleared after rollback is done.
     *
     * @return static
     */
    public function setRollbackTo(RollbackConfig $rollbackTo)
    {
        $this->rollbackTo = $rollbackTo;

        return $this;
    }

    /**
     * Label selector for pods. Existing ReplicaSets whose pods are selected by this will be the ones
     * affected by this deployment.
     */
    public function getSelector(): ?LabelSelector
    {
        return $this->selector;
    }

    /**
     * Label selector for pods. Existing ReplicaSets whose pods are selected by this will be the ones
     * affected by this deployment.
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
