<!-- 1 : Trouvez le numéro de semaine de la date suivante : 14/07/2019 -->

<!-- <?php
$date = new DateTime('2019/07/14');  //La date doit etre au format AAAA/MM/JJ, sinon ca affiche 01
$week = $date->format("W");
echo $week;
?> -->

<!-- 2: Combien reste-t-il de jours avant la fin de votre formation ? -->

<!-- <?php

$date_actuelle = new DateTime();
$date_fin_formation = new DateTime('2023/02/03');         //La date doit etre au format AAAA/MM/JJ, sinon ca affiche 44 !    
$interval = $date_actuelle->diff($date_fin_formation);

echo "Il reste " . $interval->format('%a') . " jours avant le 03/02/2023.";

?> -->

<!-- 3: Comment déterminer si une année est bissextile ?  -->

<!-- <?php

function estBissextile($annee) {
  
    if (($annee % 4 == 0) && ($annee % 100 != 0) || ($annee % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}


$annee = 2023;
if (estBissextile($annee)) {
    echo "$annee est bissextile.";
} else {
    echo "$annee n'est pas bissextile.";
}

?> -->

<!-- 4: Montrez que la date du 32/17/2019 est erronée -->

<!-- <?php

$date = '32/17/2019';
$time = strtotime($date);

if ($time === false) {
    echo "La date $date est erronée.";
} else {
    echo "La date $date est valide.";
}

?> -->

<!-- 5: Affichez l'heure courante sous cette forme : 11h25 -->

<!-- <?php

date_default_timezone_set('Europe/Paris');
$heure_actuelle = new DateTime();
$heure_o_bon_format = $heure_actuelle->format('H\hi');

echo "Il est $heure_o_bon_format.";

?> -->

<!-- 6: Ajoutez 1 mois à la date courante -->

<!-- <?php

$date1 = new DateTime();
$date2 = clone $date1;
$date2->add(new DateInterval('P1M'));


echo "Date actuelle : " . $date1->format('d/m/Y') . " et" . "\r\n";
echo "Date avec 1 mois de plus : " . $date2->format('d/m/Y');

?> -->

<!-- 7: Que s'est-il passé le 1000200000 ? -->

<!-- <?php

$timestamp = 1000200000;
$date = date('d/m/Y', $timestamp);

echo "Le : $date" . " il y a eu un attentat...";

?> -->