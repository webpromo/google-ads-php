<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/product_condition.proto

namespace Google\Ads\GoogleAds\V1\Enums\ProductConditionEnum;

/**
 * Enum describing the condition of a product offer.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.ProductConditionEnum.ProductCondition</code>
 */
class ProductCondition
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The product condition is new.
     *
     * Generated from protobuf enum <code>NEW = 3;</code>
     */
    const PBNEW = 3;
    /**
     * The product condition is refurbished.
     *
     * Generated from protobuf enum <code>REFURBISHED = 4;</code>
     */
    const REFURBISHED = 4;
    /**
     * The product condition is used.
     *
     * Generated from protobuf enum <code>USED = 5;</code>
     */
    const USED = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductCondition::class, \Google\Ads\GoogleAds\V1\Enums\ProductConditionEnum_ProductCondition::class);

