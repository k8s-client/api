<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.4
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Policy\v1;

use K8s\Api\Model\Api\Policy\v1\Eviction;
use K8s\Core\Contract\ApiInterface;

class EvictionService
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
     * Create eviction of a Pod
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#create-eviction-v1-policy
     */
    public function createCoreV1NamespacedPod(string $name, Eviction $eviction, array $query = []): Eviction
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $eviction;
        $options['model'] = Eviction::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/eviction',
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