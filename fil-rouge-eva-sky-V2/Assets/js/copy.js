function copy() {
      
  /* Copy text into clipboard */
  navigator.clipboard.writeText
      ("PLAY.EVA-SKY.FR");
    
      var btn = document.getElementById("playbtnanim");
      btn.value = 'my value'; // will just add a hidden value
      btn.innerHTML = 'Copier';
      setTimeout( function() { 
        var btn = document.getElementById("playbtnanim");
        btn.value = 'my value'; // will just add a hidden value
        btn.innerHTML = 'PLAY.EVA-SKY.FR';
      }, 1000);
    }
