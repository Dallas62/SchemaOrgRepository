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

namespace SchemaRepository\Bundle\SellActionBundle\Model;

use SchemaRepository\Bundle\SellActionBundle\Model\SellActionInterface;
use SchemaRepository\Bundle\TradeActionBundle\Model\AbstractTradeAction;

/**
 * Model of Sell Action
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\SellActionBundle\Model
 */
abstract class AbstractSellAction extends AbstractTradeAction implements SellActionInterface
{

    /**
     * A sub property of participant. The participant/person/organization
     * that bought the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $buyer;

    /**
     * The warranty promise(s) included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $warrantyPromise;

    /**
     * Getter of Buyer
     * 
     * A sub property of participant. The participant/person/organization
     * that bought the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Setter of Buyer
     * 
     * A sub property of participant. The participant/person/organization
     * that bought the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of buyer
     */
    public function setBuyer($value)
    {
        $this->buyer = $value;
    }

    /**
     * Getter of Warranty Promise
     * 
     * The warranty promise(s) included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getWarrantyPromise()
    {
        return $this->warrantyPromise;
    }

    /**
     * Setter of Warranty Promise
     * 
     * The warranty promise(s) included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of warrantyPromise
     */
    public function setWarrantyPromise($value)
    {
        $this->warrantyPromise = $value;
    }
}
