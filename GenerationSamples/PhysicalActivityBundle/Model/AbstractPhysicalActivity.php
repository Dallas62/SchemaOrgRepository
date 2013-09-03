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

namespace SchemaRepository\Bundle\PhysicalActivityBundle\Model;

use SchemaRepository\Bundle\PhysicalActivityBundle\Model\PhysicalActivityInterface;
use SchemaRepository\Bundle\LifestyleModificationBundle\Model\AbstractLifestyleModification;

/**
 * Model of Physical Activity
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\PhysicalActivityBundle\Model
 */
abstract class AbstractPhysicalActivity extends AbstractLifestyleModification implements PhysicalActivityInterface
{

    /**
     * The anatomy of the underlying organ system or structures associated
     * with this entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $associatedAnatomy;

    /**
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $category;

    /**
     * The characteristics of associated patients, such as age, gender, race
     * etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $epidemiology;

    /**
     * Changes in the normal mechanical, physical, and biochemical functions
     * that are associated with this activity or condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $pathophysiology;

    /**
     * Getter of Associated Anatomy
     * 
     * The anatomy of the underlying organ system or structures associated
     * with this entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAssociatedAnatomy()
    {
        return $this->associatedAnatomy;
    }

    /**
     * Setter of Associated Anatomy
     * 
     * The anatomy of the underlying organ system or structures associated
     * with this entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of associatedAnatomy
     */
    public function setAssociatedAnatomy($value)
    {
        $this->associatedAnatomy = $value;
    }

    /**
     * Getter of Category
     * 
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Setter of Category
     * 
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of category
     */
    public function setCategory($value)
    {
        $this->category = $value;
    }

    /**
     * Getter of Epidemiology
     * 
     * The characteristics of associated patients, such as age, gender, race
     * etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getEpidemiology()
    {
        return $this->epidemiology;
    }

    /**
     * Setter of Epidemiology
     * 
     * The characteristics of associated patients, such as age, gender, race
     * etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of epidemiology
     */
    public function setEpidemiology($value)
    {
        $this->epidemiology = $value;
    }

    /**
     * Getter of Pathophysiology
     * 
     * Changes in the normal mechanical, physical, and biochemical functions
     * that are associated with this activity or condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPathophysiology()
    {
        return $this->pathophysiology;
    }

    /**
     * Setter of Pathophysiology
     * 
     * Changes in the normal mechanical, physical, and biochemical functions
     * that are associated with this activity or condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of pathophysiology
     */
    public function setPathophysiology($value)
    {
        $this->pathophysiology = $value;
    }
}
