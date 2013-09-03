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

namespace SchemaRepository\Bundle\WebApplicationBundle\Entity;

use SchemaRepository\Bundle\WebApplicationBundle\Model\AbstractWebApplication;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Web Application Entity
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractWebApplication extends AbstractWebApplication
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
     * @ORM\Column(name="about", type="string", nullable=true)
     */
     protected $about;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="accountable_person", type="string", nullable=true)
     */
     protected $accountablePerson;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="aggregate_rating", type="string", nullable=true)
     */
     protected $aggregateRating;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="alternative_headline", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $alternativeHeadline;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="associated_media", type="string", nullable=true)
     */
     protected $associatedMedia;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="audience", type="string", nullable=true)
     */
     protected $audience;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="audio", type="string", nullable=true)
     */
     protected $audio;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="author", type="string", nullable=true)
     */
     protected $author;

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
     * @ORM\Column(name="citation", type="string", nullable=true)
     */
     protected $citation;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="comment", type="string", nullable=true)
     */
     protected $comment;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="content_location", type="string", nullable=true)
     */
     protected $contentLocation;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="content_rating", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $contentRating;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="contributor", type="string", nullable=true)
     */
     protected $contributor;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="copyright_holder", type="string", nullable=true)
     */
     protected $copyrightHolder;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="copyright_year", type="float", nullable=true)
     */
     protected $copyrightYear;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="creator", type="string", nullable=true)
     */
     protected $creator;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="date_created", type="string", nullable=true)
     */
     protected $dateCreated;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="date_modified", type="string", nullable=true)
     */
     protected $dateModified;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="date_published", type="string", nullable=true)
     */
     protected $datePublished;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="discussion_url", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $discussionUrl;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="editor", type="string", nullable=true)
     */
     protected $editor;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="educational_alignment", type="string", nullable=true)
     */
     protected $educationalAlignment;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="educational_use", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $educationalUse;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="encoding", type="string", nullable=true)
     */
     protected $encoding;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="encodings", type="array", nullable=true)
     */
     protected $encodings;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="genre", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $genre;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="headline", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $headline;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="in_language", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $inLanguage;

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
     * @ORM\Column(name="interactivity_type", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $interactivityType;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="is_based_on_url", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $isBasedOnUrl;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="is_family_friendly", type="boolean", nullable=true)
     */
     protected $isFamilyFriendly;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="keywords", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $keywords;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="learning_resource_type", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $learningResourceType;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="mentions", type="string", nullable=true)
     */
     protected $mentions;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="offers", type="string", nullable=true)
     */
     protected $offers;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="provider", type="string", nullable=true)
     */
     protected $provider;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="publisher", type="string", nullable=true)
     */
     protected $publisher;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="publishing_principles", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $publishingPrinciples;

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
     * @ORM\Column(name="source_organization", type="string", nullable=true)
     */
     protected $sourceOrganization;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="text", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $text;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="thumbnail_url", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $thumbnailUrl;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="time_required", type="string", nullable=true)
     */
     protected $timeRequired;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="typical_age_range", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $typicalAgeRange;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="version", type="float", nullable=true)
     */
     protected $version;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="video", type="string", nullable=true)
     */
     protected $video;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="application_category", type="string", nullable=true)
     */
     protected $applicationCategory;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="application_sub_category", type="string", nullable=true)
     */
     protected $applicationSubCategory;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="application_suite", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $applicationSuite;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="countries_not_supported", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $countriesNotSupported;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="countries_supported", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $countriesSupported;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="device", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $device;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="download_url", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $downloadUrl;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="feature_list", type="string", nullable=true)
     */
     protected $featureList;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="file_format", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $fileFormat;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="file_size", type="integer", nullable=true)
     */
     protected $fileSize;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="install_url", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $installUrl;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="memory_requirements", type="string", nullable=true)
     */
     protected $memoryRequirements;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="operating_system", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $operatingSystem;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="permissions", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $permissions;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="processor_requirements", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $processorRequirements;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="release_notes", type="string", nullable=true)
     */
     protected $releaseNotes;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="requirements", type="string", nullable=true)
     */
     protected $requirements;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="screenshot", type="string", nullable=true)
     */
     protected $screenshot;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="software_version", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $softwareVersion;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="storage_requirements", type="string", nullable=true)
     */
     protected $storageRequirements;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="browser_requirements", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $browserRequirements;
}
