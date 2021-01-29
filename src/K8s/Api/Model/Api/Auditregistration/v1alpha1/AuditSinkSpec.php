<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.13.12
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
 * AuditSinkSpec holds the spec for the audit sink
 */
class AuditSinkSpec
{
    /**
     * @Kubernetes\Attribute("policy",type="model",model=Policy::class,isRequired=true)
     * @var Policy
     */
    protected $policy;

    /**
     * @Kubernetes\Attribute("webhook",type="model",model=Webhook::class,isRequired=true)
     * @var Webhook
     */
    protected $webhook;

    /**
     * @param Policy $policy
     * @param Webhook $webhook
     */
    public function __construct(Policy $policy, Webhook $webhook)
    {
        $this->policy = $policy;
        $this->webhook = $webhook;
    }

    /**
     * Policy defines the policy for selecting which events should be sent to the webhook required
     */
    public function getPolicy(): Policy
    {
        return $this->policy;
    }

    /**
     * Policy defines the policy for selecting which events should be sent to the webhook required
     *
     * @return static
     */
    public function setPolicy(Policy $policy)
    {
        $this->policy = $policy;

        return $this;
    }

    /**
     * Webhook to send events required
     */
    public function getWebhook(): Webhook
    {
        return $this->webhook;
    }

    /**
     * Webhook to send events required
     *
     * @return static
     */
    public function setWebhook(Webhook $webhook)
    {
        $this->webhook = $webhook;

        return $this;
    }
}
