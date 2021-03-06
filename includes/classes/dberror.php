<?php
/**
 * Rekå Resor (www.rekoresor.se)
 * @author    Håkan Arnoldson
 */

namespace HisingeBussAB\RekoResor\website\includes\classes;

class DBError
{

  /**
   * Writes out database error at desired level from config.php DEBUF_MODE
   *
   * @uses DEBUG_MODE
   * @param object $e standard thrown
   * @param string $class __CLASS__ of origin
   * @param string $sql SQL query that triggered the error if any
   */
  public static function showError($e, $class, $sql='NO QUERY') {
    if (DEBUG_MODE) {
      echo "<p>Databasfel från " . $class . ": " . $e->getMessage();
      echo "\n<br>SQL:" . $sql . "</p>";
    } else {
      echo "<p>Databasen svarar inte. Kontakta <a href=\"mailto:webmaster@rekoresor.se\">webmaster@rekoresor.se</a></p>\n";
    }
  }
}
