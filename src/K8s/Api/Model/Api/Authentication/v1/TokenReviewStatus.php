<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.22.2
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
 * TokenReviewStatus is the result of the token authentication request.
 */
class TokenReviewStatus
{
    /**
     * @Kubernetes\Attribute("audiences")
     * @var string[]|null
     */
    protected $audiences = null;

    /**
     * @Kubernetes\Attribute("authenticated")
     * @var bool|null
     */
    protected $authenticated = null;

    /**
     * @Kubernetes\Attribute("error")
     * @var string|null
     */
    protected $error = null;

    /**
     * @Kubernetes\Attribute("user",type="model",model=UserInfo::class)
     * @var UserInfo|null
     */
    protected $user = null;

    /**
     * @param string[]|null $audiences
     * @param bool|null $authenticated
     * @param string|null $error
     * @param UserInfo|null $user
     */
    public function __construct(?array $audiences = null, ?bool $authenticated = null, ?string $error = null, ?UserInfo $user = null)
    {
        $this->audiences = $audiences;
        $this->authenticated = $authenticated;
        $this->error = $error;
        $this->user = $user;
    }

    /**
     * Audiences are audience identifiers chosen by the authenticator that are compatible with both the
     * TokenReview and token. An identifier is any identifier in the intersection of the TokenReviewSpec
     * audiences and the token's audiences. A client of the TokenReview API that sets the spec.audiences
     * field should validate that a compatible audience identifier is returned in the status.audiences
     * field to ensure that the TokenReview server is audience aware. If a TokenReview returns an empty
     * status.audience field where status.authenticated is "true", the token is valid against the audience
     * of the Kubernetes API server.
     */
    public function getAudiences(): ?array
    {
        return $this->audiences;
    }

    /**
     * Audiences are audience identifiers chosen by the authenticator that are compatible with both the
     * TokenReview and token. An identifier is any identifier in the intersection of the TokenReviewSpec
     * audiences and the token's audiences. A client of the TokenReview API that sets the spec.audiences
     * field should validate that a compatible audience identifier is returned in the status.audiences
     * field to ensure that the TokenReview server is audience aware. If a TokenReview returns an empty
     * status.audience field where status.authenticated is "true", the token is valid against the audience
     * of the Kubernetes API server.
     *
     * @return static
     */
    public function setAudiences(array $audiences)
    {
        $this->audiences = $audiences;

        return $this;
    }

    /**
     * Authenticated indicates that the token was associated with a known user.
     */
    public function isAuthenticated(): ?bool
    {
        return $this->authenticated;
    }

    /**
     * Authenticated indicates that the token was associated with a known user.
     *
     * @return static
     */
    public function setIsAuthenticated(bool $authenticated)
    {
        $this->authenticated = $authenticated;

        return $this;
    }

    /**
     * Error indicates that the token couldn't be checked
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * Error indicates that the token couldn't be checked
     *
     * @return static
     */
    public function setError(string $error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * User is the UserInfo associated with the provided token.
     */
    public function getUser(): ?UserInfo
    {
        return $this->user;
    }

    /**
     * User is the UserInfo associated with the provided token.
     *
     * @return static
     */
    public function setUser(UserInfo $user)
    {
        $this->user = $user;

        return $this;
    }
}
