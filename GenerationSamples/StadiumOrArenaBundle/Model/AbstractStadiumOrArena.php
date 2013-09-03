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

namespace SchemaRepository\Bundle\StadiumOrArenaBundle\Model;

use SchemaRepository\Bundle\StadiumOrArenaBundle\Model\StadiumOrArenaInterface;
use SchemaRepository\Bundle\CivicStructureBundle\Model\AbstractCivicStructure;

/**
 * Model of Stadium or Arena
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\StadiumOrArenaBundle\Model
 */
abstract class AbstractStadiumOrArena extends AbstractCivicStructure implements StadiumOrArenaInterface
{

    /**
     * The larger organization that this local business is a branch of, if
     * any.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $branchOf;

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $brand;

    /**
     * A contact point for a person or organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $contactPoint;

    /**
     * A contact point for a person or organization (legacy spelling; see
     * singular form, contactPoint).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $contactPoints;

    /**
     * The currency accepted (in ISO 4217 currency format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $currenciesAccepted;

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or
     * business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $duns;

    /**
     * Email address.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $email;

    /**
     * Someone working for this organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $employee;

    /**
     * People working for this organization. (legacy spelling; see singular
     * form, employee)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $employees;

    /**
     * A person who founded this organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $founder;

    /**
     * A person who founded this organization (legacy spelling; see singular
     * form, founder).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $founders;

    /**
     * The date that this organization was founded.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $foundingDate;

    /**
     * Points-of-Sales operated by the organization or person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $hasPOS;

    /**
     * The official name of the organization, e.g. the registered company
     * name.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $legalName;

    /**
     * The location of the event, organization or action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $location;

    /**
     * A pointer to products or services offered by the organization or
     * person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $makesOffer;

    /**
     * A member of this organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $member;

    /**
     * A member of this organization (legacy spelling; see singular form,
     * member).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $members;

    /**
     * The North American Industry Classification System (NAICS) code for a
     * particular organization or business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $naics;

    /**
     * Products owned by the organization or person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $owns;

    /**
     * Cash, credit card, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $paymentAccepted;

    /**
     * The price range of the business, for example $$$.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $priceRange;

    /**
     * A pointer to products or services sought by the organization or person
     * (demand).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $seeks;

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the
     * US or the CIF/NIF in Spain.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $taxID;

    /**
     * The Value-added Tax ID of the organisation or person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $vatID;

    /**
     * Getter of Branch of
     * 
     * The larger organization that this local business is a branch of, if
     * any.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getBranchOf()
    {
        return $this->branchOf;
    }

    /**
     * Setter of Branch of
     * 
     * The larger organization that this local business is a branch of, if
     * any.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of branchOf
     */
    public function setBranchOf($value)
    {
        $this->branchOf = $value;
    }

    /**
     * Getter of Brand
     * 
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Setter of Brand
     * 
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of brand
     */
    public function setBrand($value)
    {
        $this->brand = $value;
    }

    /**
     * Getter of Contact Point
     * 
     * A contact point for a person or organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getContactPoint()
    {
        return $this->contactPoint;
    }

    /**
     * Setter of Contact Point
     * 
     * A contact point for a person or organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of contactPoint
     */
    public function setContactPoint($value)
    {
        $this->contactPoint = $value;
    }

    /**
     * Getter of Contact Points
     * 
     * A contact point for a person or organization (legacy spelling; see
     * singular form, contactPoint).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getContactPoints()
    {
        return $this->contactPoints;
    }

    /**
     * Setter of Contact Points
     * 
     * A contact point for a person or organization (legacy spelling; see
     * singular form, contactPoint).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of contactPoints
     */
    public function setContactPoints($value)
    {
        $this->contactPoints = $value;
    }

    /**
     * Add contactPoint to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of contactPoint
     */
    public function addContactPoint($value)
    {
        $this->contactPoints[] = $value;
    }

    /**
     * Remove contactPoint to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of contactPoint
     */
    public function removeContactPoint($value)
    {
        $key = array_search($value, $this->contactPoints);
        if($key !== false) {
           unset($this->contactPoints[$key]);
        }
    }

    /**
     * Getter of Currencies Accepted
     * 
     * The currency accepted (in ISO 4217 currency format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getCurrenciesAccepted()
    {
        return $this->currenciesAccepted;
    }

    /**
     * Setter of Currencies Accepted
     * 
     * The currency accepted (in ISO 4217 currency format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of currenciesAccepted
     */
    public function setCurrenciesAccepted($value)
    {
        $this->currenciesAccepted = $value;
    }

    /**
     * Getter of Duns
     * 
     * The Dun & Bradstreet DUNS number for identifying an organization or
     * business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getDuns()
    {
        return $this->duns;
    }

    /**
     * Setter of Duns
     * 
     * The Dun & Bradstreet DUNS number for identifying an organization or
     * business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of duns
     */
    public function setDuns($value)
    {
        $this->duns = $value;
    }

    /**
     * Getter of Email
     * 
     * Email address.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Setter of Email
     * 
     * Email address.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of email
     */
    public function setEmail($value)
    {
        $this->email = $value;
    }

    /**
     * Getter of Employee
     * 
     * Someone working for this organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Setter of Employee
     * 
     * Someone working for this organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of employee
     */
    public function setEmployee($value)
    {
        $this->employee = $value;
    }

    /**
     * Getter of Employees
     * 
     * People working for this organization. (legacy spelling; see singular
     * form, employee)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * Setter of Employees
     * 
     * People working for this organization. (legacy spelling; see singular
     * form, employee)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of employees
     */
    public function setEmployees($value)
    {
        $this->employees = $value;
    }

    /**
     * Add employee to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of employee
     */
    public function addEmployee($value)
    {
        $this->employees[] = $value;
    }

    /**
     * Remove employee to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of employee
     */
    public function removeEmployee($value)
    {
        $key = array_search($value, $this->employees);
        if($key !== false) {
           unset($this->employees[$key]);
        }
    }

    /**
     * Getter of Founder
     * 
     * A person who founded this organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getFounder()
    {
        return $this->founder;
    }

    /**
     * Setter of Founder
     * 
     * A person who founded this organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of founder
     */
    public function setFounder($value)
    {
        $this->founder = $value;
    }

    /**
     * Getter of Founders
     * 
     * A person who founded this organization (legacy spelling; see singular
     * form, founder).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getFounders()
    {
        return $this->founders;
    }

    /**
     * Setter of Founders
     * 
     * A person who founded this organization (legacy spelling; see singular
     * form, founder).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of founders
     */
    public function setFounders($value)
    {
        $this->founders = $value;
    }

    /**
     * Add founder to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of founder
     */
    public function addFounder($value)
    {
        $this->founders[] = $value;
    }

    /**
     * Remove founder to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of founder
     */
    public function removeFounder($value)
    {
        $key = array_search($value, $this->founders);
        if($key !== false) {
           unset($this->founders[$key]);
        }
    }

    /**
     * Getter of Founding Date
     * 
     * The date that this organization was founded.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getFoundingDate()
    {
        return $this->foundingDate;
    }

    /**
     * Setter of Founding Date
     * 
     * The date that this organization was founded.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of foundingDate
     */
    public function setFoundingDate($value)
    {
        $this->foundingDate = $value;
    }

    /**
     * Getter of Has POS
     * 
     * Points-of-Sales operated by the organization or person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getHasPOS()
    {
        return $this->hasPOS;
    }

    /**
     * Setter of Has POS
     * 
     * Points-of-Sales operated by the organization or person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of hasPOS
     */
    public function setHasPOS($value)
    {
        $this->hasPOS = $value;
    }

    /**
     * Getter of Legal Name
     * 
     * The official name of the organization, e.g. the registered company
     * name.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getLegalName()
    {
        return $this->legalName;
    }

    /**
     * Setter of Legal Name
     * 
     * The official name of the organization, e.g. the registered company
     * name.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of legalName
     */
    public function setLegalName($value)
    {
        $this->legalName = $value;
    }

    /**
     * Getter of Location
     * 
     * The location of the event, organization or action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Setter of Location
     * 
     * The location of the event, organization or action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of location
     */
    public function setLocation($value)
    {
        $this->location = $value;
    }

    /**
     * Getter of Makes Offer
     * 
     * A pointer to products or services offered by the organization or
     * person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getMakesOffer()
    {
        return $this->makesOffer;
    }

    /**
     * Setter of Makes Offer
     * 
     * A pointer to products or services offered by the organization or
     * person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of makesOffer
     */
    public function setMakesOffer($value)
    {
        $this->makesOffer = $value;
    }

    /**
     * Getter of Member
     * 
     * A member of this organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Setter of Member
     * 
     * A member of this organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of member
     */
    public function setMember($value)
    {
        $this->member = $value;
    }

    /**
     * Getter of Members
     * 
     * A member of this organization (legacy spelling; see singular form,
     * member).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Setter of Members
     * 
     * A member of this organization (legacy spelling; see singular form,
     * member).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of members
     */
    public function setMembers($value)
    {
        $this->members = $value;
    }

    /**
     * Add member to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of member
     */
    public function addMember($value)
    {
        $this->members[] = $value;
    }

    /**
     * Remove member to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of member
     */
    public function removeMember($value)
    {
        $key = array_search($value, $this->members);
        if($key !== false) {
           unset($this->members[$key]);
        }
    }

    /**
     * Getter of Naics
     * 
     * The North American Industry Classification System (NAICS) code for a
     * particular organization or business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getNaics()
    {
        return $this->naics;
    }

    /**
     * Setter of Naics
     * 
     * The North American Industry Classification System (NAICS) code for a
     * particular organization or business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of naics
     */
    public function setNaics($value)
    {
        $this->naics = $value;
    }

    /**
     * Getter of Owns
     * 
     * Products owned by the organization or person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getOwns()
    {
        return $this->owns;
    }

    /**
     * Setter of Owns
     * 
     * Products owned by the organization or person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of owns
     */
    public function setOwns($value)
    {
        $this->owns = $value;
    }

    /**
     * Getter of Payment Accepted
     * 
     * Cash, credit card, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPaymentAccepted()
    {
        return $this->paymentAccepted;
    }

    /**
     * Setter of Payment Accepted
     * 
     * Cash, credit card, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of paymentAccepted
     */
    public function setPaymentAccepted($value)
    {
        $this->paymentAccepted = $value;
    }

    /**
     * Getter of Price Range
     * 
     * The price range of the business, for example $$$.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPriceRange()
    {
        return $this->priceRange;
    }

    /**
     * Setter of Price Range
     * 
     * The price range of the business, for example $$$.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of priceRange
     */
    public function setPriceRange($value)
    {
        $this->priceRange = $value;
    }

    /**
     * Getter of Seeks
     * 
     * A pointer to products or services sought by the organization or person
     * (demand).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSeeks()
    {
        return $this->seeks;
    }

    /**
     * Setter of Seeks
     * 
     * A pointer to products or services sought by the organization or person
     * (demand).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of seeks
     */
    public function setSeeks($value)
    {
        $this->seeks = $value;
    }

    /**
     * Getter of Tax ID
     * 
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the
     * US or the CIF/NIF in Spain.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTaxID()
    {
        return $this->taxID;
    }

    /**
     * Setter of Tax ID
     * 
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the
     * US or the CIF/NIF in Spain.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of taxID
     */
    public function setTaxID($value)
    {
        $this->taxID = $value;
    }

    /**
     * Getter of Vat ID
     * 
     * The Value-added Tax ID of the organisation or person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getVatID()
    {
        return $this->vatID;
    }

    /**
     * Setter of Vat ID
     * 
     * The Value-added Tax ID of the organisation or person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of vatID
     */
    public function setVatID($value)
    {
        $this->vatID = $value;
    }
}
