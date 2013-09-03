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

namespace SchemaRepository\Bundle\CodeBundle\Model;

use SchemaRepository\Bundle\CodeBundle\Model\CodeInterface;
use SchemaRepository\Bundle\CreativeWorkBundle\Model\AbstractCreativeWork;

/**
 * Model of Code
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\CodeBundle\Model
 */
abstract class AbstractCode extends AbstractCreativeWork implements CodeInterface
{

    /**
     * Link to the repository where the un-compiled, human readable code and
     * related code is located (SVN, github, CodePlex)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $codeRepository;

    /**
     * The computer programming language.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $programmingLanguage;

    /**
     * Runtime platform or script interpreter dependencies (Example - Java
     * v1, Python2.3, .Net Framework 3.0)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $runtime;

    /**
     * Full (compile ready) solution, code snippet, inline code, scripts,
     * template.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $sampleType;

    /**
     * Target Operating System / Product to which the code applies.  If
     * applies to several versions, just the product name can be used.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $targetProduct;

    /**
     * Getter of Code Repository
     * 
     * Link to the repository where the un-compiled, human readable code and
     * related code is located (SVN, github, CodePlex)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getCodeRepository()
    {
        return $this->codeRepository;
    }

    /**
     * Setter of Code Repository
     * 
     * Link to the repository where the un-compiled, human readable code and
     * related code is located (SVN, github, CodePlex)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of codeRepository
     */
    public function setCodeRepository($value)
    {
        $this->codeRepository = $value;
    }

    /**
     * Getter of Programming Language
     * 
     * The computer programming language.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getProgrammingLanguage()
    {
        return $this->programmingLanguage;
    }

    /**
     * Setter of Programming Language
     * 
     * The computer programming language.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of programmingLanguage
     */
    public function setProgrammingLanguage($value)
    {
        $this->programmingLanguage = $value;
    }

    /**
     * Getter of Runtime
     * 
     * Runtime platform or script interpreter dependencies (Example - Java
     * v1, Python2.3, .Net Framework 3.0)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Setter of Runtime
     * 
     * Runtime platform or script interpreter dependencies (Example - Java
     * v1, Python2.3, .Net Framework 3.0)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of runtime
     */
    public function setRuntime($value)
    {
        $this->runtime = $value;
    }

    /**
     * Getter of Sample Type
     * 
     * Full (compile ready) solution, code snippet, inline code, scripts,
     * template.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSampleType()
    {
        return $this->sampleType;
    }

    /**
     * Setter of Sample Type
     * 
     * Full (compile ready) solution, code snippet, inline code, scripts,
     * template.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of sampleType
     */
    public function setSampleType($value)
    {
        $this->sampleType = $value;
    }

    /**
     * Getter of Target Product
     * 
     * Target Operating System / Product to which the code applies.  If
     * applies to several versions, just the product name can be used.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getTargetProduct()
    {
        return $this->targetProduct;
    }

    /**
     * Setter of Target Product
     * 
     * Target Operating System / Product to which the code applies.  If
     * applies to several versions, just the product name can be used.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of targetProduct
     */
    public function setTargetProduct($value)
    {
        $this->targetProduct = $value;
    }
}
