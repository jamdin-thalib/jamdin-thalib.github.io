<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1><?= lang('Auth.index_heading'); ?> <span class="table-project-n"><?= lang('Auth.index_subheading'); ?></span></h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <?= anchor('auth/create_user', lang('Auth.index_create_user_link'), 'class="btn btn-primary btn-raised btn-flat toggle-modal"') ?> | <?= anchor('auth/create_group', lang('Auth.index_create_group_link'), 'class="btn btn-primary btn-raised btn-flat toggle-modal"') ?> | <button  class="btn btn-custon-rounded-three btn-danger" id="remove" disabled ><i class="fa fa-times adminpro-danger-error" aria-hidden="true"></i> Danger</button>
                            </div>
                            <table id="table" data-toggle="table" data-side-pagination="server" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar" data-ajax="ajaxRequest">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id" data-visible="false">ID</th>
                                        <th data-field="no">No</th>
                                        <th data-field="nama"><?= lang('Auth.index_name_th'); ?></th>
                                        <th data-field="username">username</th>
                                        <th data-field="email"><?= lang('Auth.index_email_th'); ?></th>
                                        <th data-field="group"><?= lang('Auth.index_groups_th'); ?></th>
                                        <th data-field="active"><?= lang('Auth.index_status_th'); ?></th>
                                        <th data-field="edit"><?= lang('Auth.index_action_th'); ?></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
