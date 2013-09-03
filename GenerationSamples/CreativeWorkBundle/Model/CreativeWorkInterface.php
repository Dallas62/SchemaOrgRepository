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

use SchemaRepository\Bundle\ThingBundle\Model\ThingInterface;

/**
 * Interface of Creative Work Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\CreativeWorkBundle\Model
 */
interface CreativeWorkInterface extends ThingInterface
{

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
    public function getAbout();

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
    public function getAccountablePerson();

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
    public function getAggregateRating();

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
    public function getAlternativeHeadline();

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
    public function getAssociatedMedia();

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
    public function getAudience();

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
    public function getAudio();

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
    public function getAuthor();

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
    public function getAward();

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
    public function getAwards();

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
    public function getCitation();

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
    public function getComment();

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
    public function getContentLocation();

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
    public function getContentRating();

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
    public function getContributor();

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
    public function getCopyrightHolder();

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
    public function getCopyrightYear();

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
    public function getCreator();

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
    public function getDateCreated();

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
    public function getDateModified();

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
    public function getDatePublished();

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
    public function getDiscussionUrl();

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
    public function getEditor();

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
    public function getEducationalAlignment();

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
    public function getEducationalUse();

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
    public function getEncoding();

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
    public function getEncodings();

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
    public function getGenre();

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
    public function getHeadline();

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
    public function getInLanguage();

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
    public function getInteractionCount();

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
    public function getInteractivityType();

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
    public function getIsBasedOnUrl();

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
    public function getIsFamilyFriendly();

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
    public function getKeywords();

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
    public function getLearningResourceType();

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
    public function getMentions();

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
    public function getOffers();

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
    public function getProvider();

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
    public function getPublisher();

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
    public function getPublishingPrinciples();

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
    public function getReview();

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
    public function getReviews();

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
    public function getSourceOrganization();

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
    public function getText();

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
    public function getThumbnailUrl();

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
    public function getTimeRequired();

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
    public function getTypicalAgeRange();

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
    public function getVersion();

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
    public function getVideo();
}
