<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.4
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
 * EventSource contains information for an event.
 */
class EventSource
{
    /**
     * @Kubernetes\Attribute("component")
     * @var string|null
     */
    protected $component = null;

    /**
     * @Kubernetes\Attribute("host")
     * @var string|null
     */
    protected $host = null;

    /**
     * @param string|null $component
     * @param string|null $host
     */
    public function __construct(?string $component = null, ?string $host = null)
    {
        $this->component = $component;
        $this->host = $host;
    }

    /**
     * Component from which the event is generated.
     */
    public function getComponent(): ?string
    {
        return $this->component;
    }

    /**
     * Component from which the event is generated.
     *
     * @return static
     */
    public function setComponent(string $component)
    {
        $this->component = $component;

        return $this;
    }

    /**
     * Node name on which the event is generated.
     */
    public function getHost(): ?string
    {
        return $this->host;
    }

    /**
     * Node name on which the event is generated.
     *
     * @return static
     */
    public function setHost(string $host)
    {
        $this->host = $host;

        return $this;
    }
}
