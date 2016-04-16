<?php
/**
 * Configuration data for CCE Shortcodes popup in the post-editor.
 *
 * @package    CC Essentials
 * @subpackage Shortcodes
 * @author     Jal Desai
 */

global $cce;

/* ===================================================================
/*	Content
/* =================================================================== */

/* Accordion toggle */

$cce_shortcodes['accordion'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'type'  => 'text',
			'label' => __( 'Toggle title', 'cc' ),
			'desc'  => __( 'Add a title for the toggle content.', 'cc' ),
			'std'   => 'Title',
		),
		'content' => array(
			'std'   => 'Content',
			'type'  => 'textarea',
			'label' => __( 'Toggle content', 'cc' ),
			'desc'  => __( 'Add the toggle content (HTML is allowed).', 'cc' ),
		),
		'state' => array(
			'type'    => 'select',
			'label'   => __( 'Initial state', 'cc' ),
			'desc'    => __( 'Choose whether the toggle is open or closed on page load.', 'cc' ),
			'options' => array(
				'open'   => __( 'Open', 'cc' ),
				'closed' => __( 'Closed', 'cc' )
			)
		),
	),
	'shortcode'   => '[cce_toggle title="{{title}}" state="{{state}}"]{{content}}[/cce_toggle]',
	'popup_title' => __( 'Accordion toggle settings', 'cc' )
);


/* Button */

$cce_shortcodes['button'] = array(
	'no_preview' => true,
	'params' => array(
		'content' => array(
			'std'   => 'Button',
			'type'  => 'text',
			'label' => __( 'Button text', 'cc' ),
			'desc'  => __( 'The text that appears on the button.', 'cc' ),
		),
		'url' => array(
			'std'   => '',
			'type'  => 'text',
			'label' => __( 'URL', 'cc' ),
			'desc'  => __( 'Link to navigate to upon clicking the button. For e.g. http://google.com', 'cc' )
		),
		'target' => array(
			'type'    => 'select',
			'label'   => __( 'Open in a new tab/window?', 'cc' ),
			'desc'    => __( 'Should the link be opened in a new window or tab?', 'cc' ),
			'std'     => '_self',
			'options' => array(
				'_self'  => __( 'No, open link in the same tab/window', 'cc' ),
				'_blank' => __( 'Yes, open link in a new tab/window', 'cc' )
			)
		),
		'color' => array(
			'type'    => 'select',
			'label'   => __( 'Color', 'cc' ),
			'desc'    => __( 'Pick a background color for the button.', 'cc' ),
			'std'     => 'Blue',
			'options' => array(
				'red'		=> __( 'Red', 'cc' ),
				'green'		=> __( 'Green', 'cc' ),
				'yellow'	=> __( 'Yellow', 'cc' ),
				'blue'		=> __( 'Blue', 'cc' ),
				'black'		=> __( 'Black', 'cc' ),
				'white'		=> __( 'White', 'cc' ),
				'gray'		=> __( 'Gray', 'cc' ),
				'primary'	=> __( 'As per theme', 'cc')
			)
		),
		'size' => array(
			'type'    => 'select',
			'label'   => __( 'Size', 'cc' ),
			'desc'    => __( 'Choose the size of the button.', 'cc' ),
			'std'     => 'medium',
			'options' => array(
				'small'  => __( 'Small', 'cc' ),
				'medium' => __( 'Medium', 'cc' ),
				'large'  => __( 'Large', 'cc' )
			)
		),
		'shape' => array(
			'type'    => 'select',
			'label'   => __( 'Shape', 'cc' ),
			'desc'    => __( 'Choose the shape of the button.', 'cc' ),
			'std'	  => __( 'rounded', 'cc'),
			'options' => array(
				'rounded'	=> __( 'Rounded', 'cc' ),
				'square'	=> __( 'Square', 'cc' ),
				'oval'		=> __( 'Oval', 'cc' )
			)
		),
		'icon' => array(
			'std'   => '',
			'type'  => 'icons',
			'label' => __( 'Icon', 'cc' ),
			'desc'  => __( 'Choose an icon (optional).', 'cc' )
		),
		'icon_order' => array(
			'type'    => 'select',
			'label'   => __( 'Icon placement', 'cc' ),
			'desc'    => __( 'Choose whether the icon be displayed before or after the button text.', 'cc' ),
			'std'     => 'before',
			'options' => array(
				'before' => __( 'Before text', 'cc' ),
				'after'  => __( 'After text', 'cc' )
			)
		),
		'alignment' => array(
			'type'    => 'select',
			'label'   => __( 'Alignment', 'cc' ),
			'desc'    => __( 'Choose the alignment of the button.', 'cc' ),
			'std'	  => __( 'none', 'cc'),
			'options' => array(
				'none'		=> __( 'None', 'cc' ),
				'left'		=> __( 'Left', 'cc' ),
				'right'		=> __( 'Right', 'cc' )
			)
		)
	),
	'shortcode'   => '[cce_button url="{{url}}" target="{{target}}" color="{{color}}" size="{{size}}"  shape="{{shape}}" icon="{{icon}}" icon_order="{{icon_order}}" alignment="{{alignment}}"]{{content}}[/cce_button]',
	'popup_title' => __( 'Button settings', 'cc' )
);


/* Icon box */

$cce_shortcodes['iconbox'] = array(
	'no_preview' => true,
	'params' => array(
		'icon' => array(
			'std'   => '',
			'type'  => 'icons',
			'label' => __( 'Icon', 'cc' ),
			'desc'  => __( 'Choose an icon.', 'cc' )
		),
		'icon_size' => array(
			'type'    => 'select',
			'label'   => __( 'Icon size', 'cc' ),
			'desc'    => __( 'Select the appropriate size of the icon.', 'cc' ),
			'std'     => '48px',
			'options' => array(
				'32px'  => __( '32px', 'cc' ),
				'48px'  => __( '48px', 'cc' ),
				'64px'  => __( '64px', 'cc' ),
				'72px'  => __( '72px', 'cc' ),
				'96px'  => __( '96px', 'cc' ),
				'128px' => __( '128px', 'cc' ),
				'164px' => __( '164px', 'cc' ),
				'192px' => __( '192px', 'cc' ),
			)
		),
		'icon_position' => array(
			'type'    => 'select',
			'label'   => __( 'Icon position', 'cc' ),
			'desc'    => __( 'Choose the position of the icon.', 'cc' ),
			'std'     => 'top',
			'options' => array(
				'left'=> __( 'Left', 'cc' ),
				'top' => __( 'Top', 'cc' )
			)
		),
		'title' => array(
			'std'   => '',
			'type'  => 'text',
			'label' => __( 'Title', 'cc' ),
			'desc'  => __( 'Give a title to the icon-box.', 'cc' )
		),
		'content' => array(
			'std'   => '',
			'type'  => 'textarea',
			'label' => __( 'Content', 'cc' ),
			'desc'  => __( 'Enter the content of the icon-box.', 'cc' )
		)
		
	),
	'shortcode'   => '[cce_iconbox icon="{{icon}}" icon_size="{{icon_size}}" icon_position="{{icon_position}}" title="{{title}}"]{{content}}[/cce_iconbox]',
	'popup_title' => __( 'Icon-box settings', 'cc' ),
);


/* Notification */

$cce_shortcodes['notification'] = array(
	'no_preview' => true,
	'params' => array(
		'type' => array(
			'type'    => 'select',
			'label'   => __( 'Notification type', 'cc' ),
			'desc'    => __( 'Choose the type of notification.', 'cc' ),
			'std'     => 'info',
			'options' => array(
				'info'		=> __( 'Info', 'cc' ),
				'success' 	=> __( 'Success', 'cc' ),
				'warning' 	=> __( 'Warning', 'cc' ),
				'danger' 	=> __( 'Error', 'cc' )
			)
		),
		'title' => array(
			'std'   => '',
			'type'  => 'text',
			'label' => __( 'Notification title (optional)', 'cc' ),
			'desc'  => __( 'The title of the notification message.', 'cc' )
		),
		'content' => array(
			'std'   => '',
			'type'  => 'textarea',
			'label' => __( 'Notification message', 'cc' ),
			'desc'  => __( 'The content of the notification message.', 'cc' )
		),
		'dismissible' => array(
			'type'    => 'select',
			'label'   => __( 'Show close button?', 'cc' ),
			'desc'    => __( 'Should the notification box show the close (X) button?', 'cc' ),
			'std'     => 'no',
			'options' => array(
				'no'  => __( 'No', 'cc' ),
				'yes' => __( 'Yes', 'cc' )
			)
		)		
	),
	'shortcode'   => '[cce_notification type="{{type}}" title="{{title}}" dismissible="{{dismissible}}"]{{content}}[/cce_notification]',
	'popup_title' => __( 'Notification settings', 'cc' ),
);


/* Tabbed content */

$cce_shortcodes['tabs'] = array(
	'no_preview'  => true,
	'params' => array(
		'position' => array(
			'type'    => 'select',
			'label'   => __( 'Position of tabs', 'cc' ),
			'desc'    => __( 'Select the placement direction of the tabs.', 'cc' ),
			'std'	  => __( 'top', 'cc' ),
			'options' => array(
				'top' => __( 'Top', 'cc' ),
				'left' => __( 'Left', 'cc' )
			)
		)
	),
	'child_shortcode' => array(
		'params' => array(
			'title' => array(
				'std'   => 'Title',
				'type'  => 'text',
				'label' => __( 'Tab title', 'cc' ),
				'desc'  => __( 'Set a title of this tab.', 'cc' ),
			),
			'content' => array(
				'std'     => 'Tab content',
				'type'    => 'textarea',
				'label'   => __( 'Tab Content', 'cc' ),
				'desc'    => __( 'Add content to this tab.', 'cc' )
			)
		),
		'shortcode'    => '[cce_tab title="{{title}}"]{{content}}[/cce_tab]',
		'clone_button' => __( 'Add a tab', 'cc' )
	),
	'shortcode'   => '[cce_tabs position="{{position}}"]{{child_shortcode}}[/cce_tabs]',
	'popup_title' => __( 'Tabbed content settings', 'cc' )
);


/* Testimonial / quote */

$cce_shortcodes['testimonial'] = array(
	'no_preview' => true,
	'params' => array(
		'name' => array(
			'std'   => '',
			'type'  => 'text',
			'label' => __( 'Author’s name', 'cc' ),
			'desc'  => __( 'Enter the author&rsquo;s name.', 'cc' )
		),
		'content' => array(
			'std'   => '',
			'type'  => 'textarea',
			'label' => __( 'Testimonial / quote', 'cc' ),
			'desc'  => __( 'The actual testimonial/quotation.', 'cc' )
		),
		'image' => array(
			'std'   => '',
			'type'  => 'image',
			'label' => __( 'Author’s image (optional)', 'cc' ),
			'desc'  => __( 'Link to the JPG/PNG image file.', 'cc' )
		),
		'subtitle' => array(
			'std'   => '',
			'type'  => 'text',
			'label' => __( 'Subtitle (optional)', 'cc' ),
			'desc'  => __( 'A small description about the author. For eg. Founder & CEO, Google.', 'cc' )
		),
		'url' => array(
			'std'   => '',
			'type'  => 'text',
			'label' => __( 'URL (optional)', 'cc' ),
			'desc'  => __( 'Link to author&rsquo;s site.', 'cc' )
		)		
	),
	'shortcode'   => '[cce_testimonial name="{{name}}" image="{{image}}" subtitle="{{subtitle}}" url="{{url}}"]{{content}}[/cce_testimonial]',
	'popup_title' => __( 'Testimonial / quote settings', 'cc' ),
);


/* ===================================================================
/*	Layout columns
/* =================================================================== */

$cce_shortcodes['layout'] = array(
	'params'      => array(),
	'no_preview'  => true,
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type'    => 'select',
				'label'   => __( 'Column type', 'cc' ),
				'desc'    => __( 'Choose the type of the column based on its width.', 'cc' ),
				'options' => array(
					'cce_one_third'         => __( 'One Third', 'cc' ),
					'cce_one_third_last'    => __( 'One Third Last', 'cc' ),
					'cce_two_third'         => __( 'Two Thirds', 'cc' ),
					'cce_two_third_last'    => __( 'Two Thirds Last', 'cc' ),
					'cce_one_half'          => __( 'One Half', 'cc' ),
					'cce_one_half_last'     => __( 'One Half Last', 'cc' ),
					'cce_one_fourth'        => __( 'One Fourth', 'cc' ),
					'cce_one_fourth_last'   => __( 'One Fourth Last', 'cc' ),
					'cce_three_fourth'      => __( 'Three Fourth', 'cc' ),
					'cce_three_fourth_last' => __( 'Three Fourth Last', 'cc' )
				)
			),
			'content' => array(
				'std'   => '',
				'type'  => 'textarea',
				'label' => __( 'Column content', 'cc' ),
				'desc'  => __( 'Add content for this column.', 'cc' ),
			)
		),
		'shortcode'    => '[{{column}}]{{content}}[/{{column}}] ',
		'clone_button' => __( 'Add column', 'cc' )
	),
	'shortcode'   => '[cce_columns]{{child_shortcode}}[/cce_columns]', // as there is no wrapper shortcode
	'popup_title' => __( 'Layout columns', 'cc' ),
);


/* ===================================================================
/*	Typography related
/* =================================================================== */

/* Dropcap */

$cce_shortcodes['dropcap'] = array(
	'no_preview' => true,
	'params' => array(
		'content' => array(
			'std'   => 'A',
			'type'  => 'text',
			'label' => __( 'Dropcap letter', 'cc' ),
			'desc'  => __( 'Specify the letter to be dropcapped. Usually this is the first letter of a paragraph.', 'cc' )
		),
		'bgcolor' => array(
			'std'	  => '',
			'type'    => 'color',
			'label'   => __( 'Background color', 'cc' ),
			'desc'    => __( 'Select the background color for the dropcap letter.', 'cc' )
		),
		'color' => array(
			'std'	  => '',
			'type'    => 'color',
			'label'   => __( 'Text color', 'cc' ),
			'desc'    => __( 'Select the foreground (text) color for the dropcap letter.', 'cc' )
		),
		'shape' => array(
			'type'    => 'select',
			'label'   => __( 'Shape', 'cc' ),
			'desc'    => __( 'Select the shape of the background.', 'cc' ),
			'std'	  => 'round',
			'options' => array(
				'round'	=> __( 'Round', 'cc' ),
				'square'	=> __( 'Square', 'cc' )
			)
		),
		'size' => array(
			'type'  => 'select',
			'label' => __( 'Font size', 'cc' ),
			'desc'  => __( 'Choose a font-size for the dropcap letter.', 'cc' ),
			'std'   => '3rem',
			'options' => array(
				'2rem'	=> __( 'Big', 'cc' ),
				'3rem'	=> __( 'Large', 'cc' ),
				'4.5rem'=> __( 'Huge', 'cc' ),
				'6.2rem'=> __( 'Massive', 'cc' ),
				'9rem'	=> __( 'Are you crazy? :O', 'cc' )
			)
		),
	),
	'shortcode'   => '[cce_dropcap bgcolor="{{bgcolor}}" color="{{color}}" shape="{{shape}}" size="{{size}}"]{{content}}[/cce_dropcap]',
	'popup_title' => __( 'Dropcap settings', 'cc' )
);


/* Lead paragraph */

$cce_shortcodes['leadparagraph'] = array(
	'no_preview' => true,
	'params' => array(
		'content' => array(
			'std'   => '',
			'type'  => 'textarea',
			'label' => __( 'Paragraph content', 'cc' ),
			'desc'  => __( 'Write the content of the paragraph here.', 'cc' )
		),
		'size' => array(
			'type'    => 'select',
			'label'   => __( 'Font size', 'cc' ),
			'desc'    => __( 'Select how large the font-size of this paragraph should be compared to the rest of the content.', 'cc' ),
			'std'	  => '160%',
			'options' => array(
				'125%'	=> __( '25% larger', 'cc' ),
				'150%'	=> __( '50% larger', 'cc' ),
				'160%'	=> __( '60% larger', 'cc' ),
				'175%'	=> __( '75% larger', 'cc' ),
				'200%'	=> __( '100% larger', 'cc' )
			)
		),
		'color' => array(
			'std'	  => '',
			'type'    => 'color',
			'label'   => __( 'Text color (optional)', 'cc' ),
			'desc'    => __( 'Select the text-color for the paragraph.', 'cc' )
		)		
	),
	'shortcode'   => '[cce_leadparagraph size="{{size}}" color="{{color}}"]{{content}}[/cce_leadparagraph]',
	'popup_title' => __( 'Lead paragraph settings', 'cc' )
);

/* Label */

$cce_shortcodes['label'] = array(
	'no_preview' => true,
	'params' => array(
		'content' => array(
			'std'   => '',
			'type'  => 'text',
			'label' => __( 'Label text', 'cc' ),
			'desc'  => __( 'Enter text to be shown as label.', 'cc' )
		),
		'color' => array(
			'type'    => 'select',
			'label'   => __( 'Color', 'cc' ),
			'desc'    => __( 'Choose the color of the label.', 'cc' ),
			'std'	  => 'blue',
			'options' => array(
				'red'		=> __( 'Red', 'cc' ),
				'green'		=> __( 'Green', 'cc' ),
				'yellow'	=> __( 'Yellow', 'cc' ),
				'black'		=> __( 'Black', 'cc' ),
				'blue'		=> __( 'Blue', 'cc' ),
				'gray'		=> __( 'Gray', 'cc' )
			)
		),
		'shape' => array(
			'type'    => 'select',
			'label'   => __( 'Shape', 'cc' ),
			'desc'    => __( 'Choose the shape of the label.', 'cc' ),
			'std'	  => __( 'rounded', 'cc'),
			'options' => array(
				'rounded'	=> __( 'Rounded', 'cc' ),
				'square'	=> __( 'Square', 'cc' ),
				'oval'		=> __( 'Oval', 'cc' )
			)
		)		
	),
	'shortcode'   => '[cce_label shape="{{shape}}" color="{{color}}"]{{content}}[/cce_label]',
	'popup_title' => __( 'Label settings', 'cc' )
);


/* ===================================================================
/*	Misc. elements
/* =================================================================== */

/* Image shortcode */

$cce_shortcodes['image'] = array(
	'no_preview' => true,
	'params' => array(
		'src' => array(
			'std'   => '',
			'type'  => 'image',
			'label' => __( 'Image', 'cc' ),
			'desc'  => __( 'Choose an image.', 'cc' )
		),
		'effect' => array(
			'type'    => 'select',
			'label'   => __( 'Effect', 'cc' ),
			'desc'    => __( 'This uses CSS3 filters which may not work on older browsers.', 'cc' ),
			'std'     => 'no-filter',
			'options' => array(
				'no-filter'  => __( 'No filter', 'cc' ),
				'grayscale'  => __( 'Grayscale', 'cc' ),
				'sepia'      => __( 'Sepia', 'cc' ),
				'blur'       => __( 'Blur', 'cc' ),
				'hue-rotate' => __( 'Hue Rotate', 'cc' ),
				'contrast'   => __( 'Contrast', 'cc' ),
				'brightness' => __( 'Brightness', 'cc' ),
				'invert'     => __( 'Invert', 'cc' ),
			)
		),
		'alignment' => array(
			'type'    => 'select',
			'label'   => __( 'Alignment', 'cc' ),
			'desc'    => __( 'Choose the alignment of the image.', 'cc' ),
			'std'     => 'none',
			'options' => array(
				'none'   => __( 'None', 'cc' ),
				'left'   => __( 'Left', 'cc' ),
				'center' => __( 'Center', 'cc' ),
				'right'  => __( 'Right', 'cc' )
			)
		),
		'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'URL (Optional)', 'cc' ),
			'desc' => __( 'Link to navigate to upon clicking the image. For e.g. http://google.com', 'cc' )
		)
	),
	'shortcode'   => '[cce_image src="{{src}}" effect="{{effect}}" alignment="{{alignment}}" url="{{url}}"]',
	'popup_title' => __( 'Insert an image', 'cc' )
);


/* Video shortcode */

$cce_shortcodes['video'] = array(
	'no_preview' => true,
	'params' => array(
		'src' => array(
			'std'   => '',
			'type'  => 'video',
			'label' => __( 'Video', 'cc' ),
			'desc'  => sprintf( __( 'Upload a video or choose an existing video from the Media Library. You can also paste a video link from sites like Youtube, Vimeo, TED, etc. Full list of supported sites can be found <a target="_blank" href="%1$s">here</a>.', 'cc' ), esc_url( 'http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F' ) )
		)
	),
	'shortcode' => '[cce_video src="{{src}}"]',
	'popup_title' => __( 'Insert a video', 'cc' )
);


/* Horizontal divider */

$cce_shortcodes['hdivider'] = array(
	'no_preview' => true,
	'params' => array(
		'type' => array(
			'type'    => 'select',
			'label'   => __( 'Type', 'cc' ),
			'desc'    => __( 'Select the type of the horizontal divider.', 'cc' ),
			'std'	  => __( 'single', 'cc'),
			'options' => array(
				'single'		=> __( 'Single', 'cc' ),
				'double'		=> __( 'Double', 'cc' ),
				'single-dashed'	=> __( 'Single-dashed', 'cc' ),
				'double-dashed'	=> __( 'Double-dashed', 'cc' ),
				'single-dotted'	=> __( 'Single-dotted', 'cc' ),
				'double-dotted'	=> __( 'Double-dotted', 'cc' )
			)
		),
		'length' => array(
			'type'    => 'select',
			'label'   => __( 'Length', 'cc' ),
			'desc'    => __( 'Select the length of the horizontal divider.', 'cc' ),
			'std'	  => __( 'long', 'cc'),
			'options' => array(
				'long'	=> __( 'Long', 'cc' ),
				'short'	=> __( 'Short', 'cc' )
			)
		)
	),
	'shortcode' => '[cce_hdivider type="{{type}}" length="{{length}}"]',
	'popup_title' => __( 'Horizontal divider settings', 'cc' )
);

/* Google map shortcode */

$cce_shortcodes['map'] = array(
	'no_preview' => true,
	'params' => array(
		'latlong' => array(
			'std'   => '',
			'type'  => 'map',
			'label' => __( 'Latitude / Longitude', 'cc' ),
			'desc'  => __( 'Drag and drop the map marker to select the exact location.', 'cc' )
		),
		'width' => array(
			'std'   => '100%',
			'type'  => 'text',
			'label' => __( 'Width', 'cc' ),
			'desc'  => __( 'Enter the width of the map in px, em or %. Default is <i>100%</i>.', 'cc' )
		),
		'height' => array(
			'std'   => '350px',
			'type'  => 'text',
			'label' => __( 'Height', 'cc' ),
			'desc'  => __( 'Enter the width of the map in px, em or %. Default is <i>350px</i>.', 'cc' )
		),
		'zoom' => array(
			'std'   => '15',
			'type'  => 'text',
			'label' => __( 'Zoom level', 'cc' ),
			'desc'  => __( 'Enter the map zoom level between 0-21. Default is <i>15</i>.', 'cc' )
		),
		'style' => array(
			'std'     => 'none',
			'type'    => 'select',
			'label'   => __( 'Map style', 'cc' ),
			'desc'    => __( 'Choose a map style.', 'cc' ),
			'options' => array(
				'none'             => __( 'None', 'cc' ),
				'pale_dawn'        => __( 'Pale Dawn', 'cc' ),
				'subtle_grayscale' => __( 'Subtle Grayscale', 'cc' ),
				'bright_bubbly'    => __( 'Bright & Bubbly', 'cc' ),
				'greyscale'        => __( 'Grayscale', 'cc' ),
				'mixed'            => __( 'Mixed', 'cc' )
			)
		),
	),
	'shortcode'   => '[cce_map location="{{latlong}}" width="{{width}}" height="{{height}}" zoom="{{zoom}}" style="{{style}}"]',
	'popup_title' => __( 'Insert a Google map', 'cc' )
);