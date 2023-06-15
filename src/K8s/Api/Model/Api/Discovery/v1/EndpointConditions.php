<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.11
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Discovery\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * EndpointConditions represents the current condition of an endpoint.
 */
class EndpointConditions
{
    /**
     * @Kubernetes\Attribute("ready")
     * @var bool|null
     */
    protected $ready = null;

    /**
     * @Kubernetes\Attribute("serving")
     * @var bool|null
     */
    protected $serving = null;

    /**
     * @Kubernetes\Attribute("terminating")
     * @var bool|null
     */
    protected $terminating = null;

    /**
     * @param bool|null $ready
     * @param bool|null $serving
     * @param bool|null $terminating
     */
    public function __construct(?bool $ready = null, ?bool $serving = null, ?bool $terminating = null)
    {
        $this->ready = $ready;
        $this->serving = $serving;
        $this->terminating = $terminating;
    }

    /**
     * ready indicates that this endpoint is prepared to receive traffic, according to whatever system is
     * managing the endpoint. A nil value indicates an unknown state. In most cases consumers should
     * interpret this unknown state as ready. For compatibility reasons, ready should never be "true" for
     * terminating endpoints.
     */
    public function isReady(): ?bool
    {
        return $this->ready;
    }

    /**
     * ready indicates that this endpoint is prepared to receive traffic, according to whatever system is
     * managing the endpoint. A nil value indicates an unknown state. In most cases consumers should
     * interpret this unknown state as ready. For compatibility reasons, ready should never be "true" for
     * terminating endpoints.
     *
     * @return static
     */
    public function setIsReady(bool $ready)
    {
        $this->ready = $ready;

        return $this;
    }

    /**
     * serving is identical to ready except that it is set regardless of the terminating state of
     * endpoints. This condition should be set to true for a ready endpoint that is terminating. If nil,
     * consumers should defer to the ready condition. This field can be enabled with the
     * EndpointSliceTerminatingCondition feature gate.
     */
    public function isServing(): ?bool
    {
        return $this->serving;
    }

    /**
     * serving is identical to ready except that it is set regardless of the terminating state of
     * endpoints. This condition should be set to true for a ready endpoint that is terminating. If nil,
     * consumers should defer to the ready condition. This field can be enabled with the
     * EndpointSliceTerminatingCondition feature gate.
     *
     * @return static
     */
    public function setIsServing(bool $serving)
    {
        $this->serving = $serving;

        return $this;
    }

    /**
     * terminating indicates that this endpoint is terminating. A nil value indicates an unknown state.
     * Consumers should interpret this unknown state to mean that the endpoint is not terminating. This
     * field can be enabled with the EndpointSliceTerminatingCondition feature gate.
     */
    public function isTerminating(): ?bool
    {
        return $this->terminating;
    }

    /**
     * terminating indicates that this endpoint is terminating. A nil value indicates an unknown state.
     * Consumers should interpret this unknown state to mean that the endpoint is not terminating. This
     * field can be enabled with the EndpointSliceTerminatingCondition feature gate.
     *
     * @return static
     */
    public function setIsTerminating(bool $terminating)
    {
        $this->terminating = $terminating;

        return $this;
    }
}
