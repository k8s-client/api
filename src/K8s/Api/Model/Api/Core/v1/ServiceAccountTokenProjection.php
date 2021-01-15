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

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * ServiceAccountTokenProjection represents a projected service account token volume. This projection
 * can be used to insert a service account token into the pods runtime filesystem for use against APIs
 * (Kubernetes API Server or otherwise).
 */
class ServiceAccountTokenProjection
{
    /**
     * @Kubernetes\Attribute("audience")
     * @var string|null
     */
    protected $audience;

    /**
     * @Kubernetes\Attribute("expirationSeconds")
     * @var int|null
     */
    protected $expirationSeconds;

    /**
     * @Kubernetes\Attribute("path",isRequired=true)
     * @var string
     */
    protected $path;

    /**
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * Audience is the intended audience of the token. A recipient of a token must identify itself with an
     * identifier specified in the audience of the token, and otherwise should reject the token. The
     * audience defaults to the identifier of the apiserver.
     */
    public function getAudience(): ?string
    {
        return $this->audience;
    }

    /**
     * Audience is the intended audience of the token. A recipient of a token must identify itself with an
     * identifier specified in the audience of the token, and otherwise should reject the token. The
     * audience defaults to the identifier of the apiserver.
     *
     * @return static
     */
    public function setAudience(string $audience)
    {
        $this->audience = $audience;

        return $this;
    }

    /**
     * ExpirationSeconds is the requested duration of validity of the service account token. As the token
     * approaches expiration, the kubelet volume plugin will proactively rotate the service account token.
     * The kubelet will start trying to rotate the token if the token is older than 80 percent of its time
     * to live or if the token is older than 24 hours.Defaults to 1 hour and must be at least 10 minutes.
     */
    public function getExpirationSeconds(): ?int
    {
        return $this->expirationSeconds;
    }

    /**
     * ExpirationSeconds is the requested duration of validity of the service account token. As the token
     * approaches expiration, the kubelet volume plugin will proactively rotate the service account token.
     * The kubelet will start trying to rotate the token if the token is older than 80 percent of its time
     * to live or if the token is older than 24 hours.Defaults to 1 hour and must be at least 10 minutes.
     *
     * @return static
     */
    public function setExpirationSeconds(int $expirationSeconds)
    {
        $this->expirationSeconds = $expirationSeconds;

        return $this;
    }

    /**
     * Path is the path relative to the mount point of the file to project the token into.
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Path is the path relative to the mount point of the file to project the token into.
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }
}