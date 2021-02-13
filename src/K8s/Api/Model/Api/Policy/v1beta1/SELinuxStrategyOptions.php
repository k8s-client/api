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

namespace K8s\Api\Model\Api\Policy\v1beta1;

use K8s\Api\Model\Api\Core\v1\SELinuxOptions;
use K8s\Core\Annotation as Kubernetes;

/**
 * SELinuxStrategyOptions defines the strategy type and any options used to create the strategy.
 */
class SELinuxStrategyOptions
{
    /**
     * @Kubernetes\Attribute("rule",isRequired=true)
     * @var string
     */
    protected $rule;

    /**
     * @Kubernetes\Attribute("seLinuxOptions",type="model",model=SELinuxOptions::class)
     * @var SELinuxOptions|null
     */
    protected $seLinuxOptions = null;

    /**
     * @param string $rule
     */
    public function __construct(string $rule)
    {
        $this->rule = $rule;
    }

    /**
     * rule is the strategy that will dictate the allowable labels that may be set.
     */
    public function getRule(): string
    {
        return $this->rule;
    }

    /**
     * rule is the strategy that will dictate the allowable labels that may be set.
     *
     * @return static
     */
    public function setRule(string $rule)
    {
        $this->rule = $rule;

        return $this;
    }

    /**
     * seLinuxOptions required to run as; required for MustRunAs More info:
     * https://kubernetes.io/docs/tasks/configure-pod-container/security-context/
     */
    public function getSeLinuxOptions(): ?SELinuxOptions
    {
        return $this->seLinuxOptions;
    }

    /**
     * seLinuxOptions required to run as; required for MustRunAs More info:
     * https://kubernetes.io/docs/tasks/configure-pod-container/security-context/
     *
     * @return static
     */
    public function setSeLinuxOptions(SELinuxOptions $seLinuxOptions)
    {
        $this->seLinuxOptions = $seLinuxOptions;

        return $this;
    }
}
