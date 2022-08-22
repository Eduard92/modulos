<h2 class="section-header">
    <?php echo $module_details['name'] ?>
                                        
                                        
                                        

</h2>
<small>
				<?php if ( $this->uri->segment(2) ) { echo '<span class="">&nbsp; | &nbsp;</span>'; } ?>
				<?php echo $module_details['description'] ? $module_details['description'] : '' ?>
				<?php if ( $this->uri->segment(2) ) { echo '<span class="">&nbsp; | &nbsp;</span>'; } ?>
				<?php if($module_details['slug']): ?>
				<?php echo anchor('admin/help/'.$module_details['slug'], lang('help_label'), array('title' => $module_details['name'].'&nbsp;'.lang('help_label'), 'class' => 'modal')); ?>
				<?php endif; ?>
</small>

<?php file_partial('shortcuts') ?>