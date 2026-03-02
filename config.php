<?php
/**
 * ============================================
 * ANNUAIRE-MENUISIERS.FR - CONFIGURATION
 * ============================================
 */

define('SITE_NAME', 'trouver-devis-menuiserie.fr');
define('SITE_DOMAIN', 'trouver-devis-menuiserie.fr');
define('SITE_URL', 'https://trouver-devis-menuiserie.fr');
define('SITE_EMAIL', 'contact@trouver-devis-menuiserie.fr');
define('SITE_TAGLINE', "Menuiserie et Agencement Partout en France");
define('SITE_DESCRIPTION', "Trouvez un menuisier pour la création de vos meubles sur mesure, portes ou escaliers.");

define('SITE_LOGO_TEXT', 'TROUVER-DEVIS-MENUISERIE');
define('SITE_LOGO_TLD', '.FR');

define('METIER', "menuisier");
define('METIER_PLURAL', "menuisiers");
define('METIER_TITLE', "Menuisier Ébéniste");
define('METIER_ICON', "hammer");

define('VUD_PARTENAIRE_ID', '2372');
define('VUD_CATEGORIE_ID', '10');
define('VUD_IFRAME_URL', 'https://www.viteundevis.com/widget/devis.php');

define('SCRAPE_QUERY', "menuisier bois sur mesure aménagement");
define('SCRAPE_API_KEY', '[CLE_API_SEMSCRAPER]');

define('ITEMS_PER_PAGE', 24);
define('NEARBY_CITIES_COUNT', 100);
define('NEARBY_DEPARTMENTS_COUNT', 6);
define('ARTISANS_PER_PAGE', 15);

define('DATA_PATH', __DIR__ . '/data/');
define('REGIONS_FILE', DATA_PATH . 'regions/regions.json');

define('MODELES', [
    ['slug' => 'amenagement-sur-mesure', 'nom' => 'Aménagement Intérieur', 'emoji' => "🪑", 'vud_cat' => '137'],
    ['slug' => 'dressing-sur-mesure', 'nom' => 'Dressing', 'emoji' => "👗", 'vud_cat' => '137'],
    ['slug' => 'escalier-bois', 'nom' => 'Escalier Bois', 'emoji' => "🪜", 'vud_cat' => '137'],
    ['slug' => 'cuisine-sur-mesure', 'nom' => 'Cuisine sur Mesure', 'emoji' => "🍳", 'vud_cat' => '137'],
    ['slug' => 'meuble-salle-de-bain', 'nom' => 'Meuble Salle de Bain', 'emoji' => "🛁", 'vud_cat' => '137'],
    ['slug' => 'bibliotheque-bois', 'nom' => 'Bibliothèque Sur Mesure', 'emoji' => "📚", 'vud_cat' => '137'],
    ['slug' => 'portes-interieures-bois', 'nom' => 'Portes Intérieures', 'emoji' => "🚪", 'vud_cat' => '137'],
    ['slug' => 'verriere-interieure', 'nom' => 'Verrière Intérieure', 'emoji' => "🪟", 'vud_cat' => '137'],
    ['slug' => 'placard-sous-escalier', 'nom' => 'Placard Sous Escalier', 'emoji' => "📦", 'vud_cat' => '137'],
    ['slug' => 'parquet-massif', 'nom' => 'Pose de Parquet Massif', 'emoji' => "🪵", 'vud_cat' => '137'],
    ['slug' => 'parquet-flottant', 'nom' => 'Pose de Parquet Flottant', 'emoji' => "🧩", 'vud_cat' => '137'],
    ['slug' => 'terrasse-bois', 'nom' => 'Terrasse en Bois', 'emoji' => "🌴", 'vud_cat' => '137'],
    ['slug' => 'fenetres-bois', 'nom' => 'Fenêtres en Bois', 'emoji' => "🪟", 'vud_cat' => '137'],
    ['slug' => 'volets-bois', 'nom' => 'Volets Battants/Roulants', 'emoji' => "🏘️", 'vud_cat' => '137'],
    ['slug' => 'meubles-tv', 'nom' => 'Meuble TV Sur Mesure', 'emoji' => "📺", 'vud_cat' => '137'],
    ['slug' => 'lit-estrade', 'nom' => 'Lit Estrade & Tête de Lit', 'emoji' => "🛌", 'vud_cat' => '137'],
    ['slug' => 'portail-bois', 'nom' => 'Portail en Bois', 'emoji' => "⛩️", 'vud_cat' => '137'],
    ['slug' => 'claustra-bois', 'nom' => 'Claustra et Séparation', 'emoji' => "🪚", 'vud_cat' => '137'],
    ['slug' => 'restauration-meubles', 'nom' => 'Restauration de Meubles', 'emoji' => "🛠️", 'vud_cat' => '137'],
    ['slug' => 'facade-placard', 'nom' => 'Façades de Placard', 'emoji' => "🚪", 'vud_cat' => '137'],
    ['slug' => 'garde-corps-bois', 'nom' => 'Garde-Corps et Rambarde', 'emoji' => "🛡️", 'vud_cat' => '137'],
    ['slug' => 'banquette-coffre', 'nom' => 'Banquette avec Coffre', 'emoji' => "🛋️", 'vud_cat' => '137'],
    ['slug' => 'habillage-mural', 'nom' => 'Habillage Mural Bois', 'emoji' => "🧱", 'vud_cat' => '137'],
    ['slug' => 'mezzanine-bois', 'nom' => 'Mezzanine & Lit Cabane', 'emoji' => "🎪", 'vud_cat' => '137'],
    ['slug' => 'comptoir-bar', 'nom' => 'Comptoir et Bar', 'emoji' => "🍺", 'vud_cat' => '137'],
    ['slug' => 'bureau-sur-mesure', 'nom' => 'Bureau Sur Mesure', 'emoji' => "💻", 'vud_cat' => '137'],
    ['slug' => 'cache-radiateur', 'nom' => 'Cache Radiateur', 'emoji' => "🌡️", 'vud_cat' => '137'],
    ['slug' => 'abris-de-jardin', 'nom' => 'Abri de Jardin & Carport', 'emoji' => "🛖", 'vud_cat' => '137'],
    ['slug' => 'bardage-bois', 'nom' => 'Bardage Extérieur', 'emoji' => "🏡", 'vud_cat' => '137'],
    ['slug' => 'volets-persiennes', 'nom' => 'Volets / Persiennes', 'emoji' => "🪟", 'vud_cat' => '137'],
]);

define('STYLES', [
    ['slug' => 'amenagement-sur-mesure', 'nom' => 'Aménagement Intérieur', 'emoji' => "🪑", 'desc' => 'Optimisation de l\'espace'],
    ['slug' => 'dressing-sur-mesure', 'nom' => 'Dressing', 'emoji' => "👗", 'desc' => 'Penderie et rangements optimisés'],
    ['slug' => 'escalier-bois', 'nom' => 'Escalier Bois', 'emoji' => "🪜", 'desc' => 'Conception droite, quart tournant ou hélicoïdal'],
    ['slug' => 'cuisine-sur-mesure', 'nom' => 'Cuisine sur Mesure', 'emoji' => "🍳", 'desc' => 'Conception de cuisine équipée'],
    ['slug' => 'meuble-salle-de-bain', 'nom' => 'Meuble Salle de Bain', 'emoji' => "🛁", 'desc' => 'Meuble sous vasque résistant à l\'eau'],
    ['slug' => 'bibliotheque-bois', 'nom' => 'Bibliothèque Sur Mesure', 'emoji' => "📚", 'desc' => 'Modulable et toute hauteur'],
    ['slug' => 'portes-interieures-bois', 'nom' => 'Portes Intérieures', 'emoji' => "🚪", 'desc' => 'Coulissantes ou à galandage'],
    ['slug' => 'verriere-interieure', 'nom' => 'Verrière Intérieure', 'emoji' => "🪟", 'desc' => 'Séparation verre et bois/métal'],
    ['slug' => 'placard-sous-escalier', 'nom' => 'Placard Sous Escalier', 'emoji' => "📦", 'desc' => 'Tiroirs et aménagements malins'],
    ['slug' => 'parquet-massif', 'nom' => 'Pose de Parquet Massif', 'emoji' => "🪵", 'desc' => 'Collée ou clouée, ponçage inclus'],
    ['slug' => 'parquet-flottant', 'nom' => 'Pose de Parquet Flottant', 'emoji' => "🧩", 'desc' => 'Stratifié ou contrecollé'],
    ['slug' => 'terrasse-bois', 'nom' => 'Terrasse en Bois', 'emoji' => "🌴", 'desc' => 'Bois exotique, composite ou pin'],
    ['slug' => 'fenetres-bois', 'nom' => 'Fenêtres en Bois', 'emoji' => "🪟", 'desc' => 'Double vitrage, tradition ou moderne'],
    ['slug' => 'volets-bois', 'nom' => 'Volets Battants/Roulants', 'emoji' => "🏘️", 'desc' => 'Bois massif et motorisation'],
    ['slug' => 'meubles-tv', 'nom' => 'Meuble TV Sur Mesure', 'emoji' => "📺", 'desc' => 'Passage de câbles dissimulé'],
    ['slug' => 'lit-estrade', 'nom' => 'Lit Estrade & Tête de Lit', 'emoji' => "🛌", 'desc' => 'Rangements sous le matelas'],
    ['slug' => 'portail-bois', 'nom' => 'Portail en Bois', 'emoji' => "⛩️", 'desc' => 'Portails battants, plein ou ajourés'],
    ['slug' => 'claustra-bois', 'nom' => 'Claustra et Séparation', 'emoji' => "🪚", 'desc' => 'Paroi ajourée esthétique'],
    ['slug' => 'restauration-meubles', 'nom' => 'Restauration de Meubles', 'emoji' => "🛠️", 'desc' => 'Ponçage, vernis et réparation'],
    ['slug' => 'facade-placard', 'nom' => 'Façades de Placard', 'emoji' => "🚪", 'desc' => 'Sur mesure, coulissant ou battant'],
    ['slug' => 'garde-corps-bois', 'nom' => 'Garde-Corps et Rambarde', 'emoji' => "🛡️", 'desc' => 'Sécurisation d\'étage'],
    ['slug' => 'banquette-coffre', 'nom' => 'Banquette avec Coffre', 'emoji' => "🛋️", 'desc' => 'Assise et rangement dissimulé'],
    ['slug' => 'habillage-mural', 'nom' => 'Habillage Mural Bois', 'emoji' => "🧱", 'desc' => 'Tasseaux, panneaux ou lambris'],
    ['slug' => 'mezzanine-bois', 'nom' => 'Mezzanine & Lit Cabane', 'emoji' => "🎪", 'desc' => 'Plateforme sur mesure'],
    ['slug' => 'comptoir-bar', 'nom' => 'Comptoir et Bar', 'emoji' => "🍺", 'desc' => 'Pour particuliers et professionnels'],
    ['slug' => 'bureau-sur-mesure', 'nom' => 'Bureau Sur Mesure', 'emoji' => "💻", 'desc' => 'Espace de télétravail adapté'],
    ['slug' => 'cache-radiateur', 'nom' => 'Cache Radiateur', 'emoji' => "🌡️", 'desc' => 'Grille bois esthétique'],
    ['slug' => 'abris-de-jardin', 'nom' => 'Abri de Jardin & Carport', 'emoji' => "🛖", 'desc' => 'Structure bois extérieur'],
    ['slug' => 'bardage-bois', 'nom' => 'Bardage Extérieur', 'emoji' => "🏡", 'desc' => 'Isolation et finition de façade'],
    ['slug' => 'volets-persiennes', 'nom' => 'Volets / Persiennes', 'emoji' => "🪟", 'desc' => 'Style traditionnel'],
]);

define('SERVICES', [
    [
        'titre' => "Agencement Sur Mesure",
        'icon' => "📐",
        'desc' => "Conception 3D, fabrication et pose de vos bibliothèques, dressings et rangements parfaitement adaptés à vos espaces.",
        'points' => ["Optimisation des petits espaces", "Large choix d'essences de bois", "Conception personnalisée unique"]
    ],
    [
        'titre' => "Menuiserie Extérieure",
        'icon' => "🏡",
        'desc' => "Améliorez l'esthétique et l'isolation de votre maison avec la pose de fenêtres, portes d'entrée, volets et terrasses en bois.",
        'points' => ["Produits certifiés et isolants", "Portes, fenêtres, terrasses", "Rénovation thermique"]
    ],
    [
        'titre' => "Restauration & Entretien",
        'icon' => "🛠️",
        'desc' => "Redonnez vie à vos anciens parquets, escaliers ou meubles en bois massif grâce à des techniques traditionnelles.",
        'points' => ["Ponçage et vitrification", "Techniques d'ébénisterie classiques", "Revalorisation du patrimoine"]
    ],
]);

define('FAQ_ACCUEIL', [
    [
        'question' => "Quelle est la différence entre un menuisier et un ébéniste ?",
        'reponse' => "Généralement, le menuisier s'occupe de l'agencement (portes, placards, escaliers, parquets, fenêtres), souvent avec des bois massifs ou des panneaux dérivés (MDF, mélaminé). L'ébéniste, en revanche, se concentre sur la création ou la restauration de meubles de valeur, en utilisant des placages de bois précieux et de la marqueterie."
    ],
    [
        'question' => "Pourquoi faire faire un dressing sur mesure plutôt que l'acheter en kit ?",
        'reponse' => "Un dressing sur mesure épouse parfaitement votre pièce (y compris sous rampants ou sous escaliers). Il optimise le moindre centimètre carré du sol au plafond, s'adapte à vos contraintes (murs non droits), offre une bien meilleure solidité et vous permet de choisir la couleur et les finitions exactes (tiroirs freinés, éclairage intégré)."
    ],
    [
        'question' => "Quelles essences de bois sont recommandées pour une terrasse extérieure ?",
        'reponse' => "Pour l'extérieur, il faut des bois de classe 4 ou 5 (résistants à l'humidité et aux champignons). On utilise souvent des bois exotiques (Ipé, Cumaru, Teck) très durables, ou des bois européens traités autoclave (Pin) ou naturellement résistants (Douglas, Châtaignier, Robinier). Le bois composite est aussi une excellente alternative sans échardes."
    ],
    [
        'question' => "Combien coûte un meuble sur mesure ?",
        'reponse' => "Le prix dépend des dimensions, de l'aménagement interne (nombre de tiroirs, quincaillerie), et surtout des matériaux : le mélaminé sera plus économique que le placage bois, lui-même moins cher que le bois massif. Seul un devis précis de l'artisan, après prise de cotes, peut vous donner le tarif de votre projet."
    ],
    [
        'question' => "Restaurez-vous les anciens parquets ?",
        'reponse' => "Oui, la rénovation d'un parquet massif ancien est l'une des prestations de la menuiserie. Cela passe généralement par le remplacement des lames abîmées, un ponçage complet (dégrossissage et finition) et l'application d'un traitement protecteur : vitrification (vernis), huilage ou cirage au choix."
    ],
    [
        'question' => "Pouvez-vous installer des fenêtres en respectant les normes énergétiques ?",
        'reponse' => "Absolument. Les menuisiers partenaires proposent des fenêtres en bois, alu ou PVC équipées de double ou triple vitrage. S'ils sont certifiés RGE (Reconnu Garant de l'Environnement), leur intervention peut vous donner droit à des aides financières pour la rénovation thermique."
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
    ['titre' => 'Réseau National', 'desc' => 'Des milliers de professionnels référencés dans toute la France.', 'icon' => "🗺️"],
    ['titre' => 'Partenaires Expérimentés', 'desc' => 'Trouvez le bon interlocuteur pour la réussite de votre projet', 'icon' => "✅"],
    ['titre' => 'Mise en Relation Rapide', 'desc' => 'Obtenez gratuitement des devis adaptés à vos besoins.', 'icon' => "💰"],
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
