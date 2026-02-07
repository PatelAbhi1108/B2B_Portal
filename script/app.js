const root = document.documentElement;
const themeToggle = document.getElementById('themeToggle');
const storedTheme = localStorage.getItem('theme');

if (storedTheme) {
  root.setAttribute('data-theme', storedTheme);
  themeToggle.textContent = storedTheme === 'light' ? '☀️' : '🌙';
}

themeToggle?.addEventListener('click', () => {
  const active = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
  root.setAttribute('data-theme', active);
  localStorage.setItem('theme', active);
  themeToggle.textContent = active === 'light' ? '☀️' : '🌙';
});

const terminalOutput = document.getElementById('terminalOutput');
const terminalForm = document.getElementById('terminalForm');
const terminalInput = document.getElementById('terminalInput');

const responses = {
  projects: 'I have worked on SaaS platforms, AI copilots, analytics dashboards, and high-performance portals. Ask: "best project" for a highlight.',
  skills: 'Top strengths: Full-stack development, AI integration, cloud architecture, and scalable design systems.',
  experience: '4+ years across startup and enterprise environments, with strong ownership in shipping user-facing products.',
  contact: 'You can connect via email (hello@aadilabs.dev), LinkedIn, or GitHub from the contact section below.',
  'best project': 'HirePilot ATS is a standout project: it combines RAG, ranking pipelines, and a production-ready UI.',
  help: 'Try commands: projects, skills, experience, best project, contact, clear'
};

function addLine(text, type = 'bot') {
  const p = document.createElement('p');
  p.textContent = type === 'user' ? `visitor$ ${text}` : `ai-bot> ${text}`;
  terminalOutput.appendChild(p);
  terminalOutput.scrollTop = terminalOutput.scrollHeight;
}

addLine('Welcome! I am your portfolio assistant. Type "help" to get started.');

terminalForm?.addEventListener('submit', (event) => {
  event.preventDefault();
  const command = terminalInput.value.trim().toLowerCase();
  if (!command) return;

  addLine(command, 'user');

  if (command === 'clear') {
    terminalOutput.innerHTML = '';
    addLine('Console cleared. What would you like to know?');
  } else {
    addLine(responses[command] || 'I do not know that yet. In production, your RAG backend can answer custom questions.');
  }

  terminalInput.value = '';
});
