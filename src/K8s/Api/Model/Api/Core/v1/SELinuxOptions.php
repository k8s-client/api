<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.15.12
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
 * SELinuxOptions are the labels to be applied to the container
 */
class SELinuxOptions
{
    /**
     * @Kubernetes\Attribute("level")
     * @var string|null
     */
    protected $level;

    /**
     * @Kubernetes\Attribute("role")
     * @var string|null
     */
    protected $role;

    /**
     * @Kubernetes\Attribute("type")
     * @var string|null
     */
    protected $type;

    /**
     * @Kubernetes\Attribute("user")
     * @var string|null
     */
    protected $user;

    /**
     * @param string|null $level
     * @param string|null $role
     * @param string|null $type
     * @param string|null $user
     */
    public function __construct(?string $level = null, ?string $role = null, ?string $type = null, ?string $user = null)
    {
        $this->level = $level;
        $this->role = $role;
        $this->type = $type;
        $this->user = $user;
    }

    /**
     * Level is SELinux level label that applies to the container.
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    /**
     * Level is SELinux level label that applies to the container.
     *
     * @return static
     */
    public function setLevel(string $level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Role is a SELinux role label that applies to the container.
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * Role is a SELinux role label that applies to the container.
     *
     * @return static
     */
    public function setRole(string $role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Type is a SELinux type label that applies to the container.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type is a SELinux type label that applies to the container.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * User is a SELinux user label that applies to the container.
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * User is a SELinux user label that applies to the container.
     *
     * @return static
     */
    public function setUser(string $user)
    {
        $this->user = $user;

        return $this;
    }
}