<?php
/**
 * ============================================
 * ANNUAIRE-MENUISIERS.FR - CONFIGURATION
 * ============================================
 */

define('SITE_NAME', 'trouver-devis-menuiserie.fr');
define('SITE_DOMAIN', 'trouver-devis-menuiserie.fr');
define('SITE_URL', 'https://trouver-devis-menuiserie.fr');
define('SITE_EMAIL', 'admin@miraubolant.com');
define('SITE_TAGLINE', "Menuiserie et Agencement Partout en France");
define('SITE_DESCRIPTION', "Trouvez un menuisier pour la crÃ©ation de vos meubles sur mesure, portes ou escaliers.");

define('SITE_LOGO_TEXT', 'TROUVER-DEVIS-MENUISERIE');
define('SITE_LOGO_TLD', '.FR');

define('METIER', "menuisier");
define('METIER_PLURAL', "menuisiers");
define('METIER_TITLE', "Menuisier Ã‰bÃ©niste");
define('METIER_ICON', "hammer");

define('VUD_PARTENAIRE_ID', '2372');
define('VUD_CATEGORIE_ID', '10');
define('VUD_IFRAME_URL', 'https://www.viteundevis.com/widget/devis.php');

define('SCRAPE_QUERY', "menuisier bois sur mesure amÃ©nagement");
define('SCRAPE_API_KEY', '[CLE_API_SEMSCRAPER]');

define('ITEMS_PER_PAGE', 24);
define('NEARBY_CITIES_COUNT', 100);
define('NEARBY_DEPARTMENTS_COUNT', 6);
define('ARTISANS_PER_PAGE', 15);

define('DATA_PATH', __DIR__ . '/data/');
define('REGIONS_FILE', DATA_PATH . 'regions/regions.json');

define('MODELES', [
    ['slug' => 'amenagement-sur-mesure', 'nom' => 'AmÃ©nagement IntÃ©rieur', 'emoji' => "ðŸª‘", 'vud_cat' => '137'],
    ['slug' => 'dressing-sur-mesure', 'nom' => 'Dressing', 'emoji' => "ðŸ‘—", 'vud_cat' => '137'],
    ['slug' => 'escalier-bois', 'nom' => 'Escalier Bois', 'emoji' => "ðŸªœ", 'vud_cat' => '137'],
    ['slug' => 'cuisine-sur-mesure', 'nom' => 'Cuisine sur Mesure', 'emoji' => "ðŸ³", 'vud_cat' => '137'],
    ['slug' => 'meuble-salle-de-bain', 'nom' => 'Meuble Salle de Bain', 'emoji' => "ðŸ›", 'vud_cat' => '137'],
    ['slug' => 'bibliotheque-bois', 'nom' => 'BibliothÃ¨que Sur Mesure', 'emoji' => "ðŸ“š", 'vud_cat' => '137'],
    ['slug' => 'portes-interieures-bois', 'nom' => 'Portes IntÃ©rieures', 'emoji' => "ðŸšª", 'vud_cat' => '137'],
    ['slug' => 'verriere-interieure', 'nom' => 'VerriÃ¨re IntÃ©rieure', 'emoji' => "ðŸªŸ", 'vud_cat' => '137'],
    ['slug' => 'placard-sous-escalier', 'nom' => 'Placard Sous Escalier', 'emoji' => "ðŸ“¦", 'vud_cat' => '137'],
    ['slug' => 'parquet-massif', 'nom' => 'Pose de Parquet Massif', 'emoji' => "ðŸªµ", 'vud_cat' => '137'],
    ['slug' => 'parquet-flottant', 'nom' => 'Pose de Parquet Flottant', 'emoji' => "ðŸ§©", 'vud_cat' => '137'],
    ['slug' => 'terrasse-bois', 'nom' => 'Terrasse en Bois', 'emoji' => "ðŸŒ´", 'vud_cat' => '137'],
    ['slug' => 'fenetres-bois', 'nom' => 'FenÃªtres en Bois', 'emoji' => "ðŸªŸ", 'vud_cat' => '137'],
    ['slug' => 'volets-bois', 'nom' => 'Volets Battants/Roulants', 'emoji' => "ðŸ˜ï¸", 'vud_cat' => '137'],
    ['slug' => 'meubles-tv', 'nom' => 'Meuble TV Sur Mesure', 'emoji' => "ðŸ“º", 'vud_cat' => '137'],
    ['slug' => 'lit-estrade', 'nom' => 'Lit Estrade & TÃªte de Lit', 'emoji' => "ðŸ›Œ", 'vud_cat' => '137'],
    ['slug' => 'portail-bois', 'nom' => 'Portail en Bois', 'emoji' => "â›©ï¸", 'vud_cat' => '137'],
    ['slug' => 'claustra-bois', 'nom' => 'Claustra et SÃ©paration', 'emoji' => "ðŸªš", 'vud_cat' => '137'],
    ['slug' => 'restauration-meubles', 'nom' => 'Restauration de Meubles', 'emoji' => "ðŸ› ï¸", 'vud_cat' => '137'],
    ['slug' => 'facade-placard', 'nom' => 'FaÃ§ades de Placard', 'emoji' => "ðŸšª", 'vud_cat' => '137'],
    ['slug' => 'garde-corps-bois', 'nom' => 'Garde-Corps et Rambarde', 'emoji' => "ðŸ›¡ï¸", 'vud_cat' => '137'],
    ['slug' => 'banquette-coffre', 'nom' => 'Banquette avec Coffre', 'emoji' => "ðŸ›‹ï¸", 'vud_cat' => '137'],
    ['slug' => 'habillage-mural', 'nom' => 'Habillage Mural Bois', 'emoji' => "ðŸ§±", 'vud_cat' => '137'],
    ['slug' => 'mezzanine-bois', 'nom' => 'Mezzanine & Lit Cabane', 'emoji' => "ðŸŽª", 'vud_cat' => '137'],
    ['slug' => 'comptoir-bar', 'nom' => 'Comptoir et Bar', 'emoji' => "ðŸº", 'vud_cat' => '137'],
    ['slug' => 'bureau-sur-mesure', 'nom' => 'Bureau Sur Mesure', 'emoji' => "ðŸ’»", 'vud_cat' => '137'],
    ['slug' => 'cache-radiateur', 'nom' => 'Cache Radiateur', 'emoji' => "ðŸŒ¡ï¸", 'vud_cat' => '137'],
    ['slug' => 'abris-de-jardin', 'nom' => 'Abri de Jardin & Carport', 'emoji' => "ðŸ›–", 'vud_cat' => '137'],
    ['slug' => 'bardage-bois', 'nom' => 'Bardage ExtÃ©rieur', 'emoji' => "ðŸ¡", 'vud_cat' => '137'],
    ['slug' => 'volets-persiennes', 'nom' => 'Volets / Persiennes', 'emoji' => "ðŸªŸ", 'vud_cat' => '137'],
]);

define('STYLES', [
    ['slug' => 'amenagement-sur-mesure', 'nom' => 'AmÃ©nagement IntÃ©rieur', 'emoji' => "ðŸª‘", 'desc' => 'Optimisation de l\'espace'],
    ['slug' => 'dressing-sur-mesure', 'nom' => 'Dressing', 'emoji' => "ðŸ‘—", 'desc' => 'Penderie et rangements optimisÃ©s'],
    ['slug' => 'escalier-bois', 'nom' => 'Escalier Bois', 'emoji' => "ðŸªœ", 'desc' => 'Conception droite, quart tournant ou hÃ©licoÃ¯dal'],
    ['slug' => 'cuisine-sur-mesure', 'nom' => 'Cuisine sur Mesure', 'emoji' => "ðŸ³", 'desc' => 'Conception de cuisine Ã©quipÃ©e'],
    ['slug' => 'meuble-salle-de-bain', 'nom' => 'Meuble Salle de Bain', 'emoji' => "ðŸ›", 'desc' => 'Meuble sous vasque rÃ©sistant Ã  l\'eau'],
    ['slug' => 'bibliotheque-bois', 'nom' => 'BibliothÃ¨que Sur Mesure', 'emoji' => "ðŸ“š", 'desc' => 'Modulable et toute hauteur'],
    ['slug' => 'portes-interieures-bois', 'nom' => 'Portes IntÃ©rieures', 'emoji' => "ðŸšª", 'desc' => 'Coulissantes ou Ã  galandage'],
    ['slug' => 'verriere-interieure', 'nom' => 'VerriÃ¨re IntÃ©rieure', 'emoji' => "ðŸªŸ", 'desc' => 'SÃ©paration verre et bois/mÃ©tal'],
    ['slug' => 'placard-sous-escalier', 'nom' => 'Placard Sous Escalier', 'emoji' => "ðŸ“¦", 'desc' => 'Tiroirs et amÃ©nagements malins'],
    ['slug' => 'parquet-massif', 'nom' => 'Pose de Parquet Massif', 'emoji' => "ðŸªµ", 'desc' => 'CollÃ©e ou clouÃ©e, ponÃ§age inclus'],
    ['slug' => 'parquet-flottant', 'nom' => 'Pose de Parquet Flottant', 'emoji' => "ðŸ§©", 'desc' => 'StratifiÃ© ou contrecollÃ©'],
    ['slug' => 'terrasse-bois', 'nom' => 'Terrasse en Bois', 'emoji' => "ðŸŒ´", 'desc' => 'Bois exotique, composite ou pin'],
    ['slug' => 'fenetres-bois', 'nom' => 'FenÃªtres en Bois', 'emoji' => "ðŸªŸ", 'desc' => 'Double vitrage, tradition ou moderne'],
    ['slug' => 'volets-bois', 'nom' => 'Volets Battants/Roulants', 'emoji' => "ðŸ˜ï¸", 'desc' => 'Bois massif et motorisation'],
    ['slug' => 'meubles-tv', 'nom' => 'Meuble TV Sur Mesure', 'emoji' => "ðŸ“º", 'desc' => 'Passage de cÃ¢bles dissimulÃ©'],
    ['slug' => 'lit-estrade', 'nom' => 'Lit Estrade & TÃªte de Lit', 'emoji' => "ðŸ›Œ", 'desc' => 'Rangements sous le matelas'],
    ['slug' => 'portail-bois', 'nom' => 'Portail en Bois', 'emoji' => "â›©ï¸", 'desc' => 'Portails battants, plein ou ajourÃ©s'],
    ['slug' => 'claustra-bois', 'nom' => 'Claustra et SÃ©paration', 'emoji' => "ðŸªš", 'desc' => 'Paroi ajourÃ©e esthÃ©tique'],
    ['slug' => 'restauration-meubles', 'nom' => 'Restauration de Meubles', 'emoji' => "ðŸ› ï¸", 'desc' => 'PonÃ§age, vernis et rÃ©paration'],
    ['slug' => 'facade-placard', 'nom' => 'FaÃ§ades de Placard', 'emoji' => "ðŸšª", 'desc' => 'Sur mesure, coulissant ou battant'],
    ['slug' => 'garde-corps-bois', 'nom' => 'Garde-Corps et Rambarde', 'emoji' => "ðŸ›¡ï¸", 'desc' => 'SÃ©curisation d\'Ã©tage'],
    ['slug' => 'banquette-coffre', 'nom' => 'Banquette avec Coffre', 'emoji' => "ðŸ›‹ï¸", 'desc' => 'Assise et rangement dissimulÃ©'],
    ['slug' => 'habillage-mural', 'nom' => 'Habillage Mural Bois', 'emoji' => "ðŸ§±", 'desc' => 'Tasseaux, panneaux ou lambris'],
    ['slug' => 'mezzanine-bois', 'nom' => 'Mezzanine & Lit Cabane', 'emoji' => "ðŸŽª", 'desc' => 'Plateforme sur mesure'],
    ['slug' => 'comptoir-bar', 'nom' => 'Comptoir et Bar', 'emoji' => "ðŸº", 'desc' => 'Pour particuliers et professionnels'],
    ['slug' => 'bureau-sur-mesure', 'nom' => 'Bureau Sur Mesure', 'emoji' => "ðŸ’»", 'desc' => 'Espace de tÃ©lÃ©travail adaptÃ©'],
    ['slug' => 'cache-radiateur', 'nom' => 'Cache Radiateur', 'emoji' => "ðŸŒ¡ï¸", 'desc' => 'Grille bois esthÃ©tique'],
    ['slug' => 'abris-de-jardin', 'nom' => 'Abri de Jardin & Carport', 'emoji' => "ðŸ›–", 'desc' => 'Structure bois extÃ©rieur'],
    ['slug' => 'bardage-bois', 'nom' => 'Bardage ExtÃ©rieur', 'emoji' => "ðŸ¡", 'desc' => 'Isolation et finition de faÃ§ade'],
    ['slug' => 'volets-persiennes', 'nom' => 'Volets / Persiennes', 'emoji' => "ðŸªŸ", 'desc' => 'Style traditionnel'],
]);

define('SERVICES', [
    [
        'titre' => "Agencement Sur Mesure",
        'icon' => "ðŸ“",
        'desc' => "Conception 3D, fabrication et pose de vos bibliothÃ¨ques, dressings et rangements parfaitement adaptÃ©s Ã  vos espaces.",
        'points' => ["Optimisation des petits espaces", "Large choix d'essences de bois", "Conception personnalisÃ©e unique"]
    ],
    [
        'titre' => "Menuiserie ExtÃ©rieure",
        'icon' => "ðŸ¡",
        'desc' => "AmÃ©liorez l'esthÃ©tique et l'isolation de votre maison avec la pose de fenÃªtres, portes d'entrÃ©e, volets et terrasses en bois.",
        'points' => ["Produits certifiÃ©s et isolants", "Portes, fenÃªtres, terrasses", "RÃ©novation thermique"]
    ],
    [
        'titre' => "Restauration & Entretien",
        'icon' => "ðŸ› ï¸",
        'desc' => "Redonnez vie Ã  vos anciens parquets, escaliers ou meubles en bois massif grÃ¢ce Ã  des techniques traditionnelles.",
        'points' => ["PonÃ§age et vitrification", "Techniques d'Ã©bÃ©nisterie classiques", "Revalorisation du patrimoine"]
    ],
]);

define('FAQ_ACCUEIL', [
    [
        'question' => "Quelle est la diffÃ©rence entre un menuisier et un Ã©bÃ©niste ?",
        'reponse' => "GÃ©nÃ©ralement, le menuisier s'occupe de l'agencement (portes, placards, escaliers, parquets, fenÃªtres), souvent avec des bois massifs ou des panneaux dÃ©rivÃ©s (MDF, mÃ©laminÃ©). L'Ã©bÃ©niste, en revanche, se concentre sur la crÃ©ation ou la restauration de meubles de valeur, en utilisant des placages de bois prÃ©cieux et de la marqueterie."
    ],
    [
        'question' => "Pourquoi faire faire un dressing sur mesure plutÃ´t que l'acheter en kit ?",
        'reponse' => "Un dressing sur mesure Ã©pouse parfaitement votre piÃ¨ce (y compris sous rampants ou sous escaliers). Il optimise le moindre centimÃ¨tre carrÃ© du sol au plafond, s'adapte Ã  vos contraintes (murs non droits), offre une bien meilleure soliditÃ© et vous permet de choisir la couleur et les finitions exactes (tiroirs freinÃ©s, Ã©clairage intÃ©grÃ©)."
    ],
    [
        'question' => "Quelles essences de bois sont recommandÃ©es pour une terrasse extÃ©rieure ?",
        'reponse' => "Pour l'extÃ©rieur, il faut des bois de classe 4 ou 5 (rÃ©sistants Ã  l'humiditÃ© et aux champignons). On utilise souvent des bois exotiques (IpÃ©, Cumaru, Teck) trÃ¨s durables, ou des bois europÃ©ens traitÃ©s autoclave (Pin) ou naturellement rÃ©sistants (Douglas, ChÃ¢taignier, Robinier). Le bois composite est aussi une excellente alternative sans Ã©chardes."
    ],
    [
        'question' => "Combien coÃ»te un meuble sur mesure ?",
        'reponse' => "Le prix dÃ©pend des dimensions, de l'amÃ©nagement interne (nombre de tiroirs, quincaillerie), et surtout des matÃ©riaux : le mÃ©laminÃ© sera plus Ã©conomique que le placage bois, lui-mÃªme moins cher que le bois massif. Seul un devis prÃ©cis de l'artisan, aprÃ¨s prise de cotes, peut vous donner le tarif de votre projet."
    ],
    [
        'question' => "Restaurez-vous les anciens parquets ?",
        'reponse' => "Oui, la rÃ©novation d'un parquet massif ancien est l'une des prestations de la menuiserie. Cela passe gÃ©nÃ©ralement par le remplacement des lames abÃ®mÃ©es, un ponÃ§age complet (dÃ©grossissage et finition) et l'application d'un traitement protecteur : vitrification (vernis), huilage ou cirage au choix."
    ],
    [
        'question' => "Pouvez-vous installer des fenÃªtres en respectant les normes Ã©nergÃ©tiques ?",
        'reponse' => "Absolument. Les menuisiers partenaires proposent des fenÃªtres en bois, alu ou PVC Ã©quipÃ©es de double ou triple vitrage. S'ils sont certifiÃ©s RGE (Reconnu Garant de l'Environnement), leur intervention peut vous donner droit Ã  des aides financiÃ¨res pour la rÃ©novation thermique."
    ]
]);

define('TOP_VILLES', [
    ['nom' => 'Paris', 'slug' => 'paris', 'cp' => '75000', 'region' => 'ile-de-france', 'dept' => 'paris'],
    ['nom' => 'Marseille', 'slug' => 'marseille', 'cp' => '13000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'bouches-du-rhone'],
    ['nom' => 'Lyon', 'slug' => 'lyon', 'cp' => '69000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'rhone'],
    ['nom' => 'Toulouse', 'slug' => 'toulouse', 'cp' => '31100', 'region' => 'occitanie', 'dept' => 'haute-garonne'],
    ['nom' => 'Nice', 'slug' => 'nice', 'cp' => '06000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'alpes-maritimes'],
    ['nom' => 'Nantes', 'slug' => 'nantes', 'cp' => '44200', 'region' => 'pays-de-la-loire', 'dept' => 'loire-atlantique'],
    ['nom' => 'Montpellier', 'slug' => 'montpellier', 'cp' => '34080', 'region' => 'occitanie', 'dept' => 'herault'],
    ['nom' => 'Bordeaux', 'slug' => 'bordeaux', 'cp' => '33300', 'region' => 'nouvelle-aquitaine', 'dept' => 'gironde'],
    ['nom' => 'Lille', 'slug' => 'lille', 'cp' => '59260', 'region' => 'hauts-de-france', 'dept' => 'nord'],
    ['nom' => 'Strasbourg', 'slug' => 'strasbourg', 'cp' => '67000', 'region' => 'grand-est', 'dept' => 'bas-rhin'],
    ['nom' => 'Rennes', 'slug' => 'rennes', 'cp' => '35700', 'region' => 'bretagne', 'dept' => 'ille-et-vilaine'],
    ['nom' => 'Toulon', 'slug' => 'toulon', 'cp' => '83000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'var'],
    ['nom' => 'Grenoble', 'slug' => 'grenoble', 'cp' => '38000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'isere'],
    ['nom' => 'Dijon', 'slug' => 'dijon', 'cp' => '21000', 'region' => 'bourgogne-franche-comte', 'dept' => 'cote-d-or'],
    ['nom' => 'Angers', 'slug' => 'angers', 'cp' => '49000', 'region' => 'pays-de-la-loire', 'dept' => 'maine-et-loire'],
    ['nom' => 'Nimes', 'slug' => 'nimes', 'cp' => '30000', 'region' => 'occitanie', 'dept' => 'gard'],
    ['nom' => 'Clermont-Ferrand', 'slug' => 'clermont-ferrand', 'cp' => '63000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'puy-de-dome'],
    ['nom' => 'Le Havre', 'slug' => 'le-havre', 'cp' => '76600', 'region' => 'normandie', 'dept' => 'seine-maritime'],
]);

define('AVANTAGES', [
    ['titre' => 'RÃ©seau National', 'desc' => 'Des milliers de professionnels rÃ©fÃ©rencÃ©s dans toute la France.', 'icon' => "ðŸ—ºï¸"],
    ['titre' => 'Partenaires ExpÃ©rimentÃ©s', 'desc' => 'Trouvez le bon interlocuteur pour la rÃ©ussite de votre projet', 'icon' => "âœ…"],
    ['titre' => 'Mise en Relation Rapide', 'desc' => 'Obtenez gratuitement des devis adaptÃ©s Ã  vos besoins.', 'icon' => "ðŸ’°"],
]);

define('HERO_IMAGE', 'https://images.unsplash.com/photo-1533090481720-856c6e3c1fdc?w=1920&q=80&auto=format&fit=crop');
define('MODELE_IMAGE', 'https://plus.unsplash.com/premium_photo-1681987448375-7b068da6cbee?w=1920&q=80&auto=format&fit=crop');


function getModeleBySlug($slug)
{
    foreach (MODELES as $modele) {
        if ($modele['slug'] === $slug) {
            return $modele;
        }
    }
    return null;
}

function getAllModeles()
{
    return MODELES;
}

function getVudUrl($modele = null)
{
    $catId = VUD_CATEGORIE_ID;
    if ($modele && isset($modele['vud_cat'])) {
        $catId = $modele['vud_cat'];
    }
    return 'https://www.viteundevis.com/in/?pid=' . VUD_PARTENAIRE_ID . '&c=' . $catId;
}

function getVudCatForModele($modele = null)
{
    if ($modele && isset($modele['vud_cat'])) {
        return $modele['vud_cat'];
    }
    return VUD_CATEGORIE_ID;
}

