<?php
  ipsRegistry::instance()->member()->sessionClass()->endsession();
  header('Location: /path/to/ipb/index.php?app=core&module=global&section=login&do=logout&k=' . ipsRegistry::member()->form_hash);
  exit;
?>
