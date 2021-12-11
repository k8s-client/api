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

namespace K8s\Api\Service\Authorization\v1beta1;

use K8s\Api\Model\Api\Authorization\v1beta1\SelfSubjectAccessReview;
use K8s\Core\Contract\ApiInterface;

class SelfSubjectAccessReviewService
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
     * Create a SelfSubjectAccessReview
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#create-selfsubjectaccessreview-v1beta1-authorization-k8s-io
     */
    public function createAuthorizationV1beta1(SelfSubjectAccessReview $selfSubjectAccessReview, array $query = []): SelfSubjectAccessReview
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $selfSubjectAccessReview;
        $options['model'] = SelfSubjectAccessReview::class;
        $uri = $this->api->makeUri(
            '/apis/authorization.k8s.io/v1beta1/selfsubjectaccessreviews',
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
}
