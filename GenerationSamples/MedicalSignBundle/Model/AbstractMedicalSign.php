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

namespace SchemaRepository\Bundle\MedicalSignBundle\Model;

use SchemaRepository\Bundle\MedicalSignBundle\Model\MedicalSignInterface;
use SchemaRepository\Bundle\MedicalSignOrSymptomBundle\Model\AbstractMedicalSignOrSymptom;

/**
 * Model of Medical Sign
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalSignBundle\Model
 */
abstract class AbstractMedicalSign extends AbstractMedicalSignOrSymptom implements MedicalSignInterface
{

    /**
     * A physical examination that can identify this sign.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $identifyingExam;

    /**
     * A diagnostic test that can identify this sign.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $identifyingTest;

    /**
     * Getter of Identifying Exam
     * 
     * A physical examination that can identify this sign.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getIdentifyingExam()
    {
        return $this->identifyingExam;
    }

    /**
     * Setter of Identifying Exam
     * 
     * A physical examination that can identify this sign.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of identifyingExam
     */
    public function setIdentifyingExam($value)
    {
        $this->identifyingExam = $value;
    }

    /**
     * Getter of Identifying Test
     * 
     * A diagnostic test that can identify this sign.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getIdentifyingTest()
    {
        return $this->identifyingTest;
    }

    /**
     * Setter of Identifying Test
     * 
     * A diagnostic test that can identify this sign.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of identifyingTest
     */
    public function setIdentifyingTest($value)
    {
        $this->identifyingTest = $value;
    }
}
