<section class="m-components">
	<h2 class="a-components__sectiontitle">Gradients: 2 mixins</h2>
	<p><code>@include gradient();<br/>
	@include multigradient();</code></p>
	
	<p>Usage: go to <code>_mixins.scss</code></p>
	
	<div class="lib-color gradient row">
		<p>2-stop gradient: @include gradient();</p>
	</div>
</section>

<p>Overlays (below) are created with <code>.overlay.gradient</code>. A parent position is set to relative. It holds <code>.overlay.gradient</code> and an image (See markup). Edit overlay colors in <code>_extends_placeholders.scss</code>. No need for gradient but overlay? Use <code>.overlay</code> alone.</p>

<section class="m-components">
	<img src="http://2.bp.blogspot.com/_RBWp1IAT0ZI/TPeaOKFEcAI/AAAAAAAABBc/2BzJE6r0CgI/s1600/black%black%252Band%252Bwhite%252Baspen%252Bforest%252Bwall%252Bink_bluesky.png" alt="" />
	<div class="lib-color gradient-overlay overlay gradient">
		<p class="overlay__text">Primary gradient—overlay</p>
	</div>
</section>

<section class="m-components">	
	<div class="lib-color gradient-complementary">
		<p>4-stop gradient: @include multigradient();</p>
	</div>
</section>