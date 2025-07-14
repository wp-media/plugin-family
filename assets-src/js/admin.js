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

	$(document).on('click', '#pluginfamily_install_imagify', async (event) => {
		event.preventDefault();

		const btn = $('#pluginfamily_install_imagify');
		btn.fadeTo('slow', 0.5);

		try {
			const response = await fetch(wpmedia_pluginfamily.ajax_url, {
				method: 'POST',
				headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
				body: new URLSearchParams({
					action: 'install_imagify',
					_ajax_nonce: wpmedia_pluginfamily.nonce,
				}).toString(),
			});
			const result = await response.json();
			if (result.success) {
				btn.text(result.data).attr('id', '');
				// Try to open the new tab
				const win = window.open(wpmedia_pluginfamily.plugins_page_url, '_blank');
				if (!win) {
					// Fallback: show a manual link
					if ($('#pluginfamily_open_plugins_fallback').length === 0) {
						$('<a>')
							.attr({
								href: wpmedia_pluginfamily.plugins_page_url,
								target: '_blank',
								id: 'pluginfamily_open_plugins_fallback',
							})
							.text(result.data)
							.insertAfter(btn);
					}
				}
				btn.remove();
			}
		} catch (error) {
			console.error('AJAX error: ', error);
		}
		btn.fadeTo('slow', 1);
	});
});