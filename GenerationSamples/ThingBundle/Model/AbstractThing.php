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

namespace SchemaRepository\Bundle\ThingBundle\Model;

use SchemaRepository\Bundle\ThingBundle\Model\ThingInterface;
/**
 * Model of Thing
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ThingBundle\Model
 */
abstract class AbstractThing implements ThingInterface
{

    /**
     * Id of the model
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long
     */
    protected $id;

    /**
     * An additional type for the item, typically used for adding more
     * specific types from external vocabularies in microdata syntax. This is
     * a relationship between something and a class that the thing is in. In
     * RDFa syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $additionalType;

    /**
     * A short description of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $description;

    /**
     * URL of an image of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $image;

    /**
     * The name of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $name;

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Freebase page, or
     * official website.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $sameAs;

    /**
     * URL of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $url;

    /**
     * Getter of Id
     * 
     * Id of the model
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Setter of Id
     * 
     * Id of the model
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long $value Value of id
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     * Getter of Additional Type
     * 
     * An additional type for the item, typically used for adding more
     * specific types from external vocabularies in microdata syntax. This is
     * a relationship between something and a class that the thing is in. In
     * RDFa syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAdditionalType()
    {
        return $this->additionalType;
    }

    /**
     * Setter of Additional Type
     * 
     * An additional type for the item, typically used for adding more
     * specific types from external vocabularies in microdata syntax. This is
     * a relationship between something and a class that the thing is in. In
     * RDFa syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of additionalType
     */
    public function setAdditionalType($value)
    {
        $this->additionalType = $value;
    }

    /**
     * Getter of Description
     * 
     * A short description of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter of Description
     * 
     * A short description of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of description
     */
    public function setDescription($value)
    {
        $this->description = $value;
    }

    /**
     * Getter of Image
     * 
     * URL of an image of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Setter of Image
     * 
     * URL of an image of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of image
     */
    public function setImage($value)
    {
        $this->image = $value;
    }

    /**
     * Getter of Name
     * 
     * The name of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter of Name
     * 
     * The name of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of name
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * Getter of Same As
     * 
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Freebase page, or
     * official website.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSameAs()
    {
        return $this->sameAs;
    }

    /**
     * Setter of Same As
     * 
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Freebase page, or
     * official website.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of sameAs
     */
    public function setSameAs($value)
    {
        $this->sameAs = $value;
    }

    /**
     * Getter of URL
     * 
     * URL of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Setter of URL
     * 
     * URL of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of url
     */
    public function setUrl($value)
    {
        $this->url = $value;
    }
}
