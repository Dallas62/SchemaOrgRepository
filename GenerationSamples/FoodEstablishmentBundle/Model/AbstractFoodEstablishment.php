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

namespace SchemaRepository\Bundle\FoodEstablishmentBundle\Model;

use SchemaRepository\Bundle\FoodEstablishmentBundle\Model\FoodEstablishmentInterface;
use SchemaRepository\Bundle\LocalBusinessBundle\Model\AbstractLocalBusiness;

/**
 * Model of Food Establishment
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\FoodEstablishmentBundle\Model
 */
abstract class AbstractFoodEstablishment extends AbstractLocalBusiness implements FoodEstablishmentInterface
{

    /**
     * Either Yes/No, or a URL at which reservations can be made.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string|string
     */
    protected $acceptsReservations;

    /**
     * Either the actual menu or a URL of the menu.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string|string
     */
    protected $menu;

    /**
     * The cuisine of the restaurant.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $servesCuisine;

    /**
     * Getter of Accepts Reservations
     * 
     * Either Yes/No, or a URL at which reservations can be made.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string|string
     */
    public function getAcceptsReservations()
    {
        return $this->acceptsReservations;
    }

    /**
     * Setter of Accepts Reservations
     * 
     * Either Yes/No, or a URL at which reservations can be made.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string|string $value Value of acceptsReservations
     */
    public function setAcceptsReservations($value)
    {
        $this->acceptsReservations = $value;
    }

    /**
     * Getter of Menu
     * 
     * Either the actual menu or a URL of the menu.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string|string
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Setter of Menu
     * 
     * Either the actual menu or a URL of the menu.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string|string $value Value of menu
     */
    public function setMenu($value)
    {
        $this->menu = $value;
    }

    /**
     * Getter of Serves Cuisine
     * 
     * The cuisine of the restaurant.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getServesCuisine()
    {
        return $this->servesCuisine;
    }

    /**
     * Setter of Serves Cuisine
     * 
     * The cuisine of the restaurant.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of servesCuisine
     */
    public function setServesCuisine($value)
    {
        $this->servesCuisine = $value;
    }
}
