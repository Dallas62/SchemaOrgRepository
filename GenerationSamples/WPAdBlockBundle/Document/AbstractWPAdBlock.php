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

namespace SchemaRepository\Bundle\WPAdBlockBundle\Document;

use SchemaRepository\Bundle\WPAdBlockBundle\Model\AbstractWPAdBlock;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * WP Ad Block Document
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractWPAdBlock extends AbstractWPAdBlock
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
}
