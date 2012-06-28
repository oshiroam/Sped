<?php
namespace Sped\Schemas\V200;

/**
 *  Tipo string genérico

 * @name TString
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TString extends \Sped\Components\Xml\Element  {
    const NAME = 'String';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.w3.org/2001/XMLSchema');
    }

}