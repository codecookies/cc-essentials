<?php

$strings = 'tinyMCE.addI18n({' . _WP_Editors::$mce_locale . ':{
    cce:{
        insert: "'	. esc_js( __( 'Insert CC Shortcodes', 'cc' ) ) . '",
        content_related: "'	. esc_js( __( 'Content related', 'cc' ) ) . '",
        accordion: "'		. esc_js( __( 'Accordion toggle', 'cc' ) ) . '",
        button: "'			. esc_js( __( 'Button', 'cc' ) ) . '",
        iconbox: "'			. esc_js( __( 'Icon box', 'cc' ) ) . '",
        notification: "'	. esc_js( __( 'Notification', 'cc' ) ) . '",
        tabs: "'			. esc_js( __( 'Tabbed content', 'cc' ) ) . '",
        testimonial: "'		. esc_js( __( 'Testimonial / quote', 'cc' ) ) . '",
		layout: "' 			. esc_js( __( 'Layout columns', 'cc' ) ) . '",
        typography_related: "' . esc_js( __( 'Typography related', 'cc' ) ) . '",
        dropcap: "' 		. esc_js( __( 'Dropcap', 'cc' ) ) . '",
        leadparagraph: "' 	. esc_js( __( 'Lead paragraph', 'cc' ) ) . '",
        label: "' 			. esc_js( __( 'Label', 'cc' ) ) . '",
        misc_elements: "' 	. esc_js( __( 'Misc. elements', 'cc' ) ) . '",
        image: "' 			. esc_js( __( 'Image', 'cc' ) ) . '",
        video: "' 			. esc_js( __( 'Video', 'cc' ) ) . '",
        hdivider: "' . esc_js( __( 'Horizontal divider', 'cc' ) ) . '",
        map: "' 			. esc_js( __( 'Google map', 'cc' ) ) . '",
        
    }
}})';

?>