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

namespace SchemaRepository\Bundle\PersonBundle\Entity;

use SchemaRepository\Bundle\PersonBundle\Model\AbstractPerson;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Person Entity
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractPerson extends AbstractPerson
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
     * @ORM\Column(name="additional_name", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $additionalName;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="address", type="string", nullable=true)
     */
     protected $address;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="affiliation", type="string", nullable=true)
     */
     protected $affiliation;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="alumni_of", type="string", nullable=true)
     */
     protected $alumniOf;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="award", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $award;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="awards", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $awards;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="birth_date", type="string", nullable=true)
     */
     protected $birthDate;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="brand", type="string", nullable=true)
     */
     protected $brand;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="children", type="string", nullable=true)
     */
     protected $children;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="colleague", type="string", nullable=true)
     */
     protected $colleague;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="colleagues", type="array", nullable=true)
     */
     protected $colleagues;

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
     * @ORM\Column(name="death_date", type="string", nullable=true)
     */
     protected $deathDate;

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
     * @ORM\Column(name="family_name", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $familyName;

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
     * @ORM\Column(name="follows", type="string", nullable=true)
     */
     protected $follows;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="gender", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $gender;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="given_name", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $givenName;

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
     * @ORM\Column(name="has_pos", type="string", nullable=true)
     */
     protected $hasPOS;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="home_location", type="string", nullable=true)
     */
     protected $homeLocation;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="honorific_prefix", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $honorificPrefix;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="honorific_suffix", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $honorificSuffix;

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
     * @ORM\Column(name="job_title", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $jobTitle;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="knows", type="string", nullable=true)
     */
     protected $knows;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="makes_offer", type="string", nullable=true)
     */
     protected $makesOffer;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="member_of", type="string", nullable=true)
     */
     protected $memberOf;

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
     * @ORM\Column(name="nationality", type="string", nullable=true)
     */
     protected $nationality;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="owns", type="string", nullable=true)
     */
     protected $owns;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="parent", type="string", nullable=true)
     */
     protected $parent;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="parents", type="array", nullable=true)
     */
     protected $parents;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="performer_in", type="string", nullable=true)
     */
     protected $performerIn;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="related_to", type="string", nullable=true)
     */
     protected $relatedTo;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="seeks", type="string", nullable=true)
     */
     protected $seeks;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="sibling", type="string", nullable=true)
     */
     protected $sibling;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="siblings", type="array", nullable=true)
     */
     protected $siblings;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="spouse", type="string", nullable=true)
     */
     protected $spouse;

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
     * @ORM\Column(name="telephone", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $telephone;

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
     * @ORM\Column(name="work_location", type="string", nullable=true)
     */
     protected $workLocation;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="works_for", type="string", nullable=true)
     */
     protected $worksFor;
}
