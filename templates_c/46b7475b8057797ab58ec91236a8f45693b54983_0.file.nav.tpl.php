<?php
/* Smarty version 3.1.34-dev-7, created on 2019-01-16 22:57:25
  from '/var/www/html/doxbin.org/smarty/templates/default/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5c4019458677c0_66574974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46b7475b8057797ab58ec91236a8f45693b54983' => 
    array (
      0 => '/var/www/html/doxbin.org/smarty/templates/default/nav.tpl',
      1 => 1547704643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4019458677c0_66574974 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value != 'add' && $_smarty_tpl->tpl_vars['page']->value != 'upload') {?>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home/">Doxbin</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="home/">Home</a></li>
                    <li><a href="add/">Add Dox</a></li>
                    <li><a href="tos/">TOS</a></li>
                </ul>
            </div>
        </div>
    </nav>
<?php }
}
}
