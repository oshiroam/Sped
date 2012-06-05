<?php

/**
 * Sped
 *
 * Copyright (c) 2012 Sped
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012 Sped (https://github.com/tonicospinelli/Sped)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    ##VERSION##, ##DATE##
 */

namespace Sped\Schemas\V200;

use Sped\Schemas\V200\Signature\SignedInfo,
    Sped\Schemas\V200\Signature\SignatureValue,
    Sped\Schemas\V200\Signature\KeyInfo;

/**
 * @category   Sped
 * @package    Sped\Schemas\V200
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Signature extends \DOMElement {

    public function __construct() {
        parent::__construct('Signature', null, 'http://www.w3.org/2000/09/xmldsig#');
    }

    /**
     * 
     */
    public function loadChildren() {
        $this->addSignedInfo()->loadChildren();
        $this->addSignatureValue();
        $this->addKeyInfo()->loadChildren();
    }

    /**
     *
     * @return \Sped\Schemas\V200\Signature\SignedInfo
     */
    public function getSignedInfo() {
        return $this->getElementsByTagName('SignedInfo')->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\Signature\SignedInfo
     */
    public function addSignedInfo() {
        return $this->appendChild(new SignedInfo());
    }

    /**
     * 
     * @param \Sped\Schemas\V200\Signature\SignedInfo $paramSignedInfo
     * @return \Sped\Schemas\V200\Signature 
     */
    public function setSignedInfo($paramSignedInfo) {
        $signedInfo = $this->getSignedInfo();
        if ($signedInfo == null)
            $this->appendChild($paramSignedInfo);
        else
            $this->replaceChild($paramSignedInfo, $signedInfo);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\Signature\SignatureValue
     */
    public function getSignatureValue() {
        return $this->getElementsByTagName('SignatureValue')->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\Signature\SignatureValue
     */
    public function addSignatureValue() {
        return $this->appendChild(new SignatureValue());
    }

    /**
     *
     * @param \Sped\Schemas\V200\Signature\SignatureValue $paramSignatureValue
     * @return \Sped\Schemas\V200\Signature 
     */
    public function setSignatureValue($paramSignatureValue) {
        $signatureValue = $this->getSignedInfo();
        if ($signatureValue == null)
            $this->appendChild($paramSignatureValue);
        else
            $this->replaceChild($paramSignatureValue, $signatureValue);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\Signature\KeyInfo
     */
    public function getKeyInfo() {
        return $this->getElementsByTagName('KeyInfo')->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\Signature\KeyInfo 
     */
    public function addKeyInfo() {
        return $this->appendChild(new KeyInfo());
    }

    /**
     * 
     * @param \Sped\Schemas\V200\Signature\KeyInfo $paramKeyInfo
     * @return \Sped\Schemas\V200\Signature 
     */
    public function setKeyInfo($paramKeyInfo) {
        $keyInfo = $this->getKeyInfo();
        if ($keyInfo == null)
            $this->appendChild($paramKeyInfo);
        else
            $this->replaceChild($paramKeyInfo, $keyInfo);
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getId() {
        return $this->getAttribute('Id');
    }

    /**
     * 
     * @param string $paramId
     * @return \Sped\Schemas\V200\Signature 
     */
    public function setId($paramId) {
        $this->setAttribute('Id', $paramId);
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function isSetId() {
        return $this->hasAttribute('Id');
    }

    /**
     *
     * @return \Sped\Schemas\V200\Signature 
     */
    public function removeId() {
        $this->removeAttribute('Id');
        return $this;
    }

}