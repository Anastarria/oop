<?php
/* Smarty version 3.1.36, created on 2020-11-07 16:29:02
  from '/laravel/Views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa6cb4e5286d8_59950956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dfb002db87864e5730a50783441bef8200f8763' => 
    array (
      0 => '/laravel/Views/index.tpl',
      1 => 1604766536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa6cb4e5286d8_59950956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8152961325fa6cb4e5014b2_36509102', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_8152961325fa6cb4e5014b2_36509102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8152961325fa6cb4e5014b2_36509102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Terminate</th>
        </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                <tr>
                    <td><a href="/user/info/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['created_at'];?>
</td>
                    <td><a href="/auth/terminate/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="btn btn-danger">Terminate</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php
}
}
/* {/block 'body'} */
}
