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

use SchemaRepository\Bundle\MedicalEntityBundle\Model\MedicalEntityInterface;

/**
 * Interface of Anatomical System Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\AnatomicalSystemBundle\Model
 */
interface AnatomicalSystemInterface extends MedicalEntityInterface
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
    public function getComprisedOf();

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
    public function getRelatedStructure();

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
}
