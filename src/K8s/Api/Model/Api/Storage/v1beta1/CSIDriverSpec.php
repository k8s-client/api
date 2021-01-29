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

namespace K8s\Api\Model\Api\Storage\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * CSIDriverSpec is the specification of a CSIDriver.
 */
class CSIDriverSpec
{
    /**
     * @Kubernetes\Attribute("attachRequired")
     * @var bool|null
     */
    protected $attachRequired = null;

    /**
     * @Kubernetes\Attribute("podInfoOnMount")
     * @var bool|null
     */
    protected $podInfoOnMount = null;

    /**
     * @Kubernetes\Attribute("volumeLifecycleModes")
     * @var string[]|null
     */
    protected $volumeLifecycleModes = null;

    /**
     * @param bool|null $attachRequired
     * @param bool|null $podInfoOnMount
     * @param string[]|null $volumeLifecycleModes
     */
    public function __construct(?bool $attachRequired = null, ?bool $podInfoOnMount = null, ?array $volumeLifecycleModes = null)
    {
        $this->attachRequired = $attachRequired;
        $this->podInfoOnMount = $podInfoOnMount;
        $this->volumeLifecycleModes = $volumeLifecycleModes;
    }

    /**
     * attachRequired indicates this CSI volume driver requires an attach operation (because it implements
     * the CSI ControllerPublishVolume() method), and that the Kubernetes attach detach controller should
     * call the attach volume interface which checks the volumeattachment status and waits until the volume
     * is attached before proceeding to mounting. The CSI external-attacher coordinates with CSI volume
     * driver and updates the volumeattachment status when the attach operation is complete. If the
     * CSIDriverRegistry feature gate is enabled and the value is specified to false, the attach operation
     * will be skipped. Otherwise the attach operation will be called.
     */
    public function isAttachRequired(): ?bool
    {
        return $this->attachRequired;
    }

    /**
     * attachRequired indicates this CSI volume driver requires an attach operation (because it implements
     * the CSI ControllerPublishVolume() method), and that the Kubernetes attach detach controller should
     * call the attach volume interface which checks the volumeattachment status and waits until the volume
     * is attached before proceeding to mounting. The CSI external-attacher coordinates with CSI volume
     * driver and updates the volumeattachment status when the attach operation is complete. If the
     * CSIDriverRegistry feature gate is enabled and the value is specified to false, the attach operation
     * will be skipped. Otherwise the attach operation will be called.
     *
     * @return static
     */
    public function setIsAttachRequired(bool $attachRequired)
    {
        $this->attachRequired = $attachRequired;

        return $this;
    }

    /**
     * If set to true, podInfoOnMount indicates this CSI volume driver requires additional pod information
     * (like podName, podUID, etc.) during mount operations. If set to false, pod information will not be
     * passed on mount. Default is false. The CSI driver specifies podInfoOnMount as part of driver
     * deployment. If true, Kubelet will pass pod information as VolumeContext in the CSI
     * NodePublishVolume() calls. The CSI driver is responsible for parsing and validating the information
     * passed in as VolumeContext. The following VolumeConext will be passed if podInfoOnMount is set to
     * true. This list might grow, but the prefix will be used. "csi.storage.k8s.io/pod.name": pod.Name
     * "csi.storage.k8s.io/pod.namespace": pod.Namespace "csi.storage.k8s.io/pod.uid": string(pod.UID)
     * "csi.storage.k8s.io/ephemeral": "true" iff the volume is an ephemeral inline volume
     *                                 defined by a CSIVolumeSource, otherwise "false"
     *
     * "csi.storage.k8s.io/ephemeral" is a new feature in Kubernetes 1.16. It is only required for drivers
     * which support both the "Persistent" and "Ephemeral" VolumeLifecycleMode. Other drivers can leave pod
     * info disabled and/or ignore this field. As Kubernetes 1.15 doesn't support this field, drivers can
     * only support one mode when deployed on such a cluster and the deployment determines which mode that
     * is, for example via a command line parameter of the driver.
     */
    public function isPodInfoOnMount(): ?bool
    {
        return $this->podInfoOnMount;
    }

    /**
     * If set to true, podInfoOnMount indicates this CSI volume driver requires additional pod information
     * (like podName, podUID, etc.) during mount operations. If set to false, pod information will not be
     * passed on mount. Default is false. The CSI driver specifies podInfoOnMount as part of driver
     * deployment. If true, Kubelet will pass pod information as VolumeContext in the CSI
     * NodePublishVolume() calls. The CSI driver is responsible for parsing and validating the information
     * passed in as VolumeContext. The following VolumeConext will be passed if podInfoOnMount is set to
     * true. This list might grow, but the prefix will be used. "csi.storage.k8s.io/pod.name": pod.Name
     * "csi.storage.k8s.io/pod.namespace": pod.Namespace "csi.storage.k8s.io/pod.uid": string(pod.UID)
     * "csi.storage.k8s.io/ephemeral": "true" iff the volume is an ephemeral inline volume
     *                                 defined by a CSIVolumeSource, otherwise "false"
     *
     * "csi.storage.k8s.io/ephemeral" is a new feature in Kubernetes 1.16. It is only required for drivers
     * which support both the "Persistent" and "Ephemeral" VolumeLifecycleMode. Other drivers can leave pod
     * info disabled and/or ignore this field. As Kubernetes 1.15 doesn't support this field, drivers can
     * only support one mode when deployed on such a cluster and the deployment determines which mode that
     * is, for example via a command line parameter of the driver.
     *
     * @return static
     */
    public function setIsPodInfoOnMount(bool $podInfoOnMount)
    {
        $this->podInfoOnMount = $podInfoOnMount;

        return $this;
    }

    /**
     * VolumeLifecycleModes defines what kind of volumes this CSI volume driver supports. The default if
     * the list is empty is "Persistent", which is the usage defined by the CSI specification and
     * implemented in Kubernetes via the usual PV/PVC mechanism. The other mode is "Ephemeral". In this
     * mode, volumes are defined inline inside the pod spec with CSIVolumeSource and their lifecycle is
     * tied to the lifecycle of that pod. A driver has to be aware of this because it is only going to get
     * a NodePublishVolume call for such a volume. For more information about implementing this mode, see
     * https://kubernetes-csi.github.io/docs/ephemeral-local-volumes.html A driver can support one or more
     * of these modes and more modes may be added in the future.
     */
    public function getVolumeLifecycleModes(): ?array
    {
        return $this->volumeLifecycleModes;
    }

    /**
     * VolumeLifecycleModes defines what kind of volumes this CSI volume driver supports. The default if
     * the list is empty is "Persistent", which is the usage defined by the CSI specification and
     * implemented in Kubernetes via the usual PV/PVC mechanism. The other mode is "Ephemeral". In this
     * mode, volumes are defined inline inside the pod spec with CSIVolumeSource and their lifecycle is
     * tied to the lifecycle of that pod. A driver has to be aware of this because it is only going to get
     * a NodePublishVolume call for such a volume. For more information about implementing this mode, see
     * https://kubernetes-csi.github.io/docs/ephemeral-local-volumes.html A driver can support one or more
     * of these modes and more modes may be added in the future.
     *
     * @return static
     */
    public function setVolumeLifecycleModes(array $volumeLifecycleModes)
    {
        $this->volumeLifecycleModes = $volumeLifecycleModes;

        return $this;
    }
}
