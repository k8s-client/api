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

namespace K8s\Api\Model\Api\Authentication\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * UserInfo holds the information about the user needed to implement the user.Info interface.
 */
class UserInfo
{
    /**
     * @Kubernetes\Attribute("extra")
     * @var array|null
     */
    protected $extra;

    /**
     * @Kubernetes\Attribute("groups")
     * @var string[]|null
     */
    protected $groups;

    /**
     * @Kubernetes\Attribute("uid")
     * @var string|null
     */
    protected $uid;

    /**
     * @Kubernetes\Attribute("username")
     * @var string|null
     */
    protected $username;

    /**
     * @param array|null $extra
     * @param string[]|null $groups
     * @param string|null $uid
     * @param string|null $username
     */
    public function __construct(?array $extra = null, ?array $groups = null, ?string $uid = null, ?string $username = null)
    {
        $this->extra = $extra;
        $this->groups = $groups;
        $this->uid = $uid;
        $this->username = $username;
    }

    /**
     * Any additional information provided by the authenticator.
     */
    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * Any additional information provided by the authenticator.
     *
     * @return static
     */
    public function setExtra(array $extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * The names of groups this user is a part of.
     */
    public function getGroups(): ?array
    {
        return $this->groups;
    }

    /**
     * The names of groups this user is a part of.
     *
     * @return static
     */
    public function setGroups(array $groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * A unique value that identifies this user across time. If this user is deleted and another user by
     * the same name is added, they will have different UIDs.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * A unique value that identifies this user across time. If this user is deleted and another user by
     * the same name is added, they will have different UIDs.
     *
     * @return static
     */
    public function setUid(string $uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * The name that uniquely identifies this user among all active users.
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * The name that uniquely identifies this user among all active users.
     *
     * @return static
     */
    public function setUsername(string $username)
    {
        $this->username = $username;

        return $this;
    }
}