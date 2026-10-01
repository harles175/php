<?php

$nombreServeurs = 6;
$coutMensuelUnitaire = 24.90;
$nombreMois = 12;

$CoûtMensuelParc = ($nombreServeurs * $coutMensuelUnitaire) / $nombreMois;
$CoûtAnnuelParc = $coutMensuelUnitaire * $nombreMois;
$CoûtMensuelServeur_1 = $coutMensuelUnitaire / $nombreMois;

echo "Nombre de serveurs : " . $nombreServeurs;
echo "Coût mensuel du parc : " . $CoûtMensuelParc;
echo "Coût annuel du parc : " . $CoûtAnnuelParc;
echo "Coût moyen par serveur : " . $CoûtMensuelServeur_1;