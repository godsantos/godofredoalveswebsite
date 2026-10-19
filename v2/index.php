<?php
$data = require __DIR__ . '/../data.php';
$personal = $data['personal'];
$experience = $data['experience'];
$projects = $data['featured_projects'];
$skills = $data['skills_matrix'];
function e($value) { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
$assetVersion = '20261019-2';
$selectedExperience = array_slice($experience, 0, 3);
$selectedProjects = [
  [
    'title' => 'AtrioIQ Portfolio Intelligence',
    'category' => 'AI + FinTech',
    'description' => 'AtrioIQ is an AI-native portfolio intelligence platform that turns holdings, SEC filings, market data, and news into portfolio-specific financial research. I architected its multi-agent LLM pipeline with RAG-grounded fact sheets, specialized risk, valuation, and event agents, adversarial review, confidence scoring, and flexible Claude, OpenAI, and Gemini orchestration. I lead the three squads building it.',
    'metrics' => '17 engineers · 5 market data feeds · 4 specialized AI agents',
    'technologies' => ['Java 17 / Spring Boot', 'FastAPI', 'React', 'PostgreSQL', 'Redis', 'RAG', 'Multi-Agent LLMs', 'AWS ECS'],
  ],
  [
    'title' => 'Software Architecture & Design Audits',
    'category' => 'Synopsys / Black Duck',
    'description' => 'At Synopsys / Black Duck, I assessed software architecture, code quality, development practices, and SDLC maturity for transaction due diligence. I interviewed engineering stakeholders, analyzed maintainability and ownership risks, and delivered recommendations for merger, acquisition, and sale decisions.',
    'metrics' => '4 years of architecture and code-quality due diligence',
    'technologies' => ['Architecture Review', 'Static Analysis', 'SDLC', 'Risk'],
  ],
  [
    'title' => 'Automated Incident Recovery at Mapfre',
    'category' => 'Enterprise Automation',
    'description' => 'I led the team that built a chat-based operations assistant on IBM Watson. It diagnosed incidents and started recovery steps like restarts and failovers on its own.',
    'metrics' => 'Supporting systems serving 30M+ insurance users',
    'technologies' => ['Spring Boot', 'IBM Watson', 'AWS', 'Messaging'],
  ],
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#f4f0e8">
  <title><?= e($personal['name']) ?> | Software Architect & Engineering Leader</title>
  <meta name="description" content="Godofredo Alves is a Toronto-based software architect and engineering leader building resilient cloud, AI and enterprise platforms.">
  <meta name="robots" content="noindex">
  <link rel="canonical" href="<?= e($personal['site_url']) ?>/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= e($personal['name']) ?> | Software Architect & Engineering Leader">
  <meta property="og:description" content="20+ years turning complex systems into clear, reliable products.">
  <meta property="og:image" content="<?= e($personal['site_url']) ?>/assets/images/godofredo-portrait-2026.png">
  <meta property="og:image:alt" content="Godofredo Alves, software architect and engineering leader">
  <meta property="og:locale" content="en_CA">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= e($personal['name']) ?> | Software Architect & Engineering Leader">
  <meta name="twitter:description" content="20+ years turning complex systems into clear, reliable products.">
  <meta name="twitter:image" content="<?= e($personal['site_url']) ?>/assets/images/godofredo-portrait-2026.png">
  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2222%22 fill=%22%230b7468%22/><text x=%2250%22 y=%2265%22 text-anchor=%22middle%22 font-family=%22Arial%22 font-weight=%22700%22 font-size=%2248%22 fill=%22white%22>GA</text></svg>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css?v=<?= e($assetVersion) ?>">
</head>
<body>
  <a class="skip-link" href="#main-content">Skip to content</a>
  <header class="site-header">
    <a class="wordmark" href="#main-content" aria-label="Back to top">GA<span>.</span></a>
    <nav aria-label="Primary navigation"><a href="#work">Work</a><a href="#experience">Experience</a><a href="#expertise">Expertise</a></nav>
    <a class="header-cta" href="mailto:<?= e($personal['email']) ?>">Let’s talk <span>↗</span></a>
  </header>

  <main id="main-content">
    <section class="hero shell" aria-labelledby="hero-title">
      <div class="hero-copy">
        <p class="eyebrow"><span></span> Toronto, Ontario, Canada</p>
        <h1 id="hero-title">I make complex<br>technology <em>work.</em></h1>
        <p class="hero-intro">I’m Godofredo, an architect and hands-on engineering leader who turns ambitious AI, cloud, and enterprise ideas into dependable products.</p>
        <div class="hero-actions"><a class="button button-dark" href="#work">See selected work <span>↓</span></a><a class="text-link" href="../Godofredo_Alves-Resume-fullstack.pdf" target="_blank" rel="noopener">View résumé ↗</a></div>
      </div>
      <div class="hero-portrait">
        <div class="portrait-frame"><img src="../assets/images/godofredo-portrait-2026.png" onerror="this.src='<?= e($personal['photo']) ?>'" alt="Godofredo Alves, software architect and engineering leader" width="1024" height="1536" decoding="async" fetchpriority="high"></div>
        <div class="portrait-note"><strong>20+</strong><span>years building<br>what matters</span></div>
      </div>
    </section>

    <section class="proof-strip" aria-label="Career highlights">
      <div><strong>17</strong><span>engineers across 3 squads</span></div><div><strong>30M+</strong><span>Mapfre customers served</span></div><div><strong>100M+</strong><span>Telefónica customers served</span></div><div><strong>4 yrs</strong><span>M&amp;A due diligence</span></div>
    </section>

    <section class="section shell" id="work">
      <div class="section-lead"><p class="kicker">Projects</p><h2>Selected work</h2><p>Three projects I led, and what came out of them.</p></div>
      <div class="work-grid">
        <?php foreach ($selectedProjects as $index => $project): ?>
          <article class="work-card<?= $index === 0 ? ' featured' : '' ?>">
            <div class="work-topline"><span>0<?= $index + 1 ?></span><span><?= e($project['category']) ?></span></div>
            <h3><?= e(preg_replace('/\s*\([^)]*\)/', '', $project['title'])) ?></h3>
            <p><?= e($project['description']) ?></p><div class="outcome"><?= e($project['metrics']) ?></div>
            <div class="tags"><?php foreach (array_slice($project['technologies'], 0, 4) as $technology): ?><span><?= e($technology) ?></span><?php endforeach; ?></div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="section experience-section" id="experience">
      <div class="shell experience-layout">
        <div class="section-lead sticky-lead"><p class="kicker">Experience</p><h2>Recent roles</h2><p>My last three positions. The full résumé goes back to 2008 and includes my work for Santander, Mapfre, and Telefónica.</p><a class="text-link" href="../Godofredo_Alves-Resume-fullstack.pdf" target="_blank" rel="noopener">Full career details ↗</a></div>
        <div class="role-list">
          <?php foreach ($selectedExperience as $index => $job): ?>
            <article class="role-item">
              <div class="role-marker">0<?= $index + 1 ?></div>
              <div><div class="role-meta"><span><?= e($job['company']) ?></span><span><?= e($job['period']) ?></span></div><h3><?= e($job['role']) ?></h3><p><?= e($job['highlights'][0]) ?></p>
                <details><summary>More about this role <span>+</span></summary><ul><?php foreach (array_slice($job['highlights'], 1) as $highlight): ?><li><?= e($highlight) ?></li><?php endforeach; ?></ul></details>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section shell" id="expertise">
      <div class="section-lead horizontal-lead"><div><p class="kicker">How I help</p><h2>What I work on</h2></div><p>Most of my work falls into these four areas.</p></div>
      <div class="expertise-grid">
        <article><span>01</span><h3>Architecture</h3><p>Resilient distributed systems, cloud platforms, APIs and event-driven services.</p></article>
        <article><span>02</span><h3>AI engineering</h3><p>LLM orchestration, RAG, evaluation, guardrails and production AI workflows.</p></article>
        <article><span>03</span><h3>Technical leadership</h3><p>Architecture decisions, delivery systems, mentoring and engineering standards.</p></article>
        <article><span>04</span><h3>Due diligence</h3><p>Architecture health, code quality, technical debt and acquisition risk.</p></article>
      </div>
      <details class="toolbox"><summary>View technology toolbox <span>+</span></summary><div class="toolbox-grid"><?php foreach ($skills as $category => $items): ?><div><h3><?= e($category) ?></h3><p><?= e(implode(' · ', array_slice($items, 0, 7))) ?></p></div><?php endforeach; ?></div></details>
    </section>

    <section class="contact shell" id="contact">
      <p class="kicker">Next step</p><h2>Have a hard problem<br>worth solving?</h2><p>I’m open to architect, senior engineering, and technical leadership conversations.</p>
      <div class="contact-actions"><a class="button button-light" href="mailto:<?= e($personal['email']) ?>">Email Godofredo <span>↗</span></a><a href="<?= e($personal['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn ↗</a><a href="<?= e($personal['github']) ?>" target="_blank" rel="noopener">GitHub ↗</a></div>
    </section>
  </main>
  <footer class="site-footer shell"><span>© <?= date('Y') ?> Godofredo Alves</span><span>Toronto, Ontario, Canada · <?= e($personal['email']) ?></span></footer>
  <script src="main.js?v=<?= e($assetVersion) ?>"></script>
</body>
</html>
