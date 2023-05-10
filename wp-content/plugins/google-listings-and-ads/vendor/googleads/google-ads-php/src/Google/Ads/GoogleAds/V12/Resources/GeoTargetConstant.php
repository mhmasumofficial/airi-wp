<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/geo_target_constant.proto

namespace Google\Ads\GoogleAds\V12\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A geo target constant.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.GeoTargetConstant</code>
 */
class GeoTargetConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the geo target constant.
     * Geo target constant resource names have the form:
     * `geoTargetConstants/{geo_target_constant_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the geo target constant.
     *
     * Generated from protobuf field <code>optional int64 id = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Output only. Geo target constant English name.
     *
     * Generated from protobuf field <code>optional string name = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = null;
    /**
     * Output only. The ISO-3166-1 alpha-2 country code that is associated with the target.
     *
     * Generated from protobuf field <code>optional string country_code = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $country_code = null;
    /**
     * Output only. Geo target constant target type.
     *
     * Generated from protobuf field <code>optional string target_type = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $target_type = null;
    /**
     * Output only. Geo target constant status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.GeoTargetConstantStatusEnum.GeoTargetConstantStatus status = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Output only. The fully qualified English name, consisting of the target's name and that
     * of its parent and country.
     *
     * Generated from protobuf field <code>optional string canonical_name = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $canonical_name = null;
    /**
     * Output only. The resource name of the parent geo target constant.
     * Geo target constant resource names have the form:
     * `geoTargetConstants/{parent_geo_target_constant_id}`
     *
     * Generated from protobuf field <code>optional string parent_geo_target = 9 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $parent_geo_target = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the geo target constant.
     *           Geo target constant resource names have the form:
     *           `geoTargetConstants/{geo_target_constant_id}`
     *     @type int|string $id
     *           Output only. The ID of the geo target constant.
     *     @type string $name
     *           Output only. Geo target constant English name.
     *     @type string $country_code
     *           Output only. The ISO-3166-1 alpha-2 country code that is associated with the target.
     *     @type string $target_type
     *           Output only. Geo target constant target type.
     *     @type int $status
     *           Output only. Geo target constant status.
     *     @type string $canonical_name
     *           Output only. The fully qualified English name, consisting of the target's name and that
     *           of its parent and country.
     *     @type string $parent_geo_target
     *           Output only. The resource name of the parent geo target constant.
     *           Geo target constant resource names have the form:
     *           `geoTargetConstants/{parent_geo_target_constant_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\GeoTargetConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the geo target constant.
     * Geo target constant resource names have the form:
     * `geoTargetConstants/{geo_target_constant_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the geo target constant.
     * Geo target constant resource names have the form:
     * `geoTargetConstants/{geo_target_constant_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the geo target constant.
     *
     * Generated from protobuf field <code>optional int64 id = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. The ID of the geo target constant.
     *
     * Generated from protobuf field <code>optional int64 id = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Output only. Geo target constant English name.
     *
     * Generated from protobuf field <code>optional string name = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Output only. Geo target constant English name.
     *
     * Generated from protobuf field <code>optional string name = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The ISO-3166-1 alpha-2 country code that is associated with the target.
     *
     * Generated from protobuf field <code>optional string country_code = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCountryCode()
    {
        return isset($this->country_code) ? $this->country_code : '';
    }

    public function hasCountryCode()
    {
        return isset($this->country_code);
    }

    public function clearCountryCode()
    {
        unset($this->country_code);
    }

    /**
     * Output only. The ISO-3166-1 alpha-2 country code that is associated with the target.
     *
     * Generated from protobuf field <code>optional string country_code = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_code = $var;

        return $this;
    }

    /**
     * Output only. Geo target constant target type.
     *
     * Generated from protobuf field <code>optional string target_type = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTargetType()
    {
        return isset($this->target_type) ? $this->target_type : '';
    }

    public function hasTargetType()
    {
        return isset($this->target_type);
    }

    public function clearTargetType()
    {
        unset($this->target_type);
    }

    /**
     * Output only. Geo target constant target type.
     *
     * Generated from protobuf field <code>optional string target_type = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetType($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_type = $var;

        return $this;
    }

    /**
     * Output only. Geo target constant status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.GeoTargetConstantStatusEnum.GeoTargetConstantStatus status = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Geo target constant status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.GeoTargetConstantStatusEnum.GeoTargetConstantStatus status = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V12\Enums\GeoTargetConstantStatusEnum\GeoTargetConstantStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. The fully qualified English name, consisting of the target's name and that
     * of its parent and country.
     *
     * Generated from protobuf field <code>optional string canonical_name = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCanonicalName()
    {
        return isset($this->canonical_name) ? $this->canonical_name : '';
    }

    public function hasCanonicalName()
    {
        return isset($this->canonical_name);
    }

    public function clearCanonicalName()
    {
        unset($this->canonical_name);
    }

    /**
     * Output only. The fully qualified English name, consisting of the target's name and that
     * of its parent and country.
     *
     * Generated from protobuf field <code>optional string canonical_name = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCanonicalName($var)
    {
        GPBUtil::checkString($var, True);
        $this->canonical_name = $var;

        return $this;
    }

    /**
     * Output only. The resource name of the parent geo target constant.
     * Geo target constant resource names have the form:
     * `geoTargetConstants/{parent_geo_target_constant_id}`
     *
     * Generated from protobuf field <code>optional string parent_geo_target = 9 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParentGeoTarget()
    {
        return isset($this->parent_geo_target) ? $this->parent_geo_target : '';
    }

    public function hasParentGeoTarget()
    {
        return isset($this->parent_geo_target);
    }

    public function clearParentGeoTarget()
    {
        unset($this->parent_geo_target);
    }

    /**
     * Output only. The resource name of the parent geo target constant.
     * Geo target constant resource names have the form:
     * `geoTargetConstants/{parent_geo_target_constant_id}`
     *
     * Generated from protobuf field <code>optional string parent_geo_target = 9 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParentGeoTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_geo_target = $var;

        return $this;
    }

}

