<?php
namespace Sped\Schemas\V200;

/**
 * Tipo Protocolo de status resultado do processamento da NF-e

 * @name TProtNFe
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TProtNFe extends \Sped\Components\Xml\Element  {
    const NAME = 'ProtNFe';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function getInfProt(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TProtNFe\InfProt');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TProtNFe\InfProt::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function addInfProt(){
        return $this->appendChild(new \Sped\Schemas\V200\TProtNFe\InfProt(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TProtNFe\InfProt $paramInfProt 
     * @return \Sped\Schemas\V200\TProtNFe 
     */
    public function setInfProt(\Sped\Schemas\V200\TProtNFe\InfProt $paramInfProt){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TProtNFe\InfProt::NAME);
        $this->appendChild($paramInfProt, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\SignatureType 
     * @param int $index 
     */
    public function getSignature(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\SignatureType');
        return $this->getElementsByTagName(\Sped\Schemas\V200\SignatureType::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\SignatureType 
     */
    public function addSignature(){
        return $this->appendChild(new \Sped\Schemas\V200\SignatureType(), true);
    }

    /**

     * @param \Sped\Schemas\V200\SignatureType $paramSignature 
     * @return \Sped\Schemas\V200\TProtNFe 
     */
    public function setSignature(\Sped\Schemas\V200\SignatureType $paramSignature){
        $this->removeElementsByTagName(\Sped\Schemas\V200\SignatureType::NAME);
        $this->appendChild($paramSignature, false);
        return $this;
    }

    /**

     * @return string 
     */
    public function getVersao(){
        return $this->getAttribute('versao');
    }

    /**

     * @param string $value 
     * @return \Sped\Schemas\V200\TProtNFe 
     */
    public function setVersao(string $value){
        $this->setAttribute('versao', $value);
        return $this;
    }

}