<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.12.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Extensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * AllowedHostPath defines the host volume conditions that will be enabled by a policy for pods to use.
 * It requires the path prefix to be defined. Deprecated: use AllowedHostPath from policy API Group
 * instead.
 */
class AllowedHostPath
{
    /**
     * @Kubernetes\Attribute("pathPrefix")
     * @var string|null
     */
    protected $pathPrefix = null;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @param string|null $pathPrefix
     * @param bool|null $readOnly
     */
    public function __construct(?string $pathPrefix = null, ?bool $readOnly = null)
    {
        $this->pathPrefix = $pathPrefix;
        $this->readOnly = $readOnly;
    }

    /**
     * pathPrefix is the path prefix that the host volume must match. It does not support `*`. Trailing
     * slashes are trimmed when validating the path prefix with a host path.
     *
     * Examples: `/foo` would allow `/foo`, `/foo/` and `/foo/bar` `/foo` would not allow `/food` or
     * `/etc/foo`
     */
    public function getPathPrefix(): ?string
    {
        return $this->pathPrefix;
    }

    /**
     * pathPrefix is the path prefix that the host volume must match. It does not support `*`. Trailing
     * slashes are trimmed when validating the path prefix with a host path.
     *
     * Examples: `/foo` would allow `/foo`, `/foo/` and `/foo/bar` `/foo` would not allow `/food` or
     * `/etc/foo`
     *
     * @return static
     */
    public function setPathPrefix(string $pathPrefix)
    {
        $this->pathPrefix = $pathPrefix;

        return $this;
    }

    /**
     * when set to true, will allow host volumes matching the pathPrefix only if all volume mounts are
     * readOnly.
     */
    public function isReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * when set to true, will allow host volumes matching the pathPrefix only if all volume mounts are
     * readOnly.
     *
     * @return static
     */
    public function setIsReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }
}