<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.9
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Certificates\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * CertificateSigningRequestStatus contains conditions used to indicate approved/denied/failed status
 * of the request, and the issued certificate.
 */
class CertificateSigningRequestStatus
{
    /**
     * @Kubernetes\Attribute("certificate")
     * @var string|null
     */
    protected $certificate = null;

    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=CertificateSigningRequestCondition::class)
     * @var iterable|CertificateSigningRequestCondition[]|null
     */
    protected $conditions = null;

    /**
     * @param string|null $certificate
     * @param iterable|CertificateSigningRequestCondition[] $conditions
     */
    public function __construct(?string $certificate = null, iterable $conditions = [])
    {
        $this->certificate = $certificate;
        $this->conditions = new Collection($conditions);
    }

    /**
     * certificate is populated with an issued certificate by the signer after an Approved condition is
     * present. This field is set via the /status subresource. Once populated, this field is immutable.
     *
     * If the certificate signing request is denied, a condition of type "Denied" is added and this field
     * remains empty. If the signer cannot issue the certificate, a condition of type "Failed" is added and
     * this field remains empty.
     *
     * Validation requirements:
     *  1. certificate must contain one or more PEM blocks.
     *  2. All PEM blocks must have the "CERTIFICATE" label, contain no headers, and the encoded data
     *   must be a BER-encoded ASN.1 Certificate structure as described in section 4 of RFC5280.
     *  3. Non-PEM content may appear before or after the "CERTIFICATE" PEM blocks and is unvalidated,
     *   to allow for explanatory text as described in section 5.2 of RFC7468.
     *
     * If more than one PEM block is present, and the definition of the requested spec.signerName does not
     * indicate otherwise, the first block is the issued certificate, and subsequent blocks should be
     * treated as intermediate certificates and presented in TLS handshakes.
     *
     * The certificate is encoded in PEM format.
     *
     * When serialized as JSON or YAML, the data is additionally base64-encoded, so it consists of:
     *
     *     base64(
     *     -----BEGIN CERTIFICATE-----
     *     ...
     *     -----END CERTIFICATE-----
     *     )
     */
    public function getCertificate(): ?string
    {
        return $this->certificate;
    }

    /**
     * certificate is populated with an issued certificate by the signer after an Approved condition is
     * present. This field is set via the /status subresource. Once populated, this field is immutable.
     *
     * If the certificate signing request is denied, a condition of type "Denied" is added and this field
     * remains empty. If the signer cannot issue the certificate, a condition of type "Failed" is added and
     * this field remains empty.
     *
     * Validation requirements:
     *  1. certificate must contain one or more PEM blocks.
     *  2. All PEM blocks must have the "CERTIFICATE" label, contain no headers, and the encoded data
     *   must be a BER-encoded ASN.1 Certificate structure as described in section 4 of RFC5280.
     *  3. Non-PEM content may appear before or after the "CERTIFICATE" PEM blocks and is unvalidated,
     *   to allow for explanatory text as described in section 5.2 of RFC7468.
     *
     * If more than one PEM block is present, and the definition of the requested spec.signerName does not
     * indicate otherwise, the first block is the issued certificate, and subsequent blocks should be
     * treated as intermediate certificates and presented in TLS handshakes.
     *
     * The certificate is encoded in PEM format.
     *
     * When serialized as JSON or YAML, the data is additionally base64-encoded, so it consists of:
     *
     *     base64(
     *     -----BEGIN CERTIFICATE-----
     *     ...
     *     -----END CERTIFICATE-----
     *     )
     *
     * @return static
     */
    public function setCertificate(string $certificate)
    {
        $this->certificate = $certificate;

        return $this;
    }

    /**
     * conditions applied to the request. Known conditions are "Approved", "Denied", and "Failed".
     *
     * @return iterable|CertificateSigningRequestCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * conditions applied to the request. Known conditions are "Approved", "Denied", and "Failed".
     *
     * @return static
     */
    public function setConditions(iterable $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * @return static
     */
    public function addConditions(CertificateSigningRequestCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }
}
