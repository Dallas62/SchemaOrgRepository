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

namespace SchemaRepository\Bundle\LocalBusinessBundle\Model;

use SchemaRepository\Bundle\LocalBusinessBundle\Model\LocalBusinessInterface;
use SchemaRepository\Bundle\OrganizationBundle\Model\AbstractOrganization;

/**
 * Model of Local Business
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\LocalBusinessBundle\Model
 */
abstract class AbstractLocalBusiness extends AbstractOrganization implements LocalBusinessInterface
{

    /**
     * The larger organization that this local business is a branch of, if
     * any.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $branchOf;

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
     * The currency accepted (in ISO 4217 currency format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $currenciesAccepted;

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
     * The opening hours for a business. Opening hours can be specified as a
     * weekly time range, starting with days, then times per day. Multiple
     * days can be listed with commas ',' separating each day. Day or time
     * ranges are specified using a hyphen '-'.- Days are specified using the
     * following two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su.- Times
     * are specified using 24:00 time. For example, 3pm is specified as
     * 15:00. - Here is an example: <time itemprop="openingHours"
     * datetime="Tu,Th 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>. - If
     * a business is open 7 days a week, then it can be specified as <time
     * itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all
     * day</time>.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $openingHours;

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
     * Cash, credit card, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $paymentAccepted;

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
     * The price range of the business, for example $$$.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $priceRange;

    /**
     * Getter of Branch of
     * 
     * The larger organization that this local business is a branch of, if
     * any.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getBranchOf()
    {
        return $this->branchOf;
    }

    /**
     * Setter of Branch of
     * 
     * The larger organization that this local business is a branch of, if
     * any.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of branchOf
     */
    public function setBranchOf($value)
    {
        $this->branchOf = $value;
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
     * Getter of Currencies Accepted
     * 
     * The currency accepted (in ISO 4217 currency format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getCurrenciesAccepted()
    {
        return $this->currenciesAccepted;
    }

    /**
     * Setter of Currencies Accepted
     * 
     * The currency accepted (in ISO 4217 currency format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of currenciesAccepted
     */
    public function setCurrenciesAccepted($value)
    {
        $this->currenciesAccepted = $value;
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
     * Getter of Opening Hours
     * 
     * The opening hours for a business. Opening hours can be specified as a
     * weekly time range, starting with days, then times per day. Multiple
     * days can be listed with commas ',' separating each day. Day or time
     * ranges are specified using a hyphen '-'.- Days are specified using the
     * following two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su.- Times
     * are specified using 24:00 time. For example, 3pm is specified as
     * 15:00. - Here is an example: <time itemprop="openingHours"
     * datetime="Tu,Th 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>. - If
     * a business is open 7 days a week, then it can be specified as <time
     * itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all
     * day</time>.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getOpeningHours()
    {
        return $this->openingHours;
    }

    /**
     * Setter of Opening Hours
     * 
     * The opening hours for a business. Opening hours can be specified as a
     * weekly time range, starting with days, then times per day. Multiple
     * days can be listed with commas ',' separating each day. Day or time
     * ranges are specified using a hyphen '-'.- Days are specified using the
     * following two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su.- Times
     * are specified using 24:00 time. For example, 3pm is specified as
     * 15:00. - Here is an example: <time itemprop="openingHours"
     * datetime="Tu,Th 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>. - If
     * a business is open 7 days a week, then it can be specified as <time
     * itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all
     * day</time>.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of openingHours
     */
    public function setOpeningHours($value)
    {
        $this->openingHours = $value;
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
     * Getter of Payment Accepted
     * 
     * Cash, credit card, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPaymentAccepted()
    {
        return $this->paymentAccepted;
    }

    /**
     * Setter of Payment Accepted
     * 
     * Cash, credit card, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of paymentAccepted
     */
    public function setPaymentAccepted($value)
    {
        $this->paymentAccepted = $value;
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

    /**
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

    /**
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
     * Getter of Price Range
     * 
     * The price range of the business, for example $$$.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPriceRange()
    {
        return $this->priceRange;
    }

    /**
     * Setter of Price Range
     * 
     * The price range of the business, for example $$$.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of priceRange
     */
    public function setPriceRange($value)
    {
        $this->priceRange = $value;
    }
}
