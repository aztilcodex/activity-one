<?php
// Simple configurable portfolio page for "Leo"
$name = "Leo";
$role = "Web Developer & Designer";
$bio = "Hi, I'm Leo — I build beautiful and usable web experiences.";
$email = "leo@example.com";
$avatar = "https://via.placeholder.com/300x300.png?text=Leo";
$location = "Your City";
$availability = "Available for freelance & full-time";

$skills = ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL', 'Laravel'];
$projects = [
    ['title' => 'Project Atlas', 'desc' => 'A responsive web app for mapping tasks.', 'link' => '#'],
    ['title' => 'Portfolio Redesign', 'desc' => 'A minimal portfolio template.', 'link' => '#']
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo htmlspecialchars($name); ?> — Portfolio</title>
  <meta name="description" content="<?php echo htmlspecialchars($bio); ?>">
  <style>
    :root{--bg:#0f1724;--accent:#06b6d4;--muted:#94a3b8;--text:#e6eef8}
    *{box-sizing:border-box}
    body{margin:0;font-family:Inter,system-ui,Segoe UI,Roboto,Arial;background:linear-gradient(180deg,#071026 0%,#07131a 100%);color:var(--text)}
    .container{max-width:980px;margin:48px auto;padding:24px}
    .hero{display:flex;gap:24px;align-items:center}
    .avatar{flex:0 0 160px;border-radius:12px;overflow:hidden;border:4px solid rgba(255,255,255,0.04)}
    .avatar img{display:block;width:100%;height:auto}
    .intro{flex:1}
    h1{margin:0;font-size:28px}
    .role{color:var(--accent);margin-top:4px}
    p.lead{color:var(--muted);margin-top:12px;line-height:1.5}
    .grid{display:grid;grid-template-columns:repeat(2,1fr);gap:20px;margin-top:28px}
    .card{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));padding:18px;border-radius:10px;border:1px solid rgba(255,255,255,0.03)}
    .skills ul{list-style:none;padding:0;margin:0;display:flex;flex-wrap:wrap;gap:8px}
    .skills li{background:rgba(255,255,255,0.03);padding:6px 10px;border-radius:999px;font-size:13px;color:var(--muted)}
    .projects .proj{margin-bottom:12px}
    .proj-title{font-weight:600}
    .footer{margin-top:28px;color:var(--muted);font-size:13px}
    a.btn{display:inline-block;padding:10px 14px;border-radius:8px;background:var(--accent);color:#032;text-decoration:none;font-weight:600}
    @media(max-width:700px){.grid{grid-template-columns:1fr}.hero{flex-direction:column;align-items:flex-start}.avatar{width:110px}}
  </style>
</head>
<body>
  <div class="container">
    <header class="hero">
      <div class="avatar">
        <img src="<?php echo htmlspecialchars($avatar); ?>" alt="<?php echo htmlspecialchars($name); ?> avatar">
      </div>
      <div class="intro">
        <h1><?php echo htmlspecialchars($name); ?></h1>
        <div class="role"><?php echo htmlspecialchars($role); ?></div>
        <p class="lead"><?php echo htmlspecialchars($bio); ?></p>
        <div style="margin-top:12px">
          <a class="btn" href="mailto:<?php echo htmlspecialchars($email); ?>">Contact</a>
          <a style="margin-left:10px;color:var(--muted);text-decoration:none" href="#projects">Projects</a>
        </div>
      </div>
    </header>

    <main class="grid">
      <section class="card about">
        <h2>About</h2>
        <p style="color:var(--muted)">I craft clean, modern websites and web apps. I enjoy turning ideas into polished, accessible interfaces with attention to performance and detail.</p>
        <p style="margin-top:12px;color:var(--muted)">Based in: <?php echo htmlspecialchars($location); ?> • <?php echo htmlspecialchars($availability); ?></p>
      </section>

      <aside class="card skills">
        <h2>Skills</h2>
        <ul>
          <?php foreach($skills as $s): ?>
            <li><?php echo htmlspecialchars($s); ?></li>
          <?php endforeach; ?>
        </ul>
      </aside>

      <section id="projects" class="card projects">
        <h2>Projects</h2>
        <?php foreach($projects as $p): ?>
          <div class="proj">
            <div class="proj-title"><?php echo htmlspecialchars($p['title']); ?></div>
            <div class="proj-desc" style="color:var(--muted);font-size:14px"><?php echo htmlspecialchars($p['desc']); ?></div>
            <div style="margin-top:6px"><a href="<?php echo htmlspecialchars($p['link']); ?>" style="color:var(--accent);text-decoration:none">View</a></div>
          </div>
        <?php endforeach; ?>
      </section>

      <section class="card contact">
        <h2>Contact</h2>
        <p style="color:var(--muted)">For enquiries, email <a href="mailto:<?php echo htmlspecialchars($email); ?>" style="color:var(--accent)"><?php echo htmlspecialchars($email); ?></a> or connect on <a href="#" style="color:var(--accent)">LinkedIn</a>.</p>
        <div class="footer">Want this as a downloadable resume? Add a PDF named <code>Leo_Resume.pdf</code> to the project and link it here.</div>
      </section>
    </main>

    <footer style="text-align:center;margin-top:36px;color:var(--muted);font-size:13px">© <?php echo date('Y'); ?> <?php echo htmlspecialchars($name); ?> — Built with PHP & HTML</footer>
  </div>
</body>
</html>
