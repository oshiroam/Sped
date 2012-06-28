<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto;

/**
 * Dados do PIS Substituição Tributária

 * @name PISST
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class PISST extends \Sped\Components\Xml\Element  {
    const NAME = 'PISST';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVBC(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVBC(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302Opc $paramVBC){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function getPPIS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_0302Opc::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPPIS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST 
     */
    public function setPPIS(\Sped\Schemas\V200\TDec_0302Opc $paramPPIS){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_0302Opc::NAME);
        $this->appendChild($paramPPIS, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1204Opc 
     */
    public function getQBCProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1204Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1204Opc::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1204Opc 
     */
    public function addQBCProd(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1204Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1204Opc $paramQBCProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST 
     */
    public function setQBCProd(\Sped\Schemas\V200\TDec_1204Opc $paramQBCProd){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1204Opc::NAME);
        $this->appendChild($paramQBCProd, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1104Opc 
     */
    public function getVAliqProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1104Opc::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1104Opc 
     */
    public function addVAliqProd(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1104Opc $paramVAliqProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST 
     */
    public function setVAliqProd(\Sped\Schemas\V200\TDec_1104Opc $paramVAliqProd){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1104Opc::NAME);
        $this->appendChild($paramVAliqProd, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVPIS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVPIS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PISST 
     */
    public function setVPIS(\Sped\Schemas\V200\TDec_1302Opc $paramVPIS){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME);
        $this->appendChild($paramVPIS, false);
        return $this;
    }

}