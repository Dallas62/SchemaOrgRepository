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

namespace SchemaRepository\Bundle\MuscleBundle\Model;

use SchemaRepository\Bundle\MuscleBundle\Model\MuscleInterface;
use SchemaRepository\Bundle\AnatomicalStructureBundle\Model\AbstractAnatomicalStructure;

/**
 * Model of Muscle
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MuscleBundle\Model
 */
abstract class AbstractMuscle extends AbstractAnatomicalStructure implements MuscleInterface
{

    /**
     * The movement the muscle generates.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $action;

    /**
     * The muscle whose action counteracts the specified muscle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $antagonist;

    /**
     * The blood vessel that carries blood from the heart to the muscle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $bloodSupply;

    /**
     * The place of attachment of a muscle, or what the muscle moves.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $insertion;

    /**
     * The underlying innervation associated with the muscle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $nerve;

    /**
     * The place or point where a muscle arises.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $origin;

    /**
     * Getter of Action
     * 
     * The movement the muscle generates.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Setter of Action
     * 
     * The movement the muscle generates.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of action
     */
    public function setAction($value)
    {
        $this->action = $value;
    }

    /**
     * Getter of Antagonist
     * 
     * The muscle whose action counteracts the specified muscle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAntagonist()
    {
        return $this->antagonist;
    }

    /**
     * Setter of Antagonist
     * 
     * The muscle whose action counteracts the specified muscle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of antagonist
     */
    public function setAntagonist($value)
    {
        $this->antagonist = $value;
    }

    /**
     * Getter of Blood Supply
     * 
     * The blood vessel that carries blood from the heart to the muscle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getBloodSupply()
    {
        return $this->bloodSupply;
    }

    /**
     * Setter of Blood Supply
     * 
     * The blood vessel that carries blood from the heart to the muscle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of bloodSupply
     */
    public function setBloodSupply($value)
    {
        $this->bloodSupply = $value;
    }

    /**
     * Getter of Insertion
     * 
     * The place of attachment of a muscle, or what the muscle moves.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getInsertion()
    {
        return $this->insertion;
    }

    /**
     * Setter of Insertion
     * 
     * The place of attachment of a muscle, or what the muscle moves.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of insertion
     */
    public function setInsertion($value)
    {
        $this->insertion = $value;
    }

    /**
     * Getter of Nerve
     * 
     * The underlying innervation associated with the muscle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getNerve()
    {
        return $this->nerve;
    }

    /**
     * Setter of Nerve
     * 
     * The underlying innervation associated with the muscle.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of nerve
     */
    public function setNerve($value)
    {
        $this->nerve = $value;
    }

    /**
     * Getter of Origin
     * 
     * The place or point where a muscle arises.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Setter of Origin
     * 
     * The place or point where a muscle arises.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of origin
     */
    public function setOrigin($value)
    {
        $this->origin = $value;
    }
}
