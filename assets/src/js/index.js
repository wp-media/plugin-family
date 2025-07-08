import { addFilter } from '@wordpress/hooks';
import { createHigherOrderComponent } from '@wordpress/compose';
import { Fragment } from '@wordpress/element';
import { InspectorControls } from '@wordpress/block-editor';
import {PanelBody, Button, Icon} from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import { plusCircle } from '@wordpress/icons';

const withImageBlockButton = createHigherOrderComponent( ( BlockEdit ) => {
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
							onClick={ () => alert( 'Button clicked!' ) }
						>
							{ __( 'Install Imagify Now \n', 'text-domain' ) }
						</Button>
					</PanelBody>

				</InspectorControls>
			</Fragment>
		);
	};
}, 'withImageBlockButton' );

addFilter(
	'editor.BlockEdit',
	'my-namespace/with-image-block-button',
	withImageBlockButton
);