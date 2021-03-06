<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto;

/**
 * Dados do COFINS da<br />
 * Substituição Tributaria;
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name COFINSST
 * @package Sped
 */
class COFINSST extends \Sped\Components\Xml\Element 
{

    const VBC = 'vBC';

    const PCOFINS = 'pCOFINS';

    const QBCPROD = 'qBCProd';

    const VALIQPROD = 'vAliqProd';

    const VCOFINS = 'vCOFINS';

    /**
     * Retorna Valor da BC do COFINS ST
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVBC()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VBC)->item(0);
    }

    /**
     * Adiciona Valor da BC do COFINS ST
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VBC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor da BC do COFINS ST
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302Opc $paramVBC)
    {
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * Retorna Alíquota do COFINS ST(em percentual)
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function getPCOFINS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(self::PCOFINS)->item(0);
    }

    /**
     * Adiciona Alíquota do COFINS ST(em percentual)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPCOFINS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(self::PCOFINS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Alíquota do COFINS ST(em percentual)
     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST 
     */
    public function setPCOFINS(\Sped\Schemas\V200\TDec_0302Opc $paramPCOFINS)
    {
        $this->removeElementsByTagName(self::PCOFINS);
        $this->appendChild($paramPCOFINS, false);
        return $this;
    }

    /**
     * Retorna Quantidade Vendida 
     * @return \Sped\Schemas\V200\TDec_1204Opc 
     */
    public function getQBCProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1204Opc');
        return $this->getElementsByTagName(self::QBCPROD)->item(0);
    }

    /**
     * Adiciona Quantidade Vendida 
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1204Opc 
     */
    public function addQBCProd($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1204Opc(self::QBCPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Quantidade Vendida 
     * @param \Sped\Schemas\V200\TDec_1204Opc $paramQBCProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST 
     */
    public function setQBCProd(\Sped\Schemas\V200\TDec_1204Opc $paramQBCProd)
    {
        $this->removeElementsByTagName(self::QBCPROD);
        $this->appendChild($paramQBCProd, false);
        return $this;
    }

    /**
     * Retorna Alíquota do COFINS ST(em reais)
     * @return \Sped\Schemas\V200\TDec_1104Opc 
     */
    public function getVAliqProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104Opc');
        return $this->getElementsByTagName(self::VALIQPROD)->item(0);
    }

    /**
     * Adiciona Alíquota do COFINS ST(em reais)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1104Opc 
     */
    public function addVAliqProd($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104Opc(self::VALIQPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Alíquota do COFINS ST(em reais)
     * @param \Sped\Schemas\V200\TDec_1104Opc $paramVAliqProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST 
     */
    public function setVAliqProd(\Sped\Schemas\V200\TDec_1104Opc $paramVAliqProd)
    {
        $this->removeElementsByTagName(self::VALIQPROD);
        $this->appendChild($paramVAliqProd, false);
        return $this;
    }

    /**
     * Retorna Valor do COFINS ST
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVCOFINS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VCOFINS)->item(0);
    }

    /**
     * Adiciona Valor do COFINS ST
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVCOFINS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VCOFINS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor do COFINS ST
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINSST 
     */
    public function setVCOFINS(\Sped\Schemas\V200\TDec_1302Opc $paramVCOFINS)
    {
        $this->removeElementsByTagName(self::VCOFINS);
        $this->appendChild($paramVCOFINS, false);
        return $this;
    }

}