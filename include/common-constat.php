<?php
define('API_BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/api/');
define('LogOutPath', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/logout.php');
define('systemProject', 'systemProject');
define('systemModuleFunction', 'systemModuleFunction');
define('responseCode', 'responseCode');
define('message', 'message');
define('ERPFileElement', 'ERPFileElement');
define('result', 'result');
define('resultOk', '1');
define('BASE_URL',$_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
define('ADMIN_BASE_URL',$_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/img/');
?>

<script>

const BASE_URL = "<?php  echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']."/";?>";
const ADMIN_BASE_URL = "<?php  echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/assets/';?>"

</script>
