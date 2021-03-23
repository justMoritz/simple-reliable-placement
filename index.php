<?php

  $globalVersion = '0.1.0';

?>

<!DOCTYPE html>
<html>
  <head>
    <title>SRP — Simple Reliable Placement Test v1</title>
    <meta name="description" content="Simple Reliable Text-Placement Test v1">
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />


    <!-- Loading Scripts -->
    <script src="src/scripts/main.js?v=<?=$globalVersion?>"></script>

    <!-- Loads Styles -->
    <link rel="stylesheet" href="src/styles/styles.css?v=<?=$globalVersion?>" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">

  </head>

  <body>

    <h1>
        Simple Reliable Placement (SRP) Test
    </h1>



    <section class="layoutcontainer">
      <div class="layoutcontainer__preview layoutpreview">
        <div class="layoutpreview__inner">

          <?php
          /**
           *
           * Data-srp-attribues could come from the CMS, or need to be
           * pre-defined by a developer.
           *
           * Script will find srp, and apply the styles.
           * In this demo:
           *  - all values are in inches for sizing/placing
           *  - all font-size values are in pt for font-size
           * again, those should correspond to the illustrator file they came from :)
           *
           * We could make this be any css attribute we want, making this very scalable
           *
           */
          ?>
          <figure
            class="layoutpreview__fig srp"
            data-srp-width="4.025"
            data-srp-height="9"
            data-srp-id="blabla"
          >
            <img src="img/baseline-01.png" alt="" class="layoutpreview__background">
            <div
              class="srp__element srp__text"
              data-srp-child-id="001"
              data-srp-fontsize="25"
              data-srp-letterspacing="0.01"
              data-srp-text="Contemporary <br> Hill Country Living"
              data-srp-textcolor="white"
              data-srp-iscenter=""
              data-srp-left="0.25"
              data-srp-top="3.85"
              data-srp-width="3.5"
              data-srp-height="2"
              data-srp-description="Headline"
            ></div>

            <div
              class="srp__element srp__image"
              data-srp-child-id="XYZ"
              data-srp-iscenter="true"
              data-srp-left=""
              data-srp-top="1"
              data-srp-width="2.5"
              data-srp-height="2.5"
              data-srp-bgimg=""
              data-srp-description="Logo"
            ></div>

          </figure>

        </div>
      </div>

      <div class="layoutcontainer__controls layourcontrols">
        <div class="layourcontrols__inner">

          <fieldset>
            <h2>Headline Controls</h2>

            <div class="layourcontrols__col2">
              <label for="headlineinput" class="layourcontrols__label">
                <h5>Headline-Text</h5>
                <input
                  type="text"
                  id="headlineinput"
                  class="srp__control layourcontrols__headline"
                  data-srp-parent="blabla"
                  data-srp-target="001"
                  data-srp-changes="text"
                />
              </label>


              <label for="fontsizeinput" class="layourcontrols__label">
                <h5>Font Size (in pt, from Illustrator)</h5>
                <input
                  type="text"
                  id="fontsizeinput"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="001"
                  data-srp-changes="fontsize"
                />
              </label>
            </div>

            <div class="layourcontrols__col2">
              <label for="headlineleft" class="layourcontrols__label">
                <h5>Left (in inches, from Illustrator)</h5>
                <input
                  type="text"
                  id="headlineleft"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="001"
                  data-srp-changes="left"
                />
              </label>

              <label for="headlinetop" class="layourcontrols__label">
                <h5>Top (in inches, from Illustrator)</h5>
                <input
                  type="text"
                  id="headlinetop"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="001"
                  data-srp-changes="top"
                />
              </label>
            </div>

            <div class="layourcontrols__col2">
               <label for="headlinewidth" class="layourcontrols__label">
                <h5>Width (in inches, from Illustrator)</h5>
                <input
                  type="text"
                  id="headlinewidth"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="001"
                  data-srp-changes="width"
                />
              </label>

              <label for="headlineheight" class="layourcontrols__label">
                <h5>Height (in inches, from Illustrator)</h5>
                <input
                  type="text"
                  id="headlineheight"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="001"
                  data-srp-changes="height"
                />
              </label>
            </div>

            <label for="headlineheight" class="layourcontrols__label">
              <h5>Center Element (will disregard Left Value)</h5>
              <input
                type="checkbox"
                id="headlineheight"
                class="srp__control layourcontrols__fontsize"
                data-srp-parent="blabla"
                data-srp-target="001"
                data-srp-changes="iscenter"
              />
            </label>

          </fieldset>

          <fieldset>
            <h2>Logo Controls</h2>

             <label for="logoinput" class="layourcontrols__label">
              <h5>Upload Logo</h5>
              <input
                type="file"
                id="logoinput"
                class="srp__imagecontrol layourcontrols__logo"
                data-srp-parent="blabla"
                data-srp-target="XYZ"
                data-srp-changes="bgimg"
              />
            </label>

            <div class="layourcontrols__col2">
              <label for="logoleft" class="layourcontrols__label">
                <h5>Left (in inches, from Illustrator)</h5>
                <input
                  type="text"
                  id="logoleft"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="XYZ"
                  data-srp-changes="left"
                />
              </label>

              <label for="logotop" class="layourcontrols__label">
                <h5>Top (in inches, from Illustrator)</h5>
                <input
                  type="text"
                  id="logotop"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="XYZ"
                  data-srp-changes="top"
                />
              </label>
            </div>

            <div class="layourcontrols__col2">
               <label for="logowidth" class="layourcontrols__label">
                <h5>Width (in inches, from Illustrator)</h5>
                <input
                  type="text"
                  id="logowidth"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="XYZ"
                  data-srp-changes="width"
                />
              </label>

              <label for="logoheight" class="layourcontrols__label">
                <h5>Height (in inches, from Illustrator)</h5>
                <input
                  type="text"
                  id="logoheight"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="XYZ"
                  data-srp-changes="height"
                />
              </label>
            </div>

            <label for="headlineheight" class="layourcontrols__label">
              <h5>Center Element (will disregard Left Value)</h5>
              <input
                type="checkbox"
                id="headlineheight"
                class="srp__control layourcontrols__fontsize"
                data-srp-parent="blabla"
                data-srp-target="XYZ"
                data-srp-changes="iscenter"
                value="on"
              />
            </label>



          </fieldset>

        </div>
      </div>

    </section>




  </body>

  <script>
      srpjs.init();
  </script>
</html>