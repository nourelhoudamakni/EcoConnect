<?php



namespace App\Enums;



enum CategorieEducationEnum:string {

    case Climat  = 'changement climatique';

    case Biodiversité = 'conservation de la biodiversité';

    case Ressources = 'gestion des ressources naturelles';

    case Education = 'éducation à la durabilité';

    case Energie = 'énergies renouvelables';

    case Pollution = 'pollution et déchets ';

    case Politique = 'législation et politiques environnementales';

    case EcologieUrbaine = 'écologie urbaine ';

    case EcologieMarine = 'écologie marine';

    case Autres = 'autres';

    public static function valuesCategories(): array
{
    return array_column(self::cases(), 'name', 'value');
    // ["deposit" => "Deposit", "withdraw" => "Withdraw"]
}

}


