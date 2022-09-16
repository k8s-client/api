<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.14
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Networking\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * ServiceBackendPort is the service port being referenced.
 */
class ServiceBackendPort
{
    /**
     * @Kubernetes\Attribute("name")
     * @var string|null
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("number")
     * @var int|null
     */
    protected $number = null;

    /**
     * @param string|null $name
     * @param int|null $number
     */
    public function __construct(?string $name = null, ?int $number = null)
    {
        $this->name = $name;
        $this->number = $number;
    }

    /**
     * Name is the name of the port on the Service. This is a mutually exclusive setting with "Number".
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name is the name of the port on the Service. This is a mutually exclusive setting with "Number".
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Number is the numerical port number (e.g. 80) on the Service. This is a mutually exclusive setting
     * with "Name".
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * Number is the numerical port number (e.g. 80) on the Service. This is a mutually exclusive setting
     * with "Name".
     *
     * @return static
     */
    public function setNumber(int $number)
    {
        $this->number = $number;

        return $this;
    }
}
