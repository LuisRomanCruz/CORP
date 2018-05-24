	<div class="header">	
      <div class="container"> 
  	     <div class="logo">
  	    
			<h1><a href=""><?php echo $site_name; ?></a></h1>
		 </div>		
		 <div class="top_right">
		   <ul>
			
			  	<?php foreach ($menu as $parent => $parent_params): ?>
			 
				
				<?php if (empty($parent_params['children'])): ?>
							
					

					<?php $active = ($current_uri==$parent_params['url'] || $ctrler==$parent); ?>			
					<li <?php if ($active) echo 'class="active"'; ?>>
						<a href='<?php echo $parent_params['url']; ?>'>
							<?php echo $parent_params['name']; ?>
						</a>
					</li>

				<?php else: ?>
				 
					<?php $parent_active = ($ctrler==$parent); ?>
					<li class='dropdown <?php if ($parent_active) echo 'active'; ?>'>
						<a data-toggle='dropdown' class='dropdown-toggle' href='#'>
							<?php echo $parent_params['name']; ?> <span class='caret'></span>
						</a>
						<ul role='menu' class='dropdown-menu'>
							<?php foreach ($parent_params['children'] as $name => $url): ?>
								<li><a href='<?php echo $url; ?>'><?php echo $name; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</li>

				<?php endif; ?>

			<?php endforeach; ?>
		   </ul>
	     </div>
		 <div class="clearfix"></div>
		</div>
	</div>