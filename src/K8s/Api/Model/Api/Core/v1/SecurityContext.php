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

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * SecurityContext holds security configuration that will be applied to a container. Some fields are
 * present in both SecurityContext and PodSecurityContext.  When both are set, the values in
 * SecurityContext take precedence.
 */
class SecurityContext
{
    /**
     * @Kubernetes\Attribute("allowPrivilegeEscalation")
     * @var bool|null
     */
    protected $allowPrivilegeEscalation;

    /**
     * @Kubernetes\Attribute("capabilities",type="model",model=Capabilities::class)
     * @var Capabilities|null
     */
    protected $capabilities;

    /**
     * @Kubernetes\Attribute("privileged")
     * @var bool|null
     */
    protected $privileged;

    /**
     * @Kubernetes\Attribute("procMount")
     * @var string|null
     */
    protected $procMount;

    /**
     * @Kubernetes\Attribute("readOnlyRootFilesystem")
     * @var bool|null
     */
    protected $readOnlyRootFilesystem;

    /**
     * @Kubernetes\Attribute("runAsGroup")
     * @var int|null
     */
    protected $runAsGroup;

    /**
     * @Kubernetes\Attribute("runAsNonRoot")
     * @var bool|null
     */
    protected $runAsNonRoot;

    /**
     * @Kubernetes\Attribute("runAsUser")
     * @var int|null
     */
    protected $runAsUser;

    /**
     * @Kubernetes\Attribute("seLinuxOptions",type="model",model=SELinuxOptions::class)
     * @var SELinuxOptions|null
     */
    protected $seLinuxOptions;

    /**
     * @Kubernetes\Attribute("windowsOptions",type="model",model=WindowsSecurityContextOptions::class)
     * @var WindowsSecurityContextOptions|null
     */
    protected $windowsOptions;

    /**
     * AllowPrivilegeEscalation controls whether a process can gain more privileges than its parent
     * process. This bool directly controls if the no_new_privs flag will be set on the container process.
     * AllowPrivilegeEscalation is true always when the container is: 1) run as Privileged 2) has
     * CAP_SYS_ADMIN
     */
    public function isAllowPrivilegeEscalation(): ?bool
    {
        return $this->allowPrivilegeEscalation;
    }

    /**
     * AllowPrivilegeEscalation controls whether a process can gain more privileges than its parent
     * process. This bool directly controls if the no_new_privs flag will be set on the container process.
     * AllowPrivilegeEscalation is true always when the container is: 1) run as Privileged 2) has
     * CAP_SYS_ADMIN
     *
     * @return static
     */
    public function setIsAllowPrivilegeEscalation(bool $allowPrivilegeEscalation)
    {
        $this->allowPrivilegeEscalation = $allowPrivilegeEscalation;

        return $this;
    }

    /**
     * The capabilities to add/drop when running containers. Defaults to the default set of capabilities
     * granted by the container runtime.
     */
    public function getCapabilities(): ?Capabilities
    {
        return $this->capabilities;
    }

    /**
     * The capabilities to add/drop when running containers. Defaults to the default set of capabilities
     * granted by the container runtime.
     *
     * @return static
     */
    public function setCapabilities(Capabilities $capabilities)
    {
        $this->capabilities = $capabilities;

        return $this;
    }

    /**
     * Run container in privileged mode. Processes in privileged containers are essentially equivalent to
     * root on the host. Defaults to false.
     */
    public function isPrivileged(): ?bool
    {
        return $this->privileged;
    }

    /**
     * Run container in privileged mode. Processes in privileged containers are essentially equivalent to
     * root on the host. Defaults to false.
     *
     * @return static
     */
    public function setIsPrivileged(bool $privileged)
    {
        $this->privileged = $privileged;

        return $this;
    }

    /**
     * procMount denotes the type of proc mount to use for the containers. The default is DefaultProcMount
     * which uses the container runtime defaults for readonly paths and masked paths. This requires the
     * ProcMountType feature flag to be enabled.
     */
    public function getProcMount(): ?string
    {
        return $this->procMount;
    }

    /**
     * procMount denotes the type of proc mount to use for the containers. The default is DefaultProcMount
     * which uses the container runtime defaults for readonly paths and masked paths. This requires the
     * ProcMountType feature flag to be enabled.
     *
     * @return static
     */
    public function setProcMount(string $procMount)
    {
        $this->procMount = $procMount;

        return $this;
    }

    /**
     * Whether this container has a read-only root filesystem. Default is false.
     */
    public function isReadOnlyRootFilesystem(): ?bool
    {
        return $this->readOnlyRootFilesystem;
    }

    /**
     * Whether this container has a read-only root filesystem. Default is false.
     *
     * @return static
     */
    public function setIsReadOnlyRootFilesystem(bool $readOnlyRootFilesystem)
    {
        $this->readOnlyRootFilesystem = $readOnlyRootFilesystem;

        return $this;
    }

    /**
     * The GID to run the entrypoint of the container process. Uses runtime default if unset. May also be
     * set in PodSecurityContext.  If set in both SecurityContext and PodSecurityContext, the value
     * specified in SecurityContext takes precedence.
     */
    public function getRunAsGroup(): ?int
    {
        return $this->runAsGroup;
    }

    /**
     * The GID to run the entrypoint of the container process. Uses runtime default if unset. May also be
     * set in PodSecurityContext.  If set in both SecurityContext and PodSecurityContext, the value
     * specified in SecurityContext takes precedence.
     *
     * @return static
     */
    public function setRunAsGroup(int $runAsGroup)
    {
        $this->runAsGroup = $runAsGroup;

        return $this;
    }

    /**
     * Indicates that the container must run as a non-root user. If true, the Kubelet will validate the
     * image at runtime to ensure that it does not run as UID 0 (root) and fail to start the container if
     * it does. If unset or false, no such validation will be performed. May also be set in
     * PodSecurityContext.  If set in both SecurityContext and PodSecurityContext, the value specified in
     * SecurityContext takes precedence.
     */
    public function isRunAsNonRoot(): ?bool
    {
        return $this->runAsNonRoot;
    }

    /**
     * Indicates that the container must run as a non-root user. If true, the Kubelet will validate the
     * image at runtime to ensure that it does not run as UID 0 (root) and fail to start the container if
     * it does. If unset or false, no such validation will be performed. May also be set in
     * PodSecurityContext.  If set in both SecurityContext and PodSecurityContext, the value specified in
     * SecurityContext takes precedence.
     *
     * @return static
     */
    public function setIsRunAsNonRoot(bool $runAsNonRoot)
    {
        $this->runAsNonRoot = $runAsNonRoot;

        return $this;
    }

    /**
     * The UID to run the entrypoint of the container process. Defaults to user specified in image metadata
     * if unspecified. May also be set in PodSecurityContext.  If set in both SecurityContext and
     * PodSecurityContext, the value specified in SecurityContext takes precedence.
     */
    public function getRunAsUser(): ?int
    {
        return $this->runAsUser;
    }

    /**
     * The UID to run the entrypoint of the container process. Defaults to user specified in image metadata
     * if unspecified. May also be set in PodSecurityContext.  If set in both SecurityContext and
     * PodSecurityContext, the value specified in SecurityContext takes precedence.
     *
     * @return static
     */
    public function setRunAsUser(int $runAsUser)
    {
        $this->runAsUser = $runAsUser;

        return $this;
    }

    /**
     * The SELinux context to be applied to the container. If unspecified, the container runtime will
     * allocate a random SELinux context for each container.  May also be set in PodSecurityContext.  If
     * set in both SecurityContext and PodSecurityContext, the value specified in SecurityContext takes
     * precedence.
     */
    public function getSeLinuxOptions(): ?SELinuxOptions
    {
        return $this->seLinuxOptions;
    }

    /**
     * The SELinux context to be applied to the container. If unspecified, the container runtime will
     * allocate a random SELinux context for each container.  May also be set in PodSecurityContext.  If
     * set in both SecurityContext and PodSecurityContext, the value specified in SecurityContext takes
     * precedence.
     *
     * @return static
     */
    public function setSeLinuxOptions(SELinuxOptions $seLinuxOptions)
    {
        $this->seLinuxOptions = $seLinuxOptions;

        return $this;
    }

    /**
     * Windows security options.
     */
    public function getWindowsOptions(): ?WindowsSecurityContextOptions
    {
        return $this->windowsOptions;
    }

    /**
     * Windows security options.
     *
     * @return static
     */
    public function setWindowsOptions(WindowsSecurityContextOptions $windowsOptions)
    {
        $this->windowsOptions = $windowsOptions;

        return $this;
    }
}