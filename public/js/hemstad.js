

var domainName = 'http://127.0.0.1:8000';
// var domainName = 'http://livechat.paytributeto.com';
var finalUrl = domainName+'/chatview?storeOwnerEmail='+storeOwnerEmail+'&storeOwnerId='+storeOwnerId;

$('<iframe>')                      // Creates the element
.attr('src',finalUrl)
.attr('id','rainbow-chat')
.attr('height',330)
.attr('width',400)
.attr('scrolling','no')
.attr('style','margin: 0px; padding: 0px; background: transparent; border: none; outline: none; display: block; position: fixed; z-index: 999990; bottom: 0; right: 10px; overflow: hidden;')
.appendTo('body');