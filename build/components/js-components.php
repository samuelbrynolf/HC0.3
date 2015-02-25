<section id="topsection" class="m-components">
	<h1 class="a-components__title">
		Webfontloader test<br/>
		<span>— controlled by <code>.wfl</code>* -classes.</span>
	</h1>
</section>

<section class="m-components">
	<h2 class="a-components__sectiontitle">Trigger scripts with css-mediaqueries: <code>mq_scripts();</code></h2>
	<p>Functions are triggered by your screen-states (alpha, beta, charlie, delta, echo) defined in <code>settings.scss</code>.</p>
	<p><strong id="js-mq-example">Placeholder—no functions are triggered. Resize window to alpha...</strong></p>
	<p>
		aq = alphaquery<br/>
		bq = betaquery<br/>
		cq = charliequery<br/>
		dq = deltaquery<br/>
		eq = echoquery<br/>
	</p>
	<p><strong id="js-mq-currentexample"></strong></p>
</section>

<h2 class="a-components__sectiontitle">Do not show images until they are fully loaded. Fade them in: <code>trigByLoad();</code></h2>

<section class="m-components">
	<div class="js-imgLoader s-is-hidden" data-loader="true">
		<img src="http://upload.wikimedia.org/wikipedia/commons/2/24/Willaerts_Adam_The_Embarkation_of_the_Elector_Palantine_Oil_Canvas-huge.jpg" alt="" />
	</div>
</section>

<section class="m-components">
	<div class="js-imgLoader s-is-hidden" data-loader="true">
		<img src="http://2.bp.blogspot.com/_RBWp1IAT0ZI/TPeaOKFEcAI/AAAAAAAABBc/2BzJE6r0CgI/s1600/black%black%252Band%252Bwhite%252Baspen%252Bforest%252Bwall%252Bink_bluesky.png" alt="" />
	</div>
</section>

<h2 class="a-components__sectiontitle">Responsive videos: <code>fitvids();</code></h2>

<section class="m-components js-JVC js-videoParent">
	<iframe src="//player.vimeo.com/video/119777338?color=569eba&title=0&byline=0&portrait=0&badge=0" width="500" height="209" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</section>

<h2 class="a-components__sectiontitle">Toggle optional element: <code>toggleElems();</code></h2>

<section class="m-components">
	<div class="m-toggled">
		<h2 class="a-medium a-toggled__toggler">A chunk of somethings</h2>
		<div class="m-toggled__elem s-is-hidden">
			<p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas.</p>
		</div>
	</div>
</section>

<h2 class="a-components__sectiontitle">Make first LI in an UL toggle remaining list: <code>toggleElems();</code></h2>

<section class="m-components">
	
	<ul class="m-toggled">
		<li>
			<h2 class="a-medium">A list of somethings - use javascript to create toggled sub-list</h2>
		</li>
		<li>List-item 1</li>
		<li>List-item 2</li>
		<li>List-item 3</li>
		<li>List-item 4</li>
		<li>List-item 5</li>
		<li>List-item 6</li>
		<li>List-item 7</li>
	</ul
</section>

<section class="m-components">
	<h2 class="a-components__sectiontitle">Shorten long texts and add expander-button: <code>expandSection();</code></h2>
	
	<div class="m-expand-section" data-divide-by="1.3" data-expand-text="More">
		<h2>Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</h2>
		
		<p>Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
		
		<p>Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
	</div>
</section>

<h2 class="a-components__sectiontitle">Fade in optional elements when they are in viewport using <code>.js-JVC</code></h2>

<section class="m-components">
	Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque lacus quam, egestas ac tincidunt.
</section>

<section class="m-components">
	Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque lacus quam, egestas ac tincidunt.
</section>

<section class="m-components">
	Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque lacus quam, egestas ac tincidunt.
</section>

<section class="m-components js-JVC">
	Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque lacus quam, egestas ac tincidunt.
</section>

<h2 class="a-components__sectiontitle">Lazyload images and srcset-images using <code>.lazyload</code></h2>

<section class="m-components">

		<img src="http://placehold.it/300x300"
			data-srcset="
				http://placehold.it/1800x750 1800w,
				http://placehold.it/1400x600 1400w,
				http://placehold.it/700x300 700w,
				http://placehold.it/500x200 500w"
     	sizes="
     		(min-width: 1400px) 100vw, 
     		(min-width: 700px) 50vw,
     		100vw"
     	alt="flexible image" class="lazyload" />
     	
</section>

<section class="m-components">
	<img
	alt="100%x200"
	src="http://placehold.it/100x75"
	data-src="http://placehold.it/1800x750"
	class="lazyload" />
</section>

<section class="m-components">
	Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque lacus quam, egestas ac tincidunt.
</section>

<section class="m-components js-JVC">
	Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque lacus quam, egestas ac tincidunt.
</section>

<section class="m-components">
	Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque lacus quam, egestas ac tincidunt.
</section>

<section class="m-components">
	<h2 class="a-components__sectiontitle">Modal windows:</h2>
	<a class="a-btn inline js-openmodal" data-modaltarget="#modal-1" href="#" rel="nofollow">Open a modal window</a>
</section>

<div id="modal-1" class="o-modal">
	<div class="m-modal__popup">
		<button class="a-modal__btn js-closemodal">Close</button>
		<p>test</p>
	</div>
	
</div>

<section class="m-components js-JVC">
	Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque lacus quam, egestas ac tincidunt.
</section>

<h2 class="a-components__sectiontitle"><a class="js-jumper" href="#topsection" rel="nofollow">Click me</a> to smoothscroll to top of document: <code>smoothScroll();</code></h2>
<p>Add <code>.js-jumper</code> to the link. Set target for scroll as an ID as href. Use <code>rel="nofollow"</code></p>