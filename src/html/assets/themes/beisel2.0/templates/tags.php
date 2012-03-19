<div class="tags">
  <header>
    <h1>Tags</h1>
    <div class="subnav">
      <ul class="nav nav-pills">
        <li><a href="/tags/list"><i class="icon-arrow-down icon-large"></i> A-Z</a></li>
        <li><a href="/tags/list?sortBy=id,desc"><i class="icon-arrow-up icon-large"></i> Z-A</a></li>
      </ul>
    </div>
  </header>

  <?php if(empty($tags)) { ?>
    <?php $this->theme->display('partials/no-content.php'); ?>
  <?php } else { ?>
    <div class="row hero-unit tag-list">
      <?php foreach($tags as $tag) { ?>
        <span class="label label-tag tag-<?php $this->utility->safe($tag['weight']); ?>">
          <a href="<?php $this->url->photosView(sprintf('tags-%s', $this->utility->safe($tag['id'], false))); ?>"><?php $this->utility->safe($tag['id']); ?></a>
        </span>
      <?php } ?>
    </div>
  <?php } ?>
</div>