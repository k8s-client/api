<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Authentication\v1;

use K8s\Api\Model\Api\Authentication\v1\TokenRequest;
use K8s\Core\Contract\ApiInterface;

class TokenRequestService
{
    /** @var ApiInterface */
    private $api;

    /** @var string|null */
    private $namespace;

    public function __construct(ApiInterface $api)
    {
        $this->api = $api;
    }

    public function useNamespace(string $namespace): self
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * Create token of a ServiceAccount
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.25/#create-tokenrequest-v1-authentication-k8s-io
     */
    public function createCoreV1NamespacedServiceAccountToken(string $name, TokenRequest $tokenRequest, array $query = []): TokenRequest
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $tokenRequest;
        $options['model'] = TokenRequest::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/serviceaccounts/{name}/token',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'post',
            $options
        );
    }
}
