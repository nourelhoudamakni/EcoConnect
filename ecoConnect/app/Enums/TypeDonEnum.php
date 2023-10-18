<?php



namespace App\Enums;



enum TypeDonEnum:string {

    case Competence = 'competence';
    case Connaissance = 'connaissance';
    case Terrain = 'terrain';
    case Equipement = 'equipement';
    case Matiere = 'matiere premieres';
    case Nourriture = 'nourriture bio';
    case Ecologique = 'produits ecologique';
    case Financement = 'financement';
    

    public static function valuesCategories(): array
{
    return array_column(self::cases(), 'name', 'value');
    // ["deposit" => "Deposit", "withdraw" => "Withdraw"]
}
}

