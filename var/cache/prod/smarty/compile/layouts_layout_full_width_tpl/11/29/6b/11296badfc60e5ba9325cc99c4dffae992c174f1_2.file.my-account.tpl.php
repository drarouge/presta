<?php
/* Smarty version 3.1.32, created on 2018-09-20 18:35:34
  from 'D:\wamp64\www\presta\themes\classic\templates\customer\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba3cc56d8e753_08186740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11296badfc60e5ba9325cc99c4dffae992c174f1' => 
    array (
      0 => 'D:\\wamp64\\www\\presta\\themes\\classic\\templates\\customer\\my-account.tpl',
      1 => 1537458895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba3cc56d8e753_08186740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92725ba3cc56d15021_92135187', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112815ba3cc56d1ee58_46264777', 'page_content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_254635ba3cc56d844f4_12278995', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_92725ba3cc56d15021_92135187 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_92725ba3cc56d15021_92135187',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'display_customer_account'} */
class Block_85665ba3cc56d780c0_07868151 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerAccount'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'display_customer_account'} */
/* {block 'page_content'} */
class Block_112815ba3cc56d1ee58_46264777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_112815ba3cc56d1ee58_46264777',
  ),
  'display_customer_account' => 
  array (
    0 => 'Block_85665ba3cc56d780c0_07868151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="row">
    <div class="links">

      <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="identity-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['identity'], ENT_QUOTES, 'UTF-8');?>
">
        <span class="link-item">
          <i class="material-icons">&#xE853;</i>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </span>
      </a>

      <?php if (count($_smarty_tpl->tpl_vars['customer']->value['addresses'])) {?>
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="addresses-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['addresses'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="link-item">
            <i class="material-icons">&#xE56A;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </span>
        </a>
      <?php } else { ?>
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="address-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['address'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="link-item">
            <i class="material-icons">&#xE567;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add first address','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </span>
        </a>
      <?php }?>

      <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="history-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="link-item">
            <i class="material-icons">&#xE916;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history and details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </span>
        </a>
      <?php }?>

      <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="order-slips-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_slip'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="link-item">
            <i class="material-icons">&#xE8B0;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </span>
        </a>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['configuration']->value['voucher_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="discounts-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['discount'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="link-item">
            <i class="material-icons">&#xE54E;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </span>
        </a>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['configuration']->value['return_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="returns-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_follow'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="link-item">
            <i class="material-icons">&#xE860;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise returns','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </span>
        </a>
      <?php }?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85665ba3cc56d780c0_07868151', 'display_customer_account', $this->tplIndex);
?>


    </div>
  </div>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'my_account_links'} */
class Block_194285ba3cc56d865b7_84861859 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="text-sm-center">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" >
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </a>
    </div>
  <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_254635ba3cc56d844f4_12278995 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_254635ba3cc56d844f4_12278995',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_194285ba3cc56d865b7_84861859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194285ba3cc56d865b7_84861859', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
