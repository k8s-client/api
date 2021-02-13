<?php

/**
 * This file was automatically generated by k8s/api-generator 0.8.1 for API version v1.11.10
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
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\DeleteOptions;
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
     *   continue
     *   fieldSelector
     *   includeUninitialized
     *   labelSelector
     *   limit
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *   pretty
     *
     * @param array $query
     * @param callable|null $handler
     */
    public function listStorageV1alpha1(array $query = [], ?callable $handler = null): ?VolumeAttachmentList
    {
        $options['query'] = $query;
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
     *   fieldSelector
     *   includeUninitialized
     *   labelSelector
     *   limit
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *   pretty
     *
     * @param array $query
     * @param callable|null $handler
     */
    public function deleteStorageV1alpha1Collection(array $query = [], ?callable $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
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
     *   pretty
     *
     * @param array $query
     */
    public function createStorageV1alpha1(VolumeAttachment $volumeAttachment, array $query = []): VolumeAttachment
    {
        $options['query'] = $query;
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
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     */
    public function readStorageV1alpha1(string $name, array $query = []): VolumeAttachment
    {
        $options['query'] = $query;
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
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     */
    public function deleteStorageV1alpha1(string $name, DeleteOptions $deleteOptions, array $query = []): Status
    {
        $options['query'] = $query;
        $options['body'] = $deleteOptions;
        $options['model'] = Status::class;
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
     *   pretty
     *
     * @param array $query
     */
    public function patchStorageV1alpha1(string $name, PatchInterface $patch, array $query = []): VolumeAttachment
    {
        $options['query'] = $query;
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
     *   pretty
     *
     * @param array $query
     */
    public function replaceStorageV1alpha1(string $name, VolumeAttachment $volumeAttachment, array $query = []): VolumeAttachment
    {
        $options['query'] = $query;
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
     * Watch individual changes to a list of VolumeAttachment
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
     */
    public function watchStorageV1alpha1List(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
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
     * Watch changes to an object of kind VolumeAttachment
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
     */
    public function watchStorageV1alpha1(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
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
