<?php
namespace Sped\Schemas\V200;

/**
 * Tipo Decimal com 15 dígitos, sendo 12 de corpo e 3 decimais, utilizado em tags opcionais

 * @name TDec_1203Opc
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TDec_1203Opc extends \Sped\Components\Xml\Element  {
    const NAME = 'Dec_1203Opc';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.w3.org/2001/XMLSchema');
    }

}