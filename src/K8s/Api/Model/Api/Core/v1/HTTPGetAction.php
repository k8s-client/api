<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.20.4
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * HTTPGetAction describes an action based on HTTP Get requests.
 */
class HTTPGetAction
{
    /**
     * @Kubernetes\Attribute("host")
     * @var string|null
     */
    protected $host = null;

    /**
     * @Kubernetes\Attribute("httpHeaders",type="collection",model=HTTPHeader::class)
     * @var iterable|HTTPHeader[]|null
     */
    protected $httpHeaders = null;

    /**
     * @Kubernetes\Attribute("path")
     * @var string|null
     */
    protected $path = null;

    /**
     * @Kubernetes\Attribute("port",isRequired=true)
     * @var int|string
     */
    protected $port;

    /**
     * @Kubernetes\Attribute("scheme")
     * @var string|null
     */
    protected $scheme = null;

    /**
     * @param int|string $port
     */
    public function __construct($port)
    {
        $this->port = $port;
    }

    /**
     * Host name to connect to, defaults to the pod IP. You probably want to set "Host" in httpHeaders
     * instead.
     */
    public function getHost(): ?string
    {
        return $this->host;
    }

    /**
     * Host name to connect to, defaults to the pod IP. You probably want to set "Host" in httpHeaders
     * instead.
     *
     * @return static
     */
    public function setHost(string $host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Custom headers to set in the request. HTTP allows repeated headers.
     *
     * @return iterable|HTTPHeader[]
     */
    public function getHttpHeaders(): ?iterable
    {
        return $this->httpHeaders;
    }

    /**
     * Custom headers to set in the request. HTTP allows repeated headers.
     *
     * @return static
     */
    public function setHttpHeaders(iterable $httpHeaders)
    {
        $this->httpHeaders = $httpHeaders;

        return $this;
    }

    /**
     * @return static
     */
    public function addHttpHeaders(HTTPHeader $httpHeader)
    {
        if (!$this->httpHeaders) {
            $this->httpHeaders = new Collection();
        }
        $this->httpHeaders[] = $httpHeader;

        return $this;
    }

    /**
     * Path to access on the HTTP server.
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * Path to access on the HTTP server.
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Name or number of the port to access on the container. Number must be in the range 1 to 65535. Name
     * must be an IANA_SVC_NAME.
     *
     * @return int|string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Name or number of the port to access on the container. Number must be in the range 1 to 65535. Name
     * must be an IANA_SVC_NAME.
     *
     * @param int|string $port
     * @return static
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Scheme to use for connecting to the host. Defaults to HTTP.
     */
    public function getScheme(): ?string
    {
        return $this->scheme;
    }

    /**
     * Scheme to use for connecting to the host. Defaults to HTTP.
     *
     * @return static
     */
    public function setScheme(string $scheme)
    {
        $this->scheme = $scheme;

        return $this;
    }
}
