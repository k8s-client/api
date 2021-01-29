<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.12.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Apps\v1beta2;

use K8s\Api\Model\Api\Core\v1\PersistentVolumeClaim;
use K8s\Api\Model\Api\Core\v1\PodSpec;
use K8s\Api\Model\Api\Core\v1\PodTemplateSpec;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * A StatefulSetSpec is the specification of a StatefulSet.
 */
class StatefulSetSpec
{
    /**
     * @Kubernetes\Attribute("podManagementPolicy")
     * @var string|null
     */
    protected $podManagementPolicy = null;

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
     * @Kubernetes\Attribute("serviceName",isRequired=true)
     * @var string
     */
    protected $serviceName;

    /**
     * @Kubernetes\Attribute("template",type="model",model=PodTemplateSpec::class,isRequired=true)
     * @var PodTemplateSpec
     */
    protected $template;

    /**
     * @Kubernetes\Attribute("updateStrategy",type="model",model=StatefulSetUpdateStrategy::class)
     * @var StatefulSetUpdateStrategy|null
     */
    protected $updateStrategy = null;

    /**
     * @Kubernetes\Attribute("volumeClaimTemplates",type="collection",model=PersistentVolumeClaim::class)
     * @var iterable|PersistentVolumeClaim[]|null
     */
    protected $volumeClaimTemplates = null;

    /**
     * @param LabelSelector $selector
     * @param string $serviceName
     * @param PodTemplateSpec $template
     */
    public function __construct(LabelSelector $selector, string $serviceName, PodTemplateSpec $template)
    {
        $this->selector = $selector;
        $this->serviceName = $serviceName;
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
     * podManagementPolicy controls how pods are created during initial scale up, when replacing pods on
     * nodes, or when scaling down. The default policy is `OrderedReady`, where pods are created in
     * increasing order (pod-0, then pod-1, etc) and the controller will wait until each pod is ready
     * before continuing. When scaling down, the pods are removed in the opposite order. The alternative
     * policy is `Parallel` which will create pods in parallel to match the desired scale without waiting,
     * and on scale down will delete all pods at once.
     */
    public function getPodManagementPolicy(): ?string
    {
        return $this->podManagementPolicy;
    }

    /**
     * podManagementPolicy controls how pods are created during initial scale up, when replacing pods on
     * nodes, or when scaling down. The default policy is `OrderedReady`, where pods are created in
     * increasing order (pod-0, then pod-1, etc) and the controller will wait until each pod is ready
     * before continuing. When scaling down, the pods are removed in the opposite order. The alternative
     * policy is `Parallel` which will create pods in parallel to match the desired scale without waiting,
     * and on scale down will delete all pods at once.
     *
     * @return static
     */
    public function setPodManagementPolicy(string $podManagementPolicy)
    {
        $this->podManagementPolicy = $podManagementPolicy;

        return $this;
    }

    /**
     * replicas is the desired number of replicas of the given Template. These are replicas in the sense
     * that they are instantiations of the same Template, but individual replicas also have a consistent
     * identity. If unspecified, defaults to 1.
     */
    public function getReplicas(): ?int
    {
        return $this->replicas;
    }

    /**
     * replicas is the desired number of replicas of the given Template. These are replicas in the sense
     * that they are instantiations of the same Template, but individual replicas also have a consistent
     * identity. If unspecified, defaults to 1.
     *
     * @return static
     */
    public function setReplicas(int $replicas)
    {
        $this->replicas = $replicas;

        return $this;
    }

    /**
     * revisionHistoryLimit is the maximum number of revisions that will be maintained in the StatefulSet's
     * revision history. The revision history consists of all revisions not represented by a currently
     * applied StatefulSetSpec version. The default value is 10.
     */
    public function getRevisionHistoryLimit(): ?int
    {
        return $this->revisionHistoryLimit;
    }

    /**
     * revisionHistoryLimit is the maximum number of revisions that will be maintained in the StatefulSet's
     * revision history. The revision history consists of all revisions not represented by a currently
     * applied StatefulSetSpec version. The default value is 10.
     *
     * @return static
     */
    public function setRevisionHistoryLimit(int $revisionHistoryLimit)
    {
        $this->revisionHistoryLimit = $revisionHistoryLimit;

        return $this;
    }

    /**
     * selector is a label query over pods that should match the replica count. It must match the pod
     * template's labels. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     */
    public function getSelector(): LabelSelector
    {
        return $this->selector;
    }

    /**
     * selector is a label query over pods that should match the replica count. It must match the pod
     * template's labels. More info:
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
     * serviceName is the name of the service that governs this StatefulSet. This service must exist before
     * the StatefulSet, and is responsible for the network identity of the set. Pods get DNS/hostnames that
     * follow the pattern: pod-specific-string.serviceName.default.svc.cluster.local where
     * "pod-specific-string" is managed by the StatefulSet controller.
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    /**
     * serviceName is the name of the service that governs this StatefulSet. This service must exist before
     * the StatefulSet, and is responsible for the network identity of the set. Pods get DNS/hostnames that
     * follow the pattern: pod-specific-string.serviceName.default.svc.cluster.local where
     * "pod-specific-string" is managed by the StatefulSet controller.
     *
     * @return static
     */
    public function setServiceName(string $serviceName)
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    /**
     * template is the object that describes the pod that will be created if insufficient replicas are
     * detected. Each pod stamped out by the StatefulSet will fulfill this Template, but have a unique
     * identity from the rest of the StatefulSet.
     */
    public function getTemplate(): PodTemplateSpec
    {
        return $this->template;
    }

    /**
     * template is the object that describes the pod that will be created if insufficient replicas are
     * detected. Each pod stamped out by the StatefulSet will fulfill this Template, but have a unique
     * identity from the rest of the StatefulSet.
     *
     * @return static
     */
    public function setTemplate(PodTemplateSpec $template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * updateStrategy indicates the StatefulSetUpdateStrategy that will be employed to update Pods in the
     * StatefulSet when a revision is made to Template.
     */
    public function getUpdateStrategy(): ?StatefulSetUpdateStrategy
    {
        return $this->updateStrategy;
    }

    /**
     * updateStrategy indicates the StatefulSetUpdateStrategy that will be employed to update Pods in the
     * StatefulSet when a revision is made to Template.
     *
     * @return static
     */
    public function setUpdateStrategy(StatefulSetUpdateStrategy $updateStrategy)
    {
        $this->updateStrategy = $updateStrategy;

        return $this;
    }

    /**
     * volumeClaimTemplates is a list of claims that pods are allowed to reference. The StatefulSet
     * controller is responsible for mapping network identities to claims in a way that maintains the
     * identity of a pod. Every claim in this list must have at least one matching (by name) volumeMount in
     * one container in the template. A claim in this list takes precedence over any volumes in the
     * template, with the same name.
     *
     * @return iterable|PersistentVolumeClaim[]
     */
    public function getVolumeClaimTemplates(): ?iterable
    {
        return $this->volumeClaimTemplates;
    }

    /**
     * volumeClaimTemplates is a list of claims that pods are allowed to reference. The StatefulSet
     * controller is responsible for mapping network identities to claims in a way that maintains the
     * identity of a pod. Every claim in this list must have at least one matching (by name) volumeMount in
     * one container in the template. A claim in this list takes precedence over any volumes in the
     * template, with the same name.
     *
     * @return static
     */
    public function setVolumeClaimTemplates(iterable $volumeClaimTemplates)
    {
        $this->volumeClaimTemplates = $volumeClaimTemplates;

        return $this;
    }

    /**
     * @return static
     */
    public function addVolumeClaimTemplates(PersistentVolumeClaim $volumeClaimTemplate)
    {
        if (!$this->volumeClaimTemplates) {
            $this->volumeClaimTemplates = new Collection();
        }
        $this->volumeClaimTemplates[] = $volumeClaimTemplate;

        return $this;
    }
}