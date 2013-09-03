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

namespace SchemaRepository\Bundle\EventBundle\Model;

use SchemaRepository\Bundle\ThingBundle\Model\ThingInterface;

/**
 * Interface of Event Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\EventBundle\Model
 */
interface EventInterface extends ThingInterface
{

    /**
     * Getter of Attendee
     * 
     * A person or organization attending the event.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAttendee();

    /**
     * Getter of Attendees
     * 
     * A person attending the event (legacy spelling; see singular form,
     * attendee).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getAttendees();

    /**
     * Getter of Duration
     * 
     * The duration of the item (movie, audio recording, event, etc.) in ISO
     * 8601 date format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDuration();

    /**
     * Getter of End Date
     * 
     * The end date and time of the event (in ISO 8601 date format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEndDate();

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
     * Getter of Offers
     * 
     * An offer to sell this item—for example, an offer to sell a product,
     * the DVD of a movie, or tickets to an event.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getOffers();

    /**
     * Getter of Performer
     * 
     * A performer at the event—for example, a presenter, musician, musical
     * group or actor.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPerformer();

    /**
     * Getter of Performers
     * 
     * The main performer or performers of the event—for example, a
     * presenter, musician, or actor (legacy spelling; see singular form,
     * performer).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getPerformers();

    /**
     * Getter of Start Date
     * 
     * The start date and time of the event (in ISO 8601 date format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getStartDate();

    /**
     * Getter of Sub Event
     * 
     * An Event that is part of this event. For example, a conference event
     * includes many presentations, each are a subEvent of the conference.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSubEvent();

    /**
     * Getter of Sub Events
     * 
     * Events that are a part of this event. For example, a conference event
     * includes many presentations, each are subEvents of the conference
     * (legacy spelling; see singular form, subEvent).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getSubEvents();

    /**
     * Getter of Super Event
     * 
     * An event that this event is a part of. For example, a collection of
     * individual music performances might each have a music festival as
     * their superEvent.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSuperEvent();
}
