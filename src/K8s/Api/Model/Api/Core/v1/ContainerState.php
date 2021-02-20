<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.18.16
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
 * ContainerState holds a possible state of container. Only one of its members may be specified. If
 * none of them is specified, the default one is ContainerStateWaiting.
 */
class ContainerState
{
    /**
     * @Kubernetes\Attribute("running",type="model",model=ContainerStateRunning::class)
     * @var ContainerStateRunning|null
     */
    protected $running = null;

    /**
     * @Kubernetes\Attribute("terminated",type="model",model=ContainerStateTerminated::class)
     * @var ContainerStateTerminated|null
     */
    protected $terminated = null;

    /**
     * @Kubernetes\Attribute("waiting",type="model",model=ContainerStateWaiting::class)
     * @var ContainerStateWaiting|null
     */
    protected $waiting = null;

    /**
     * @param ContainerStateRunning|null $running
     * @param ContainerStateTerminated|null $terminated
     * @param ContainerStateWaiting|null $waiting
     */
    public function __construct(
        ?ContainerStateRunning $running = null,
        ?ContainerStateTerminated $terminated = null,
        ?ContainerStateWaiting $waiting = null
    ) {
        $this->running = $running;
        $this->terminated = $terminated;
        $this->waiting = $waiting;
    }

    /**
     * Details about a running container
     */
    public function getRunning(): ?ContainerStateRunning
    {
        return $this->running;
    }

    /**
     * Details about a running container
     *
     * @return static
     */
    public function setRunning(ContainerStateRunning $running)
    {
        $this->running = $running;

        return $this;
    }

    /**
     * Details about a terminated container
     */
    public function getTerminated(): ?ContainerStateTerminated
    {
        return $this->terminated;
    }

    /**
     * Details about a terminated container
     *
     * @return static
     */
    public function setTerminated(ContainerStateTerminated $terminated)
    {
        $this->terminated = $terminated;

        return $this;
    }

    /**
     * Details about a waiting container
     */
    public function getWaiting(): ?ContainerStateWaiting
    {
        return $this->waiting;
    }

    /**
     * Details about a waiting container
     *
     * @return static
     */
    public function setWaiting(ContainerStateWaiting $waiting)
    {
        $this->waiting = $waiting;

        return $this;
    }
}
