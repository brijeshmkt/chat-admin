

var domainName = 'http://127.0.0.1:8000';
var finalUrl = domainName+'/chatview?storeOwnerEmail='+storeOwnerEmail+'&storeOwnerId='+storeOwnerId;

$('<iframe>')                      // Creates the element
.attr('src',finalUrl)
.attr('id','hemstad-live-chat')
.attr('scrolling','no')
.attr('style', 'position: absolute; bottom: 0; right: 0; height: 372px; width: 410px; border: 0')
.appendTo('body');

