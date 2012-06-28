<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN101;

/**
 * 101- Tributada pelo Simples Nacional com permissão de crédito. (v.2.0)

 * @name CSOSN
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class CSOSN extends \Sped\Components\Xml\Element  {
    const NAME = 'CSOSN';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}