<?php
/* Smarty version 3.1.36, created on 2020-11-07 22:08:03
  from '/laravel/Views/showPosts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa71ac3e37ce0_47281363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de5e7bbc7619abd5ae72d35d17b9a8d9f28c0051' => 
    array (
      0 => '/laravel/Views/showPosts.tpl',
      1 => 1604786881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa71ac3e37ce0_47281363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5168783465fa71ac3e34168_19892401', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_5168783465fa71ac3e34168_19892401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_5168783465fa71ac3e34168_19892401',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <div class="card">
            <div class='card-header'>
                <?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>

            </div>
            <div class='card-body'>
                <blockquote class='blockquote mb-0'>
                    <p><?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
</p>
                    <footer class='blockquote-footer'>Added by <cite title='Source Title'><?php echo $_smarty_tpl->tpl_vars['post']->value['author_email'];?>
</cite></footer>
                </blockquote>
            </div>
            <a href="/post/terminate/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="btn btn-danger">Terminate</a>
            <a href="/post/updatePage/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="btn btn-warning">Update</a>

        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php
}
}
/* {/block 'body'} */
}