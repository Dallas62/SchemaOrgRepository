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

namespace SchemaRepository\Bundle\MedicalTestBundle\Model;

use SchemaRepository\Bundle\MedicalTestBundle\Model\MedicalTestInterface;
use SchemaRepository\Bundle\MedicalEntityBundle\Model\AbstractMedicalEntity;

/**
 * Model of Medical Test
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalTestBundle\Model
 */
abstract class AbstractMedicalTest extends AbstractMedicalEntity implements MedicalTestInterface
{

    /**
     * Drugs that affect the test's results.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $affectedBy;

    /**
     * Range of acceptable values for a typical patient, when applicable.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $normalRange;

    /**
     * A sign detected by the test.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $signDetected;

    /**
     * A condition the test is used to diagnose.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $usedToDiagnose;

    /**
     * Device used to perform the test.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $usesDevice;

    /**
     * Getter of Affected by
     * 
     * Drugs that affect the test's results.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAffectedBy()
    {
        return $this->affectedBy;
    }

    /**
     * Setter of Affected by
     * 
     * Drugs that affect the test's results.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of affectedBy
     */
    public function setAffectedBy($value)
    {
        $this->affectedBy = $value;
    }

    /**
     * Getter of Normal Range
     * 
     * Range of acceptable values for a typical patient, when applicable.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getNormalRange()
    {
        return $this->normalRange;
    }

    /**
     * Setter of Normal Range
     * 
     * Range of acceptable values for a typical patient, when applicable.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of normalRange
     */
    public function setNormalRange($value)
    {
        $this->normalRange = $value;
    }

    /**
     * Getter of Sign Detected
     * 
     * A sign detected by the test.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSignDetected()
    {
        return $this->signDetected;
    }

    /**
     * Setter of Sign Detected
     * 
     * A sign detected by the test.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of signDetected
     */
    public function setSignDetected($value)
    {
        $this->signDetected = $value;
    }

    /**
     * Getter of Used to Diagnose
     * 
     * A condition the test is used to diagnose.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getUsedToDiagnose()
    {
        return $this->usedToDiagnose;
    }

    /**
     * Setter of Used to Diagnose
     * 
     * A condition the test is used to diagnose.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of usedToDiagnose
     */
    public function setUsedToDiagnose($value)
    {
        $this->usedToDiagnose = $value;
    }

    /**
     * Getter of Uses Device
     * 
     * Device used to perform the test.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getUsesDevice()
    {
        return $this->usesDevice;
    }

    /**
     * Setter of Uses Device
     * 
     * Device used to perform the test.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of usesDevice
     */
    public function setUsesDevice($value)
    {
        $this->usesDevice = $value;
    }
}
