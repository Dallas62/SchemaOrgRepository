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

namespace SchemaRepository\Bundle\MoveActionBundle\Model;

use SchemaRepository\Bundle\MoveActionBundle\Model\MoveActionInterface;
use SchemaRepository\Bundle\ActionBundle\Model\AbstractAction;

/**
 * Model of Move Action
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MoveActionBundle\Model
 */
abstract class AbstractMoveAction extends AbstractAction implements MoveActionInterface
{

    /**
     * A sub property of location. The original location of the object or the
     * agent before the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $fromLocation;

    /**
     * A sub property of location. The final location of the object or the
     * agent after the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $toLocation;

    /**
     * Getter of From Location
     * 
     * A sub property of location. The original location of the object or the
     * agent before the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getFromLocation()
    {
        return $this->fromLocation;
    }

    /**
     * Setter of From Location
     * 
     * A sub property of location. The original location of the object or the
     * agent before the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of fromLocation
     */
    public function setFromLocation($value)
    {
        $this->fromLocation = $value;
    }

    /**
     * Getter of To Location
     * 
     * A sub property of location. The final location of the object or the
     * agent after the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getToLocation()
    {
        return $this->toLocation;
    }

    /**
     * Setter of To Location
     * 
     * A sub property of location. The final location of the object or the
     * agent after the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of toLocation
     */
    public function setToLocation($value)
    {
        $this->toLocation = $value;
    }
}
