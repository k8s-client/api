<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.13.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiMachinery\Runtime;

use K8s\Core\Annotation as Kubernetes;

/**
 * RawExtension is used to hold extensions in external versions.
 *
 * To use this, make a field which has RawExtension as its type in your external, versioned struct, and
 * Object in your internal struct. You also need to register your various plugin types.
 *
 * // Internal package: type MyAPIObject struct {
 * 	runtime.TypeMeta `json:",inline"`
 * 	MyPlugin runtime.Object `json:"myPlugin"`
 * } type PluginA struct {
 * 	AOption string `json:"aOption"`
 * }
 *
 * // External package: type MyAPIObject struct {
 * 	runtime.TypeMeta `json:",inline"`
 * 	MyPlugin runtime.RawExtension `json:"myPlugin"`
 * } type PluginA struct {
 * 	AOption string `json:"aOption"`
 * }
 *
 * // On the wire, the JSON will look something like this: {
 * 	"kind":"MyAPIObject",
 * 	"apiVersion":"v1",
 * 	"myPlugin": {
 * 		"kind":"PluginA",
 * 		"aOption":"foo",
 * 	},
 * }
 *
 * So what happens? Decode first uses json or yaml to unmarshal the serialized data into your external
 * MyAPIObject. That causes the raw JSON to be stored, but not unpacked. The next step is to copy
 * (using pkg/conversion) into the internal struct. The runtime package's DefaultScheme has conversion
 * functions installed which will unpack the JSON stored in RawExtension, turning it into the correct
 * object type, and storing it in the Object. (TODO: In the case where the object is of an unknown
 * type, a runtime.Unknown object will be created and stored.)
 */
class RawExtension
{
    /**
     * @Kubernetes\Attribute("Raw",isRequired=true)
     * @var string
     */
    protected $Raw = null;

    /**
     * @param string $Raw
     */
    public function __construct(string $Raw)
    {
        $this->Raw = $Raw;
    }

    /**
     * Raw is the underlying serialization of this object.
     */
    public function getRaw(): string
    {
        return $this->Raw;
    }

    /**
     * Raw is the underlying serialization of this object.
     *
     * @return static
     */
    public function setRaw(string $Raw)
    {
        $this->Raw = $Raw;

        return $this;
    }
}
