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

use SchemaRepository\Bundle\ThingBundle\Model\ThingInterface;

/**
 * Interface of Action Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ActionBundle\Model
 */
interface ActionInterface extends ThingInterface
{

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
    public function getAgent();

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
    public function getEndTime();

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
    public function getInstrument();

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
    public function getLocation();

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
    public function getObject();

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
    public function getParticipant();

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
    public function getResult();

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
    public function getStartTime();
}
