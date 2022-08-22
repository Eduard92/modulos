	
	<?php if(!empty($pagination['links'])): ?>
	
	  <div class="pagination-container pull-right" >
		<?php echo $pagination['links'];?>
        <!--uib-pagination total-items="<?=$pagination['total_rows']?>"   ng-model="currentPage" max-size="5" class="pagination-sm" boundary-links="true" items-per-page="<?=$pagination['per_page']?>" ></uib-pagination-->
        
	  </div>
	
	<!-- Pages: </p> -->
	<?php endif; ?>