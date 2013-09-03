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

namespace SchemaRepository\Bundle\CookActionBundle\Model;

use SchemaRepository\Bundle\CookActionBundle\Model\CookActionInterface;
use SchemaRepository\Bundle\CreateActionBundle\Model\AbstractCreateAction;

/**
 * Model of Cook Action
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\CookActionBundle\Model
 */
abstract class AbstractCookAction extends AbstractCreateAction implements CookActionInterface
{

    /**
     * A sub property of location. The specific food establishment where the
     * action occurreed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $foodEstablishment;

    /**
     * A sub property of location. The specific food event where the action
     * occurred.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $foodEvent;

    /**
     * A sub property of instrument. The recipe/instructions used to perform
     * the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $recipe;

    /**
     * Getter of Food Establishment
     * 
     * A sub property of location. The specific food establishment where the
     * action occurreed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getFoodEstablishment()
    {
        return $this->foodEstablishment;
    }

    /**
     * Setter of Food Establishment
     * 
     * A sub property of location. The specific food establishment where the
     * action occurreed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of foodEstablishment
     */
    public function setFoodEstablishment($value)
    {
        $this->foodEstablishment = $value;
    }

    /**
     * Getter of Food Event
     * 
     * A sub property of location. The specific food event where the action
     * occurred.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getFoodEvent()
    {
        return $this->foodEvent;
    }

    /**
     * Setter of Food Event
     * 
     * A sub property of location. The specific food event where the action
     * occurred.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of foodEvent
     */
    public function setFoodEvent($value)
    {
        $this->foodEvent = $value;
    }

    /**
     * Getter of Recipe
     * 
     * A sub property of instrument. The recipe/instructions used to perform
     * the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

    /**
     * Setter of Recipe
     * 
     * A sub property of instrument. The recipe/instructions used to perform
     * the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of recipe
     */
    public function setRecipe($value)
    {
        $this->recipe = $value;
    }
}
