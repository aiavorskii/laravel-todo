const jQuery = require('jquery');
window.jQuery = window.$ = jQuery;

require('jquery-ui/ui/widgets/datepicker');

$('.datepicker').datepicker({
  dateFormat: "yy-mm-dd",
}).datepicker("setDate", new Date());
