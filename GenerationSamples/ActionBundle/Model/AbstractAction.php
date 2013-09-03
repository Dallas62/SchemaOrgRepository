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

namespace SchemaRepository\Bundle\ActionBundle\Model;

use SchemaRepository\Bundle\ActionBundle\Model\ActionInterface;
use SchemaRepository\Bundle\ThingBundle\Model\AbstractThing;

/**
 * Model of Action
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ActionBundle\Model
 */
abstract class AbstractAction extends AbstractThing implements ActionInterface
{

    /**
     * The direct performer or driver of the action (animate or inanimate).
     * e.g. *John* wrote a book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $agent;

    /**
     * When the Action was performed: end time. This is for actions that span
     * a period of time. e.g. John wrote a book from January to *December*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var \DateTime
     */
    protected $endTime;

    /**
     * The object that helped the agent perform the action. e.g. John wrote a
     * book with *a pen*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $instrument;

    /**
     * The location of the event, organization or action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $location;

    /**
     * The object upon the action is carried out, whose state is kept intact
     * or changed. Also known as the semantic roles patient, affected or
     * undergoer (which change their state) or theme (which doesn't). e.g.
     * John read *a book*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $object;

    /**
     * Other co-agents that participated in the action indirectly. e.g. John
     * wrote a book with *Steve*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $participant;

    /**
     * The result produced in the action. e.g. John wrote *a book*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $result;

    /**
     * When the Action was performed: start time. This is for actions that
     * span a period of time. e.g. John wrote a book from *January* to
     * December.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var \DateTime
     */
    protected $startTime;

    /**
     * Getter of Agent
     * 
     * The direct performer or driver of the action (animate or inanimate).
     * e.g. *John* wrote a book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Setter of Agent
     * 
     * The direct performer or driver of the action (animate or inanimate).
     * e.g. *John* wrote a book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of agent
     */
    public function setAgent($value)
    {
        $this->agent = $value;
    }

    /**
     * Getter of End Time
     * 
     * When the Action was performed: end time. This is for actions that span
     * a period of time. e.g. John wrote a book from January to *December*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Setter of End Time
     * 
     * When the Action was performed: end time. This is for actions that span
     * a period of time. e.g. John wrote a book from January to *December*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param \DateTime $value Value of endTime
     */
    public function setEndTime($value)
    {
        $this->endTime = $value;
    }

    /**
     * Getter of Instrument
     * 
     * The object that helped the agent perform the action. e.g. John wrote a
     * book with *a pen*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getInstrument()
    {
        return $this->instrument;
    }

    /**
     * Setter of Instrument
     * 
     * The object that helped the agent perform the action. e.g. John wrote a
     * book with *a pen*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of instrument
     */
    public function setInstrument($value)
    {
        $this->instrument = $value;
    }

    /**
     * Getter of Location
     * 
     * The location of the event, organization or action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Setter of Location
     * 
     * The location of the event, organization or action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of location
     */
    public function setLocation($value)
    {
        $this->location = $value;
    }

    /**
     * Getter of Object
     * 
     * The object upon the action is carried out, whose state is kept intact
     * or changed. Also known as the semantic roles patient, affected or
     * undergoer (which change their state) or theme (which doesn't). e.g.
     * John read *a book*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Setter of Object
     * 
     * The object upon the action is carried out, whose state is kept intact
     * or changed. Also known as the semantic roles patient, affected or
     * undergoer (which change their state) or theme (which doesn't). e.g.
     * John read *a book*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of object
     */
    public function setObject($value)
    {
        $this->object = $value;
    }

    /**
     * Getter of Participant
     * 
     * Other co-agents that participated in the action indirectly. e.g. John
     * wrote a book with *Steve*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Setter of Participant
     * 
     * Other co-agents that participated in the action indirectly. e.g. John
     * wrote a book with *Steve*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of participant
     */
    public function setParticipant($value)
    {
        $this->participant = $value;
    }

    /**
     * Getter of Result
     * 
     * The result produced in the action. e.g. John wrote *a book*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Setter of Result
     * 
     * The result produced in the action. e.g. John wrote *a book*.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of result
     */
    public function setResult($value)
    {
        $this->result = $value;
    }

    /**
     * Getter of Start Time
     * 
     * When the Action was performed: start time. This is for actions that
     * span a period of time. e.g. John wrote a book from *January* to
     * December.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Setter of Start Time
     * 
     * When the Action was performed: start time. This is for actions that
     * span a period of time. e.g. John wrote a book from *January* to
     * December.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param \DateTime $value Value of startTime
     */
    public function setStartTime($value)
    {
        $this->startTime = $value;
    }
}
