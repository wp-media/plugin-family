jQuery(document).ready(function($) {
	// When the media modal opens, hook into the attachment details rendering
	var origAttachmentDetails = wp.media.view.Attachment.Details.prototype.render;

	wp.media.view.Attachment.Details.prototype.render = function() {
		// Call original render
		var result = origAttachmentDetails.apply(this, arguments);

		// Wait for the DOM to update
		setTimeout(() => {
			var $details = this.$('.attachment-details');
			if ($details.length && !$details.find('.my-custom-message').length) {
				// Insert your message
				$('<div class="my-custom-message" style="padding:8px 0;color:#2271b1;font-weight:bold;">')
					.text('📢 Optimize this image for web performance!')
					.insertAfter($details);
			}
		}, 10);

		return result;
	};
});