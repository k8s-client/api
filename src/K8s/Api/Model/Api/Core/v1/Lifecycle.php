<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.16.15
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
 * Lifecycle describes actions that the management system should take in response to container
 * lifecycle events. For the PostStart and PreStop lifecycle handlers, management of the container
 * blocks until the action is complete, unless the container process fails, in which case the handler
 * is aborted.
 */
class Lifecycle
{
    /**
     * @Kubernetes\Attribute("postStart",type="model",model=Handler::class)
     * @var Handler|null
     */
    protected $postStart = null;

    /**
     * @Kubernetes\Attribute("preStop",type="model",model=Handler::class)
     * @var Handler|null
     */
    protected $preStop = null;

    /**
     * @param Handler|null $postStart
     * @param Handler|null $preStop
     */
    public function __construct(?Handler $postStart = null, ?Handler $preStop = null)
    {
        $this->postStart = $postStart;
        $this->preStop = $preStop;
    }

    /**
     * PostStart is called immediately after a container is created. If the handler fails, the container is
     * terminated and restarted according to its restart policy. Other management of the container blocks
     * until the hook completes. More info:
     * https://kubernetes.io/docs/concepts/containers/container-lifecycle-hooks/#container-hooks
     */
    public function getPostStart(): ?Handler
    {
        return $this->postStart;
    }

    /**
     * PostStart is called immediately after a container is created. If the handler fails, the container is
     * terminated and restarted according to its restart policy. Other management of the container blocks
     * until the hook completes. More info:
     * https://kubernetes.io/docs/concepts/containers/container-lifecycle-hooks/#container-hooks
     *
     * @return static
     */
    public function setPostStart(Handler $postStart)
    {
        $this->postStart = $postStart;

        return $this;
    }

    /**
     * PreStop is called immediately before a container is terminated due to an API request or management
     * event such as liveness/startup probe failure, preemption, resource contention, etc. The handler is
     * not called if the container crashes or exits. The reason for termination is passed to the handler.
     * The Pod's termination grace period countdown begins before the PreStop hooked is executed.
     * Regardless of the outcome of the handler, the container will eventually terminate within the Pod's
     * termination grace period. Other management of the container blocks until the hook completes or until
     * the termination grace period is reached. More info:
     * https://kubernetes.io/docs/concepts/containers/container-lifecycle-hooks/#container-hooks
     */
    public function getPreStop(): ?Handler
    {
        return $this->preStop;
    }

    /**
     * PreStop is called immediately before a container is terminated due to an API request or management
     * event such as liveness/startup probe failure, preemption, resource contention, etc. The handler is
     * not called if the container crashes or exits. The reason for termination is passed to the handler.
     * The Pod's termination grace period countdown begins before the PreStop hooked is executed.
     * Regardless of the outcome of the handler, the container will eventually terminate within the Pod's
     * termination grace period. Other management of the container blocks until the hook completes or until
     * the termination grace period is reached. More info:
     * https://kubernetes.io/docs/concepts/containers/container-lifecycle-hooks/#container-hooks
     *
     * @return static
     */
    public function setPreStop(Handler $preStop)
    {
        $this->preStop = $preStop;

        return $this;
    }
}
