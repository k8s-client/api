<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.14
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Core\v1;

use K8s\Api\Model\Api\Core\v1\EphemeralContainers;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class EphemeralContainersService
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
     * Read ephemeralcontainers of the specified Pod
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#read-ephemeralcontainers-v1-core
     */
    public function readNamespacedPod(string $name, array $query = []): EphemeralContainers
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = EphemeralContainers::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/ephemeralcontainers',
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
     * Partially update ephemeralcontainers of the specified Pod
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#patch-ephemeralcontainers-v1-core
     */
    public function patchNamespacedPod(string $name, PatchInterface $patch, array $query = []): EphemeralContainers
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = EphemeralContainers::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/ephemeralcontainers',
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
     * Replace ephemeralcontainers of the specified Pod
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.21/#put-ephemeralcontainers-v1-core
     */
    public function replaceNamespacedPod(string $name, EphemeralContainers $ephemeralContainers, array $query = []): EphemeralContainers
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $ephemeralContainers;
        $options['model'] = EphemeralContainers::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/ephemeralcontainers',
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
