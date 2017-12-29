<?php 
$output = '
	<{{header_type}} class="h-txt">{{content_title}}</{{header_type}}>

';
$css = '
.heading{
   width:100%;
   text-align:{{align_type}};
   margin:{{margin_css}};
   padding:{{padding_css}};
}
.heading .h-txt{
   font-size:{{text-size}};
   color:{{font_color_picker}}; 
   font-weight:{{font_type}};
}
';
return array(
		'label' =>'Heading',
		'name' =>'heading',
		'default_tab'=> 'customizer',
		'tabs' => array(
              'customizer'=>'Content',
              'design'=>'Design',
              'advanced' => 'Advanced'
            ),
		'fields' => array(
						array(		
		 						'type'		=>'text',		
		 						'name'		=>"content_title",		
		 						'label'		=>'Heading',
		           				 'tab'     =>'customizer',
		 						'default'	=>'Heading',	
		           				'content_type'=>'html',
	 						),

	 					array(		
		 						'type'		=>'text',		
		 						'name'		=>"text-size",		
		 						'label'		=>'Font Size',
		           				 'tab'     =>'customizer',
		 						'default'	=>'54px',	
		           				'content_type'=>'css',
	 						),
	 					array(
	 							'type'	=>'select',		
	 							'name'  =>"header_type",		
	 							'label' =>"Heading Type",
								'tab'     =>'customizer',
	 							'default' =>'h1',
	 							'options_details'=>array(
	 												'h1'=>'H1',
	 												'h2'=>'H2',
	 												'h3'=>'H3',
	 												'h4'=>'H4',
	 												'h5'=>'H5',
	 												'h6'=>'H6'
	 													),
	 							'content_type'=>'html',
	 							'output_format'=>''
	 						),
	 					array(		
	 							'type'	=>'select',		
	 							'name'  =>'align_type',		
	 							'label' =>"Alignment",
								'tab'     =>'design',
	 							'default' =>'center',
	 							'options_details'=>array(
	 												'center'    =>'Center',
	 												'left'  	=>'Left',
	 												'right'    =>'Right', 													),
	 							'content_type'=>'css',
	 						),		
						array(
								'type'		=>'color-picker',
								'name'		=>"font_color_picker",
								'label'		=>'Color',
								'tab'		=>'design',
								'default'	=>'#26292c',
								'content_type'=>'css'
							),
						array(		
	 							'type'	=>'select',		
	 							'name'  =>'font_type',		
	 							'label' =>"Font Style",
								'tab'     =>'design',
	 							'default' =>'500',
	 							'options_details'=>array(
                                    '300'   =>'Light',
                                    '400'  	=>'Regular',
                                    '500'  	=>'Medium',
                                    '600'  	=>'Semi Bold',
                                    '700'  	=>'Bold',
                                ),
	 							'content_type'=>'css',
	 						),
						array(
								'type'		=>'spacing',
								'name'		=>"margin_css",
								'label'		=>'Margin',
								'tab'		=>'advanced',
								'default'	=>array(
													'left'=>'0px',
													'right'=>'0px',
													'top'=>'25px',
													'bottom'=>'25px'
													),
								'content_type'=>'css',
							),
							array(
								'type'		=>'spacing',
								'name'		=>"padding_css",
								'label'		=>'Padding',
								'tab'		=>'advanced',
								'default'	=>array(
													'left'=>'0px',
													'right'=>'0px',
													'top'=>'0px',
													'bottom'=>'0px'
												),
								'content_type'=>'css',
							),

			),
		'front_template'=> $output,
		'front_css'=> $css,
	);

?>