<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\AutoScaling\v1;

use K8s\Api\Model\Api\AutoScaling\v1\HorizontalPodAutoscaler;
use K8s\Api\Model\Api\AutoScaling\v1\HorizontalPodAutoscalerList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class HorizontalPodAutoscalerService
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
     * List or watch objects of kind HorizontalPodAutoscaler
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#list-horizontalpodautoscaler-v1-autoscaling
     */
    public function listForAllNamespaces(array $query = [], $handler = null): ?HorizontalPodAutoscalerList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = HorizontalPodAutoscalerList::class;
        $uri = $this->api->makeUri(
            '/apis/autoscaling/v1/horizontalpodautoscalers',
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
     * List or watch objects of kind HorizontalPodAutoscaler
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#list-horizontalpodautoscaler-v1-autoscaling
     */
    public function listNamespaced(array $query = [], $handler = null): ?HorizontalPodAutoscalerList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = HorizontalPodAutoscalerList::class;
        $uri = $this->api->makeUri(
            '/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers',
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
     * Delete collection of HorizontalPodAutoscaler
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#delete-collection-horizontalpodautoscaler-v1-autoscaling
     */
    public function deleteCollectionNamespaced(array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers',
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
     * Create a HorizontalPodAutoscaler
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#create-horizontalpodautoscaler-v1-autoscaling
     */
    public function createNamespaced(HorizontalPodAutoscaler $horizontalPodAutoscaler, array $query = []): HorizontalPodAutoscaler
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $horizontalPodAutoscaler;
        $options['model'] = HorizontalPodAutoscaler::class;
        $uri = $this->api->makeUri(
            '/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers',
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
     * Read the specified HorizontalPodAutoscaler
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#read-horizontalpodautoscaler-v1-autoscaling
     */
    public function readNamespaced(string $name, array $query = []): HorizontalPodAutoscaler
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = HorizontalPodAutoscaler::class;
        $uri = $this->api->makeUri(
            '/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name}',
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
     * Delete a HorizontalPodAutoscaler
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#delete-horizontalpodautoscaler-v1-autoscaling
     */
    public function deleteNamespaced(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name}',
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
     * Partially update the specified HorizontalPodAutoscaler
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#patch-horizontalpodautoscaler-v1-autoscaling
     */
    public function patchNamespaced(string $name, PatchInterface $patch, array $query = []): HorizontalPodAutoscaler
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = HorizontalPodAutoscaler::class;
        $uri = $this->api->makeUri(
            '/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name}',
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
     * Replace the specified HorizontalPodAutoscaler
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#put-horizontalpodautoscaler-v1-autoscaling
     */
    public function replaceNamespaced(string $name, HorizontalPodAutoscaler $horizontalPodAutoscaler, array $query = []): HorizontalPodAutoscaler
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $horizontalPodAutoscaler;
        $options['model'] = HorizontalPodAutoscaler::class;
        $uri = $this->api->makeUri(
            '/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name}',
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
     * Read status of the specified HorizontalPodAutoscaler
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#read-horizontalpodautoscaler-v1-autoscaling
     */
    public function readNamespacedStatus(string $name, array $query = []): HorizontalPodAutoscaler
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = HorizontalPodAutoscaler::class;
        $uri = $this->api->makeUri(
            '/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name}/status',
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
     * Partially update status of the specified HorizontalPodAutoscaler
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#patch-horizontalpodautoscaler-v1-autoscaling
     */
    public function patchNamespacedStatus(string $name, PatchInterface $patch, array $query = []): HorizontalPodAutoscaler
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = HorizontalPodAutoscaler::class;
        $uri = $this->api->makeUri(
            '/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name}/status',
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
     * Replace status of the specified HorizontalPodAutoscaler
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#put-horizontalpodautoscaler-v1-autoscaling
     */
    public function replaceNamespacedStatus(string $name, HorizontalPodAutoscaler $horizontalPodAutoscaler, array $query = []): HorizontalPodAutoscaler
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $horizontalPodAutoscaler;
        $options['model'] = HorizontalPodAutoscaler::class;
        $uri = $this->api->makeUri(
            '/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{name}/status',
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
     * Watch individual changes to a list of HorizontalPodAutoscaler. deprecated: use the 'watch' parameter
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#watchlist-horizontalpodautoscaler-v1-autoscaling
     */
    public function watchListForAllNamespaces(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/autoscaling/v1/watch/horizontalpodautoscalers',
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
     * Watch individual changes to a list of HorizontalPodAutoscaler. deprecated: use the 'watch' parameter
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#watchlist-horizontalpodautoscaler-v1-autoscaling
     */
    public function watchNamespacedList(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/autoscaling/v1/watch/namespaces/{namespace}/horizontalpodautoscalers',
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
     * Watch changes to an object of kind HorizontalPodAutoscaler. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.24/#watch-horizontalpodautoscaler-v1-autoscaling
     */
    public function watchNamespaced(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/autoscaling/v1/watch/namespaces/{namespace}/horizontalpodautoscalers/{name}',
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
