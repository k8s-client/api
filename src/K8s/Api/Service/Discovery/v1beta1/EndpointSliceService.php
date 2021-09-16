<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.22.2
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Discovery\v1beta1;

use K8s\Api\Model\Api\Discovery\v1beta1\EndpointSlice;
use K8s\Api\Model\Api\Discovery\v1beta1\EndpointSliceList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class EndpointSliceService
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
     * List or watch objects of kind EndpointSlice
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#list-endpointslice-v1beta1-discovery-k8s-io
     */
    public function listDiscoveryV1beta1ForAllNamespaces(array $query = [], $handler = null): ?EndpointSliceList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = EndpointSliceList::class;
        $uri = $this->api->makeUri(
            '/apis/discovery.k8s.io/v1beta1/endpointslices',
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
     * List or watch objects of kind EndpointSlice
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#list-endpointslice-v1beta1-discovery-k8s-io
     */
    public function listDiscoveryV1beta1Namespaced(array $query = [], $handler = null): ?EndpointSliceList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = EndpointSliceList::class;
        $uri = $this->api->makeUri(
            '/apis/discovery.k8s.io/v1beta1/namespaces/{namespace}/endpointslices',
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
     * Delete collection of EndpointSlice
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#delete-collection-endpointslice-v1beta1-discovery-k8s-io
     */
    public function deleteDiscoveryV1beta1CollectionNamespaced(array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/discovery.k8s.io/v1beta1/namespaces/{namespace}/endpointslices',
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
     * Create an EndpointSlice
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#create-endpointslice-v1beta1-discovery-k8s-io
     */
    public function createDiscoveryV1beta1Namespaced(EndpointSlice $endpointSlice, array $query = []): EndpointSlice
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $endpointSlice;
        $options['model'] = EndpointSlice::class;
        $uri = $this->api->makeUri(
            '/apis/discovery.k8s.io/v1beta1/namespaces/{namespace}/endpointslices',
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
     * Read the specified EndpointSlice
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#read-endpointslice-v1beta1-discovery-k8s-io
     */
    public function readDiscoveryV1beta1Namespaced(string $name, array $query = []): EndpointSlice
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = EndpointSlice::class;
        $uri = $this->api->makeUri(
            '/apis/discovery.k8s.io/v1beta1/namespaces/{namespace}/endpointslices/{name}',
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
     * Delete an EndpointSlice
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#delete-endpointslice-v1beta1-discovery-k8s-io
     */
    public function deleteDiscoveryV1beta1Namespaced(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/discovery.k8s.io/v1beta1/namespaces/{namespace}/endpointslices/{name}',
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
     * Partially update the specified EndpointSlice
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#patch-endpointslice-v1beta1-discovery-k8s-io
     */
    public function patchDiscoveryV1beta1Namespaced(string $name, PatchInterface $patch, array $query = []): EndpointSlice
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = EndpointSlice::class;
        $uri = $this->api->makeUri(
            '/apis/discovery.k8s.io/v1beta1/namespaces/{namespace}/endpointslices/{name}',
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
     * Replace the specified EndpointSlice
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#put-endpointslice-v1beta1-discovery-k8s-io
     */
    public function replaceDiscoveryV1beta1Namespaced(string $name, EndpointSlice $endpointSlice, array $query = []): EndpointSlice
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $endpointSlice;
        $options['model'] = EndpointSlice::class;
        $uri = $this->api->makeUri(
            '/apis/discovery.k8s.io/v1beta1/namespaces/{namespace}/endpointslices/{name}',
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
     * Watch individual changes to a list of EndpointSlice. deprecated: use the 'watch' parameter with a
     * list operation instead.
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#watchlist-endpointslice-v1beta1-discovery-k8s-io
     */
    public function watchDiscoveryV1beta1ListForAllNamespaces(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/discovery.k8s.io/v1beta1/watch/endpointslices',
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
     * Watch individual changes to a list of EndpointSlice. deprecated: use the 'watch' parameter with a
     * list operation instead.
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#watchlist-endpointslice-v1beta1-discovery-k8s-io
     */
    public function watchDiscoveryV1beta1NamespacedList(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/discovery.k8s.io/v1beta1/watch/namespaces/{namespace}/endpointslices',
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
     * Watch changes to an object of kind EndpointSlice. deprecated: use the 'watch' parameter with a list
     * operation instead, filtered to a single item with the 'fieldSelector' parameter.
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.22/#watch-endpointslice-v1beta1-discovery-k8s-io
     */
    public function watchDiscoveryV1beta1Namespaced(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/discovery.k8s.io/v1beta1/watch/namespaces/{namespace}/endpointslices/{name}',
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
