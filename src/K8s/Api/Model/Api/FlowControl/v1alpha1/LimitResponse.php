<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.20.4
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\FlowControl\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * LimitResponse defines how to handle requests that can not be executed right now.
 */
class LimitResponse
{
    /**
     * @Kubernetes\Attribute("queuing",type="model",model=QueuingConfiguration::class)
     * @var QueuingConfiguration|null
     */
    protected $queuing = null;

    /**
     * @Kubernetes\Attribute("type",isRequired=true)
     * @var string
     */
    protected $type;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * `queuing` holds the configuration parameters for queuing. This field may be non-empty only if `type`
     * is `"Queue"`.
     */
    public function getQueuing(): ?QueuingConfiguration
    {
        return $this->queuing;
    }

    /**
     * `queuing` holds the configuration parameters for queuing. This field may be non-empty only if `type`
     * is `"Queue"`.
     *
     * @return static
     */
    public function setQueuing(QueuingConfiguration $queuing)
    {
        $this->queuing = $queuing;

        return $this;
    }

    /**
     * `type` is "Queue" or "Reject". "Queue" means that requests that can not be executed upon arrival are
     * held in a queue until they can be executed or a queuing limit is reached. "Reject" means that
     * requests that can not be executed upon arrival are rejected. Required.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * `type` is "Queue" or "Reject". "Queue" means that requests that can not be executed upon arrival are
     * held in a queue until they can be executed or a queuing limit is reached. "Reject" means that
     * requests that can not be executed upon arrival are rejected. Required.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
