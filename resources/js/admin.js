try {
  window.tinymce_setup_callback = (editor) => {
    const tinymce = editor;
    // tinymce.remove('textarea.richTextBox');
    // tinymce.settings.skin = 'lightgray';
    // tinymce.settings.skin_url = '/js/tinymce/skins/voyager';
    return tinymce;
  };

  const tinymceBase = document.querySelectorAll('.tinymce_base');
  const tinymceFull = document.querySelectorAll('.tinymce_full');

  const bootstrap4Formats = {
    bootH1: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span',
      styles: {
        'font-size': '2.5rem',
        'margin-bottom': '0.5rem',
        'font-weight': '500',
        'line-height': '1.2',
      },
    },
    bootH2: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span',
      classes: 'h2',
    },
    bootH3: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span',
      classes: 'h3',
    },
    bootH4: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span',
      classes: 'h4',
    },
    bootH5: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span',
      classes: 'h5',
    },
    bootH6: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span',
      classes: 'h6',
    },
    bootD1: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span',
      classes: 'display-1',
    },
    bootD2: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span',
      classes: 'display-2',
    },
    bootD3: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span',
      classes: 'display-3',
    },
    bootD4: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span',
      classes: 'display-4',
    },
    bootLead: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span',
      classes: 'lead',
    },
    bootSmall: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span',
      classes: 'small',
    },
    bootResponsive: {
      selector: 'img',
      classes: 'img-responsive',
    },
    bootThumbnail: {
      selector: 'img',
      classes: 'img-thumbnail',
    },
    bootBadge: {
      title: 'Badge',
    },
  };

  const styleFormats = [
    {
      title: 'Типографика',
      items: [
        {
          title: 'Headings классы',
          items: [
            {
              title: '.h1',
              format: 'bootH1',
            },
            {
              title: '.h2',
              format: 'bootH2',
            },
            {
              title: '.h3',
              format: 'bootH3',
            },
            {
              title: '.h4',
              format: 'bootH4',
            },
            {
              title: '.h5',
              format: 'bootH5',
            },
            {
              title: '.h6',
              format: 'bootH6',
            },
          ],
        },
        {
          title: 'Display классы',
          items: [
            {
              title: '.display-1',
              format: 'bootD1',
            },
            {
              title: '.display-2',
              format: 'bootD2',
            },
            {
              title: '.display-3',
              format: 'bootD3',
            },
            {
              title: '.display-4',
              format: 'bootD4',
            },
          ],
        },
        {
          title: '.lead',
          format: 'bootLead',
        },
        {
          title: '.small',
          format: 'bootSmall',
        },
      ],
    },
    {
      title: 'Изображение',
      items: [
        {
          title: '.img-fluid',
          format: 'bootResponsive',
        },
        {
          title: '.img-thumbnail',
          format: 'bootThumbnail',
        },
      ],
    },
    {
      title: 'Компоненты',
      items: [
        {
          title: 'Badges классы',
          format: 'bootBadge',
        },
        {
          title: '.img-thumbnail',
          format: 'bootThumbnail',
        },
      ],
    },
    {
      title: 'Элементы',
      items: [
        {
          title: 'Badges классы',
          format: 'bootBadge',
        },
        {
          title: '.img-thumbnail',
          format: 'bootThumbnail',
        },
      ],
    },
  ];

  if (tinymceFull) {
    window.tinymce.init({
      selector: '.tinymce_full',
      skin: 'xenmce',
      menubar: false,
      skin_url: '/js/tinymce/skins/xenmce',
      language_url: '/js/tinymce/ru.js',
      language: 'ru',
      content_css: '/css/main.css',
      plugins: 'link, code, table, textcolor, lists',
      resize: 'vertical',
      font_formats: 'Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Fira Sans=fira sans,sans-serif;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats',
      convert_urls: false,
      image_caption: true,
      image_title: true,
      extended_valid_elements: 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
      formats: bootstrap4Formats,
      style_formats: styleFormats,
      toolbar1: 'styleselect | bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link | removeformat | code ',
      toolbar2: 'fontselect |  fontsizeselect',
    });
  }

  if (tinymceBase.length > 0) {
    window.tinymce.init({
      selector: '.tinymce_base',
      menubar: false,
      language_url: '/js/tinymce/ru.js',
      language: 'ru',
      content_css: '/css/main.css',
      plugins: 'link, code, textcolor, lists',
      convert_urls: false,
      extended_valid_elements: 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
      toolbar1: 'undo redo | styleselect | bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist | link | removeformat | code ',
      content_style: 'body {padding: 10px}',
    });
  }
} catch (e) {
  console.log(e.message);
}
