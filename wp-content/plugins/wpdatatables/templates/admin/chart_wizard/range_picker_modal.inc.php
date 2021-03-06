<!-- .add-column-modal -->
<div class="modal fade" id="wdt-range-picker" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- .modal-dialog -->
    <div class="modal-dialog modal-lg">

        <!-- .modal-content -->
        <div class="modal-content">

            <!-- .modal-header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php _e('Pick Range','wpdatatable'); ?></h4>
            </div>
            <!--/ .modal-header -->

            <!-- .modal-body -->
            <div class="modal-body">
                <div id="pick-range-table-container"></div>
            </div>
            <!--/ .modal-body -->

            <!-- .modal-footer -->
            <div class="modal-footer">
                <button class="btn bgm-gray btn-icon-text waves-effect" data-toggle="modal" data-target="#wdt-range-picker">
                    <i class="zmdi zmdi-close"></i>
                    <?php _e( 'Cancel', 'wpdatatables' ); ?>
                </button>
                <button class="btn btn-success btn-icon-text waves-effect" id="submit-pick-range">
                    <i class="zmdi zmdi-check"></i>
                    <?php _e( 'OK', 'wpdatatables' ); ?>
                </button>
            </div>
            <!--/ .modal-footer -->
        </div>
        <!--/ .modal-content -->
    </div>
    <!--/ .modal-dialog -->
</div>
<!--/ .add-column-modal -->