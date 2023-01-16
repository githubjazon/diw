
<!-- 1. Mois de l'année non bissextile ________________FINI___________________-->

<!-- <?php
       
        $months = array(
            "janvier" => 31,
            "février" => 28,
            "mars" => 31,
            "avril" => 30,
            "mai" => 31,
            "juin" => 30,
            "juillet" => 31,
            "août" => 31,
            "septembre" => 30,
            "octobre" => 31,
            "novembre" => 30,
            "décembre" => 31
        );
        
        asort($months);
        
        echo "<table>";
        foreach ($months as $month => $days) {
            echo "<tr>";
            echo "<td>" . $month . "</td>";
            echo "<td>" . $days . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?> -->


<!-- 2. Capitales ________________FINI___________________ -->


<!-- <?php
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);

ksort($capitales);
foreach ($capitales as $capitale => $pays) {
    echo "$capitale, $pays\n";
}


asort($capitales);
foreach ($capitales as $capitale => $pays) {
    echo "$pays, $capitale\n";
}


echo count($capitales);

foreach ($capitales as $capitale => $pays) {
    if (substr($capitale, 0, 1) === "B") {
        unset($capitales[$capitale]);
    }
}
print_r($capitales);

?> -->


<!-- 3. Départements -->


<!-- 3.1: Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements. ________________FINI___________________-->

<!-- <?php
$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

foreach ($departements as $region => $departements) {
    echo $region . ": " . implode(", ", $departements) . "\n";
}

?> -->

<!-- 3.2:  Affichez la liste des régions suivie du nombre de départements. ________________FINI___________________ -->


<!-- <?php

$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);


foreach ($departements as $region => $departements) {
    echo $region . ": " . count($departements) . "\n";
}
?> -->