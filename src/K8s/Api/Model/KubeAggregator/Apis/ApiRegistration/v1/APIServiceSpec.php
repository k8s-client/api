<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.9
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\KubeAggregator\Apis\ApiRegistration\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * APIServiceSpec contains information for locating and communicating with a server. Only https is
 * supported, though you are able to disable certificate verification.
 */
class APIServiceSpec
{
    /**
     * @Kubernetes\Attribute("caBundle")
     * @var string|null
     */
    protected $caBundle = null;

    /**
     * @Kubernetes\Attribute("group")
     * @var string|null
     */
    protected $group = null;

    /**
     * @Kubernetes\Attribute("groupPriorityMinimum",isRequired=true)
     * @var int
     */
    protected $groupPriorityMinimum;

    /**
     * @Kubernetes\Attribute("insecureSkipTLSVerify")
     * @var bool|null
     */
    protected $insecureSkipTLSVerify = null;

    /**
     * @Kubernetes\Attribute("service",type="model",model=ServiceReference::class)
     * @var ServiceReference|null
     */
    protected $service = null;

    /**
     * @Kubernetes\Attribute("version")
     * @var string|null
     */
    protected $version = null;

    /**
     * @Kubernetes\Attribute("versionPriority",isRequired=true)
     * @var int
     */
    protected $versionPriority;

    /**
     * @param int $groupPriorityMinimum
     * @param int $versionPriority
     */
    public function __construct(int $groupPriorityMinimum, int $versionPriority)
    {
        $this->groupPriorityMinimum = $groupPriorityMinimum;
        $this->versionPriority = $versionPriority;
    }

    /**
     * CABundle is a PEM encoded CA bundle which will be used to validate an API server's serving
     * certificate. If unspecified, system trust roots on the apiserver are used.
     */
    public function getCaBundle(): ?string
    {
        return $this->caBundle;
    }

    /**
     * CABundle is a PEM encoded CA bundle which will be used to validate an API server's serving
     * certificate. If unspecified, system trust roots on the apiserver are used.
     *
     * @return static
     */
    public function setCaBundle(string $caBundle)
    {
        $this->caBundle = $caBundle;

        return $this;
    }

    /**
     * Group is the API group name this server hosts
     */
    public function getGroup(): ?string
    {
        return $this->group;
    }

    /**
     * Group is the API group name this server hosts
     *
     * @return static
     */
    public function setGroup(string $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * GroupPriorityMininum is the priority this group should have at least. Higher priority means that the
     * group is preferred by clients over lower priority ones. Note that other versions of this group might
     * specify even higher GroupPriorityMininum values such that the whole group gets a higher priority.
     * The primary sort is based on GroupPriorityMinimum, ordered highest number to lowest (20 before 10).
     * The secondary sort is based on the alphabetical comparison of the name of the object.  (v1.bar
     * before v1.foo) We'd recommend something like: *.k8s.io (except extensions) at 18000 and PaaSes
     * (OpenShift, Deis) are recommended to be in the 2000s
     */
    public function getGroupPriorityMinimum(): int
    {
        return $this->groupPriorityMinimum;
    }

    /**
     * GroupPriorityMininum is the priority this group should have at least. Higher priority means that the
     * group is preferred by clients over lower priority ones. Note that other versions of this group might
     * specify even higher GroupPriorityMininum values such that the whole group gets a higher priority.
     * The primary sort is based on GroupPriorityMinimum, ordered highest number to lowest (20 before 10).
     * The secondary sort is based on the alphabetical comparison of the name of the object.  (v1.bar
     * before v1.foo) We'd recommend something like: *.k8s.io (except extensions) at 18000 and PaaSes
     * (OpenShift, Deis) are recommended to be in the 2000s
     *
     * @return static
     */
    public function setGroupPriorityMinimum(int $groupPriorityMinimum)
    {
        $this->groupPriorityMinimum = $groupPriorityMinimum;

        return $this;
    }

    /**
     * InsecureSkipTLSVerify disables TLS certificate verification when communicating with this server.
     * This is strongly discouraged.  You should use the CABundle instead.
     */
    public function isInsecureSkipTLSVerify(): ?bool
    {
        return $this->insecureSkipTLSVerify;
    }

    /**
     * InsecureSkipTLSVerify disables TLS certificate verification when communicating with this server.
     * This is strongly discouraged.  You should use the CABundle instead.
     *
     * @return static
     */
    public function setIsInsecureSkipTLSVerify(bool $insecureSkipTLSVerify)
    {
        $this->insecureSkipTLSVerify = $insecureSkipTLSVerify;

        return $this;
    }

    /**
     * Service is a reference to the service for this API server.  It must communicate on port 443. If the
     * Service is nil, that means the handling for the API groupversion is handled locally on this server.
     * The call will simply delegate to the normal handler chain to be fulfilled.
     */
    public function getService(): ?ServiceReference
    {
        return $this->service;
    }

    /**
     * Service is a reference to the service for this API server.  It must communicate on port 443. If the
     * Service is nil, that means the handling for the API groupversion is handled locally on this server.
     * The call will simply delegate to the normal handler chain to be fulfilled.
     *
     * @return static
     */
    public function setService(ServiceReference $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Version is the API version this server hosts.  For example, "v1"
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Version is the API version this server hosts.  For example, "v1"
     *
     * @return static
     */
    public function setVersion(string $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * VersionPriority controls the ordering of this API version inside of its group.  Must be greater than
     * zero. The primary sort is based on VersionPriority, ordered highest to lowest (20 before 10). Since
     * it's inside of a group, the number can be small, probably in the 10s. In case of equal version
     * priorities, the version string will be used to compute the order inside a group. If the version
     * string is "kube-like", it will sort above non "kube-like" version strings, which are ordered
     * lexicographically. "Kube-like" versions start with a "v", then are followed by a number (the major
     * version), then optionally the string "alpha" or "beta" and another number (the minor version). These
     * are sorted first by GA > beta > alpha (where GA is a version with no suffix such as beta or alpha),
     * and then by comparing major version, then minor version. An example sorted list of versions: v10,
     * v2, v1, v11beta2, v10beta3, v3beta1, v12alpha1, v11alpha2, foo1, foo10.
     */
    public function getVersionPriority(): int
    {
        return $this->versionPriority;
    }

    /**
     * VersionPriority controls the ordering of this API version inside of its group.  Must be greater than
     * zero. The primary sort is based on VersionPriority, ordered highest to lowest (20 before 10). Since
     * it's inside of a group, the number can be small, probably in the 10s. In case of equal version
     * priorities, the version string will be used to compute the order inside a group. If the version
     * string is "kube-like", it will sort above non "kube-like" version strings, which are ordered
     * lexicographically. "Kube-like" versions start with a "v", then are followed by a number (the major
     * version), then optionally the string "alpha" or "beta" and another number (the minor version). These
     * are sorted first by GA > beta > alpha (where GA is a version with no suffix such as beta or alpha),
     * and then by comparing major version, then minor version. An example sorted list of versions: v10,
     * v2, v1, v11beta2, v10beta3, v3beta1, v12alpha1, v11alpha2, foo1, foo10.
     *
     * @return static
     */
    public function setVersionPriority(int $versionPriority)
    {
        $this->versionPriority = $versionPriority;

        return $this;
    }
}
