<?php
/* Smarty version 3.1.36, created on 2020-11-08 00:02:55
  from '/laravel/Views/updatepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa735af7ba454_83037113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be0f5d5ab4ed8959f641b2e0906de847e2a701a8' => 
    array (
      0 => '/laravel/Views/updatepage.tpl',
      1 => 1604793772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa735af7ba454_83037113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13824913435fa735af7b4092_37926949', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_13824913435fa735af7b4092_37926949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13824913435fa735af7b4092_37926949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <form action="/post/update/<?php echo $_smarty_tpl->tpl_vars['post']->value->getId();?>
" method="POST">
        <div class="card">
            <div class='card-header'>
                <label for="exampleFormControlTextarea1"><?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
</label>
                <input class="form-control" type="text" name="title" placeholder="The title for your post">


            </div>
            <div class='card-body'>
                <blockquote class='blockquote mb-0'>

                    <label for="exampleFormControlTextarea1">Make changes to your current post</label>
                    <textarea class="form-control"  name="text" rows="5"><?php echo $_smarty_tpl->tpl_vars['post']->value->getText();?>
</textarea>
                    <footer class='blockquote-footer'>Added by <cite title='Source Title'><?php echo $_smarty_tpl->tpl_vars['post']->value->getAuthorEmail();?>
</cite></footer>
                </blockquote>
            </div>
            <input type="submit" class="btn btn-success" value="Update">



        </div>
        </form>



<?php
}
}
/* {/block 'body'} */
}
