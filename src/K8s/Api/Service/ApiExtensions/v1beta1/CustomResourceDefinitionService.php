<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.11
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\ApiExtensions\v1beta1;

use K8s\Api\Model\ApiExtensions\v1beta1\CustomResourceDefinition;
use K8s\Api\Model\ApiExtensions\v1beta1\CustomResourceDefinitionList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class CustomResourceDefinitionService
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
     * List or watch objects of kind CustomResourceDefinition
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#list-customresourcedefinition-v1beta1-apiextensions-k8s-io
     */
    public function listApiExtensionsV1beta1(array $query = [], $handler = null): ?CustomResourceDefinitionList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = CustomResourceDefinitionList::class;
        $uri = $this->api->makeUri(
            '/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions',
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
     * Delete collection of CustomResourceDefinition
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#delete-collection-customresourcedefinition-v1beta1-apiextensions-k8s-io
     */
    public function deleteApiExtensionsV1beta1Collection(array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions',
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
     * Create a CustomResourceDefinition
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#create-customresourcedefinition-v1beta1-apiextensions-k8s-io
     */
    public function createApiExtensionsV1beta1(CustomResourceDefinition $customResourceDefinition, array $query = []): CustomResourceDefinition
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $customResourceDefinition;
        $options['model'] = CustomResourceDefinition::class;
        $uri = $this->api->makeUri(
            '/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions',
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
     * Read the specified CustomResourceDefinition
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#read-customresourcedefinition-v1beta1-apiextensions-k8s-io
     */
    public function readApiExtensionsV1beta1(string $name, array $query = []): CustomResourceDefinition
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = CustomResourceDefinition::class;
        $uri = $this->api->makeUri(
            '/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{name}',
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
     * Delete a CustomResourceDefinition
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#delete-customresourcedefinition-v1beta1-apiextensions-k8s-io
     */
    public function deleteApiExtensionsV1beta1(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{name}',
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
     * Partially update the specified CustomResourceDefinition
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#patch-customresourcedefinition-v1beta1-apiextensions-k8s-io
     */
    public function patchApiExtensionsV1beta1(string $name, PatchInterface $patch, array $query = []): CustomResourceDefinition
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = CustomResourceDefinition::class;
        $uri = $this->api->makeUri(
            '/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{name}',
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
     * Replace the specified CustomResourceDefinition
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#put-customresourcedefinition-v1beta1-apiextensions-k8s-io
     */
    public function replaceApiExtensionsV1beta1(string $name, CustomResourceDefinition $customResourceDefinition, array $query = []): CustomResourceDefinition
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $customResourceDefinition;
        $options['model'] = CustomResourceDefinition::class;
        $uri = $this->api->makeUri(
            '/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{name}',
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
     * Read status of the specified CustomResourceDefinition
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#read-customresourcedefinition-v1beta1-apiextensions-k8s-io
     */
    public function readApiExtensionsV1beta1Status(string $name, array $query = []): CustomResourceDefinition
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = CustomResourceDefinition::class;
        $uri = $this->api->makeUri(
            '/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{name}/status',
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
     * Partially update status of the specified CustomResourceDefinition
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#patch-customresourcedefinition-v1beta1-apiextensions-k8s-io
     */
    public function patchApiExtensionsV1beta1Status(string $name, PatchInterface $patch, array $query = []): CustomResourceDefinition
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = CustomResourceDefinition::class;
        $uri = $this->api->makeUri(
            '/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{name}/status',
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
     * Replace status of the specified CustomResourceDefinition
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#put-customresourcedefinition-v1beta1-apiextensions-k8s-io
     */
    public function replaceApiExtensionsV1beta1Status(string $name, CustomResourceDefinition $customResourceDefinition, array $query = []): CustomResourceDefinition
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $customResourceDefinition;
        $options['model'] = CustomResourceDefinition::class;
        $uri = $this->api->makeUri(
            '/apis/apiextensions.k8s.io/v1beta1/customresourcedefinitions/{name}/status',
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
     * Watch individual changes to a list of CustomResourceDefinition. deprecated: use the 'watch'
     * parameter with a list operation instead.
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#watchlist-customresourcedefinition-v1beta1-apiextensions-k8s-io
     */
    public function watchApiExtensionsV1beta1List(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/apiextensions.k8s.io/v1beta1/watch/customresourcedefinitions',
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
     * Watch changes to an object of kind CustomResourceDefinition. deprecated: use the 'watch' parameter
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#watch-customresourcedefinition-v1beta1-apiextensions-k8s-io
     */
    public function watchApiExtensionsV1beta1(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/apiextensions.k8s.io/v1beta1/watch/customresourcedefinitions/{name}',
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
