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

namespace SchemaRepository\Bundle\NerveBundle\Model;

use SchemaRepository\Bundle\NerveBundle\Model\NerveInterface;
use SchemaRepository\Bundle\AnatomicalStructureBundle\Model\AbstractAnatomicalStructure;

/**
 * Model of Nerve
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\NerveBundle\Model
 */
abstract class AbstractNerve extends AbstractAnatomicalStructure implements NerveInterface
{

    /**
     * The branches that delineate from the nerve bundle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $branch;

    /**
     * The neurological pathway extension that involves muscle control.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $nerveMotor;

    /**
     * The neurological pathway extension that inputs and sends information
     * to the brain or spinal cord.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $sensoryUnit;

    /**
     * The neurological pathway that originates the neurons.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $sourcedFrom;

    /**
     * Getter of Branch
     * 
     * The branches that delineate from the nerve bundle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * Setter of Branch
     * 
     * The branches that delineate from the nerve bundle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of branch
     */
    public function setBranch($value)
    {
        $this->branch = $value;
    }

    /**
     * Getter of Nerve Motor
     * 
     * The neurological pathway extension that involves muscle control.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getNerveMotor()
    {
        return $this->nerveMotor;
    }

    /**
     * Setter of Nerve Motor
     * 
     * The neurological pathway extension that involves muscle control.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of nerveMotor
     */
    public function setNerveMotor($value)
    {
        $this->nerveMotor = $value;
    }

    /**
     * Getter of Sensory Unit
     * 
     * The neurological pathway extension that inputs and sends information
     * to the brain or spinal cord.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSensoryUnit()
    {
        return $this->sensoryUnit;
    }

    /**
     * Setter of Sensory Unit
     * 
     * The neurological pathway extension that inputs and sends information
     * to the brain or spinal cord.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of sensoryUnit
     */
    public function setSensoryUnit($value)
    {
        $this->sensoryUnit = $value;
    }

    /**
     * Getter of Sourced From
     * 
     * The neurological pathway that originates the neurons.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSourcedFrom()
    {
        return $this->sourcedFrom;
    }

    /**
     * Setter of Sourced From
     * 
     * The neurological pathway that originates the neurons.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of sourcedFrom
     */
    public function setSourcedFrom($value)
    {
        $this->sourcedFrom = $value;
    }
}
