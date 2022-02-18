<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.4
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Batch\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * UncountedTerminatedPods holds UIDs of Pods that have terminated but haven't been accounted in Job
 * status counters.
 */
class UncountedTerminatedPods
{
    /**
     * @Kubernetes\Attribute("failed")
     * @var string[]|null
     */
    protected $failed = null;

    /**
     * @Kubernetes\Attribute("succeeded")
     * @var string[]|null
     */
    protected $succeeded = null;

    /**
     * @param string[]|null $failed
     * @param string[]|null $succeeded
     */
    public function __construct(?array $failed = null, ?array $succeeded = null)
    {
        $this->failed = $failed;
        $this->succeeded = $succeeded;
    }

    /**
     * Failed holds UIDs of failed Pods.
     */
    public function getFailed(): ?array
    {
        return $this->failed;
    }

    /**
     * Failed holds UIDs of failed Pods.
     *
     * @return static
     */
    public function setFailed(array $failed)
    {
        $this->failed = $failed;

        return $this;
    }

    /**
     * Succeeded holds UIDs of succeeded Pods.
     */
    public function getSucceeded(): ?array
    {
        return $this->succeeded;
    }

    /**
     * Succeeded holds UIDs of succeeded Pods.
     *
     * @return static
     */
    public function setSucceeded(array $succeeded)
    {
        $this->succeeded = $succeeded;

        return $this;
    }
}