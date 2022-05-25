<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.13
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Core\v1;

use K8s\Api\Model\Api\Core\v1\PersistentVolumeClaim;
use K8s\Api\Model\Api\Core\v1\PersistentVolumeClaimList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class PersistentVolumeClaimService
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
     * List or watch objects of kind PersistentVolumeClaim
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   resourceVersion
     *   resourceVersionMatch
     *   timeoutSeconds
     *   watch
     *   pretty
     *
     * @param array $query
     * @param callable|object|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#list-persistentvolumeclaim-v1-core
     */
    public function listNamespaced(array $query = [], $handler = null): ?PersistentVolumeClaimList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = PersistentVolumeClaimList::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/persistentvolumeclaims',
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
     * Delete collection of PersistentVolumeClaim
     *
     * Allowed query parameters:
     *   continue
     *   dryRun
     *   fieldSelector
     *   gracePeriodSeconds
     *   labelSelector
     *   limit
     *   orphanDependents
     *   propagationPolicy
     *   resourceVersion
     *   resourceVersionMatch
     *   timeoutSeconds
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#delete-collection-persistentvolumeclaim-v1-core
     */
    public function deleteCollectionNamespaced(array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/persistentvolumeclaims',
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
     * Create a PersistentVolumeClaim
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#create-persistentvolumeclaim-v1-core
     */
    public function createNamespaced(PersistentVolumeClaim $persistentVolumeClaim, array $query = []): PersistentVolumeClaim
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $persistentVolumeClaim;
        $options['model'] = PersistentVolumeClaim::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/persistentvolumeclaims',
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
     * Read the specified PersistentVolumeClaim
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#read-persistentvolumeclaim-v1-core
     */
    public function readNamespaced(string $name, array $query = []): PersistentVolumeClaim
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = PersistentVolumeClaim::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}',
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
     * Delete a PersistentVolumeClaim
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#delete-persistentvolumeclaim-v1-core
     */
    public function deleteNamespaced(string $name, array $query = []): PersistentVolumeClaim
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = PersistentVolumeClaim::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}',
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
     * Partially update the specified PersistentVolumeClaim
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#patch-persistentvolumeclaim-v1-core
     */
    public function patchNamespaced(string $name, PatchInterface $patch, array $query = []): PersistentVolumeClaim
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = PersistentVolumeClaim::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}',
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
     * Replace the specified PersistentVolumeClaim
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#put-persistentvolumeclaim-v1-core
     */
    public function replaceNamespaced(string $name, PersistentVolumeClaim $persistentVolumeClaim, array $query = []): PersistentVolumeClaim
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $persistentVolumeClaim;
        $options['model'] = PersistentVolumeClaim::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}',
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
     * Read status of the specified PersistentVolumeClaim
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#read-persistentvolumeclaim-v1-core
     */
    public function readNamespacedStatus(string $name, array $query = []): PersistentVolumeClaim
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = PersistentVolumeClaim::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}/status',
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
     * Partially update status of the specified PersistentVolumeClaim
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#patch-persistentvolumeclaim-v1-core
     */
    public function patchNamespacedStatus(string $name, PatchInterface $patch, array $query = []): PersistentVolumeClaim
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = PersistentVolumeClaim::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}/status',
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
     * Replace status of the specified PersistentVolumeClaim
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#put-persistentvolumeclaim-v1-core
     */
    public function replaceNamespacedStatus(string $name, PersistentVolumeClaim $persistentVolumeClaim, array $query = []): PersistentVolumeClaim
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $persistentVolumeClaim;
        $options['model'] = PersistentVolumeClaim::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}/status',
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
     * List or watch objects of kind PersistentVolumeClaim
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   resourceVersionMatch
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#list-persistentvolumeclaim-v1-core
     */
    public function listForAllNamespaces(array $query = [], $handler = null): ?PersistentVolumeClaimList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = PersistentVolumeClaimList::class;
        $uri = $this->api->makeUri(
            '/api/v1/persistentvolumeclaims',
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
     * Watch individual changes to a list of PersistentVolumeClaim. deprecated: use the 'watch' parameter
     * with a list operation instead.
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   resourceVersionMatch
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#watchlist-persistentvolumeclaim-v1-core
     */
    public function watchNamespacedList(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/api/v1/watch/namespaces/{namespace}/persistentvolumeclaims',
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
     * Watch changes to an object of kind PersistentVolumeClaim. deprecated: use the 'watch' parameter with
     * a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   resourceVersionMatch
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#watch-persistentvolumeclaim-v1-core
     */
    public function watchNamespaced(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/api/v1/watch/namespaces/{namespace}/persistentvolumeclaims/{name}',
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
     * Watch individual changes to a list of PersistentVolumeClaim. deprecated: use the 'watch' parameter
     * with a list operation instead.
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   resourceVersionMatch
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#watchlist-persistentvolumeclaim-v1-core
     */
    public function watchListForAllNamespaces(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/api/v1/watch/persistentvolumeclaims',
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
