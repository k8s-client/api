<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.20.2
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Authorization\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * SubjectAccessReviewSpec is a description of the access request.  Exactly one of
 * ResourceAuthorizationAttributes and NonResourceAuthorizationAttributes must be set
 */
class SubjectAccessReviewSpec
{
    /**
     * @Kubernetes\Attribute("extra")
     * @var array|null
     */
    protected $extra = null;

    /**
     * @Kubernetes\Attribute("group")
     * @var string[]|null
     */
    protected $group = null;

    /**
     * @Kubernetes\Attribute("nonResourceAttributes",type="model",model=NonResourceAttributes::class)
     * @var NonResourceAttributes|null
     */
    protected $nonResourceAttributes = null;

    /**
     * @Kubernetes\Attribute("resourceAttributes",type="model",model=ResourceAttributes::class)
     * @var ResourceAttributes|null
     */
    protected $resourceAttributes = null;

    /**
     * @Kubernetes\Attribute("uid")
     * @var string|null
     */
    protected $uid = null;

    /**
     * @Kubernetes\Attribute("user")
     * @var string|null
     */
    protected $user = null;

    /**
     * Extra corresponds to the user.Info.GetExtra() method from the authenticator.  Since that is input to
     * the authorizer it needs a reflection here.
     */
    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * Extra corresponds to the user.Info.GetExtra() method from the authenticator.  Since that is input to
     * the authorizer it needs a reflection here.
     *
     * @return static
     */
    public function setExtra(array $extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Groups is the groups you're testing for.
     */
    public function getGroup(): ?array
    {
        return $this->group;
    }

    /**
     * Groups is the groups you're testing for.
     *
     * @return static
     */
    public function setGroup(array $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * NonResourceAttributes describes information for a non-resource access request
     */
    public function getNonResourceAttributes(): ?NonResourceAttributes
    {
        return $this->nonResourceAttributes;
    }

    /**
     * NonResourceAttributes describes information for a non-resource access request
     *
     * @return static
     */
    public function setNonResourceAttributes(NonResourceAttributes $nonResourceAttributes)
    {
        $this->nonResourceAttributes = $nonResourceAttributes;

        return $this;
    }

    /**
     * ResourceAuthorizationAttributes describes information for a resource access request
     */
    public function getResourceAttributes(): ?ResourceAttributes
    {
        return $this->resourceAttributes;
    }

    /**
     * ResourceAuthorizationAttributes describes information for a resource access request
     *
     * @return static
     */
    public function setResourceAttributes(ResourceAttributes $resourceAttributes)
    {
        $this->resourceAttributes = $resourceAttributes;

        return $this;
    }

    /**
     * UID information about the requesting user.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * UID information about the requesting user.
     *
     * @return static
     */
    public function setUid(string $uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * User is the user you're testing for. If you specify "User" but not "Group", then is it interpreted
     * as "What if User were not a member of any groups
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * User is the user you're testing for. If you specify "User" but not "Group", then is it interpreted
     * as "What if User were not a member of any groups
     *
     * @return static
     */
    public function setUser(string $user)
    {
        $this->user = $user;

        return $this;
    }
}
