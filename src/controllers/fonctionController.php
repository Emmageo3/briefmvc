<?php
require '../models/Fonction.php';
use Brief\models\Fonction;
$fonction = new Fonction();
var_dump($fonction->all_fonction());