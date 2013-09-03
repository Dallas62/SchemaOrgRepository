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

namespace SchemaRepository\Bundle\InfectiousDiseaseBundle\Model;

use SchemaRepository\Bundle\InfectiousDiseaseBundle\Model\InfectiousDiseaseInterface;
use SchemaRepository\Bundle\MedicalConditionBundle\Model\AbstractMedicalCondition;

/**
 * Model of Infectious Disease
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\InfectiousDiseaseBundle\Model
 */
abstract class AbstractInfectiousDisease extends AbstractMedicalCondition implements InfectiousDiseaseInterface
{

    /**
     * The actual infectious agent, such as a specific bacterium.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $infectiousAgent;

    /**
     * The class of infectious agent (bacteria, prion, etc.) that causes the
     * disease.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $infectiousAgentClass;

    /**
     * How the disease spreads, either as a route or vector, for example
     * 'direct contact', 'Aedes aegypti', etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $transmissionMethod;

    /**
     * Getter of Infectious Agent
     * 
     * The actual infectious agent, such as a specific bacterium.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getInfectiousAgent()
    {
        return $this->infectiousAgent;
    }

    /**
     * Setter of Infectious Agent
     * 
     * The actual infectious agent, such as a specific bacterium.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of infectiousAgent
     */
    public function setInfectiousAgent($value)
    {
        $this->infectiousAgent = $value;
    }

    /**
     * Getter of Infectious Agent Class
     * 
     * The class of infectious agent (bacteria, prion, etc.) that causes the
     * disease.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getInfectiousAgentClass()
    {
        return $this->infectiousAgentClass;
    }

    /**
     * Setter of Infectious Agent Class
     * 
     * The class of infectious agent (bacteria, prion, etc.) that causes the
     * disease.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of infectiousAgentClass
     */
    public function setInfectiousAgentClass($value)
    {
        $this->infectiousAgentClass = $value;
    }

    /**
     * Getter of Transmission Method
     * 
     * How the disease spreads, either as a route or vector, for example
     * 'direct contact', 'Aedes aegypti', etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTransmissionMethod()
    {
        return $this->transmissionMethod;
    }

    /**
     * Setter of Transmission Method
     * 
     * How the disease spreads, either as a route or vector, for example
     * 'direct contact', 'Aedes aegypti', etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of transmissionMethod
     */
    public function setTransmissionMethod($value)
    {
        $this->transmissionMethod = $value;
    }
}
