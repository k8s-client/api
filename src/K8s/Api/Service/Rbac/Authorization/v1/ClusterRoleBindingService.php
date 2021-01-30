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

namespace K8s\Api\Service\Rbac\Authorization\v1;

use K8s\Api\Model\Api\Rbac\v1\ClusterRoleBinding;
use K8s\Api\Model\Api\Rbac\v1\ClusterRoleBindingList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\DeleteOptions;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class ClusterRoleBindingService
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
     * List or watch objects of kind ClusterRoleBinding
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
    public function listRbacAuthorizationV1(array $query = [], ?callable $handler = null): ?ClusterRoleBindingList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = ClusterRoleBindingList::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1/clusterrolebindings',
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
     * Delete collection of ClusterRoleBinding
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
    public function deleteRbacAuthorizationV1Collection(array $query = [], ?callable $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1/clusterrolebindings',
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
     * Create a ClusterRoleBinding
     *
     * Allowed query parameters:
     *   dryRun
     *   includeUninitialized
     *   pretty
     *
     * @param array $query
     */
    public function createRbacAuthorizationV1(ClusterRoleBinding $clusterRoleBinding, array $query = []): ClusterRoleBinding
    {
        $options['query'] = $query;
        $options['body'] = $clusterRoleBinding;
        $options['model'] = ClusterRoleBinding::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1/clusterrolebindings',
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
     * Read the specified ClusterRoleBinding
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function readRbacAuthorizationV1(string $name, array $query = []): ClusterRoleBinding
    {
        $options['query'] = $query;
        $options['model'] = ClusterRoleBinding::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1/clusterrolebindings/{name}',
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
     * Delete a ClusterRoleBinding
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
    public function deleteRbacAuthorizationV1(string $name, DeleteOptions $deleteOptions, array $query = []): Status
    {
        $options['query'] = $query;
        $options['body'] = $deleteOptions;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1/clusterrolebindings/{name}',
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
     * Partially update the specified ClusterRoleBinding
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function patchRbacAuthorizationV1(string $name, PatchInterface $patch, array $query = []): ClusterRoleBinding
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = ClusterRoleBinding::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1/clusterrolebindings/{name}',
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
     * Replace the specified ClusterRoleBinding
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function replaceRbacAuthorizationV1(string $name, ClusterRoleBinding $clusterRoleBinding, array $query = []): ClusterRoleBinding
    {
        $options['query'] = $query;
        $options['body'] = $clusterRoleBinding;
        $options['model'] = ClusterRoleBinding::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1/clusterrolebindings/{name}',
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
     * Watch individual changes to a list of ClusterRoleBinding. deprecated: use the 'watch' parameter with
     * a list operation instead.
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
    public function watchRbacAuthorizationV1List(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1/watch/clusterrolebindings',
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
     * Watch changes to an object of kind ClusterRoleBinding. deprecated: use the 'watch' parameter with a
     * list operation instead, filtered to a single item with the 'fieldSelector' parameter.
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
    public function watchRbacAuthorizationV1(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1/watch/clusterrolebindings/{name}',
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
