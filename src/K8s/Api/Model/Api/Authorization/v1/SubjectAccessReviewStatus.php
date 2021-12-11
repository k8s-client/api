<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.0
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Authorization\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * SubjectAccessReviewStatus
 */
class SubjectAccessReviewStatus
{
    /**
     * @Kubernetes\Attribute("allowed",isRequired=true)
     * @var bool
     */
    protected $allowed;

    /**
     * @Kubernetes\Attribute("denied")
     * @var bool|null
     */
    protected $denied = null;

    /**
     * @Kubernetes\Attribute("evaluationError")
     * @var string|null
     */
    protected $evaluationError = null;

    /**
     * @Kubernetes\Attribute("reason")
     * @var string|null
     */
    protected $reason = null;

    /**
     * @param bool $allowed
     */
    public function __construct(bool $allowed)
    {
        $this->allowed = $allowed;
    }

    /**
     * Allowed is required. True if the action would be allowed, false otherwise.
     */
    public function isAllowed(): bool
    {
        return $this->allowed;
    }

    /**
     * Allowed is required. True if the action would be allowed, false otherwise.
     *
     * @return static
     */
    public function setIsAllowed(bool $allowed)
    {
        $this->allowed = $allowed;

        return $this;
    }

    /**
     * Denied is optional. True if the action would be denied, otherwise false. If both allowed is false
     * and denied is false, then the authorizer has no opinion on whether to authorize the action. Denied
     * may not be true if Allowed is true.
     */
    public function isDenied(): ?bool
    {
        return $this->denied;
    }

    /**
     * Denied is optional. True if the action would be denied, otherwise false. If both allowed is false
     * and denied is false, then the authorizer has no opinion on whether to authorize the action. Denied
     * may not be true if Allowed is true.
     *
     * @return static
     */
    public function setIsDenied(bool $denied)
    {
        $this->denied = $denied;

        return $this;
    }

    /**
     * EvaluationError is an indication that some error occurred during the authorization check. It is
     * entirely possible to get an error and be able to continue determine authorization status in spite of
     * it. For instance, RBAC can be missing a role, but enough roles are still present and bound to reason
     * about the request.
     */
    public function getEvaluationError(): ?string
    {
        return $this->evaluationError;
    }

    /**
     * EvaluationError is an indication that some error occurred during the authorization check. It is
     * entirely possible to get an error and be able to continue determine authorization status in spite of
     * it. For instance, RBAC can be missing a role, but enough roles are still present and bound to reason
     * about the request.
     *
     * @return static
     */
    public function setEvaluationError(string $evaluationError)
    {
        $this->evaluationError = $evaluationError;

        return $this;
    }

    /**
     * Reason is optional.  It indicates why a request was allowed or denied.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Reason is optional.  It indicates why a request was allowed or denied.
     *
     * @return static
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
