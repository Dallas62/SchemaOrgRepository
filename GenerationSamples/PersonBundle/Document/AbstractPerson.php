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

namespace SchemaRepository\Bundle\PersonBundle\Document;

use SchemaRepository\Bundle\PersonBundle\Model\AbstractPerson;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Person Document
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractPerson extends AbstractPerson
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
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $additionalName;

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
     protected $affiliation;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $alumniOf;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $award;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $awards;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $birthDate;

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
     protected $children;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $colleague;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Raw
     */
     protected $colleagues;

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
     * @ODM\Field
     */
     protected $deathDate;

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
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $familyName;

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
     protected $follows;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $gender;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $givenName;

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
     * @ODM\Field
     */
     protected $homeLocation;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $honorificPrefix;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $honorificSuffix;

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
     protected $jobTitle;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $knows;

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
     protected $memberOf;

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
     protected $nationality;

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
     protected $parent;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Raw
     */
     protected $parents;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $performerIn;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $relatedTo;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $seeks;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $sibling;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Raw
     */
     protected $siblings;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $spouse;

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
     * @ODM\Field
     */
     protected $workLocation;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $worksFor;
}
