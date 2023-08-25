<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.17
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-serviceproxyoptions-v1-core
     */
    public function connectGetNamespacedServiceProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
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
     * Connect DELETE requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-serviceproxyoptions-v1-core
     */
    public function connectDeleteNamespacedServiceProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
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
     * Connect POST requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-serviceproxyoptions-v1-core
     */
    public function connectPostNamespacedServiceProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
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
     * Connect PATCH requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-serviceproxyoptions-v1-core
     */
    public function connectPatchNamespacedServiceProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
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
     * Connect PUT requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-serviceproxyoptions-v1-core
     */
    public function connectPutNamespacedServiceProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
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
     * Connect OPTIONS requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-serviceproxyoptions-v1-core
     */
    public function connectOptionsNamespacedServiceProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'options';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
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
     * Connect HEAD requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-serviceproxyoptions-v1-core
     */
    public function connectHeadNamespacedServiceProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'head';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
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
     * Connect GET requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-serviceproxyoptions-v1-core
     */
    public function connectGetNamespacedServiceProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
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
     * Connect DELETE requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-serviceproxyoptions-v1-core
     */
    public function connectDeleteNamespacedServiceProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
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
     * Connect POST requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-serviceproxyoptions-v1-core
     */
    public function connectPostNamespacedServiceProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
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
     * Connect PATCH requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-serviceproxyoptions-v1-core
     */
    public function connectPatchNamespacedServiceProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
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
     * Connect PUT requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-serviceproxyoptions-v1-core
     */
    public function connectPutNamespacedServiceProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
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
     * Connect OPTIONS requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-serviceproxyoptions-v1-core
     */
    public function connectOptionsNamespacedServiceProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'options';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
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
     * Connect HEAD requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#connect-serviceproxyoptions-v1-core
     */
    public function connectHeadNamespacedServiceProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'head';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
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
