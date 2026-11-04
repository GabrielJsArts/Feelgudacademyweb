<?php
/**
 * Template Name: Feelgüd Home
 * Front Page Template
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Feelgüd Agency — Agencia de marketing y Meta Ads</title>
<meta name="description" content="Agencia de marketing y Meta Ads con más de 10 años haciendo crecer marcas en Latinoamérica, Europa y Estados Unidos. Reserva tu diagnóstico gratis.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;0,800;1,300;1,800&amp;family=Poppins:ital,wght@0,300;0,400;0,600;0,800;1,800&amp;display=swap">
<?php wp_head(); ?>
<style>
/* ===== Tokens de marca Feelgüd ===== */
:root{
  --void:#000408; --surface:#111113; --panel:rgba(255,255,255,0.06); --line:rgba(255,255,255,0.14);
  --ink:#ffffff; --ink-muted:#c4cad0; --naranja:#fc7420; --cian:#22fcf0; --on-cian:#04121a;
  --turquesa:#1cc4cc; --line-cian:rgba(34,252,240,0.55); --arena:#e8dc96;
  --glow-cian:0 0 32px rgba(34,252,240,0.45);
}
*{box-sizing:border-box}
html{scroll-behavior:smooth}
body{margin:0;background:var(--void)}
img{max-width:100%}
a{color:var(--cian)}a:hover{color:#ffffff}
a:focus-visible,button:focus-visible{outline:3px solid #ffffff;outline-offset:4px}
h1, h2, h3 { text-transform: none !important; }
blockquote { padding: 0 !important; border: none !important; }
.btn-cta{transition:transform .15s ease, box-shadow .15s ease}
.btn-cta:hover{transform:translateY(-1px);box-shadow:0 0 44px rgba(34,252,240,0.6)}
@media (max-width:760px){
  .nav-links{order:3;width:100%;justify-content:center;gap:18px !important}
  .hero{padding-top:72px !important}
}
@media (prefers-reduced-motion:reduce){html{scroll-behavior:auto}.btn-cta{transition:none}}
</style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div style="background: #000408; color: #ffffff; font-family: Poppins, 'Helvetica Neue', Arial, sans-serif; overflow: hidden">

<!-- ================= NAV ================= -->
<header style="position: relative; z-index: 2; border-bottom: 1px solid rgba(255,255,255,0.14)">
<div style="max-width: 1200px; margin: 0 auto; padding: 20px 24px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 16px">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Feelgüd Agency, inicio" style="display: inline-flex; align-items: center"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/feelgud.png" alt="Feelgüd Agency" width="141" height="52" style="height: 52px; width: auto; display: block"></a>
<nav class="nav-links" aria-label="Principal" style="display: flex; flex-wrap: wrap; gap: 28px; font-family: Montserrat, sans-serif; font-weight: 700; font-size: 14px">
<a href="#servicios" style="color: #ffffff; text-decoration: none">Servicios</a>
<a href="#casos" style="color: #ffffff; text-decoration: none">Casos</a>
<a href="#metodo" style="color: #ffffff; text-decoration: none">Cómo trabajamos</a>
<a href="#testimonios" style="color: #ffffff; text-decoration: none">Testimonios</a>
<a href="#academia" style="color: #c4cad0; text-decoration: none">Academia</a>
</nav>
<a class="btn-cta" href="https://wa.me/34661053918/?text=Hola,%20me%20interesa%C3%ADa%20saber%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20cursos%20de%20tu%20p%C3%A1gina%20web" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; min-height: 44px; padding: 0 24px; border-radius: 999px; background: #22fcf0; color: #04121a; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 13px; letter-spacing: 0.02em; text-decoration: none; box-shadow: 0 0 32px rgba(34,252,240,0.45)">DIAGNÓSTICO GRATIS</a>
</div>
</header>

<main>
<!-- ================= HERO ================= -->
<section class="hero" style="position: relative; padding: 120px 24px 96px">
<div aria-hidden="true" style="position: absolute; top: -160px; left: -160px; width: 480px; height: 480px; border-radius: 50%; background: radial-gradient(circle, rgba(34,252,240,0.28), rgba(34,252,240,0) 70%)"></div>
<div aria-hidden="true" style="position: absolute; top: -120px; right: -180px; width: 520px; height: 520px; border-radius: 50%; background: radial-gradient(circle, rgba(252,116,32,0.30), rgba(252,116,32,0) 70%)"></div>
<div style="position: relative; max-width: 960px; margin: 0 auto; display: flex; flex-direction: column; align-items: center; text-align: center; gap: 32px">
<span style="display: inline-flex; align-items: center; padding: 10px 22px; border-radius: 999px; border: 1px solid rgba(34,252,240,0.55); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 0.18em; color: #ffffff">AGENCIA DE MARKETING Y META ADS · +10 AÑOS</span>
<h1 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 300; font-size: clamp(38px, 5.6vw, 76px); line-height: 1.08">Cualquiera puede darte likes…<br><span style="font-weight: 800">nosotros te traemos <span style="color: #fc7420">clientes</span>.</span></h1>
<p style="margin: 0; max-width: 680px; font-size: 18px; line-height: 1.6; color: #c4cad0">Anuncios, contenido y estrategia para empresas que quieren vender más, no solo verse bonitas. Llevamos <span style="color: #e8dc96">más de una década</span> haciendo crecer marcas en Latinoamérica, Europa y Estados Unidos.</p>
<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 16px">
<a class="btn-cta" href="https://wa.me/34661053918/?text=Hola,%20me%20interesa%C3%ADa%20saber%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20cursos%20de%20tu%20p%C3%A1gina%20web" target="_blank" rel="noopener" style="display: inline-flex; flex-direction: column; align-items: center; justify-content: center; min-height: 56px; padding: 12px 40px; border-radius: 999px; background: #22fcf0; color: #04121a; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 16px; text-decoration: none; box-shadow: 0 0 32px rgba(34,252,240,0.45)">RESERVA TU DIAGNÓSTICO GRATIS</a>
<a href="#casos" style="display: inline-flex; align-items: center; min-height: 56px; padding: 0 32px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.35); color: #ffffff; font-family: Montserrat, sans-serif; font-weight: 700; font-size: 15px; text-decoration: none">Ver casos reales</a>
</div>
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; width: 100%; margin-top: 32px">
<div style="padding: 24px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14)"><div style="font-family: Poppins, sans-serif; font-weight: 800; font-size: 44px; color: #22fcf0; line-height: 1">+10</div><div style="margin-top: 8px; font-size: 14px; color: #c4cad0">años haciendo marketing</div></div>
<div style="padding: 24px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14)"><div style="font-family: Poppins, sans-serif; font-weight: 800; font-size: 44px; color: #22fcf0; line-height: 1">+65</div><div style="margin-top: 8px; font-size: 14px; color: #c4cad0">marcas aliadas</div></div>
<div style="padding: 24px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14)"><div style="font-family: Poppins, sans-serif; font-weight: 800; font-size: 44px; color: #22fcf0; line-height: 1">7 años</div><div style="margin-top: 8px; font-size: 14px; color: #c4cad0">con un mismo cliente</div></div>
<div style="padding: 24px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14)"><div style="font-family: Poppins, sans-serif; font-weight: 800; font-size: 44px; color: #22fcf0; line-height: 1">4</div><div style="margin-top: 8px; font-size: 14px; color: #c4cad0">áreas, un solo equipo</div></div>
</div>
</div>
</section>

<!-- ================= SERVICIOS ================= -->
<section id="servicios" style="background: #111113; padding: 96px 24px">
<div style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; gap: 48px">
<div style="text-align: center; display: flex; flex-direction: column; align-items: center; gap: 16px">
<span style="font-family: Montserrat, sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 0.18em; color: #22fcf0">¿QUÉ HACEMOS?</span>
<h2 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 700; font-size: clamp(30px, 4vw, 52px); line-height: 1.12; max-width: 820px">Todo lo que tu marca necesita para <span style="color: #fc7420">vender en digital</span></h2>
<p style="margin: 0; max-width: 620px; font-size: 17px; line-height: 1.6; color: #c4cad0">Elige un servicio o combínalos. Trabajamos como tu departamento de marketing, sin que tengas que contratar a cuatro personas.</p>
</div>
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px">

<article style="padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(34,252,240,0.55); box-shadow: 0 0 32px rgba(34,252,240,0.12); display: flex; flex-direction: column; gap: 16px">
<svg aria-hidden="true" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#22fcf0" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11v2a1 1 0 0 0 1 1h2l5 4V6L6 10H4a1 1 0 0 0-1 1z"></path><path d="M15 9a4 4 0 0 1 0 6"></path><path d="M18 6a8 8 0 0 1 0 12"></path></svg>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 18px; letter-spacing: 0.04em; color: #22fcf0">PAID MEDIA</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Campañas que traen leads y ventas, optimizadas cada semana con datos, no con intuición.</p>
<div style="display: flex; flex-wrap: wrap; gap: 8px; margin-top: auto"><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">Meta Ads</span><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">Google Ads</span><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">YouTube</span><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">TikTok</span></div>
</article>

<article style="padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(34,252,240,0.55); box-shadow: 0 0 32px rgba(34,252,240,0.12); display: flex; flex-direction: column; gap: 16px">
<svg aria-hidden="true" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#22fcf0" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="13" height="14" rx="2"></rect><path d="M16 10l5-3v10l-5-3"></path></svg>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 18px; letter-spacing: 0.04em; color: #22fcf0">PRODUCCIÓN CREATIVA</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Videos, UGC y piezas gráficas que frenan el scroll y convierten. También con IA.</p>
<div style="display: flex; flex-wrap: wrap; gap: 8px; margin-top: auto"><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">Videos</span><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">UGC</span><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">Diseño gráfico</span><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">Avatares IA</span></div>
</article>

<article style="padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(34,252,240,0.55); box-shadow: 0 0 32px rgba(34,252,240,0.12); display: flex; flex-direction: column; gap: 16px">
<svg aria-hidden="true" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#22fcf0" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8"></path><path d="M12 17v4"></path><path d="M7 9h6"></path><path d="M7 12h10"></path></svg>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 18px; letter-spacing: 0.04em; color: #22fcf0">GESTIÓN DIGITAL</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Redes, newsletter, web y CRM trabajando como un solo sistema para que ningún lead se pierda.</p>
<div style="display: flex; flex-wrap: wrap; gap: 8px; margin-top: auto"><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">Redes sociales</span><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">Newsletter</span><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">Diseño web</span><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">CRM</span></div>
</article>

<article style="padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(34,252,240,0.55); box-shadow: 0 0 32px rgba(34,252,240,0.12); display: flex; flex-direction: column; gap: 16px">
<svg aria-hidden="true" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#22fcf0" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="12" r="5"></circle><circle cx="12" cy="12" r="1"></circle></svg>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 18px; letter-spacing: 0.04em; color: #22fcf0">CONSULTORÍA</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Estrategia, dirección creativa e imagen para que cada euro o dólar tenga un objetivo claro.</p>
<div style="display: flex; flex-wrap: wrap; gap: 8px; margin-top: auto"><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">Estrategia digital</span><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">Dirección creativa</span><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-size: 12px">Asesoría de imagen</span></div>
</article>

</div>
</div>
</section>

<!-- ================= MÉTODO ================= -->
<section id="metodo" style="padding: 96px 24px">
<div style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; gap: 48px">
<div style="text-align: center; display: flex; flex-direction: column; align-items: center; gap: 16px">
<span style="font-family: Montserrat, sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 0.18em; color: #22fcf0">NUESTRA FÓRMULA</span>
<h2 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 300; font-size: clamp(30px, 4vw, 52px); line-height: 1.12">Sistemas personalizados,<br><span style="font-weight: 800">de adquisición&nbsp;<span style="background: #1cc4cc; color: #04121a; padding: 0 14px; border-radius: 999px; display: inline-block; transform: rotate(-2deg)">de clientes</span></span></h2>
</div>
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px">
<div style="display: flex; flex-direction: column; gap: 12px; padding: 32px; border-radius: 24px; border: 1px solid rgba(255,255,255,0.14)">
<span style="font-family: Poppins, sans-serif; font-weight: 800; font-size: 56px; line-height: 1; color: #fc7420">01</span>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 22px">Diagnóstico gratis</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Revisamos tus anuncios, tu oferta y tus redes, y te decimos qué arreglar primero.</p>
</div>
<div style="display: flex; flex-direction: column; gap: 12px; padding: 32px; border-radius: 24px; border: 1px solid rgba(255,255,255,0.14)">
<span style="font-family: Poppins, sans-serif; font-weight: 800; font-size: 56px; line-height: 1; color: #fc7420">02</span>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 22px">Estrategia + creatividad</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Diseñamos la oferta, el mensaje, las integraciones y las piezas pensando en quién te compra.</p>
</div>
<div style="display: flex; flex-direction: column; gap: 12px; padding: 32px; border-radius: 24px; border: 1px solid rgba(255,255,255,0.14)">
<span style="font-family: Poppins, sans-serif; font-weight: 800; font-size: 56px; line-height: 1; color: #fc7420">03</span>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 22px">Optimización y reporte</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Medimos, ajustamos y te contamos en simple qué está funcionando.</p>
</div>
</div>
<p style="margin: 0; text-align: center; font-size: 13px; letter-spacing: 0.18em; color: #c4cad0">ESTRATEGIA + CREATIVIDAD + OPTIMIZACIÓN = RESULTADOS REALES</p>
</div>
</section>

<!-- ================= CASOS ================= -->
<section id="casos" style="background: #111113; padding: 96px 24px">
<div style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; gap: 48px">
<div style="text-align: center; display: flex; flex-direction: column; align-items: center; gap: 16px">
<span style="font-family: Montserrat, sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 0.18em; color: #22fcf0">CASOS Y CLIENTES</span>
<h2 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 700; font-size: clamp(30px, 4vw, 52px); line-height: 1.12; max-width: 860px">No firmamos clientes, <span style="color: #fc7420">construimos alianzas</span></h2>
<p style="margin: 0; max-width: 640px; font-size: 17px; line-height: 1.6; color: #c4cad0">La mejor prueba de que funciona: marcas que llevan años trabajando con nosotros.</p>
</div>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(320px, 100%), 1fr)); gap: 24px">

<article style="padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14); display: flex; flex-direction: column; gap: 14px">
<div style="display: flex; align-items: center; justify-content: space-between; gap: 12px"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/telocompro.png" alt="Te lo compro en USA.com" loading="lazy" style="height: 56px; width: auto; max-width: 170px; object-fit: contain; display: block; flex-shrink: 0"><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(34,252,240,0.55); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 11px; letter-spacing: 0.12em">ECOMMERCE</span></div>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 22px; color: #fc7420">TelocomproenUSA.com</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Ecommerce con más de 200 millones de productos.</p>
<div style="margin-top: auto; padding-top: 14px; border-top: 1px solid rgba(255,255,255,0.14); font-family: Poppins, sans-serif; font-weight: 800; font-size: 26px; color: #22fcf0">+7 años <span style="font-weight: 400; font-size: 14px; color: #c4cad0">juntos en todas sus empresas</span></div>
</article>

<article style="padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14); display: flex; flex-direction: column; gap: 14px">
<div style="display: flex; align-items: center; justify-content: space-between; gap: 12px"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/jezreel.png" alt="Industrias Jezreel" loading="lazy" style="height: 40px; width: auto; max-width: 170px; object-fit: contain; display: block; flex-shrink: 0"><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(34,252,240,0.55); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 11px; letter-spacing: 0.12em">INDUSTRIA</span></div>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 22px; color: #fc7420">Industrias Jezreel</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Fábrica de equipos para panaderías. Estrategia y contenido de marca.</p>
<div style="margin-top: auto; padding-top: 14px; border-top: 1px solid rgba(255,255,255,0.14); font-family: Poppins, sans-serif; font-weight: 800; font-size: 26px; color: #22fcf0">Desde 2019 <span style="font-weight: 400; font-size: 14px; color: #c4cad0">aliados</span></div>
</article>

<article style="padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14); display: flex; flex-direction: column; gap: 14px">
<div style="display: flex; align-items: center; justify-content: space-between; gap: 12px"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/kidelan.png" alt="Kidelan" loading="lazy" style="height: 56px; width: auto; max-width: 170px; object-fit: contain; display: block; flex-shrink: 0"><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(34,252,240,0.55); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 11px; letter-spacing: 0.12em">SALUD · ECOMMERCE</span></div>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 22px; color: #fc7420">Kidelan</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Ecommerce y formación para odontólogos. Redes sociales y newsletter.</p>
<div style="margin-top: auto; padding-top: 14px; border-top: 1px solid rgba(255,255,255,0.14); font-family: Poppins, sans-serif; font-weight: 800; font-size: 26px; color: #22fcf0">5 años <span style="font-weight: 400; font-size: 14px; color: #c4cad0">juntos</span></div>
</article>

<article style="padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(252,116,32,0.6); box-shadow: 0 0 40px rgba(252,116,32,0.18); display: flex; flex-direction: column; gap: 14px">
<div style="display: flex; align-items: center; justify-content: space-between; gap: 12px"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/powersynergy.png" alt="Power Synergy Solutions" loading="lazy" style="height: 52px; width: auto; max-width: 170px; object-fit: contain; display: block; flex-shrink: 0"><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(252,116,32,0.7); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 11px; letter-spacing: 0.12em">ENERGÍA · HIGH TICKET</span></div>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 22px; color: #fc7420">Power Synergy Solutions</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Purificación de agua y paneles solares. Captación de leads high ticket con Meta Ads.</p>
<div style="margin-top: auto; padding-top: 14px; border-top: 1px solid rgba(255,255,255,0.14); font-family: Poppins, sans-serif; font-weight: 800; font-size: 26px; color: #fc7420">+50% facturación <span style="font-weight: 400; font-size: 14px; color: #c4cad0">récord</span></div>
</article>

<article style="padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(252,116,32,0.6); box-shadow: 0 0 40px rgba(252,116,32,0.18); display: flex; flex-direction: column; gap: 14px">
<div style="display: flex; align-items: center; justify-content: space-between; gap: 12px"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/patricia.png" alt="Patricia Vergara" loading="lazy" style="height: 52px; width: auto; max-width: 170px; object-fit: contain; display: block; flex-shrink: 0"><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(252,116,32,0.7); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 11px; letter-spacing: 0.12em">MARCA PERSONAL</span></div>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 22px; color: #fc7420">Patricia Vergara</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Conferencista. Gestión de marca y leads high ticket con Meta Ads y newsletter.</p>
<div style="margin-top: auto; padding-top: 14px; border-top: 1px solid rgba(255,255,255,0.14); font-family: Poppins, sans-serif; font-weight: 800; font-size: 26px; color: #fc7420">100 leads/mes <span style="font-weight: 400; font-size: 14px; color: #c4cad0">cualificados</span></div>
</article>

<article style="padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14); display: flex; flex-direction: column; gap: 14px">
<div style="display: flex; align-items: center; justify-content: space-between; gap: 12px"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/brise.png" alt="Brise Ballet" loading="lazy" style="height: 60px; width: auto; max-width: 170px; object-fit: contain; display: block; flex-shrink: 0"><span style="padding: 6px 12px; border-radius: 999px; border: 1px solid rgba(34,252,240,0.55); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 11px; letter-spacing: 0.12em">EDUCACIÓN</span></div>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 22px; color: #fc7420">Brise Ballet</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Escuela de ballet. Gestión de redes y estrategia de marca.</p>
<div style="margin-top: auto; padding-top: 14px; border-top: 1px solid rgba(255,255,255,0.14); font-family: Poppins, sans-serif; font-weight: 800; font-size: 26px; color: #22fcf0">4 años <span style="font-weight: 400; font-size: 14px; color: #c4cad0">juntos</span></div>
</article>

</div>

<div style="display: flex; flex-direction: column; align-items: center; gap: 20px">
<span style="font-size: 13px; letter-spacing: 0.18em; color: #c4cad0">TAMBIÉN CONFÍAN EN NOSOTROS</span>
<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 12px; max-width: 1000px"><span style="padding: 12px 20px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 14px">Comercializadora PC</span><span style="padding: 12px 20px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 14px">Realismo Mágico</span><span style="padding: 12px 20px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 14px">Cumbre Global de Liderazgo</span><span style="padding: 12px 20px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 14px">Oceanic Venture Miami</span><span style="padding: 12px 20px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 14px">Piel de Corea</span><span style="padding: 12px 20px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 14px">Natasha Beauty Studio</span><span style="padding: 12px 20px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 14px">Yeli Beauty Studio</span><span style="padding: 12px 20px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 14px">Reto Llanero</span><span style="padding: 12px 20px; border-radius: 999px; border: 1px solid rgba(255,255,255,0.14); font-family: Montserrat, sans-serif; font-weight: 700; font-size: 14px">Taller Garpin</span></div>
</div>
</div>
</section>

<!-- ================= TESTIMONIOS ================= -->
<section id="testimonios" style="padding: 96px 24px">
<div style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; gap: 48px">
<div style="text-align: center; display: flex; flex-direction: column; align-items: center; gap: 16px">
<span style="font-family: Montserrat, sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 0.18em; color: #22fcf0">TESTIMONIOS</span>
<h2 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 700; font-size: clamp(30px, 4vw, 52px); line-height: 1.12">Lo dicen <span style="color: #fc7420">ellos</span>, no nosotros</h2>
</div>
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(300px, 100%), 1fr)); gap: 24px">
<figure style="margin: 0; padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(34,252,240,0.55); display: flex; flex-direction: column; gap: 20px">
<span aria-hidden="true" style="font-family: Montserrat, sans-serif; font-weight: 800; font-size: 72px; line-height: 0.6; color: #22fcf0">“</span>
<blockquote style="margin: 0; font-family: Montserrat, sans-serif; font-style: italic; font-weight: 300; font-size: 20px; line-height: 1.45">Dos años trabajando con esta excelente compañía, gestionando nuestras redes sociales y los resultados son evidentes, permitiéndonos crecer y desarrollar nuestro potencial.</blockquote>
<figcaption style="margin-top: auto; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.14); display: flex; align-items: center; justify-content: space-between; gap: 16px; font-size: 14px; color: #c4cad0"><div><strong style="display: block; color: #ffffff; font-family: Montserrat, sans-serif; font-weight: 800">Carlos Oropeza</strong>CEO · Global Packing</div><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/global.png" alt="Global Packing Solutions" loading="lazy" style="height: 44px; width: auto; max-width: 120px; object-fit: contain; display: block; flex-shrink: 0"></figcaption>
</figure>
<figure style="margin: 0; padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(34,252,240,0.55); display: flex; flex-direction: column; gap: 20px">
<span aria-hidden="true" style="font-family: Montserrat, sans-serif; font-weight: 800; font-size: 72px; line-height: 0.6; color: #22fcf0">“</span>
<blockquote style="margin: 0; font-family: Montserrat, sans-serif; font-style: italic; font-weight: 300; font-size: 20px; line-height: 1.45">Trabajar con este equipo siempre es una experiencia increíble. Su profesionalismo, calidad y técnica que aplican en cada campaña no se encuentran fácilmente en el mercado. Los recomiendo al 100%.</blockquote>
<figcaption style="margin-top: auto; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.14); display: flex; align-items: center; justify-content: space-between; gap: 16px; font-size: 14px; color: #c4cad0"><div><strong style="display: block; color: #ffffff; font-family: Montserrat, sans-serif; font-weight: 800">Vanessa B.</strong>CEO · Piel de Corea</div><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/pieldecorea.png" alt="Piel de Corea" loading="lazy" style="height: 48px; width: auto; max-width: 120px; object-fit: contain; display: block; flex-shrink: 0"></figcaption>
</figure>
<figure style="margin: 0; padding: 32px; border-radius: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(34,252,240,0.55); display: flex; flex-direction: column; gap: 20px">
<span aria-hidden="true" style="font-family: Montserrat, sans-serif; font-weight: 800; font-size: 72px; line-height: 0.6; color: #22fcf0">“</span>
<blockquote style="margin: 0; font-family: Montserrat, sans-serif; font-style: italic; font-weight: 300; font-size: 20px; line-height: 1.45">Excelente agencia para conseguir ventas, leads, y hacer campañas en Facebook e Instagram Ads.</blockquote>
<figcaption style="margin-top: auto; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.14); display: flex; align-items: center; justify-content: space-between; gap: 16px; font-size: 14px; color: #c4cad0"><div><strong style="display: block; color: #ffffff; font-family: Montserrat, sans-serif; font-weight: 800">Kelvin Sara</strong>Director comercial · Publicidades Renta Regal</div><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/publicidades.png" alt="Publicidades Renta Regal" loading="lazy" style="height: 40px; width: auto; max-width: 120px; object-fit: contain; display: block; flex-shrink: 0"></figcaption>
</figure>
</div>
</div>
</section>

<!-- ================= ACADEMIA ================= -->
<section id="academia" style="padding: 0 24px 96px">
<div style="max-width: 1200px; margin: 0 auto; padding: 40px; border-radius: 24px; border: 1px solid rgba(255,255,255,0.14); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 24px">
<div style="flex: 1 1 420px; display: flex; flex-direction: column; gap: 8px">
<span style="font-family: Montserrat, sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 0.18em; color: #22fcf0">FEELGÜD ACADEMY</span>
<h3 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 26px">¿Prefieres aprender a hacerlo tú?</h3>
<p style="margin: 0; font-size: 15px; line-height: 1.6; color: #c4cad0">Cursos y ebooks como <span style="color: #e8dc96">Ofertas Irresistibles</span> y <span style="color: #e8dc96">El arte de Diferenciarte</span>.</p>
</div>
<a href="https://feelgudacademy.com/cursos/" style="display: inline-flex; align-items: center; min-height: 48px; padding: 0 28px; border-radius: 999px; border: 1px solid rgba(34,252,240,0.55); color: #ffffff; font-family: Montserrat, sans-serif; font-weight: 700; font-size: 14px; text-decoration: none">Ver cursos y libros</a>
</div>
</section>

<!-- ================= CTA FINAL ================= -->
<section id="contacto" style="position: relative; padding: 0 24px 120px">
<div style="position: relative; max-width: 1000px; margin: 0 auto; padding: 72px 32px; border-radius: 40px; border: 1px solid rgba(34,252,240,0.55); background: #111113; text-align: center; overflow: hidden; display: flex; flex-direction: column; align-items: center; gap: 24px">
<div aria-hidden="true" style="position: absolute; top: -120px; left: -120px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(34,252,240,0.3), rgba(34,252,240,0) 70%)"></div>
<div aria-hidden="true" style="position: absolute; bottom: -120px; right: -120px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(34,252,240,0.3), rgba(34,252,240,0) 70%)"></div>
<div aria-hidden="true" style="position: absolute; top: -120px; right: -120px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(252,116,32,0.32), rgba(252,116,32,0) 70%)"></div>
<div aria-hidden="true" style="position: absolute; bottom: -120px; left: -120px; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(252,116,32,0.32), rgba(252,116,32,0) 70%)"></div>
<h2 style="position: relative; margin: 0; font-family: Montserrat, sans-serif; font-weight: 700; font-size: clamp(30px, 4.4vw, 56px); line-height: 1.12">Empresario, <span style="color: #fc7420">¿qué plan tienes</span> para el 2027?</h2>
<p style="position: relative; margin: 0; max-width: 560px; font-size: 17px; line-height: 1.6; color: #c4cad0">Cuéntanos sobre tu negocio y en un diagnóstico gratis te decimos qué cambiar primero para vender más.</p>
<div style="position: relative; display: flex; flex-direction: column; align-items: center; gap: 8px">
<a class="btn-cta" href="https://wa.me/34661053918/?text=Hola,%20me%20interesa%C3%ADa%20saber%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20cursos%20de%20tu%20p%C3%A1gina%20web" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; min-height: 56px; padding: 0 40px; border-radius: 999px; background: #22fcf0; color: #04121a; font-family: Montserrat, sans-serif; font-weight: 800; font-size: 16px; text-decoration: none; box-shadow: 0 0 32px rgba(34,252,240,0.45)">RESERVA POR WHATSAPP</a>
<span style="font-size: 13px; color: #c4cad0">Plazas limitadas cada mes</span>
</div>
</div>
</section>
</main>

<!-- ================= FOOTER ================= -->
<footer style="border-top: 1px solid rgba(255,255,255,0.14); padding: 40px 24px">
<div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 24px">
<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/feelgud.png" alt="Feelgüd Agency" loading="lazy" style="height: 40px; width: auto; display: block">
<span style="font-size: 12px; letter-spacing: 0.18em; color: #c4cad0">MARKETING QUE IMPULSA TU NEGOCIO</span>
<nav aria-label="Pie" style="display: flex; flex-wrap: wrap; gap: 20px; font-size: 14px">
<a href="https://wa.me/34661053918/?text=Hola,%20me%20interesa%C3%ADa%20saber%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20cursos%20de%20tu%20p%C3%A1gina%20web" target="_blank" rel="noopener" style="color: #c4cad0; text-decoration: none">WhatsApp</a>
<a href="https://www.instagram.com/feelgudsocial/" target="_blank" rel="noopener" style="color: #c4cad0; text-decoration: none">Instagram</a>
<a href="https://feelgudacademy.com/contacto/" style="color: #c4cad0; text-decoration: none">Email</a>
<a href="https://feelgudacademy.com/blog/" style="color: #c4cad0; text-decoration: none">Blog</a>
</nav>
<span style="font-size: 13px; color: #c4cad0">© 2026 Feelgüd Agency</span>
</div>
</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>
