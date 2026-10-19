<?php
function generateRandomSubdomain($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Website Create Webp Vip</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@700;900&family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');
        
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #ffffff; /* Putih sebagai dasar bersih */
            color: #111;
        }

        .font-game { font-family: 'Orbitron', sans-serif; }

        .premium-overlay {
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(10px);
        }

        .modal-content {
            background: white;
            border-top: 8px solid #ff0000;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .card-custom {
            background: #ffffff;
            border: 2px solid #f3f4f6;
            transition: all 0.3s ease;
        }

        .card-custom:hover {
            border-color: #ff0000;
            box-shadow: 0 10px 20px rgba(255, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .img-box {
            position: relative;
            width: 100%;
            height: 170px;
            overflow: hidden;
            background: #000;
        }

        .img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s;
        }

        .card-custom:hover .img-box img {
            scale: 1.05;
        }

        .navbar {
            background: #000000;
            border-bottom: 4px solid #ff0000;
        }

        .btn-gen {
            background: #000000;
            color: #ffffff;
            border: 1px solid #000000;
            font-weight: 800;
            transition: all 0.3s;
        }

        .btn-gen:hover {
            background: #ff0000;
            border-color: #ff0000;
            color: white;
        }

        .badge-premium {
            background: #ff0000;
            color: white;
            font-size: 8px;
            font-weight: 900;
            padding: 2px 8px;
            text-transform: uppercase;
        }
    </style>
</head>
<body class="pb-10">

<div id="pModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 premium-overlay" onclick="closeM()">
    <div class="modal-content max-w-sm w-full rounded-3xl p-8 transform transition-all" onclick="event.stopPropagation()">
        <div class="text-center">
            <div class="w-20 h-20 bg-black text-white rounded-2xl flex items-center justify-center mx-auto mb-5 shadow-xl shadow-black/20">
                <i class="fas fa-bolt text-red-600 text-4xl"></i>
            </div>
            <h2 class="font-game text-xl font-black text-black mb-1 uppercase">Premium <span class="text-red-600">Aktif</span></h2>
            <p class="text-gray-500 font-bold text-[9px] tracking-[0.2em] uppercase mb-6">Selamat Menggunakan Fitur Premium</p>
            
            <div class="bg-gray-50 rounded-2xl p-4 text-left border border-gray-100 mb-6 space-y-3">
                <p class="text-[10px] font-black text-black uppercase flex items-center"><i class="fas fa-check-circle text-red-600 mr-2"></i> Fast Deployment 2026</p>
                <p class="text-[10px] font-black text-black uppercase flex items-center"><i class="fas fa-check-circle text-red-600 mr-2"></i> NO CURL , S2M</p>
                <p class="text-[10px] font-black text-green-600 uppercase flex items-center"><i class="fas fa-shield-alt text-red-600 mr-2"></i> Ressult Anti Bocor</p>
            </div>

            <button onclick="closeM()" class="w-full py-4 bg-red-600 text-white rounded-xl font-black text-sm uppercase shadow-lg hover:bg-black transition-colors">
                Lanjutkan
            </button>
        </div>
    </div>
</div>

<nav class="navbar sticky top-0 z-50 px-6 py-4 flex items-center justify-between shadow-2xl">
    <div class="flex items-center space-x-3">
        <div class="bg-white text-black px-2 py-1 rounded font-black text-sm italic">2026</div>
        <span class="font-game font-black text-xl tracking-tighter uppercase text-white">CAHYO<span class="text-red-600">SR</div>
    <div class="flex items-center bg-white/10 rounded-full px-3 py-1">
        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse mr-2"></div>
        <span class="text-white text-[10px] font-bold uppercase tracking-widest">Online</span>
    </div>
</nav>

<div class="px-6 pt-10 pb-4">
    <h1 class="text-3xl font-black text-black uppercase italic tracking-tighter border-l-8 border-red-600 pl-4 leading-none">
        CREATE WEB <span class="text-red-600">VIP</span>
    </h1>
    <p class="text-gray-400 text-[10px] font-bold uppercase tracking-[0.4em] mt-2">Selamat Menggunakan Create Web P Vip Semoga Stok Akun </p>
</div>

<main class="px-5 py-4">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

        <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://i.ibb.co.com/k25qPwHb/Screenshot-20260215-205607-Telegram.jpg" />
                <div class="absolute top-0 left-0 badge-premium">Premium v1</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">CODASHOP FF</h3>
                <input type="hidden" name="nomor" value="1" />
                <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
                <input type="hidden" name="trigger_alpha_92" value="1" />
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>

        <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://i.ibb.co.com/MFmD1Jr/Screenshot-20260215-205639-Telegram.jpg" />
                <div class="absolute top-0 left-0 badge-premium">Premium v3</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">CLAIM FF</h3>
                <input type="hidden" name="nomor" value="3" />
                <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
                <input type="hidden" name="trigger_alpha_92" value="3" />
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
       
                <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://i.ibb.co.com/mVkJPYgk/Screenshot-20260215-205701-Telegram.jpg" />
                <div class="absolute top-0 left-0 badge-premium">Premium v7</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">CLAIM FF 2</h3>
                <input type="hidden" name="nomor" value="7" />
                <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
                <input type="hidden" name="trigger_alpha_92" value="7" />
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
        
                <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://i.ibb.co.com/zHQ9x98M/Screenshot-20260215-205804-Telegram.jpg" />
                <div class="absolute top-0 left-0 badge-premium">Premium v9</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">MOBILE LEGEND</h3>
                <input type="hidden" name="nomor" value="9" />
                <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
                <input type="hidden" name="trigger_alpha_92" value="9" />
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
        
                <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://i.ibb.co.com/5WGZWXgZ/Screenshot-20260215-205723-Telegram.jpg" />
                <div class="absolute top-0 left-0 badge-premium">Premium v11</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">CODASHOP ML</h3>
                <input type="hidden" name="nomor" value="11" />
                <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
                <input type="hidden" name="trigger_alpha_92" value="11" />
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
                       
                <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://i.ibb.co.com/23SbC6wY/Screenshot-20260305-135210-Chrome.jpg" />
                <div class="absolute top-0 left-0 badge-premium">Premium v12</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">FF BETA</h3>
                <input type="hidden" name="nomor" value="12" />
                <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
                <input type="hidden" name="trigger_alpha_92" value="12" />
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
        
                        <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://i.ibb.co.com/4gp7KS6g/Screenshot-20260305-135246-Chrome.jpg" />
                <div class="absolute top-0 left-0 badge-premium">Premium v14</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">ML BETA</h3>
                <input type="hidden" name="nomor" value="14" />
                <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
                <input type="hidden" name="trigger_alpha_92" value="14" />
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
                
                    <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://i.ibb.co.com/fzsZ6hcB/Screenshot-20260618-181216-Chrome.jpg" />
                <div class="absolute top-0 left-0 badge-premium">Premium v20</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">FREEFIRE GIN TAMA</h3>
                <input type="hidden" name="nomor" value="20" />
                <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
                <input type="hidden" name="trigger_alpha_92" value="20" />
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
        
                    <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://i.ibb.co.com/2YdfkbzW/Screenshot-20260619-012313-Chrome.jpg" />
                <div class="absolute top-0 left-0 badge-premium">Premium v21</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">FREEFIRE LEGENDARY</h3>
                <input type="hidden" name="nomor" value="21" />
                <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
                <input type="hidden" name="trigger_alpha_92" value="21" />
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
            </form>
                       
    </div>
</main>

<footer class="mt-10 py-10 bg-black text-white text-center border-t-4 border-red-600">
    <p class="font-game font-black text-2xl mb-1">CAHYO<span class="text-red-600">SR</span></p>
    <p class="text-gray-500 text-[8px] tracking-[0.4em] uppercase">Developer Website P &copy; 2026</p>
</footer>

<script>
    window.onload = () => {
        const modal = document.getElementById('pModal');
        modal.classList.remove('hidden');
        setTimeout(() => { modal.style.opacity = '1'; }, 100);
    };

    function closeM() {
        const modal = document.getElementById('pModal');
        modal.style.opacity = '0';
        setTimeout(() => { modal.style.display = 'none'; }, 400);
    }
</script>

</body>
</html>