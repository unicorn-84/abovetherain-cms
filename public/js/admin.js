!function(t){var l={};function o(e){if(l[e])return l[e].exports;var a=l[e]={i:e,l:!1,exports:{}};return t[e].call(a.exports,a,a.exports,o),a.l=!0,a.exports}o.m=t,o.c=l,o.d=function(t,l,e){o.o(t,l)||Object.defineProperty(t,l,{enumerable:!0,get:e})},o.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},o.t=function(t,l){if(1&l&&(t=o(t)),8&l)return t;if(4&l&&"object"==typeof t&&t&&t.__esModule)return t;var e=Object.create(null);if(o.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:t}),2&l&&"string"!=typeof t)for(var a in t)o.d(e,a,function(l){return t[l]}.bind(null,a));return e},o.n=function(t){var l=t&&t.__esModule?function(){return t.default}:function(){return t};return o.d(l,"a",l),l},o.o=function(t,l){return Object.prototype.hasOwnProperty.call(t,l)},o.p="/",o(o.s=1)}({1:function(t,l,o){t.exports=o("ByIP")},ByIP:function(t,l){try{var o=document.querySelector('meta[name="assets-path"]').getAttribute("content");window.tinymce_setup_callback=function(t){var l=t;return l.remove("textarea.richTextBox"),l};var e=document.querySelectorAll(".tinymce_base"),a=document.querySelectorAll(".tinymce_full"),h={bootH1:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span",styles:{"font-size":"2.5rem","margin-bottom":"0.5rem","font-weight":"500","line-height":"1.2"}},bootH2:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"h2"},bootH3:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"h3"},bootH4:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"h4"},bootH5:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"h5"},bootH6:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"h6"},bootD1:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"display-1"},bootD2:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"display-2"},bootD3:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"display-3"},bootD4:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"display-4"},bootLead:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"lead"},bootSmall:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"small"},bootResponsive:{selector:"img",classes:"img-fluid"},bootThumbnail:{selector:"img",classes:"img-thumbnail"},bootPrimaryBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-primary"},bootSecondaryBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-secondary"},bootSuccessBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-success"},bootDangerBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-danger"},bootWarningBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-warning"},bootInfoBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-info"},bootLightBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-light"},bootDarkBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-dark"},bootPrimaryPillBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-primary badge-pill"},bootSecondaryPillBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-secondary badge-pill"},bootSuccessPillBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-success badge-pill"},bootDangerPillBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-danger badge-pill"},bootWarningPillBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-warning badge-pill"},bootInfoPillBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-info badge-pill"},bootLightPillBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-light badge-pill"},bootDarkPillBadge:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"badge badge-dark badge-pill"},bootPrimaryButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-primary"},bootSecondaryButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-secondary"},bootSuccessButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-success"},bootDangerButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-danger"},bootWarningButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-warning"},bootInfoButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-info"},bootLightButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-light"},bootDarkButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-outline-dark"},bootPrimaryOutlineButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-outline-primary"},bootSecondaryOutlineButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-outline-secondary"},bootSuccessOutlineButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-outline-success"},bootDangerOutlineButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-outline-danger"},bootWarningOutlineButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-outline-warning"},bootInfoOutlineButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-outline-info"},bootLightOutlineButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-outline-light"},bootDarkOutlineButton:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"btn btn-outline-dark"},bootClearfix:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"clearfix"},bootFloatLeft:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"float-left"},bootFloatRight:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"float-right"},bootFloatNone:{selector:"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"float-none"},bootW25:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"w-25"},bootW50:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"w-50"},bootW75:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"w-75"},bootW100:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"w-100"},bootWAuto:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"w-auto"},bootM0:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"m-0"},bootM1:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"m-1"},bootM2:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"m-2"},bootM3:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"m-3"},bootM4:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"m-4"},bootM5:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"m-5"},bootMT0:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mt-0"},bootMT1:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mt-1"},bootMT2:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mt-2"},bootMT3:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mt-3"},bootMT4:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mt-4"},bootMT5:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mt-5"},bootMR0:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mr-0"},bootMR1:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mr-1"},bootMR2:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mr-2"},bootMR3:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mr-3"},bootMR4:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mr-4"},bootMR5:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mr-5"},bootMB0:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mb-0"},bootMB1:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mb-1"},bootMB2:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mb-2"},bootMB3:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mb-3"},bootMB4:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mb-4"},bootMB5:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"mb-5"},bootML0:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"ml-0"},bootML1:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"ml-1"},bootML2:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"ml-2"},bootML3:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"ml-3"},bootML4:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"ml-4"},bootML5:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"ml-5"},bootP0:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"p-0"},bootP1:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"p-1"},bootP2:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"p-2"},bootP3:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"p-3"},bootP4:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"p-4"},bootP5:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"p-5"},bootPT0:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pt-0"},bootPT1:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pt-1"},bootPT2:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pt-2"},bootPT3:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pt-3"},bootPT4:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pt-4"},bootPT5:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pt-5"},bootPR0:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pr-0"},bootPR1:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pr-1"},bootPR2:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pr-2"},bootPR3:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pr-3"},bootPR4:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pr-4"},bootPR5:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pr-5"},bootPB0:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pb-0"},bootPB1:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pb-1"},bootPB2:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pb-2"},bootPB3:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pb-3"},bootPB4:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pb-4"},bootPB5:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pb-5"},bootPL0:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pl-0"},bootPL1:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pl-1"},bootPL2:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pl-2"},bootPL3:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pl-3"},bootPL4:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pl-4"},bootPL5:{selector:"img,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button",classes:"pl-5"}},i=[{title:"Типографика",items:[{title:"Headings классы",items:[{title:".h1",format:"bootH1"},{title:".h2",format:"bootH2"},{title:".h3",format:"bootH3"},{title:".h4",format:"bootH4"},{title:".h5",format:"bootH5"},{title:".h6",format:"bootH6"}]},{title:"Display классы",items:[{title:".display-1",format:"bootD1"},{title:".display-2",format:"bootD2"},{title:".display-3",format:"bootD3"},{title:".display-4",format:"bootD4"}]},{title:".lead",format:"bootLead"},{title:".small",format:"bootSmall"}]},{title:"Изображение",items:[{title:".img-fluid",format:"bootResponsive"},{title:".img-thumbnail",format:"bootThumbnail"}]},{title:"Компоненты",items:[{title:"Badges классы",items:[{title:"Обычные",items:[{title:"Главный",format:"bootPrimaryBadge"},{title:"Вторичный",format:"bootSecondaryBadge"},{title:"Успех",format:"bootSuccessBadge"},{title:"Опасность",format:"bootDangerBadge"},{title:"Предупреждение",format:"bootWarningBadge"},{title:"Инфо",format:"bootInfoBadge"},{title:"Светлый",format:"bootLightBadge"},{title:"Темный",format:"bootDarkBadge"}]},{title:"Пилюли(подушки)",items:[{title:"Главный",format:"bootPrimaryPillBadge"},{title:"Вторичный",format:"bootSecondaryPillBadge"},{title:"Успех",format:"bootSuccessPillBadge"},{title:"Опасность",format:"bootDangerPillBadge"},{title:"Предупреждение",format:"bootWarningPillBadge"},{title:"Инфо",format:"bootInfoPillBadge"},{title:"Светлый",format:"bootLightPillBadge"},{title:"Темный",format:"bootDarkPillBadge"}]}]},{title:"Buttons классы",items:[{title:"Обычные",items:[{title:"Главный",format:"bootPrimaryButton"},{title:"Вторичный",format:"bootSecondaryButton"},{title:"Успех",format:"bootSuccessButton"},{title:"Опасность",format:"bootDangerButton"},{title:"Предупреждение",format:"bootWarningButton"},{title:"Инфо",format:"bootInfoButton"},{title:"Светлый",format:"bootLightButton"},{title:"Темный",format:"bootDarkButton"}]},{title:"Контурные",items:[{title:"Главный",format:"bootPrimaryOutlineButton"},{title:"Вторичный",format:"bootSecondaryOutlineButton"},{title:"Успех",format:"bootSuccessOutlineButton"},{title:"Опасность",format:"bootDangerOutlineButton"},{title:"Предупреждение",format:"bootWarningOutlineButton"},{title:"Инфо",format:"bootInfoOutlineButton"},{title:"Светлый",format:"bootLightOutlineButton"},{title:"Темный",format:"bootDarkOutlineButton"}]}]}]},{title:"Утилиты",items:[{title:"Clearfix",format:"bootClearfix"},{title:"Floats",items:[{title:"Left",format:"bootFloatLeft"},{title:"Right",format:"bootFloatRight"},{title:"None",format:"bootFloatNone"}]},{title:"Размеры",items:[{title:"Ширина 25%",format:"bootW25"},{title:"Ширина 50%",format:"bootW50"},{title:"Ширина 75%",format:"bootW75"},{title:"Ширина 100%",format:"bootW100"},{title:"Ширина auto",format:"bootWAuto"}]},{title:"Отступы",items:[{title:"Margin",items:[{title:"m",items:[{title:"m-0",format:"bootM0"},{title:"m-1",format:"bootM1"},{title:"m-2",format:"bootM2"},{title:"m-3",format:"bootM3"},{title:"m-4",format:"bootM4"},{title:"m-5",format:"bootM5"}]},{title:"mt",items:[{title:"mt-0",format:"bootMT0"},{title:"mt-1",format:"bootMT1"},{title:"mt-2",format:"bootMT2"},{title:"mt-3",format:"bootMT3"},{title:"mt-4",format:"bootMT4"},{title:"mt-5",format:"bootMT5"}]},{title:"mr",items:[{title:"mr-0",format:"bootMR0"},{title:"mr-1",format:"bootMR1"},{title:"mr-2",format:"bootMR2"},{title:"mr-3",format:"bootMR3"},{title:"mr-4",format:"bootMR4"},{title:"mr-5",format:"bootMR5"}]},{title:"mb",items:[{title:"mb-0",format:"bootMB0"},{title:"mb-1",format:"bootMB1"},{title:"mb-2",format:"bootMB2"},{title:"mb-3",format:"bootMB3"},{title:"mb-4",format:"bootMB4"},{title:"mb-5",format:"bootMB5"}]},{title:"ml",items:[{title:"ml-0",format:"bootML0"},{title:"ml-1",format:"bootML1"},{title:"ml-2",format:"bootML2"},{title:"ml-3",format:"bootML3"},{title:"ml-4",format:"bootML4"},{title:"ml-5",format:"bootML5"}]}]},{title:"Padding",items:[{title:"p",items:[{title:"p-0",format:"bootP0"},{title:"p-1",format:"bootP1"},{title:"p-2",format:"bootP2"},{title:"p-3",format:"bootP3"},{title:"p-4",format:"bootP4"},{title:"p-5",format:"bootP5"}]},{title:"pt",items:[{title:"pt-0",format:"bootPT0"},{title:"pt-1",format:"bootPT1"},{title:"pt-2",format:"bootPT2"},{title:"pt-3",format:"bootPT3"},{title:"pt-4",format:"bootPT4"},{title:"pt-5",format:"bootPT5"}]},{title:"pr",items:[{title:"pr-0",format:"bootPR0"},{title:"pr-1",format:"bootPR1"},{title:"pr-2",format:"bootPR2"},{title:"pr-3",format:"bootPR3"},{title:"pr-4",format:"bootPR4"},{title:"pr-5",format:"bootPR5"}]},{title:"pb",items:[{title:"pb-0",format:"bootPB0"},{title:"pb-1",format:"bootPB1"},{title:"pb-2",format:"bootPB2"},{title:"pb-3",format:"bootPB3"},{title:"pb-4",format:"bootPB4"},{title:"pb-5",format:"bootPB5"}]},{title:"pl",items:[{title:"pl-0",format:"bootPL0"},{title:"pl-1",format:"bootPL1"},{title:"pl-2",format:"bootPL2"},{title:"pl-3",format:"bootPL3"},{title:"pl-4",format:"bootPL4"},{title:"pl-5",format:"bootPL5"}]}]}]}]}];e.length>0&&window.tinymce.init({selector:".tinymce_base",language_url:"/js/tinymce/ru.js",language:"ru",content_css:"/css/main.css",plugins:"link, code, textcolor, lists",formats:h,style_formats:i,skin:"voyager",skin_url:"".concat(o,"?path=js/skins/voyager"),convert_urls:!1,extended_valid_elements:"input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]",toolbar1:"undo redo | styleselect | bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist | link | removeformat | code ",content_style:"body {padding: 1rem; background-color: #fafafa;}"}),a.length>0&&window.tinymce.init({selector:".tinymce_full",language_url:"/js/tinymce/ru.js",language:"ru",skin:"voyager",skin_url:"".concat(o,"?path=js/skins/voyager"),content_css:"/css/main.css",plugins:"link, image, code, table, textcolor, lists",min_height:1e3,resize:"vertical",file_browser_callback:function(t,l,o,e){"image"===o&&$("#upload_file").trigger("click")},font_formats:"Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Fira Sans=fira sans,sans-serif;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats",convert_urls:!1,image_caption:!0,image_title:!0,extended_valid_elements:"input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]",formats:h,style_formats:i,toolbar1:"undo redo | styleselect | bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table | removeformat | code ",toolbar2:"fontselect |  fontsizeselect",content_style:"body {padding: 1rem; background-color: #fafafa;}"})}catch(t){console.log(t.message)}}});