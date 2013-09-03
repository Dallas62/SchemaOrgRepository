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

namespace SchemaRepository\Bundle\ExerciseActionBundle\Model;

use SchemaRepository\Bundle\PlayActionBundle\Model\PlayActionInterface;

/**
 * Interface of Exercise Action Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ExerciseActionBundle\Model
 */
interface ExerciseActionInterface extends PlayActionInterface
{

    /**
     * Getter of Course
     * 
     * A sub property of location. The course where this action was taken.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCourse();

    /**
     * Getter of Diet
     * 
     * A sub property of instrument. The died used in this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDiet();

    /**
     * Getter of Distance
     * 
     * A sub property of asset. The distance travelled.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDistance();

    /**
     * Getter of Exercise Plan
     * 
     * A sub property of instrument. The exercise plan used on this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getExercisePlan();

    /**
     * Getter of Exercise Type
     * 
     * Type(s) of exercise or activity, such as strength training,
     * flexibility training, aerobics, cardiac rehabilitation, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getExerciseType();

    /**
     * Getter of From Location
     * 
     * A sub property of location. The original location of the object or the
     * agent before the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getFromLocation();

    /**
     * Getter of Oponent
     * 
     * A sub property of participant. The oponent on this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getOponent();

    /**
     * Getter of Sports Activity Location
     * 
     * A sub property of location. The sports activity location where this
     * action occurred.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSportsActivityLocation();

    /**
     * Getter of Sports Event
     * 
     * A sub property of location. The sports event where this action
     * occurred.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSportsEvent();

    /**
     * Getter of Sports Team
     * 
     * A sub property of participant. The sports team that participated on
     * this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSportsTeam();

    /**
     * Getter of To Location
     * 
     * A sub property of location. The final location of the object or the
     * agent after the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getToLocation();
}
