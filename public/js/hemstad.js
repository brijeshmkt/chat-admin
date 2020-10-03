$('<iframe>')                      // Creates the element
.attr('src','http://127.0.0.1:8000/chatview?storeOwnerEmail='+storeOwnerEmail+'&storeOwnerId='+storeOwnerId)
.attr('id','rainbow-chat')
.attr('height',800)
.attr('width',400)
.attr('scrolling','no')
.attr('style','margin: 0px; padding: 0px; background: transparent; border: none; outline: none; display: block; position: fixed; z-index: 999990; bottom: -354px; right: 50px; overflow: hidden;')
.appendTo('body');