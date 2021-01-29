<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Apps\v1beta2;

use K8s\Api\Model\Api\Apps\v1beta2\Scale;
use K8s\Core\Contract\ApiInterface;

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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#read-scale-v1beta2-apps
     */
    public function readNamespacedDeployment(string $name, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/deployments/{name}/scale',
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#patch-scale-v1beta2-apps
     */
    public function patchNamespacedDeployment(string $name, array $patch, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/deployments/{name}/scale',
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#put-scale-v1beta2-apps
     */
    public function replaceNamespacedDeployment(string $name, Scale $scale, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['body'] = $scale;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/deployments/{name}/scale',
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
     * Read scale of the specified ReplicaSet
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#read-scale-v1beta2-apps
     */
    public function readNamespacedReplicaSet(string $name, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/replicasets/{name}/scale',
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
     * Partially update scale of the specified ReplicaSet
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#patch-scale-v1beta2-apps
     */
    public function patchNamespacedReplicaSet(string $name, array $patch, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/replicasets/{name}/scale',
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
     * Replace scale of the specified ReplicaSet
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#put-scale-v1beta2-apps
     */
    public function replaceNamespacedReplicaSet(string $name, Scale $scale, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['body'] = $scale;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/replicasets/{name}/scale',
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#read-scale-v1beta2-apps
     */
    public function readNamespacedStatefulSet(string $name, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/statefulsets/{name}/scale',
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#patch-scale-v1beta2-apps
     */
    public function patchNamespacedStatefulSet(string $name, array $patch, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/statefulsets/{name}/scale',
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.15/#put-scale-v1beta2-apps
     */
    public function replaceNamespacedStatefulSet(string $name, Scale $scale, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['body'] = $scale;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/statefulsets/{name}/scale',
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
