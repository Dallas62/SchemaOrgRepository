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

namespace SchemaRepository\Bundle\ArteryBundle\Model;

use SchemaRepository\Bundle\ArteryBundle\Model\ArteryInterface;
use SchemaRepository\Bundle\VesselBundle\Model\AbstractVessel;

/**
 * Model of Artery
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ArteryBundle\Model
 */
abstract class AbstractArtery extends AbstractVessel implements ArteryInterface
{

    /**
     * The branches that comprise the arterial structure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $arterialBranch;

    /**
     * The anatomical or organ system that the artery originates from.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $source;

    /**
     * The area to which the artery supplies blood to.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $supplyTo;

    /**
     * Getter of Arterial Branch
     * 
     * The branches that comprise the arterial structure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getArterialBranch()
    {
        return $this->arterialBranch;
    }

    /**
     * Setter of Arterial Branch
     * 
     * The branches that comprise the arterial structure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of arterialBranch
     */
    public function setArterialBranch($value)
    {
        $this->arterialBranch = $value;
    }

    /**
     * Getter of Source
     * 
     * The anatomical or organ system that the artery originates from.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Setter of Source
     * 
     * The anatomical or organ system that the artery originates from.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of source
     */
    public function setSource($value)
    {
        $this->source = $value;
    }

    /**
     * Getter of Supply to
     * 
     * The area to which the artery supplies blood to.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSupplyTo()
    {
        return $this->supplyTo;
    }

    /**
     * Setter of Supply to
     * 
     * The area to which the artery supplies blood to.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of supplyTo
     */
    public function setSupplyTo($value)
    {
        $this->supplyTo = $value;
    }
}
