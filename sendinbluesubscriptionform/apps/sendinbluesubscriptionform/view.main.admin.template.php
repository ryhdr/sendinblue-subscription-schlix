<?php
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<!-- {top_menu} -->
<x-ui:schlix-data-explorer-blank data-schlix-controller="SCHLIX.CMS.sendinbluesubscriptionformAdminController" >

    <x-ui:schlix-explorer-toolbar>
        <x-ui:schlix-explorer-toolbar-menu data-position="left">                
            <!-- {config} -->
            <x-ui:schlix-explorer-menu-command data-schlix-command="config" data-schlix-app-action="editconfig" fonticon="fas fa-cog" label="<?= ___('Configuration') ?>" />
            <!-- {end config -->
            <?= \SCHLIX\cmsHooks::output('getApplicationAdminExtraToolbarMenuItem', $this) ?>
        </x-ui:schlix-explorer-toolbar-menu>
        <!-- {help-about} -->
        <x-ui:schlix-explorer-toolbar-menu data-position="right">
            <x-ui:schlix-explorer-menu-folder fonticon="fa fa-question-circle" label="<?= ___('Help') ?>">
                <x-ui:schlix-explorer-menu-command data-schlix-command="help-about" data-schlix-app-action="help-about" fonticon="fas fas-cog" label="<?= ___('About') ?>" />
            </x-ui:schlix-explorer-menu-folder>
        </x-ui:schlix-explorer-toolbar-menu>
        <!-- {end help-about} -->

    </x-ui:schlix-explorer-toolbar>

    <div class="content">
        <?php if(!$this->app->isConfigured()): ?>
            <h3>
                Sendinblue Subscription Form is not yet configured, please fill API Key and List IDs on
                <a href="<?= $this->createFriendlyAdminURL('action=editconfig'); ?>" data-schlix-command="config" data-schlix-app-action="editconfig" class="schlix-command-button"><i class="fas fa-cog " aria-hidden="true"></i> Configuration</a>
            </h3>
        <?php else: ?>
            <h4><a href="https://www.sendinblue.com/" target="_blank" rel="noreferer nofollow">Sendinblue</a> Subcription Form configured, place the form using block or macro on appropriate location.</h4>
            <p>
                You can override List IDs on each block instance configuration.
            </p>
        <?php endif; ?>
    </div>
    <!-- End Data Viewer -->
</x-ui:schlix-data-explorer-blank>
