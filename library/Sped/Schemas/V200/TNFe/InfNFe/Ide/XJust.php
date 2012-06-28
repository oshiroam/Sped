<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Ide;

/**
 * Informar a Justificativa da entrada em (v.2.0)

 * @name XJust
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class XJust extends \Sped\Components\Xml\Element  {
    const NAME = 'xJust';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}