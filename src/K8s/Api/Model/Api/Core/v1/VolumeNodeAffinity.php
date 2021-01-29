<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.12.10
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
 * VolumeNodeAffinity defines constraints that limit what nodes this volume can be accessed from.
 */
class VolumeNodeAffinity
{
    /**
     * @Kubernetes\Attribute("required",type="model",model=NodeSelector::class)
     * @var NodeSelector|null
     */
    protected $required = null;

    /**
     * @param NodeSelector|null $required
     */
    public function __construct(?NodeSelector $required = null)
    {
        $this->required = $required;
    }

    /**
     * Required specifies hard node constraints that must be met.
     */
    public function getRequired(): ?NodeSelector
    {
        return $this->required;
    }

    /**
     * Required specifies hard node constraints that must be met.
     *
     * @return static
     */
    public function setRequired(NodeSelector $required)
    {
        $this->required = $required;

        return $this;
    }
}
