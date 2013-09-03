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

namespace SchemaRepository\Bundle\AnatomicalSystemBundle\Model;

use SchemaRepository\Bundle\AnatomicalSystemBundle\Model\AnatomicalSystemInterface;
use SchemaRepository\Bundle\MedicalEntityBundle\Model\AbstractMedicalEntity;

/**
 * Model of Anatomical System
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\AnatomicalSystemBundle\Model
 */
abstract class AbstractAnatomicalSystem extends AbstractMedicalEntity implements AnatomicalSystemInterface
{

    /**
     * If applicable, a description of the pathophysiology associated with
     * the anatomical system, including potential abnormal changes in the
     * mechanical, physical, and biochemical functions of the system.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $associatedPathophysiology;

    /**
     * The underlying anatomical structures, such as organs, that comprise
     * the anatomical system.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $comprisedOf;

    /**
     * A medical condition associated with this anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $relatedCondition;

    /**
     * Related anatomical structure(s) that are not part of the system but
     * relate or connect to it, such as vascular bundles associated with an
     * organ system.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $relatedStructure;

    /**
     * A medical therapy related to this anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $relatedTherapy;

    /**
     * Getter of Associated Pathophysiology
     * 
     * If applicable, a description of the pathophysiology associated with
     * the anatomical system, including potential abnormal changes in the
     * mechanical, physical, and biochemical functions of the system.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAssociatedPathophysiology()
    {
        return $this->associatedPathophysiology;
    }

    /**
     * Setter of Associated Pathophysiology
     * 
     * If applicable, a description of the pathophysiology associated with
     * the anatomical system, including potential abnormal changes in the
     * mechanical, physical, and biochemical functions of the system.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of associatedPathophysiology
     */
    public function setAssociatedPathophysiology($value)
    {
        $this->associatedPathophysiology = $value;
    }

    /**
     * Getter of Comprised of
     * 
     * The underlying anatomical structures, such as organs, that comprise
     * the anatomical system.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getComprisedOf()
    {
        return $this->comprisedOf;
    }

    /**
     * Setter of Comprised of
     * 
     * The underlying anatomical structures, such as organs, that comprise
     * the anatomical system.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of comprisedOf
     */
    public function setComprisedOf($value)
    {
        $this->comprisedOf = $value;
    }

    /**
     * Getter of Related Condition
     * 
     * A medical condition associated with this anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRelatedCondition()
    {
        return $this->relatedCondition;
    }

    /**
     * Setter of Related Condition
     * 
     * A medical condition associated with this anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of relatedCondition
     */
    public function setRelatedCondition($value)
    {
        $this->relatedCondition = $value;
    }

    /**
     * Getter of Related Structure
     * 
     * Related anatomical structure(s) that are not part of the system but
     * relate or connect to it, such as vascular bundles associated with an
     * organ system.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRelatedStructure()
    {
        return $this->relatedStructure;
    }

    /**
     * Setter of Related Structure
     * 
     * Related anatomical structure(s) that are not part of the system but
     * relate or connect to it, such as vascular bundles associated with an
     * organ system.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of relatedStructure
     */
    public function setRelatedStructure($value)
    {
        $this->relatedStructure = $value;
    }

    /**
     * Getter of Related Therapy
     * 
     * A medical therapy related to this anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRelatedTherapy()
    {
        return $this->relatedTherapy;
    }

    /**
     * Setter of Related Therapy
     * 
     * A medical therapy related to this anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of relatedTherapy
     */
    public function setRelatedTherapy($value)
    {
        $this->relatedTherapy = $value;
    }
}
