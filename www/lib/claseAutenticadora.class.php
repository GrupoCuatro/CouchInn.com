<?php
/*
 * UserAuthentication:
 *
 */


class UserAuthentication
{

  private $_session_namespace = "sistema_usuario"; /* Nombre de
                                                      espacio para no
                                                      ensuciar en
                                                      cualquier lugar
                                                      el super arreglo
                                                      de $_SESSION */

  private $_user_table = "usuario"; /* Nombre de la tabla de usuarios */

  private $_db;

  /* Constantes de clase para crear una conexión por defecto */
  //SERVIDOR
  const db_user = 'u541503574_grup4';
  const db_pass = 'grupo04';
  const db_name = 'u541503574_couch';
  const db_host = 'mysql.hostinger.com.ar';  
  
  
  //LOCAL
  //const db_user = 'root';
  //const db_pass = '';
  //const db_name = 'couchinn';
  //const db_host = 'localhost';

  /*
   * Debe recibir una conexión PDO válida o intentará crear una.
   */
  public function __construct($pdoConnection = NULL)
  {
    if(!$pdoConnection)
      $pdoConnection = $this->getConnection();
    $this->_db = $pdoConnection;
  }

  /*
   * Crea una conexión PDO con los datos por default definidos como
   * constantes de clase.
   */
  private function getConnection()
  {
    $dsn = 'mysql:dbname='.self::db_name.';host='.self::db_host;
    try {
      $dbh = new PDO($dsn, self::db_user, self::db_pass);
    } catch (PDOException $e) {
      die( '*** ERROR *** : No me pude conectar a la base de datos. ' . $e->getMessage() );
    }
    return $dbh;
  }
  
  /*
   * Responde si el usuario activo está autenticado en sesión.
   */
  public function isAuthenticated()
  {
    return $this->getSession('usuario_autenticado') === true;
  }
  
  private function errorLog() {
        $this->doLogout();
        $msg_error = "<div class='error'><p>*** ERROR *** : Nombre de usuario y/o contrase&ntildea inv&aacutelidos.</p></div>";
        throw new Exception($msg_error);
  }
  
  
  
  /*
   * Realiza un Login y guarda los datos en sesión.
   */
  public function doLogin($usuario,$clave)
  {
    try{
        $result = $this->checkLoginInDB($usuario,$clave);
        if(!$result) {
            $this->errorLog();                            
        }
    
        $this->setSession('usuario_autenticado',true);
        $this->setSession('nombre_usuario',$result['nombre_usuario']);
		$this->setSession('pass_usuario',$result['pass_usuario']);
        $this->setSession('id_usuario',$result['id_usuario']);
		$this->setSession('rol_usuario',$result['rol_usuario']);
		$this->setSession('nombre',$result['nombre']);
		$this->setSession('apellido',$result['apellido']);
		$this->setSession('mail',$result['mail']);
		$this->setSession('verificacion',$result['verificacion']);	
		$this->setSession('dni',$result['dni']);	
		$this->setSession('foto_usuario',$result['foto_usuario']);
		
    
        return true;
    }catch (Exception $excepcion){        
        echo $excepcion->getMessage();
        return false;   
    }
    
  }

  /*
   * Quita al usuario de sesión.
   */
  public function doLogout()
  {
    $this->destroySession();
  }

  /*
   * Verifica si el usuario está en la base de datos.
   */
  private function checkLoginInDB($usuario,$clave)
  {
    try {
      $query = 'SELECT id_usuario, nombre_usuario, pass_usuario , nombre , apellido , mail , rol_usuario, foto_usuario , verificacion , dni FROM '. $this->_user_table . ' WHERE ';
      $query .= " nombre_usuario = ? AND pass_usuario = ?";
      echo "query: ".$query;
      $sth = $this->_db->prepare($query);      
      $sth->execute(array($usuario,$clave));      
      return $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {        
      die( 'Consulta incorrecta:' . $e->getMessage() );
    }
  }
  
  private function check($key){
    $session = $_SESSION[$this->_session_namespace];
    if(isset($session[$key])) 
        return true;
    else
        throw new Exception("no logeado");    
  }  

  private function getSession($key)
  {
    try{
        if ($this->check($key)){
            $session = $_SESSION[$this->_session_namespace];
            return $session[$key];
        }                            
    }catch(Exception $excepcion){
        header( "Location: ../layout/index.php?seccion=noLog" );
        return FALSE;   
    }
  }
  private function setSession($key,$val)
  {
    return $_SESSION[$this->_session_namespace][$key] = $val;
  }
  private function destroySession()
  {
    $_SESSION[$this->_session_namespace] = null;
    unset($_SESSION[$this->_session_namespace]);
  }

}
?>