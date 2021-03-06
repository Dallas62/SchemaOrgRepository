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

namespace SchemaRepository\Bundle\AggregateOfferBundle\Document;

use SchemaRepository\Bundle\AggregateOfferBundle\Model\AbstractAggregateOffer;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Aggregate Offer Document
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractAggregateOffer extends AbstractAggregateOffer
{

    /**
     * {@inheritdoc}
     * 
     * @ODM\Id
     */
     protected $id;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $additionalType;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $description;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $image;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $name;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $sameAs;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $url;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $acceptedPaymentMethod;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $addOn;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $advanceBookingRequirement;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $aggregateRating;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $availability;

    /**
     * {@inheritdoc}
     * 
     * @ODM\DateTime
     */
     protected $availabilityEnds;

    /**
     * {@inheritdoc}
     * 
     * @ODM\DateTime
     */
     protected $availabilityStarts;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $availableAtOrFrom;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $availableDeliveryMethod;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $businessFunction;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $category;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $deliveryLeadTime;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $eligibleCustomerType;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $eligibleDuration;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $eligibleQuantity;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $eligibleRegion;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $eligibleTransactionVolume;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $gtin13;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $gtin14;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $gtin8;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $includesObject;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $inventoryLevel;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $itemCondition;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $itemOffered;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $mpn;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $price;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $priceCurrency;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $priceSpecification;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $priceValidUntil;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $review;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Raw
     */
     protected $reviews;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $seller;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $serialNumber;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $sku;

    /**
     * {@inheritdoc}
     * 
     * @ODM\DateTime
     */
     protected $validFrom;

    /**
     * {@inheritdoc}
     * 
     * @ODM\DateTime
     */
     protected $validThrough;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $warranty;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $highPrice;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $lowPrice;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $offerCount;
}
