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

namespace SchemaRepository\Bundle\DemandBundle\Entity;

use SchemaRepository\Bundle\DemandBundle\Model\AbstractDemand;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Demand Entity
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractDemand extends AbstractDemand
{

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="additional_type", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $additionalType;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="description", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $description;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="image", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $image;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="name", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $name;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="same_as", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $sameAs;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="url", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $url;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="accepted_payment_method", type="string", nullable=true)
     */
     protected $acceptedPaymentMethod;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="advance_booking_requirement", type="string", nullable=true)
     */
     protected $advanceBookingRequirement;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="availability", type="string", nullable=true)
     */
     protected $availability;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="availability_ends", type="datetime", nullable=true)
     */
     protected $availabilityEnds;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="availability_starts", type="datetime", nullable=true)
     */
     protected $availabilityStarts;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="available_at_or_from", type="string", nullable=true)
     */
     protected $availableAtOrFrom;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="available_delivery_method", type="string", nullable=true)
     */
     protected $availableDeliveryMethod;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="business_function", type="string", nullable=true)
     */
     protected $businessFunction;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="delivery_lead_time", type="string", nullable=true)
     */
     protected $deliveryLeadTime;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="eligible_customer_type", type="string", nullable=true)
     */
     protected $eligibleCustomerType;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="eligible_duration", type="string", nullable=true)
     */
     protected $eligibleDuration;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="eligible_quantity", type="string", nullable=true)
     */
     protected $eligibleQuantity;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="eligible_region", type="string", nullable=true)
     */
     protected $eligibleRegion;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="eligible_transaction_volume", type="string", nullable=true)
     */
     protected $eligibleTransactionVolume;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="gtin13", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $gtin13;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="gtin14", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $gtin14;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="gtin8", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $gtin8;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="includes_object", type="string", nullable=true)
     */
     protected $includesObject;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="inventory_level", type="string", nullable=true)
     */
     protected $inventoryLevel;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="item_condition", type="string", nullable=true)
     */
     protected $itemCondition;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="item_offered", type="string", nullable=true)
     */
     protected $itemOffered;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="mpn", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $mpn;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="price_specification", type="string", nullable=true)
     */
     protected $priceSpecification;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="seller", type="string", nullable=true)
     */
     protected $seller;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="serial_number", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $serialNumber;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="sku", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $sku;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="valid_from", type="datetime", nullable=true)
     */
     protected $validFrom;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="valid_through", type="datetime", nullable=true)
     */
     protected $validThrough;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="warranty", type="string", nullable=true)
     */
     protected $warranty;
}
