<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MannersGame</title>
    <link rel="stylesheet" href="External/style.css" />
    <script src="Build/UnityLoader.js"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "Build/Child--Game.json", { onProgress: UnityLoadProgress });
      let portraitMode;
      try{
        portraitMode = !!JSON.parse();
      }
      catch(e){
        portraitMode=false;
      }

      UnityLoader.SystemInfo.mobile = false;
      //Dispatcher logic
      //Sending event info to unity onUnload
      function OnUnload() {
        unityInstance.SendMessage("_BrowserControls", "BrowserUnloaded");
      }
        //To remove the mobile warning check
        UnityLoader.SystemInfo.mobile = false;

      //Sending event info to unity OnMouseLeave/Enter
      function OnAppLoaded() {
        document.getElementById("unityContainer").addEventListener("mouseenter", () => {
          unityInstance.SendMessage("_BrowserControls", "MouseEntered");
        });

        document.getElementById("unityContainer").addEventListener("mouseleave", () => {
          unityInstance.SendMessage("_BrowserControls", "MouseLeft");
        });
      }


      //When unity loads in the browser send event info that page loaded
      function UnityLoadProgress(gameInstance, progress) {
        if (progress == 1) {
          //gameInstance.logo.style.display = gameInstance.progress.style.display = "none";
          console.log("WEBGL LOADED SUCCESSFULLY..");

          setTimeout(() => {
            unityInstance.SendMessage("_BrowserControls", "BrowserLoaded");
            Resize();
            OnAppLoaded();
          }, 2500);
        }
      }

      function Resize() {
        //Resizer functionality
        //Itch IO Logic - not to be mistaken by main site logic
        let container = unityInstance.container;
        let width = window.innerWidth;
        let height = window.innerHeight;

        let aspectRatio;

        if(portraitMode){
          if(600>960){
            aspectRatio = 600/960;
          }else{
            aspectRatio = 960/600;
          }
        }else{
          if(960<600){
        aspectRatio =960/600;
        }else{
            aspectRatio = 600/960;
          }
              }

        if (width * aspectRatio  > window.innerHeight) {
          width = Math.min(width, Math.ceil(height / aspectRatio ));
        }
        height = Math.floor(width * aspectRatio);

        container.style.width = width + "px";
        container.style.height = height + "px";
        container.style.top = ((window.innerHeight - height) / 2) + "px";
        container.style.left = ((window.innerWidth - width) / 2) + "px";
        container.style.height = (height - 12) + "px";

        let sizeObj = { "height": height, "width": width };

        try {
          unityInstance.SendMessage("Main Camera", "LoadBrowserVariables", JSON.stringify(sizeObj));
        }
        catch
        {
          console.log("Main camera not found!Maybe this isn't the tool showcase build");
        }


      }
      //The event for when page refreshes or closes
      window.addEventListener('beforeunload', function (e) {
        OnUnload();
        console.log("Page unloaded");
      });

      window.addEventListener('resize', Resize);
    </script>
  </head>

  <body>
    <div id="webgl-content" class="webgl-content">
      <div
        id="unityContainer"
        style="width: 960px; height: 600px"
      ></div>
    </div>

    <footer>
      <div class="footer">
        <a
          href="https://arcade.jrpg.com/demos"
          onclick="window.parent.location.href='https://jrpg.com/arcade/demos'"
          >WebGL Tools for Unity</a
        >
      </div>
    </footer>
  </body>
</html>
