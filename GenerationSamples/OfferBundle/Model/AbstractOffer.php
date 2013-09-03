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

use SchemaRepository\Bundle\OfferBundle\Model\OfferInterface;
use SchemaRepository\Bundle\IntangibleBundle\Model\AbstractIntangible;

/**
 * Model of Offer
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\OfferBundle\Model
 */
abstract class AbstractOffer extends AbstractIntangible implements OfferInterface
{

    /**
     * The payment method(s) accepted by seller for this offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $acceptedPaymentMethod;

    /**
     * An additional offer that can only be obtained in combination with the
     * first base offer (e.g. supplements and extensions that are available
     * for a surcharge).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $addOn;

    /**
     * The amount of time that is required between accepting the offer and
     * the actual usage of the resource or service.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $advanceBookingRequirement;

    /**
     * The overall rating, based on a collection of reviews or ratings, of
     * the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $aggregateRating;

    /**
     * The availability of this item—for example In stock, Out of stock,
     * Pre-order, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $availability;

    /**
     * The end of the availability of the product or service included in the
     * offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var \DateTime
     */
    protected $availabilityEnds;

    /**
     * The beginning of the availability of the product or service included
     * in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var \DateTime
     */
    protected $availabilityStarts;

    /**
     * The place(s) from which the offer can be obtained (e.g. store
     * locations).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $availableAtOrFrom;

    /**
     * The delivery method(s) available for this offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $availableDeliveryMethod;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer
     * or component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $businessFunction;

    /**
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $category;

    /**
     * The typical delay between the receipt of the order and the goods
     * leaving the warehouse.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $deliveryLeadTime;

    /**
     * The type(s) of customers for which the given offer is valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $eligibleCustomerType;

    /**
     * The duration for which the given offer is valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $eligibleDuration;

    /**
     * The interval and unit of measurement of ordering quantities for which
     * the offer or price specification is valid. This allows e.g. specifying
     * that a certain freight charge is valid only for a certain quantity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $eligibleQuantity;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the
     * GeoShape for the geo-political region(s) for which the offer or
     * delivery charge specification is valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $eligibleRegion;

    /**
     * The transaction volume, in a monetary unit, for which the offer or
     * price specification is valid, e.g. for indicating a minimal purchasing
     * volume, to express free shipping above a certain order volume, or to
     * limit the acceptance of credit cards to purchases to a certain minimal
     * amount.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $eligibleTransactionVolume;

    /**
     * The GTIN-13 code of the product, or the product to which the offer
     * refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13.
     * Former 12-digit UPC codes can be converted into a GTIN-13 code by
     * simply adding a preceeding zero.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $gtin13;

    /**
     * The GTIN-14 code of the product, or the product to which the offer
     * refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $gtin14;

    /**
     * The GTIN-8 code of the product, or the product to which the offer
     * refers. This code is also known as EAN/UCC-8 or 8-digit EAN.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $gtin8;

    /**
     * This links to a node or nodes indicating the exact quantity of the
     * products included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $includesObject;

    /**
     * The current approximate inventory level for the item or items.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $inventoryLevel;

    /**
     * A predefined value from OfferItemCondition or a textual description of
     * the condition of the product or service, or the products or services
     * included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $itemCondition;

    /**
     * The item being sold.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $itemOffered;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to
     * which the offer refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $mpn;

    /**
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string|integer|long|float|decimal
     */
    protected $price;

    /**
     * The currency (in 3-letter ISO 4217 format) of the offer price or a
     * price component, when attached to PriceSpecification and its subtypes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $priceCurrency;

    /**
     * One or more detailed price specifications, indicating the unit price
     * and delivery or payment charges.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $priceSpecification;

    /**
     * The date after which the price is no longer available.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $priceValidUntil;

    /**
     * A review of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $review;

    /**
     * Review of the item (legacy spelling; see singular form, review).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $reviews;

    /**
     * The seller.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $seller;

    /**
     * The serial number or any alphanumeric identifier of a particular
     * product. When attached to an offer, it is a shortcut for the serial
     * number of the product included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $serialNumber;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for
     * a product or service, or the product to which the offer refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $sku;

    /**
     * The beginning of the validity of offer, price specification, or
     * opening hours data.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var \DateTime
     */
    protected $validFrom;

    /**
     * The end of the validity of offer, price specification, or opening
     * hours data.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var \DateTime
     */
    protected $validThrough;

    /**
     * The warranty promise(s) included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $warranty;

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
    public function getAcceptedPaymentMethod()
    {
        return $this->acceptedPaymentMethod;
    }

    /**
     * Setter of Accepted Payment Method
     * 
     * The payment method(s) accepted by seller for this offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of acceptedPaymentMethod
     */
    public function setAcceptedPaymentMethod($value)
    {
        $this->acceptedPaymentMethod = $value;
    }

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
    public function getAddOn()
    {
        return $this->addOn;
    }

    /**
     * Setter of Add On
     * 
     * An additional offer that can only be obtained in combination with the
     * first base offer (e.g. supplements and extensions that are available
     * for a surcharge).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of addOn
     */
    public function setAddOn($value)
    {
        $this->addOn = $value;
    }

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
    public function getAdvanceBookingRequirement()
    {
        return $this->advanceBookingRequirement;
    }

    /**
     * Setter of Advance Booking Requirement
     * 
     * The amount of time that is required between accepting the offer and
     * the actual usage of the resource or service.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of advanceBookingRequirement
     */
    public function setAdvanceBookingRequirement($value)
    {
        $this->advanceBookingRequirement = $value;
    }

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
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * Setter of Aggregate Rating
     * 
     * The overall rating, based on a collection of reviews or ratings, of
     * the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of aggregateRating
     */
    public function setAggregateRating($value)
    {
        $this->aggregateRating = $value;
    }

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
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Setter of Availability
     * 
     * The availability of this item—for example In stock, Out of stock,
     * Pre-order, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of availability
     */
    public function setAvailability($value)
    {
        $this->availability = $value;
    }

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
    public function getAvailabilityEnds()
    {
        return $this->availabilityEnds;
    }

    /**
     * Setter of Availability Ends
     * 
     * The end of the availability of the product or service included in the
     * offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param \DateTime $value Value of availabilityEnds
     */
    public function setAvailabilityEnds($value)
    {
        $this->availabilityEnds = $value;
    }

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
    public function getAvailabilityStarts()
    {
        return $this->availabilityStarts;
    }

    /**
     * Setter of Availability Starts
     * 
     * The beginning of the availability of the product or service included
     * in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param \DateTime $value Value of availabilityStarts
     */
    public function setAvailabilityStarts($value)
    {
        $this->availabilityStarts = $value;
    }

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
    public function getAvailableAtOrFrom()
    {
        return $this->availableAtOrFrom;
    }

    /**
     * Setter of Available At or From
     * 
     * The place(s) from which the offer can be obtained (e.g. store
     * locations).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of availableAtOrFrom
     */
    public function setAvailableAtOrFrom($value)
    {
        $this->availableAtOrFrom = $value;
    }

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
    public function getAvailableDeliveryMethod()
    {
        return $this->availableDeliveryMethod;
    }

    /**
     * Setter of Available Delivery Method
     * 
     * The delivery method(s) available for this offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of availableDeliveryMethod
     */
    public function setAvailableDeliveryMethod($value)
    {
        $this->availableDeliveryMethod = $value;
    }

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
    public function getBusinessFunction()
    {
        return $this->businessFunction;
    }

    /**
     * Setter of Business Function
     * 
     * The business function (e.g. sell, lease, repair, dispose) of the offer
     * or component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of businessFunction
     */
    public function setBusinessFunction($value)
    {
        $this->businessFunction = $value;
    }

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
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Setter of Category
     * 
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of category
     */
    public function setCategory($value)
    {
        $this->category = $value;
    }

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
    public function getDeliveryLeadTime()
    {
        return $this->deliveryLeadTime;
    }

    /**
     * Setter of Delivery Lead Time
     * 
     * The typical delay between the receipt of the order and the goods
     * leaving the warehouse.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of deliveryLeadTime
     */
    public function setDeliveryLeadTime($value)
    {
        $this->deliveryLeadTime = $value;
    }

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
    public function getEligibleCustomerType()
    {
        return $this->eligibleCustomerType;
    }

    /**
     * Setter of Eligible Customer Type
     * 
     * The type(s) of customers for which the given offer is valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of eligibleCustomerType
     */
    public function setEligibleCustomerType($value)
    {
        $this->eligibleCustomerType = $value;
    }

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
    public function getEligibleDuration()
    {
        return $this->eligibleDuration;
    }

    /**
     * Setter of Eligible Duration
     * 
     * The duration for which the given offer is valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of eligibleDuration
     */
    public function setEligibleDuration($value)
    {
        $this->eligibleDuration = $value;
    }

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
    public function getEligibleQuantity()
    {
        return $this->eligibleQuantity;
    }

    /**
     * Setter of Eligible Quantity
     * 
     * The interval and unit of measurement of ordering quantities for which
     * the offer or price specification is valid. This allows e.g. specifying
     * that a certain freight charge is valid only for a certain quantity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of eligibleQuantity
     */
    public function setEligibleQuantity($value)
    {
        $this->eligibleQuantity = $value;
    }

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
    public function getEligibleRegion()
    {
        return $this->eligibleRegion;
    }

    /**
     * Setter of Eligible Region
     * 
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the
     * GeoShape for the geo-political region(s) for which the offer or
     * delivery charge specification is valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of eligibleRegion
     */
    public function setEligibleRegion($value)
    {
        $this->eligibleRegion = $value;
    }

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
    public function getEligibleTransactionVolume()
    {
        return $this->eligibleTransactionVolume;
    }

    /**
     * Setter of Eligible Transaction Volume
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
     * @param mixed $value Value of eligibleTransactionVolume
     */
    public function setEligibleTransactionVolume($value)
    {
        $this->eligibleTransactionVolume = $value;
    }

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
    public function getGtin13()
    {
        return $this->gtin13;
    }

    /**
     * Setter of Gtin13
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
     * @param string $value Value of gtin13
     */
    public function setGtin13($value)
    {
        $this->gtin13 = $value;
    }

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
    public function getGtin14()
    {
        return $this->gtin14;
    }

    /**
     * Setter of Gtin14
     * 
     * The GTIN-14 code of the product, or the product to which the offer
     * refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of gtin14
     */
    public function setGtin14($value)
    {
        $this->gtin14 = $value;
    }

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
    public function getGtin8()
    {
        return $this->gtin8;
    }

    /**
     * Setter of Gtin8
     * 
     * The GTIN-8 code of the product, or the product to which the offer
     * refers. This code is also known as EAN/UCC-8 or 8-digit EAN.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of gtin8
     */
    public function setGtin8($value)
    {
        $this->gtin8 = $value;
    }

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
    public function getIncludesObject()
    {
        return $this->includesObject;
    }

    /**
     * Setter of Includes Object
     * 
     * This links to a node or nodes indicating the exact quantity of the
     * products included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of includesObject
     */
    public function setIncludesObject($value)
    {
        $this->includesObject = $value;
    }

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
    public function getInventoryLevel()
    {
        return $this->inventoryLevel;
    }

    /**
     * Setter of Inventory Level
     * 
     * The current approximate inventory level for the item or items.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of inventoryLevel
     */
    public function setInventoryLevel($value)
    {
        $this->inventoryLevel = $value;
    }

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
    public function getItemCondition()
    {
        return $this->itemCondition;
    }

    /**
     * Setter of Item Condition
     * 
     * A predefined value from OfferItemCondition or a textual description of
     * the condition of the product or service, or the products or services
     * included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of itemCondition
     */
    public function setItemCondition($value)
    {
        $this->itemCondition = $value;
    }

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
    public function getItemOffered()
    {
        return $this->itemOffered;
    }

    /**
     * Setter of Item Offered
     * 
     * The item being sold.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of itemOffered
     */
    public function setItemOffered($value)
    {
        $this->itemOffered = $value;
    }

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
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * Setter of Mpn
     * 
     * The Manufacturer Part Number (MPN) of the product, or the product to
     * which the offer refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of mpn
     */
    public function setMpn($value)
    {
        $this->mpn = $value;
    }

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
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Setter of Price
     * 
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string|integer|long|float|decimal $value Value of price
     */
    public function setPrice($value)
    {
        $this->price = $value;
    }

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
    public function getPriceCurrency()
    {
        return $this->priceCurrency;
    }

    /**
     * Setter of Price Currency
     * 
     * The currency (in 3-letter ISO 4217 format) of the offer price or a
     * price component, when attached to PriceSpecification and its subtypes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of priceCurrency
     */
    public function setPriceCurrency($value)
    {
        $this->priceCurrency = $value;
    }

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
    public function getPriceSpecification()
    {
        return $this->priceSpecification;
    }

    /**
     * Setter of Price Specification
     * 
     * One or more detailed price specifications, indicating the unit price
     * and delivery or payment charges.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of priceSpecification
     */
    public function setPriceSpecification($value)
    {
        $this->priceSpecification = $value;
    }

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
    public function getPriceValidUntil()
    {
        return $this->priceValidUntil;
    }

    /**
     * Setter of Price Valid Until
     * 
     * The date after which the price is no longer available.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of priceValidUntil
     */
    public function setPriceValidUntil($value)
    {
        $this->priceValidUntil = $value;
    }

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
    public function getReview()
    {
        return $this->review;
    }

    /**
     * Setter of Review
     * 
     * A review of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of review
     */
    public function setReview($value)
    {
        $this->review = $value;
    }

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
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Setter of Reviews
     * 
     * Review of the item (legacy spelling; see singular form, review).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of reviews
     */
    public function setReviews($value)
    {
        $this->reviews = $value;
    }

    /**
     * Add review to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of review
     */
    public function addReview($value)
    {
        $this->reviews[] = $value;
    }

    /**
     * Remove review to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of review
     */
    public function removeReview($value)
    {
        $key = array_search($value, $this->reviews);
        if($key !== false) {
           unset($this->reviews[$key]);
        }
    }

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
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * Setter of Seller
     * 
     * The seller.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of seller
     */
    public function setSeller($value)
    {
        $this->seller = $value;
    }

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
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Setter of Serial Number
     * 
     * The serial number or any alphanumeric identifier of a particular
     * product. When attached to an offer, it is a shortcut for the serial
     * number of the product included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of serialNumber
     */
    public function setSerialNumber($value)
    {
        $this->serialNumber = $value;
    }

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
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Setter of Sku
     * 
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for
     * a product or service, or the product to which the offer refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of sku
     */
    public function setSku($value)
    {
        $this->sku = $value;
    }

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
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Setter of Valid From
     * 
     * The beginning of the validity of offer, price specification, or
     * opening hours data.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param \DateTime $value Value of validFrom
     */
    public function setValidFrom($value)
    {
        $this->validFrom = $value;
    }

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
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * Setter of Valid Through
     * 
     * The end of the validity of offer, price specification, or opening
     * hours data.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param \DateTime $value Value of validThrough
     */
    public function setValidThrough($value)
    {
        $this->validThrough = $value;
    }

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
    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * Setter of Warranty
     * 
     * The warranty promise(s) included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of warranty
     */
    public function setWarranty($value)
    {
        $this->warranty = $value;
    }
}
