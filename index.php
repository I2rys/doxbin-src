<?php
if(file_exists("install.php"))
{
  die("please rename or run install.php");
}

include("Db.class.php");
include("smarty/libs/Smarty.class.php");

$smarty = new Smarty;
$smarty->setCaching(false);
$smarty->setTemplateDir("smarty/templates/default/");

if($_GET['page']) $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);

switch($page)
{
  default:
    $db = new Db();
    $doxList =$db->getDoxList();
    $smarty->assign("doxCount", count($doxList));
    $smarty->assign("doxList", $doxList);

    $smarty->display("header.tpl");
    $smarty->display("nav.tpl");
    $smarty->display("index.tpl");
    $smarty->display("footer.tpl");
  break;

  case "add":
    $config = json_decode(file_get_contents("config"));

    if($config->cap_site_key != "" && $config->cap_sec_key != "")
    {
        $smarty->assign("cap_sec_key", $config->cap_sec_key);
        $smarty->assign("cap_site_key", $config->cap_site_key);
    }

    $smarty->assign("page", "add");

    $smarty->display("header.tpl");
    $smarty->display("nav.tpl");
    $smarty->display("add.tpl");
    $smarty->display("footer.tpl");
  break;

  case "tos":
    $smarty->display("header.tpl");
    $smarty->display("nav.tpl");
    $smarty->display("tos.tpl");
    $smarty->display("footer.tpl");
  break;

  case "upload":
    $id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);

    $db = new Db();
    $dox = $db->getDox($id);
    $db->addView($id);

    $smarty->assign("dox", $dox);
    $smarty->assign("page", "upload");
    $smarty->display("header.tpl");
    $smarty->display("nav.tpl");
    $smarty->display("upload.tpl");
    $smarty->display("footer.tpl");
  break;

  case "raw":
    $id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);

    $db = new Db();
    $dox = $db->getDox($id);
    $db->addView($id);
    $smarty->assign("dox", $dox);
    $smarty->display("raw.tpl");
  break;

  case "submit":
    //check captcha
    $config = json_decode(file_get_contents("config"));
    $cap_url = "https://www.google.com/recaptcha/api/siteverify";

    $fields = array(
    	'secret' => $config->cap_sec_key,
    	'response' => $_POST['g-recaptcha-response'],
    	'remoteip' => $_SERVER['REMOTE_ADDR']
    );

    //url-ify the data for the POST
    foreach($fields as $key=>$value)
    {
        $fields_string .= $key.'='.$value.'&';
    }
    rtrim($fields_string, '&');

    //open connection
    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $cap_url);
    curl_setopt($ch,CURLOPT_POST, count($fields));
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

    //execute post
    $res = curl_exec($ch);

    //close connection
    curl_close($ch);

    if($res)
    {
      $db = new Db();
      $title = filter_var($_POST['doxTitle'], FILTER_SANITIZE_STRING);
      $dox = $_POST['dox'];
      $db->addDox($title, $dox, $_SERVER['REMOTE_ADDR']);
    }
  break;
}
?>