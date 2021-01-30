<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.20.2
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\FlowControl\ApiServer\v1alpha1;

use K8s\Api\Model\Api\FlowControl\v1alpha1\PriorityLevelConfiguration;
use K8s\Api\Model\Api\FlowControl\v1alpha1\PriorityLevelConfigurationList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class PriorityLevelConfigurationService
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
     * List or watch objects of kind PriorityLevelConfiguration
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
     * @param callable|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#list-prioritylevelconfiguration-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function listFlowControlApiServerV1alpha1(array $query = [], ?callable $handler = null): ?PriorityLevelConfigurationList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = PriorityLevelConfigurationList::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations',
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
     * Delete collection of PriorityLevelConfiguration
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#delete-collection-prioritylevelconfiguration-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function deleteFlowControlApiServerV1alpha1Collection(array $query = []): Status
    {
        $options['query'] = $query;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations',
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
     * Create a PriorityLevelConfiguration
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#create-prioritylevelconfiguration-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function createFlowControlApiServerV1alpha1(PriorityLevelConfiguration $priorityLevelConfiguration, array $query = []): PriorityLevelConfiguration
    {
        $options['query'] = $query;
        $options['body'] = $priorityLevelConfiguration;
        $options['model'] = PriorityLevelConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations',
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
     * Read the specified PriorityLevelConfiguration
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#read-prioritylevelconfiguration-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function readFlowControlApiServerV1alpha1(string $name, array $query = []): PriorityLevelConfiguration
    {
        $options['query'] = $query;
        $options['model'] = PriorityLevelConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations/{name}',
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
     * Delete a PriorityLevelConfiguration
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#delete-prioritylevelconfiguration-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function deleteFlowControlApiServerV1alpha1(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations/{name}',
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
     * Partially update the specified PriorityLevelConfiguration
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#patch-prioritylevelconfiguration-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function patchFlowControlApiServerV1alpha1(string $name, PatchInterface $patch, array $query = []): PriorityLevelConfiguration
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = PriorityLevelConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations/{name}',
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
     * Replace the specified PriorityLevelConfiguration
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#put-prioritylevelconfiguration-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function replaceFlowControlApiServerV1alpha1(string $name, PriorityLevelConfiguration $priorityLevelConfiguration, array $query = []): PriorityLevelConfiguration
    {
        $options['query'] = $query;
        $options['body'] = $priorityLevelConfiguration;
        $options['model'] = PriorityLevelConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations/{name}',
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
     * Read status of the specified PriorityLevelConfiguration
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#read-prioritylevelconfiguration-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function readFlowControlApiServerV1alpha1Status(string $name, array $query = []): PriorityLevelConfiguration
    {
        $options['query'] = $query;
        $options['model'] = PriorityLevelConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations/{name}/status',
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
     * Partially update status of the specified PriorityLevelConfiguration
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#patch-prioritylevelconfiguration-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function patchFlowControlApiServerV1alpha1Status(string $name, PatchInterface $patch, array $query = []): PriorityLevelConfiguration
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = PriorityLevelConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations/{name}/status',
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
     * Replace status of the specified PriorityLevelConfiguration
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#put-prioritylevelconfiguration-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function replaceFlowControlApiServerV1alpha1Status(string $name, PriorityLevelConfiguration $priorityLevelConfiguration, array $query = []): PriorityLevelConfiguration
    {
        $options['query'] = $query;
        $options['body'] = $priorityLevelConfiguration;
        $options['model'] = PriorityLevelConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations/{name}/status',
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
     * Watch individual changes to a list of PriorityLevelConfiguration. deprecated: use the 'watch'
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
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#watchlist-prioritylevelconfiguration-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function watchFlowControlApiServerV1alpha1List(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/watch/prioritylevelconfigurations',
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
     * Watch changes to an object of kind PriorityLevelConfiguration. deprecated: use the 'watch' parameter
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
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#watch-prioritylevelconfiguration-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function watchFlowControlApiServerV1alpha1(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/watch/prioritylevelconfigurations/{name}',
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
