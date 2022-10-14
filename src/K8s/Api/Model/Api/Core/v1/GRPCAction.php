<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

class GRPCAction
{
    /**
     * @Kubernetes\Attribute("port",isRequired=true)
     * @var int
     */
    protected $port;

    /**
     * @Kubernetes\Attribute("service")
     * @var string|null
     */
    protected $service = null;

    /**
     * @param int $port
     */
    public function __construct(int $port)
    {
        $this->port = $port;
    }

    /**
     * Port number of the gRPC service. Number must be in the range 1 to 65535.
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * Port number of the gRPC service. Number must be in the range 1 to 65535.
     *
     * @return static
     */
    public function setPort(int $port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Service is the name of the service to place in the gRPC HealthCheckRequest (see
     * https://github.com/grpc/grpc/blob/master/doc/health-checking.md).
     *
     * If this is not specified, the default behavior is defined by gRPC.
     */
    public function getService(): ?string
    {
        return $this->service;
    }

    /**
     * Service is the name of the service to place in the gRPC HealthCheckRequest (see
     * https://github.com/grpc/grpc/blob/master/doc/health-checking.md).
     *
     * If this is not specified, the default behavior is defined by gRPC.
     *
     * @return static
     */
    public function setService(string $service)
    {
        $this->service = $service;

        return $this;
    }
}
