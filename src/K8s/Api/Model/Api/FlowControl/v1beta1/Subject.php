<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.2
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\FlowControl\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * Subject matches the originator of a request, as identified by the request authentication system.
 * There are three ways of matching an originator; by user, group, or service account.
 */
class Subject
{
    /**
     * @Kubernetes\Attribute("group",type="model",model=GroupSubject::class)
     * @var GroupSubject|null
     */
    protected $group = null;

    /**
     * @Kubernetes\Attribute("kind",isRequired=true)
     * @var string
     */
    protected $kind;

    /**
     * @Kubernetes\Attribute("serviceAccount",type="model",model=ServiceAccountSubject::class)
     * @var ServiceAccountSubject|null
     */
    protected $serviceAccount = null;

    /**
     * @Kubernetes\Attribute("user",type="model",model=UserSubject::class)
     * @var UserSubject|null
     */
    protected $user = null;

    /**
     * @param string $kind
     */
    public function __construct(string $kind)
    {
        $this->kind = $kind;
    }

    /**
     * `group` matches based on user group name.
     */
    public function getGroup(): ?GroupSubject
    {
        return $this->group;
    }

    /**
     * `group` matches based on user group name.
     *
     * @return static
     */
    public function setGroup(GroupSubject $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * `kind` indicates which one of the other fields is non-empty. Required
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * `kind` indicates which one of the other fields is non-empty. Required
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * `serviceAccount` matches ServiceAccounts.
     */
    public function getServiceAccount(): ?ServiceAccountSubject
    {
        return $this->serviceAccount;
    }

    /**
     * `serviceAccount` matches ServiceAccounts.
     *
     * @return static
     */
    public function setServiceAccount(ServiceAccountSubject $serviceAccount)
    {
        $this->serviceAccount = $serviceAccount;

        return $this;
    }

    /**
     * `user` matches based on username.
     */
    public function getUser(): ?UserSubject
    {
        return $this->user;
    }

    /**
     * `user` matches based on username.
     *
     * @return static
     */
    public function setUser(UserSubject $user)
    {
        $this->user = $user;

        return $this;
    }
}
