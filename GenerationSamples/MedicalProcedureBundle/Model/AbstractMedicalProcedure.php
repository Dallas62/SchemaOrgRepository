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

namespace SchemaRepository\Bundle\MedicalProcedureBundle\Model;

use SchemaRepository\Bundle\MedicalProcedureBundle\Model\MedicalProcedureInterface;
use SchemaRepository\Bundle\MedicalEntityBundle\Model\AbstractMedicalEntity;

/**
 * Model of Medical Procedure
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalProcedureBundle\Model
 */
abstract class AbstractMedicalProcedure extends AbstractMedicalEntity implements MedicalProcedureInterface
{

    /**
     * Typical or recommended followup care after the procedure is performed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $followup;

    /**
     * How the procedure is performed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $howPerformed;

    /**
     * Typical preparation that a patient must undergo before having the
     * procedure performed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $preparation;

    /**
     * The type of procedure, for example Surgical, Noninvasive, or
     * Percutaneous.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $procedureType;

    /**
     * Getter of Followup
     * 
     * Typical or recommended followup care after the procedure is performed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getFollowup()
    {
        return $this->followup;
    }

    /**
     * Setter of Followup
     * 
     * Typical or recommended followup care after the procedure is performed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of followup
     */
    public function setFollowup($value)
    {
        $this->followup = $value;
    }

    /**
     * Getter of How Performed
     * 
     * How the procedure is performed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getHowPerformed()
    {
        return $this->howPerformed;
    }

    /**
     * Setter of How Performed
     * 
     * How the procedure is performed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of howPerformed
     */
    public function setHowPerformed($value)
    {
        $this->howPerformed = $value;
    }

    /**
     * Getter of Preparation
     * 
     * Typical preparation that a patient must undergo before having the
     * procedure performed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPreparation()
    {
        return $this->preparation;
    }

    /**
     * Setter of Preparation
     * 
     * Typical preparation that a patient must undergo before having the
     * procedure performed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of preparation
     */
    public function setPreparation($value)
    {
        $this->preparation = $value;
    }

    /**
     * Getter of Procedure Type
     * 
     * The type of procedure, for example Surgical, Noninvasive, or
     * Percutaneous.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getProcedureType()
    {
        return $this->procedureType;
    }

    /**
     * Setter of Procedure Type
     * 
     * The type of procedure, for example Surgical, Noninvasive, or
     * Percutaneous.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of procedureType
     */
    public function setProcedureType($value)
    {
        $this->procedureType = $value;
    }
}
