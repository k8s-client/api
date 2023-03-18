<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.8
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
 * Volume represents a named volume in a pod that may be accessed by any container in the pod.
 */
class Volume
{
    /**
     * @Kubernetes\Attribute("awsElasticBlockStore",type="model",model=AWSElasticBlockStoreVolumeSource::class)
     * @var AWSElasticBlockStoreVolumeSource|null
     */
    protected $awsElasticBlockStore = null;

    /**
     * @Kubernetes\Attribute("azureDisk",type="model",model=AzureDiskVolumeSource::class)
     * @var AzureDiskVolumeSource|null
     */
    protected $azureDisk = null;

    /**
     * @Kubernetes\Attribute("azureFile",type="model",model=AzureFileVolumeSource::class)
     * @var AzureFileVolumeSource|null
     */
    protected $azureFile = null;

    /**
     * @Kubernetes\Attribute("cephfs",type="model",model=CephFSVolumeSource::class)
     * @var CephFSVolumeSource|null
     */
    protected $cephfs = null;

    /**
     * @Kubernetes\Attribute("cinder",type="model",model=CinderVolumeSource::class)
     * @var CinderVolumeSource|null
     */
    protected $cinder = null;

    /**
     * @Kubernetes\Attribute("configMap",type="model",model=ConfigMapVolumeSource::class)
     * @var ConfigMapVolumeSource|null
     */
    protected $configMap = null;

    /**
     * @Kubernetes\Attribute("csi",type="model",model=CSIVolumeSource::class)
     * @var CSIVolumeSource|null
     */
    protected $csi = null;

    /**
     * @Kubernetes\Attribute("downwardAPI",type="model",model=DownwardAPIVolumeSource::class)
     * @var DownwardAPIVolumeSource|null
     */
    protected $downwardAPI = null;

    /**
     * @Kubernetes\Attribute("emptyDir",type="model",model=EmptyDirVolumeSource::class)
     * @var EmptyDirVolumeSource|null
     */
    protected $emptyDir = null;

    /**
     * @Kubernetes\Attribute("ephemeral",type="model",model=EphemeralVolumeSource::class)
     * @var EphemeralVolumeSource|null
     */
    protected $ephemeral = null;

    /**
     * @Kubernetes\Attribute("fc",type="model",model=FCVolumeSource::class)
     * @var FCVolumeSource|null
     */
    protected $fc = null;

    /**
     * @Kubernetes\Attribute("flexVolume",type="model",model=FlexVolumeSource::class)
     * @var FlexVolumeSource|null
     */
    protected $flexVolume = null;

    /**
     * @Kubernetes\Attribute("flocker",type="model",model=FlockerVolumeSource::class)
     * @var FlockerVolumeSource|null
     */
    protected $flocker = null;

    /**
     * @Kubernetes\Attribute("gcePersistentDisk",type="model",model=GCEPersistentDiskVolumeSource::class)
     * @var GCEPersistentDiskVolumeSource|null
     */
    protected $gcePersistentDisk = null;

    /**
     * @Kubernetes\Attribute("gitRepo",type="model",model=GitRepoVolumeSource::class)
     * @var GitRepoVolumeSource|null
     */
    protected $gitRepo = null;

    /**
     * @Kubernetes\Attribute("glusterfs",type="model",model=GlusterfsVolumeSource::class)
     * @var GlusterfsVolumeSource|null
     */
    protected $glusterfs = null;

    /**
     * @Kubernetes\Attribute("hostPath",type="model",model=HostPathVolumeSource::class)
     * @var HostPathVolumeSource|null
     */
    protected $hostPath = null;

    /**
     * @Kubernetes\Attribute("iscsi",type="model",model=ISCSIVolumeSource::class)
     * @var ISCSIVolumeSource|null
     */
    protected $iscsi = null;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("nfs",type="model",model=NFSVolumeSource::class)
     * @var NFSVolumeSource|null
     */
    protected $nfs = null;

    /**
     * @Kubernetes\Attribute("persistentVolumeClaim",type="model",model=PersistentVolumeClaimVolumeSource::class)
     * @var PersistentVolumeClaimVolumeSource|null
     */
    protected $persistentVolumeClaim = null;

    /**
     * @Kubernetes\Attribute("photonPersistentDisk",type="model",model=PhotonPersistentDiskVolumeSource::class)
     * @var PhotonPersistentDiskVolumeSource|null
     */
    protected $photonPersistentDisk = null;

    /**
     * @Kubernetes\Attribute("portworxVolume",type="model",model=PortworxVolumeSource::class)
     * @var PortworxVolumeSource|null
     */
    protected $portworxVolume = null;

    /**
     * @Kubernetes\Attribute("projected",type="model",model=ProjectedVolumeSource::class)
     * @var ProjectedVolumeSource|null
     */
    protected $projected = null;

    /**
     * @Kubernetes\Attribute("quobyte",type="model",model=QuobyteVolumeSource::class)
     * @var QuobyteVolumeSource|null
     */
    protected $quobyte = null;

    /**
     * @Kubernetes\Attribute("rbd",type="model",model=RBDVolumeSource::class)
     * @var RBDVolumeSource|null
     */
    protected $rbd = null;

    /**
     * @Kubernetes\Attribute("scaleIO",type="model",model=ScaleIOVolumeSource::class)
     * @var ScaleIOVolumeSource|null
     */
    protected $scaleIO = null;

    /**
     * @Kubernetes\Attribute("secret",type="model",model=SecretVolumeSource::class)
     * @var SecretVolumeSource|null
     */
    protected $secret = null;

    /**
     * @Kubernetes\Attribute("storageos",type="model",model=StorageOSVolumeSource::class)
     * @var StorageOSVolumeSource|null
     */
    protected $storageos = null;

    /**
     * @Kubernetes\Attribute("vsphereVolume",type="model",model=VsphereVirtualDiskVolumeSource::class)
     * @var VsphereVirtualDiskVolumeSource|null
     */
    protected $vsphereVolume = null;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * awsElasticBlockStore represents an AWS Disk resource that is attached to a kubelet's host machine
     * and then exposed to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#awselasticblockstore
     */
    public function getAwsElasticBlockStore(): ?AWSElasticBlockStoreVolumeSource
    {
        return $this->awsElasticBlockStore;
    }

    /**
     * awsElasticBlockStore represents an AWS Disk resource that is attached to a kubelet's host machine
     * and then exposed to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#awselasticblockstore
     *
     * @return static
     */
    public function setAwsElasticBlockStore(AWSElasticBlockStoreVolumeSource $awsElasticBlockStore)
    {
        $this->awsElasticBlockStore = $awsElasticBlockStore;

        return $this;
    }

    /**
     * azureDisk represents an Azure Data Disk mount on the host and bind mount to the pod.
     */
    public function getAzureDisk(): ?AzureDiskVolumeSource
    {
        return $this->azureDisk;
    }

    /**
     * azureDisk represents an Azure Data Disk mount on the host and bind mount to the pod.
     *
     * @return static
     */
    public function setAzureDisk(AzureDiskVolumeSource $azureDisk)
    {
        $this->azureDisk = $azureDisk;

        return $this;
    }

    /**
     * azureFile represents an Azure File Service mount on the host and bind mount to the pod.
     */
    public function getAzureFile(): ?AzureFileVolumeSource
    {
        return $this->azureFile;
    }

    /**
     * azureFile represents an Azure File Service mount on the host and bind mount to the pod.
     *
     * @return static
     */
    public function setAzureFile(AzureFileVolumeSource $azureFile)
    {
        $this->azureFile = $azureFile;

        return $this;
    }

    /**
     * cephFS represents a Ceph FS mount on the host that shares a pod's lifetime
     */
    public function getCephfs(): ?CephFSVolumeSource
    {
        return $this->cephfs;
    }

    /**
     * cephFS represents a Ceph FS mount on the host that shares a pod's lifetime
     *
     * @return static
     */
    public function setCephfs(CephFSVolumeSource $cephfs)
    {
        $this->cephfs = $cephfs;

        return $this;
    }

    /**
     * cinder represents a cinder volume attached and mounted on kubelets host machine. More info:
     * https://examples.k8s.io/mysql-cinder-pd/README.md
     */
    public function getCinder(): ?CinderVolumeSource
    {
        return $this->cinder;
    }

    /**
     * cinder represents a cinder volume attached and mounted on kubelets host machine. More info:
     * https://examples.k8s.io/mysql-cinder-pd/README.md
     *
     * @return static
     */
    public function setCinder(CinderVolumeSource $cinder)
    {
        $this->cinder = $cinder;

        return $this;
    }

    /**
     * configMap represents a configMap that should populate this volume
     */
    public function getConfigMap(): ?ConfigMapVolumeSource
    {
        return $this->configMap;
    }

    /**
     * configMap represents a configMap that should populate this volume
     *
     * @return static
     */
    public function setConfigMap(ConfigMapVolumeSource $configMap)
    {
        $this->configMap = $configMap;

        return $this;
    }

    /**
     * csi (Container Storage Interface) represents ephemeral storage that is handled by certain external
     * CSI drivers (Beta feature).
     */
    public function getCsi(): ?CSIVolumeSource
    {
        return $this->csi;
    }

    /**
     * csi (Container Storage Interface) represents ephemeral storage that is handled by certain external
     * CSI drivers (Beta feature).
     *
     * @return static
     */
    public function setCsi(CSIVolumeSource $csi)
    {
        $this->csi = $csi;

        return $this;
    }

    /**
     * downwardAPI represents downward API about the pod that should populate this volume
     */
    public function getDownwardAPI(): ?DownwardAPIVolumeSource
    {
        return $this->downwardAPI;
    }

    /**
     * downwardAPI represents downward API about the pod that should populate this volume
     *
     * @return static
     */
    public function setDownwardAPI(DownwardAPIVolumeSource $downwardAPI)
    {
        $this->downwardAPI = $downwardAPI;

        return $this;
    }

    /**
     * emptyDir represents a temporary directory that shares a pod's lifetime. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#emptydir
     */
    public function getEmptyDir(): ?EmptyDirVolumeSource
    {
        return $this->emptyDir;
    }

    /**
     * emptyDir represents a temporary directory that shares a pod's lifetime. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#emptydir
     *
     * @return static
     */
    public function setEmptyDir(EmptyDirVolumeSource $emptyDir)
    {
        $this->emptyDir = $emptyDir;

        return $this;
    }

    /**
     * ephemeral represents a volume that is handled by a cluster storage driver. The volume's lifecycle is
     * tied to the pod that defines it - it will be created before the pod starts, and deleted when the pod
     * is removed.
     *
     * Use this if: a) the volume is only needed while the pod runs, b) features of normal volumes like
     * restoring from snapshot or capacity
     *    tracking are needed,
     * c) the storage driver is specified through a storage class, and d) the storage driver supports
     * dynamic volume provisioning through
     *    a PersistentVolumeClaim (see EphemeralVolumeSource for more
     *    information on the connection between this volume type
     *    and PersistentVolumeClaim).
     *
     * Use PersistentVolumeClaim or one of the vendor-specific APIs for volumes that persist for longer
     * than the lifecycle of an individual pod.
     *
     * Use CSI for light-weight local ephemeral volumes if the CSI driver is meant to be used that way -
     * see the documentation of the driver for more information.
     *
     * A pod can use both types of ephemeral volumes and persistent volumes at the same time.
     */
    public function getEphemeral(): ?EphemeralVolumeSource
    {
        return $this->ephemeral;
    }

    /**
     * ephemeral represents a volume that is handled by a cluster storage driver. The volume's lifecycle is
     * tied to the pod that defines it - it will be created before the pod starts, and deleted when the pod
     * is removed.
     *
     * Use this if: a) the volume is only needed while the pod runs, b) features of normal volumes like
     * restoring from snapshot or capacity
     *    tracking are needed,
     * c) the storage driver is specified through a storage class, and d) the storage driver supports
     * dynamic volume provisioning through
     *    a PersistentVolumeClaim (see EphemeralVolumeSource for more
     *    information on the connection between this volume type
     *    and PersistentVolumeClaim).
     *
     * Use PersistentVolumeClaim or one of the vendor-specific APIs for volumes that persist for longer
     * than the lifecycle of an individual pod.
     *
     * Use CSI for light-weight local ephemeral volumes if the CSI driver is meant to be used that way -
     * see the documentation of the driver for more information.
     *
     * A pod can use both types of ephemeral volumes and persistent volumes at the same time.
     *
     * @return static
     */
    public function setEphemeral(EphemeralVolumeSource $ephemeral)
    {
        $this->ephemeral = $ephemeral;

        return $this;
    }

    /**
     * fc represents a Fibre Channel resource that is attached to a kubelet's host machine and then exposed
     * to the pod.
     */
    public function getFc(): ?FCVolumeSource
    {
        return $this->fc;
    }

    /**
     * fc represents a Fibre Channel resource that is attached to a kubelet's host machine and then exposed
     * to the pod.
     *
     * @return static
     */
    public function setFc(FCVolumeSource $fc)
    {
        $this->fc = $fc;

        return $this;
    }

    /**
     * flexVolume represents a generic volume resource that is provisioned/attached using an exec based
     * plugin.
     */
    public function getFlexVolume(): ?FlexVolumeSource
    {
        return $this->flexVolume;
    }

    /**
     * flexVolume represents a generic volume resource that is provisioned/attached using an exec based
     * plugin.
     *
     * @return static
     */
    public function setFlexVolume(FlexVolumeSource $flexVolume)
    {
        $this->flexVolume = $flexVolume;

        return $this;
    }

    /**
     * flocker represents a Flocker volume attached to a kubelet's host machine. This depends on the
     * Flocker control service being running
     */
    public function getFlocker(): ?FlockerVolumeSource
    {
        return $this->flocker;
    }

    /**
     * flocker represents a Flocker volume attached to a kubelet's host machine. This depends on the
     * Flocker control service being running
     *
     * @return static
     */
    public function setFlocker(FlockerVolumeSource $flocker)
    {
        $this->flocker = $flocker;

        return $this;
    }

    /**
     * gcePersistentDisk represents a GCE Disk resource that is attached to a kubelet's host machine and
     * then exposed to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#gcepersistentdisk
     */
    public function getGcePersistentDisk(): ?GCEPersistentDiskVolumeSource
    {
        return $this->gcePersistentDisk;
    }

    /**
     * gcePersistentDisk represents a GCE Disk resource that is attached to a kubelet's host machine and
     * then exposed to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#gcepersistentdisk
     *
     * @return static
     */
    public function setGcePersistentDisk(GCEPersistentDiskVolumeSource $gcePersistentDisk)
    {
        $this->gcePersistentDisk = $gcePersistentDisk;

        return $this;
    }

    /**
     * gitRepo represents a git repository at a particular revision. DEPRECATED: GitRepo is deprecated. To
     * provision a container with a git repo, mount an EmptyDir into an InitContainer that clones the repo
     * using git, then mount the EmptyDir into the Pod's container.
     */
    public function getGitRepo(): ?GitRepoVolumeSource
    {
        return $this->gitRepo;
    }

    /**
     * gitRepo represents a git repository at a particular revision. DEPRECATED: GitRepo is deprecated. To
     * provision a container with a git repo, mount an EmptyDir into an InitContainer that clones the repo
     * using git, then mount the EmptyDir into the Pod's container.
     *
     * @return static
     */
    public function setGitRepo(GitRepoVolumeSource $gitRepo)
    {
        $this->gitRepo = $gitRepo;

        return $this;
    }

    /**
     * glusterfs represents a Glusterfs mount on the host that shares a pod's lifetime. More info:
     * https://examples.k8s.io/volumes/glusterfs/README.md
     */
    public function getGlusterfs(): ?GlusterfsVolumeSource
    {
        return $this->glusterfs;
    }

    /**
     * glusterfs represents a Glusterfs mount on the host that shares a pod's lifetime. More info:
     * https://examples.k8s.io/volumes/glusterfs/README.md
     *
     * @return static
     */
    public function setGlusterfs(GlusterfsVolumeSource $glusterfs)
    {
        $this->glusterfs = $glusterfs;

        return $this;
    }

    /**
     * hostPath represents a pre-existing file or directory on the host machine that is directly exposed to
     * the container. This is generally used for system agents or other privileged things that are allowed
     * to see the host machine. Most containers will NOT need this. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     */
    public function getHostPath(): ?HostPathVolumeSource
    {
        return $this->hostPath;
    }

    /**
     * hostPath represents a pre-existing file or directory on the host machine that is directly exposed to
     * the container. This is generally used for system agents or other privileged things that are allowed
     * to see the host machine. Most containers will NOT need this. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     *
     * @return static
     */
    public function setHostPath(HostPathVolumeSource $hostPath)
    {
        $this->hostPath = $hostPath;

        return $this;
    }

    /**
     * iscsi represents an ISCSI Disk resource that is attached to a kubelet's host machine and then
     * exposed to the pod. More info: https://examples.k8s.io/volumes/iscsi/README.md
     */
    public function getIscsi(): ?ISCSIVolumeSource
    {
        return $this->iscsi;
    }

    /**
     * iscsi represents an ISCSI Disk resource that is attached to a kubelet's host machine and then
     * exposed to the pod. More info: https://examples.k8s.io/volumes/iscsi/README.md
     *
     * @return static
     */
    public function setIscsi(ISCSIVolumeSource $iscsi)
    {
        $this->iscsi = $iscsi;

        return $this;
    }

    /**
     * name of the volume. Must be a DNS_LABEL and unique within the pod. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name of the volume. Must be a DNS_LABEL and unique within the pod. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * nfs represents an NFS mount on the host that shares a pod's lifetime More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     */
    public function getNfs(): ?NFSVolumeSource
    {
        return $this->nfs;
    }

    /**
     * nfs represents an NFS mount on the host that shares a pod's lifetime More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     *
     * @return static
     */
    public function setNfs(NFSVolumeSource $nfs)
    {
        $this->nfs = $nfs;

        return $this;
    }

    /**
     * persistentVolumeClaimVolumeSource represents a reference to a PersistentVolumeClaim in the same
     * namespace. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     */
    public function getPersistentVolumeClaim(): ?PersistentVolumeClaimVolumeSource
    {
        return $this->persistentVolumeClaim;
    }

    /**
     * persistentVolumeClaimVolumeSource represents a reference to a PersistentVolumeClaim in the same
     * namespace. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     *
     * @return static
     */
    public function setPersistentVolumeClaim(PersistentVolumeClaimVolumeSource $persistentVolumeClaim)
    {
        $this->persistentVolumeClaim = $persistentVolumeClaim;

        return $this;
    }

    /**
     * photonPersistentDisk represents a PhotonController persistent disk attached and mounted on kubelets
     * host machine
     */
    public function getPhotonPersistentDisk(): ?PhotonPersistentDiskVolumeSource
    {
        return $this->photonPersistentDisk;
    }

    /**
     * photonPersistentDisk represents a PhotonController persistent disk attached and mounted on kubelets
     * host machine
     *
     * @return static
     */
    public function setPhotonPersistentDisk(PhotonPersistentDiskVolumeSource $photonPersistentDisk)
    {
        $this->photonPersistentDisk = $photonPersistentDisk;

        return $this;
    }

    /**
     * portworxVolume represents a portworx volume attached and mounted on kubelets host machine
     */
    public function getPortworxVolume(): ?PortworxVolumeSource
    {
        return $this->portworxVolume;
    }

    /**
     * portworxVolume represents a portworx volume attached and mounted on kubelets host machine
     *
     * @return static
     */
    public function setPortworxVolume(PortworxVolumeSource $portworxVolume)
    {
        $this->portworxVolume = $portworxVolume;

        return $this;
    }

    /**
     * projected items for all in one resources secrets, configmaps, and downward API
     */
    public function getProjected(): ?ProjectedVolumeSource
    {
        return $this->projected;
    }

    /**
     * projected items for all in one resources secrets, configmaps, and downward API
     *
     * @return static
     */
    public function setProjected(ProjectedVolumeSource $projected)
    {
        $this->projected = $projected;

        return $this;
    }

    /**
     * quobyte represents a Quobyte mount on the host that shares a pod's lifetime
     */
    public function getQuobyte(): ?QuobyteVolumeSource
    {
        return $this->quobyte;
    }

    /**
     * quobyte represents a Quobyte mount on the host that shares a pod's lifetime
     *
     * @return static
     */
    public function setQuobyte(QuobyteVolumeSource $quobyte)
    {
        $this->quobyte = $quobyte;

        return $this;
    }

    /**
     * rbd represents a Rados Block Device mount on the host that shares a pod's lifetime. More info:
     * https://examples.k8s.io/volumes/rbd/README.md
     */
    public function getRbd(): ?RBDVolumeSource
    {
        return $this->rbd;
    }

    /**
     * rbd represents a Rados Block Device mount on the host that shares a pod's lifetime. More info:
     * https://examples.k8s.io/volumes/rbd/README.md
     *
     * @return static
     */
    public function setRbd(RBDVolumeSource $rbd)
    {
        $this->rbd = $rbd;

        return $this;
    }

    /**
     * scaleIO represents a ScaleIO persistent volume attached and mounted on Kubernetes nodes.
     */
    public function getScaleIO(): ?ScaleIOVolumeSource
    {
        return $this->scaleIO;
    }

    /**
     * scaleIO represents a ScaleIO persistent volume attached and mounted on Kubernetes nodes.
     *
     * @return static
     */
    public function setScaleIO(ScaleIOVolumeSource $scaleIO)
    {
        $this->scaleIO = $scaleIO;

        return $this;
    }

    /**
     * secret represents a secret that should populate this volume. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#secret
     */
    public function getSecret(): ?SecretVolumeSource
    {
        return $this->secret;
    }

    /**
     * secret represents a secret that should populate this volume. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#secret
     *
     * @return static
     */
    public function setSecret(SecretVolumeSource $secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * storageOS represents a StorageOS volume attached and mounted on Kubernetes nodes.
     */
    public function getStorageos(): ?StorageOSVolumeSource
    {
        return $this->storageos;
    }

    /**
     * storageOS represents a StorageOS volume attached and mounted on Kubernetes nodes.
     *
     * @return static
     */
    public function setStorageos(StorageOSVolumeSource $storageos)
    {
        $this->storageos = $storageos;

        return $this;
    }

    /**
     * vsphereVolume represents a vSphere volume attached and mounted on kubelets host machine
     */
    public function getVsphereVolume(): ?VsphereVirtualDiskVolumeSource
    {
        return $this->vsphereVolume;
    }

    /**
     * vsphereVolume represents a vSphere volume attached and mounted on kubelets host machine
     *
     * @return static
     */
    public function setVsphereVolume(VsphereVirtualDiskVolumeSource $vsphereVolume)
    {
        $this->vsphereVolume = $vsphereVolume;

        return $this;
    }
}
