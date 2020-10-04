

var domainName = 'http://127.0.0.1:8000';
// var domainName = 'http://livechat.paytributeto.com';
var finalUrl = domainName+'/chatview?storeOwnerEmail='+storeOwnerEmail+'&storeOwnerId='+storeOwnerId;

$('<iframe>')                      // Creates the element
.attr('src',finalUrl)
.attr('id','hemstad-live-chat')
// .attr('height',430)
// .attr('width',400)
.attr('scrolling','no')
// .attr('style','margin: 0px; padding: 0px; background: transparent; border: none; outline: none; display: block; position: fixed; z-index: 999990; bottom: 0; right: 10px; overflow: hidden;')
// .attr('style', 'left: 0; bottom: 0; position: absolute;  width:100%; height:100%;')
.attr('style', 'position: absolute; bottom: 0; right: 0; height: 372px; width: 410px; border: 0')
.appendTo('body');

