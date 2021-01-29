<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Auditregistration\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * Webhook holds the configuration of the webhook
 */
class Webhook
{
    /**
     * @Kubernetes\Attribute("clientConfig",type="model",model=WebhookClientConfig::class,isRequired=true)
     * @var WebhookClientConfig
     */
    protected $clientConfig;

    /**
     * @Kubernetes\Attribute("throttle",type="model",model=WebhookThrottleConfig::class)
     * @var WebhookThrottleConfig|null
     */
    protected $throttle = null;

    /**
     * @param WebhookClientConfig $clientConfig
     */
    public function __construct(WebhookClientConfig $clientConfig)
    {
        $this->clientConfig = $clientConfig;
    }

    /**
     * ClientConfig holds the connection parameters for the webhook required
     */
    public function getClientConfig(): WebhookClientConfig
    {
        return $this->clientConfig;
    }

    /**
     * ClientConfig holds the connection parameters for the webhook required
     *
     * @return static
     */
    public function setClientConfig(WebhookClientConfig $clientConfig)
    {
        $this->clientConfig = $clientConfig;

        return $this;
    }

    /**
     * Throttle holds the options for throttling the webhook
     */
    public function getThrottle(): ?WebhookThrottleConfig
    {
        return $this->throttle;
    }

    /**
     * Throttle holds the options for throttling the webhook
     *
     * @return static
     */
    public function setThrottle(WebhookThrottleConfig $throttle)
    {
        $this->throttle = $throttle;

        return $this;
    }
}
