<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS60;

/**
 * Tributação pelo ICMS <br />
 * 60 - ICMS cobrado anteriormente por substituição tributária 
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