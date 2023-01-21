<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Core\v1;

use K8s\Core\Contract\ApiInterface;

class PodAttachOptionsService
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
     * Connect GET requests to attach of Pod
     *
     * Allowed query parameters:
     *   container
     *   stderr
     *   stdin
     *   stdout
     *   tty
     *
     * @param array $query
     * @param callable|object $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-podattachoptions-v1-core
     */
    public function connectGetNamespacedPodAttach(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/attach',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'exec',
            $handler
        );
    }

    /**
     * Connect POST requests to attach of Pod
     *
     * Allowed query parameters:
     *   container
     *   stderr
     *   stdin
     *   stdout
     *   tty
     *
     * @param array $query
     * @param callable|object $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-podattachoptions-v1-core
     */
    public function connectPostNamespacedPodAttach(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/attach',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'exec',
            $handler
        );
    }
}
