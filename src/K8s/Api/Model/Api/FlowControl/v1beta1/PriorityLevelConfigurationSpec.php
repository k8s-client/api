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

namespace K8s\Api\Model\Api\FlowControl\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * PriorityLevelConfigurationSpec specifies the configuration of a priority level.
 */
class PriorityLevelConfigurationSpec
{
    /**
     * @Kubernetes\Attribute("limited",type="model",model=LimitedPriorityLevelConfiguration::class)
     * @var LimitedPriorityLevelConfiguration|null
     */
    protected $limited = null;

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
     * `limited` specifies how requests are handled for a Limited priority level. This field must be
     * non-empty if and only if `type` is `"Limited"`.
     */
    public function getLimited(): ?LimitedPriorityLevelConfiguration
    {
        return $this->limited;
    }

    /**
     * `limited` specifies how requests are handled for a Limited priority level. This field must be
     * non-empty if and only if `type` is `"Limited"`.
     *
     * @return static
     */
    public function setLimited(LimitedPriorityLevelConfiguration $limited)
    {
        $this->limited = $limited;

        return $this;
    }

    /**
     * `type` indicates whether this priority level is subject to limitation on request execution.  A value
     * of `"Exempt"` means that requests of this priority level are not subject to a limit (and thus are
     * never queued) and do not detract from the capacity made available to other priority levels.  A value
     * of `"Limited"` means that (a) requests of this priority level _are_ subject to limits and (b) some
     * of the server's limited capacity is made available exclusively to this priority level. Required.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * `type` indicates whether this priority level is subject to limitation on request execution.  A value
     * of `"Exempt"` means that requests of this priority level are not subject to a limit (and thus are
     * never queued) and do not detract from the capacity made available to other priority levels.  A value
     * of `"Limited"` means that (a) requests of this priority level _are_ subject to limits and (b) some
     * of the server's limited capacity is made available exclusively to this priority level. Required.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
