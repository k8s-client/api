<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Certificates\v1beta1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

class CertificateSigningRequestStatus
{
    /**
     * @Kubernetes\Attribute("certificate")
     * @var string|null
     */
    protected $certificate;

    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=CertificateSigningRequestCondition::class)
     * @var iterable|CertificateSigningRequestCondition[]|null
     */
    protected $conditions;

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
     * If request was approved, the controller will place the issued certificate here.
     */
    public function getCertificate(): ?string
    {
        return $this->certificate;
    }

    /**
     * If request was approved, the controller will place the issued certificate here.
     *
     * @return static
     */
    public function setCertificate(string $certificate)
    {
        $this->certificate = $certificate;

        return $this;
    }

    /**
     * Conditions applied to the request, such as approval or denial.
     *
     * @return iterable|CertificateSigningRequestCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * Conditions applied to the request, such as approval or denial.
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