<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Extensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * describes the attributes of a scale subresource
 */
class ScaleSpec
{
    /**
     * @Kubernetes\Attribute("replicas")
     * @var int|null
     */
    protected $replicas = null;

    /**
     * @param int|null $replicas
     */
    public function __construct(?int $replicas = null)
    {
        $this->replicas = $replicas;
    }

    /**
     * desired number of instances for the scaled object.
     */
    public function getReplicas(): ?int
    {
        return $this->replicas;
    }

    /**
     * desired number of instances for the scaled object.
     *
     * @return static
     */
    public function setReplicas(int $replicas)
    {
        $this->replicas = $replicas;

        return $this;
    }
}
