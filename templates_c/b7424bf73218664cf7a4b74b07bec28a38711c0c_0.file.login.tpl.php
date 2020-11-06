<?php
/* Smarty version 3.1.36, created on 2020-11-05 17:40:52
  from '/laravel/Views/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa439247481b1_18124718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7424bf73218664cf7a4b74b07bec28a38711c0c' => 
    array (
      0 => '/laravel/Views/login.tpl',
      1 => 1604598044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa439247481b1_18124718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18622219125fa43924747a73_32735493', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_18622219125fa43924747a73_32735493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18622219125fa43924747a73_32735493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form action="/auth/login" method="POST" class="form-group">
        <input class="form-control" type="email" name="email" placeholder="example@domain.com">
        <input class="form-control" type="password" name="password" placeholder="Your password here">
        <input type="submit" class="btn btn-success" value="Log in">
    </form>


<?php
}
}
/* {/block 'body'} */
}
