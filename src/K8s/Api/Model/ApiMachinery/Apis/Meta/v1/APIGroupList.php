<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.6
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiMachinery\Apis\Meta\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * APIGroupList is a list of APIGroup, to allow clients to discover the API at /apis.
 *
 * @Kubernetes\Kind("APIGroupList",version="v1")
 */
class APIGroupList
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string|null
     */
    protected $apiVersion = 'v1';

    /**
     * @Kubernetes\Attribute("groups",type="collection",model=APIGroup::class,isRequired=true)
     * @var iterable|APIGroup[]
     */
    protected $groups;

    /**
     * @Kubernetes\Attribute("kind")
     * @var string|null
     */
    protected $kind = 'APIGroupList';

    /**
     * @param iterable|APIGroup[] $groups
     */
    public function __construct(iterable $groups)
    {
        $this->groups = new Collection($groups);
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @return static
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * groups is a list of APIGroup.
     *
     * @return iterable|APIGroup[]
     */
    public function getGroups(): iterable
    {
        return $this->groups;
    }

    /**
     * groups is a list of APIGroup.
     *
     * @return static
     */
    public function setGroups(iterable $groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * @return static
     */
    public function addGroups(APIGroup $group)
    {
        if (!$this->groups) {
            $this->groups = new Collection();
        }
        $this->groups[] = $group;

        return $this;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }
}
