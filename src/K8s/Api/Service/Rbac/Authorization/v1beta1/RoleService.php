<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.12.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Rbac\Authorization\v1beta1;

use K8s\Api\Model\Api\Rbac\v1beta1\Role;
use K8s\Api\Model\Api\Rbac\v1beta1\RoleList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\DeleteOptions;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class RoleService
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
     * List or watch objects of kind Role
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
     * @param callable|object|null $handler
     */
    public function listRbacAuthorizationV1beta1Namespaced(array $query = [], $handler = null): ?RoleList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = RoleList::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/roles',
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
     * Delete collection of Role
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
     * @param callable|object|null $handler
     */
    public function deleteRbacAuthorizationV1beta1CollectionNamespaced(array $query = [], $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/roles',
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
     * Create a Role
     *
     * Allowed query parameters:
     *   dryRun
     *   includeUninitialized
     *   pretty
     *
     * @param array $query
     */
    public function createRbacAuthorizationV1beta1Namespaced(Role $role, array $query = []): Role
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $role;
        $options['model'] = Role::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/roles',
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
     * Read the specified Role
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function readRbacAuthorizationV1beta1Namespaced(string $name, array $query = []): Role
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = Role::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/roles/{name}',
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
     * Delete a Role
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
    public function deleteRbacAuthorizationV1beta1Namespaced(string $name, DeleteOptions $deleteOptions, array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['body'] = $deleteOptions;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/roles/{name}',
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
     * Partially update the specified Role
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function patchRbacAuthorizationV1beta1Namespaced(string $name, PatchInterface $patch, array $query = []): Role
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = Role::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/roles/{name}',
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
     * Replace the specified Role
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function replaceRbacAuthorizationV1beta1Namespaced(string $name, Role $role, array $query = []): Role
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $role;
        $options['model'] = Role::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/roles/{name}',
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
     * List or watch objects of kind Role
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
     * @param callable|object|null $handler
     */
    public function listRbacAuthorizationV1beta1ForAllNamespaces(array $query = [], $handler = null): ?RoleList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = RoleList::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/roles',
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
     * Watch individual changes to a list of Role. deprecated: use the 'watch' parameter with a list
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
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     */
    public function watchRbacAuthorizationV1beta1NamespacedList(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/watch/namespaces/{namespace}/roles',
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
     * Watch changes to an object of kind Role. deprecated: use the 'watch' parameter with a list operation
     * instead, filtered to a single item with the 'fieldSelector' parameter.
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
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     */
    public function watchRbacAuthorizationV1beta1Namespaced(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/watch/namespaces/{namespace}/roles/{name}',
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
     * Watch individual changes to a list of Role. deprecated: use the 'watch' parameter with a list
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
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     */
    public function watchRbacAuthorizationV1beta1ListForAllNamespaces(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/watch/roles',
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
