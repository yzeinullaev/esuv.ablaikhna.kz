<?php
/**
 * User: Miljko Milosevic
 * Date: 1/20/17
 * Time: 1:33 PM
 */
?>

<div role="tabpanel" class="tab-pane" id="custom-js-and-css">
    <div class="row">
        <div class="col-sm-8 custom-js">
            <h4 class="c-black m-b-20">
                <?php _e('Custom wpDataTables JS', 'wpdatatables'); ?>
                <i class="zmdi zmdi-help-outline" data-toggle="tooltip" data-placement="right"
                   title="<?php _e('This JS will be inserted as an inline script block on every page that has a wpDataTable.', 'wpdatatables'); ?>"></i>
            </h4>
            <div class="form-group">
                <div class="fg-line">
                    <textarea class="form-control" name="wdt-custom-js" id="wdt-custom-js" rows="10"
                              placeholder="Enter custom JS code here..."></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 custom-css">
            <h4 class="c-black m-b-20">
                <?php _e('Custom wpDataTables CSS', 'wpdatatables'); ?>
                <i class="zmdi zmdi-help-outline" data-toggle="tooltip" data-placement="right"
                   title="<?php _e('This CSS will be inserted as an inline style block on every page that has a wpDataTable.', 'wpdatatables'); ?>"></i>
            </h4>
            <div class="form-group">
                <div class="fg-line">
                    <textarea class="form-control" name="wdt-custom-css" id="wdt-custom-css" rows="10"
                              placeholder="Enter custom CSS code here..."></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 p-t-25  minified-js">
            <h4 class="c-black m-b-20">
                <?php _e('Use minified wpDataTables Javascript ', 'wpdatatables'); ?>
                <i class="zmdi zmdi-help-outline" data-toggle="tooltip" data-placement="right" title=""
                   data-original-title="Uncheck if you would like to make some changes to the main wpDataTables JS file (wpdatatables.js). Minified is inserted by default (better performance)."></i>
            </h4>
            <div class="toggle-switch" data-ts-color="blue">
                <label for="wdt-minified-js" class="ts-label">Use minified version of Javascript files</label>
                <input type="checkbox" name="wdt-minified-js" id="wdt-minified-js">
                <label for="wdt-minified-js" class="ts-helper"></label>
            </div>
        </div>
    </div>
</div>
