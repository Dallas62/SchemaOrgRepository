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

use SchemaRepository\Bundle\CivicStructureBundle\Model\CivicStructureInterface;

/**
 * Interface of Stadium or Arena Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\StadiumOrArenaBundle\Model
 */
interface StadiumOrArenaInterface extends CivicStructureInterface
{

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
    public function getBranchOf();

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
    public function getBrand();

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
    public function getContactPoint();

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
    public function getContactPoints();

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
    public function getCurrenciesAccepted();

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
    public function getDuns();

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
    public function getEmail();

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
    public function getEmployee();

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
    public function getEmployees();

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
    public function getFounder();

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
    public function getFounders();

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
    public function getFoundingDate();

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
    public function getHasPOS();

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
    public function getLegalName();

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
    public function getLocation();

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
    public function getMakesOffer();

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
    public function getMember();

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
    public function getMembers();

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
    public function getNaics();

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
    public function getOwns();

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
    public function getPaymentAccepted();

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
    public function getPriceRange();

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
    public function getSeeks();

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
    public function getTaxID();

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
    public function getVatID();
}
