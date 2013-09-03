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

namespace SchemaRepository\Bundle\PhysicianBundle\Model;

use SchemaRepository\Bundle\PhysicianBundle\Model\PhysicianInterface;
use SchemaRepository\Bundle\MedicalOrganizationBundle\Model\AbstractMedicalOrganization;

/**
 * Model of Physician
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\PhysicianBundle\Model
 */
abstract class AbstractPhysician extends AbstractMedicalOrganization implements PhysicianInterface
{

    /**
     * A medical service available from this provider.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $availableService;

    /**
     * A hospital with which the physician or office is affiliated.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $hospitalAffiliation;

    /**
     * A medical specialty of the provider.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $medicalSpecialty;

    /**
     * Getter of Available Service
     * 
     * A medical service available from this provider.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAvailableService()
    {
        return $this->availableService;
    }

    /**
     * Setter of Available Service
     * 
     * A medical service available from this provider.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of availableService
     */
    public function setAvailableService($value)
    {
        $this->availableService = $value;
    }

    /**
     * Getter of Hospital Affiliation
     * 
     * A hospital with which the physician or office is affiliated.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getHospitalAffiliation()
    {
        return $this->hospitalAffiliation;
    }

    /**
     * Setter of Hospital Affiliation
     * 
     * A hospital with which the physician or office is affiliated.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of hospitalAffiliation
     */
    public function setHospitalAffiliation($value)
    {
        $this->hospitalAffiliation = $value;
    }

    /**
     * Getter of Medical Specialty
     * 
     * A medical specialty of the provider.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getMedicalSpecialty()
    {
        return $this->medicalSpecialty;
    }

    /**
     * Setter of Medical Specialty
     * 
     * A medical specialty of the provider.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of medicalSpecialty
     */
    public function setMedicalSpecialty($value)
    {
        $this->medicalSpecialty = $value;
    }
}
