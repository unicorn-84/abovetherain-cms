import tinymce from 'tinymce';

const tinymceBase = document.querySelector('#tinymce_base');

if (tinymceBase) {
  tinymce.init({
    selector: '#tinymce_base',
  });
}

console.log(tinymce);
// window.tinymce_setup_callback = (editor) => {
//   const tinymce = editor;
//   tinymce.settings.language_url = '/js/tinymce/ru.js';
//   tinymce.settings.language = 'ru';
//   tinymce.settings.min_height = 500;
//   tinymce.settings.toolbar_drawer = 'sliding';
//   tinymce.settings.toolbar = 'undo redo | styleselect | formatselect | fontselect | fontsizeselect | bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table | code';
//   tinymce.settings.formats = {
//     'w-100': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'w-100' },
//     'w-50': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'w-50' },
//     'w-auto': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'w-auto' },
//     'img-fluid': { selector: 'img', classes: 'img-fluid' },
//     'img-thumbnail': { selector: 'img', classes: 'img-thumbnail' },
//     'mt-0': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'mt-0' },
//     'mt-2': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'mt-2' },
//     'mt-3': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'mt-3' },
//     'mb-0': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'mb-0' },
//     'mb-2': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'mb-2' },
//     'mb-3': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'mb-3' },
//     'p-2': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'p-2' },
//     'p-3': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'p-3' },
//     'p-4': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'p-4' },
//     'text-reset': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'text-reset' },
//     'text-decoration-none': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'text-decoration-none' },
//     'float-left': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'float-left' },
//     'float-right': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'float-right' },
//     'float-none': { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'float-none' },
//     clearfix: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'clearfix' },
//   };
//   tinymce.settings.style_formats = [
//     { title: 'Bootstrap 4 classes', format: 'none' },
//     { title: 'w-100', format: 'w-100' },
//     { title: 'w-50', format: 'w-50' },
//     { title: 'w-auto', format: 'w-auto' },
//     { title: 'img-fluid', format: 'img-fluid' },
//     { title: 'img-thumbnail', format: 'img-thumbnail' },
//     { title: 'mt-0', format: 'mt-0' },
//     { title: 'mt-2', format: 'mt-2' },
//     { title: 'mt-3', format: 'mt-3' },
//     { title: 'mb-0', format: 'mb-0' },
//     { title: 'mb-2', format: 'mb-2' },
//     { title: 'mb-3', format: 'mb-3' },
//     { title: 'p-2', format: 'p-2' },
//     { title: 'p-3', format: 'p-3' },
//     { title: 'p-4', format: 'p-4' },
//     { title: 'text-reset', format: 'text-reset' },
//     { title: 'text-decoration-none', format: 'text-decoration-none' },
//     { title: 'float-left', format: 'float-left' },
//     { title: 'float-right', format: 'float-right' },
//     { title: 'float-none', format: 'float-none' },
//     { title: 'clearfix', format: 'clearfix' },
//     { title: 'Сбросить стили', format: 'removeformat' },
//   ];
//   tinymce.settings.fontsize_formats = '8pt 10pt 12pt 14pt 18pt 24pt 36pt 48pt 56pt 72pt';
//   return tinymce;
// };
