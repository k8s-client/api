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

namespace K8s\Api\Service\Core\v1;

use K8s\Core\Contract\ApiInterface;

class PodPortForwardOptionsService
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
     * Connect GET requests to portforward of Pod
     *
     * Allowed query parameters:
     *   ports
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectGetNamespacedPodPortforward(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/portforward',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'portforward',
            $handler
        );
    }

    /**
     * Connect POST requests to portforward of Pod
     *
     * Allowed query parameters:
     *   ports
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPostNamespacedPodPortforward(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/portforward',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'portforward',
            $handler
        );
    }
}
