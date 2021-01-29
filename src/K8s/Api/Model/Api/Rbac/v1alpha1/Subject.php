<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.19.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Rbac\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * Subject contains a reference to the object or user identities a role binding applies to.  This can
 * either hold a direct API object reference, or a value for non-objects such as user and group names.
 */
class Subject
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string|null
     */
    protected $apiVersion = '';

    /**
     * @Kubernetes\Attribute("kind",isRequired=true)
     * @var string
     */
    protected $kind = null;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("namespace")
     * @var string|null
     */
    protected $namespace = null;

    /**
     * @param string $kind
     * @param string $name
     */
    public function __construct(string $kind, string $name)
    {
        $this->kind = $kind;
        $this->name = $name;
    }

    /**
     * APIVersion holds the API group and version of the referenced subject. Defaults to "v1" for
     * ServiceAccount subjects. Defaults to "rbac.authorization.k8s.io/v1alpha1" for User and Group
     * subjects.
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * APIVersion holds the API group and version of the referenced subject. Defaults to "v1" for
     * ServiceAccount subjects. Defaults to "rbac.authorization.k8s.io/v1alpha1" for User and Group
     * subjects.
     *
     * @return static
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * Kind of object being referenced. Values defined by this API group are "User", "Group", and
     * "ServiceAccount". If the Authorizer does not recognized the kind value, the Authorizer should report
     * an error.
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Kind of object being referenced. Values defined by this API group are "User", "Group", and
     * "ServiceAccount". If the Authorizer does not recognized the kind value, the Authorizer should report
     * an error.
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Name of the object being referenced.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the object being referenced.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Namespace of the referenced object.  If the object kind is non-namespace, such as "User" or "Group",
     * and this value is not empty the Authorizer should report an error.
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    /**
     * Namespace of the referenced object.  If the object kind is non-namespace, such as "User" or "Group",
     * and this value is not empty the Authorizer should report an error.
     *
     * @return static
     */
    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }
}
