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

use SchemaRepository\Bundle\CreativeWorkBundle\Model\CreativeWorkInterface;

/**
 * Interface of Media Object Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MediaObjectBundle\Model
 */
interface MediaObjectInterface extends CreativeWorkInterface
{

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
    public function getAssociatedArticle();

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
    public function getBitrate();

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
    public function getContentSize();

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
    public function getContentUrl();

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
    public function getDuration();

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
    public function getEmbedUrl();

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
    public function getEncodesCreativeWork();

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
    public function getEncodingFormat();

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
    public function getExpires();

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
    public function getHeight();

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
    public function getPlayerType();

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
    public function getRegionsAllowed();

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
    public function getRequiresSubscription();

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
    public function getUploadDate();

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
    public function getWidth();
}
