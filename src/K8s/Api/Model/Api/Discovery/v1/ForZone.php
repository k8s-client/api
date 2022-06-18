<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.2
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
 * ForZone provides information about which zones should consume this endpoint.
 */
class ForZone
{
    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * name represents the name of the zone.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name represents the name of the zone.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}
