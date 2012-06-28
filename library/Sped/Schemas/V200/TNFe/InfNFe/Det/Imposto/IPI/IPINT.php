<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI;

/**
 * Código da Situação Tributária do IPI:<br />
 * 01-Entrada tributada com alíquota zero<br />
 * 02-Entrada isenta<br />
 * 03-Entrada não-tributada<br />
 * 04-Entrada imune<br />
 * 05-Entrada com suspensão<br />
 * 51-Saída tributada com alíquota zero<br />
 * 52-Saída isenta<br />
 * 53-Saída não-tributada<br />
 * 54-Saída imune<br />
 * 55-Saída com suspensão
 * @name IPINT
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class IPINT extends \Sped\Components\Xml\Element  {
    const NAME = 'IPINT';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT\CST 
     */
    public function getCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT\CST');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT\CST::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT\CST 
     */
    public function addCST(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT\CST(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT\CST $paramCST){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT\CST::NAME);
        $this->appendChild($paramCST, false);
        return $this;
    }

}