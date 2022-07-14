<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.9
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Policy\v1beta1;

use K8s\Api\Model\Api\Policy\v1beta1\PodSecurityPolicy;
use K8s\Api\Model\Api\Policy\v1beta1\PodSecurityPolicyList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

/**
 * PodSecurityPolicy governs the ability to make requests that affect the Security Context that will be
 * applied to a pod and container. Deprecated in 1.21.
 */
class PodSecurityPolicyService
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
     * List or watch objects of kind PodSecurityPolicy
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#list-podsecuritypolicy-v1beta1-policy
     */
    public function list(array $query = [], $handler = null): ?PodSecurityPolicyList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = PodSecurityPolicyList::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/podsecuritypolicies',
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
     * Delete collection of PodSecurityPolicy
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#delete-collection-podsecuritypolicy-v1beta1-policy
     */
    public function deleteCollection(array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/podsecuritypolicies',
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
     * Create a PodSecurityPolicy
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#create-podsecuritypolicy-v1beta1-policy
     */
    public function create(PodSecurityPolicy $podSecurityPolicy, array $query = []): PodSecurityPolicy
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $podSecurityPolicy;
        $options['model'] = PodSecurityPolicy::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/podsecuritypolicies',
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
     * Read the specified PodSecurityPolicy
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#read-podsecuritypolicy-v1beta1-policy
     */
    public function read(string $name, array $query = []): PodSecurityPolicy
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = PodSecurityPolicy::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/podsecuritypolicies/{name}',
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
     * Delete a PodSecurityPolicy
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#delete-podsecuritypolicy-v1beta1-policy
     */
    public function delete(string $name, array $query = []): PodSecurityPolicy
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = PodSecurityPolicy::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/podsecuritypolicies/{name}',
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
     * Partially update the specified PodSecurityPolicy
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#patch-podsecuritypolicy-v1beta1-policy
     */
    public function patch(string $name, PatchInterface $patch, array $query = []): PodSecurityPolicy
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = PodSecurityPolicy::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/podsecuritypolicies/{name}',
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
     * Replace the specified PodSecurityPolicy
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#put-podsecuritypolicy-v1beta1-policy
     */
    public function replace(string $name, PodSecurityPolicy $podSecurityPolicy, array $query = []): PodSecurityPolicy
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $podSecurityPolicy;
        $options['model'] = PodSecurityPolicy::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/podsecuritypolicies/{name}',
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
     * Watch individual changes to a list of PodSecurityPolicy. deprecated: use the 'watch' parameter with
     * a list operation instead.
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#watchlist-podsecuritypolicy-v1beta1-policy
     */
    public function watchList(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/watch/podsecuritypolicies',
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
     * Watch changes to an object of kind PodSecurityPolicy. deprecated: use the 'watch' parameter with a
     * list operation instead, filtered to a single item with the 'fieldSelector' parameter.
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.23/#watch-podsecuritypolicy-v1beta1-policy
     */
    public function watch(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/watch/podsecuritypolicies/{name}',
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
