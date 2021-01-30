<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.18.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Extensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * IngressSpec describes the Ingress the user wishes to exist.
 */
class IngressSpec
{
    /**
     * @Kubernetes\Attribute("backend",type="model",model=IngressBackend::class)
     * @var IngressBackend|null
     */
    protected $backend = null;

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
     * @param IngressBackend|null $backend
     * @param string|null $ingressClassName
     * @param iterable|IngressRule[] $rules
     * @param iterable|IngressTLS[] $tls
     */
    public function __construct(?IngressBackend $backend = null, ?string $ingressClassName = null, iterable $rules = [], iterable $tls = [])
    {
        $this->backend = $backend;
        $this->ingressClassName = $ingressClassName;
        $this->rules = new Collection($rules);
        $this->tls = new Collection($tls);
    }

    /**
     * A default backend capable of servicing requests that don't match any rule. At least one of 'backend'
     * or 'rules' must be specified. This field is optional to allow the loadbalancer controller or
     * defaulting logic to specify a global default.
     */
    public function getBackend(): ?IngressBackend
    {
        return $this->backend;
    }

    /**
     * A default backend capable of servicing requests that don't match any rule. At least one of 'backend'
     * or 'rules' must be specified. This field is optional to allow the loadbalancer controller or
     * defaulting logic to specify a global default.
     *
     * @return static
     */
    public function setBackend(IngressBackend $backend)
    {
        $this->backend = $backend;

        return $this;
    }

    /**
     * IngressClassName is the name of the IngressClass cluster resource. The associated IngressClass
     * defines which controller will implement the resource. This replaces the deprecated
     * `kubernetes.io/ingress.class` annotation. For backwards compatibility, when that annotation is set,
     * it must be given precedence over this field. The controller may emit a warning if the field and
     * annotation have different values. Implementations of this API should ignore Ingresses without a
     * class specified. An IngressClass resource may be marked as default, which can be used to set a
     * default value for this field. For more information, refer to the IngressClass documentation.
     */
    public function getIngressClassName(): ?string
    {
        return $this->ingressClassName;
    }

    /**
     * IngressClassName is the name of the IngressClass cluster resource. The associated IngressClass
     * defines which controller will implement the resource. This replaces the deprecated
     * `kubernetes.io/ingress.class` annotation. For backwards compatibility, when that annotation is set,
     * it must be given precedence over this field. The controller may emit a warning if the field and
     * annotation have different values. Implementations of this API should ignore Ingresses without a
     * class specified. An IngressClass resource may be marked as default, which can be used to set a
     * default value for this field. For more information, refer to the IngressClass documentation.
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
