<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta;

/**
 * Razão Social ou nome

 * @name XNome
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class XNome extends \Sped\Components\Xml\Element  {
    const NAME = 'xNome';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}