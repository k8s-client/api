<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.13.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\AdmissionRegistration\v1alpha1;

use K8s\Api\Model\Api\AdmissionRegistration\v1alpha1\InitializerConfiguration;
use K8s\Api\Model\Api\AdmissionRegistration\v1alpha1\InitializerConfigurationList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class InitializerConfigurationService
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
     * List or watch objects of kind InitializerConfiguration
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
     * @param callable|null $handler
     */
    public function listAdmissionRegistrationV1alpha1(array $query = [], ?callable $handler = null): ?InitializerConfigurationList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = InitializerConfigurationList::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1alpha1/initializerconfigurations',
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
     * Delete collection of InitializerConfiguration
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
     * @param callable|null $handler
     */
    public function deleteAdmissionRegistrationV1alpha1Collection(array $query = [], ?callable $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1alpha1/initializerconfigurations',
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
     * Create an InitializerConfiguration
     *
     * Allowed query parameters:
     *   dryRun
     *   includeUninitialized
     *   pretty
     *
     * @param array $query
     */
    public function createAdmissionRegistrationV1alpha1(InitializerConfiguration $initializerConfiguration, array $query = []): InitializerConfiguration
    {
        $options['query'] = $query;
        $options['body'] = $initializerConfiguration;
        $options['model'] = InitializerConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1alpha1/initializerconfigurations',
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
     * Read the specified InitializerConfiguration
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     */
    public function readAdmissionRegistrationV1alpha1(string $name, array $query = []): InitializerConfiguration
    {
        $options['query'] = $query;
        $options['model'] = InitializerConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1alpha1/initializerconfigurations/{name}',
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
     * Delete an InitializerConfiguration
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
    public function deleteAdmissionRegistrationV1alpha1(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1alpha1/initializerconfigurations/{name}',
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
     * Partially update the specified InitializerConfiguration
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function patchAdmissionRegistrationV1alpha1(string $name, PatchInterface $patch, array $query = []): InitializerConfiguration
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = InitializerConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1alpha1/initializerconfigurations/{name}',
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
     * Replace the specified InitializerConfiguration
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function replaceAdmissionRegistrationV1alpha1(string $name, InitializerConfiguration $initializerConfiguration, array $query = []): InitializerConfiguration
    {
        $options['query'] = $query;
        $options['body'] = $initializerConfiguration;
        $options['model'] = InitializerConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1alpha1/initializerconfigurations/{name}',
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
     * Watch individual changes to a list of InitializerConfiguration. deprecated: use the 'watch'
     * parameter with a list operation instead.
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
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     */
    public function watchAdmissionRegistrationV1alpha1List(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1alpha1/watch/initializerconfigurations',
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
     * Watch changes to an object of kind InitializerConfiguration. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
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
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     */
    public function watchAdmissionRegistrationV1alpha1(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1alpha1/watch/initializerconfigurations/{name}',
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
