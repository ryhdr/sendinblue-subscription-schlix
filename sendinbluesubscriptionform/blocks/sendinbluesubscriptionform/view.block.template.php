<?php
/**
 * sendinblue subscription form - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
 * 
 * 
 * 
 * @copyright 2019 Roy Hadrianoro
 *
 * @license MIT
 *
 * @package sendinbluesubscriptionform
 * @version 1.0
 * @author  Roy Hadrianoro <roy.hadrianoro@schlix.com>
 * @link    https://www.schlix.com
 */
if (!defined('SCHLIX_VERSION')) die('No Access');

global $HTMLHeader;
$HTMLHeader->JAVASCRIPT_SCHLIX_UI();
$HTMLHeader->JAVASCRIPT_SCHLIX_CMS();
$HTMLHeader->Javascript($this->getURLofScript('sendinbluesubscriptionform.js'))

?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3><?= $block_title ? ___h($block_title) : ___('Newsletter') ?></h3>
    </div>
    <div class="panel-body">
        <x-ui:form-simple-ajax method="post" data-action="<?= $app->createFriendlyURL("action=create"); ?>" data-output="sendinbluesubscriptionform_output"  enctype="multipart/form-data">
            <x-ui:csrf />
            <x-ui:hidden id="<?= ___h($this->block_name) . '_list_ids' ?>" name="sendinblue_list_ids" value="<?= ___h($this->config['str_list_ids']) ?>" />
            <x-ui:input-group>
                <x-ui:textbox type="email" placeholder="<?= ___('Enter email'); ?>" name="sendinblue_email" id="<?= ___h($this->block_name) . '_email' ?>" value="<?= ___h(fpost_string_noquotes_notags('sendinblue_email', 255)) ?>" required="required" />
                <x-ui:button-info  type="submit" name="submit" data-form-submit="1" value="Submit">
                    <i class="fa fa-arrow-right"></i>
                </x-ui:button-info>
            </x-ui:input-group>
        </x-ui:form-simple-ajax>
        <div id="sendinbluesubscriptionform_output"></div>
    </div>
</div>
