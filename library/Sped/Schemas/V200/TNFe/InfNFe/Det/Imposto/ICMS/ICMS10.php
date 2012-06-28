<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS;

/**
 * Tributação pelo ICMS<br />
 * 10 - Tributada e com cobrança do ICMS por substituição tributária 
 * @name ICMS10
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ICMS10 extends \Sped\Components\Xml\Element  {
    const NAME = 'ICMS10';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\Torig 
     */
    public function getOrig(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Torig');
        return $this->getElementsByTagName(\Sped\Schemas\V200\Torig::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\Torig 
     */
    public function addOrig(){
        return $this->appendChild(new \Sped\Schemas\V200\Torig(), true);
    }

    /**

     * @param \Sped\Schemas\V200\Torig $paramOrig 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 
     */
    public function setOrig(\Sped\Schemas\V200\Torig $paramOrig){
        $this->removeElementsByTagName(\Sped\Schemas\V200\Torig::NAME);
        $this->appendChild($paramOrig, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\CST 
     */
    public function getCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\CST');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\CST::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\CST 
     */
    public function addCST(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\CST(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\CST $paramCST){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\CST::NAME);
        $this->appendChild($paramCST, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBC 
     */
    public function getModBC(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBC');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBC::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBC 
     */
    public function addModBC(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBC(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBC $paramModBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 
     */
    public function setModBC(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBC $paramModBC){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBC::NAME);
        $this->appendChild($paramModBC, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBC(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBC(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302 $paramVBC){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPICMS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_0302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPICMS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_0302 $paramPICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 
     */
    public function setPICMS(\Sped\Schemas\V200\TDec_0302 $paramPICMS){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_0302::NAME);
        $this->appendChild($paramPICMS, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 
     */
    public function setVICMS(\Sped\Schemas\V200\TDec_1302 $paramVICMS){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVICMS, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBCST 
     */
    public function getModBCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBCST');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBCST::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBCST 
     */
    public function addModBCST(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBCST(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBCST $paramModBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 
     */
    public function setModBCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBCST $paramModBCST){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10\ModBCST::NAME);
        $this->appendChild($paramModBCST, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0302Opc 
     * @param int $index 
     */
    public function getPMVAST(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_0302Opc::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPMVAST(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPMVAST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 
     */
    public function setPMVAST(\Sped\Schemas\V200\TDec_0302Opc $paramPMVAST){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_0302Opc::NAME);
        $this->appendChild($paramPMVAST, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0302Opc 
     * @param int $index 
     */
    public function getPRedBCST(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_0302Opc::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPRedBCST(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPRedBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 
     */
    public function setPRedBCST(\Sped\Schemas\V200\TDec_0302Opc $paramPRedBCST){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_0302Opc::NAME);
        $this->appendChild($paramPRedBCST, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBCST(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 
     */
    public function setVBCST(\Sped\Schemas\V200\TDec_1302 $paramVBCST){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVBCST, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPICMSST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_0302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPICMSST(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_0302 $paramPICMSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 
     */
    public function setPICMSST(\Sped\Schemas\V200\TDec_0302 $paramPICMSST){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_0302::NAME);
        $this->appendChild($paramPICMSST, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMSST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMSST(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 
     */
    public function setVICMSST(\Sped\Schemas\V200\TDec_1302 $paramVICMSST){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVICMSST, false);
        return $this;
    }

}