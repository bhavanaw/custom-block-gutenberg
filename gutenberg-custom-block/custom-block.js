
var el = wp.element.createElement;

wp.blocks.registerBlockType('shaiful-gutenberg/notice-block', {
   
   title: 'Custom Block',

   icon: 'universal-access-alt', // Toolbar icon can be either using WP Dashicons or custom SVG

   category: 'common',

   attributes: { // The data this block will be storing

      type: { type: 'string', default: 'default' },
      content: { type: 'array', source: 'children', selector: 'p' }

   },

   
   edit: function(props) {
      
      function updateContent( newdata ) {
         props.setAttributes( { content: newdata } );
      }

      return el( 'div',
         {
            className: 'custom-block'
         },
         
        el(
            wp.editor.RichText,
            {
               tagName: 'p',
               onChange: updateContent,
               value: props.attributes.content,
               placeholder: 'Enter description here...'
            }
         )
      );

   },
   
   save: function(props) {
    

      return el( 'div',
         {
            className: 'custom-block-output'
         },
         el( wp.editor.RichText.Content, {
             tagName: 'p',
            value: props.attributes.content
         })

      );

   }

   
});


