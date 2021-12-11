<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.14.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Apps\v1beta1;

use K8s\Api\Model\Api\Apps\v1beta1\Scale;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class ScaleService
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
     * Read scale of the specified Deployment
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function readNamespacedDeployment(string $name, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/scale',
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
     * Partially update scale of the specified Deployment
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     */
    public function patchNamespacedDeployment(string $name, PatchInterface $patch, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/scale',
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
     * Replace scale of the specified Deployment
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     */
    public function replaceNamespacedDeployment(string $name, Scale $scale, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $scale;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/scale',
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
     * Read scale of the specified StatefulSet
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function readNamespacedStatefulSet(string $name, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta1/namespaces/{namespace}/statefulsets/{name}/scale',
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
     * Partially update scale of the specified StatefulSet
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     */
    public function patchNamespacedStatefulSet(string $name, PatchInterface $patch, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta1/namespaces/{namespace}/statefulsets/{name}/scale',
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
     * Replace scale of the specified StatefulSet
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     */
    public function replaceNamespacedStatefulSet(string $name, Scale $scale, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $scale;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta1/namespaces/{namespace}/statefulsets/{name}/scale',
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
}
