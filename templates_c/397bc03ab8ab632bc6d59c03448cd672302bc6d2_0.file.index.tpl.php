<?php
/* Smarty version 3.1.34-dev-7, created on 2019-01-17 09:18:18
  from '/var/www/html/doxbin.org/smarty/templates/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5c40aaca14bea3_90520768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '397bc03ab8ab632bc6d59c03448cd672302bc6d2' => 
    array (
      0 => '/var/www/html/doxbin.org/smarty/templates/default/index.tpl',
      1 => 1547741896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c40aaca14bea3_90520768 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="col-md-12" style="margin-top: 10px;">
        <div class="col-md-12" style="margin-top: 100px;">
            <div align="center">
                <p>Showing <?php echo $_smarty_tpl->tpl_vars['doxCount']->value;?>
 doxe(s)</p>
            </div>
        </div>

        <div class="col-md-6 col-md-offset-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="text-center">Views</th>
                        <th class="text-center">Added</th>
                        <th class="text-center">RAW</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doxList']->value, 'dox');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dox']->value) {
?>
                      <tr class="doxentry">
                        <td><a href="upload/<?php echo $_smarty_tpl->tpl_vars['dox']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dox']->value['title'];?>
</a></td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['dox']->value['views'];?>
</td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['dox']->value['date'];?>
</td>
                        <td class="text-center"><a href="upload/<?php echo $_smarty_tpl->tpl_vars['dox']->value['id'];?>
/raw">RAW</a></td>
                      </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div><?php }
}
