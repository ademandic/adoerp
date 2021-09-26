<?php
if($login):
?>
</div>
</div>
</div>
<div class="sidearea">
    <div class="sidebar left" style="min-height: 100vh;">
      <div class="sidebar-wrapper scrollbar scrollbar-macosx">
          <nav class="navbar navbar-expand-lg navbar-dark border-bottom border-dark">
              <a class="navbar-brand" href="#"><?=strtoupper($sitename)?></a>
          </nav>
            <div class="user-panel">
              <div class="pull-left image">
                <img src="http://via.placeholder.com/160x160" class="rounded-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p><?=$loginInfo->name . " " . $loginInfo->surname?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
            <ul class="list-sidebar bg-default">
              <?php 
              foreach($menubar as $key => $value): ?>
              <li>
                <a <?php if(!$value['childs']): ?>href=""<?php else: ?> href="javascript:void(0)" data-toggle="collapse" data-target="#<?=strtolower($value['menuname'])?>" <?php endif; ?> class="collapsed <?php if($page_url==$value['menuurl']): ?> active <?php endif; ?>" > <i class="<?=$value['menucss']?>"></i> <span class="nav-label"> <?=$value['menuname']?> </span> <?php if(is_array($value['childs'])): ?><span class="fa fa-chevron-left pull-right"></span><?php endif; ?></a>
                <?php if(is_array($value['childs'])): ?>
                <ul class="sub-menu collapsed" id="<?=strtolower($value['menuname'])?>">
                  <?php foreach($value['childs'] as $key2 => $value2): ?>
                  <li><a onclick="routeUrl('<?=URL_PREFIX.$value2['menuurl']?>');" href="javascript:void(0);"><?=$value2['menuname']?></a></li>
                  <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </li>
            <?php endforeach; ?>
            </ul>
          </div>
    </div>
  </div>
<?php
endif;
?>

</body>
</html>