<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP;

/**
 * AAMM da emissão da NF de produtor (v2.0)

 * @name AAMM
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class AAMM extends \Sped\Components\Xml\Element  {
    const NAME = 'AAMM';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}