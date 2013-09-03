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

namespace SchemaRepository\Bundle\VideoObjectBundle\Model;

use SchemaRepository\Bundle\VideoObjectBundle\Model\VideoObjectInterface;
use SchemaRepository\Bundle\MediaObjectBundle\Model\AbstractMediaObject;

/**
 * Model of Video Object
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\VideoObjectBundle\Model
 */
abstract class AbstractVideoObject extends AbstractMediaObject implements VideoObjectInterface
{

    /**
     * The caption for this object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $caption;

    /**
     * The production company or studio that made the movie, TV series,
     * season, or episode, or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $productionCompany;

    /**
     * Thumbnail image for an image or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $thumbnail;

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript
     * of that object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $transcript;

    /**
     * The frame size of the video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $videoFrameSize;

    /**
     * The quality of the video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $videoQuality;

    /**
     * Getter of Caption
     * 
     * The caption for this object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Setter of Caption
     * 
     * The caption for this object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of caption
     */
    public function setCaption($value)
    {
        $this->caption = $value;
    }

    /**
     * Getter of Production Company
     * 
     * The production company or studio that made the movie, TV series,
     * season, or episode, or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getProductionCompany()
    {
        return $this->productionCompany;
    }

    /**
     * Setter of Production Company
     * 
     * The production company or studio that made the movie, TV series,
     * season, or episode, or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of productionCompany
     */
    public function setProductionCompany($value)
    {
        $this->productionCompany = $value;
    }

    /**
     * Getter of Thumbnail
     * 
     * Thumbnail image for an image or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Setter of Thumbnail
     * 
     * Thumbnail image for an image or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of thumbnail
     */
    public function setThumbnail($value)
    {
        $this->thumbnail = $value;
    }

    /**
     * Getter of Transcript
     * 
     * If this MediaObject is an AudioObject or VideoObject, the transcript
     * of that object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTranscript()
    {
        return $this->transcript;
    }

    /**
     * Setter of Transcript
     * 
     * If this MediaObject is an AudioObject or VideoObject, the transcript
     * of that object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of transcript
     */
    public function setTranscript($value)
    {
        $this->transcript = $value;
    }

    /**
     * Getter of Video Frame Size
     * 
     * The frame size of the video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getVideoFrameSize()
    {
        return $this->videoFrameSize;
    }

    /**
     * Setter of Video Frame Size
     * 
     * The frame size of the video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of videoFrameSize
     */
    public function setVideoFrameSize($value)
    {
        $this->videoFrameSize = $value;
    }

    /**
     * Getter of Video Quality
     * 
     * The quality of the video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getVideoQuality()
    {
        return $this->videoQuality;
    }

    /**
     * Setter of Video Quality
     * 
     * The quality of the video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of videoQuality
     */
    public function setVideoQuality($value)
    {
        $this->videoQuality = $value;
    }
}
