<?php
/*
Template Name: Formatting
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
<div class="row">
<div class="large-12 columns">
<div id="content">
<div id="left-content-block">
<a name="nav"></a>
<h2 data-magellan-destination="nav">Sticky Nav</h2>
<p>This fixed-position navigation helps users keep track of where they are on a page without scrolling, after scrolling past the menu.</p>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Rendered</small></h3>
		<div data-magellan-expedition="fixed">
		  <dl class="sub-nav">
		    <dd data-magellan-arrival="nav"><a href="#nav">Navigation</a></dd>
		    <dd data-magellan-arrival="hds"><a href="#hds">Type</a></dd>
		    <dd data-magellan-arrival="btns"><a href="#btns">Buttons</a></dd>
		    <dd data-magellan-arrival="structure"><a href="#structure">Structure</a></dd>
		    <dd data-magellan-arrival="content"><a href="#content">Content</a></dd>
		    <dd data-magellan-arrival="media"><a href="#media">Media</a></dd>
		    <dd data-magellan-arrival="calls"><a href="#calls">Callout & Prompts</a></dd>
		  </dl>
		</div>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<div data-magellan-expedition="fixed">
  <dl class="sub-nav">
    <dd data-magellan-arrival="build"><a href="#build">Build with HTML</a></dd>
    <dd data-magellan-arrival="js"><a href="#js">Arrival 2</a></dd>
  </dl>
</div>
<h3 data-magellan-destination="arrival">Arrival</h3>
<h3 data-magellan-destination="destination">Destination</h3>
	</textarea></code>
	</div>
</div>	
<h2>Sub-Nav</h2>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Rendered</small></h3>
		<dl class="sub-nav">
		  <dt>Filter:</dt>
		  <dd class="active"><a href="#">All</a></dd>
		  <dd><a rel="nofollow" href="#">Active</a></dd>
		  <dd><a rel="nofollow" href="#">Pending</a></dd>
		  <dd><a rel="nofollow" href="#">Suspended</a></dd>
		</dl>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<dl class="sub-nav">
  <dt>Filter:</dt>
  <dd class="active"><a href="#">All</a></dd>
  <dd><a rel="nofollow" href="#">Active</a></dd>
  <dd><a rel="nofollow" href="#">Pending</a></dd>
  <dd><a rel="nofollow" href="#">Suspended</a></dd>
</dl>
	</textarea></code>
	</div>
</div>	

<h2>Side Nav</h2>
	<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<ul class="side-nav">
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li>
				<li><a href="#">Link 4</a></li>
			</ul>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<ul class="side-nav">
  <li><a href="#">Link 1</a></li>
  <li><a href="#">Link 2</a></li>
  <li><a href="#">Link 3</a></li>
  <li><a href="#">Link 4</a></li>
</ul>
			</textarea></code>
		</div>
	</div>
<h2>Off Canvas Nav</h2>
<h3>Basic</h3>
	<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<div class="off-canvas-wrap">
			  <div class="inner-wrap">

			    <a class="left-off-canvas-toggle" >Menu</a> 

			    <!-- Off Canvas Menu -->
			    <aside class="left-off-canvas-menu">
			        <!-- whatever you want goes here -->
			        <ul>
			          <li><a href="#">Item 1</a></li>
			        ...
			        </ul>
			    </aside>

			    <!-- main content goes here -->
			    <p>Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire. Though the empire appears stable and powerful, it is slowly decaying in ways that parallel the decline of the Western Roman Empire. Hari Seldon, a mathematician and psychologist, has developed psychohistory, a new field of science and psychology that equates all possibilities in large societies to mathematics, allowing for the prediction of future events.</p>

			  <!-- close the off-canvas menu -->
			  <a class="exit-off-canvas"></a>

			  </div>
			</div>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="off-canvas-wrap">
  <div class="inner-wrap">

    <a class="left-off-canvas-toggle" >Menu</a> 

    <!-- Off Canvas Menu -->
    <aside class="left-off-canvas-menu">
        <!-- whatever you want goes here -->
        <ul>
          <li><a href="#">Item 1</a></li>
        ...
        </ul>
    </aside>

    <!-- main content goes here -->
    <p>Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire. Though the empire appears stable and powerful, it is slowly decaying in ways that parallel the decline of the Western Roman Empire. Hari Seldon, a mathematician and psychologist, has developed psychohistory, a new field of science and psychology that equates all possibilities in large societies to mathematics, allowing for the prediction of future events.</p>

  <!-- close the off-canvas menu -->
  <a class="exit-off-canvas"></a>

  </div>
</div>
			</textarea></code>
		</div>
	</div>
<h3>Advanced</h3>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<div class="off-canvas-wrap">
			  <div class="inner-wrap">
			    <nav class="tab-bar">
			      <section class="left-small">
			        <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
			      </section>

			      <section class="middle tab-bar-section">
			        <h1 class="title">Foundation</h1>
			      </section>
			    </nav>
			    <aside class="left-off-canvas-menu">
			      <ul class="off-canvas-list">
			        <li><label>Foundation</label></li>
			        <li><a href="#">The Psychohistorians</a></li>
			        <li><a href="#">The Psychohistorians</a></li>
			        <li><a href="#">The Psychohistorians</a></li>
			      </ul>
			    </aside>
			    <section class="main-section">
			      <p>Main content goes here</p>
			      <p>Offcanvas menu to the left</p>
			      <p>Lorem Ipsum</p>				   
			    </section>
			  <a class="exit-off-canvas"></a>
			  </div>
			</div>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="off-canvas-wrap">
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">Foundation</h1>
      </section>
    </nav>
    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Foundation</label></li>
        <li><a href="#">The Psychohistorians</a></li>
        <li><a href="#">The Psychohistorians</a></li>
        <li><a href="#">The Psychohistorians</a></li>
      </ul>
    </aside>
    <section class="main-section">
      <p>Main content goes here</p>
      <p>Offcanvas menu to the left</p>
      <p>Lorem Ipsum</p>				   
    </section>
  <a class="exit-off-canvas"></a>
  </div>
</div>
			</textarea></code>
		</div>
	</div>		
<hr>		
<!-- OLD TOC
<h2>Table of Contents</h2>
<div class="toc">
<h2>Find Fast</h2>
<a href="">Link Title Here</a>
<a href="">Link Title Here</a>
<a href="">Link Title Here</a>
</div><!-- end toc -->
<!-- OLD TOC
<code><textarea style="height:120px;">
<div class="toc">
<h2>Find Fast</h2>
<a rel="nofollow" href="#">Link Title Here</a>
<a rel="nofollow" href="#">Link Title Here</a>
<a rel="nofollow" href="#">Link Title Here</a>
</div><!-- end toc -->
<!-- OLD TOC
<a name=""></a> 
</textarea></code>
<hr> -->
<a name="hds"></a>
<h2 data-magellan-destination="hds">Sticky Nav</h2>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Rendered</small></h3>
		<h1>h1. This is a very large header.</h1>
		<h2>h2. This is a large header.</h2>
		<h3>h3. This is a medium header.</h3>
		<h4>h4. This is a moderate header.</h4>
		<h5>h5. This is a small header.</h5>
		<h6>h6. This is a tiny header.</h6>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<h1>h1. This is a very large header.</h1>
<h2>h2. This is a large header.</h2>
<h3>h3. This is a medium header.</h3>
<h4>h4. This is a moderate header.</h4>
<h5>h5. This is a small header.</h5>
<h6>h6. This is a tiny header.</h6>
	</textarea></code>
	</div>
</div>

<h2>Subheaders</h2>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Rendered</small></h3>
		<h1 class="subheader">h1.subheader</h1>
		<h2 class="subheader">h2.subheader</h2>
		<h3 class="subheader">h3.subheader</h3>
		<h4 class="subheader">h4.subheader</h4>
		<h5 class="subheader">h5.subheader</h5>
		<h6 class="subheader">h6.subheader</h6>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<h1 class="subheader">h1.subheader</h1>
<h2 class="subheader">h2.subheader</h2>
<h3 class="subheader">h3.subheader</h3>
<h4 class="subheader">h4.subheader</h4>
<h5 class="subheader">h5.subheader</h5>
<h6 class="subheader">h6.subheader</h6>
	</textarea></code>
	</div>
</div>

<h2>Small header segments</h2>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Rendered</small></h3>
		<h1>h1. <small>Small segment header.</small></h1>
		<h2>h2. <small>Small segment header.</small></h2>
		<h3>h3. <small>Small segment header.</small></h3>
		<h4>h4. <small>Small segment header.</small></h4>
		<h5>h5. <small>Small segment header.</small></h5>
		<h6>h6. <small>Small segment header.</small></h6>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<h1>h1. <small>Small segment header.</small></h1>
<h2>h2. <small>Small segment header.</small></h2>
<h3>h3. <small>Small segment header.</small></h3>
<h4>h4. <small>Small segment header.</small></h4>
<h5>h5. <small>Small segment header.</small></h5>
<h6>h6. <small>Small segment header.</small></h6>
	</textarea></code>
	</div>
</div>
<hr>
<h2>Text Align Classes</h2>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Basic</small></h3>
		<p class="text-left"><strong>Left Aligned.</strong> Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire.</p>
		<p class="text-right"><strong>Right Aligned.</strong> Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire.</p>
		<p class="text-center"><strong>Center Aligned.</strong> Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire.</p>
		<p class="text-justify"><strong>Justified.</strong> Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire.</p>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<p class="text-left"><!-- text goes here --></p>
<p class="text-right"><!-- text goes here --></p>
<p class="text-center"><!-- text goes here --></p>
<p class="text-justify"><!-- text goes here --></p>
	</textarea></code>
	</div>
</div>
<hr>
<h2>Lists</h2>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Basic</small></h3>
	<ul class="disc">
	  <li>List item with a much longer description or more content.</li>
	  <li>List item</li>
	  <li>List item
	    <ul>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	    </ul>
	  </li>
	  <li>List item</li>
	  <li>List item</li>
	  <li>List item</li>
	</ul>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<ul class="disc">
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ul>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ul>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ul>
	</textarea></code>
	</div>
</div>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Circle</small></h3>
	<ul class="circle">
	  <li>List item with a much longer description or more content.</li>
	  <li>List item</li>
	  <li>List item
	    <ul>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	    </ul>
	  </li>
	  <li>List item</li>
	  <li>List item</li>
	  <li>List item</li>
	</ul>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<ul class="circle">
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ul>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ul>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ul>
	</textarea></code>
	</div>
</div>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Square</small></h3>
	<ul class="square">
	  <li>List item with a much longer description or more content.</li>
	  <li>List item</li>
	  <li>List item
	    <ul>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	    </ul>
	  </li>
	  <li>List item</li>
	  <li>List item</li>
	  <li>List item</li>
	</ul>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<ul class="square">
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ul>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ul>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ul>
	</textarea></code>
	</div>
</div>
<div class="row">
	<div class="large-6 columns">
	<h3><small>No Bullet</small></h3>
	<ul class="no-bullet">
	  <li>List item with a much longer description or more content.</li>
	  <li>List item</li>
	  <li>List item
	    <ul>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	    </ul>
	  </li>
	  <li>List item</li>
	  <li>List item</li>
	  <li>List item</li>
	</ul>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<ul class="no-bullet">
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ul>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ul>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ul>
	</textarea></code>
	</div>
</div>
<div class="row">
	<div class="large-6 columns">
	<h3><small>Ordered/Numbered List</small></h3>
	<ol>
	  <li>List item with a much longer description or more content.</li>
	  <li>List item</li>
	  <li>List item
	    <ol>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	      <li>Nested List Item</li>
	    </ol>
	  </li>
	  <li>List item</li>
	  <li>List item</li>
	  <li>List item</li>
	 </ol>
	</div>
	<div class="large-6 columns">
	<h3><small>HTML</small></h3>
	<code><textarea style="height:120px;">
<ol>
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ol>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ol>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ol>
	</textarea></code>
	</div>
</div>
<hr>
<h2>Blockquotes</h2>
<div class="row">
		<div class="large-6 columns">
			<blockquote>Those people who think they know everything are a great annoyance to those of us who do.<cite>Isaac Asimov</cite></blockquote>			
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<blockquote>Those people who think they know everything are a great annoyance to those of us who do.<cite>Isaac Asimov</cite></blockquote>
			</textarea></code>
		</div>
</div>
<hr>
<a name="btns"></a>
<h2 data-magellan-destination="btns">Buttons</h2>
	<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<a href="#" class="button">Button</a>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" class="button">Button</a>
			</textarea></code>
		</div>
	</div>

	<div class="row">
		<div class="large-6 columns">
			<h3><small>Sizes</small></h3>
			<a href="#" class="button tiny">Tiny Button</a><br />
			<a href="#" class="button small">Small Button</a><br />
			<a href="#" class="button large">Large Button</a><br />
			<a href="#" class="button expand">Expand Button</a>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" class="button tiny">Tiny Button</a>
<a href="#" class="button small">Small Button</a>
<a href="#" class="button large">Large Button</a>
<a href="#" class="button expand">Expand Button</a>
			</textarea></code>
		</div>
	</div>

	<div class="row">
		<div class="large-6 columns">
			<h3><small>Radius</small></h3>
			<a href="#" class="button tiny radius">Tiny Radius</a><br />
			<a href="#" class="button small radius">Small Radius</a><br />
			<a href="#" class="button large radius">Large Radius</a>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" class="button tiny radius">Tiny Radius</a>
<a href="#" class="button small radius">Small Radius</a>
<a href="#" class="button large radius">Large Radius</a>
			</textarea></code>
		</div>
	</div>

	<div class="row">
		<div class="large-6 columns">
			<h3><small>Round</small></h3>
			<a href="#" class="button tiny round">Tiny Round</a><br />
			<a href="#" class="button small round">Small Round</a><br />
			<a href="#" class="button large round">Large Round</a>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" class="button tiny round">Tiny Round</a>
<a href="#" class="button small round">Small Round</a>
<a href="#" class="button large round">Large Round</a>
			</textarea></code>
		</div>
	</div>	

<div class="row">
		<div class="large-6 columns">
			<h3><small>Floats</small></h3>
			<a href="#" class="button left">Left Float</a>
			<a href="#" class="button right">Right Float</a>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" class="button left">Left Float</a>
<a href="#" class="button right">Right Float</a>
			</textarea></code>
		</div>
</div>

<div class="row">
		<div class="large-6 columns">
			<h3><small>Centered</small></h3>
			<div class="text-center">
				<a href="#" class="button">Centered</a>
			</div>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="text-center">
	<a href="#" class="button">Centered</a>
</div>
			</textarea></code>
		</div>
</div>


<h2>Button Groups</h2>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<ul class="button-group">
				<li><a href="#" class="button">Button 1</a></li>
				<li><a href="#" class="button">Button 2</a></li>
				<li><a href="#" class="button">Button 3</a></li>
			</ul>
			<ul class="button-group radius">
				<li><a href="#" class="button">Button 1</a></li>
				<li><a href="#" class="button">Button 2</a></li>
				<li><a href="#" class="button">Button 3</a></li>
			</ul>
			<ul class="button-group round">
				<li><a href="#" class="button">Button 1</a></li>
				<li><a href="#" class="button">Button 2</a></li>
				<li><a href="#" class="button">Button 3</a></li>
			</ul>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<ul class="button-group">
  <li><a href="#" class="button">Button 1</a></li>
  <li><a href="#" class="button">Button 2</a></li>
  <li><a href="#" class="button">Button 3</a></li>
</ul>
<ul class="button-group radius">
  <li><a href="#" class="button">Button 1</a></li>
  <li><a href="#" class="button">Button 2</a></li>
  <li><a href="#" class="button">Button 3</a></li>
</ul>
<ul class="button-group round">
  <li><a href="#" class="button">Button 1</a></li>
  <li><a href="#" class="button">Button 2</a></li>
  <li><a href="#" class="button">Button 3</a></li>
</ul>
			</textarea></code>
		</div>
</div>
<hr>
<h2>Labels</h2>
<p>
	Labels are useful inline styles that can be dropped into body copy to call out certain sections or to attach metadata. For example, you can attach a label that notes when something was updated.
</p>
<h3>Basic</h3>
<p>
	You can create a label using minimal markup.
</p>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<span class="label">Regular Label</span>				
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<span class="label">Regular Label</span>				
			</textarea></code>
		</div>
</div>
<h3>Advanced</h3>
<p>
	Additional classes can be added to your labels to change their appearance.
</p>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<p>
				<span class="success round label">Success Round</span><br>		
				<span class="alert radius label">Alert Radius</span><br>
				<span class="secondary label">Secondary Label</span></p>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<span class="success round label">Success Round</span>				
<span class="alert radius label">Alert Radius</span>
<span class="secondary label">Secondary Label</span>				
			</textarea></code>
		</div>
</div>
<br>
<hr>
<h2>Visibility</h2>
<p>
	Visibility classes let you show or hide elements based on screen size. You can use visibility classes to control which elements users see depending on their browsing environment.
</p>
<h3>Show by Screen Size</h3>
<p>
	In this example, we use the show visibility classes to show certain strings of text based on the device on which users view a page. If their browser meets the class's conditions, the element will be shown. If not, it will be hidden.
</p>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<p class="panel">
			  <strong class="show-for-small-only">This text is shown only on a small screen.</strong>
			  <strong class="show-for-medium-up">This text is shown on medium screens and up.</strong>
			  <strong class="show-for-medium-only">This text is shown only on a medium screen.</strong>
			  <strong class="show-for-large-up">This text is shown on large screens and up.</strong>
			  <strong class="show-for-large-only">This text is shown only on a large screen.</strong>			  
			</p>				
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<p>
  <strong class="show-for-small-only">This text is shown only on a small screen.</strong>
  <strong class="show-for-medium-up">This text is shown on medium screens and up.</strong>
  <strong class="show-for-medium-only">This text is shown only on a medium screen.</strong>
  <strong class="show-for-large-up">This text is shown on large screens and up.</strong>
  <strong class="show-for-large-only">This text is shown only on a large screen.</strong>
</p>
			</textarea></code>
		</div>
</div>
<br>
<h3>Hide by Screen Size</h3>
<p>
	This example shows the opposite: It uses the hide visibility classes to state which elements should disappear based on your device's screen size or orientation. Users will see elements on every browser except those that meet these conditions.
</p>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<p class="panel">
			  <strong class="hide-for-small-only">You are <em>not</em> on a small screen.</strong>
			  <strong class="hide-for-medium-up">You are <em>not</em> on a medium, large, xlarge, or xxlarge screen.</strong>
			  <strong class="hide-for-medium-only">You are <em>not</em> on a medium screen.</strong>
			  <strong class="hide-for-large-up">You are <em>not</em> on a large, xlarge, or xxlarge screen.</strong>
			  <strong class="hide-for-large-only">You are <em>not</em> on a large screen.</strong>
			</p>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<p>
  <strong class="hide-for-small-only">You are <em>not</em> on a small screen.</strong>
  <strong class="hide-for-medium-up">You are <em>not</em> on a medium, large, xlarge, or xxlarge screen.</strong>
  <strong class="hide-for-medium-only">You are <em>not</em> on a medium screen.</strong>
  <strong class="hide-for-large-up">You are <em>not</em> on a large, xlarge, or xxlarge screen.</strong>
  <strong class="hide-for-large-only">You are <em>not</em> on a large screen.</strong>
</p>		</textarea></code>
		</div>
</div>
<hr>
<a name="structure"></a>
<h2 data-magellan-destination="structure">Grid System</h2>	
<p>
	Start by adding an element with a class of row. This will create a horizontal block to contain vertical columns, 12 total. Then add divs with a column class within that row. You can use column or columns - the only difference is grammar. Specify the widths of each column with the small-#, medium-#, and large-# classes.
</p>
<div class="row">
		<div class="large-12 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
		  <div class="large-3 columns text-center" style="background-color:#c6c6c6">3 Columns</div>
		  <div class="large-6 columns text-center" style="background-color:#eeeeee">6 Columns</div>
		  <div class="large-3 columns text-center" style="background-color:#c6c6c6">3 Columns</div>				
		</div>
		<div class="large-12 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="row">  
  <div class="large-3 columns">3 Columns</div>
  <div class="large-6 columns">6 Columns</div>
  <div class="large-3 columns">3 Columns</div>
</div>			
			</textarea></code>
		</div>		
</div>

<h3>Targetting display sizes</h3>
<p>
	You can specify different column widths that target three different sizes: small (mobile), medium (tablet) and large (desktop). The classes can be combined such that for each display size, a different column width takes effect.   
</p>		
<div class="row">
		<div class="large-12 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<div class="small-2 large-4 columns text-center" style="background-color:#c6c6c6">Large 4, Small 2</div>
			<div class="small-4 large-4 columns text-center" style="background-color:#eeeeee">Large 4, Small 4</div>
			<div class="small-6 large-4 columns text-center" style="background-color:#c6c6c6">Large 4, Small 6</div>
		</div>
		<div class="large-12 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="row">
  <div class="small-2 large-4 columns">Large 4, Small 2</div>
  <div class="small-4 large-4 columns">Large 4, Small 4</div>
  <div class="small-6 large-4 columns">Large 4, Small 6</div>
</div>		
			</textarea></code>
		</div>		
</div>		

<h3>Centered Columns</h3>
<p>
	Center your columns by adding a class of small-centered to your column. Large will inherit small centering by default, but you can also center solely on large by applying a large-centered class. 
</p>		
<div class="row">
		<div class="large-12 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
  			<div class="small-3 small-centered columns text-center" style="background-color:#c6c6c6">3 centered</div>
		</div>
		<div class="large-12 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="row">
  <div class="small-3 small-centered columns">3 centered</div>
</div>
			</textarea></code>
		</div>		
</div>	

<h3>Offsets</h3>
<p>
	Move blocks up to 11 columns to the right by using classes like .large-offset-1 and .small-offset-3.
</p>		
<div class="row">
		<div class="large-12 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
  			<div class="large-1 columns text-center" style="background-color:#c6c6c6">1</div>
  			<div class="large-9 large-offset-2 columns text-center" style="background-color:#eeeeee">9, offset 2</div>
		</div>
		<div class="large-12 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="row">
  <div class="large-1 columns">1</div>
  <div class="large-9 large-offset-2 columns">9, offset 2</div>
</div>
			</textarea></code>
		</div>		
</div>	
<hr>
<h2>Block Grid</h2>
<p>
	Block grids give you a way to evenly split contents of a list within the grid. If you wanted to create a row of five images or paragraphs that need to stay evenly spaced no matter the screen size, the block grid is for you.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<ul class="small-block-grid-3">
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			</ul>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<ul class="small-block-grid-3">
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
</ul>
 			</textarea></code>
		</div>		
</div>
<p>
	Use additional classes to specify a different number of items in a row for each screen size.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-6">
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			  <li><img class="th" src="http://placehold.it/1200x800"></li>
			</ul>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-6">
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
</ul>
 			</textarea></code>
		</div>		
</div>
<hr>
<a name="content"></a>
<h2 data-magellan-destination="content">Dropdown</h2>
<p>
	a universal dropdown plugin that will attach dropdowns or popovers to whatever element you need.
</p>
<h3>Basic</h3>
<p>
	You can create a dropdown using minimal markup.
</p>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<a href="#" data-dropdown="drop1">Has Dropdown</a>
			<ul id="drop1" class="f-dropdown" data-dropdown-content>
			  <li><a href="#">This is a link</a></li>
			  <li><a href="#">This is another</a></li>
			  <li><a href="#">Yet another</a></li>
			</ul>
			<a href="#" data-dropdown="drop2">Has Content Dropdown</a>
			<div id="drop2" data-dropdown-content class="f-dropdown content">
			  <p>Some text that people will think is awesome! Some text that people will think is awesome! Some text that people will think is awesome!</p>
			</div>			
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" data-dropdown="drop1">Has Dropdown</a>
<ul id="drop1" class="f-dropdown" data-dropdown-content>
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul>
<a href="#" data-dropdown="drop2">Has Content Dropdown</a>
<div id="drop2" data-dropdown-content class="f-dropdown content">
  <p>Some text that people will think is awesome! Some text that people will think is awesome! Some text that people will think is awesome!</p>
</div>
			</textarea></code>
		</div>
</div>
<h3>Advanced</h3>
<p>
	Additional classes can be added to your dropdown to change its appearance.
</p>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<a href="#" class="button" data-dropdown="drop">Link Dropdown &raquo;</a>
			<ul id="drop" class="small content f-dropdown" data-dropdown-content>
			  <li><a href="#">This is a link</a></li>
			  <li><a href="#">This is another</a></li>
			  <li><a href="#">Yet another</a></li>
			</ul>		
			<a href="#" data-dropdown="dropb" class="button dropdown">Dropdown Button</a><br>
			<ul id="dropb" data-dropdown-content class="f-dropdown">
			  <li><a href="#">This is a link</a></li>
			  <li><a href="#">This is another</a></li>
			  <li><a href="#">Yet another</a></li>
			</ul>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" class="button" data-dropdown="drop">Link Dropdown &raquo;</a>
<ul id="drop" class="small content f-dropdown" data-dropdown-content>
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul>	

<a href="#" data-dropdown="dropb" class="button dropdown">Dropdown Button</a><br>
<ul id="dropb" data-dropdown-content class="f-dropdown">
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul>
			</textarea></code>
		</div>
</div>
<h3>Hoverable Dropdown Option</h3>
<p>
	If you'd rather have your dropdown be accessible by hover, you can add a data-option to the target element:
</p>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
			<a href="#" data-dropdown="hover1" data-options="is_hover:true">Has Hover Dropdown</a>
			<ul id="hover1" class="f-dropdown" data-dropdown-content>
			  <li><a href="#">This is a link</a></li>
			  <li><a href="#">This is another</a></li>
			  <li><a href="#">Yet another</a></li>
			</ul>			
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" data-dropdown="hover1" data-options="is_hover:true">Has Hover Dropdown</a>

<ul id="hover1" class="f-dropdown" data-dropdown-content>
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul>
			</textarea></code>
		</div>
</div>
<hr>
<h2>Progress Bars</h2>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Default</small></h3>
				<div class="progress">
  					<span class="meter"></span>
				</div>
				<div class="progress">
  					<span class="meter" style="width: 80%"></span>
				</div>
				<div class="progress radius">
  					<span class="meter" style="width: 50%"></span>
				</div>
				<div class="progress round">
  					<span class="meter" style="width: 75%"></span>
				</div>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="progress">
  <span class="meter"></span>
</div>
<div class="progress">
  <span class="meter" style="width: 80%"></span>
</div>
<div class="progress radius">
  <span class="meter" style="width: 50%"></span>
</div>
<div class="progress round">
  <span class="meter" style="width: 75%"></span>
</div>
			</textarea></code>
		</div>
</div>
<hr>
<h2>Accordion</h2>
<p>
	You can create an accordion using minimal markup like so:
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
<dl class="accordion" data-accordion>
  <dd>
	<a href="#panel1">Accordion 1</a>
    <div id="panel1" class="content active">
      Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
  <dd>
    <a href="#panel2">Accordion 2</a>
    <div id="panel2" class="content">
      Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
  <dd>
    <a href="#panel3">Accordion 3</a>
    <div id="panel3" class="content">
      Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
</dl>	 
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<dl class="accordion" data-accordion>
  <dd>
	<a href="#panel1">Accordion 1</a>
    <div id="panel1" class="content active">
      Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
  <dd>
    <a href="#panel2">Accordion 2</a>
    <div id="panel2" class="content">
      Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
  <dd>
    <a href="#panel3">Accordion 3</a>
    <div id="panel3" class="content">
      Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
</dl>					
			</textarea></code>
		</div>		
</div>		

<!-- OLD ACCORDION 
<h2>Accordion OLD</h2>
<div class="accordion">		
<h3>Feature Title Here<span class="plus">+</span></h3>
<div>
	<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
</div>

<h3>Feature Title Here<span class="plus">+</span></h3>
<div>
	<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
</div>
</div>
<code><textarea style="height:300px;">
<div class="accordion">		
<h3>Feature Title Here<span class="plus">+</span></h3>
<div>
	<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
</div>

<h3>Feature Title Here<span class="plus">+</span></h3>
<div>
	<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
</div>
</div>
</textarea></code> -->
<hr>
<h2>Tabs</h2>
<p>
	You can create a group of horizontal tabs using minimal markup.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<dl class="tabs" data-tab>
			  <dd class="active"><a href="#panel2-1">Tab 1</a></dd>
			  <dd><a href="#panel2-2">Tab 2</a></dd>
			  <dd><a href="#panel2-3">Tab 3</a></dd>
			  <dd><a href="#panel2-4">Tab 4</a></dd>
			</dl>
			<div class="tabs-content">
			  <div class="content active" id="panel2-1">
			    <p>First panel content goes here...</p>
			  </div>
			  <div class="content" id="panel2-2">
			    <p>Second panel content goes here...</p>
			  </div>
			  <div class="content" id="panel2-3">
			    <p>Third panel content goes here...</p>
			  </div>
			  <div class="content" id="panel2-4">
			    <p>Fourth panel content goes here...</p>
			  </div>
			</div>				 
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<dl class="tabs" data-tab>
  <dd class="active"><a href="#panel2-1">Tab 1</a></dd>
  <dd><a href="#panel2-2">Tab 2</a></dd>
  <dd><a href="#panel2-3">Tab 3</a></dd>
  <dd><a href="#panel2-4">Tab 4</a></dd>
</dl>
<div class="tabs-content">
  <div class="content active" id="panel2-1">
    <p>First panel content goes here...</p>
  </div>
  <div class="content" id="panel2-2">
    <p>Second panel content goes here...</p>
  </div>
  <div class="content" id="panel2-3">
    <p>Third panel content goes here...</p>
  </div>
  <div class="content" id="panel2-4">
    <p>Fourth panel content goes here...</p>
  </div>
</div>						
			</textarea></code>
		</div>		
</div>		

<h3>Vertical Tabs</h3>
<div class="row">
		<div class="large-12 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<dl class="tabs vertical" data-tab>
			  <dd class="active"><a href="#panel1a">Tab 1</a></dd>
			  <dd><a href="#panel2a">Tab 2</a></dd>
			  <dd><a href="#panel3a">Tab 3</a></dd>
			  <dd><a href="#panel4a">Tab 4</a></dd>
			</dl>
			<div class="tabs-content vertical">
			  <div class="content active" id="panel1a">
			    <p>Panel 1 content goes here.</p>
			  </div>
			  <div class="content" id="panel2a">
			    <p>Panel 2 content goes here.</p>
			  </div>
			  <div class="content" id="panel3a">
			    <p>Panel 3 content goes here.</p>
			  </div>
			  <div class="content" id="panel4a">
			    <p>Panel 4 content goes here.</p>
			  </div>
			</div>
		</div>
		<div class="large-12 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<dl class="tabs vertical" data-tab>
  <dd class="active"><a href="#panel1a">Tab 1</a></dd>
  <dd><a href="#panel2a">Tab 2</a></dd>
  <dd><a href="#panel3a">Tab 3</a></dd>
  <dd><a href="#panel4a">Tab 4</a></dd>
</dl>
<div class="tabs-content vertical">
  <div class="content active" id="panel1a">
    <p>Panel 1 content goes here.</p>
  </div>
  <div class="content" id="panel2a">
    <p>Panel 2 content goes here.</p>
  </div>
  <div class="content" id="panel3a">
    <p>Panel 3 content goes here.</p>
  </div>
  <div class="content" id="panel4a">
    <p>Panel 4 content goes here.</p>
  </div>
</div>					
			</textarea></code>
		</div>		
</div>	
		
<!-- <h2>Tabs OLD</h2>
<div class="content-tabs">
<div class="menu-wrapper">
  <ul class="tab-menu">
    <li class="one"><a href="#" class="current">Tab One</a></li>
	<li class="two"><a href="#" class="">Tab Two</a></li>
	<li class="three"><a href="#" class="">Tab Three</a></li>
  </ul>
</div> --><!-- end menu-wrapper -->
<!-- <div class="tab-content-wrapper">
	<div class="one dynamic" >
	   <h3>Lorem Ipsum Dolor Sit Amit</h3>
	   <p>tab one content</p>
	</div> --><!-- end one dynamic -->
	<!-- <div class="two dynamic" style="display:none;">
	   tab two content
	</div> --><!-- end one dynamic -->
	<!-- <div class="three dynamic" style="display:none;">
	   tab three content
	</div> --><!-- end one dynamic -->
<!-- </div> --><!-- end tab-content-wrapper -->
<!-- </div> --><!-- end tabs -->

<!-- <code><textarea style="height:350px;">
<div class="content-tabs">
<div class="menu-wrapper">
  <ul class="tab-menu">
    <li class="one"><a href="#" class="current">Tab One</a></li>
	<li class="two"><a href="#" class="">Tab Two</a></li>
	<li class="three"><a href="#" class="">Tab Three</a></li>
  </ul>
</div> --><!-- end menu-wrapper -->
<!-- <div class="tab-content-wrapper">
	<div class="one dynamic" >
		<h3>Lorem Ipsum Dolor Sit Amit</h3>
	   	<p>tab one content</p>
	</div> --><!-- end one dynamic -->
	<!-- <div class="two dynamic" style="display:none;">
	   tab two content
	</div> --><!-- end one dynamic -->
	<!-- <div class="three dynamic" style="display:none;">
	   tab three content
	</div> --><!-- end one dynamic -->
<!-- </div> --><!-- end tab-content-wrapper -->
<!-- </div> --><!-- end tabs -->
<!-- </textarea></code> -->
<hr>	
<a name="media"></a>
<h2 data-magellan-destination="media">Image Slider</h2>
<p>
	requires minimal HTML markup to function. Our Javascript takes care of most of the heavy lifting for you. The only thing you need to do is add a ul data-orbit element to your page. You can then populate it with images, text, and captions. Here's the markup required to implement a basic Orbit slider on your page:
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<ul class="example-orbit" data-orbit>
			  <li>
			    <img src="http://placehold.it/1000x300/A92B48/fff" alt="slide 1" />
			    <div class="orbit-caption">
			      Caption One.
			    </div>
			  </li>
			  <li>
			    <img src="http://placehold.it/1000x300/EE964D/fff" alt="slide 2" />
			    <div class="orbit-caption">
			      Caption Two.
			    </div>
			  </li>
			  <li>
			    <img src="http://placehold.it/1000x300/FDC43D/fff" alt="slide 3" />
			    <div class="orbit-caption">
			      Caption Three.
			    </div>
			  </li>
			</ul> 
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<ul class="example-orbit" data-orbit>
  <li>
    <img src="http://placehold.it/1000x300/A92B48/fff" alt="slide 1" />
    <div class="orbit-caption">
      Caption One.
    </div>
  </li>
  <li>
    <img src="http://placehold.it/1000x300/EE964D/fff" alt="slide 2" />
    <div class="orbit-caption">
      Caption Two.
    </div>
  </li>
  <li>
    <img src="http://placehold.it/1000x300/FDC43D/fff" alt="slide 3" />
    <div class="orbit-caption">
      Caption Three.
    </div>
  </li>
</ul>
 			</textarea></code>
		</div>		
</div>

<h2>Content Slider</h2>
<p>
	 Can also be used with just content and no images.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<ul data-orbit style="padding:50px;">
			  <li data-orbit-slide="headline-1">
			    <div>
			      <h2>Headline 1</h2>
			      <h3>Subheadline</h3>
			    </div>
			  </li>
			  <li data-orbit-slide="headline-2">
			    <div>
			      <h2>Headline 2</h2>
			      <h3>Subheadline</h3>
			    </div>
			  </li>
			  <li data-orbit-slide="headline-3">
			    <div>
			      <h2>Headline 3</h2>
			      <h3>Subheadline</h3>
			    </div>
			  </li>
			</ul>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<ul data-orbit>
  <li data-orbit-slide="headline-1">
    <div>
      <h2>Headline 1</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
  <li data-orbit-slide="headline-2">
    <div>
      <h2>Headline 2</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
  <li data-orbit-slide="headline-3">
    <div>
      <h2>Headline 3</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
</ul>
 			</textarea></code>
		</div>		
</div>
<hr>
<h2>Thumbnails</h2>
<p>
	Add class "th" to an img or a element.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
		<img class="th" src="http://placehold.it/1200x800">
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<img class="th" src="http://placehold.it/1200x800">			
			</textarea></code>
		</div>		
</div>
<br>
<p>
	Additional classes can be added to your thumbnails to change its appearance.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
		<img class="th radius" src="http://placehold.it/1200x800">
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<img class="th radius" src="http://placehold.it/1200x800">			
			</textarea></code>
		</div>		
</div>
<hr>
<h2>Flex Video</h2>
<p>
	Flex Video lets browsers automatically scale video objects in your webpages. If you're embedding a video from YouTube, Vimeo, or another site that uses iframe, embed or object elements, you can wrap your video in div.flex-video to create an intrinsic ratio that will properly scale your video on any device.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<div class="flex-video">
			        <iframe width="420" height="315" src="//www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen></iframe>
			</div>		
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="flex-video">
	<iframe width="420" height="315" src="//www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen></iframe>
</div>		
			</textarea></code>
		</div>		
</div>
<hr>
<h2>Clearing Lightbox</h2>
<p>
	Gather some images, decide on their order, and put them into an ul with a .clearing-thumbs class.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<ul class="small-block-grid-3 clearing-thumbs" data-clearing>
			  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
			  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
			  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
			</ul>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<ul class="small-block-grid-3 clearing-thumbs" data-clearing>
  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
</ul>		
			</textarea></code>
		</div>		
</div>

<hr>
<a name="calls"></a>
<h2 data-magellan-destination="calls">Reveal Modal</h2>
<p>
	You can create a reveal modal using minimal markup. To launch a modal, just add a data-reveal-id to the object which you want to fire the modal when clicked. The data-reveal-id needs to match the id of your reveal.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
		<a href="#" data-reveal-id="myModal" data-reveal>Click Me For A Modal</a>
			<div id="myModal" class="reveal-modal" data-reveal>
			  <h2>Awesome. I have it.</h2>
			  <p class="lead">Your couch.  It is mine.</p>
			  <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
			  <a class="close-reveal-modal">&#215;</a>
			</div>		 
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" data-reveal-id="myModal" data-reveal>Click Me For A Modal</a>
<div id="myModal" class="reveal-modal" data-reveal>
  <h2>Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
  <a class="close-reveal-modal">&#215;</a>
</div>			
			</textarea></code>
		</div>		
</div>
<p>
	A button that reveals a modal and links to a second modal example.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
		<a href="#" data-reveal-id="firstModal" class="radius button">Example Modal…</a>
			<div id="firstModal" class="reveal-modal" data-reveal>
			  <h2>This is a modal.</h2>
			  <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
			  <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
			  <p><a href="#" data-reveal-id="secondModal" class="secondary button">Second Modal...</a></p>
			  <a class="close-reveal-modal">×</a>
			</div>
			<div id="secondModal" class="reveal-modal" data-reveal>
			  <h2>This is a second modal.</h2>
			  <p>See? It just slides into place after the other first modal. Very handy when you need subsequent dialogs, or when a modal option impacts or requires another decision.</p>
			  <div class="flex-video" style="display: block;">
			    <iframe width="420" height="315" src="http://www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen="" data-src="http://www.youtube.com/embed/aiBt44rrslw"></iframe>
			  </div>
			  <a class="close-reveal-modal">×</a>
			</div>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" data-reveal-id="firstModal" class="radius button">Example Modal…</a>
<div id="firstModal" class="reveal-modal" data-reveal>
  <h2>This is a modal.</h2>
  <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
  <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
  <p><a href="#" data-reveal-id="secondModal" class="secondary button">Second Modal...</a></p>
  <a class="close-reveal-modal">×</a>
</div>
<div id="secondModal" class="reveal-modal" data-reveal>
  <h2>This is a second modal.</h2>
  <p>See? It just slides into place after the other first modal. Very handy when you need subsequent dialogs, or when a modal option impacts or requires another decision.</p>
  <div class="flex-video" style="display: block;">
    <iframe width="420" height="315" src="http://www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen="" data-src="http://www.youtube.com/embed/aiBt44rrslw"></iframe>
  </div>
  <a class="close-reveal-modal">×</a>
</div>
			</textarea></code>
		</div>		
</div>
<p>
	Add class tiny, small, medium, large or xlarge to size the modal box.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
		<a class="radius button" href="#" data-reveal-id="myModal2" data-reveal>Click Me For A Tiny Modal</a>
			<div id="myModal2" class="reveal-modal tiny" data-reveal>
			  <h2>Awesome. I have it.</h2>
			  <p class="lead">Your couch.  It is mine.</p>
			  <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
			  <a class="close-reveal-modal">&#215;</a>
			</div>		 
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<a href="#" data-reveal-id="myModal2" data-reveal>Click Me For A Modal</a>
<div id="myModal2" class="reveal-modal tiny" data-reveal>
  <h2>Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
  <a class="close-reveal-modal">&#215;</a>
</div>			
			</textarea></code>
		</div>		
</div>
<hr>
<h2>Panels</h2>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Regular</small></h3>
			<div class="panel">
				<h5>This is a regular panel.</h5>
				<p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div>
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="panel">
  <h5>This is a regular panel.</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
</div>	
			</textarea></code>
		</div>
</div>
<div class="row">
		<div class="large-6 columns">
			<h3><small>Callout</small></h3>
			<div class="panel callout radius">
				<h5>This is a callout panel.</h5>
				<p>It's a little ostentatious, but useful for important content.</p>
			</div>				
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<div class="panel callout radius">
  <h5>This is a callout panel.</h5>
  <p>It's a little ostentatious, but useful for important content.</p>
</div>		
			</textarea></code>
		</div>
</div>
<div class="row">
		<div class="large-6 columns">
			<h3><small>V-card</small></h3>
			<ul class="vcard">
				<li class="fn">Gaius Baltar</li>
				<li class="street-address">123 Colonial Ave.</li>
				<li class="locality">Caprica City</li>
				<li><span class="state">Caprica</span>, <span class="zip">12345</span></li>
				<li class="email"><a href="#">g.baltar@cmail.com</a></li>
			</ul>		
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<ul class="vcard">
  <li class="fn">Gaius Baltar</li>
  <li class="street-address">123 Colonial Ave.</li>
  <li class="locality">Caprica City</li>
  <li><span class="state">Caprica</span>, <span class="zip">12345</span></li>
  <li class="email"><a href="#">g.baltar@cmail.com</a></li>
</ul>
			</textarea></code>
		</div>
</div>
<hr>
<h2>Tooltips</h2>
<p>
	Tooltips are a quick way to provide extended information on a term or action on a page. The tooltips can be positioned on the "tip-bottom", which is the default position, "tip-top", "tip-left", or "tip-right" of the target element by adding the appropriate class to them. You can even add your own custom class to style each tip differently. On a small device, the tooltips are full-width and bottom aligned.
</p>
<div class="row">
		<div class="large-6 columns" style="line-height:2rem;">
		<h3><small>Rendered</small></h3>
			<span data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">extended information</span>			 
		</div>
		<div class="large-6 columns">
			<h3><small>HTML</small></h3>	
			<code><textarea style="height:120px;">
<span data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">Hover on desktop or touch me on mobile!</span>					
			</textarea></code>
		</div>		
</div>				
	
</div><!-- end left-content_block -->
<?php endwhile; endif; ?>
</div><!-- end content -->
</div><!-- end wrapper div -->
</div><!-- end inside div -->

<?php get_footer(); ?>