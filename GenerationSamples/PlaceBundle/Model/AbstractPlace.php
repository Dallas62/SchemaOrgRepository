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

namespace SchemaRepository\Bundle\PlaceBundle\Model;

use SchemaRepository\Bundle\PlaceBundle\Model\PlaceInterface;
use SchemaRepository\Bundle\ThingBundle\Model\AbstractThing;

/**
 * Model of Place
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\PlaceBundle\Model
 */
abstract class AbstractPlace extends AbstractThing implements PlaceInterface
{

    /**
     * Physical address of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $address;

    /**
     * The overall rating, based on a collection of reviews or ratings, of
     * the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $aggregateRating;

    /**
     * The basic containment relation between places.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $containedIn;

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
     * Upcoming or past events associated with this place or organization
     * (legacy spelling; see singular form, event).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $events;

    /**
     * The fax number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $faxNumber;

    /**
     * The geo coordinates of the place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $geo;

    /**
     * The Global Location Number (GLN, sometimes also referred to as
     * International Location Number or ILN) of the respective organization,
     * person, or place. The GLN is a 13-digit number used to identify
     * parties and physical locations.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $globalLocationNumber;

    /**
     * A count of a specific user interactions with this item—for example,
     * 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user
     * interaction type should be one of the sub types of UserInteraction.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $interactionCount;

    /**
     * The International Standard of Industrial Classification of All
     * Economic Activities (ISIC), Revision 4 code for a particular
     * organization, business person, or place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $isicV4;

    /**
     * URL of an image for the logo of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $logo;

    /**
     * A URL to a map of the place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $map;

    /**
     * A URL to a map of the place (legacy spelling; see singular form, map).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $maps;

    /**
     * The opening hours of a certain place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $openingHoursSpecification;

    /**
     * A photograph of this place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $photo;

    /**
     * Photographs of this place (legacy spelling; see singular form, photo).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $photos;

    /**
     * A review of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $review;

    /**
     * Review of the item (legacy spelling; see singular form, review).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $reviews;

    /**
     * The telephone number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $telephone;

    /**
     * Getter of Address
     * 
     * Physical address of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Setter of Address
     * 
     * Physical address of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of address
     */
    public function setAddress($value)
    {
        $this->address = $value;
    }

    /**
     * Getter of Aggregate Rating
     * 
     * The overall rating, based on a collection of reviews or ratings, of
     * the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * Setter of Aggregate Rating
     * 
     * The overall rating, based on a collection of reviews or ratings, of
     * the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of aggregateRating
     */
    public function setAggregateRating($value)
    {
        $this->aggregateRating = $value;
    }

    /**
     * Getter of Contained in
     * 
     * The basic containment relation between places.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getContainedIn()
    {
        return $this->containedIn;
    }

    /**
     * Setter of Contained in
     * 
     * The basic containment relation between places.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of containedIn
     */
    public function setContainedIn($value)
    {
        $this->containedIn = $value;
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

    /**
     * Getter of Events
     * 
     * Upcoming or past events associated with this place or organization
     * (legacy spelling; see singular form, event).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Setter of Events
     * 
     * Upcoming or past events associated with this place or organization
     * (legacy spelling; see singular form, event).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of events
     */
    public function setEvents($value)
    {
        $this->events = $value;
    }

    /*
     * Add event to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of event
     */
    public function addEvent($value)
    {
        $this->events[] = $value;
    }

    /*
     * Remove event to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of event
     */
    public function removeEvent($value)
    {
        $key = array_search($value, $this->events);
        if($key !== false) {
           unset($this->events[$key]);
        }
    }

    /**
     * Getter of Fax Number
     * 
     * The fax number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Setter of Fax Number
     * 
     * The fax number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of faxNumber
     */
    public function setFaxNumber($value)
    {
        $this->faxNumber = $value;
    }

    /**
     * Getter of Geo
     * 
     * The geo coordinates of the place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * Setter of Geo
     * 
     * The geo coordinates of the place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of geo
     */
    public function setGeo($value)
    {
        $this->geo = $value;
    }

    /**
     * Getter of Global Location Number
     * 
     * The Global Location Number (GLN, sometimes also referred to as
     * International Location Number or ILN) of the respective organization,
     * person, or place. The GLN is a 13-digit number used to identify
     * parties and physical locations.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getGlobalLocationNumber()
    {
        return $this->globalLocationNumber;
    }

    /**
     * Setter of Global Location Number
     * 
     * The Global Location Number (GLN, sometimes also referred to as
     * International Location Number or ILN) of the respective organization,
     * person, or place. The GLN is a 13-digit number used to identify
     * parties and physical locations.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of globalLocationNumber
     */
    public function setGlobalLocationNumber($value)
    {
        $this->globalLocationNumber = $value;
    }

    /**
     * Getter of Interaction Count
     * 
     * A count of a specific user interactions with this item—for example,
     * 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user
     * interaction type should be one of the sub types of UserInteraction.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getInteractionCount()
    {
        return $this->interactionCount;
    }

    /**
     * Setter of Interaction Count
     * 
     * A count of a specific user interactions with this item—for example,
     * 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user
     * interaction type should be one of the sub types of UserInteraction.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of interactionCount
     */
    public function setInteractionCount($value)
    {
        $this->interactionCount = $value;
    }

    /**
     * Getter of Isic V4
     * 
     * The International Standard of Industrial Classification of All
     * Economic Activities (ISIC), Revision 4 code for a particular
     * organization, business person, or place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getIsicV4()
    {
        return $this->isicV4;
    }

    /**
     * Setter of Isic V4
     * 
     * The International Standard of Industrial Classification of All
     * Economic Activities (ISIC), Revision 4 code for a particular
     * organization, business person, or place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of isicV4
     */
    public function setIsicV4($value)
    {
        $this->isicV4 = $value;
    }

    /**
     * Getter of Logo
     * 
     * URL of an image for the logo of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Setter of Logo
     * 
     * URL of an image for the logo of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of logo
     */
    public function setLogo($value)
    {
        $this->logo = $value;
    }

    /**
     * Getter of Map
     * 
     * A URL to a map of the place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Setter of Map
     * 
     * A URL to a map of the place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of map
     */
    public function setMap($value)
    {
        $this->map = $value;
    }

    /**
     * Getter of Maps
     * 
     * A URL to a map of the place (legacy spelling; see singular form, map).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getMaps()
    {
        return $this->maps;
    }

    /**
     * Setter of Maps
     * 
     * A URL to a map of the place (legacy spelling; see singular form, map).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of maps
     */
    public function setMaps($value)
    {
        $this->maps = $value;
    }

    /**
     * Getter of Opening Hours Specification
     * 
     * The opening hours of a certain place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getOpeningHoursSpecification()
    {
        return $this->openingHoursSpecification;
    }

    /**
     * Setter of Opening Hours Specification
     * 
     * The opening hours of a certain place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of openingHoursSpecification
     */
    public function setOpeningHoursSpecification($value)
    {
        $this->openingHoursSpecification = $value;
    }

    /**
     * Getter of Photo
     * 
     * A photograph of this place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Setter of Photo
     * 
     * A photograph of this place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of photo
     */
    public function setPhoto($value)
    {
        $this->photo = $value;
    }

    /**
     * Getter of Photos
     * 
     * Photographs of this place (legacy spelling; see singular form, photo).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Setter of Photos
     * 
     * Photographs of this place (legacy spelling; see singular form, photo).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of photos
     */
    public function setPhotos($value)
    {
        $this->photos = $value;
    }

    /*
     * Add photo to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of photo
     */
    public function addPhoto($value)
    {
        $this->photos[] = $value;
    }

    /*
     * Remove photo to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of photo
     */
    public function removePhoto($value)
    {
        $key = array_search($value, $this->photos);
        if($key !== false) {
           unset($this->photos[$key]);
        }
    }

    /**
     * Getter of Review
     * 
     * A review of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * Setter of Review
     * 
     * A review of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of review
     */
    public function setReview($value)
    {
        $this->review = $value;
    }

    /**
     * Getter of Reviews
     * 
     * Review of the item (legacy spelling; see singular form, review).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Setter of Reviews
     * 
     * Review of the item (legacy spelling; see singular form, review).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of reviews
     */
    public function setReviews($value)
    {
        $this->reviews = $value;
    }

    /*
     * Add review to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of review
     */
    public function addReview($value)
    {
        $this->reviews[] = $value;
    }

    /*
     * Remove review to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of review
     */
    public function removeReview($value)
    {
        $key = array_search($value, $this->reviews);
        if($key !== false) {
           unset($this->reviews[$key]);
        }
    }

    /**
     * Getter of Telephone
     * 
     * The telephone number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Setter of Telephone
     * 
     * The telephone number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of telephone
     */
    public function setTelephone($value)
    {
        $this->telephone = $value;
    }
}
