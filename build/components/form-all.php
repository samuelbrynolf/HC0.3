<section class="l-container">
	<div class="l-span-C3">
		<h2 class="a-medium lib-marg lib-head">Form -- All</h2>
	</div>

	<div class="l-span-C9">
		<form role="form" class="m-form" data-parsley-validate>
		  <div class="form-group">
		  	<label class="a-label block" for="exampleInputText">Forename</label>
		    <input type="text" class="a-inputText inline" id="exampleInputText" placeholder="Enter name" tabindex="1" required>
		    <!--  http://googlewebmastercentral.blogspot.se/2012/01/making-form-filling-faster-easier-and.html -->
		  </div>
		  <div class="form-group">
		  	<label class="a-label block" for="exampleInputEmail1">Email address</label>
		    <input type="email" class="a-inputText inline" id="exampleInputEmail1" placeholder="Enter email" tabindex="2" data-parsley-trigger="change" required>
		  </div>
		  <div class="form-group">
		  	<label class="a-label block" for="exampleInputPassword1">Password</label>
		    <input type="password" class="a-inputText inline" id="exampleInputPassword1" placeholder="Password" tabindex="3" data-parsley-trigger="keyup" data-parsley-length="[6,20]" data-parsley-validation-threshold="6" required>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputFile">File input</label>
		    <input type="file" id="exampleInputFile" tabindex="4">
		    <p class="a-input-descr">Example block-level help text here.</p>
		  </div>
		  
		  <div class="m-dropdown__wrap">
		 			<label class="a-label block a-input-descr" for="mySelect">Label for fruit select</label>
		      <div class="m-dropdown">
		        <select class="a-select" id="mySelect">
		        	<option class="placeholder" value="" disabled selected>Select your option</option>
		          <option>Apples</option>
		          <option>Bananas</option>
		          <option>Grapes</option>
		          <option>Oranges</option>
		          <option>A very long option name to test wrapping</option>
		        </select>
	    	</div>
		  </div>
		  
		  <div class="checkbox">
		    <label class="a-label checkbox block" for="checkEx1">
		      <input class="a-checkbox" type="checkbox" value="" id="checkEx1" name="checkExample1" checked tabindex="5"> Check me out
		    </label>
		     <label class="a-label checkbox block" for="checkEx2">
		      <input class="a-checkbox" type="checkbox" value="" id="checkEx2" name="checkExample2" tabindex="6"> Check me in
		    </label>
		  </div>
		  
		  <fieldset class="m-fieldset">
		  	<legend>Radiogroup titel</legend>
			  <label class="a-label radio block" for="optionsRadios1">
			    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked tabindex="6">
			    Option one is this and that&mdash;be sure to include why it's great
			  </label>
	
			  <label class="a-label radio block" for="optionsRadios2">
			    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
			    Option two can be something else and selecting it will deselect option one
			  </label>
	
			  <label class="a-label radio block" for="optionsRadios3">
			    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option8" disabled>
			    Option three is disabled
			  </label>
			</fieldset>
			
			<textarea class="a-textarea" placeholder="A textarea" data-parsley-trigger="keyup" data-parsley-length="[20, 50]" data-parsley-validation-threshold="10"></textarea>
		  <button type="submit" class="a-btn inline">Submit</button>
		</form>
	</div>
</section>