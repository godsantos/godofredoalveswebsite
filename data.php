<?php
/**
 * Profile & Portfolio Data Configuration
 * Godofredo Alves - Principal Full-Stack Architect & Tech Lead
 */

return [
    'personal' => [
        'name' => 'Godofredo Alves',
        'title' => 'Architect Lead / Senior Software Engineer',
        'tagline' => 'Architecting High-Scale Cloud Platforms, AI-Powered SaaS & Resilient Enterprise Systems with 20+ Years of Craftsmanship',
        'domain' => 'godofredoalves.com',
        'site_url' => 'https://godofredoalves.com',
        'location' => 'Toronto, ON, Canada',
        'email' => 'godsantos@gmail.com',
        'phone' => '+1 (647) 671-8139',
        'linkedin' => 'https://www.linkedin.com/in/godofredoalves/',
        'github' => 'https://github.com/godsantos',
        'photo' => 'assets/images/godofredo_sitting_realistic.jpg',
        'photo_alt' => 'assets/images/godofredo_sitting_exec.jpg',
        'status' => 'Open to Architect Lead / Senior Software Engineer Opportunities',
        'summary' => 'Hands-on Software Architect, Senior Full-Stack Engineer, and Technical Leader with over two decades of engineering excellence designing, building, and delivering mission-critical applications across FinTech, enterprise software, and cloud-native ecosystems. Currently directing 3 engineering squads (17 engineers) building an AI-powered portfolio intelligence SaaS. Deep background across Tier-1 financial institutions (Santander, Mapfre, Telefónica) and enterprise audit authority (Synopsys / Black Duck).',
    ],
    'metrics' => [
        ['value' => '20+', 'label' => 'Years of Engineering', 'sub' => 'From Enterprise Java/C# to AI-first Cloud Microservices'],
        ['value' => '17', 'label' => 'Engineers Led Across 3 Squads', 'sub' => 'Platform, AI & Data, Frontend & QA at AtrioIQ'],
        ['value' => '30M+', 'label' => 'Users Impacted', 'sub' => 'Mapfre insurance systems (Telefónica: 100M+)'],
        ['value' => '100%', 'label' => 'Production Reliability', 'sub' => 'Strict ADRs, Resilience4j, Automated CI/CD & Audit Gates'],
    ],
    'competencies' => [
        [
            'icon' => 'layers',
            'title' => 'Enterprise System Architecture',
            'description' => 'Event-driven microservices (Kafka/SQS/SNS), distributed transactions, Spring Boot, FastAPI, Node.js, and zero-downtime AWS infrastructure on ECS Fargate & Kubernetes.'
        ],
        [
            'icon' => 'cpu',
            'title' => 'AI & LLM Orchestration',
            'description' => 'Multi-model LLM routing (Claude, OpenAI, Gemini), RAG pipelines over institutional knowledge bases, strict guardrails against hallucination, and AI agent engineering workflows.'
        ],
        [
            'icon' => 'shield-check',
            'title' => 'Software Auditing & Due Diligence',
            'description' => '4 years at Synopsys / Black Duck auditing code quality, architectural health, technical debt, and M&A tech due diligence for Fortune 500 acquisitions.'
        ],
        [
            'icon' => 'activity',
            'title' => 'FinTech & Quantitative Risk Systems',
            'description' => 'SEC EDGAR / XBRL financial ingestion, normalized multi-source market data ladders, credit metrics (leverage, coverage, debt/EBITDA, Sharpe ratio, drawdown).'
        ],
        [
            'icon' => 'git-branch',
            'title' => 'DevOps, CI/CD & Quality Gates',
            'description' => 'GitHub Actions pipelines, Docker, automated testing with JUnit 5, Testcontainers, Pytest, Vitest, Playwright E2E, and ADR architectural governance.'
        ],
        [
            'icon' => 'users',
            'title' => 'High-Performance Team Leadership',
            'description' => 'Mentoring senior and staff engineers, establishing definition-of-done, code review standards, and accelerating delivery cycles through modern AI-assisted engineering practices.'
        ]
    ],
    'experience' => [
        [
            'company' => 'AtrioIQ',
            'company_description' => 'AI-powered Portfolio Intelligence SaaS providing institutional-grade, explainable equity research and quantitative risk analysis.',
            'role' => 'Software Architect & Full-Stack Tech Lead',
            'period' => 'Oct 2025 – Present',
            'location' => 'Toronto, ON (Hybrid/Remote)',
            'highlights' => [
                'Hands-on technical leadership across 3 engineering squads (17 engineers: Platform & Backend, AI & Data, Frontend & QA).',
                'Architected the end-to-end microservices platform: React/TypeScript SPA, Node.js API Gateway, Python FastAPI analytics, and Java 17/Spring Boot credit & risk services.',
                'Engineered the SEC EDGAR/XBRL data ingestion engine with a 5-provider market data ladder (AlphaVantage, Finnhub, Yahoo), calculating Sharpe, volatility, drawdown, and leverage.',
                'Designed the flagship "Senior Analyst" AI engine: multi-provider LLM orchestration (Claude, OpenAI, Gemini) with structured JSON schemas, RAG, and strict anti-hallucination guardrails.',
                'Implemented full CI/CD with GitHub Actions, Docker, ECS Fargate, Testcontainers, Vitest, and Playwright E2E testing.'
            ],
            'tags' => ['Java 17', 'Spring Boot', 'Python', 'FastAPI', 'React', 'TypeScript', 'AWS ECS', 'PostgreSQL', 'Claude/OpenAI APIs', 'Docker']
        ],
        [
            'company' => 'Synopsys Inc. / Black Duck',
            'company_description' => 'Global leader in software integrity, security, and electronic design automation (acquired by Clearlake Capital & Francisco Partners).',
            'role' => 'Sr. Software Architect · Sr. Staff Engineer · Tech Leader · Senior Full-Stack Software Engineer · Innovation',
            'period' => '2021 – Oct 2025',
            'location' => 'Toronto, ON',
            'highlights' => [
                'Conducted deep software quality, design, and SDLC process audits for major technology acquisitions and M&A due diligence.',
                'Analyzed code metrics, architecture modularity, cyclomatic complexity, maintainability indexes, and risk profiles.',
                'Evaluated customer development procedures, tools, and technical documentation to provide actionable refactoring roadmaps.',
                'Built internal automation and analysis tools that sped up the delivery of Black Duck audit reports.',
                'Mentored junior and mid-level consultants on enterprise architectural evaluation and forensic code analysis.'
            ],
            'tags' => ['Software Architecture', 'Code Quality Audits', 'M&A Due Diligence', 'Static Analysis', 'SDLC Governance', 'Risk Analysis']
        ],
        [
            'company' => 'Agua Limpa',
            'company_description' => 'Chemical analysis and laboratory technology firm specializing in quality certification and industrial diagnostics.',
            'role' => 'Architect Lead / Senior Software Engineer',
            'period' => '2018 – 2021',
            'location' => 'São Paulo, Brazil',
            'highlights' => [
                'Served as Solution Architect and hands-on Full-Stack lead, directing the full application lifecycle from greenfield conception to high-availability deployment.',
                'Constructed scalable microservices and RESTful backends leveraging Java Spring Boot, PHP, Node.js, and MySQL with Hibernate ORM.',
                'Engineered responsive SPAs using Angular, React, Vue.js, and modern CSS/Bootstrap.',
                'Implemented TDD, automated mock frameworks, and continuous delivery with Jenkins, Docker, and AWS.'
            ],
            'tags' => ['Java Spring Boot', 'PHP', 'Node.js', 'React', 'Angular', 'AWS', 'Docker', 'MySQL', 'TDD']
        ],
        [
            'company' => 'Everis / NTT DATA Consulting',
            'company_description' => 'Global IT and business consulting firm delivering multi-million dollar transformation programs for Tier-1 multinationals.',
            'role' => 'Senior Software Engineer & Solutions Architect',
            'period' => '2015 – 2018',
            'location' => 'São Paulo, Brazil',
            'highlights' => [
                'Santander Bank: Led a squad of 5 engineers delivering DevOps automation, containerization, and automated environment provisioning across Europe & Latin America using JavaEE, .NET, Python, AWS, Docker, and Kibana.',
                'Mapfre Insurance (30M+ Customers): Solutions Architect leading 5 engineers building an automated cognitive operations bot powered by IBM Watson, Spring Boot, Node, and messaging APIs (WhatsApp & Telegram) for autonomous system health recovery.',
                'Telefónica Telecommunications (100M+ Customers): Solutions Architect leading 7 engineers integrating legacy Amdocs telecom billing systems using Oracle Service Bus (OSB), BPEL, and Java Spring microservices.'
            ],
            'tags' => ['Santander', 'Mapfre', 'Telefónica', 'Java Spring', 'IBM Watson', 'AWS', 'Docker', 'Oracle Service Bus', 'DevOps']
        ],
        [
            'company' => 'GLR / POPULIS Consulting',
            'company_description' => 'Technology consulting firm delivering human resources and enterprise information management software.',
            'role' => 'System Developer & Technical Analyst',
            'period' => '2008 – 2015',
            'location' => 'São Paulo, Brazil',
            'highlights' => [
                'Delivered multi-tier MVC enterprise systems utilizing JavaEE, EJB, Struts, JSP, Servlets, .NET, and PHP connecting to Oracle and MySQL.',
                'Conducted requirements elicitation, business process modeling, and architectural specifications with corporate stakeholders.',
                'Engineered high-throughput batch processing and enterprise web services (SOAP/REST) with zero downtime.'
            ],
            'tags' => ['JavaEE', 'PHP', 'Oracle', 'MySQL', 'Struts/JSP', 'SOAP / REST', 'Enterprise Systems']
        ]
    ],
    'skills_matrix' => [
        'AI & Machine Learning' => [
            'Anthropic Claude API', 'OpenAI API', 'Google Gemini API', 'RAG (Retrieval-Augmented Generation)', 'Prompt Engineering', 'Structured JSON Output Validation', 'AI Coding Agents (Claude Code, Codex)', 'Evaluation & Guardrail Frameworks'
        ],
        'Backend & Architecture' => [
            'Java 17 / Spring Boot', 'Python (FastAPI, Flask)', 'PHP 8.x', 'Node.js / Express', 'Microservices Architecture', 'Event-Driven (SQS / SNS / Kafka)', 'Spring Data JPA & Spring Batch', 'Resilience4j Circuit Breakers', 'OpenAPI / Swagger'
        ],
        'Frontend & UX' => [
            'React', 'TypeScript', 'Angular', 'Vue.js', 'Modern Vanilla JavaScript (ESNext)', 'HTML5 & Responsive CSS3', 'State Management', 'TailwindCSS / Bootstrap', 'Modern Web Animations'
        ],
        'Cloud & DevOps' => [
            'Amazon Web Services (AWS ECS Fargate, RDS, SQS, ElastiCache)', 'Google Cloud Platform (GCP)', 'Docker & Container Orchestration', 'GitHub Actions CI/CD', 'Jenkins', 'Alembic Migrations', 'Puppet & PowerShell Automation'
        ],
        'Data & Databases' => [
            'PostgreSQL', 'MySQL', 'Oracle Database', 'Microsoft SQL Server', 'SQLite', 'Redis / ElastiCache', 'NoSQL & Document Stores', 'Elasticsearch', 'Financial XBRL / EDGAR'
        ],
        'Testing & Code Quality' => [
            'JUnit 5 & Mockito', 'Testcontainers', 'Pytest', 'Vitest', 'Playwright E2E Testing', 'Static Code Analysis (SonarQube, Ruff)', 'Software Architecture Auditing'
        ]
    ],
    'education' => [
        [
            'degree' => 'Post-Graduate Certificate in Project Management',
            'institution' => 'Centennial College',
            'location' => 'Toronto, ON, Canada',
            'year' => '2019'
        ],
        [
            'degree' => "Bachelor's Degree in Information Systems",
            'institution' => 'Universidade Bandeirante',
            'location' => 'São Paulo, Brazil',
            'year' => '2010'
        ]
    ],
    'featured_projects' => [
        [
            'title' => 'AtrioIQ - AI Portfolio Intelligence Platform',
            'category' => 'FinTech & AI SaaS',
            'description' => 'Architected and built an institutional-grade portfolio intelligence platform for self-directed investors. Ingests SEC filings and market data to compute quantitative credit and risk metrics, orchestrated through a multi-model AI analyst engine.',
            'metrics' => '17-engineer team • 5 market feeds • <1.2s response time',
            'technologies' => ['Java 17', 'Spring Boot', 'Python FastAPI', 'React', 'AWS ECS', 'Claude/Gemini APIs']
        ],
        [
            'title' => 'Black Duck Architecture & Security Audit Framework',
            'category' => 'Enterprise Due Diligence',
            'description' => 'Conducted deep forensic software design audits and technical due diligence assessments for multi-million dollar tech mergers and acquisitions, pinpointing systemic debt, licensing risk, and security vulnerabilities.',
            'metrics' => 'Dozens of Fortune 500 audit deliverables completed',
            'technologies' => ['Architecture Review', 'Code Quality Metrics', 'Static Analysis', 'SDLC Governance']
        ],
        [
            'title' => 'Cognitive Incident Automation Engine (Mapfre)',
            'category' => 'Enterprise AI & Automation',
            'description' => 'Led a squad to build an intelligent conversational DevOps assistant connected with IBM Watson, capable of diagnosing outages and autonomously initiating server restarts, database failovers, and backup routines.',
            'metrics' => '30M+ insurance users protected with automated recovery',
            'technologies' => ['Java Spring Boot', 'IBM Watson', 'AWS', 'Telegram/WhatsApp Bot APIs', 'MySQL']
        ],
        [
            'title' => 'Santander Bank Global DevOps Transformation',
            'category' => 'Banking & Infrastructure',
            'description' => 'Directed a dedicated team to engineer containerized environments, automated testing harnesses, and CI/CD pipelines across Santander operations in South America and Europe.',
            'metrics' => 'Reduced release cycles from months to hours',
            'technologies' => ['Docker', 'AWS', 'JavaEE', 'Python', 'Kibana', 'Puppet']
        ]
    ]
];
