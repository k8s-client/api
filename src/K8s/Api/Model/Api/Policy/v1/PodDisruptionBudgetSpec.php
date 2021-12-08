<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.23.0
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Policy\v1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Core\Annotation as Kubernetes;

/**
 * PodDisruptionBudgetSpec is a description of a PodDisruptionBudget.
 */
class PodDisruptionBudgetSpec
{
    /**
     * @Kubernetes\Attribute("maxUnavailable")
     * @var int|string|null
     */
    protected $maxUnavailable = null;

    /**
     * @Kubernetes\Attribute("minAvailable")
     * @var int|string|null
     */
    protected $minAvailable = null;

    /**
     * @Kubernetes\Attribute("selector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $selector = null;

    /**
     * @param int|string|null $maxUnavailable
     * @param int|string|null $minAvailable
     * @param LabelSelector|null $selector
     */
    public function __construct($maxUnavailable = null, $minAvailable = null, ?LabelSelector $selector = null)
    {
        $this->maxUnavailable = $maxUnavailable;
        $this->minAvailable = $minAvailable;
        $this->selector = $selector;
    }

    /**
     * An eviction is allowed if at most "maxUnavailable" pods selected by "selector" are unavailable after
     * the eviction, i.e. even in absence of the evicted pod. For example, one can prevent all voluntary
     * evictions by specifying 0. This is a mutually exclusive setting with "minAvailable".
     *
     * @return int|string
     */
    public function getMaxUnavailable()
    {
        return $this->maxUnavailable;
    }

    /**
     * An eviction is allowed if at most "maxUnavailable" pods selected by "selector" are unavailable after
     * the eviction, i.e. even in absence of the evicted pod. For example, one can prevent all voluntary
     * evictions by specifying 0. This is a mutually exclusive setting with "minAvailable".
     *
     * @param int|string $maxUnavailable
     * @return static
     */
    public function setMaxUnavailable($maxUnavailable)
    {
        $this->maxUnavailable = $maxUnavailable;

        return $this;
    }

    /**
     * An eviction is allowed if at least "minAvailable" pods selected by "selector" will still be
     * available after the eviction, i.e. even in the absence of the evicted pod.  So for example you can
     * prevent all voluntary evictions by specifying "100%".
     *
     * @return int|string
     */
    public function getMinAvailable()
    {
        return $this->minAvailable;
    }

    /**
     * An eviction is allowed if at least "minAvailable" pods selected by "selector" will still be
     * available after the eviction, i.e. even in the absence of the evicted pod.  So for example you can
     * prevent all voluntary evictions by specifying "100%".
     *
     * @param int|string $minAvailable
     * @return static
     */
    public function setMinAvailable($minAvailable)
    {
        $this->minAvailable = $minAvailable;

        return $this;
    }

    /**
     * Label query over pods whose evictions are managed by the disruption budget. A null selector will
     * match no pods, while an empty ({}) selector will select all pods within the namespace.
     */
    public function getSelector(): ?LabelSelector
    {
        return $this->selector;
    }

    /**
     * Label query over pods whose evictions are managed by the disruption budget. A null selector will
     * match no pods, while an empty ({}) selector will select all pods within the namespace.
     *
     * @return static
     */
    public function setSelector(LabelSelector $selector)
    {
        $this->selector = $selector;

        return $this;
    }
}
