!function(){var e={270:function(e){e.exports=function(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r},e.exports.default=e.exports,e.exports.__esModule=!0},232:function(e,t,n){var r=n(270);e.exports=function(e){if(Array.isArray(e))return r(e)},e.exports.default=e.exports,e.exports.__esModule=!0},119:function(e,t,n){"use strict";function r(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}n.d(t,{Z:function(){return r}})},560:function(e,t,n){"use strict";function r(){return(r=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e}).apply(this,arguments)}n.d(t,{Z:function(){return r}})},394:function(e,t,n){"use strict";n.d(t,{Z:function(){return i}});var r=n(119);function o(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function i(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?o(Object(n),!0).forEach((function(t){(0,r.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):o(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}},557:function(e){e.exports=function(e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e))return Array.from(e)},e.exports.default=e.exports,e.exports.__esModule=!0},359:function(e){e.exports=function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")},e.exports.default=e.exports,e.exports.__esModule=!0},182:function(e,t,n){var r=n(232),o=n(557),i=n(487),s=n(359);e.exports=function(e){return r(e)||o(e)||i(e)||s()},e.exports.default=e.exports,e.exports.__esModule=!0},487:function(e,t,n){var r=n(270);e.exports=function(e,t){if(e){if("string"==typeof e)return r(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?r(e,t):void 0}},e.exports.default=e.exports,e.exports.__esModule=!0},421:function(e,t){"use strict";var n=decodeURIComponent,r=encodeURIComponent,o=/; */,i=/^[\u0009\u0020-\u007e\u0080-\u00ff]+$/;function s(e,t){try{return t(e)}catch(n){return e}}},699:function(e){"use strict";var t,n="object"==typeof Reflect?Reflect:null,r=n&&"function"==typeof n.apply?n.apply:function(e,t,n){return Function.prototype.apply.call(e,t,n)};t=n&&"function"==typeof n.ownKeys?n.ownKeys:Object.getOwnPropertySymbols?function(e){return Object.getOwnPropertyNames(e).concat(Object.getOwnPropertySymbols(e))}:function(e){return Object.getOwnPropertyNames(e)};var o=Number.isNaN||function(e){return e!=e};function i(){i.init.call(this)}e.exports=i,e.exports.once=function(e,t){return new Promise((function(n,r){function o(){void 0!==i&&e.removeListener("error",i),n([].slice.call(arguments))}var i;"error"!==t&&(i=function(n){e.removeListener(t,o),r(n)},e.once("error",i)),e.once(t,o)}))},i.EventEmitter=i,i.prototype._events=void 0,i.prototype._eventsCount=0,i.prototype._maxListeners=void 0;var s=10;function a(e){if("function"!=typeof e)throw new TypeError('The "listener" argument must be of type Function. Received type '+typeof e)}function c(e){return void 0===e._maxListeners?i.defaultMaxListeners:e._maxListeners}function u(e,t,n,r){var o,i,s,u;if(a(n),void 0===(i=e._events)?(i=e._events=Object.create(null),e._eventsCount=0):(void 0!==i.newListener&&(e.emit("newListener",t,n.listener?n.listener:n),i=e._events),s=i[t]),void 0===s)s=i[t]=n,++e._eventsCount;else if("function"==typeof s?s=i[t]=r?[n,s]:[s,n]:r?s.unshift(n):s.push(n),(o=c(e))>0&&s.length>o&&!s.warned){s.warned=!0;var l=new Error("Possible EventEmitter memory leak detected. "+s.length+" "+String(t)+" listeners added. Use emitter.setMaxListeners() to increase limit");l.name="MaxListenersExceededWarning",l.emitter=e,l.type=t,l.count=s.length,u=l,console&&console.warn&&console.warn(u)}return e}function l(){if(!this.fired)return this.target.removeListener(this.type,this.wrapFn),this.fired=!0,0===arguments.length?this.listener.call(this.target):this.listener.apply(this.target,arguments)}function f(e,t,n){var r={fired:!1,wrapFn:void 0,target:e,type:t,listener:n},o=l.bind(r);return o.listener=n,r.wrapFn=o,o}function p(e,t,n){var r=e._events;if(void 0===r)return[];var o=r[t];return void 0===o?[]:"function"==typeof o?n?[o.listener||o]:[o]:n?function(e){for(var t=new Array(e.length),n=0;n<t.length;++n)t[n]=e[n].listener||e[n];return t}(o):d(o,o.length)}function h(e){var t=this._events;if(void 0!==t){var n=t[e];if("function"==typeof n)return 1;if(void 0!==n)return n.length}return 0}function d(e,t){for(var n=new Array(t),r=0;r<t;++r)n[r]=e[r];return n}Object.defineProperty(i,"defaultMaxListeners",{enumerable:!0,get:function(){return s},set:function(e){if("number"!=typeof e||e<0||o(e))throw new RangeError('The value of "defaultMaxListeners" is out of range. It must be a non-negative number. Received '+e+".");s=e}}),i.init=function(){void 0!==this._events&&this._events!==Object.getPrototypeOf(this)._events||(this._events=Object.create(null),this._eventsCount=0),this._maxListeners=this._maxListeners||void 0},i.prototype.setMaxListeners=function(e){if("number"!=typeof e||e<0||o(e))throw new RangeError('The value of "n" is out of range. It must be a non-negative number. Received '+e+".");return this._maxListeners=e,this},i.prototype.getMaxListeners=function(){return c(this)},i.prototype.emit=function(e){for(var t=[],n=1;n<arguments.length;n++)t.push(arguments[n]);var o="error"===e,i=this._events;if(void 0!==i)o=o&&void 0===i.error;else if(!o)return!1;if(o){var s;if(t.length>0&&(s=t[0]),s instanceof Error)throw s;var a=new Error("Unhandled error."+(s?" ("+s.message+")":""));throw a.context=s,a}var c=i[e];if(void 0===c)return!1;if("function"==typeof c)r(c,this,t);else{var u=c.length,l=d(c,u);for(n=0;n<u;++n)r(l[n],this,t)}return!0},i.prototype.addListener=function(e,t){return u(this,e,t,!1)},i.prototype.on=i.prototype.addListener,i.prototype.prependListener=function(e,t){return u(this,e,t,!0)},i.prototype.once=function(e,t){return a(t),this.on(e,f(this,e,t)),this},i.prototype.prependOnceListener=function(e,t){return a(t),this.prependListener(e,f(this,e,t)),this},i.prototype.removeListener=function(e,t){var n,r,o,i,s;if(a(t),void 0===(r=this._events))return this;if(void 0===(n=r[e]))return this;if(n===t||n.listener===t)0==--this._eventsCount?this._events=Object.create(null):(delete r[e],r.removeListener&&this.emit("removeListener",e,n.listener||t));else if("function"!=typeof n){for(o=-1,i=n.length-1;i>=0;i--)if(n[i]===t||n[i].listener===t){s=n[i].listener,o=i;break}if(o<0)return this;0===o?n.shift():function(e,t){for(;t+1<e.length;t++)e[t]=e[t+1];e.pop()}(n,o),1===n.length&&(r[e]=n[0]),void 0!==r.removeListener&&this.emit("removeListener",e,s||t)}return this},i.prototype.off=i.prototype.removeListener,i.prototype.removeAllListeners=function(e){var t,n,r;if(void 0===(n=this._events))return this;if(void 0===n.removeListener)return 0===arguments.length?(this._events=Object.create(null),this._eventsCount=0):void 0!==n[e]&&(0==--this._eventsCount?this._events=Object.create(null):delete n[e]),this;if(0===arguments.length){var o,i=Object.keys(n);for(r=0;r<i.length;++r)"removeListener"!==(o=i[r])&&this.removeAllListeners(o);return this.removeAllListeners("removeListener"),this._events=Object.create(null),this._eventsCount=0,this}if("function"==typeof(t=n[e]))this.removeListener(e,t);else if(void 0!==t)for(r=t.length-1;r>=0;r--)this.removeListener(e,t[r]);return this},i.prototype.listeners=function(e){return p(this,e,!0)},i.prototype.rawListeners=function(e){return p(this,e,!1)},i.listenerCount=function(e,t){return"function"==typeof e.listenerCount?e.listenerCount(t):h.call(e,t)},i.prototype.listenerCount=h,i.prototype.eventNames=function(){return this._eventsCount>0?t(this._events):[]}},495:function(e,t,n){"use strict";var r=n(212),o=n(561);function i(){this.pending=null,this.pendingTotal=0,this.blockSize=this.constructor.blockSize,this.outSize=this.constructor.outSize,this.hmacStrength=this.constructor.hmacStrength,this.padLength=this.constructor.padLength/8,this.endian="big",this._delta8=this.blockSize/8,this._delta32=this.blockSize/32}t.BlockHash=i,i.prototype.update=function(e,t){if(e=r.toArray(e,t),this.pending?this.pending=this.pending.concat(e):this.pending=e,this.pendingTotal+=e.length,this.pending.length>=this._delta8){var n=(e=this.pending).length%this._delta8;this.pending=e.slice(e.length-n,e.length),0===this.pending.length&&(this.pending=null),e=r.join32(e,0,e.length-n,this.endian);for(var o=0;o<e.length;o+=this._delta32)this._update(e,o,o+this._delta32)}return this},i.prototype.digest=function(e){return this.update(this._pad()),o(null===this.pending),this._digest(e)},i.prototype._pad=function(){var e=this.pendingTotal,t=this._delta8,n=t-(e+this.padLength)%t,r=new Array(n+this.padLength);r[0]=128;for(var o=1;o<n;o++)r[o]=0;if(e<<=3,"big"===this.endian){for(var i=8;i<this.padLength;i++)r[o++]=0;r[o++]=0,r[o++]=0,r[o++]=0,r[o++]=0,r[o++]=e>>>24&255,r[o++]=e>>>16&255,r[o++]=e>>>8&255,r[o++]=255&e}else for(r[o++]=255&e,r[o++]=e>>>8&255,r[o++]=e>>>16&255,r[o++]=e>>>24&255,r[o++]=0,r[o++]=0,r[o++]=0,r[o++]=0,i=8;i<this.padLength;i++)r[o++]=0;return r}},32:function(e,t,n){"use strict";var r=n(212),o=n(495),i=n(713),s=n(561),a=r.sum32,c=r.sum32_4,u=r.sum32_5,l=i.ch32,f=i.maj32,p=i.s0_256,h=i.s1_256,d=i.g0_256,g=i.g1_256,m=o.BlockHash,v=[1116352408,1899447441,3049323471,3921009573,961987163,1508970993,2453635748,2870763221,3624381080,310598401,607225278,1426881987,1925078388,2162078206,2614888103,3248222580,3835390401,4022224774,264347078,604807628,770255983,1249150122,1555081692,1996064986,2554220882,2821834349,2952996808,3210313671,3336571891,3584528711,113926993,338241895,666307205,773529912,1294757372,1396182291,1695183700,1986661051,2177026350,2456956037,2730485921,2820302411,3259730800,3345764771,3516065817,3600352804,4094571909,275423344,430227734,506948616,659060556,883997877,958139571,1322822218,1537002063,1747873779,1955562222,2024104815,2227730452,2361852424,2428436474,2756734187,3204031479,3329325298];function w(){if(!(this instanceof w))return new w;m.call(this),this.h=[1779033703,3144134277,1013904242,2773480762,1359893119,2600822924,528734635,1541459225],this.k=v,this.W=new Array(64)}r.inherits(w,m),e.exports=w,w.blockSize=512,w.outSize=256,w.hmacStrength=192,w.padLength=64,w.prototype._update=function(e,t){for(var n=this.W,r=0;r<16;r++)n[r]=e[t+r];for(;r<n.length;r++)n[r]=c(g(n[r-2]),n[r-7],d(n[r-15]),n[r-16]);var o=this.h[0],i=this.h[1],m=this.h[2],v=this.h[3],w=this.h[4],y=this.h[5],_=this.h[6],b=this.h[7];for(s(this.k.length===n.length),r=0;r<n.length;r++){var C=u(b,h(w),l(w,y,_),this.k[r],n[r]),F=a(p(o),f(o,i,m));b=_,_=y,y=w,w=a(v,C),v=m,m=i,i=o,o=a(C,F)}this.h[0]=a(this.h[0],o),this.h[1]=a(this.h[1],i),this.h[2]=a(this.h[2],m),this.h[3]=a(this.h[3],v),this.h[4]=a(this.h[4],w),this.h[5]=a(this.h[5],y),this.h[6]=a(this.h[6],_),this.h[7]=a(this.h[7],b)},w.prototype._digest=function(e){return"hex"===e?r.toHex32(this.h,"big"):r.split32(this.h,"big")}},713:function(e,t,n){"use strict";var r=n(212).rotr32;function o(e,t,n){return e&t^~e&n}function i(e,t,n){return e&t^e&n^t&n}function s(e,t,n){return e^t^n}t.ft_1=function(e,t,n,r){return 0===e?o(t,n,r):1===e||3===e?s(t,n,r):2===e?i(t,n,r):void 0},t.ch32=o,t.maj32=i,t.p32=s,t.s0_256=function(e){return r(e,2)^r(e,13)^r(e,22)},t.s1_256=function(e){return r(e,6)^r(e,11)^r(e,25)},t.g0_256=function(e){return r(e,7)^r(e,18)^e>>>3},t.g1_256=function(e){return r(e,17)^r(e,19)^e>>>10}},212:function(e,t,n){"use strict";var r=n(561),o=n(285);function i(e,t){return 55296==(64512&e.charCodeAt(t))&&(!(t<0||t+1>=e.length)&&56320==(64512&e.charCodeAt(t+1)))}function s(e){return(e>>>24|e>>>8&65280|e<<8&16711680|(255&e)<<24)>>>0}function a(e){return 1===e.length?"0"+e:e}function c(e){return 7===e.length?"0"+e:6===e.length?"00"+e:5===e.length?"000"+e:4===e.length?"0000"+e:3===e.length?"00000"+e:2===e.length?"000000"+e:1===e.length?"0000000"+e:e}t.inherits=o,t.toArray=function(e,t){if(Array.isArray(e))return e.slice();if(!e)return[];var n=[];if("string"==typeof e)if(t){if("hex"===t)for((e=e.replace(/[^a-z0-9]+/gi,"")).length%2!=0&&(e="0"+e),o=0;o<e.length;o+=2)n.push(parseInt(e[o]+e[o+1],16))}else for(var r=0,o=0;o<e.length;o++){var s=e.charCodeAt(o);s<128?n[r++]=s:s<2048?(n[r++]=s>>6|192,n[r++]=63&s|128):i(e,o)?(s=65536+((1023&s)<<10)+(1023&e.charCodeAt(++o)),n[r++]=s>>18|240,n[r++]=s>>12&63|128,n[r++]=s>>6&63|128,n[r++]=63&s|128):(n[r++]=s>>12|224,n[r++]=s>>6&63|128,n[r++]=63&s|128)}else for(o=0;o<e.length;o++)n[o]=0|e[o];return n},t.toHex=function(e){for(var t="",n=0;n<e.length;n++)t+=a(e[n].toString(16));return t},t.htonl=s,t.toHex32=function(e,t){for(var n="",r=0;r<e.length;r++){var o=e[r];"little"===t&&(o=s(o)),n+=c(o.toString(16))}return n},t.zero2=a,t.zero8=c,t.join32=function(e,t,n,o){var i=n-t;r(i%4==0);for(var s=new Array(i/4),a=0,c=t;a<s.length;a++,c+=4){var u;u="big"===o?e[c]<<24|e[c+1]<<16|e[c+2]<<8|e[c+3]:e[c+3]<<24|e[c+2]<<16|e[c+1]<<8|e[c],s[a]=u>>>0}return s},t.split32=function(e,t){for(var n=new Array(4*e.length),r=0,o=0;r<e.length;r++,o+=4){var i=e[r];"big"===t?(n[o]=i>>>24,n[o+1]=i>>>16&255,n[o+2]=i>>>8&255,n[o+3]=255&i):(n[o+3]=i>>>24,n[o+2]=i>>>16&255,n[o+1]=i>>>8&255,n[o]=255&i)}return n},t.rotr32=function(e,t){return e>>>t|e<<32-t},t.rotl32=function(e,t){return e<<t|e>>>32-t},t.sum32=function(e,t){return e+t>>>0},t.sum32_3=function(e,t,n){return e+t+n>>>0},t.sum32_4=function(e,t,n,r){return e+t+n+r>>>0},t.sum32_5=function(e,t,n,r,o){return e+t+n+r+o>>>0},t.sum64=function(e,t,n,r){var o=e[t],i=r+e[t+1]>>>0,s=(i<r?1:0)+n+o;e[t]=s>>>0,e[t+1]=i},t.sum64_hi=function(e,t,n,r){return(t+r>>>0<t?1:0)+e+n>>>0},t.sum64_lo=function(e,t,n,r){return t+r>>>0},t.sum64_4_hi=function(e,t,n,r,o,i,s,a){var c=0,u=t;return c+=(u=u+r>>>0)<t?1:0,c+=(u=u+i>>>0)<i?1:0,e+n+o+s+(c+=(u=u+a>>>0)<a?1:0)>>>0},t.sum64_4_lo=function(e,t,n,r,o,i,s,a){return t+r+i+a>>>0},t.sum64_5_hi=function(e,t,n,r,o,i,s,a,c,u){var l=0,f=t;return l+=(f=f+r>>>0)<t?1:0,l+=(f=f+i>>>0)<i?1:0,l+=(f=f+a>>>0)<a?1:0,e+n+o+s+c+(l+=(f=f+u>>>0)<u?1:0)>>>0},t.sum64_5_lo=function(e,t,n,r,o,i,s,a,c,u){return t+r+i+a+u>>>0},t.rotr64_hi=function(e,t,n){return(t<<32-n|e>>>n)>>>0},t.rotr64_lo=function(e,t,n){return(e<<32-n|t>>>n)>>>0},t.shr64_hi=function(e,t,n){return e>>>n},t.shr64_lo=function(e,t,n){return(e<<32-n|t>>>n)>>>0}},285:function(e){"function"==typeof Object.create?e.exports=function(e,t){t&&(e.super_=t,e.prototype=Object.create(t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}))}:e.exports=function(e,t){if(t){e.super_=t;var n=function(){};n.prototype=t.prototype,e.prototype=new n,e.prototype.constructor=e}}},785:function(){},561:function(e){function t(e,t){if(!e)throw new Error(t||"Assertion failed")}e.exports=t,t.equal=function(e,t,n){if(e!=t)throw new Error(n||"Assertion failed: "+e+" != "+t)}},378:function(e){var t=1e3,n=60*t,r=60*n,o=24*r,i=7*o,s=365.25*o;function a(e,t,n,r){var o=t>=1.5*n;return Math.round(e/n)+" "+r+(o?"s":"")}e.exports=function(e,c){c=c||{};var u=typeof e;if("string"===u&&e.length>0)return function(e){if((e=String(e)).length>100)return;var a=/^(-?(?:\d+)?\.?\d+) *(milliseconds?|msecs?|ms|seconds?|secs?|s|minutes?|mins?|m|hours?|hrs?|h|days?|d|weeks?|w|years?|yrs?|y)?$/i.exec(e);if(!a)return;var c=parseFloat(a[1]);switch((a[2]||"ms").toLowerCase()){case"years":case"year":case"yrs":case"yr":case"y":return c*s;case"weeks":case"week":case"w":return c*i;case"days":case"day":case"d":return c*o;case"hours":case"hour":case"hrs":case"hr":case"h":return c*r;case"minutes":case"minute":case"mins":case"min":case"m":return c*n;case"seconds":case"second":case"secs":case"sec":case"s":return c*t;case"milliseconds":case"millisecond":case"msecs":case"msec":case"ms":return c;default:return}}(e);if("number"===u&&isFinite(e))return c.long?function(e){var i=Math.abs(e);if(i>=o)return a(e,i,o,"day");if(i>=r)return a(e,i,r,"hour");if(i>=n)return a(e,i,n,"minute");if(i>=t)return a(e,i,t,"second");return e+" ms"}(e):function(e){var i=Math.abs(e);if(i>=o)return Math.round(e/o)+"d";if(i>=r)return Math.round(e/r)+"h";if(i>=n)return Math.round(e/n)+"m";if(i>=t)return Math.round(e/t)+"s";return e+"ms"}(e);throw new Error("val is not a non-empty string or a valid number. val="+JSON.stringify(e))}},239:function(e,t,n){"object"==typeof window&&window.whatsNewAssetsUrl&&(n.p=window.whatsNewAssetsUrl)},814:function(e,t,n){"use strict";var r=n(707),o={whatsNew:!1};(0,r.registerStore)("automattic/whats-new",{reducer:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:o,t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"TOGGLE_FEATURE":return{whatsNew:!e.whatsNew}}return e},actions:{toggleWhatsNew:function(){return{type:"TOGGLE_FEATURE"}}},selectors:{isWhatsNewActive:function(e){return e.whatsNew}}})},840:function(e,t,n){"use strict";var r=n(560),o=n(27),i=(n(239),n(200)),s=n(997),a=n(707),c=n(115),u=n(163),__=(n(785),u.__),l="https://s0.wp.com/i/whats-new/universal-nav.png",f="https://s0.wp.com/i/whats-new/drag-drop.png",p="https://s0.wp.com/i/whats-new/single-page-website.png",h="https://s0.wp.com/i/whats-new/convert-to-audio.jpg";function d(){var e=(0,a.useDispatch)("automattic/whats-new").toggleWhatsNew,t=(0,a.useSelect)((function(e){return e("automattic/whats-new").isWhatsNewActive()})),n=[{imgSrc:l,heading:__("Easier navigation","full-site-editing"),description:(0,o.createInterpolateElement)(__("<p>This month all WordPress.com accounts will receive sidebar and menu updates, making it easier to manage your site from the left sidebar.</p><p><Link>Learn more</Link></p>","full-site-editing"),{Link:(0,o.createElement)("a",{href:"https://wordpress.com/support/account-settings/#dashboard-appearance",target:"_blank",rel:"noreferrer"}),p:(0,o.createElement)("p",null)})},{imgSrc:f,heading:__("Drag and drop blocks and patterns in the editor","full-site-editing"),description:(0,o.createInterpolateElement)(__("<p>You can now drag and drop Blocks, and even Block Patterns, into your content directly from the Block Inserter.</p><p><Link>Learn more</Link></p>","full-site-editing"),{Link:(0,o.createElement)("a",{href:"https://make.wordpress.org/core/2021/01/08/core-editor-improvement-drag-drop-blocks-and-patterns-from-the-inserter/",target:"_blank",rel:"noreferrer"}),p:(0,o.createElement)("p",null)})},{imgSrc:p,heading:__("Quickly build single-page websites","full-site-editing"),description:(0,o.createInterpolateElement)(__("<p>Introducing our freshly-launched Blank Canvas theme, which is optimized for single-page websites.</p><p><Link>Learn more</Link></p>","full-site-editing"),{Link:(0,o.createElement)("a",{href:"https://wordpress.com/blog/2021/01/25/building-single-page-websites-on-wordpress-com/",target:"_blank",rel:"noreferrer"}),p:(0,o.createElement)("p",null)})},{imgSrc:h,heading:__("Create podcast episodes automatically","full-site-editing"),description:(0,o.createInterpolateElement)(__("<p>Instantly convert any page or post’s text into an Anchor podcast. This new text-to-speech feature automatically transforms your written words into speech – no voice recording required.</p><p><Link>Learn more</Link></p>","full-site-editing"),{Link:(0,o.createElement)("a",{href:"https://wordpress.com/support/create-anchor-podcast/",target:"_blank",rel:"noreferrer"}),p:(0,o.createElement)("p",null)})}];return(0,o.useEffect)((function(){t&&(0,c.jN)("calypso_block_editor_whats_new_open")}),[t]),(0,o.createElement)(o.Fragment,null,(0,o.createElement)(s.Fill,{name:"ToolsMoreMenuGroup"},(0,o.createElement)(s.MenuItem,{onClick:e},__("What's new","full-site-editing"))),t&&(0,o.createElement)(s.Guide,{className:"whats-new",contentLabel:__("What's New at WordPress.com","full-site-editing"),finishButtonText:__("Close","full-site-editing"),onFinish:e},n.map((function(e,t){return(0,o.createElement)(g,(0,r.Z)({key:e.heading,pageNumber:t+1,isLastPage:t===n.length-1},e))}))))}function g(e){var t=e.pageNumber,n=e.isLastPage,r=e.alignBottom,i=void 0!==r&&r,a=e.heading,u=e.description,l=e.imgSrc;return(0,o.useEffect)((function(){(0,c.jN)("calypso_block_editor_whats_new_slide_view",{slide_number:t,is_last_slide:n})}),[]),(0,o.createElement)(s.GuidePage,{className:"whats-new__page"},(0,o.createElement)("div",{className:"whats-new__text"},(0,o.createElement)("h1",{className:"whats-new__heading"},a),(0,o.createElement)("div",{className:"whats-new__description"},u)),(0,o.createElement)("div",{className:"whats-new__visual"},(0,o.createElement)("img",{key:l,src:l,alt:"","aria-hidden":"true",className:"whats-new__image"+(i?" align-bottom":"")})))}(0,i.registerPlugin)("whats-new",{render:function(){return(0,o.createElement)(d,null)}})},115:function(e,t,n){"use strict";n.d(t,{jN:function(){return r.jN}});n(694),n(209),n(377);var r=n(792);n(722)},377:function(e,t,n){"use strict";"undefined"!=typeof window&&window.addEventListener("popstate",(function(){null}))},792:function(e,t,n){"use strict";n.d(t,{jN:function(){return p}});var r,o=n(394),i=n(804),s=(n(421),n(699)),a=n(898),c=(n(209),n(694),n(377),n(358)),u=["a8c_cookie_banner_ok","wcadmin_storeprofiler_create_jetpack_account","wcadmin_storeprofiler_connect_store","wcadmin_storeprofiler_login_jetpack_account","wcadmin_storeprofiler_payment_login","wcadmin_storeprofiler_payment_create_account","calypso_checkout_switch_to_p_24","calypso_checkout_composite_p24_submit_clicked"];Promise.resolve();function l(e){"undefined"!=typeof window&&(window._tkq=window._tkq||[],window._tkq.push(e))}"undefined"!=typeof document&&(0,a.ve)("//stats.wp.com/w.js?63");var f=new s.EventEmitter;function p(e,t){if(t=t||{},(0,c.Z)('Record event "%s" called with props %o',e,t),e.startsWith("calypso_")||(0,i.includes)(u,e)){if(r){var n=r(t);t=(0,o.Z)((0,o.Z)({},t),n)}t=(0,i.omitBy)(t,i.isUndefined),(0,c.Z)('Recording event "%s" with actual props %o',e,t),l(["recordEvent",e,t]),f.emit("record-event",e,t)}else(0,c.Z)('- Event name must be prefixed by "calypso_" or added to `EVENT_NAME_EXCEPTIONS`')}},722:function(e,t,n){"use strict";n(792)},209:function(e,t,n){"use strict";n(4)},358:function(e,t,n){"use strict";var r=n(49),o=n.n(r);t.Z=o()("calypso:analytics")},694:function(e,t,n){"use strict";n(358)},4:function(e,t,n){"use strict";n(32)},340:function(e,t,n){"use strict";n.d(t,{hg:function(){return a},lZ:function(){return c},_W:function(){return l},Yt:function(){return f}});var r=n(49),o=n.n(r)()("lib/load-script/callback-handler"),i=new Map;function s(){return i}function a(e){return s().has(e)}function c(e,t){var n=s();a(e)?(o('Adding a callback for an existing script from "'.concat(e,'"')),n.get(e).add(t)):(o('Adding a callback for a new script from "'.concat(e,'"')),n.set(e,new Set([t])))}function u(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n=s(),r=n.get(e);if(r){var i='Executing callbacks for "'.concat(e,'"')+(null===t?" with success":' with error "'.concat(t,'"'));o(i),r.forEach((function(e){"function"==typeof e&&e(t)})),n.delete(e)}}function l(){var e=this.getAttribute("src");o('Handling successful request for "'.concat(e,'"')),u(e),this.onload=null}function f(){var e=this.getAttribute("src");o('Handling failed request for "'.concat(e,'"')),u(e,new Error('Failed to load script "'.concat(e,'"'))),this.onerror=null}},606:function(e,t,n){"use strict";n.d(t,{C:function(){return a},k:function(){return c}});var r=n(49),o=n.n(r),i=n(340),s=o()("lib/load-script/dom-operations");function a(e){s('Creating script element for "'.concat(e,'"'));var t=document.createElement("script");return t.src=e,t.type="text/javascript",t.async=!0,t.onload=i._W,t.onerror=i.Yt,t}function c(e){s("Attaching element to head"),document.head.appendChild(e)}},898:function(e,t,n){"use strict";n.d(t,{ve:function(){return a}});var r=n(49),o=n.n(r),i=n(340),s=n(606);o()("package/load-script");function a(e,t){if(!(0,i.hg)(e)&&(0,s.k)((0,s.C)(e)),"function"!=typeof t)return new Promise((function(t,n){(0,i.lZ)(e,(function(e){null===e?t():n(e)}))}));(0,i.lZ)(e,t)}},49:function(e,t,n){var r;t.formatArgs=function(t){if(t[0]=(this.useColors?"%c":"")+this.namespace+(this.useColors?" %c":" ")+t[0]+(this.useColors?"%c ":" ")+"+"+e.exports.humanize(this.diff),!this.useColors)return;var n="color: "+this.color;t.splice(1,0,n,"color: inherit");var r=0,o=0;t[0].replace(/%[a-zA-Z%]/g,(function(e){"%%"!==e&&(r++,"%c"===e&&(o=r))})),t.splice(o,0,n)},t.save=function(e){try{e?t.storage.setItem("debug",e):t.storage.removeItem("debug")}catch(n){}},t.load=function(){var e;try{e=t.storage.getItem("debug")}catch(n){}!e&&"undefined"!=typeof process&&"env"in process&&(e=process.env.DEBUG);return e},t.useColors=function(){if("undefined"!=typeof window&&window.process&&("renderer"===window.process.type||window.process.__nwjs))return!0;if("undefined"!=typeof navigator&&navigator.userAgent&&navigator.userAgent.toLowerCase().match(/(edge|trident)\/(\d+)/))return!1;return"undefined"!=typeof document&&document.documentElement&&document.documentElement.style&&document.documentElement.style.WebkitAppearance||"undefined"!=typeof window&&window.console&&(window.console.firebug||window.console.exception&&window.console.table)||"undefined"!=typeof navigator&&navigator.userAgent&&navigator.userAgent.toLowerCase().match(/firefox\/(\d+)/)&&parseInt(RegExp.$1,10)>=31||"undefined"!=typeof navigator&&navigator.userAgent&&navigator.userAgent.toLowerCase().match(/applewebkit\/(\d+)/)},t.storage=function(){try{return localStorage}catch(e){}}(),t.destroy=(r=!1,function(){r||(r=!0,console.warn("Instance method `debug.destroy()` is deprecated and no longer does anything. It will be removed in the next major version of `debug`."))}),t.colors=["#0000CC","#0000FF","#0033CC","#0033FF","#0066CC","#0066FF","#0099CC","#0099FF","#00CC00","#00CC33","#00CC66","#00CC99","#00CCCC","#00CCFF","#3300CC","#3300FF","#3333CC","#3333FF","#3366CC","#3366FF","#3399CC","#3399FF","#33CC00","#33CC33","#33CC66","#33CC99","#33CCCC","#33CCFF","#6600CC","#6600FF","#6633CC","#6633FF","#66CC00","#66CC33","#9900CC","#9900FF","#9933CC","#9933FF","#99CC00","#99CC33","#CC0000","#CC0033","#CC0066","#CC0099","#CC00CC","#CC00FF","#CC3300","#CC3333","#CC3366","#CC3399","#CC33CC","#CC33FF","#CC6600","#CC6633","#CC9900","#CC9933","#CCCC00","#CCCC33","#FF0000","#FF0033","#FF0066","#FF0099","#FF00CC","#FF00FF","#FF3300","#FF3333","#FF3366","#FF3399","#FF33CC","#FF33FF","#FF6600","#FF6633","#FF9900","#FF9933","#FFCC00","#FFCC33"],t.log=console.debug||console.log||function(){},e.exports=n(632)(t),e.exports.formatters.j=function(e){try{return JSON.stringify(e)}catch(t){return"[UnexpectedJSONParseError]: "+t.message}}},632:function(e,t,n){var r=n(182);e.exports=function(e){function t(e){var n,r,i,s=null;function a(){for(var e=arguments.length,r=new Array(e),o=0;o<e;o++)r[o]=arguments[o];if(a.enabled){var i=a,s=Number(new Date),c=s-(n||s);i.diff=c,i.prev=n,i.curr=s,n=s,r[0]=t.coerce(r[0]),"string"!=typeof r[0]&&r.unshift("%O");var u=0;r[0]=r[0].replace(/%([a-zA-Z%])/g,(function(e,n){if("%%"===e)return"%";u++;var o=t.formatters[n];if("function"==typeof o){var s=r[u];e=o.call(i,s),r.splice(u,1),u--}return e})),t.formatArgs.call(i,r);var l=i.log||t.log;l.apply(i,r)}}return a.namespace=e,a.useColors=t.useColors(),a.color=t.selectColor(e),a.extend=o,a.destroy=t.destroy,Object.defineProperty(a,"enabled",{enumerable:!0,configurable:!1,get:function(){return null!==s?s:(r!==t.namespaces&&(r=t.namespaces,i=t.enabled(e)),i)},set:function(e){s=e}}),"function"==typeof t.init&&t.init(a),a}function o(e,n){var r=t(this.namespace+(void 0===n?":":n)+e);return r.log=this.log,r}function i(e){return e.toString().substring(2,e.toString().length-2).replace(/\.\*\?$/,"*")}return t.debug=t,t.default=t,t.coerce=function(e){if(e instanceof Error)return e.stack||e.message;return e},t.disable=function(){var e=[].concat(r(t.names.map(i)),r(t.skips.map(i).map((function(e){return"-"+e})))).join(",");return t.enable(""),e},t.enable=function(e){var n;t.save(e),t.namespaces=e,t.names=[],t.skips=[];var r=("string"==typeof e?e:"").split(/[\s,]+/),o=r.length;for(n=0;n<o;n++)r[n]&&("-"===(e=r[n].replace(/\*/g,".*?"))[0]?t.skips.push(new RegExp("^"+e.substr(1)+"$")):t.names.push(new RegExp("^"+e+"$")))},t.enabled=function(e){if("*"===e[e.length-1])return!0;var n,r;for(n=0,r=t.skips.length;n<r;n++)if(t.skips[n].test(e))return!1;for(n=0,r=t.names.length;n<r;n++)if(t.names[n].test(e))return!0;return!1},t.humanize=n(378),t.destroy=function(){console.warn("Instance method `debug.destroy()` is deprecated and no longer does anything. It will be removed in the next major version of `debug`.")},Object.keys(e).forEach((function(n){t[n]=e[n]})),t.names=[],t.skips=[],t.formatters={},t.selectColor=function(e){for(var n=0,r=0;r<e.length;r++)n=(n<<5)-n+e.charCodeAt(r),n|=0;return t.colors[Math.abs(n)%t.colors.length]},t.enable(t.load()),t}},804:function(e){"use strict";e.exports=window.lodash},997:function(e){"use strict";e.exports=window.wp.components},707:function(e){"use strict";e.exports=window.wp.data},27:function(e){"use strict";e.exports=window.wp.element},163:function(e){"use strict";e.exports=window.wp.i18n},200:function(e){"use strict";e.exports=window.wp.plugins}},t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={exports:{}};return e[r](o,o.exports,n),o.exports}n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,{a:t}),t},n.d=function(e,t){for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},function(){var e;n.g.importScripts&&(e=n.g.location+"");var t=n.g.document;if(!e&&t&&(t.currentScript&&(e=t.currentScript.src),!e)){var r=t.getElementsByTagName("script");r.length&&(e=r[r.length-1].src)}if(!e)throw new Error("Automatic publicPath is not supported in this browser");e=e.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),n.p=e}();var r={};!function(){"use strict";n.r(r);n(840),n(814)}();var o=window;for(var i in r)o[i]=r[i];r.__esModule&&Object.defineProperty(o,"__esModule",{value:!0})}();