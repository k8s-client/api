<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.12
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
 * Probe describes a health check to be performed against a container to determine whether it is alive
 * or ready to receive traffic.
 */
class Probe
{
    /**
     * @Kubernetes\Attribute("exec",type="model",model=ExecAction::class)
     * @var ExecAction|null
     */
    protected $exec = null;

    /**
     * @Kubernetes\Attribute("failureThreshold")
     * @var int|null
     */
    protected $failureThreshold = null;

    /**
     * @Kubernetes\Attribute("httpGet",type="model",model=HTTPGetAction::class)
     * @var HTTPGetAction|null
     */
    protected $httpGet = null;

    /**
     * @Kubernetes\Attribute("initialDelaySeconds")
     * @var int|null
     */
    protected $initialDelaySeconds = null;

    /**
     * @Kubernetes\Attribute("periodSeconds")
     * @var int|null
     */
    protected $periodSeconds = null;

    /**
     * @Kubernetes\Attribute("successThreshold")
     * @var int|null
     */
    protected $successThreshold = null;

    /**
     * @Kubernetes\Attribute("tcpSocket",type="model",model=TCPSocketAction::class)
     * @var TCPSocketAction|null
     */
    protected $tcpSocket = null;

    /**
     * @Kubernetes\Attribute("terminationGracePeriodSeconds")
     * @var int|null
     */
    protected $terminationGracePeriodSeconds = null;

    /**
     * @Kubernetes\Attribute("timeoutSeconds")
     * @var int|null
     */
    protected $timeoutSeconds = null;

    /**
     * One and only one of the following should be specified. Exec specifies the action to take.
     */
    public function getExec(): ?ExecAction
    {
        return $this->exec;
    }

    /**
     * One and only one of the following should be specified. Exec specifies the action to take.
     *
     * @return static
     */
    public function setExec(ExecAction $exec)
    {
        $this->exec = $exec;

        return $this;
    }

    /**
     * Minimum consecutive failures for the probe to be considered failed after having succeeded. Defaults
     * to 3. Minimum value is 1.
     */
    public function getFailureThreshold(): ?int
    {
        return $this->failureThreshold;
    }

    /**
     * Minimum consecutive failures for the probe to be considered failed after having succeeded. Defaults
     * to 3. Minimum value is 1.
     *
     * @return static
     */
    public function setFailureThreshold(int $failureThreshold)
    {
        $this->failureThreshold = $failureThreshold;

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
     * Number of seconds after the container has started before liveness probes are initiated. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     */
    public function getInitialDelaySeconds(): ?int
    {
        return $this->initialDelaySeconds;
    }

    /**
     * Number of seconds after the container has started before liveness probes are initiated. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     *
     * @return static
     */
    public function setInitialDelaySeconds(int $initialDelaySeconds)
    {
        $this->initialDelaySeconds = $initialDelaySeconds;

        return $this;
    }

    /**
     * How often (in seconds) to perform the probe. Default to 10 seconds. Minimum value is 1.
     */
    public function getPeriodSeconds(): ?int
    {
        return $this->periodSeconds;
    }

    /**
     * How often (in seconds) to perform the probe. Default to 10 seconds. Minimum value is 1.
     *
     * @return static
     */
    public function setPeriodSeconds(int $periodSeconds)
    {
        $this->periodSeconds = $periodSeconds;

        return $this;
    }

    /**
     * Minimum consecutive successes for the probe to be considered successful after having failed.
     * Defaults to 1. Must be 1 for liveness and startup. Minimum value is 1.
     */
    public function getSuccessThreshold(): ?int
    {
        return $this->successThreshold;
    }

    /**
     * Minimum consecutive successes for the probe to be considered successful after having failed.
     * Defaults to 1. Must be 1 for liveness and startup. Minimum value is 1.
     *
     * @return static
     */
    public function setSuccessThreshold(int $successThreshold)
    {
        $this->successThreshold = $successThreshold;

        return $this;
    }

    /**
     * TCPSocket specifies an action involving a TCP port. TCP hooks not yet supported
     */
    public function getTcpSocket(): ?TCPSocketAction
    {
        return $this->tcpSocket;
    }

    /**
     * TCPSocket specifies an action involving a TCP port. TCP hooks not yet supported
     *
     * @return static
     */
    public function setTcpSocket(TCPSocketAction $tcpSocket)
    {
        $this->tcpSocket = $tcpSocket;

        return $this;
    }

    /**
     * Optional duration in seconds the pod needs to terminate gracefully upon probe failure. The grace
     * period is the duration in seconds after the processes running in the pod are sent a termination
     * signal and the time when the processes are forcibly halted with a kill signal. Set this value longer
     * than the expected cleanup time for your process. If this value is nil, the pod's
     * terminationGracePeriodSeconds will be used. Otherwise, this value overrides the value provided by
     * the pod spec. Value must be non-negative integer. The value zero indicates stop immediately via the
     * kill signal (no opportunity to shut down). This is a beta field and requires enabling
     * ProbeTerminationGracePeriod feature gate. Minimum value is 1. spec.terminationGracePeriodSeconds is
     * used if unset.
     */
    public function getTerminationGracePeriodSeconds(): ?int
    {
        return $this->terminationGracePeriodSeconds;
    }

    /**
     * Optional duration in seconds the pod needs to terminate gracefully upon probe failure. The grace
     * period is the duration in seconds after the processes running in the pod are sent a termination
     * signal and the time when the processes are forcibly halted with a kill signal. Set this value longer
     * than the expected cleanup time for your process. If this value is nil, the pod's
     * terminationGracePeriodSeconds will be used. Otherwise, this value overrides the value provided by
     * the pod spec. Value must be non-negative integer. The value zero indicates stop immediately via the
     * kill signal (no opportunity to shut down). This is a beta field and requires enabling
     * ProbeTerminationGracePeriod feature gate. Minimum value is 1. spec.terminationGracePeriodSeconds is
     * used if unset.
     *
     * @return static
     */
    public function setTerminationGracePeriodSeconds(int $terminationGracePeriodSeconds)
    {
        $this->terminationGracePeriodSeconds = $terminationGracePeriodSeconds;

        return $this;
    }

    /**
     * Number of seconds after which the probe times out. Defaults to 1 second. Minimum value is 1. More
     * info: https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     */
    public function getTimeoutSeconds(): ?int
    {
        return $this->timeoutSeconds;
    }

    /**
     * Number of seconds after which the probe times out. Defaults to 1 second. Minimum value is 1. More
     * info: https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     *
     * @return static
     */
    public function setTimeoutSeconds(int $timeoutSeconds)
    {
        $this->timeoutSeconds = $timeoutSeconds;

        return $this;
    }
}
