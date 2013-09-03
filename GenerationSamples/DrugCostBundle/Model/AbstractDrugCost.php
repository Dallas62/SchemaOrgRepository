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

namespace SchemaRepository\Bundle\DrugCostBundle\Model;

use SchemaRepository\Bundle\DrugCostBundle\Model\DrugCostInterface;
use SchemaRepository\Bundle\MedicalIntangibleBundle\Model\AbstractMedicalIntangible;

/**
 * Model of Drug Cost
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\DrugCostBundle\Model
 */
abstract class AbstractDrugCost extends AbstractMedicalIntangible implements DrugCostInterface
{

    /**
     * The location in which the status applies.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $applicableLocation;

    /**
     * The category of cost, such as wholesale, retail, reimbursement cap,
     * etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $costCategory;

    /**
     * The currency (in 3-letter ISO 4217 format) of the drug cost.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $costCurrency;

    /**
     * Additional details to capture the origin of the cost data. For
     * example, 'Medicare Part B'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $costOrigin;

    /**
     * The cost per unit of the drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal|string
     */
    protected $costPerUnit;

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $drugUnit;

    /**
     * Getter of Applicable Location
     * 
     * The location in which the status applies.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getApplicableLocation()
    {
        return $this->applicableLocation;
    }

    /**
     * Setter of Applicable Location
     * 
     * The location in which the status applies.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of applicableLocation
     */
    public function setApplicableLocation($value)
    {
        $this->applicableLocation = $value;
    }

    /**
     * Getter of Cost Category
     * 
     * The category of cost, such as wholesale, retail, reimbursement cap,
     * etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCostCategory()
    {
        return $this->costCategory;
    }

    /**
     * Setter of Cost Category
     * 
     * The category of cost, such as wholesale, retail, reimbursement cap,
     * etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of costCategory
     */
    public function setCostCategory($value)
    {
        $this->costCategory = $value;
    }

    /**
     * Getter of Cost Currency
     * 
     * The currency (in 3-letter ISO 4217 format) of the drug cost.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getCostCurrency()
    {
        return $this->costCurrency;
    }

    /**
     * Setter of Cost Currency
     * 
     * The currency (in 3-letter ISO 4217 format) of the drug cost.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of costCurrency
     */
    public function setCostCurrency($value)
    {
        $this->costCurrency = $value;
    }

    /**
     * Getter of Cost Origin
     * 
     * Additional details to capture the origin of the cost data. For
     * example, 'Medicare Part B'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getCostOrigin()
    {
        return $this->costOrigin;
    }

    /**
     * Setter of Cost Origin
     * 
     * Additional details to capture the origin of the cost data. For
     * example, 'Medicare Part B'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of costOrigin
     */
    public function setCostOrigin($value)
    {
        $this->costOrigin = $value;
    }

    /**
     * Getter of Cost Per Unit
     * 
     * The cost per unit of the drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal|string
     */
    public function getCostPerUnit()
    {
        return $this->costPerUnit;
    }

    /**
     * Setter of Cost Per Unit
     * 
     * The cost per unit of the drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal|string $value Value of costPerUnit
     */
    public function setCostPerUnit($value)
    {
        $this->costPerUnit = $value;
    }

    /**
     * Getter of Drug Unit
     * 
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getDrugUnit()
    {
        return $this->drugUnit;
    }

    /**
     * Setter of Drug Unit
     * 
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of drugUnit
     */
    public function setDrugUnit($value)
    {
        $this->drugUnit = $value;
    }
}
