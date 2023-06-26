<!--
\\Author: Thomas Royer, Tesniere Mathéo, Bastien Huard
\\Login : etu745
\\Groupe: ISEN X GROUPE 7
\\Annee: 2023
-->

<!doctype html>
<html lang="fr">

<head>
  <!-- Meta tags -->

  <!-- CSS Style -->
  <link href="css/styles.css" rel="stylesheet" />

  <!-- Font -->

  <!-- Title -->
  <title>ACCIDENTS</title>

</head>

<body>
  <!-- Header -->
  
  <div class="Navbar">
    <div class="Text_bar" style="left : 0vw"><h2>Accueil</h2></div>
    <div class="Text_bar" style="left : 25vw"><h2>Accident</h2></div>
    <div class="Text_bar" style="left : 50vw"><h2>Cluster</h2></div>
  </div>

  <div class="logo">
    <svg width="64" height="40" viewBox="0 0 64 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M44.2537 37.1402C48.2599 40.9419 55.2762 40.0523 59.9252 35.1533C64.5742 30.2543 61.3386 27.1598 57.3325 23.3581C53.3263 19.5564 50.0667 16.4872 45.4177 21.3862C40.7687 26.2852 40.2476 33.3385 44.2537 37.1402Z" fill="#C00000"/>
      <path d="M44.2537 37.1402C48.2599 40.9419 55.2762 40.0523 59.9252 35.1533C64.5742 30.2543 61.3386 27.1598 57.3325 23.3581C53.3263 19.5564 50.0667 16.4872 45.4177 21.3862C40.7687 26.2852 40.2476 33.3385 44.2537 37.1402Z" fill="#C00000"/>
      <path d="M44.2537 37.1402C48.2599 40.9419 55.2762 40.0523 59.9252 35.1533C64.5742 30.2543 61.3386 27.1598 57.3325 23.3581C53.3263 19.5564 50.0667 16.4872 45.4177 21.3862C40.7687 26.2852 40.2476 33.3385 44.2537 37.1402Z" fill="#C00000"/>
      <path d="M44.2537 37.1402C48.2599 40.9419 55.2762 40.0523 59.9252 35.1533C64.5742 30.2543 61.3386 27.1598 57.3325 23.3581C53.3263 19.5564 50.0667 16.4872 45.4177 21.3862C40.7687 26.2852 40.2476 33.3385 44.2537 37.1402Z" fill="#454545"/>
      <path d="M43.2537 2.35809C47.2599 -1.44359 54.2762 -0.554037 58.9252 4.34496C63.5742 9.24396 60.3386 12.3385 56.3325 16.1402C52.3263 19.9419 49.0667 23.0111 44.4177 18.1121C39.7687 13.2131 39.2476 6.15976 43.2537 2.35809Z" fill="#C00000"/>
      <path d="M43.2537 2.35809C47.2599 -1.44359 54.2762 -0.554037 58.9252 4.34496C63.5742 9.24396 60.3386 12.3385 56.3325 16.1402C52.3263 19.9419 49.0667 23.0111 44.4177 18.1121C39.7687 13.2131 39.2476 6.15976 43.2537 2.35809Z" fill="#C00000"/>
      <path d="M43.2537 2.35809C47.2599 -1.44359 54.2762 -0.554037 58.9252 4.34496C63.5742 9.24396 60.3386 12.3385 56.3325 16.1402C52.3263 19.9419 49.0667 23.0111 44.4177 18.1121C39.7687 13.2131 39.2476 6.15976 43.2537 2.35809Z" fill="#C00000"/>
      <path d="M43.2537 2.35809C47.2599 -1.44359 54.2762 -0.554037 58.9252 4.34496C63.5742 9.24396 60.3386 12.3385 56.3325 16.1402C52.3263 19.9419 49.0667 23.0111 44.4177 18.1121C39.7687 13.2131 39.2476 6.15976 43.2537 2.35809Z" fill="#454545"/>
      <path d="M5.25374 35.1402C9.25987 38.9419 16.2762 38.0523 20.9252 33.1533C25.5742 28.2543 22.3386 25.1598 18.3325 21.3581C14.3263 17.5564 11.0667 14.4872 6.41771 19.3862C1.76874 24.2852 1.24761 31.3385 5.25374 35.1402Z" fill="#C00000"/>
      <path d="M5.25374 35.1402C9.25987 38.9419 16.2762 38.0523 20.9252 33.1533C25.5742 28.2543 22.3386 25.1598 18.3325 21.3581C14.3263 17.5564 11.0667 14.4872 6.41771 19.3862C1.76874 24.2852 1.24761 31.3385 5.25374 35.1402Z" fill="#C00000"/>
      <path d="M5.25374 35.1402C9.25987 38.9419 16.2762 38.0523 20.9252 33.1533C25.5742 28.2543 22.3386 25.1598 18.3325 21.3581C14.3263 17.5564 11.0667 14.4872 6.41771 19.3862C1.76874 24.2852 1.24761 31.3385 5.25374 35.1402Z" fill="#C00000"/>
      <path d="M5.25374 35.1402C9.25987 38.9419 16.2762 38.0523 20.9252 33.1533C25.5742 28.2543 22.3386 25.1598 18.3325 21.3581C14.3263 17.5564 11.0667 14.4872 6.41771 19.3862C1.76874 24.2852 1.24761 31.3385 5.25374 35.1402Z" fill="#454545"/>
      <path d="M5.25374 4.35809C9.25987 0.556407 16.2762 1.44596 20.9252 6.34496C25.5742 11.244 22.3386 14.3385 18.3325 18.1402C14.3263 21.9419 11.0667 25.0111 6.41771 20.1121C1.76874 15.2131 1.24761 8.15976 5.25374 4.35809Z" fill="#C00000"/>
      <path d="M5.25374 4.35809C9.25987 0.556407 16.2762 1.44596 20.9252 6.34496C25.5742 11.244 22.3386 14.3385 18.3325 18.1402C14.3263 21.9419 11.0667 25.0111 6.41771 20.1121C1.76874 15.2131 1.24761 8.15976 5.25374 4.35809Z" fill="#C00000"/>
      <path d="M5.25374 4.35809C9.25987 0.556407 16.2762 1.44596 20.9252 6.34496C25.5742 11.244 22.3386 14.3385 18.3325 18.1402C14.3263 21.9419 11.0667 25.0111 6.41771 20.1121C1.76874 15.2131 1.24761 8.15976 5.25374 4.35809Z" fill="#C00000"/>
      <path d="M5.25374 4.35809C9.25987 0.556407 16.2762 1.44596 20.9252 6.34496C25.5742 11.244 22.3386 14.3385 18.3325 18.1402C14.3263 21.9419 11.0667 25.0111 6.41771 20.1121C1.76874 15.2131 1.24761 8.15976 5.25374 4.35809Z" fill="#454545"/>
      <path d="M0 19.8255C0 10.6175 8.07838 3.49788 17.2134 4.65507L28.4427 6.07755C30.5238 6.34118 32.6297 6.34461 34.7117 6.08776L46.7509 4.60252C55.915 3.47196 64 10.6208 64 19.8544C64 29.8326 54.6388 37.1648 44.9512 34.7745L36.7282 32.7456C33.3459 31.9111 29.81 31.9221 26.4329 32.7777L19.0472 34.6489C9.38428 37.097 0 29.7938 0 19.8255Z" fill="#C00000"/>
      <path d="M17 18.4745C17 14.0563 20.5817 10.4745 25 10.4745H41C45.4183 10.4745 49 14.0563 49 18.4745C49 22.8928 45.4183 26.4745 41 26.4745H25C20.5817 26.4745 17 22.8928 17 18.4745Z" fill="#0D0D0D"/>
    </svg>
  </div>
  
  <!-- Content -->

</body>

</html>