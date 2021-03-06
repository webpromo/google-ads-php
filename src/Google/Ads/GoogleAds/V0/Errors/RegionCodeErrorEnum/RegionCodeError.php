<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/region_code_error.proto

namespace Google\Ads\GoogleAds\V0\Errors\RegionCodeErrorEnum;

/**
 * Enum describing possible region code errors.
 *
 * Protobuf type <code>google.ads.googleads.v0.errors.RegionCodeErrorEnum.RegionCodeError</code>
 */
class RegionCodeError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Invalid region code.
     *
     * Generated from protobuf enum <code>INVALID_REGION_CODE = 2;</code>
     */
    const INVALID_REGION_CODE = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RegionCodeError::class, \Google\Ads\GoogleAds\V0\Errors\RegionCodeErrorEnum_RegionCodeError::class);

