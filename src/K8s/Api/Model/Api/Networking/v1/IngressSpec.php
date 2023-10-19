<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Networking\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * IngressSpec describes the Ingress the user wishes to exist.
 */
class IngressSpec
{
    /**
     * @Kubernetes\Attribute("defaultBackend",type="model",model=IngressBackend::class)
     * @var IngressBackend|null
     */
    protected $defaultBackend = null;

    /**
     * @Kubernetes\Attribute("ingressClassName")
     * @var string|null
     */
    protected $ingressClassName = null;

    /**
     * @Kubernetes\Attribute("rules",type="collection",model=IngressRule::class)
     * @var iterable|IngressRule[]|null
     */
    protected $rules = null;

    /**
     * @Kubernetes\Attribute("tls",type="collection",model=IngressTLS::class)
     * @var iterable|IngressTLS[]|null
     */
    protected $tls = null;

    /**
     * @param IngressBackend|null $defaultBackend
     * @param string|null $ingressClassName
     * @param iterable|IngressRule[] $rules
     * @param iterable|IngressTLS[] $tls
     */
    public function __construct(?IngressBackend $defaultBackend = null, ?string $ingressClassName = null, iterable $rules = [], iterable $tls = [])
    {
        $this->defaultBackend = $defaultBackend;
        $this->ingressClassName = $ingressClassName;
        $this->rules = new Collection($rules);
        $this->tls = new Collection($tls);
    }

    /**
     * DefaultBackend is the backend that should handle requests that don't match any rule. If Rules are
     * not specified, DefaultBackend must be specified. If DefaultBackend is not set, the handling of
     * requests that do not match any of the rules will be up to the Ingress controller.
     */
    public function getDefaultBackend(): ?IngressBackend
    {
        return $this->defaultBackend;
    }

    /**
     * DefaultBackend is the backend that should handle requests that don't match any rule. If Rules are
     * not specified, DefaultBackend must be specified. If DefaultBackend is not set, the handling of
     * requests that do not match any of the rules will be up to the Ingress controller.
     *
     * @return static
     */
    public function setDefaultBackend(IngressBackend $defaultBackend)
    {
        $this->defaultBackend = $defaultBackend;

        return $this;
    }

    /**
     * IngressClassName is the name of an IngressClass cluster resource. Ingress controller implementations
     * use this field to know whether they should be serving this Ingress resource, by a transitive
     * connection (controller -> IngressClass -> Ingress resource). Although the
     * `kubernetes.io/ingress.class` annotation (simple constant name) was never formally defined, it was
     * widely supported by Ingress controllers to create a direct binding between Ingress controller and
     * Ingress resources. Newly created Ingress resources should prefer using the field. However, even
     * though the annotation is officially deprecated, for backwards compatibility reasons, ingress
     * controllers should still honor that annotation if present.
     */
    public function getIngressClassName(): ?string
    {
        return $this->ingressClassName;
    }

    /**
     * IngressClassName is the name of an IngressClass cluster resource. Ingress controller implementations
     * use this field to know whether they should be serving this Ingress resource, by a transitive
     * connection (controller -> IngressClass -> Ingress resource). Although the
     * `kubernetes.io/ingress.class` annotation (simple constant name) was never formally defined, it was
     * widely supported by Ingress controllers to create a direct binding between Ingress controller and
     * Ingress resources. Newly created Ingress resources should prefer using the field. However, even
     * though the annotation is officially deprecated, for backwards compatibility reasons, ingress
     * controllers should still honor that annotation if present.
     *
     * @return static
     */
    public function setIngressClassName(string $ingressClassName)
    {
        $this->ingressClassName = $ingressClassName;

        return $this;
    }

    /**
     * A list of host rules used to configure the Ingress. If unspecified, or no rule matches, all traffic
     * is sent to the default backend.
     *
     * @return iterable|IngressRule[]
     */
    public function getRules(): ?iterable
    {
        return $this->rules;
    }

    /**
     * A list of host rules used to configure the Ingress. If unspecified, or no rule matches, all traffic
     * is sent to the default backend.
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
    public function addRules(IngressRule $rule)
    {
        if (!$this->rules) {
            $this->rules = new Collection();
        }
        $this->rules[] = $rule;

        return $this;
    }

    /**
     * TLS configuration. Currently the Ingress only supports a single TLS port, 443. If multiple members
     * of this list specify different hosts, they will be multiplexed on the same port according to the
     * hostname specified through the SNI TLS extension, if the ingress controller fulfilling the ingress
     * supports SNI.
     *
     * @return iterable|IngressTLS[]
     */
    public function getTls(): ?iterable
    {
        return $this->tls;
    }

    /**
     * TLS configuration. Currently the Ingress only supports a single TLS port, 443. If multiple members
     * of this list specify different hosts, they will be multiplexed on the same port according to the
     * hostname specified through the SNI TLS extension, if the ingress controller fulfilling the ingress
     * supports SNI.
     *
     * @return static
     */
    public function setTls(iterable $tls)
    {
        $this->tls = $tls;

        return $this;
    }

    /**
     * @return static
     */
    public function addTls(IngressTLS $tl)
    {
        if (!$this->tls) {
            $this->tls = new Collection();
        }
        $this->tls[] = $tl;

        return $this;
    }
}
