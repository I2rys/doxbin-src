<?php
/* Smarty version 3.1.34-dev-7, created on 2019-01-17 15:14:31
  from '/var/www/html/doxbin.org/smarty/templates/default/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5c40fe47a9b378_92295679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c206a33b9b7387ad56d075ccc4c695e47664a8a' => 
    array (
      0 => '/var/www/html/doxbin.org/smarty/templates/default/add.tpl',
      1 => 1547763257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c40fe47a9b378_92295679 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="wrapper">
        <div class="table">
                <a href="upload.html#" class="show-sidebar show"><i class="fa fa-arrow-right"></i></a>
    
    <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?" async defer><?php echo '</script'; ?>
>

    <form method="post" class="editor-form" id="frmSubmit">
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
                <p style="color:red;">REMINDER: This is a test-run, expect bugs.</p>
       
                                
                <h3>Title:</h3>
                <input type="text" name="doxTitle" maxlength="70" value="">
            </div>

            <?php if ($_smarty_tpl->tpl_vars['cap_site_key']->value) {?>
            <div class="options">
                <div data-sitekey="<?php echo $_smarty_tpl->tpl_vars['cap_site_key']->value;?>
" class="g-recaptcha"></div>
            </div>
            <?php }?>

            <div class="options">
                <ul>
                    <li><input type="button" id="submitBtn" value="Save (CMD+S)" class="button"></li>
                    <li><input type="reset" value="Clear" class="button"></li>
                </ul>
            </div>
            <p>Please note that all posted information is publicly available and most follow our <a href="tos/" style="text-decoration: underline;">TOS.</a></p>
        </div>

        <div class="editor-container">
    <textarea name="dox" class="editor mousetrap" wrap="off"></textarea>
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
