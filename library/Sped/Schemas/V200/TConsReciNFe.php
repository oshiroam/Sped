<?php
namespace Sped\Schemas\V200;

/**
 * Tipo Pedido de Consulta do Recido do Lote de Notas Fiscais Eletrônicas

 * @name TConsReciNFe
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TConsReciNFe extends \Sped\Components\Xml\Element  {
    const NAME = 'ConsReciNFe';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TAmb 
     */
    public function getTpAmb(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TAmb');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TAmb::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TAmb 
     */
    public function addTpAmb(){
        return $this->appendChild(new \Sped\Schemas\V200\TAmb(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TAmb $paramTpAmb 
     * @return \Sped\Schemas\V200\TConsReciNFe 
     */
    public function setTpAmb(\Sped\Schemas\V200\TAmb $paramTpAmb){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TAmb::NAME);
        $this->appendChild($paramTpAmb, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TRec 
     */
    public function getNRec(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRec');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TRec::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TRec 
     */
    public function addNRec(){
        return $this->appendChild(new \Sped\Schemas\V200\TRec(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TRec $paramNRec 
     * @return \Sped\Schemas\V200\TConsReciNFe 
     */
    public function setNRec(\Sped\Schemas\V200\TRec $paramNRec){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TRec::NAME);
        $this->appendChild($paramNRec, false);
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
     * @return \Sped\Schemas\V200\TConsReciNFe 
     */
    public function setVersao(string $value){
        $this->setAttribute('versao', $value);
        return $this;
    }

}