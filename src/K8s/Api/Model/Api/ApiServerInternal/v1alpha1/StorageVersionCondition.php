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

namespace K8s\Api\Model\Api\ApiServerInternal\v1alpha1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

/**
 * Describes the state of the storageVersion at a certain point.
 */
class StorageVersionCondition
{
    /**
     * @Kubernetes\Attribute("lastTransitionTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $lastTransitionTime = null;

    /**
     * @Kubernetes\Attribute("message")
     * @var string|null
     */
    protected $message = null;

    /**
     * @Kubernetes\Attribute("observedGeneration")
     * @var int|null
     */
    protected $observedGeneration = null;

    /**
     * @Kubernetes\Attribute("reason",isRequired=true)
     * @var string
     */
    protected $reason;

    /**
     * @Kubernetes\Attribute("status",isRequired=true)
     * @var string
     */
    protected $status;

    /**
     * @Kubernetes\Attribute("type",isRequired=true)
     * @var string
     */
    protected $type;

    /**
     * @param string $reason
     * @param string $status
     * @param string $type
     */
    public function __construct(string $reason, string $status, string $type)
    {
        $this->reason = $reason;
        $this->status = $status;
        $this->type = $type;
    }

    /**
     * Last time the condition transitioned from one status to another.
     */
    public function getLastTransitionTime(): ?DateTimeInterface
    {
        return $this->lastTransitionTime;
    }

    /**
     * Last time the condition transitioned from one status to another.
     *
     * @return static
     */
    public function setLastTransitionTime(DateTimeInterface $lastTransitionTime)
    {
        $this->lastTransitionTime = $lastTransitionTime;

        return $this;
    }

    /**
     * A human readable message indicating details about the transition.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * A human readable message indicating details about the transition.
     *
     * @return static
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * If set, this represents the .metadata.generation that the condition was set based upon.
     */
    public function getObservedGeneration(): ?int
    {
        return $this->observedGeneration;
    }

    /**
     * If set, this represents the .metadata.generation that the condition was set based upon.
     *
     * @return static
     */
    public function setObservedGeneration(int $observedGeneration)
    {
        $this->observedGeneration = $observedGeneration;

        return $this;
    }

    /**
     * The reason for the condition's last transition.
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * The reason for the condition's last transition.
     *
     * @return static
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Status of the condition, one of True, False, Unknown.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Status of the condition, one of True, False, Unknown.
     *
     * @return static
     */
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Type of the condition.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the condition.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
