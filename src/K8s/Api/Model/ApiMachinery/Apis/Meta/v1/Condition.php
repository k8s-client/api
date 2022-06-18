<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.2
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiMachinery\Apis\Meta\v1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

/**
 * Condition contains details for one aspect of the current state of this API Resource.
 */
class Condition
{
    /**
     * @Kubernetes\Attribute("lastTransitionTime",type="datetime",isRequired=true)
     * @var DateTimeInterface
     */
    protected $lastTransitionTime;

    /**
     * @Kubernetes\Attribute("message",isRequired=true)
     * @var string
     */
    protected $message;

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
     * @param DateTimeInterface $lastTransitionTime
     * @param string $message
     * @param string $reason
     * @param string $status
     * @param string $type
     */
    public function __construct(DateTimeInterface $lastTransitionTime, string $message, string $reason, string $status, string $type)
    {
        $this->lastTransitionTime = $lastTransitionTime;
        $this->message = $message;
        $this->reason = $reason;
        $this->status = $status;
        $this->type = $type;
    }

    /**
     * lastTransitionTime is the last time the condition transitioned from one status to another. This
     * should be when the underlying condition changed.  If that is not known, then using the time when the
     * API field changed is acceptable.
     */
    public function getLastTransitionTime(): DateTimeInterface
    {
        return $this->lastTransitionTime;
    }

    /**
     * lastTransitionTime is the last time the condition transitioned from one status to another. This
     * should be when the underlying condition changed.  If that is not known, then using the time when the
     * API field changed is acceptable.
     *
     * @return static
     */
    public function setLastTransitionTime(DateTimeInterface $lastTransitionTime)
    {
        $this->lastTransitionTime = $lastTransitionTime;

        return $this;
    }

    /**
     * message is a human readable message indicating details about the transition. This may be an empty
     * string.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * message is a human readable message indicating details about the transition. This may be an empty
     * string.
     *
     * @return static
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * observedGeneration represents the .metadata.generation that the condition was set based upon. For
     * instance, if .metadata.generation is currently 12, but the .status.conditions[x].observedGeneration
     * is 9, the condition is out of date with respect to the current state of the instance.
     */
    public function getObservedGeneration(): ?int
    {
        return $this->observedGeneration;
    }

    /**
     * observedGeneration represents the .metadata.generation that the condition was set based upon. For
     * instance, if .metadata.generation is currently 12, but the .status.conditions[x].observedGeneration
     * is 9, the condition is out of date with respect to the current state of the instance.
     *
     * @return static
     */
    public function setObservedGeneration(int $observedGeneration)
    {
        $this->observedGeneration = $observedGeneration;

        return $this;
    }

    /**
     * reason contains a programmatic identifier indicating the reason for the condition's last transition.
     * Producers of specific condition types may define expected values and meanings for this field, and
     * whether the values are considered a guaranteed API. The value should be a CamelCase string. This
     * field may not be empty.
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * reason contains a programmatic identifier indicating the reason for the condition's last transition.
     * Producers of specific condition types may define expected values and meanings for this field, and
     * whether the values are considered a guaranteed API. The value should be a CamelCase string. This
     * field may not be empty.
     *
     * @return static
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * status of the condition, one of True, False, Unknown.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * status of the condition, one of True, False, Unknown.
     *
     * @return static
     */
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * type of condition in CamelCase or in foo.example.com/CamelCase.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * type of condition in CamelCase or in foo.example.com/CamelCase.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
