<?php
/* Smarty version 3.1.32, created on 2018-09-20 18:29:46
  from 'D:\wamp64\www\presta\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba3cafac70a64_97919386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4e7eb1d011946bec4ec93e215b9f63796a5b784' => 
    array (
      0 => 'D:\\wamp64\\www\\presta\\themes\\classic\\templates\\index.tpl',
      1 => 1537458895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba3cafac70a64_97919386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135795ba3cafac61012_04634284', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_81685ba3cafac631f2_06564859 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_155265ba3cafac681e9_08517715 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_302095ba3cafac661c5_54429083 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155265ba3cafac681e9_08517715', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_135795ba3cafac61012_04634284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_135795ba3cafac61012_04634284',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_81685ba3cafac631f2_06564859',
  ),
  'page_content' => 
  array (
    0 => 'Block_302095ba3cafac661c5_54429083',
  ),
  'hook_home' => 
  array (
    0 => 'Block_155265ba3cafac681e9_08517715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81685ba3cafac631f2_06564859', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_302095ba3cafac661c5_54429083', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
