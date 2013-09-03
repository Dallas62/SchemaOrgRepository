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

namespace SchemaRepository\Bundle\AnatomicalStructureBundle\Model;

use SchemaRepository\Bundle\AnatomicalStructureBundle\Model\AnatomicalStructureInterface;
use SchemaRepository\Bundle\MedicalEntityBundle\Model\AbstractMedicalEntity;

/**
 * Model of Anatomical Structure
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\AnatomicalStructureBundle\Model
 */
abstract class AbstractAnatomicalStructure extends AbstractMedicalEntity implements AnatomicalStructureInterface
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
     * Location in the body of the anatomical structure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $bodyLocation;

    /**
     * Other anatomical structures to which this structure is connected.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $connectedTo;

    /**
     * An image containing a diagram that illustrates the structure and/or
     * its component substructures and/or connections with other structures.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $diagram;

    /**
     * Function of the anatomical structure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $function;

    /**
     * The anatomical or organ system that this structure is part of.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $partOfSystem;

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
     * A medical therapy related to this anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $relatedTherapy;

    /**
     * Component (sub-)structure(s) that comprise this anatomical structure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $subStructure;

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
     * Getter of Body Location
     * 
     * Location in the body of the anatomical structure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getBodyLocation()
    {
        return $this->bodyLocation;
    }

    /**
     * Setter of Body Location
     * 
     * Location in the body of the anatomical structure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of bodyLocation
     */
    public function setBodyLocation($value)
    {
        $this->bodyLocation = $value;
    }

    /**
     * Getter of Connected to
     * 
     * Other anatomical structures to which this structure is connected.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getConnectedTo()
    {
        return $this->connectedTo;
    }

    /**
     * Setter of Connected to
     * 
     * Other anatomical structures to which this structure is connected.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of connectedTo
     */
    public function setConnectedTo($value)
    {
        $this->connectedTo = $value;
    }

    /**
     * Getter of Diagram
     * 
     * An image containing a diagram that illustrates the structure and/or
     * its component substructures and/or connections with other structures.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDiagram()
    {
        return $this->diagram;
    }

    /**
     * Setter of Diagram
     * 
     * An image containing a diagram that illustrates the structure and/or
     * its component substructures and/or connections with other structures.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of diagram
     */
    public function setDiagram($value)
    {
        $this->diagram = $value;
    }

    /**
     * Getter of Function
     * 
     * Function of the anatomical structure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Setter of Function
     * 
     * Function of the anatomical structure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of function
     */
    public function setFunction($value)
    {
        $this->function = $value;
    }

    /**
     * Getter of Part of System
     * 
     * The anatomical or organ system that this structure is part of.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPartOfSystem()
    {
        return $this->partOfSystem;
    }

    /**
     * Setter of Part of System
     * 
     * The anatomical or organ system that this structure is part of.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of partOfSystem
     */
    public function setPartOfSystem($value)
    {
        $this->partOfSystem = $value;
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

    /**
     * Getter of Sub Structure
     * 
     * Component (sub-)structure(s) that comprise this anatomical structure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSubStructure()
    {
        return $this->subStructure;
    }

    /**
     * Setter of Sub Structure
     * 
     * Component (sub-)structure(s) that comprise this anatomical structure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of subStructure
     */
    public function setSubStructure($value)
    {
        $this->subStructure = $value;
    }
}
