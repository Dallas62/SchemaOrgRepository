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

namespace SchemaRepository\Bundle\PlayActionBundle\Model;

use SchemaRepository\Bundle\PlayActionBundle\Model\PlayActionInterface;
use SchemaRepository\Bundle\ActionBundle\Model\AbstractAction;

/**
 * Model of Play Action
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\PlayActionBundle\Model
 */
abstract class AbstractPlayAction extends AbstractAction implements PlayActionInterface
{

    /**
     * The intended audience of the item, i.e. the group for whom the item
     * was created.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $audience;

    /**
     * Upcoming or past event associated with this place or organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $event;

    /**
     * Getter of Audience
     * 
     * The intended audience of the item, i.e. the group for whom the item
     * was created.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Setter of Audience
     * 
     * The intended audience of the item, i.e. the group for whom the item
     * was created.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of audience
     */
    public function setAudience($value)
    {
        $this->audience = $value;
    }

    /**
     * Getter of Event
     * 
     * Upcoming or past event associated with this place or organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Setter of Event
     * 
     * Upcoming or past event associated with this place or organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of event
     */
    public function setEvent($value)
    {
        $this->event = $value;
    }
}
