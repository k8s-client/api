<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.25.4
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * CustomResourceColumnDefinition specifies a column for server side printing.
 */
class CustomResourceColumnDefinition
{
    /**
     * @Kubernetes\Attribute("description")
     * @var string|null
     */
    protected $description = null;

    /**
     * @Kubernetes\Attribute("format")
     * @var string|null
     */
    protected $format = null;

    /**
     * @Kubernetes\Attribute("jsonPath",isRequired=true)
     * @var string
     */
    protected $jsonPath;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("priority")
     * @var int|null
     */
    protected $priority = null;

    /**
     * @Kubernetes\Attribute("type",isRequired=true)
     * @var string
     */
    protected $type;

    /**
     * @param string $jsonPath
     * @param string $name
     * @param string $type
     */
    public function __construct(string $jsonPath, string $name, string $type)
    {
        $this->jsonPath = $jsonPath;
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * description is a human readable description of this column.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * description is a human readable description of this column.
     *
     * @return static
     */
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * format is an optional OpenAPI type definition for this column. The 'name' format is applied to the
     * primary identifier column to assist in clients identifying column is the resource name. See
     * https://github.com/OAI/OpenAPI-Specification/blob/master/versions/2.0.md#data-types for details.
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * format is an optional OpenAPI type definition for this column. The 'name' format is applied to the
     * primary identifier column to assist in clients identifying column is the resource name. See
     * https://github.com/OAI/OpenAPI-Specification/blob/master/versions/2.0.md#data-types for details.
     *
     * @return static
     */
    public function setFormat(string $format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * jsonPath is a simple JSON path (i.e. with array notation) which is evaluated against each custom
     * resource to produce the value for this column.
     */
    public function getJsonPath(): string
    {
        return $this->jsonPath;
    }

    /**
     * jsonPath is a simple JSON path (i.e. with array notation) which is evaluated against each custom
     * resource to produce the value for this column.
     *
     * @return static
     */
    public function setJsonPath(string $jsonPath)
    {
        $this->jsonPath = $jsonPath;

        return $this;
    }

    /**
     * name is a human readable name for the column.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name is a human readable name for the column.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * priority is an integer defining the relative importance of this column compared to others. Lower
     * numbers are considered higher priority. Columns that may be omitted in limited space scenarios
     * should be given a priority greater than 0.
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }

    /**
     * priority is an integer defining the relative importance of this column compared to others. Lower
     * numbers are considered higher priority. Columns that may be omitted in limited space scenarios
     * should be given a priority greater than 0.
     *
     * @return static
     */
    public function setPriority(int $priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * type is an OpenAPI type definition for this column. See
     * https://github.com/OAI/OpenAPI-Specification/blob/master/versions/2.0.md#data-types for details.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * type is an OpenAPI type definition for this column. See
     * https://github.com/OAI/OpenAPI-Specification/blob/master/versions/2.0.md#data-types for details.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
