<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.13
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
 * NodeDaemonEndpoints lists ports opened by daemons running on the Node.
 */
class NodeDaemonEndpoints
{
    /**
     * @Kubernetes\Attribute("kubeletEndpoint",type="model",model=DaemonEndpoint::class)
     * @var DaemonEndpoint|null
     */
    protected $kubeletEndpoint = null;

    /**
     * @param DaemonEndpoint|null $kubeletEndpoint
     */
    public function __construct(?DaemonEndpoint $kubeletEndpoint = null)
    {
        $this->kubeletEndpoint = $kubeletEndpoint;
    }

    /**
     * Endpoint on which Kubelet is listening.
     */
    public function getKubeletEndpoint(): ?DaemonEndpoint
    {
        return $this->kubeletEndpoint;
    }

    /**
     * Endpoint on which Kubelet is listening.
     *
     * @return static
     */
    public function setKubeletEndpoint(DaemonEndpoint $kubeletEndpoint)
    {
        $this->kubeletEndpoint = $kubeletEndpoint;

        return $this;
    }
}
