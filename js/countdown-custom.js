jQuery(document).ready(function () {
  $(function () {
    $("#defaultCountdown").countdown({ until: new Date(2022, 12, 23, 11) }); // year, month, date, hour
  });
});
