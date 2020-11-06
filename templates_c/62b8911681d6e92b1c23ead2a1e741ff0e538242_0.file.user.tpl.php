<?php
/* Smarty version 3.1.36, created on 2020-11-03 07:15:11
  from '/laravel/Views/user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa1037f23ea77_48122984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62b8911681d6e92b1c23ead2a1e741ff0e538242' => 
    array (
      0 => '/laravel/Views/user.tpl',
      1 => 1604387234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa1037f23ea77_48122984 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15334530105fa1037f22b230_01390480', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_15334530105fa1037f22b230_01390480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15334530105fa1037f22b230_01390480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    ID: <?php echo $_smarty_tpl->tpl_vars['user']->value->getID();?>
<br>
    EMAIL: <?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
<br>
    CREATED_AT: <?php echo $_smarty_tpl->tpl_vars['user']->value->getCreatedAt();?>
<br>

<?php
}
}
/* {/block 'body'} */
}
