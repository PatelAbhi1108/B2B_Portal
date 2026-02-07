<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <title>Portfolio | Creative Developer</title>
</head>
<body>
  <div class="bg-grid"></div>
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="orb orb-3"></div>

  <header class="site-header glass">
    <a class="brand" href="#hero">Aadi<span>Labs</span></a>
    <nav class="nav-links">
      <a href="#projects">Projects</a>
      <a href="#skills">Skills</a>
      <a href="#experience">Experience</a>
      <a href="#achievements">Achievements</a>
      <a href="#contact">Contact</a>
    </nav>
    <button id="themeToggle" class="theme-toggle" aria-label="Toggle dark mode">🌙</button>
  </header>

  <main>
    <section id="hero" class="hero section">
      <p class="eyebrow">Full-Stack Engineer • AI Builder • Product Thinker</p>
      <h1>Building meaningful digital experiences with creativity + code.</h1>
      <p class="lead">I design performant products, intelligent systems, and delightful interfaces. Explore my work, skills, journey, and a mini AI terminal that can answer questions about me.</p>
      <div class="hero-cta">
        <a class="btn primary" href="#projects">View My Work</a>
        <a class="btn ghost" href="#terminal">Ask AI About Me</a>
      </div>
      <div class="quick-stats">
        <article><strong>4+</strong><span>Years Building</span></article>
        <article><strong>30+</strong><span>Projects Delivered</span></article>
        <article><strong>12</strong><span>Awards & Mentions</span></article>
      </div>
    </section>

    <section id="projects" class="section">
      <div class="section-head">
        <h2>Featured Projects</h2>
        <p>Case studies that combine engineering depth with business outcomes.</p>
      </div>
      <div class="project-grid">
        <article class="card glass">
          <h3>InsightForge Analytics</h3>
          <p>Built an analytics dashboard with role-based access and predictive KPI cards for B2B teams.</p>
          <ul><li>React + TypeScript</li><li>Node + PostgreSQL</li><li>Chart.js</li></ul>
          <a href="#" aria-label="Open project">View Case Study ↗</a>
        </article>
        <article class="card glass">
          <h3>HirePilot ATS</h3>
          <p>Automated recruitment workflow with resume ranking and AI-generated interview prompts.</p>
          <ul><li>Next.js</li><li>Python FastAPI</li><li>OpenAI + RAG</li></ul>
          <a href="#" aria-label="Open project">View Case Study ↗</a>
        </article>
        <article class="card glass">
          <h3>FinPulse Mobile</h3>
          <p>Developed a personal finance app with behavioral nudges and voice-based expense logging.</p>
          <ul><li>Flutter</li><li>Firebase</li><li>TensorFlow Lite</li></ul>
          <a href="#" aria-label="Open project">View Case Study ↗</a>
        </article>
      </div>
    </section>

    <section id="skills" class="section">
      <div class="section-head">
        <h2>Interactive Skills Cloud</h2>
        <p>Click any skill to jump to official documentation or reference websites.</p>
      </div>
      <div class="skills-cloud glass">
        <a href="https://react.dev/" target="_blank" rel="noopener">React</a>
        <a href="https://nextjs.org/docs" target="_blank" rel="noopener">Next.js</a>
        <a href="https://www.typescriptlang.org/docs/" target="_blank" rel="noopener">TypeScript</a>
        <a href="https://tailwindcss.com/docs" target="_blank" rel="noopener">Tailwind CSS</a>
        <a href="https://nodejs.org/en/docs" target="_blank" rel="noopener">Node.js</a>
        <a href="https://www.python.org/doc/" target="_blank" rel="noopener">Python</a>
        <a href="https://docs.docker.com/" target="_blank" rel="noopener">Docker</a>
        <a href="https://kubernetes.io/docs/home/" target="_blank" rel="noopener">Kubernetes</a>
        <a href="https://www.postgresql.org/docs/" target="_blank" rel="noopener">PostgreSQL</a>
        <a href="https://www.langchain.com/" target="_blank" rel="noopener">LangChain</a>
        <a href="https://platform.openai.com/docs/overview" target="_blank" rel="noopener">OpenAI API</a>
        <a href="https://docs.gitlab.com/ee/ci/" target="_blank" rel="noopener">CI/CD</a>
      </div>
    </section>

    <section id="experience" class="section">
      <div class="section-head">
        <h2>Experience Timeline</h2>
      </div>
      <div class="timeline">
        <article class="timeline-item glass">
          <span>2024 - Present</span>
          <h3>Senior Software Engineer • NovaScale</h3>
          <p>Leading AI-first product initiatives, mentoring engineers, and shipping high-impact platform features.</p>
        </article>
        <article class="timeline-item glass">
          <span>2022 - 2024</span>
          <h3>Full-Stack Developer • PixelBridge</h3>
          <p>Delivered enterprise portals, reduced release cycles by 40%, and introduced test automation practices.</p>
        </article>
        <article class="timeline-item glass">
          <span>2020 - 2022</span>
          <h3>Software Engineer • Freelance/Startup Lab</h3>
          <p>Built MVPs for SaaS founders with focus on scalability, UX polish, and cloud-native deployments.</p>
        </article>
      </div>
    </section>

    <section id="achievements" class="section">
      <div class="section-head">
        <h2>Achievements & Highlights</h2>
      </div>
      <div class="achievements-grid">
        <article class="glass"><h3>🥇 Hackathon Winner</h3><p>Won national AI innovation challenge for healthcare triage assistant.</p></article>
        <article class="glass"><h3>🎤 Speaker</h3><p>Delivered talks on building production-ready RAG pipelines and observability for LLM apps.</p></article>
        <article class="glass"><h3>🧠 Open Source</h3><p>Contributor to tooling around TypeScript DX and API testing workflows.</p></article>
      </div>
    </section>

    <section id="terminal" class="section">
      <div class="section-head">
        <h2>AI Terminal (Prototype)</h2>
        <p>This simulates your planned chatbot UI. Hook this panel with your backend RAG API later.</p>
      </div>
      <div class="terminal glass">
        <div class="terminal-head">
          <span></span><span></span><span></span>
          <p>portfolio-assistant@aadi:~</p>
        </div>
        <div id="terminalOutput" class="terminal-output"></div>
        <form id="terminalForm" class="terminal-form">
          <label for="terminalInput">visitor$</label>
          <input id="terminalInput" type="text" placeholder="Try: projects, skills, experience, contact" autocomplete="off">
        </form>
      </div>
    </section>

    <section id="contact" class="section">
      <div class="section-head">
        <h2>Let’s Build Something Exceptional</h2>
      </div>
      <div class="contact-card glass">
        <p>Open to freelance, full-time opportunities, and collaborations in AI + product engineering.</p>
        <div class="contact-actions">
          <a class="btn primary" href="mailto:hello@aadilabs.dev">Email Me</a>
          <a class="btn ghost" href="https://www.linkedin.com" target="_blank" rel="noopener">LinkedIn</a>
          <a class="btn ghost" href="https://github.com" target="_blank" rel="noopener">GitHub</a>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">© <?php echo date('Y'); ?> AadiLabs • Crafted with ambition, empathy, and curiosity.</footer>
  <script src="script/app.js"></script>
</body>
</html>
