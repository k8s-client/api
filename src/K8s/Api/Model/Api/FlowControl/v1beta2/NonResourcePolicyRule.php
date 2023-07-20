<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\FlowControl\v1beta2;

use K8s\Core\Annotation as Kubernetes;

/**
 * NonResourcePolicyRule is a predicate that matches non-resource requests according to their verb and
 * the target non-resource URL. A NonResourcePolicyRule matches a request if and only if both (a) at
 * least one member of verbs matches the request and (b) at least one member of nonResourceURLs matches
 * the request.
 */
class NonResourcePolicyRule
{
    /**
     * @Kubernetes\Attribute("nonResourceURLs",isRequired=true)
     * @var string[]
     */
    protected $nonResourceURLs;

    /**
     * @Kubernetes\Attribute("verbs",isRequired=true)
     * @var string[]
     */
    protected $verbs;

    /**
     * @param string[] $nonResourceURLs
     * @param string[] $verbs
     */
    public function __construct(array $nonResourceURLs, array $verbs)
    {
        $this->nonResourceURLs = $nonResourceURLs;
        $this->verbs = $verbs;
    }

    /**
     * `nonResourceURLs` is a set of url prefixes that a user should have access to and may not be empty.
     * For example:
     *   - "/healthz" is legal
     *   - "/hea*" is illegal
     *   - "/hea" is legal but matches nothing
     *   - "/hea/*" also matches nothing
     *   - "/healthz/*" matches all per-component health checks.
     * "*" matches all non-resource urls. if it is present, it must be the only entry. Required.
     */
    public function getNonResourceURLs(): array
    {
        return $this->nonResourceURLs;
    }

    /**
     * `nonResourceURLs` is a set of url prefixes that a user should have access to and may not be empty.
     * For example:
     *   - "/healthz" is legal
     *   - "/hea*" is illegal
     *   - "/hea" is legal but matches nothing
     *   - "/hea/*" also matches nothing
     *   - "/healthz/*" matches all per-component health checks.
     * "*" matches all non-resource urls. if it is present, it must be the only entry. Required.
     *
     * @return static
     */
    public function setNonResourceURLs(array $nonResourceURLs)
    {
        $this->nonResourceURLs = $nonResourceURLs;

        return $this;
    }

    /**
     * `verbs` is a list of matching verbs and may not be empty. "*" matches all verbs. If it is present,
     * it must be the only entry. Required.
     */
    public function getVerbs(): array
    {
        return $this->verbs;
    }

    /**
     * `verbs` is a list of matching verbs and may not be empty. "*" matches all verbs. If it is present,
     * it must be the only entry. Required.
     *
     * @return static
     */
    public function setVerbs(array $verbs)
    {
        $this->verbs = $verbs;

        return $this;
    }
}
