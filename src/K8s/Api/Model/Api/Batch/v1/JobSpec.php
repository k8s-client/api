<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.5
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Batch\v1;

use K8s\Api\Model\Api\Core\v1\PodSpec;
use K8s\Api\Model\Api\Core\v1\PodTemplateSpec;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Core\Annotation as Kubernetes;

/**
 * JobSpec describes how the job execution will look like.
 */
class JobSpec
{
    /**
     * @Kubernetes\Attribute("activeDeadlineSeconds")
     * @var int|null
     */
    protected $activeDeadlineSeconds = null;

    /**
     * @Kubernetes\Attribute("backoffLimit")
     * @var int|null
     */
    protected $backoffLimit = null;

    /**
     * @Kubernetes\Attribute("completionMode")
     * @var string|null
     */
    protected $completionMode = null;

    /**
     * @Kubernetes\Attribute("completions")
     * @var int|null
     */
    protected $completions = null;

    /**
     * @Kubernetes\Attribute("manualSelector")
     * @var bool|null
     */
    protected $manualSelector = null;

    /**
     * @Kubernetes\Attribute("parallelism")
     * @var int|null
     */
    protected $parallelism = null;

    /**
     * @Kubernetes\Attribute("podFailurePolicy",type="model",model=PodFailurePolicy::class)
     * @var PodFailurePolicy|null
     */
    protected $podFailurePolicy = null;

    /**
     * @Kubernetes\Attribute("selector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $selector = null;

    /**
     * @Kubernetes\Attribute("suspend")
     * @var bool|null
     */
    protected $suspend = null;

    /**
     * @Kubernetes\Attribute("template",type="model",model=PodTemplateSpec::class,isRequired=true)
     * @var PodTemplateSpec
     */
    protected $template;

    /**
     * @Kubernetes\Attribute("ttlSecondsAfterFinished")
     * @var int|null
     */
    protected $ttlSecondsAfterFinished = null;

    /**
     * @param PodTemplateSpec $template
     */
    public function __construct(PodTemplateSpec $template)
    {
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
     * Specifies the duration in seconds relative to the startTime that the job may be continuously active
     * before the system tries to terminate it; value must be positive integer. If a Job is suspended (at
     * creation or through an update), this timer will effectively be stopped and reset when the Job is
     * resumed again.
     */
    public function getActiveDeadlineSeconds(): ?int
    {
        return $this->activeDeadlineSeconds;
    }

    /**
     * Specifies the duration in seconds relative to the startTime that the job may be continuously active
     * before the system tries to terminate it; value must be positive integer. If a Job is suspended (at
     * creation or through an update), this timer will effectively be stopped and reset when the Job is
     * resumed again.
     *
     * @return static
     */
    public function setActiveDeadlineSeconds(int $activeDeadlineSeconds)
    {
        $this->activeDeadlineSeconds = $activeDeadlineSeconds;

        return $this;
    }

    /**
     * Specifies the number of retries before marking this job failed. Defaults to 6
     */
    public function getBackoffLimit(): ?int
    {
        return $this->backoffLimit;
    }

    /**
     * Specifies the number of retries before marking this job failed. Defaults to 6
     *
     * @return static
     */
    public function setBackoffLimit(int $backoffLimit)
    {
        $this->backoffLimit = $backoffLimit;

        return $this;
    }

    /**
     * CompletionMode specifies how Pod completions are tracked. It can be `NonIndexed` (default) or
     * `Indexed`.
     *
     * `NonIndexed` means that the Job is considered complete when there have been .spec.completions
     * successfully completed Pods. Each Pod completion is homologous to each other.
     *
     * `Indexed` means that the Pods of a Job get an associated completion index from 0 to
     * (.spec.completions - 1), available in the annotation batch.kubernetes.io/job-completion-index. The
     * Job is considered complete when there is one successfully completed Pod for each index. When value
     * is `Indexed`, .spec.completions must be specified and `.spec.parallelism` must be less than or equal
     * to 10^5. In addition, The Pod name takes the form `$(job-name)-$(index)-$(random-string)`, the Pod
     * hostname takes the form `$(job-name)-$(index)`.
     *
     * More completion modes can be added in the future. If the Job controller observes a mode that it
     * doesn't recognize, which is possible during upgrades due to version skew, the controller skips
     * updates for the Job.
     */
    public function getCompletionMode(): ?string
    {
        return $this->completionMode;
    }

    /**
     * CompletionMode specifies how Pod completions are tracked. It can be `NonIndexed` (default) or
     * `Indexed`.
     *
     * `NonIndexed` means that the Job is considered complete when there have been .spec.completions
     * successfully completed Pods. Each Pod completion is homologous to each other.
     *
     * `Indexed` means that the Pods of a Job get an associated completion index from 0 to
     * (.spec.completions - 1), available in the annotation batch.kubernetes.io/job-completion-index. The
     * Job is considered complete when there is one successfully completed Pod for each index. When value
     * is `Indexed`, .spec.completions must be specified and `.spec.parallelism` must be less than or equal
     * to 10^5. In addition, The Pod name takes the form `$(job-name)-$(index)-$(random-string)`, the Pod
     * hostname takes the form `$(job-name)-$(index)`.
     *
     * More completion modes can be added in the future. If the Job controller observes a mode that it
     * doesn't recognize, which is possible during upgrades due to version skew, the controller skips
     * updates for the Job.
     *
     * @return static
     */
    public function setCompletionMode(string $completionMode)
    {
        $this->completionMode = $completionMode;

        return $this;
    }

    /**
     * Specifies the desired number of successfully finished pods the job should be run with.  Setting to
     * nil means that the success of any pod signals the success of all pods, and allows parallelism to
     * have any positive value.  Setting to 1 means that parallelism is limited to 1 and the success of
     * that pod signals the success of the job. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     */
    public function getCompletions(): ?int
    {
        return $this->completions;
    }

    /**
     * Specifies the desired number of successfully finished pods the job should be run with.  Setting to
     * nil means that the success of any pod signals the success of all pods, and allows parallelism to
     * have any positive value.  Setting to 1 means that parallelism is limited to 1 and the success of
     * that pod signals the success of the job. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * @return static
     */
    public function setCompletions(int $completions)
    {
        $this->completions = $completions;

        return $this;
    }

    /**
     * manualSelector controls generation of pod labels and pod selectors. Leave `manualSelector` unset
     * unless you are certain what you are doing. When false or unset, the system pick labels unique to
     * this job and appends those labels to the pod template.  When true, the user is responsible for
     * picking unique labels and specifying the selector.  Failure to pick a unique label may cause this
     * and other jobs to not function correctly.  However, You may see `manualSelector=true` in jobs that
     * were created with the old `extensions/v1beta1` API. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/#specifying-your-own-pod-selector
     */
    public function isManualSelector(): ?bool
    {
        return $this->manualSelector;
    }

    /**
     * manualSelector controls generation of pod labels and pod selectors. Leave `manualSelector` unset
     * unless you are certain what you are doing. When false or unset, the system pick labels unique to
     * this job and appends those labels to the pod template.  When true, the user is responsible for
     * picking unique labels and specifying the selector.  Failure to pick a unique label may cause this
     * and other jobs to not function correctly.  However, You may see `manualSelector=true` in jobs that
     * were created with the old `extensions/v1beta1` API. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/#specifying-your-own-pod-selector
     *
     * @return static
     */
    public function setIsManualSelector(bool $manualSelector)
    {
        $this->manualSelector = $manualSelector;

        return $this;
    }

    /**
     * Specifies the maximum desired number of pods the job should run at any given time. The actual number
     * of pods running in steady state will be less than this number when ((.spec.completions -
     * .status.successful) < .spec.parallelism), i.e. when the work left to do is less than max
     * parallelism. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     */
    public function getParallelism(): ?int
    {
        return $this->parallelism;
    }

    /**
     * Specifies the maximum desired number of pods the job should run at any given time. The actual number
     * of pods running in steady state will be less than this number when ((.spec.completions -
     * .status.successful) < .spec.parallelism), i.e. when the work left to do is less than max
     * parallelism. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * @return static
     */
    public function setParallelism(int $parallelism)
    {
        $this->parallelism = $parallelism;

        return $this;
    }

    /**
     * Specifies the policy of handling failed pods. In particular, it allows to specify the set of actions
     * and conditions which need to be satisfied to take the associated action. If empty, the default
     * behaviour applies - the counter of failed pods, represented by the jobs's .status.failed field, is
     * incremented and it is checked against the backoffLimit. This field cannot be used in combination
     * with restartPolicy=OnFailure.
     *
     * This field is alpha-level. To use this field, you must enable the `JobPodFailurePolicy` feature gate
     * (disabled by default).
     */
    public function getPodFailurePolicy(): ?PodFailurePolicy
    {
        return $this->podFailurePolicy;
    }

    /**
     * Specifies the policy of handling failed pods. In particular, it allows to specify the set of actions
     * and conditions which need to be satisfied to take the associated action. If empty, the default
     * behaviour applies - the counter of failed pods, represented by the jobs's .status.failed field, is
     * incremented and it is checked against the backoffLimit. This field cannot be used in combination
     * with restartPolicy=OnFailure.
     *
     * This field is alpha-level. To use this field, you must enable the `JobPodFailurePolicy` feature gate
     * (disabled by default).
     *
     * @return static
     */
    public function setPodFailurePolicy(PodFailurePolicy $podFailurePolicy)
    {
        $this->podFailurePolicy = $podFailurePolicy;

        return $this;
    }

    /**
     * A label query over pods that should match the pod count. Normally, the system sets this field for
     * you. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     */
    public function getSelector(): ?LabelSelector
    {
        return $this->selector;
    }

    /**
     * A label query over pods that should match the pod count. Normally, the system sets this field for
     * you. More info:
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
     * Suspend specifies whether the Job controller should create Pods or not. If a Job is created with
     * suspend set to true, no Pods are created by the Job controller. If a Job is suspended after creation
     * (i.e. the flag goes from false to true), the Job controller will delete all active Pods associated
     * with this Job. Users must design their workload to gracefully handle this. Suspending a Job will
     * reset the StartTime field of the Job, effectively resetting the ActiveDeadlineSeconds timer too.
     * Defaults to false.
     */
    public function isSuspend(): ?bool
    {
        return $this->suspend;
    }

    /**
     * Suspend specifies whether the Job controller should create Pods or not. If a Job is created with
     * suspend set to true, no Pods are created by the Job controller. If a Job is suspended after creation
     * (i.e. the flag goes from false to true), the Job controller will delete all active Pods associated
     * with this Job. Users must design their workload to gracefully handle this. Suspending a Job will
     * reset the StartTime field of the Job, effectively resetting the ActiveDeadlineSeconds timer too.
     * Defaults to false.
     *
     * @return static
     */
    public function setIsSuspend(bool $suspend)
    {
        $this->suspend = $suspend;

        return $this;
    }

    /**
     * Describes the pod that will be created when executing a job. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     */
    public function getTemplate(): PodTemplateSpec
    {
        return $this->template;
    }

    /**
     * Describes the pod that will be created when executing a job. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * @return static
     */
    public function setTemplate(PodTemplateSpec $template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * ttlSecondsAfterFinished limits the lifetime of a Job that has finished execution (either Complete or
     * Failed). If this field is set, ttlSecondsAfterFinished after the Job finishes, it is eligible to be
     * automatically deleted. When the Job is being deleted, its lifecycle guarantees (e.g. finalizers)
     * will be honored. If this field is unset, the Job won't be automatically deleted. If this field is
     * set to zero, the Job becomes eligible to be deleted immediately after it finishes.
     */
    public function getTtlSecondsAfterFinished(): ?int
    {
        return $this->ttlSecondsAfterFinished;
    }

    /**
     * ttlSecondsAfterFinished limits the lifetime of a Job that has finished execution (either Complete or
     * Failed). If this field is set, ttlSecondsAfterFinished after the Job finishes, it is eligible to be
     * automatically deleted. When the Job is being deleted, its lifecycle guarantees (e.g. finalizers)
     * will be honored. If this field is unset, the Job won't be automatically deleted. If this field is
     * set to zero, the Job becomes eligible to be deleted immediately after it finishes.
     *
     * @return static
     */
    public function setTtlSecondsAfterFinished(int $ttlSecondsAfterFinished)
    {
        $this->ttlSecondsAfterFinished = $ttlSecondsAfterFinished;

        return $this;
    }
}
