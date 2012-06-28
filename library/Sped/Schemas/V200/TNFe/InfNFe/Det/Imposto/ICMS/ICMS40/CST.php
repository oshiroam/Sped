<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40;

/**
 * Tributação pelo ICMS <br />
 * 40 - Isenta <br />
 * 41 - Não tributada <br />
 * 50 - Suspensão <br />
 * 51 - Diferimento 
 * @name CST
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class CST extends \Sped\Components\Xml\Element  {
    const NAME = 'CST';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}