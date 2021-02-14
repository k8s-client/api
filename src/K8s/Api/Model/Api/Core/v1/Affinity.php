<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.14.10
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
 * Affinity is a group of affinity scheduling rules.
 */
class Affinity
{
    /**
     * @Kubernetes\Attribute("nodeAffinity",type="model",model=NodeAffinity::class)
     * @var NodeAffinity|null
     */
    protected $nodeAffinity = null;

    /**
     * @Kubernetes\Attribute("podAffinity",type="model",model=PodAffinity::class)
     * @var PodAffinity|null
     */
    protected $podAffinity = null;

    /**
     * @Kubernetes\Attribute("podAntiAffinity",type="model",model=PodAntiAffinity::class)
     * @var PodAntiAffinity|null
     */
    protected $podAntiAffinity = null;

    /**
     * @param NodeAffinity|null $nodeAffinity
     * @param PodAffinity|null $podAffinity
     * @param PodAntiAffinity|null $podAntiAffinity
     */
    public function __construct(?NodeAffinity $nodeAffinity = null, ?PodAffinity $podAffinity = null, ?PodAntiAffinity $podAntiAffinity = null)
    {
        $this->nodeAffinity = $nodeAffinity;
        $this->podAffinity = $podAffinity;
        $this->podAntiAffinity = $podAntiAffinity;
    }

    /**
     * Describes node affinity scheduling rules for the pod.
     */
    public function getNodeAffinity(): ?NodeAffinity
    {
        return $this->nodeAffinity;
    }

    /**
     * Describes node affinity scheduling rules for the pod.
     *
     * @return static
     */
    public function setNodeAffinity(NodeAffinity $nodeAffinity)
    {
        $this->nodeAffinity = $nodeAffinity;

        return $this;
    }

    /**
     * Describes pod affinity scheduling rules (e.g. co-locate this pod in the same node, zone, etc. as
     * some other pod(s)).
     */
    public function getPodAffinity(): ?PodAffinity
    {
        return $this->podAffinity;
    }

    /**
     * Describes pod affinity scheduling rules (e.g. co-locate this pod in the same node, zone, etc. as
     * some other pod(s)).
     *
     * @return static
     */
    public function setPodAffinity(PodAffinity $podAffinity)
    {
        $this->podAffinity = $podAffinity;

        return $this;
    }

    /**
     * Describes pod anti-affinity scheduling rules (e.g. avoid putting this pod in the same node, zone,
     * etc. as some other pod(s)).
     */
    public function getPodAntiAffinity(): ?PodAntiAffinity
    {
        return $this->podAntiAffinity;
    }

    /**
     * Describes pod anti-affinity scheduling rules (e.g. avoid putting this pod in the same node, zone,
     * etc. as some other pod(s)).
     *
     * @return static
     */
    public function setPodAntiAffinity(PodAntiAffinity $podAntiAffinity)
    {
        $this->podAntiAffinity = $podAntiAffinity;

        return $this;
    }
}
