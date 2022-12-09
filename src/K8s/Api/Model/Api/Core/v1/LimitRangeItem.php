<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.15
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
 * LimitRangeItem defines a min/max usage limit for any resource that matches on kind.
 */
class LimitRangeItem
{
    /**
     * @Kubernetes\Attribute("default")
     * @var object[]|null
     */
    protected $default = null;

    /**
     * @Kubernetes\Attribute("defaultRequest")
     * @var object[]|null
     */
    protected $defaultRequest = null;

    /**
     * @Kubernetes\Attribute("max")
     * @var object[]|null
     */
    protected $max = null;

    /**
     * @Kubernetes\Attribute("maxLimitRequestRatio")
     * @var object[]|null
     */
    protected $maxLimitRequestRatio = null;

    /**
     * @Kubernetes\Attribute("min")
     * @var object[]|null
     */
    protected $min = null;

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
     * Default resource requirement limit value by resource name if resource limit is omitted.
     */
    public function getDefault(): ?array
    {
        return $this->default;
    }

    /**
     * Default resource requirement limit value by resource name if resource limit is omitted.
     *
     * @return static
     */
    public function setDefault(array $default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * DefaultRequest is the default resource requirement request value by resource name if resource
     * request is omitted.
     */
    public function getDefaultRequest(): ?array
    {
        return $this->defaultRequest;
    }

    /**
     * DefaultRequest is the default resource requirement request value by resource name if resource
     * request is omitted.
     *
     * @return static
     */
    public function setDefaultRequest(array $defaultRequest)
    {
        $this->defaultRequest = $defaultRequest;

        return $this;
    }

    /**
     * Max usage constraints on this kind by resource name.
     */
    public function getMax(): ?array
    {
        return $this->max;
    }

    /**
     * Max usage constraints on this kind by resource name.
     *
     * @return static
     */
    public function setMax(array $max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * MaxLimitRequestRatio if specified, the named resource must have a request and limit that are both
     * non-zero where limit divided by request is less than or equal to the enumerated value; this
     * represents the max burst for the named resource.
     */
    public function getMaxLimitRequestRatio(): ?array
    {
        return $this->maxLimitRequestRatio;
    }

    /**
     * MaxLimitRequestRatio if specified, the named resource must have a request and limit that are both
     * non-zero where limit divided by request is less than or equal to the enumerated value; this
     * represents the max burst for the named resource.
     *
     * @return static
     */
    public function setMaxLimitRequestRatio(array $maxLimitRequestRatio)
    {
        $this->maxLimitRequestRatio = $maxLimitRequestRatio;

        return $this;
    }

    /**
     * Min usage constraints on this kind by resource name.
     */
    public function getMin(): ?array
    {
        return $this->min;
    }

    /**
     * Min usage constraints on this kind by resource name.
     *
     * @return static
     */
    public function setMin(array $min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Type of resource that this limit applies to.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of resource that this limit applies to.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
