<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.14
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
 * DaemonEndpoint contains information about a single Daemon endpoint.
 */
class DaemonEndpoint
{
    /**
     * @Kubernetes\Attribute("Port",isRequired=true)
     * @var int
     */
    protected $Port;

    /**
     * @param int $Port
     */
    public function __construct(int $Port)
    {
        $this->Port = $Port;
    }

    /**
     * Port number of the given endpoint.
     */
    public function getPort(): int
    {
        return $this->Port;
    }

    /**
     * Port number of the given endpoint.
     *
     * @return static
     */
    public function setPort(int $Port)
    {
        $this->Port = $Port;

        return $this;
    }
}
