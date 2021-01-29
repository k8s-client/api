<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.12.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Authorization\v1;

use K8s\Api\Model\Api\Authorization\v1\SelfSubjectRulesReview;
use K8s\Core\Contract\ApiInterface;

class SelfSubjectRulesReviewService
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
     * Create a SelfSubjectRulesReview
     *
     * Allowed query parameters:
     *   dryRun
     *   includeUninitialized
     *   pretty
     *
     * @param array $query
     */
    public function createAuthorizationV1(SelfSubjectRulesReview $selfSubjectRulesReview, array $query = []): SelfSubjectRulesReview
    {
        $options['query'] = $query;
        $options['body'] = $selfSubjectRulesReview;
        $options['model'] = SelfSubjectRulesReview::class;
        $uri = $this->api->makeUri(
            '/apis/authorization.k8s.io/v1/selfsubjectrulesreviews',
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
