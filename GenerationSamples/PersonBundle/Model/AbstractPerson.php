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

namespace SchemaRepository\Bundle\PersonBundle\Model;

use SchemaRepository\Bundle\PersonBundle\Model\PersonInterface;
use SchemaRepository\Bundle\ThingBundle\Model\AbstractThing;

/**
 * Model of Person
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\PersonBundle\Model
 */
abstract class AbstractPerson extends AbstractThing implements PersonInterface
{

    /**
     * An additional name for a Person, can be used for a middle name.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $additionalName;

    /**
     * Physical address of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $address;

    /**
     * An organization that this person is affiliated with. For example, a
     * school/university, a club, or a team.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $affiliation;

    /**
     * An educational organizations that the person is an alumni of.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $alumniOf;

    /**
     * An award won by this person or for this creative work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $award;

    /**
     * Awards won by this person or for this creative work. (legacy spelling;
     * see singular form, award)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $awards;

    /**
     * Date of birth.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $birthDate;

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
     * A child of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $children;

    /**
     * A colleague of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $colleague;

    /**
     * A colleague of the person (legacy spelling; see singular form,
     * colleague).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $colleagues;

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
     * Date of death.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $deathDate;

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
     * Family name. In the U.S., the last name of an Person. This can be used
     * along with givenName instead of the Name property.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $familyName;

    /**
     * The fax number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $faxNumber;

    /**
     * The most generic uni-directional social relation.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $follows;

    /**
     * Gender of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $gender;

    /**
     * Given name. In the U.S., the first name of a Person. This can be used
     * along with familyName instead of the Name property.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $givenName;

    /**
     * The Global Location Number (GLN, sometimes also referred to as
     * International Location Number or ILN) of the respective organization,
     * person, or place. The GLN is a 13-digit number used to identify
     * parties and physical locations.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $globalLocationNumber;

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
     * A contact location for a person's residence.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $homeLocation;

    /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $honorificPrefix;

    /**
     * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $honorificSuffix;

    /**
     * A count of a specific user interactions with this item—for example,
     * 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user
     * interaction type should be one of the sub types of UserInteraction.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $interactionCount;

    /**
     * The International Standard of Industrial Classification of All
     * Economic Activities (ISIC), Revision 4 code for a particular
     * organization, business person, or place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $isicV4;

    /**
     * The job title of the person (for example, Financial Manager).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $jobTitle;

    /**
     * The most generic bi-directional social/work relation.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $knows;

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
     * An organization to which the person belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $memberOf;

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
     * Nationality of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $nationality;

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
     * A parent of this person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $parent;

    /**
     * A parents of the person (legacy spelling; see singular form, parent).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $parents;

    /**
     * Event that this person is a performer or participant in.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $performerIn;

    /**
     * The most generic familial relation.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $relatedTo;

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
     * A sibling of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $sibling;

    /**
     * A sibling of the person (legacy spelling; see singular form, sibling).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $siblings;

    /**
     * The person's spouse.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $spouse;

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
     * The telephone number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $telephone;

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
     * A contact location for a person's place of work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $workLocation;

    /**
     * Organizations that the person works for.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $worksFor;

    /**
     * Getter of Additional Name
     * 
     * An additional name for a Person, can be used for a middle name.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAdditionalName()
    {
        return $this->additionalName;
    }

    /**
     * Setter of Additional Name
     * 
     * An additional name for a Person, can be used for a middle name.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of additionalName
     */
    public function setAdditionalName($value)
    {
        $this->additionalName = $value;
    }

    /**
     * Getter of Address
     * 
     * Physical address of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Setter of Address
     * 
     * Physical address of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of address
     */
    public function setAddress($value)
    {
        $this->address = $value;
    }

    /**
     * Getter of Affiliation
     * 
     * An organization that this person is affiliated with. For example, a
     * school/university, a club, or a team.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * Setter of Affiliation
     * 
     * An organization that this person is affiliated with. For example, a
     * school/university, a club, or a team.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of affiliation
     */
    public function setAffiliation($value)
    {
        $this->affiliation = $value;
    }

    /**
     * Getter of Alumni of
     * 
     * An educational organizations that the person is an alumni of.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAlumniOf()
    {
        return $this->alumniOf;
    }

    /**
     * Setter of Alumni of
     * 
     * An educational organizations that the person is an alumni of.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of alumniOf
     */
    public function setAlumniOf($value)
    {
        $this->alumniOf = $value;
    }

    /**
     * Getter of Award
     * 
     * An award won by this person or for this creative work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * Setter of Award
     * 
     * An award won by this person or for this creative work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of award
     */
    public function setAward($value)
    {
        $this->award = $value;
    }

    /**
     * Getter of Awards
     * 
     * Awards won by this person or for this creative work. (legacy spelling;
     * see singular form, award)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * Setter of Awards
     * 
     * Awards won by this person or for this creative work. (legacy spelling;
     * see singular form, award)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of awards
     */
    public function setAwards($value)
    {
        $this->awards = $value;
    }

    /**
     * Getter of Birth Date
     * 
     * Date of birth.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Setter of Birth Date
     * 
     * Date of birth.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of birthDate
     */
    public function setBirthDate($value)
    {
        $this->birthDate = $value;
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
     * Getter of Children
     * 
     * A child of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Setter of Children
     * 
     * A child of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of children
     */
    public function setChildren($value)
    {
        $this->children = $value;
    }

    /**
     * Getter of Colleague
     * 
     * A colleague of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getColleague()
    {
        return $this->colleague;
    }

    /**
     * Setter of Colleague
     * 
     * A colleague of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of colleague
     */
    public function setColleague($value)
    {
        $this->colleague = $value;
    }

    /**
     * Getter of Colleagues
     * 
     * A colleague of the person (legacy spelling; see singular form,
     * colleague).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getColleagues()
    {
        return $this->colleagues;
    }

    /**
     * Setter of Colleagues
     * 
     * A colleague of the person (legacy spelling; see singular form,
     * colleague).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of colleagues
     */
    public function setColleagues($value)
    {
        $this->colleagues = $value;
    }

    /**
     * Add colleague to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of colleague
     */
    public function addColleague($value)
    {
        $this->colleagues[] = $value;
    }

    /**
     * Remove colleague to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of colleague
     */
    public function removeColleague($value)
    {
        $key = array_search($value, $this->colleagues);
        if($key !== false) {
           unset($this->colleagues[$key]);
        }
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
     * Getter of Death Date
     * 
     * Date of death.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDeathDate()
    {
        return $this->deathDate;
    }

    /**
     * Setter of Death Date
     * 
     * Date of death.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of deathDate
     */
    public function setDeathDate($value)
    {
        $this->deathDate = $value;
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
     * Getter of Family Name
     * 
     * Family name. In the U.S., the last name of an Person. This can be used
     * along with givenName instead of the Name property.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Setter of Family Name
     * 
     * Family name. In the U.S., the last name of an Person. This can be used
     * along with givenName instead of the Name property.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of familyName
     */
    public function setFamilyName($value)
    {
        $this->familyName = $value;
    }

    /**
     * Getter of Fax Number
     * 
     * The fax number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Setter of Fax Number
     * 
     * The fax number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of faxNumber
     */
    public function setFaxNumber($value)
    {
        $this->faxNumber = $value;
    }

    /**
     * Getter of Follows
     * 
     * The most generic uni-directional social relation.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getFollows()
    {
        return $this->follows;
    }

    /**
     * Setter of Follows
     * 
     * The most generic uni-directional social relation.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of follows
     */
    public function setFollows($value)
    {
        $this->follows = $value;
    }

    /**
     * Getter of Gender
     * 
     * Gender of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Setter of Gender
     * 
     * Gender of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of gender
     */
    public function setGender($value)
    {
        $this->gender = $value;
    }

    /**
     * Getter of Given Name
     * 
     * Given name. In the U.S., the first name of a Person. This can be used
     * along with familyName instead of the Name property.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * Setter of Given Name
     * 
     * Given name. In the U.S., the first name of a Person. This can be used
     * along with familyName instead of the Name property.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of givenName
     */
    public function setGivenName($value)
    {
        $this->givenName = $value;
    }

    /**
     * Getter of Global Location Number
     * 
     * The Global Location Number (GLN, sometimes also referred to as
     * International Location Number or ILN) of the respective organization,
     * person, or place. The GLN is a 13-digit number used to identify
     * parties and physical locations.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getGlobalLocationNumber()
    {
        return $this->globalLocationNumber;
    }

    /**
     * Setter of Global Location Number
     * 
     * The Global Location Number (GLN, sometimes also referred to as
     * International Location Number or ILN) of the respective organization,
     * person, or place. The GLN is a 13-digit number used to identify
     * parties and physical locations.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of globalLocationNumber
     */
    public function setGlobalLocationNumber($value)
    {
        $this->globalLocationNumber = $value;
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
     * Getter of Home Location
     * 
     * A contact location for a person's residence.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getHomeLocation()
    {
        return $this->homeLocation;
    }

    /**
     * Setter of Home Location
     * 
     * A contact location for a person's residence.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of homeLocation
     */
    public function setHomeLocation($value)
    {
        $this->homeLocation = $value;
    }

    /**
     * Getter of Honorific Prefix
     * 
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getHonorificPrefix()
    {
        return $this->honorificPrefix;
    }

    /**
     * Setter of Honorific Prefix
     * 
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of honorificPrefix
     */
    public function setHonorificPrefix($value)
    {
        $this->honorificPrefix = $value;
    }

    /**
     * Getter of Honorific Suffix
     * 
     * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getHonorificSuffix()
    {
        return $this->honorificSuffix;
    }

    /**
     * Setter of Honorific Suffix
     * 
     * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of honorificSuffix
     */
    public function setHonorificSuffix($value)
    {
        $this->honorificSuffix = $value;
    }

    /**
     * Getter of Interaction Count
     * 
     * A count of a specific user interactions with this item—for example,
     * 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user
     * interaction type should be one of the sub types of UserInteraction.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getInteractionCount()
    {
        return $this->interactionCount;
    }

    /**
     * Setter of Interaction Count
     * 
     * A count of a specific user interactions with this item—for example,
     * 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user
     * interaction type should be one of the sub types of UserInteraction.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of interactionCount
     */
    public function setInteractionCount($value)
    {
        $this->interactionCount = $value;
    }

    /**
     * Getter of Isic V4
     * 
     * The International Standard of Industrial Classification of All
     * Economic Activities (ISIC), Revision 4 code for a particular
     * organization, business person, or place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getIsicV4()
    {
        return $this->isicV4;
    }

    /**
     * Setter of Isic V4
     * 
     * The International Standard of Industrial Classification of All
     * Economic Activities (ISIC), Revision 4 code for a particular
     * organization, business person, or place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of isicV4
     */
    public function setIsicV4($value)
    {
        $this->isicV4 = $value;
    }

    /**
     * Getter of Job Title
     * 
     * The job title of the person (for example, Financial Manager).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Setter of Job Title
     * 
     * The job title of the person (for example, Financial Manager).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of jobTitle
     */
    public function setJobTitle($value)
    {
        $this->jobTitle = $value;
    }

    /**
     * Getter of Knows
     * 
     * The most generic bi-directional social/work relation.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getKnows()
    {
        return $this->knows;
    }

    /**
     * Setter of Knows
     * 
     * The most generic bi-directional social/work relation.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of knows
     */
    public function setKnows($value)
    {
        $this->knows = $value;
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
     * Getter of Member of
     * 
     * An organization to which the person belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getMemberOf()
    {
        return $this->memberOf;
    }

    /**
     * Setter of Member of
     * 
     * An organization to which the person belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of memberOf
     */
    public function setMemberOf($value)
    {
        $this->memberOf = $value;
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
     * Getter of Nationality
     * 
     * Nationality of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Setter of Nationality
     * 
     * Nationality of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of nationality
     */
    public function setNationality($value)
    {
        $this->nationality = $value;
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
     * Getter of Parent
     * 
     * A parent of this person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Setter of Parent
     * 
     * A parent of this person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of parent
     */
    public function setParent($value)
    {
        $this->parent = $value;
    }

    /**
     * Getter of Parents
     * 
     * A parents of the person (legacy spelling; see singular form, parent).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * Setter of Parents
     * 
     * A parents of the person (legacy spelling; see singular form, parent).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of parents
     */
    public function setParents($value)
    {
        $this->parents = $value;
    }

    /**
     * Add parent to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of parent
     */
    public function addParent($value)
    {
        $this->parents[] = $value;
    }

    /**
     * Remove parent to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of parent
     */
    public function removeParent($value)
    {
        $key = array_search($value, $this->parents);
        if($key !== false) {
           unset($this->parents[$key]);
        }
    }

    /**
     * Getter of Performer in
     * 
     * Event that this person is a performer or participant in.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPerformerIn()
    {
        return $this->performerIn;
    }

    /**
     * Setter of Performer in
     * 
     * Event that this person is a performer or participant in.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of performerIn
     */
    public function setPerformerIn($value)
    {
        $this->performerIn = $value;
    }

    /**
     * Getter of Related to
     * 
     * The most generic familial relation.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRelatedTo()
    {
        return $this->relatedTo;
    }

    /**
     * Setter of Related to
     * 
     * The most generic familial relation.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of relatedTo
     */
    public function setRelatedTo($value)
    {
        $this->relatedTo = $value;
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
     * Getter of Sibling
     * 
     * A sibling of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSibling()
    {
        return $this->sibling;
    }

    /**
     * Setter of Sibling
     * 
     * A sibling of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of sibling
     */
    public function setSibling($value)
    {
        $this->sibling = $value;
    }

    /**
     * Getter of Siblings
     * 
     * A sibling of the person (legacy spelling; see singular form, sibling).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getSiblings()
    {
        return $this->siblings;
    }

    /**
     * Setter of Siblings
     * 
     * A sibling of the person (legacy spelling; see singular form, sibling).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of siblings
     */
    public function setSiblings($value)
    {
        $this->siblings = $value;
    }

    /**
     * Add sibling to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of sibling
     */
    public function addSibling($value)
    {
        $this->siblings[] = $value;
    }

    /**
     * Remove sibling to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of sibling
     */
    public function removeSibling($value)
    {
        $key = array_search($value, $this->siblings);
        if($key !== false) {
           unset($this->siblings[$key]);
        }
    }

    /**
     * Getter of Spouse
     * 
     * The person's spouse.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSpouse()
    {
        return $this->spouse;
    }

    /**
     * Setter of Spouse
     * 
     * The person's spouse.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of spouse
     */
    public function setSpouse($value)
    {
        $this->spouse = $value;
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
     * Getter of Telephone
     * 
     * The telephone number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Setter of Telephone
     * 
     * The telephone number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of telephone
     */
    public function setTelephone($value)
    {
        $this->telephone = $value;
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

    /**
     * Getter of Work Location
     * 
     * A contact location for a person's place of work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getWorkLocation()
    {
        return $this->workLocation;
    }

    /**
     * Setter of Work Location
     * 
     * A contact location for a person's place of work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of workLocation
     */
    public function setWorkLocation($value)
    {
        $this->workLocation = $value;
    }

    /**
     * Getter of Works for
     * 
     * Organizations that the person works for.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getWorksFor()
    {
        return $this->worksFor;
    }

    /**
     * Setter of Works for
     * 
     * Organizations that the person works for.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of worksFor
     */
    public function setWorksFor($value)
    {
        $this->worksFor = $value;
    }
}
