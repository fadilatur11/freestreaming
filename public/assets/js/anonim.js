((source) =>{
    if(typeof Hls == "undefined") return;
    if(!document.querySelector("video")) return;
    var hls = new Hls();
    hls.loadSource(source);
    hls.attachMedia(document.querySelector("video"));
  })($.base64.decode($(".urldata").val()))