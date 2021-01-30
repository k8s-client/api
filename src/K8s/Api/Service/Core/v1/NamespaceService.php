<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.12.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Core\v1;

use K8s\Api\Model\Api\Core\v1\K8sNamespace;
use K8s\Api\Model\Api\Core\v1\NamespaceList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\DeleteOptions;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

/**
 * Namespace provides a scope for Names. Use of multiple namespaces is optional.
 */
class NamespaceService
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
     * List or watch objects of kind Namespace
     *
     * Allowed query parameters:
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *   includeUninitialized
     *   pretty
     *
     * @param array $query
     * @param callable|null $handler
     */
    public function list(array $query = [], ?callable $handler = null): ?NamespaceList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = NamespaceList::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces',
            [],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'list',
            $options
        );
    }

    /**
     * Create a Namespace
     *
     * Allowed query parameters:
     *   dryRun
     *   includeUninitialized
     *   pretty
     *
     * @param array $query
     */
    public function create(K8sNamespace $k8sNamespace, array $query = []): K8sNamespace
    {
        $options['query'] = $query;
        $options['body'] = $k8sNamespace;
        $options['model'] = K8sNamespace::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces',
            [],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'post',
            $options
        );
    }

    /**
     * Read the specified Namespace
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     */
    public function read(string $name, array $query = []): K8sNamespace
    {
        $options['query'] = $query;
        $options['model'] = K8sNamespace::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{name}',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'get',
            $options
        );
    }

    /**
     * Delete a Namespace
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     */
    public function delete(string $name, DeleteOptions $deleteOptions, array $query = []): Status
    {
        $options['query'] = $query;
        $options['body'] = $deleteOptions;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{name}',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'delete',
            $options
        );
    }

    /**
     * Partially update the specified Namespace
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function patch(string $name, PatchInterface $patch, array $query = []): K8sNamespace
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = K8sNamespace::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{name}',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'patch',
            $options
        );
    }

    /**
     * Replace the specified Namespace
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function replace(string $name, K8sNamespace $k8sNamespace, array $query = []): K8sNamespace
    {
        $options['query'] = $query;
        $options['body'] = $k8sNamespace;
        $options['model'] = K8sNamespace::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{name}',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'put',
            $options
        );
    }

    /**
     * Replace finalize of the specified Namespace
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function replaceFinalize(string $name, K8sNamespace $k8sNamespace, array $query = []): K8sNamespace
    {
        $options['query'] = $query;
        $options['body'] = $k8sNamespace;
        $options['model'] = K8sNamespace::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{name}/finalize',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'put',
            $options
        );
    }

    /**
     * Read status of the specified Namespace
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function readStatus(string $name, array $query = []): K8sNamespace
    {
        $options['query'] = $query;
        $options['model'] = K8sNamespace::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{name}/status',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'get',
            $options
        );
    }

    /**
     * Partially update status of the specified Namespace
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function patchStatus(string $name, PatchInterface $patch, array $query = []): K8sNamespace
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = K8sNamespace::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{name}/status',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'patch',
            $options
        );
    }

    /**
     * Replace status of the specified Namespace
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function replaceStatus(string $name, K8sNamespace $k8sNamespace, array $query = []): K8sNamespace
    {
        $options['query'] = $query;
        $options['body'] = $k8sNamespace;
        $options['model'] = K8sNamespace::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{name}/status',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'put',
            $options
        );
    }

    /**
     * Watch individual changes to a list of Namespace. deprecated: use the 'watch' parameter with a list
     * operation instead.
     *
     * Allowed query parameters:
     *   continue
     *   fieldSelector
     *   includeUninitialized
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     */
    public function watchList(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/api/v1/watch/namespaces',
            [],
            $query,
            $this->namespace
        );

        $this->api->executeHttp(
            $uri,
            'watchlist',
            $options
        );
    }

    /**
     * Watch changes to an object of kind Namespace. deprecated: use the 'watch' parameter with a list
     * operation instead, filtered to a single item with the 'fieldSelector' parameter.
     *
     * Allowed query parameters:
     *   continue
     *   fieldSelector
     *   includeUninitialized
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     */
    public function watch(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/api/v1/watch/namespaces/{name}',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeHttp(
            $uri,
            'watch',
            $options
        );
    }
}
