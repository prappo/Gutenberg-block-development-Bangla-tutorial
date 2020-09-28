wp.blocks.registerBlockType('my-block/text',{
    title:'Awesome block',
    category: 'text',
    icon: 'marker',

    edit:function(){
        return wp.element.createElement('p','','This is for editor');
    },
    save:function(){
        return wp.element.createElement('p','','This is for frontend');
    }
});