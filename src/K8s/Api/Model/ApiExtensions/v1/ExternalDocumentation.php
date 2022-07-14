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

namespace K8s\Api\Model\ApiExtensions\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * ExternalDocumentation allows referencing an external resource for extended documentation.
 */
class ExternalDocumentation
{
    /**
     * @Kubernetes\Attribute("description")
     * @var string|null
     */
    protected $description = null;

    /**
     * @Kubernetes\Attribute("url")
     * @var string|null
     */
    protected $url = null;

    /**
     * @param string|null $description
     * @param string|null $url
     */
    public function __construct(?string $description = null, ?string $url = null)
    {
        $this->description = $description;
        $this->url = $url;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return static
     */
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return static
     */
    public function setUrl(string $url)
    {
        $this->url = $url;

        return $this;
    }
}
