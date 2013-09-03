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

namespace SchemaRepository\Bundle\MedicalCodeBundle\Model;

use SchemaRepository\Bundle\MedicalCodeBundle\Model\MedicalCodeInterface;
use SchemaRepository\Bundle\MedicalIntangibleBundle\Model\AbstractMedicalIntangible;

/**
 * Model of Medical Code
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalCodeBundle\Model
 */
abstract class AbstractMedicalCode extends AbstractMedicalIntangible implements MedicalCodeInterface
{

    /**
     * The actual code.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $codeValue;

    /**
     * The coding system, e.g. 'ICD-10'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $codingSystem;

    /**
     * Getter of Code Value
     * 
     * The actual code.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getCodeValue()
    {
        return $this->codeValue;
    }

    /**
     * Setter of Code Value
     * 
     * The actual code.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of codeValue
     */
    public function setCodeValue($value)
    {
        $this->codeValue = $value;
    }

    /**
     * Getter of Coding System
     * 
     * The coding system, e.g. 'ICD-10'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getCodingSystem()
    {
        return $this->codingSystem;
    }

    /**
     * Setter of Coding System
     * 
     * The coding system, e.g. 'ICD-10'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of codingSystem
     */
    public function setCodingSystem($value)
    {
        $this->codingSystem = $value;
    }
}
