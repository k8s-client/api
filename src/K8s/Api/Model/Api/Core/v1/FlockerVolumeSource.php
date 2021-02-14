<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.14.10
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
 * Represents a Flocker volume mounted by the Flocker agent. One and only one of datasetName and
 * datasetUUID should be set. Flocker volumes do not support ownership management or SELinux
 * relabeling.
 */
class FlockerVolumeSource
{
    /**
     * @Kubernetes\Attribute("datasetName")
     * @var string|null
     */
    protected $datasetName = null;

    /**
     * @Kubernetes\Attribute("datasetUUID")
     * @var string|null
     */
    protected $datasetUUID = null;

    /**
     * @param string|null $datasetName
     * @param string|null $datasetUUID
     */
    public function __construct(?string $datasetName = null, ?string $datasetUUID = null)
    {
        $this->datasetName = $datasetName;
        $this->datasetUUID = $datasetUUID;
    }

    /**
     * Name of the dataset stored as metadata -> name on the dataset for Flocker should be considered as
     * deprecated
     */
    public function getDatasetName(): ?string
    {
        return $this->datasetName;
    }

    /**
     * Name of the dataset stored as metadata -> name on the dataset for Flocker should be considered as
     * deprecated
     *
     * @return static
     */
    public function setDatasetName(string $datasetName)
    {
        $this->datasetName = $datasetName;

        return $this;
    }

    /**
     * UUID of the dataset. This is unique identifier of a Flocker dataset
     */
    public function getDatasetUUID(): ?string
    {
        return $this->datasetUUID;
    }

    /**
     * UUID of the dataset. This is unique identifier of a Flocker dataset
     *
     * @return static
     */
    public function setDatasetUUID(string $datasetUUID)
    {
        $this->datasetUUID = $datasetUUID;

        return $this;
    }
}
