<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.13
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Core\v1;

use K8s\Api\Model\Api\Core\v1\Binding;
use K8s\Core\Contract\ApiInterface;

class BindingService
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
     * Create a Binding
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#create-binding-v1-core
     */
    public function createNamespaced(Binding $binding, array $query = []): Binding
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $binding;
        $options['model'] = Binding::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/bindings',
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
     * Create binding of a Pod
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#create-binding-v1-core
     */
    public function createNamespacedPod(string $name, Binding $binding, array $query = []): Binding
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $binding;
        $options['model'] = Binding::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/binding',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'post',
            $options
        );
    }
}
