<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.4
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Policy\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * AllowedFlexVolume represents a single Flexvolume that is allowed to be used.
 */
class AllowedFlexVolume
{
    /**
     * @Kubernetes\Attribute("driver",isRequired=true)
     * @var string
     */
    protected $driver;

    /**
     * @param string $driver
     */
    public function __construct(string $driver)
    {
        $this->driver = $driver;
    }

    /**
     * driver is the name of the Flexvolume driver.
     */
    public function getDriver(): string
    {
        return $this->driver;
    }

    /**
     * driver is the name of the Flexvolume driver.
     *
     * @return static
     */
    public function setDriver(string $driver)
    {
        $this->driver = $driver;

        return $this;
    }
}
