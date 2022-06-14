<?php
/* Smarty version 3.1.34-dev-7, created on 2019-01-17 11:52:26
  from '/var/www/html/doxbin.org/smarty/templates/default/upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5c40ceeabd6083_87689350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed0be6ec092005d0b0690fb5cfc6ccb983abcf2d' => 
    array (
      0 => '/var/www/html/doxbin.org/smarty/templates/default/upload.tpl',
      1 => 1547744302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c40ceeabd6083_87689350 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="wrapper">
        <div class="table">
                <a href="upload.html#" class="show-sidebar show"><i class="fa fa-arrow-right"></i></a>
    
    <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?" async defer><?php echo '</script'; ?>
>

    <form action="upload.html" method="POST" class="editor-form">
        <input type="hidden" name="_token" value="AQ594fnXzpcKwaCs6DfUxoCaqkfCjKTfWy0SD76b">

<div class="sidebar">
        <a href="home/">
<pre>
  ____            _     _       
 |  _ \  _____  _| |__ (_)_ __  
 | | | |/ _ \ \/ / '_ \| | '_ \ 
 | |_| | (_) >  <| |_) | | | | |
 |____/ \___/_/\_\_.__/|_|_| |_|
                                
</pre>
</a>
        
        <div class="options">
          <p>Title: <?php echo $_smarty_tpl->tpl_vars['dox']->value['title'];?>
</p>
          <p>Created: <?php echo $_smarty_tpl->tpl_vars['dox']->value['date'];?>
</p>
          <p>Views: <?php echo $_smarty_tpl->tpl_vars['dox']->value['views'];?>
</p>
        </div>
        <div class="options">
            <ul>
                <li><a href="add/" class="button new">New (N)</a></li>
                <li><a target="_blank" href="upload/<?php echo $_smarty_tpl->tpl_vars['dox']->value['id'];?>
/raw" class="button raw">Raw (R)</a></li>
            </ul>
        </div>
        <p>Please note that all posted information is publicly available and most follow our <a href="tos/" style="text-decoration: underline;">TOS.</a></p>
    </div>

        <div class="editor-container">
    <p name="pasteContent" class="editor mousetrap"><pre class="predox"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dox']->value['dox'], ENT_QUOTES, 'UTF-8', true);?>
</pre></p>
</div>
    </form>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="legacy/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="legacy/jquery-ui-1.10.3.custom.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="legacy/mousetrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="legacy/google-code-prettify/prettify.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="legacy/tabby.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="legacy/zclip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="legacy/toastr/toastr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="legacy/bin.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
