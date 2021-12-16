<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.20.14
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Authentication\v1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

/**
 * TokenRequestStatus is the result of a token request.
 */
class TokenRequestStatus
{
    /**
     * @Kubernetes\Attribute("expirationTimestamp",type="datetime",isRequired=true)
     * @var DateTimeInterface
     */
    protected $expirationTimestamp;

    /**
     * @Kubernetes\Attribute("token",isRequired=true)
     * @var string
     */
    protected $token;

    /**
     * @param DateTimeInterface $expirationTimestamp
     * @param string $token
     */
    public function __construct(DateTimeInterface $expirationTimestamp, string $token)
    {
        $this->expirationTimestamp = $expirationTimestamp;
        $this->token = $token;
    }

    /**
     * ExpirationTimestamp is the time of expiration of the returned token.
     */
    public function getExpirationTimestamp(): DateTimeInterface
    {
        return $this->expirationTimestamp;
    }

    /**
     * ExpirationTimestamp is the time of expiration of the returned token.
     *
     * @return static
     */
    public function setExpirationTimestamp(DateTimeInterface $expirationTimestamp)
    {
        $this->expirationTimestamp = $expirationTimestamp;

        return $this;
    }

    /**
     * Token is the opaque bearer token.
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Token is the opaque bearer token.
     *
     * @return static
     */
    public function setToken(string $token)
    {
        $this->token = $token;

        return $this;
    }
}
