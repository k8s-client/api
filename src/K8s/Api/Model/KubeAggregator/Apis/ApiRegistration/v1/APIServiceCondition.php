<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.0
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\KubeAggregator\Apis\ApiRegistration\v1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

/**
 * APIServiceCondition describes the state of an APIService at a particular point
 */
class APIServiceCondition
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
     * @Kubernetes\Attribute("reason")
     * @var string|null
     */
    protected $reason = null;

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
     * @param string $status
     * @param string $type
     */
    public function __construct(string $status, string $type)
    {
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
     * Human-readable message indicating details about last transition.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Human-readable message indicating details about last transition.
     *
     * @return static
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Unique, one-word, CamelCase reason for the condition's last transition.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Unique, one-word, CamelCase reason for the condition's last transition.
     *
     * @return static
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Status is the status of the condition. Can be True, False, Unknown.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Status is the status of the condition. Can be True, False, Unknown.
     *
     * @return static
     */
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Type is the type of the condition.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type is the type of the condition.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
