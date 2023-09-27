<?php



namespace App\Enums;



enum CategorieActeEnum:string {

    case Reforestation = 'reforestation';

    case Nettoyage = 'nettoyage de plages et de riviéres';

    case Conservation = 'conservation de la faune';

    case Education = 'education environnementale';

    case Protection = 'protection des espaces verts';

    case Reduction = 'reduction des dechets';

    case Sensibilisation = 'sensibilisation';

    case Plantation = 'journée de plantation des arbres';

    case Autres = 'autres';

}

