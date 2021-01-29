<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.16.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\AutoScaling\v1;

use K8s\Api\Model\Api\AutoScaling\v1\Scale;
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
     * Read scale of the specified ReplicationController
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#read-scale-v1-autoscaling
     */
    public function readCoreV1NamespacedReplicationController(string $name, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/replicationcontrollers/{name}/scale',
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
     * Partially update scale of the specified ReplicationController
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#patch-scale-v1-autoscaling
     */
    public function patchCoreV1NamespacedReplicationController(string $name, array $patch, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/replicationcontrollers/{name}/scale',
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
     * Replace scale of the specified ReplicationController
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#put-scale-v1-autoscaling
     */
    public function replaceCoreV1NamespacedReplicationController(string $name, Scale $scale, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['body'] = $scale;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/replicationcontrollers/{name}/scale',
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
     * Read scale of the specified Deployment
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#read-scale-v1-autoscaling
     */
    public function readAppsV1NamespacedDeployment(string $name, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1/namespaces/{namespace}/deployments/{name}/scale',
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#patch-scale-v1-autoscaling
     */
    public function patchAppsV1NamespacedDeployment(string $name, array $patch, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1/namespaces/{namespace}/deployments/{name}/scale',
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#put-scale-v1-autoscaling
     */
    public function replaceAppsV1NamespacedDeployment(string $name, Scale $scale, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['body'] = $scale;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1/namespaces/{namespace}/deployments/{name}/scale',
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#read-scale-v1-autoscaling
     */
    public function readAppsV1NamespacedReplicaSet(string $name, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1/namespaces/{namespace}/replicasets/{name}/scale',
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#patch-scale-v1-autoscaling
     */
    public function patchAppsV1NamespacedReplicaSet(string $name, array $patch, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1/namespaces/{namespace}/replicasets/{name}/scale',
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#put-scale-v1-autoscaling
     */
    public function replaceAppsV1NamespacedReplicaSet(string $name, Scale $scale, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['body'] = $scale;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1/namespaces/{namespace}/replicasets/{name}/scale',
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#read-scale-v1-autoscaling
     */
    public function readAppsV1NamespacedStatefulSet(string $name, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1/namespaces/{namespace}/statefulsets/{name}/scale',
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#patch-scale-v1-autoscaling
     */
    public function patchAppsV1NamespacedStatefulSet(string $name, array $patch, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1/namespaces/{namespace}/statefulsets/{name}/scale',
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#put-scale-v1-autoscaling
     */
    public function replaceAppsV1NamespacedStatefulSet(string $name, Scale $scale, array $query = []): Scale
    {
        $options['query'] = $query;
        $options['body'] = $scale;
        $options['model'] = Scale::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1/namespaces/{namespace}/statefulsets/{name}/scale',
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
