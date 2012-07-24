<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS;

/**
 * Tributação pelo ICMS<br />
 * 00 - Tributada integralmente
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ICMS00
 * @package Sped
 */
class ICMS00 extends \Sped\Components\Xml\Element  {

    const ORIG = 'orig';

    const CST = 'CST';

    const MODBC = 'modBC';

    const VBC = 'vBC';

    const PICMS = 'pICMS';

    const VICMS = 'vICMS';

    /**
     * 
     * @return \Sped\Schemas\V200\Torig 
     */
    public function getOrig(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Torig');
        return $this->getElementsByTagName(self::ORIG)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\Torig 
     */
    public function addOrig($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\Torig(self::ORIG, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\Torig $paramOrig 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00 
     */
    public function setOrig(\Sped\Schemas\V200\Torig $paramOrig){
        $this->removeElementsByTagName(self::ORIG);
        $this->appendChild($paramOrig, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00\CST 
     */
    public function getCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00\CST 
     */
    public function addCST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00\CST(self::CST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00\CST $paramCST){
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00\ModBC 
     */
    public function getModBC(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00\ModBC');
        return $this->getElementsByTagName(self::MODBC)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00\ModBC 
     */
    public function addModBC($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00\ModBC(self::MODBC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00\ModBC $paramModBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00 
     */
    public function setModBC(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00\ModBC $paramModBC){
        $this->removeElementsByTagName(self::MODBC);
        $this->appendChild($paramModBC, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBC(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBC)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBC($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302 $paramVBC){
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPICMS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PICMS)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPICMS($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PICMS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302 $paramPICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00 
     */
    public function setPICMS(\Sped\Schemas\V200\TDec_0302 $paramPICMS){
        $this->removeElementsByTagName(self::PICMS);
        $this->appendChild($paramPICMS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMS)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMS($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00 
     */
    public function setVICMS(\Sped\Schemas\V200\TDec_1302 $paramVICMS){
        $this->removeElementsByTagName(self::VICMS);
        $this->appendChild($paramVICMS, false);
        return $this;
    }

}