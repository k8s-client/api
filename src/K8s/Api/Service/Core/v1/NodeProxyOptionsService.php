<?php

/**
 * This file was automatically generated by k8s/api-generator 0.8.1 for API version v1.13.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Core\v1;

use K8s\Core\Contract\ApiInterface;

class NodeProxyOptionsService
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
     * Connect GET requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     */
    public function connectGetNodeProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect DELETE requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     */
    public function connectDeleteNodeProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect POST requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     */
    public function connectPostNodeProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect PATCH requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     */
    public function connectPatchNodeProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect PUT requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     */
    public function connectPutNodeProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect OPTIONS requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     */
    public function connectOptionsNodeProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect HEAD requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     */
    public function connectHeadNodeProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect GET requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     */
    public function connectGetNodeProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect DELETE requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     */
    public function connectDeleteNodeProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect POST requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     */
    public function connectPostNodeProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect PATCH requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     */
    public function connectPatchNodeProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect PUT requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     */
    public function connectPutNodeProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect OPTIONS requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     */
    public function connectOptionsNodeProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect HEAD requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     */
    public function connectHeadNodeProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }
}
