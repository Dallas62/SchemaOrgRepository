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

namespace SchemaRepository\Bundle\WarrantyPromiseBundle\Model;

use SchemaRepository\Bundle\WarrantyPromiseBundle\Model\WarrantyPromiseInterface;
use SchemaRepository\Bundle\StructuredValueBundle\Model\AbstractStructuredValue;

/**
 * Model of Warranty Promise
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\WarrantyPromiseBundle\Model
 */
abstract class AbstractWarrantyPromise extends AbstractStructuredValue implements WarrantyPromiseInterface
{

    /**
     * The duration of the warranty promise. Common unitCode values are ANN
     * for year, MON for months, or DAY for days.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $durationOfWarranty;

    /**
     * The scope of the warranty promise.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $warrantyScope;

    /**
     * Getter of Duration of Warranty
     * 
     * The duration of the warranty promise. Common unitCode values are ANN
     * for year, MON for months, or DAY for days.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDurationOfWarranty()
    {
        return $this->durationOfWarranty;
    }

    /**
     * Setter of Duration of Warranty
     * 
     * The duration of the warranty promise. Common unitCode values are ANN
     * for year, MON for months, or DAY for days.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of durationOfWarranty
     */
    public function setDurationOfWarranty($value)
    {
        $this->durationOfWarranty = $value;
    }

    /**
     * Getter of Warranty Scope
     * 
     * The scope of the warranty promise.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getWarrantyScope()
    {
        return $this->warrantyScope;
    }

    /**
     * Setter of Warranty Scope
     * 
     * The scope of the warranty promise.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of warrantyScope
     */
    public function setWarrantyScope($value)
    {
        $this->warrantyScope = $value;
    }
}
