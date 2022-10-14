<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.23.13
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
     * @Kubernetes\Attribute("hostProcess")
     * @var bool|null
     */
    protected $hostProcess = null;

    /**
     * @Kubernetes\Attribute("runAsUserName")
     * @var string|null
     */
    protected $runAsUserName = null;

    /**
     * @param string|null $gmsaCredentialSpec
     * @param string|null $gmsaCredentialSpecName
     * @param bool|null $hostProcess
     * @param string|null $runAsUserName
     */
    public function __construct(
        ?string $gmsaCredentialSpec = null,
        ?string $gmsaCredentialSpecName = null,
        ?bool $hostProcess = null,
        ?string $runAsUserName = null
    ) {
        $this->gmsaCredentialSpec = $gmsaCredentialSpec;
        $this->gmsaCredentialSpecName = $gmsaCredentialSpecName;
        $this->hostProcess = $hostProcess;
        $this->runAsUserName = $runAsUserName;
    }

    /**
     * GMSACredentialSpec is where the GMSA admission webhook
     * (https://github.com/kubernetes-sigs/windows-gmsa) inlines the contents of the GMSA credential spec
     * named by the GMSACredentialSpecName field.
     */
    public function getGmsaCredentialSpec(): ?string
    {
        return $this->gmsaCredentialSpec;
    }

    /**
     * GMSACredentialSpec is where the GMSA admission webhook
     * (https://github.com/kubernetes-sigs/windows-gmsa) inlines the contents of the GMSA credential spec
     * named by the GMSACredentialSpecName field.
     *
     * @return static
     */
    public function setGmsaCredentialSpec(string $gmsaCredentialSpec)
    {
        $this->gmsaCredentialSpec = $gmsaCredentialSpec;

        return $this;
    }

    /**
     * GMSACredentialSpecName is the name of the GMSA credential spec to use.
     */
    public function getGmsaCredentialSpecName(): ?string
    {
        return $this->gmsaCredentialSpecName;
    }

    /**
     * GMSACredentialSpecName is the name of the GMSA credential spec to use.
     *
     * @return static
     */
    public function setGmsaCredentialSpecName(string $gmsaCredentialSpecName)
    {
        $this->gmsaCredentialSpecName = $gmsaCredentialSpecName;

        return $this;
    }

    /**
     * HostProcess determines if a container should be run as a 'Host Process' container. This field is
     * alpha-level and will only be honored by components that enable the WindowsHostProcessContainers
     * feature flag. Setting this field without the feature flag will result in errors when validating the
     * Pod. All of a Pod's containers must have the same effective HostProcess value (it is not allowed to
     * have a mix of HostProcess containers and non-HostProcess containers).  In addition, if HostProcess
     * is true then HostNetwork must also be set to true.
     */
    public function isHostProcess(): ?bool
    {
        return $this->hostProcess;
    }

    /**
     * HostProcess determines if a container should be run as a 'Host Process' container. This field is
     * alpha-level and will only be honored by components that enable the WindowsHostProcessContainers
     * feature flag. Setting this field without the feature flag will result in errors when validating the
     * Pod. All of a Pod's containers must have the same effective HostProcess value (it is not allowed to
     * have a mix of HostProcess containers and non-HostProcess containers).  In addition, if HostProcess
     * is true then HostNetwork must also be set to true.
     *
     * @return static
     */
    public function setIsHostProcess(bool $hostProcess)
    {
        $this->hostProcess = $hostProcess;

        return $this;
    }

    /**
     * The UserName in Windows to run the entrypoint of the container process. Defaults to the user
     * specified in image metadata if unspecified. May also be set in PodSecurityContext. If set in both
     * SecurityContext and PodSecurityContext, the value specified in SecurityContext takes precedence.
     */
    public function getRunAsUserName(): ?string
    {
        return $this->runAsUserName;
    }

    /**
     * The UserName in Windows to run the entrypoint of the container process. Defaults to the user
     * specified in image metadata if unspecified. May also be set in PodSecurityContext. If set in both
     * SecurityContext and PodSecurityContext, the value specified in SecurityContext takes precedence.
     *
     * @return static
     */
    public function setRunAsUserName(string $runAsUserName)
    {
        $this->runAsUserName = $runAsUserName;

        return $this;
    }
}
