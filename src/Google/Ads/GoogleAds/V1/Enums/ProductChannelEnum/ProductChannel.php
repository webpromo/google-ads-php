<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/product_channel.proto

namespace Google\Ads\GoogleAds\V1\Enums\ProductChannelEnum;

/**
 * Enum describing the locality of a product offer.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.ProductChannelEnum.ProductChannel</code>
 */
class ProductChannel
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
     * The item is sold online.
     *
     * Generated from protobuf enum <code>ONLINE = 2;</code>
     */
    const ONLINE = 2;
    /**
     * The item is sold in local stores.
     *
     * Generated from protobuf enum <code>LOCAL = 3;</code>
     */
    const LOCAL = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductChannel::class, \Google\Ads\GoogleAds\V1\Enums\ProductChannelEnum_ProductChannel::class);

