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

use SchemaRepository\Bundle\SoftwareApplicationBundle\Model\SoftwareApplicationInterface;
use SchemaRepository\Bundle\CreativeWorkBundle\Model\AbstractCreativeWork;

/**
 * Model of Software Application
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\SoftwareApplicationBundle\Model
 */
abstract class AbstractSoftwareApplication extends AbstractCreativeWork implements SoftwareApplicationInterface
{

    /**
     * Type of software application, e.g. "Game, Multimedia".
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string|string
     */
    protected $applicationCategory;

    /**
     * Subcategory of the application, e.g. "Arcade Game".
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string|string
     */
    protected $applicationSubCategory;

    /**
     * The name of the application suite to which the application belongs
     * (e.g. Excel belongs to Office)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $applicationSuite;

    /**
     * Countries for which the application is not supported. You can also
     * provide the two-letter ISO 3166-1 alpha-2 country code.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $countriesNotSupported;

    /**
     * Countries for which the application is supported. You can also provide
     * the two-letter ISO 3166-1 alpha-2 country code.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $countriesSupported;

    /**
     * Device required to run the application. Used in cases where a specific
     * make/model is required to run the application.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $device;

    /**
     * If the file can be downloaded, URL to download the binary.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $downloadUrl;

    /**
     * Features or modules provided by this application (and possibly
     * required by other applications).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string|string
     */
    protected $featureList;

    /**
     * MIME format of the binary (e.g. application/zip).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $fileFormat;

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a
     * unit (MB, KB etc.), KB will be assumed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long
     */
    protected $fileSize;

    /**
     * URL at which the app may be installed, if different from the URL of
     * the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $installUrl;

    /**
     * Minimum memory requirements.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string|string
     */
    protected $memoryRequirements;

    /**
     * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $operatingSystem;

    /**
     * Permission(s) required to run the app (for example, a mobile app may
     * require full internet access or may run only on wifi).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $permissions;

    /**
     * Processor architecture required to run the application (e.g. IA64).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $processorRequirements;

    /**
     * Description of what changed in this version.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string|string
     */
    protected $releaseNotes;

    /**
     * Component dependency requirements for application. This includes
     * runtime environments and shared libraries that are not included in the
     * application distribution package, but required to run the application
     * (Examples: DirectX, Java or .NET runtime).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string|string
     */
    protected $requirements;

    /**
     * A link to a screenshot image of the app.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $screenshot;

    /**
     * Version of the software instance.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $softwareVersion;

    /**
     * Storage requirements (free space required).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string|string
     */
    protected $storageRequirements;

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
    public function getApplicationCategory()
    {
        return $this->applicationCategory;
    }

    /**
     * Setter of Application Category
     * 
     * Type of software application, e.g. "Game, Multimedia".
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string|string $value Value of applicationCategory
     */
    public function setApplicationCategory($value)
    {
        $this->applicationCategory = $value;
    }

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
    public function getApplicationSubCategory()
    {
        return $this->applicationSubCategory;
    }

    /**
     * Setter of Application Sub Category
     * 
     * Subcategory of the application, e.g. "Arcade Game".
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string|string $value Value of applicationSubCategory
     */
    public function setApplicationSubCategory($value)
    {
        $this->applicationSubCategory = $value;
    }

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
    public function getApplicationSuite()
    {
        return $this->applicationSuite;
    }

    /**
     * Setter of Application Suite
     * 
     * The name of the application suite to which the application belongs
     * (e.g. Excel belongs to Office)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of applicationSuite
     */
    public function setApplicationSuite($value)
    {
        $this->applicationSuite = $value;
    }

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
    public function getCountriesNotSupported()
    {
        return $this->countriesNotSupported;
    }

    /**
     * Setter of Countries Not Supported
     * 
     * Countries for which the application is not supported. You can also
     * provide the two-letter ISO 3166-1 alpha-2 country code.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of countriesNotSupported
     */
    public function setCountriesNotSupported($value)
    {
        $this->countriesNotSupported = $value;
    }

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
    public function getCountriesSupported()
    {
        return $this->countriesSupported;
    }

    /**
     * Setter of Countries Supported
     * 
     * Countries for which the application is supported. You can also provide
     * the two-letter ISO 3166-1 alpha-2 country code.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of countriesSupported
     */
    public function setCountriesSupported($value)
    {
        $this->countriesSupported = $value;
    }

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
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Setter of Device
     * 
     * Device required to run the application. Used in cases where a specific
     * make/model is required to run the application.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of device
     */
    public function setDevice($value)
    {
        $this->device = $value;
    }

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
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    /**
     * Setter of Download Url
     * 
     * If the file can be downloaded, URL to download the binary.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of downloadUrl
     */
    public function setDownloadUrl($value)
    {
        $this->downloadUrl = $value;
    }

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
    public function getFeatureList()
    {
        return $this->featureList;
    }

    /**
     * Setter of Feature List
     * 
     * Features or modules provided by this application (and possibly
     * required by other applications).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string|string $value Value of featureList
     */
    public function setFeatureList($value)
    {
        $this->featureList = $value;
    }

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
    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    /**
     * Setter of File Format
     * 
     * MIME format of the binary (e.g. application/zip).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of fileFormat
     */
    public function setFileFormat($value)
    {
        $this->fileFormat = $value;
    }

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
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Setter of File Size
     * 
     * Size of the application / package (e.g. 18MB). In the absence of a
     * unit (MB, KB etc.), KB will be assumed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long $value Value of fileSize
     */
    public function setFileSize($value)
    {
        $this->fileSize = $value;
    }

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
    public function getInstallUrl()
    {
        return $this->installUrl;
    }

    /**
     * Setter of Install Url
     * 
     * URL at which the app may be installed, if different from the URL of
     * the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of installUrl
     */
    public function setInstallUrl($value)
    {
        $this->installUrl = $value;
    }

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
    public function getMemoryRequirements()
    {
        return $this->memoryRequirements;
    }

    /**
     * Setter of Memory Requirements
     * 
     * Minimum memory requirements.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string|string $value Value of memoryRequirements
     */
    public function setMemoryRequirements($value)
    {
        $this->memoryRequirements = $value;
    }

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
    public function getOperatingSystem()
    {
        return $this->operatingSystem;
    }

    /**
     * Setter of Operating System
     * 
     * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of operatingSystem
     */
    public function setOperatingSystem($value)
    {
        $this->operatingSystem = $value;
    }

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
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Setter of Permissions
     * 
     * Permission(s) required to run the app (for example, a mobile app may
     * require full internet access or may run only on wifi).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of permissions
     */
    public function setPermissions($value)
    {
        $this->permissions = $value;
    }

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
    public function getProcessorRequirements()
    {
        return $this->processorRequirements;
    }

    /**
     * Setter of Processor Requirements
     * 
     * Processor architecture required to run the application (e.g. IA64).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of processorRequirements
     */
    public function setProcessorRequirements($value)
    {
        $this->processorRequirements = $value;
    }

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
    public function getReleaseNotes()
    {
        return $this->releaseNotes;
    }

    /**
     * Setter of Release Notes
     * 
     * Description of what changed in this version.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string|string $value Value of releaseNotes
     */
    public function setReleaseNotes($value)
    {
        $this->releaseNotes = $value;
    }

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
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Setter of Requirements
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
     * @param string|string $value Value of requirements
     */
    public function setRequirements($value)
    {
        $this->requirements = $value;
    }

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
    public function getScreenshot()
    {
        return $this->screenshot;
    }

    /**
     * Setter of Screenshot
     * 
     * A link to a screenshot image of the app.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of screenshot
     */
    public function setScreenshot($value)
    {
        $this->screenshot = $value;
    }

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
    public function getSoftwareVersion()
    {
        return $this->softwareVersion;
    }

    /**
     * Setter of Software Version
     * 
     * Version of the software instance.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of softwareVersion
     */
    public function setSoftwareVersion($value)
    {
        $this->softwareVersion = $value;
    }

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
    public function getStorageRequirements()
    {
        return $this->storageRequirements;
    }

    /**
     * Setter of Storage Requirements
     * 
     * Storage requirements (free space required).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string|string $value Value of storageRequirements
     */
    public function setStorageRequirements($value)
    {
        $this->storageRequirements = $value;
    }
}
