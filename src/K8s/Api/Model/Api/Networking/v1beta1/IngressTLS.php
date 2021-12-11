<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Networking\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * IngressTLS describes the transport layer security associated with an Ingress.
 */
class IngressTLS
{
    /**
     * @Kubernetes\Attribute("hosts")
     * @var string[]|null
     */
    protected $hosts = null;

    /**
     * @Kubernetes\Attribute("secretName")
     * @var string|null
     */
    protected $secretName = null;

    /**
     * @param string[]|null $hosts
     * @param string|null $secretName
     */
    public function __construct(?array $hosts = null, ?string $secretName = null)
    {
        $this->hosts = $hosts;
        $this->secretName = $secretName;
    }

    /**
     * Hosts are a list of hosts included in the TLS certificate. The values in this list must match the
     * name/s used in the tlsSecret. Defaults to the wildcard host setting for the loadbalancer controller
     * fulfilling this Ingress, if left unspecified.
     */
    public function getHosts(): ?array
    {
        return $this->hosts;
    }

    /**
     * Hosts are a list of hosts included in the TLS certificate. The values in this list must match the
     * name/s used in the tlsSecret. Defaults to the wildcard host setting for the loadbalancer controller
     * fulfilling this Ingress, if left unspecified.
     *
     * @return static
     */
    public function setHosts(array $hosts)
    {
        $this->hosts = $hosts;

        return $this;
    }

    /**
     * SecretName is the name of the secret used to terminate SSL traffic on 443. Field is left optional to
     * allow SSL routing based on SNI hostname alone. If the SNI host in a listener conflicts with the
     * "Host" header field used by an IngressRule, the SNI host is used for termination and value of the
     * Host header is used for routing.
     */
    public function getSecretName(): ?string
    {
        return $this->secretName;
    }

    /**
     * SecretName is the name of the secret used to terminate SSL traffic on 443. Field is left optional to
     * allow SSL routing based on SNI hostname alone. If the SNI host in a listener conflicts with the
     * "Host" header field used by an IngressRule, the SNI host is used for termination and value of the
     * Host header is used for routing.
     *
     * @return static
     */
    public function setSecretName(string $secretName)
    {
        $this->secretName = $secretName;

        return $this;
    }
}
