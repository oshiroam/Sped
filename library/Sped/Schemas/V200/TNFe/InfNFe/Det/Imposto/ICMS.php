<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto;

/**
 * Dados do ICMS Normal e ST
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ICMS
 * @package Sped
 */
class ICMS extends \Sped\Components\Xml\Element 
{

    const ICMS00 = 'ICMS00';

    const ICMS10 = 'ICMS10';

    const ICMS20 = 'ICMS20';

    const ICMS30 = 'ICMS30';

    const ICMS40 = 'ICMS40';

    const ICMS51 = 'ICMS51';

    const ICMS60 = 'ICMS60';

    const ICMS70 = 'ICMS70';

    const ICMS90 = 'ICMS90';

    const ICMSPART = 'ICMSPart';

    const ICMSST = 'ICMSST';

    const ICMSSN101 = 'ICMSSN101';

    const ICMSSN102 = 'ICMSSN102';

    const ICMSSN201 = 'ICMSSN201';

    const ICMSSN202 = 'ICMSSN202';

    const ICMSSN500 = 'ICMSSN500';

    const ICMSSN900 = 'ICMSSN900';

    /**
     * Retorna Tributação pelo ICMS<br />
     * 00 - Tributada integralmente
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00 
     */
    public function getICMS00()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00');
        return $this->getElementsByTagName(self::ICMS00)->item(0);
    }

    /**
     * Adiciona Tributação pelo ICMS<br />
     * 00 - Tributada integralmente
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00 
     */
    public function addICMS00()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00(self::ICMS00, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributação pelo ICMS<br />
     * 00 - Tributada integralmente
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00 $paramICMS00 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMS00(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS00 $paramICMS00)
    {
        $this->removeElementsByTagName(self::ICMS00);
        $this->appendChild($paramICMS00, false);
        return $this;
    }

    /**
     * Retorna Tributação pelo ICMS<br />
     * 10 - Tributada e com cobrança do ICMS por substituição tributária 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 
     */
    public function getICMS10()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10');
        return $this->getElementsByTagName(self::ICMS10)->item(0);
    }

    /**
     * Adiciona Tributação pelo ICMS<br />
     * 10 - Tributada e com cobrança do ICMS por substituição tributária 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 
     */
    public function addICMS10()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10(self::ICMS10, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributação pelo ICMS<br />
     * 10 - Tributada e com cobrança do ICMS por substituição tributária 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 $paramICMS10 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMS10(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10 $paramICMS10)
    {
        $this->removeElementsByTagName(self::ICMS10);
        $this->appendChild($paramICMS10, false);
        return $this;
    }

    /**
     * Retorna Tributção pelo ICMS<br />
     * 20 - Com redução de base de cálculo 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20 
     */
    public function getICMS20()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20');
        return $this->getElementsByTagName(self::ICMS20)->item(0);
    }

    /**
     * Adiciona Tributção pelo ICMS<br />
     * 20 - Com redução de base de cálculo 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20 
     */
    public function addICMS20()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20(self::ICMS20, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributção pelo ICMS<br />
     * 20 - Com redução de base de cálculo 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20 $paramICMS20 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMS20(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS20 $paramICMS20)
    {
        $this->removeElementsByTagName(self::ICMS20);
        $this->appendChild($paramICMS20, false);
        return $this;
    }

    /**
     * Retorna Tributação pelo ICMS<br />
     * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição tributária
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 
     */
    public function getICMS30()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30');
        return $this->getElementsByTagName(self::ICMS30)->item(0);
    }

    /**
     * Adiciona Tributação pelo ICMS<br />
     * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição tributária
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 
     */
    public function addICMS30()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30(self::ICMS30, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributação pelo ICMS<br />
     * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição tributária
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 $paramICMS30 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMS30(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS30 $paramICMS30)
    {
        $this->removeElementsByTagName(self::ICMS30);
        $this->appendChild($paramICMS30, false);
        return $this;
    }

    /**
     * Retorna Tributação pelo ICMS<br />
     * 40 - Isenta <br />
     * 41 - Não tributada <br />
     * 50 - Suspensão  
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 
     */
    public function getICMS40()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40');
        return $this->getElementsByTagName(self::ICMS40)->item(0);
    }

    /**
     * Adiciona Tributação pelo ICMS<br />
     * 40 - Isenta <br />
     * 41 - Não tributada <br />
     * 50 - Suspensão  
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 
     */
    public function addICMS40()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40(self::ICMS40, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributação pelo ICMS<br />
     * 40 - Isenta <br />
     * 41 - Não tributada <br />
     * 50 - Suspensão  
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 $paramICMS40 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMS40(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 $paramICMS40)
    {
        $this->removeElementsByTagName(self::ICMS40);
        $this->appendChild($paramICMS40, false);
        return $this;
    }

    /**
     * Retorna Tributção pelo ICMS<br />
     * 51 - Diferimento<br />
     * A exigência do preenchimento das informações do ICMS diferido fica à critério de cada UF.
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function getICMS51()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51');
        return $this->getElementsByTagName(self::ICMS51)->item(0);
    }

    /**
     * Adiciona Tributção pelo ICMS<br />
     * 51 - Diferimento<br />
     * A exigência do preenchimento das informações do ICMS diferido fica à critério de cada UF.
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 
     */
    public function addICMS51()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51(self::ICMS51, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributção pelo ICMS<br />
     * 51 - Diferimento<br />
     * A exigência do preenchimento das informações do ICMS diferido fica à critério de cada UF.
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 $paramICMS51 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMS51(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS51 $paramICMS51)
    {
        $this->removeElementsByTagName(self::ICMS51);
        $this->appendChild($paramICMS51, false);
        return $this;
    }

    /**
     * Retorna Tributação pelo ICMS<br />
     * 60 - ICMS cobrado anteriormente por substituição tributária 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60 
     */
    public function getICMS60()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60');
        return $this->getElementsByTagName(self::ICMS60)->item(0);
    }

    /**
     * Adiciona Tributação pelo ICMS<br />
     * 60 - ICMS cobrado anteriormente por substituição tributária 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60 
     */
    public function addICMS60()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60(self::ICMS60, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributação pelo ICMS<br />
     * 60 - ICMS cobrado anteriormente por substituição tributária 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60 $paramICMS60 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMS60(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60 $paramICMS60)
    {
        $this->removeElementsByTagName(self::ICMS60);
        $this->appendChild($paramICMS60, false);
        return $this;
    }

    /**
     * Retorna Tributação pelo ICMS <br />
     * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição tributária 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function getICMS70()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70');
        return $this->getElementsByTagName(self::ICMS70)->item(0);
    }

    /**
     * Adiciona Tributação pelo ICMS <br />
     * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição tributária 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function addICMS70()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70(self::ICMS70, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributação pelo ICMS <br />
     * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição tributária 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 $paramICMS70 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMS70(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 $paramICMS70)
    {
        $this->removeElementsByTagName(self::ICMS70);
        $this->appendChild($paramICMS70, false);
        return $this;
    }

    /**
     * Retorna Tributação pelo ICMS<br />
     * 90 - Outras
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90 
     */
    public function getICMS90()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90');
        return $this->getElementsByTagName(self::ICMS90)->item(0);
    }

    /**
     * Adiciona Tributação pelo ICMS<br />
     * 90 - Outras
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90 
     */
    public function addICMS90()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90(self::ICMS90, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributação pelo ICMS<br />
     * 90 - Outras
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90 $paramICMS90 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMS90(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS90 $paramICMS90)
    {
        $this->removeElementsByTagName(self::ICMS90);
        $this->appendChild($paramICMS90, false);
        return $this;
    }

    /**
     * Retorna Partilha do ICMS entre a UF de origem e UF de destino ou a UF definida na legislação<br />
     * Operação interestadual para consumidor final com partilha do ICMS  devido na operação entre a UF de origem e a UF do destinatário ou ou a UF definida na legislação. (Ex. UF da concessionária de entrega do  veículos) (v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart 
     */
    public function getICMSPart()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart');
        return $this->getElementsByTagName(self::ICMSPART)->item(0);
    }

    /**
     * Adiciona Partilha do ICMS entre a UF de origem e UF de destino ou a UF definida na legislação<br />
     * Operação interestadual para consumidor final com partilha do ICMS  devido na operação entre a UF de origem e a UF do destinatário ou ou a UF definida na legislação. (Ex. UF da concessionária de entrega do  veículos) (v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart 
     */
    public function addICMSPart()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart(self::ICMSPART, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Partilha do ICMS entre a UF de origem e UF de destino ou a UF definida na legislação<br />
     * Operação interestadual para consumidor final com partilha do ICMS  devido na operação entre a UF de origem e a UF do destinatário ou ou a UF definida na legislação. (Ex. UF da concessionária de entrega do  veículos) (v2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart $paramICMSPart 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMSPart(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart $paramICMSPart)
    {
        $this->removeElementsByTagName(self::ICMSPART);
        $this->appendChild($paramICMSPart, false);
        return $this;
    }

    /**
     * Retorna Grupo de informação do ICMSST devido para a UF de destino, nas operações interestaduais de produtos que tiveram retenção antecipada de ICMS por ST na UF do remetente. Repasse via Substituto Tributário. (v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST 
     */
    public function getICMSST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST');
        return $this->getElementsByTagName(self::ICMSST)->item(0);
    }

    /**
     * Adiciona Grupo de informação do ICMSST devido para a UF de destino, nas operações interestaduais de produtos que tiveram retenção antecipada de ICMS por ST na UF do remetente. Repasse via Substituto Tributário. (v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST 
     */
    public function addICMSST()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST(self::ICMSST, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Grupo de informação do ICMSST devido para a UF de destino, nas operações interestaduais de produtos que tiveram retenção antecipada de ICMS por ST na UF do remetente. Repasse via Substituto Tributário. (v2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST $paramICMSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMSST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSST $paramICMSST)
    {
        $this->removeElementsByTagName(self::ICMSST);
        $this->appendChild($paramICMSST, false);
        return $this;
    }

    /**
     * Retorna Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101 
     */
    public function getICMSSN101()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101');
        return $this->getElementsByTagName(self::ICMSSN101)->item(0);
    }

    /**
     * Adiciona Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101 
     */
    public function addICMSSN101()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101(self::ICMSSN101, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101 $paramICMSSN101 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMSSN101(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101 $paramICMSSN101)
    {
        $this->removeElementsByTagName(self::ICMSSN101);
        $this->appendChild($paramICMSSN101, false);
        return $this;
    }

    /**
     * Retorna Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102 
     */
    public function getICMSSN102()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102');
        return $this->getElementsByTagName(self::ICMSSN102)->item(0);
    }

    /**
     * Adiciona Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102 
     */
    public function addICMSSN102()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102(self::ICMSSN102, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102 $paramICMSSN102 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMSSN102(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102 $paramICMSSN102)
    {
        $this->removeElementsByTagName(self::ICMSSN102);
        $this->appendChild($paramICMSSN102, false);
        return $this;
    }

    /**
     * Retorna Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function getICMSSN201()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201');
        return $this->getElementsByTagName(self::ICMSSN201)->item(0);
    }

    /**
     * Adiciona Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 
     */
    public function addICMSSN201()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201(self::ICMSSN201, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 $paramICMSSN201 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMSSN201(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN201 $paramICMSSN201)
    {
        $this->removeElementsByTagName(self::ICMSSN201);
        $this->appendChild($paramICMSSN201, false);
        return $this;
    }

    /**
     * Retorna Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=202 ou 203 (v.2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202 
     */
    public function getICMSSN202()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202');
        return $this->getElementsByTagName(self::ICMSSN202)->item(0);
    }

    /**
     * Adiciona Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=202 ou 203 (v.2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202 
     */
    public function addICMSSN202()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202(self::ICMSSN202, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=202 ou 203 (v.2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202 $paramICMSSN202 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMSSN202(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN202 $paramICMSSN202)
    {
        $this->removeElementsByTagName(self::ICMSSN202);
        $this->appendChild($paramICMSSN202, false);
        return $this;
    }

    /**
     * Retorna Tributação do ICMS pelo SIMPLES NACIONAL,CRT=1 – Simples Nacional e CSOSN=500 (v.2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500 
     */
    public function getICMSSN500()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500');
        return $this->getElementsByTagName(self::ICMSSN500)->item(0);
    }

    /**
     * Adiciona Tributação do ICMS pelo SIMPLES NACIONAL,CRT=1 – Simples Nacional e CSOSN=500 (v.2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500 
     */
    public function addICMSSN500()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500(self::ICMSSN500, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributação do ICMS pelo SIMPLES NACIONAL,CRT=1 – Simples Nacional e CSOSN=500 (v.2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500 $paramICMSSN500 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMSSN500(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN500 $paramICMSSN500)
    {
        $this->removeElementsByTagName(self::ICMSSN500);
        $this->appendChild($paramICMSSN500, false);
        return $this;
    }

    /**
     * Retorna Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e CSOSN=900 (v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function getICMSSN900()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900');
        return $this->getElementsByTagName(self::ICMSSN900)->item(0);
    }

    /**
     * Adiciona Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e CSOSN=900 (v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 
     */
    public function addICMSSN900()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900(self::ICMSSN900, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e CSOSN=900 (v2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 $paramICMSSN900 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS 
     */
    public function setICMSSN900(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN900 $paramICMSSN900)
    {
        $this->removeElementsByTagName(self::ICMSSN900);
        $this->appendChild($paramICMSSN900, false);
        return $this;
    }

}