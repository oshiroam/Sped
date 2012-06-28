<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef;

/**
 * Origem do processo, informar com:<br />
 * 0 - SEFAZ;<br />
 * 1 - Justiça Federal;<br />
 * 2 - Justiça Estadual;<br />
 * 3 - Secex/RFB;<br />
 * 9 - Outros
 * @name IndProc
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class IndProc extends \Sped\Components\Xml\Element  {
    const NAME = 'indProc';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}