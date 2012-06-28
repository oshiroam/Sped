<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI;

/**
 * Código do exportador (usado nos sistemas internos de informação do emitente da NF-e)

 * @name CExportador
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class CExportador extends \Sped\Components\Xml\Element  {
    const NAME = 'cExportador';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}