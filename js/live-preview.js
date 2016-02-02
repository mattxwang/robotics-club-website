//from stackoverflow question
$('.live-preview').change(function(){
  var $this = $(this);
  if ($this.attr('id') == 'alert-type'){
    $("#alert-preview-alert").removeClass();
    $("#alert-preview-alert").addClass("alert" + $this.val())
  }
  else{
  $('.' + $this.attr('id') + '').html($this.val());
  }
});
$('.live-preview').keyup(function(){
  var $this = $(this);
  if ($this.attr('id') == 'alert-type'){
    $("#alert-preview-alert").removeClass();
    $("#alert-preview-alert").addClass("alert" + $this.val())
  }
  else{
  $('.' + $this.attr('id') + '').html($this.val());
  }
});
