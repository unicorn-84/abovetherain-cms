import each from 'lodash/each';
import WebFont from 'webfontloader';
import indexMobileFon from '../images/fon/mobile-index-fon.jpg';
import indexFon from '../images/fon/index-fon.jpg';
import commonMobileFon from '../images/fon/mobile-common-fon.jpg';
import commonFon from '../images/fon/common-fon.jpg';

const mobile = matchMedia('(max-width: 991px)');
const indexPage = document.getElementById('abovetherain-cms__index');

function doAnimation() {
  const spans = document.querySelectorAll('.caption h1 span span');
  each(spans, (span) => {
    span.classList.add('in-up-animation');
  });
}

function imageLoad(image, cb) {
  const img = new Image();
  img.src = image;
  img.onload = cb;
  img.onerror = cb;
}

if (indexPage) {
  WebFont.load({
    custom: {
      families: ['hercules_modern'],
    },
  });
}

(function fonLoad() {
  if (mobile.matches) {
    imageLoad((indexPage ? indexMobileFon : commonMobileFon), () => {
      setTimeout(() => {
        document.documentElement.classList.add('fon-loaded');
      }, 0);
    });
  } else {
    imageLoad((indexPage ? indexFon : commonFon), () => {
      setTimeout(() => {
        document.documentElement.classList.add('fon-loaded');
        doAnimation();
      }, 0);
    });
  }
  mobile.addListener(fonLoad);
}());

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

const token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
