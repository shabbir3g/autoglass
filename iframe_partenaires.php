
    <?php $gallery_link = get_field('gallery_link','options'); ?>
      <a href="<?php echo $gallery_link['url']; ?>" target="_top">
         <div class="fitted">
            <div>
               <ul class="slider  vehicules">
			 <?php $footer_gallery = get_field('footer_gallery','options'); 
				if($footer_gallery): 
				foreach($footer_gallery as $foogal): ?>
                 <li><img src="<?php  echo $foogal['url']; ?>" alt="<?php echo $foogal['title']; ?>" height="30"/></li>
				 <?php endforeach; endif; ?>
               </ul>
            </div>
         </div>
      </a>