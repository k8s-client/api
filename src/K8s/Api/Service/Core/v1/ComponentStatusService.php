<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.13.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Core\v1;

use K8s\Api\Model\Api\Core\v1\ComponentStatus;
use K8s\Api\Model\Api\Core\v1\ComponentStatusList;
use K8s\Core\Contract\ApiInterface;

/**
 * ComponentStatus (and ComponentStatusList) holds the cluster validation info.
 */
class ComponentStatusService
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
     * List objects of kind ComponentStatus
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
    public function list(array $query = [], $handler = null): ?ComponentStatusList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = ComponentStatusList::class;
        $uri = $this->api->makeUri(
            '/api/v1/componentstatuses',
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
     * Read the specified ComponentStatus
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function read(string $name, array $query = []): ComponentStatus
    {
        $options['query'] = $query;
        $options['model'] = ComponentStatus::class;
        $uri = $this->api->makeUri(
            '/api/v1/componentstatuses/{name}',
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
}
