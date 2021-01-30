<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.11.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\AdmissionRegistration\v1beta1;

use K8s\Api\Model\Api\AdmissionRegistration\v1beta1\MutatingWebhookConfiguration;
use K8s\Api\Model\Api\AdmissionRegistration\v1beta1\MutatingWebhookConfigurationList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\DeleteOptions;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class MutatingWebhookConfigurationService
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
     * List or watch objects of kind MutatingWebhookConfiguration
     *
     * Allowed query parameters:
     *   continue
     *   fieldSelector
     *   includeUninitialized
     *   labelSelector
     *   limit
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *   pretty
     *
     * @param array $query
     * @param callable|null $handler
     */
    public function listAdmissionRegistrationV1beta1(array $query = [], ?callable $handler = null): ?MutatingWebhookConfigurationList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = MutatingWebhookConfigurationList::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations',
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
     * Delete collection of MutatingWebhookConfiguration
     *
     * Allowed query parameters:
     *   continue
     *   fieldSelector
     *   includeUninitialized
     *   labelSelector
     *   limit
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *   pretty
     *
     * @param array $query
     * @param callable|null $handler
     */
    public function deleteAdmissionRegistrationV1beta1Collection(array $query = [], ?callable $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations',
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
     * Create a MutatingWebhookConfiguration
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function createAdmissionRegistrationV1beta1(MutatingWebhookConfiguration $mutatingWebhookConfiguration, array $query = []): MutatingWebhookConfiguration
    {
        $options['query'] = $query;
        $options['body'] = $mutatingWebhookConfiguration;
        $options['model'] = MutatingWebhookConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations',
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
     * Read the specified MutatingWebhookConfiguration
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     */
    public function readAdmissionRegistrationV1beta1(string $name, array $query = []): MutatingWebhookConfiguration
    {
        $options['query'] = $query;
        $options['model'] = MutatingWebhookConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations/{name}',
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
     * Delete a MutatingWebhookConfiguration
     *
     * Allowed query parameters:
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     */
    public function deleteAdmissionRegistrationV1beta1(string $name, DeleteOptions $deleteOptions, array $query = []): Status
    {
        $options['query'] = $query;
        $options['body'] = $deleteOptions;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations/{name}',
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
     * Partially update the specified MutatingWebhookConfiguration
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function patchAdmissionRegistrationV1beta1(string $name, PatchInterface $patch, array $query = []): MutatingWebhookConfiguration
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = MutatingWebhookConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations/{name}',
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
     * Replace the specified MutatingWebhookConfiguration
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function replaceAdmissionRegistrationV1beta1(string $name, MutatingWebhookConfiguration $mutatingWebhookConfiguration, array $query = []): MutatingWebhookConfiguration
    {
        $options['query'] = $query;
        $options['body'] = $mutatingWebhookConfiguration;
        $options['model'] = MutatingWebhookConfiguration::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations/{name}',
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
     * Watch individual changes to a list of MutatingWebhookConfiguration
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
     */
    public function watchAdmissionRegistrationV1beta1List(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1beta1/watch/mutatingwebhookconfigurations',
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
     * Watch changes to an object of kind MutatingWebhookConfiguration
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
     */
    public function watchAdmissionRegistrationV1beta1(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/admissionregistration.k8s.io/v1beta1/watch/mutatingwebhookconfigurations/{name}',
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
