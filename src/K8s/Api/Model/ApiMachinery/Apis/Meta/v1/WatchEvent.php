<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.13.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiMachinery\Apis\Meta\v1;

use K8s\Api\Model\ApiMachinery\Runtime\RawExtension;
use K8s\Core\Annotation as Kubernetes;

/**
 * Event represents a single event to a watched resource.
 *
 * @Kubernetes\Kind("WatchEvent",version="v1")
 */
class WatchEvent
{
    /**
     * @Kubernetes\Attribute("object",type="model",model=RawExtension::class,isRequired=true)
     * @var RawExtension
     */
    protected $object;

    /**
     * @Kubernetes\Attribute("type",isRequired=true)
     * @var string
     */
    protected $type;

    /**
     * @param RawExtension $object
     * @param string $type
     */
    public function __construct(RawExtension $object, string $type)
    {
        $this->object = $object;
        $this->type = $type;
    }

    /**
     * Object is:
     *  * If Type is Added or Modified: the new state of the object.
     *  * If Type is Deleted: the state of the object immediately before deletion.
     *  * If Type is Error: *Status is recommended; other types may make sense
     *    depending on context.
     */
    public function getObject(): RawExtension
    {
        return $this->object;
    }

    /**
     * Object is:
     *  * If Type is Added or Modified: the new state of the object.
     *  * If Type is Deleted: the state of the object immediately before deletion.
     *  * If Type is Error: *Status is recommended; other types may make sense
     *    depending on context.
     *
     * @return static
     */
    public function setObject(RawExtension $object)
    {
        $this->object = $object;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
