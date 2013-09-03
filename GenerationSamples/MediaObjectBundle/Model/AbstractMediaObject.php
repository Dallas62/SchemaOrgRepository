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

namespace SchemaRepository\Bundle\MediaObjectBundle\Model;

use SchemaRepository\Bundle\MediaObjectBundle\Model\MediaObjectInterface;
use SchemaRepository\Bundle\CreativeWorkBundle\Model\AbstractCreativeWork;

/**
 * Model of Media Object
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MediaObjectBundle\Model
 */
abstract class AbstractMediaObject extends AbstractCreativeWork implements MediaObjectInterface
{

    /**
     * A NewsArticle associated with the Media Object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $associatedArticle;

    /**
     * The bitrate of the media object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $bitrate;

    /**
     * File size in (mega/kilo) bytes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $contentSize;

    /**
     * Actual bytes of the media object, for example the image file or video
     * file. (previous spelling: contentURL)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $contentUrl;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO
     * 8601 date format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $duration;

    /**
     * A URL pointing to a player for a specific video. In general, this is
     * the information in the src element of an embed tag and should not be
     * the same as the content of the loc tag. (previous spelling: embedURL)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $embedUrl;

    /**
     * The creative work encoded by this media object
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $encodesCreativeWork;

    /**
     * mp3, mpeg4, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $encodingFormat;

    /**
     * Date the content expires and is no longer useful or available. Useful
     * for videos.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $expires;

    /**
     * The height of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $height;

    /**
     * Player type required—for example, Flash or Silverlight.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $playerType;

    /**
     * The regions where the media is allowed. If not specified, then it's
     * assumed to be allowed everywhere. Specify the countries in ISO 3166
     * format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $regionsAllowed;

    /**
     * Indicates if use of the media require a subscription  (either paid or
     * free). Allowed values are true or false (note that an earlier version
     * had 'yes', 'no').
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var bool
     */
    protected $requiresSubscription;

    /**
     * Date when this media object was uploaded to this site.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $uploadDate;

    /**
     * The width of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $width;

    /**
     * Getter of Associated Article
     * 
     * A NewsArticle associated with the Media Object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAssociatedArticle()
    {
        return $this->associatedArticle;
    }

    /**
     * Setter of Associated Article
     * 
     * A NewsArticle associated with the Media Object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of associatedArticle
     */
    public function setAssociatedArticle($value)
    {
        $this->associatedArticle = $value;
    }

    /**
     * Getter of Bitrate
     * 
     * The bitrate of the media object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getBitrate()
    {
        return $this->bitrate;
    }

    /**
     * Setter of Bitrate
     * 
     * The bitrate of the media object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of bitrate
     */
    public function setBitrate($value)
    {
        $this->bitrate = $value;
    }

    /**
     * Getter of Content Size
     * 
     * File size in (mega/kilo) bytes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getContentSize()
    {
        return $this->contentSize;
    }

    /**
     * Setter of Content Size
     * 
     * File size in (mega/kilo) bytes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of contentSize
     */
    public function setContentSize($value)
    {
        $this->contentSize = $value;
    }

    /**
     * Getter of Content Url
     * 
     * Actual bytes of the media object, for example the image file or video
     * file. (previous spelling: contentURL)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getContentUrl()
    {
        return $this->contentUrl;
    }

    /**
     * Setter of Content Url
     * 
     * Actual bytes of the media object, for example the image file or video
     * file. (previous spelling: contentURL)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of contentUrl
     */
    public function setContentUrl($value)
    {
        $this->contentUrl = $value;
    }

    /**
     * Getter of Duration
     * 
     * The duration of the item (movie, audio recording, event, etc.) in ISO
     * 8601 date format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Setter of Duration
     * 
     * The duration of the item (movie, audio recording, event, etc.) in ISO
     * 8601 date format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of duration
     */
    public function setDuration($value)
    {
        $this->duration = $value;
    }

    /**
     * Getter of Embed Url
     * 
     * A URL pointing to a player for a specific video. In general, this is
     * the information in the src element of an embed tag and should not be
     * the same as the content of the loc tag. (previous spelling: embedURL)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getEmbedUrl()
    {
        return $this->embedUrl;
    }

    /**
     * Setter of Embed Url
     * 
     * A URL pointing to a player for a specific video. In general, this is
     * the information in the src element of an embed tag and should not be
     * the same as the content of the loc tag. (previous spelling: embedURL)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of embedUrl
     */
    public function setEmbedUrl($value)
    {
        $this->embedUrl = $value;
    }

    /**
     * Getter of Encodes Creative Work
     * 
     * The creative work encoded by this media object
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEncodesCreativeWork()
    {
        return $this->encodesCreativeWork;
    }

    /**
     * Setter of Encodes Creative Work
     * 
     * The creative work encoded by this media object
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of encodesCreativeWork
     */
    public function setEncodesCreativeWork($value)
    {
        $this->encodesCreativeWork = $value;
    }

    /**
     * Getter of Encoding Format
     * 
     * mp3, mpeg4, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getEncodingFormat()
    {
        return $this->encodingFormat;
    }

    /**
     * Setter of Encoding Format
     * 
     * mp3, mpeg4, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of encodingFormat
     */
    public function setEncodingFormat($value)
    {
        $this->encodingFormat = $value;
    }

    /**
     * Getter of Expires
     * 
     * Date the content expires and is no longer useful or available. Useful
     * for videos.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Setter of Expires
     * 
     * Date the content expires and is no longer useful or available. Useful
     * for videos.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of expires
     */
    public function setExpires($value)
    {
        $this->expires = $value;
    }

    /**
     * Getter of Height
     * 
     * The height of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Setter of Height
     * 
     * The height of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of height
     */
    public function setHeight($value)
    {
        $this->height = $value;
    }

    /**
     * Getter of Player Type
     * 
     * Player type required—for example, Flash or Silverlight.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPlayerType()
    {
        return $this->playerType;
    }

    /**
     * Setter of Player Type
     * 
     * Player type required—for example, Flash or Silverlight.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of playerType
     */
    public function setPlayerType($value)
    {
        $this->playerType = $value;
    }

    /**
     * Getter of Regions Allowed
     * 
     * The regions where the media is allowed. If not specified, then it's
     * assumed to be allowed everywhere. Specify the countries in ISO 3166
     * format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRegionsAllowed()
    {
        return $this->regionsAllowed;
    }

    /**
     * Setter of Regions Allowed
     * 
     * The regions where the media is allowed. If not specified, then it's
     * assumed to be allowed everywhere. Specify the countries in ISO 3166
     * format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of regionsAllowed
     */
    public function setRegionsAllowed($value)
    {
        $this->regionsAllowed = $value;
    }

    /**
     * Getter of Requires Subscription
     * 
     * Indicates if use of the media require a subscription  (either paid or
     * free). Allowed values are true or false (note that an earlier version
     * had 'yes', 'no').
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return bool
     */
    public function getRequiresSubscription()
    {
        return $this->requiresSubscription;
    }

    /**
     * Setter of Requires Subscription
     * 
     * Indicates if use of the media require a subscription  (either paid or
     * free). Allowed values are true or false (note that an earlier version
     * had 'yes', 'no').
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param bool $value Value of requiresSubscription
     */
    public function setRequiresSubscription($value)
    {
        $this->requiresSubscription = $value;
    }

    /**
     * Getter of Upload Date
     * 
     * Date when this media object was uploaded to this site.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getUploadDate()
    {
        return $this->uploadDate;
    }

    /**
     * Setter of Upload Date
     * 
     * Date when this media object was uploaded to this site.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of uploadDate
     */
    public function setUploadDate($value)
    {
        $this->uploadDate = $value;
    }

    /**
     * Getter of Width
     * 
     * The width of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Setter of Width
     * 
     * The width of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of width
     */
    public function setWidth($value)
    {
        $this->width = $value;
    }
}
