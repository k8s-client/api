<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.11.10
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
 * NodeSystemInfo is a set of ids/uuids to uniquely identify the node.
 */
class NodeSystemInfo
{
    /**
     * @Kubernetes\Attribute("architecture",isRequired=true)
     * @var string
     */
    protected $architecture;

    /**
     * @Kubernetes\Attribute("bootID",isRequired=true)
     * @var string
     */
    protected $bootID;

    /**
     * @Kubernetes\Attribute("containerRuntimeVersion",isRequired=true)
     * @var string
     */
    protected $containerRuntimeVersion;

    /**
     * @Kubernetes\Attribute("kernelVersion",isRequired=true)
     * @var string
     */
    protected $kernelVersion;

    /**
     * @Kubernetes\Attribute("kubeProxyVersion",isRequired=true)
     * @var string
     */
    protected $kubeProxyVersion;

    /**
     * @Kubernetes\Attribute("kubeletVersion",isRequired=true)
     * @var string
     */
    protected $kubeletVersion;

    /**
     * @Kubernetes\Attribute("machineID",isRequired=true)
     * @var string
     */
    protected $machineID;

    /**
     * @Kubernetes\Attribute("operatingSystem",isRequired=true)
     * @var string
     */
    protected $operatingSystem;

    /**
     * @Kubernetes\Attribute("osImage",isRequired=true)
     * @var string
     */
    protected $osImage;

    /**
     * @Kubernetes\Attribute("systemUUID",isRequired=true)
     * @var string
     */
    protected $systemUUID;

    /**
     * @param string $architecture
     * @param string $bootID
     * @param string $containerRuntimeVersion
     * @param string $kernelVersion
     * @param string $kubeProxyVersion
     * @param string $kubeletVersion
     * @param string $machineID
     * @param string $operatingSystem
     * @param string $osImage
     * @param string $systemUUID
     */
    public function __construct(
        string $architecture,
        string $bootID,
        string $containerRuntimeVersion,
        string $kernelVersion,
        string $kubeProxyVersion,
        string $kubeletVersion,
        string $machineID,
        string $operatingSystem,
        string $osImage,
        string $systemUUID
    ) {
        $this->architecture = $architecture;
        $this->bootID = $bootID;
        $this->containerRuntimeVersion = $containerRuntimeVersion;
        $this->kernelVersion = $kernelVersion;
        $this->kubeProxyVersion = $kubeProxyVersion;
        $this->kubeletVersion = $kubeletVersion;
        $this->machineID = $machineID;
        $this->operatingSystem = $operatingSystem;
        $this->osImage = $osImage;
        $this->systemUUID = $systemUUID;
    }

    /**
     * The Architecture reported by the node
     */
    public function getArchitecture(): string
    {
        return $this->architecture;
    }

    /**
     * The Architecture reported by the node
     *
     * @return static
     */
    public function setArchitecture(string $architecture)
    {
        $this->architecture = $architecture;

        return $this;
    }

    /**
     * Boot ID reported by the node.
     */
    public function getBootID(): string
    {
        return $this->bootID;
    }

    /**
     * Boot ID reported by the node.
     *
     * @return static
     */
    public function setBootID(string $bootID)
    {
        $this->bootID = $bootID;

        return $this;
    }

    /**
     * ContainerRuntime Version reported by the node through runtime remote API (e.g. docker://1.5.0).
     */
    public function getContainerRuntimeVersion(): string
    {
        return $this->containerRuntimeVersion;
    }

    /**
     * ContainerRuntime Version reported by the node through runtime remote API (e.g. docker://1.5.0).
     *
     * @return static
     */
    public function setContainerRuntimeVersion(string $containerRuntimeVersion)
    {
        $this->containerRuntimeVersion = $containerRuntimeVersion;

        return $this;
    }

    /**
     * Kernel Version reported by the node from 'uname -r' (e.g. 3.16.0-0.bpo.4-amd64).
     */
    public function getKernelVersion(): string
    {
        return $this->kernelVersion;
    }

    /**
     * Kernel Version reported by the node from 'uname -r' (e.g. 3.16.0-0.bpo.4-amd64).
     *
     * @return static
     */
    public function setKernelVersion(string $kernelVersion)
    {
        $this->kernelVersion = $kernelVersion;

        return $this;
    }

    /**
     * KubeProxy Version reported by the node.
     */
    public function getKubeProxyVersion(): string
    {
        return $this->kubeProxyVersion;
    }

    /**
     * KubeProxy Version reported by the node.
     *
     * @return static
     */
    public function setKubeProxyVersion(string $kubeProxyVersion)
    {
        $this->kubeProxyVersion = $kubeProxyVersion;

        return $this;
    }

    /**
     * Kubelet Version reported by the node.
     */
    public function getKubeletVersion(): string
    {
        return $this->kubeletVersion;
    }

    /**
     * Kubelet Version reported by the node.
     *
     * @return static
     */
    public function setKubeletVersion(string $kubeletVersion)
    {
        $this->kubeletVersion = $kubeletVersion;

        return $this;
    }

    /**
     * MachineID reported by the node. For unique machine identification in the cluster this field is
     * preferred. Learn more from man(5) machine-id: http://man7.org/linux/man-pages/man5/machine-id.5.html
     */
    public function getMachineID(): string
    {
        return $this->machineID;
    }

    /**
     * MachineID reported by the node. For unique machine identification in the cluster this field is
     * preferred. Learn more from man(5) machine-id: http://man7.org/linux/man-pages/man5/machine-id.5.html
     *
     * @return static
     */
    public function setMachineID(string $machineID)
    {
        $this->machineID = $machineID;

        return $this;
    }

    /**
     * The Operating System reported by the node
     */
    public function getOperatingSystem(): string
    {
        return $this->operatingSystem;
    }

    /**
     * The Operating System reported by the node
     *
     * @return static
     */
    public function setOperatingSystem(string $operatingSystem)
    {
        $this->operatingSystem = $operatingSystem;

        return $this;
    }

    /**
     * OS Image reported by the node from /etc/os-release (e.g. Debian GNU/Linux 7 (wheezy)).
     */
    public function getOsImage(): string
    {
        return $this->osImage;
    }

    /**
     * OS Image reported by the node from /etc/os-release (e.g. Debian GNU/Linux 7 (wheezy)).
     *
     * @return static
     */
    public function setOsImage(string $osImage)
    {
        $this->osImage = $osImage;

        return $this;
    }

    /**
     * SystemUUID reported by the node. For unique machine identification MachineID is preferred. This
     * field is specific to Red Hat hosts
     * https://access.redhat.com/documentation/en-US/Red_Hat_Subscription_Management/1/html/RHSM/getting-system-uuid.html
     */
    public function getSystemUUID(): string
    {
        return $this->systemUUID;
    }

    /**
     * SystemUUID reported by the node. For unique machine identification MachineID is preferred. This
     * field is specific to Red Hat hosts
     * https://access.redhat.com/documentation/en-US/Red_Hat_Subscription_Management/1/html/RHSM/getting-system-uuid.html
     *
     * @return static
     */
    public function setSystemUUID(string $systemUUID)
    {
        $this->systemUUID = $systemUUID;

        return $this;
    }
}
