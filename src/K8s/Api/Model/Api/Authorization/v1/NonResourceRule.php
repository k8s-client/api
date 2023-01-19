<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.16
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Authorization\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * NonResourceRule holds information that describes a rule for the non-resource
 */
class NonResourceRule
{
    /**
     * @Kubernetes\Attribute("nonResourceURLs")
     * @var string[]|null
     */
    protected $nonResourceURLs = null;

    /**
     * @Kubernetes\Attribute("verbs",isRequired=true)
     * @var string[]
     */
    protected $verbs;

    /**
     * @param string[] $verbs
     */
    public function __construct(array $verbs)
    {
        $this->verbs = $verbs;
    }

    /**
     * NonResourceURLs is a set of partial urls that a user should have access to.  *s are allowed, but
     * only as the full, final step in the path.  "*" means all.
     */
    public function getNonResourceURLs(): ?array
    {
        return $this->nonResourceURLs;
    }

    /**
     * NonResourceURLs is a set of partial urls that a user should have access to.  *s are allowed, but
     * only as the full, final step in the path.  "*" means all.
     *
     * @return static
     */
    public function setNonResourceURLs(array $nonResourceURLs)
    {
        $this->nonResourceURLs = $nonResourceURLs;

        return $this;
    }

    /**
     * Verb is a list of kubernetes non-resource API verbs, like: get, post, put, delete, patch, head,
     * options.  "*" means all.
     */
    public function getVerbs(): array
    {
        return $this->verbs;
    }

    /**
     * Verb is a list of kubernetes non-resource API verbs, like: get, post, put, delete, patch, head,
     * options.  "*" means all.
     *
     * @return static
     */
    public function setVerbs(array $verbs)
    {
        $this->verbs = $verbs;

        return $this;
    }
}
