<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.9
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Networking\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * HTTPIngressPath associates a path with a backend. Incoming urls matching the path are forwarded to
 * the backend.
 */
class HTTPIngressPath
{
    /**
     * @Kubernetes\Attribute("backend",type="model",model=IngressBackend::class,isRequired=true)
     * @var IngressBackend
     */
    protected $backend;

    /**
     * @Kubernetes\Attribute("path")
     * @var string|null
     */
    protected $path = null;

    /**
     * @Kubernetes\Attribute("pathType")
     * @var string|null
     */
    protected $pathType = null;

    /**
     * @param IngressBackend $backend
     */
    public function __construct(IngressBackend $backend)
    {
        $this->backend = $backend;
    }

    /**
     * Backend defines the referenced service endpoint to which the traffic will be forwarded to.
     */
    public function getBackend(): IngressBackend
    {
        return $this->backend;
    }

    /**
     * Backend defines the referenced service endpoint to which the traffic will be forwarded to.
     *
     * @return static
     */
    public function setBackend(IngressBackend $backend)
    {
        $this->backend = $backend;

        return $this;
    }

    /**
     * Path is matched against the path of an incoming request. Currently it can contain characters
     * disallowed from the conventional "path" part of a URL as defined by RFC 3986. Paths must begin with
     * a '/'. When unspecified, all paths from incoming requests are matched.
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * Path is matched against the path of an incoming request. Currently it can contain characters
     * disallowed from the conventional "path" part of a URL as defined by RFC 3986. Paths must begin with
     * a '/'. When unspecified, all paths from incoming requests are matched.
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * PathType determines the interpretation of the Path matching. PathType can be one of the following
     * values: * Exact: Matches the URL path exactly. * Prefix: Matches based on a URL path prefix split by
     * '/'. Matching is
     *   done on a path element by element basis. A path element refers is the
     *   list of labels in the path split by the '/' separator. A request is a
     *   match for path p if every p is an element-wise prefix of p of the
     *   request path. Note that if the last element of the path is a substring
     *   of the last element in request path, it is not a match (e.g. /foo/bar
     *   matches /foo/bar/baz, but does not match /foo/barbaz).
     * * ImplementationSpecific: Interpretation of the Path matching is up to
     *   the IngressClass. Implementations can treat this as a separate PathType
     *   or treat it identically to Prefix or Exact path types.
     * Implementations are required to support all path types.
     */
    public function getPathType(): ?string
    {
        return $this->pathType;
    }

    /**
     * PathType determines the interpretation of the Path matching. PathType can be one of the following
     * values: * Exact: Matches the URL path exactly. * Prefix: Matches based on a URL path prefix split by
     * '/'. Matching is
     *   done on a path element by element basis. A path element refers is the
     *   list of labels in the path split by the '/' separator. A request is a
     *   match for path p if every p is an element-wise prefix of p of the
     *   request path. Note that if the last element of the path is a substring
     *   of the last element in request path, it is not a match (e.g. /foo/bar
     *   matches /foo/bar/baz, but does not match /foo/barbaz).
     * * ImplementationSpecific: Interpretation of the Path matching is up to
     *   the IngressClass. Implementations can treat this as a separate PathType
     *   or treat it identically to Prefix or Exact path types.
     * Implementations are required to support all path types.
     *
     * @return static
     */
    public function setPathType(string $pathType)
    {
        $this->pathType = $pathType;

        return $this;
    }
}
