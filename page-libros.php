<?php
/**
 * Template Name: Landing Tripack Libros
 * Description: Plantilla personalizada para la landing page /libros/ de Feelgüd Academy.
 */
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tripack de ebooks — Feelgüd Academy</title>
<meta name="description" content="Ofertas Irresistibles, El arte de Diferenciarte y Chats que Conectan: los 3 ebooks de Feelgüd Academy por $17,99. Precio de lanzamiento hasta el 30 de noviembre.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;0,800;1,300;1,800&amp;family=Poppins:ital,wght@0,300;0,400;0,600;0,800;1,800&amp;display=swap">
<style>
/* ===== Tokens de marca Feelgüd ===== */
:root{
  --void:#000408; --surface:#111113; --panel:rgba(255,255,255,0.06); --line:rgba(255,255,255,0.14);
  --ink:#ffffff; --ink-muted:#c4cad0; --naranja:#fc7420; --cian:#22fcf0; --on-cian:#04121a;
  --turquesa:#1cc4cc; --line-cian:rgba(34,252,240,0.55); --arena:#e8dc96;
}
*{box-sizing:border-box}
html{scroll-behavior:smooth}
body{margin:0;background:var(--void)}
img{max-width:100%}
a{color:var(--cian)}a:hover{color:#ffffff}
a:focus-visible,button:focus-visible,summary:focus-visible{outline:3px solid #ffffff;outline-offset:4px}
.btn-cta{transition:transform .15s ease, box-shadow .15s ease}
.btn-cta:hover{transform:translateY(-1px);box-shadow:0 0 44px rgba(34,252,240,0.6) !important;color:#04121a !important}
@media (max-width:760px){
  .nav-links{order:3;width:100%;justify-content:center;gap:18px !important}
  .hero{padding-top:64px !important}
  .portadas{transform:scale(.78);height:360px !important;margin-top:-20px}
  .cupon-talon{flex-basis:100% !important;border-right:0 !important;border-bottom:3px dashed #04121a;padding:10px 0}
  .cupon-talon span{writing-mode:horizontal-tb !important;transform:none !important}
  .sello{display:none !important}
  .cupon-lista{border-left:0 !important;border-top:1px solid rgba(4,18,26,0.15)}
}
@media (prefers-reduced-motion:reduce){html{scroll-behavior:auto}.btn-cta{transition:none}}
</style>
</head>
<body>
<div style="background: #000408; color: #ffffff; font-family: Poppins, 'Helvetica Neue', Arial, sans-serif; overflow: hidden">

<!-- ================= NAV ================= -->
<header style="position: relative; z-index: 2; border-bottom: 1px solid rgba(255,255,255,0.14)">
<div style="max-width: 1200px; margin: 0 auto; padding: 20px 24px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 16px">
<a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Feelgüd Agency, inicio" style="display: inline-flex; align-items: center; gap: 14px; text-decoration: none"><img src="https://feelgudacademy.com/wp-content/uploads/2025/09/Logo-FeelGud-Ligero.png" alt="Feelgüd Agency" style="height: 52px; width: auto; display: block"><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(34,252,240,0.55); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 11px; letter-spacing: 0.18em; color: #ffffff">ACADEMY</span></a>
<nav class="nav-links" aria-label="Academia" style="display: flex; flex-wrap: wrap; gap: 28px; font-family: Montserrat, sans-serif; font-weight: 700; font-size: 14px">
<a href="#ebooks" style="color: #ffffff; text-decoration: none">Ebooks</a>
<a href="#tripack" style="color: #ffffff; text-decoration: none">Tripack</a>
<a href="#preguntas" style="color: #ffffff; text-decoration: none">Preguntas</a>
<a href="<?php echo esc_url(home_url('/')); ?>" style="color: #c4cad0; text-decoration: none">Volver a la agencia</a>
</nav>
<a class="btn-cta" href="https://feelgudacademy.com/finalizarcomprawc/?add-to-cart=1074" style="display: inline-flex; align-items: center; min-height: 44px; padding: 0 24px; border-radius: 999px; background: #22fcf0; color: #04121a; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 13px; letter-spacing: 0.02em; text-decoration: none; box-shadow: 0 0 32px rgba(34,252,240,0.45)">COMPRAR TRIPACK</a>
</div>
</header>

<main>
<!-- ================= HERO ================= -->
<section class="hero" style="position: relative; padding: 96px 24px 112px">
<div aria-hidden="true" style="position: absolute; top: -160px; left: -160px; width: 480px; height: 480px; border-radius: 50%; background: radial-gradient(circle, rgba(34,252,240,0.26), rgba(34,252,240,0) 70%)"></div>
<div aria-hidden="true" style="position: absolute; bottom: -200px; right: -160px; width: 560px; height: 560px; border-radius: 50%; background: radial-gradient(circle, rgba(252,116,32,0.28), rgba(252,116,32,0) 70%)"></div>
<div style="position: relative; max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: center; gap: 64px">

<div style="flex: 1 1 480px; min-width: 0; display: flex; flex-direction: column; align-items: flex-start; gap: 28px">
<span style="display: inline-flex; align-items: center; padding: 10px 22px; border-radius: 999px; border: 1px solid rgba(34,252,240,0.55); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 0.18em; color: #ffffff">LANZAMIENTO · TRIPACK DE EBOOKS</span>
<h1 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 300; font-size: clamp(36px, 5vw, 68px); line-height: 1.08">Lo que aplicamos con nuestros clientes…<br><span style="font-weight: 800">ahora en <span style="color: #fc7420">tus manos</span>.</span></h1>
<p style="margin: 0; max-width: 560px; font-size: 18px; line-height: 1.6; color: #c4cad0">3 ebooks prácticos para crear mejores ofertas, diferenciar tu marca y convertir más chats de WhatsApp e Instagram en ventas. Los 3 juntos por <span style="color: #e8dc96">menos de lo que costará uno</span>.</p>
<div style="display: flex; flex-wrap: wrap; align-items: center; gap: 24px">
<div style="display: flex; flex-direction: column; gap: 4px">
<span style="font-family: Poppins, sans-serif; font-weight: 800; font-size: 56px; line-height: 1; color: #22fcf0">$17,99</span>
<span style="font-size: 14px; color: #c4cad0">los 3 ebooks · valorados en <span style="color: #e8dc96">$54</span></span>
</div>
<div style="display: flex; flex-direction: column; align-items: center; gap: 8px">
<a class="btn-cta" href="https://feelgudacademy.com/finalizarcomprawc/?add-to-cart=1074" style="display: inline-flex; align-items: center; min-height: 56px; padding: 0 40px; border-radius: 999px; background: #22fcf0; color: #04121a; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 16px; text-decoration: none; box-shadow: 0 0 32px rgba(34,252,240,0.45)">QUIERO EL TRIPACK</a>
<span style="font-size: 13px; color: #c4cad0">Precio de lanzamiento hasta el 30 de noviembre</span>
</div>
</div>
</div>

<div class="portadas" style="flex: 1 1 420px; min-width: 0; position: relative; height: 420px; display: flex; align-items: center; justify-content: center">
<img src="https://feelgudacademy.com/wp-content/uploads/2026/11/ofertas-irresistibles.webp" alt="Portada de Ofertas Irresistibles" style="position: absolute; left: 50%; top: 50%; margin-left: -235px; margin-top: -150px; width: 212px; height: auto; border-radius: 10px; border: 1px solid rgba(252,116,32,0.6); box-shadow: 0 0 40px rgba(252,116,32,0.35); transform: rotate(-10deg); display: block">
<img src="https://feelgudacademy.com/wp-content/uploads/2026/11/chats-que-conectan.webp" alt="Portada de Chats que Conectan" style="position: absolute; left: 50%; top: 50%; margin-left: 23px; margin-top: -150px; width: 212px; height: auto; border-radius: 10px; border: 1px solid rgba(28,196,204,0.7); box-shadow: 0 0 40px rgba(28,196,204,0.35); transform: rotate(10deg); display: block">
<img src="https://feelgudacademy.com/wp-content/uploads/2026/11/el-arte-de-diferenciarte.webp" alt="Portada de El arte de Diferenciarte" style="position: absolute; left: 50%; top: 50%; margin-left: -120px; margin-top: -175px; width: 240px; height: auto; border-radius: 10px; border: 1px solid rgba(34,252,240,0.7); box-shadow: 0 0 48px rgba(34,252,240,0.45); display: block">
<div class="sello" aria-hidden="true" style="position: absolute; right: 4%; top: 6%; width: 112px; height: 112px; border-radius: 50%; background: #fc7420; color: #04121a; box-shadow: 0 0 40px rgba(252,116,32,0.55); transform: rotate(12deg); display: flex; flex-direction: column; align-items: center; justify-content: center; font-family: Montserrat, sans-serif; line-height: 1"><span style="font-weight: 700; font-size: 11px; letter-spacing: 0.1em">LLEVAS</span><span style="font-weight: 800; font-size: 38px">3</span><span style="font-weight: 700; font-size: 11px; letter-spacing: 0.1em">PAGAS 1</span></div>
</div>

</div>
</section>

<!-- ================= EBOOKS ================= -->
<section id="ebooks" style="background: #111113; padding: 96px 24px">
<div style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; gap: 48px">
<div style="text-align: center; display: flex; flex-direction: column; align-items: center; gap: 16px">
<span style="font-family: Montserrat, sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 0.18em; color: #22fcf0">LOS 3 EBOOKS</span>
<h2 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 700; font-size: clamp(30px, 4vw, 52px); line-height: 1.12; max-width: 820px">Bonito no es igual a rentable: <span style="color: #fc7420">aprende a vender</span></h2>
<p style="margin: 0; max-width: 620px; font-size: 17px; line-height: 1.6; color: #c4cad0">Cada ebook resuelve un problema concreto que vemos todos los días en los negocios con los que trabajamos.</p>
</div>
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(300px, 100%), 1fr)); gap: 24px">

<article style="padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(252,116,32,0.6); display: flex; flex-direction: column; gap: 16px">
<img src="https://feelgudacademy.com/wp-content/uploads/2026/11/ofertas-irresistibles.webp" alt="Portada de Ofertas Irresistibles" loading="lazy" style="width: 100%; max-width: 220px; height: auto; align-self: center; border-radius: 10px; border: 1px solid rgba(255,255,255,0.14); display: block">
<span style="font-family: Poppins, sans-serif; font-weight: 800; font-size: 40px; line-height: 1; color: #fc7420">01</span>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 22px">Ofertas Irresistibles</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Para cuando tu producto es bueno pero no se vende. Cómo presentar lo que vendes para que a tu cliente le cueste decir que no.</p>
<ul style="margin: 0; padding-left: 20px; font-size: 14px; line-height: 1.7; color: #c4cad0">
<li>Qué incluir para que el precio se vea pequeño al lado del valor.</li>
<li>Fechas límite y garantías que sí puedes cumplir.</li>
<li>Formas de pago y paquetes que facilitan el sí, con checklist final.</li>
</ul>
<div style="margin-top: auto; padding-top: 14px; border-top: 1px solid rgba(255,255,255,0.14); font-size: 14px; color: #c4cad0">Por separado: <span style="color: #e8dc96">$18</span> desde diciembre</div>
</article>

<article style="padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(34,252,240,0.55); display: flex; flex-direction: column; gap: 16px">
<img src="https://feelgudacademy.com/wp-content/uploads/2026/11/el-arte-de-diferenciarte.webp" alt="Portada de El arte de Diferenciarte" loading="lazy" style="width: 100%; max-width: 220px; height: auto; align-self: center; border-radius: 10px; border: 1px solid rgba(255,255,255,0.14); display: block">
<span style="font-family: Poppins, sans-serif; font-weight: 800; font-size: 40px; line-height: 1; color: #22fcf0">02</span>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 22px">El arte de Diferenciarte</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Para cuando sientes que compites solo por precio. Cómo dejar de ser uno más y convertirte en la opción que tu cliente elige sin mirar el precio.</p>
<ul style="margin: 0; padding-left: 20px; font-size: 14px; line-height: 1.7; color: #c4cad0">
<li>Cómo encontrar a tu cliente ideal (y saber a cuál no venderle).</li>
<li>10 caminos para diferenciarte: tu historia, un nicho, tu proceso, tu servicio…</li>
<li>Ejemplos de antes y después, y un autodiagnóstico para tu negocio.</li>
</ul>
<div style="margin-top: auto; padding-top: 14px; border-top: 1px solid rgba(255,255,255,0.14); font-size: 14px; color: #c4cad0">Por separado: <span style="color: #e8dc96">$18</span> desde diciembre</div>
</article>

<article style="padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(28,196,204,0.7); display: flex; flex-direction: column; gap: 16px">
<img src="https://feelgudacademy.com/wp-content/uploads/2026/11/chats-que-conectan.webp" alt="Portada de Chats que Conectan" loading="lazy" style="width: 100%; max-width: 220px; height: auto; align-self: center; border-radius: 10px; border: 1px solid rgba(255,255,255,0.14); display: block">
<span style="font-family: Poppins, sans-serif; font-weight: 800; font-size: 40px; line-height: 1; color: #1cc4cc">03</span>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 22px">Chats que Conectan</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Para cuando te escriben pero no compran. Atención por WhatsApp e Instagram que convierte cada chat en una venta.</p>
<ul style="margin: 0; padding-left: 20px; font-size: 14px; line-height: 1.7; color: #c4cad0">
<li>Las fases de una venta por chat y la que casi todos olvidan.</li>
<li>Plantillas para responder tus preguntas frecuentes.</li>
<li>Cómo configurar WhatsApp Business: catálogo, mensajes automáticos y etiquetas.</li>
</ul>
<div style="margin-top: auto; padding-top: 14px; border-top: 1px solid rgba(255,255,255,0.14); font-size: 14px; color: #c4cad0">Por separado: <span style="color: #e8dc96">$18</span> desde diciembre</div>
</article>

</div>
</div>
</section>

<!-- ================= PARA QUIÉN ================= -->
<section style="padding: 96px 24px">
<div style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; gap: 48px">
<div style="text-align: center; display: flex; flex-direction: column; align-items: center; gap: 16px">
<span style="font-family: Montserrat, sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 0.18em; color: #22fcf0">¿PARA QUIÉN ES?</span>
<h2 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 300; font-size: clamp(30px, 4vw, 52px); line-height: 1.12">Si llevas tu propio marketing,<br><span style="font-weight: 800">esto es <span style="background: #1cc4cc; color: #04121a; padding: 0 14px; border-radius: 999px; display: inline-block; transform: rotate(-2deg)">para ti</span></span></h2>
</div>
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(280px, 100%), 1fr)); gap: 24px">
<div style="padding: 32px; border-radius: 24px; border: 1px solid rgba(255,255,255,0.14); display: flex; flex-direction: column; gap: 12px">
<svg aria-hidden="true" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#22fcf0" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"></path><path d="M5 21V8l7-5 7 5v13"></path><path d="M9 21v-6h6v6"></path></svg>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 20px">Emprendedores y pymes</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Que hacen sus propios anuncios y quieren dejar de improvisar.</p>
</div>
<div style="padding: 32px; border-radius: 24px; border: 1px solid rgba(255,255,255,0.14); display: flex; flex-direction: column; gap: 12px">
<svg aria-hidden="true" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#22fcf0" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21a8 8 0 0 1 16 0"></path></svg>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 20px">Marcas personales</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Coaches, conferencistas y profesionales que venden sus servicios en redes.</p>
</div>
<div style="padding: 32px; border-radius: 24px; border: 1px solid rgba(255,255,255,0.14); display: flex; flex-direction: column; gap: 12px">
<svg aria-hidden="true" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#22fcf0" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17l6-6 4 4 8-8"></path><path d="M14 7h7v7"></path></svg>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 20px">Community managers</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Y freelancers que quieren dar mejores resultados a sus clientes.</p>
</div>
</div>
</div>
</section>

<!-- ================= TRIPACK / OFERTA ================= -->
<section id="tripack" style="padding: 0 24px 96px">
<div style="position: relative; max-width: 1000px; margin: 0 auto; padding: 64px 24px; border-radius: 40px; background: #111113; border: 1px solid rgba(34,252,240,0.55); overflow: hidden; display: flex; flex-direction: column; align-items: center; text-align: center; gap: 24px">
<div aria-hidden="true" style="position: absolute; top: -120px; left: -120px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(34,252,240,0.3), rgba(34,252,240,0) 70%)"></div>
<div aria-hidden="true" style="position: absolute; bottom: -120px; right: -120px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(34,252,240,0.3), rgba(34,252,240,0) 70%)"></div>
<div aria-hidden="true" style="position: absolute; top: -120px; right: -120px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(252,116,32,0.32), rgba(252,116,32,0) 70%)"></div>
<div aria-hidden="true" style="position: absolute; bottom: -120px; left: -120px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(252,116,32,0.32), rgba(252,116,32,0) 70%)"></div>
<span style="position: relative; display: inline-flex; align-items: center; padding: 10px 22px; border-radius: 999px; border: 1px solid rgba(252,116,32,0.8); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 0.18em; color: #ffffff">PRECIO DE LANZAMIENTO</span>
<h2 style="position: relative; margin: 0; font-family: Montserrat, sans-serif; font-weight: 700; font-size: clamp(28px, 4.4vw, 52px); line-height: 1.12">Llévate <span style="color: #fc7420">los 3 ebooks</span> por el precio de uno</h2>

<div style="position: relative; display: flex; flex-wrap: wrap; align-items: stretch; justify-content: center; width: 100%; max-width: 720px; border-radius: 24px; overflow: hidden; background: #ffffff; color: #04121a; text-align: left">
<div class="cupon-talon" style="flex: 0 0 72px; background: #fc7420; display: flex; align-items: center; justify-content: center; border-right: 3px dashed #04121a"><span style="writing-mode: vertical-rl; transform: rotate(180deg); font-family: Montserrat, sans-serif; font-weight: 800; font-size: 18px; letter-spacing: 0.3em">TRIPACK</span></div>
<div style="flex: 1 1 260px; padding: 28px 32px; display: flex; flex-direction: column; gap: 6px">
<span style="font-family: Montserrat, sans-serif; font-weight: 700; font-size: 12px; letter-spacing: 0.18em">LOS 3 EBOOKS EN DIGITAL</span>
<span style="font-family: Poppins, sans-serif; font-weight: 800; font-size: 64px; line-height: 1">$17,99</span>
<span style="font-size: 14px">Valorado en $54 · ahorras $36</span>
</div>
<div class="cupon-lista" style="flex: 1 1 220px; padding: 28px 32px; border-left: 1px solid rgba(4,18,26,0.15); display: flex; flex-direction: column; justify-content: center; gap: 8px; font-size: 14px; line-height: 1.5">
<span>✓ Ofertas Irresistibles</span>
<span>✓ El arte de Diferenciarte</span>
<span>✓ Chats que Conectan</span>
</div>
</div>

<div style="position: relative; display: flex; flex-direction: column; align-items: center; gap: 10px">
<a class="btn-cta" href="https://feelgudacademy.com/finalizarcompra=/?add-to-cart=1074" style="display: inline-flex; align-items: center; min-height: 60px; padding: 0 48px; border-radius: 999px; background: #22fcf0; color: #04121a; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 17px; text-decoration: none; box-shadow: 0 0 32px rgba(34,252,240,0.45)">COMPRAR AHORA</a>
<span style="font-size: 13px; color: #c4cad0">Precio de lanzamiento hasta el 30 de noviembre · desde diciembre, $18 cada uno</span>
</div>
</div>
</section>

<!-- ================= PREGUNTAS ================= -->
<section id="preguntas" style="background: #111113; padding: 96px 24px">
<div style="max-width: 820px; margin: 0 auto; display: flex; flex-direction: column; gap: 32px">
<div style="text-align: center; display: flex; flex-direction: column; align-items: center; gap: 16px">
<span style="font-family: Montserrat, sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 0.18em; color: #22fcf0">PREGUNTAS FRECUENTES</span>
<h2 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 700; font-size: clamp(28px, 3.6vw, 44px); line-height: 1.12">Antes de <span style="color: #fc7420">comprar</span></h2>
</div>
<div style="display: flex; flex-direction: column; gap: 12px">
<details style="padding: 22px 26px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14)"><summary style="cursor: pointer; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 17px">¿Cómo recibo los ebooks?</summary><p style="margin: 14px 0 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Al completar tu compra, te enviamos los 3 ebooks a tu correo electrónico.</p></details>
<details style="padding: 22px 26px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14)"><summary style="cursor: pointer; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 17px">¿Puedo comprar solo uno?</summary><p style="margin: 14px 0 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Sí. Desde diciembre cada ebook estará disponible por separado a $18. Durante el lanzamiento, el tripack te da los 3 por $17,99.</p></details>
<details style="padding: 22px 26px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14)"><summary style="cursor: pointer; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 17px">¿Necesito experiencia previa en marketing?</summary><p style="margin: 14px 0 0; font-size: 15px; line-height: 1.6; color: #c4cad0">No. Están escritos para cualquier persona con un negocio, aunque nunca haya hecho marketing.</p></details>
<details style="padding: 22px 26px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14)"><summary style="cursor: pointer; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 17px">¿Qué métodos de pago aceptan?</summary><p style="margin: 14px 0 0; font-size: 15px; line-height: 1.6; color: #c4cad0">El pago se hace de forma segura con Stripe, que acepta tarjeta de crédito o débito y otros métodos según tu país.</p></details>
</div>
</div>
</section>

<!-- ================= PUENTE A LA AGENCIA ================= -->
<section style="padding: 96px 24px">
<div style="max-width: 1200px; margin: 0 auto; padding: 40px; border-radius: 24px; border: 1px solid rgba(255,255,255,0.14); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 24px">
<div style="flex: 1 1 320px; display: flex; flex-direction: column; gap: 8px">
<span style="font-family: Montserrat, sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 0.18em; color: #22fcf0">FEELGÜD AGENCY</span>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 26px">¿Prefieres que lo hagamos por ti?</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Reserva un <span style="color: #e8dc96">diagnóstico gratis</span> y te decimos qué cambiar primero para vender más.</p>
</div>
<a href="<?php echo esc_url(home_url('/')); ?>" style="display: inline-flex; align-items: center; min-height: 48px; padding: 0 28px; border-radius: 999px; border: 1px solid rgba(34,252,240,0.55); color: #ffffff; font-family: Montserrat, sans-serif; font-weight: 700; font-size: 14px; text-decoration: none">Conocer la agencia</a>
</div>
</section>
</main>

<!-- ================= FOOTER ================= -->
<footer style="border-top: 1px solid rgba(255,255,255,0.14); padding: 40px 24px">
<div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 24px">
<img src="https://feelgudacademy.com/wp-content/uploads/2025/09/Logo-FeelGud-Ligero.png" alt="Feelgüd Agency" loading="lazy" style="height: 40px; width: auto; display: block">
<span style="font-size: 12px; letter-spacing: 0.18em; color: #c4cad0">MARKETING QUE IMPULSA TU NEGOCIO</span>
<nav aria-label="Pie" style="display: flex; flex-wrap: wrap; gap: 20px; font-size: 14px">
<a href="<?php echo esc_url(home_url('/')); ?>" style="color: #c4cad0; text-decoration: none">Inicio</a>
<a href="#ebooks" style="color: #c4cad0; text-decoration: none">Ebooks</a>
<a href="#preguntas" style="color: #c4cad0; text-decoration: none">Preguntas</a>
</nav>
<span style="font-size: 13px; color: #c4cad0">© 2026 Feelgüd Agency</span>
</div>
</footer>

</div>
</body>
</html>
