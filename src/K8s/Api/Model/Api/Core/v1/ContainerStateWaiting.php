<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.7
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
 * ContainerStateWaiting is a waiting state of a container.
 */
class ContainerStateWaiting
{
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
     * @param string|null $message
     * @param string|null $reason
     */
    public function __construct(?string $message = null, ?string $reason = null)
    {
        $this->message = $message;
        $this->reason = $reason;
    }

    /**
     * Message regarding why the container is not yet running.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Message regarding why the container is not yet running.
     *
     * @return static
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * (brief) reason the container is not yet running.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * (brief) reason the container is not yet running.
     *
     * @return static
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
