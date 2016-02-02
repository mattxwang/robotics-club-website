//from stackoverflow question
$('.live-preview').change(function(){
  var $this = $(this);
  if ($this.attr('id') == 'alert-type'){
    $alertpreview = $("#alert-preview-alert");
    $alertpreview.removeClass();
    $alertpreview.addClass("alert " + $this.val());
  }
  else if ($this.attr('id') == 'alert-glyph'){
    $alertglyph = $("#alert-preview-glyph");
    $alertglyph.removeClass();
    $alertglyph.addClass("glyphicon " + $this.val());
  }
  else{
  $('.' + $this.attr('id') + '').html($this.val());
  }
});
$('.live-preview').keyup(function(){
  var $this = $(this);
  if ($this.attr('id') == 'alert-type'){
    $alertpreview = $("#alert-preview-alert");
    $alertpreview.removeClass();
    $alertpreview.addClass("alert " + $this.val());
  }
  else{
  $('.' + $this.attr('id') + '').html($this.val());
  }
});
