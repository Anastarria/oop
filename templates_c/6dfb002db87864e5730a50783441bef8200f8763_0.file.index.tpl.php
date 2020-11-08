<?php
/* Smarty version 3.1.36, created on 2020-11-08 10:32:27
  from '/laravel/Views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa7c93b4928e6_64094550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dfb002db87864e5730a50783441bef8200f8763' => 
    array (
      0 => '/laravel/Views/index.tpl',
      1 => 1604831543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa7c93b4928e6_64094550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6695858845fa7c93b491bf1_52388500', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_6695858845fa7c93b491bf1_52388500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6695858845fa7c93b491bf1_52388500',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div>
        <h1>Hello! This is the main page. Use options above to decide what you want to do!</h1>
    </div>

<?php
}
}
/* {/block 'body'} */
}
