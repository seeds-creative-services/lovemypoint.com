(function (blocks, editor, components, i18n, element) {


  var el = element.createElement;


  var svgIcon = el('svg', {width: '24', height: '24', viewBox: '0 0 24 24'},
    el('path', {fill: '#EAA740', d: 'M21 3H3c-1.11 0-2 .89-2 2v12c0 1.1.89 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.11-.9-2-2-2zm0 14H3V5h18v12z'}),
    el('path', {fill: 'none', d: 'M0 0h24v24H0z'})
  );

  blocks.registerBlockType('the-point/banner-image', {


    title: i18n.__('Banner Image', 'the-point'),
    category: 'the-point',
    icon: svgIcon,


    attributes: {

      bannerImage: {
        type: 'string'
      },

      bannerOverlay: {
        type: 'boolean',
        default: 1
      },
      
      bannerOverlayColor: {
        type: 'array',
        default: {r: 82, g: 42, b: 39, a: 0.5}
      }

    },


    edit: function(props) {

      var attributes = props.attributes;

      return [

        el(editor.InspectorControls, { key: 'inspector' },

          el(components.PanelBody, {
            title: i18n.__('Banner Settings'),
            initialOpen: true
          },

            el('p', {}, 'Add video URL to embed video to video embedded video URL.'),

            el('div', {
              class: 'sidebar-options-set'
            }, 

              el(components.TextControl, {
                type: 'text',
                id: 'banner-image',
                label: i18n.__('Background Image'),
                value: attributes.bannerImage,
                onChange: function(value) {
                  props.setAttributes({ bannerImage: value })
                }
              }),

              el(editor.MediaUpload, {

                allowedTypes: ['image'],
                value: attributes.bannerImage,
  
                onSelect: function(media) {
  
                  props.setAttributes({
                    bannerImage: media.url,
                  });
  
                },
  
                render: function(obj) {
  
                  return el(components.Button, {
                    onClick: !attributes.bannerImage ? obj.open : function() {
                      props.setAttributes({ bannerImage: undefined });
                      $('#banner-image').val('');
                    },
                    className: 'button button-large action-upload',
                  }, attributes.bannerImage ? i18n.__('Remove Image') : i18n.__('Select Image'))
                  
                }
  
              })

            ),

            el('div', {
              class: 'sidebar-options-set'
            },

              el(components.CheckboxControl, {
                label: i18n.__('Color Overlay'),
                checked: attributes.bannerOverlay,
                onChange: function(value) {
                  if(value) {
                    props.setAttributes({bannerOverlay: 1});
                  }else{
                    props.setAttributes({bannerOverlay: 0});
                  }
                }
              }),

              el('div', {
                style: !attributes.bannerOverlay ? {display: 'none'} : {display: 'block'}
              },

                el(components.ColorPicker, {
                  className: 'button-icon-color-picker',
                  color: attributes.bannerOverlayColor,
                  value: attributes.bannerOverlayColor,
                  disableAlpha: false,
                  onChangeComplete: function(value) {
                    props.setAttributes({ bannerOverlayColor: value.rgb });
                  }
                })

              )

            )
          
          )

        ),

        el('div', {
          class: attributes.bannerOverlay ? 'banner-image has-overlay' : 'banner-image',
          style: { 'background-color': attributes.bannerOverlay ? 'rgba('+attributes.bannerOverlayColor.r+', '+attributes.bannerOverlayColor.g+', '+attributes.bannerOverlayColor.b+', '+attributes.bannerOverlayColor.a+')' : 'transparent' }
        }, 

          el('div', { 
            class: 'block-content',
            style: attributes.bannerImage ? {display: 'block'} : {display: 'none'}
          },
            
            el(editor.InnerBlocks, {
              allowedBlocks: ['core/heading'],
              template: [
                ['core/heading', {
                  'placeholder': 'Text Content'
                }]
              ],
            })

          ),

          el('figure', {
            'data-ratio': '16/9',
            style: {
              'background-image': attributes.bannerImage ? 'url("'+attributes.bannerImage+'")' : NamedNodeMap
            }
          })

        )

      ];

    },


    save: function(props) {

      return el(editor.InnerBlocks.Content);

    }


  });


})(
  window.wp.blocks,
  window.wp.editor,
  window.wp.components,
  window.wp.i18n,
  window.wp.element
);