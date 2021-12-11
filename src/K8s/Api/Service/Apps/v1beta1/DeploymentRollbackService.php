<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.16.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Apps\v1beta1;

use K8s\Api\Model\Api\Apps\v1beta1\DeploymentRollback;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Core\Contract\ApiInterface;

class DeploymentRollbackService
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
     * Create rollback of a Deployment
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#create-deploymentrollback-v1beta1-apps
     */
    public function createNamespaced(string $name, DeploymentRollback $deploymentRollback, array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $deploymentRollback;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/rollback',
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
