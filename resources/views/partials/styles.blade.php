/* ─── APP LAYOUT ─── */
#appShell{display:flex;min-height:100vh;}

/* ─── SIDEBAR ─── */
.sidebar{width:var(--sidebar-width);background:#0b1f3a;height:100vh;position:fixed;left:0;top:0;z-index:100;display:flex;flex-direction:column;transition:transform .28s ease;overflow:hidden;}
.sidebar-logo{padding:22px 22px 18px;border-bottom:1px solid rgba(255,255,255,0.07);display:flex;align-items:center;gap:11px;flex-shrink:0;background:#0b1f3a;z-index:10;}
.sidebar-nav{flex:1;overflow-y:auto;padding-bottom:20px;}
.sidebar-nav::-webkit-scrollbar{width:3px;}
.sidebar-nav::-webkit-scrollbar-thumb{background:rgba(255,255,255,0.1);border-radius:10px;}
.sidebar-logo-icon{width:40px;height:40px;background:var(--accent);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:18px;color:#fff;flex-shrink:0;}
.sidebar-logo-text h3{color:#fff;font-size:15px;font-weight:800;line-height:1.2;}
.sidebar-logo-text span{color:rgba(255,255,255,0.4);font-size:10px;letter-spacing:1.5px;text-transform:uppercase;}
.sidebar-section{padding:16px 14px 6px;font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,0.28);}
.nav-item{display:flex;align-items:center;gap:11px;padding:11px 16px;margin:1px 8px;border-radius:9px;color:rgba(255,255,255,0.55);cursor:pointer;transition:var(--transition);position:relative;font-size:13.5px;font-weight:500;}
.nav-item i{width:18px;text-align:center;font-size:14px;flex-shrink:0;}
.nav-item:hover{color:rgba(255,255,255,0.9);background:rgba(255,255,255,0.06);}
.nav-item.active{background:rgba(245,132,52,0.18);color:var(--accent);}
.nav-item .badge{margin-left:auto;background:var(--accent);color:#fff;font-size:10px;padding:2px 7px;border-radius:20px;font-weight:700;}
.nav-item .badge.green{background:var(--success);}
.sidebar-footer{padding:16px;border-top:1px solid rgba(255,255,255,0.07);margin-top:auto;}
.user-mini{display:flex;align-items:center;gap:10px;padding:10px;border-radius:10px;cursor:pointer;transition:var(--transition);}
.user-mini:hover{background:rgba(255,255,255,0.06);}
.ava{overflow:hidden;flex-shrink:0;}
.ava img{width:100%;height:100%;object-fit:cover;display:block;}
.user-mini .ava{width:36px;height:36px;border-radius:50%;background:var(--accent);display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700;color:#fff;}
.user-mini .info{flex:1;min-width:0;}
.user-mini .info strong{display:block;color:#fff;font-size:13px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.user-mini .info span{color:rgba(255,255,255,0.4);font-size:11px;}
.user-mini .fa-ellipsis{color:rgba(255,255,255,0.3);font-size:14px;}

/* ─── MAIN WRAPPER ─── */
.main-wrap{margin-left:var(--sidebar-width);flex:1;display:flex;flex-direction:column;min-height:100vh;}

/* ─── HEADER ─── */
.topbar{height:var(--header-h);background:var(--white);border-bottom:1px solid var(--border);display:flex;align-items:center;padding:0 24px;gap:16px;position:sticky;top:0;z-index:50;box-shadow:0 1px 6px rgba(11,31,58,0.04);}
.topbar-left{display:flex;align-items:center;gap:12px;flex:1;}
.menu-btn{width:36px;height:36px;border-radius:8px;background:transparent;color:var(--text-muted);font-size:16px;display:none;align-items:center;justify-content:center;transition:var(--transition);}
.menu-btn:hover{background:var(--bg);color:var(--accent);}
.page-title{font-size:18px;font-weight:700;color:var(--text);}
.search-bar{display:flex;align-items:center;gap:8px;background:var(--bg);border:1px solid var(--border);border-radius:10px;padding:8px 14px;width:280px;transition:var(--transition);}
.search-bar:focus-within{border-color:var(--accent);background:#fff;}
.search-bar i{color:var(--text-muted);font-size:13px;}
.search-bar input{background:transparent;border:none;flex:1;font-size:13.5px;color:var(--text);}
.search-bar input::placeholder{color:var(--text-muted);}
.topbar-right{display:flex;align-items:center;gap:10px;}
.icon-btn{width:38px;height:38px;border-radius:9px;background:var(--bg);border:1px solid var(--border);color:var(--text-muted);font-size:15px;display:flex;align-items:center;justify-content:center;cursor:pointer;transition:var(--transition);position:relative;}
.icon-btn:hover{border-color:var(--accent);color:var(--accent);}
.icon-btn .dot{width:8px;height:8px;background:var(--accent);border-radius:50%;position:absolute;top:7px;right:7px;border:2px solid var(--white);}
.theme-toggle{width:38px;height:38px;border-radius:9px;background:var(--bg);border:1px solid var(--border);color:var(--text-muted);font-size:15px;display:flex;align-items:center;justify-content:center;cursor:pointer;transition:var(--transition);}
.theme-toggle:hover{border-color:var(--accent);color:var(--accent);}
.profile-chip{display:flex;align-items:center;gap:8px;padding:5px 12px 5px 5px;background:var(--bg);border:1px solid var(--border);border-radius:30px;cursor:pointer;transition:var(--transition);}
.profile-chip:hover{border-color:var(--accent);}
.profile-chip .ava{width:32px;height:32px;border-radius:50%;background:var(--accent);display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;color:#fff;}
.profile-chip span{font-size:13px;font-weight:600;color:var(--text);}

/* ─── PROFILE DROPDOWN ─── */
.profile-container{position:relative;}
.profile-dropdown{position:absolute;top:calc(100% + 10px);right:0;width:220px;background:var(--card);border:1px solid var(--border);border-radius:12px;box-shadow:var(--shadow-lg);display:none;z-index:100;animation:fadeUp .2s ease;}
.profile-dropdown.open{display:block;}
.dropdown-header{padding:16px;display:flex;flex-direction:column;align-items:flex-start;}
.dropdown-header .ava{width:40px;height:40px;margin-bottom:10px;}
.dropdown-header strong{font-size:14px;color:var(--text);font-weight:700;}
.dropdown-header span{font-size:12px;color:var(--text-muted);margin-top:2px;}
.dropdown-divider{height:1px;background:var(--border);margin:4px 0;}
.dropdown-item{display:flex;align-items:center;gap:10px;padding:10px 16px;font-size:13.5px;color:var(--text);transition:var(--transition);cursor:pointer;}
.dropdown-item i{width:16px;text-align:center;font-size:14px;color:var(--text-muted);}
.dropdown-item:hover{background:var(--bg);color:var(--accent);}
.dropdown-item:hover i{color:var(--accent);}
.dropdown-item.logout{color:var(--danger);}
.dropdown-item.logout i{color:var(--danger);}
.dropdown-item.logout:hover{background:rgba(239,68,68,0.05);}

/* ─── CONTENT ─── */
.content{flex:1;padding:28px;overflow-y:auto;}
.section-page{display:none;}
.section-page.active{display:block;}

/* ─── ANNOUNCEMENT BAR ─── */
.announce-bar{background:linear-gradient(90deg,var(--primary),#1a4080);color:#fff;padding:11px 24px;display:flex;align-items:center;gap:12px;font-size:13px;border-bottom:1px solid rgba(255,255,255,0.1);}
.announce-bar i{color:var(--accent);font-size:14px;}
.announce-bar .marquee{flex:1;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;}
.announce-bar button{background:var(--accent);color:#fff;border:none;border-radius:6px;padding:4px 12px;font-size:12px;cursor:pointer;}

/* ─── STATS CARDS ─── */
.stats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;margin-bottom:24px;}
.stat-card{background:var(--card);border-radius:var(--radius);padding:22px;border:1px solid var(--border);display:flex;align-items:flex-start;gap:14px;box-shadow:var(--shadow);transition:var(--transition);}
.stat-card:hover{transform:translateY(-2px);box-shadow:var(--shadow-lg);}
.stat-icon{width:50px;height:50px;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:20px;flex-shrink:0;}
.stat-icon.orange{background:rgba(245,132,52,0.12);color:var(--accent);}
.stat-icon.blue{background:rgba(59,130,246,0.12);color:var(--info);}
.stat-icon.green{background:rgba(34,197,94,0.12);color:var(--success);}
.stat-icon.purple{background:rgba(139,92,246,0.12);color:#8b5cf6;}
.stat-info h3{font-size:26px;font-weight:800;color:var(--text);line-height:1.2;}
.stat-info p{font-size:13px;color:var(--text-muted);margin-top:2px;}
.stat-info .change{font-size:12px;margin-top:6px;font-weight:600;}
.stat-info .change.up{color:var(--success);}
.stat-info .change.down{color:var(--danger);}

/* ─── CARDS ─── */
.card{background:var(--card);border-radius:var(--radius);border:1px solid var(--border);box-shadow:var(--shadow);}
.card-header{padding:18px 20px;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;}
.card-title{font-size:15px;font-weight:700;color:var(--text);}
.card-body{padding:20px;}

/* ─── GRID HELPERS ─── */
.grid-2{display:grid;grid-template-columns:1fr 1fr;gap:20px;}
.grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;}
.grid-4{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;}
.mb-20{margin-bottom:20px;}
.mb-24{margin-bottom:24px;}
.flex{display:flex;align-items:center;}
.flex-between{display:flex;align-items:center;justify-content:space-between;}
.gap-10{gap:10px;}

/* ─── BUTTONS ─── */
.btn{padding:9px 18px;border-radius:8px;font-size:13.5px;font-weight:600;transition:var(--transition);display:inline-flex;align-items:center;gap:7px;cursor:pointer;}
.btn-primary{background:var(--accent);color:#fff;border:2px solid var(--accent);}
.btn-primary:hover{background:#e0722a;border-color:#e0722a;}
.btn-outline{background:transparent;color:var(--accent);border:2px solid var(--accent);}
.btn-outline:hover{background:var(--accent);color:#fff;}
.btn-dark{background:var(--primary);color:#fff;border:2px solid var(--primary);}
.btn-dark:hover{opacity:.88;}
.btn-sm{padding:6px 13px;font-size:12.5px;}
.btn-icon{width:34px;height:34px;border-radius:7px;display:flex;align-items:center;justify-content:center;background:var(--bg);border:1px solid var(--border);color:var(--text-muted);cursor:pointer;transition:var(--transition);}
.btn-icon:hover{border-color:var(--accent);color:var(--accent);}

/* ─── COURSE CARDS ─── */
.course-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;}
.course-card{background:var(--card);border-radius:24px;border:1px solid var(--border);overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,0.04);transition:var(--transition);cursor:pointer;position:relative;}
.course-card:hover{transform:translateY(-8px);box-shadow:0 20px 50px rgba(0,0,0,0.08);border-color:var(--accent);}
.course-thumb{height:160px;display:flex;align-items:center;justify-content:center;font-size:48px;position:relative;transition:0.4s;}
.course-card:hover .course-thumb{transform:scale(1.05);}
.course-thumb .tag{position:absolute;top:15px;right:15px;padding:5px 12px;border-radius:100px;font-size:11px;font-weight:800;background:var(--accent);color:#fff;letter-spacing:0.5px;box-shadow:0 4px 10px rgba(0,0,0,0.1);}
.course-thumb .tag.free{background:var(--success);}
.course-card-body{padding:24px;}
.course-card-body h4{font-size:16px;font-weight:800;margin-bottom:10px;color:var(--text);line-height:1.4;}
.course-card-body .meta{display:flex;align-items:center;gap:15px;font-size:12px;color:var(--text-muted);margin-bottom:15px;}
.course-card-body .meta i{color:var(--accent);font-size:14px;}
.progress-bar{background:var(--border);border-radius:100px;height:6px;margin-bottom:8px;overflow:hidden;}
.progress-fill{height:100%;border-radius:100px;background:var(--accent-gradient);transition:width .6s ease;}
.progress-label{font-size:11px;color:var(--text-muted);display:flex;justify-content:space-between;font-weight:600;}
.course-footer{padding:18px 24px;border-top:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;background:rgba(0,0,0,0.01);}
.price-tag{font-size:18px;font-weight:800;color:var(--primary);}
.price-tag .old{text-decoration:line-through;color:var(--text-muted);font-size:13px;font-weight:400;margin-left:6px;opacity:0.6;}

/* ─── BADGES ─── */
.badge{display:inline-flex;align-items:center;gap:5px;padding:4px 10px;border-radius:20px;font-size:11.5px;font-weight:600;}
.badge-orange{background:rgba(245,132,52,0.12);color:var(--accent);}
.badge-blue{background:rgba(59,130,246,0.12);color:var(--info);}
.badge-green{background:rgba(34,197,94,0.12);color:var(--success);}
.badge-red{background:rgba(239,68,68,0.12);color:var(--danger);}
.badge-purple{background:rgba(139,92,246,0.12);color:#8b5cf6;}
.badge-gray{background:var(--border);color:var(--text-muted);}

/* ─── TABLES ─── */
.table-wrap{overflow-x:auto;}
table{width:100%;border-collapse:collapse;}
th{padding:12px 16px;text-align:left;font-size:12px;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:.8px;border-bottom:2px solid var(--border);background:var(--bg);}
td{padding:13px 16px;font-size:13.5px;color:var(--text);border-bottom:1px solid var(--border);}
tr:hover td{background:rgba(245,132,52,0.04);}
.user-row{display:flex;align-items:center;gap:10px;}
.user-row .ava{width:32px;height:32px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;color:#fff;flex-shrink:0;}

/* ─── TOGGLE SWITCH ─── */
.toggle{position:relative;width:42px;height:22px;flex-shrink:0;}
.toggle input{opacity:0;width:0;height:0;}
.toggle-slider{position:absolute;inset:0;background:var(--border);border-radius:22px;cursor:pointer;transition:var(--transition);}
.toggle-slider:before{content:'';position:absolute;width:16px;height:16px;left:3px;top:3px;background:#fff;border-radius:50%;transition:var(--transition);}
.toggle input:checked + .toggle-slider{background:var(--accent);}
.toggle input:checked + .toggle-slider:before{transform:translateX(20px);}

/* ─── MODAL ─── */
.modal-overlay{position:fixed;inset:0;background:rgba(11,31,58,0.7);backdrop-filter:blur(4px);z-index:1000;display:none;align-items:center;justify-content:center;padding:20px;}
.modal-overlay.open{display:flex;}
.modal{background:var(--card);border-radius:20px;width:100%;max-width:560px;max-height:90vh;overflow-y:auto;box-shadow:var(--shadow-lg);animation:modalIn .25s ease;}
.modal-lg{max-width:760px;}
@keyframes modalIn{from{transform:scale(.94) translateY(12px);opacity:0}to{transform:scale(1) translateY(0);opacity:1}}
.modal-header{padding:22px 24px;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;}
.modal-header h3{font-size:18px;font-weight:700;}
.modal-close{width:32px;height:32px;border-radius:7px;background:var(--bg);color:var(--text-muted);display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:16px;border:1px solid var(--border);transition:var(--transition);}
.modal-close:hover{background:var(--danger);color:#fff;border-color:var(--danger);}
.modal-body{padding:24px;}
.modal-footer{padding:16px 24px;border-top:1px solid var(--border);display:flex;gap:10px;justify-content:flex-end;}

/* ─── QUIZ ─── */
.quiz-timer{display:flex;align-items:center;gap:8px;padding:10px 18px;background:rgba(239,68,68,.1);border-radius:9px;color:var(--danger);font-weight:700;font-size:15px;}
.quiz-q{font-size:16px;font-weight:600;margin-bottom:18px;line-height:1.6;color:var(--text);}
.quiz-options{display:flex;flex-direction:column;gap:10px;}
.quiz-opt{padding:13px 16px;border-radius:10px;border:2px solid var(--border);cursor:pointer;font-size:14px;transition:var(--transition);background:var(--card);}
.quiz-opt:hover{border-color:var(--accent);background:var(--accent-pale);}
.quiz-opt.selected{border-color:var(--accent);background:var(--accent-pale);color:var(--accent);font-weight:600;}
.quiz-opt.correct{border-color:var(--success);background:rgba(34,197,94,.1);color:var(--success);}
.quiz-opt.wrong{border-color:var(--danger);background:rgba(239,68,68,.08);color:var(--danger);}
.quiz-progress{display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;}

/* ─── CERTIFICATE ─── */
.cert-preview{background:linear-gradient(135deg,#0b1f3a 0%,#1a4080 100%);border-radius:16px;padding:40px;text-align:center;position:relative;overflow:hidden;border:3px solid var(--accent);}
.cert-preview::before{content:'';position:absolute;inset:8px;border:1px solid rgba(245,132,52,0.3);border-radius:12px;pointer-events:none;}
.cert-preview .cert-logo{font-size:36px;margin-bottom:12px;}
.cert-preview h2{color:#fff;font-size:14px;letter-spacing:3px;text-transform:uppercase;opacity:.7;margin-bottom:8px;}
.cert-preview h1{color:var(--accent);font-size:28px;font-weight:800;margin-bottom:6px;}
.cert-preview p{color:rgba(255,255,255,.7);font-size:13px;margin-bottom:14px;}
.cert-preview h3{color:#fff;font-size:20px;font-weight:700;margin-bottom:4px;}
.cert-preview .cert-course{color:var(--accent);font-size:16px;margin-bottom:20px;}
.cert-preview .cert-meta{display:flex;justify-content:space-around;margin-top:20px;padding-top:20px;border-top:1px solid rgba(255,255,255,.15);}
.cert-preview .cert-meta div{text-align:center;}
.cert-preview .cert-meta span{display:block;font-size:11px;color:rgba(255,255,255,.5);text-transform:uppercase;letter-spacing:1px;}
.cert-preview .cert-meta strong{color:#fff;font-size:13px;display:block;margin-top:4px;}
.qr-box{width:64px;height:64px;background:#fff;border-radius:8px;display:flex;align-items:center;justify-content:center;margin:12px auto 0;}
.qr-inner{width:48px;height:48px;background:repeating-linear-gradient(0deg,#0b1f3a 0px,#0b1f3a 3px,transparent 3px,transparent 6px),repeating-linear-gradient(90deg,#0b1f3a 0px,#0b1f3a 3px,transparent 3px,transparent 6px);border:3px solid #0b1f3a;}

/* ─── PAYMENT ─── */
.plan-cards{display:grid;grid-template-columns:1fr 1fr 1fr;gap:14px;margin-bottom:20px;}
.plan-card{border:2px solid var(--border);border-radius:13px;padding:20px;text-align:center;cursor:pointer;transition:var(--transition);}
.plan-card.popular{border-color:var(--accent);position:relative;}
.plan-card.popular::before{content:'POPULAR';position:absolute;top:-11px;left:50%;transform:translateX(-50%);background:var(--accent);color:#fff;font-size:10px;font-weight:800;padding:2px 10px;border-radius:20px;letter-spacing:1px;}
.plan-card.selected{border-color:var(--accent);background:var(--accent-pale);}
.plan-card h3{font-size:22px;font-weight:800;color:var(--text);margin:8px 0 4px;}
.plan-card p{font-size:12px;color:var(--text-muted);}
.plan-card .features{text-align:left;margin-top:12px;font-size:12px;color:var(--text-muted);}
.plan-card .features li{list-style:none;padding:3px 0;}
.plan-card .features li::before{content:'✓ ';color:var(--success);font-weight:700;}
.mpesa-btn{display:flex;align-items:center;gap:10px;width:100%;padding:14px;background:#00b050;border:none;border-radius:10px;color:#fff;font-size:14px;font-weight:700;cursor:pointer;margin-bottom:10px;transition:var(--transition);}
.mpesa-btn:hover{background:#009040;}
.mpesa-btn .logo{background:#fff;color:#00b050;border-radius:4px;padding:3px 7px;font-size:11px;font-weight:800;}

/* ─── AI CHATBOT ─── */
.chat-window{height:380px;overflow-y:auto;display:flex;flex-direction:column;gap:12px;padding:16px;}
.chat-msg{max-width:80%;animation:fadeUp .2s ease;}
@keyframes fadeUp{from{opacity:0;transform:translateY(8px)}to{opacity:1;transform:translateY(0)}}
.chat-msg.user{align-self:flex-end;}
.chat-bubble{padding:11px 15px;border-radius:14px;font-size:13.5px;line-height:1.6;}
.chat-msg.user .chat-bubble{background:var(--accent);color:#fff;border-bottom-right-radius:4px;}
.chat-msg.bot .chat-bubble{background:var(--bg);border:1px solid var(--border);color:var(--text);border-bottom-left-radius:4px;}
.chat-input-row{display:flex;gap:10px;padding:12px 16px;border-top:1px solid var(--border);}
.chat-input{flex:1;padding:10px 14px;border:1px solid var(--border);border-radius:10px;background:var(--bg);color:var(--text);font-size:13.5px;transition:var(--transition);}
.chat-input:focus{border-color:var(--accent);}
.chat-send{width:38px;height:38px;border-radius:9px;background:var(--accent);color:#fff;display:flex;align-items:center;justify-content:center;cursor:pointer;border:none;transition:var(--transition);}
.chat-send:hover{background:#e0722a;}
.ai-typing{display:flex;gap:4px;align-items:center;padding:10px 14px;}
.ai-typing span{width:7px;height:7px;border-radius:50%;background:var(--text-muted);animation:bounce .9s infinite;}
.ai-typing span:nth-child(2){animation-delay:.15s;}
.ai-typing span:nth-child(3){animation-delay:.3s;}
@keyframes bounce{0%,80%,100%{transform:scale(0)}40%{transform:scale(1)}}

/* ─── LEADERBOARD ─── */
.leader-item{display:flex;align-items:center;gap:14px;padding:13px 0;border-bottom:1px solid var(--border);}
.leader-item:last-child{border-bottom:none;}
.leader-rank{width:28px;height:28px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:800;flex-shrink:0;}
.rank-1{background:#FFD700;color:#7a5500;}
.rank-2{background:#C0C0C0;color:#555;}
.rank-3{background:#CD7F32;color:#fff;}
.rank-other{background:var(--bg);color:var(--text-muted);}
.leader-info{flex:1;}
.leader-info strong{display:block;font-size:14px;font-weight:600;}
.leader-info span{font-size:12px;color:var(--text-muted);}
.leader-pts{font-size:16px;font-weight:800;color:var(--accent);}

/* ─── GAMIFICATION ─── */
.badge-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;}
.game-badge{text-align:center;padding:18px 12px;border-radius:13px;border:2px solid var(--border);transition:var(--transition);cursor:pointer;}
.game-badge:hover{border-color:var(--accent);transform:translateY(-2px);}
.game-badge.earned{border-color:var(--accent);background:var(--accent-pale);}
.game-badge .icon{font-size:30px;margin-bottom:8px;}
.game-badge h4{font-size:13px;font-weight:700;margin-bottom:4px;}
.game-badge p{font-size:11px;color:var(--text-muted);}

/* ─── LIVE SESSION ─── */
.live-card{border-radius:13px;overflow:hidden;border:2px solid var(--border);transition:var(--transition);}
.live-card:hover{border-color:var(--accent);}
.live-header{padding:16px;background:linear-gradient(135deg,var(--primary),#1a4080);color:#fff;}
.live-dot{width:8px;height:8px;background:#ef4444;border-radius:50%;display:inline-block;margin-right:6px;animation:pulse 1.2s infinite;}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:.4}}
.live-body{padding:14px;}

/* ─── STREAK ─── */
.streak-days{display:flex;gap:8px;}
.streak-day{width:38px;height:38px;border-radius:9px;display:flex;flex-direction:column;align-items:center;justify-content:center;font-size:10px;font-weight:700;border:2px solid var(--border);}
.streak-day.done{background:var(--accent);border-color:var(--accent);color:#fff;}
.streak-day.today{border-color:var(--accent);color:var(--accent);}

/* ─── INBOX ─── */
.msg-list{display:flex;flex-direction:column;}
.msg-item{display:flex;align-items:flex-start;gap:12px;padding:14px;border-bottom:1px solid var(--border);cursor:pointer;transition:var(--transition);}
.msg-item:hover{background:var(--bg);}
.msg-item.unread{background:rgba(245,132,52,0.04);}
.msg-item.unread .msg-title{font-weight:700;}
.msg-ava{width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:15px;font-weight:700;color:#fff;flex-shrink:0;}
.msg-content{flex:1;}
.msg-title{font-size:14px;color:var(--text);}
.msg-preview{font-size:12.5px;color:var(--text-muted);margin-top:3px;}
.msg-time{font-size:11px;color:var(--text-muted);flex-shrink:0;}

/* ─── IP LOG ─── */
.ip-row{display:flex;align-items:center;gap:12px;padding:10px 0;border-bottom:1px solid var(--border);}
.ip-status{width:8px;height:8px;border-radius:50%;flex-shrink:0;}
.ip-status.ok{background:var(--success);}
.ip-status.warn{background:var(--warning);}
.ip-status.block{background:var(--danger);}

/* ─── ORG SWITCHER ─── */
.org-pills{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:20px;}
.org-pill{padding:8px 18px;border-radius:30px;border:2px solid var(--border);font-size:13px;font-weight:600;cursor:pointer;transition:var(--transition);display:flex;align-items:center;gap:8px;}
.org-pill.active{border-color:var(--accent);background:var(--accent-pale);color:var(--accent);}
.org-pill:hover{border-color:var(--accent);}

/* ─── SKILLS GAP ─── */
.skill-row{display:flex;align-items:center;gap:14px;margin-bottom:14px;}
.skill-label{width:160px;font-size:13px;font-weight:600;color:var(--text);}
.skill-bar{flex:1;height:8px;background:var(--border);border-radius:10px;overflow:hidden;}
.skill-fill{height:100%;border-radius:10px;transition:width .8s ease;}
.skill-pct{width:40px;text-align:right;font-size:12px;font-weight:700;}
.skill-fill.low{background:var(--danger);}
.skill-fill.mid{background:var(--warning);}
.skill-fill.high{background:var(--success);}

/* ─── FORM STYLES ─── */
.form-group{margin-bottom:18px;}
.form-group label{display:block;font-size:13px;font-weight:600;color:var(--text);margin-bottom:7px;}
.form-control{width:100%;padding:11px 14px;border:1.5px solid var(--border);border-radius:9px;background:var(--bg);color:var(--text);font-size:13.5px;transition:var(--transition);}
.form-control:focus{border-color:var(--accent);background:var(--card);}
.form-control::placeholder{color:var(--text-muted);}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px;}
.upload-zone{border:2px dashed var(--border);border-radius:12px;padding:32px;text-align:center;cursor:pointer;transition:var(--transition);}
.upload-zone:hover{border-color:var(--accent);background:var(--accent-pale);}
.upload-zone i{font-size:32px;color:var(--text-muted);margin-bottom:10px;}
.upload-zone p{font-size:13px;color:var(--text-muted);}

/* ─── NOTIFICATION ─── */
.toast{position:fixed;bottom:24px;right:24px;background:var(--primary);color:#fff;padding:14px 20px;border-radius:12px;font-size:14px;display:flex;align-items:center;gap:10px;z-index:9999;box-shadow:var(--shadow-lg);animation:slideIn .3s ease;max-width:340px;}
@keyframes slideIn{from{transform:translateX(100%);opacity:0}to{transform:translateX(0);opacity:1}}
.toast i{font-size:16px;color:var(--accent);}

/* ─── COUPON ─── */
.coupon-box{display:flex;gap:10px;align-items:center;}
.coupon-input{flex:1;padding:10px 14px;border:1.5px dashed var(--border);border-radius:9px;background:var(--bg);color:var(--text);font-size:13.5px;font-family:monospace;letter-spacing:2px;transition:var(--transition);}
.coupon-input:focus{border-color:var(--accent);}
.coupon-input.valid{border-color:var(--success);color:var(--success);}

/* ─── LOADING BAR ─── */
.top-loader{position:fixed;top:0;left:0;height:3px;background:var(--accent);z-index:99999;transition:width .3s ease;width:0;}

/* ─── SECTION HEADER ─── */
.section-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:22px;}
.section-header h2{font-size:22px;font-weight:800;color:var(--text);}
.section-header p{font-size:13px;color:var(--text-muted);margin-top:2px;}

/* ─── INFO BOX ─── */
.info-box{border-radius:12px;padding:16px 18px;display:flex;gap:12px;align-items:flex-start;margin-bottom:16px;}
.info-box.info{background:rgba(59,130,246,0.08);border:1px solid rgba(59,130,246,0.2);}
.info-box.warning{background:rgba(245,158,11,0.08);border:1px solid rgba(245,158,11,0.2);}
.info-box.success{background:rgba(34,197,94,0.08);border:1px solid rgba(34,197,94,0.2);}
.info-box i{font-size:16px;margin-top:2px;}
.info-box.info i{color:var(--info);}
.info-box.warning i{color:var(--warning);}
.info-box.success i{color:var(--success);}
.info-box p{font-size:13px;color:var(--text);}

/* ─── RECOMMENDATIONS ─── */
.rec-card{background:linear-gradient(135deg,var(--primary),#1a4080);border-radius:14px;padding:20px;color:#fff;display:flex;align-items:center;gap:14px;margin-bottom:16px;}
.rec-card i{font-size:28px;color:var(--accent);}
.rec-card h4{font-size:15px;font-weight:700;margin-bottom:4px;}
.rec-card p{font-size:13px;opacity:.75;}
.rec-card .btn-outline{border-color:rgba(255,255,255,.4);color:#fff;margin-top:10px;}
.rec-card .btn-outline:hover{background:var(--accent);border-color:var(--accent);}

/* ─── RESOURCE CARDS ─── */
.resource-item{display:flex;align-items:center;gap:14px;padding:13px;border:1px solid var(--border);border-radius:11px;margin-bottom:10px;transition:var(--transition);cursor:pointer;}
.resource-item:hover{border-color:var(--accent);background:var(--accent-pale);}
.resource-icon{width:42px;height:42px;border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:18px;flex-shrink:0;}
.resource-info{flex:1;}
.resource-info h4{font-size:13.5px;font-weight:600;}
.resource-info p{font-size:12px;color:var(--text-muted);}
.resource-size{font-size:12px;color:var(--text-muted);flex-shrink:0;}

/* ─── RESPONSIVE ─── */
@media (max-width:1200px){
  .stats-grid{grid-template-columns:repeat(2, 1fr);}
  .course-grid{grid-template-columns:repeat(2, 1fr);}
  .grid-4{grid-template-columns:repeat(2, 1fr);}
}
@media (max-width:992px){
  :root { --sidebar-width: 240px; }
}
@media (max-width:768px){
  .sidebar{transform:translateX(-100%); width: 280px; z-index: 1000;}
  .sidebar.open{transform:translateX(0);}
  .main-wrap{margin-left:0 !important;}
  .menu-btn{display:flex !important;}
  .sidebar-overlay{display:none; position:fixed; inset:0; background:rgba(11,31,58,.5); z-index:99; backdrop-filter:blur(2px);}
  .stats-grid{grid-template-columns: 1fr;}
  .course-grid{grid-template-columns: 1fr;}
  .grid-2, .grid-3{grid-template-columns: 1fr;}
  .search-bar{display: none;}
  .topbar{padding:0 14px;}
  .content{padding:16px;}
  .page-title{font-size: 16px;}
}
@media (max-width:480px){
  .topbar-right .profile-chip span { display: none; }
  .topbar-right .icon-btn:nth-child(2) { display: none; }
  .section-header{flex-direction: column; align-items: flex-start; gap: 12px;}
  .section-header button { width: 100%; }
  .auth-box { padding: 32px 24px; }
}
.sidebar-overlay{display:none;position:fixed;inset:0;background:rgba(11,31,58,.5);z-index:99;backdrop-filter:blur(2px);}
