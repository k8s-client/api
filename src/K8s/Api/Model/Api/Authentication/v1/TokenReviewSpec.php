<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.12.10
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
 * TokenReviewSpec is a description of the token authentication request.
 */
class TokenReviewSpec
{
    /**
     * @Kubernetes\Attribute("token")
     * @var string|null
     */
    protected $token = null;

    /**
     * @param string|null $token
     */
    public function __construct(?string $token = null)
    {
        $this->token = $token;
    }

    /**
     * Token is the opaque bearer token.
     */
    public function getToken(): ?string
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
