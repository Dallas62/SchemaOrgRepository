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

namespace SchemaRepository\Bundle\GolfCourseBundle\Entity;

use SchemaRepository\Bundle\GolfCourseBundle\Model\AbstractGolfCourse;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Golf Course Entity
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractGolfCourse extends AbstractGolfCourse
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
     * @ORM\Column(name="address", type="string", nullable=true)
     */
     protected $address;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="aggregate_rating", type="string", nullable=true)
     */
     protected $aggregateRating;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="contained_in", type="string", nullable=true)
     */
     protected $containedIn;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="event", type="string", nullable=true)
     */
     protected $event;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="events", type="array", nullable=true)
     */
     protected $events;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="fax_number", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $faxNumber;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="geo", type="string", nullable=true)
     */
     protected $geo;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="global_location_number", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $globalLocationNumber;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="interaction_count", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $interactionCount;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="isic_v4", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $isicV4;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="logo", type="string", nullable=true)
     */
     protected $logo;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="map", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $map;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="maps", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $maps;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="opening_hours_specification", type="string", nullable=true)
     */
     protected $openingHoursSpecification;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="photo", type="string", nullable=true)
     */
     protected $photo;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="photos", type="array", nullable=true)
     */
     protected $photos;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="review", type="string", nullable=true)
     */
     protected $review;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="reviews", type="array", nullable=true)
     */
     protected $reviews;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="telephone", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $telephone;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="brand", type="string", nullable=true)
     */
     protected $brand;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="contact_point", type="string", nullable=true)
     */
     protected $contactPoint;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="contact_points", type="array", nullable=true)
     */
     protected $contactPoints;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="duns", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $duns;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="email", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $email;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="employee", type="string", nullable=true)
     */
     protected $employee;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="employees", type="array", nullable=true)
     */
     protected $employees;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="founder", type="string", nullable=true)
     */
     protected $founder;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="founders", type="array", nullable=true)
     */
     protected $founders;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="founding_date", type="string", nullable=true)
     */
     protected $foundingDate;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="has_pos", type="string", nullable=true)
     */
     protected $hasPOS;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="legal_name", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $legalName;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="location", type="string", nullable=true)
     */
     protected $location;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="makes_offer", type="string", nullable=true)
     */
     protected $makesOffer;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="member", type="string", nullable=true)
     */
     protected $member;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="members", type="array", nullable=true)
     */
     protected $members;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="naics", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $naics;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="owns", type="string", nullable=true)
     */
     protected $owns;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="seeks", type="string", nullable=true)
     */
     protected $seeks;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="tax_id", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $taxID;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="vat_id", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $vatID;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="branch_of", type="string", nullable=true)
     */
     protected $branchOf;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="currencies_accepted", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $currenciesAccepted;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="opening_hours", type="string", nullable=true)
     */
     protected $openingHours;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="payment_accepted", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $paymentAccepted;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="price_range", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $priceRange;
}
