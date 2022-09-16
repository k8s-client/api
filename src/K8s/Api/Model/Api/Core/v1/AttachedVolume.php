<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.1
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
 * AttachedVolume describes a volume attached to a node
 */
class AttachedVolume
{
    /**
     * @Kubernetes\Attribute("devicePath",isRequired=true)
     * @var string
     */
    protected $devicePath;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @param string $devicePath
     * @param string $name
     */
    public function __construct(string $devicePath, string $name)
    {
        $this->devicePath = $devicePath;
        $this->name = $name;
    }

    /**
     * DevicePath represents the device path where the volume should be available
     */
    public function getDevicePath(): string
    {
        return $this->devicePath;
    }

    /**
     * DevicePath represents the device path where the volume should be available
     *
     * @return static
     */
    public function setDevicePath(string $devicePath)
    {
        $this->devicePath = $devicePath;

        return $this;
    }

    /**
     * Name of the attached volume
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the attached volume
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}
