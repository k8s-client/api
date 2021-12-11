<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.0
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
 * LifecycleHandler defines a specific action that should be taken in a lifecycle hook. One and only
 * one of the fields, except TCPSocket must be specified.
 */
class LifecycleHandler
{
    /**
     * @Kubernetes\Attribute("exec",type="model",model=ExecAction::class)
     * @var ExecAction|null
     */
    protected $exec = null;

    /**
     * @Kubernetes\Attribute("httpGet",type="model",model=HTTPGetAction::class)
     * @var HTTPGetAction|null
     */
    protected $httpGet = null;

    /**
     * @Kubernetes\Attribute("tcpSocket",type="model",model=TCPSocketAction::class)
     * @var TCPSocketAction|null
     */
    protected $tcpSocket = null;

    /**
     * @param ExecAction|null $exec
     * @param HTTPGetAction|null $httpGet
     * @param TCPSocketAction|null $tcpSocket
     */
    public function __construct(?ExecAction $exec = null, ?HTTPGetAction $httpGet = null, ?TCPSocketAction $tcpSocket = null)
    {
        $this->exec = $exec;
        $this->httpGet = $httpGet;
        $this->tcpSocket = $tcpSocket;
    }

    /**
     * Exec specifies the action to take.
     */
    public function getExec(): ?ExecAction
    {
        return $this->exec;
    }

    /**
     * Exec specifies the action to take.
     *
     * @return static
     */
    public function setExec(ExecAction $exec)
    {
        $this->exec = $exec;

        return $this;
    }

    /**
     * HTTPGet specifies the http request to perform.
     */
    public function getHttpGet(): ?HTTPGetAction
    {
        return $this->httpGet;
    }

    /**
     * HTTPGet specifies the http request to perform.
     *
     * @return static
     */
    public function setHttpGet(HTTPGetAction $httpGet)
    {
        $this->httpGet = $httpGet;

        return $this;
    }

    /**
     * Deprecated. TCPSocket is NOT supported as a LifecycleHandler and kept for the backward
     * compatibility. There are no validation of this field and lifecycle hooks will fail in runtime when
     * tcp handler is specified.
     */
    public function getTcpSocket(): ?TCPSocketAction
    {
        return $this->tcpSocket;
    }

    /**
     * Deprecated. TCPSocket is NOT supported as a LifecycleHandler and kept for the backward
     * compatibility. There are no validation of this field and lifecycle hooks will fail in runtime when
     * tcp handler is specified.
     *
     * @return static
     */
    public function setTcpSocket(TCPSocketAction $tcpSocket)
    {
        $this->tcpSocket = $tcpSocket;

        return $this;
    }
}