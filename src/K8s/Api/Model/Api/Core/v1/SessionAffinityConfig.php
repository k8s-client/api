<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.16.15
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
 * SessionAffinityConfig represents the configurations of session affinity.
 */
class SessionAffinityConfig
{
    /**
     * @Kubernetes\Attribute("clientIP",type="model",model=ClientIPConfig::class)
     * @var ClientIPConfig|null
     */
    protected $clientIP = null;

    /**
     * @param ClientIPConfig|null $clientIP
     */
    public function __construct(?ClientIPConfig $clientIP = null)
    {
        $this->clientIP = $clientIP;
    }

    /**
     * clientIP contains the configurations of Client IP based session affinity.
     */
    public function getClientIP(): ?ClientIPConfig
    {
        return $this->clientIP;
    }

    /**
     * clientIP contains the configurations of Client IP based session affinity.
     *
     * @return static
     */
    public function setClientIP(ClientIPConfig $clientIP)
    {
        $this->clientIP = $clientIP;

        return $this;
    }
}
