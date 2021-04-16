<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.18.18
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\FlowControl\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * LimitedPriorityLevelConfiguration specifies how to handle requests that are subject to limits. It
 * addresses two issues:
 *  * How are requests for this priority level limited?
 *  * What should be done with requests that exceed the limit?
 */
class LimitedPriorityLevelConfiguration
{
    /**
     * @Kubernetes\Attribute("assuredConcurrencyShares")
     * @var int|null
     */
    protected $assuredConcurrencyShares = null;

    /**
     * @Kubernetes\Attribute("limitResponse",type="model",model=LimitResponse::class)
     * @var LimitResponse|null
     */
    protected $limitResponse = null;

    /**
     * @param int|null $assuredConcurrencyShares
     * @param LimitResponse|null $limitResponse
     */
    public function __construct(?int $assuredConcurrencyShares = null, ?LimitResponse $limitResponse = null)
    {
        $this->assuredConcurrencyShares = $assuredConcurrencyShares;
        $this->limitResponse = $limitResponse;
    }

    /**
     * `assuredConcurrencyShares` (ACS) configures the execution limit, which is a limit on the number of
     * requests of this priority level that may be exeucting at a given time.  ACS must be a positive
     * number. The server's concurrency limit (SCL) is divided among the concurrency-controlled priority
     * levels in proportion to their assured concurrency shares. This produces the assured concurrency
     * value (ACV) --- the number of requests that may be executing at a time --- for each such priority
     * level:
     *
     *             ACV(l) = ceil( SCL * ACS(l) / ( sum[priority levels k] ACS(k) ) )
     *
     * bigger numbers of ACS mean more reserved concurrent requests (at the expense of every other PL).
     * This field has a default value of 30.
     */
    public function getAssuredConcurrencyShares(): ?int
    {
        return $this->assuredConcurrencyShares;
    }

    /**
     * `assuredConcurrencyShares` (ACS) configures the execution limit, which is a limit on the number of
     * requests of this priority level that may be exeucting at a given time.  ACS must be a positive
     * number. The server's concurrency limit (SCL) is divided among the concurrency-controlled priority
     * levels in proportion to their assured concurrency shares. This produces the assured concurrency
     * value (ACV) --- the number of requests that may be executing at a time --- for each such priority
     * level:
     *
     *             ACV(l) = ceil( SCL * ACS(l) / ( sum[priority levels k] ACS(k) ) )
     *
     * bigger numbers of ACS mean more reserved concurrent requests (at the expense of every other PL).
     * This field has a default value of 30.
     *
     * @return static
     */
    public function setAssuredConcurrencyShares(int $assuredConcurrencyShares)
    {
        $this->assuredConcurrencyShares = $assuredConcurrencyShares;

        return $this;
    }

    /**
     * `limitResponse` indicates what to do with requests that can not be executed right now
     */
    public function getLimitResponse(): ?LimitResponse
    {
        return $this->limitResponse;
    }

    /**
     * `limitResponse` indicates what to do with requests that can not be executed right now
     *
     * @return static
     */
    public function setLimitResponse(LimitResponse $limitResponse)
    {
        $this->limitResponse = $limitResponse;

        return $this;
    }
}
