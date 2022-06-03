require('./bootstrap');
var Turbolinks = require("turbolinks");
Turbolinks.start();
/* Import jQuery */
import $ from 'jquery';
window.$ = window.jQuery = $;
/* Import sweetalert2 */
const Swal = require('sweetalert2')
window.Swal = Swal;

