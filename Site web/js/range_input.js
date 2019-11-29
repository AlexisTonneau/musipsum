var rangeSlider = function(){
  var slider = $('.input_range'),
      range = $('.input_range_range'),
      value = $('.input_range_value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};

rangeSlider();



function updateTextInput(val) {
          document.getElementById('range_value').value=val; 
        }