
<div id="body" role="main" class="globalnav-showStop">
	<div class="wrapper hp-nus-wrapper">
		<div id="srp_main_">
			<div id="srp_container">
				<div class="mod srp-title">
					<h2>SEARCH</h2>
				</div>
				<div id="facets-col" class="col">
					<a id="advs-link" href="<?php echo base_url('index.php/common/page/advance_search');?>" class="advs-link mod" onclick="letit" aria-role="button" aria-controls="advanced-search-container">Advanced<span class="advs-indicator available">Advanced Search is available for people</span></a>
					<div id="search-types">
						<div class="mod search-types hide-extra">
							<ul>
								<li class="selected" ><strong>All</strong></li>
								<li><a href="<?php echo base_url('index.php/common/page/advance_search');?>">People</a></li>
								<li><a href="<?php echo base_url('index.php/common/page/advance_search');?>">Jobs</a></li>
								<li><a href="<?php echo base_url('index.php/common/page/advance_search');?>">Companies</a></li>
								<li><a href="<?php echo base_url('index.php/common/page/advance_search');?>">Groups</a></li>
								<li><a href="<?php echo base_url('index.php/common/page/advance_search');?>">Universities</a></li>
								<li><a href="<?php echo base_url('index.php/common/page/advance_search');?>">Inbox</a></li>
							</ul>
						</div>
					</div>
					<div id="advs" class="active">
					
					<h3>Advanced People Search</h3>
		<ul class="search-types">
			<li class="selected"><strong>People</strong></li>
			<li class="search-type jobs"><a href="<?php echo base_url('index.php/common/page/advance_search');?>">Jobs</a></li>
		</ul>
		<div class="advs-controls">
			<input type="reset" class="text-button reset-advs" value="Reset"><button class="text-button close-advs">Close</button>
		</div>
		<div id="advs-form-container">
			<form name="peopleSearchForm" id="peopleSearchForm" action="/vsearch/p" method="get">
				<fieldset class="text-input-fields">
					<ol>
						<li class="keywords"><label for="advs-keywords">Keywords</label><input type="text" name="keywords" id="advs-keywords"></li>
						<li class="firstName"><label for="advs-firstName">First Name</label><input type="text" name="firstName" id="advs-firstName"></li>
						<li class="lastName"><label for="advs-lastName">Last Name</label><input type="text" name="lastName" id="advs-lastName"></li>
						<li class="title"><label for="advs-title">Title</label><input type="text" name="title" id="advs-title"></li>
						<li class="titleScope hidden"><label for="advs-titleScope"></label>
						<select name="titleScope" id="advs-titleScope">
							<option value="CP">Current or past</option>
							<option value="C">Current</option>
							<option value="P">Past</option>
							<option value="PNC">Past not current</option>
						</select>
						</li>
						<li class="company"><label for="advs-company">Company</label><input type="text" name="company" id="advs-company"></li>
						<li class="companyScope hidden"><label for="advs-companyScope"></label>
						<select name="companyScope" id="advs-companyScope">
							<option value="CP">Current or past</option>
							<option value="C">Current</option>
							<option value="P">Past</option>
							<option value="PNC">Past not current</option>
						</select>
						</li>
						<li class="school"><label for="advs-school">School</label><input type="text" name="school" id="advs-school"></li>
						<li class="locationType"><label for="advs-locationType">Location</label>
						<select name="locationType" id="advs-locationType">
							<option value="Y">Anywhere</option>
							<option value="I" selected="">Located in or near:</option>
						</select>
						</li>
						<li class="countryCode"><label for="advs-countryCode">Country</label>
						<select name="countryCode" id="advs-countryCode">
							<option value="us">United States</option>
							<option value="af">Afghanistan</option>
							<option value="ax">Aland Islands</option>
							<option value="al">Albania</option>
							<option value="dz">Algeria</option>
							<option value="as">American Samoa</option>
							<option value="ad">Andorra</option>
							<option value="ao">Angola</option>
							<option value="ai">Anguilla</option>
							<option value="aq">Antarctica</option>
							<option value="ag">Antigua and Barbuda</option>
							<option value="ar">Argentina</option>
							<option value="am">Armenia</option>
							<option value="aw">Aruba</option>
							<option value="au">Australia</option>
							<option value="at">Austria</option>
							<option value="az">Azerbaijan</option>
							<option value="bs">Bahamas</option>
							<option value="bh">Bahrain</option>
							<option value="bd">Bangladesh</option>
							<option value="bb">Barbados</option>
							<option value="by">Belarus</option>
							<option value="be">Belgium</option>
							<option value="bz">Belize</option>
							<option value="bj">Benin</option>
							<option value="bm">Bermuda</option>
							<option value="bt">Bhutan</option>
							<option value="bo">Bolivia</option>
							<option value="ba">Bosnia and Herzegovina</option>
							<option value="bw">Botswana</option>
							<option value="br">Brazil</option>
							<option value="io">British Indian Ocean Territory</option>
							<option value="bn">Brunei Darussalam</option>
							<option value="bg">Bulgaria</option>
							<option value="bf">Burkina Faso</option>
							<option value="bi">Burundi</option>
							<option value="kh">Cambodia</option>
							<option value="cm">Cameroon</option>
							<option value="ca">Canada</option>
							<option value="cv">Cape Verde</option>
							<option value="cb">Caribbean Nations</option>
							<option value="ky">Cayman Islands</option>
							<option value="pk" selected="">Pakistan</option>
						</select>
						</li>
						<li class="postalCode hidden" ><label for="advs-postalCode">Postal Code</label><input type="text" name="postalCode" id="advs-postalCode"><a href="<?php echo base_url('index.php/common/page/advance_search');?>" target="_blank" class="text-button">Lookup</a></li>
						<li class="distance hidden"><label for="advs-distance">Within</label>
						<select name="distance" id="advs-distance">
							<option value="10">10 mi (15km)</option>
							<option value="25">25 mi (40 km)</option>
							<option value="35">35 mi (55 km)</option>
							<option value="50" selected="">50 mi (80 km)</option>
							<option value="75">75 mi (120 km)</option>
							<option value="100">100 mi (160 km)</option>
						</select>
						</li>
						<li class="hidden"><input type="hidden" value="true" name="openAdvancedForm"></li>
					</ol>
				</fieldset>
				<div class="facets-container">
					<ul class="facets standard-facets">
						<li id="adv-facet-N" class="facet mod">
						<fieldset>
							<legend class="facet-toggle" >Relationship</legend><button type="button" class="facet-toggle"></button>
							<div class="facet-values-container">
								<ol class="facet-values">
									<li class="facet-value" ><input type="checkbox" id="adv-F-N-ffs" name="f_N" value="F" checked="true">
									<div class="label-container">
										<label for="adv-F-N-ffs" title="1st Connections" class="facet-label">1st Connections</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-S-N-ffs" name="f_N" value="S" checked="true">
									<div class="label-container">
										<label for="adv-S-N-ffs" title="2nd Connections" class="facet-label">2nd Connections</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-A-N-ffs" name="f_N" value="A" checked="true">
									<div class="label-container">
										<label for="adv-A-N-ffs" title="Group Members" class="facet-label">Group Members</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-O-N-ffs" name="f_N" value="O">
									<div class="label-container">
										<label for="adv-O-N-ffs" title="3rd + Everyone Else" class="facet-label">3rd + Everyone Else</label>
									</div>
									</li>
								</ol>
							</div>
						</fieldset>
						</li>
						<li id="adv-facet-G" class="facet mod collapsed">
						<fieldset>
							<legend class="facet-toggle" >Location</legend><button type="button" class="facet-toggle"></button>
							<div class="facet-values-container">
								<ol class="facet-values">
								</ol>
								<div class="add-facet-typeahead">
									<div class="add-label-wrapper">
										<label class="add-label" for="f_G">Add</label>
									</div>
									<input type="text"  name="f_G" class="facet-typeahead">
								</div>
							</div>
						</fieldset>
						</li>
						<li id="adv-facet-CC" class="facet mod collapsed">
						<fieldset>
							<legend class="facet-toggle" >Current Company</legend><button type="button" class="facet-toggle"></button>
							<div class="facet-values-container">
								<ol class="facet-values">
								</ol>
								<div class="add-facet-typeahead">
									<div class="add-label-wrapper">
										<label class="add-label" for="f_CC">Add</label>
									</div>
									<input type="text" data-li-url="/ta/company" name="f_CC" class="facet-typeahead">
								</div>
							</div>
						</fieldset>
						</li>
						<li id="adv-facet-I" class="facet mod collapsed">
						<fieldset>
							<legend class="facet-toggle" >Industry</legend><button type="button" class="facet-toggle"></button>
							<div class="facet-values-container">
								<ol class="facet-values">
									<li class="facet-value" ><input type="checkbox" id="adv-47-I-ffs" name="f_I" value="47">
									<div class="label-container">
										<label for="adv-47-I-ffs" title="Accounting" class="facet-label">Accounting</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-94-I-ffs" name="f_I" value="94">
									<div class="label-container">
										<label for="adv-94-I-ffs" title="Airlines/Aviation" class="facet-label">Airlines/Aviation</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-120-I-ffs" name="f_I" value="120">
									<div class="label-container">
										<label for="adv-120-I-ffs" title="Alternative Dispute Resolution" class="facet-label">Alternative Dispute Resolution</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-125-I-ffs" name="f_I" value="125">
									<div class="label-container">
										<label for="adv-125-I-ffs" title="Alternative Medicine" class="facet-label">Alternative Medicine</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-127-I-ffs" name="f_I" value="127">
									<div class="label-container">
										<label for="adv-127-I-ffs" title="Animation" class="facet-label">Animation</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-19-I-ffs" name="f_I" value="19">
									<div class="label-container">
										<label for="adv-19-I-ffs" title="Apparel &amp; Fashion" class="facet-label">Apparel &amp; Fashion</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-50-I-ffs" name="f_I" value="50">
									<div class="label-container">
										<label for="adv-50-I-ffs" title="Architecture &amp; Planning" class="facet-label">Architecture &amp; Planning</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-111-I-ffs" name="f_I" value="111">
									<div class="label-container">
										<label for="adv-111-I-ffs" title="Arts and Crafts" class="facet-label">Arts and Crafts</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-53-I-ffs" name="f_I" value="53">
									<div class="label-container">
										<label for="adv-53-I-ffs" title="Automotive" class="facet-label">Automotive</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-52-I-ffs" name="f_I" value="52">
									<div class="label-container">
										<label for="adv-52-I-ffs" title="Aviation &amp; Aerospace" class="facet-label">Aviation &amp; Aerospace</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-41-I-ffs" name="f_I" value="41">
									<div class="label-container">
										<label for="adv-41-I-ffs" title="Banking" class="facet-label">Banking</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-12-I-ffs" name="f_I" value="12">
									<div class="label-container">
										<label for="adv-12-I-ffs" title="Biotechnology" class="facet-label">Biotechnology</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-36-I-ffs" name="f_I" value="36">
									<div class="label-container">
										<label for="adv-36-I-ffs" title="Broadcast Media" class="facet-label">Broadcast Media</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-49-I-ffs" name="f_I" value="49">
									<div class="label-container">
										<label for="adv-49-I-ffs" title="Building Materials" class="facet-label">Building Materials</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-138-I-ffs" name="f_I" value="138">
									<div class="label-container">
										<label for="adv-138-I-ffs" title="Business Supplies and Equipment" class="facet-label">Business Supplies and Equipment</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-129-I-ffs" name="f_I" value="129">
									<div class="label-container">
										<label for="adv-129-I-ffs" title="Capital Markets" class="facet-label">Capital Markets</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-54-I-ffs" name="f_I" value="54">
									<div class="label-container">
										<label for="adv-54-I-ffs" title="Chemicals" class="facet-label">Chemicals</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-90-I-ffs" name="f_I" value="90">
									<div class="label-container">
										<label for="adv-90-I-ffs" title="Civic &amp; Social Organization" class="facet-label">Civic &amp; Social Organization</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-51-I-ffs" name="f_I" value="51">
									<div class="label-container">
										<label for="adv-51-I-ffs" title="Civil Engineering" class="facet-label">Civil Engineering</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-128-I-ffs" name="f_I" value="128">
									<div class="label-container">
										<label for="adv-128-I-ffs" title="Commercial Real Estate" class="facet-label">Commercial Real Estate</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-118-I-ffs" name="f_I" value="118">
									<div class="label-container">
										<label for="adv-118-I-ffs" title="Computer &amp; Network Security" class="facet-label">Computer &amp; Network Security</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-109-I-ffs" name="f_I" value="109">
									<div class="label-container">
										<label for="adv-109-I-ffs" title="Computer Games" class="facet-label">Computer Games</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-3-I-ffs" name="f_I" value="3">
									<div class="label-container">
										<label for="adv-3-I-ffs" title="Computer Hardware" class="facet-label">Computer Hardware</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-5-I-ffs" name="f_I" value="5">
									<div class="label-container">
										<label for="adv-5-I-ffs" title="Computer Networking" class="facet-label">Computer Networking</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-4-I-ffs" name="f_I" value="4">
									<div class="label-container">
										<label for="adv-4-I-ffs" title="Computer Software" class="facet-label">Computer Software</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-48-I-ffs" name="f_I" value="48">
									<div class="label-container">
										<label for="adv-48-I-ffs" title="Construction" class="facet-label">Construction</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-24-I-ffs" name="f_I" value="24">
									<div class="label-container">
										<label for="adv-24-I-ffs" title="Consumer Electronics" class="facet-label">Consumer Electronics</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-25-I-ffs" name="f_I" value="25">
									<div class="label-container">
										<label for="adv-25-I-ffs" title="Consumer Goods" class="facet-label">Consumer Goods</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-91-I-ffs" name="f_I" value="91">
									<div class="label-container">
										<label for="adv-91-I-ffs" title="Consumer Services" class="facet-label">Consumer Services</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-18-I-ffs" name="f_I" value="18">
									<div class="label-container">
										<label for="adv-18-I-ffs" title="Cosmetics" class="facet-label">Cosmetics</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-65-I-ffs" name="f_I" value="65">
									<div class="label-container">
										<label for="adv-65-I-ffs" title="Dairy" class="facet-label">Dairy</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-1-I-ffs" name="f_I" value="1">
									<div class="label-container">
										<label for="adv-1-I-ffs" title="Defense &amp; Space" class="facet-label">Defense &amp; Space</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-99-I-ffs" name="f_I" value="99">
									<div class="label-container">
										<label for="adv-99-I-ffs" title="Design" class="facet-label">Design</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-69-I-ffs" name="f_I" value="69">
									<div class="label-container">
										<label for="adv-69-I-ffs" title="Education Management" class="facet-label">Education Management</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-132-I-ffs" name="f_I" value="132">
									<div class="label-container">
										<label for="adv-132-I-ffs" title="E-Learning" class="facet-label">E-Learning</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-112-I-ffs" name="f_I" value="112">
									<div class="label-container">
										<label for="adv-112-I-ffs" title="Electrical/Electronic Manufacturing" class="facet-label">Electrical/Electronic Manufacturing</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-28-I-ffs" name="f_I" value="28">
									<div class="label-container">
										<label for="adv-28-I-ffs" title="Entertainment" class="facet-label">Entertainment</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-86-I-ffs" name="f_I" value="86">
									<div class="label-container">
										<label for="adv-86-I-ffs" title="Environmental Services" class="facet-label">Environmental Services</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-110-I-ffs" name="f_I" value="110">
									<div class="label-container">
										<label for="adv-110-I-ffs" title="Events Services" class="facet-label">Events Services</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-76-I-ffs" name="f_I" value="76">
									<div class="label-container">
										<label for="adv-76-I-ffs" title="Executive Office" class="facet-label">Executive Office</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-122-I-ffs" name="f_I" value="122">
									<div class="label-container">
										<label for="adv-122-I-ffs" title="Facilities Services" class="facet-label">Facilities Services</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-63-I-ffs" name="f_I" value="63">
									<div class="label-container">
										<label for="adv-63-I-ffs" title="Farming" class="facet-label">Farming</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-43-I-ffs" name="f_I" value="43">
									<div class="label-container">
										<label for="adv-43-I-ffs" title="Financial Services" class="facet-label">Financial Services</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-38-I-ffs" name="f_I" value="38">
									<div class="label-container">
										<label for="adv-38-I-ffs" title="Fine Art" class="facet-label">Fine Art</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-66-I-ffs" name="f_I" value="66">
									<div class="label-container">
										<label for="adv-66-I-ffs" title="Fishery" class="facet-label">Fishery</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-34-I-ffs" name="f_I" value="34">
									<div class="label-container">
										<label for="adv-34-I-ffs" title="Food &amp; Beverages" class="facet-label">Food &amp; Beverages</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-23-I-ffs" name="f_I" value="23">
									<div class="label-container">
										<label for="adv-23-I-ffs" title="Food Production" class="facet-label">Food Production</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-101-I-ffs" name="f_I" value="101">
									<div class="label-container">
										<label for="adv-101-I-ffs" title="Fund-Raising" class="facet-label">Fund-Raising</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-26-I-ffs" name="f_I" value="26">
									<div class="label-container">
										<label for="adv-26-I-ffs" title="Furniture" class="facet-label">Furniture</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-29-I-ffs" name="f_I" value="29">
									<div class="label-container">
										<label for="adv-29-I-ffs" title="Gambling &amp; Casinos" class="facet-label">Gambling &amp; Casinos</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-145-I-ffs" name="f_I" value="145">
									<div class="label-container">
										<label for="adv-145-I-ffs" title="Glass, Ceramics &amp; Concrete" class="facet-label">Glass, Ceramics &amp; Concrete</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-75-I-ffs" name="f_I" value="75">
									<div class="label-container">
										<label for="adv-75-I-ffs" title="Government Administration" class="facet-label">Government Administration</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-148-I-ffs" name="f_I" value="148">
									<div class="label-container">
										<label for="adv-148-I-ffs" title="Government Relations" class="facet-label">Government Relations</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-140-I-ffs" name="f_I" value="140">
									<div class="label-container">
										<label for="adv-140-I-ffs" title="Graphic Design" class="facet-label">Graphic Design</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-124-I-ffs" name="f_I" value="124">
									<div class="label-container">
										<label for="adv-124-I-ffs" title="Health, Wellness and Fitness" class="facet-label">Health, Wellness and Fitness</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-68-I-ffs" name="f_I" value="68">
									<div class="label-container">
										<label for="adv-68-I-ffs" title="Higher Education" class="facet-label">Higher Education</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-14-I-ffs" name="f_I" value="14">
									<div class="label-container">
										<label for="adv-14-I-ffs" title="Hospital &amp; Health Care" class="facet-label">Hospital &amp; Health Care</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-31-I-ffs" name="f_I" value="31">
									<div class="label-container">
										<label for="adv-31-I-ffs" title="Hospitality" class="facet-label">Hospitality</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-137-I-ffs" name="f_I" value="137">
									<div class="label-container">
										<label for="adv-137-I-ffs" title="Human Resources" class="facet-label">Human Resources</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-134-I-ffs" name="f_I" value="134">
									<div class="label-container">
										<label for="adv-134-I-ffs" title="Import and Export" class="facet-label">Import and Export</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-88-I-ffs" name="f_I" value="88">
									<div class="label-container">
										<label for="adv-88-I-ffs" title="Individual &amp; Family Services" class="facet-label">Individual &amp; Family Services</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-147-I-ffs" name="f_I" value="147">
									<div class="label-container">
										<label for="adv-147-I-ffs" title="Industrial Automation" class="facet-label">Industrial Automation</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-84-I-ffs" name="f_I" value="84">
									<div class="label-container">
										<label for="adv-84-I-ffs" title="Information Services" class="facet-label">Information Services</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-96-I-ffs" name="f_I" value="96">
									<div class="label-container">
										<label for="adv-96-I-ffs" title="Information Technology and Services" class="facet-label">Information Technology and Services</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-42-I-ffs" name="f_I" value="42">
									<div class="label-container">
										<label for="adv-42-I-ffs" title="Insurance" class="facet-label">Insurance</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-74-I-ffs" name="f_I" value="74">
									<div class="label-container">
										<label for="adv-74-I-ffs" title="International Affairs" class="facet-label">International Affairs</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-141-I-ffs" name="f_I" value="141">
									<div class="label-container">
										<label for="adv-141-I-ffs" title="International Trade and Development" class="facet-label">International Trade and Development</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-6-I-ffs" name="f_I" value="6">
									<div class="label-container">
										<label for="adv-6-I-ffs" title="Internet" class="facet-label">Internet</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-45-I-ffs" name="f_I" value="45">
									<div class="label-container">
										<label for="adv-45-I-ffs" title="Investment Banking" class="facet-label">Investment Banking</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-46-I-ffs" name="f_I" value="46">
									<div class="label-container">
										<label for="adv-46-I-ffs" title="Investment Management" class="facet-label">Investment Management</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-73-I-ffs" name="f_I" value="73">
									<div class="label-container">
										<label for="adv-73-I-ffs" title="Judiciary" class="facet-label">Judiciary</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-77-I-ffs" name="f_I" value="77">
									<div class="label-container">
										<label for="adv-77-I-ffs" title="Law Enforcement" class="facet-label">Law Enforcement</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-9-I-ffs" name="f_I" value="9">
									<div class="label-container">
										<label for="adv-9-I-ffs" title="Law Practice" class="facet-label">Law Practice</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-10-I-ffs" name="f_I" value="10">
									<div class="label-container">
										<label for="adv-10-I-ffs" title="Legal Services" class="facet-label">Legal Services</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-72-I-ffs" name="f_I" value="72">
									<div class="label-container">
										<label for="adv-72-I-ffs" title="Legislative Office" class="facet-label">Legislative Office</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-30-I-ffs" name="f_I" value="30">
									<div class="label-container">
										<label for="adv-30-I-ffs" title="Leisure, Travel &amp; Tourism" class="facet-label">Leisure, Travel &amp; Tourism</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-85-I-ffs" name="f_I" value="85">
									<div class="label-container">
										<label for="adv-85-I-ffs" title="Libraries" class="facet-label">Libraries</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-116-I-ffs" name="f_I" value="116">
									<div class="label-container">
										<label for="adv-116-I-ffs" title="Logistics and Supply Chain" class="facet-label">Logistics and Supply Chain</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-143-I-ffs" name="f_I" value="143">
									<div class="label-container">
										<label for="adv-143-I-ffs" title="Luxury Goods &amp; Jewelry" class="facet-label">Luxury Goods &amp; Jewelry</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-55-I-ffs" name="f_I" value="55">
									<div class="label-container">
										<label for="adv-55-I-ffs" title="Machinery" class="facet-label">Machinery</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-11-I-ffs" name="f_I" value="11">
									<div class="label-container">
										<label for="adv-11-I-ffs" title="Management Consulting" class="facet-label">Management Consulting</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-95-I-ffs" name="f_I" value="95">
									<div class="label-container">
										<label for="adv-95-I-ffs" title="Maritime" class="facet-label">Maritime</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-80-I-ffs" name="f_I" value="80">
									<div class="label-container">
										<label for="adv-80-I-ffs" title="Marketing and Advertising" class="facet-label">Marketing and Advertising</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-97-I-ffs" name="f_I" value="97">
									<div class="label-container">
										<label for="adv-97-I-ffs" title="Market Research" class="facet-label">Market Research</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-135-I-ffs" name="f_I" value="135">
									<div class="label-container">
										<label for="adv-135-I-ffs" title="Mechanical or Industrial Engineering" class="facet-label">Mechanical or Industrial Engineering</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-126-I-ffs" name="f_I" value="126">
									<div class="label-container">
										<label for="adv-126-I-ffs" title="Media Production" class="facet-label">Media Production</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-17-I-ffs" name="f_I" value="17">
									<div class="label-container">
										<label for="adv-17-I-ffs" title="Medical Devices" class="facet-label">Medical Devices</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-13-I-ffs" name="f_I" value="13">
									<div class="label-container">
										<label for="adv-13-I-ffs" title="Medical Practice" class="facet-label">Medical Practice</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-139-I-ffs" name="f_I" value="139">
									<div class="label-container">
										<label for="adv-139-I-ffs" title="Mental Health Care" class="facet-label">Mental Health Care</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-71-I-ffs" name="f_I" value="71">
									<div class="label-container">
										<label for="adv-71-I-ffs" title="Military" class="facet-label">Military</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-56-I-ffs" name="f_I" value="56">
									<div class="label-container">
										<label for="adv-56-I-ffs" title="Mining &amp; Metals" class="facet-label">Mining &amp; Metals</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-35-I-ffs" name="f_I" value="35">
									<div class="label-container">
										<label for="adv-35-I-ffs" title="Motion Pictures and Film" class="facet-label">Motion Pictures and Film</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-37-I-ffs" name="f_I" value="37">
									<div class="label-container">
										<label for="adv-37-I-ffs" title="Museums and Institutions" class="facet-label">Museums and Institutions</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-115-I-ffs" name="f_I" value="115">
									<div class="label-container">
										<label for="adv-115-I-ffs" title="Music" class="facet-label">Music</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-114-I-ffs" name="f_I" value="114">
									<div class="label-container">
										<label for="adv-114-I-ffs" title="Nanotechnology" class="facet-label">Nanotechnology</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-81-I-ffs" name="f_I" value="81">
									<div class="label-container">
										<label for="adv-81-I-ffs" title="Newspapers" class="facet-label">Newspapers</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-100-I-ffs" name="f_I" value="100">
									<div class="label-container">
										<label for="adv-100-I-ffs" title="Nonprofit Organization Management" class="facet-label">Nonprofit Organization Management</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-57-I-ffs" name="f_I" value="57">
									<div class="label-container">
										<label for="adv-57-I-ffs" title="Oil &amp; Energy" class="facet-label">Oil &amp; Energy</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-113-I-ffs" name="f_I" value="113">
									<div class="label-container">
										<label for="adv-113-I-ffs" title="Online Media" class="facet-label">Online Media</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-123-I-ffs" name="f_I" value="123">
									<div class="label-container">
										<label for="adv-123-I-ffs" title="Outsourcing/Offshoring" class="facet-label">Outsourcing/Offshoring</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-87-I-ffs" name="f_I" value="87">
									<div class="label-container">
										<label for="adv-87-I-ffs" title="Package/Freight Delivery" class="facet-label">Package/Freight Delivery</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-146-I-ffs" name="f_I" value="146">
									<div class="label-container">
										<label for="adv-146-I-ffs" title="Packaging and Containers" class="facet-label">Packaging and Containers</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-61-I-ffs" name="f_I" value="61">
									<div class="label-container">
										<label for="adv-61-I-ffs" title="Paper &amp; Forest Products" class="facet-label">Paper &amp; Forest Products</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-39-I-ffs" name="f_I" value="39">
									<div class="label-container">
										<label for="adv-39-I-ffs" title="Performing Arts" class="facet-label">Performing Arts</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-15-I-ffs" name="f_I" value="15">
									<div class="label-container">
										<label for="adv-15-I-ffs" title="Pharmaceuticals" class="facet-label">Pharmaceuticals</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-131-I-ffs" name="f_I" value="131">
									<div class="label-container">
										<label for="adv-131-I-ffs" title="Philanthropy" class="facet-label">Philanthropy</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-136-I-ffs" name="f_I" value="136">
									<div class="label-container">
										<label for="adv-136-I-ffs" title="Photography" class="facet-label">Photography</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-117-I-ffs" name="f_I" value="117">
									<div class="label-container">
										<label for="adv-117-I-ffs" title="Plastics" class="facet-label">Plastics</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-107-I-ffs" name="f_I" value="107">
									<div class="label-container">
										<label for="adv-107-I-ffs" title="Political Organization" class="facet-label">Political Organization</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-67-I-ffs" name="f_I" value="67">
									<div class="label-container">
										<label for="adv-67-I-ffs" title="Primary/Secondary Education" class="facet-label">Primary/Secondary Education</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-83-I-ffs" name="f_I" value="83">
									<div class="label-container">
										<label for="adv-83-I-ffs" title="Printing" class="facet-label">Printing</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-105-I-ffs" name="f_I" value="105">
									<div class="label-container">
										<label for="adv-105-I-ffs" title="Professional Training &amp; Coaching" class="facet-label">Professional Training &amp; Coaching</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-102-I-ffs" name="f_I" value="102">
									<div class="label-container">
										<label for="adv-102-I-ffs" title="Program Development" class="facet-label">Program Development</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-79-I-ffs" name="f_I" value="79">
									<div class="label-container">
										<label for="adv-79-I-ffs" title="Public Policy" class="facet-label">Public Policy</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-98-I-ffs" name="f_I" value="98">
									<div class="label-container">
										<label for="adv-98-I-ffs" title="Public Relations and Communications" class="facet-label">Public Relations and Communications</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-78-I-ffs" name="f_I" value="78">
									<div class="label-container">
										<label for="adv-78-I-ffs" title="Public Safety" class="facet-label">Public Safety</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-82-I-ffs" name="f_I" value="82">
									<div class="label-container">
										<label for="adv-82-I-ffs" title="Publishing" class="facet-label">Publishing</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-62-I-ffs" name="f_I" value="62">
									<div class="label-container">
										<label for="adv-62-I-ffs" title="Railroad Manufacture" class="facet-label">Railroad Manufacture</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-64-I-ffs" name="f_I" value="64">
									<div class="label-container">
										<label for="adv-64-I-ffs" title="Ranching" class="facet-label">Ranching</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-44-I-ffs" name="f_I" value="44">
									<div class="label-container">
										<label for="adv-44-I-ffs" title="Real Estate" class="facet-label">Real Estate</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-40-I-ffs" name="f_I" value="40">
									<div class="label-container">
										<label for="adv-40-I-ffs" title="Recreational Facilities and Services" class="facet-label">Recreational Facilities and Services</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-89-I-ffs" name="f_I" value="89">
									<div class="label-container">
										<label for="adv-89-I-ffs" title="Religious Institutions" class="facet-label">Religious Institutions</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-144-I-ffs" name="f_I" value="144">
									<div class="label-container">
										<label for="adv-144-I-ffs" title="Renewables &amp; Environment" class="facet-label">Renewables &amp; Environment</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-70-I-ffs" name="f_I" value="70">
									<div class="label-container">
										<label for="adv-70-I-ffs" title="Research" class="facet-label">Research</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-32-I-ffs" name="f_I" value="32">
									<div class="label-container">
										<label for="adv-32-I-ffs" title="Restaurants" class="facet-label">Restaurants</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-27-I-ffs" name="f_I" value="27">
									<div class="label-container">
										<label for="adv-27-I-ffs" title="Retail" class="facet-label">Retail</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-121-I-ffs" name="f_I" value="121">
									<div class="label-container">
										<label for="adv-121-I-ffs" title="Security and Investigations" class="facet-label">Security and Investigations</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-7-I-ffs" name="f_I" value="7">
									<div class="label-container">
										<label for="adv-7-I-ffs" title="Semiconductors" class="facet-label">Semiconductors</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-58-I-ffs" name="f_I" value="58">
									<div class="label-container">
										<label for="adv-58-I-ffs" title="Shipbuilding" class="facet-label">Shipbuilding</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-20-I-ffs" name="f_I" value="20">
									<div class="label-container">
										<label for="adv-20-I-ffs" title="Sporting Goods" class="facet-label">Sporting Goods</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-33-I-ffs" name="f_I" value="33">
									<div class="label-container">
										<label for="adv-33-I-ffs" title="Sports" class="facet-label">Sports</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-104-I-ffs" name="f_I" value="104">
									<div class="label-container">
										<label for="adv-104-I-ffs" title="Staffing and Recruiting" class="facet-label">Staffing and Recruiting</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-22-I-ffs" name="f_I" value="22">
									<div class="label-container">
										<label for="adv-22-I-ffs" title="Supermarkets" class="facet-label">Supermarkets</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-8-I-ffs" name="f_I" value="8">
									<div class="label-container">
										<label for="adv-8-I-ffs" title="Telecommunications" class="facet-label">Telecommunications</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-60-I-ffs" name="f_I" value="60">
									<div class="label-container">
										<label for="adv-60-I-ffs" title="Textiles" class="facet-label">Textiles</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-130-I-ffs" name="f_I" value="130">
									<div class="label-container">
										<label for="adv-130-I-ffs" title="Think Tanks" class="facet-label">Think Tanks</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-21-I-ffs" name="f_I" value="21">
									<div class="label-container">
										<label for="adv-21-I-ffs" title="Tobacco" class="facet-label">Tobacco</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-108-I-ffs" name="f_I" value="108">
									<div class="label-container">
										<label for="adv-108-I-ffs" title="Translation and Localization" class="facet-label">Translation and Localization</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-92-I-ffs" name="f_I" value="92">
									<div class="label-container">
										<label for="adv-92-I-ffs" title="Transportation/Trucking/Railroad" class="facet-label">Transportation/Trucking/Railroad</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-59-I-ffs" name="f_I" value="59">
									<div class="label-container">
										<label for="adv-59-I-ffs" title="Utilities" class="facet-label">Utilities</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-106-I-ffs" name="f_I" value="106">
									<div class="label-container">
										<label for="adv-106-I-ffs" title="Venture Capital &amp; Private Equity" class="facet-label">Venture Capital &amp; Private Equity</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-16-I-ffs" name="f_I" value="16">
									<div class="label-container">
										<label for="adv-16-I-ffs" title="Veterinary" class="facet-label">Veterinary</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-93-I-ffs" name="f_I" value="93">
									<div class="label-container">
										<label for="adv-93-I-ffs" title="Warehousing" class="facet-label">Warehousing</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-133-I-ffs" name="f_I" value="133">
									<div class="label-container">
										<label for="adv-133-I-ffs" title="Wholesale" class="facet-label">Wholesale</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-142-I-ffs" name="f_I" value="142">
									<div class="label-container">
										<label for="adv-142-I-ffs" title="Wine and Spirits" class="facet-label">Wine and Spirits</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-119-I-ffs" name="f_I" value="119">
									<div class="label-container">
										<label for="adv-119-I-ffs" title="Wireless" class="facet-label">Wireless</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-103-I-ffs" name="f_I" value="103">
									<div class="label-container">
										<label for="adv-103-I-ffs" title="Writing and Editing" class="facet-label">Writing and Editing</label>
									</div>
									</li>
								</ol>
							</div>
						</fieldset>
						</li>
						<li id="adv-facet-PC" class="facet mod collapsed">
						<fieldset>
							<legend class="facet-toggle" data-li-trk-code="vsrp_people_facet_label_PC">Past Company</legend><button type="button" class="facet-toggle"></button>
							<div class="facet-values-container">
								<ol class="facet-values">
								</ol>
								<div class="add-facet-typeahead">
									<div class="add-label-wrapper">
										<label class="add-label" for="f_PC">Add</label>
									</div>
									<input type="text" data-li-url="/ta/company" name="f_PC" class="facet-typeahead">
								</div>
							</div>
						</fieldset>
						</li>
						<li id="adv-facet-ED" class="facet mod collapsed">
						<fieldset>
							<legend class="facet-toggle" data-li-trk-code="vsrp_people_facet_label_ED">School</legend><button type="button" class="facet-toggle"></button>
							<div class="facet-values-container">
								<ol class="facet-values">
								</ol>
								<div class="add-facet-typeahead">
									<div class="add-label-wrapper">
										<label class="add-label" for="f_ED">Add</label>
									</div>
									<input type="text" data-li-url="/ta/school" name="f_ED" class="facet-typeahead">
								</div>
							</div>
						</fieldset>
						</li>
						<li id="adv-facet-L" class="facet mod collapsed">
						<fieldset>
							<legend class="facet-toggle" >Profile Language</legend><button type="button" class="facet-toggle"></button>
							<div class="facet-values-container">
								<ol class="facet-values">
									<li class="facet-value" ><input type="checkbox" id="adv-en-L-ffs" name="f_L" value="en">
									<div class="label-container">
										<label for="adv-en-L-ffs" title="English" class="facet-label">English</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-es-L-ffs" name="f_L" value="es">
									<div class="label-container">
										<label for="adv-es-L-ffs" title="Spanish" class="facet-label">Spanish</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-de-L-ffs" name="f_L" value="de">
									<div class="label-container">
										<label for="adv-de-L-ffs" title="German" class="facet-label">German</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-fr-L-ffs" name="f_L" value="fr">
									<div class="label-container">
										<label for="adv-fr-L-ffs" title="French" class="facet-label">French</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-it-L-ffs" name="f_L" value="it">
									<div class="label-container">
										<label for="adv-it-L-ffs" title="Italian" class="facet-label">Italian</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-pt-L-ffs" name="f_L" value="pt">
									<div class="label-container">
										<label for="adv-pt-L-ffs" title="Portuguese" class="facet-label">Portuguese</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-nl-L-ffs" name="f_L" value="nl">
									<div class="label-container">
										<label for="adv-nl-L-ffs" title="Dutch" class="facet-label">Dutch</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-in-L-ffs" name="f_L" value="in">
									<div class="label-container">
										<label for="adv-in-L-ffs" title="Bahasa Indonesia" class="facet-label">Bahasa Indonesia</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-ms-L-ffs" name="f_L" value="ms">
									<div class="label-container">
										<label for="adv-ms-L-ffs" title="Malay" class="facet-label">Malay</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-ro-L-ffs" name="f_L" value="ro">
									<div class="label-container">
										<label for="adv-ro-L-ffs" title="Romanian" class="facet-label">Romanian</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-ru-L-ffs" name="f_L" value="ru">
									<div class="label-container">
										<label for="adv-ru-L-ffs" title="Russian" class="facet-label">Russian</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-tr-L-ffs" name="f_L" value="tr">
									<div class="label-container">
										<label for="adv-tr-L-ffs" title="Turkish" class="facet-label">Turkish</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-sv-L-ffs" name="f_L" value="sv">
									<div class="label-container">
										<label for="adv-sv-L-ffs" title="Swedish" class="facet-label">Swedish</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-pl-L-ffs" name="f_L" value="pl">
									<div class="label-container">
										<label for="adv-pl-L-ffs" title="Polish" class="facet-label">Polish</label>
									</div>
									</li>
									<li class="facet-value" ><input type="checkbox" id="adv-_o-L-ffs" name="f_L" value="_o">
									<div class="label-container">
										<label for="adv-_o-L-ffs" title="Others" class="facet-label">Others</label>
									</div>
									</li>
								</ol>
							</div>
						</fieldset>
						</li>
					</ul>
					<ul class="facets premium-facets">
						<li id="adv-facet-FG" class="facet premium mod single-select">
						<fieldset>
							<legend class="facet-toggle" data-li-trk-code="vsrp_people_facet_label_FG">Groups</legend><button type="button" class="facet-toggle">Toggle</button>
							<div class="facet-values-container">
								<ol class="facet-values">
								</ol>
							</div>
						</fieldset>
						</li>
						<li id="adv-facet-TE" class="facet premium mod collapsed">
						<fieldset>
							<a class="upgrade" href="<?php echo base_url('index.php/common/page/advance_search');?>">Upgrade to access</a><legend class="facet-toggle" data-li-trk-code="vsrp_people_facet_label_TE">Years of Experience</legend><button type="button" class="facet-toggle">Toggle</button>
							<div class="facet-values-container">
								<ol class="facet-values" id="control_gen_22">
									<li class="facet-value disabled" ><input type="checkbox" id="adv-1-TE-ffs" name="f_TE" value="1" disabled="">
									<div class="label-container">
										<label for="adv-1-TE-ffs" title="Less than 1 year" class="facet-label">Less than 1 year</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-2-TE-ffs" name="f_TE" value="2" disabled="">
									<div class="label-container">
										<label for="adv-2-TE-ffs" title="1 to 2 years" class="facet-label">1 to 2 years</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-3-TE-ffs" name="f_TE" value="3" disabled="">
									<div class="label-container">
										<label for="adv-3-TE-ffs" title="3 to 5 years" class="facet-label">3 to 5 years</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-4-TE-ffs" name="f_TE" value="4" disabled="">
									<div class="label-container">
										<label for="adv-4-TE-ffs" title="6 to 10 years" class="facet-label">6 to 10 years</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-5-TE-ffs" name="f_TE" value="5" disabled="">
									<div class="label-container">
										<label for="adv-5-TE-ffs" title="More than 10 years" class="facet-label">More than 10 years</label>
									</div>
									</li>
								</ol>
							</div>
						</fieldset>
						</li>
						<li id="adv-facet-FA" class="facet premium mod collapsed">
						<fieldset>
							<a class="upgrade" href="<?php echo base_url('index.php/common/page/advance_search');?>">Upgrade to access</a><legend class="facet-toggle" data-li-trk-code="vsrp_people_facet_label_FA">Function</legend><button type="button" class="facet-toggle">Toggle</button>
							<div class="facet-values-container">
								<ol class="facet-values" id="control_gen_23">
									<li class="facet-value disabled" ><input type="checkbox" id="adv-1-FA-ffs" name="f_FA" value="1" disabled="">
									<div class="label-container">
										<label for="adv-1-FA-ffs" title="Academics" class="facet-label">Academics</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-2-FA-ffs" name="f_FA" value="2" disabled="">
									<div class="label-container">
										<label for="adv-2-FA-ffs" title="Accounting" class="facet-label">Accounting</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-3-FA-ffs" name="f_FA" value="3" disabled="">
									<div class="label-container">
										<label for="adv-3-FA-ffs" title="Administrative" class="facet-label">Administrative</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-4-FA-ffs" name="f_FA" value="4" disabled="">
									<div class="label-container">
										<label for="adv-4-FA-ffs" title="Business development" class="facet-label">Business development</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-5-FA-ffs" name="f_FA" value="5" disabled="">
									<div class="label-container">
										<label for="adv-5-FA-ffs" title="Buyer" class="facet-label">Buyer</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-6-FA-ffs" name="f_FA" value="6" disabled="">
									<div class="label-container">
										<label for="adv-6-FA-ffs" title="Consultant" class="facet-label">Consultant</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-7-FA-ffs" name="f_FA" value="7" disabled="">
									<div class="label-container">
										<label for="adv-7-FA-ffs" title="Creative" class="facet-label">Creative</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-8-FA-ffs" name="f_FA" value="8" disabled="">
									<div class="label-container">
										<label for="adv-8-FA-ffs" title="Engineering" class="facet-label">Engineering</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-9-FA-ffs" name="f_FA" value="9" disabled="">
									<div class="label-container">
										<label for="adv-9-FA-ffs" title="Entrepreneur" class="facet-label">Entrepreneur</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-10-FA-ffs" name="f_FA" value="10" disabled="">
									<div class="label-container">
										<label for="adv-10-FA-ffs" title="Finance" class="facet-label">Finance</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-11-FA-ffs" name="f_FA" value="11" disabled="">
									<div class="label-container">
										<label for="adv-11-FA-ffs" title="Human resources" class="facet-label">Human resources</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-12-FA-ffs" name="f_FA" value="12" disabled="">
									<div class="label-container">
										<label for="adv-12-FA-ffs" title="Information technology" class="facet-label">Information technology</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-13-FA-ffs" name="f_FA" value="13" disabled="">
									<div class="label-container">
										<label for="adv-13-FA-ffs" title="Legal" class="facet-label">Legal</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-14-FA-ffs" name="f_FA" value="14" disabled="">
									<div class="label-container">
										<label for="adv-14-FA-ffs" title="Marketing" class="facet-label">Marketing</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-15-FA-ffs" name="f_FA" value="15" disabled="">
									<div class="label-container">
										<label for="adv-15-FA-ffs" title="Medical" class="facet-label">Medical</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-16-FA-ffs" name="f_FA" value="16" disabled="">
									<div class="label-container">
										<label for="adv-16-FA-ffs" title="Operations" class="facet-label">Operations</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-17-FA-ffs" name="f_FA" value="17" disabled="">
									<div class="label-container">
										<label for="adv-17-FA-ffs" title="Product" class="facet-label">Product</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-18-FA-ffs" name="f_FA" value="18" disabled="">
									<div class="label-container">
										<label for="adv-18-FA-ffs" title="Public relations" class="facet-label">Public relations</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-19-FA-ffs" name="f_FA" value="19" disabled="">
									<div class="label-container">
										<label for="adv-19-FA-ffs" title="Real estate" class="facet-label">Real estate</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-20-FA-ffs" name="f_FA" value="20" disabled="">
									<div class="label-container">
										<label for="adv-20-FA-ffs" title="Sales" class="facet-label">Sales</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-21-FA-ffs" name="f_FA" value="21" disabled="">
									<div class="label-container">
										<label for="adv-21-FA-ffs" title="Support" class="facet-label">Support</label>
									</div>
									</li>
								</ol>
							</div>
						</fieldset>
						</li>
						<li id="adv-facet-SE" class="facet premium mod collapsed">
						<fieldset>
							<a class="upgrade" href="<?php echo base_url('index.php/common/page/advance_search');?>">Upgrade to access</a><legend class="facet-toggle" data-li-trk-code="vsrp_people_facet_label_SE">Seniority Level</legend><button type="button" class="facet-toggle">Toggle</button>
							<div class="facet-values-container">
								<ol class="facet-values" id="control_gen_24">
									<li class="facet-value disabled" ><input type="checkbox" id="adv-0-SE-ffs" name="f_SE" value="0" disabled="">
									<div class="label-container">
										<label for="adv-0-SE-ffs" title="Manager" class="facet-label">Manager</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-1-SE-ffs" name="f_SE" value="1" disabled="">
									<div class="label-container">
										<label for="adv-1-SE-ffs" title="Owner" class="facet-label">Owner</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-2-SE-ffs" name="f_SE" value="2" disabled="">
									<div class="label-container">
										<label for="adv-2-SE-ffs" title="Partner" class="facet-label">Partner</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-3-SE-ffs" name="f_SE" value="3" disabled="">
									<div class="label-container">
										<label for="adv-3-SE-ffs" title="CXO" class="facet-label">CXO</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-4-SE-ffs" name="f_SE" value="4" disabled="">
									<div class="label-container">
										<label for="adv-4-SE-ffs" title="VP" class="facet-label">VP</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-5-SE-ffs" name="f_SE" value="5" disabled="">
									<div class="label-container">
										<label for="adv-5-SE-ffs" title="Director" class="facet-label">Director</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-6-SE-ffs" name="f_SE" value="6" disabled="">
									<div class="label-container">
										<label for="adv-6-SE-ffs" title="Senior" class="facet-label">Senior</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-7-SE-ffs" name="f_SE" value="7" disabled="">
									<div class="label-container">
										<label for="adv-7-SE-ffs" title="Entry" class="facet-label">Entry</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-8-SE-ffs" name="f_SE" value="8" disabled="">
									<div class="label-container">
										<label for="adv-8-SE-ffs" title="Students &amp; Interns" class="facet-label">Students &amp; Interns</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-9-SE-ffs" name="f_SE" value="9" disabled="">
									<div class="label-container">
										<label for="adv-9-SE-ffs" title="Volunteer" class="facet-label">Volunteer</label>
									</div>
									</li>
								</ol>
							</div>
						</fieldset>
						</li>
						<li id="adv-facet-P" class="facet premium mod collapsed">
						<fieldset>
							<a class="upgrade" href="<?php echo base_url('index.php/common/page/advance_search');?>">Upgrade to access</a><legend class="facet-toggle" data-li-trk-code="vsrp_people_facet_label_P">Interested In</legend><button type="button" class="facet-toggle">Toggle</button>
							<div class="facet-values-container">
								<ol class="facet-values" id="control_gen_25">
									<li class="facet-value disabled" ><input type="checkbox" id="adv-1-P-ffs" name="f_P" value="1" disabled="">
									<div class="label-container">
										<label for="adv-1-P-ffs" title="Potential employees" class="facet-label">Potential employees</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-2-P-ffs" name="f_P" value="2" disabled="">
									<div class="label-container">
										<label for="adv-2-P-ffs" title="Consultants/contractors" class="facet-label">Consultants/contractors</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-4-P-ffs" name="f_P" value="4" disabled="">
									<div class="label-container">
										<label for="adv-4-P-ffs" title="Entrepreneurs" class="facet-label">Entrepreneurs</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-8-P-ffs" name="f_P" value="8" disabled="">
									<div class="label-container">
										<label for="adv-8-P-ffs" title="Hiring managers" class="facet-label">Hiring managers</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-16-P-ffs" name="f_P" value="16" disabled="">
									<div class="label-container">
										<label for="adv-16-P-ffs" title="Industry experts" class="facet-label">Industry experts</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-32-P-ffs" name="f_P" value="32" disabled="">
									<div class="label-container">
										<label for="adv-32-P-ffs" title="Deal-making contacts" class="facet-label">Deal-making contacts</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-64-P-ffs" name="f_P" value="64" disabled="">
									<div class="label-container">
										<label for="adv-64-P-ffs" title="Reference check" class="facet-label">Reference check</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-128-P-ffs" name="f_P" value="128" disabled="">
									<div class="label-container">
										<label for="adv-128-P-ffs" title="Reconnect" class="facet-label">Reconnect</label>
									</div>
									</li>
								</ol>
							</div>
						</fieldset>
						</li>
						<li id="adv-facet-CS" class="facet premium mod collapsed">
						<fieldset>
							<a class="upgrade" href="<?php echo base_url('index.php/common/page/advance_search');?>">Upgrade to access</a><legend class="facet-toggle" data-li-trk-code="vsrp_people_facet_label_CS">Company Size</legend><button type="button" class="facet-toggle">Toggle</button>
							<div class="facet-values-container">
								<ol class="facet-values" id="control_gen_26">
									<li class="facet-value disabled" ><input type="checkbox" id="adv-1-CS-ffs" name="f_CS" value="1" disabled="">
									<div class="label-container">
										<label for="adv-1-CS-ffs" title="1-10" class="facet-label">1-10</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-2-CS-ffs" name="f_CS" value="2" disabled="">
									<div class="label-container">
										<label for="adv-2-CS-ffs" title="11-50" class="facet-label">11-50</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-3-CS-ffs" name="f_CS" value="3" disabled="">
									<div class="label-container">
										<label for="adv-3-CS-ffs" title="51-200" class="facet-label">51-200</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-4-CS-ffs" name="f_CS" value="4" disabled="">
									<div class="label-container">
										<label for="adv-4-CS-ffs" title="201-500" class="facet-label">201-500</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-5-CS-ffs" name="f_CS" value="5" disabled="">
									<div class="label-container">
										<label for="adv-5-CS-ffs" title="501-1000" class="facet-label">501-1000</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-6-CS-ffs" name="f_CS" value="6" disabled="">
									<div class="label-container">
										<label for="adv-6-CS-ffs" title="1001-5000" class="facet-label">1001-5000</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-7-CS-ffs" name="f_CS" value="7" disabled="">
									<div class="label-container">
										<label for="adv-7-CS-ffs" title="5001-10000" class="facet-label">5001-10000</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-8-CS-ffs" name="f_CS" value="8" disabled="">
									<div class="label-container">
										<label for="adv-8-CS-ffs" title="10000+" class="facet-label">10000+</label>
									</div>
									</li>
								</ol>
							</div>
						</fieldset>
						</li>
						<li id="adv-facet-F" class="facet premium mod collapsed">
						<fieldset>
							<a class="upgrade" href="<?php echo base_url('index.php/common/page/advance_search');?>">Upgrade to access</a><legend class="facet-toggle" data-li-trk-code="vsrp_people_facet_label_F">Fortune</legend><button type="button" class="facet-toggle">Toggle</button>
							<div class="facet-values-container">
								<ol class="facet-values" id="control_gen_27">
									<li class="facet-value disabled" ><input type="checkbox" id="adv-1-F-ffs" name="f_F" value="1" disabled="">
									<div class="label-container">
										<label for="adv-1-F-ffs" title="Fortune 50" class="facet-label">Fortune 50</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-2-F-ffs" name="f_F" value="2" disabled="">
									<div class="label-container">
										<label for="adv-2-F-ffs" title="Fortune 51-100" class="facet-label">Fortune 51-100</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-3-F-ffs" name="f_F" value="3" disabled="">
									<div class="label-container">
										<label for="adv-3-F-ffs" title="Fortune 101-250" class="facet-label">Fortune 101-250</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-4-F-ffs" name="f_F" value="4" disabled="">
									<div class="label-container">
										<label for="adv-4-F-ffs" title="Fortune 251-500" class="facet-label">Fortune 251-500</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-5-F-ffs" name="f_F" value="5" disabled="">
									<div class="label-container">
										<label for="adv-5-F-ffs" title="Fortune 501-1000" class="facet-label">Fortune 501-1000</label>
									</div>
									</li>
								</ol>
							</div>
						</fieldset>
						</li>
						<li id="adv-facet-DR" class="facet premium mod collapsed">
						<fieldset>
							<a class="upgrade" href="<?php echo base_url('index.php/common/page/advance_search');?>">Upgrade to access</a><legend class="facet-toggle" data-li-trk-code="vsrp_people_facet_label_DR">When Joined</legend><button type="button" class="facet-toggle">Toggle</button>
							<div class="facet-values-container">
								<ol class="facet-values" id="control_gen_28">
									<li class="facet-value disabled" ><input type="checkbox" id="adv-1-DR-ffs" name="f_DR" value="1" disabled="">
									<div class="label-container">
										<label for="adv-1-DR-ffs" title="1 day ago" class="facet-label">1 day ago</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-2-DR-ffs" name="f_DR" value="2" disabled="">
									<div class="label-container">
										<label for="adv-2-DR-ffs" title="2-7 days ago" class="facet-label">2-7 days ago</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-3-DR-ffs" name="f_DR" value="3" disabled="">
									<div class="label-container">
										<label for="adv-3-DR-ffs" title="8-14 days ago" class="facet-label">8-14 days ago</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-4-DR-ffs" name="f_DR" value="4" disabled="">
									<div class="label-container">
										<label for="adv-4-DR-ffs" title="15-30 days ago" class="facet-label">15-30 days ago</label>
									</div>
									</li>
									<li class="facet-value disabled" ><input type="checkbox" id="adv-5-DR-ffs" name="f_DR" value="5" disabled="">
									<div class="label-container">
										<label for="adv-5-DR-ffs" title="1-3 months ago" class="facet-label">1-3 months ago</label>
									</div>
									</li>
								</ol>
							</div>
						</fieldset>
						</li>
					</ul>
				</div>
				<div class="form-controls">
					<input type="submit" value="Search" name="submit" class="submit-advs"><input type="reset" class="reset-advs text-button" value="Reset">
				</div>
			</form>
		</div>
					
						
					</div>
					<form id="refine-search" name="refine-search" method="GET" action="/vsearch/p">
						<fieldset class="hidden-fields">
							<input type="hidden" name="rsid" value="2813767421383141866616"><input type="hidden" name="keywords" value=""><input type="hidden" name="orig" value=""><input type="hidden" name="diag" value=""><input type="hidden" name="explain" value=""><input type="hidden" name="searchAs" value=""><input type="hidden" name="extra" value=""><input type="hidden" name="expCluster" value="">
						</fieldset>
						<div>
							<ul class="facets" id="control_gen_10">
								<li id="facet-G" class="facet mod">
								<fieldset>
									<legend class="facet-toggle" >Location</legend><button type="button" class="facet-toggle"></button>
									<div class="facet-values-container">
										
									</div>
								</fieldset>
								</li>
								<li id="facet-N" class="facet mod">
								<fieldset>
									<legend class="facet-toggle" >Relationship</legend><button type="button" class="facet-toggle"></button>
									<div class="facet-values-container">
										
									</div>
								</fieldset>
								</li>
								<li id="facet-CC" class="facet mod">
								<fieldset>
									<legend class="facet-toggle" >Current Company</legend><button type="button" class="facet-toggle"></button>
									<div class="facet-values-container">
										
									</div>
								</fieldset>
								</li>
								<li id="facet-I" class="facet mod facet-dirty collapsed">
								<fieldset>
									<legend class="facet-toggle" >Industry</legend><button type="button" class="facet-toggle"></button>
									<div class="facet-values-container">
										<ol class="facet-values">
										</ol>
										<div class="add-facet-typeahead">
											<div class="add-label-wrapper">
												<label class="add-label" for="f_I">Add</label>
											</div>
											<input type="text"  name="f_I" class="facet-typeahead">
										</div>
									</div>
								</fieldset>
								</li>
								<li id="facet-SE" class="facet mod facet-dirty collapsed premium">
								<fieldset>
									<a class="upgrade" href="<?php echo base_url('index.php/common/page/advance_search');?>">Upgrade to access</a><legend class="facet-toggle" >Seniority Level</legend><button type="button" class="facet-toggle"></button>
									<div class="facet-values-container">
										<ol class="facet-values" id="control_gen_8">
										</ol>
									</div>
								</fieldset>
								</li>
								<li id="facet-FG" class="facet mod facet-dirty collapsed premium single-select">
								<fieldset>
									<legend class="facet-toggle" >Groups</legend><button type="button" class="facet-toggle"></button>
									<div class="facet-values-container">
										<ol class="facet-values">
										</ol>
										<div class="add-facet-typeahead">
											<div class="add-label-wrapper">
												<label class="add-label" for="f_FG">Add</label>
											</div>
											<input type="text"  name="f_FG" class="facet-typeahead">
										</div>
									</div>
								</fieldset>
								</li>
								<li id="facet-CS" class="facet mod facet-dirty collapsed premium">
								<fieldset>
									<a class="upgrade" href="<?php echo base_url('index.php/common/page/advance_search');?>">Upgrade to access</a><legend class="facet-toggle" >Company Size</legend><button type="button" class="facet-toggle"></button>
									<div class="facet-values-container">
										<ol class="facet-values" id="control_gen_9">
											<li class="facet-value default select-all disabled selected" ><input type="checkbox" id="Y-CS-ffs" name="f_CS" value="Y" checked="" disabled="">
											<div class="label-container">
												<label for="Y-CS-ffs" title="All" class="facet-label">All</label>
											</div>
											</li>
											<li class="facet-value disabled" ><input type="checkbox" id="1-CS-ffs" name="f_CS" value="1" disabled="">
											<div class="label-container">
												<span class="facet-count">(0)</span><label for="1-CS-ffs" title="1-10" class="facet-label">1-10</label>
											</div>
											</li>
											<li class="facet-value disabled" ><input type="checkbox" id="2-CS-ffs" name="f_CS" value="2" disabled="">
											<div class="label-container">
												<span class="facet-count">(0)</span><label for="2-CS-ffs" title="11-50" class="facet-label">11-50</label>
											</div>
											</li>
											<li class="facet-value disabled" ><input type="checkbox" id="3-CS-ffs" name="f_CS" value="3" disabled="">
											<div class="label-container">
												<span class="facet-count">(0)</span><label for="3-CS-ffs" title="51-200" class="facet-label">51-200</label>
											</div>
											</li>
											<li class="facet-value disabled" ><input type="checkbox" id="4-CS-ffs" name="f_CS" value="4" disabled="">
											<div class="label-container">
												<span class="facet-count">(0)</span><label for="4-CS-ffs" title="201-500" class="facet-label">201-500</label>
											</div>
											</li>
											<li class="facet-value disabled" ><input type="checkbox" id="5-CS-ffs" name="f_CS" value="5" disabled="">
											<div class="label-container">
												<span class="facet-count">(0)</span><label for="5-CS-ffs" title="501-1000" class="facet-label">501-1000</label>
											</div>
											</li>
											<li class="facet-value disabled" ><input type="checkbox" id="6-CS-ffs" name="f_CS" value="6" disabled="">
											<div class="label-container">
												<span class="facet-count">(0)</span><label for="6-CS-ffs" title="1001-5000" class="facet-label">1001-5000</label>
											</div>
											</li>
											<li class="facet-value disabled" ><input type="checkbox" id="7-CS-ffs" name="f_CS" value="7" disabled="">
											<div class="label-container">
												<span class="facet-count">(0)</span><label for="7-CS-ffs" title="5001-10000" class="facet-label">5001-10000</label>
											</div>
											</li>
											<li class="facet-value disabled" ><input type="checkbox" id="8-CS-ffs" name="f_CS" value="8" disabled="">
											<div class="label-container">
												<span class="facet-count">(0)</span><label for="8-CS-ffs" title="10000+" class="facet-label">10000+</label>
											</div>
											</li>
										</ol>
									</div>
								</fieldset>
								</li>
							</ul>
						</div>
					</form>
					<div class="south-facet-upsell">
						<span class="premium-facet-icon">Premium Icon</span>
						<div class="text-content">
							<h3>Search like a Pro</h3>
							<p>
								Find key people in half the time with Premium Filters
							</p>
							<a href="<?php echo base_url('index.php/common/page/advance_search');?>" class="learn-more" id="control_gen_11">Learn more</a>
						</div>
					</div>
				</div>
				<div id="results-col" class="col">
					<div id="results_count" class="mod results_count">
						<p>
							<strong><!-- enter total results here--></strong> results
						</p>
						
					</div>
					<div id="pivot-bar-container">
						<div id="pivot-bar" class="pivot-bar mod">
							<ul class="pivots">
								<li class="pivot" data-li-pivot-facet-name="N" data-li-pivot-facet-value="F">1st Connections<button class="remove-pivot" type="submit"  data-li-trk-facet-type="network">Remove</button></li>
								<li class="pivot" data-li-pivot-facet-name="N" data-li-pivot-facet-value="S">2nd Connections<button class="remove-pivot" type="submit"  data-li-trk-facet-type="network">Remove</button></li>
								<li class="pivot" data-li-pivot-facet-name="N" data-li-pivot-facet-value="A">Group Members<button class="remove-pivot" type="submit"  data-li-trk-facet-type="network">Remove</button></li>
							</ul>
						</div>
					</div>
					<div id="results-container">
						<ol id="results" class="search-results">
						
						
						<li class="mod result idx0 people" data-li-entity-id="88433405" data-li-position="0"><a href="<?php echo base_url('index.php/common/page/advance_search');?>"><img id="search_profile_img" class="entity-img hoverZoomLink"  src="#" alt="image"></a>
							<div class="bd">
								<h3><a class="title" href="<?php echo base_url('index.php/common/page/advance_search');?>">Asad ullah</a><span class="badges"><span><abbr title="Asad ullah is your connection" class="degree-icon ">1<sup>st</sup></abbr></span></span></h3>
								<p class="description">
									Creative Lead (Deezon)
								</p>
								<dl class="demographic">
									<dt>Location</dt>
									<dd>Pakistan</dd>
									<dt>Industry</dt>
									<dd class="separator">Computer Software</dd>
								</dl>
								
								<div class="srp-actions blue-button">
									<div class="primary-action-button">
										<a class="primary-action label" href="<?php echo base_url('index.php/common/page/advance_search');?>">Message</a>
									</div>
									
									</div>
								</div>
							</div>
							</li>
						
						
							</ol>
							</div>
					<div id="related-searches-container">
					</div>
					<div id="results-pagination">
						<h2 id="pagination-heading">Pagination</h2>
						
					</div>
					<div id="bottom-ads-container">
						
					</div>
				</div>				
				
			</div>
			
			
		</div>
	</div>
	