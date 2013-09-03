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

use SchemaRepository\Bundle\ExerciseActionBundle\Model\ExerciseActionInterface;
use SchemaRepository\Bundle\PlayActionBundle\Model\AbstractPlayAction;

/**
 * Model of Exercise Action
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ExerciseActionBundle\Model
 */
abstract class AbstractExerciseAction extends AbstractPlayAction implements ExerciseActionInterface
{

    /**
     * A sub property of location. The course where this action was taken.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $course;

    /**
     * A sub property of instrument. The died used in this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $diet;

    /**
     * A sub property of asset. The distance travelled.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $distance;

    /**
     * A sub property of instrument. The exercise plan used on this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $exercisePlan;

    /**
     * Type(s) of exercise or activity, such as strength training,
     * flexibility training, aerobics, cardiac rehabilitation, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $exerciseType;

    /**
     * A sub property of location. The original location of the object or the
     * agent before the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $fromLocation;

    /**
     * A sub property of participant. The oponent on this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $oponent;

    /**
     * A sub property of location. The sports activity location where this
     * action occurred.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $sportsActivityLocation;

    /**
     * A sub property of location. The sports event where this action
     * occurred.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $sportsEvent;

    /**
     * A sub property of participant. The sports team that participated on
     * this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $sportsTeam;

    /**
     * A sub property of location. The final location of the object or the
     * agent after the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $toLocation;

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
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Setter of Course
     * 
     * A sub property of location. The course where this action was taken.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of course
     */
    public function setCourse($value)
    {
        $this->course = $value;
    }

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
    public function getDiet()
    {
        return $this->diet;
    }

    /**
     * Setter of Diet
     * 
     * A sub property of instrument. The died used in this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of diet
     */
    public function setDiet($value)
    {
        $this->diet = $value;
    }

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
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Setter of Distance
     * 
     * A sub property of asset. The distance travelled.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of distance
     */
    public function setDistance($value)
    {
        $this->distance = $value;
    }

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
    public function getExercisePlan()
    {
        return $this->exercisePlan;
    }

    /**
     * Setter of Exercise Plan
     * 
     * A sub property of instrument. The exercise plan used on this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of exercisePlan
     */
    public function setExercisePlan($value)
    {
        $this->exercisePlan = $value;
    }

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
    public function getExerciseType()
    {
        return $this->exerciseType;
    }

    /**
     * Setter of Exercise Type
     * 
     * Type(s) of exercise or activity, such as strength training,
     * flexibility training, aerobics, cardiac rehabilitation, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of exerciseType
     */
    public function setExerciseType($value)
    {
        $this->exerciseType = $value;
    }

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
    public function getFromLocation()
    {
        return $this->fromLocation;
    }

    /**
     * Setter of From Location
     * 
     * A sub property of location. The original location of the object or the
     * agent before the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of fromLocation
     */
    public function setFromLocation($value)
    {
        $this->fromLocation = $value;
    }

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
    public function getOponent()
    {
        return $this->oponent;
    }

    /**
     * Setter of Oponent
     * 
     * A sub property of participant. The oponent on this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of oponent
     */
    public function setOponent($value)
    {
        $this->oponent = $value;
    }

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
    public function getSportsActivityLocation()
    {
        return $this->sportsActivityLocation;
    }

    /**
     * Setter of Sports Activity Location
     * 
     * A sub property of location. The sports activity location where this
     * action occurred.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of sportsActivityLocation
     */
    public function setSportsActivityLocation($value)
    {
        $this->sportsActivityLocation = $value;
    }

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
    public function getSportsEvent()
    {
        return $this->sportsEvent;
    }

    /**
     * Setter of Sports Event
     * 
     * A sub property of location. The sports event where this action
     * occurred.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of sportsEvent
     */
    public function setSportsEvent($value)
    {
        $this->sportsEvent = $value;
    }

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
    public function getSportsTeam()
    {
        return $this->sportsTeam;
    }

    /**
     * Setter of Sports Team
     * 
     * A sub property of participant. The sports team that participated on
     * this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of sportsTeam
     */
    public function setSportsTeam($value)
    {
        $this->sportsTeam = $value;
    }

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
    public function getToLocation()
    {
        return $this->toLocation;
    }

    /**
     * Setter of To Location
     * 
     * A sub property of location. The final location of the object or the
     * agent after the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of toLocation
     */
    public function setToLocation($value)
    {
        $this->toLocation = $value;
    }
}
