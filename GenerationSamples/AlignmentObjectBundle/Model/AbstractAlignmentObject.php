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

namespace SchemaRepository\Bundle\AlignmentObjectBundle\Model;

use SchemaRepository\Bundle\AlignmentObjectBundle\Model\AlignmentObjectInterface;
use SchemaRepository\Bundle\IntangibleBundle\Model\AbstractIntangible;

/**
 * Model of Alignment Object
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\AlignmentObjectBundle\Model
 */
abstract class AbstractAlignmentObject extends AbstractIntangible implements AlignmentObjectInterface
{

    /**
     * A category of alignment between the learning resource and the
     * framework node. Recommended values include: 'assesses', 'teaches',
     * 'requires', 'textComplexity', 'readingLevel', 'educationalSubject',
     * and 'educationLevel'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $alignmentType;

    /**
     * The framework to which the resource being described is aligned.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $educationalFramework;

    /**
     * The description of a node in an established educational framework.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $targetDescription;

    /**
     * The name of a node in an established educational framework.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $targetName;

    /**
     * The URL of a node in an established educational framework.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $targetUrl;

    /**
     * Getter of Alignment Type
     * 
     * A category of alignment between the learning resource and the
     * framework node. Recommended values include: 'assesses', 'teaches',
     * 'requires', 'textComplexity', 'readingLevel', 'educationalSubject',
     * and 'educationLevel'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAlignmentType()
    {
        return $this->alignmentType;
    }

    /**
     * Setter of Alignment Type
     * 
     * A category of alignment between the learning resource and the
     * framework node. Recommended values include: 'assesses', 'teaches',
     * 'requires', 'textComplexity', 'readingLevel', 'educationalSubject',
     * and 'educationLevel'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of alignmentType
     */
    public function setAlignmentType($value)
    {
        $this->alignmentType = $value;
    }

    /**
     * Getter of Educational Framework
     * 
     * The framework to which the resource being described is aligned.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getEducationalFramework()
    {
        return $this->educationalFramework;
    }

    /**
     * Setter of Educational Framework
     * 
     * The framework to which the resource being described is aligned.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of educationalFramework
     */
    public function setEducationalFramework($value)
    {
        $this->educationalFramework = $value;
    }

    /**
     * Getter of Target Description
     * 
     * The description of a node in an established educational framework.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTargetDescription()
    {
        return $this->targetDescription;
    }

    /**
     * Setter of Target Description
     * 
     * The description of a node in an established educational framework.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of targetDescription
     */
    public function setTargetDescription($value)
    {
        $this->targetDescription = $value;
    }

    /**
     * Getter of Target Name
     * 
     * The name of a node in an established educational framework.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTargetName()
    {
        return $this->targetName;
    }

    /**
     * Setter of Target Name
     * 
     * The name of a node in an established educational framework.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of targetName
     */
    public function setTargetName($value)
    {
        $this->targetName = $value;
    }

    /**
     * Getter of Target Url
     * 
     * The URL of a node in an established educational framework.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->targetUrl;
    }

    /**
     * Setter of Target Url
     * 
     * The URL of a node in an established educational framework.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of targetUrl
     */
    public function setTargetUrl($value)
    {
        $this->targetUrl = $value;
    }
}
