<?php

/**
 * This file was automatically generated by k8s/api-generator 0.8.1 for API version v1.20.2
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Certificates\v1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

/**
 * CertificateSigningRequestCondition describes a condition of a CertificateSigningRequest object
 */
class CertificateSigningRequestCondition
{
    /**
     * @Kubernetes\Attribute("lastTransitionTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $lastTransitionTime = null;

    /**
     * @Kubernetes\Attribute("lastUpdateTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $lastUpdateTime = null;

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
     * lastTransitionTime is the time the condition last transitioned from one status to another. If unset,
     * when a new condition type is added or an existing condition's status is changed, the server defaults
     * this to the current time.
     */
    public function getLastTransitionTime(): ?DateTimeInterface
    {
        return $this->lastTransitionTime;
    }

    /**
     * lastTransitionTime is the time the condition last transitioned from one status to another. If unset,
     * when a new condition type is added or an existing condition's status is changed, the server defaults
     * this to the current time.
     *
     * @return static
     */
    public function setLastTransitionTime(DateTimeInterface $lastTransitionTime)
    {
        $this->lastTransitionTime = $lastTransitionTime;

        return $this;
    }

    /**
     * lastUpdateTime is the time of the last update to this condition
     */
    public function getLastUpdateTime(): ?DateTimeInterface
    {
        return $this->lastUpdateTime;
    }

    /**
     * lastUpdateTime is the time of the last update to this condition
     *
     * @return static
     */
    public function setLastUpdateTime(DateTimeInterface $lastUpdateTime)
    {
        $this->lastUpdateTime = $lastUpdateTime;

        return $this;
    }

    /**
     * message contains a human readable message with details about the request state
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * message contains a human readable message with details about the request state
     *
     * @return static
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * reason indicates a brief reason for the request state
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * reason indicates a brief reason for the request state
     *
     * @return static
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * status of the condition, one of True, False, Unknown. Approved, Denied, and Failed conditions may
     * not be "False" or "Unknown".
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * status of the condition, one of True, False, Unknown. Approved, Denied, and Failed conditions may
     * not be "False" or "Unknown".
     *
     * @return static
     */
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * type of the condition. Known conditions are "Approved", "Denied", and "Failed".
     *
     * An "Approved" condition is added via the /approval subresource, indicating the request was approved
     * and should be issued by the signer.
     *
     * A "Denied" condition is added via the /approval subresource, indicating the request was denied and
     * should not be issued by the signer.
     *
     * A "Failed" condition is added via the /status subresource, indicating the signer failed to issue the
     * certificate.
     *
     * Approved and Denied conditions are mutually exclusive. Approved, Denied, and Failed conditions
     * cannot be removed once added.
     *
     * Only one condition of a given type is allowed.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * type of the condition. Known conditions are "Approved", "Denied", and "Failed".
     *
     * An "Approved" condition is added via the /approval subresource, indicating the request was approved
     * and should be issued by the signer.
     *
     * A "Denied" condition is added via the /approval subresource, indicating the request was denied and
     * should not be issued by the signer.
     *
     * A "Failed" condition is added via the /status subresource, indicating the signer failed to issue the
     * certificate.
     *
     * Approved and Denied conditions are mutually exclusive. Approved, Denied, and Failed conditions
     * cannot be removed once added.
     *
     * Only one condition of a given type is allowed.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
