<?php



namespace App\Enums;



enum EtatProjetEnum:string {

    case planifie = 'planifie';

    case Encours = 'en cours';

    case Termine = 'termine';
    
    public static function valuesEtat(): array
{
    return array_column(self::cases(), 'name', 'value');
    
}

}

