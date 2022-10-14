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

/**
 * Represents a Quobyte mount that lasts the lifetime of a pod. Quobyte volumes do not support
 * ownership management or SELinux relabeling.
 */
class QuobyteVolumeSource
{
    /**
     * @Kubernetes\Attribute("group")
     * @var string|null
     */
    protected $group = null;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @Kubernetes\Attribute("registry",isRequired=true)
     * @var string
     */
    protected $registry;

    /**
     * @Kubernetes\Attribute("tenant")
     * @var string|null
     */
    protected $tenant = null;

    /**
     * @Kubernetes\Attribute("user")
     * @var string|null
     */
    protected $user = null;

    /**
     * @Kubernetes\Attribute("volume",isRequired=true)
     * @var string
     */
    protected $volume;

    /**
     * @param string $registry
     * @param string $volume
     */
    public function __construct(string $registry, string $volume)
    {
        $this->registry = $registry;
        $this->volume = $volume;
    }

    /**
     * group to map volume access to Default is no group
     */
    public function getGroup(): ?string
    {
        return $this->group;
    }

    /**
     * group to map volume access to Default is no group
     *
     * @return static
     */
    public function setGroup(string $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * readOnly here will force the Quobyte volume to be mounted with read-only permissions. Defaults to
     * false.
     */
    public function isReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * readOnly here will force the Quobyte volume to be mounted with read-only permissions. Defaults to
     * false.
     *
     * @return static
     */
    public function setIsReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * registry represents a single or multiple Quobyte Registry services specified as a string as
     * host:port pair (multiple entries are separated with commas) which acts as the central registry for
     * volumes
     */
    public function getRegistry(): string
    {
        return $this->registry;
    }

    /**
     * registry represents a single or multiple Quobyte Registry services specified as a string as
     * host:port pair (multiple entries are separated with commas) which acts as the central registry for
     * volumes
     *
     * @return static
     */
    public function setRegistry(string $registry)
    {
        $this->registry = $registry;

        return $this;
    }

    /**
     * tenant owning the given Quobyte volume in the Backend Used with dynamically provisioned Quobyte
     * volumes, value is set by the plugin
     */
    public function getTenant(): ?string
    {
        return $this->tenant;
    }

    /**
     * tenant owning the given Quobyte volume in the Backend Used with dynamically provisioned Quobyte
     * volumes, value is set by the plugin
     *
     * @return static
     */
    public function setTenant(string $tenant)
    {
        $this->tenant = $tenant;

        return $this;
    }

    /**
     * user to map volume access to Defaults to serivceaccount user
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * user to map volume access to Defaults to serivceaccount user
     *
     * @return static
     */
    public function setUser(string $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * volume is a string that references an already created Quobyte volume by name.
     */
    public function getVolume(): string
    {
        return $this->volume;
    }

    /**
     * volume is a string that references an already created Quobyte volume by name.
     *
     * @return static
     */
    public function setVolume(string $volume)
    {
        $this->volume = $volume;

        return $this;
    }
}
