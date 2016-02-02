//from stackoverflow question
$('.live-preview').change(function(){
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
