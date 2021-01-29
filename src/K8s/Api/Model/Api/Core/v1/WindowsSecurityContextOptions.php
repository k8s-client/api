<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.15.12
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
 * WindowsSecurityContextOptions contain Windows-specific options and credentials.
 */
class WindowsSecurityContextOptions
{
    /**
     * @Kubernetes\Attribute("gmsaCredentialSpec")
     * @var string|null
     */
    protected $gmsaCredentialSpec = null;

    /**
     * @Kubernetes\Attribute("gmsaCredentialSpecName")
     * @var string|null
     */
    protected $gmsaCredentialSpecName = null;

    /**
     * @param string|null $gmsaCredentialSpec
     * @param string|null $gmsaCredentialSpecName
     */
    public function __construct(?string $gmsaCredentialSpec = null, ?string $gmsaCredentialSpecName = null)
    {
        $this->gmsaCredentialSpec = $gmsaCredentialSpec;
        $this->gmsaCredentialSpecName = $gmsaCredentialSpecName;
    }

    /**
     * GMSACredentialSpec is where the GMSA admission webhook
     * (https://github.com/kubernetes-sigs/windows-gmsa) inlines the contents of the GMSA credential spec
     * named by the GMSACredentialSpecName field. This field is alpha-level and is only honored by servers
     * that enable the WindowsGMSA feature flag.
     */
    public function getGmsaCredentialSpec(): ?string
    {
        return $this->gmsaCredentialSpec;
    }

    /**
     * GMSACredentialSpec is where the GMSA admission webhook
     * (https://github.com/kubernetes-sigs/windows-gmsa) inlines the contents of the GMSA credential spec
     * named by the GMSACredentialSpecName field. This field is alpha-level and is only honored by servers
     * that enable the WindowsGMSA feature flag.
     *
     * @return static
     */
    public function setGmsaCredentialSpec(string $gmsaCredentialSpec)
    {
        $this->gmsaCredentialSpec = $gmsaCredentialSpec;

        return $this;
    }

    /**
     * GMSACredentialSpecName is the name of the GMSA credential spec to use. This field is alpha-level and
     * is only honored by servers that enable the WindowsGMSA feature flag.
     */
    public function getGmsaCredentialSpecName(): ?string
    {
        return $this->gmsaCredentialSpecName;
    }

    /**
     * GMSACredentialSpecName is the name of the GMSA credential spec to use. This field is alpha-level and
     * is only honored by servers that enable the WindowsGMSA feature flag.
     *
     * @return static
     */
    public function setGmsaCredentialSpecName(string $gmsaCredentialSpecName)
    {
        $this->gmsaCredentialSpecName = $gmsaCredentialSpecName;

        return $this;
    }
}
