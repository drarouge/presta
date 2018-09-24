<?php
/* Smarty version 3.1.32, created on 2018-09-20 18:29:26
  from 'D:\wamp64\www\presta\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba3cae65d5348_97596049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c88856e49f060b55dbff9d628b09e35b7a883e0' => 
    array (
      0 => 'D:\\wamp64\\www\\presta\\themes\\classic\\templates\\page.tpl',
      1 => 1537458895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba3cae65d5348_97596049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102215ba3cae6587c11_01597759', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_22275ba3cae658cdf4_82762770 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_261465ba3cae658a1b4_77413019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22275ba3cae658cdf4_82762770', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_219935ba3cae65c4f08_51790896 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_170065ba3cae65c82a0_59263511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_282725ba3cae65c2554_23197354 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_219935ba3cae65c4f08_51790896', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170065ba3cae65c82a0_59263511', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_4125ba3cae65cf432_35878627 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_320155ba3cae65cd129_25314263 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4125ba3cae65cf432_35878627', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_102215ba3cae6587c11_01597759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_102215ba3cae6587c11_01597759',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_261465ba3cae658a1b4_77413019',
  ),
  'page_title' => 
  array (
    0 => 'Block_22275ba3cae658cdf4_82762770',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_282725ba3cae65c2554_23197354',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_219935ba3cae65c4f08_51790896',
  ),
  'page_content' => 
  array (
    0 => 'Block_170065ba3cae65c82a0_59263511',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_320155ba3cae65cd129_25314263',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4125ba3cae65cf432_35878627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_261465ba3cae658a1b4_77413019', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_282725ba3cae65c2554_23197354', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_320155ba3cae65cd129_25314263', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
