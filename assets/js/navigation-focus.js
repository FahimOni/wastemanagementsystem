var recycling_energy_Keyboard_loop = function (elem) {
  var recycling_energy_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var recycling_energy_firstTabbable = recycling_energy_tabbable.first();
  var recycling_energy_lastTabbable = recycling_energy_tabbable.last();
  recycling_energy_firstTabbable.focus();

  recycling_energy_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      recycling_energy_firstTabbable.focus();
    }
  });

  recycling_energy_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      recycling_energy_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
      elem.hide();
    };
  });
};