<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\ApiRegistration\v1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Api\Model\KubeAggregator\Apis\ApiRegistration\v1\APIService;
use K8s\Api\Model\KubeAggregator\Apis\ApiRegistration\v1\APIServiceList;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class APIServiceService
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
     * List or watch objects of kind APIService
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#list-apiservice-v1-apiregistration-k8s-io
     */
    public function listApiRegistrationV1(array $query = [], $handler = null): ?APIServiceList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = APIServiceList::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1/apiservices',
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
     * Delete collection of APIService
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#delete-collection-apiservice-v1-apiregistration-k8s-io
     */
    public function deleteApiRegistrationV1Collection(array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1/apiservices',
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
     * Create an APIService
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#create-apiservice-v1-apiregistration-k8s-io
     */
    public function createApiRegistrationV1(APIService $aPIService, array $query = []): APIService
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $aPIService;
        $options['model'] = APIService::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1/apiservices',
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
     * Read the specified APIService
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#read-apiservice-v1-apiregistration-k8s-io
     */
    public function readApiRegistrationV1(string $name, array $query = []): APIService
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = APIService::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1/apiservices/{name}',
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
     * Delete an APIService
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#delete-apiservice-v1-apiregistration-k8s-io
     */
    public function deleteApiRegistrationV1(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1/apiservices/{name}',
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
     * Partially update the specified APIService
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#patch-apiservice-v1-apiregistration-k8s-io
     */
    public function patchApiRegistrationV1(string $name, PatchInterface $patch, array $query = []): APIService
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = APIService::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1/apiservices/{name}',
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
     * Replace the specified APIService
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#put-apiservice-v1-apiregistration-k8s-io
     */
    public function replaceApiRegistrationV1(string $name, APIService $aPIService, array $query = []): APIService
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $aPIService;
        $options['model'] = APIService::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1/apiservices/{name}',
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
     * Read status of the specified APIService
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#read-apiservice-v1-apiregistration-k8s-io
     */
    public function readApiRegistrationV1Status(string $name, array $query = []): APIService
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = APIService::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1/apiservices/{name}/status',
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
     * Partially update status of the specified APIService
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#patch-apiservice-v1-apiregistration-k8s-io
     */
    public function patchApiRegistrationV1Status(string $name, PatchInterface $patch, array $query = []): APIService
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = APIService::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1/apiservices/{name}/status',
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
     * Replace status of the specified APIService
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#put-apiservice-v1-apiregistration-k8s-io
     */
    public function replaceApiRegistrationV1Status(string $name, APIService $aPIService, array $query = []): APIService
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $aPIService;
        $options['model'] = APIService::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1/apiservices/{name}/status',
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
     * Watch individual changes to a list of APIService. deprecated: use the 'watch' parameter with a list
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
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#watchlist-apiservice-v1-apiregistration-k8s-io
     */
    public function watchApiRegistrationV1List(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1/watch/apiservices',
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
     * Watch changes to an object of kind APIService. deprecated: use the 'watch' parameter with a list
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#watch-apiservice-v1-apiregistration-k8s-io
     */
    public function watchApiRegistrationV1(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1/watch/apiservices/{name}',
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
