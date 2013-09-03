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

namespace SchemaRepository\Bundle\GeoShapeBundle\Model;

use SchemaRepository\Bundle\GeoShapeBundle\Model\GeoShapeInterface;
use SchemaRepository\Bundle\StructuredValueBundle\Model\AbstractStructuredValue;

/**
 * Model of Geo Shape
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\GeoShapeBundle\Model
 */
abstract class AbstractGeoShape extends AbstractStructuredValue implements GeoShapeInterface
{

    /**
     * A polygon is the area enclosed by a point-to-point path for which the
     * starting and ending points are the same. A polygon is expressed as a
     * series of four or more spacedelimited points where the first and final
     * points are identical.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $box;

    /**
     * A circle is the circular region of a specified radius centered at a
     * specified latitude and longitude. A circle is expressed as a pair
     * followed by a radius in meters.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $circle;

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
     * A line is a point-to-point path consisting of two or more points. A
     * line is expressed as a series of two or more point objects separated
     * by space.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $line;

    /**
     * A polygon is the area enclosed by a point-to-point path for which the
     * starting and ending points are the same. A polygon is expressed as a
     * series of four or more spacedelimited points where the first and final
     * points are identical.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $polygon;

    /**
     * Getter of Box
     * 
     * A polygon is the area enclosed by a point-to-point path for which the
     * starting and ending points are the same. A polygon is expressed as a
     * series of four or more spacedelimited points where the first and final
     * points are identical.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getBox()
    {
        return $this->box;
    }

    /**
     * Setter of Box
     * 
     * A polygon is the area enclosed by a point-to-point path for which the
     * starting and ending points are the same. A polygon is expressed as a
     * series of four or more spacedelimited points where the first and final
     * points are identical.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of box
     */
    public function setBox($value)
    {
        $this->box = $value;
    }

    /**
     * Getter of Circle
     * 
     * A circle is the circular region of a specified radius centered at a
     * specified latitude and longitude. A circle is expressed as a pair
     * followed by a radius in meters.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getCircle()
    {
        return $this->circle;
    }

    /**
     * Setter of Circle
     * 
     * A circle is the circular region of a specified radius centered at a
     * specified latitude and longitude. A circle is expressed as a pair
     * followed by a radius in meters.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of circle
     */
    public function setCircle($value)
    {
        $this->circle = $value;
    }

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
     * Getter of Line
     * 
     * A line is a point-to-point path consisting of two or more points. A
     * line is expressed as a series of two or more point objects separated
     * by space.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Setter of Line
     * 
     * A line is a point-to-point path consisting of two or more points. A
     * line is expressed as a series of two or more point objects separated
     * by space.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of line
     */
    public function setLine($value)
    {
        $this->line = $value;
    }

    /**
     * Getter of Polygon
     * 
     * A polygon is the area enclosed by a point-to-point path for which the
     * starting and ending points are the same. A polygon is expressed as a
     * series of four or more spacedelimited points where the first and final
     * points are identical.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPolygon()
    {
        return $this->polygon;
    }

    /**
     * Setter of Polygon
     * 
     * A polygon is the area enclosed by a point-to-point path for which the
     * starting and ending points are the same. A polygon is expressed as a
     * series of four or more spacedelimited points where the first and final
     * points are identical.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of polygon
     */
    public function setPolygon($value)
    {
        $this->polygon = $value;
    }
}
