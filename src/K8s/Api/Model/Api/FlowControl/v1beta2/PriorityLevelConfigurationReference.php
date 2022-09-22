<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.2
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\FlowControl\v1beta2;

use K8s\Core\Annotation as Kubernetes;

/**
 * PriorityLevelConfigurationReference contains information that points to the "request-priority" being
 * used.
 */
class PriorityLevelConfigurationReference
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
     * `name` is the name of the priority level configuration being referenced Required.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * `name` is the name of the priority level configuration being referenced Required.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}
