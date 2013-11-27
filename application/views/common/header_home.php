<body class="en member v2 chrome-v5 chrome-v5-responsive background-v4 sticky-bg js" id="pagekey-member-home">
	<div class="yui-ac-content"  id="seach_div">
        <div class="yui-ac-hd" >
        </div>
        <div class="yui-ac-bd">
            <ul class="hasCategory hasImage" id="search_bar">
                <li class="rank-0 top category mynetwork">
                <h3><strong>Connections</strong></h3>
                </li>
                <li  class="rank-0 top item mynetwork first primary"><img id="search_bar_img" src="#" class="hoverZoomLink">
                    <h4 class="item-headline"><strong></strong> <span class="separator">·</span><span class="typeahead-degree"></span></h4>
                <p class="item-subline">
              
                </p>
                </li>
            </ul>
        </div>
        <div class="yui-ac-ft" >
        </div>
    </div>
	<div id="header" class="header global-header responsive-header nav-v5-2-header responsive-1" role="logged_header">
		<div id="top-header">
			<div class="wrapper">

				<div class="header-section first-child">
					<h2 class="logo-container">
						<a href="<?php echo base_url();?>index.php/common/page/home" target="_self"  class="logo" id="in-logo">
							LinkedIn
						</a>
					</h2>
					<form id="global-search" role="search" method="get" action="<?php echo base_url();?>index.php/common/page/advance_search" accept-charset="UTF-8" name="commonSearch" class="global-search voltron voltron-vertical-selector">
						<fieldset>
							<legend>Find People, Jobs, Companies, and More</legend>
							<div class="search-scope global-nav-styled-dropdown dropdown" id="control_gen_">
							<a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" href="<?php echo base_url('index.php/common/page/home');?>">
								<label for="main-search-category">Search for:</label>
								<span class="label">
									<span class="styled-dropdown-select-all">All</span>
								</span>
								<select name="type" id="main-search-category" class="search-category">
						            
						             <option class="all"  data-li-styled-dropdown-class="all" data-li-search-action="/vsearch/f" data-li-ghost-text="Search for people, jobs, companies, and more..." data-li-trk-code="vsrp_all_vertical_selector_item" title="Search for people, jobs, companies, and more..." value="all">All</option>
						             <option class="people" data-li-advanced-link="/vsearch/p?adv=true&amp;trk=advsrch" data-li-styled-dropdown-class="people" data-li-search-action="/vsearch/p" data-li-ghost-text="Search people..." data-li-trk-code="vsrp_people_vertical_selector_item" title="Keyword, name, company or title" value="people">People</option>
						             <option class="jobs" data-li-advanced-link="/vsearch/j?adv=true&amp;trk=hb_advjs" data-li-styled-dropdown-class="jobs" data-li-search-action="/vsearch/j" data-li-ghost-text="Search jobs..." data-li-trk-code="vsrp_jobs_vertical_selector_item" title="Keyword, company or job title" value="jobs">Jobs</option>
						             <option class="companies" data-li-styled-dropdown-class="companies" data-li-search-action="/vsearch/c" data-li-ghost-text="Search companies..." title="Keyword" data-li-trk-code="vsrp_companies_vertical_selector_item" value="companies">Companies</option>           
						             <option class="groups" data-li-styled-dropdown-class="groups" data-li-search-action="/vsearch/g" data-li-ghost-text="Search groups..." data-li-trk-code="vsrp_groups_vertical_selector_item" title="Keyword" value="groups">Groups</option>   
						             <option class="edu" data-li-styled-dropdown-class="edu" data-li-search-action="/vsearch/e" data-li-ghost-text="Search universities..." data-li-trk-code="vsrp_edu_vertical_selector_item" title="Keyword" value="edu">Universities</option>         
						             <option class="inbox" data-li-styled-dropdown-class="inbox" data-li-search-action="/inbox/messages/search" data-li-ghost-text="Search inbox..." data-li-trk-code="vsrp_inbox_vertical_selector_item" title="Keyword" value="inbox">Inbox</option>
						        	
						        </select>
						    </a>
						        <ul class="search-selector dropdown-menu">
						        	<li class="all option first selected">
						        		<div>All</div>
						        	</li>
						        	<li class="people option">
						        		<div>People</div>
						        	</li>
						        	<li class="jobs option">
						        		<div>Jobs</div>
						        	</li><li class="companies option">
						        	<div>Companies</div>
						        	</li>
						        	<li class="groups option">
						        		<div>Groups</div>
						        	</li>
						        	<li class="edu option">
						        		<div>Universities</div>
						        	</li>
						        	<li class="inbox option">
						        		<div>Inbox</div>
						        	</li>

						        </ul>

							</div>
							<div class="search-box-container" id="search-box-container">
     						 	<span id="search-autocomplete-container" title="Tip: You can also search by keyword, company, school..." class="/typeahead">
            						<label for="main-search-box" class="ghost" id="control_gen_3" >Search for people, jobs, companies, and more...</label>
          							<input name="keywords" id="main-search-box" class="search-term yui-ac-input" type="text" value="<?php if(!is_null($search_text))echo $search_text; ?>"  autocomplete="off" placeholder="Search for people, jobs, companies, and more...">
        							<span id="search-typeahead-container"></span>
        						</span>
          						<input name="orig" type="hidden" value="GLHD">
          						<input name="rsid" type="hidden">
     							<input name="pageKey" type="hidden" value="member-home">
    						</div>
    						<button name="search" value="Search" class="search-button" id="search_button" type="submit">
        						<span>Search</span>
      						</button>
						</fieldset>
						<div class="advanced-search-outer">
      						<div class="advanced-search-inner">
        						<a href="<?php echo base_url('index.php/common/page/home');?>" class="advanced-search" id="advanced-search">Advanced</a>
      						</div>
    					</div>
					</form>
				</div>
				<div class="header-section last-child">
					<ul class="nav utilities" role="navigation" id="control_gen_5">
						<li class="nav-item activity-tab" data-li-activity-type="messages">
							<a href="<?php echo base_url('index.php/common/page/accept_connection');?>" class="activity-toggle inbox-alert">Inbox</a>
							<div class="activity-container" id="inbox">
						    	<div class="activity-drop">
						        	<div id="inbox-overlay-messages">
						            	<div id="inbox-overlay-messages-header" class="activity-drop-header messages">
						                	<h3>
						                		<a href="<?php echo base_url('index.php/common/page/home');?>" id="inbox-overlay-messages-anchor">
						                		Messages (<span class="message-count">0</span>) <span class="sub-nav-header-arrow" role="presentation"></span>
						                		<span class="carret"></span>
						                		</a>
						                	</h3>
						                	<a href="<?php echo base_url('index.php/common/page/home');?>" class="see-all">
						                	Compose Message <span class="carret"></span>
						                	</a>
						            	</div>
						            	<div id="messages-container" class="activity-drop-body">
						            		
						            		<form action="/inbox/bulk_action" method="POST" name="bulkActionForm" novalidate="novalidate" id="msging">
												<ol class="inbox-list inbox-list-widget">
													<li data-gid="I24511753_252" class="inbox-item invitation-item">
													<a href="<?php echo base_url('index.php/common/page/home');?>">
													<img id="photo_thumb" src="#" class="photo notification-photo" alt="Muhammad Arslan Shabbir" height="40" width="40">
													</a>
													<div class="item-content">
														<div class="date">
															Aug 21
														</div>
														<span class="participants">
														<a class="profile-link" href="<?php echo base_url('index.php/common/page/home');?>">
														Muhammad Arslan Shabbir </a>
														</span>
														<span class="headline">
														student at FAST-NUCES </span>
														<div class="inbox-actions">
															<ul>
																<li>
																<div class="primary-actions">
																	<ul>
																		<li>
																		<a data-action="invitationAccept" data-action-url="/inbox/action?mboxItemGID=I24511753_252&amp;actionType=invitationAccept&amp;csrfToken=ajax%3A7797344814100961717&amp;trk=hb-invitations-item-accept-v2" class="accept noreply" href="<?php echo base_url('index.php/common/page/home');?>">Accept</a>
																		</li>
																	</ul>
																</div>
																</li>
																<li>
																<a data-action="invitationIgnore" data-action-url="/inbox/action?mboxItemGID=I24511753_252&amp;actionType=invitationIgnore&amp;csrfToken=ajax%3A7797344814100961717&amp;trk=hb-invitations-item-ignore-v2" class="ignore btn-quaternary" href="<?php echo base_url('index.php/common/page/home');?>">Ignore</a>
																</li>
															</ul>
														</div>
													</div>
													</li>
												</ol>
												<input type="hidden" name="mboxItemGIDs" value="" id="mboxItemGIDs-bulkActionForm"><input type="hidden" name="csrfToken" value="ajax:7797344814100961717" id="csrfToken-bulkActionForm"><input type="hidden" name="sourceAlias" value="0_8Kr6uuaoJDW40gs7VbkystXmPi8RhM7KDNdeWR5IDiM" id="sourceAlias-bulkActionForm">
											</form>
						            	</div>
						        	</div>
						   		</div>
							</div>
						</li>
						<li class="nav-item activity-tab" data-li-new-count="0" data-li-action-type-click="ntf_click_notifications_icon" data-li-action-type-pagination="ntf_scroll" data-li-activity-type="notifications">
							<a href="<?php echo base_url('index.php/common/page/home');?>" class="activity-toggle notifications-alert">Notification </a>
							<div class="activity-container" id="notifications">
							    <div class="activity-drop">
							        <div class="activity-drop-header">
							            <h3>Notifications<span class="sub-nav-header-arrow" role="presentation"></span></h3>
							        </div>
							        <div class="activity-drop-body" id="control_gen_44">
							            <ol class="li-scroll-content">
							                <li class="update first last single" data-li-action-type="ntf_click_notification" data-li-impr-id="5eccc851-1d17-4bf7-88ff-a5809aadb1b9" data-li-id="0:MBR_220597888:0" data-li-num-actors="1" data-li-type="VIEWED_YOUR_PROFILE" data-li-wvmpupsellcount="0" data-li-sub-id="">
							                <span class="timestamp">6mth</span>
							                <div class="photo">
							                    <img src="#" width="40" height="40" alt="Anonymous">
							                </div>
							                <div class="action">
							                    <span class="name">A LinkedIn member</span><strong>viewed your profile</strong>
							                </div>
							                <a class="notification-link" href="<?php echo base_url('index.php/common/page/home');?>" data-li-action-type="ntf_click_notification">See All</a>
							                </li>
							            </ol>
							            <div class="li-scroll-track" >
							                <div class="li-scroll-thumb">
							                    <div class="li-scroll-scrollbar">
							                    </div>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
						</li>
						<li class="nav-item activity-tab" data-li-activity-type="">
						    <a href="<?php echo base_url('index.php/common/page/home');?>" class="activity-toggle add-connections-btn">
						    Add Connections </a>
						    <div class="add-connections simple-responsive" id="addconnections">
						        <div class="add-connections-options">
						            <div class="add-connections-options-body simple-responsive">
						                <section class="invite-securely-via-email-lix">
						                <div class="invite-securely-via-email-lix-div-fallback ">
						                    <div class="activity-drop-header">
						                        <h3>Add Connections<span class="sub-nav-header-arrow" role="presentation"></span></h3>
						                    </div>
						                    <h4>Invite your contacts</h4>
						                    <p>
						                        Quickly find people you may know by searching your email contacts:
						                    </p>
						                    <a href="<?php echo base_url('index.php/common/page/home');?>" class="modal-overlay-link"></a>
						                    <ul class="providers">
						                        <li id="gmail-li" class="gmail"><a href="<?php echo base_url('index.php/common/page/home');?>">Gmail</a></li>
						                        <li class="yahoo"><a href="<?php echo base_url('index.php/common/page/home');?>">AOL</a></li>
						                        <li class="hotmail"><a href="<?php echo base_url('index.php/common/page/home');?>">Hotmail</a></li>
						                        <li class="other"><a href="<?php echo base_url('index.php/common/page/home');?>">Other</a></li>
						                    </ul>
						                </div>
						                </section>
						            </div>
						        </div>
						    </div>
						</li>
						<li class="nav-item account-settings-tab">
						    <a href="<?php echo base_url('index.php/common/page/home');?>" class="account-toggle">
						    <img src="<?php echo $this->session->userdata('thumbnail');?>"  alt="Omer Zahid" class="nav-profile-photo" height="20" width="20">
						    </a>
						    <div class="account-sub-nav" id="account-sub-nav">
						        <div class="account-sub-nav-options">
						            <div class="account-sub-nav-header">
						                <h3>Account &amp; Settings<span class="sub-nav-header-arrow" role="presentation"></span></h3>
						            </div>
						            <div class="account-sub-nav-body">
						                <ul class="account-settings">
						                    <li class="self">
						                    <div class="account-settings-link">
						                        <span class="act-set-row">
						                        <span class="act-set-icon">
						                        <a href="<?php echo base_url('index.php/common/page/home');?>">
						                        <span class="act-set-icon-image" role="presentation">
						                        <img src="<?php echo $this->session->userdata('thumbnail');?>"  alt="Omer Zahid" class="profile-photo" height="20" width="20">
						                        </span>
						                        </a>
						                        </span>
						                        <span class="act-set-name">
						                        <a href="<?php echo base_url('index.php/common/page/home');?>" class="act-set-name-split-link">
						                        <?php echo $this->session->userdata('username');?> </a>
						                        </span>
						                        <span class="act-set-action">
						                        <a href="<?php echo base_url('index.php/login/login/do_logout');?>" class="account-submenu-split-link">
						                        Sign Out </a>
						                        </span>
						                        </span>
						                    </div>
						                    </li>
						                    <li class="account-type">
						                    <a href="<?php echo base_url('index.php/common/page/home');?>" class="account-settings-link" target="_self">
						                    <span class="act-set-row">
						                    <span class="act-set-icon"><span class="act-set-icon-image" role="presentation"></span></span>
						                    <span class="act-set-name">
						                    Account: Basic </span>
						                    <span class="act-set-action">
						                    Upgrade </span>
						                    </span>
						                    </a>
						                    </li>
						                    <li class="job-posting">
						                    <a href="<?php echo base_url('index.php/common/page/home');?>" class="account-settings-link">
						                    <span class="act-set-row">
						                    <span class="act-set-icon"><span class="act-set-icon-image" role="presentation"></span></span>
						                    <span class="act-set-name">
						                    Job Posting </span>
						                    <span class="act-set-action">
						                    Manage </span>
						                    </span>
						                    </a>
						                    </li>
						                    <li class="language-settings">
						                    <a href="<?php echo base_url('index.php/common/page/home');?>" class="account-settings-link">
						                    <span class="act-set-row">
						                    <span class="act-set-icon"><span class="act-set-icon-image" role="presentation"></span></span>
						                    <span class="act-set-name">
						                    Language </span>
						                    <span class="act-set-action">
						                    Change </span>
						                    </span>
						                    </a>
						                    </li>
						                    <li class="privacy-settings">
						                    <a href="<?php echo base_url('index.php/common/page/home');?>" class="account-settings-link">
						                    <span class="act-set-row">
						                    <span class="act-set-icon"><span class="act-set-icon-image" role="presentation"></span></span>
						                    <span class="act-set-name">
						                    Privacy &amp; Settings </span>
						                    <span class="act-set-action">
						                    Review </span>
						                    </span>
						                    </a>
						                    </li>
						                    <li class="help-center">
						                    <span class="qh-icon"></span>
						                    <span class="account-settings-link" id="control_gen_4">
						                    <a href="<?php echo base_url('index.php/common/page/home');?>" target="_blank" rel="nofollow" class="act-set-name">Help Center</a>
						                    <a href="<?php echo base_url('index.php/common/page/home');?>" target="_blank" rel="nofollow" class="act-set-action">Get Help</a>
						                    <div id="qh-tourlist-loader" class="loading hide">
						                    </div>
						                    <ul class="qh-page-tours">
						                    </ul>
						                    </span>
						                    </li>
						                </ul>
						            </div>
						        </div>
						    </div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="responsive-nav" id="responsive-nav-scrollable">
		    <div class="wrapper">
		        <ul class="nav main-nav" role="navigation" id="control_gen_6">
		            <li class="nav-item selected">
		            <a href="<?php echo base_url('index.php/common/page/home');?>" class="nav-link">
		            Home </a>
		            </li>
		            <li class="nav-item">
		            <a href="<?php echo base_url('index.php/common/page/profile/');?>/<?php echo $this->session->userdata('userid'); ?>" class="nav-link">
		            Profile </a>
		            <ul class="sub-nav" id="profile-sub-nav">
		                <li>
		                <a href="<?php echo base_url('index.php/common/page/home');?>">
		                Edit Profile </a>
		                </li>
		                <li>
		                <a href="<?php echo base_url('index.php/common/page/home');?>">
		                Who's Viewed Your Profile </a>
		                </li>
		            </ul>
		            </li>
		            <li class="nav-item">
		            <a href="<?php echo base_url('index.php/common/page/home');?>" class="nav-link">
		            Network </a>
		            <ul class="sub-nav">
		                <li>
		                <a href="<?php echo base_url('index.php/common/page/home');?>">
		                Contacts </a>
		                </li>
		                <li>
		                <a href="<?php echo base_url('index.php/common/page/home');?>">
		                Add Connections </a>
		                </li>
		                <li>
		                <a href="<?php echo base_url('index.php/common/page/alumini');?>">
		                Find Alumni </a>
		                </li>
		            </ul>
		            </li>
		            <li class="nav-item">
		            <a href="<?php echo base_url('index.php/common/page/home');?>" class="nav-link">
		            Jobs </a>
		            </li>
		            <li class="nav-item">
		            <button id="nav-link-interests" class="nav-link no-link">
		            Interests </button>
		            <ul class="sub-nav" id="interests-sub-nav">
		                <li>
		                <a href="<?php echo base_url('index.php/common/page/home');?>">
		                Companies </a>
		                </li>
		                <li>
		                <a href="<?php echo base_url('index.php/common/page/home');?>">
		                Groups </a>
		                </li>
		                <li>
		                <a href="<?php echo base_url('index.php/common/page/home');?>">
		                Influencers </a>
		                </li>
		                <li>
		                <a href="<?php echo base_url('index.php/common/page/home');?>">
		                Education </a>
		                </li>
		            </ul>
		            </li>
		        </ul>
		        <ul class="nav premium-nav" role="navigation" id="control_gen_7">
		            <li class="nav-item">
		            <button class="nav-link no-link">
		            Business Services </button>
		            <ul class="sub-nav" id="business-sub-nav">
		                <li>
		                <a href="<?php echo base_url('index.php/common/page/home');?>">
		                Post a Job </a>
		                </li>
		                <li>
		                <a href="<?php echo base_url('index.php/common/page/home');?>" target="_blank">
		                Talent Solutions </a>
		                </li>
		                <li>
		                <a href="<?php echo base_url('index.php/common/page/home');?>" target="_blank">
		                Advertise </a>
		                </li>
		            </ul>
		            </li>
		            <li class="nav-item">
		            <a href="<?php echo base_url('index.php/common/page/home');?>" class="nav-link">
		            Upgrade </a>
		            </li>
		        </ul>
		    </div>
		</div>
	</div>

