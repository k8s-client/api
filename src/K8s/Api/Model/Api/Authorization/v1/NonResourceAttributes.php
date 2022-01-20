<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.9
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
 * NonResourceAttributes includes the authorization attributes available for non-resource requests to
 * the Authorizer interface
 */
class NonResourceAttributes
{
    /**
     * @Kubernetes\Attribute("path")
     * @var string|null
     */
    protected $path = null;

    /**
     * @Kubernetes\Attribute("verb")
     * @var string|null
     */
    protected $verb = null;

    /**
     * @param string|null $path
     * @param string|null $verb
     */
    public function __construct(?string $path = null, ?string $verb = null)
    {
        $this->path = $path;
        $this->verb = $verb;
    }

    /**
     * Path is the URL path of the request
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * Path is the URL path of the request
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Verb is the standard HTTP verb
     */
    public function getVerb(): ?string
    {
        return $this->verb;
    }

    /**
     * Verb is the standard HTTP verb
     *
     * @return static
     */
    public function setVerb(string $verb)
    {
        $this->verb = $verb;

        return $this;
    }
}
