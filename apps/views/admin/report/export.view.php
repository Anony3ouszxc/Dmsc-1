<?php $formLink = '/report/export';?>
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <small>*<?php echo $this->trans->get('title_export')?></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <form action="<?php echo $formLink?>" enctype="multipart/form-data" method="POST" role="form">
          <p><?php echo $this->trans->get('date_range')?></p>
          <div class="list inset box">
            <div class="list-item">
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                    <label><?php echo $this->trans->get( 'start_date' )?></label>
                    <div class="input-group date" ui-jp="datetimepicker" ui-options="{
                        icons: {
                          time: 'fa fa-clock-o',
                          date: 'fa fa-calendar',
                          up: 'fa fa-chevron-up',
                          down: 'fa fa-chevron-down',
                          previous: 'fa fa-chevron-left',
                          next: 'fa fa-chevron-right',
                          today: 'fa fa-screenshot',
                          clear: 'fa fa-trash',
                          close: 'fa fa-remove'
                        },
                        format: 'YYYY-MM-DD HH:mm:ss'
                      }">
                      <input type="text" name="data[export_start]" value="" class="form-control has-value" required>
                      <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                      </span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label><?php echo $this->trans->get( 'end_date' )?></label>
                    <div class="input-group date" ui-jp="datetimepicker" ui-options="{
                        icons: {
                          time: 'fa fa-clock-o',
                          date: 'fa fa-calendar',
                          up: 'fa fa-chevron-up',
                          down: 'fa fa-chevron-down',
                          previous: 'fa fa-chevron-left',
                          next: 'fa fa-chevron-right',
                          today: 'fa fa-screenshot',
                          clear: 'fa fa-trash',
                          close: 'fa fa-remove'
                        },
                        format: 'YYYY-MM-DD HH:mm:ss'
                      }">
                      <input type="text" name="data[export_end]" value="" class="form-control has-value" required>
                      <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-sm dark m-b"><?php echo $this->trans->get( 'export' )?></button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>