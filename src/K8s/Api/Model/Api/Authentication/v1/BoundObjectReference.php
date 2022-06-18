<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.2
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
 * BoundObjectReference is a reference to an object that a token is bound to.
 */
class BoundObjectReference
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string|null
     */
    protected $apiVersion = '';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string|null
     */
    protected $kind = null;

    /**
     * @Kubernetes\Attribute("name")
     * @var string|null
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("uid")
     * @var string|null
     */
    protected $uid = null;

    /**
     * @param string|null $apiVersion
     * @param string|null $kind
     * @param string|null $name
     * @param string|null $uid
     */
    public function __construct(?string $apiVersion = null, ?string $kind = null, ?string $name = null, ?string $uid = null)
    {
        $this->apiVersion = $apiVersion;
        $this->kind = $kind;
        $this->name = $name;
        $this->uid = $uid;
    }

    /**
     * API version of the referent.
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * API version of the referent.
     *
     * @return static
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * Kind of the referent. Valid kinds are 'Pod' and 'Secret'.
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Kind of the referent. Valid kinds are 'Pod' and 'Secret'.
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Name of the referent.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the referent.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * UID of the referent.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * UID of the referent.
     *
     * @return static
     */
    public function setUid(string $uid)
    {
        $this->uid = $uid;

        return $this;
    }
}
