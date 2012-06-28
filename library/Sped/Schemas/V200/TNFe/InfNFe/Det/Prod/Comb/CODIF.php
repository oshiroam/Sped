<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb;

/**
 * Código de autorização / registro<br />
 * do CODIF.<br />
 * Informar apenas quando a UF<br />
 * utilizar o CODIF (Sistema de<br />
 * Controle do Diferimento do Imposto<br />
 * nas Operações com AEAC - Álcool<br />
 * Etílico Anidro Combustível).
 * @name CODIF
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class CODIF extends \Sped\Components\Xml\Element  {
    const NAME = 'CODIF';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}