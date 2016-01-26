<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze UI Admin table Examples</title>
  <meta name="description" content="这是一个 table 页面">
  <meta name="keywords" content="table">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <base href="<?php echo site_url();?>">


  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>

<?php include 'admin-header.php'; ?>

<div class="am-cf admin-main">
  <?php include 'admin-sidebar.php'; ?>

  <!-- content start -->
  <div class="admin-content">
    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-6">
        <div class="am-btn-toolbar">
          <div class="am-btn-group am-btn-group-xs">
            <button id="textadd" type="button" class=" addtext am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
            <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
          </div>
        </div>
      </div>
    </div>
    <div class="am-g">
      <div class="am-u-sm-12">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" /></th>
                <th class="table-id">作者</th>
                <th class="table-title">标题</th>
                <th class="table-type">内容</th>
                <th class="table-set">时间</th>
              </tr>
          </thead>
          <tbody>
          <?php
            foreach($messages as $message){
          ?>  
              <tr class ="messages">
                <td><input type="checkbox" /></td>
                <td><?php echo $message -> author; ?></td>
                <td><a href="#"><?php echo $message -> title; ?></a></td>
                <td><?php echo $message -> content; ?></td>
                <td><?php echo $message -> add_time; ?></td>
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <button  data-id="<?php echo $message -> blog_id; ?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                      <button  type="button" data-id="<?php echo $message -> blog_id; ?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                  </div>
                </td>
              </tr>
            <?php
            }
          ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
  <!-- content end -->
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
<script>

 $(function(){
   $('.am-text-danger').on('click', function(){
     var blogId =  $(this).data('id');
     if(confirm('确定是否删除记录，不可恢复!?')){
       location.href = 'admin/delete_text?blog_id='+blogId;
     }
   });
   $('.am-text-secondary').on('click', function(){
     var blogId =  $(this).data('id');
     if(confirm){
       location.href = 'admin/admin_edit?blog_id='+blogId;
     }
   });
   $('.addtext').on('click', function(){
     if(confirm){
       location.href = 'admin/text_add';
     }
   });

 });
</script>
</body>
</html>
