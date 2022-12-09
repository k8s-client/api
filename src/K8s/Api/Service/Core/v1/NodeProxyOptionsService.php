<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.17
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#connect-nodeproxyoptions-v1-core
     */
    public function connectGetNodeProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect DELETE requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#connect-nodeproxyoptions-v1-core
     */
    public function connectDeleteNodeProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect POST requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#connect-nodeproxyoptions-v1-core
     */
    public function connectPostNodeProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect PATCH requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#connect-nodeproxyoptions-v1-core
     */
    public function connectPatchNodeProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect PUT requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#connect-nodeproxyoptions-v1-core
     */
    public function connectPutNodeProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect OPTIONS requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#connect-nodeproxyoptions-v1-core
     */
    public function connectOptionsNodeProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'options';
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect HEAD requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#connect-nodeproxyoptions-v1-core
     */
    public function connectHeadNodeProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'head';
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect GET requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#connect-nodeproxyoptions-v1-core
     */
    public function connectGetNodeProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect DELETE requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#connect-nodeproxyoptions-v1-core
     */
    public function connectDeleteNodeProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect POST requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#connect-nodeproxyoptions-v1-core
     */
    public function connectPostNodeProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect PATCH requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#connect-nodeproxyoptions-v1-core
     */
    public function connectPatchNodeProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect PUT requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#connect-nodeproxyoptions-v1-core
     */
    public function connectPutNodeProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect OPTIONS requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#connect-nodeproxyoptions-v1-core
     */
    public function connectOptionsNodeProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'options';
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect HEAD requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#connect-nodeproxyoptions-v1-core
     */
    public function connectHeadNodeProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'head';
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }
}
