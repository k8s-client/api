<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Core\v1;

use K8s\Core\Contract\ApiInterface;

class ServiceProxyOptionsService
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
     * Connect GET requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#connect-serviceproxyoptions-v1-core
     */
    public function connectGetNamespacedServiceProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect DELETE requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#connect-serviceproxyoptions-v1-core
     */
    public function connectDeleteNamespacedServiceProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect POST requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#connect-serviceproxyoptions-v1-core
     */
    public function connectPostNamespacedServiceProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect PATCH requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#connect-serviceproxyoptions-v1-core
     */
    public function connectPatchNamespacedServiceProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect PUT requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#connect-serviceproxyoptions-v1-core
     */
    public function connectPutNamespacedServiceProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect OPTIONS requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#connect-serviceproxyoptions-v1-core
     */
    public function connectOptionsNamespacedServiceProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect HEAD requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#connect-serviceproxyoptions-v1-core
     */
    public function connectHeadNamespacedServiceProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect GET requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#connect-serviceproxyoptions-v1-core
     */
    public function connectGetNamespacedServiceProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect DELETE requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#connect-serviceproxyoptions-v1-core
     */
    public function connectDeleteNamespacedServiceProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect POST requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#connect-serviceproxyoptions-v1-core
     */
    public function connectPostNamespacedServiceProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect PATCH requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#connect-serviceproxyoptions-v1-core
     */
    public function connectPatchNamespacedServiceProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect PUT requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#connect-serviceproxyoptions-v1-core
     */
    public function connectPutNamespacedServiceProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect OPTIONS requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#connect-serviceproxyoptions-v1-core
     */
    public function connectOptionsNamespacedServiceProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect HEAD requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#connect-serviceproxyoptions-v1-core
     */
    public function connectHeadNamespacedServiceProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }
}
