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

namespace SchemaRepository\Bundle\RentActionBundle\Model;

use SchemaRepository\Bundle\RentActionBundle\Model\RentActionInterface;
use SchemaRepository\Bundle\TradeActionBundle\Model\AbstractTradeAction;

/**
 * Model of Rent Action
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\RentActionBundle\Model
 */
abstract class AbstractRentAction extends AbstractTradeAction implements RentActionInterface
{

    /**
     * A sub property of participant. The owner of the real estate property.
     * Sub property of destination or participant?
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $landlord;

    /**
     * A sub property of participant. The real estate agent involved in the
     * action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $realEstateAgent;

    /**
     * Getter of Landlord
     * 
     * A sub property of participant. The owner of the real estate property.
     * Sub property of destination or participant?
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getLandlord()
    {
        return $this->landlord;
    }

    /**
     * Setter of Landlord
     * 
     * A sub property of participant. The owner of the real estate property.
     * Sub property of destination or participant?
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of landlord
     */
    public function setLandlord($value)
    {
        $this->landlord = $value;
    }

    /**
     * Getter of Real Estate Agent
     * 
     * A sub property of participant. The real estate agent involved in the
     * action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRealEstateAgent()
    {
        return $this->realEstateAgent;
    }

    /**
     * Setter of Real Estate Agent
     * 
     * A sub property of participant. The real estate agent involved in the
     * action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of realEstateAgent
     */
    public function setRealEstateAgent($value)
    {
        $this->realEstateAgent = $value;
    }
}
