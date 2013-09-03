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

namespace SchemaRepository\Bundle\ExercisePlanBundle\Document;

use SchemaRepository\Bundle\ExercisePlanBundle\Model\AbstractExercisePlan;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Exercise Plan Document
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractExercisePlan extends AbstractExercisePlan
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
     protected $alternateName;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $code;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $guideline;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $medicineSystem;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $recognizingAuthority;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $relevantSpecialty;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $study;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $adverseOutcome;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $contraindication;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $duplicateTherapy;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $indication;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $seriousAdverseOutcome;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $associatedAnatomy;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $category;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $epidemiology;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $pathophysiology;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $about;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $accountablePerson;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $aggregateRating;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $alternativeHeadline;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $associatedMedia;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $audience;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $audio;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $author;

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
     protected $citation;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $comment;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $contentLocation;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $contentRating;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $contributor;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $copyrightHolder;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $copyrightYear;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $creator;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $dateCreated;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $dateModified;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $datePublished;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $discussionUrl;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $editor;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $educationalAlignment;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $educationalUse;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $encoding;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Raw
     */
     protected $encodings;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $genre;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $headline;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $inLanguage;

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
     protected $interactivityType;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $isBasedOnUrl;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $isFamilyFriendly;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $keywords;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $learningResourceType;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $mentions;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $offers;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $provider;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $publisher;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $publishingPrinciples;

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
     protected $sourceOrganization;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $text;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $thumbnailUrl;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $timeRequired;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $typicalAgeRange;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $version;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $video;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $activityDuration;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $activityFrequency;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $additionalVariable;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $exerciseType;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $intensity;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $repetitions;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $restPeriods;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $workload;
}
