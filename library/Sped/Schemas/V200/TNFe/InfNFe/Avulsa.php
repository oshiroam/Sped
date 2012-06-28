<?php
namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Emissão de avulsa, informar os dados do Fisco emitente

 * @name Avulsa
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Avulsa extends \Sped\Components\Xml\Element  {
    const NAME = 'avulsa';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function getCNPJ(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TCnpj::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function addCNPJ(){
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TCnpj $paramCNPJ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpj $paramCNPJ){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCnpj::NAME);
        $this->appendChild($paramCNPJ, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao 
     */
    public function getXOrgao(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao 
     */
    public function addXOrgao(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao $paramXOrgao 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setXOrgao(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao $paramXOrgao){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao::NAME);
        $this->appendChild($paramXOrgao, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr 
     */
    public function getMatr(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr 
     */
    public function addMatr(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr $paramMatr 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setMatr(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr $paramMatr){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matr::NAME);
        $this->appendChild($paramMatr, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente 
     */
    public function getXAgente(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente 
     */
    public function addXAgente(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente $paramXAgente 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setXAgente(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente $paramXAgente){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente::NAME);
        $this->appendChild($paramXAgente, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone 
     * @param int $index 
     */
    public function getFone(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone 
     */
    public function addFone(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone $paramFone 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setFone(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone $paramFone){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone::NAME);
        $this->appendChild($paramFone, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TUfEmi 
     */
    public function getUF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUfEmi');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TUfEmi::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TUfEmi 
     */
    public function addUF(){
        return $this->appendChild(new \Sped\Schemas\V200\TUfEmi(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TUfEmi $paramUF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setUF(\Sped\Schemas\V200\TUfEmi $paramUF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TUfEmi::NAME);
        $this->appendChild($paramUF, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR 
     * @param int $index 
     */
    public function getNDAR(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR 
     */
    public function addNDAR(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR $paramNDAR 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setNDAR(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR $paramNDAR){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NDAR::NAME);
        $this->appendChild($paramNDAR, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     * @param int $index 
     */
    public function getDEmi(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TData::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function addDEmi(){
        return $this->appendChild(new \Sped\Schemas\V200\TData(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TData $paramDEmi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setDEmi(\Sped\Schemas\V200\TData $paramDEmi){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TData::NAME);
        $this->appendChild($paramDEmi, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     * @param int $index 
     */
    public function getVDAR(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVDAR(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVDAR 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setVDAR(\Sped\Schemas\V200\TDec_1302 $paramVDAR){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVDAR, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi 
     */
    public function getRepEmi(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi 
     */
    public function addRepEmi(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi $paramRepEmi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setRepEmi(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi $paramRepEmi){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi::NAME);
        $this->appendChild($paramRepEmi, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     * @param int $index 
     */
    public function getDPag(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TData::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TData 
     */
    public function addDPag(){
        return $this->appendChild(new \Sped\Schemas\V200\TData(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TData $paramDPag 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function setDPag(\Sped\Schemas\V200\TData $paramDPag){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TData::NAME);
        $this->appendChild($paramDPag, false);
        return $this;
    }

}