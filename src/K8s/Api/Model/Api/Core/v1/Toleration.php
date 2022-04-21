<?php

/**
 * This file was automatically generated by k8s/api-generator 0.12.0 for API version v1.21.12
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
 * The pod this Toleration is attached to tolerates any taint that matches the triple
 * <key,value,effect> using the matching operator <operator>.
 */
class Toleration
{
    /**
     * @Kubernetes\Attribute("effect")
     * @var string|null
     */
    protected $effect = null;

    /**
     * @Kubernetes\Attribute("key")
     * @var string|null
     */
    protected $key = null;

    /**
     * @Kubernetes\Attribute("operator")
     * @var string|null
     */
    protected $operator = null;

    /**
     * @Kubernetes\Attribute("tolerationSeconds")
     * @var int|null
     */
    protected $tolerationSeconds = null;

    /**
     * @Kubernetes\Attribute("value")
     * @var string|null
     */
    protected $value = null;

    /**
     * @param string|null $effect
     * @param string|null $key
     * @param string|null $operator
     * @param int|null $tolerationSeconds
     * @param string|null $value
     */
    public function __construct(
        ?string $effect = null,
        ?string $key = null,
        ?string $operator = null,
        ?int $tolerationSeconds = null,
        ?string $value = null
    ) {
        $this->effect = $effect;
        $this->key = $key;
        $this->operator = $operator;
        $this->tolerationSeconds = $tolerationSeconds;
        $this->value = $value;
    }

    /**
     * Effect indicates the taint effect to match. Empty means match all taint effects. When specified,
     * allowed values are NoSchedule, PreferNoSchedule and NoExecute.
     */
    public function getEffect(): ?string
    {
        return $this->effect;
    }

    /**
     * Effect indicates the taint effect to match. Empty means match all taint effects. When specified,
     * allowed values are NoSchedule, PreferNoSchedule and NoExecute.
     *
     * @return static
     */
    public function setEffect(string $effect)
    {
        $this->effect = $effect;

        return $this;
    }

    /**
     * Key is the taint key that the toleration applies to. Empty means match all taint keys. If the key is
     * empty, operator must be Exists; this combination means to match all values and all keys.
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * Key is the taint key that the toleration applies to. Empty means match all taint keys. If the key is
     * empty, operator must be Exists; this combination means to match all values and all keys.
     *
     * @return static
     */
    public function setKey(string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Operator represents a key's relationship to the value. Valid operators are Exists and Equal.
     * Defaults to Equal. Exists is equivalent to wildcard for value, so that a pod can tolerate all taints
     * of a particular category.
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * Operator represents a key's relationship to the value. Valid operators are Exists and Equal.
     * Defaults to Equal. Exists is equivalent to wildcard for value, so that a pod can tolerate all taints
     * of a particular category.
     *
     * @return static
     */
    public function setOperator(string $operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * TolerationSeconds represents the period of time the toleration (which must be of effect NoExecute,
     * otherwise this field is ignored) tolerates the taint. By default, it is not set, which means
     * tolerate the taint forever (do not evict). Zero and negative values will be treated as 0 (evict
     * immediately) by the system.
     */
    public function getTolerationSeconds(): ?int
    {
        return $this->tolerationSeconds;
    }

    /**
     * TolerationSeconds represents the period of time the toleration (which must be of effect NoExecute,
     * otherwise this field is ignored) tolerates the taint. By default, it is not set, which means
     * tolerate the taint forever (do not evict). Zero and negative values will be treated as 0 (evict
     * immediately) by the system.
     *
     * @return static
     */
    public function setTolerationSeconds(int $tolerationSeconds)
    {
        $this->tolerationSeconds = $tolerationSeconds;

        return $this;
    }

    /**
     * Value is the taint value the toleration matches to. If the operator is Exists, the value should be
     * empty, otherwise just a regular string.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Value is the taint value the toleration matches to. If the operator is Exists, the value should be
     * empty, otherwise just a regular string.
     *
     * @return static
     */
    public function setValue(string $value)
    {
        $this->value = $value;

        return $this;
    }
}
