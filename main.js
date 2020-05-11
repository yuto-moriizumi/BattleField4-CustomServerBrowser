const app = new Vue({
  el: "#app",
  data: {
    message: "Hello Vue!",
  },
  mounted: function () {
    //https://battlelog.battlefield.com/bf4/ja/servers/getServers/pc/?offset=60&count=60&filtered=1&expand=1&settings=&useLocation=1&useAdvanced=1&gameexpansions=-1&q=&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&mapRotation=-1&modeRotation=-1&password=-1&osls=-1&vvsa=-1&vffi=-1&vaba=-1&vkca=-1&v3ca=-1&v3sp=-1&vmsp=-1&vrhe=-1&vhud=-1&vmin=-1&vnta=-1&vbdm-min=1&vbdm-max=300&vprt-min=1&vprt-max=300&vshe-min=1&vshe-max=300&vtkk-min=1&vtkk-max=99&vnit-min=30&vnit-max=86400&vtkc-min=1&vtkc-max=99&vvsd-min=0&vvsd-max=500&vgmc-min=0&vgmc-max=500
    //"https://keeper.battlelog.com/snapshot/7540c0fd-c5a7-4df4-885e-dc59243c7953"
    const request = new XMLHttpRequest();
    /*
    request.open(
      "GET",
      "https://battlelog.battlefield.com/bf4/ja/servers/getServers/pc/?offset=60&count=60&filtered=1&expand=1&settings=&useLocation=1&useAdvanced=1&gameexpansions=-1&q=&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&mapRotation=-1&modeRotation=-1&password=-1&osls=-1&vvsa=-1&vffi=-1&vaba=-1&vkca=-1&v3ca=-1&v3sp=-1&vmsp=-1&vrhe=-1&vhud=-1&vmin=-1&vnta=-1&vbdm-min=1&vbdm-max=300&vprt-min=1&vprt-max=300&vshe-min=1&vshe-max=300&vtkk-min=1&vtkk-max=99&vnit-min=30&vnit-max=86400&vtkc-min=1&vtkc-max=99&vvsd-min=0&vvsd-max=500&vgmc-min=0&vgmc-max=500"
    );*/
    request.open("GET", "./test.py");
    request.send(null);
    request.responseType = "document";
    request.onloadend = () => {
      console.log("server list loaded");
      /*
      this.message =
        "<table>" +
        request.response.getElementsByClassName(
          "table table-hover servers-list"
        )[0].innerHTML +
        "</table>";*/
      this.message = request.response.body.outerHTML;
      console.log(request.response);
    };
  },
});
