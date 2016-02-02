//from stackoverflow question
$('.live-preview').change(function(){
  var $this = $(this);
  if ($this.attr('id') == 'alert-type'){
    $("#alert-preview-alert").removeClass("alert-danger alert-warning alert-primary alert-info");
    $("#alert-preview-alert").addClass($this.attr('id'))
  }
  else{
  $('.' + $this.attr('id') + '').html($this.val());
  }
});
$('.live-preview').keyup(function(){
  var $this = $(this);
  $('.' + $this.attr('id') + '').html($this.val());
});
