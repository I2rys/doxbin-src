<?php
/* Smarty version 3.1.34-dev-7, created on 2019-01-16 22:41:34
  from '/var/www/html/doxbin.org/smarty/templates/default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5c40158ecafd19_13822844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e701bdc52f0cf250ffe2003261233d3492a6ec7' => 
    array (
      0 => '/var/www/html/doxbin.org/smarty/templates/default/header.tpl',
      1 => 1547703693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c40158ecafd19_13822844 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<base href="/doxbin.org/" />
	<?php if ($_smarty_tpl->tpl_vars['page']->value == 'add' || $_smarty_tpl->tpl_vars['page']->value == 'upload') {?>
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/images/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<?php }?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Doxbin</title>
    
    <?php if (!$_smarty_tpl->tpl_vars['page']->value) {?><link rel="stylesheet" href="legacy/index.css"><?php }?>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	<?php if ($_smarty_tpl->tpl_vars['page']->value == 'add' || $_smarty_tpl->tpl_vars['page']->value == 'upload') {?>
	    <link rel="stylesheet" href="legacy/app.css">
	    <link rel="manifest" href="manifest.json">
	    <link href="legacy/google-code-prettify/tomorrow-night.css" rel="stylesheet">
	    <link href="legacy/toastr/toastr.min.css" rel="stylesheet">
	    <?php echo '<script'; ?>
 src="legacy/custom.modernizr.js"><?php echo '</script'; ?>
>
	<?php }?>

</head>

<body <?php if ($_smarty_tpl->tpl_vars['page']->value == 'add' || $_smarty_tpl->tpl_vars['page']->value == 'upload') {?> class="bin" onload="prettyPrint()" <?php }?>><?php }
}
