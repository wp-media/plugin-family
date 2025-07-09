jQuery(document).ready(function($) {
	const observer = new MutationObserver(function(mutations) {
		$('.attachment-info').each(function() {
			if ($(this).next('.pluginfamily-promote-imagify').length === 0) {
				const templateHtml = $('#pluginfamily_promote_imagify_uploader_template').html();
				$(templateHtml).insertAfter($(this));
			}
		});
	});

	// Observe the body for added nodes (media modal is added dynamically)
	observer.observe(document.body, { childList: true, subtree: true });
});