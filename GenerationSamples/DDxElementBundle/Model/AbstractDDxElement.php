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

namespace SchemaRepository\Bundle\DDxElementBundle\Model;

use SchemaRepository\Bundle\DDxElementBundle\Model\DDxElementInterface;
use SchemaRepository\Bundle\MedicalIntangibleBundle\Model\AbstractMedicalIntangible;

/**
 * Model of D Dx Element
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\DDxElementBundle\Model
 */
abstract class AbstractDDxElement extends AbstractMedicalIntangible implements DDxElementInterface
{

    /**
     * One or more alternative conditions considered in the differential
     * diagnosis process.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $diagnosis;

    /**
     * One of a set of signs and symptoms that can be used to distinguish
     * this diagnosis from others in the differential diagnosis.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $distinguishingSign;

    /**
     * Getter of Diagnosis
     * 
     * One or more alternative conditions considered in the differential
     * diagnosis process.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Setter of Diagnosis
     * 
     * One or more alternative conditions considered in the differential
     * diagnosis process.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of diagnosis
     */
    public function setDiagnosis($value)
    {
        $this->diagnosis = $value;
    }

    /**
     * Getter of Distinguishing Sign
     * 
     * One of a set of signs and symptoms that can be used to distinguish
     * this diagnosis from others in the differential diagnosis.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDistinguishingSign()
    {
        return $this->distinguishingSign;
    }

    /**
     * Setter of Distinguishing Sign
     * 
     * One of a set of signs and symptoms that can be used to distinguish
     * this diagnosis from others in the differential diagnosis.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of distinguishingSign
     */
    public function setDistinguishingSign($value)
    {
        $this->distinguishingSign = $value;
    }
}
