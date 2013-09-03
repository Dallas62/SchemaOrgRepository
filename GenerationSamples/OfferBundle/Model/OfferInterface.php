<?php

/**
 * The MIT License (MIT)
 * 
 * Copyright (c) 2013 Tacyniak Boris <boris.tacyniak@free.fr>
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace SchemaRepository\Bundle\OfferBundle\Model;

use SchemaRepository\Bundle\IntangibleBundle\Model\IntangibleInterface;

/**
 * Interface of Offer Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\OfferBundle\Model
 */
interface OfferInterface extends IntangibleInterface
{

    /**
     * Getter of Accepted Payment Method
     * 
     * The payment method(s) accepted by seller for this offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAcceptedPaymentMethod();

    /**
     * Getter of Add On
     * 
     * An additional offer that can only be obtained in combination with the
     * first base offer (e.g. supplements and extensions that are available
     * for a surcharge).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAddOn();

    /**
     * Getter of Advance Booking Requirement
     * 
     * The amount of time that is required between accepting the offer and
     * the actual usage of the resource or service.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAdvanceBookingRequirement();

    /**
     * Getter of Aggregate Rating
     * 
     * The overall rating, based on a collection of reviews or ratings, of
     * the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAggregateRating();

    /**
     * Getter of Availability
     * 
     * The availability of this item—for example In stock, Out of stock,
     * Pre-order, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAvailability();

    /**
     * Getter of Availability Ends
     * 
     * The end of the availability of the product or service included in the
     * offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return \DateTime
     */
    public function getAvailabilityEnds();

    /**
     * Getter of Availability Starts
     * 
     * The beginning of the availability of the product or service included
     * in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return \DateTime
     */
    public function getAvailabilityStarts();

    /**
     * Getter of Available At or From
     * 
     * The place(s) from which the offer can be obtained (e.g. store
     * locations).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAvailableAtOrFrom();

    /**
     * Getter of Available Delivery Method
     * 
     * The delivery method(s) available for this offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAvailableDeliveryMethod();

    /**
     * Getter of Business Function
     * 
     * The business function (e.g. sell, lease, repair, dispose) of the offer
     * or component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getBusinessFunction();

    /**
     * Getter of Category
     * 
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCategory();

    /**
     * Getter of Delivery Lead Time
     * 
     * The typical delay between the receipt of the order and the goods
     * leaving the warehouse.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDeliveryLeadTime();

    /**
     * Getter of Eligible Customer Type
     * 
     * The type(s) of customers for which the given offer is valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEligibleCustomerType();

    /**
     * Getter of Eligible Duration
     * 
     * The duration for which the given offer is valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEligibleDuration();

    /**
     * Getter of Eligible Quantity
     * 
     * The interval and unit of measurement of ordering quantities for which
     * the offer or price specification is valid. This allows e.g. specifying
     * that a certain freight charge is valid only for a certain quantity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEligibleQuantity();

    /**
     * Getter of Eligible Region
     * 
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the
     * GeoShape for the geo-political region(s) for which the offer or
     * delivery charge specification is valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEligibleRegion();

    /**
     * Getter of Eligible Transaction Volume
     * 
     * The transaction volume, in a monetary unit, for which the offer or
     * price specification is valid, e.g. for indicating a minimal purchasing
     * volume, to express free shipping above a certain order volume, or to
     * limit the acceptance of credit cards to purchases to a certain minimal
     * amount.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEligibleTransactionVolume();

    /**
     * Getter of Gtin13
     * 
     * The GTIN-13 code of the product, or the product to which the offer
     * refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13.
     * Former 12-digit UPC codes can be converted into a GTIN-13 code by
     * simply adding a preceeding zero.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getGtin13();

    /**
     * Getter of Gtin14
     * 
     * The GTIN-14 code of the product, or the product to which the offer
     * refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getGtin14();

    /**
     * Getter of Gtin8
     * 
     * The GTIN-8 code of the product, or the product to which the offer
     * refers. This code is also known as EAN/UCC-8 or 8-digit EAN.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getGtin8();

    /**
     * Getter of Includes Object
     * 
     * This links to a node or nodes indicating the exact quantity of the
     * products included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getIncludesObject();

    /**
     * Getter of Inventory Level
     * 
     * The current approximate inventory level for the item or items.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getInventoryLevel();

    /**
     * Getter of Item Condition
     * 
     * A predefined value from OfferItemCondition or a textual description of
     * the condition of the product or service, or the products or services
     * included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getItemCondition();

    /**
     * Getter of Item Offered
     * 
     * The item being sold.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getItemOffered();

    /**
     * Getter of Mpn
     * 
     * The Manufacturer Part Number (MPN) of the product, or the product to
     * which the offer refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getMpn();

    /**
     * Getter of Price
     * 
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string|integer|long|float|decimal
     */
    public function getPrice();

    /**
     * Getter of Price Currency
     * 
     * The currency (in 3-letter ISO 4217 format) of the offer price or a
     * price component, when attached to PriceSpecification and its subtypes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPriceCurrency();

    /**
     * Getter of Price Specification
     * 
     * One or more detailed price specifications, indicating the unit price
     * and delivery or payment charges.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPriceSpecification();

    /**
     * Getter of Price Valid Until
     * 
     * The date after which the price is no longer available.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPriceValidUntil();

    /**
     * Getter of Review
     * 
     * A review of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getReview();

    /**
     * Getter of Reviews
     * 
     * Review of the item (legacy spelling; see singular form, review).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getReviews();

    /**
     * Getter of Seller
     * 
     * The seller.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSeller();

    /**
     * Getter of Serial Number
     * 
     * The serial number or any alphanumeric identifier of a particular
     * product. When attached to an offer, it is a shortcut for the serial
     * number of the product included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSerialNumber();

    /**
     * Getter of Sku
     * 
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for
     * a product or service, or the product to which the offer refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSku();

    /**
     * Getter of Valid From
     * 
     * The beginning of the validity of offer, price specification, or
     * opening hours data.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return \DateTime
     */
    public function getValidFrom();

    /**
     * Getter of Valid Through
     * 
     * The end of the validity of offer, price specification, or opening
     * hours data.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return \DateTime
     */
    public function getValidThrough();

    /**
     * Getter of Warranty
     * 
     * The warranty promise(s) included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getWarranty();
}
