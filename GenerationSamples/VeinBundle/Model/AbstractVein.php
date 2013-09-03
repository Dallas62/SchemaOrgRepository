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

namespace SchemaRepository\Bundle\VeinBundle\Model;

use SchemaRepository\Bundle\VeinBundle\Model\VeinInterface;
use SchemaRepository\Bundle\VesselBundle\Model\AbstractVessel;

/**
 * Model of Vein
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\VeinBundle\Model
 */
abstract class AbstractVein extends AbstractVessel implements VeinInterface
{

    /**
     * The vasculature that the vein drains into.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $drainsTo;

    /**
     * The anatomical or organ system drained by this vessel; generally
     * refers to a specific part of an organ.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $regionDrained;

    /**
     * The anatomical or organ system that the vein flows into; a larger
     * structure that the vein connects to.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $tributary;

    /**
     * Getter of Drains to
     * 
     * The vasculature that the vein drains into.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDrainsTo()
    {
        return $this->drainsTo;
    }

    /**
     * Setter of Drains to
     * 
     * The vasculature that the vein drains into.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of drainsTo
     */
    public function setDrainsTo($value)
    {
        $this->drainsTo = $value;
    }

    /**
     * Getter of Region Drained
     * 
     * The anatomical or organ system drained by this vessel; generally
     * refers to a specific part of an organ.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRegionDrained()
    {
        return $this->regionDrained;
    }

    /**
     * Setter of Region Drained
     * 
     * The anatomical or organ system drained by this vessel; generally
     * refers to a specific part of an organ.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of regionDrained
     */
    public function setRegionDrained($value)
    {
        $this->regionDrained = $value;
    }

    /**
     * Getter of Tributary
     * 
     * The anatomical or organ system that the vein flows into; a larger
     * structure that the vein connects to.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getTributary()
    {
        return $this->tributary;
    }

    /**
     * Setter of Tributary
     * 
     * The anatomical or organ system that the vein flows into; a larger
     * structure that the vein connects to.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of tributary
     */
    public function setTributary($value)
    {
        $this->tributary = $value;
    }
}
