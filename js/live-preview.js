//from stackoverflow question
var labelcontent = "";
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
  else if ($this.attr('id') == 'bulletin-tag'){
    $alertglyph = $("#bulletin-preview-tag");
    $alertglyph.removeClass();
    $alertglyph.addClass("label " + $this.val());
    if ($this.val() == "label-default"){
      labelcontent="News";
    }
    else if ($this.val() == "label-primary"){
      labelcontent="Club Events";
    }
    else if ($this.val() == "label-warning"){
      labelcontent="Horizons";
    }
    else if ($this.val() == "label-danger"){
      labelcontent="Administrative";
    }
    document.getElementById("bulletin-preview-tag").innerHTML = labelcontent;
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
  else if ($this.attr('id') == 'alert-glyph'){
    $alertglyph = $("#alert-preview-glyph");
    $alertglyph.removeClass();
    $alertglyph.addClass("glyphicon " + $this.val());
  }
  else if ($this.attr('id') == 'bulletin-tag'){
    $alertglyph = $("#bulletin-preview-tag");
    $alertglyph.removeClass();
    $alertglyph.addClass("label " + $this.val());
    if ($this.val() == "label-default"){
      labelcontent="News";
    }
    else if ($this.val() == "label-primary"){
      labelcontent="Club Events";
    }
    else if ($this.val() == "label-warning"){
      labelcontent="Horizons";
    }
    else if ($this.val() == "label-danger"){
      labelcontent="Administrative";
    }
    document.getElementById("bulletin-preview-tag").innerHTML = labelcontent;
  }
  else{
    $('.' + $this.attr('id') + '').html($this.val());
  }
});
