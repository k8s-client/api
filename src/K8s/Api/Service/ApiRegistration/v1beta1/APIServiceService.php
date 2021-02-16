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

namespace K8s\Api\Service\ApiRegistration\v1beta1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\DeleteOptions;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Api\Model\KubeAggregator\Apis\ApiRegistration\v1beta1\APIService;
use K8s\Api\Model\KubeAggregator\Apis\ApiRegistration\v1beta1\APIServiceList;
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
    public function listApiRegistrationV1beta1(array $query = [], $handler = null): ?APIServiceList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = APIServiceList::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1beta1/apiservices',
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
    public function deleteApiRegistrationV1beta1Collection(array $query = [], $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1beta1/apiservices',
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
     *   includeUninitialized
     *   pretty
     *
     * @param array $query
     */
    public function createApiRegistrationV1beta1(APIService $aPIService, array $query = []): APIService
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $aPIService;
        $options['model'] = APIService::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1beta1/apiservices',
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
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     */
    public function readApiRegistrationV1beta1(string $name, array $query = []): APIService
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = APIService::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1beta1/apiservices/{name}',
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
     */
    public function deleteApiRegistrationV1beta1(string $name, DeleteOptions $deleteOptions, array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['body'] = $deleteOptions;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1beta1/apiservices/{name}',
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
     *   pretty
     *
     * @param array $query
     */
    public function patchApiRegistrationV1beta1(string $name, PatchInterface $patch, array $query = []): APIService
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = APIService::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1beta1/apiservices/{name}',
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
     *   pretty
     *
     * @param array $query
     */
    public function replaceApiRegistrationV1beta1(string $name, APIService $aPIService, array $query = []): APIService
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $aPIService;
        $options['model'] = APIService::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1beta1/apiservices/{name}',
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
     */
    public function readApiRegistrationV1beta1Status(string $name, array $query = []): APIService
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = APIService::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1beta1/apiservices/{name}/status',
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
     *   pretty
     *
     * @param array $query
     */
    public function patchApiRegistrationV1beta1Status(string $name, PatchInterface $patch, array $query = []): APIService
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = APIService::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1beta1/apiservices/{name}/status',
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
     *   pretty
     *
     * @param array $query
     */
    public function replaceApiRegistrationV1beta1Status(string $name, APIService $aPIService, array $query = []): APIService
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $aPIService;
        $options['model'] = APIService::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1beta1/apiservices/{name}/status',
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
    public function watchApiRegistrationV1beta1List(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1beta1/watch/apiservices',
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
    public function watchApiRegistrationV1beta1(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/apiregistration.k8s.io/v1beta1/watch/apiservices/{name}',
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
