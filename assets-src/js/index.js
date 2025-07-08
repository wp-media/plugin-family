import { addFilter } from '@wordpress/hooks';
import { createHigherOrderComponent } from '@wordpress/compose';
import { Fragment } from '@wordpress/element';
import { InspectorControls } from '@wordpress/block-editor';
import {PanelBody, Button, Icon} from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import { plusCircle } from '@wordpress/icons';
import apiFetch from '@wordpress/api-fetch';

let installImagifyButtonHandler = async () => {
	try {
		const response = await fetch(MyAjax.ajax_url, {
			method: 'POST',
			headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
			body: new URLSearchParams({
				action: 'my_custom_action',
				_ajax_nonce: MyAjax.nonce,
				// ...more data as needed
			}).toString(),
		});
		const result = await response.json();
		if (result.success) {
			// Handle success
			console.log(result.data);
		} else {
			// Handle failure
			console.error(result.data);
		}
	} catch (error) {
		console.error('AJAX error:', error);
	}
};

const promoteImagifyButton = createHigherOrderComponent( ( BlockEdit ) => {
	return ( props ) => {
		if ( props.name !== 'core/image' ) {
			return <BlockEdit { ...props } />;
		}

		return (
			<Fragment>
				<BlockEdit { ...props } />
				<InspectorControls>
					<div style={{ display: 'flex', alignItems: 'center', fontWeight: 'bold', marginBottom: '8px' }}>
						<Icon icon={ plusCircle } style={{ marginRight: 8, marginLeft: 8 }} />
						<span>{__('Optimize Your Images', '')}</span>
					</div>
					<PanelBody
						title=""
						initialOpen={true}
					>
						<p style={{marginLeft: 16}}>{__( 'Boost your site’s performance by compressing images with Imagify, developed by WP Rocket.', '' )}</p>
						<Button
							style={{marginLeft: 16}}
							isSecondary
							onClick={ installImagifyButtonHandler }
						>
							{ __( 'Install Imagify Now', 'text-domain' ) }
						</Button>
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