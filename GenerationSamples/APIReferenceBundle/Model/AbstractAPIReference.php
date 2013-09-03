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

namespace SchemaRepository\Bundle\APIReferenceBundle\Model;

use SchemaRepository\Bundle\APIReferenceBundle\Model\APIReferenceInterface;
use SchemaRepository\Bundle\TechArticleBundle\Model\AbstractTechArticle;

/**
 * Model of API Reference
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\APIReferenceBundle\Model
 */
abstract class AbstractAPIReference extends AbstractTechArticle implements APIReferenceInterface
{

    /**
     * Library file name e.g., mscorlib.dll, system.web.dll
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $assembly;

    /**
     * Associated product/technology version. e.g., .NET Framework 4.5
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $assemblyVersion;

    /**
     * Indicates whether API is managed or unmanaged.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $programmingModel;

    /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $targetPlatform;

    /**
     * Getter of Assembly
     * 
     * Library file name e.g., mscorlib.dll, system.web.dll
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAssembly()
    {
        return $this->assembly;
    }

    /**
     * Setter of Assembly
     * 
     * Library file name e.g., mscorlib.dll, system.web.dll
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of assembly
     */
    public function setAssembly($value)
    {
        $this->assembly = $value;
    }

    /**
     * Getter of Assembly Version
     * 
     * Associated product/technology version. e.g., .NET Framework 4.5
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAssemblyVersion()
    {
        return $this->assemblyVersion;
    }

    /**
     * Setter of Assembly Version
     * 
     * Associated product/technology version. e.g., .NET Framework 4.5
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of assemblyVersion
     */
    public function setAssemblyVersion($value)
    {
        $this->assemblyVersion = $value;
    }

    /**
     * Getter of Programming Model
     * 
     * Indicates whether API is managed or unmanaged.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getProgrammingModel()
    {
        return $this->programmingModel;
    }

    /**
     * Setter of Programming Model
     * 
     * Indicates whether API is managed or unmanaged.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of programmingModel
     */
    public function setProgrammingModel($value)
    {
        $this->programmingModel = $value;
    }

    /**
     * Getter of Target Platform
     * 
     * Type of app development: phone, Metro style, desktop, XBox, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTargetPlatform()
    {
        return $this->targetPlatform;
    }

    /**
     * Setter of Target Platform
     * 
     * Type of app development: phone, Metro style, desktop, XBox, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of targetPlatform
     */
    public function setTargetPlatform($value)
    {
        $this->targetPlatform = $value;
    }
}
