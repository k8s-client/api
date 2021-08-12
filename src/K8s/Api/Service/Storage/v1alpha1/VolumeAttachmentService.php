<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.21.4
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Storage\v1alpha1;

use K8s\Api\Model\Api\Storage\v1alpha1\VolumeAttachment;
use K8s\Api\Model\Api\Storage\v1alpha1\VolumeAttachmentList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class VolumeAttachmentService
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
     * List or watch objects of kind VolumeAttachment
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#list-volumeattachment-v1alpha1-storage-k8s-io
     */
    public function listStorageV1alpha1(array $query = [], $handler = null): ?VolumeAttachmentList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = VolumeAttachmentList::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1alpha1/volumeattachments',
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
     * Delete collection of VolumeAttachment
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#delete-collection-volumeattachment-v1alpha1-storage-k8s-io
     */
    public function deleteStorageV1alpha1Collection(array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1alpha1/volumeattachments',
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
     * Create a VolumeAttachment
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#create-volumeattachment-v1alpha1-storage-k8s-io
     */
    public function createStorageV1alpha1(VolumeAttachment $volumeAttachment, array $query = []): VolumeAttachment
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $volumeAttachment;
        $options['model'] = VolumeAttachment::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1alpha1/volumeattachments',
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
     * Read the specified VolumeAttachment
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#read-volumeattachment-v1alpha1-storage-k8s-io
     */
    public function readStorageV1alpha1(string $name, array $query = []): VolumeAttachment
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = VolumeAttachment::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1alpha1/volumeattachments/{name}',
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
     * Delete a VolumeAttachment
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#delete-volumeattachment-v1alpha1-storage-k8s-io
     */
    public function deleteStorageV1alpha1(string $name, array $query = []): VolumeAttachment
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = VolumeAttachment::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1alpha1/volumeattachments/{name}',
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
     * Partially update the specified VolumeAttachment
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#patch-volumeattachment-v1alpha1-storage-k8s-io
     */
    public function patchStorageV1alpha1(string $name, PatchInterface $patch, array $query = []): VolumeAttachment
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = VolumeAttachment::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1alpha1/volumeattachments/{name}',
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
     * Replace the specified VolumeAttachment
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#put-volumeattachment-v1alpha1-storage-k8s-io
     */
    public function replaceStorageV1alpha1(string $name, VolumeAttachment $volumeAttachment, array $query = []): VolumeAttachment
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $volumeAttachment;
        $options['model'] = VolumeAttachment::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1alpha1/volumeattachments/{name}',
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
     * Watch individual changes to a list of VolumeAttachment. deprecated: use the 'watch' parameter with a
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#watchlist-volumeattachment-v1alpha1-storage-k8s-io
     */
    public function watchStorageV1alpha1List(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1alpha1/watch/volumeattachments',
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
     * Watch changes to an object of kind VolumeAttachment. deprecated: use the 'watch' parameter with a
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#watch-volumeattachment-v1alpha1-storage-k8s-io
     */
    public function watchStorageV1alpha1(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1alpha1/watch/volumeattachments/{name}',
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
