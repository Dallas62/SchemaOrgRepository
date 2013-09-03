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

use SchemaRepository\Bundle\MedicalEntityBundle\Model\MedicalEntityInterface;

/**
 * Interface of Anatomical Structure Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\AnatomicalStructureBundle\Model
 */
interface AnatomicalStructureInterface extends MedicalEntityInterface
{

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
    public function getAssociatedPathophysiology();

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
    public function getBodyLocation();

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
    public function getConnectedTo();

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
    public function getDiagram();

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
    public function getFunction();

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
    public function getPartOfSystem();

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
    public function getRelatedCondition();

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
    public function getRelatedTherapy();

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
    public function getSubStructure();
}
