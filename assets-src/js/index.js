import { addFilter } from '@wordpress/hooks';
import { createHigherOrderComponent } from '@wordpress/compose';
import { Fragment, useState } from '@wordpress/element';
import { InspectorControls } from '@wordpress/block-editor';
import {PanelBody, Button, Icon} from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import { plusCircle } from '@wordpress/icons';


const promoteImagifyButton = createHigherOrderComponent( ( BlockEdit ) => {
	return ( props ) => {
		const [loading, setLoading] = useState(false);
		const [success, setSuccess] = useState(false);

		const installImagifyButtonHandler = async () => {
			setLoading(true);
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
					setSuccess(true);
					// Open plugins page in new tab
					window.open(wpmedia_pluginfamily.plugins_page_url, '_blank');
				}
			} catch (error) {
				console.error('AJAX error: ', error);
			}
			setLoading(false);
		};

		if (props.name !== 'core/image') {
			return <BlockEdit { ...props } />;
		}

		return (
			<Fragment>
				<BlockEdit { ...props } />
				<InspectorControls>
					<div style={{ display: 'flex', alignItems: 'center', fontWeight: 'bold', marginBottom: '8px' }}>
						<Icon icon={ plusCircle } style={{ marginRight: 8, marginLeft: 8 }} />
						<span>{__('Optimize Your Images', 'text-domain')}</span>
					</div>
					<PanelBody
						title=""
						initialOpen={true}
					>
						<p style={{marginLeft: 16}}>
							{__('Boost your site’s performance by compressing images with Imagify, developed by WP Rocket.', 'text-domain')}
						</p>
						{ success ? (
							<a
								href={wpmedia_pluginfamily.plugins_page_url}
								target="_blank"
								rel="noopener noreferrer"
								style={{marginLeft: 16, color: 'green', fontWeight: 'bold'}}
							>
								{__('Imagify installed! Click here to start using it.', 'text-domain')}
							</a>
						) : (
							<Button
								style={{marginLeft: 16}}
								isSecondary
								isBusy={loading}
								disabled={loading}
								onClick={ installImagifyButtonHandler }
							>
								{ __( 'Install Imagify Now', 'text-domain' ) }
							</Button>
						)}
					</PanelBody>
				</InspectorControls>
			</Fragment>
		);
	};
}, 'promoteImagifyButton' );

addFilter(
	'editor.BlockEdit',
	'wpmedia-plugin-family/promote-imagify',
	promoteImagifyButton
);