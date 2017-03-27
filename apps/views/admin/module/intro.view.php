<?php
$formLink = $this->data['baseUrl'].'module/intro/';
$data     = $this->data['record']->attributes;
?>
<div class="padding">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2><?php echo $this->trans->get( 'intro_page' )?></h2>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <form action="<?php echo $formLink?>" enctype="multipart/form-data" method="POST" role="form" class="embed">
            <div class="form-group">
              <label for="inputDetail"><?php echo $this->trans->get( 'description' )?></label>
              <textarea ui-jp="summernote" ui-options="{height:'200px'}" class="form-control has-embed" id="inputDetail" rows="4" placeholder="<?php echo $this->trans->get( 'description' )?>" name="data[content]"><?php echo $data['content'];?></textarea>
              <!-- <div id="inputDetail" ui-jp="summernote" ui-options="{height:'200px'}"></div> -->
            </div>
          <?php if( !empty($this->data['roleAccess']['intro_page']) || $this->data['isAdmin'] ){?>
          <p><?php echo $this->trans->get('publish')?></p>
          <div class="list inset box">
            <div class="list-item">
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <table class="table">
                      <td style="width:20%;vertical-align:middle;padding-left:0px;width:auto;"><?php echo $this->trans->get( 'active' )?></td>
                      <td>
                        <label class="ui-switch ui-switch-md info m-t-xs" >
                          <input type="checkbox" name="data[publish]" value=1 class="has-value"
                          <?php if ( $data['publish']=='1' ) { echo 'checked'; }?>>
                          <i></i>
                        </label>
                      </td>
                    </table>
                  </div>
                  <div class="col-sm-9"></div>
                </div>
              </div>
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
                      <input type="text" name="data[publish_start]" value="<?php echo $data['publish_start'];?>" class="form-control has-value">
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
                      <input type="text" name="data[publish_end]" value="<?php echo $data['publish_end'];?>" class="form-control has-value">
                      <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <div class="form-group">
            <button type="submit" class="btn btn-sm dark m-b"><?php echo $this->trans->get( 'save' )?></button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>