<ul class="breadcrumbs" id="bread-wrapper">
<?php // Breadcrumb navigation
    if (is_page() && !is_front_page() || is_single() || is_category()) {
        echo '<li id="breadcrumb">';
        echo '<a href="'.get_bloginfo('url').'">Home</a>';
 		if (is_single()) {
        	echo '<li><a href="/blog/">Blog</a></li>';	
        }else{
        
        }

        if (is_page()) {
            $ancestors = get_post_ancestors($post);
 
            if ($ancestors) {
                $ancestors = array_reverse($ancestors);
 
                foreach ($ancestors as $crumb) {
                	
                    echo '<li><a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a></li>';
                    
                }
            }
        }
 
        if (is_single('blog_posts')) {
            $category = get_the_category();
            echo '<li><a href="'.get_category_link($category[0]->cat_ID).'">'.$category[0]->cat_name.'</a></li>';
        }
 
        if (is_category()) {
            $category = get_the_category();
            echo ''.$category[0]->cat_name.'';
        }
 
        // Current page
        if (is_page() || is_single()) {
            echo '<li>'.get_the_title().'</li>';
            
        }
        echo '</li>';
    } elseif (is_front_page()) {
        // Front page
        echo '<li class="breadcrumbs">';
        echo '<a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a>';
        echo 'Home Page';
        echo '</li>';
    }
?>
</ul><!-- end bread-wrapper -->