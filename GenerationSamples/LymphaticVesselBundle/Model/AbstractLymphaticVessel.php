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

namespace SchemaRepository\Bundle\LymphaticVesselBundle\Model;

use SchemaRepository\Bundle\LymphaticVesselBundle\Model\LymphaticVesselInterface;
use SchemaRepository\Bundle\VesselBundle\Model\AbstractVessel;

/**
 * Model of Lymphatic Vessel
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\LymphaticVesselBundle\Model
 */
abstract class AbstractLymphaticVessel extends AbstractVessel implements LymphaticVesselInterface
{

    /**
     * The vasculature the lymphatic structure originates, or afferents,
     * from.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $originatesFrom;

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
     * The vasculature the lymphatic structure runs, or efferents, to.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $runsTo;

    /**
     * Getter of Originates From
     * 
     * The vasculature the lymphatic structure originates, or afferents,
     * from.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getOriginatesFrom()
    {
        return $this->originatesFrom;
    }

    /**
     * Setter of Originates From
     * 
     * The vasculature the lymphatic structure originates, or afferents,
     * from.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of originatesFrom
     */
    public function setOriginatesFrom($value)
    {
        $this->originatesFrom = $value;
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
     * Getter of Runs to
     * 
     * The vasculature the lymphatic structure runs, or efferents, to.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRunsTo()
    {
        return $this->runsTo;
    }

    /**
     * Setter of Runs to
     * 
     * The vasculature the lymphatic structure runs, or efferents, to.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of runsTo
     */
    public function setRunsTo($value)
    {
        $this->runsTo = $value;
    }
}
