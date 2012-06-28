<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det;

/**
 * Dados dos produtos e serviços da NF-e

 * @name Prod
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Prod extends \Sped\Components\Xml\Element  {
    const NAME = 'prod';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd 
     */
    public function getCProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd 
     */
    public function addCProd(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd $paramCProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setCProd(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd $paramCProd){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd::NAME);
        $this->appendChild($paramCProd, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN 
     */
    public function getCEAN(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN 
     */
    public function addCEAN(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN $paramCEAN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setCEAN(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN $paramCEAN){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN::NAME);
        $this->appendChild($paramCEAN, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd 
     */
    public function getXProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd 
     */
    public function addXProd(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd $paramXProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setXProd(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd $paramXProd){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd::NAME);
        $this->appendChild($paramXProd, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM 
     */
    public function getNCM(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM 
     */
    public function addNCM(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM $paramNCM 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setNCM(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM $paramNCM){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM::NAME);
        $this->appendChild($paramNCM, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI 
     * @param int $index 
     */
    public function getEXTIPI(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI 
     */
    public function addEXTIPI(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI $paramEXTIPI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setEXTIPI(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI $paramEXTIPI){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI::NAME);
        $this->appendChild($paramEXTIPI, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TCfop 
     */
    public function getCFOP(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCfop');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TCfop::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TCfop 
     */
    public function addCFOP(){
        return $this->appendChild(new \Sped\Schemas\V200\TCfop(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TCfop $paramCFOP 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setCFOP(\Sped\Schemas\V200\TCfop $paramCFOP){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCfop::NAME);
        $this->appendChild($paramCFOP, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom 
     */
    public function getUCom(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom 
     */
    public function addUCom(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom $paramUCom 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setUCom(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom $paramUCom){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom::NAME);
        $this->appendChild($paramUCom, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function getQCom(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104v');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1104v::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function addQCom(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104v(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1104v $paramQCom 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setQCom(\Sped\Schemas\V200\TDec_1104v $paramQCom){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1104v::NAME);
        $this->appendChild($paramQCom, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function getVUnCom(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1110');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1110::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function addVUnCom(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1110(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1110 $paramVUnCom 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVUnCom(\Sped\Schemas\V200\TDec_1110 $paramVUnCom){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1110::NAME);
        $this->appendChild($paramVUnCom, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVProd(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVProd(\Sped\Schemas\V200\TDec_1302 $paramVProd){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVProd, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib 
     */
    public function getCEANTrib(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib 
     */
    public function addCEANTrib(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib $paramCEANTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setCEANTrib(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib $paramCEANTrib){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib::NAME);
        $this->appendChild($paramCEANTrib, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib 
     */
    public function getUTrib(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib 
     */
    public function addUTrib(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib $paramUTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setUTrib(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib $paramUTrib){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib::NAME);
        $this->appendChild($paramUTrib, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function getQTrib(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104v');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1104v::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function addQTrib(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104v(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1104v $paramQTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setQTrib(\Sped\Schemas\V200\TDec_1104v $paramQTrib){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1104v::NAME);
        $this->appendChild($paramQTrib, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function getVUnTrib(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1110');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1110::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function addVUnTrib(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1110(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1110 $paramVUnTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVUnTrib(\Sped\Schemas\V200\TDec_1110 $paramVUnTrib){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1110::NAME);
        $this->appendChild($paramVUnTrib, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVFrete(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVFrete(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVFrete 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVFrete(\Sped\Schemas\V200\TDec_1302Opc $paramVFrete){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME);
        $this->appendChild($paramVFrete, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVSeg(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVSeg(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVSeg 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVSeg(\Sped\Schemas\V200\TDec_1302Opc $paramVSeg){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME);
        $this->appendChild($paramVSeg, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVDesc(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVDesc(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVDesc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVDesc(\Sped\Schemas\V200\TDec_1302Opc $paramVDesc){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME);
        $this->appendChild($paramVDesc, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     * @param int $index 
     */
    public function getVOutro(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVOutro(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVOutro 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVOutro(\Sped\Schemas\V200\TDec_1302Opc $paramVOutro){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302Opc::NAME);
        $this->appendChild($paramVOutro, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot 
     */
    public function getIndTot(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot 
     */
    public function addIndTot(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot $paramIndTot 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setIndTot(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot $paramIndTot){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot::NAME);
        $this->appendChild($paramIndTot, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     * @param int $index 
     */
    public function getDI(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function addDI(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI $paramDI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setDI(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI $paramDI){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI::NAME);
        $this->appendChild($paramDI, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed 
     * @param int $index 
     */
    public function getXPed(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed 
     */
    public function addXPed(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed $paramXPed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setXPed(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed $paramXPed){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed::NAME);
        $this->appendChild($paramXPed, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed 
     * @param int $index 
     */
    public function getNItemPed(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed 
     */
    public function addNItemPed(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed $paramNItemPed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setNItemPed(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed $paramNItemPed){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed::NAME);
        $this->appendChild($paramNItemPed, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function getVeicProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function addVeicProd(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd $paramVeicProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVeicProd(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd $paramVeicProd){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd::NAME);
        $this->appendChild($paramVeicProd, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function getMed(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function addMed(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med $paramMed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setMed(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med $paramMed){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med::NAME);
        $this->appendChild($paramMed, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma 
     */
    public function getArma(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma 
     */
    public function addArma(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma $paramArma 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setArma(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma $paramArma){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma::NAME);
        $this->appendChild($paramArma, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function getComb(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function addComb(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb $paramComb 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setComb(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb $paramComb){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb::NAME);
        $this->appendChild($paramComb, false);
        return $this;
    }

}