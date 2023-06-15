<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

/**
 * The node this Taint is attached to has the "effect" on any pod that does not tolerate the Taint.
 */
class Taint
{
    /**
     * @Kubernetes\Attribute("effect",isRequired=true)
     * @var string
     */
    protected $effect;

    /**
     * @Kubernetes\Attribute("key",isRequired=true)
     * @var string
     */
    protected $key;

    /**
     * @Kubernetes\Attribute("timeAdded",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $timeAdded = null;

    /**
     * @Kubernetes\Attribute("value")
     * @var string|null
     */
    protected $value = null;

    /**
     * @param string $effect
     * @param string $key
     */
    public function __construct(string $effect, string $key)
    {
        $this->effect = $effect;
        $this->key = $key;
    }

    /**
     * Required. The effect of the taint on pods that do not tolerate the taint. Valid effects are
     * NoSchedule, PreferNoSchedule and NoExecute.
     */
    public function getEffect(): string
    {
        return $this->effect;
    }

    /**
     * Required. The effect of the taint on pods that do not tolerate the taint. Valid effects are
     * NoSchedule, PreferNoSchedule and NoExecute.
     *
     *
     *
     * @return static
     */
    public function setEffect(string $effect)
    {
        $this->effect = $effect;

        return $this;
    }

    /**
     * Required. The taint key to be applied to a node.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Required. The taint key to be applied to a node.
     *
     * @return static
     */
    public function setKey(string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * TimeAdded represents the time at which the taint was added. It is only written for NoExecute taints.
     */
    public function getTimeAdded(): ?DateTimeInterface
    {
        return $this->timeAdded;
    }

    /**
     * TimeAdded represents the time at which the taint was added. It is only written for NoExecute taints.
     *
     * @return static
     */
    public function setTimeAdded(DateTimeInterface $timeAdded)
    {
        $this->timeAdded = $timeAdded;

        return $this;
    }

    /**
     * The taint value corresponding to the taint key.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * The taint value corresponding to the taint key.
     *
     * @return static
     */
    public function setValue(string $value)
    {
        $this->value = $value;

        return $this;
    }
}
