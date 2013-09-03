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

namespace SchemaRepository\Bundle\CorporationBundle\Document;

use SchemaRepository\Bundle\CorporationBundle\Model\AbstractCorporation;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Corporation Document
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractCorporation extends AbstractCorporation
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
     protected $address;

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
     protected $brand;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $contactPoint;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Raw
     */
     protected $contactPoints;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $duns;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $email;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $employee;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Raw
     */
     protected $employees;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $event;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Raw
     */
     protected $events;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $faxNumber;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $founder;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Raw
     */
     protected $founders;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $foundingDate;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $globalLocationNumber;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $hasPOS;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $interactionCount;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $isicV4;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $legalName;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $location;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $logo;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $makesOffer;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $member;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Raw
     */
     protected $members;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $naics;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $owns;

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
     protected $seeks;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $taxID;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $telephone;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $vatID;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $tickerSymbol;
}
