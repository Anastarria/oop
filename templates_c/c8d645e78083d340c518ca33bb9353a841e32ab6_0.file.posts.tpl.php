<?php
/* Smarty version 3.1.36, created on 2020-11-07 17:17:50
  from '/laravel/Views/posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa6d6be983680_47986419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8d645e78083d340c518ca33bb9353a841e32ab6' => 
    array (
      0 => '/laravel/Views/posts.tpl',
      1 => 1604769464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa6d6be983680_47986419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19448506175fa6d6be982f20_53215085', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_19448506175fa6d6be982f20_53215085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19448506175fa6d6be982f20_53215085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form action="/post/make" method="POST" class="form-group">
        <label for="exampleFormControlTextarea1">Title</label>
        <input class="form-control" type="text" name="title" placeholder="The title for your post">
        <label for="exampleFormControlTextarea1">Add your post here</label>
        <textarea class="form-control"  name="text" rows="5"></textarea>
        <input type="submit" class="btn btn-success" value="Publish">
    </form>

<?php
}
}
/* {/block 'body'} */
}
