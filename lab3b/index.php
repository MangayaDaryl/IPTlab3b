<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #2</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />   
</head>

<body style="background-color: pink;">
<div class="u-fixed-width">
  <div class="p-logo-section">
    <div class="p-logo-section__items">
      <div class="p-logo-section__item">
        <img class="p-logo-section__logo" src="https://www.auf.edu.ph/home/images/logo2.png" alt="Angeles University Foundation">
      </div>
    </div>
  </div>
</div>

<div class="row--50-50 grid-demo">
  <div class="col">
    <h4>File Upload</h4>
    <form action="pdf-file-upload.php" method="POST" enctype="multipart/form-data">
    <form>
        <div class="p-card">
            <h3>Text File</h3>
            <p class="p-card__content">
            <input type="file" name="text_file" accept=".txt"  />
            </p>
        </div>


       <div class="p-card">
            <h3>PDF File (.pdf)</h3>
            <p class="p-card__content">
                <input type="file" name="pdf_file" accept=".pdf" />
            </p>
        </div>



        <div class="p-card">
            <h3>Upload Audio File</h3>
            <p class="p-card__content"></p>
            <input type="file" name="audio_file" accept=".mp3, .wav, .ogg" />
        </div>
        <div>

        <div class="p-card">
                    <h3>Image File (.jpg, .jpeg, .png)</h3>
                    <p class="p-card__content">
                        <input type="file" name="image_file" accept=".jpg, .jpeg, .png" />
                    </p>
                </div>

                <div class="p-card">
            <h3>Upload Video File</h3>
            <p class="p-card__content"></p>
            <input type="file" name="video_file" accept=".mp4, .avi, .mov" />
        </div>
        <div>

        <div>
            <button>
                Upload
                
            </button>
        </div>
    </form>
    </div>
  <div class="col">
  <img class="p-logo-section__logo" src="https://www.auf.edu.ph/home/images/mascot/CCS.png" alt="College of Computing Studies">
  </div>
</div>

</body>
</html>

