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

namespace SchemaRepository\Bundle\GeoCoordinatesBundle\Model;

use SchemaRepository\Bundle\GeoCoordinatesBundle\Model\GeoCoordinatesInterface;
use SchemaRepository\Bundle\StructuredValueBundle\Model\AbstractStructuredValue;

/**
 * Model of Geo Coordinates
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\GeoCoordinatesBundle\Model
 */
abstract class AbstractGeoCoordinates extends AbstractStructuredValue implements GeoCoordinatesInterface
{

    /**
     * The elevation of a location.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string|integer|long|float|decimal
     */
    protected $elevation;

    /**
     * The latitude of a location. For example 37.42242.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal|string
     */
    protected $latitude;

    /**
     * The longitude of a location. For example -122.08585.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal|string
     */
    protected $longitude;

    /**
     * Getter of Elevation
     * 
     * The elevation of a location.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string|integer|long|float|decimal
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * Setter of Elevation
     * 
     * The elevation of a location.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string|integer|long|float|decimal $value Value of elevation
     */
    public function setElevation($value)
    {
        $this->elevation = $value;
    }

    /**
     * Getter of Latitude
     * 
     * The latitude of a location. For example 37.42242.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal|string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Setter of Latitude
     * 
     * The latitude of a location. For example 37.42242.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal|string $value Value of latitude
     */
    public function setLatitude($value)
    {
        $this->latitude = $value;
    }

    /**
     * Getter of Longitude
     * 
     * The longitude of a location. For example -122.08585.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal|string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Setter of Longitude
     * 
     * The longitude of a location. For example -122.08585.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal|string $value Value of longitude
     */
    public function setLongitude($value)
    {
        $this->longitude = $value;
    }
}
