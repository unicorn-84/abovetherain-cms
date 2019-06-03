window.tinymce_setup_callback = (editor) => {
  const tinymce = editor;
  tinymce.settings.language_url = '/js/tinymce/ru.js';
  tinymce.settings.language = 'ru';
  tinymce.settings.min_height = 500;
  tinymce.settings.toolbar_drawer = 'sliding';
  tinymce.settings.toolbar = 'undo redo | styleselect | formatselect | fontselect | fontsizeselect | bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table | code';
  tinymce.settings.formats = {
    'img-fluid': { selector: 'img', classes: 'img-fluid' },
  };
  tinymce.settings.style_formats = [
    { title: 'img-fluid', format: 'img-fluid' },
    {
      title: 'Сбросить стили', format: 'removeformat',
    },
  ];
  tinymce.settings.fontsize_formats = '8pt 10pt 12pt 14pt 18pt 24pt 36pt 48pt 56pt 72pt';
  return tinymce;
};
