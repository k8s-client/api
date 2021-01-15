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

namespace K8s\Api\Service\Settings\v1alpha1;

use K8s\Api\Model\Api\Settings\v1alpha1\PodPreset;
use K8s\Api\Model\Api\Settings\v1alpha1\PodPresetList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;

class PodPresetService
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
     * List or watch objects of kind PodPreset
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#list-podpreset-v1alpha1-settings-k8s-io
     */
    public function listSettingsV1alpha1Namespaced(array $query = [], ?callable $handler = null): ?PodPresetList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = PodPresetList::class;
        $uri = $this->api->makeUri(
            '/apis/settings.k8s.io/v1alpha1/namespaces/{namespace}/podpresets',
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
     * Delete collection of PodPreset
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#delete-collection-podpreset-v1alpha1-settings-k8s-io
     */
    public function deleteSettingsV1alpha1CollectionNamespaced(array $query = [], ?callable $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/settings.k8s.io/v1alpha1/namespaces/{namespace}/podpresets',
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
     * Create a PodPreset
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#create-podpreset-v1alpha1-settings-k8s-io
     */
    public function createSettingsV1alpha1Namespaced(PodPreset $podPreset, array $query = []): PodPreset
    {
        $options['query'] = $query;
        $options['body'] = $podPreset;
        $options['model'] = PodPreset::class;
        $uri = $this->api->makeUri(
            '/apis/settings.k8s.io/v1alpha1/namespaces/{namespace}/podpresets',
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
     * Read the specified PodPreset
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#read-podpreset-v1alpha1-settings-k8s-io
     */
    public function readSettingsV1alpha1Namespaced(string $name, array $query = []): PodPreset
    {
        $options['query'] = $query;
        $options['model'] = PodPreset::class;
        $uri = $this->api->makeUri(
            '/apis/settings.k8s.io/v1alpha1/namespaces/{namespace}/podpresets/{name}',
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
     * Delete a PodPreset
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#delete-podpreset-v1alpha1-settings-k8s-io
     */
    public function deleteSettingsV1alpha1Namespaced(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/settings.k8s.io/v1alpha1/namespaces/{namespace}/podpresets/{name}',
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
     * Partially update the specified PodPreset
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#patch-podpreset-v1alpha1-settings-k8s-io
     */
    public function patchSettingsV1alpha1Namespaced(string $name, array $patch, array $query = []): PodPreset
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = PodPreset::class;
        $uri = $this->api->makeUri(
            '/apis/settings.k8s.io/v1alpha1/namespaces/{namespace}/podpresets/{name}',
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
     * Replace the specified PodPreset
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#put-podpreset-v1alpha1-settings-k8s-io
     */
    public function replaceSettingsV1alpha1Namespaced(string $name, PodPreset $podPreset, array $query = []): PodPreset
    {
        $options['query'] = $query;
        $options['body'] = $podPreset;
        $options['model'] = PodPreset::class;
        $uri = $this->api->makeUri(
            '/apis/settings.k8s.io/v1alpha1/namespaces/{namespace}/podpresets/{name}',
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
     * List or watch objects of kind PodPreset
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#list-podpreset-v1alpha1-settings-k8s-io
     */
    public function listSettingsV1alpha1ForAllNamespaces(array $query = [], ?callable $handler = null): ?PodPresetList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = PodPresetList::class;
        $uri = $this->api->makeUri(
            '/apis/settings.k8s.io/v1alpha1/podpresets',
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
     * Watch individual changes to a list of PodPreset. deprecated: use the 'watch' parameter with a list
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
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#watchlist-podpreset-v1alpha1-settings-k8s-io
     */
    public function watchSettingsV1alpha1NamespacedList(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/settings.k8s.io/v1alpha1/watch/namespaces/{namespace}/podpresets',
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
     * Watch changes to an object of kind PodPreset. deprecated: use the 'watch' parameter with a list
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#watch-podpreset-v1alpha1-settings-k8s-io
     */
    public function watchSettingsV1alpha1Namespaced(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/settings.k8s.io/v1alpha1/watch/namespaces/{namespace}/podpresets/{name}',
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
     * Watch individual changes to a list of PodPreset. deprecated: use the 'watch' parameter with a list
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
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#watchlist-podpreset-v1alpha1-settings-k8s-io
     */
    public function watchSettingsV1alpha1ListForAllNamespaces(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/settings.k8s.io/v1alpha1/watch/podpresets',
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