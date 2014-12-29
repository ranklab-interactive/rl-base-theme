<?php
// -------------------------------  Taxonomies ---------------------------------------

// Sample Taxonomy
register_taxonomy(  
	'sample_tax',  
	array('post_type'),  
	array(  
	 'hierarchical' => true,  
	 'label' => 'Sample Taxonomy',  
	 'query_var' => true,  
	 'rewrite' => true  
	)  
); 

?>