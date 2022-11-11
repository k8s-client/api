<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.14
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * Information about the condition of a component.
 */
class ComponentCondition
{
    /**
     * @Kubernetes\Attribute("error")
     * @var string|null
     */
    protected $error = null;

    /**
     * @Kubernetes\Attribute("message")
     * @var string|null
     */
    protected $message = null;

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
     * Condition error code for a component. For example, a health check error code.
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * Condition error code for a component. For example, a health check error code.
     *
     * @return static
     */
    public function setError(string $error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Message about the condition for a component. For example, information about a health check.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Message about the condition for a component. For example, information about a health check.
     *
     * @return static
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Status of the condition for a component. Valid values for "Healthy": "True", "False", or "Unknown".
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Status of the condition for a component. Valid values for "Healthy": "True", "False", or "Unknown".
     *
     * @return static
     */
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Type of condition for a component. Valid value: "Healthy"
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of condition for a component. Valid value: "Healthy"
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
