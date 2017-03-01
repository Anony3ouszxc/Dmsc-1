<?php
use Apps\Models\User;
use Apps\Models\Category;
$baseUrl = $this->data['baseUrl'];
?>
<div class="padding">
  <div class="box">
    <!-- <div class="box-header">
      <h2><?php echo $this->trans->get('title_all_post')?></h2>
    </div> -->
    <!-- start tool table -->
    <form class="navbar-form form-inline pull-right pull-none-sm navbar-item v-m" method="GET" action="<?php echo $baseUrl?>/post/all-post" id="form-search" role="search">
      <div class="form-group l-h m-a-0">
        <div class="input-group input-group-sm">
          <input type="text" class="form-control p-x b-a rounded" name="keyword" value="<?php echo $this->keyword?>" placeholder="<?php echo $this->trans->get('keyword')?>">
          <span class="input-group-btn">
            <button type="submit" class="btn white b-a rounded no-shadow"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </div>
    </form>
    <div class="navbar-item">
      <a class="btn btn-sm btn-outline b-black text-black margin-left" href="<?php echo $baseUrl.'post/new-post'?>"><?php echo $this->trans->get('add_new')?></a>
    </div>
    <!-- end tool table -->
    <div class="table-responsive">
      <table class="table table-striped b-t b-b">
        <thead>
          <tr>
            <th></th>
            <th style="width:2%"><?php echo $this->trans->get('id')?></th>
            <th style="width:35%"><?php echo $this->trans->get('title')?></th>
            <!--<th style="width:10%"><?php echo $this->trans->get('author')?></th>-->
            <th style="width:20%"><?php echo $this->trans->get('category')?></th>
            <th style="width:5%"><?php echo $this->trans->get('priority')?></th>
            <th style="width:7%"><?php echo $this->trans->get('active')?></th>
            <th style="width:10%"><?php echo $this->trans->get('last_publish')?></th>
            <th style="width:10%"><?php echo $this->trans->get('latest_modify')?></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach( $this->data['postList'] as $post ){
          $user     = ($post->user_id > 0)
                      ? User::findBySql( "select * from user where user_id=" . $post->user_id )
                      : (object) ['firstname' => ''];
          $status   = $post->publish == 'on' ? 'active' : '';
          $category = ($post->category_id) ? Category::find($post->category_id) : (object)[ 'name_th' => '-', 'name_th' => '-'];
          ?>
          <tr data-id="<?php echo $post->post_id?>">
            <td class="no-wrap">
              <button class="btn btn-sm dark" id="btn-edit" data-target="<?php echo $baseUrl.'post/edit-post/'.$post->post_id?>"><?php echo $this->trans->get('btn_edit')?></button>
              <button class="btn btn-sm danger" id="btn-delete"><?php echo $this->trans->get('btn_delete')?></button>
            </td>
            <td><?php echo $post->post_id?></td>
            <td><?php echo $post->title?></td>
           <!-- <td><?php echo $user->firstname?></td>-->
            <td><?php echo ($this->data['lang'] == 'th' ? $category->name_th : $category->name_en )?></td>
            <td align="center"><?php echo $post->priority?></td>
            <td align="center">
              <a href="" class="active-status <?php echo $status?>" ui-toggle-class="" ui-class=""><i class="fa fa-check text-success none"></i><i class="fa fa-times text-danger inline"></i></a>
            </td>
            <td><?php echo $post->last_publish?></td>
            <td><?php echo $post->ts?></td>
          </tr>
          <?php }?>
        </tbody>
        <tfoot class="hide-if-no-paging">
          <tr>
            <td colspan="8" class="text-center footable-visible">
                <nav><?php echo $this->data['pagination']?></nav>
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>