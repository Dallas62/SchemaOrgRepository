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

namespace SchemaRepository\Bundle\CreativeWorkBundle\Model;

use SchemaRepository\Bundle\CreativeWorkBundle\Model\CreativeWorkInterface;
use SchemaRepository\Bundle\ThingBundle\Model\AbstractThing;

/**
 * Model of Creative Work
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\CreativeWorkBundle\Model
 */
abstract class AbstractCreativeWork extends AbstractThing implements CreativeWorkInterface
{

    /**
     * The subject matter of the content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $about;

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $accountablePerson;

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
     * A secondary title of the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $alternativeHeadline;

    /**
     * The media objects that encode this creative work. This property is a
     * synonym for encodings.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $associatedMedia;

    /**
     * The intended audience of the item, i.e. the group for whom the item
     * was created.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $audience;

    /**
     * An embedded audio object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $audio;

    /**
     * The author of this content. Please note that author is special in that
     * HTML 5 provides a special mechanism for indicating authorship via the
     * rel tag. That is equivalent to this and may be used interchangeably.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $author;

    /**
     * An award won by this person or for this creative work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $award;

    /**
     * Awards won by this person or for this creative work. (legacy spelling;
     * see singular form, award)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $awards;

    /**
     * A citation or reference to another creative work, such as another
     * publication, web page, scholarly article, etc. NOTE: Candidate for
     * promotion to ScholarlyArticle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $citation;

    /**
     * Comments, typically from users, on this CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $comment;

    /**
     * The location of the content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $contentLocation;

    /**
     * Official rating of a piece of content—for example,'MPAA PG-13'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $contentRating;

    /**
     * A secondary contributor to the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $contributor;

    /**
     * The party holding the legal copyright to the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $copyrightHolder;

    /**
     * The year during which the claimed copyright for the CreativeWork was
     * first asserted.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $copyrightYear;

    /**
     * The creator/author of this CreativeWork or UserComments. This is the
     * same as the Author property for CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $creator;

    /**
     * The date on which the CreativeWork was created.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $dateCreated;

    /**
     * The date on which the CreativeWork was most recently modified.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $dateModified;

    /**
     * Date of first broadcast/publication.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $datePublished;

    /**
     * A link to the page containing the comments of the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $discussionUrl;

    /**
     * Specifies the Person who edited the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $editor;

    /**
     * An alignment to an established educational framework.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $educationalAlignment;

    /**
     * The purpose of a work in the context of education; for example,
     * 'assignment', 'group work'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $educationalUse;

    /**
     * A media object that encode this CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $encoding;

    /**
     * The media objects that encode this creative work (legacy spelling; see
     * singular form, encoding).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $encodings;

    /**
     * Genre of the creative work
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $genre;

    /**
     * Headline of the article
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $headline;

    /**
     * The language of the content. please use one of the language codes from
     * the IETF BCP 47 standard.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $inLanguage;

    /**
     * A count of a specific user interactions with this item—for example,
     * 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user
     * interaction type should be one of the sub types of UserInteraction.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $interactionCount;

    /**
     * The predominant mode of learning supported by the learning resource.
     * Acceptable values are 'active', 'expositive', or 'mixed'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $interactivityType;

    /**
     * A resource that was used in the creation of this resource. This term
     * can be repeated for multiple sources. For example,
     * http://example.com/great-multiplication-intro.html
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $isBasedOnUrl;

    /**
     * Indicates whether this content is family friendly.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var bool
     */
    protected $isFamilyFriendly;

    /**
     * The keywords/tags used to describe this content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $keywords;

    /**
     * The predominant type or kind characterizing the learning resource. For
     * example, 'presentation', 'handout'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $learningResourceType;

    /**
     * Indicates that the CreativeWork contains a reference to, but is not
     * necessarily about a concept.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $mentions;

    /**
     * An offer to sell this item—for example, an offer to sell a product,
     * the DVD of a movie, or tickets to an event.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $offers;

    /**
     * Specifies the Person or Organization that distributed the
     * CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $provider;

    /**
     * The publisher of the creative work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $publisher;

    /**
     * Link to page describing the editorial principles of the organization
     * primarily responsible for the creation of the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $publishingPrinciples;

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
     * The Organization on whose behalf the creator was working.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $sourceOrganization;

    /**
     * The textual content of this CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $text;

    /**
     * A thumbnail image relevant to the Thing.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $thumbnailUrl;

    /**
     * Approximate or typical time it takes to work with or through this
     * learning resource for the typical intended target audience, e.g.
     * 'P30M', 'P1H25M'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $timeRequired;

    /**
     * The typical range of ages the content's intendedEndUser, for example
     * '7-9', '11-'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $typicalAgeRange;

    /**
     * The version of the CreativeWork embodied by a specified resource.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $version;

    /**
     * An embedded video object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $video;

    /**
     * Getter of About
     * 
     * The subject matter of the content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Setter of About
     * 
     * The subject matter of the content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of about
     */
    public function setAbout($value)
    {
        $this->about = $value;
    }

    /**
     * Getter of Accountable Person
     * 
     * Specifies the Person that is legally accountable for the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAccountablePerson()
    {
        return $this->accountablePerson;
    }

    /**
     * Setter of Accountable Person
     * 
     * Specifies the Person that is legally accountable for the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of accountablePerson
     */
    public function setAccountablePerson($value)
    {
        $this->accountablePerson = $value;
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
     * Getter of Alternative Headline
     * 
     * A secondary title of the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAlternativeHeadline()
    {
        return $this->alternativeHeadline;
    }

    /**
     * Setter of Alternative Headline
     * 
     * A secondary title of the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of alternativeHeadline
     */
    public function setAlternativeHeadline($value)
    {
        $this->alternativeHeadline = $value;
    }

    /**
     * Getter of Associated Media
     * 
     * The media objects that encode this creative work. This property is a
     * synonym for encodings.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAssociatedMedia()
    {
        return $this->associatedMedia;
    }

    /**
     * Setter of Associated Media
     * 
     * The media objects that encode this creative work. This property is a
     * synonym for encodings.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of associatedMedia
     */
    public function setAssociatedMedia($value)
    {
        $this->associatedMedia = $value;
    }

    /**
     * Getter of Audience
     * 
     * The intended audience of the item, i.e. the group for whom the item
     * was created.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Setter of Audience
     * 
     * The intended audience of the item, i.e. the group for whom the item
     * was created.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of audience
     */
    public function setAudience($value)
    {
        $this->audience = $value;
    }

    /**
     * Getter of Audio
     * 
     * An embedded audio object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * Setter of Audio
     * 
     * An embedded audio object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of audio
     */
    public function setAudio($value)
    {
        $this->audio = $value;
    }

    /**
     * Getter of Author
     * 
     * The author of this content. Please note that author is special in that
     * HTML 5 provides a special mechanism for indicating authorship via the
     * rel tag. That is equivalent to this and may be used interchangeably.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Setter of Author
     * 
     * The author of this content. Please note that author is special in that
     * HTML 5 provides a special mechanism for indicating authorship via the
     * rel tag. That is equivalent to this and may be used interchangeably.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of author
     */
    public function setAuthor($value)
    {
        $this->author = $value;
    }

    /**
     * Getter of Award
     * 
     * An award won by this person or for this creative work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * Setter of Award
     * 
     * An award won by this person or for this creative work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of award
     */
    public function setAward($value)
    {
        $this->award = $value;
    }

    /**
     * Getter of Awards
     * 
     * Awards won by this person or for this creative work. (legacy spelling;
     * see singular form, award)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * Setter of Awards
     * 
     * Awards won by this person or for this creative work. (legacy spelling;
     * see singular form, award)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of awards
     */
    public function setAwards($value)
    {
        $this->awards = $value;
    }

    /**
     * Getter of Citation
     * 
     * A citation or reference to another creative work, such as another
     * publication, web page, scholarly article, etc. NOTE: Candidate for
     * promotion to ScholarlyArticle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCitation()
    {
        return $this->citation;
    }

    /**
     * Setter of Citation
     * 
     * A citation or reference to another creative work, such as another
     * publication, web page, scholarly article, etc. NOTE: Candidate for
     * promotion to ScholarlyArticle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of citation
     */
    public function setCitation($value)
    {
        $this->citation = $value;
    }

    /**
     * Getter of Comment
     * 
     * Comments, typically from users, on this CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Setter of Comment
     * 
     * Comments, typically from users, on this CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of comment
     */
    public function setComment($value)
    {
        $this->comment = $value;
    }

    /**
     * Getter of Content Location
     * 
     * The location of the content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getContentLocation()
    {
        return $this->contentLocation;
    }

    /**
     * Setter of Content Location
     * 
     * The location of the content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of contentLocation
     */
    public function setContentLocation($value)
    {
        $this->contentLocation = $value;
    }

    /**
     * Getter of Content Rating
     * 
     * Official rating of a piece of content—for example,'MPAA PG-13'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getContentRating()
    {
        return $this->contentRating;
    }

    /**
     * Setter of Content Rating
     * 
     * Official rating of a piece of content—for example,'MPAA PG-13'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of contentRating
     */
    public function setContentRating($value)
    {
        $this->contentRating = $value;
    }

    /**
     * Getter of Contributor
     * 
     * A secondary contributor to the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Setter of Contributor
     * 
     * A secondary contributor to the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of contributor
     */
    public function setContributor($value)
    {
        $this->contributor = $value;
    }

    /**
     * Getter of Copyright Holder
     * 
     * The party holding the legal copyright to the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCopyrightHolder()
    {
        return $this->copyrightHolder;
    }

    /**
     * Setter of Copyright Holder
     * 
     * The party holding the legal copyright to the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of copyrightHolder
     */
    public function setCopyrightHolder($value)
    {
        $this->copyrightHolder = $value;
    }

    /**
     * Getter of Copyright Year
     * 
     * The year during which the claimed copyright for the CreativeWork was
     * first asserted.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getCopyrightYear()
    {
        return $this->copyrightYear;
    }

    /**
     * Setter of Copyright Year
     * 
     * The year during which the claimed copyright for the CreativeWork was
     * first asserted.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of copyrightYear
     */
    public function setCopyrightYear($value)
    {
        $this->copyrightYear = $value;
    }

    /**
     * Getter of Creator
     * 
     * The creator/author of this CreativeWork or UserComments. This is the
     * same as the Author property for CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Setter of Creator
     * 
     * The creator/author of this CreativeWork or UserComments. This is the
     * same as the Author property for CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of creator
     */
    public function setCreator($value)
    {
        $this->creator = $value;
    }

    /**
     * Getter of Date Created
     * 
     * The date on which the CreativeWork was created.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Setter of Date Created
     * 
     * The date on which the CreativeWork was created.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of dateCreated
     */
    public function setDateCreated($value)
    {
        $this->dateCreated = $value;
    }

    /**
     * Getter of Date Modified
     * 
     * The date on which the CreativeWork was most recently modified.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Setter of Date Modified
     * 
     * The date on which the CreativeWork was most recently modified.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of dateModified
     */
    public function setDateModified($value)
    {
        $this->dateModified = $value;
    }

    /**
     * Getter of Date Published
     * 
     * Date of first broadcast/publication.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }

    /**
     * Setter of Date Published
     * 
     * Date of first broadcast/publication.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of datePublished
     */
    public function setDatePublished($value)
    {
        $this->datePublished = $value;
    }

    /**
     * Getter of Discussion Url
     * 
     * A link to the page containing the comments of the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getDiscussionUrl()
    {
        return $this->discussionUrl;
    }

    /**
     * Setter of Discussion Url
     * 
     * A link to the page containing the comments of the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of discussionUrl
     */
    public function setDiscussionUrl($value)
    {
        $this->discussionUrl = $value;
    }

    /**
     * Getter of Editor
     * 
     * Specifies the Person who edited the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Setter of Editor
     * 
     * Specifies the Person who edited the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of editor
     */
    public function setEditor($value)
    {
        $this->editor = $value;
    }

    /**
     * Getter of Educational Alignment
     * 
     * An alignment to an established educational framework.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEducationalAlignment()
    {
        return $this->educationalAlignment;
    }

    /**
     * Setter of Educational Alignment
     * 
     * An alignment to an established educational framework.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of educationalAlignment
     */
    public function setEducationalAlignment($value)
    {
        $this->educationalAlignment = $value;
    }

    /**
     * Getter of Educational Use
     * 
     * The purpose of a work in the context of education; for example,
     * 'assignment', 'group work'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getEducationalUse()
    {
        return $this->educationalUse;
    }

    /**
     * Setter of Educational Use
     * 
     * The purpose of a work in the context of education; for example,
     * 'assignment', 'group work'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of educationalUse
     */
    public function setEducationalUse($value)
    {
        $this->educationalUse = $value;
    }

    /**
     * Getter of Encoding
     * 
     * A media object that encode this CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Setter of Encoding
     * 
     * A media object that encode this CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of encoding
     */
    public function setEncoding($value)
    {
        $this->encoding = $value;
    }

    /**
     * Getter of Encodings
     * 
     * The media objects that encode this creative work (legacy spelling; see
     * singular form, encoding).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getEncodings()
    {
        return $this->encodings;
    }

    /**
     * Setter of Encodings
     * 
     * The media objects that encode this creative work (legacy spelling; see
     * singular form, encoding).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of encodings
     */
    public function setEncodings($value)
    {
        $this->encodings = $value;
    }

    /*
     * Add encoding to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of encoding
     */
    public function addEncoding($value)
    {
        $this->encodings[] = $value;
    }

    /*
     * Remove encoding to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of encoding
     */
    public function removeEncoding($value)
    {
        $key = array_search($value, $this->encodings);
        if($key !== false) {
           unset($this->encodings[$key]);
        }
    }

    /**
     * Getter of Genre
     * 
     * Genre of the creative work
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Setter of Genre
     * 
     * Genre of the creative work
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of genre
     */
    public function setGenre($value)
    {
        $this->genre = $value;
    }

    /**
     * Getter of Headline
     * 
     * Headline of the article
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Setter of Headline
     * 
     * Headline of the article
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of headline
     */
    public function setHeadline($value)
    {
        $this->headline = $value;
    }

    /**
     * Getter of In Language
     * 
     * The language of the content. please use one of the language codes from
     * the IETF BCP 47 standard.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }

    /**
     * Setter of In Language
     * 
     * The language of the content. please use one of the language codes from
     * the IETF BCP 47 standard.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of inLanguage
     */
    public function setInLanguage($value)
    {
        $this->inLanguage = $value;
    }

    /**
     * Getter of Interaction Count
     * 
     * A count of a specific user interactions with this item—for example,
     * 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user
     * interaction type should be one of the sub types of UserInteraction.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getInteractionCount()
    {
        return $this->interactionCount;
    }

    /**
     * Setter of Interaction Count
     * 
     * A count of a specific user interactions with this item—for example,
     * 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user
     * interaction type should be one of the sub types of UserInteraction.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of interactionCount
     */
    public function setInteractionCount($value)
    {
        $this->interactionCount = $value;
    }

    /**
     * Getter of Interactivity Type
     * 
     * The predominant mode of learning supported by the learning resource.
     * Acceptable values are 'active', 'expositive', or 'mixed'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getInteractivityType()
    {
        return $this->interactivityType;
    }

    /**
     * Setter of Interactivity Type
     * 
     * The predominant mode of learning supported by the learning resource.
     * Acceptable values are 'active', 'expositive', or 'mixed'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of interactivityType
     */
    public function setInteractivityType($value)
    {
        $this->interactivityType = $value;
    }

    /**
     * Getter of Is Based On Url
     * 
     * A resource that was used in the creation of this resource. This term
     * can be repeated for multiple sources. For example,
     * http://example.com/great-multiplication-intro.html
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getIsBasedOnUrl()
    {
        return $this->isBasedOnUrl;
    }

    /**
     * Setter of Is Based On Url
     * 
     * A resource that was used in the creation of this resource. This term
     * can be repeated for multiple sources. For example,
     * http://example.com/great-multiplication-intro.html
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of isBasedOnUrl
     */
    public function setIsBasedOnUrl($value)
    {
        $this->isBasedOnUrl = $value;
    }

    /**
     * Getter of Is Family Friendly
     * 
     * Indicates whether this content is family friendly.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return bool
     */
    public function getIsFamilyFriendly()
    {
        return $this->isFamilyFriendly;
    }

    /**
     * Setter of Is Family Friendly
     * 
     * Indicates whether this content is family friendly.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param bool $value Value of isFamilyFriendly
     */
    public function setIsFamilyFriendly($value)
    {
        $this->isFamilyFriendly = $value;
    }

    /**
     * Getter of Keywords
     * 
     * The keywords/tags used to describe this content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Setter of Keywords
     * 
     * The keywords/tags used to describe this content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of keywords
     */
    public function setKeywords($value)
    {
        $this->keywords = $value;
    }

    /**
     * Getter of Learning Resource Type
     * 
     * The predominant type or kind characterizing the learning resource. For
     * example, 'presentation', 'handout'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getLearningResourceType()
    {
        return $this->learningResourceType;
    }

    /**
     * Setter of Learning Resource Type
     * 
     * The predominant type or kind characterizing the learning resource. For
     * example, 'presentation', 'handout'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of learningResourceType
     */
    public function setLearningResourceType($value)
    {
        $this->learningResourceType = $value;
    }

    /**
     * Getter of Mentions
     * 
     * Indicates that the CreativeWork contains a reference to, but is not
     * necessarily about a concept.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getMentions()
    {
        return $this->mentions;
    }

    /**
     * Setter of Mentions
     * 
     * Indicates that the CreativeWork contains a reference to, but is not
     * necessarily about a concept.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of mentions
     */
    public function setMentions($value)
    {
        $this->mentions = $value;
    }

    /**
     * Getter of Offers
     * 
     * An offer to sell this item—for example, an offer to sell a product,
     * the DVD of a movie, or tickets to an event.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * Setter of Offers
     * 
     * An offer to sell this item—for example, an offer to sell a product,
     * the DVD of a movie, or tickets to an event.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of offers
     */
    public function setOffers($value)
    {
        $this->offers = $value;
    }

    /**
     * Getter of Provider
     * 
     * Specifies the Person or Organization that distributed the
     * CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Setter of Provider
     * 
     * Specifies the Person or Organization that distributed the
     * CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of provider
     */
    public function setProvider($value)
    {
        $this->provider = $value;
    }

    /**
     * Getter of Publisher
     * 
     * The publisher of the creative work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Setter of Publisher
     * 
     * The publisher of the creative work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of publisher
     */
    public function setPublisher($value)
    {
        $this->publisher = $value;
    }

    /**
     * Getter of Publishing Principles
     * 
     * Link to page describing the editorial principles of the organization
     * primarily responsible for the creation of the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPublishingPrinciples()
    {
        return $this->publishingPrinciples;
    }

    /**
     * Setter of Publishing Principles
     * 
     * Link to page describing the editorial principles of the organization
     * primarily responsible for the creation of the CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of publishingPrinciples
     */
    public function setPublishingPrinciples($value)
    {
        $this->publishingPrinciples = $value;
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

    /*
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

    /*
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
     * Getter of Source Organization
     * 
     * The Organization on whose behalf the creator was working.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSourceOrganization()
    {
        return $this->sourceOrganization;
    }

    /**
     * Setter of Source Organization
     * 
     * The Organization on whose behalf the creator was working.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of sourceOrganization
     */
    public function setSourceOrganization($value)
    {
        $this->sourceOrganization = $value;
    }

    /**
     * Getter of Text
     * 
     * The textual content of this CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Setter of Text
     * 
     * The textual content of this CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of text
     */
    public function setText($value)
    {
        $this->text = $value;
    }

    /**
     * Getter of Thumbnail Url
     * 
     * A thumbnail image relevant to the Thing.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->thumbnailUrl;
    }

    /**
     * Setter of Thumbnail Url
     * 
     * A thumbnail image relevant to the Thing.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of thumbnailUrl
     */
    public function setThumbnailUrl($value)
    {
        $this->thumbnailUrl = $value;
    }

    /**
     * Getter of Time Required
     * 
     * Approximate or typical time it takes to work with or through this
     * learning resource for the typical intended target audience, e.g.
     * 'P30M', 'P1H25M'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getTimeRequired()
    {
        return $this->timeRequired;
    }

    /**
     * Setter of Time Required
     * 
     * Approximate or typical time it takes to work with or through this
     * learning resource for the typical intended target audience, e.g.
     * 'P30M', 'P1H25M'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of timeRequired
     */
    public function setTimeRequired($value)
    {
        $this->timeRequired = $value;
    }

    /**
     * Getter of Typical Age Range
     * 
     * The typical range of ages the content's intendedEndUser, for example
     * '7-9', '11-'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTypicalAgeRange()
    {
        return $this->typicalAgeRange;
    }

    /**
     * Setter of Typical Age Range
     * 
     * The typical range of ages the content's intendedEndUser, for example
     * '7-9', '11-'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of typicalAgeRange
     */
    public function setTypicalAgeRange($value)
    {
        $this->typicalAgeRange = $value;
    }

    /**
     * Getter of Version
     * 
     * The version of the CreativeWork embodied by a specified resource.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Setter of Version
     * 
     * The version of the CreativeWork embodied by a specified resource.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of version
     */
    public function setVersion($value)
    {
        $this->version = $value;
    }

    /**
     * Getter of Video
     * 
     * An embedded video object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Setter of Video
     * 
     * An embedded video object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of video
     */
    public function setVideo($value)
    {
        $this->video = $value;
    }
}
