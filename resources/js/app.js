import './bootstrap';

import Alpine from 'alpinejs';
import 'parsleyjs';
import 'parsleyjs/src/parsley.css';

import $ from 'jquery';

window.Alpine = Alpine;
window.$ = $;
window.jQuery = $;

Alpine.start();

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');
    if (form) {
        $(form).parsley();
    }
});