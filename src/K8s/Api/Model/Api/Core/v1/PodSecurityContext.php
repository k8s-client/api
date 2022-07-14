<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.22.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * PodSecurityContext holds pod-level security attributes and common container settings. Some fields
 * are also present in container.securityContext.  Field values of container.securityContext take
 * precedence over field values of PodSecurityContext.
 */
class PodSecurityContext
{
    /**
     * @Kubernetes\Attribute("fsGroup")
     * @var int|null
     */
    protected $fsGroup = null;

    /**
     * @Kubernetes\Attribute("fsGroupChangePolicy")
     * @var string|null
     */
    protected $fsGroupChangePolicy = null;

    /**
     * @Kubernetes\Attribute("runAsGroup")
     * @var int|null
     */
    protected $runAsGroup = null;

    /**
     * @Kubernetes\Attribute("runAsNonRoot")
     * @var bool|null
     */
    protected $runAsNonRoot = null;

    /**
     * @Kubernetes\Attribute("runAsUser")
     * @var int|null
     */
    protected $runAsUser = null;

    /**
     * @Kubernetes\Attribute("seLinuxOptions",type="model",model=SELinuxOptions::class)
     * @var SELinuxOptions|null
     */
    protected $seLinuxOptions = null;

    /**
     * @Kubernetes\Attribute("seccompProfile",type="model",model=SeccompProfile::class)
     * @var SeccompProfile|null
     */
    protected $seccompProfile = null;

    /**
     * @Kubernetes\Attribute("supplementalGroups")
     * @var int[]|null
     */
    protected $supplementalGroups = null;

    /**
     * @Kubernetes\Attribute("sysctls",type="collection",model=Sysctl::class)
     * @var iterable|Sysctl[]|null
     */
    protected $sysctls = null;

    /**
     * @Kubernetes\Attribute("windowsOptions",type="model",model=WindowsSecurityContextOptions::class)
     * @var WindowsSecurityContextOptions|null
     */
    protected $windowsOptions = null;

    /**
     * A special supplemental group that applies to all containers in a pod. Some volume types allow the
     * Kubelet to change the ownership of that volume to be owned by the pod:
     *
     * 1. The owning GID will be the FSGroup 2. The setgid bit is set (new files created in the volume will
     * be owned by FSGroup) 3. The permission bits are OR'd with rw-rw----
     *
     * If unset, the Kubelet will not modify the ownership and permissions of any volume.
     */
    public function getFsGroup(): ?int
    {
        return $this->fsGroup;
    }

    /**
     * A special supplemental group that applies to all containers in a pod. Some volume types allow the
     * Kubelet to change the ownership of that volume to be owned by the pod:
     *
     * 1. The owning GID will be the FSGroup 2. The setgid bit is set (new files created in the volume will
     * be owned by FSGroup) 3. The permission bits are OR'd with rw-rw----
     *
     * If unset, the Kubelet will not modify the ownership and permissions of any volume.
     *
     * @return static
     */
    public function setFsGroup(int $fsGroup)
    {
        $this->fsGroup = $fsGroup;

        return $this;
    }

    /**
     * fsGroupChangePolicy defines behavior of changing ownership and permission of the volume before being
     * exposed inside Pod. This field will only apply to volume types which support fsGroup based
     * ownership(and permissions). It will have no effect on ephemeral volume types such as: secret,
     * configmaps and emptydir. Valid values are "OnRootMismatch" and "Always". If not specified, "Always"
     * is used.
     */
    public function getFsGroupChangePolicy(): ?string
    {
        return $this->fsGroupChangePolicy;
    }

    /**
     * fsGroupChangePolicy defines behavior of changing ownership and permission of the volume before being
     * exposed inside Pod. This field will only apply to volume types which support fsGroup based
     * ownership(and permissions). It will have no effect on ephemeral volume types such as: secret,
     * configmaps and emptydir. Valid values are "OnRootMismatch" and "Always". If not specified, "Always"
     * is used.
     *
     * @return static
     */
    public function setFsGroupChangePolicy(string $fsGroupChangePolicy)
    {
        $this->fsGroupChangePolicy = $fsGroupChangePolicy;

        return $this;
    }

    /**
     * The GID to run the entrypoint of the container process. Uses runtime default if unset. May also be
     * set in SecurityContext.  If set in both SecurityContext and PodSecurityContext, the value specified
     * in SecurityContext takes precedence for that container.
     */
    public function getRunAsGroup(): ?int
    {
        return $this->runAsGroup;
    }

    /**
     * The GID to run the entrypoint of the container process. Uses runtime default if unset. May also be
     * set in SecurityContext.  If set in both SecurityContext and PodSecurityContext, the value specified
     * in SecurityContext takes precedence for that container.
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
     * SecurityContext.  If set in both SecurityContext and PodSecurityContext, the value specified in
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
     * SecurityContext.  If set in both SecurityContext and PodSecurityContext, the value specified in
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
     * if unspecified. May also be set in SecurityContext.  If set in both SecurityContext and
     * PodSecurityContext, the value specified in SecurityContext takes precedence for that container.
     */
    public function getRunAsUser(): ?int
    {
        return $this->runAsUser;
    }

    /**
     * The UID to run the entrypoint of the container process. Defaults to user specified in image metadata
     * if unspecified. May also be set in SecurityContext.  If set in both SecurityContext and
     * PodSecurityContext, the value specified in SecurityContext takes precedence for that container.
     *
     * @return static
     */
    public function setRunAsUser(int $runAsUser)
    {
        $this->runAsUser = $runAsUser;

        return $this;
    }

    /**
     * The SELinux context to be applied to all containers. If unspecified, the container runtime will
     * allocate a random SELinux context for each container.  May also be set in SecurityContext.  If set
     * in both SecurityContext and PodSecurityContext, the value specified in SecurityContext takes
     * precedence for that container.
     */
    public function getSeLinuxOptions(): ?SELinuxOptions
    {
        return $this->seLinuxOptions;
    }

    /**
     * The SELinux context to be applied to all containers. If unspecified, the container runtime will
     * allocate a random SELinux context for each container.  May also be set in SecurityContext.  If set
     * in both SecurityContext and PodSecurityContext, the value specified in SecurityContext takes
     * precedence for that container.
     *
     * @return static
     */
    public function setSeLinuxOptions(SELinuxOptions $seLinuxOptions)
    {
        $this->seLinuxOptions = $seLinuxOptions;

        return $this;
    }

    /**
     * The seccomp options to use by the containers in this pod.
     */
    public function getSeccompProfile(): ?SeccompProfile
    {
        return $this->seccompProfile;
    }

    /**
     * The seccomp options to use by the containers in this pod.
     *
     * @return static
     */
    public function setSeccompProfile(SeccompProfile $seccompProfile)
    {
        $this->seccompProfile = $seccompProfile;

        return $this;
    }

    /**
     * A list of groups applied to the first process run in each container, in addition to the container's
     * primary GID.  If unspecified, no groups will be added to any container.
     */
    public function getSupplementalGroups(): ?array
    {
        return $this->supplementalGroups;
    }

    /**
     * A list of groups applied to the first process run in each container, in addition to the container's
     * primary GID.  If unspecified, no groups will be added to any container.
     *
     * @return static
     */
    public function setSupplementalGroups(array $supplementalGroups)
    {
        $this->supplementalGroups = $supplementalGroups;

        return $this;
    }

    /**
     * Sysctls hold a list of namespaced sysctls used for the pod. Pods with unsupported sysctls (by the
     * container runtime) might fail to launch.
     *
     * @return iterable|Sysctl[]
     */
    public function getSysctls(): ?iterable
    {
        return $this->sysctls;
    }

    /**
     * Sysctls hold a list of namespaced sysctls used for the pod. Pods with unsupported sysctls (by the
     * container runtime) might fail to launch.
     *
     * @return static
     */
    public function setSysctls(iterable $sysctls)
    {
        $this->sysctls = $sysctls;

        return $this;
    }

    /**
     * @return static
     */
    public function addSysctls(Sysctl $sysctl)
    {
        if (!$this->sysctls) {
            $this->sysctls = new Collection();
        }
        $this->sysctls[] = $sysctl;

        return $this;
    }

    /**
     * The Windows specific settings applied to all containers. If unspecified, the options within a
     * container's SecurityContext will be used. If set in both SecurityContext and PodSecurityContext, the
     * value specified in SecurityContext takes precedence.
     */
    public function getWindowsOptions(): ?WindowsSecurityContextOptions
    {
        return $this->windowsOptions;
    }

    /**
     * The Windows specific settings applied to all containers. If unspecified, the options within a
     * container's SecurityContext will be used. If set in both SecurityContext and PodSecurityContext, the
     * value specified in SecurityContext takes precedence.
     *
     * @return static
     */
    public function setWindowsOptions(WindowsSecurityContextOptions $windowsOptions)
    {
        $this->windowsOptions = $windowsOptions;

        return $this;
    }
}
