jQuery(document).ready(function($) {
	const observer = new MutationObserver(function(mutations) {
		$('.attachment-info').each(function() {
			if ($(this).next('.my-custom-message').length === 0) {
				$('<div class="my-custom-message" style="padding:8px 0;color:#2271b1;font-weight:bold;">')
					.text('📢 Optimize this image for web performance!')
					.insertAfter($(this));
			}
		});
	});

	// Observe the body for added nodes (media modal is added dynamically)
	observer.observe(document.body, { childList: true, subtree: true });
});