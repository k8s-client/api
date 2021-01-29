<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.14.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Policy\v1beta1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * PodSecurityPolicySpec defines the policy enforced.
 */
class PodSecurityPolicySpec
{
    /**
     * @Kubernetes\Attribute("allowPrivilegeEscalation")
     * @var bool|null
     */
    protected $allowPrivilegeEscalation = null;

    /**
     * @Kubernetes\Attribute("allowedCSIDrivers",type="collection",model=AllowedCSIDriver::class)
     * @var iterable|AllowedCSIDriver[]|null
     */
    protected $allowedCSIDrivers = null;

    /**
     * @Kubernetes\Attribute("allowedCapabilities")
     * @var string[]|null
     */
    protected $allowedCapabilities = null;

    /**
     * @Kubernetes\Attribute("allowedFlexVolumes",type="collection",model=AllowedFlexVolume::class)
     * @var iterable|AllowedFlexVolume[]|null
     */
    protected $allowedFlexVolumes = null;

    /**
     * @Kubernetes\Attribute("allowedHostPaths",type="collection",model=AllowedHostPath::class)
     * @var iterable|AllowedHostPath[]|null
     */
    protected $allowedHostPaths = null;

    /**
     * @Kubernetes\Attribute("allowedProcMountTypes")
     * @var string[]|null
     */
    protected $allowedProcMountTypes = null;

    /**
     * @Kubernetes\Attribute("allowedUnsafeSysctls")
     * @var string[]|null
     */
    protected $allowedUnsafeSysctls = null;

    /**
     * @Kubernetes\Attribute("defaultAddCapabilities")
     * @var string[]|null
     */
    protected $defaultAddCapabilities = null;

    /**
     * @Kubernetes\Attribute("defaultAllowPrivilegeEscalation")
     * @var bool|null
     */
    protected $defaultAllowPrivilegeEscalation = null;

    /**
     * @Kubernetes\Attribute("forbiddenSysctls")
     * @var string[]|null
     */
    protected $forbiddenSysctls = null;

    /**
     * @Kubernetes\Attribute("fsGroup",type="model",model=FSGroupStrategyOptions::class,isRequired=true)
     * @var FSGroupStrategyOptions
     */
    protected $fsGroup = null;

    /**
     * @Kubernetes\Attribute("hostIPC")
     * @var bool|null
     */
    protected $hostIPC = null;

    /**
     * @Kubernetes\Attribute("hostNetwork")
     * @var bool|null
     */
    protected $hostNetwork = null;

    /**
     * @Kubernetes\Attribute("hostPID")
     * @var bool|null
     */
    protected $hostPID = null;

    /**
     * @Kubernetes\Attribute("hostPorts",type="collection",model=HostPortRange::class)
     * @var iterable|HostPortRange[]|null
     */
    protected $hostPorts = null;

    /**
     * @Kubernetes\Attribute("privileged")
     * @var bool|null
     */
    protected $privileged = null;

    /**
     * @Kubernetes\Attribute("readOnlyRootFilesystem")
     * @var bool|null
     */
    protected $readOnlyRootFilesystem = null;

    /**
     * @Kubernetes\Attribute("requiredDropCapabilities")
     * @var string[]|null
     */
    protected $requiredDropCapabilities = null;

    /**
     * @Kubernetes\Attribute("runAsGroup",type="model",model=RunAsGroupStrategyOptions::class)
     * @var RunAsGroupStrategyOptions|null
     */
    protected $runAsGroup = null;

    /**
     * @Kubernetes\Attribute("runAsUser",type="model",model=RunAsUserStrategyOptions::class,isRequired=true)
     * @var RunAsUserStrategyOptions
     */
    protected $runAsUser = null;

    /**
     * @Kubernetes\Attribute("seLinux",type="model",model=SELinuxStrategyOptions::class,isRequired=true)
     * @var SELinuxStrategyOptions
     */
    protected $seLinux = null;

    /**
     * @Kubernetes\Attribute("supplementalGroups",type="model",model=SupplementalGroupsStrategyOptions::class,isRequired=true)
     * @var SupplementalGroupsStrategyOptions
     */
    protected $supplementalGroups = null;

    /**
     * @Kubernetes\Attribute("volumes")
     * @var string[]|null
     */
    protected $volumes = null;

    /**
     * @param FSGroupStrategyOptions $fsGroup
     * @param RunAsUserStrategyOptions $runAsUser
     * @param SELinuxStrategyOptions $seLinux
     * @param SupplementalGroupsStrategyOptions $supplementalGroups
     */
    public function __construct(
        FSGroupStrategyOptions $fsGroup,
        RunAsUserStrategyOptions $runAsUser,
        SELinuxStrategyOptions $seLinux,
        SupplementalGroupsStrategyOptions $supplementalGroups
    ) {
        $this->fsGroup = $fsGroup;
        $this->runAsUser = $runAsUser;
        $this->seLinux = $seLinux;
        $this->supplementalGroups = $supplementalGroups;
    }

    /**
     * allowPrivilegeEscalation determines if a pod can request to allow privilege escalation. If
     * unspecified, defaults to true.
     */
    public function isAllowPrivilegeEscalation(): ?bool
    {
        return $this->allowPrivilegeEscalation;
    }

    /**
     * allowPrivilegeEscalation determines if a pod can request to allow privilege escalation. If
     * unspecified, defaults to true.
     *
     * @return static
     */
    public function setIsAllowPrivilegeEscalation(bool $allowPrivilegeEscalation)
    {
        $this->allowPrivilegeEscalation = $allowPrivilegeEscalation;

        return $this;
    }

    /**
     * AllowedCSIDrivers is a whitelist of inline CSI drivers that must be explicitly set to be embedded
     * within a pod spec. An empty value means no CSI drivers can run inline within a pod spec.
     *
     * @return iterable|AllowedCSIDriver[]
     */
    public function getAllowedCSIDrivers(): ?iterable
    {
        return $this->allowedCSIDrivers;
    }

    /**
     * AllowedCSIDrivers is a whitelist of inline CSI drivers that must be explicitly set to be embedded
     * within a pod spec. An empty value means no CSI drivers can run inline within a pod spec.
     *
     * @return static
     */
    public function setAllowedCSIDrivers(iterable $allowedCSIDrivers)
    {
        $this->allowedCSIDrivers = $allowedCSIDrivers;

        return $this;
    }

    /**
     * @return static
     */
    public function addAllowedCSIDrivers(AllowedCSIDriver $allowedCSIDriver)
    {
        if (!$this->allowedCSIDrivers) {
            $this->allowedCSIDrivers = new Collection();
        }
        $this->allowedCSIDrivers[] = $allowedCSIDriver;

        return $this;
    }

    /**
     * allowedCapabilities is a list of capabilities that can be requested to add to the container.
     * Capabilities in this field may be added at the pod author's discretion. You must not list a
     * capability in both allowedCapabilities and requiredDropCapabilities.
     */
    public function getAllowedCapabilities(): ?array
    {
        return $this->allowedCapabilities;
    }

    /**
     * allowedCapabilities is a list of capabilities that can be requested to add to the container.
     * Capabilities in this field may be added at the pod author's discretion. You must not list a
     * capability in both allowedCapabilities and requiredDropCapabilities.
     *
     * @return static
     */
    public function setAllowedCapabilities(array $allowedCapabilities)
    {
        $this->allowedCapabilities = $allowedCapabilities;

        return $this;
    }

    /**
     * allowedFlexVolumes is a whitelist of allowed Flexvolumes.  Empty or nil indicates that all
     * Flexvolumes may be used.  This parameter is effective only when the usage of the Flexvolumes is
     * allowed in the "volumes" field.
     *
     * @return iterable|AllowedFlexVolume[]
     */
    public function getAllowedFlexVolumes(): ?iterable
    {
        return $this->allowedFlexVolumes;
    }

    /**
     * allowedFlexVolumes is a whitelist of allowed Flexvolumes.  Empty or nil indicates that all
     * Flexvolumes may be used.  This parameter is effective only when the usage of the Flexvolumes is
     * allowed in the "volumes" field.
     *
     * @return static
     */
    public function setAllowedFlexVolumes(iterable $allowedFlexVolumes)
    {
        $this->allowedFlexVolumes = $allowedFlexVolumes;

        return $this;
    }

    /**
     * @return static
     */
    public function addAllowedFlexVolumes(AllowedFlexVolume $allowedFlexVolume)
    {
        if (!$this->allowedFlexVolumes) {
            $this->allowedFlexVolumes = new Collection();
        }
        $this->allowedFlexVolumes[] = $allowedFlexVolume;

        return $this;
    }

    /**
     * allowedHostPaths is a white list of allowed host paths. Empty indicates that all host paths may be
     * used.
     *
     * @return iterable|AllowedHostPath[]
     */
    public function getAllowedHostPaths(): ?iterable
    {
        return $this->allowedHostPaths;
    }

    /**
     * allowedHostPaths is a white list of allowed host paths. Empty indicates that all host paths may be
     * used.
     *
     * @return static
     */
    public function setAllowedHostPaths(iterable $allowedHostPaths)
    {
        $this->allowedHostPaths = $allowedHostPaths;

        return $this;
    }

    /**
     * @return static
     */
    public function addAllowedHostPaths(AllowedHostPath $allowedHostPath)
    {
        if (!$this->allowedHostPaths) {
            $this->allowedHostPaths = new Collection();
        }
        $this->allowedHostPaths[] = $allowedHostPath;

        return $this;
    }

    /**
     * AllowedProcMountTypes is a whitelist of allowed ProcMountTypes. Empty or nil indicates that only the
     * DefaultProcMountType may be used. This requires the ProcMountType feature flag to be enabled.
     */
    public function getAllowedProcMountTypes(): ?array
    {
        return $this->allowedProcMountTypes;
    }

    /**
     * AllowedProcMountTypes is a whitelist of allowed ProcMountTypes. Empty or nil indicates that only the
     * DefaultProcMountType may be used. This requires the ProcMountType feature flag to be enabled.
     *
     * @return static
     */
    public function setAllowedProcMountTypes(array $allowedProcMountTypes)
    {
        $this->allowedProcMountTypes = $allowedProcMountTypes;

        return $this;
    }

    /**
     * allowedUnsafeSysctls is a list of explicitly allowed unsafe sysctls, defaults to none. Each entry is
     * either a plain sysctl name or ends in "*" in which case it is considered as a prefix of allowed
     * sysctls. Single * means all unsafe sysctls are allowed. Kubelet has to whitelist all allowed unsafe
     * sysctls explicitly to avoid rejection.
     *
     * Examples: e.g. "foo/*" allows "foo/bar", "foo/baz", etc. e.g. "foo.*" allows "foo.bar", "foo.baz",
     * etc.
     */
    public function getAllowedUnsafeSysctls(): ?array
    {
        return $this->allowedUnsafeSysctls;
    }

    /**
     * allowedUnsafeSysctls is a list of explicitly allowed unsafe sysctls, defaults to none. Each entry is
     * either a plain sysctl name or ends in "*" in which case it is considered as a prefix of allowed
     * sysctls. Single * means all unsafe sysctls are allowed. Kubelet has to whitelist all allowed unsafe
     * sysctls explicitly to avoid rejection.
     *
     * Examples: e.g. "foo/*" allows "foo/bar", "foo/baz", etc. e.g. "foo.*" allows "foo.bar", "foo.baz",
     * etc.
     *
     * @return static
     */
    public function setAllowedUnsafeSysctls(array $allowedUnsafeSysctls)
    {
        $this->allowedUnsafeSysctls = $allowedUnsafeSysctls;

        return $this;
    }

    /**
     * defaultAddCapabilities is the default set of capabilities that will be added to the container unless
     * the pod spec specifically drops the capability.  You may not list a capability in both
     * defaultAddCapabilities and requiredDropCapabilities. Capabilities added here are implicitly allowed,
     * and need not be included in the allowedCapabilities list.
     */
    public function getDefaultAddCapabilities(): ?array
    {
        return $this->defaultAddCapabilities;
    }

    /**
     * defaultAddCapabilities is the default set of capabilities that will be added to the container unless
     * the pod spec specifically drops the capability.  You may not list a capability in both
     * defaultAddCapabilities and requiredDropCapabilities. Capabilities added here are implicitly allowed,
     * and need not be included in the allowedCapabilities list.
     *
     * @return static
     */
    public function setDefaultAddCapabilities(array $defaultAddCapabilities)
    {
        $this->defaultAddCapabilities = $defaultAddCapabilities;

        return $this;
    }

    /**
     * defaultAllowPrivilegeEscalation controls the default setting for whether a process can gain more
     * privileges than its parent process.
     */
    public function isDefaultAllowPrivilegeEscalation(): ?bool
    {
        return $this->defaultAllowPrivilegeEscalation;
    }

    /**
     * defaultAllowPrivilegeEscalation controls the default setting for whether a process can gain more
     * privileges than its parent process.
     *
     * @return static
     */
    public function setIsDefaultAllowPrivilegeEscalation(bool $defaultAllowPrivilegeEscalation)
    {
        $this->defaultAllowPrivilegeEscalation = $defaultAllowPrivilegeEscalation;

        return $this;
    }

    /**
     * forbiddenSysctls is a list of explicitly forbidden sysctls, defaults to none. Each entry is either a
     * plain sysctl name or ends in "*" in which case it is considered as a prefix of forbidden sysctls.
     * Single * means all sysctls are forbidden.
     *
     * Examples: e.g. "foo/*" forbids "foo/bar", "foo/baz", etc. e.g. "foo.*" forbids "foo.bar", "foo.baz",
     * etc.
     */
    public function getForbiddenSysctls(): ?array
    {
        return $this->forbiddenSysctls;
    }

    /**
     * forbiddenSysctls is a list of explicitly forbidden sysctls, defaults to none. Each entry is either a
     * plain sysctl name or ends in "*" in which case it is considered as a prefix of forbidden sysctls.
     * Single * means all sysctls are forbidden.
     *
     * Examples: e.g. "foo/*" forbids "foo/bar", "foo/baz", etc. e.g. "foo.*" forbids "foo.bar", "foo.baz",
     * etc.
     *
     * @return static
     */
    public function setForbiddenSysctls(array $forbiddenSysctls)
    {
        $this->forbiddenSysctls = $forbiddenSysctls;

        return $this;
    }

    /**
     * fsGroup is the strategy that will dictate what fs group is used by the SecurityContext.
     */
    public function getFsGroup(): FSGroupStrategyOptions
    {
        return $this->fsGroup;
    }

    /**
     * fsGroup is the strategy that will dictate what fs group is used by the SecurityContext.
     *
     * @return static
     */
    public function setFsGroup(FSGroupStrategyOptions $fsGroup)
    {
        $this->fsGroup = $fsGroup;

        return $this;
    }

    /**
     * hostIPC determines if the policy allows the use of HostIPC in the pod spec.
     */
    public function isHostIPC(): ?bool
    {
        return $this->hostIPC;
    }

    /**
     * hostIPC determines if the policy allows the use of HostIPC in the pod spec.
     *
     * @return static
     */
    public function setIsHostIPC(bool $hostIPC)
    {
        $this->hostIPC = $hostIPC;

        return $this;
    }

    /**
     * hostNetwork determines if the policy allows the use of HostNetwork in the pod spec.
     */
    public function isHostNetwork(): ?bool
    {
        return $this->hostNetwork;
    }

    /**
     * hostNetwork determines if the policy allows the use of HostNetwork in the pod spec.
     *
     * @return static
     */
    public function setIsHostNetwork(bool $hostNetwork)
    {
        $this->hostNetwork = $hostNetwork;

        return $this;
    }

    /**
     * hostPID determines if the policy allows the use of HostPID in the pod spec.
     */
    public function isHostPID(): ?bool
    {
        return $this->hostPID;
    }

    /**
     * hostPID determines if the policy allows the use of HostPID in the pod spec.
     *
     * @return static
     */
    public function setIsHostPID(bool $hostPID)
    {
        $this->hostPID = $hostPID;

        return $this;
    }

    /**
     * hostPorts determines which host port ranges are allowed to be exposed.
     *
     * @return iterable|HostPortRange[]
     */
    public function getHostPorts(): ?iterable
    {
        return $this->hostPorts;
    }

    /**
     * hostPorts determines which host port ranges are allowed to be exposed.
     *
     * @return static
     */
    public function setHostPorts(iterable $hostPorts)
    {
        $this->hostPorts = $hostPorts;

        return $this;
    }

    /**
     * @return static
     */
    public function addHostPorts(HostPortRange $hostPort)
    {
        if (!$this->hostPorts) {
            $this->hostPorts = new Collection();
        }
        $this->hostPorts[] = $hostPort;

        return $this;
    }

    /**
     * privileged determines if a pod can request to be run as privileged.
     */
    public function isPrivileged(): ?bool
    {
        return $this->privileged;
    }

    /**
     * privileged determines if a pod can request to be run as privileged.
     *
     * @return static
     */
    public function setIsPrivileged(bool $privileged)
    {
        $this->privileged = $privileged;

        return $this;
    }

    /**
     * readOnlyRootFilesystem when set to true will force containers to run with a read only root file
     * system.  If the container specifically requests to run with a non-read only root file system the PSP
     * should deny the pod. If set to false the container may run with a read only root file system if it
     * wishes but it will not be forced to.
     */
    public function isReadOnlyRootFilesystem(): ?bool
    {
        return $this->readOnlyRootFilesystem;
    }

    /**
     * readOnlyRootFilesystem when set to true will force containers to run with a read only root file
     * system.  If the container specifically requests to run with a non-read only root file system the PSP
     * should deny the pod. If set to false the container may run with a read only root file system if it
     * wishes but it will not be forced to.
     *
     * @return static
     */
    public function setIsReadOnlyRootFilesystem(bool $readOnlyRootFilesystem)
    {
        $this->readOnlyRootFilesystem = $readOnlyRootFilesystem;

        return $this;
    }

    /**
     * requiredDropCapabilities are the capabilities that will be dropped from the container.  These are
     * required to be dropped and cannot be added.
     */
    public function getRequiredDropCapabilities(): ?array
    {
        return $this->requiredDropCapabilities;
    }

    /**
     * requiredDropCapabilities are the capabilities that will be dropped from the container.  These are
     * required to be dropped and cannot be added.
     *
     * @return static
     */
    public function setRequiredDropCapabilities(array $requiredDropCapabilities)
    {
        $this->requiredDropCapabilities = $requiredDropCapabilities;

        return $this;
    }

    /**
     * RunAsGroup is the strategy that will dictate the allowable RunAsGroup values that may be set. If
     * this field is omitted, the pod's RunAsGroup can take any value. This field requires the RunAsGroup
     * feature gate to be enabled.
     */
    public function getRunAsGroup(): ?RunAsGroupStrategyOptions
    {
        return $this->runAsGroup;
    }

    /**
     * RunAsGroup is the strategy that will dictate the allowable RunAsGroup values that may be set. If
     * this field is omitted, the pod's RunAsGroup can take any value. This field requires the RunAsGroup
     * feature gate to be enabled.
     *
     * @return static
     */
    public function setRunAsGroup(RunAsGroupStrategyOptions $runAsGroup)
    {
        $this->runAsGroup = $runAsGroup;

        return $this;
    }

    /**
     * runAsUser is the strategy that will dictate the allowable RunAsUser values that may be set.
     */
    public function getRunAsUser(): RunAsUserStrategyOptions
    {
        return $this->runAsUser;
    }

    /**
     * runAsUser is the strategy that will dictate the allowable RunAsUser values that may be set.
     *
     * @return static
     */
    public function setRunAsUser(RunAsUserStrategyOptions $runAsUser)
    {
        $this->runAsUser = $runAsUser;

        return $this;
    }

    /**
     * seLinux is the strategy that will dictate the allowable labels that may be set.
     */
    public function getSeLinux(): SELinuxStrategyOptions
    {
        return $this->seLinux;
    }

    /**
     * seLinux is the strategy that will dictate the allowable labels that may be set.
     *
     * @return static
     */
    public function setSeLinux(SELinuxStrategyOptions $seLinux)
    {
        $this->seLinux = $seLinux;

        return $this;
    }

    /**
     * supplementalGroups is the strategy that will dictate what supplemental groups are used by the
     * SecurityContext.
     */
    public function getSupplementalGroups(): SupplementalGroupsStrategyOptions
    {
        return $this->supplementalGroups;
    }

    /**
     * supplementalGroups is the strategy that will dictate what supplemental groups are used by the
     * SecurityContext.
     *
     * @return static
     */
    public function setSupplementalGroups(SupplementalGroupsStrategyOptions $supplementalGroups)
    {
        $this->supplementalGroups = $supplementalGroups;

        return $this;
    }

    /**
     * volumes is a white list of allowed volume plugins. Empty indicates that no volumes may be used. To
     * allow all volumes you may use '*'.
     */
    public function getVolumes(): ?array
    {
        return $this->volumes;
    }

    /**
     * volumes is a white list of allowed volume plugins. Empty indicates that no volumes may be used. To
     * allow all volumes you may use '*'.
     *
     * @return static
     */
    public function setVolumes(array $volumes)
    {
        $this->volumes = $volumes;

        return $this;
    }
}
