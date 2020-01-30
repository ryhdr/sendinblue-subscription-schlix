<?php
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php
    global $HTMLHeader;
    $HTMLHeader->CSS($this->getURLofScript('sendinbluesubscriptionform.config.css'));
    $HTMLHeader->Javascript($this->getURLofScript('sendinbluesubscriptionform.config.js'));
?>
<!-- {top_menu} -->
<schlix-config:data-editor data-schlix-controller="SCHLIX.CMS.sendinbluesubscriptionformAdminController" type="config">

        <x-ui:schlix-config-save-result />
        <x-ui:schlix-editor-form id="form-edit-config" method="post" data-config-action="save" action="<?= $this->createFriendlyAdminURL('action=saveconfig') ?>" autocomplete="off">

            <schlix-config:action-buttons />
            <x-ui:csrf />

            <x-ui:schlix-tab-container>
                <!-- tab -->
                <x-ui:schlix-tab id="tab_general" fonticon="far fa-file" label="<?= ___('General') ?>"> 
                    <!--content -->
                        
                        <schlix-config:app_alias />
                        <schlix-config:app_description />
                        <schlix-config:checkbox config-key='bool_disable_app' label='<?= ___('Disable application') ?>' />
                        <!--config --> 
                        <!-- <schlix-config:textbox config-key='str_meta_keywords' label='<?= ___('Meta Keywords') ?>' />
                        <schlix-config:textbox config-key='str_meta_description' label='<?=  ___('Meta Description') ?>' /> -->
                        <!-- end config -->
                        <x-ui:form-group>
                            <x-ui:label for='str_api_key'><?= ___('API Key') ?></x-ui:label>
                            <x-ui:input-group>
                                <schlix-config:textbox config-key='str_api_key' placeholder="v3 API Key" />
                                <x-ui:input-addon><a id="api_key_help" href="javascript:void(0)"><i class="fa fa-question-circle"></i></a></x-ui:input-addon>
                            </x-ui:input-group>
                        </x-ui:form-group>
                        <x-ui:form-group>
                            <x-ui:label for='str_list_ids'><?= ___('List IDs') ?></x-ui:label>
                            <x-ui:input-group>
                                <schlix-config:textbox config-key='str_list_ids' placeholder="2,4,5" />
                                <x-ui:input-addon><a id="list_ids_help" href="javascript:void(0)"><i class="fa fa-question-circle"></i></a></x-ui:input-addon>
                            </x-ui:input-group>
                        </x-ui:form-group>

                </x-ui:schlix-tab>
                <!-- tab -->
                <?= \SCHLIX\cmsHooks::output('getApplicationAdminExtraEditConfigTab', $this) ?>
                <!-- end -->
            </x-ui:schlix-tab-container>
            
        </x-ui:schlix-editor-form>
</schlix-config:data-editor>     

<x-ui:schlix-cms-common-dialog class="schlix-cms-common-dialog sendinblue-help-dialog" id="sendinblue-api-key-help-dialog"
                                data-fixedcenter="true" data-visible="false" data-constraintoviewport="true"
                                header-label="<?= ___('How to get API key') ?>" data-schlix-controller="SCHLIX.CMS.sendinbluesubscriptionformAdminController">
    <ol>
        <li>
            <p>
                Login to <a href="https://www.sendinblue.com" target="_blank" rel="nofollow noreferrer">sendinblue</a>.
            </p>
        </li>
        <li>
            <p>
                On your dashboard click on top right menu then click <strong>SMTP & API</strong>.
            </p>
            <p>
                <img src="<?= $this->getURLofScript('sendinblueapimenu.png') ?>" />
            </p>
        </li>
        <li>
            <p>
                Copy <strong>API key v3</strong> or create one if none exists.
            </p>
        </li>
    </ol>
    <hr />
    <x-ui:button-default fonticon="fa fa-check" label="<?= ___('OK') ?>" data-schlix-command="dialog-close" />
</x-ui:schlix-cms-common-dialog>

<x-ui:schlix-cms-common-dialog class="schlix-cms-common-dialog sendinblue-help-dialog" id="sendinblue-list-ids-help-dialog"
                                data-fixedcenter="true" data-visible="false" data-constraintoviewport="true"
                                header-label="<?= ___('How to get List IDs') ?>" data-schlix-controller="SCHLIX.CMS.sendinbluesubscriptionformAdminController">
    <ol>
        <li>
            <p>
                Login to <a href="https://www.sendinblue.com" target="_blank" rel="nofollow noreferrer">sendinblue</a>.
            </p>
        </li>
        <li>
            <p>
                On your dashboard go to <strong>Contacts</strong> then <strong>Lists</strong>.
            </p>
            <p>
                <img src="<?= $this->getURLofScript('sendinbluelist.png') ?>" />
            </p>
        </li>
        <li>
            <p>
                Write list IDs that you want new contacts to be added to, separated by commas.
            </p>
            <p>
                For example:
                <code>3,4</code><br />
                will add new contact to both list ID 3 and 4
            </p>
            <p>
                You can override this list on each block instance configuration.
            </p>
        </li>
    </ol>
    <hr />
    <x-ui:button-default fonticon="fa fa-check" label="<?= ___('OK') ?>" data-schlix-command="dialog-close" />
</x-ui:schlix-cms-common-dialog>
