<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\AdmissionRegistration\v1;

use K8s\Api\Model\Api\AdmissionRegistration\v1\ValidatingWebhookConfiguration;
use K8s\Api\Model\Api\AdmissionRegistration\v1\ValidatingWebhookConfigurationList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class ValidatingWebhookConfigurationService
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
     * List or watch objects of kind ValidatingWebhookConfiguration
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.25/#list-validatingwebhookconfiguration-v1-admissionregistration-k8s-io
     */
    public function listAdmissionRegistrationV1(array $query = [], $handler = null): ?ValidatingWebhookConfigurationList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = ValidatingWebhookConfigurationList::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations',
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
     * Delete collection of ValidatingWebhookConfiguration
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.25/#delete-collection-validatingwebhookconfiguration-v1-admissionregistration-k8s-io
     */
    public function deleteAdmissionRegistrationV1Collection(array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations',
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
     * Create a ValidatingWebhookConfiguration
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.25/#create-validatingwebhookconfiguration-v1-admissionregistration-k8s-io
     */
    public function createAdmissionRegistrationV1(ValidatingWebhookConfiguration $validatingWebhookConfiguration, array $query = []): ValidatingWebhookConfiguration
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $validatingWebhookConfiguration;
        $options['model'] = ValidatingWebhookConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations',
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
     * Read the specified ValidatingWebhookConfiguration
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.25/#read-validatingwebhookconfiguration-v1-admissionregistration-k8s-io
     */
    public function readAdmissionRegistrationV1(string $name, array $query = []): ValidatingWebhookConfiguration
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = ValidatingWebhookConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations/{name}',
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
     * Delete a ValidatingWebhookConfiguration
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.25/#delete-validatingwebhookconfiguration-v1-admissionregistration-k8s-io
     */
    public function deleteAdmissionRegistrationV1(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations/{name}',
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
     * Partially update the specified ValidatingWebhookConfiguration
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.25/#patch-validatingwebhookconfiguration-v1-admissionregistration-k8s-io
     */
    public function patchAdmissionRegistrationV1(string $name, PatchInterface $patch, array $query = []): ValidatingWebhookConfiguration
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = ValidatingWebhookConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations/{name}',
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
     * Replace the specified ValidatingWebhookConfiguration
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   fieldValidation
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.25/#put-validatingwebhookconfiguration-v1-admissionregistration-k8s-io
     */
    public function replaceAdmissionRegistrationV1(string $name, ValidatingWebhookConfiguration $validatingWebhookConfiguration, array $query = []): ValidatingWebhookConfiguration
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $validatingWebhookConfiguration;
        $options['model'] = ValidatingWebhookConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations/{name}',
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
     * Watch individual changes to a list of ValidatingWebhookConfiguration. deprecated: use the 'watch'
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
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.25/#watchlist-validatingwebhookconfiguration-v1-admissionregistration-k8s-io
     */
    public function watchAdmissionRegistrationV1List(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1/watch/validatingwebhookconfigurations',
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
     * Watch changes to an object of kind ValidatingWebhookConfiguration. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the 'fieldSelector'
     * parameter.
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.25/#watch-validatingwebhookconfiguration-v1-admissionregistration-k8s-io
     */
    public function watchAdmissionRegistrationV1(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1/watch/validatingwebhookconfigurations/{name}',
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
