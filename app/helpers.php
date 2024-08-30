<?php

namespace App;

use NumberFormatter;

class Helpers
{
    /**
     * Formater un nombre avec des séparateurs de milliers.
     *
     * @param  int  $value
     * @param  string  $locale
     * @param  int  $style : NumberFormatter::DECIMAL | NumberFormatter::CURRENCY | NumberFormatter::PERCENT | NumberFormatter::SPELLOUT 
     * @param  int  $precision
     * @param  bool  $groupingUsed
     * @param  string  $currencyCode
     * @return string
     * @see https://www.php.net/manual/fr/class.numberformatter.php
     */
    public static function formatNumber(
        $value, 
        $locale = "fr_FR", 
        $style = NumberFormatter::DECIMAL, 
        $precision = 0, 
        $groupingUsed = true,
        $currencyCode = null
        )
    {
        // Si aucun code de devise n'est fourni, utilisez celui du shop actuel
        if (!$currencyCode && isset($GLOBALS['shop'])) {
            $currencyCode = $GLOBALS['shop']->currency->code ?? 'USD'; // USD comme devise par défaut si aucune n'est trouvée
        }

        $numberFormatter = new NumberFormatter($locale, $style);
        $numberFormatter->setAttribute(NumberFormatter::FRACTION_DIGITS, $precision);
        $numberFormatter->setAttribute(NumberFormatter::GROUPING_USED, $groupingUsed);
        if($style == NumberFormatter::CURRENCY) {
            $numberFormatter->setTextAttribute(NumberFormatter::CURRENCY_CODE, $currencyCode);            
        }

        return $numberFormatter->format($value);
    }

    // Vous pourrez ajouter d'autres fonctions utilitaires ici
}
