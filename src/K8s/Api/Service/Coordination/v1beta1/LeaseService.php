<?php

/**
 * This file was automatically generated by k8s/api-generator 0.8.1 for API version v1.20.2
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Coordination\v1beta1;

use K8s\Api\Model\Api\Coordination\v1beta1\Lease;
use K8s\Api\Model\Api\Coordination\v1beta1\LeaseList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class LeaseService
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
     * List or watch objects of kind Lease
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
     * @param callable|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#list-lease-v1beta1-coordination-k8s-io
     */
    public function listCoordinationV1beta1ForAllNamespaces(array $query = [], ?callable $handler = null): ?LeaseList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = LeaseList::class;
        $uri = $this->api->makeUri(
            '/apis/coordination.k8s.io/v1beta1/leases',
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
     * List or watch objects of kind Lease
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
     * @param callable|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#list-lease-v1beta1-coordination-k8s-io
     */
    public function listCoordinationV1beta1Namespaced(array $query = [], ?callable $handler = null): ?LeaseList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = LeaseList::class;
        $uri = $this->api->makeUri(
            '/apis/coordination.k8s.io/v1beta1/namespaces/{namespace}/leases',
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
     * Delete collection of Lease
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#delete-collection-lease-v1beta1-coordination-k8s-io
     */
    public function deleteCoordinationV1beta1CollectionNamespaced(array $query = []): Status
    {
        $options['query'] = $query;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/coordination.k8s.io/v1beta1/namespaces/{namespace}/leases',
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
     * Create a Lease
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#create-lease-v1beta1-coordination-k8s-io
     */
    public function createCoordinationV1beta1Namespaced(Lease $lease, array $query = []): Lease
    {
        $options['query'] = $query;
        $options['body'] = $lease;
        $options['model'] = Lease::class;
        $uri = $this->api->makeUri(
            '/apis/coordination.k8s.io/v1beta1/namespaces/{namespace}/leases',
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
     * Read the specified Lease
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#read-lease-v1beta1-coordination-k8s-io
     */
    public function readCoordinationV1beta1Namespaced(string $name, array $query = []): Lease
    {
        $options['query'] = $query;
        $options['model'] = Lease::class;
        $uri = $this->api->makeUri(
            '/apis/coordination.k8s.io/v1beta1/namespaces/{namespace}/leases/{name}',
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
     * Delete a Lease
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#delete-lease-v1beta1-coordination-k8s-io
     */
    public function deleteCoordinationV1beta1Namespaced(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/coordination.k8s.io/v1beta1/namespaces/{namespace}/leases/{name}',
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
     * Partially update the specified Lease
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#patch-lease-v1beta1-coordination-k8s-io
     */
    public function patchCoordinationV1beta1Namespaced(string $name, PatchInterface $patch, array $query = []): Lease
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Lease::class;
        $uri = $this->api->makeUri(
            '/apis/coordination.k8s.io/v1beta1/namespaces/{namespace}/leases/{name}',
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
     * Replace the specified Lease
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#put-lease-v1beta1-coordination-k8s-io
     */
    public function replaceCoordinationV1beta1Namespaced(string $name, Lease $lease, array $query = []): Lease
    {
        $options['query'] = $query;
        $options['body'] = $lease;
        $options['model'] = Lease::class;
        $uri = $this->api->makeUri(
            '/apis/coordination.k8s.io/v1beta1/namespaces/{namespace}/leases/{name}',
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
     * Watch individual changes to a list of Lease. deprecated: use the 'watch' parameter with a list
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
     *   resourceVersionMatch
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#watchlist-lease-v1beta1-coordination-k8s-io
     */
    public function watchCoordinationV1beta1ListForAllNamespaces(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/coordination.k8s.io/v1beta1/watch/leases',
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
     * Watch individual changes to a list of Lease. deprecated: use the 'watch' parameter with a list
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
     *   resourceVersionMatch
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#watchlist-lease-v1beta1-coordination-k8s-io
     */
    public function watchCoordinationV1beta1NamespacedList(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/coordination.k8s.io/v1beta1/watch/namespaces/{namespace}/leases',
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
     * Watch changes to an object of kind Lease. deprecated: use the 'watch' parameter with a list
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
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#watch-lease-v1beta1-coordination-k8s-io
     */
    public function watchCoordinationV1beta1Namespaced(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/coordination.k8s.io/v1beta1/watch/namespaces/{namespace}/leases/{name}',
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
