<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.20.4
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
 * ExecAction describes a "run in container" action.
 */
class ExecAction
{
    /**
     * @Kubernetes\Attribute("command")
     * @var string[]|null
     */
    protected $command = null;

    /**
     * @param string[]|null $command
     */
    public function __construct(?array $command = null)
    {
        $this->command = $command;
    }

    /**
     * Command is the command line to execute inside the container, the working directory for the command
     * is root ('/') in the container's filesystem. The command is simply exec'd, it is not run inside a
     * shell, so traditional shell instructions ('|', etc) won't work. To use a shell, you need to
     * explicitly call out to that shell. Exit status of 0 is treated as live/healthy and non-zero is
     * unhealthy.
     */
    public function getCommand(): ?array
    {
        return $this->command;
    }

    /**
     * Command is the command line to execute inside the container, the working directory for the command
     * is root ('/') in the container's filesystem. The command is simply exec'd, it is not run inside a
     * shell, so traditional shell instructions ('|', etc) won't work. To use a shell, you need to
     * explicitly call out to that shell. Exit status of 0 is treated as live/healthy and non-zero is
     * unhealthy.
     *
     * @return static
     */
    public function setCommand(array $command)
    {
        $this->command = $command;

        return $this;
    }
}
