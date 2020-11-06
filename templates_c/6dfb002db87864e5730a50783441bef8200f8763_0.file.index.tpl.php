<?php
/* Smarty version 3.1.36, created on 2020-11-05 17:29:30
  from '/laravel/Views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa4367aa45390_59251383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dfb002db87864e5730a50783441bef8200f8763' => 
    array (
      0 => '/laravel/Views/index.tpl',
      1 => 1604597353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa4367aa45390_59251383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9934831505fa4367aa349f9_05489652', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_9934831505fa4367aa349f9_05489652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9934831505fa4367aa349f9_05489652',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    Current time: <?php ob_start();
echo $_smarty_tpl->tpl_vars['now']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


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
                    <td><a href="/user/delete/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
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
