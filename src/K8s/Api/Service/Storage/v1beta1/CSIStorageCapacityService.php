<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.0
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Storage\v1beta1;

use K8s\Api\Model\Api\Storage\v1beta1\CSIStorageCapacity;
use K8s\Api\Model\Api\Storage\v1beta1\CSIStorageCapacityList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class CSIStorageCapacityService
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
     * List or watch objects of kind CSIStorageCapacity
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#list-csistoragecapacity-v1beta1-storage-k8s-io
     */
    public function listStorageV1beta1ForAllNamespaces(array $query = [], $handler = null): ?CSIStorageCapacityList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = CSIStorageCapacityList::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/csistoragecapacities',
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
     * List or watch objects of kind CSIStorageCapacity
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#list-csistoragecapacity-v1beta1-storage-k8s-io
     */
    public function listStorageV1beta1Namespaced(array $query = [], $handler = null): ?CSIStorageCapacityList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = CSIStorageCapacityList::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/namespaces/{namespace}/csistoragecapacities',
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
     * Delete collection of CSIStorageCapacity
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#delete-collection-csistoragecapacity-v1beta1-storage-k8s-io
     */
    public function deleteStorageV1beta1CollectionNamespaced(array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/namespaces/{namespace}/csistoragecapacities',
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
     * Create a CSIStorageCapacity
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#create-csistoragecapacity-v1beta1-storage-k8s-io
     */
    public function createStorageV1beta1Namespaced(CSIStorageCapacity $cSIStorageCapacity, array $query = []): CSIStorageCapacity
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $cSIStorageCapacity;
        $options['model'] = CSIStorageCapacity::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/namespaces/{namespace}/csistoragecapacities',
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
     * Read the specified CSIStorageCapacity
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#read-csistoragecapacity-v1beta1-storage-k8s-io
     */
    public function readStorageV1beta1Namespaced(string $name, array $query = []): CSIStorageCapacity
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = CSIStorageCapacity::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/namespaces/{namespace}/csistoragecapacities/{name}',
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
     * Delete a CSIStorageCapacity
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#delete-csistoragecapacity-v1beta1-storage-k8s-io
     */
    public function deleteStorageV1beta1Namespaced(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/namespaces/{namespace}/csistoragecapacities/{name}',
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
     * Partially update the specified CSIStorageCapacity
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#patch-csistoragecapacity-v1beta1-storage-k8s-io
     */
    public function patchStorageV1beta1Namespaced(string $name, PatchInterface $patch, array $query = []): CSIStorageCapacity
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = CSIStorageCapacity::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/namespaces/{namespace}/csistoragecapacities/{name}',
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
     * Replace the specified CSIStorageCapacity
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#put-csistoragecapacity-v1beta1-storage-k8s-io
     */
    public function replaceStorageV1beta1Namespaced(string $name, CSIStorageCapacity $cSIStorageCapacity, array $query = []): CSIStorageCapacity
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $cSIStorageCapacity;
        $options['model'] = CSIStorageCapacity::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/namespaces/{namespace}/csistoragecapacities/{name}',
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
     * Watch individual changes to a list of CSIStorageCapacity. deprecated: use the 'watch' parameter with
     * a list operation instead.
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#watchlist-csistoragecapacity-v1beta1-storage-k8s-io
     */
    public function watchStorageV1beta1ListForAllNamespaces(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/watch/csistoragecapacities',
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
     * Watch individual changes to a list of CSIStorageCapacity. deprecated: use the 'watch' parameter with
     * a list operation instead.
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#watchlist-csistoragecapacity-v1beta1-storage-k8s-io
     */
    public function watchStorageV1beta1NamespacedList(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/watch/namespaces/{namespace}/csistoragecapacities',
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
     * Watch changes to an object of kind CSIStorageCapacity. deprecated: use the 'watch' parameter with a
     * list operation instead, filtered to a single item with the 'fieldSelector' parameter.
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#watch-csistoragecapacity-v1beta1-storage-k8s-io
     */
    public function watchStorageV1beta1Namespaced(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/watch/namespaces/{namespace}/csistoragecapacities/{name}',
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