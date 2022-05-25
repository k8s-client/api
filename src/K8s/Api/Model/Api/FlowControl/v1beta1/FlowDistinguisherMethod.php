<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.13
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
 * FlowDistinguisherMethod specifies the method of a flow distinguisher.
 */
class FlowDistinguisherMethod
{
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
     * `type` is the type of flow distinguisher method The supported types are "ByUser" and "ByNamespace".
     * Required.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * `type` is the type of flow distinguisher method The supported types are "ByUser" and "ByNamespace".
     * Required.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
