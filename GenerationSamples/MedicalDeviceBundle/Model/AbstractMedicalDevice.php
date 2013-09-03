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

namespace SchemaRepository\Bundle\MedicalDeviceBundle\Model;

use SchemaRepository\Bundle\MedicalDeviceBundle\Model\MedicalDeviceInterface;
use SchemaRepository\Bundle\MedicalEntityBundle\Model\AbstractMedicalEntity;

/**
 * Model of Medical Device
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalDeviceBundle\Model
 */
abstract class AbstractMedicalDevice extends AbstractMedicalEntity implements MedicalDeviceInterface
{

    /**
     * A possible complication and/or side effect of this therapy. If it is
     * known that an adverse outcome is serious (resulting in death,
     * disability, or permanent damage; requiring hospitalization; or is
     * otherwise life-threatening or requires immediate medical attention),
     * tag it as a seriouseAdverseOutcome instead.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $adverseOutcome;

    /**
     * A contraindication for this therapy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $contraindication;

    /**
     * A factor that indicates use of this therapy for treatment and/or
     * prevention of a condition, symptom, etc. For therapies such as drugs,
     * indications can include both officially-approved indications as well
     * as off-label uses. These can be distinguished by using the
     * ApprovedIndication subtype of MedicalIndication.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $indication;

    /**
     * A description of the postoperative procedures, care, and/or followups
     * for this device.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $postOp;

    /**
     * A description of the workup, testing, and other preparations required
     * before implanting this device.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $preOp;

    /**
     * A description of the procedure involved in setting up, using, and/or
     * installing the device.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $procedure;

    /**
     * A goal towards an action is taken. Can be concrete or abstract.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $purpose;

    /**
     * A possible serious complication and/or serious side effect of this
     * therapy. Serious adverse outcomes include those that are
     * life-threatening; result in death, disability, or permanent damage;
     * require hospitalization or prolong existing hospitalization; cause
     * congenital anomalies or birth defects; or jeopardize the patient and
     * may require medical or surgical intervention to prevent one of the
     * outcomes in this definition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $seriousAdverseOutcome;

    /**
     * Getter of Adverse Outcome
     * 
     * A possible complication and/or side effect of this therapy. If it is
     * known that an adverse outcome is serious (resulting in death,
     * disability, or permanent damage; requiring hospitalization; or is
     * otherwise life-threatening or requires immediate medical attention),
     * tag it as a seriouseAdverseOutcome instead.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAdverseOutcome()
    {
        return $this->adverseOutcome;
    }

    /**
     * Setter of Adverse Outcome
     * 
     * A possible complication and/or side effect of this therapy. If it is
     * known that an adverse outcome is serious (resulting in death,
     * disability, or permanent damage; requiring hospitalization; or is
     * otherwise life-threatening or requires immediate medical attention),
     * tag it as a seriouseAdverseOutcome instead.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of adverseOutcome
     */
    public function setAdverseOutcome($value)
    {
        $this->adverseOutcome = $value;
    }

    /**
     * Getter of Contraindication
     * 
     * A contraindication for this therapy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getContraindication()
    {
        return $this->contraindication;
    }

    /**
     * Setter of Contraindication
     * 
     * A contraindication for this therapy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of contraindication
     */
    public function setContraindication($value)
    {
        $this->contraindication = $value;
    }

    /**
     * Getter of Indication
     * 
     * A factor that indicates use of this therapy for treatment and/or
     * prevention of a condition, symptom, etc. For therapies such as drugs,
     * indications can include both officially-approved indications as well
     * as off-label uses. These can be distinguished by using the
     * ApprovedIndication subtype of MedicalIndication.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Setter of Indication
     * 
     * A factor that indicates use of this therapy for treatment and/or
     * prevention of a condition, symptom, etc. For therapies such as drugs,
     * indications can include both officially-approved indications as well
     * as off-label uses. These can be distinguished by using the
     * ApprovedIndication subtype of MedicalIndication.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of indication
     */
    public function setIndication($value)
    {
        $this->indication = $value;
    }

    /**
     * Getter of Post Op
     * 
     * A description of the postoperative procedures, care, and/or followups
     * for this device.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPostOp()
    {
        return $this->postOp;
    }

    /**
     * Setter of Post Op
     * 
     * A description of the postoperative procedures, care, and/or followups
     * for this device.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of postOp
     */
    public function setPostOp($value)
    {
        $this->postOp = $value;
    }

    /**
     * Getter of Pre Op
     * 
     * A description of the workup, testing, and other preparations required
     * before implanting this device.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPreOp()
    {
        return $this->preOp;
    }

    /**
     * Setter of Pre Op
     * 
     * A description of the workup, testing, and other preparations required
     * before implanting this device.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of preOp
     */
    public function setPreOp($value)
    {
        $this->preOp = $value;
    }

    /**
     * Getter of Procedure
     * 
     * A description of the procedure involved in setting up, using, and/or
     * installing the device.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Setter of Procedure
     * 
     * A description of the procedure involved in setting up, using, and/or
     * installing the device.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of procedure
     */
    public function setProcedure($value)
    {
        $this->procedure = $value;
    }

    /**
     * Getter of Purpose
     * 
     * A goal towards an action is taken. Can be concrete or abstract.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Setter of Purpose
     * 
     * A goal towards an action is taken. Can be concrete or abstract.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of purpose
     */
    public function setPurpose($value)
    {
        $this->purpose = $value;
    }

    /**
     * Getter of Serious Adverse Outcome
     * 
     * A possible serious complication and/or serious side effect of this
     * therapy. Serious adverse outcomes include those that are
     * life-threatening; result in death, disability, or permanent damage;
     * require hospitalization or prolong existing hospitalization; cause
     * congenital anomalies or birth defects; or jeopardize the patient and
     * may require medical or surgical intervention to prevent one of the
     * outcomes in this definition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSeriousAdverseOutcome()
    {
        return $this->seriousAdverseOutcome;
    }

    /**
     * Setter of Serious Adverse Outcome
     * 
     * A possible serious complication and/or serious side effect of this
     * therapy. Serious adverse outcomes include those that are
     * life-threatening; result in death, disability, or permanent damage;
     * require hospitalization or prolong existing hospitalization; cause
     * congenital anomalies or birth defects; or jeopardize the patient and
     * may require medical or surgical intervention to prevent one of the
     * outcomes in this definition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of seriousAdverseOutcome
     */
    public function setSeriousAdverseOutcome($value)
    {
        $this->seriousAdverseOutcome = $value;
    }
}
