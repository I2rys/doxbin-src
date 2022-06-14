<?php
/* Smarty version 3.1.34-dev-7, created on 2019-01-16 22:39:00
  from '/var/www/html/doxbin.org/smarty/templates/default/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5c4014f42a7075_71580342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f95a2d39b687b0e170fd4e6d5ff2a3b60db457df' => 
    array (
      0 => '/var/www/html/doxbin.org/smarty/templates/default/view.tpl',
      1 => 1547703538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4014f42a7075_71580342 (Smarty_Internal_Template $_smarty_tpl) {
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
                <p style="color:red;">REMINDER: This is a test-run, expect bugs.</p>
       
                                
                <h3>Title:</h3>
                <input type="text" name="pasteTitle" maxlength="70" value="">
            </div>
            <div class="options">
                <div data-sitekey="6LeRboQUAAAAAJSbAF17jlJ829tIArknjDAi8l1K" class="g-recaptcha"></div>
                            
            </div>
            <div class="options">
                <ul>
                    <li><input type="submit" value="Save (CMD+S)" class="button"></li>
                    <li><input type="reset" value="Clear" class="button"></li>
                </ul>
            </div>
            <p>Please note that all posted information is publicly available and most follow our <a href="tos/" style="text-decoration: underline;">TOS.</a></p>
        </div>

        <div class="editor-container">
    <textarea name="pasteContent" class="editor mousetrap" wrap="off"></textarea>
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
