<?php



namespace App\Enums;



enum StatusEnum:string {

    case Attente = 'en attente';
    case Traite = 'traite';
    case Expire = 'expire';



    public static function valuesCategories(): array
{
    return array_column(self::cases(), 'name', 'value');
    // ["deposit" => "Deposit", "withdraw" => "Withdraw"]
}
}

