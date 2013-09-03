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

namespace SchemaRepository\Bundle\SoftwareApplicationBundle\Model;

use SchemaRepository\Bundle\CreativeWorkBundle\Model\CreativeWorkInterface;

/**
 * Interface of Software Application Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\SoftwareApplicationBundle\Model
 */
interface SoftwareApplicationInterface extends CreativeWorkInterface
{

    /**
     * Getter of Application Category
     * 
     * Type of software application, e.g. "Game, Multimedia".
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string|string
     */
    public function getApplicationCategory();

    /**
     * Getter of Application Sub Category
     * 
     * Subcategory of the application, e.g. "Arcade Game".
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string|string
     */
    public function getApplicationSubCategory();

    /**
     * Getter of Application Suite
     * 
     * The name of the application suite to which the application belongs
     * (e.g. Excel belongs to Office)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getApplicationSuite();

    /**
     * Getter of Countries Not Supported
     * 
     * Countries for which the application is not supported. You can also
     * provide the two-letter ISO 3166-1 alpha-2 country code.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getCountriesNotSupported();

    /**
     * Getter of Countries Supported
     * 
     * Countries for which the application is supported. You can also provide
     * the two-letter ISO 3166-1 alpha-2 country code.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getCountriesSupported();

    /**
     * Getter of Device
     * 
     * Device required to run the application. Used in cases where a specific
     * make/model is required to run the application.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getDevice();

    /**
     * Getter of Download Url
     * 
     * If the file can be downloaded, URL to download the binary.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getDownloadUrl();

    /**
     * Getter of Feature List
     * 
     * Features or modules provided by this application (and possibly
     * required by other applications).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string|string
     */
    public function getFeatureList();

    /**
     * Getter of File Format
     * 
     * MIME format of the binary (e.g. application/zip).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getFileFormat();

    /**
     * Getter of File Size
     * 
     * Size of the application / package (e.g. 18MB). In the absence of a
     * unit (MB, KB etc.), KB will be assumed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long
     */
    public function getFileSize();

    /**
     * Getter of Install Url
     * 
     * URL at which the app may be installed, if different from the URL of
     * the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getInstallUrl();

    /**
     * Getter of Memory Requirements
     * 
     * Minimum memory requirements.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string|string
     */
    public function getMemoryRequirements();

    /**
     * Getter of Operating System
     * 
     * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getOperatingSystem();

    /**
     * Getter of Permissions
     * 
     * Permission(s) required to run the app (for example, a mobile app may
     * require full internet access or may run only on wifi).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPermissions();

    /**
     * Getter of Processor Requirements
     * 
     * Processor architecture required to run the application (e.g. IA64).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getProcessorRequirements();

    /**
     * Getter of Release Notes
     * 
     * Description of what changed in this version.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string|string
     */
    public function getReleaseNotes();

    /**
     * Getter of Requirements
     * 
     * Component dependency requirements for application. This includes
     * runtime environments and shared libraries that are not included in the
     * application distribution package, but required to run the application
     * (Examples: DirectX, Java or .NET runtime).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string|string
     */
    public function getRequirements();

    /**
     * Getter of Screenshot
     * 
     * A link to a screenshot image of the app.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getScreenshot();

    /**
     * Getter of Software Version
     * 
     * Version of the software instance.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSoftwareVersion();

    /**
     * Getter of Storage Requirements
     * 
     * Storage requirements (free space required).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string|string
     */
    public function getStorageRequirements();
}
