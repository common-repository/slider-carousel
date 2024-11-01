(function() {
	var gtcolor = '';
	var gtcolorsc = '';
	var gtcolorbg = '';
	tinymce.PluginManager.add('gt_filter_gallery_tinymce_button', function( editor, url ) {
		editor.addButton( 'gt_filter_gallery_tinymce_button', {
		title: 'GT Gallery',
		type: 'menubutton',
		//icon: false,
		id: 'gt-wrap',
			menu: [			
			/*GT Slider popup starts here*/
				{
				text: 'SC Slider',
				value: 'SC Slider',
				id: 'gt-slider',
				onclick: function() {
					editor.insertContent( '[sc_slider]');
				// editor.windowManager.open( {
				// title: 'GT Slider Settings',
				// classes: 'gt-slider-popup',
				// body: [
				// ],
				// onsubmit: function( e ) {
				// editor.insertContent( '[sc_slider]');
				// }
				// });
				} /*GT Slider Popup ends here*/},
			]	
		});
		
	});
})();

//Image uploader code 
jQuery(document).ready(function($){
    $(document).on('click', '.mce-gt_upload_button', upload_image_tinymce);

    function upload_image_tinymce(e) {
        e.preventDefault();
        var $input_field = $('.mce-gt_input_image');
        var custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Add Image',
            button: {
                text: 'Add Image'
            },
            multiple: false
        });
        custom_uploader.on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $input_field.val(attachment.url);
        });
        custom_uploader.open();
    }
});
jQuery(document).ready(function($){
    $(document).on('click', '.mce-gt_upload_button', upload_image_tinymce);

    function upload_image_tinymce( e ) {
        e.preventDefault();
        var $input_field = $('.mce-gt_input_image');
        var custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Add Image',
            button: {
                text: 'Add Image'
            },
            multiple: false
        });
        custom_uploader.on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $input_field.val(attachment.url);
        });
        custom_uploader.open();
    }
});			