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

namespace K8s\Api\Service\Scheduling\v1alpha1;

use K8s\Api\Model\Api\Scheduling\v1alpha1\PriorityClass;
use K8s\Api\Model\Api\Scheduling\v1alpha1\PriorityClassList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;

class PriorityClassService
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
     * List or watch objects of kind PriorityClass
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
     * @param callable|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#list-priorityclass-v1alpha1-scheduling-k8s-io
     */
    public function listSchedulingV1alpha1(array $query = [], ?callable $handler = null): ?PriorityClassList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = PriorityClassList::class;
        $uri = $this->api->makeUri(
            '/apis/scheduling.k8s.io/v1alpha1/priorityclasses',
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
     * Delete collection of PriorityClass
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
     * @param callable|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#delete-collection-priorityclass-v1alpha1-scheduling-k8s-io
     */
    public function deleteSchedulingV1alpha1Collection(array $query = [], ?callable $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/scheduling.k8s.io/v1alpha1/priorityclasses',
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
     * Create a PriorityClass
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#create-priorityclass-v1alpha1-scheduling-k8s-io
     */
    public function createSchedulingV1alpha1(PriorityClass $priorityClass, array $query = []): PriorityClass
    {
        $options['query'] = $query;
        $options['body'] = $priorityClass;
        $options['model'] = PriorityClass::class;
        $uri = $this->api->makeUri(
            '/apis/scheduling.k8s.io/v1alpha1/priorityclasses',
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
     * Read the specified PriorityClass
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#read-priorityclass-v1alpha1-scheduling-k8s-io
     */
    public function readSchedulingV1alpha1(string $name, array $query = []): PriorityClass
    {
        $options['query'] = $query;
        $options['model'] = PriorityClass::class;
        $uri = $this->api->makeUri(
            '/apis/scheduling.k8s.io/v1alpha1/priorityclasses/{name}',
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
     * Delete a PriorityClass
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#delete-priorityclass-v1alpha1-scheduling-k8s-io
     */
    public function deleteSchedulingV1alpha1(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/scheduling.k8s.io/v1alpha1/priorityclasses/{name}',
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
     * Partially update the specified PriorityClass
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#patch-priorityclass-v1alpha1-scheduling-k8s-io
     */
    public function patchSchedulingV1alpha1(string $name, array $patch, array $query = []): PriorityClass
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = PriorityClass::class;
        $uri = $this->api->makeUri(
            '/apis/scheduling.k8s.io/v1alpha1/priorityclasses/{name}',
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
     * Replace the specified PriorityClass
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#put-priorityclass-v1alpha1-scheduling-k8s-io
     */
    public function replaceSchedulingV1alpha1(string $name, PriorityClass $priorityClass, array $query = []): PriorityClass
    {
        $options['query'] = $query;
        $options['body'] = $priorityClass;
        $options['model'] = PriorityClass::class;
        $uri = $this->api->makeUri(
            '/apis/scheduling.k8s.io/v1alpha1/priorityclasses/{name}',
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
     * Watch individual changes to a list of PriorityClass. deprecated: use the 'watch' parameter with a
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
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#watchlist-priorityclass-v1alpha1-scheduling-k8s-io
     */
    public function watchSchedulingV1alpha1List(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/scheduling.k8s.io/v1alpha1/watch/priorityclasses',
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
     * Watch changes to an object of kind PriorityClass. deprecated: use the 'watch' parameter with a list
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
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#watch-priorityclass-v1alpha1-scheduling-k8s-io
     */
    public function watchSchedulingV1alpha1(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/scheduling.k8s.io/v1alpha1/watch/priorityclasses/{name}',
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