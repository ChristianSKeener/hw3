<?php
require_once("util-db.php");
require_once("model-fighter.php");

$pageTitle = "Fighter";
include "view-header.php";
$fighter = selectfighter();
include "view-fighter.php";
      include "view-footer.php";
?>