window.tinymce_setup_callback = (editor) => {
  const tinymce = editor;
  tinymce.settings.language_url = '/js/tinymce/ru.js';
  tinymce.settings.language = 'ru';
  tinymce.settings.invalid_elements = 'span';
  tinymce.settings.extended_valid_elements = 'span[!class]';
  tinymce.settings.toolbar_drawer = 'sliding';
  tinymce.settings.toolbar = 'undo redo | styleselect | formatselect | fontselect | fontsizeselect | bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table | code';
  tinymce.settings.forced_root_block_attrs = {
    class: 'card-text',
  };
  return tinymce;
};
