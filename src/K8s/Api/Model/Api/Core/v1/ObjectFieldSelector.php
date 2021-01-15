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
 * ObjectFieldSelector selects an APIVersioned field of an object.
 */
class ObjectFieldSelector
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string|null
     */
    protected $apiVersion = '';

    /**
     * @Kubernetes\Attribute("fieldPath",isRequired=true)
     * @var string
     */
    protected $fieldPath;

    /**
     * @param string $fieldPath
     */
    public function __construct(string $fieldPath)
    {
        $this->fieldPath = $fieldPath;
    }

    /**
     * Version of the schema the FieldPath is written in terms of, defaults to "v1".
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * Version of the schema the FieldPath is written in terms of, defaults to "v1".
     *
     * @return static
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * Path of the field to select in the specified API version.
     */
    public function getFieldPath(): string
    {
        return $this->fieldPath;
    }

    /**
     * Path of the field to select in the specified API version.
     *
     * @return static
     */
    public function setFieldPath(string $fieldPath)
    {
        $this->fieldPath = $fieldPath;

        return $this;
    }
}