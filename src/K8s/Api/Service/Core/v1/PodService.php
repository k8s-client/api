<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.18.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Core\v1;

use K8s\Api\Model\Api\Core\v1\Pod;
use K8s\Api\Model\Api\Core\v1\PodList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class PodService
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
     * List or watch objects of kind Pod
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *   pretty
     *
     * @param array $query
     * @param callable|object|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#list-pod-v1-core
     */
    public function listNamespaced(array $query = [], $handler = null): ?PodList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = PodList::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods',
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
     * Delete collection of Pod
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   dryRun
     *   fieldSelector
     *   gracePeriodSeconds
     *   labelSelector
     *   limit
     *   orphanDependents
     *   propagationPolicy
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *   pretty
     *
     * @param array $query
     * @param callable|object|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#delete-collection-pod-v1-core
     */
    public function deleteCollectionNamespaced(array $query = [], $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods',
            [],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'deletecollection',
            $options
        );
    }

    /**
     * Create a Pod
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#create-pod-v1-core
     */
    public function createNamespaced(Pod $pod, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['body'] = $pod;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods',
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
     * Read the specified Pod
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#read-pod-v1-core
     */
    public function readNamespaced(string $name, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}',
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
     * Delete a Pod
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#delete-pod-v1-core
     */
    public function deleteNamespaced(string $name, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}',
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
     * Partially update the specified Pod
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#patch-pod-v1-core
     */
    public function patchNamespaced(string $name, PatchInterface $patch, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}',
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
     * Replace the specified Pod
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#put-pod-v1-core
     */
    public function replaceNamespaced(string $name, Pod $pod, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['body'] = $pod;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}',
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
     * Read log of the specified Pod
     *
     * Allowed query parameters:
     *   container
     *   follow
     *   insecureSkipTLSVerifyBackend
     *   limitBytes
     *   pretty
     *   previous
     *   sinceSeconds
     *   tailLines
     *   timestamps
     *
     * @param array $query
     * @param callable|object|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#read-pod-v1-core
     */
    public function readNamespacedLog(string $name, array $query = [], $handler = null): ?string
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/log',
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
     * Read status of the specified Pod
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#read-pod-v1-core
     */
    public function readNamespacedStatus(string $name, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/status',
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
     * Partially update status of the specified Pod
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#patch-pod-v1-core
     */
    public function patchNamespacedStatus(string $name, PatchInterface $patch, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/status',
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
     * Replace status of the specified Pod
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#put-pod-v1-core
     */
    public function replaceNamespacedStatus(string $name, Pod $pod, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['body'] = $pod;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/status',
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
     * List or watch objects of kind Pod
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#list-pod-v1-core
     */
    public function listForAllNamespaces(array $query = [], $handler = null): ?PodList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = PodList::class;
        $uri = $this->api->makeUri(
            '/api/v1/pods',
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
     * Watch individual changes to a list of Pod. deprecated: use the 'watch' parameter with a list
     * operation instead.
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#watchlist-pod-v1-core
     */
    public function watchNamespacedList(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/api/v1/watch/namespaces/{namespace}/pods',
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
     * Watch changes to an object of kind Pod. deprecated: use the 'watch' parameter with a list operation
     * instead, filtered to a single item with the 'fieldSelector' parameter.
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#watch-pod-v1-core
     */
    public function watchNamespaced(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/api/v1/watch/namespaces/{namespace}/pods/{name}',
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

    /**
     * Watch individual changes to a list of Pod. deprecated: use the 'watch' parameter with a list
     * operation instead.
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#watchlist-pod-v1-core
     */
    public function watchListForAllNamespaces(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/api/v1/watch/pods',
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
}
