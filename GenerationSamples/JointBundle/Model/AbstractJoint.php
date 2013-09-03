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

namespace SchemaRepository\Bundle\JointBundle\Model;

use SchemaRepository\Bundle\JointBundle\Model\JointInterface;
use SchemaRepository\Bundle\AnatomicalStructureBundle\Model\AbstractAnatomicalStructure;

/**
 * Model of Joint
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\JointBundle\Model
 */
abstract class AbstractJoint extends AbstractAnatomicalStructure implements JointInterface
{

    /**
     * The biomechanical properties of the bone.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $biomechnicalClass;

    /**
     * The degree of mobility the joint allows.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $functionalClass;

    /**
     * The name given to how bone physically connects to each other.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $structuralClass;

    /**
     * Getter of Biomechnical Class
     * 
     * The biomechanical properties of the bone.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getBiomechnicalClass()
    {
        return $this->biomechnicalClass;
    }

    /**
     * Setter of Biomechnical Class
     * 
     * The biomechanical properties of the bone.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of biomechnicalClass
     */
    public function setBiomechnicalClass($value)
    {
        $this->biomechnicalClass = $value;
    }

    /**
     * Getter of Functional Class
     * 
     * The degree of mobility the joint allows.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getFunctionalClass()
    {
        return $this->functionalClass;
    }

    /**
     * Setter of Functional Class
     * 
     * The degree of mobility the joint allows.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of functionalClass
     */
    public function setFunctionalClass($value)
    {
        $this->functionalClass = $value;
    }

    /**
     * Getter of Structural Class
     * 
     * The name given to how bone physically connects to each other.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getStructuralClass()
    {
        return $this->structuralClass;
    }

    /**
     * Setter of Structural Class
     * 
     * The name given to how bone physically connects to each other.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of structuralClass
     */
    public function setStructuralClass($value)
    {
        $this->structuralClass = $value;
    }
}
