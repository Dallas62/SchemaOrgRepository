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

namespace SchemaRepository\Bundle\ImageObjectBundle\Model;

use SchemaRepository\Bundle\ImageObjectBundle\Model\ImageObjectInterface;
use SchemaRepository\Bundle\MediaObjectBundle\Model\AbstractMediaObject;

/**
 * Model of Image Object
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ImageObjectBundle\Model
 */
abstract class AbstractImageObject extends AbstractMediaObject implements ImageObjectInterface
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
     * exif data for this object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $exifData;

    /**
     * Indicates whether this image is representative of the content of the
     * page.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var bool
     */
    protected $representativeOfPage;

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
     * Getter of Exif Data
     * 
     * exif data for this object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getExifData()
    {
        return $this->exifData;
    }

    /**
     * Setter of Exif Data
     * 
     * exif data for this object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of exifData
     */
    public function setExifData($value)
    {
        $this->exifData = $value;
    }

    /**
     * Getter of Representative of Page
     * 
     * Indicates whether this image is representative of the content of the
     * page.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return bool
     */
    public function getRepresentativeOfPage()
    {
        return $this->representativeOfPage;
    }

    /**
     * Setter of Representative of Page
     * 
     * Indicates whether this image is representative of the content of the
     * page.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param bool $value Value of representativeOfPage
     */
    public function setRepresentativeOfPage($value)
    {
        $this->representativeOfPage = $value;
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
}
