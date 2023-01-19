<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.6
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * PodOS defines the OS parameters of a pod.
 */
class PodOS
{
    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Name is the name of the operating system. The currently supported values are linux and windows.
     * Additional value may be defined in future and can be one of:
     * https://github.com/opencontainers/runtime-spec/blob/master/config.md#platform-specific-configuration
     * Clients should expect to handle additional values and treat unrecognized values in this field as os:
     * null
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name is the name of the operating system. The currently supported values are linux and windows.
     * Additional value may be defined in future and can be one of:
     * https://github.com/opencontainers/runtime-spec/blob/master/config.md#platform-specific-configuration
     * Clients should expect to handle additional values and treat unrecognized values in this field as os:
     * null
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}
