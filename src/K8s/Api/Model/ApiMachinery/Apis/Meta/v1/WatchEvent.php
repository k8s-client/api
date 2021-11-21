<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.21.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiMachinery\Apis\Meta\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * Event represents a single event to a watched resource.
 *
 * @Kubernetes\Kind("WatchEvent",version="v1")
 */
class WatchEvent
{
    /**
     * @Kubernetes\Attribute("object",isRequired=true)
     * @var object
     */
    protected $object;

    /**
     * @Kubernetes\Attribute("type",isRequired=true)
     * @var string
     */
    protected $type;

    /**
     * @param object $object
     * @param string $type
     */
    public function __construct($object, string $type)
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
     *
     * @return object
     */
    public function getObject()
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
     * @param object $object
     * @return static
     */
    public function setObject($object)
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
