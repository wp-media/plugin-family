jQuery(document).ready(function($) {
	const observer = new MutationObserver(function(mutations) {
		$('.attachment-info .details').each(function() {
			const info = $(this);
			if (info.find('.pluginfamily-promote-imagify').length === 0) {
				const templateHtml = $('#pluginfamily_promote_imagify_uploader_template').html();
				$(templateHtml).appendTo(info);
			}
		});
	});

	// Observe the body for added nodes (media modal is added dynamically)
	observer.observe(document.body, { childList: true, subtree: true });
});