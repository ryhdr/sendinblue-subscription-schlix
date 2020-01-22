<?php
/**
 * sendinblue subscription form - Config
 * 
 * 
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<x-ui:form-group>
    <schlix-config:textbox config-key='str_block_title' label='<?= ___('Title') ?>' class='form-control' placeholder="Newsletter" />
</x-ui:form-group>
<x-ui:form-group>
    <schlix-config:textbox config-key='str_list_ids' label='<?= ___('List IDs') ?>' class='form-control' placeholder="Leaves empty to use app configuration." />
</x-ui:form-group>
