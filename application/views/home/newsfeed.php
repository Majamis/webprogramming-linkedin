<html lang="en" class="os-win">
<!--<![endif]-->
<head>
<title>Welcome! | LinkedIn</title>
<link rel="stylesheet" href="newsfeed.css">
</head>
<body class="en member v2 no-footer chrome-v5 chrome-v5-responsive sticky-bg js " id="pagekey-member-home" style="">
<div id="body" class="" role="main">
	<div class="wrapper hp-nus-wrapper">
		<div id="main" class="home-member-new grid-f">
			<div id="content">
				<div id="feed-nhome" class="section feed feed-nhome feed-redesign">
					<div class="filter-cont rt-filter-cont">
						<div id="slick-sharing-cont" class="post-home is-view share-box rt-filter-cont">
							<a href="#">
							<img src="<?php echo $this->session->userdata('thumbnail');?>" class="member-photo animated-member-photo" width="60" height="60" alt="Ahsen Arif" style="margin-top: 15px;">
							</a>
							<div id="post-module" class="post-module">
								<div class="post-module-in">
									<!--
									<form  id="slideshare-upload-form" enctype="multipart/form-data" action="" method="post" class="is-ready is-active is-interactive">
										<label for="slideshare-file-input" class="a11y-hidden-label">Attach a File</label>
										<input name="file_name" type="file" id="slideshare-file-input" class="file-input">
									</form>!-->
									<div class="callout-container" id="slideshare-upload-callout">
										<div class="callout-content">
											<div class="callout-body">
												 Attach a File
											</div>
										</div>
									</div>
									<dl id="file-supported-dialog">
										<dt>Presentations:</dt>
										<dd>pdf, ppt, pps, pptx, ppsx, pot, potx (Powerpoint), odp (OpenOffice)</dd>
										<dt>Documents:</dt>
										<dd>pdf, doc, docx, rtf (MSOffice), odt</dd>
										<dt>Images:</dt>
										<dd>png, gif, jpg, jpeg</dd>
										<dt>Maximum file size:</dt>
										<dd>100MB</dd>
									</dl>
									<a href="#" id="file-supported-dialog-close">x</a>
									<form action="<?php echo base_url().'index.php/home/newsfeed/do_upload'?>" method="post" enctype="multipart/form-data" name="postModuleForm"  class="doc-sharing-form post" accept-charset="utf-8" id="share-form">
										<label for="slideshare-file-input" class="a11y-hidden-label">Attach a File</label>
										<input name="userfile" type="file" id="slideshare-file-input" class="file-input">

										<input type="hidden" value="true" name="ajax" id="share-ajax">
										<input type="hidden" value="0" name="contentImageCount" id="share-img-total">
										<input type="hidden" value="-1" name="contentImageIndex" id="share-img-selected-idx">
										<input type="hidden" name="contentImage" id="share-img-selected-url">
										<input type="hidden" name="contentEntityID" id="share-entity-id">
										<input type="hidden" name="contentUrl" id="share-entity-url">
										<input type="hidden" name="mentions" id="share-entity-mentions">
										<div id="post-module-neu" class="enable-slideshare mentions-enabled transition active active_message">
											<label for="postText-postModuleForm" class="ghost post-message-label" id="control_gen_11" style="display: none;">Share an update...</label>
											<div id="share-entity-mentions-container" class="mentions-container">
												<pre class="mentions-highlighter" id="share-entity-highlighter">
												</pre>
												<textarea name="postText" id="postText-postModuleForm" rows="2" cols="40" class="post-message mentions-input" placeholder="Share an update..."></textarea>
											</div>
											<input type="hidden" name="share-entity-typeahead" id="share-entity-typeahead" value="" class="yui-ac-input" autocomplete="off">
											<div id="share-typeahead-container" class="mentions-typeahead-container yui-ac">
												<div class="typeahead-results-container mentions-typeahead yui-ac-container">
													<div class="yui-ac-content" style="display: none;">
														<div class="yui-ac-hd" style="display: none;">
														</div>
														<div class="yui-ac-bd">
															<ul>
																<li style="display: none;"></li>
																<li style="display: none;"></li>
																<li style="display: none;"></li>
																<li style="display: none;"></li>
																<li style="display: none;"></li>
																<li style="display: none;"></li>
																<li style="display: none;"></li>
																<li style="display: none;"></li>
															</ul>
														</div>
														<div class="yui-ac-ft" style="display: none;">
														</div>
													</div>
												</div>
											</div>
											<label for="contentUrl-postModuleForm" class="ghost" id="control_gen_12" style="display: none;">http://</label>
											<input type="text" name="contentUrl" value="" id="contentUrl-postModuleForm" class="post-link" placeholder="http://">
											<a class="post-link-close" href="#"></a>
											<div class="share-mode" id="share-mode">
												<div class="share-loading">
												</div>
												<div class="share-preview">
												</div>
												<a class="cancel-file-upload" href="#" role="button"></a>
												<div id="share-preview-in">
													<a href="#" class="share-close">Close</a>
													<div class="preview-container">
														<div id="share-image" class="share-image">
															<span class="upload-status file-upload-conversion">Converting...</span>
															<span class="upload-status file-upload-percentage">Uploading... 0%</span>
															<img id="prevImage"src="" class="file-upload-image" alt="snake.jpg">
														</div>
													</div>
													<div class="file-preview-errors">
														<span class="file-preview-error progress-error">Oops! There was an error when uploading your file. Please try again.</span>
														<span class="file-preview-error convert-error">Oops! There was an error when processing your file. Please try again.</span>
														<span class="file-preview-error size-error">Oops! This file exceeds the 100MB limit. Please try another document.</span>
														<span class="file-preview-error type-error" id="control_gen_10">Oops! This file type is not supported. Please try another document, or <a href="#file-supported-dialog">learn more</a>.</span>
													</div>
												</div>
												<div class="share-edit">
													<ul id="share-edit-list" class="form">
														<li id="share-edit-title-wrapper">
														<label for="share-edit-title" class="ghost" id="share-edit-title-label" style="display: none;">Add a title</label>
														<input type="text" name="contentTitle" value="" id="share-edit-title" class="text" maxlength="70" placeholder="Add a title">
														</li>
														<li id="share-edit-meta"></li>
														<li id="share-edit-summary-wrapper">
														<label for="share-edit-summary" class="ghost" id="share-edit-summary-label" style="display: none;">Add a description</label>
														<textarea name="contentSummary" id="share-edit-summary" class="text" maxlength="250" placeholder="Add a description"></textarea>
														</li>
														<li id="share-include-photo-wrapper"></li>
													</ul>
												</div>
											</div>
											<div class="post-actions">
												<div class="post-actions-row">
													<div class="settings " id="share-settings">
														<p>
															Share with:
														</p>
														<div id="openstatus" class="menu-basic styled-dropdown">
															<span class="label"><span id="valueofselected" class="styled-dropdown-select-null">Public</span></span>
															<select name="postVisibility2" id="doc-sharing-visibility">
																<option value="EVERYONE" selected="">Public</option>
																<option value="CONNECTIONS">Connections</option>
															</select>
															<ul class="doc-sharing-dropdown" style="left: 0px; top: 31px;">
																<li id="secondstatus" class="option">
																<div>
																	Public
																</div>
																</li>
																<li id="thirdstatus" class="option selected highlighted">
																<div>
																	Connections
																</div>
																</li>
															</ul>
														</div>
														<span class="arrows">Share with:</span>
													</div>
													<div class="submit">
														<input type="submit" value="upload" class="btn-primary submit" id="share-submit">
													</div>
												</div>
											</div>
											<div class="twitter">
											</div>
										</div>
										<input type="hidden" name="submitPost" value="" id="submitPost-postModuleForm"><input type="hidden" name="tetherAccountID" value="" id="tetherAccountID-twitterAccounts-postModuleForm"><input type="hidden" name="tweetThisOn" value="false" id="tweetThisOn-postModuleForm"><input type="hidden" name="postToMFeedDefaultPublic" value="true" id="postToMFeedDefaultPublic-postModuleForm"><input type="hidden" name="csrfToken" value="ajax:3662309167541864856" id="csrfToken-postModuleForm"><input type="hidden" name="sourceAlias" value="0_0aUs533-gpztrJxp65YSDh" id="sourceAlias-postModuleForm">
									</form>
								</div>
							</div>
							<div class="clear">
							</div>
						</div>
					</div>
					<div class="header">
						<div id="rt-notify-container" style="display: none; top: -35px;">
							<div class="button-container">
								<button class="button" type="button"></button>
							</div>
						</div>
						<div id="filters-wrapper" class="feed-showing-B new-rt-ux">
							<ul id="nus-filters" class="feed-filters uscp-feed-filters">
								<li class="first">
								<div class="tab-droplist">
									<div class="droplist" id="control_gen_15">
										<a class="trigger" href="#" role="button">
										<span class="sprite-facetsearch">
										All Updates </span>
										<span class="arrow-down">
										</span>
										</a>
										<ul class="menu" id="control_gen_14">
											<li id="feed-sort-relevance" class="selected">
											<a href="#">Top</a>
											</li>
											<li id="feed-sort-time" class="">
											<a href="#">Recent</a>
											</li>
											<li class="separator selected">
											<a href="#">All Updates</a>
											</li>
											<li class="">
											<a href="#">Connections</a>
											</li>
											<li class="">
											<a href="#">Profiles</a>
											</li>
											<li class="">
											<a href="#">Groups</a>
											</li>
											<li class="">
											<a href="#">Your Updates</a>
											</li>
											<li class="separator"><a href="#">Customize »</a></li>
										</ul>
									</div>
								</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="content">
						<div id="feed-wrapper">
							<div id="feed-content">
								<ul id="my-feed-post" class="chron katify">
									<li class="top-notifications-date"></li>
									<li class="feed-item linkedin-post">
									<a href="#" title="See Ahsen Arif's profile">
									<img src="ghost_person_65x65_v1.png" class="feed-photo photo newsfeed-photo" alt="Ahsen Arif" width="65" height="65">
									</a>
									<div class="feed-body">
										<div class="nus-action-links">
											<a href="#" class="nus-hide-item" title="Delete your update" role="button">Delete</a>
										</div>
										<div class="feed-content">
											<div class="annotated-body">
												<span class="new-miniprofile-container /profile/mini-profile-with-connections?_ed=0_0yykgZAGbAs3vR3nTUGTutofRgVUOMMPW6PtBHz7Dsy"><strong><a class="name-newsfeed"href="#">Ahsen Arif</a></strong></span>
											</div>
											<div class="image-share-upload mini-image-size">
												<div class="share-object has-photo linkedin-content " id="control_gen_18">
													<div class="photo">
														<a href="" class="image feed-external-url" rel="nofollow" target="_blank">
														<img src="" alt="image" class="newsfeed_upload_image">
														</a>
													</div>
													<div class="properties">
														<span class="share-source ">
														Image </span>
													</div>
												</div>
											</div>
											<span class="share-body">
											<span class="commentary text-newsfeed" id="control_gen_16">
											Hello World \o/ </span>
											</span>
										</div>
										<div class="feed-item-meta">
											<ul class="feed-actions">
												<li class="feed-like">
												<span class="show-like">
												<a href="#" class="unlike" title="Click to unlike this update" rel="like-U-5809578176652779520-M-281376742" role="button">
												Like </a>
												<a href="#" class="like" title="Click to like this update" rel="like-U-5809578176652779520-M-281376742" role="button">
												Like </a>
												</span>
												</li>
												<li class="feed-comment">
												<a href="#" class="focus-comment-form" title="Click to comment on this update" rel="comment-U-5809578176652779520-M-281376742" role="button">
												Comment (<span>0</span>) </a>
												</li>
												<li class="feed-share">
												<a href="#" title="Share" role="button">Share</a>
												</li>
											</ul>
											<span class="nus-timestamp">
											41m ago </span>
										</div>
										<div class="comments" id="discussion" style="display: block;">
											<ul class="comments_field">
												<li class="pre-rendered ">
												<span class="thumb">&nbsp;</span>
												<p>
													<a href="#">You</a>
												</p>
												</li>
												<li class="comment-item first nus-mid-220597888">
												<div class="bubble">
												</div>
												<a href="#" title="See Omer Zahid's profile">
												<img src="ghost_person_30x30_v1.png" id="event-photo-5809578176652779520" class="feed-photo photo comment-photo" alt="Omer Zahid" width="30" height="30">
												</a>
												<p>
													<a role="button" id="nus-comment-5809578624365379584" class="delete feed-delete-comment" href="#">
													Delete </a>
													<span class="new-miniprofile-container /profile/mini-profile-with-connections?_ed=0_0yykgZAGbAs3vR3nTUGTuufJy2kGUNCsoG9zme_RCiU">
													<a class="name_comment" href="#">Omer Zahid</a>
													</span>
													<q id="control_gen_17"><span class="commentary text-comment">yolo</span>
													</q>
													<span class="nus-timestamp">
													40m ago </span>
												</p>
												</li>
												
											</ul>
											<div class="form mini">
												<form action="<?php echo base_url().'index.php/home/newsfeed/submit_comment'?>" method="post">
													<label for="comment-body-U-5809578176652779520-M-281376742-5809578176652779520" style="display: none;" id="comment-body-U-5809578176652779520-M-281376742-5809578176652779520-label" class="ghost">Add a comment…</label>
													<div id="mentions-container-U-5809578176652779520-M-281376742-5809578176652779520" class="mentions-container">
														<pre class="mentions-highlighter" id="comment-highlighter-U-5809578176652779520-M-281376742-5809578176652779520">
														</pre>
														<textarea name="postText1" class="texta comment-text mentions-input" id="comment-body-U-5809578176652779520-M-281376742-5809578176652779520" placeholder="Add a comment" style="height: 51.5px;"></textarea>
														<p class="check-textarea-message info" id="warningcomment-body-U-5809578176652779520-M-281376742-5809578176652779520" style="display: none;">
															 You may add up to <strong>693</strong> more characters.
														</p>
													</div>
													<input type="hidden" name="comment-typeahead-U-5809578176652779520-M-281376742-5809578176652779520" id="comment-typeahead-U-5809578176652779520-M-281376742-5809578176652779520" class="yui-ac-input" autocomplete="off" value="">
													<div class="mentions-typeahead-container yui-ac" id="typeahead-container-U-5809578176652779520-M-281376742-5809578176652779520">
														<div class="typeahead-results-container mentions-typeahead yui-ac-container">
															<div class="yui-ac-content" style="display: none;">
																<div class="yui-ac-hd" style="display: none;">
																</div>
																<div class="yui-ac-bd">
																	<ul>
																		<li style="display: none;"></li>
																		<li style="display: none;"></li>
																		<li style="display: none;"></li>
																		<li style="display: none;"></li>
																		<li style="display: none;"></li>
																		<li style="display: none;"></li>
																		<li style="display: none;"></li>
																		<li style="display: none;"></li>
																		<li style="display: none;"></li>
																		<li style="display: none;"></li>
																		<li style="display: none;"></li>
																	</ul>
																</div>
																<div class="yui-ac-ft" style="display: none;">
																</div>
															</div>
														</div>
													</div>
													<input type="hidden" name="mentions" id="mentions-data" value="[]">
													<div class="actions">
														<input type="submit" class="post-comment btn-primary" value="Comment">
													</div>
												</form>
											</div>
										</div>
									</div>
									</li>
								</ul>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer">
</div>
</body>
<script src="jquery-1.9.1.js"></script>
<script src="jquery-ui.js"></script>
<script src="validation.js"></script>
</html>