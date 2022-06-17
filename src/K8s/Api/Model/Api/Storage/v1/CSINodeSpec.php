<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.11
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Storage\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * CSINodeSpec holds information about the specification of all CSI drivers installed on a node
 */
class CSINodeSpec
{
    /**
     * @Kubernetes\Attribute("drivers",type="collection",model=CSINodeDriver::class,isRequired=true)
     * @var iterable|CSINodeDriver[]
     */
    protected $drivers;

    /**
     * @param iterable|CSINodeDriver[] $drivers
     */
    public function __construct(iterable $drivers)
    {
        $this->drivers = new Collection($drivers);
    }

    /**
     * drivers is a list of information of all CSI Drivers existing on a node. If all drivers in the list
     * are uninstalled, this can become empty.
     *
     * @return iterable|CSINodeDriver[]
     */
    public function getDrivers(): iterable
    {
        return $this->drivers;
    }

    /**
     * drivers is a list of information of all CSI Drivers existing on a node. If all drivers in the list
     * are uninstalled, this can become empty.
     *
     * @return static
     */
    public function setDrivers(iterable $drivers)
    {
        $this->drivers = $drivers;

        return $this;
    }

    /**
     * @return static
     */
    public function addDrivers(CSINodeDriver $driver)
    {
        if (!$this->drivers) {
            $this->drivers = new Collection();
        }
        $this->drivers[] = $driver;

        return $this;
    }
}
