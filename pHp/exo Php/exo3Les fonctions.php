<!-- 1 : Ecrivez une fonction qui permette de générer un lien ______________FINI______________ -->


<!-- <?php

function generate_link($url, $title) {
    return "<a href='$url'>$title</a>";
  }
  

echo generate_link("https://www.reddit.com/", "Reddit Hug");
?> -->


<!-- 2 : Ecrivez une fonction qui calcul la somme des valeurs d'un tableau_______________FINI_______________ -->

<!-- <?php

function somme($tab) {
    $somme = 0;
    foreach ($tab as $val) {
        $somme += $val;
    }
    return $somme;
}

$tab = array(4, 3, 8, 2);
$resultat = somme($tab);
echo $resultat; 

?> -->

<!-- 3 : Créer une fonction qui vérifie le niveau de complexité d'un mot de passe _______________FINI_______________ -->

<!-- <?php

function complex_password($password) {
    if (strlen($password) < 8) {
        return false;
    }

    $has_lower = false;
    $has_upper = false;
    $has_digit = false;

    for ($i = 0; $i < strlen($password); $i++) {
        if (is_numeric($password[$i])) {
            $has_digit = true;
        } elseif (ctype_upper($password[$i])) {
            $has_upper = true;
        } elseif (ctype_lower($password[$i])) {
            $has_lower = true;
        }
    }

    return $has_digit && $has_upper && $has_lower;
}

$resultat = complex_password("TopSecret42");
echo $resultat; 

?> -->

