<?php
$data = require __DIR__ . '/data.php';
$personal = $data['personal'];
$experience = $data['experience'];
$skills = $data['skills_matrix'];
function e($value) { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }

$projects = [
  [
    'title' => 'AtrioIQ Portfolio Intelligence',
    'category' => 'AI + FinTech',
    'description' => 'AtrioIQ is an AI-native portfolio intelligence platform that turns holdings, SEC filings, market data, and news into portfolio-specific financial research. I architected its multi-agent LLM pipeline with RAG-grounded fact sheets, specialized risk, valuation, and event agents, adversarial review, confidence scoring, and flexible Claude, OpenAI, and Gemini orchestration. I lead the three squads building it.',
    'metrics' => ['17 engineers', '5 market data feeds', '4 specialized AI agents'],
    'technologies' => ['RAG', 'Multi-Agent LLMs', 'FastAPI', 'React', 'AWS ECS'],
  ],
  [
    'title' => 'M&A Technical Due Diligence',
    'category' => 'Synopsys / Black Duck',
    'description' => 'I audited the architecture, code quality, and technical debt of companies being acquired, and wrote the findings buyers used in their decisions.',
    'metrics' => ['4 years', 'Dozens of Fortune 500 audits'],
    'technologies' => ['Architecture Review', 'Static Analysis', 'SDLC', 'Risk'],
  ],
  [
    'title' => 'Automated Incident Recovery at Mapfre',
    'category' => 'Enterprise Automation',
    'description' => 'I led the team that built a chat-based operations assistant on IBM Watson. It diagnosed incidents and started recovery steps like restarts and failovers on its own.',
    'metrics' => ['5 engineers', '30M+ customers on the systems it watched'],
    'technologies' => ['Spring Boot', 'IBM Watson', 'AWS', 'WhatsApp / Telegram'],
  ],
  [
    'title' => 'Santander DevOps Transformation',
    'category' => 'Banking',
    'description' => 'I led a squad building containerized environments, automated tests, and CI/CD pipelines for Santander teams in Europe and Latin America.',
    'metrics' => ['5 engineers', 'Release cycles from months to hours'],
    'technologies' => ['Docker', 'AWS', 'JavaEE', 'Python', 'Puppet'],
  ],
];
$companies = [
  'AtrioIQ' => 'https://atrioiq.com',
  'Synopsys' => 'https://www.synopsys.com',
  'Black Duck' => 'https://www.blackduck.com',
  'Santander' => 'https://www.santander.com',
  'Mapfre' => 'https://www.mapfre.com',
  'Telefónica' => 'https://www.telefonica.com',
  'NTT DATA' => 'https://www.nttdata.com',
  'Everis' => 'https://www.nttdata.com',
];
$resume = 'Godofredo_Alves-Resume-fullstack.pdf';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#f4f0e8">
  <title><?= e($personal['name']) ?> | Software Architect & Engineering Leader</title>
  <meta name="description" content="Godofredo Alves is a Toronto-based software architect and engineering leader building resilient cloud, AI and enterprise platforms.">
  <link rel="canonical" href="<?= e($personal['site_url']) ?>/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <div class="progress" aria-hidden="true"></div>
  <header class="site-header">
    <a class="wordmark" href="#top" aria-label="Back to top">GA<span>.</span></a>
    <nav aria-label="Primary navigation"><a href="#work">Work</a><a href="#career">Career</a><a href="#expertise">Expertise</a></nav>
    <a class="header-cta" href="#contact">Let’s talk</a>
  </header>

  <main id="top">
    <section class="hero shell">
      <div class="hero-copy">
        <p class="eyebrow reveal"><span class="pulse"></span> Toronto, Ontario, Canada</p>
        <h1 aria-label="I make complex systems work.">
          <span class="line"><span>I make complex</span></span>
          <span class="line"><span class="typer" aria-hidden="true" data-words="banking,AI,cloud,legacy,telecom"><span class="typed">banking</span><span class="caret"></span></span></span>
          <span class="line"><span>systems <em>work.</em></span></span>
        </h1>
        <p class="hero-intro reveal">I’m Godofredo, an architect and hands-on engineering leader. For 20+ years I’ve designed and shipped AI, cloud, and enterprise products for banks, insurers, telecoms, and startups.</p>
        <div class="hero-actions reveal"><a class="button button-dark" href="#work">See selected work <span>↓</span></a><a class="text-link" href="<?= e($resume) ?>" target="_blank" rel="noopener">View résumé ↗</a></div>
      </div>
      <div class="hero-portrait reveal">
        <div class="portrait-frame"><img src="assets/images/godofredo-portrait-2026.png" alt="Godofredo Alves" width="1024" height="1536" fetchpriority="high"></div>
        <div class="portrait-note"><strong><span data-count="20">20</span>+</strong><span>years shipping<br>software</span></div>
      </div>
    </section>

    <section class="marquee" aria-label="Companies I have worked with">
      <div class="marquee-track">
        <?php for ($i = 0; $i < 2; $i++): ?><div class="marquee-group"<?= $i ? ' aria-hidden="true"' : '' ?>><?php foreach ($companies as $company => $url): ?><?php if ($url): ?><a href="<?= e($url) ?>" target="_blank" rel="noopener"<?= $i ? ' tabindex="-1"' : '' ?>><?= e($company) ?></a><?php else: ?><span><?= e($company) ?></span><?php endif; ?><?php endforeach; ?></div><?php endfor; ?>
      </div>
    </section>

    <section class="proof shell" aria-label="Career highlights">
      <div class="reveal"><strong><span data-count="17">17</span></strong><p>engineers across 3 squads</p></div>
      <div class="reveal"><strong><span data-count="30">30</span>M+</strong><p>Mapfre customers served</p></div>
      <div class="reveal"><strong><span data-count="100">100</span>M+</strong><p>Telefónica customers served</p></div>
      <div class="reveal"><strong><span data-count="4">4</span> yrs</strong><p>M&amp;A due diligence</p></div>
    </section>

    <section class="section shell" id="work">
      <div class="work-intro">
        <div class="section-lead reveal"><p class="kicker">Projects</p><h2>Selected work</h2><p>Four projects I led. Pick one to see the details.</p></div>
        <figure class="project-visual reveal"><img src="assets/images/atrioiq-architecture.png" alt="AtrioIQ architecture showing financial data flowing through grounded multi-agent AI analysis into portfolio insights" width="1536" height="1024" loading="lazy" decoding="async"><span class="architecture-core" aria-hidden="true"></span><span class="data-signal signal-one" aria-hidden="true"></span><span class="data-signal signal-two" aria-hidden="true"></span><span class="data-signal signal-three" aria-hidden="true"></span></figure>
      </div>
      <div class="work" data-work>
        <ol class="work-list" role="tablist" aria-label="Projects">
          <?php foreach ($projects as $i => $project): ?>
            <li><button role="tab" id="tab-<?= $i ?>" aria-controls="panel-<?= $i ?>" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>" tabindex="<?= $i === 0 ? '0' : '-1' ?>">
              <span class="num">0<?= $i + 1 ?></span><span class="t"><?= e($project['title']) ?><small><?= e($project['category']) ?></small></span><span class="arrow">→</span>
              <span class="timer" aria-hidden="true"></span>
            </button></li>
          <?php endforeach; ?>
        </ol>
        <div class="work-panels">
          <?php foreach ($projects as $i => $project): ?>
            <article class="work-panel<?= $i === 0 ? ' active' : '' ?>" role="tabpanel" id="panel-<?= $i ?>" aria-labelledby="tab-<?= $i ?>"<?= $i ? ' hidden' : '' ?>>
              <p class="cat"><?= e($project['category']) ?></p>
              <h3><?= e($project['title']) ?></h3>
              <p><?= e($project['description']) ?></p>
              <ul class="metrics"><?php foreach ($project['metrics'] as $m): ?><li><?= e($m) ?></li><?php endforeach; ?></ul>
              <div class="tags"><?php foreach ($project['technologies'] as $t): ?><span><?= e($t) ?></span><?php endforeach; ?></div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section career" id="career">
      <div class="shell career-layout">
        <div class="section-lead sticky reveal"><p class="kicker">Career</p><h2>Since 2008</h2><p>From enterprise Java in São Paulo to leading AI platform teams in Toronto.</p><a class="text-link" href="<?= e($resume) ?>" target="_blank" rel="noopener">Full résumé ↗</a></div>
        <ol class="timeline">
          <span class="timeline-fill" aria-hidden="true"></span>
          <?php foreach ($experience as $job): ?>
            <li class="role reveal">
              <span class="dot" aria-hidden="true"></span>
              <p class="meta"><span><?= e($job['company']) ?></span><span><?= e($job['period']) ?> · <?= e($job['location']) ?></span></p>
              <h3><?= e($job['role']) ?></h3>
              <p><?= e($job['highlights'][0]) ?></p>
              <?php if (count($job['highlights']) > 1): ?>
                <details><summary>More <span>+</span></summary><div><ul><?php foreach (array_slice($job['highlights'], 1) as $h): ?><li><?= e($h) ?></li><?php endforeach; ?></ul></div></details>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ol>
      </div>
    </section>

    <section class="section shell" id="expertise">
      <div class="section-lead reveal"><p class="kicker">Expertise</p><h2>What I work on</h2></div>
      <div class="expertise-grid">
        <article class="reveal"><span>01</span><h3>Architecture</h3><p>Distributed systems, cloud platforms, APIs and event-driven services.</p></article>
        <article class="reveal"><span>02</span><h3>AI engineering</h3><p>LLM orchestration, RAG, evaluation, guardrails and production AI workflows.</p></article>
        <article class="reveal"><span>03</span><h3>Technical leadership</h3><p>Architecture decisions, delivery process, mentoring and engineering standards.</p></article>
        <article class="reveal"><span>04</span><h3>Due diligence</h3><p>Architecture health, code quality, technical debt and acquisition risk.</p></article>
      </div>
      <div class="toolbox reveal">
        <div class="chips" role="tablist" aria-label="Technology categories">
          <?php $k = 0; foreach ($skills as $category => $items): ?><button role="tab" aria-selected="<?= $k === 0 ? 'true' : 'false' ?>" data-skill="<?= $k ?>"><?= e($category) ?></button><?php $k++; endforeach; ?>
        </div>
        <?php $k = 0; foreach ($skills as $category => $items): ?>
          <ul class="skill-set<?= $k === 0 ? ' active' : '' ?>" data-set="<?= $k ?>"<?= $k ? ' hidden' : '' ?>><?php foreach ($items as $n => $item): ?><li style="--i:<?= $n ?>"><?= e($item) ?></li><?php endforeach; ?></ul>
        <?php $k++; endforeach; ?>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="contact-inner reveal">
        <p class="kicker">Contact</p>
        <h2>Have a hard problem<br>worth solving?</h2>
        <p>I’m open to architect, senior engineering, and technical leadership roles.</p>
        <div class="contact-actions">
          <a class="button button-light" href="mailto:<?= e($personal['email']) ?>">Email me <span>↗</span></a>
          <button class="copy" type="button" data-copy="<?= e($personal['email']) ?>"><?= e($personal['email']) ?> <span>Copy</span></button>
          <a href="<?= e($personal['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn ↗</a>
          <a href="<?= e($personal['github']) ?>" target="_blank" rel="noopener">GitHub ↗</a>
        </div>
      </div>
    </section>
  </main>
  <footer class="site-footer shell"><span>© <?= date('Y') ?> Godofredo Alves</span><span>Toronto, Ontario, Canada</span></footer>
  <script src="assets/js/main.js"></script>
</body>
</html>
