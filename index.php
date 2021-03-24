<?php

  $globalVersion = '0.3.0';

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
            <img src="img/sans-01.png" alt="" class="layoutpreview__background">

            <div
              class="srp__element srp__text"
              data-srp-child-id="001"
              data-srp-fontsize="25"
              data-srp-letterspacing="1"
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
              data-srp-iscenter="1"
              data-srp-left=""
              data-srp-top="1"
              data-srp-width="2.5"
              data-srp-height="2.5"
              data-srp-bgimg="./img/lowgow.png"
              data-srp-description="Logo"
            ></div>

          </figure>

        </div>
      </div>

      <div class="layoutcontainer__controls layourcontrols">
        <div class="layourcontrols__inner">

          <fieldset>
            <h2>For Reference (Front Page):</h2>
            This Demo Brochure is <em>4.025 in</em> wide x <em>9 in</em> tall.
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
                  type="number"
                  step="0.05"
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
                  type="number"
                  step="0.05"
                  id="logotop"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="XYZ"
                  data-srp-changes="top"
                  value="1"
                />
              </label>
            </div>

            <div class="layourcontrols__col2">
               <label for="logowidth" class="layourcontrols__label">
                <h5>Width (in inches, from Illustrator)</h5>
                <input
                  type="number"
                  step="0.05"
                  id="logowidth"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="XYZ"
                  data-srp-changes="width"
                  value="2.5"
                />
              </label>

              <label for="logoheight" class="layourcontrols__label">
                <h5>Height (in inches, from Illustrator)</h5>
                <input
                  type="number"
                  step="0.05"
                  id="logoheight"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="XYZ"
                  data-srp-changes="height"
                  value="2.5"
                />
              </label>
            </div>

            <label for="logocenter" class="layourcontrols__label">
              <h5>Center Element, will disregard “Left” value</h5>
              <input
                type="number"
                step="1"
                min="0"
                max="1"
                style="width: 50px";
                id="logocenter"
                class="srp__control layourcontrols__fontsize"
                data-srp-parent="blabla"
                data-srp-target="XYZ"
                data-srp-changes="iscenter"
                value="1"
              />
              (1 for yes, 0 for no)
            </label>

          </fieldset>


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
                  value="Contemporary <br> Hill Country Living"
                />
              </label>


              <label for="fontsizeinput" class="layourcontrols__label">
                <h5>Font Size (in pt, from Illustrator)</h5>
                <input
                  type="number"
                  id="fontsizeinput"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="001"
                  data-srp-changes="fontsize"
                  value="25"
                />
              </label>
            </div>

            <div class="layourcontrols__col2">
              <label for="headlineleft" class="layourcontrols__label">
                <h5>Left (in inches, from Illustrator)</h5>
                <input
                  type="number"
                  step="0.05"
                  id="headlineleft"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="001"
                  data-srp-changes="left"
                  value="0.25"
                />
              </label>

              <label for="headlinetop" class="layourcontrols__label">
                <h5>Top (in inches, from Illustrator)</h5>
                <input
                  type="number"
                  step="0.05"
                  id="headlinetop"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="001"
                  data-srp-changes="top"
                  value="3.85"
                />
              </label>
            </div>

            <div class="layourcontrols__col2">
               <label for="headlinewidth" class="layourcontrols__label">
                <h5>Width (in inches, from Illustrator)</h5>
                <input
                  type="number"
                  step="0.05"
                  id="headlinewidth"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="001"
                  data-srp-changes="width"
                  value="3.5"
                />
              </label>

              <label for="headlineheight" class="layourcontrols__label">
                <h5>Height (in inches, from Illustrator)</h5>
                <input
                  type="number"
                  step="0.05"
                  id="headlineheight"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="blabla"
                  data-srp-target="001"
                  data-srp-changes="height"
                  value="2"
                />
              </label>
            </div>

            <label for="headlinecenter" class="layourcontrols__label">
              <h5>Center Element, will disregard “Left” value</h5>
              <input
                type="number"
                step="1"
                min="0"
                max="1"
                style="width: 50px";
                id="headlinecenter"
                class="srp__control layourcontrols__fontsize"
                data-srp-parent="blabla"
                data-srp-target="001"
                data-srp-changes="iscenter"
              />
              (1 for yes, 0 for no)
            </label>

          </fieldset>


        </div>
      </div>

    </section>

    <br>
    <br>


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
            data-srp-id="secondpage"
          >
            <img src="img/sans-02.png" alt="" class="layoutpreview__background">

            <div
              class="srp__element srp__text"
              data-srp-child-id="02text1"
              data-srp-fontsize="12"
              data-srp-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Etiam sit amet nisl purus in mollis nunc sed. Iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui. Euismod lacinia at quis risus sed vulputate. Habitant morbi tristique senectus et netus. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Vel facilisis volutpat est velit egestas dui id. Egestas dui id ornare arcu odio.<br><br>Cras sed felis eget velit aliquet sagittis id consectetur purus. Fermentum iaculis eu non diam phasellus vestibulum lorem sed. Dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Iaculis nunc sed augue lacus viverra vitae congue. Felis eget nunc lobortis mattis aliquam faucibus purus. Ut eu sem integer vitae justo eget magna."
              data-srp-textcolor="#aaffdd"
              data-srp-iscenter=""
              data-srp-left="0.5"
              data-srp-top="0.5"
              data-srp-width="3"
              data-srp-height="5.05"
              data-srp-description="Copy"
            ></div>

          </figure>

        </div>
      </div>

      <div class="layoutcontainer__controls layourcontrols">
        <div class="layourcontrols__inner">

          <fieldset>
            <h2>For Reference (Second Page):</h2>
            This Demo Brochure is <em>4.025 in</em> wide x <em>9 in</em> tall.
          </fieldset>


          <fieldset>
            <h2>Copy Controls</h2>

            <label for="headlineinput2" class="layourcontrols__label">
              <h5>Headline-Text</h5>
              <input
                style="width: 95%"
                type="text"
                id="headlineinput2"
                class="srp__control layourcontrols__headline"
                data-srp-parent="secondpage"
                data-srp-target="02text1"
                data-srp-changes="text"
                value="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Etiam sit amet nisl purus in mollis nunc sed. Iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui. Euismod lacinia at quis risus sed vulputate. Habitant morbi tristique senectus et netus. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Vel facilisis volutpat est velit egestas dui id. Egestas dui id ornare arcu odio.<br><br>Cras sed felis eget velit aliquet sagittis id consectetur purus. Fermentum iaculis eu non diam phasellus vestibulum lorem sed. Dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Iaculis nunc sed augue lacus viverra vitae congue. Felis eget nunc lobortis mattis aliquam faucibus purus. Ut eu sem integer vitae justo eget magna."
              />
            </label>

            <div class="layourcontrols__col2">
              <label for="fontsizeinput2" class="layourcontrols__label">
                <h5>Font Size (in pt, from Illustrator)</h5>
                <input
                  type="number"
                  id="fontsizeinput2"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="secondpage"
                  data-srp-target="02text1"
                  data-srp-changes="fontsize"
                  value="25"
                />
              </label>

              <label for="colorinput2" class="layourcontrols__label">
                <h5>Color</h5>
                <input
                  type="text"
                  id="colorinput2"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="secondpage"
                  data-srp-target="02text1"
                  data-srp-changes="textcolor"
                  value="#aaffdd"
                />
              </label>
            </div>



            <div class="layourcontrols__col2">
              <label for="headlineleft2" class="layourcontrols__label">
                <h5>Left (in inches, from Illustrator)</h5>
                <input
                  type="number"
                  step="0.05"
                  id="headlineleft2"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="secondpage"
                  data-srp-target="02text1"
                  data-srp-changes="left"
                  value="0.25"
                />
              </label>

              <label for="headlinetop2" class="layourcontrols__label">
                <h5>Top (in inches, from Illustrator)</h5>
                <input
                  type="number"
                  step="0.05"
                  id="headlinetop2"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="secondpage"
                  data-srp-target="02text1"
                  data-srp-changes="top"
                  value="0.5"
                />
              </label>
            </div>

            <div class="layourcontrols__col2">
               <label for="headlinewidth2" class="layourcontrols__label">
                <h5>Width (in inches, from Illustrator)</h5>
                <input
                  type="number"
                  step="0.05"
                  id="headlinewidth2"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="secondpage"
                  data-srp-target="02text1"
                  data-srp-changes="width"
                  value="3"
                />
              </label>

              <label for="headlineheight2" class="layourcontrols__label">
                <h5>Height (in inches, from Illustrator)</h5>
                <input
                  type="number"
                  step="0.05"
                  id="headlineheight2"
                  class="srp__control layourcontrols__fontsize"
                  data-srp-parent="secondpage"
                  data-srp-target="02text1"
                  data-srp-changes="height"
                  value="5.05"
                />
              </label>
            </div>

            <label for="headlinecenter2" class="layourcontrols__label">
              <h5>Center Element, will disregard “Left” value</h5>
              <input
                type="number"
                step="1"
                min="0"
                max="1"
                style="width: 50px";
                id="headlinecenter2"
                class="srp__control layourcontrols__fontsize"
                data-srp-parent="secondpage"
                data-srp-target="02text1"
                data-srp-changes="iscenter"
              />
              (1 for yes, 0 for no)
            </label>

          </fieldset>


        </div>
      </div>

    </section>

    <section class="about">
      <br><br>
      <p>—Proof Of Concept Only—</p>
      <p>The SRP Toolkit uses JavaScript to calculate element's position and size based on inch- and pt- values (for example from Illustrator). Currently supported parameters are:
      </p>
      <ul>
        <li>width
        <li>height
        <li>left
        <li>top
        <li>iscenter
        <li>fontsize
        <li>text
        <li>color
        <li>bgimg
        <li>letterspacing
      </ul>
      <p>More than one SRP-Element (in this example, a brochure page) are theretically possible and supported. Each SRP-Eement can have any amount of child-elements. Controls can be set to control each parameter for each child-element (but not required).
      </p>
      <p>SRP calculates placement, sizing and font-size regardless of screen/view - size, and should theretically work well responsively. Mileage may vary.</p>
      2021 by Moritz Zimmer.
    </section>


  </body>

  <script>
      srpjs.init();
  </script>
</html>