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

use SchemaRepository\Bundle\OrganizationBundle\Model\OrganizationInterface;

/**
 * Interface of Local Business Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\LocalBusinessBundle\Model
 */
interface LocalBusinessInterface extends OrganizationInterface
{

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
    public function getBranchOf();

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
    public function getContainedIn();

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
    public function getCurrenciesAccepted();

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
    public function getGeo();

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
    public function getMap();

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
    public function getMaps();

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
    public function getOpeningHours();

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
    public function getOpeningHoursSpecification();

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
    public function getPaymentAccepted();

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
    public function getPhoto();

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
    public function getPhotos();

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
    public function getPriceRange();
}
