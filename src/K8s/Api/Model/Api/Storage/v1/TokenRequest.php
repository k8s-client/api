<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Storage\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * TokenRequest contains parameters of a service account token.
 */
class TokenRequest
{
    /**
     * @Kubernetes\Attribute("audience",isRequired=true)
     * @var string
     */
    protected $audience;

    /**
     * @Kubernetes\Attribute("expirationSeconds")
     * @var int|null
     */
    protected $expirationSeconds = null;

    /**
     * @param string $audience
     */
    public function __construct(string $audience)
    {
        $this->audience = $audience;
    }

    /**
     * Audience is the intended audience of the token in "TokenRequestSpec". It will default to the
     * audiences of kube apiserver.
     */
    public function getAudience(): string
    {
        return $this->audience;
    }

    /**
     * Audience is the intended audience of the token in "TokenRequestSpec". It will default to the
     * audiences of kube apiserver.
     *
     * @return static
     */
    public function setAudience(string $audience)
    {
        $this->audience = $audience;

        return $this;
    }

    /**
     * ExpirationSeconds is the duration of validity of the token in "TokenRequestSpec". It has the same
     * default value of "ExpirationSeconds" in "TokenRequestSpec".
     */
    public function getExpirationSeconds(): ?int
    {
        return $this->expirationSeconds;
    }

    /**
     * ExpirationSeconds is the duration of validity of the token in "TokenRequestSpec". It has the same
     * default value of "ExpirationSeconds" in "TokenRequestSpec".
     *
     * @return static
     */
    public function setExpirationSeconds(int $expirationSeconds)
    {
        $this->expirationSeconds = $expirationSeconds;

        return $this;
    }
}
