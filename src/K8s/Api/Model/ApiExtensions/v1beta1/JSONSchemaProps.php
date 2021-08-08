<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.19.13
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * JSONSchemaProps is a JSON-Schema following Specification Draft 4 (http://json-schema.org/).
 */
class JSONSchemaProps
{
    /**
     * @Kubernetes\Attribute("$ref")
     * @var string|null
     */
    protected $ref = null;

    /**
     * @Kubernetes\Attribute("$schema")
     * @var string|null
     */
    protected $schema = null;

    /**
     * @Kubernetes\Attribute("additionalItems")
     * @var string|null
     */
    protected $additionalItems = null;

    /**
     * @Kubernetes\Attribute("additionalProperties")
     * @var string|null
     */
    protected $additionalProperties = null;

    /**
     * @Kubernetes\Attribute("allOf",type="collection",model=JSONSchemaProps::class)
     * @var iterable|JSONSchemaProps[]|null
     */
    protected $allOf = null;

    /**
     * @Kubernetes\Attribute("anyOf",type="collection",model=JSONSchemaProps::class)
     * @var iterable|JSONSchemaProps[]|null
     */
    protected $anyOf = null;

    /**
     * @Kubernetes\Attribute("default")
     * @var mixed|null
     */
    protected $default = null;

    /**
     * @Kubernetes\Attribute("definitions")
     * @var object[]|null
     */
    protected $definitions = null;

    /**
     * @Kubernetes\Attribute("dependencies")
     * @var object[]|null
     */
    protected $dependencies = null;

    /**
     * @Kubernetes\Attribute("description")
     * @var string|null
     */
    protected $description = null;

    /**
     * @Kubernetes\Attribute("enum")
     * @var mixed[]|null
     */
    protected $enum = null;

    /**
     * @Kubernetes\Attribute("example")
     * @var mixed|null
     */
    protected $example = null;

    /**
     * @Kubernetes\Attribute("exclusiveMaximum")
     * @var bool|null
     */
    protected $exclusiveMaximum = null;

    /**
     * @Kubernetes\Attribute("exclusiveMinimum")
     * @var bool|null
     */
    protected $exclusiveMinimum = null;

    /**
     * @Kubernetes\Attribute("externalDocs",type="model",model=ExternalDocumentation::class)
     * @var ExternalDocumentation|null
     */
    protected $externalDocs = null;

    /**
     * @Kubernetes\Attribute("format")
     * @var string|null
     */
    protected $format = null;

    /**
     * @Kubernetes\Attribute("id")
     * @var string|null
     */
    protected $id = null;

    /**
     * @Kubernetes\Attribute("items")
     * @var array|null
     */
    protected $items = null;

    /**
     * @Kubernetes\Attribute("maxItems")
     * @var int|null
     */
    protected $maxItems = null;

    /**
     * @Kubernetes\Attribute("maxLength")
     * @var int|null
     */
    protected $maxLength = null;

    /**
     * @Kubernetes\Attribute("maxProperties")
     * @var int|null
     */
    protected $maxProperties = null;

    /**
     * @Kubernetes\Attribute("maximum")
     * @var mixed|null
     */
    protected $maximum = null;

    /**
     * @Kubernetes\Attribute("minItems")
     * @var int|null
     */
    protected $minItems = null;

    /**
     * @Kubernetes\Attribute("minLength")
     * @var int|null
     */
    protected $minLength = null;

    /**
     * @Kubernetes\Attribute("minProperties")
     * @var int|null
     */
    protected $minProperties = null;

    /**
     * @Kubernetes\Attribute("minimum")
     * @var mixed|null
     */
    protected $minimum = null;

    /**
     * @Kubernetes\Attribute("multipleOf")
     * @var mixed|null
     */
    protected $multipleOf = null;

    /**
     * @Kubernetes\Attribute("not",type="model",model=JSONSchemaProps::class)
     * @var JSONSchemaProps|null
     */
    protected $not = null;

    /**
     * @Kubernetes\Attribute("nullable")
     * @var bool|null
     */
    protected $nullable = null;

    /**
     * @Kubernetes\Attribute("oneOf",type="collection",model=JSONSchemaProps::class)
     * @var iterable|JSONSchemaProps[]|null
     */
    protected $oneOf = null;

    /**
     * @Kubernetes\Attribute("pattern")
     * @var string|null
     */
    protected $pattern = null;

    /**
     * @Kubernetes\Attribute("patternProperties")
     * @var object[]|null
     */
    protected $patternProperties = null;

    /**
     * @Kubernetes\Attribute("properties")
     * @var object[]|null
     */
    protected $properties = null;

    /**
     * @Kubernetes\Attribute("required")
     * @var string[]|null
     */
    protected $required = null;

    /**
     * @Kubernetes\Attribute("title")
     * @var string|null
     */
    protected $title = null;

    /**
     * @Kubernetes\Attribute("type")
     * @var string|null
     */
    protected $type = null;

    /**
     * @Kubernetes\Attribute("uniqueItems")
     * @var bool|null
     */
    protected $uniqueItems = null;

    /**
     * @Kubernetes\Attribute("x-kubernetes-embedded-resource")
     * @var bool|null
     */
    protected $xKubernetesEmbeddedResource = null;

    /**
     * @Kubernetes\Attribute("x-kubernetes-int-or-string")
     * @var bool|null
     */
    protected $xKubernetesIntOrString = null;

    /**
     * @Kubernetes\Attribute("x-kubernetes-list-map-keys")
     * @var string[]|null
     */
    protected $xKubernetesListMapKeys = null;

    /**
     * @Kubernetes\Attribute("x-kubernetes-list-type")
     * @var string|null
     */
    protected $xKubernetesListType = null;

    /**
     * @Kubernetes\Attribute("x-kubernetes-map-type")
     * @var string|null
     */
    protected $xKubernetesMapType = null;

    /**
     * @Kubernetes\Attribute("x-kubernetes-preserve-unknown-fields")
     * @var bool|null
     */
    protected $xKubernetesPreserveUnknownFields = null;

    public function getRef(): ?string
    {
        return $this->ref;
    }

    /**
     * @return static
     */
    public function setRef(string $ref)
    {
        $this->ref = $ref;

        return $this;
    }

    public function getSchema(): ?string
    {
        return $this->schema;
    }

    /**
     * @return static
     */
    public function setSchema(string $schema)
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalItems()
    {
        return $this->additionalItems;
    }

    /**
     * @param string $additionalItems
     * @return static
     */
    public function setAdditionalItems($additionalItems)
    {
        $this->additionalItems = $additionalItems;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }

    /**
     * @param string $additionalProperties
     * @return static
     */
    public function setAdditionalProperties($additionalProperties)
    {
        $this->additionalProperties = $additionalProperties;

        return $this;
    }

    /**
     * @return iterable|JSONSchemaProps[]
     */
    public function getAllOf(): ?iterable
    {
        return $this->allOf;
    }

    /**
     * @return static
     */
    public function setAllOf(iterable $allOf)
    {
        $this->allOf = $allOf;

        return $this;
    }

    /**
     * @return static
     */
    public function addAllOf(JSONSchemaProps $allOf)
    {
        if (!$this->allOf) {
            $this->allOf = new Collection();
        }
        $this->allOf[] = $allOf;

        return $this;
    }

    /**
     * @return iterable|JSONSchemaProps[]
     */
    public function getAnyOf(): ?iterable
    {
        return $this->anyOf;
    }

    /**
     * @return static
     */
    public function setAnyOf(iterable $anyOf)
    {
        $this->anyOf = $anyOf;

        return $this;
    }

    /**
     * @return static
     */
    public function addAnyOf(JSONSchemaProps $anyOf)
    {
        if (!$this->anyOf) {
            $this->anyOf = new Collection();
        }
        $this->anyOf[] = $anyOf;

        return $this;
    }

    /**
     * default is a default value for undefined object fields. Defaulting is a beta feature under the
     * CustomResourceDefaulting feature gate. CustomResourceDefinitions with defaults must be created using
     * the v1 (or newer) CustomResourceDefinition API.
     *
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * default is a default value for undefined object fields. Defaulting is a beta feature under the
     * CustomResourceDefaulting feature gate. CustomResourceDefinitions with defaults must be created using
     * the v1 (or newer) CustomResourceDefinition API.
     *
     * @param mixed $default
     * @return static
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    public function getDefinitions(): ?array
    {
        return $this->definitions;
    }

    /**
     * @return static
     */
    public function setDefinitions(array $definitions)
    {
        $this->definitions = $definitions;

        return $this;
    }

    public function getDependencies(): ?array
    {
        return $this->dependencies;
    }

    /**
     * @return static
     */
    public function setDependencies(array $dependencies)
    {
        $this->dependencies = $dependencies;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return static
     */
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getEnum()
    {
        return $this->enum;
    }

    /**
     * @param mixed[] $enum
     * @return static
     */
    public function setEnum($enum)
    {
        $this->enum = $enum;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * @param mixed $example
     * @return static
     */
    public function setExample($example)
    {
        $this->example = $example;

        return $this;
    }

    public function isExclusiveMaximum(): ?bool
    {
        return $this->exclusiveMaximum;
    }

    /**
     * @return static
     */
    public function setIsExclusiveMaximum(bool $exclusiveMaximum)
    {
        $this->exclusiveMaximum = $exclusiveMaximum;

        return $this;
    }

    public function isExclusiveMinimum(): ?bool
    {
        return $this->exclusiveMinimum;
    }

    /**
     * @return static
     */
    public function setIsExclusiveMinimum(bool $exclusiveMinimum)
    {
        $this->exclusiveMinimum = $exclusiveMinimum;

        return $this;
    }

    public function getExternalDocs(): ?ExternalDocumentation
    {
        return $this->externalDocs;
    }

    /**
     * @return static
     */
    public function setExternalDocs(ExternalDocumentation $externalDocs)
    {
        $this->externalDocs = $externalDocs;

        return $this;
    }

    /**
     * format is an OpenAPI v3 format string. Unknown formats are ignored. The following formats are
     * validated:
     *
     * - bsonobjectid: a bson object ID, i.e. a 24 characters hex string - uri: an URI as parsed by Golang
     * net/url.ParseRequestURI - email: an email address as parsed by Golang net/mail.ParseAddress -
     * hostname: a valid representation for an Internet host name, as defined by RFC 1034, section 3.1
     * [RFC1034]. - ipv4: an IPv4 IP as parsed by Golang net.ParseIP - ipv6: an IPv6 IP as parsed by Golang
     * net.ParseIP - cidr: a CIDR as parsed by Golang net.ParseCIDR - mac: a MAC address as parsed by
     * Golang net.ParseMAC - uuid: an UUID that allows uppercase defined by the regex
     * (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?[0-9a-f]{4}-?[0-9a-f]{4}-?[0-9a-f]{12}$ - uuid3: an UUID3 that allows
     * uppercase defined by the regex
     * (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?3[0-9a-f]{3}-?[0-9a-f]{4}-?[0-9a-f]{12}$ - uuid4: an UUID4 that
     * allows uppercase defined by the regex
     * (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?4[0-9a-f]{3}-?[89ab][0-9a-f]{3}-?[0-9a-f]{12}$ - uuid5: an UUID5 that
     * allows uppercase defined by the regex
     * (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?5[0-9a-f]{3}-?[89ab][0-9a-f]{3}-?[0-9a-f]{12}$ - isbn: an ISBN10 or
     * ISBN13 number string like "0321751043" or "978-0321751041" - isbn10: an ISBN10 number string like
     * "0321751043" - isbn13: an ISBN13 number string like "978-0321751041" - creditcard: a credit card
     * number defined by the regex
     * ^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$
     * with any non digit characters mixed in - ssn: a U.S. social security number following the regex
     * ^\d{3}[- ]?\d{2}[- ]?\d{4}$ - hexcolor: an hexadecimal color code like "#FFFFFF: following the regex
     * ^#?([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$ - rgbcolor: an RGB color code like rgb like "rgb(255,255,2559" -
     * byte: base64 encoded binary data - password: any kind of string - date: a date string like
     * "2006-01-02" as defined by full-date in RFC3339 - duration: a duration string like "22 ns" as parsed
     * by Golang time.ParseDuration or compatible with Scala duration format - datetime: a date time string
     * like "2014-12-15T19:30:20.000Z" as defined by date-time in RFC3339.
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * format is an OpenAPI v3 format string. Unknown formats are ignored. The following formats are
     * validated:
     *
     * - bsonobjectid: a bson object ID, i.e. a 24 characters hex string - uri: an URI as parsed by Golang
     * net/url.ParseRequestURI - email: an email address as parsed by Golang net/mail.ParseAddress -
     * hostname: a valid representation for an Internet host name, as defined by RFC 1034, section 3.1
     * [RFC1034]. - ipv4: an IPv4 IP as parsed by Golang net.ParseIP - ipv6: an IPv6 IP as parsed by Golang
     * net.ParseIP - cidr: a CIDR as parsed by Golang net.ParseCIDR - mac: a MAC address as parsed by
     * Golang net.ParseMAC - uuid: an UUID that allows uppercase defined by the regex
     * (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?[0-9a-f]{4}-?[0-9a-f]{4}-?[0-9a-f]{12}$ - uuid3: an UUID3 that allows
     * uppercase defined by the regex
     * (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?3[0-9a-f]{3}-?[0-9a-f]{4}-?[0-9a-f]{12}$ - uuid4: an UUID4 that
     * allows uppercase defined by the regex
     * (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?4[0-9a-f]{3}-?[89ab][0-9a-f]{3}-?[0-9a-f]{12}$ - uuid5: an UUID5 that
     * allows uppercase defined by the regex
     * (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?5[0-9a-f]{3}-?[89ab][0-9a-f]{3}-?[0-9a-f]{12}$ - isbn: an ISBN10 or
     * ISBN13 number string like "0321751043" or "978-0321751041" - isbn10: an ISBN10 number string like
     * "0321751043" - isbn13: an ISBN13 number string like "978-0321751041" - creditcard: a credit card
     * number defined by the regex
     * ^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$
     * with any non digit characters mixed in - ssn: a U.S. social security number following the regex
     * ^\d{3}[- ]?\d{2}[- ]?\d{4}$ - hexcolor: an hexadecimal color code like "#FFFFFF: following the regex
     * ^#?([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$ - rgbcolor: an RGB color code like rgb like "rgb(255,255,2559" -
     * byte: base64 encoded binary data - password: any kind of string - date: a date string like
     * "2006-01-02" as defined by full-date in RFC3339 - duration: a duration string like "22 ns" as parsed
     * by Golang time.ParseDuration or compatible with Scala duration format - datetime: a date time string
     * like "2014-12-15T19:30:20.000Z" as defined by date-time in RFC3339.
     *
     * @return static
     */
    public function setFormat(string $format)
    {
        $this->format = $format;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return static
     */
    public function setId(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return static
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    public function getMaxItems(): ?int
    {
        return $this->maxItems;
    }

    /**
     * @return static
     */
    public function setMaxItems(int $maxItems)
    {
        $this->maxItems = $maxItems;

        return $this;
    }

    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }

    /**
     * @return static
     */
    public function setMaxLength(int $maxLength)
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    public function getMaxProperties(): ?int
    {
        return $this->maxProperties;
    }

    /**
     * @return static
     */
    public function setMaxProperties(int $maxProperties)
    {
        $this->maxProperties = $maxProperties;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * @param mixed $maximum
     * @return static
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;

        return $this;
    }

    public function getMinItems(): ?int
    {
        return $this->minItems;
    }

    /**
     * @return static
     */
    public function setMinItems(int $minItems)
    {
        $this->minItems = $minItems;

        return $this;
    }

    public function getMinLength(): ?int
    {
        return $this->minLength;
    }

    /**
     * @return static
     */
    public function setMinLength(int $minLength)
    {
        $this->minLength = $minLength;

        return $this;
    }

    public function getMinProperties(): ?int
    {
        return $this->minProperties;
    }

    /**
     * @return static
     */
    public function setMinProperties(int $minProperties)
    {
        $this->minProperties = $minProperties;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * @param mixed $minimum
     * @return static
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMultipleOf()
    {
        return $this->multipleOf;
    }

    /**
     * @param mixed $multipleOf
     * @return static
     */
    public function setMultipleOf($multipleOf)
    {
        $this->multipleOf = $multipleOf;

        return $this;
    }

    public function getNot(): ?JSONSchemaProps
    {
        return $this->not;
    }

    /**
     * @return static
     */
    public function setNot(JSONSchemaProps $not)
    {
        $this->not = $not;

        return $this;
    }

    public function isNullable(): ?bool
    {
        return $this->nullable;
    }

    /**
     * @return static
     */
    public function setIsNullable(bool $nullable)
    {
        $this->nullable = $nullable;

        return $this;
    }

    /**
     * @return iterable|JSONSchemaProps[]
     */
    public function getOneOf(): ?iterable
    {
        return $this->oneOf;
    }

    /**
     * @return static
     */
    public function setOneOf(iterable $oneOf)
    {
        $this->oneOf = $oneOf;

        return $this;
    }

    /**
     * @return static
     */
    public function addOneOf(JSONSchemaProps $oneOf)
    {
        if (!$this->oneOf) {
            $this->oneOf = new Collection();
        }
        $this->oneOf[] = $oneOf;

        return $this;
    }

    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    /**
     * @return static
     */
    public function setPattern(string $pattern)
    {
        $this->pattern = $pattern;

        return $this;
    }

    public function getPatternProperties(): ?array
    {
        return $this->patternProperties;
    }

    /**
     * @return static
     */
    public function setPatternProperties(array $patternProperties)
    {
        $this->patternProperties = $patternProperties;

        return $this;
    }

    public function getProperties(): ?array
    {
        return $this->properties;
    }

    /**
     * @return static
     */
    public function setProperties(array $properties)
    {
        $this->properties = $properties;

        return $this;
    }

    public function getRequired(): ?array
    {
        return $this->required;
    }

    /**
     * @return static
     */
    public function setRequired(array $required)
    {
        $this->required = $required;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return static
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    public function isUniqueItems(): ?bool
    {
        return $this->uniqueItems;
    }

    /**
     * @return static
     */
    public function setIsUniqueItems(bool $uniqueItems)
    {
        $this->uniqueItems = $uniqueItems;

        return $this;
    }

    /**
     * x-kubernetes-embedded-resource defines that the value is an embedded Kubernetes runtime.Object, with
     * TypeMeta and ObjectMeta. The type must be object. It is allowed to further restrict the embedded
     * object. kind, apiVersion and metadata are validated automatically.
     * x-kubernetes-preserve-unknown-fields is allowed to be true, but does not have to be if the object is
     * fully specified (up to kind, apiVersion, metadata).
     */
    public function isXKubernetesEmbeddedResource(): ?bool
    {
        return $this->xKubernetesEmbeddedResource;
    }

    /**
     * x-kubernetes-embedded-resource defines that the value is an embedded Kubernetes runtime.Object, with
     * TypeMeta and ObjectMeta. The type must be object. It is allowed to further restrict the embedded
     * object. kind, apiVersion and metadata are validated automatically.
     * x-kubernetes-preserve-unknown-fields is allowed to be true, but does not have to be if the object is
     * fully specified (up to kind, apiVersion, metadata).
     *
     * @return static
     */
    public function setIsXKubernetesEmbeddedResource(bool $xKubernetesEmbeddedResource)
    {
        $this->xKubernetesEmbeddedResource = $xKubernetesEmbeddedResource;

        return $this;
    }

    /**
     * x-kubernetes-int-or-string specifies that this value is either an integer or a string. If this is
     * true, an empty type is allowed and type as child of anyOf is permitted if following one of the
     * following patterns:
     *
     * 1) anyOf:
     *    - type: integer
     *    - type: string
     * 2) allOf:
     *    - anyOf:
     *      - type: integer
     *      - type: string
     *    - ... zero or more
     */
    public function isXKubernetesIntOrString(): ?bool
    {
        return $this->xKubernetesIntOrString;
    }

    /**
     * x-kubernetes-int-or-string specifies that this value is either an integer or a string. If this is
     * true, an empty type is allowed and type as child of anyOf is permitted if following one of the
     * following patterns:
     *
     * 1) anyOf:
     *    - type: integer
     *    - type: string
     * 2) allOf:
     *    - anyOf:
     *      - type: integer
     *      - type: string
     *    - ... zero or more
     *
     * @return static
     */
    public function setIsXKubernetesIntOrString(bool $xKubernetesIntOrString)
    {
        $this->xKubernetesIntOrString = $xKubernetesIntOrString;

        return $this;
    }

    /**
     * x-kubernetes-list-map-keys annotates an array with the x-kubernetes-list-type `map` by specifying
     * the keys used as the index of the map.
     *
     * This tag MUST only be used on lists that have the "x-kubernetes-list-type" extension set to "map".
     * Also, the values specified for this attribute must be a scalar typed field of the child structure
     * (no nesting is supported).
     *
     * The properties specified must either be required or have a default value, to ensure those properties
     * are present for all list items.
     */
    public function getXKubernetesListMapKeys(): ?array
    {
        return $this->xKubernetesListMapKeys;
    }

    /**
     * x-kubernetes-list-map-keys annotates an array with the x-kubernetes-list-type `map` by specifying
     * the keys used as the index of the map.
     *
     * This tag MUST only be used on lists that have the "x-kubernetes-list-type" extension set to "map".
     * Also, the values specified for this attribute must be a scalar typed field of the child structure
     * (no nesting is supported).
     *
     * The properties specified must either be required or have a default value, to ensure those properties
     * are present for all list items.
     *
     * @return static
     */
    public function setXKubernetesListMapKeys(array $xKubernetesListMapKeys)
    {
        $this->xKubernetesListMapKeys = $xKubernetesListMapKeys;

        return $this;
    }

    /**
     * x-kubernetes-list-type annotates an array to further describe its topology. This extension must only
     * be used on lists and may have 3 possible values:
     *
     * 1) `atomic`: the list is treated as a single entity, like a scalar.
     *      Atomic lists will be entirely replaced when updated. This extension
     *      may be used on any type of list (struct, scalar, ...).
     * 2) `set`:
     *      Sets are lists that must not have multiple items with the same value. Each
     *      value must be a scalar, an object with x-kubernetes-map-type `atomic` or an
     *      array with x-kubernetes-list-type `atomic`.
     * 3) `map`:
     *      These lists are like maps in that their elements have a non-index key
     *      used to identify them. Order is preserved upon merge. The map tag
     *      must only be used on a list with elements of type object.
     * Defaults to atomic for arrays.
     */
    public function getXKubernetesListType(): ?string
    {
        return $this->xKubernetesListType;
    }

    /**
     * x-kubernetes-list-type annotates an array to further describe its topology. This extension must only
     * be used on lists and may have 3 possible values:
     *
     * 1) `atomic`: the list is treated as a single entity, like a scalar.
     *      Atomic lists will be entirely replaced when updated. This extension
     *      may be used on any type of list (struct, scalar, ...).
     * 2) `set`:
     *      Sets are lists that must not have multiple items with the same value. Each
     *      value must be a scalar, an object with x-kubernetes-map-type `atomic` or an
     *      array with x-kubernetes-list-type `atomic`.
     * 3) `map`:
     *      These lists are like maps in that their elements have a non-index key
     *      used to identify them. Order is preserved upon merge. The map tag
     *      must only be used on a list with elements of type object.
     * Defaults to atomic for arrays.
     *
     * @return static
     */
    public function setXKubernetesListType(string $xKubernetesListType)
    {
        $this->xKubernetesListType = $xKubernetesListType;

        return $this;
    }

    /**
     * x-kubernetes-map-type annotates an object to further describe its topology. This extension must only
     * be used when type is object and may have 2 possible values:
     *
     * 1) `granular`:
     *      These maps are actual maps (key-value pairs) and each fields are independent
     *      from each other (they can each be manipulated by separate actors). This is
     *      the default behaviour for all maps.
     * 2) `atomic`: the list is treated as a single entity, like a scalar.
     *      Atomic maps will be entirely replaced when updated.
     */
    public function getXKubernetesMapType(): ?string
    {
        return $this->xKubernetesMapType;
    }

    /**
     * x-kubernetes-map-type annotates an object to further describe its topology. This extension must only
     * be used when type is object and may have 2 possible values:
     *
     * 1) `granular`:
     *      These maps are actual maps (key-value pairs) and each fields are independent
     *      from each other (they can each be manipulated by separate actors). This is
     *      the default behaviour for all maps.
     * 2) `atomic`: the list is treated as a single entity, like a scalar.
     *      Atomic maps will be entirely replaced when updated.
     *
     * @return static
     */
    public function setXKubernetesMapType(string $xKubernetesMapType)
    {
        $this->xKubernetesMapType = $xKubernetesMapType;

        return $this;
    }

    /**
     * x-kubernetes-preserve-unknown-fields stops the API server decoding step from pruning fields which
     * are not specified in the validation schema. This affects fields recursively, but switches back to
     * normal pruning behaviour if nested properties or additionalProperties are specified in the schema.
     * This can either be true or undefined. False is forbidden.
     */
    public function isXKubernetesPreserveUnknownFields(): ?bool
    {
        return $this->xKubernetesPreserveUnknownFields;
    }

    /**
     * x-kubernetes-preserve-unknown-fields stops the API server decoding step from pruning fields which
     * are not specified in the validation schema. This affects fields recursively, but switches back to
     * normal pruning behaviour if nested properties or additionalProperties are specified in the schema.
     * This can either be true or undefined. False is forbidden.
     *
     * @return static
     */
    public function setIsXKubernetesPreserveUnknownFields(bool $xKubernetesPreserveUnknownFields)
    {
        $this->xKubernetesPreserveUnknownFields = $xKubernetesPreserveUnknownFields;

        return $this;
    }
}
