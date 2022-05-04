<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.24.0
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Certificates\v1;

use DateTimeInterface;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ManagedFieldsEntry;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\OwnerReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * CertificateSigningRequest objects provide a mechanism to obtain x509 certificates by submitting a
 * certificate signing request, and having it asynchronously approved and issued.
 *
 * Kubelets use this API to obtain:
 *  1. client certificates to authenticate to kube-apiserver (with the
 * "kubernetes.io/kube-apiserver-client-kubelet" signerName).
 *  2. serving certificates for TLS endpoints kube-apiserver can connect to securely (with the
 * "kubernetes.io/kubelet-serving" signerName).
 *
 * This API can be used to request client certificates to authenticate to kube-apiserver (with the
 * "kubernetes.io/kube-apiserver-client" signerName), or to obtain certificates from custom
 * non-Kubernetes signers.
 *
 * @Kubernetes\Kind("CertificateSigningRequest",group="certificates.k8s.io",version="v1")
 * @Kubernetes\Operation("get",path="/apis/certificates.k8s.io/v1/certificatesigningrequests/{name}",response="static::class")
 * @Kubernetes\Operation("get-status",path="/apis/certificates.k8s.io/v1/certificatesigningrequests/{name}/status",response="static::class")
 * @Kubernetes\Operation("post",path="/apis/certificates.k8s.io/v1/certificatesigningrequests",body="model",response="static::class")
 * @Kubernetes\Operation("delete",path="/apis/certificates.k8s.io/v1/certificatesigningrequests/{name}",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("put",path="/apis/certificates.k8s.io/v1/certificatesigningrequests/{name}",body="model",response="static::class")
 * @Kubernetes\Operation("put-status",path="/apis/certificates.k8s.io/v1/certificatesigningrequests/{name}/status",body="model",response="static::class")
 * @Kubernetes\Operation("deletecollection-all",path="/apis/certificates.k8s.io/v1/certificatesigningrequests",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch-all",path="/apis/certificates.k8s.io/v1/certificatesigningrequests",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("patch",path="/apis/certificates.k8s.io/v1/certificatesigningrequests/{name}",body="patch",response="static::class")
 * @Kubernetes\Operation("patch-status",path="/apis/certificates.k8s.io/v1/certificatesigningrequests/{name}/status",body="patch",response="static::class")
 * @Kubernetes\Operation("list-all",path="/apis/certificates.k8s.io/v1/certificatesigningrequests",response="K8s\Api\Model\Api\Certificates\v1\CertificateSigningRequestList")
 */
class CertificateSigningRequest
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string
     */
    protected $apiVersion = 'certificates.k8s.io/v1';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string
     */
    protected $kind = 'CertificateSigningRequest';

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ObjectMeta::class)
     * @var ObjectMeta
     */
    protected $metadata;

    /**
     * @Kubernetes\Attribute("spec",type="model",model=CertificateSigningRequestSpec::class,isRequired=true)
     * @var CertificateSigningRequestSpec
     */
    protected $spec;

    /**
     * @Kubernetes\Attribute("status",type="model",model=CertificateSigningRequestStatus::class)
     * @var CertificateSigningRequestStatus|null
     */
    protected $status = null;

    /**
     * @param string $request
     * @param string $signerName
     */
    public function __construct(?string $name, string $request, string $signerName)
    {
        $this->metadata = new ObjectMeta($name);
        $this->spec = new CertificateSigningRequestSpec($request, $signerName);
    }

    /**
     * Annotations is an unstructured key value map stored with a resource that may be set by external
     * tools to store and retrieve arbitrary metadata. They are not queryable and should be preserved when
     * modifying objects. More info: http://kubernetes.io/docs/user-guide/annotations
     */
    public function getAnnotations(): ?array
    {
        return $this->metadata->getAnnotations();
    }

    /**
     * Annotations is an unstructured key value map stored with a resource that may be set by external
     * tools to store and retrieve arbitrary metadata. They are not queryable and should be preserved when
     * modifying objects. More info: http://kubernetes.io/docs/user-guide/annotations
     *
     * @return static
     */
    public function setAnnotations(array $annotations)
    {
        $this->metadata->setAnnotations($annotations);

        return $this;
    }

    /**
     * Deprecated: ClusterName is a legacy field that was always cleared by the system and never used; it
     * will be removed completely in 1.25.
     *
     * The name in the go struct is changed to help clients detect accidental use.
     */
    public function getClusterName(): ?string
    {
        return $this->metadata->getClusterName();
    }

    /**
     * Deprecated: ClusterName is a legacy field that was always cleared by the system and never used; it
     * will be removed completely in 1.25.
     *
     * The name in the go struct is changed to help clients detect accidental use.
     *
     * @return static
     */
    public function setClusterName(string $clusterName)
    {
        $this->metadata->setClusterName($clusterName);

        return $this;
    }

    /**
     * CreationTimestamp is a timestamp representing the server time when this object was created. It is
     * not guaranteed to be set in happens-before order across separate operations. Clients may not set
     * this value. It is represented in RFC3339 form and is in UTC.
     *
     * Populated by the system. Read-only. Null for lists. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public function getCreationTimestamp(): ?DateTimeInterface
    {
        return $this->metadata->getCreationTimestamp();
    }

    /**
     * Number of seconds allowed for this object to gracefully terminate before it will be removed from the
     * system. Only set when deletionTimestamp is also set. May only be shortened. Read-only.
     */
    public function getDeletionGracePeriodSeconds(): ?int
    {
        return $this->metadata->getDeletionGracePeriodSeconds();
    }

    /**
     * DeletionTimestamp is RFC 3339 date and time at which this resource will be deleted. This field is
     * set by the server when a graceful deletion is requested by the user, and is not directly settable by
     * a client. The resource is expected to be deleted (no longer visible from resource lists, and not
     * reachable by name) after the time in this field, once the finalizers list is empty. As long as the
     * finalizers list contains items, deletion is blocked. Once the deletionTimestamp is set, this value
     * may not be unset or be set further into the future, although it may be shortened or the resource may
     * be deleted prior to this time. For example, a user may request that a pod is deleted in 30 seconds.
     * The Kubelet will react by sending a graceful termination signal to the containers in the pod. After
     * that 30 seconds, the Kubelet will send a hard termination signal (SIGKILL) to the container and
     * after cleanup, remove the pod from the API. In the presence of network partitions, this object may
     * still exist after this timestamp, until an administrator or automated process can determine the
     * resource is fully terminated. If not set, graceful deletion of the object has not been requested.
     *
     * Populated by the system when a graceful deletion is requested. Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public function getDeletionTimestamp(): ?DateTimeInterface
    {
        return $this->metadata->getDeletionTimestamp();
    }

    /**
     * Must be empty before the object is deleted from the registry. Each entry is an identifier for the
     * responsible component that will remove the entry from the list. If the deletionTimestamp of the
     * object is non-nil, entries in this list can only be removed. Finalizers may be processed and removed
     * in any order.  Order is NOT enforced because it introduces significant risk of stuck finalizers.
     * finalizers is a shared field, any actor with permission can reorder it. If the finalizer list is
     * processed in order, then this can lead to a situation in which the component responsible for the
     * first finalizer in the list is waiting for a signal (field value, external system, or other)
     * produced by a component responsible for a finalizer later in the list, resulting in a deadlock.
     * Without enforced ordering finalizers are free to order amongst themselves and are not vulnerable to
     * ordering changes in the list.
     */
    public function getFinalizers(): ?array
    {
        return $this->metadata->getFinalizers();
    }

    /**
     * Must be empty before the object is deleted from the registry. Each entry is an identifier for the
     * responsible component that will remove the entry from the list. If the deletionTimestamp of the
     * object is non-nil, entries in this list can only be removed. Finalizers may be processed and removed
     * in any order.  Order is NOT enforced because it introduces significant risk of stuck finalizers.
     * finalizers is a shared field, any actor with permission can reorder it. If the finalizer list is
     * processed in order, then this can lead to a situation in which the component responsible for the
     * first finalizer in the list is waiting for a signal (field value, external system, or other)
     * produced by a component responsible for a finalizer later in the list, resulting in a deadlock.
     * Without enforced ordering finalizers are free to order amongst themselves and are not vulnerable to
     * ordering changes in the list.
     *
     * @return static
     */
    public function setFinalizers(array $finalizers)
    {
        $this->metadata->setFinalizers($finalizers);

        return $this;
    }

    /**
     * GenerateName is an optional prefix, used by the server, to generate a unique name ONLY IF the Name
     * field has not been provided. If this field is used, the name returned to the client will be
     * different than the name passed. This value will also be combined with a unique suffix. The provided
     * value has the same validation rules as the Name field, and may be truncated by the length of the
     * suffix required to make the value unique on the server.
     *
     * If this field is specified and the generated name exists, the server will return a 409.
     *
     * Applied only if Name is not specified. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#idempotency
     */
    public function getGenerateName(): ?string
    {
        return $this->metadata->getGenerateName();
    }

    /**
     * GenerateName is an optional prefix, used by the server, to generate a unique name ONLY IF the Name
     * field has not been provided. If this field is used, the name returned to the client will be
     * different than the name passed. This value will also be combined with a unique suffix. The provided
     * value has the same validation rules as the Name field, and may be truncated by the length of the
     * suffix required to make the value unique on the server.
     *
     * If this field is specified and the generated name exists, the server will return a 409.
     *
     * Applied only if Name is not specified. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#idempotency
     *
     * @return static
     */
    public function setGenerateName(string $generateName)
    {
        $this->metadata->setGenerateName($generateName);

        return $this;
    }

    /**
     * A sequence number representing a specific generation of the desired state. Populated by the system.
     * Read-only.
     */
    public function getGeneration(): ?int
    {
        return $this->metadata->getGeneration();
    }

    /**
     * Map of string keys and values that can be used to organize and categorize (scope and select)
     * objects. May match selectors of replication controllers and services. More info:
     * http://kubernetes.io/docs/user-guide/labels
     */
    public function getLabels(): ?array
    {
        return $this->metadata->getLabels();
    }

    /**
     * Map of string keys and values that can be used to organize and categorize (scope and select)
     * objects. May match selectors of replication controllers and services. More info:
     * http://kubernetes.io/docs/user-guide/labels
     *
     * @return static
     */
    public function setLabels(array $labels)
    {
        $this->metadata->setLabels($labels);

        return $this;
    }

    /**
     * ManagedFields maps workflow-id and version to the set of fields that are managed by that workflow.
     * This is mostly for internal housekeeping, and users typically shouldn't need to set or understand
     * this field. A workflow can be the user's name, a controller's name, or the name of a specific apply
     * path like "ci-cd". The set of fields is always in the version that the workflow used when modifying
     * the object.
     *
     * @return iterable|ManagedFieldsEntry[]
     */
    public function getManagedFields(): ?iterable
    {
        return $this->metadata->getManagedFields();
    }

    /**
     * ManagedFields maps workflow-id and version to the set of fields that are managed by that workflow.
     * This is mostly for internal housekeeping, and users typically shouldn't need to set or understand
     * this field. A workflow can be the user's name, a controller's name, or the name of a specific apply
     * path like "ci-cd". The set of fields is always in the version that the workflow used when modifying
     * the object.
     *
     * @return static
     */
    public function setManagedFields(iterable $managedFields)
    {
        $this->metadata->setManagedFields($managedFields);

        return $this;
    }

    /**
     * @return static
     */
    public function addManagedFields(ManagedFieldsEntry $managedField)
    {
        $this->metadata->addManagedFields($managedField);

        return $this;
    }

    /**
     * Name must be unique within a namespace. Is required when creating resources, although some resources
     * may allow a client to request the generation of an appropriate name automatically. Name is primarily
     * intended for creation idempotence and configuration definition. Cannot be updated. More info:
     * http://kubernetes.io/docs/user-guide/identifiers#names
     */
    public function getName(): ?string
    {
        return $this->metadata->getName();
    }

    /**
     * Name must be unique within a namespace. Is required when creating resources, although some resources
     * may allow a client to request the generation of an appropriate name automatically. Name is primarily
     * intended for creation idempotence and configuration definition. Cannot be updated. More info:
     * http://kubernetes.io/docs/user-guide/identifiers#names
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->metadata->setName($name);

        return $this;
    }

    /**
     * Namespace defines the space within which each name must be unique. An empty namespace is equivalent
     * to the "default" namespace, but "default" is the canonical representation. Not all objects are
     * required to be scoped to a namespace - the value of this field for those objects will be empty.
     *
     * Must be a DNS_LABEL. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/namespaces
     */
    public function getNamespace(): ?string
    {
        return $this->metadata->getNamespace();
    }

    /**
     * Namespace defines the space within which each name must be unique. An empty namespace is equivalent
     * to the "default" namespace, but "default" is the canonical representation. Not all objects are
     * required to be scoped to a namespace - the value of this field for those objects will be empty.
     *
     * Must be a DNS_LABEL. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/namespaces
     *
     * @return static
     */
    public function setNamespace(string $namespace)
    {
        $this->metadata->setNamespace($namespace);

        return $this;
    }

    /**
     * List of objects depended by this object. If ALL objects in the list have been deleted, this object
     * will be garbage collected. If this object is managed by a controller, then an entry in this list
     * will point to this controller, with the controller field set to true. There cannot be more than one
     * managing controller.
     *
     * @return iterable|OwnerReference[]
     */
    public function getOwnerReferences(): ?iterable
    {
        return $this->metadata->getOwnerReferences();
    }

    /**
     * List of objects depended by this object. If ALL objects in the list have been deleted, this object
     * will be garbage collected. If this object is managed by a controller, then an entry in this list
     * will point to this controller, with the controller field set to true. There cannot be more than one
     * managing controller.
     *
     * @return static
     */
    public function setOwnerReferences(iterable $ownerReferences)
    {
        $this->metadata->setOwnerReferences($ownerReferences);

        return $this;
    }

    /**
     * @return static
     */
    public function addOwnerReferences(OwnerReference $ownerReference)
    {
        $this->metadata->addOwnerReferences($ownerReference);

        return $this;
    }

    /**
     * An opaque value that represents the internal version of this object that can be used by clients to
     * determine when objects have changed. May be used for optimistic concurrency, change detection, and
     * the watch operation on a resource or set of resources. Clients must treat these values as opaque and
     * passed unmodified back to the server. They may only be valid for a particular resource or set of
     * resources.
     *
     * Populated by the system. Read-only. Value must be treated as opaque by clients and . More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#concurrency-control-and-consistency
     */
    public function getResourceVersion(): ?string
    {
        return $this->metadata->getResourceVersion();
    }

    /**
     * Deprecated: selfLink is a legacy read-only field that is no longer populated by the system.
     */
    public function getSelfLink(): ?string
    {
        return $this->metadata->getSelfLink();
    }

    /**
     * Deprecated: selfLink is a legacy read-only field that is no longer populated by the system.
     *
     * @return static
     */
    public function setSelfLink(string $selfLink)
    {
        $this->metadata->setSelfLink($selfLink);

        return $this;
    }

    /**
     * uid contains the uid of the user that created the CertificateSigningRequest. Populated by the API
     * server on creation and immutable.
     */
    public function getUid(): ?string
    {
        return $this->spec->getUid();
    }

    /**
     * expirationSeconds is the requested duration of validity of the issued certificate. The certificate
     * signer may issue a certificate with a different validity duration so a client must check the delta
     * between the notBefore and and notAfter fields in the issued certificate to determine the actual
     * duration.
     *
     * The v1.22+ in-tree implementations of the well-known Kubernetes signers will honor this field as
     * long as the requested duration is not greater than the maximum duration they will honor per the
     * --cluster-signing-duration CLI flag to the Kubernetes controller manager.
     *
     * Certificate signers may not honor this field for various reasons:
     *
     *   1. Old signer that is unaware of the field (such as the in-tree
     *      implementations prior to v1.22)
     *   2. Signer whose configured maximum is shorter than the requested duration
     *   3. Signer whose configured minimum is longer than the requested duration
     *
     * The minimum valid value for expirationSeconds is 600, i.e. 10 minutes.
     */
    public function getExpirationSeconds(): ?int
    {
        return $this->spec->getExpirationSeconds();
    }

    /**
     * expirationSeconds is the requested duration of validity of the issued certificate. The certificate
     * signer may issue a certificate with a different validity duration so a client must check the delta
     * between the notBefore and and notAfter fields in the issued certificate to determine the actual
     * duration.
     *
     * The v1.22+ in-tree implementations of the well-known Kubernetes signers will honor this field as
     * long as the requested duration is not greater than the maximum duration they will honor per the
     * --cluster-signing-duration CLI flag to the Kubernetes controller manager.
     *
     * Certificate signers may not honor this field for various reasons:
     *
     *   1. Old signer that is unaware of the field (such as the in-tree
     *      implementations prior to v1.22)
     *   2. Signer whose configured maximum is shorter than the requested duration
     *   3. Signer whose configured minimum is longer than the requested duration
     *
     * The minimum valid value for expirationSeconds is 600, i.e. 10 minutes.
     *
     * @return static
     */
    public function setExpirationSeconds(int $expirationSeconds)
    {
        $this->spec->setExpirationSeconds($expirationSeconds);

        return $this;
    }

    /**
     * extra contains extra attributes of the user that created the CertificateSigningRequest. Populated by
     * the API server on creation and immutable.
     */
    public function getExtra(): ?array
    {
        return $this->spec->getExtra();
    }

    /**
     * extra contains extra attributes of the user that created the CertificateSigningRequest. Populated by
     * the API server on creation and immutable.
     *
     * @return static
     */
    public function setExtra(array $extra)
    {
        $this->spec->setExtra($extra);

        return $this;
    }

    /**
     * groups contains group membership of the user that created the CertificateSigningRequest. Populated
     * by the API server on creation and immutable.
     */
    public function getGroups(): ?array
    {
        return $this->spec->getGroups();
    }

    /**
     * groups contains group membership of the user that created the CertificateSigningRequest. Populated
     * by the API server on creation and immutable.
     *
     * @return static
     */
    public function setGroups(array $groups)
    {
        $this->spec->setGroups($groups);

        return $this;
    }

    /**
     * request contains an x509 certificate signing request encoded in a "CERTIFICATE REQUEST" PEM block.
     * When serialized as JSON or YAML, the data is additionally base64-encoded.
     */
    public function getRequest(): string
    {
        return $this->spec->getRequest();
    }

    /**
     * request contains an x509 certificate signing request encoded in a "CERTIFICATE REQUEST" PEM block.
     * When serialized as JSON or YAML, the data is additionally base64-encoded.
     *
     * @return static
     */
    public function setRequest(string $request)
    {
        $this->spec->setRequest($request);

        return $this;
    }

    /**
     * signerName indicates the requested signer, and is a qualified name.
     *
     * List/watch requests for CertificateSigningRequests can filter on this field using a
     * "spec.signerName=NAME" fieldSelector.
     *
     * Well-known Kubernetes signers are:
     *  1. "kubernetes.io/kube-apiserver-client": issues client certificates that can be used to
     * authenticate to kube-apiserver.
     *   Requests for this signer are never auto-approved by kube-controller-manager, can be issued by the
     * "csrsigning" controller in kube-controller-manager.
     *  2. "kubernetes.io/kube-apiserver-client-kubelet": issues client certificates that kubelets use to
     * authenticate to kube-apiserver.
     *   Requests for this signer can be auto-approved by the "csrapproving" controller in
     * kube-controller-manager, and can be issued by the "csrsigning" controller in
     * kube-controller-manager.
     *  3. "kubernetes.io/kubelet-serving" issues serving certificates that kubelets use to serve TLS
     * endpoints, which kube-apiserver can connect to securely.
     *   Requests for this signer are never auto-approved by kube-controller-manager, and can be issued by
     * the "csrsigning" controller in kube-controller-manager.
     *
     * More details are available at
     * https://k8s.io/docs/reference/access-authn-authz/certificate-signing-requests/#kubernetes-signers
     *
     * Custom signerNames can also be specified. The signer defines:
     *  1. Trust distribution: how trust (CA bundles) are distributed.
     *  2. Permitted subjects: and behavior when a disallowed subject is requested.
     *  3. Required, permitted, or forbidden x509 extensions in the request (including whether
     * subjectAltNames are allowed, which types, restrictions on allowed values) and behavior when a
     * disallowed extension is requested.
     *  4. Required, permitted, or forbidden key usages / extended key usages.
     *  5. Expiration/certificate lifetime: whether it is fixed by the signer, configurable by the admin.
     *  6. Whether or not requests for CA certificates are allowed.
     */
    public function getSignerName(): string
    {
        return $this->spec->getSignerName();
    }

    /**
     * signerName indicates the requested signer, and is a qualified name.
     *
     * List/watch requests for CertificateSigningRequests can filter on this field using a
     * "spec.signerName=NAME" fieldSelector.
     *
     * Well-known Kubernetes signers are:
     *  1. "kubernetes.io/kube-apiserver-client": issues client certificates that can be used to
     * authenticate to kube-apiserver.
     *   Requests for this signer are never auto-approved by kube-controller-manager, can be issued by the
     * "csrsigning" controller in kube-controller-manager.
     *  2. "kubernetes.io/kube-apiserver-client-kubelet": issues client certificates that kubelets use to
     * authenticate to kube-apiserver.
     *   Requests for this signer can be auto-approved by the "csrapproving" controller in
     * kube-controller-manager, and can be issued by the "csrsigning" controller in
     * kube-controller-manager.
     *  3. "kubernetes.io/kubelet-serving" issues serving certificates that kubelets use to serve TLS
     * endpoints, which kube-apiserver can connect to securely.
     *   Requests for this signer are never auto-approved by kube-controller-manager, and can be issued by
     * the "csrsigning" controller in kube-controller-manager.
     *
     * More details are available at
     * https://k8s.io/docs/reference/access-authn-authz/certificate-signing-requests/#kubernetes-signers
     *
     * Custom signerNames can also be specified. The signer defines:
     *  1. Trust distribution: how trust (CA bundles) are distributed.
     *  2. Permitted subjects: and behavior when a disallowed subject is requested.
     *  3. Required, permitted, or forbidden x509 extensions in the request (including whether
     * subjectAltNames are allowed, which types, restrictions on allowed values) and behavior when a
     * disallowed extension is requested.
     *  4. Required, permitted, or forbidden key usages / extended key usages.
     *  5. Expiration/certificate lifetime: whether it is fixed by the signer, configurable by the admin.
     *  6. Whether or not requests for CA certificates are allowed.
     *
     * @return static
     */
    public function setSignerName(string $signerName)
    {
        $this->spec->setSignerName($signerName);

        return $this;
    }

    /**
     * uid contains the uid of the user that created the CertificateSigningRequest. Populated by the API
     * server on creation and immutable.
     *
     * @return static
     */
    public function setUid(string $uid)
    {
        $this->spec->setUid($uid);

        return $this;
    }

    /**
     * usages specifies a set of key usages requested in the issued certificate.
     *
     * Requests for TLS client certificates typically request: "digital signature", "key encipherment",
     * "client auth".
     *
     * Requests for TLS serving certificates typically request: "key encipherment", "digital signature",
     * "server auth".
     *
     * Valid values are:
     *  "signing", "digital signature", "content commitment",
     *  "key encipherment", "key agreement", "data encipherment",
     *  "cert sign", "crl sign", "encipher only", "decipher only", "any",
     *  "server auth", "client auth",
     *  "code signing", "email protection", "s/mime",
     *  "ipsec end system", "ipsec tunnel", "ipsec user",
     *  "timestamping", "ocsp signing", "microsoft sgc", "netscape sgc"
     */
    public function getUsages(): ?array
    {
        return $this->spec->getUsages();
    }

    /**
     * usages specifies a set of key usages requested in the issued certificate.
     *
     * Requests for TLS client certificates typically request: "digital signature", "key encipherment",
     * "client auth".
     *
     * Requests for TLS serving certificates typically request: "key encipherment", "digital signature",
     * "server auth".
     *
     * Valid values are:
     *  "signing", "digital signature", "content commitment",
     *  "key encipherment", "key agreement", "data encipherment",
     *  "cert sign", "crl sign", "encipher only", "decipher only", "any",
     *  "server auth", "client auth",
     *  "code signing", "email protection", "s/mime",
     *  "ipsec end system", "ipsec tunnel", "ipsec user",
     *  "timestamping", "ocsp signing", "microsoft sgc", "netscape sgc"
     *
     * @return static
     */
    public function setUsages(array $usages)
    {
        $this->spec->setUsages($usages);

        return $this;
    }

    /**
     * username contains the name of the user that created the CertificateSigningRequest. Populated by the
     * API server on creation and immutable.
     */
    public function getUsername(): ?string
    {
        return $this->spec->getUsername();
    }

    /**
     * username contains the name of the user that created the CertificateSigningRequest. Populated by the
     * API server on creation and immutable.
     *
     * @return static
     */
    public function setUsername(string $username)
    {
        $this->spec->setUsername($username);

        return $this;
    }

    /**
     * certificate is populated with an issued certificate by the signer after an Approved condition is
     * present. This field is set via the /status subresource. Once populated, this field is immutable.
     *
     * If the certificate signing request is denied, a condition of type "Denied" is added and this field
     * remains empty. If the signer cannot issue the certificate, a condition of type "Failed" is added and
     * this field remains empty.
     *
     * Validation requirements:
     *  1. certificate must contain one or more PEM blocks.
     *  2. All PEM blocks must have the "CERTIFICATE" label, contain no headers, and the encoded data
     *   must be a BER-encoded ASN.1 Certificate structure as described in section 4 of RFC5280.
     *  3. Non-PEM content may appear before or after the "CERTIFICATE" PEM blocks and is unvalidated,
     *   to allow for explanatory text as described in section 5.2 of RFC7468.
     *
     * If more than one PEM block is present, and the definition of the requested spec.signerName does not
     * indicate otherwise, the first block is the issued certificate, and subsequent blocks should be
     * treated as intermediate certificates and presented in TLS handshakes.
     *
     * The certificate is encoded in PEM format.
     *
     * When serialized as JSON or YAML, the data is additionally base64-encoded, so it consists of:
     *
     *     base64(
     *     -----BEGIN CERTIFICATE-----
     *     ...
     *     -----END CERTIFICATE-----
     *     )
     */
    public function getCertificate(): ?string
    {
        return $this->status->getCertificate();
    }

    /**
     * conditions applied to the request. Known conditions are "Approved", "Denied", and "Failed".
     *
     * @return iterable|CertificateSigningRequestCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->status->getConditions();
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public function getApiVersion(): string
    {
        return $this->apiVersion;
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @return static
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    public function getMetadata(): ObjectMeta
    {
        return $this->metadata;
    }

    /**
     * @return static
     */
    public function setMetadata(ObjectMeta $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * spec contains the certificate request, and is immutable after creation. Only the request,
     * signerName, expirationSeconds, and usages fields can be set on creation. Other fields are derived by
     * Kubernetes and cannot be modified by users.
     */
    public function getSpec(): CertificateSigningRequestSpec
    {
        return $this->spec;
    }

    /**
     * spec contains the certificate request, and is immutable after creation. Only the request,
     * signerName, expirationSeconds, and usages fields can be set on creation. Other fields are derived by
     * Kubernetes and cannot be modified by users.
     *
     * @return static
     */
    public function setSpec(CertificateSigningRequestSpec $spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * status contains information about whether the request is approved or denied, and the certificate
     * issued by the signer, or the failure condition indicating signer failure.
     */
    public function getStatus(): ?CertificateSigningRequestStatus
    {
        return $this->status;
    }

    /**
     * status contains information about whether the request is approved or denied, and the certificate
     * issued by the signer, or the failure condition indicating signer failure.
     *
     * @return static
     */
    public function setStatus(CertificateSigningRequestStatus $status)
    {
        $this->status = $status;

        return $this;
    }
}
