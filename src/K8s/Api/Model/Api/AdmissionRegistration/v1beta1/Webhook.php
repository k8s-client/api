<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.12.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AdmissionRegistration\v1beta1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * Webhook describes an admission webhook and the resources and operations it applies to.
 */
class Webhook
{
    /**
     * @Kubernetes\Attribute("clientConfig",type="model",model=WebhookClientConfig::class,isRequired=true)
     * @var WebhookClientConfig
     */
    protected $clientConfig;

    /**
     * @Kubernetes\Attribute("failurePolicy")
     * @var string|null
     */
    protected $failurePolicy = null;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("namespaceSelector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $namespaceSelector = null;

    /**
     * @Kubernetes\Attribute("rules",type="collection",model=RuleWithOperations::class)
     * @var iterable|RuleWithOperations[]|null
     */
    protected $rules = null;

    /**
     * @Kubernetes\Attribute("sideEffects")
     * @var string|null
     */
    protected $sideEffects = null;

    /**
     * @param WebhookClientConfig $clientConfig
     * @param string $name
     */
    public function __construct(WebhookClientConfig $clientConfig, string $name)
    {
        $this->clientConfig = $clientConfig;
        $this->name = $name;
    }

    /**
     * ClientConfig defines how to communicate with the hook. Required
     */
    public function getClientConfig(): WebhookClientConfig
    {
        return $this->clientConfig;
    }

    /**
     * ClientConfig defines how to communicate with the hook. Required
     *
     * @return static
     */
    public function setClientConfig(WebhookClientConfig $clientConfig)
    {
        $this->clientConfig = $clientConfig;

        return $this;
    }

    /**
     * FailurePolicy defines how unrecognized errors from the admission endpoint are handled - allowed
     * values are Ignore or Fail. Defaults to Ignore.
     */
    public function getFailurePolicy(): ?string
    {
        return $this->failurePolicy;
    }

    /**
     * FailurePolicy defines how unrecognized errors from the admission endpoint are handled - allowed
     * values are Ignore or Fail. Defaults to Ignore.
     *
     * @return static
     */
    public function setFailurePolicy(string $failurePolicy)
    {
        $this->failurePolicy = $failurePolicy;

        return $this;
    }

    /**
     * The name of the admission webhook. Name should be fully qualified, e.g., imagepolicy.kubernetes.io,
     * where "imagepolicy" is the name of the webhook, and kubernetes.io is the name of the organization.
     * Required.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the admission webhook. Name should be fully qualified, e.g., imagepolicy.kubernetes.io,
     * where "imagepolicy" is the name of the webhook, and kubernetes.io is the name of the organization.
     * Required.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * NamespaceSelector decides whether to run the webhook on an object based on whether the namespace for
     * that object matches the selector. If the object itself is a namespace, the matching is performed on
     * object.metadata.labels. If the object is another cluster scoped resource, it never skips the
     * webhook.
     *
     * For example, to run the webhook on any objects whose namespace is not associated with "runlevel" of
     * "0" or "1";  you will set the selector as follows: "namespaceSelector": {
     *   "matchExpressions": [
     *     {
     *       "key": "runlevel",
     *       "operator": "NotIn",
     *       "values": [
     *         "0",
     *         "1"
     *       ]
     *     }
     *   ]
     * }
     *
     * If instead you want to only run the webhook on any objects whose namespace is associated with the
     * "environment" of "prod" or "staging"; you will set the selector as follows: "namespaceSelector": {
     *   "matchExpressions": [
     *     {
     *       "key": "environment",
     *       "operator": "In",
     *       "values": [
     *         "prod",
     *         "staging"
     *       ]
     *     }
     *   ]
     * }
     *
     * See https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/ for more examples of
     * label selectors.
     *
     * Default to the empty LabelSelector, which matches everything.
     */
    public function getNamespaceSelector(): ?LabelSelector
    {
        return $this->namespaceSelector;
    }

    /**
     * NamespaceSelector decides whether to run the webhook on an object based on whether the namespace for
     * that object matches the selector. If the object itself is a namespace, the matching is performed on
     * object.metadata.labels. If the object is another cluster scoped resource, it never skips the
     * webhook.
     *
     * For example, to run the webhook on any objects whose namespace is not associated with "runlevel" of
     * "0" or "1";  you will set the selector as follows: "namespaceSelector": {
     *   "matchExpressions": [
     *     {
     *       "key": "runlevel",
     *       "operator": "NotIn",
     *       "values": [
     *         "0",
     *         "1"
     *       ]
     *     }
     *   ]
     * }
     *
     * If instead you want to only run the webhook on any objects whose namespace is associated with the
     * "environment" of "prod" or "staging"; you will set the selector as follows: "namespaceSelector": {
     *   "matchExpressions": [
     *     {
     *       "key": "environment",
     *       "operator": "In",
     *       "values": [
     *         "prod",
     *         "staging"
     *       ]
     *     }
     *   ]
     * }
     *
     * See https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/ for more examples of
     * label selectors.
     *
     * Default to the empty LabelSelector, which matches everything.
     *
     * @return static
     */
    public function setNamespaceSelector(LabelSelector $namespaceSelector)
    {
        $this->namespaceSelector = $namespaceSelector;

        return $this;
    }

    /**
     * Rules describes what operations on what resources/subresources the webhook cares about. The webhook
     * cares about an operation if it matches _any_ Rule. However, in order to prevent
     * ValidatingAdmissionWebhooks and MutatingAdmissionWebhooks from putting the cluster in a state which
     * cannot be recovered from without completely disabling the plugin, ValidatingAdmissionWebhooks and
     * MutatingAdmissionWebhooks are never called on admission requests for ValidatingWebhookConfiguration
     * and MutatingWebhookConfiguration objects.
     *
     * @return iterable|RuleWithOperations[]
     */
    public function getRules(): ?iterable
    {
        return $this->rules;
    }

    /**
     * Rules describes what operations on what resources/subresources the webhook cares about. The webhook
     * cares about an operation if it matches _any_ Rule. However, in order to prevent
     * ValidatingAdmissionWebhooks and MutatingAdmissionWebhooks from putting the cluster in a state which
     * cannot be recovered from without completely disabling the plugin, ValidatingAdmissionWebhooks and
     * MutatingAdmissionWebhooks are never called on admission requests for ValidatingWebhookConfiguration
     * and MutatingWebhookConfiguration objects.
     *
     * @return static
     */
    public function setRules(iterable $rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * @return static
     */
    public function addRules(RuleWithOperations $rule)
    {
        if (!$this->rules) {
            $this->rules = new Collection();
        }
        $this->rules[] = $rule;

        return $this;
    }

    /**
     * SideEffects states whether this webhookk has side effects. Acceptable values are: Unknown, None,
     * Some, NoneOnDryRun Webhooks with side effects MUST implement a reconciliation system, since a
     * request may be rejected by a future step in the admission change and the side effects therefore need
     * to be undone. Requests with the dryRun attribute will be auto-rejected if they match a webhook with
     * sideEffects == Unknown or Some. Defaults to Unknown.
     */
    public function getSideEffects(): ?string
    {
        return $this->sideEffects;
    }

    /**
     * SideEffects states whether this webhookk has side effects. Acceptable values are: Unknown, None,
     * Some, NoneOnDryRun Webhooks with side effects MUST implement a reconciliation system, since a
     * request may be rejected by a future step in the admission change and the side effects therefore need
     * to be undone. Requests with the dryRun attribute will be auto-rejected if they match a webhook with
     * sideEffects == Unknown or Some. Defaults to Unknown.
     *
     * @return static
     */
    public function setSideEffects(string $sideEffects)
    {
        $this->sideEffects = $sideEffects;

        return $this;
    }
}