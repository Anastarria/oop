<?php
/* Smarty version 3.1.36, created on 2020-11-05 18:56:06
  from '/laravel/Views/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa44ac6d32716_52226442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64139761c01f6f55b41923365186f7d7f2e528e0' => 
    array (
      0 => '/laravel/Views/register.tpl',
      1 => 1604602553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa44ac6d32716_52226442 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17203448485fa44ac6d31ff6_88627542', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_17203448485fa44ac6d31ff6_88627542 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17203448485fa44ac6d31ff6_88627542',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


     <form action="/auth/register" method="POST" class="form-group">
        <input class="form-control" type="email" name="email" placeholder="example@domain.com">
        <input class="form-control" type="password" name="password" placeholder="Your password here">
        <input type="submit" class="btn btn-success" value="Create">
    </form>
    <div>
        Already have an account? <a href="/auth/login">Login!</a>
    </div>

<?php
}
}
/* {/block 'body'} */
}
