function custom_pagination( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('page'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?page=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

function sud_itsupport_Customizer($wp_customize){
	$wp_customize->add_panel( 'Sud_Page_Panel', array(

	    'priority'       => 30,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          =>'Customize Option',
		'description'    => 'This Page Is for Customizer Page Setting'
	));

	$wp_customize->add_section('Team_section_id', array(
			'panel' => 'Sud_Page_Panel',
			'title' => 'Our Advisors Option'
	));

	$wp_customize->add_setting("team_name_subtitle_1", array('default' => ''));
	
	$wp_customize->add_control("team_name_subtitle_1", array(
		
		'label'   => "Name $i:",
		'settings'=> "team_name_subtitle_1",
		'section' => 'Team_section_id',
		'type'    => 'text'
			
	));

	$wp_customize->add_section('Team_section_id2', array(
			'panel' => 'Sud_Page_Panel',
			'title' => 'Our Advisors Option'
	));

	$wp_customize->add_setting("team_name_subtitle_2", array('default' => ''));
	
	$wp_customize->add_control("team_name_subtitle_2", array(
		
		'label'   => "Name $i:",
		'settings'=> "team_name_subtitle_2",
		'section' => 'Team_section_id2',
		'type'    => 'text'
			
	));

}
add_action('customize_register', 'sud_itsupport_Customizer');
