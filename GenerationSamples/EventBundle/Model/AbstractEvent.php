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

use SchemaRepository\Bundle\EventBundle\Model\EventInterface;
use SchemaRepository\Bundle\ThingBundle\Model\AbstractThing;

/**
 * Model of Event
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\EventBundle\Model
 */
abstract class AbstractEvent extends AbstractThing implements EventInterface
{

    /**
     * A person or organization attending the event.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $attendee;

    /**
     * A person attending the event (legacy spelling; see singular form,
     * attendee).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $attendees;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO
     * 8601 date format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $duration;

    /**
     * The end date and time of the event (in ISO 8601 date format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $endDate;

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
     * An offer to sell this item—for example, an offer to sell a product,
     * the DVD of a movie, or tickets to an event.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $offers;

    /**
     * A performer at the event—for example, a presenter, musician, musical
     * group or actor.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $performer;

    /**
     * The main performer or performers of the event—for example, a
     * presenter, musician, or actor (legacy spelling; see singular form,
     * performer).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $performers;

    /**
     * The start date and time of the event (in ISO 8601 date format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $startDate;

    /**
     * An Event that is part of this event. For example, a conference event
     * includes many presentations, each are a subEvent of the conference.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $subEvent;

    /**
     * Events that are a part of this event. For example, a conference event
     * includes many presentations, each are subEvents of the conference
     * (legacy spelling; see singular form, subEvent).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $subEvents;

    /**
     * An event that this event is a part of. For example, a collection of
     * individual music performances might each have a music festival as
     * their superEvent.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $superEvent;

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
    public function getAttendee()
    {
        return $this->attendee;
    }

    /**
     * Setter of Attendee
     * 
     * A person or organization attending the event.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of attendee
     */
    public function setAttendee($value)
    {
        $this->attendee = $value;
    }

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
    public function getAttendees()
    {
        return $this->attendees;
    }

    /**
     * Setter of Attendees
     * 
     * A person attending the event (legacy spelling; see singular form,
     * attendee).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of attendees
     */
    public function setAttendees($value)
    {
        $this->attendees = $value;
    }

    /*
     * Add attendee to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of attendee
     */
    public function addAttendee($value)
    {
        $this->attendees[] = $value;
    }

    /*
     * Remove attendee to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of attendee
     */
    public function removeAttendee($value)
    {
        $key = array_search($value, $this->attendees);
        if($key !== false) {
           unset($this->attendees[$key]);
        }
    }

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
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Setter of Duration
     * 
     * The duration of the item (movie, audio recording, event, etc.) in ISO
     * 8601 date format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of duration
     */
    public function setDuration($value)
    {
        $this->duration = $value;
    }

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
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Setter of End Date
     * 
     * The end date and time of the event (in ISO 8601 date format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of endDate
     */
    public function setEndDate($value)
    {
        $this->endDate = $value;
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
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * Setter of Offers
     * 
     * An offer to sell this item—for example, an offer to sell a product,
     * the DVD of a movie, or tickets to an event.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of offers
     */
    public function setOffers($value)
    {
        $this->offers = $value;
    }

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
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Setter of Performer
     * 
     * A performer at the event—for example, a presenter, musician, musical
     * group or actor.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of performer
     */
    public function setPerformer($value)
    {
        $this->performer = $value;
    }

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
    public function getPerformers()
    {
        return $this->performers;
    }

    /**
     * Setter of Performers
     * 
     * The main performer or performers of the event—for example, a
     * presenter, musician, or actor (legacy spelling; see singular form,
     * performer).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of performers
     */
    public function setPerformers($value)
    {
        $this->performers = $value;
    }

    /*
     * Add performer to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of performer
     */
    public function addPerformer($value)
    {
        $this->performers[] = $value;
    }

    /*
     * Remove performer to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of performer
     */
    public function removePerformer($value)
    {
        $key = array_search($value, $this->performers);
        if($key !== false) {
           unset($this->performers[$key]);
        }
    }

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
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Setter of Start Date
     * 
     * The start date and time of the event (in ISO 8601 date format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of startDate
     */
    public function setStartDate($value)
    {
        $this->startDate = $value;
    }

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
    public function getSubEvent()
    {
        return $this->subEvent;
    }

    /**
     * Setter of Sub Event
     * 
     * An Event that is part of this event. For example, a conference event
     * includes many presentations, each are a subEvent of the conference.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of subEvent
     */
    public function setSubEvent($value)
    {
        $this->subEvent = $value;
    }

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
    public function getSubEvents()
    {
        return $this->subEvents;
    }

    /**
     * Setter of Sub Events
     * 
     * Events that are a part of this event. For example, a conference event
     * includes many presentations, each are subEvents of the conference
     * (legacy spelling; see singular form, subEvent).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of subEvents
     */
    public function setSubEvents($value)
    {
        $this->subEvents = $value;
    }

    /*
     * Add subEvent to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of subEvent
     */
    public function addSubEvent($value)
    {
        $this->subEvents[] = $value;
    }

    /*
     * Remove subEvent to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of subEvent
     */
    public function removeSubEvent($value)
    {
        $key = array_search($value, $this->subEvents);
        if($key !== false) {
           unset($this->subEvents[$key]);
        }
    }

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
    public function getSuperEvent()
    {
        return $this->superEvent;
    }

    /**
     * Setter of Super Event
     * 
     * An event that this event is a part of. For example, a collection of
     * individual music performances might each have a music festival as
     * their superEvent.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of superEvent
     */
    public function setSuperEvent($value)
    {
        $this->superEvent = $value;
    }
}
