<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.6
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

/**
 * ContainerStateRunning is a running state of a container.
 */
class ContainerStateRunning
{
    /**
     * @Kubernetes\Attribute("startedAt",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $startedAt = null;

    /**
     * @param DateTimeInterface|null $startedAt
     */
    public function __construct(?DateTimeInterface $startedAt = null)
    {
        $this->startedAt = $startedAt;
    }

    /**
     * Time at which the container was last (re-)started
     */
    public function getStartedAt(): ?DateTimeInterface
    {
        return $this->startedAt;
    }

    /**
     * Time at which the container was last (re-)started
     *
     * @return static
     */
    public function setStartedAt(DateTimeInterface $startedAt)
    {
        $this->startedAt = $startedAt;

        return $this;
    }
}
