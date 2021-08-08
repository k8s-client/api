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

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * PersistentVolumeSpec is the specification of a persistent volume.
 */
class PersistentVolumeSpec
{
    /**
     * @Kubernetes\Attribute("accessModes")
     * @var string[]|null
     */
    protected $accessModes = null;

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
     * @Kubernetes\Attribute("azureFile",type="model",model=AzureFilePersistentVolumeSource::class)
     * @var AzureFilePersistentVolumeSource|null
     */
    protected $azureFile = null;

    /**
     * @Kubernetes\Attribute("capacity")
     * @var object[]|null
     */
    protected $capacity = null;

    /**
     * @Kubernetes\Attribute("cephfs",type="model",model=CephFSPersistentVolumeSource::class)
     * @var CephFSPersistentVolumeSource|null
     */
    protected $cephfs = null;

    /**
     * @Kubernetes\Attribute("cinder",type="model",model=CinderPersistentVolumeSource::class)
     * @var CinderPersistentVolumeSource|null
     */
    protected $cinder = null;

    /**
     * @Kubernetes\Attribute("claimRef",type="model",model=ObjectReference::class)
     * @var ObjectReference|null
     */
    protected $claimRef = null;

    /**
     * @Kubernetes\Attribute("csi",type="model",model=CSIPersistentVolumeSource::class)
     * @var CSIPersistentVolumeSource|null
     */
    protected $csi = null;

    /**
     * @Kubernetes\Attribute("fc",type="model",model=FCVolumeSource::class)
     * @var FCVolumeSource|null
     */
    protected $fc = null;

    /**
     * @Kubernetes\Attribute("flexVolume",type="model",model=FlexPersistentVolumeSource::class)
     * @var FlexPersistentVolumeSource|null
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
     * @Kubernetes\Attribute("glusterfs",type="model",model=GlusterfsPersistentVolumeSource::class)
     * @var GlusterfsPersistentVolumeSource|null
     */
    protected $glusterfs = null;

    /**
     * @Kubernetes\Attribute("hostPath",type="model",model=HostPathVolumeSource::class)
     * @var HostPathVolumeSource|null
     */
    protected $hostPath = null;

    /**
     * @Kubernetes\Attribute("iscsi",type="model",model=ISCSIPersistentVolumeSource::class)
     * @var ISCSIPersistentVolumeSource|null
     */
    protected $iscsi = null;

    /**
     * @Kubernetes\Attribute("local",type="model",model=LocalVolumeSource::class)
     * @var LocalVolumeSource|null
     */
    protected $local = null;

    /**
     * @Kubernetes\Attribute("mountOptions")
     * @var string[]|null
     */
    protected $mountOptions = null;

    /**
     * @Kubernetes\Attribute("nfs",type="model",model=NFSVolumeSource::class)
     * @var NFSVolumeSource|null
     */
    protected $nfs = null;

    /**
     * @Kubernetes\Attribute("nodeAffinity",type="model",model=VolumeNodeAffinity::class)
     * @var VolumeNodeAffinity|null
     */
    protected $nodeAffinity = null;

    /**
     * @Kubernetes\Attribute("persistentVolumeReclaimPolicy")
     * @var string|null
     */
    protected $persistentVolumeReclaimPolicy = null;

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
     * @Kubernetes\Attribute("quobyte",type="model",model=QuobyteVolumeSource::class)
     * @var QuobyteVolumeSource|null
     */
    protected $quobyte = null;

    /**
     * @Kubernetes\Attribute("rbd",type="model",model=RBDPersistentVolumeSource::class)
     * @var RBDPersistentVolumeSource|null
     */
    protected $rbd = null;

    /**
     * @Kubernetes\Attribute("scaleIO",type="model",model=ScaleIOPersistentVolumeSource::class)
     * @var ScaleIOPersistentVolumeSource|null
     */
    protected $scaleIO = null;

    /**
     * @Kubernetes\Attribute("storageClassName")
     * @var string|null
     */
    protected $storageClassName = null;

    /**
     * @Kubernetes\Attribute("storageos",type="model",model=StorageOSPersistentVolumeSource::class)
     * @var StorageOSPersistentVolumeSource|null
     */
    protected $storageos = null;

    /**
     * @Kubernetes\Attribute("volumeMode")
     * @var string|null
     */
    protected $volumeMode = null;

    /**
     * @Kubernetes\Attribute("vsphereVolume",type="model",model=VsphereVirtualDiskVolumeSource::class)
     * @var VsphereVirtualDiskVolumeSource|null
     */
    protected $vsphereVolume = null;

    /**
     * AccessModes contains all ways the volume can be mounted. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes
     */
    public function getAccessModes(): ?array
    {
        return $this->accessModes;
    }

    /**
     * AccessModes contains all ways the volume can be mounted. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes
     *
     * @return static
     */
    public function setAccessModes(array $accessModes)
    {
        $this->accessModes = $accessModes;

        return $this;
    }

    /**
     * AWSElasticBlockStore represents an AWS Disk resource that is attached to a kubelet's host machine
     * and then exposed to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#awselasticblockstore
     */
    public function getAwsElasticBlockStore(): ?AWSElasticBlockStoreVolumeSource
    {
        return $this->awsElasticBlockStore;
    }

    /**
     * AWSElasticBlockStore represents an AWS Disk resource that is attached to a kubelet's host machine
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
     * AzureDisk represents an Azure Data Disk mount on the host and bind mount to the pod.
     */
    public function getAzureDisk(): ?AzureDiskVolumeSource
    {
        return $this->azureDisk;
    }

    /**
     * AzureDisk represents an Azure Data Disk mount on the host and bind mount to the pod.
     *
     * @return static
     */
    public function setAzureDisk(AzureDiskVolumeSource $azureDisk)
    {
        $this->azureDisk = $azureDisk;

        return $this;
    }

    /**
     * AzureFile represents an Azure File Service mount on the host and bind mount to the pod.
     */
    public function getAzureFile(): ?AzureFilePersistentVolumeSource
    {
        return $this->azureFile;
    }

    /**
     * AzureFile represents an Azure File Service mount on the host and bind mount to the pod.
     *
     * @return static
     */
    public function setAzureFile(AzureFilePersistentVolumeSource $azureFile)
    {
        $this->azureFile = $azureFile;

        return $this;
    }

    /**
     * A description of the persistent volume's resources and capacity. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#capacity
     */
    public function getCapacity(): ?array
    {
        return $this->capacity;
    }

    /**
     * A description of the persistent volume's resources and capacity. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#capacity
     *
     * @return static
     */
    public function setCapacity(array $capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * CephFS represents a Ceph FS mount on the host that shares a pod's lifetime
     */
    public function getCephfs(): ?CephFSPersistentVolumeSource
    {
        return $this->cephfs;
    }

    /**
     * CephFS represents a Ceph FS mount on the host that shares a pod's lifetime
     *
     * @return static
     */
    public function setCephfs(CephFSPersistentVolumeSource $cephfs)
    {
        $this->cephfs = $cephfs;

        return $this;
    }

    /**
     * Cinder represents a cinder volume attached and mounted on kubelets host machine. More info:
     * https://examples.k8s.io/mysql-cinder-pd/README.md
     */
    public function getCinder(): ?CinderPersistentVolumeSource
    {
        return $this->cinder;
    }

    /**
     * Cinder represents a cinder volume attached and mounted on kubelets host machine. More info:
     * https://examples.k8s.io/mysql-cinder-pd/README.md
     *
     * @return static
     */
    public function setCinder(CinderPersistentVolumeSource $cinder)
    {
        $this->cinder = $cinder;

        return $this;
    }

    /**
     * ClaimRef is part of a bi-directional binding between PersistentVolume and PersistentVolumeClaim.
     * Expected to be non-nil when bound. claim.VolumeName is the authoritative bind between PV and PVC.
     * More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes#binding
     */
    public function getClaimRef(): ?ObjectReference
    {
        return $this->claimRef;
    }

    /**
     * ClaimRef is part of a bi-directional binding between PersistentVolume and PersistentVolumeClaim.
     * Expected to be non-nil when bound. claim.VolumeName is the authoritative bind between PV and PVC.
     * More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes#binding
     *
     * @return static
     */
    public function setClaimRef(ObjectReference $claimRef)
    {
        $this->claimRef = $claimRef;

        return $this;
    }

    /**
     * CSI represents storage that is handled by an external CSI driver (Beta feature).
     */
    public function getCsi(): ?CSIPersistentVolumeSource
    {
        return $this->csi;
    }

    /**
     * CSI represents storage that is handled by an external CSI driver (Beta feature).
     *
     * @return static
     */
    public function setCsi(CSIPersistentVolumeSource $csi)
    {
        $this->csi = $csi;

        return $this;
    }

    /**
     * FC represents a Fibre Channel resource that is attached to a kubelet's host machine and then exposed
     * to the pod.
     */
    public function getFc(): ?FCVolumeSource
    {
        return $this->fc;
    }

    /**
     * FC represents a Fibre Channel resource that is attached to a kubelet's host machine and then exposed
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
     * FlexVolume represents a generic volume resource that is provisioned/attached using an exec based
     * plugin.
     */
    public function getFlexVolume(): ?FlexPersistentVolumeSource
    {
        return $this->flexVolume;
    }

    /**
     * FlexVolume represents a generic volume resource that is provisioned/attached using an exec based
     * plugin.
     *
     * @return static
     */
    public function setFlexVolume(FlexPersistentVolumeSource $flexVolume)
    {
        $this->flexVolume = $flexVolume;

        return $this;
    }

    /**
     * Flocker represents a Flocker volume attached to a kubelet's host machine and exposed to the pod for
     * its usage. This depends on the Flocker control service being running
     */
    public function getFlocker(): ?FlockerVolumeSource
    {
        return $this->flocker;
    }

    /**
     * Flocker represents a Flocker volume attached to a kubelet's host machine and exposed to the pod for
     * its usage. This depends on the Flocker control service being running
     *
     * @return static
     */
    public function setFlocker(FlockerVolumeSource $flocker)
    {
        $this->flocker = $flocker;

        return $this;
    }

    /**
     * GCEPersistentDisk represents a GCE Disk resource that is attached to a kubelet's host machine and
     * then exposed to the pod. Provisioned by an admin. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#gcepersistentdisk
     */
    public function getGcePersistentDisk(): ?GCEPersistentDiskVolumeSource
    {
        return $this->gcePersistentDisk;
    }

    /**
     * GCEPersistentDisk represents a GCE Disk resource that is attached to a kubelet's host machine and
     * then exposed to the pod. Provisioned by an admin. More info:
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
     * Glusterfs represents a Glusterfs volume that is attached to a host and exposed to the pod.
     * Provisioned by an admin. More info: https://examples.k8s.io/volumes/glusterfs/README.md
     */
    public function getGlusterfs(): ?GlusterfsPersistentVolumeSource
    {
        return $this->glusterfs;
    }

    /**
     * Glusterfs represents a Glusterfs volume that is attached to a host and exposed to the pod.
     * Provisioned by an admin. More info: https://examples.k8s.io/volumes/glusterfs/README.md
     *
     * @return static
     */
    public function setGlusterfs(GlusterfsPersistentVolumeSource $glusterfs)
    {
        $this->glusterfs = $glusterfs;

        return $this;
    }

    /**
     * HostPath represents a directory on the host. Provisioned by a developer or tester. This is useful
     * for single-node development and testing only! On-host storage is not supported in any way and WILL
     * NOT WORK in a multi-node cluster. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     */
    public function getHostPath(): ?HostPathVolumeSource
    {
        return $this->hostPath;
    }

    /**
     * HostPath represents a directory on the host. Provisioned by a developer or tester. This is useful
     * for single-node development and testing only! On-host storage is not supported in any way and WILL
     * NOT WORK in a multi-node cluster. More info:
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
     * ISCSI represents an ISCSI Disk resource that is attached to a kubelet's host machine and then
     * exposed to the pod. Provisioned by an admin.
     */
    public function getIscsi(): ?ISCSIPersistentVolumeSource
    {
        return $this->iscsi;
    }

    /**
     * ISCSI represents an ISCSI Disk resource that is attached to a kubelet's host machine and then
     * exposed to the pod. Provisioned by an admin.
     *
     * @return static
     */
    public function setIscsi(ISCSIPersistentVolumeSource $iscsi)
    {
        $this->iscsi = $iscsi;

        return $this;
    }

    /**
     * Local represents directly-attached storage with node affinity
     */
    public function getLocal(): ?LocalVolumeSource
    {
        return $this->local;
    }

    /**
     * Local represents directly-attached storage with node affinity
     *
     * @return static
     */
    public function setLocal(LocalVolumeSource $local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * A list of mount options, e.g. ["ro", "soft"]. Not validated - mount will simply fail if one is
     * invalid. More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes/#mount-options
     */
    public function getMountOptions(): ?array
    {
        return $this->mountOptions;
    }

    /**
     * A list of mount options, e.g. ["ro", "soft"]. Not validated - mount will simply fail if one is
     * invalid. More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes/#mount-options
     *
     * @return static
     */
    public function setMountOptions(array $mountOptions)
    {
        $this->mountOptions = $mountOptions;

        return $this;
    }

    /**
     * NFS represents an NFS mount on the host. Provisioned by an admin. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     */
    public function getNfs(): ?NFSVolumeSource
    {
        return $this->nfs;
    }

    /**
     * NFS represents an NFS mount on the host. Provisioned by an admin. More info:
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
     * NodeAffinity defines constraints that limit what nodes this volume can be accessed from. This field
     * influences the scheduling of pods that use this volume.
     */
    public function getNodeAffinity(): ?VolumeNodeAffinity
    {
        return $this->nodeAffinity;
    }

    /**
     * NodeAffinity defines constraints that limit what nodes this volume can be accessed from. This field
     * influences the scheduling of pods that use this volume.
     *
     * @return static
     */
    public function setNodeAffinity(VolumeNodeAffinity $nodeAffinity)
    {
        $this->nodeAffinity = $nodeAffinity;

        return $this;
    }

    /**
     * What happens to a persistent volume when released from its claim. Valid options are Retain (default
     * for manually created PersistentVolumes), Delete (default for dynamically provisioned
     * PersistentVolumes), and Recycle (deprecated). Recycle must be supported by the volume plugin
     * underlying this PersistentVolume. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#reclaiming
     */
    public function getPersistentVolumeReclaimPolicy(): ?string
    {
        return $this->persistentVolumeReclaimPolicy;
    }

    /**
     * What happens to a persistent volume when released from its claim. Valid options are Retain (default
     * for manually created PersistentVolumes), Delete (default for dynamically provisioned
     * PersistentVolumes), and Recycle (deprecated). Recycle must be supported by the volume plugin
     * underlying this PersistentVolume. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#reclaiming
     *
     * @return static
     */
    public function setPersistentVolumeReclaimPolicy(string $persistentVolumeReclaimPolicy)
    {
        $this->persistentVolumeReclaimPolicy = $persistentVolumeReclaimPolicy;

        return $this;
    }

    /**
     * PhotonPersistentDisk represents a PhotonController persistent disk attached and mounted on kubelets
     * host machine
     */
    public function getPhotonPersistentDisk(): ?PhotonPersistentDiskVolumeSource
    {
        return $this->photonPersistentDisk;
    }

    /**
     * PhotonPersistentDisk represents a PhotonController persistent disk attached and mounted on kubelets
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
     * PortworxVolume represents a portworx volume attached and mounted on kubelets host machine
     */
    public function getPortworxVolume(): ?PortworxVolumeSource
    {
        return $this->portworxVolume;
    }

    /**
     * PortworxVolume represents a portworx volume attached and mounted on kubelets host machine
     *
     * @return static
     */
    public function setPortworxVolume(PortworxVolumeSource $portworxVolume)
    {
        $this->portworxVolume = $portworxVolume;

        return $this;
    }

    /**
     * Quobyte represents a Quobyte mount on the host that shares a pod's lifetime
     */
    public function getQuobyte(): ?QuobyteVolumeSource
    {
        return $this->quobyte;
    }

    /**
     * Quobyte represents a Quobyte mount on the host that shares a pod's lifetime
     *
     * @return static
     */
    public function setQuobyte(QuobyteVolumeSource $quobyte)
    {
        $this->quobyte = $quobyte;

        return $this;
    }

    /**
     * RBD represents a Rados Block Device mount on the host that shares a pod's lifetime. More info:
     * https://examples.k8s.io/volumes/rbd/README.md
     */
    public function getRbd(): ?RBDPersistentVolumeSource
    {
        return $this->rbd;
    }

    /**
     * RBD represents a Rados Block Device mount on the host that shares a pod's lifetime. More info:
     * https://examples.k8s.io/volumes/rbd/README.md
     *
     * @return static
     */
    public function setRbd(RBDPersistentVolumeSource $rbd)
    {
        $this->rbd = $rbd;

        return $this;
    }

    /**
     * ScaleIO represents a ScaleIO persistent volume attached and mounted on Kubernetes nodes.
     */
    public function getScaleIO(): ?ScaleIOPersistentVolumeSource
    {
        return $this->scaleIO;
    }

    /**
     * ScaleIO represents a ScaleIO persistent volume attached and mounted on Kubernetes nodes.
     *
     * @return static
     */
    public function setScaleIO(ScaleIOPersistentVolumeSource $scaleIO)
    {
        $this->scaleIO = $scaleIO;

        return $this;
    }

    /**
     * Name of StorageClass to which this persistent volume belongs. Empty value means that this volume
     * does not belong to any StorageClass.
     */
    public function getStorageClassName(): ?string
    {
        return $this->storageClassName;
    }

    /**
     * Name of StorageClass to which this persistent volume belongs. Empty value means that this volume
     * does not belong to any StorageClass.
     *
     * @return static
     */
    public function setStorageClassName(string $storageClassName)
    {
        $this->storageClassName = $storageClassName;

        return $this;
    }

    /**
     * StorageOS represents a StorageOS volume that is attached to the kubelet's host machine and mounted
     * into the pod More info: https://examples.k8s.io/volumes/storageos/README.md
     */
    public function getStorageos(): ?StorageOSPersistentVolumeSource
    {
        return $this->storageos;
    }

    /**
     * StorageOS represents a StorageOS volume that is attached to the kubelet's host machine and mounted
     * into the pod More info: https://examples.k8s.io/volumes/storageos/README.md
     *
     * @return static
     */
    public function setStorageos(StorageOSPersistentVolumeSource $storageos)
    {
        $this->storageos = $storageos;

        return $this;
    }

    /**
     * volumeMode defines if a volume is intended to be used with a formatted filesystem or to remain in
     * raw block state. Value of Filesystem is implied when not included in spec.
     */
    public function getVolumeMode(): ?string
    {
        return $this->volumeMode;
    }

    /**
     * volumeMode defines if a volume is intended to be used with a formatted filesystem or to remain in
     * raw block state. Value of Filesystem is implied when not included in spec.
     *
     * @return static
     */
    public function setVolumeMode(string $volumeMode)
    {
        $this->volumeMode = $volumeMode;

        return $this;
    }

    /**
     * VsphereVolume represents a vSphere volume attached and mounted on kubelets host machine
     */
    public function getVsphereVolume(): ?VsphereVirtualDiskVolumeSource
    {
        return $this->vsphereVolume;
    }

    /**
     * VsphereVolume represents a vSphere volume attached and mounted on kubelets host machine
     *
     * @return static
     */
    public function setVsphereVolume(VsphereVirtualDiskVolumeSource $vsphereVolume)
    {
        $this->vsphereVolume = $vsphereVolume;

        return $this;
    }
}
